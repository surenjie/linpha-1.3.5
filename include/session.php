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

$passed = false;

if(!defined('TOP_DIR')) { define('TOP_DIR','..'); }

include_once(TOP_DIR.'/include/db_connect.php');
include_once(TOP_DIR.'/functions/db_api.php');

// session stuff
if(!isset($_SESSION)) { session_start(); }

// Read Cookie
if(read_config('autologin')) {
	if(!isset($_SESSION['user_name']) && 
	isset($_COOKIE["linpha_userid"])&&$_COOKIE["linpha_userid"]!=""&&
	isset($_COOKIE["linpha_password"])&&$_COOKIE["linpha_password"]!="")
	{
		$query_username = $GLOBALS['db']->Execute("SELECT nickname, level, groups, fullname, id FROM ".PREFIX."users ".
			"WHERE ID = '".linpha_addslashes($_COOKIE["linpha_userid"])."' ".
			"AND password = '".linpha_addslashes($_COOKIE["linpha_password"])."'");
		if($row = $query_username->FetchRow())
		{
			$_SESSION["REMOTE_ADDR"] = @$_SERVER["REMOTE_ADDR"];
			$_SESSION["user_name"] = $row[0];
			$_SESSION["user_id"] = $row[4];
			$_SESSION["user_pass"] = $_COOKIE["linpha_password"];
			//$_SESSION["user_level"] = $row[1];		// Store user level
			$_SESSION["user_groups"] = $row[2];		// Store user group membership
			$_SESSION["user_fullname"] = (empty($row[3])) ? $row[0] : $row[3];			// Store user fullname
		}
		else	// wrong cookie
		{
			setcookie("linpha_userid");	// delete cookie linpha_userid
			setcookie("linpha_password");	// delete cookie linpha_password
		}
	}
}

if(isset($_SESSION['user_name']) && isset($_SESSION['user_pass']))
{
	$passed=true;
	if (@$_SESSION["REMOTE_ADDR"]!=@$_SERVER["REMOTE_ADDR"])
	{
		// ip check wrong!
		$passed=false;

		unset($_SESSION['user_name'], $_SESSION['user_pass'], $_SESSION['user_groups'], $_SESSION['user_fullname']);
		session_destroy();
	}

} else {
	$passed=false;
}
?>