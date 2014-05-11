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

if(!$passed)
{
	header("Location: ".TOP_DIR."/login.php?ref=admin");
	exit(0);
}

include_once(TOP_DIR.'/header.php');
$string_test = array('page');
xss_security_check($string_test, 'string');

$lang_plugins['maps'] = 'Google/Yahoo Maps';

/**
* create left menu
*/
if(in_group('admin'))
{
	// admin: create welcome msg admin user (left menu)
	?>
	<tr>
		<td width='200' valign='top' class='leftmenu'>
			<div class='leftmenuhead'>
				<?php echo "LinPHA ".$book_admin."\n"; ?>
			</div>
	<?php
	print("<div align='center' class='linkbutton' style='border-left:0px; border-right:0px'>".$href_general_conf.":</div>");
    print("<div style='margin-left: 6px; margin-top:4px' align='left'>");
	print("<img src='".TOP_DIR."/graphics/general.png' alt=''>&nbsp;<a class='leftmenu' href='".TOP_DIR."/admin.php?page=general&job=layout'>".$layout."</a><br />");
	print("<img src='".TOP_DIR."/graphics/general.png' alt=''>&nbsp;<a class='leftmenu' href='".TOP_DIR."/admin.php?page=general&job=features'>".$features."</a><br />");
	print("<img src='".TOP_DIR."/graphics/general.png' alt=''>&nbsp;<a class='leftmenu' href='".TOP_DIR."/admin.php?page=general&job=perform'>".$perform."</a><br />");
	print("<img src='".TOP_DIR."/graphics/user.png' alt=''>&nbsp;<a class='leftmenu' href='".TOP_DIR."/admin.php?page=user&job=user'>$href_user_conf</a><br/>");
	print("<img src='".TOP_DIR."/graphics/user.png' alt=''>&nbsp;<a class='leftmenu' href='".TOP_DIR."/admin.php?page=user&job=group'>$href_group_conf</a><br/>");
	print("<img src='".TOP_DIR."/graphics/others.png' alt=''>&nbsp;<a class='leftmenu' href='".TOP_DIR."/admin.php?page=category'>$href_category_conf</a><br/>");
    print("</div>");

	print("<br /><center class='linkbutton' style='border-left:0px; border-right:0px'>".$href_tools_section."</center>");
    print("<div style='margin-left: 6px; margin-top:4px' align='left'>");
	print("<img src='".TOP_DIR."/graphics/ftp.png' alt=''>&nbsp;<a class='leftmenu' href='".TOP_DIR."/admin.php?page=ftp'>$href_ftp</a><br/>");
	print("<img src='".TOP_DIR."/graphics/others.png' alt=''>&nbsp;<a class='leftmenu' href='".TOP_DIR."/admin.php?page=other'>$href_other_conf</a><br/>");
//	print("<img align='middle' src='".TOP_DIR."/graphics/stats.png' alt=''>&nbsp;<a class='leftmenu' href='".TOP_DIR."/admin.php?page=stats&show=views'>$href_stats</a><br/>");
    print("</div>");
    
    print("<br /><center class='linkbutton' style='border-left:0px; border-right:0px'>".$dir_perms.":</center>");
    print("<div style='margin-left: 6px; margin-top:4px' align='left'>");
    print("<img src='".TOP_DIR."/graphics/security.png' alt=''>&nbsp;<a class='leftmenu' href='".TOP_DIR."/admin.php?page=perms'>$dir_perms</a><br/>");
    print("<img src='".TOP_DIR."/graphics/security.png' alt=''>&nbsp;<a class='leftmenu' href='".TOP_DIR."/admin.php?page=folder'>$href_folder_conf</a><br/>");
    print("</div>");
       
    /**
    * LinPHA Plugins
    */
	print("<br /><center class='linkbutton' style='border-left:0px; border-right:0px'>".$lang_plugins['active_plugins'].":</center>");
    print("<div style='margin-left: 6px; margin-top:4px' align='left'>");
	print("<img src='".TOP_DIR."/graphics/general.png' alt=''>&nbsp;<a class='leftmenu' href='".TOP_DIR."/admin.php?page=plugins'>".$lang_plugins['plugins']."</a><br/>");
    
	$query = $GLOBALS['db']->Execute("SELECT name FROM ".PREFIX."plugins WHERE active = '1' ORDER by name");
	while($data = $query->FetchRow())
	{
		echo "<img src='".TOP_DIR."/graphics/".$data[0].".png' alt=''>&nbsp;<a class='leftmenu' href='".TOP_DIR."/admin.php?page=".$data[0]."&plugins=1'>".$lang_plugins[$data[0]]."</a><br />";
	}
	echo "</div><br />";
}
elseif($passed)
{
	// friend: create welcome msg for friends (left menu)
	?>
	<tr>
		<td width='200' valign='top' class='leftmenu'>
			<div class='leftmenuhead'>
				<?php echo $friend_user_header."\n"; ?>
			</div>
			<br />
			<div align='center'>
				<?php echo $friend_info_msg; ?>
			</div>
	<?php
	
	if(in_group('uploader'))
	{
		echo "<hr noshade><img src='".TOP_DIR."/graphics/ftp.png' alt=''>";
		echo "<a class='leftmenu' href='".TOP_DIR."/admin.php?page=ftp'>&nbsp;$href_ftp</a><br />";
	}
}
echo "</td>";

