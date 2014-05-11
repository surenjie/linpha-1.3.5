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

if(!defined('TOP_DIR')) { define('TOP_DIR','../..'); }

ini_set('include_path', TOP_DIR);	// set in include path because in db_connect.php isn't TOP_DIR used to include adodb.inc.php!

include_once(TOP_DIR.'/include/session.php');
include_once(TOP_DIR.'/plugins/watermark/func.watermark.php');
include_once(language_file());

if(!in_group('admin'))
{
    echo STR_ACCESS_DENIED;
    exit(1);
}

/**
* save settings / set back to default / delete all cached images
*/
if(isset($_POST['cmd']))
{
    $append = '';
	switch($_POST['cmd'])
	{
	case 'preview':
		if(!isset($_POST['wm_enable_rectangle'])) {	// if it wasn't click, it doesn't exist and therefore it will produce an error in update_watermark()...
			$_POST['wm_enable_rectangle'] = 0;
		}
		update_watermark();
		$append = '&cmd=edit';
	break;
	case 'setdefault':
		restore_watermark();
		$append = '&cmd=edit&red='.$_POST['setdefault'];
	break;
	case 'delete_all_cached_images':
		$query = $GLOBALS['db']->Execute("SELECT filename FROM ".PREFIX."photo_cache WHERE filename like '%1.jpg'");
		while($data = $query->FetchRow())
		{
			$file2del = get_full_path($data[0]);
			if(!@unlink($file2del)) {
				if(file_exists($file2del)) {
					error_log("watermark: delete all cached images: unable to delete file: ".$file2del);
				}
			}
			else
			{
				$GLOBALS['db']->Execute("DELETE FROM ".PREFIX."photo_cache WHERE filename='".linpha_addslashes($data[0])."'");
			}
		}
	break;
	}
}
/**
 * make sure to return to cache plugin rather than watermark itself if we make
 * use of delete_all_cached_images() from within cache plugin
 */
if(isset($_POST['redirect2cache']))
{
	header('Location: '.TOP_DIR.'/admin.php?page=cache&plugins=1&act=watermark');
}
else
{
	header('Location: '.TOP_DIR.'/admin.php?page=watermark&plugins=1&redirector=general&input='.$_POST['input'].'&img_quality='.$_POST['img_quality'].$append);
}
?>