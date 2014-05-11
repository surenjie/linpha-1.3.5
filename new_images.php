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

/**
 * used in header.php
 */
$title = 'new_images';

include_once(TOP_DIR.'/include/session.php');

if(!read_config('showNewImagesFolder'))
{
	exit();
}

/*
 * XSS check
 */
$numeric_test = array('pn', 'imgid', 'exif');
xss_security_check($numeric_test, 'int');

$string_test = array('order', 'view');
xss_security_check($string_test, 'string');


include_once(TOP_DIR.'/include/img_view.class.php');
$img_view = new ImgView();
$img_view->setMode('new_images');
$img_view->setLinkAdress(TOP_DIR.'/new_images.php?1=1');
$img_view->setDefaultView('detail');
$img_view->setDefaultViewFields(Array('filename','date','age','album'));
$img_view->setDefaultOrder('date');
$img_view->setSql(''," FROM ".PREFIX."first_lev_album, ".P." WHERE ".new_images_sql_query_str()." AND");

if($show_header)
{
	include_once(TOP_DIR.'/header.php');
}

if(!isset($_GET['imgid']))
{
	$img_view->setPageRegister();	// define $_GET['pn'] (needed in build_navigation_view())

	if($show_leftcontent)
	{
		/**
		* create left menu
		*/
		include_once(TOP_DIR.'/include/left_menu.class.php');
		$menu = new LeftMenuView();
		$menu->generateTableHead();
		$menu->buildMenu();
		$menu->generateTableFooter();
		
		/**
		* Thumbnails
		*/
	?>
		<td class='mainwindow' colspan='2'>
	<?php
		$img_view->printThumbnails($img_th." ".$in_th." ".$str_new_images." (".sprintf($str_img_newer_than,read_config('showNewImagesFolderDays')).")");
	?>
			</td>
		</tr>
	<?php
	}
	else
	{
		$img_view->printThumbnails();
	}
}
else
{
	$img_view->printImage();
}

if($show_header)
{
	include_once(TOP_DIR.'/footer.php');
}

?>