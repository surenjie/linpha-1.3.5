<?php
/*
* Copyright (c) 2004 Heiko Rutenbeck <bzrudi@tuxpower.de>
*
* This program is free software; you can redistribute it and/or modify
* it under the terms of the GNU General Public License as published by
* the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU General Public License for more details.
*
* You should have received a copy of the GNU General Public License
* along with this program; if not, write to the Free Software
* Foundation, Inc., 675 Mass Ave, Cambridge, MA 02139, USA.
*/

/**
* File to create mail with image attachementes
* 
* with the mail() function we have to read the whole email with all images in a
* variable and passed to mail() -> not possible to send big mails (memory limit)
* maybe we should use not mail(), but a script which use fsockopen()
*/

if(!defined('TOP_DIR')) { define('TOP_DIR','..'); }

include_once(TOP_DIR.'/include/session.php');
start_timer('linpha');
include_once(language_file());
include_once(TOP_DIR.'/plugins/cache/func.cache.php');

/**
* overhead of memory used more than only the filesize of the images
* overhead of base64 is 33%, need at least 50% because we have some other data too...
*/
$overhead = 1.50;
$overhead_base64 = 4/3;
$tot_filesize = 0;
$at_least_one_image = false;
$max_mail_size = read_config('mail_mode_max_size');

if(($mem_limit = get_mem_limit()) === false)
{
    $no_mem_limit = true;
}
else
{
    $no_mem_limit = false;
    $mem_limit = $mem_limit*1024*1024;
}

function get_available_mem()
{
	global $mem_limit;

	if(function_exists('memory_get_usage'))	// we need php > 4.3.2
	{
		$available_mem = $mem_limit - memory_get_usage();
	}
	else
	{
		$available_mem = $mem_limit - 1024*1024*2;	// average value
	}
	
	return $available_mem;
}

if(!isset($_POST['img_id']))
{
	$error_mail = 1;
}

if( empty($_POST['mail_address']) OR empty($_POST['sender_address']) OR empty($_POST['subject']) )
{
	$error_mail = 4;
}

