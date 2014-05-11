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

/**
* Generates Google Map code any unset variables, and support functions.
* Based on CMap by Bryan Rite
* @author bzrudi
* @author Bryan Rite <brite@alkaloid.net>
*/
class genGoogle {

	/**
	 * Main method which will generate the map code in pieces and output it as a whole.
	 * @param CMap $CMap The CMap object used to generate the map code.
	 */
	function makeMap($CMap) {
		// Make sure we have everything we need to make a google map
		if ($CMap->center == NULL) { $CMap->center = genGoogle::calcCenter($CMap); }
		if ($CMap->span == NULL) { $CMap->span = genGoogle::calcSpan($CMap); }
		
		
		// Intrepret object into Google Specific vars
		$CMap->controlSize = (read_config('maps_google_ctrl_size')) ? 'GLargeMapControl()' : 'GSmallMapControl()';
		
		// Generate the map.
		$mapCode = "";
		$mapCode .= genGoogle::headCode($CMap);
		$mapCode .= genGoogle::addPoints($CMap);
		$mapCode .= genGoogle::footCode($CMap);
		echo $mapCode;
	}
	
	/**
	 * Generates the head code for a Google Map.
	 * @access private
	 */
	function headCode($CMap) {
		$head = "
		<script src=\"http://maps.google.com/maps?file=api&amp;v=2&amp;key=" . $CMap->apiKey . "\" type=\"text/javascript\"></script>
		<script type=\"text/javascript\">
			//<![CDATA[
			function createMarker(point, popup) {
				var marker = new GMarker(point);
				// Show this markers index in the info window when it is clicked
				var html = popup;
				GEvent.addListener(marker, \"click\", function() {marker.openInfoWindowHtml(html);});
				return marker;
			};

			if (GBrowserIsCompatible()) {
				var map = new GMap2(document.getElementById(\"" . $CMap->container . "\"));
				map.setCenter(new GLatLng(" . $CMap->center->getLat() . ", " . $CMap->center->getLng() . "));
				map.addControl(new " . $CMap->controlSize . ");
				map.addControl(new GMapTypeControl());
				map.setMapType(" . $CMap->displayType . ");
				" . // This is a huge hack for backwards compatiblity.  Google changed the way
					// you zoom in with maps, so I have to figure a better way of doing this.
				$CMap->span . "; 
				map.setZoom(map.getBoundsZoomLevel(bounds));
			";
		return $head;
	}
	
	/**
	 * @access private
	 */
	function addPoints($CMap) {
		$x = 0;
		$points = "";
		while ($x < count($CMap->location)) {
			$points .= "map.addOverlay(createMarker(new GLatLng(" . $CMap->location[$x]->getLat() . ", " . $CMap->location[$x]->getLng() . "), '" . $CMap->location[$x]->getHtml() . "'));";
			$x += 1;
		}
		return $points;
	}
	
	/**
	 * @access private
	 */	
	function footCode() {
		$foot = "
		}
		//]]>
		</script>";
		return $foot;
	}
	
	function calcSpan($CMap) {
		$x = 0;
		$topLat = $btmLat = $CMap->location[$x]->getLat();
		$topLng = $btmLng = $CMap->location[$x]->getLng();
		while ($x < count($CMap->location)) {
			if ($topLat < $CMap->location[$x]->getLat()) {$topLat = $CMap->location[$x]->getLat();}
			if ($topLng < $CMap->location[$x]->getLng()) {$topLng = $CMap->location[$x]->getLng();}
			if ($btmLat > $CMap->location[$x]->getLat()) {$btmLat = $CMap->location[$x]->getLat();}
			if ($btmLng > $CMap->location[$x]->getLng()) {$btmLng = $CMap->location[$x]->getLng();}		
			$x += 1;
		}
		return "var bounds = new GLatLngBounds( new GLatLng(" . ($btmLat * 1.1) . ", " . ($btmLng * 1.1) . "), new GLatLng(" . ($topLat * 1.1) . ", " . ($topLng * 1.1) . ") );";
	}
	/**
	 * Private method used by Map's extended classes to calculate the 
	 * center coordinates of the map.
	 * @access private
	 * @param CMap $CMap The CMap object used to calculate the center coordinates.
	 * @return Coord The coordinate of the center of the map.
	 */
	function calcCenter($CMap) {
		$x = 0;
		$topLat = $btmLat = $CMap->location[$x]->getLat();
		$topLng = $btmLng = $CMap->location[$x]->getLng();
		while ($x < count($CMap->location)) {
			if ($topLat < $CMap->location[$x]->getLat()) {$topLat = $CMap->location[$x]->getLat();}
			if ($topLng < $CMap->location[$x]->getLng()) {$topLng = $CMap->location[$x]->getLng();}
			if ($btmLat > $CMap->location[$x]->getLat()) {$btmLat = $CMap->location[$x]->getLat();}
			if ($btmLng > $CMap->location[$x]->getLng()) {$btmLng = $CMap->location[$x]->getLng();}		
			$x += 1;
		}
		return new Location( (($topLat + $btmLat) / 2), (($topLng + $btmLng) / 2), '' );
	}	
}
?>