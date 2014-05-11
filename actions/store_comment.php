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
* The comments page for images
*
* This file builds the image comment page, if admin also the add description
* option is available...
*
* @package comments
* @subpackage comments_storage
*/

/**
* @todo we have to take care of bugreport concerning double quoted comments
* still topical ?? 15.6.05 flo
*/

if(!defined('TOP_DIR')) { define('TOP_DIR','..'); }

include_once(TOP_DIR.'/include/session.php');
include_once(TOP_DIR.'/include/phpmeta/Unicode.php');

/**
* take care of blacklists before storing. e.g. SPAMblock
*/
do_blacklist_compare(@$_POST['comment'], 'comment');

$sanitized_descr = smart_htmlspecialchars(@$_POST['description'], ENT_QUOTES);
$sanitized_comment = smart_htmlspecialchars(@$_POST['comment'], ENT_QUOTES);

$name = stripslashes(@$_POST['name']);
$imgid = @$_POST['imgid'];
$albid = @$_POST['albid'];
$stage = @$_POST['stage'];
$md5sum = @$_POST['md5sum'];

if(isset($_POST['category']))
{
	if(is_array($_POST['category']))	// add image category and description (come from select field)
	{
		$category = implode(";",$_POST['category']);
		$category = ';'.$category.';';
	} else {	// add comment (come from hidden field: already in the right format)
		$category = $_POST['category'];
	}
} else {
	$category = '';
}

// check for username
if(isset($_SESSION['user_name']) && empty($_POST['uname']))
{
	$ins_uname = $_SESSION['user_name'];
}
elseif(!empty($_POST['uname']))
{
	$ins_uname = $_POST['uname'];
}
else
{
	$ins_uname="anonymous";
}

if(!isset($_SESSION['user_name']) && !empty($_POST['uname']))
{
	$ins_uname=$_POST['uname'];
}
elseif(!isset($_SESSION['user_name']) && empty($_POST['uname']))
{
	$ins_uname="anonymous";
}
else
{
	
}

