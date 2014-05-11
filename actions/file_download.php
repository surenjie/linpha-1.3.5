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

if(!defined('TOP_DIR')) { define('TOP_DIR','..'); }

include_once(TOP_DIR.'/include/session.php');

/**
* get file infos
*/
$sql = sql_query_str(
	array('filename','prev_path','md5sum'),
	P.".id='".linpha_addslashes($_GET['imgid'])."'",
	$order_by='',
	$additional_tables=Array()
	);

$query = $GLOBALS['db']->Execute($sql);

/**
* security
*
* sql_query_str() returns no result if we are not allowed to view the image
*/
if($query->RecordCount() != 1)
{
	include(language_file());
	echo STR_ACCESS_DENIED;
	exit(1);
}

$data = $query->FetchRow(ADODB_FETCH_ASSOC);

$filename = $data['filename'];
$src_file = TOP_DIR.'/'.$data['prev_path'].'/'.$data['filename'];
$md5sum = $data['md5sum'];
$ext = get_fileext_from_path($filename);

list($w,$h,$org_type) = linpha_getimagesize($src_file);

/**
* allow if is_video(), if you want to view the video, you have to download it...
* called from img_view.php
*/
//if( read_config('anon_download') OR $passed OR is_video($org_type) )
if( check_permissions('download',$_GET['imgid']) OR is_video($org_type))
{
	/**
    * count downloads
    *
	* set date too because otherwise mysql would update it to the current date...
    * cannot use SET downloads = downloads+1 because downloads is default NULL
	*/
    /**
     * do not count video views as downloads
     * append &ignore=true in img_view.class.php to prevent counting
    */
    
    if(!isset($_GET['ignore'])): $_GET['ignore'] = false; endif;
    
    if($_GET['ignore'] == false)
    {
    	$query = $GLOBALS['db']->Execute("SELECT downloads, date FROM ".PREFIX."photos " .
    			"WHERE md5sum='".$md5sum."'");
    	$data = $query->FetchRow();
    	$downloads = $data[0]+1;
    
    	$write_downloads=$GLOBALS['db']->Execute("UPDATE ".PREFIX."photos ".
        	"SET downloads='".$downloads."', date='".$data[1]."' " .
        	"WHERE md5sum='".$md5sum."'");

		include_once(TOP_DIR.'/plugins/stats/stats.class.php');
		linStats('download',$md5sum);
    
    }

	/**
	* Watermark stuff
	*
	* if watermark is enabled (and it is a valid image), don't download the original image,
	* but download a watermarked image
	*/
	if(need_watermark($_GET['imgid']) && is_supported_image($org_type))
	{
		$q = read_config("img_quality");
	
		// create tmp file
		$output = linpha_tempnam($filename,'.jpg');
        
        /**
         * if we are downloading a tiff file with a watermark we get
         * automatically a jpg file
         */
        if($ext!="jpg")
        {
            $filename .= ".jpg";
            $ext = "jpg";
        }
	
		// create the new image
        /**
         * warning: session will be closed!
         */
		convert_image($src_file, $output, $q, $h, $w, $rotate='', $watermark=1, $type=''/*, $border=''*/);
		$src_file = $output;
		$del_src_file_after_download = true;
	}
	
	/**
	 * disable zlib compression to avoid broken archives
	 */
	@ini_set ('zlib.output_compression', 'Off');
	
	$ctype = get_mime_by_ext($ext);
	header("Pragma: public");
	header("Expires: 0");
	header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
	header("Content-Type: $ctype");
	
	$user_agent = @strtolower($_SERVER["HTTP_USER_AGENT"]);
	
	/**
     * removed this browser switch as it makes problem with ie6 and tiff files
     * see http://sourceforge.net/tracker/index.php?func=detail&aid=999178&group_id=64772&atid=508614
     * 
     * if ((is_integer (strpos($user_agent, "msie"))) && (is_integer (strpos($user_agent, "win")))) {
		header( "Content-Disposition: filename=".$filename.";" );
	} else {*/
		header( "Content-Disposition: attachment; filename=".$filename.";" );
	/*}*/
	
	header("Content-Transfer-Encoding: binary");
	header("Content-Length: ".filesize($src_file));
	readfile($src_file);
	
	if(isset($del_src_file_after_download)) {	// Watermark...
		unlink($output);
	}
}

?>