if(!isset($error_mail))
{
	basket_check_permissions('basket_mail');
	
	/**
	* create new tmp folder
	*/
	$tmp_dir = read_config('tmp_dir');
	for($i=0;  file_exists(get_full_path($tmp_dir).'/mail_'.session_id().'_'.$i);  $i++) { }
	$tmp_folder = get_full_path($tmp_dir).'/mail_'.session_id().'_'.$i;
	mkdir($tmp_folder,0700);

	/**
	* create temporary folder containing all images
	*/
	while(list($key, $image_id) = each($_POST['img_id']))
	{
		/**
		* just ignore videos (level = '0')
		*/
		$sql = sql_query_str(
			array('filename','prev_path','id'),
			P.".id='".linpha_addslashes($image_id)."' AND ".P.".level = '0'",
			$order_by='',
			$additional_tables=Array()
			);
		$query_img_info = $GLOBALS['db']->Execute($sql);
		if($query_img_info->RecordCount()==1)
		{
			$at_least_one_image = true;
			
			$image_data = $query_img_info->FetchRow(ADODB_FETCH_ASSOC);
			
			$src_file = TOP_DIR.'/'.$image_data['prev_path'].'/'.$image_data['filename'];
			$output = $tmp_folder.'/'.$image_data['id'].'.jpg';
			$q=read_config('img_quality');

			/**
			* calc the right size
			*/
			list($org_width,$org_height,$org_type) = linpha_getimagesize($src_file);
			$max_width = read_config("photo_width");
			$max_height = read_config("photo_height");
			
			$array = scale_to_fit($org_height,$org_width,$max_height,$max_width,1);
			$w = $array['w'];
			$h = $array['h'];
            
			if(need_watermark($image_data['id'])) {
				$watermark = 1;
			} else {
				$watermark = '';
			}
			$rotate='';
			
			$found_in_cache = false;
			if(read_plugins_config('cache'))
			{
				$cache_filename = build_cache_filename($image_data['id'],$q,$h,$w,$rotate,$watermark);
				$cache_filename = get_full_path($cache_filename);
				if(file_exists( $cache_filename ) && filesize($cache_filename) > 0) {
					$found_in_cache = true;
				}
			}
			
			if($found_in_cache)
			{
				copy($cache_filename,$output);
			}
			else
			{
                /**
                 * warning: session will be closed!
                 * double warning: we will include basket.php again
                 * $_SESSION is needed again
                 */
				convert_image($src_file,$output,$q,$h,$w,$rotate,$watermark,$type='');
			}
			
			$tot_filesize += filesize($output);
		}
	}
	
	/**
	* check if there were only videos
	*/
	if(!$at_least_one_image)
	{
		$error_mail = 1;	
	}
	
	/**
	* check if filesize is too big
	*/
	if(!isset($error_mail) &&
	 	(($tot_filesize*$overhead_base64) > $max_mail_size ) // only overhead of base64 (33%)
        OR 
        ( !$no_mem_limit AND ($tot_filesize * $overhead) > get_available_mem()))	
	{
		$error_mail = 3;
		
		/**
		* but still delete images
		*/
		$d = dir($tmp_folder);
		while (false !== ($entry = $d->read()))
		{
			if($entry != '.' && $entry != '..')
			{
				unlink($tmp_folder.'/'.$entry);
			}
		}
		
		/**
		* delete temporary folder
		*/
		rmdir($tmp_folder);
	}
	
	if(!isset($error_mail))
	{
		require(TOP_DIR.'/include/class.phpmailer.php');
		
		$mail = new PHPMailer();
	
		$mail->IsSmtp();
		$mail->Host     = "localhost";
		$mail->From = $_POST['sender_address'];
		$mail->FromName = $_POST['sender_address'];	// otherwise, a default name like "Root User" is taken
		$mail->AddAddress($_POST['mail_address']);		
		$mail->Subject = $_POST['subject'];
		$mail->Body = $_POST['text_message'];
		
		$d = dir($tmp_folder);
		while (false !== ($entry = $d->read()))
		{
			if($entry != '.' && $entry != '..')
			{
				if($_POST['mail_mode'] == "txt")
				{
					$handle = fopen($tmp_folder.'/'.$entry,"rb");
					$file_content = fread( $handle, filesize( $tmp_folder.'/'.$entry ) );
					fclose($handle);
		
					$mail->AddStringAttachment("$file_content", "$entry");
	
					unlink($tmp_folder.'/'.$entry);
					$ishtml = false;
				}
				else
				{
					$image_filename = "$tmp_folder/$entry";
					
					$mail->AddAttachment("$image_filename", "$entry", "base64", "image/jpeg");
					
					/**
					 * We have to delete tmp files later, as AddAttachment() 
					 * just adds a reference to the images and unlink would delete 
					 * them before they were send out... 
					 */
					$files[] = $image_filename; 
					$ishtml = true;
				}
			}
		}
		$d->close();
	
		if($ishtml)
		{
			$mail->IsHTML(true);
		}
		
		if(!$mail->Send())
		{
			$error_mail = 2;
		}
		$mail->ClearAddresses();	
		$mail->ClearAttachments();
		
		/**
		* delete temporary folder
		*/
		if($ishtml)
		{		
			foreach($files as $filename)
			{
				unlink($filename);
			}
		}		
		rmdir($tmp_folder);
	}
}

if(!isset($error_mail)) {
	$error_mail=0;
}

/**
 * save some values in session because we need it on the next page again...
 */
$_SESSION['sender_address'] = $_POST['sender_address'];
$_SESSION['mail_address'] = $_POST['mail_address'];		
$_SESSION['subject'] = $_POST['subject'];
$_SESSION['text_message'] = $_POST['text_message'];
$_SESSION['tot_filesize'] = $tot_filesize;
$_SESSION['overhead_base64'] = $overhead_base64;
$_SESSION['mail_mode'] = $_POST['mail_mode'];


$link = TOP_DIR.'/'.base64_decode($_POST['link_address'])."&job=".$_POST['job']."&pn=".$_POST['pn']."&error_mail=".$error_mail;
header("Location: ".$link);

?>
