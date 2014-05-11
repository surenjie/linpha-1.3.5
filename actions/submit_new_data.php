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
* Store various (changed/modified) config options
*
* This file stores various new data for a couple of files
* like usermanagement, groupmanagement, guestbook, categories... 
*
* @package configuration
* @subpackage configuration_storage
*/
if(!defined('TOP_DIR')) { define('TOP_DIR','..'); }

include_once(TOP_DIR.'/include/session.php');
include_once(TOP_DIR.'/include/phpmeta/Unicode.php');

if($passed)
{
	if(!empty($_POST['action']))
	{
		switch($_POST['action'])
		{
			case "category":
			{
				if(in_group('admin') && !empty($_POST['new_category_name']))
				{
					(isset($_POST['private_category'])) ? $private="1" : $private="0";
					$sanitized_new_category_name = smart_htmlspecialchars($_POST["new_category_name"], ENT_QUOTES);
					// write new category
					$new=$GLOBALS['db']->Execute("INSERT INTO ".PREFIX."category (name, isprivate) ".
						"VALUES ('".$sanitized_new_category_name."', '".$private."')");
				}
				header ("Location: ".TOP_DIR."/admin.php?redirector=new_category&page=category");
			break;
			}
			case "group":
			{
				if(in_group('admin') && !empty($_POST['new_group_name']))
				{
					$sanitized_new_group_name = smart_htmlspecialchars($_POST["new_group_name"], ENT_QUOTES);
					// write new group

					$new=$GLOBALS['db']->Execute("INSERT INTO ".PREFIX."groups (groups) ".
						"VALUES ('".$sanitized_new_group_name."')");
				}
				header ("Location: ".TOP_DIR."/admin.php?redirector=new_group&page=user&job=group&call_from=".$_POST['call_from']);
			break;
			}
			case "user":	// add user
			{
				if(in_group('admin') && !empty($_POST['new_user_name']) && !empty($_POST['new_user_pass']))
				{
					$group_friend_id = get_group_id_from_name('friend');
					
					$new=$GLOBALS['db']->Execute("INSERT INTO ".PREFIX."users (nickname, password, email, level, groups, fullname, downloads, downloads_size) ".
					"VALUES ('".linpha_addslashes($_POST['new_user_name'])."', '".md5($_POST['new_user_pass'])."', ".
					"'".linpha_addslashes($_POST['new_user_mail'])."', '5', ';".$group_friend_id.";', '".linpha_addslashes($_POST['new_user_fullname'])."', '0', '0')");
				}
				header ("Location: ../admin.php?redirector=new_user&page=user&job=user");
			break;
			}
			case "permissions":
			{
				if(in_group('admin') && !empty($_POST['perm']))
				{
					foreach($_POST['perm'] as $key => $value)
					{
						if(isset($value[0]))
						{
							$sql = "UPDATE ".PREFIX."first_lev_album SET groups = ';public;' WHERE ID = '".$key."'";
						} else {
							$group_str = ';';
							foreach($value as $group_key => $group_value)
							{
								$group_str .= $group_key.';';
							}
							
							$sql = "UPDATE ".PREFIX."first_lev_album SET groups = '".linpha_addslashes($group_str)."' WHERE ID = '".linpha_addslashes($key)."'";
						}
						$update = $GLOBALS['db']->Execute($sql);
					}
				}
				header ("Location: ".TOP_DIR."/admin.php?redirector=new_perms&page=folder");
			break;
			}
			case "mailinglist_newuser":
			{
				if(in_group('admin') && !empty($_POST['mail_name']))
				{
					$sanitized_new_name = smart_htmlspecialchars($_POST["mail_name"], ENT_QUOTES);

					$GLOBALS['db']->Execute("INSERT INTO ".PREFIX."mail_list ".
						"(name,email,date,active) VALUES ('".$sanitized_new_name."',".
						"'".linpha_addslashes($_POST['mail_adress'])."','".time()."','1')");
				}
				header ("Location: ".TOP_DIR."/admin.php?redirector=general&page=mail&plugins=1");
			break;
			}			
			default:
			{
				die('no action!');
			}
		}
	}
	else
	{
		die('no action!');
	}
}
else
{
	die('not passed!');
}
?>
