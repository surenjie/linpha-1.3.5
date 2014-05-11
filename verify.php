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

include_once(TOP_DIR.'/include/db_connect.php');
include_once(TOP_DIR.'/functions/db_api.php');


if(get_magic_quotes_gpc())
{
    $_POST['user_name'] = stripslashes($_POST['user_name']);
    $_POST['user_pass'] = stripslashes($_POST['user_pass']);
}

/* get user from DB */
$user=$GLOBALS['db']->Execute("SELECT nickname, password, groups, id, fullname FROM ".PREFIX."users ".
					"WHERE nickname='".linpha_addslashes($_POST['user_name'])."'");
$result=$user->FetchRow(ADODB_FETCH_ASSOC);

/* ini manipulation
this could be removed because it doesn't make sense! we would have to do this commands on every page..?
*/
@ini_set("session.use_trans_sid", "0");
@ini_set("session.gc_probability", "1");
@ini_set("session.gc_maxlifetime","1440");
@ini_set("session.use_cookies","1");

if(strlen($_POST['user_name'])>=2 && strlen($_POST['user_pass'])>=3)
{
	// check user
	if ($_POST['user_name']==$result['nickname'] && md5($_POST['user_pass'])==$result['password'])
	{   
	    /**
         * Log sucessfull login
	     */
        linpha_log('login','notice','User '.$_POST['user_name'].": successfully logged in.");
        
		// login ok - start session
		include_once(TOP_DIR.'/include/session.php');
		
		// store user stuff
		$_SESSION['REMOTE_ADDR'] = $_SERVER['REMOTE_ADDR'];
		$_SESSION['user_name'] = $_POST['user_name'];
		$_SESSION['user_id'] = $result['id'];
		$_SESSION['user_pass'] = md5($_POST['user_pass']);
		$_SESSION['user_groups'] = $result['groups'];		//Store user group membership
		$_SESSION['user_fullname'] = (empty($result['fullname'])) ? $_POST['user_name'] : $result['fullname'];  //Store user fullname. If fullname is blank - store username.
		
		$passed = true;
		
		if(isset($_POST['autologin'])) {
			set_linpha_cookie($result['id'], $_SESSION['user_pass']);
		}
	
		/**
		* no Header('Location ... ');
		* because it exists a bug in which the session does not work after header()
		*/

		if($_POST['ref'] == "admin")
		{
			include_once(TOP_DIR.'/admin.php');
		}
		else
		{
			$show_ref = true;
			include_once(TOP_DIR.'/index.php');
		}
	}
	else
	{
		// Log failed login
        linpha_log('login','error','User '.$_POST['user_name'].": login failed!");

		Header('Location: '.TOP_DIR.'/login.php?fail=true');
	}
}
else
{
	// unknown user or pass
	Header('Location: '.TOP_DIR.'/login.php?fail=true');
}
?>
