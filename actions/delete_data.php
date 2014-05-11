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
* Delete various (changed/modified) config options
*
* This file deletes various data for a couple of files
* like in usermanagement, groupmanagement, guestbook, categories... 
*
* @package configuration
* @subpackage configuration_storage
*/

if(!defined('TOP_DIR')) { define('TOP_DIR','..'); }

include_once(TOP_DIR.'/include/session.php');

if($passed)
{
	if(!empty($_POST['action']))
	{
		switch($_POST['action'])
		{
			case "category":
			{
				if(in_group('admin') && !empty($_POST['id']))
				{
					// delete category
					$delete=$GLOBALS['db']->Execute("DELETE FROM ".PREFIX."category ".
						"WHERE id='".linpha_addslashes($_POST['id'])."'");
				}
				header ("Location: ".TOP_DIR."/admin.php?redirector=del_category&page=category");
			break;
			}
			case "group":
			{
				if(in_group('admin') && !empty($_POST['id']) )
				{
					// delete group
					$delete=$GLOBALS['db']->Execute("DELETE FROM ".PREFIX."groups ".
						"WHERE id='".linpha_addslashes($_POST['id'])."'");
				}
				header ("Location: ".TOP_DIR."/admin.php?redirector=del_group&page=user&job=group&call_from=".$_POST['call_from']);
			break;
			}
			case "user":
			{
				if(in_group('admin') && !empty($_POST['id']))
				{
					// delete user
					$delete=$GLOBALS['db']->Execute("DELETE FROM ".PREFIX."users ".
						"WHERE id='".linpha_addslashes($_POST['id'])."'");
				}
				header ("Location: ".TOP_DIR."/admin.php?redirector=del_user&page=user&job=user");
			break;
			}
			case "frienduser":	// delete user
			{
				if(!empty($_POST['id']))
				{
    				// check if the users try to edit another user and not himself
    				$query = $GLOBALS['db']->Execute("SELECT nickname FROM ".PREFIX."users WHERE id = '".linpha_addslashes($_POST['id'])."'");
    				$data = $query->FetchRow();
    				if($_SESSION['user_name'] == $data[0])
    				{
    					$delete=$GLOBALS['db']->Execute("DELETE FROM ".PREFIX."users ".
    						"WHERE id='".linpha_addslashes($_POST['id'])."'");
    				}
    				header ("Location: ".TOP_DIR."/logout.php");
                }
			break;
			}
			case "mailinglist_remove":
			{
				if(in_group('admin') && !empty($_POST['id']))
				{
					// delete user
					$delete=$GLOBALS['db']->Execute("DELETE FROM ".PREFIX."mail_list ".
						"WHERE id='".linpha_addslashes($_POST['id'])."'");
				}
				header ("Location: ".TOP_DIR."/admin.php?redirector=general&page=mail&plugins=1");
			break;
			}
			default:
			{
				die();
			}
		}
	}
	else
	{
		die();
	}
}
else
{
	die();
}
?>