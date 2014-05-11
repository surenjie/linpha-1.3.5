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
 * supress all errors
 */
error_reporting(0);

if(!defined('TOP_DIR')) { define('TOP_DIR','.'); }

include_once(TOP_DIR.'/include/session.php');

/**
 * create thumbnail if not exists
 * do not use sql_query_str() because the thumbnail would otherwise
 * also be created if i just have no permission to the thumbnail 
 */
$query = $GLOBALS['db']->Execute("SELECT id FROM ".PREFIX."photos WHERE thumbnail is not NULL " .
		"AND id = '".linpha_addslashes($_GET['id'])."'");
if( $query->EOF OR isset($_GET['force'])  ) 
{
    make_thumb($_GET['id']);
}

/**
 * get thumbnail
 */
$query = $GLOBALS['db']->Execute( sql_query_str(array('thumbnail'),P.".id='".linpha_addslashes($_GET['id'])."'") );
$data = $query->FetchRow();


if(get_magic_quotes_runtime())
{
	$data[0] = stripslashes($data[0]);
}

/**
 * @todo  why do we need to addslashes() on inserting thumbnails into db and
 * stripslashes() on reading thumbnails from db in sqlite?
 */
if(DB_TYPE == 'sqlite')
{
	$data[0] = stripslashes($data[0]);
}

Header("Content-type: image/jpeg");
echo $data[0];
?>
