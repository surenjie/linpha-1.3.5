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
* Store general config options
*
* This file stores all the general options into linpha_config table
* (layout/features/performance)
*
* @package configuration
* @subpackage configuration_storage
*/

if(!defined('TOP_DIR')) { define('TOP_DIR','..'); }

include_once(TOP_DIR.'/include/session.php');
include_once(TOP_DIR.'/include/phpmeta/Unicode.php');

if(!$passed OR !in_group('admin'))
{
	die(STR_ACCESS_DENIED);
}

if($_POST['job']=="layout")
{
/**
* write changes to config (layout options)
*/
if(get_magic_quotes_gpc())
{
    $_POST['photo_archive_title'] = stripslashes($_POST['photo_archive_title']);
}
update_config(smart_htmlspecialchars($_POST['photo_archive_title'], ENT_QUOTES), "photo_archive_title");
update_config($_POST['num_columns'], "photos_col");
update_config($_POST['num_rows'], "photos_row");
update_config($_POST['width'], "photo_width");
update_config($_POST['height'], "photo_height");
update_config($_POST['theme_style'], "style");
update_config($_POST['thumb_size'], "thumb_size");
update_config($_POST['thumb_order'], "sort_thumbs");

update_config($_POST['exifinfo_on_off'], "exifinfo");

if(isset($_POST['exif_def_on_off'])): 
update_config($_POST['exif_def_on_off'], "exif_default"); endif;

if(isset($_POST['exif_level'])):
update_config($_POST["exif_level"], "exif_level"); endif;

update_config($_POST['iptcinfo'], "iptcinfo");

if(isset($_POST['iptc_level'])): 
update_config($_POST['iptc_level'], "iptc_level"); endif;

update_config($_POST['filename_on_off'], "filenames");
update_config($_POST['counterstat_on_off'], "counterstat");
update_config($_POST['mini_img_preview'], "mini_img_preview");
update_config($_POST['random_index_image'], "random_index_image");

if(isset($_POST['random_image_size'])):
update_config($_POST["random_image_size"], "random_image_size");endif;

update_config($_POST['timer_on_off'], "timer");
update_config($_POST['navigation_on_off'], "navigation_view");
update_config($_POST['comments_in_subfolder_on_off'], "show_comments_in_subfolder");
update_config($_POST['default_date_format'], "default_date_format");
update_config($_POST['default_time_format'], "default_time_format");
update_config($_POST['thumb_border'], "thumb_border");
update_config($_POST['thumb_border_color'], "thumb_border_color");

}
elseif($_POST['job']=="features")
{
/**
* write changes to config (feature options)
*/
update_config($_POST['language'], "lang");
update_config($_POST['autolang_on_off'], "autolang");
update_config($_POST['alb_download_limit'], "alb_download_limit");
update_config($_POST['block_time'], "ip_blocking");
update_config($_POST['ignored_files'], "files_2_ignore");
update_config($_POST['ignored_fileext'], "fileext_2_ignore");
update_config($_POST['exif_rotation_on_off'], "exif_image_autorotate");
update_config($_POST['rotation_on_off'], "img_rotation");
update_config($_POST['slide_on_off'], "slideshow");
update_config($_POST['autologin_on_off'], "autologin");
update_config($_POST['showNewImagesFolder'], "showNewImagesFolder");

if(isset($_POST['showNewImagesFolderDays'])): 
update_config($_POST['showNewImagesFolderDays'], "showNewImagesFolderDays"); endif;

update_config($_POST['mail_mode_max_size'], "mail_mode_max_size");
update_config($_POST['update_notice'], "update_notice");
}
elseif($_POST['job']=="perform")
{
/**
* write changes to config (performance options)
*/
update_config($_POST['autoconf_on_off'], "autoconf");
update_config($_POST['video_thumbnail'], "video_thumbnail");
update_config($_POST['adodb_caching'], "adodb_caching");
update_config($_POST['adodb_cache_time'], "adodb_cache_time");
update_config($_POST['adodb_cache_path'], "adodb_cache_path");
update_config($_POST['img_quality'], "img_quality");

if(isset($_POST['quality_high_low'])):
update_config($_POST['quality_high_low'], "thumb_quality"); endif;

}
else
{
	echo "Unknown job received";
}

/**
* redirect to admin.php 
*/
header ("Location: ".TOP_DIR."/admin.php?redirector=general&page=general&job=".$_POST['job']);
?>
