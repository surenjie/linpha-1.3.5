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
* include/db_connect.php: connect to db
* 
* 
* @todo  after next update of sql/db_connect.php, change it to:
* 
* 
    <?php
    $db_type = "mysql";
    $db_host = "localhost";
    $db_port = "3306";
    $db_name = "linpha";
    $db_username = "linphaXasdf";
    $db_userpass = "XdddFFf";
    $db_prefix = "linpha_";
    ?>
* 
* 
*/

if(!defined('TOP_DIR')) { define('TOP_DIR','..'); }

include_once(TOP_DIR.'/adodb/adodb-errorhandler.inc.php');

//include_once(TOP_DIR.'/adodb/adodb.inc.php'); // not yet, first remove include in sql/db_connect.php

include_once(TOP_DIR.'/sql/db_connect.php');


/**
* connect to db and check if connection was succesfull
*/
if(!isset($db) OR ! $db->isConnected())
{
    if(isset($db))
    {
        echo $db->ErrorMsg().'<br />';
    }
    include(TOP_DIR."/sql/db_connect_error.html");
    exit(1);
}



/*$msg = $db->ErrorMsg();
if(!empty($msg))
{
    echo $msg.'<br />';
    exit(1);
}*/

 
?>
