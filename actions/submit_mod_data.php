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
* This file stores various changed and modified options for a couple of files
* like usermanagement, groupmanagement, guestbook, categories... 
*
* @package configuration
* @subpackage configuration_storage
*/

if(!defined('TOP_DIR')) { define('TOP_DIR','..'); }

$passed=false;

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
				if(in_group('admin') && !empty($_POST['cat_name']) && !empty($_POST['id']))
				{
					(isset($_POST['private_category'])) ? $private="1" : $private="0";
					$sanitized_mod_category_name = smart_htmlspecialchars($_POST["cat_name"], ENT_QUOTES);
					// update category
					$update=$GLOBALS['db']->Execute("UPDATE ".PREFIX."category SET
								name='$sanitized_mod_category_name',
								isprivate='$private'
								WHERE id='$_POST[id]'");
	
					// redirect to admin.php */
					header("Location: ".TOP_DIR."/admin.php?redirector=mod_category&page=category");
				}
			break;
			}
			case "frienduser":
			{
			    if(get_magic_quotes_gpc())
			    {
			        $_POST['friend_user_name'] = stripslashes($_POST['friend_user_name']);
			        $_POST['friend_full_name'] = stripslashes($_POST['friend_full_name']);
			        $_POST['friend_user_mail'] = stripslashes($_POST['friend_user_mail']);
			    }

				if($passed && isset($_POST['id']))
				{
                    // check if username is not empty
					if(!empty($_POST['friend_user_name']))
					{
						// check if the users try to edit another user and not himself
						$query = $GLOBALS['db']->Execute("SELECT nickname FROM ".PREFIX."users WHERE id = '".linpha_addslashes($_POST['id'])."'");
						$data = $query->FetchRow();
						if($_SESSION['user_name'] == $data[0])
						{
							// check if username already exists
							$query_username = $GLOBALS['db']->Execute("SELECT nickname FROM ".PREFIX."users ".
								"WHERE nickname = '".linpha_addslashes($_POST['friend_user_name'])."' AND ID <> '".linpha_addslashes($_POST['id'])."'");
							if($query_username->RecordCount() == 0)
							{
									// check old pw
									$query_pw = $GLOBALS['db']->Execute("SELECT password, fullname FROM ".PREFIX."users WHERE id = '".$_POST['id']."'");
									$data = $query_pw->FetchRow();

                                    /**
                                    * if we run update fullname the first time we have to make sure
                                    * it's already there or update will fail (at least on postgres) ;-)
                                    */   
                                    if(!isset($data[1])){
                                        $insert=$GLOBALS['db']->Execute("INSERT INTO ".PREFIX."users".
                                            "(fullname) VALUES (".$_POST['friend_full_name'].")".
                                            "WHERE id='".linpha_addslashes($_POST['id'])."'");
                                    }
									// update user
									$update=$GLOBALS['db']->Execute("UPDATE ".PREFIX."users SET ".
															"nickname='".linpha_addslashes($_POST['friend_user_name'])."', ".
															"email='".linpha_addslashes($_POST['friend_user_mail'])."', ".
															"fullname='".linpha_addslashes($_POST['friend_full_name'])."' ".
															"WHERE id='".linpha_addslashes($_POST['id'])."'");
	                                        /**
	                                        * update session variables so that user does not have to login again
	                                        */
                                            $_SESSION['user_name'] = $_POST['friend_user_name'];
                                            $_SESSION['user_fullname'] = (empty($_POST['friend_full_name'])) ? $_POST['friend_user_name'] : $_POST['friend_full_name'];  //Store user fullname. If fullname is blank - store username.
							} else {
								$error_nr = 5;
							}
						} else {
							$error_nr = 6;
						}
					} else {
						$error_nr = 4;
					}
				}
				
				if(isset($error_nr))
				{
					header("Location: ".TOP_DIR."/admin.php?redirector=error&page=mysettings&error_nr=".$error_nr);
				}
				else
				{
				    header("Location: ".TOP_DIR."/admin.php?redirector=mod_user&page=mysettings");
				}
			break;
            }
			case "frienduser_pass":
			{
			    if(get_magic_quotes_gpc())
			    {
			        $_POST['friend_user_old_pass'] = stripslashes($_POST['friend_user_old_pass']);
			        $_POST['friend_user_new_pass'] = stripslashes($_POST['friend_user_new_pass']);
			        $_POST['friend_user_retype_pass'] = stripslashes($_POST['friend_user_retype_pass']);
			    }

				if($passed && isset($_POST['id']))
				{
					// check pw match
					if($_POST['friend_user_new_pass']==$_POST['friend_user_retype_pass'] && !empty($_POST['friend_user_new_pass']))
					{
						// check old pw
						$query_pw = $GLOBALS['db']->Execute("SELECT password, fullname FROM ".PREFIX."users WHERE id = '".$_POST['id']."'");
						$data = $query_pw->FetchRow();
						if(md5($_POST['friend_user_old_pass'])==$data[0])
						{
							// update user
							$update=$GLOBALS['db']->Execute("UPDATE ".PREFIX."users SET ".
													"password='".md5($_POST['friend_user_new_pass'])."' ".
													"WHERE id='".linpha_addslashes($_POST['id'])."'");
                            /**
                            * update session variables so that user does not have to login again
                            */
                            $_SESSION['user_pass'] = md5($_POST['friend_user_new_pass']);
                        
                            if(isset($_COOKIE["linpha_userid"]) &&
                                isset($_COOKIE["linpha_password"]))
                            {
                                set_linpha_cookie($_POST['id'], $_SESSION['user_pass']);
                            }

							unset($_POST['friend_user_new_pass']); // security
							unset($_REQUEST['friend_user_new_pass']); // security
							unset($_POST['friend_user_retype_pass']); // security
							unset($_REQUEST['friend_user_retype_pass']); // security
						} else {
							$error_nr = 1;
						}
					} else {
						$error_nr = 2;
					}
				}
				if(isset($error_nr))
				{
					header("Location: ".TOP_DIR."/admin.php?redirector=error&page=mysettings&changepw=true&error_nr=".$error_nr);
				}
				else
				{
				    header("Location: ".TOP_DIR."/admin.php?redirector=mod_user&page=mysettings");
				}
			break;
            }
            case "group":	// update group
			{
				if(in_group('admin') && !empty($_POST['group_name']) && !empty($_POST['id']))
				{
					$sanitized_mod_group_name = smart_htmlspecialchars($_POST["group_name"], ENT_QUOTES);
					
					$update=$GLOBALS['db']->Execute("UPDATE ".PREFIX."groups SET ".
											"groups='".$sanitized_mod_group_name."' ".
											"WHERE id='".linpha_addslashes($_POST['id'])."'");
				}
				header("Location: ".TOP_DIR."/admin.php?redirector=mod_group&page=user&job=group&call_from=".$_POST['call_from']);
			break;
			}
			case "user":	// update user
			{
				if(in_group('admin') && !empty($_POST['mod_user_name']) && !empty($_POST['id']))
				{
				    if(get_magic_quotes_gpc())
				    {
				        $_POST['mod_user_name'] = stripslashes($_POST['mod_user_name']);
				        $_POST['old_user_name'] = stripslashes($_POST['old_user_name']);
				        $_POST['mod_user_fullname'] = stripslashes($_POST['mod_user_fullname']);
				        $_POST['mod_user_pass'] = stripslashes($_POST['mod_user_pass']);
				        $_POST['mod_user_mail'] = stripslashes($_POST['mod_user_mail']);
				    }

                    /**
                    * update password
                    * only if it is not empty
                    */
					if(empty($_POST['mod_user_pass']))
					{
						$new_password = "";
					} else {
                        $md5_pass = md5($_POST['mod_user_pass']);
						$new_password = "password='".$md5_pass."', ";
					}

					$update=$GLOBALS['db']->Execute("UPDATE ".PREFIX."users SET ".
											"nickname='".linpha_addslashes($_POST['mod_user_name'])."', ".
											"fullname='".linpha_addslashes($_POST['mod_user_fullname'])."', ".
											$new_password.
											"email='".linpha_addslashes($_POST['mod_user_mail'])."' ".
											"WHERE ID='".linpha_addslashes($_POST['id'])."'");

					/**
                    * if current account is changed update session variables and login cookie
                    */
					if($_POST['old_user_name'] == $_SESSION['user_name'])
					{
                        $_SESSION['user_name'] = $_POST['mod_user_name'];
                        $_SESSION['user_fullname'] = (empty($_POST['mod_user_fullname'])) ? $_POST['mod_user_name'] : $_POST['mod_user_fullname'];  //Store user fullname. If fullname is blank - store username.
                        
                        if(!empty($_POST['mod_user_pass']))
                        {
                            $_SESSION['user_pass'] = $md5_pass;
                        }
                    
                        if(isset($_COOKIE["linpha_userid"]) &&
                            isset($_COOKIE["linpha_password"]))
                        {
                            set_linpha_cookie($result[4], $_SESSION['user_pass']);
                        }
					}
				}
                header("Location: ".TOP_DIR."/admin.php?redirector=mod_user&page=user&job=user");
			break;
			}
			case "guestbook":
			{
				if(in_group('admin'))
				{
					update_config($_POST['gb_max_pages'], "gb_max_pages");
					update_config($_POST['anon_posts_on_off'], "gb_anon_posts");
					update_config($_POST['gb_posts_order'], "gb_posts_order");
					// redirect to admin.php 
					header("Location: ".TOP_DIR."/admin.php?redirector=mod_gb&page=guestbook&plugins=1");
				}
			break;
			}
			case "blacklist_gb":
			{
				if(in_group('admin'))
				{
					update_config($_POST['bl_on_off'], "blacklist_guestbook");
					if(isset($_POST['bl_keywords']))
					{
					$update=$GLOBALS['db']->Execute("UPDATE ".PREFIX."blacklist SET ".
													"value='".linpha_addslashes($_POST['bl_keywords'])."' ".
													"WHERE action = 'guestbook'");
					}
					// redirect to admin.php 
					header("Location: ".TOP_DIR."/admin.php?redirector=mod_gb&page=guestbook&plugins=1");
				}
			break;
			}
			case "cache":
			{
				if(in_group('admin'))
				{
					// disable caching during changing the settings because of consistency
					$update_plugins=$GLOBALS['db']->Execute("UPDATE ".PREFIX."plugins ".
						"SET active = '0' WHERE name = 'cache'");
	
					if(get_magic_quotes_gpc()) {
						$_POST['path_2_cache'] = stripslashes($_POST['path_2_cache']);
					}
					$_POST['path_2_cache'] = str_replace('\\','/',$_POST['path_2_cache']);	// convert windows paths to "normal" paths
	
					$old_path = read_config("cache_path");
	
					if($old_path != $_POST['path_2_cache'])	// has the cache path changed?
					{
						/**
						* remove ending slash if exists
						*/
						if(substr($_POST['path_2_cache'],strlen($_POST['path_2_cache'])-1,1) == '/')
						{
							$_POST['path_2_cache'] = substr( $_POST['path_2_cache'],
															0,
															strlen($_POST['path_2_cache'])-1 );
						}
					
						$path = get_full_path($_POST['path_2_cache']);	// nothing if absolute path, add TOP_DIR if relative path
	
						// check for valid cache_path
						if(file_exists($path)) {
							if(is_writable($path)) {
								$success = true;
							} else {
								$success = false;
							}
						} else {	// try to create folder
							if(@mkdir_p($path, 0700)) {
								$success = true;
							} else {
								$success = false;
							}
						}
						
						if($success)
						{
							/**
							* create cache dir structure
							*/
							for($i=0 ; $i<=9 ; $i++) {
								if(!file_exists($path.'/'.$i)) {
									mkdir($path.'/'.$i, 0700);
								}
							}
							
							/**
							* update config
							* not update $path because $path is '../sql/cache' and not 'sql/cache' !
							*/
							update_config($_POST['path_2_cache'], "cache_path");
							
							/**
							* delete all already cached images
							*/
							include_once(TOP_DIR.'/plugins/cache/func.cache.php');
							photo_cache_cleanup_by_date(-10);	// delete all cached images (-10: delete all images older than 10 days in future -> this should be all images)
							photo_cache_delete_folder($old_path);
							
							$redirector = 'mod_cache';
						} else {
							$redirector = 'mod_cache_fail';
						}
					}
					else
					{
						$redirector = 'mod_cache';
					}
					
					update_config($_POST['cache_max_size'], "cache_size");
	
					// enable caching when finished changing the settings
					$update_plugins=$GLOBALS['db']->Execute("UPDATE ".PREFIX."plugins ".
						"SET active = '1' WHERE name = 'cache'");
				}

				header("Location: ".TOP_DIR."/admin.php?redirector=".$redirector."&page=cache&plugins=1");
			break;
			}
			case "mail":
			{
				if(in_group('admin'))
				{
					update_config($_POST['mail_from_address'], "mail_from_address");
					update_config($_POST['mail_block_size'], "mail_block_size");
					
					/**
					 * add all linpha users to the mailing list
					 */
					if(isset($_POST['add_all_users']))
					{
						$query = $GLOBALS['db']->Execute("SELECT id, nickname, email, fullname FROM ".PREFIX."users");
						while($data = $query->FetchRow(ADODB_FETCH_ASSOC))
						{
							/**
							 * sort out duplicate entries
							 */
							$query2 = $GLOBALS['db']->Execute("SELECT id FROM ".PREFIX."mail_list WHERE email = '".linpha_addslashes($data['email'])."'");
							$num = $query2->RecordCount();
							if($num == 0)
							{
								/**
								 * if fullname is empty use nickname
								 */
								if(empty($data['fullname']))
								{
									$name = $data['nickname'];
								}
								else
								{
									$name = $data['fullname'];
								}
								
								$GLOBALS['db']->Execute("INSERT INTO ".PREFIX."mail_list ".
									"(name,email,date,active) VALUES ('".$name."',".
									"'".linpha_addslashes($data['email'])."','".time()."','1')");
							}
						}
					}
				}
				header("Location: ".TOP_DIR."/admin.php?redirector=mod_mail&page=mail&plugins=1");
			break;
			}
			case "mailinglist_toggle_active":
			{
				if(in_group('admin'))
				{
					/**
					 * toggle the active state of the user
					 */
					$query = $GLOBALS['db']->Execute("SELECT active FROM ".PREFIX."mail_list WHERE id = '".$_POST['id']."'");
					while($data = $query->FetchRow(ADODB_FETCH_ASSOC))
					{
						if($data['active'] == 1)
						{
							$new_state = 0;
						}
						else
						{
							$new_state = 1;
						};
								
						$GLOBALS['db']->Execute("UPDATE ".PREFIX."mail_list SET active = '".$new_state."' WHERE id = '".$_POST['id']."'");
					} 
				}
				header("Location: ".TOP_DIR."/admin.php?redirector=mod_mail&page=mail&plugins=1");
			break;
			}
			case "edit_memberships":
			{
				$str = ';';
			if(isset($_POST['data']))
				{
					foreach($_POST['data'] AS $key=>$value)
					{
						$str .= $key.';'; 
					}
				}
				$GLOBALS['db']->Execute("UPDATE ".PREFIX."users ".
					"SET groups = '".linpha_addslashes($str)."' ".
					"WHERE ID = '".linpha_addslashes($_POST['user_id'])."'");
				
				header("Location: ".TOP_DIR."/admin.php?redirector=general&page=user&job=user");
			break;
			}
			case "edit_members":
			{
				/**
				 * a bit more complicated as edit_memberships......
				 * don't have another idea as:
				 * - remove this group from all users
				 * - add this group to all selected users
				 */
				
				/**
				 * remove this group from all users
				 */
				$query = $GLOBALS['db']->Execute("SELECT id, groups FROM ".PREFIX."users ".
					"WHERE groups LIKE '%;".$_POST['group_id'].";%'");
				while($data = $query->FetchRow())
				{
					$str = str_replace(';'.$_POST['group_id'].';' , ';' , $data[1]);
					$GLOBALS['db']->Execute("UPDATE ".PREFIX."users ".
						"SET groups = '".$str."' WHERE id='".$data[0]."'");
				}
				
				/**
				 * append this group to all selected users
				 */
				if(isset($_POST['data']))
				{
					foreach($_POST['data'] AS $key=>$value)
					{
						$GLOBALS['db']->Execute("UPDATE ".PREFIX."users ".
							"SET groups = ".$GLOBALS['db']->Concat("groups","'".linpha_addslashes($_POST['group_id']).";'")." ".
							"WHERE id='".linpha_addslashes($key)."'");
					}
				}
				
				header("Location: ".TOP_DIR."/admin.php?redirector=general&page=user&job=group");
			break;
			}
			case "rss_save_settings":
			{
					update_config($_POST['rss_title'], "rss_title");
					update_config($_POST['rss_desc'], "rss_description");
					update_config($_POST['rss_link'], "rss_link");
					update_config($_POST['rss_lang'], "rss_language");
					update_config($_POST['rss_copyright'], "rss_copyright");
					update_config($_POST['rss_generic_title'], "rss_generic_title");
					// redirect to admin.php 
					header("Location: ".TOP_DIR."/admin.php?redirector=mod_rss&page=RSS&plugins=1");
			break;
			}
			case "generateRSS":
			{
				header("Location: ".TOP_DIR."/admin.php?redirector=mod_gen_rss&page=RSS&plugins=1");
			break;
			}
			case "previewRSS":
			{
				header("Location: ".TOP_DIR."/admin.php?redirector=mod_pre_rss&page=RSS&plugins=1");
			break;
			}
			case "statistics":
			{
				if(isset($_POST['stats_cache_time']))
				{
					update_config($_POST['stats_cache_time'], "stats_cache_time");
				}
				
				update_config($_POST['stats_realtime'], "stats_realtime");
				
				header("Location: ".TOP_DIR."/admin.php?page=stats&plugins=1&redirector=general");
			
			break;
			}
			/*case "log":
			{
				if(in_group('admin'))
				{
                    /**
                     * user login event
                     
                    update_config($_POST['log_login_method'], "log_login_method");
                    if(isset($_POST['log_login_file'])) {
                        update_config($_POST['log_login_file'], "log_login_file");}
                    if(isset($_POST['log_login_email'])) {
                        update_config($_POST['log_login_email'], "log_login_email");}
                    if(isset($_POST['log_login_email_headers'])) {
                        update_config($_POST['log_login_email_headers'], "log_login_email_headers");}
                    
                    /**
                     * thumbs create event
                     
                    update_config($_POST['log_thumbnail_method'], "log_thumbnail_method");
                    if(isset($_POST['log_thumbnail_file'])) {
                        update_config($_POST['log_thumbnail_file'], "log_thumbnail_file");}
                    if(isset($_POST['log_thumbnail_email'])) {
                        update_config($_POST['log_thumbnail_email'], "log_thumbnail_email");}
                    if(isset($_POST['log_thumbnail_email_headers'])) {
                        update_config($_POST['log_thumbnail_email_headers'], "log_thumbnail_email_headers");}

                     /**
                     * filemanager event
                     
                    update_config($_POST['log_filemanager_method'], "log_filemanager_method");
                    if(isset($_POST['log_filemanager_file'])) {
                        update_config($_POST['log_filemanager_file'], "log_filemanager_file");}
                    if(isset($_POST['log_filemanager_email'])) {
                        update_config($_POST['log_filemanager_email'], "log_filemanager_email");}
                    if(isset($_POST['log_filemanager_email_headers'])) {
                        update_config($_POST['log_filemanager_email_headers'], "log_filemanager_email_headers");}
					
                    /**
                     * update event
                     
                    update_config($_POST['log_update_method'], "log_update_method");
                    if(isset($_POST['log_update_file'])) {
                        update_config($_POST['log_update_file'], "log_update_file");}
                    if(isset($_POST['log_update_email'])) {
                        update_config($_POST['log_update_email'], "log_update_email");}
                    if(isset($_POST['log_update_email_headers'])) {
                        update_config($_POST['log_update_email_headers'], "log_update_email_headers");}
                    
                    /**
                     * db event
                     
                    update_config($_POST['log_db_method'], "log_db_method");
                    if(isset($_POST['log_db_file'])) {
                        update_config($_POST['log_db_file'], "log_db_file");}
                    if(isset($_POST['log_db_email'])) {
                        update_config($_POST['log_db_email'], "log_db_email");}
                    if(isset($_POST['log_db_email_headers'])) {
                        update_config($_POST['log_db_email_headers'], "log_db_email_headers");}                    
				}
				header("Location: ".TOP_DIR."/admin.php?redirector=mod_log&page=log&plugins=1");
			break;
			}*/
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