/**
* main view starts here
*/
echo "<td valign='top' class='adminpages' height='100%' colspan='2'>";

/**
* take care of different redirect messages from the action scripts...
*/
if(isset($_GET['redirector']))
{
	$html_str = "<div align='center'><h1>%s</h1></div>";
	switch ($_GET['redirector'])
	{
		case "new_group":
			printf($html_str, $new_group_success_msg);
		break;
		case "mod_group":
			printf($html_str, $mod_group_success_msg);
		break;
		case "del_group":
			printf($html_str, $del_group_success_msg);
		break;
		case "new_user":
			printf($html_str, $new_user_success_msg);
		break;
		case "mod_user":
			printf($html_str, $mod_user_success_msg);
		break;
		case "del_user":
			printf($html_str, $del_user_success_msg);
		break;
		case "general":
			printf($html_str, $general_success_msg);
		break;
		case "new_category":
			printf($html_str, $new_cat_success_msg);
		break;
		case "mod_category":
			printf($html_str, $mod_cat_success_msg);
		break;
		case "del_category":
			printf($html_str, $del_cat_success_msg);
		break;
		case "new_perms":
			printf($html_str, $new_perms_success_msg);
		break;
		case "plugins":
			printf($html_str, $lang_plugins['plugins_updated']);
		break;
		case "benchmark":
			printf($html_str, $bm_saved);
		break;
		case "mod_cache":
			printf($html_str, $bm_saved);
		break;
		case "mod_cache_fail":
			printf($html_str, "<font color='red'>".$mod_cache_fail."</font>");
		break;
		case "error":
			printf($html_str, "<font color='red'>Error</font>");
		break;
		case "mod_gen_rss":
			include_once(TOP_DIR."/plugins/RSS/RSS.class.php");
			$rss = new RSS();
			if ($rss->items->itemNumber > 0){
				$rss->createFeed();
				printf($html_str, $rss_created);
			} else {
				printf($html_str, "<font color='red'>".$rss_not_created."</font>");
			}
		break;
		case "mod_rss":
		{
			printf($html_str, $rss_settings_saved);
			break;
		}
		default:
		break;
	}
}

/**
* set default include page
*/
if(!isset($_GET['page']))
{
	if(in_group('admin'))
	{
		$_GET['page'] = "general";
	}
	else
	{
		$_GET['page'] = "mysettings";
	}
}

/**
* include files
*/
if($_GET['page']=="mysettings") {
	include_once(TOP_DIR.'/actions/build_my_settings.php');
}

if($_GET['page']=="ftp") {
	include_once(TOP_DIR.'/plugins/ftp/index.php');
}

if($_GET['page']=="stats") {
	include_once(TOP_DIR.'/actions/build_stats.php');
}

if(in_group('admin'))
{
	if($_GET['page']=="general") {
		include_once(TOP_DIR.'/actions/build_general_conf.php');
	}
	
	if($_GET['page']=="user") {
		include_once(TOP_DIR.'/actions/build_user_conf.php');
	}
	
	if($_GET['page']=="folder") {
        /**
        * if we have adocache enabled, make sure to clear all cached entries
        * otherwise the menu will not show the hidden folder icon
        * needs to be run from here as cacheflush() fails in subfolder
        */
        if(read_config('adodb_caching')){
            $GLOBALS['db']->CacheFlush();
        }
		include_once(TOP_DIR.'/actions/build_folder_conf.php');
	}
	
    

    if($_GET['page']=="perms") {
        include_once(TOP_DIR.'/actions/build_perms.php');
    }
	
	if($_GET['page']=="category") {
		include_once(TOP_DIR.'/actions/build_category_conf.php');
	}
	
	if($_GET['page']=="other") {
		include_once(TOP_DIR.'/actions/build_thumbnail_conf.php');
	}
	
	if($_GET['page']=="plugins") {
		include_once(TOP_DIR.'/plugins/plugins.php');
	}
	
	if($_GET['page']=="user_group_members") {
		include_once(TOP_DIR.'/actions/build_user_group_members.php');
	}
	
	if(isset($_GET['plugins']))
	{
		if(file_exists(TOP_DIR.'/plugins/'.$_GET['page'].'/'.$_GET['page'].'.php'))
		{
			include_once(TOP_DIR.'/plugins/'.$_GET['page'].'/'.$_GET['page'].'.php');
		}
	}
}

print "</td></tr>";

include_once(TOP_DIR.'/footer.php');
?>

