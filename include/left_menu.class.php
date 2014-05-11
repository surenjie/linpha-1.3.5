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
* This class builds the left navigation menu.
*
* This class is used to create the left menu view in various files.
* These include index.php, video_site.php, *_stage_album.php.
*
* @author bzrudi
* 
* <ul style='margin: 0px; padding-left: 25px;'>
* <li class='".$class."' style='padding-left: 3px;'>
* the spaces between folder icon and folder name are very different
* on different browsers
* with this settings it should work with firefox and ie if we don't set
* anything, we waste space on the left side and ie doesn't have a space
* between icon and name
*/

if(!defined('TOP_DIR')) { define('TOP_DIR','..'); }

class LeftMenuView{

var $order_first = 'name';
var $order = 'name';
var $stage_path;

/**
* constructor
*/
function LeftMenuView()
{
	if(!isset($_GET['stage']) OR !isset($_GET['albid']))
	{
		$this->stage_path = Array();
	}
	else
	{
		$this->buildStagePath();
	}
}

/**
* build the album tree
* if we have the albid of the stage 3, get the albid of the parent folder at stage 2 and stage 1
*/
function buildStagePath()
{
	$i = $_GET['stage'];
	$this->stage_path[$_GET['stage']] = $_GET['albid'];
	$albid = $_GET['albid'];

	while($i > 1)
	{
		/**
		* query path
		*/
		$stage = get_stage($i);
		$query = $GLOBALS['db']->$GLOBALS['query_statement']("SELECT id, path FROM ".PREFIX.$stage."_lev_album WHERE id = '".linpha_addslashes($albid)."'");
		$data = $query->FetchRow();

		/**
		* remove last folder from path
		*/
		$pos = strrpos($data['path'],'/');
		$prev_path = substr($data['path'],0,$pos);

		/**
		* get albid from prev_path
		*/
		$stage = get_stage($i-1);
		$query = $GLOBALS['db']->$GLOBALS['query_statement']("SELECT id FROM ".PREFIX.$stage."_lev_album WHERE path = '".linpha_addslashes($prev_path)."'");
		$data = $query->FetchRow();
		$albid = $data['id'];
		
		$this->stage_path[$i-1] = $albid;

		$i--;
	}
}

/**
* This method just prepares table tags for the left menu
* 
* @return  string  HTML table layout 
*/
function generateTableHead()
{
	global $album;	// lang entry
	?>
	<tr>
		<td width='200' valign='top' class='leftmenu'>
			<div class='leftmenuhead'>
				<?php echo $album."\n"; ?>
			</div>
	<?php
}

/**
* This method just appends table tags end for left menu
* 
* @return  string  HTML table layout
*/
function generateTableFooter() {
	?>
		</td>
<?php
}

/**
* build the menu and call buildMenuSubStages()
*/
function buildMenu()
{
    ?>
    <br />
    <?php


	$this->showNewImagesFolder();
	$this->showMapsView();
	$this->showFacetMap();

	$query = $GLOBALS['db']->$GLOBALS['query_statement']("SELECT id, name, path, groups FROM ".PREFIX."first_lev_album WHERE ".sql_perm()." ORDER by ".$this->order_first);
	while($data = $query->FetchRow(ADODB_FETCH_ASSOC))
	{
        if(isset($this->stage_path[1]) && $data['id'] == $this->stage_path[1])
        {
            $folder_open = true;
        }

		if(isset($folder_open)) {
			$class = 'leftmenu_li_open';
		} else {
			if($data['groups']==";public;") {
				$class = 'leftmenu_li_public';
			} else {
				$class = 'leftmenu_li_secret';
			}
		}
        echo "\t<div class='leftmenu_li_img ".$class."'></div>\n";
        
        echo "\t<div class='leftmenu_li_link'>";
        /*if(isset($folder_open))
        {
            echo '>';
        }*/
		echo "<a class='leftmenu' href='".TOP_DIR."/viewer.php?albid=".$data['id']."&stage=1'>".
			htmlspecialchars($data['name'],ENT_QUOTES)."</a>\n";

		/**
		* build sub stages
		*/
		if(isset($folder_open))
		{
			$this->buildMenuSubStages(2,$data['name'],$data['path']);
		}

		echo "\t</div>\n\n";
        
        unset($folder_open);
	}
}

/**
* build subentries of the menu
*
* @uses buildMenu()
*/
function buildMenuSubStages($i,$prev_name,$prev_path)
{
	$stage = get_stage($i);
	
	$query = $GLOBALS['db']->$GLOBALS['query_statement']("SELECT id, name, path FROM ".PREFIX.$stage."_lev_album ".
		"WHERE prev_alb_name = '".linpha_addslashes($prev_name)."' ".
		"AND path LIKE '".linpha_addslashes($prev_path)."%' ".
		"AND name <> 'has_images' ".
		"ORDER by ".$this->order);
	while($data = $query->FetchRow())
	{
		if(isset($this->stage_path[$i]) && $data['id'] == $this->stage_path[$i])
		{
			$folder_open = true;
			if($i<3)
			{
				$open_folder = true;
			}
		}

		echo "\t\t<div class='leftmenu_li_substages'>\n";
		echo "\t\t".str_repeat('&nbsp;',$i-2);

        if(isset($folder_open)) {
            echo '>';
        } else {
        	echo '+';
        }
		echo "<a class='leftmenu' href='".TOP_DIR."/viewer.php?".
			"albid=".$data['id']."&stage=".$i."'>".htmlspecialchars($data['name'],ENT_QUOTES)."</a>\n";
		echo "\t\t</div>\n";

		/**
		* build sub stages
		*/
		if(isset($open_folder))
		{
			$this->buildMenuSubStages($i+1,$data['name'],$data['path']);
		}
		unset($folder_open, $open_folder);
	}
}

/**
* This method shows the "new images" folder if activaed
* and only if there are new images
*/
function showNewImagesFolder()
{
	if(read_config('showNewImagesFolder'))
	{
		$str_where = new_images_sql_query_str();
		$sql = sql_query_str(array('id'),$str_where);
		$sql .= " LIMIT 1";
		$select = $GLOBALS['db']->$GLOBALS['query_statement']($sql);
		$num = $select->RecordCount();

		if($num > 0)
		{
			global $str_new_images;
			
			if(isset($GLOBALS['title']) && $GLOBALS['title'] == 'new_images') {
				$class = "leftmenu_li_open";
			} else {
				$class = "leftmenu_li_public";
			}
        	echo "\t<div class='leftmenu_li_img ".$class."'></div>\n";
        	
        	echo "\t<div class='leftmenu_li_link'>";
			echo "<a class='leftmenu' href='".TOP_DIR."/new_images.php'>:: ".$str_new_images." ::</a>";
			
			echo "</div>\n\n";
		}
	}
}

/**
* This method shows the map view link if activated
*/
function showMapsView()
{
	if(read_plugins_config('maps') && read_config('maps_setup_ok')
		&& check_permissions('maps'))
	{
		global $lang_plugins;
		
		if(isset($GLOBALS['title']) && $GLOBALS['title'] == 'maps') {
			$class = "leftmenu_li_open";
		} else {
			$class = "leftmenu_li_public";
		}
    	echo "\t<div class='leftmenu_li_img ".$class."'></div>\n";
    	
    	echo "\t<div class='leftmenu_li_link'>";
		echo "<a class='leftmenu' href='".TOP_DIR."/maps_view.php'>";
		echo ":: Maps View ::</a>";
		echo "</div>\n\n";
	}
}

/**
* This method shows the facet map link if activated
*/
function showFacetMap()
{
	if(read_plugins_config('facetmap'))
	{
		global $lang_plugins;

    	echo "\t<div class='leftmenu_li_img leftmenu_li_public'></div>\n";
    	
    	echo "\t<div class='leftmenu_li_link'>";
		echo "<a class='leftmenu' href='".TOP_DIR."/plugins/facetmap/browse_album.php?fmlocation='>";
		echo ":: ".$lang_plugins['facetmap']." ::</a>";
		echo "</div>\n\n";
	}
}

}	// end class
