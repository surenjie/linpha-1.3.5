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

include_once(TOP_DIR.'/functions/other.php');	// html_header(), get_http_accept_lang()
include_once(TOP_DIR.'/functions/filesys.php');	// get_available_language_files()

/**
* set and include the language file
* if there isn't a database connection yet, autolanguage detection is enabled
*/
if(isset($_GET['lang']))	// come from install pages
{
	/**
	 * strict division from $_GET['lang'] and include() !!!
	 * make sure we don't have a include($_GET['lang']) !!!
	 */
	$array_langs = get_available_language_files();
	$key = array_search( $_GET['lang'], $array_langs);
	if( $key === false )
	{
		$include_lang = 'English';
	}
	else
	{
		$include_lang = $array_langs[$key];
	}
}
elseif(file_exists(TOP_DIR.'/sql/db_connect.php'))
{
	include_once(TOP_DIR.'/functions/db_api.php');
	$include_lang = get_language();
}
else
{
	$include_lang = get_http_accept_lang();
}

if( file_exists(TOP_DIR.'/lang/lang.'.$include_lang.'.php') )
{
	include_once(TOP_DIR.'/lang/lang.'.$include_lang.'.php');
}
else
{
	include_once(TOP_DIR.'/lang/lang.English.php');
}

// build and intialise new object
$doc = new linpha_doc();
$doc->init(get_linpha_toc());

html_header();
?>
<title><?php echo $help; ?> - LinPHA</title>
</head>
<body>
<h1>LinPHA <?php echo  $help ?></h1>

<blockquote>
<div style="background-color: #DDDDDD; color: #000000; padding: 2px;">
<?php
// build toc (table of content)
$doc->print_doc(1,'root','toc');
?>
</div>
</blockquote>

<?php
// build doc entries
$doc->print_doc(1,'root','doc');
?>

</body>
</html>

<?php

class linpha_doc
{
	var $toc;
	var $translation_array;
	var $language_array;

	function init($toc)
	{
		$this->toc = $toc;
		$this->translation_array = get_translation_array();
		$this->set_language_array();
	}


	function print_doc($i,$value,$toc_or_doc)
	{
		if(isset($this->toc[$i][$value]))
		{
			foreach($this->toc[$i][$value] AS $key=>$value)
			{
				echo str_repeat("\t",$i);

				$this->print_html_doc_entry($i,$value,$toc_or_doc);	// title
				
				$this->print_html_doc_start($i,$toc_or_doc);		// needed for "<ul>"
				$this->print_doc($i+1,$value,$toc_or_doc);
				$this->print_html_doc_end($i,$toc_or_doc);		// needed for "</ul>"
			}
		}
	}

	function print_lang_entry($value)
	{
		if(isset($this->language_array[$value]))
		{
			echo $this->language_array[$value];
		}
		elseif(isset($this->translation_array[$value]) && isset($GLOBALS[$this->translation_array[$value]]))
		{
			echo $GLOBALS[$this->translation_array[$value]];
		}
		else
		{
			echo '<b>Error: Missing language entry: '.$value.'</b>';
		}
	}

	function print_doc_entry($value)
	{
		if(isset($this->language_array['doc_entry_'.$value]))
		{
			echo $this->language_array['doc_entry_'.$value];
		}
		else
		{
			echo '<b>Error: Missing language doc entry: '.$value.'</b>';
		}
	}

	function set_language_array()
	{
		if(file_exists(TOP_DIR.'/docs/lang/lang_doc.'.$GLOBALS['include_lang'].'.php'))
		{
			include_once(TOP_DIR.'/docs/lang/lang_doc.English.php');
			include_once(TOP_DIR.'/docs/lang/lang_doc.'.$GLOBALS['include_lang'].'.php');
		}
		else
		{
			include_once(TOP_DIR.'/docs/lang/lang_doc.English.php');
		}
		
		$this->language_array = $lang;
	}


// functions concerning html layout starts here

