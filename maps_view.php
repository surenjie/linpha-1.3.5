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

include_once(TOP_DIR.'/header.php');
if(!check_permissions('maps')): header("Location: ".TOP_DIR."/index.php");endif;

include_once(TOP_DIR.'/include/session.php');
include_once(TOP_DIR.'/plugins/maps/event_handler.class.php');
include_once(TOP_DIR.'/header.php');
include_once(TOP_DIR.'/include/left_menu.class.php');

/**
* create left menu
*/
$menu = new LeftMenuView();
$menu->generateTableHead();
$menu->buildMenu();
$menu->generateTableFooter();
	
/**
 * create main view
 */	
?>
	<td class='mainwindow' colspan='2' align='center'>
	<br />
<?php

/**
 * defaults
 */
if(!isset($_POST['loc_query'])): $_POST['loc_query'] = "from_db"; endif;
if(!isset($_POST['action'])): $_POST['action'] = "search"; endif;
if(!isset($_GET['job'])): $_GET['job'] = "false"; endif;
if(!isset($_POST['save_location'])): $_POST['save_location'] = "false"; endif;

$numeric_test = array(@$_GET['albid'], @$_GET['stage']);
xss_security_check($numeric_test, 'int');

$string_test = array(@$_POST['save_location'],$_POST['loc_query'],$_POST['action'], $_GET['job']);
xss_security_check($string_test, 'string');


$event_obj = new EventHandler();


/**
 *  show album 2 location page
 */
if($_GET['job'] == 'asignloc') 
{
	$event_obj->addAlbum2Location($_GET['albid'], $_GET['stage']);
}
/**
 *  show location 2 album page
 */
elseif($_GET['job'] == 'asignalb')
{
	$event_obj->addLocation2Album($_GET['id']);
}
else
{
/**
 * prepare map
 */
 $mapsType = read_config('maps_type')."Map";	
?>
<div id="<?php echo $mapsType; ?>" style="width: 90%; height: 75%;">
</div>
<?php

if(isset($_POST['loc_query']))
{
	$event_obj->getLocationCoordinates($_POST['loc_query'], $_POST['action'], @$_POST['location']);
    $event_obj->drawNewMap();
}
}
echo "</td></tr>";

include_once(TOP_DIR.'/footer.php');

?>
