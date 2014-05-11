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
* linpha facetmap 
* @author torge
*/

if(!defined('TOP_DIR')) { define('TOP_DIR','../..'); }
ini_set('include_path', TOP_DIR);	// set in include path because in db_connect.php isn't TOP_DIR used to include adodb.inc.php!

include_once(TOP_DIR.'/include/session.php');

if ($_GET['action'] == "new")
{
	$newkey = ($_POST['path'] == "") ? strtolower($_POST['key']) : $_POST['path'].".".strtolower($_POST['key']);
	$new=$GLOBALS['db']->Execute("INSERT INTO ".PREFIX."facetmap (fmtree, fmkey, fmpath, name) ".
					"VALUES ('".linpha_addslashes($_POST['tree'])."', '".linpha_addslashes($newkey)."', ".
					"'".linpha_addslashes($_POST['path'])."', '".linpha_addslashes($_POST['name'])."')"); 
	if(!$new) { echo $GLOBALS['db']->ErrorMsg().'<br />'; }
}

if ($_GET['action'] == "modify")
{
	$update=$GLOBALS['db']->Execute("UPDATE ".PREFIX."facetmap SET name='".linpha_addslashes($_POST['name'])."' ".
		"WHERE fmtree='".linpha_addslashes($_POST['tree'])."' AND fmkey='".linpha_addslashes($_POST['key'])."'");
	if(!$update) { echo $GLOBALS['db']->ErrorMsg().'<br />'; }
}

if ($_GET['action'] == "delete")
{
	$update=$GLOBALS['db']->Execute("DELETE FROM ".PREFIX."facetmap ".
					"WHERE fmtree='".linpha_addslashes($_POST['tree'])."' AND ".
					"fmkey LIKE '".linpha_addslashes($_POST['key'])."%'");
	if(!$update) { echo $GLOBALS['db']->ErrorMsg().'<br />'; }
}

header ("Location: ".TOP_DIR."/admin.php?page=facetmap&plugins=1&tree=".$_POST['tree']."&path=".$_POST['path']);
//print ("<a href='".TOP_DIR."/admin.php?page=facetmap&plugins=1&tree=".$_POST['tree']."&path=".$_POST['path']."'>");
//print ("next</a>");
?>