/*###################################################
## insert/update image description/comment
###################################################*/
if($_POST['job']=="image")
{
	$storecmt=false;
    if(check_permissions('img_comments',$imgid))
	{
		// if already a comment exists, make sure to update description and category for all comments
		$query=$GLOBALS['db']->Execute("SELECT id FROM ".PREFIX."image_comments WHERE md5sum='$md5sum' ");
		$number=$query->RecordCount();
		
		if(isset($_POST['docomment']) && $_POST['docomment'] != "") // add comment
		{
			// check if there is an entry with a description/category but with an empty comment
			// if so, we have to fill in this entry to keep the db consistent
			$query=$GLOBALS['db']->Execute("SELECT id FROM ".PREFIX."image_comments ".
							"WHERE md5sum='".$md5sum."' and comment = ''");
			$empty_id = $query->FetchRow();
			
			if(isset($empty_id[0]) && !empty($sanitized_comment)) {
				$up=$GLOBALS['db']->Execute("UPDATE ".PREFIX."image_comments ".
					"SET comment='".$sanitized_comment."', author='".linpha_addslashes($ins_uname)."' ".
					"WHERE ID='".$empty_id[0]."' ");
				$storecmt=true;
				linpha_log('comments','notice','Image Comment updated by '.linpha_addslashes($ins_uname));
			}
			elseif(!empty($sanitized_comment))
			{
				$timestamp = $GLOBALS['db']->DBTimeStamp(time());
				$ins=$GLOBALS['db']->Execute("INSERT INTO ".PREFIX."image_comments
					(date, md5sum, author, description, category, comment) VALUES
					(".$timestamp.", '".$md5sum."', '".linpha_addslashes($ins_uname)."', ".
					"'".$sanitized_descr."', '".linpha_addslashes($category)."', '".$sanitized_comment."')");
				$storecmt=true;
				linpha_log('comments','notice','Image Comment inserted by '.linpha_addslashes($ins_uname));
			}
		}
	}
	if(check_permissions('img_description',$imgid))
	{
		if(isset($_POST['action']) && $_POST['action']=="insert" && $number < 1) // add category/description
		{
			$timestamp = $GLOBALS['db']->DBTimeStamp(time());
			$ins=$GLOBALS['db']->Execute("INSERT INTO ".PREFIX."image_comments
				(date, md5sum, author, description, category, comment) VALUES
				(".$timestamp.", '".$md5sum."', '".linpha_addslashes($ins_uname)."', ".
				"'".$sanitized_descr."', '".linpha_addslashes($category)."', '') ");
			linpha_log('comments','notice','Image Description inserted by '.linpha_addslashes($ins_uname));
		}
		elseif(isset($_POST['action']) && ($_POST['action']=="update" || ($_POST['action']=="insert" && $number>=1))) //update category/description
		{
			$up=$GLOBALS['db']->Execute("UPDATE ".PREFIX."image_comments ".
				"SET description='".$sanitized_descr."', category='".linpha_addslashes($category)."' ".
				"WHERE md5sum='".$md5sum."'");
			linpha_log('comments','notice','Image Description updated by '.linpha_addslashes($ins_uname));
		}
	}
	header("Location: ".TOP_DIR.'/'.base64_decode($_POST['ref']).'&cmt='.$storecmt);
}
elseif($_POST['job']=="album")	// insert/update album comment
{
	if(in_group('admin'))
	{
		$stage = get_stage($_POST['stage']);
		
		$result = $GLOBALS['db']->Execute("SELECT path FROM ".PREFIX.$stage."_lev_album ".
			"WHERE ID = '".linpha_addslashes($albid)."'");
		$alb_name = $result->FetchRow();
		$path = $alb_name[0];
	
		if($_POST['action']=="insert")
		{
			$timestamp = $GLOBALS['db']->DBTimeStamp(time());
			$ins=$GLOBALS['db']->Execute("INSERT INTO ".PREFIX."album_comments ".
				"(date, album, author, comment) VALUES ".
				"(".$timestamp.", '".linpha_addslashes($path)."', '".linpha_addslashes($ins_uname)."', '".$sanitized_comment."')");
			linpha_log('comments','notice','Album Comment inserted by '.linpha_addslashes($ins_uname).' for album '.linpha_addslashes($path));
		}
		elseif($_POST['action']=="update")
		{
			$up=$GLOBALS['db']->Execute("UPDATE ".PREFIX."album_comments ".
				"SET comment='".$sanitized_comment."' WHERE album='".linpha_addslashes($path)."'");
			linpha_log('comments','notice','Album Comment updated by '.linpha_addslashes($ins_uname).' for album '.linpha_addslashes($path));
		}
	}
	header("Location: ".TOP_DIR."/actions/album_comment.php?albid=".$_POST['albid']."&stage=".$_POST['stage']."&pn=".$_POST['pn']."&redirect=".$_POST['action']);
}
elseif($_POST['job'] == "blacklist_comments")
{
	if(in_group('admin'))
	{
		update_config($_POST['bl_on_off'], "blacklist_comments");
		if(isset($_POST['bl_keywords']))
		{
		$update=$GLOBALS['db']->Execute("UPDATE ".PREFIX."blacklist SET ".
										"value='".linpha_addslashes($_POST['bl_keywords'])."' ".
										"WHERE action = 'comment'");
		}
		header("Location: ".TOP_DIR.'/'.base64_decode($_POST['ref']));
	}
}
elseif($_POST['job']=="facetmap")
{
	if(in_group('admin'))
	{
		$up=$GLOBALS['db']->Execute("UPDATE ".PREFIX."photos SET ".
			"fmkey_location='".linpha_addslashes(@$_POST['fmlocation'])."', ".
			"fmkey_type='".linpha_addslashes(@$_POST['fmtype'])."' ".
			"WHERE ID='".linpha_addslashes($_POST['imgid'])."'");
	}
	header("Location: ".TOP_DIR.'/'.base64_decode($_POST['ref']));
}

?>
