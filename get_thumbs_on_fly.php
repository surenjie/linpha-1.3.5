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

if(!defined('TOP_DIR')) { define('TOP_DIR','.'); }

include_once(TOP_DIR.'/include/session.php');

$query=$GLOBALS['db']->Execute(sql_query_str(array('prev_path','filename','md5sum'),PREFIX."photos.id='".linpha_addslashes($_GET['imgid'])."'"));
$album_info=$query->FetchRow(ADODB_FETCH_ASSOC);

$prev_path = $album_info['prev_path'];
$filename = $album_info['filename'];
$md5sum = $album_info['md5sum'];

$src_file=$prev_path."/".$filename;


// security, take care of "../" in src_file
// this security check could be removed, because we work now with id's
if(strpos($src_file, "../") !== false) { // someone is trying to hack us!
	echo "<h1>bad fun isn't it :-)</h1>";
	exit(1);
}

if(empty($filename)) {
    exit(1);
}

$nw = intval($_GET['nw']);
$nh = intval($_GET['nh']);

// For slideshow, only reduce but not stretch
if(isset($_GET['slideshow'])) {
	list($org_width,$org_height,$org_type) = linpha_getimagesize("$src_file");

	$array = scale_to_fit($org_height,$org_width,$nh,$nw,1);	// 1 = no increase
	$nw = $array['w'];
	$nh = $array['h'];
    
    /**
     * only count images for slideshow, the other images are counted by
     * img_view.class.php
     * 
     * why not count all in get_thumbs_on_fly.php?
     * - this would include:benchmark, edit watermark, panorama/resized view,
     * print
     * - but we could see if the image is linked from another page
     * - ?
     * 
     */
    $update = $GLOBALS['db']->Execute("UPDATE ".PREFIX."photos SET res=res+1, date=date WHERE id='".linpha_addslashes($_GET['imgid'])."'");
    include_once(TOP_DIR.'/plugins/stats/stats.class.php');
    linStats('view',$md5sum);
}

/**
* rotate image for printing
*/
if(isset($_GET['rotate']) && !empty($_GET['rotate'])) {
	$rotate = 90;
} else {
	$rotate = '';
}

/**
 * rotate images using EXIF tag depending on config setting (enabled/disabled)
 */
if(read_config('exif_image_autorotate'))
{
	$info_rotate = $GLOBALS['db']->Execute("SELECT rotation " .
					"FROM ".PREFIX."photos " .
					"WHERE md5sum='".$md5sum."'");
    $d2r = $info_rotate->FetchRow();
    $degrees2rotate = $d2r[0];
    	
    if( $degrees2rotate <> "0" && $degrees2rotate != "180")
    {
    	/**
     	/* flipflop ;-)
     	 */
    	$nh = intval($_GET['nw']);
		$nw = intval($_GET['nh']);
		$rotate = $degrees2rotate;
    }
} 

/**
* quality
*/
if(isset($_GET['quality']) && $_GET['quality']>0 && $_GET['quality']<=100) {
	$img_quality = intval($_GET['quality']);
} else {
	$img_quality=read_config('img_quality');
}

/**
* select converting tool (only for benchmark)
*/
if(isset($_GET['type']) && ($_GET['type']=="convert" OR $_GET['type']=="gd" OR $_GET['type']=="gdhigh")) {
	$type = $_GET['type'];
} else {
	$type = '';	// it will be set in convert_image() to whatever it has to be
}

/**
* watermark
* only if its activated or 'use_wm' is set
*/
if(need_watermark($_GET['imgid']) OR isset($_GET['use_wm'])) {
	$watermark = 1;
} else {
	$watermark = '';
}

/**
* fullsize
* only for image_resized_view.php
*/
if(isset($_GET['fullsize']) && (!$watermark))
{
    image_file_to_screen($src_file);
}
elseif(read_plugins_config('cache') && !isset($_GET['use_wm'])) // prevent caching for images in watermark config
{
    include_once(TOP_DIR.'/plugins/cache/func.cache.php');

    $file_output = create_cached_image_if_not_exists($_GET['imgid'],$src_file, $img_quality, $nh, $nw, $rotate, $watermark, $type,$increment_count_on_hit=1);
    photo_cache_cleanup_size();
    image_file_to_screen($file_output);
}
else	// caching disabled
{
	$output = '';	// output to screen, not to file
    /**
     * warning: session will be closed!
     */
	convert_image($src_file, $output, $img_quality, $nh, $nw, $rotate, $watermark, $type);
}

?>
