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
* Delete comments from DB
*
* This file deletes comments from DB for:
* -images
* -albums
* -guestbook...
*
* @package comments
* @subpackage comments_storage
*/

if(!defined('TOP_DIR')) { define('TOP_DIR','..'); }

include_once(TOP_DIR.'/include/session.php');

if($passed && in_group('admin'))
{
	switch($_GET['job'])
	{
	case "image":	// coming from img view
	case "comment":	// coming from stats page?
		
		/**
		 * take care of description when going to delete the last comment
		 * e.g. do not delete description if last comment is removed
		 */
		$query = $GLOBALS['db']->Execute("SELECT md5sum, description FROM ".PREFIX."image_comments " .
				"WHERE ID = '".$_GET['id']."'");
		$result = $query->FetchRow(ADODB_FETCH_ASSOC);				
		
		$query2 = $GLOBALS['db']->Execute("SELECT md5sum FROM ".PREFIX."image_comments " .
				"WHERE md5sum = '".$result['md5sum']."'");		
		$count = $query2->RecordCount();
		
		/**
		 * keep description but delete comment
		 */
		if($count == '1' && !empty($result['description']))
		{
			$update = $GLOBALS['db']->Execute("UPDATE ".PREFIX."image_comments " .
					"SET comment = '' " .
					"WHERE ID='".linpha_addslashes($_GET['id'])."'");
		}
		/**
		 * no description avail, delete the whole thing
		 */
		else
		{
			$delete=$GLOBALS['db']->Execute("DELETE FROM ".PREFIX."image_comments " .
					"WHERE ID='".linpha_addslashes($_GET['id'])."'");
		}
		header("Location: ".TOP_DIR."/".base64_decode($_GET['ref']));
	break;
	case "album":
		$delete=$GLOBALS['db']->Execute("DELETE FROM ".PREFIX."album_comments WHERE ID='".linpha_addslashes($_GET['id'])."'");
		header("Location: ".TOP_DIR."/viewer.php?albid=".$_GET['albid']."&stage=".$_GET['stage']."&pn=".$_GET['pn']);
	break;
	case "guestbook":
		$delete=$GLOBALS['db']->Execute("DELETE FROM ".PREFIX."guestbook WHERE ID='".linpha_addslashes($_GET['id'])."'");
		header("Location: ".TOP_DIR."/plugins/guestbook/guestbook_view.php?mode=view&page=".$_GET['pn']);
	break;
	default:
		echo "WHHOOOPS unknown command received";
	break;
	}
} else {
	echo STR_ACCESS_DENIED;
}

?>
