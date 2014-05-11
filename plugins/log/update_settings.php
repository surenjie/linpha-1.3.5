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
* update settings for logger plugin
*/

if(!defined('TOP_DIR')) { define('TOP_DIR','../..');}

ini_set('include_path', TOP_DIR);   // set in include path because in db_connect.php isn't TOP_DIR used to include adodb.inc.php!


include_once(TOP_DIR.'/include/session.php');
include_once(language_file());

if(!in_group('admin'))
{
    echo STR_ACCESS_DENIED;
    exit(1);
}

$array_types = Array('login','db','filemanager','thumbnail','update', 'guestbook', 'comments');

update_config($_POST['log_email'],'log_email');
update_config($_POST['log_email_headers'],'log_email_headers');
update_config($_POST['log_email_subject'],'log_email_subject');
update_config($_POST['log_filename'],'log_filename');

foreach($array_types AS $value)
{
    if(!isset($_POST['log_method_'.$value]))
    {
        $method_str = 'none';
    }
    else
    {
        if(in_array('db',$_POST['log_method_'.$value]))
        {
            $use_db = true;
        }
        $method_str = implode(';',$_POST['log_method_'.$value]);
    }
    update_config($method_str,'log_method_'.$value);
}

header("Location: ".TOP_DIR."/admin.php?redirector=general&page=log&plugins=1");
?>
