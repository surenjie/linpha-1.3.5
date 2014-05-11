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

if(!defined('TOP_DIR')) { define('TOP_DIR','..'); }

/**
* File to create album archives.
* This file uses the Archive class to zip or tar selected images  
*
*/

include_once(TOP_DIR.'/include/session.php');
include_once(TOP_DIR.'/include/archiver.class.php');
include_once(language_file());

if(!isset($_POST['img_id'])) {
	$error = 1;
} else {


	basket_check_permissions('basket_download');


	//constructor
	$archive = new Archive($_POST['ziptype'], read_config('alb_download_limit'));
	if(!$archive->getImageList($_POST['img_id']))
	{
		$error = 3;
	}
	else
	{
		if(!$archive->makeArchive())
		{
			$error = 2;
		}
		else
		{
			$archive->startDownload();
			
			/**
			 * count downloads
			 */
			$time = time();
			
			/**
			 * no TOP_DIR because we've done a chdir(TOP_DIR)!
			 */
			include_once('./plugins/stats/stats.class.php');
			foreach($archive->md5sums AS $value)
			{
				linStats('download',$value,$time);
			}
		}
	}
}

if(isset($error))
{
	$link = base64_decode($_POST['link_address'])."&job=".$_POST['job']."&pn=".$_POST['pn']."&error=".$error;
	/**
	* if the error was in makeArchive(), we have additional output, so don't redirect automatically
	*/
	if($error == 2)
	{
		echo '<br /><br /><a href="';
		echo $link;
		echo '">'.STR_BACK.'</a>';
	}
	else
	{
		header("Location: ".$link);
	}
}

?>