	function print_html_doc_entry($i,$value,$toc_or_doc)
	{
		if($toc_or_doc=='toc')
		{
			switch($i)	// switch stage
			{
				case 1:
					echo '<b><u><h2>';
					$this->print_lang_entry($value);
					echo '</h2></u></b>';
				break;
				case 2:
					echo '<b><u>';
					$this->print_lang_entry($value);
					echo '</u></b>';
				break;
				case 3:
					echo '<li><a name="toc_'.$value.'">&nbsp;</a><a href="#'.$value.'">';
					$this->print_lang_entry($value);
					echo '</a></li>';
	
				break;
			}
		}
		elseif($toc_or_doc=='doc')
		{
			switch($i)
			{
				case 1:
					echo '<b><u><h2>';
					$this->print_lang_entry($value);
					echo '</h2></u></b>';
				break;
				case 2:
					echo '<b><u><h3>';
					$this->print_lang_entry($value);
					echo '</h3></u></b>';
				break;
				case 3:
					echo '<p><a name="'.$value.'"><b>';
					$this->print_lang_entry($value);
					echo '</b> <a href="#toc_'.$value.'">TOC</a></p>';
					echo '<blockquote><div style="background-color: #FFFF99; color: #000000; padding: 10px;">';
					$this->print_doc_entry($value);
					echo '</div></blockquote><br />';
				break;
			}
		}
		echo "\n";
	}

	function print_html_doc_start($i,$toc_or_doc)
	{
		if($toc_or_doc=='toc')
		{
			switch($i)
			{
				case 1:
				break;
				case 2:
					echo str_repeat("\t",$i);
					echo '<ul>'."\n";
				break;
				case 3:
				break;
			}
		}
		elseif($toc_or_doc=='doc')
		{
		}
	}

	function print_html_doc_end($i,$toc_or_doc)
	{
		if($toc_or_doc=='toc')
		{
			switch($i)
			{
				case 1:
				break;
				case 2:
					echo str_repeat("\t",$i);
					echo '</ul>'."\n";
				break;
				case 3:
				break;
			}
		}
		elseif($toc_or_doc=='doc')
		{
		}
	}
}

function get_translation_array()
{
	$translation_array = Array(
	// this array is used for old entries which are in the
	// language file or for entries which are already in
	// the language file
		'installation' => 'inst_msg',
		'access_type' => 'inst_access_msg',
		'fullaccess' => 'inst_full_access_msg',
		'limitedaccess' => 'inst_limited_access_msg',
		'database_administrator' => 'inst_superadmin_header',
		'sqladminname' => 'inst_superadmin_name',
		'sqladminpass' => 'inst_superadmin_pass',
		'linpha_administrator' => 'inst_admin_header',	
		'linphaname' => 'inst_admin_name',
		'linphapass' => 'inst_admin_pass',
		'linphamail' => 'inst_admin_email',
		'database_connection' => 'inst_db_header',
		'dbhost' => 'inst_db_host',
		'dbport' => 'inst_db_host_port',
		'dbname_full' => 'inst_db_name',
		'dbname' => 'inst_db_name2',
		'dbprefix' => 'inst_table_prefix',
		'administration' => 'admin_page_header',
		'general_conf' => 'href_general_conf',
		'albumtitle' => 'general_album_title',
		'photoscol' => 'general_photos_col',
		'photosrow' => 'general_photos_row',
		'photoswidth' => 'general_photos_width',
		'photosheight' => 'general_photos_height',
		'imgquality' => 'general_img_quality',
		'rotateonoff' => 'general_rotate',
		'exifonoff' => 'general_exifinfo',
		'exifdefault' => 'general_exifdefault',
		'exiflevel' => 'general_exiflevel',
		'filename' => 'general_filename',
		'thumborder' => 'general_thumb_order',
		'autoconf' => 'general_autoconf',
		'counter' => 'general_counterstat',
		'ipblocking' => 'general_blocking',
		'language' => 'default_language',
		'autolanguage' => 'general_auto_lang',
		'theme' => 'general_theme',
		'hqthumbs' => 'general_hq',
		'printing' => 'general_printing',
		'slideshow' => 'general_slideshow',
		'miniprev' => 'general_mini_preview',
		'thumbsize' => 'general_thumb_size',
		'anonpost' => 'general_anon_post',
		'anondown' => 'general_anon_download',
		'autologin' => 'login_autologin',
		'autologinuser' => 'login_autologin_user',
		'timer' => 'toc_timer',
		'anonalbdown' => 'toc_zip_download',
		'albdownlimit' => 'toc_albdownlimit',
		'navigation' => 'toc_navigation',
		'default_date_time_format' => 'toc_default_date_time_format',
		'user_group_management' => 'href_user_conf',
		'usermod' => 'mod_user_header',
		'usernew' => 'new_user_header',
		'groupmod' => 'header_mod_group',
		'groupnew' => 'header_new_group',
		'folder_management' => 'href_folder_conf',
		'folderperms' => 'set_dir_perms_header',
		'other_options' => 'href_other_conf',
		'createthumbs' => 'th_msg',
		'catnew' => 'new_cat_header',
		'catmod' => 'mod_cat_header',
		'wm_addexamples' => 'wm_addexamples',
		'wm_addimg' => 'wm_addimg',
		'wm_addfont' => 'wm_addfont',
		'wm_color' => 'wm_colorsetting',
		'cachesize' => 'cache_max_size',
		'cachepath' => 'path_2_cache',
		'cacheoptimize' => 'cache_optimize',
		'misc_help' => 'misc_help',
		'imgrotate' => 'img_rotating',
		'printprobs' => 'printing_probs',
		'dbselect' => 'select_db_header',
		'new_images' => 'general_new_images_folder',
		'new_images_age' => 'general_new_images_folder_age',
		'comment_in_subfolder' => 'general_comment_in_subfolder',
        'adodb_caching' => 'general_ado_msg',
        'adodb_cache_path' => 'general_ado_path_msg',
        'adodb_cache_time' => 'general_ado_time_msg',
        'mail_mode_anon' => 'general_anon_mail_mode',
        'mail_mode_max_size' => 'general_mail_mode_max_size',
        'full_thumbnails' => 'general_mini_preview_full_thm',
        'random_index_image' => 'general_random_image',
        'random_image_size' => 'general_random_image_size',
        'update_notice' => 'general_update_notice',
        'video_thumbnail' => 'general_video_thumbnail',
        'exif_iptc_search_info' => 'misc_help'
	);
	
	return $translation_array;
}

