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

if(!defined('TOP_DIR')) { define('TOP_DIR','../'); }

$type = read_config('maps_type');

switch($type)
{
    case 'google':
        require_once(TOP_DIR."/plugins/maps/google/google.class.php");
        break;
    case 'yahoo':
        require_once(TOP_DIR."/plugins/maps/yahoo/yahoo.class.php");
        break;
    default:
        die("unkown map type");
        break;
}

require_once(TOP_DIR.'/plugins/maps/geocode.class.php');
include_once(TOP_DIR.'/plugins/maps/location.class.php');

/**
 * CMap is the cross map object that allows you to build implementation generic
 * online maps.  Built in PHP due to the fact that each online map has and may
 * have a very different implementation. Javascript, or someother dynamic
 * implementation was consider but not selected.
 *
 * Presently CMap offers only basic functionality for Google Map and Yahoo 
 * AJAX Map. Putting up locations with HTML information bubbles and support 
 * functions like span, center, zoom.  More advanced features such as polylines,
 * XML bubbles, as well as specialized features such as a Google Earth 
 * translator, browser detection for automatic map selection and more supported
 * Map implementations such as Microsofts Virtual Earth, will come over time.
 * Based on CMap by Bryan Rite
 */
class CMap {

	var $location;
	var $locCount;
	var $center;
	var $span;
	var $apiKey;
	var $mapType;
	var $controlSize;
	var $displayType;
	var $container;
	var $zoom;
	var $mapsType;

	/**
	 * CMap constructor.  Defaults to a yahoo map with full controls.
	 * @param string $container The name of the div containing the map.  
	 * As noted above: Cannot name the div "map".
	 */
	function CMap()
	{
		$this->location = "";
		$this->locCount = 0;
		$this->center = NULL;
		$this->span = NULL;
		$this->bounds = NULL;
		$this->apiKey = 0;
		$this->container = NULL;
		$this->controlSize = NULL; //'LRG_CONTROLS';
		$this->mapType = NULL; //'YAHOO_MAP';
		
		//Yahoo Map Specific Fields [YAHOO_MAP_REG, YAHOO_MAP_SAT, YAHOO_MAP_HYB]
		$this->displayType = NULL; //'YAHOO_MAP_REG';
		
		// Yahoo Specific Fields
		$this->zoom = NULL;
	}
	
	/**
	 * addLocation adds Location objects to CMap's location array in sequential
	 * order.  It updates the location counter by one.
	 * @param Location $loc The Location object to save.
	 */
	function addLocation($loc) {
		$this->location[$this->locCount] = $loc;
		$this->locCount += 1;
	}

	/**
	 * Sets the name of the div container Google or Yahoo maps will be 
	 * displayed in.  As of 19/12/2005 the containing div cannot be named "map"
	 * as it will break a Yahoo generated map.  This is not CMap's fault but 
	 * rather a variable conflict in Yahoo's map script.
	 * @param string $name A string of the name of the containing div.
	 */
	function setContainer($name) {
		$this->container = $name;
	}
	
	/**
	 * Some of the online mapping utilities require an identifier or key. 
	 * Use setKey to use your domain or projects unique identifier. 
	 * They can be obtained from the online mapping api sites.  For example, 
	 * you can get Google Map keys at:
	 * http://www.google.com/apis/maps/signup.html 
	 * and a yahoo one at:
	 * http://api.search.yahoo.com/webservices/register_application
	 * @param string $key A string of the key value.
	 */	 
	function setKey($key) {
		$this->apiKey = $key;
	}

	/**
	 * Allows the user to manually set the center of the map by specifying 
	 * a latitude and longitude in decimal degress. If the center is not 
	 * manually set, it is calculated during the drawMap() function using the
	 * inputted locations.
	 * @param float $lat The latitude in decimal degrees.
	 * @param float $lng The longitude in decimal degrees.
	 */
	function setCenter($lat, $lng) {
		$this->center = new Coord($lat, $lng);
	}
	
	/**
	 * Allows the user to manually set the span of the map by specifying a 
	 * latitude difference and longitude difference in decimals.  If the span
	 * is not manually set, it is calculated during the drawMap() function
	 * using the inputted locations.
	 * @param float $x The difference in latitude or x-axis.
	 * @param float $y The difference in longitude or y-axis.
	 */
	function setSpan($x, $y) {
		$this->span = new Coord($x, $y);
	}
	
	/**
	 * Allows the user to manually set the zoom level for a Yahoo Map. 
	 * This is a somewhat arbitrary integer from 1-16 with 1 being the most
	 * zoomed in and each consecutive number afterwards being twice as zoomed
	 * out. If no zoom is set manually it is calculated during the drawMap()
	 * function using the inputted locations.
	 * @param int $lvl The integer of the zoom level. Integer between 1 and 16.
	 */
	function setZoom($lvl) {
		$this->zoom = $lvl;
	}
	
	/**
	 * Allows the user to set the map type between all supported maps using
	 * one of the supplied constants.
	 * @param string @mapType The type of map to display
	 */
	function setMapType($mapType) {
		$this->mapType = $mapType;
	}

	/**
	 * Currently a Google Specific method, allows to change the default 
	 * display type (satellite, hybrid, or cartography).
	 * @param string $displayType 
	 * The valud of the display type, CART_MAP, SATELLITE_MAP, or HYRBID_MAP
	 * are currently supported.
	 */
	function setDisplayType($displayType) {
		$this->displayType = $displayType;
	}
	
	/**
	 * Most of the online maps allow different sized controls for the maps.
	 * This allows you to set the size using one of the constants.
	 * @param string $size The value of the control size, LRG_CONTROLS or 
	 * SML_CONTROLS are currenly supported.
	 */
	function setControlSize($size) {
		$this->controlSize = $size;
	}
	 	
	/**
	 * Will take all the supplied or default input and draw the map in 
	 * the containing div.
	 */
	function drawMap() {
		
		$this->mapsType = read_config('maps_type');
		if($this->mapsType == "google")
		{
			genGoogle::makeMap($this);
		}
		else
		{
			genYahoo::makeMap($this);
		}
			
	}
}
?>
