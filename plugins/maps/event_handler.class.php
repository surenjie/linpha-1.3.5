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

include_once(TOP_DIR.'/plugins/maps/map.main.class.php');


/**
 * This class take care of all possible operations in the maps plugin.
 * 
 * @author bzrudi
 */
class EventHandler
{

var $display_type;

/**
 * Constructor
 */
function EventHandler()
{
	
	/**
	* Init globaly new instance of CMAP, the maps base class we need
	*/
	$this->cmap = new CMap();
	
	/**
	 * Force langfile reload
	 */	
	@require(language_file());

	$this->plugin_info = $lang_plugins['maps'];
	
	$this->maps_setup_info_header = "$maps_setup_info_header";
	$this->maps_setup_yahoo_id = "$maps_setup_yahoo_id";
	$this->maps_setup_google_key = "$maps_setup_google_key";
	$this->maps_setup_php_version_warning = "$maps_setup_php_version_warning";
	$this->maps_select_type = "$maps_select_type";
	$this->maps_select_type_info = "$maps_select_type_info";
	$this->maps_select_display_type = "$maps_select_display_type";
	$this->maps_select_display_type_info = "$maps_select_display_type_info";
	$this->submit_button = "$submit_button_folder";
	$this->maps_zoom_level = "$maps_zoom_level";
	$this->maps_zoom_level_info = "$maps_zoom_level_info";
	$this->maps_zoom_location = "$maps_zoom_location";
	$this->maps_zoom_location_info = "$maps_zoom_location_info";
	$this->maps_google_ctrl_size = "$maps_google_ctrl_size";
	$this->maps_google_ctrl_size_info = "$maps_google_ctrl_size_info";
	$this->dir_perms = "$dir_perms";
	$this->str_change_perm = "$str_change_perm";
	$this->maps_str = "$maps_str";
	$this->map_type_ctrl = "$map_type_ctrl";
	$this->map_type_ctrl_info = "$map_type_ctrl_info";
	$this->map_slide_ctrl = "$map_slide_ctrl";
	$this->map_slide_ctrl_info = "$map_slide_ctrl_info";
	$this->map_pan_ctrl = "$map_pan_ctrl";
	$this->map_pan_ctrl_info = "$map_pan_ctrl_info";
	$this->map_auto_popup = "$map_auto_popup";
	$this->map_auto_popup_info = "$map_auto_popup_info";
	$this->map_album_add = "$map_album_add";
	$this->map_marker_del = "$map_marker_del";
	$this->map_search_location = "$map_search_location";
	$this->map_location_here = "$map_location_here";
	$this->map_new_search = "$str_new_search";
	$this->map_search_loc_button = "$map_search_loc_button";
	$this->map_add_location = "$map_add_location";
	$this->map_assign_album = "$map_assign_album";

}

/**
 * init DB
 */
function initDB()
{
	if($this->createInitialDB())
	{		
		$new_loc = $GLOBALS['db']->Execute("INSERT INTO " .
				"".PREFIX."maps_plugin " .
				"(lat, lon, country, state, zip, city) " .
				"VALUES ('51.52', '-0.1', 'UNITED KINGDOM', " .
				"'England', '00000', 'London')");
		if($new_loc): update_config('1', 'maps_setup_ok'); endif;
	}
	else
	{
		echo "Failed create DB -> check eventHandler::createInitialDB()";
	}
}// end initDB



/**
 * This method creates the initial GPS database table
 * @param none
 * @return bool Database create ok or not 
 * @author bzrudi
 */
function createInitialDB()
{
	
	if(read_config('db_type') == "sqlite")
	{
	$initdb = $GLOBALS['db']->Execute("CREATE TABLE ".PREFIX."maps_plugin (" .
			"id INTEGER PRIMARY KEY, " .
			"lat FLOAT DEFAULT '0.0', " .
			"lon FLOAT DEFAULT '0.0', " .
			"imgid INTEGER DEFAULT '0', " .
			"albid INTEGER DEFAULT '0', " .
			"stage INTEGER DEFAULT '0', " .
			"country VARCHAR(255), " .
			"state VARCHAR(255), " .
			"street VARCHAR(255), " .
			"zip VARCHAR(15), " .
			"city VARCHAR(50), " .
			"gpselevation INT DEFAULT '0', " .
			"gpstime VARCHAR(100), " .
			"gpscomment VARCHAR(255), " .
			"gpsdescription  VARCHAR(255), " .
			"gpsname VARCHAR(255), " .
			"gpssymbol VARCHAR(255), " .
			"marker VARCHAR(255) )");
	}
	elseif(read_config('db_type') == "mysql")
	{
	$initdb = $GLOBALS['db']->Execute("CREATE TABLE ".PREFIX."maps_plugin (" .
			"id INTEGER AUTO_INCREMENT, " .
			"lat FLOAT DEFAULT '0.0', " .
			"lon FLOAT DEFAULT '0.0', " .
			"imgid INT DEFAULT '0', " .
			"albid INT DEFAULT '0', " .
			"stage INT DEFAULT '0', " .
			"country VARCHAR(255), " .
			"state VARCHAR(255), " .
			"street VARCHAR(255), " .
			"zip VARCHAR(15), " .
			"city VARCHAR(50), " .
			"gpselevation INT DEFAULT '0', " .
			"gpstime VARCHAR(100), " .
			"gpscomment VARCHAR(255), " .
			"gpsdescription  VARCHAR(255), " .
			"gpsname VARCHAR(255), " .
			"gpssymbol VARCHAR(255), " .
			"marker VARCHAR(255), " .
			"PRIMARY KEY (id) )");
	}
	elseif(read_config('db_type') == "pgsql")
	{
	$initdb = $GLOBALS['db']->Execute("CREATE TABLE ".PREFIX."maps_plugin (" .
			"id SERIAL PRIMARY KEY, " .
			"lat FLOAT DEFAULT '0.0', " .
			"lon FLOAT DEFAULT '0.0', " .
			"imgid INT DEFAULT '0', " .
			"albid INT DEFAULT '0', " .
			"stage INT DEFAULT '0', " .
			"country VARCHAR(255), " .
			"state VARCHAR(255), " .
			"street VARCHAR(255), " .
			"zip VARCHAR(15), " .
			"city VARCHAR(50), " .
			"gpselevation INT DEFAULT '0', " .
			"gpstime VARCHAR(100), " .
			"gpscomment VARCHAR(255), " .
			"gpsdescription  VARCHAR(255), " .
			"gpsname VARCHAR(255), " .
			"gpssymbol VARCHAR(255), " .
			"marker VARCHAR(255) )");
	}
	else
	{
		echo "Unknown Database Type, Aborting Now!";
	}
	
	if($initdb){
		return true;
	}else{
		return false;
	}
				
}//end createInitialDB



/**
 * This method sets up the maps admin page, once setup is complete
 * 
 * @param none
 * @author bzrudi
 */
function mapsPluginAdminPage()
{
	/**
	 * prepare selects
	 */
	$maps_type = array('yahoo' => "Yahoo Maps", 'google' => "Google Maps");
	$maps_display_type = array('1' => "Hybrid", '2' => "Satellite", '3' => "Regular");
	$maps_google_ctl_size = array('1' => "Large", '0' => "Small");
	$maps_zoom = array('1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5',
				'6' => '6', '7' => '7', '8' => '8', '9' => '9', '10' => '10',
				'11' => '11', '12' => '12', '13' => '13', '14' => '14', 
				'15' => '15', '16' => '16');	
	$loc = $GLOBALS['db']->Execute("SELECT DISTINCT city " .
				"FROM ".PREFIX."maps_plugin ");
	while($data = $loc->fetchRow()){$locations[$data['0']] = $data['0'];}
				
	echo "<h1>".$this->maps_setup_info_header."</h1><hr noshade>" .
	"<form name='mapssetup' method='POST' action='".TOP_DIR.'/plugins/maps/db_handler.php'."'>" .
	"<table class='admintable' width='100%' cellspacing='0'>" .
	"<tr><th class='maintable' colspan='4'>".$this->maps_setup_info_header."</th></tr>";

	$this->print_textfield($this->maps_setup_yahoo_id,'maps_yahoo_id',read_config('maps_yahoo_id'),"<--".$this->maps_setup_yahoo_id."",'yahooid','200');
	$this->print_textfield($this->maps_setup_google_key,'maps_google_key',read_config('maps_google_key'),"<--".$this->maps_setup_google_key."",'googlekey','200');

	echo "<tr><td class='maintable'>".$this->maps_select_type."</td>" .
		"<td class='maintable'>";

		form_generate_select("maps_type","1"," style='width:200'",read_config('maps_type'),$maps_type);

	echo "</td><td class='maintable' align='right'>".$this->maps_select_type_info."</td>" .
		"<td class='maintable'>&nbsp;</td></tr>";

	echo "<tr><td class='maintable'>".$this->maps_select_display_type."</td>" .
		"<td class='maintable'>";

		form_generate_select("maps_display_type","1"," style='width:200'",read_config('maps_display_type'),$maps_display_type);

	echo "</td><td class='maintable' align='right'>".$this->maps_select_display_type_info."</td>" .
		"<td class='maintable'>&nbsp;</td></tr>";

	echo "<tr><td class='maintable'>".$this->maps_google_ctrl_size."</td>" .
		"<td class='maintable'>";

		form_generate_select("maps_google_ctrl_size","1"," style='width:200'",read_config('maps_google_ctrl_size'),$maps_google_ctl_size);

	echo "</td><td class='maintable' align='right'>".$this->maps_google_ctrl_size_info."</td>" .
		"<td class='maintable'>&nbsp;</td></tr>";
	
	echo "<tr><td class='maintable'>".$this->maps_zoom_level."</td>" .
		"<td class='maintable'>";

		form_generate_select("maps_default_zoom","1"," style='width:200'",read_config('maps_default_zoom'),$maps_zoom);

	echo "</td><td class='maintable' align='right'>".$this->maps_zoom_level_info."</td>" .
		"<td class='maintable'>&nbsp;</td></tr>";

	echo "<tr><td class='maintable'>".$this->maps_zoom_location."</td>" .
		"<td class='maintable'>";

		form_generate_select("maps_default_zoom_location","1"," style='width:200'",read_config('maps_default_zoom_location'),$locations);

	echo "</td><td class='maintable' align='right'>".$this->maps_zoom_location_info."</td>" .
		"<td class='maintable'>&nbsp;</td></tr>";
		
	print_radio("".$this->map_type_ctrl."",'maps_yahoo_type_control',read_config('maps_yahoo_type_control'),"".$this->map_type_ctrl."",'maptypes');
	print_radio("".$this->map_slide_ctrl."",'maps_yahoo_slide_control',read_config('maps_yahoo_slide_control'),"".$this->map_slide_ctrl_info."",'mapslide');
	print_radio("".$this->map_pan_ctrl."",'maps_yahoo_pan_control',read_config('maps_yahoo_pan_control'),"".$this->map_pan_ctrl_info."",'mappan');
	print_radio("".$this->map_auto_popup."",'maps_marker_auto_popup',read_config('maps_marker_auto_popup'),"".$this->map_auto_popup_info."",'mapmarkerpop');

	echo "<tr><td class='maintable' colspan='4' align='center'>".
		"<input type='hidden' name='job' value='settings'>".
		"<input type='submit' value=".$this->submit_button.">
	</table>
	</form>	";
	
	echo "<h1>".$this->dir_perms."</h1><hr noshade>";
	echo "".$this->str_change_perm." ".$this->maps_str." <br /><br />";

	print_permissions('maps',TOP_DIR.'/admin.php?page=maps&amp;plugins=1');			

}

/**
 * This method retreives lat and longitude information as well as some other 
 * information using the yahoo geocode api.  
 * 
 * @param string location to search
 * @author bzrudi
 */
function getLocationCoordinates($loc_query, $action, $location)
{
	if($loc_query == 'from_db') //set/get markers fom db
	{
		$data = $GLOBALS['db']->Execute("SELECT DISTINCT * " .
				"FROM ".PREFIX."maps_plugin");
		while($markers = $data->fetchRow(ADODB_FETCH_ASSOC))
		{
		$reset = false;  
			/**
			 * take care of deleted images, just do not show up a broken
			 * image and reset also albid and stage to defaults.
			 * sure we could also let this check by db_api, but it's too much 
			 * overhead IMHO
			 */
			$query = $GLOBALS['db']->Execute("SELECT id FROM ".PREFIX."photos " .
					"WHERE id = ".$markers['imgid']."" );
				if($query->EOF)
				{
					$reset = $GLOBALS['db']->Execute("UPDATE ".PREFIX."maps_plugin " .
						"SET imgid='0', " .
						"albid='0', " .
						"stage='0' " .
						"WHERE imgid=".$markers['imgid']."");
					$reset = true;	
				}
			
			
			/**
			 * allow delete of Markers by admin users
			 */
			if(in_group("admin"))
			{
				$add = '[<a href='.TOP_DIR.'/maps_view.php?job=asignalb&id='.$markers['id'].'>'.$this->map_album_add.'</a>]';				
				$delete = '[<a href='.TOP_DIR.'/plugins/maps/db_handler.php?job=del&id='.$markers['id'].'>'.$this->map_marker_del.'</a>]';				
			}
			else
			{
				$add = "";
				$delete = "";
			}			 		
			if(!empty($markers['imgid']) && !$reset == true)
			{		
			$location = new Location($markers['lat'], $markers['lon'], 
			'<div class="someCssClass">' .
			'<a href='.TOP_DIR.'/viewer.php?albid='.$markers['albid'].'&stage='.$markers['stage'].' target="_self">' .
			'<img src='.TOP_DIR.'/get_thumbs.php?id='.$markers['imgid'].'></img></a><br>' .
			'City: '.$markers['city'].'<br>' .
			'Street: '.$markers['street'].'<br>' .
			'State: '.$markers['state'].'<br>' .
			'Country: '.$markers['country'].'<br>' .
			''.$delete.' </div>');
			}
			else
			{
			$location = new Location($markers['lat'], $markers['lon'], 
			'<div class="someCssClass">' .
			'City: '.$markers['city'].'<br>' .
			'Street: '.$markers['street'].'<br>' .			
			'State: '.$markers['state'].'<br>' .
			'Country: '.$markers['country'].'<br>' .
			''.$add.'<br>' .
			''.$delete.' </div>');
			}		
		$this->cmap->addLocation($location);
		}
	}
	elseif($loc_query == 'from_query')// set marker from location search
	{
		
		/**
		 * prefer Google geocode over yahoo if key google is set
		 */

		if(strlen(read_config('maps_google_key')) > 35)
		{
			list($lat, $lon, $zip, $city, $street, $state, $country) = 
			GeoCode::getLatLonByLocationGoogle($location);
		}
		else
		{
			list($lat, $lon, $zip, $city, $street, $state, $country) = 
			GeoCode::getLatLonByLocationYahoo($location);
		}

		$location = new Location($lat, $lon, '<p class="someCssClass">' .
				'City: '.$city.'<br>' .
				'State: '.$state.'<br>' .
				'Country: '.$country.'</p>');
		$this->cmap->addLocation($location);
	}
	else
	{
		echo "Unknown loc_query received";
	}
	
	if($action == "search") //search location request
	{		
		echo "<hr width='90%' noshade>" .
		"<form name='maps_search' method='POST' action='maps_view.php'>" .
		"<table class='admintable' width='90%' cellspacing='0'>" .
		"<tr><td class='maintable'>".$this->map_search_location."</td>" .
		"<td class='maintable'>" .
			"<input type='text' name='location' align='right' style='width: 300px;' value='".$this->map_location_here."')'>" .
			"<td class='maintable' align='center'>" .
			"<input type='hidden' name='action' value='edit'>" .
			"<input type='hidden' name='loc_query' value='from_query'>" .
			"<input type='submit' value='".$this->map_search_loc_button."'>" .
		"</table>" .
		"</form>";
	}
	elseif($action == "edit")
	{
		echo "<hr width='90%' noshade>" .
		"<form name='maps_edit' method='POST' action='plugins/maps/db_handler.php'>" .
		"<table class='admintable' width='90%' cellspacing='0'>" .
		"<tr><td class='maintable'>Latitude<br />" .
			"<input type='text' name='lat' align='right' style='width: 70px;' value='".$lat."')'>" .
			"<td class='maintable'>Longitude<br />" .
			"<input type='text' name='lon' align='right' style='width: 70px;' value='".$lon."')'>" .
			"<td class='maintable'>Country<br />" .
			"<input type='text' name='country' align='right' style='width: 110px;' value='".$country."')'>" .
			"<td class='maintable'>State<br />" .
			"<input type='text' name='street' align='right' style='width: 110px;' value='".$street."')'>" .
			"<td class='maintable'>Street<br />" .
			"<input type='text' name='state' align='right' style='width: 110px;' value='".$state."')'>" .
			"<td class='maintable'>Zip<br />" .
			"<input type='text' name='zip' align='right' style='width: 40px;' value='".$zip."')'>" .
			"<td class='maintable'>City<br />" .
			"<input type='text' name='city' align='right' style='width: 90px;' value='".$city."')'>" .
			"<td class='maintable' align='center'>";
			if(check_permissions('maps'))
			{
				echo "<input type='hidden' name='action' value='save_location'>".
					"<input type='submit' value='".$this->map_add_location."'>";
			}
		echo "</table></form>";		
		
		echo "<a href='maps_view.php'><b>".$this->map_new_search."</b></a>";
	}
}



/**
 * Init main Yahoo map. All default setting need to be changed here, like
 * display type, zoom, cart type and others
 * 
 * @param none
 * @return none
 */
function drawNewMap()
{
	$this->cmap->setContainer(read_config('maps_type')."Map");
	$this->cmap->setMapType(strtoupper(read_config('maps_type'))."_MAP"); 
	$this->cmap->setDisplayType($this->getDisplayType()); 
	if(read_config('maps_type') == 'yahoo')
	{
		$this->cmap->setKey(read_config('maps_yahoo_id'));
		$this->cmap->setZoom(read_config('maps_default_zoom')); 
	}
	else
	{
		$this->cmap->setKey(read_config('maps_google_key')); 
	}
	$this->cmap->drawMap();	
}

/**
* This method is used to format a new config line (HTML) with text field 
* as input
*
* @param string $string1, short description of option
* @param string $textfield_name, name of option in db (linpha_config)
* @param string $textfield_value, value of option to show (read from config) 
* @param string $string2, long description of option
* @param string $helplink, name of href to help page
* @param int $tfwidth, width of textfield in px (default 100px)
* @return string HTML textfield line
*/
function print_textfield($string1,$textfield_name,$textfield_value,$string2,$helplink,$tfwidth)
{
	echo "<tr>".
			"<td class='admintable' width='*'>".$string1."</td>".
			"<td class='admintable' width='150' style='padding: 1px;'>" .
			"&nbsp;<input type='text' name='".$textfield_name."' style='width: ".$tfwidth.";' align='right' maxlength=100 value='".htmlspecialchars($textfield_value,ENT_QUOTES)."'></td>".
			"<td class='admintable' width='*' align='right'>".$string2."</td>".
			"<td class='admintable' width='20' align='center' width='20'>";
	putHelpButton($helplink);
	echo "</td></tr>";
}

function addAlbum2Location($albid, $stage)
{

	/**
	 * get required image id, this is somewhat tricky as viewer.php does 
	 * not know about an imgid when showing album folders
	 */
	$stage = get_stage(); 
	$query = $GLOBALS['db']->Execute("SELECT path, name " .
			"FROM ".PREFIX.$stage."_lev_album " .
			"WHERE id='".linpha_addslashes($albid)."'");
	$album_info = $query->FetchRow(ADODB_FETCH_ASSOC);
	$prev_path = $album_info['path'];
	$album_name = $album_info['name'];
	
	$query = $GLOBALS['db']->Execute("SELECT id FROM ".PREFIX."photos ".
			"WHERE prev_path = '".linpha_addslashes($prev_path)."'");
	$imgid = $query->FetchRow(ADODB_FETCH_ASSOC);
	
	echo "<h1>".$this->map_assign_album."</h1><hr>" .
		"<table class='admintable'><tr><td class='admintable' align='center'>" .
		"<span>$album_name</span><br /><br />" .		
		"&nbsp;&nbsp;&nbsp;&nbsp;" .
		"<img src=".TOP_DIR.'/get_thumbs.php?id='.$imgid['0'].''." ></img>" .
		"&nbsp;&nbsp;&nbsp;&nbsp;" .
		"</td><td class='admintable' align='center'>";
	/**
	 * show up existing locations
	 */
	$data = $GLOBALS['db']->Execute("SELECT DISTINCT * " .
				"FROM ".PREFIX."maps_plugin " .
				"ORDER BY country ASC");
	while($markers = $data->fetchRow(ADODB_FETCH_ASSOC))
	{
		$locations[$markers['id']] = $markers['country']."-".$markers['state']."-".$markers['zip']."-".$markers['city']."-".$markers['id']; 
	}

	echo "<form name='location' action=".TOP_DIR.'/plugins/maps/db_handler.php'." method='GET'>"; 
		form_generate_select("location", "10", "style='width: 400px'","", $locations, "", "300");		
	echo "<input type='hidden' name='job' value='add'>" .	
	 	"<input type='hidden' name='albid' value=".$albid.">" .	
		"<input type='hidden' name='imgid' value=".$imgid['0'].">" .	
		"<input type='hidden' name='stage' value=".$stage.">" .
		"<br /><br /><input type='submit' value='".$this->map_assign_album."'>" .
		"</form></td></tr>" .
		"<tr><td colspan='3' class='admintable'>" .
		"<a href=".TOP_DIR.'/maps_view.php'.">".$this->map_add_location."</a>" . 
		"</td></tr></table>";
}


function addLocation2Album($id)
{

	echo "<h1>".$this->map_assign_album."</h1><hr>" .
		"<table class='admintable'><tr> ".
		"<td class='admintable' align='center'>";
		/**
		 * show up existing albums
	 	*/
	echo "<form name='alb_location' action=".TOP_DIR.'/plugins/maps/db_handler.php'." method='POST'>"; 

		build_album_select($with_all_albs_entry = false);

	echo "<input type='hidden' name='job' value='loc2alb'>" .
		"<input type='hidden' name='id' value=".$id.">" .	
		"<br /><br /><input type='submit' value='Assign Album'>" .
		"</form></td></tr>" .
		"</table>";
}

/**
 * HYBRID_MAP = 1
 * SATELLITE_MAP = 2
 * CART_MAP = 3 
 *  
 */
function getDisplayType()
{
	$dis_type = read_config('maps_display_type'); // SAT,HYBRID or CART Map
	$maps_type = read_config('maps_type'); // Google or Yahoo Map
	
	if($maps_type == "google")
	{
		switch($dis_type)
		{
			case '1': $this->display_type = "G_HYBRID_TYPE";break;
			case '2': $this->display_type = "G_SATELLITE_TYPE";break;
			case '3': $this->display_type = "G_MAP_TYPE";break;
		}
	}
	else
	{
		switch($dis_type)
		{
			case '1': $this->display_type = "YAHOO_MAP_HYB";break;
			case '2': $this->display_type = "YAHOO_MAP_SAT";break;
			case '3': $this->display_type = "YAHOO_MAP_REG";break;
		}
	}
return $this->display_type;
	
}

}//end class

?>