function get_linpha_toc()
{
	$toc[1] = Array(
		"root" => Array(
			"installation",
			"administration"
		)
	);

	$toc[2] = Array(
		"installation" => Array(
			"access_type",
			"database_administrator",
			"linpha_administrator",
			"database_connection"
		),
		"administration" => Array(
			"general_conf",
			"user_group_management",
			"folder_management",
			"other_options",
			"plugins",
			"misc_help"
		)
	);


	$toc[3] = Array(
		"access_type" => Array(
			"fullaccess",
			"limitedaccess",
			"dbselect"
		),
		"database_administrator" => Array(
			"sqladminname",
			"sqladminpass"
		),
		"linpha_administrator" => Array(
			"linphaname",
			"linphapass",
			"linphamail"
		),
		"database_connection" => Array(
			"dbhost",
			"dbport",
			"dbname_full",
			"dbname",
			"dbprefix"
		),


		"general_conf" => Array(
			"albumtitle",
			"photoscol",
			"photosrow",
			"photoswidth",
			"photosheight",
			"imgquality",
			"rotateonoff",
			"exifonoff",
			"exifdefault",
			"exiflevel",
			"iptcinfo",
			"iptclevel",
			"filename",
			"thumborder",
			"autoconf",
			"counter",
			"ipblocking",
			"language",
			"autolanguage",
			"theme",
			"hqthumbs",
			"printing",
			"slideshow",
			"miniprev",
			"thumbsize",
			"thumborder",
			"anonpost",
			"anondown",
			"autologin",
			"autologinuser",
			"timer",
			"anonalbdown",
			"albdownlimit",
			"navigation",
			"default_date_time_format",
			"new_images",
			"new_images_age",
			"comment_in_subfolder",
            "adodb_caching",
            "adodb_cache_path",
            "adodb_cache_time",
            "mail_mode_anon",
            "mail_mode_max_size",
            "random_index_image",
            "random_image_size",
            "update_notice",
            "video_thumbnail"
		),
		"user_group_management" => Array(
			"usermod",
			"usernew",
			"groupmod",
			"groupnew"
		),
		"folder_management" => Array(
			"folderperms"
		),
		"other_options" => Array(
			"createthumbs",
			"catnew",
			"catmod"
		),
		"plugins" => Array(
			"benchmark",
			"watermark",
			"wm_addexamples",
			"wm_addimg",
			"wm_addfont",
			"wm_color",
			"wm_delete_all_cached_images",
			"sql",
			"cache",
			"cachesize",
			"cachepath",
			"cacheoptimize",
			"mail",
			"guestbook",
			"log",
			"rss",
			"stats",
			"statscaching",
			"exifrotateonoff",
			"maps",
			"yahooid",
			"googlekey",
			"maptypes",
			"mapslide",
			"mappan",
			"mapmarkerpop"
		),
		"misc_help" => Array(
			//"imgrotate", outdated!
			//"printprobs"
			"exif_iptc_search_info",
			"archive_apps",
			"search_and_or_info"
		)

	);

	return $toc;
}

?>
