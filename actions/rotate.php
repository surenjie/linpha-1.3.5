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

if($passed && isset($_GET['rotate']) && read_config('img_rotation'))
{
	$query = $GLOBALS['db']->Execute("SELECT prev_path, name, filename, date, md5sum ".
		"FROM ".PREFIX."photos WHERE id='".linpha_addslashes($_GET['imgid'])."'");
	$album_info=$query->FetchRow(ADODB_FETCH_ASSOC);
	
	$prev_path=$album_info['prev_path'];
	$name=$album_info['name'];
	$filename=$album_info['filename'];
	$img2rotate = TOP_DIR.'/'.$prev_path.'/'.$filename;
    
    linpha_log('thumbnail','notice','Rotating image: '.$img2rotate.' '.$_GET['rotate']);
	
	/**
	* get current image filetime and md5sum from DB. we will restore it later after the
	* rotated thumb is written in DB. This prevents img_view.php to display the
	* rotated image always as a "new" first entry if order by is date
	*/
	$old_img_date = $album_info['date'];
	$old_img_md5sum = $album_info['md5sum'];
	
	/**
	* get convert variables
	*/
	$use_convert = read_config('use_convert');

	//if($use_convert) {	// with convert, left means '-90'; with gd, left means '+90'
		if($_GET['rotate']=="left") {
			$rotate = -90;
		} elseif($_GET['rotate']=="right") {
			$rotate = 90;
		} else {
			$rotate = $_GET['rotate'];
		}
	/*} else {
		if($_GET['rotate']=="left") {
			$rotate = 90;
		} elseif($_GET['rotate']=="right") {
			$rotate = -90;
		} else {
			$rotate = $_GET['rotate'];
		}
	}*/

	// things are easy if we have convert ;-)
	if($use_convert)
	{
		$convert_path = read_config('convert_path');
		$full_convert_path = $convert_path."convert";
        
        /**
         * close session
         */
        linpha_session_write_close();
		$left_turn = exec($full_convert_path.' -rotate '.$rotate.' '.escape_string($img2rotate).' '.escape_string($img2rotate));
	}
	else
	{ // make use of GD lib
		prepare_gd_rotate_image($img2rotate, $rotate);
	}
	

	// Create new thumbnail
	make_thumb($_GET['imgid']);

	/**
	 * update new md5 in tables linpha_photos, linpha_image_comment
	 */
	$md5sum = get_file_md5sum($img2rotate);
	$update_md5 = $GLOBALS['db']->Execute("UPDATE ".PREFIX."photos ".
						"SET md5sum = '".$md5sum."' ".
						"WHERE md5sum = '".$old_img_md5sum."'");

	$update_md5 = $GLOBALS['db']->Execute("UPDATE ".PREFIX."image_comments ".
						"SET md5sum = '".$md5sum."' ".
						"WHERE md5sum = '".$old_img_md5sum."'");
	
	/**
	 * Delete old exif informations, don't read exif information as they are
	 * read automatically while displaying image
	 * Don't run query if exifinfo is disabled to prevent SQL errors
	 */
	if(read_config('exifinfo'))
	{ 
		$del = $GLOBALS['db']->Execute("DELETE " .
				"FROM ".PREFIX."meta_exif " .
				"WHERE md5sum = '".$old_img_md5sum."'");
	}

	/**
	* @todo  set the time of the rotated file back with the touch() function!
	* check if touch() works also under windows, place the touch() function
	* before make_thumbs() !
	*/

	
	// restore old image mtime in DB to prevent trouble with image sorting and displaying if order is == date
	$restore_mtime=$GLOBALS['db']->Execute("UPDATE ".PREFIX."photos ".
						"SET date='".$old_img_date."' ".
						"WHERE name='".linpha_addslashes($name)."' ".
						"AND prev_path='".linpha_addslashes($prev_path)."' ".
						"AND filename='".linpha_addslashes($filename)."'");

	// delete cached images
	include_once(TOP_DIR.'/plugins/cache/func.cache.php');
	photo_cache_cleanup_by_id($_GET['imgid']);
}

Header("Location: ".TOP_DIR."/".base64_decode($_GET['ref'])."&imgid=".$_GET['imgid']);
?>
