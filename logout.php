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

include_once(TOP_DIR.'/include/session.php');	// start session

linpha_log('login','notice','User '.@$_SESSION['user_name'].": logged out");

$_SESSION = array();	// delete all session data
session_destroy();		// destroy session


if(isset($_COOKIE["linpha_userid"])) {
	setcookie("linpha_userid");	// delete cookie linpha_userid
	setcookie("linpha_password");	// delete cookie linpha_password
}

Header("Location: ".TOP_DIR."/index.php");
?>
