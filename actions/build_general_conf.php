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
* The settings pages in admin section
*
* This file builds the general config pages (layout/features/performance)
* in admin section...
*
* @package configuration
* @subpackage layout_features_performance
*/

if(!defined('TOP_DIR')) { define('TOP_DIR','..'); }
 
/**
* get config data from DB
*/
$result = $GLOBALS['db']->Execute("SELECT option_name, option_value FROM ".PREFIX."config");
while($row = $result->FetchRow()) {
	$config[$row[0]] = $row[1];
}

/**
* This part formats the "layout settings" page in admin section
*
* @subpackage layout_settings
*/
if(!isset($_GET['job'])): $_GET['job'] = "layout";endif;

	echo "<form name=layout method=POST action=actions/submit_general_changes.php>";
	echo "<table class='admintable' width='100%' cellspacing='0'>";

if($_GET['job']=="layout")
{
	echo "<tr><th class='maintable' colspan='4' style='height: 25px;'>".$layout."</th></tr>";
	echo "<tr><td class='adminalternate' colspan='4'><b>".$href_general_conf.":</b></td></tr>";
	
	/**
	* LinPHA album title
	*/
	print_textfield($general_album_title,'photo_archive_title',$config['photo_archive_title'],$general_album_title_info,'albumtitle','100%');

	/**
	* LinPHA theme selector
	*/
	$all_themes = get_linpha_themes();
	print_select($general_theme,'theme_style',$config['style'],$all_themes,$general_theme_info,'theme', '100');

	/**
	* thumbnails layout (rows/cols) settings
	*/
	echo "<tr><td class='adminalternate' colspan='4'><b>".$general_thumbnail_view.":</b></td></tr>";
	print_textfield($general_photos_col,'num_columns',$config['photos_col'],$general_photos_col_info,'photoscol','100');
	print_textfield($general_photos_row,'num_rows',$config['photos_row'],$general_photos_row_info,'photosrow','100');
	
	/**
	* thumbnail size selector
	*/
	print_select($general_thumb_size,'thumb_size',$config['thumb_size'].' pixel',
		Array("90" => "90 pixel", "120" => "120 pixel", "150" =>"150 pixel"),
		$general_thumb_size_info,'thumbsize', '100');

	/**
	* thumb border size and color
	*/
	
	/* on/off (convert only feature)
	if($config['use_convert'])
	{
		print_radio($general_thumb_border,'thumbborder_on_off',$config['thumb_border'],$general_thumb_border_info,'thumbborder');
	}*/
	//print_entry('text','thumb_border');
	print_textfield($general_thumb_border,'thumb_border',$config['thumb_border'],$general_thumb_border_info,'thumbborder','100');
	print_textfield($general_thumb_border_color,'thumb_border_color',$config['thumb_border_color'],$general_thumb_border_color_info,'wm_color','100');
	//print_entry('text','thumb_border_color');
	
	/**
	* order thumbs by date/filename...
	*/
	print_select($general_thumb_order,'thumb_order',$config['sort_thumbs'],
		Array("file" => "$thumb_order_file &uarr;", "filedesc" => "$thumb_order_file &darr;","date" => "$thumb_order_date &darr;", "dateasc" => "$thumb_order_date &uarr;"),
		$general_thumb_order_info,'thumborder', '100');

	/**
	* show filenames under thumbs
	*/
	print_radio($general_filename,'filename_on_off',$config['filenames'],$general_filename_info,'filename');

	/**
	* enable/disable navigation
	*/
	print_radio($general_navigation,'navigation_on_off',$config['navigation_view'],$general_navigation_info,'navigation');

	/**
	* enable/disable album comments in subfolder preview
	*/
	print_radio($general_comment_in_subfolder,'comments_in_subfolder_on_off',$config['show_comments_in_subfolder'],$general_comment_in_subfolder_info,'comment_in_subfolder');


	/**
	* Image view 
	*/
	echo "<tr><td class='adminalternate' colspan='4'><b>".$general_image_view.":</b></td></tr>";
	print_textfield($general_photos_width,'width',$config['photo_width'],$general_photos_width_info,'photoswidth','100');
	print_textfield($general_photos_height,'height',$config['photo_height'],$general_photos_height_info,'photosheight','100');

	/**
	* next/previous button image size
	*/
	print_select($general_mini_preview,'mini_img_preview',$config['mini_img_preview'],
			Array("off" => "".$button_off_msg."", "default" => "".$exif_medium."",
			"large" => "".$large.""), $general_mini_preview_info, 'miniprev', '100');

    echo "<tr><td class='adminalternate' colspan='4'>&nbsp;&nbsp;- Exif/Iptc:</td></tr>";

	/**
	* Exif global enable/disable
	*/
	print_radio($general_exifinfo,'exifinfo_on_off',$config['exifinfo'],$general_exifinfo_info,'exifonoff');

    if(read_config('exifinfo')){
	/**
	* EXIF info on/off by default (exif is always displayed in img_view.php)
	*/
	print_radio($general_exifdefault,'exif_def_on_off',$config['exif_default'],$general_exifdefault_info,'exifdefault');

	/**
	* level of EXIF information
	*/
	print_select($general_exiflevel,'exif_level',$config['exif_level'],
		Array("low" => $exif_low, "medium" => $exif_medium, "high" => $exif_high),
		$general_exiflevel_info,'exiflevel', '100');
    }
    
    /**
     * Iptc global enable/disable
     */
    $general_iptcinfo = str_replace('EXIF','IPTC',$general_exifinfo);
    $general_iptcinfo_info = str_replace('EXIF','IPTC',$general_exifinfo_info);
    print_entry('radio','iptcinfo');

    $general_iptc_level = str_replace('EXIF','IPTC',$general_exiflevel);
    $general_iptc_level_info = str_replace('EXIF','IPTC',$general_exiflevel_info);
    
    if(read_config('iptcinfo')){
    print_select($general_iptc_level,'iptc_level',$config['iptc_level'],
        Array("low" => $exif_low, "medium" => $exif_medium, "high" => $exif_high),
        $general_iptc_level_info,'iptclevel', '100');
    }
    
	/**
	* date time formatting options
	*/
	echo "<tr><td class='adminalternate' colspan='4'><b>".$str_other_features.":</b></td></tr>";

	print_textfield($general_default_date_format,'default_date_format',$config['default_date_format'],$general_default_date_format_info,'default_date_time_format','100');
	print_textfield($general_default_time_format,'default_time_format',$config['default_time_format'],$general_default_time_format_info,'default_date_time_format','100');
	
	/**
	* counter on/off 
	*/
	print_radio($general_counterstat,'counterstat_on_off',$config['counterstat'],$general_counterstat_info,'counter');
	
	/**
	* enable/disable timer parsetime
	*/
	print_radio($general_timer,'timer_on_off',$config['timer'],$general_timer_info,'timer');

    echo "<tr><td class='adminalternate' colspan='4'>&nbsp;&nbsp;- ".$str_random_index_image.":</td></tr>";
    /**
     *  random index page image
     */
    print_radio($general_random_image,'random_index_image',$config['random_index_image'],$general_random_image_info,'random_index_image');
    
    /**
     * hide size option if random image is disabled
     */
    /*if($config['random_index_image'])
    {*/
    print_select($general_random_image_size,'random_image_size',$config['random_image_size'],
        Array("200" => "200 px", "250" => "250 px", "300" => "300 px", "350" => "350 px", "400" =>"400 px", "450" => "450 px","500" =>"500 px", "550" => "550 px", "600" => "600 px"),
        $general_random_image_size_info,'random_image_size', '100');
    //}
}

