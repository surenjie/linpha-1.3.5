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

if(!defined('TOP_DIR')) { define('TOP_DIR','../../'); }
 
/**
* Class to initialized the location constructor with all the 
* coordinate data and html
*
* @author bzrudi (based on Cmap)
*/
class Location
{
	var $lat;
	var $lon;
	var $html;
	
	/**
	 * Location constructor initialized with all the coordinate data and html.
	 * @param float $lat The latitude of the Location.
	 * @param float $lng The longitude of the Location.
	 * @param string $html The html for the location bubbles.
	 */
	function Location($lat, $lng, $html)
	{
		$this->lat = $lat;	
		$this->lng = $lng;
		$this->html = $html;
	}
	
	/**
	 * Gets the latitude of the Location.
	 * @return float Latitude of the location.
	 */
	function getLat() {
		return $this->lat;
	}
	
	/**
	 * Gets the longitude of the Location.
	 * @return float The longitude of the location.
	 */
	function getLng() {
		return $this->lng;
	}
	
	/**
	 * Gets the html associated with the location.
	 * @return string The HTML for the locations bubble.
	 */
	function getHtml() {
		return $this->html;
	}
	
	/**
	 * Turns a coordinate into a string
	 * @return string The coordinate in string form.
	 */
	 function toString() {
	 	return "" . $this->lat . ", " . $this->lng;
	}
}
?>