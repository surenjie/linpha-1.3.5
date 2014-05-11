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

if(!defined('TOP_DIR')) { define('TOP_DIR','../..'); }
ini_set('include_path', TOP_DIR);   // set in include path because in db_connect.php isn't TOP_DIR used to include adodb.inc.php!

include_once(TOP_DIR.'/include/session.php');

if(!isset($_GET['job'])) : $_GET['job'] = "false"; endif;

$numeric_test = array(@$_GET['id'], @$_GET['albid'], @$_GET['imgid']);
xss_security_check($numeric_test, 'int');

$string_test = array(@$_GET['job'], @$_GET['stage']);
xss_security_check($string_test, 'string');



/**
 * delete location marker
 */
if($_GET['job'] == "del" && in_group('admin'))
{

	$delete = $GLOBALS['db']->Execute("DELETE FROM ".PREFIX."maps_plugin " .
						"WHERE id=".linpha_addslashes($_GET['id'])."");	
header("Location: ".TOP_DIR."/maps_view.php");
}

/**
 * add album 2 location marker
 */
if($_GET['job'] == "add")
{
	switch($_GET['stage'])
	{
		case 'first': $stage = '1'; break;
		case 'sec': $stage = '2'; break;
		case 'third': $stage = '3'; break;
		default: $stage = '0'; break;
	}
	/**
	 * add image thumb data to location in DB
	 */
	$data = $GLOBALS['db']->Execute("UPDATE ".PREFIX."maps_plugin " .
				"SET imgid=".linpha_addslashes($_GET['imgid']).", " .
					"albid=".linpha_addslashes($_GET['albid']).", " .
					"stage=".linpha_addslashes($stage)." " .
				"WHERE id=".linpha_addslashes($_GET['location'])."");
header("Location: ".TOP_DIR."/maps_view.php");	
}	

/**
 * asign location marker to album
 */
if(@$_POST['job'] == "loc2alb")
{
	if(isset($_POST['album_select']))
	{
		foreach($_POST['album_select'] AS $value)
		{
			$path = get_path_from_id($value,$without_leading_albums=false);
			$stage = get_stage_from_prev_path($path);

			$query = $GLOBALS['db']->Execute("SELECT id " .
			"FROM ".PREFIX."photos ".
            "WHERE prev_path='".linpha_addslashes($path)."' " .
            "AND level='0'");
		}
	}
	$data = $query->FetchRow(ADODB_FETCH_ASSOC);
	$albid = get_albid($path, $stage);
	
	$update = $GLOBALS['db']->Execute("UPDATE ".PREFIX."maps_plugin " .
				"SET imgid=".linpha_addslashes($data['id']).", " .
					"albid=".linpha_addslashes($albid).", " .
					"stage=".linpha_addslashes($stage)." " .
				"WHERE id=".linpha_addslashes($_POST['id'])."");
	header("Location: ".TOP_DIR."/maps_view.php");	
}

if(@$_POST['action'] == "save_location")
{
	$save_loc = $GLOBALS['db']->Execute("INSERT INTO ".PREFIX."maps_plugin " .
				"(lat, lon, country, street, state, zip, city) VALUES " .
				"('".$_POST['lat']."', '".$_POST['lon']."', " .
				"'".$_POST['country']."', '".$_POST['street']."','".$_POST['state']."', " .
				"'".$_POST['zip']."', '".$_POST['city']."')");
	/**
  	 * force reload to make new marker show up
   	 */
header("Location: ".TOP_DIR."/maps_view.php");	
}

if(@	$_POST['job'] == "settings" && in_group('admin')) 
{
update_config($_POST['maps_yahoo_id'], 'maps_yahoo_id' );
update_config($_POST['maps_google_key'], 'maps_google_key');
update_config($_POST['maps_type'], 'maps_type');
update_config($_POST['maps_display_type'], 'maps_display_type');
update_config($_POST['maps_google_ctrl_size'], 'maps_google_ctrl_size');
update_config($_POST['maps_default_zoom'], 'maps_default_zoom');
update_config($_POST['maps_default_zoom_location'], 'maps_default_zoom_location');
update_config($_POST['maps_yahoo_type_control'], 'maps_yahoo_type_control');
update_config($_POST['maps_yahoo_pan_control'], 'maps_yahoo_pan_control');
update_config($_POST['maps_yahoo_slide_control'], 'maps_yahoo_slide_control'); 
update_config($_POST['maps_marker_auto_popup'], 'maps_marker_auto_popup'); 

header("Location: ".TOP_DIR."/admin.php?page=maps&plugins=1");
}

?>