/**
* This part formats the "feature settings" page in admin section
*
* @subpackage feature_settings
*/
elseif($_GET['job']=="features")
{
	echo "<tr><th class='maintable' colspan='4' style='height: 25px;'>".$features."</th></tr>";
	
	echo "<tr><td class='adminalternate' colspan='4'><b>".$str_language_settings.":</b></td></tr>";
	
	$options = get_available_language_files();
	print_select($default_language,'language',$config['lang'],$options,$default_language_info,'language', '100');
	
	/**
	* language auto detection on/off
	*/
	print_radio($general_auto_lang,'autolang_on_off',$config['autolang'],$general_auto_lang_info,'autolanguage');
	
	echo "<tr><td class='adminalternate' colspan='4'><b>".$str_other_features.":</b></td></tr>";

	/**
	* ip blocking time
	*/
	print_textfield($general_blocking,'block_time',$config['ip_blocking'],$general_blocking_info,'ipblocking','100');

	/**
	* files 2 ignore
	*/
	print_textfield($general_ignored_files,'ignored_files',$config['files_2_ignore'],$general_ignored_files_info,'files2ignore','150');

	/**
	* extensions 2 ignore
	*/
	print_textfield($general_ignored_fileext,'ignored_fileext',$config['fileext_2_ignore'],$general_ignored_fileext_info,'fileext2ignore','150');

	/** 
	* image rotation enabled/disabled
	*/ 
	print_radio($general_exif_rotate,'exif_rotation_on_off',$config['exif_image_autorotate'],$general_exif_rotate_info,'exifrotateonoff');
	
	/** 
	* image rotation enabled/disabled
	*/ 
	print_radio($general_rotate,'rotation_on_off',$config['img_rotation'],$general_rotate_info,'rotateonoff');

	/**
	* slideshow on/off
	*/
	print_radio($general_slideshow,'slide_on_off',$config['slideshow'],$general_slideshow_info,'slideshow');
	
	/**
	* enable/disable autologin feature
	*/
	print_radio($general_autologin,'autologin_on_off',$config['autologin'],$general_autologin_info,'autologin');

	/**
	* enable/disable new images folder
	*/
	print_radio($general_new_images_folder,'showNewImagesFolder',$config['showNewImagesFolder'],$general_new_images_folder_info,'new_images');

	/**
	* new images folder age of images
	*/
	if(read_config('showNewImagesFolder')){
	print_textfield($general_new_images_folder_age,'showNewImagesFolderDays',$config['showNewImagesFolderDays'],$general_new_images_folder_age_info,'new_images_age','100');
	}
	
	/**
	* max mail size in mail mode
	*/
	print_entry('text','mail_mode_max_size');
	
	/**
	* download speed limit
	*/
	print_select($general_download_speed,'alb_download_limit',$config['alb_download_limit'],
		Array("0" => "unlimited", "4" => "4 kb/s", "8" => "8 kb/s", "12" =>"12 kb/s", "16" => "16 kb/s","32" =>"32 kb/s", "64" => "64 kb/s"),
		$general_download_speed_info,'albdownlimit', '100');

	/**
	* enable/disable update check
	*/
	$link_check_now = '<a href="'.TOP_DIR.'/index.php?force_updatecheck=true">%s</a>';
	
	/**
	 * @todo  language
	 */
	$str_check_now = 'Check now';
	print_radio($general_update_notice.' '.sprintf($link_check_now,$str_check_now),'update_notice',$config['update_notice'],$general_update_notice_info,'update_notice');

}

