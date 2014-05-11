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

$show_alternate_styles = 0;

/**
* warnings of 
*/
error_reporting(1);

include_once(TOP_DIR.'/include/session.php');

/**
* maybe we still started the timer, (for example benchmark)
*/
if(!isset($timer['linpha']))
{
	start_timer("linpha");
}

/**
* get desired language file
*/
include_once(language_file());


/**
* check if database upgrade is needed
*/
include_once(TOP_DIR.'/include/upgrade.php');

$photo_archive_title=read_config('photo_archive_title');

if(strlen($photo_archive_title)>=1)
{
	$head_title=$photo_archive_title;
}

html_header();

/**
 * stuff for debug
 */
//$GLOBALS['db']->debug = true;
//xdebug_start_profiling();


// linpha styles
$style=read_config('style');
if($show_alternate_styles)
{
	$themes = get_linpha_themes();
	foreach($themes AS $value)
	{
		if($value == $style) {
			$rel = 'stylesheet';
		} else {
			$rel = 'alternate stylesheet';
		}
		echo '<link rel="'.$rel.'" type="text/css" href="'.TOP_DIR.'/styles/'.$value.'.css" title="'.$value.'">'."\n";
	}
}
else
{
	echo '<link rel="stylesheet" type="text/css" href="'.TOP_DIR.'/styles/'.$style.'.css" title="'.$style.'">'."\n";
}
?>
<title><?php echo $head_title; ?> - LinPHA</title>
</head>

<body>
<table width='100%' style='height: 100%;' cellspacing='0' cellpadding='0'>
	<tr>
		<td class='blackline' colspan='3' height='1'></td>
	</tr>
	<tr>
		<td class='leftheader' height='50' rowspan='2' width='200'>
			<img src='<?php echo TOP_DIR.'/graphics/logo_'.$style; ?>_header.jpg' alt='LinPHA'>
		</td>
		<td class='mainheader' height='40' style="white-space:nowrap">
			<div class='maintitle'>
                <?php
                echo $head_title;
                if(isset($title))
                {
                    switch($title)
                    {
                    case 'search':
                        echo " - ".$book_search;
                    break;
                    case 'new_images':
                        echo " - ".$str_new_images;
                    break;
                    }
                }
                ?>
            </div>
		</td>
		<td class='rightheader' height='40' style="white-space:nowrap">
<?php

/* dynamic header info (visits/online/photos) */
if(read_config('counterstat'))
{
	if(!empty($REMOTE_ADDR))
	{
		$ip=$REMOTE_ADDR;
	}
	else
	{
		$ip=$_SERVER["REMOTE_ADDR"];
	}
	user_counter($ip);
	echo "\t\t\t".read_config('users')." ".$user_visits.",&nbsp;";
	current_online();
	echo "&nbsp;".$user_online."&nbsp;<br />\n";
}

if($passed) {
    if(!isset($_SESSION['user_fullname'])){
        $_SESSION['user_fullname'] = $_SESSION['user_name'];
    } 
	echo "\t\t\t".$welc_msg." ".$_SESSION["user_fullname"]." <a href='".TOP_DIR."/logout.php'>(".$book_logout.")</a>&nbsp;";
} else {
	echo "\t\t\t".$welc_msg." ".$guest." <a href='".TOP_DIR."/login.php'>(".$book_login.")</a>&nbsp;";
}
echo "\n";
?>
		</td>
	</tr>
<?php

if(!$passed && !read_config('gb_anon_posts')) {
	$gb_anon_posts=false;
} else {
	$gb_anon_posts=true;
}

?>
	<tr>
		<td colspan="2" height='10' class='mainheader'>
			<table width='100%' cellspacing='0' cellpadding='0'>
				<tr>
					<td style="white-space:nowrap; text-align: left;" class='mainmenu'>&nbsp;&nbsp;&nbsp;
						<a class='mainmenu' href='<?php echo TOP_DIR; ?>/index.php'><?php echo $book_home; ?></a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
<?php

if($passed && in_group('admin'))
{
	echo "\t\t\t\t\t\t";
	echo "<a class='mainmenu' href='".TOP_DIR."/admin.php'>".$book_admin."</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;\n";
}

if($passed)
{
	echo "\t\t\t\t\t\t";
	echo "<a class='mainmenu' href='".TOP_DIR."/admin.php?page=mysettings'>".$book_admin_user."</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;\n";
}

if(read_plugins_config('stats') && check_permissions('stats'))
{
	echo "\t\t\t\t\t\t";
	echo "<a class='mainmenu' href='".TOP_DIR."/plugins/stats/stats_view.php'>".$statistics."</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;\n";
}

?>
			<a class='mainmenu' href='<?php echo TOP_DIR; ?>/search.php'><?php echo $book_search; ?></a>
<?php
			// enable/disable guestbook
			if(read_plugins_config('guestbook') && ($gb_anon_posts)) {
				echo "\t\t\t\t\t\t";
				echo "&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;";
				echo "<a class='mainmenu' href='".TOP_DIR."/plugins/guestbook/guestbook_view.php'>";
				echo ($html_lang=="en")? strtolower($lang_plugins['guestbook']): $lang_plugins['guestbook'];
				echo "</a>\n";
			}

			if(read_plugins_config('mail')) {
				echo "\t\t\t\t\t\t";
				echo "&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;";
				echo "<a class='mainmenu' href='".TOP_DIR."/plugins/mail/form_users.php'>".
					$mail_link."</a>\n";
			}

?>
					</td>
					<td class='rightheaderlower'>
						<?php echo $num_pictures." ".count_pictures()."&nbsp;\n"; ?>
					</td>
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td class='blackline' colspan='3' height='1'></td>
	</tr>