/**
* This part formats the "performance settings" page in admin section
*
* @subpackage performance_settings
*/
elseif($_GET['job']=="perform")
{
	echo "<tr><th class='maintable' colspan='4' style='height: 25px;'>".$perform."</th></tr>";

    /**
    * autocreate thumbs
    */
    print_radio($general_autoconf,'autoconf_on_off',$config['autoconf'],$general_autoconf_info,'autoconf');


	/**
	* image quality config setting
	*/
	print_textfield($general_img_quality,'img_quality',$config['img_quality'],$general_img_quality_info,'imgquality','100');
	
    /**
     * video thumbnail
     */
    print_entry('radio','video_thumbnail');
    
	/**
	* The magic of HQ thumbnails created by GD lib (only available if
	* GD lib > 2 + imagecopyresampled() is available + use_convert==false
	*/ 
	if($config['gd_version']==">2" && function_exists('imagecopyresampled') && $config['use_convert']==false)
	{
		print_radio($general_hq,'quality_high_low',$config['thumb_quality'],$general_hq_info,'hqthumbs');
	}

	echo "<tr><td class='adminalternate' colspan='4'><b>".$str_sql_query_caching.":</b></td></tr>";
	/**
	* AdoDB caching on/off setting
	*/
	print_radio($general_ado_msg,'adodb_caching',$config['adodb_caching'],$general_ado_msg_info,'adodb_caching');

	/**
	* AdoDB cache timeout
	*/
	print_textfield($general_ado_time_msg,'adodb_cache_time',$config['adodb_cache_time'],$general_ado_time_msg_info,'adodb_cache_time', '100');

	/**
	* AdoDB cache path
	*/
	print_textfield($general_ado_path_msg,'adodb_cache_path',$config['adodb_cache_path'],$general_ado_path_msg_info,'adodb_cache_path', '100');
}
/**
* Closing tags with common submit button for all the above cases
*/
echo "<tr>".
			"<td class='admintable' colspan=4>".
				"<center>".
				"<input type=submit value='".$submit_button_general."'>".
				"</center>".
			"</td>".
		"</tr>".
		"<input type='hidden' name='job' value=".@$_GET['job'].">".
	"</table>".
	"</form>";

/**
* This method determines which type of line to use. Either input text field or two on/off
* radio buttons 
*
* @param string $what, what kind of input option to return (buttons/textfield)
* @param string $name, name of config option 
* @return string HTML radio button / HTML textfield 
*/
function print_entry($what,$name)
{
	$general = $GLOBALS['general_'.$name];
	$general_info = $GLOBALS['general_'.$name.'_info'];
	$form_name = $name;
	$config = $GLOBALS['config'][$name];
	$help = $name;
	
	switch($what)
	{
	case 'radio':
		print_radio($general,$form_name,$config,$general_info,$help,'100');
	break;
	case 'text':
		print_textfield($general,$form_name,$config,$general_info,$help,'100');
	break;
	}
}

/**
* This method is used to format a new config line (HTML) with text field 
* as input
*
* @param string $string1, short description of option
* @param string $textfield_name, name of option in db (linpha_config)
* @param string $textfield_value, value of option to show (read from config) 
* @param string $string2, long description of option
* @param string $helplink, name of href to help page
* @param int $tfwidth, width of textfield in px (default 100px)
* @return string HTML textfield line
*/
function print_textfield($string1,$textfield_name,$textfield_value,$string2,$helplink,$tfwidth)
{
	echo "<tr>".
			"<td class='admintable' width='*'>".$string1."</td>".
			"<td class='admintable' width='150' style='padding: 1px;'><input type='text' name='".$textfield_name."' style='width: ".$tfwidth.";' align='right' maxlength=100 value='".htmlspecialchars($textfield_value,ENT_QUOTES)."'></td>".
			"<td class='admintable' width='*' align='right'>".$string2."</td>".
			"<td  class='admintable' width='20' align='center' width='20'>";
	putHelpButton($helplink);
	echo "</td></tr>";
}
?>
