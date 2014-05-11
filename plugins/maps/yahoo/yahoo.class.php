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
* Generates Yahoo Map code any unset variables, and support functions.
* Based on CMap by Bryan Rite
* @author bzrudi
* @author Bryan Rite <brite@alkaloid.net>
*/
class genYahoo
{

var $type_control;
var $slide_control;
var $pan_controlvar;
var $default_zoom_location;

	/**
	 * Main method which will generate the map code in pieces and output 
	 * it as a whole.
	 * @param CMap $CMap The CMap object used to generate the map code.
	 */
	function makeMap($CMap) {
		// Make sure we have everything we need to make a yahoo map
		if ($CMap->center == NULL) { $CMap->center = genYahoo::calcCenter($CMap); }
		
		// The user can set zoom to an integer, otherwise we turn it into a string
		// that will generate an integer on the fly based upon the size of the container.
		if ($CMap->zoom == NULL) { $CMap->zoom = genYahoo::calcZoom($CMap); }
		
		// Add Controls to Map
		if(read_config('maps_yahoo_slide_control'))
		{
			$this->slide_control = "map.addZoomLong();";
		}else{
			$this->slide_control ="";	
		}	
		
		if(read_config('maps_yahoo_pan_control'))
		{
			$this->pan_control = "map.addPanControl();";
		}else{
			$this->pan_control ="";
		}	
			
		if(read_config('maps_yahoo_type_control'))
		{
			$this->type_control = "map.addTypeControl();";
		}else{
			$this->type_control ="";	
		}	

		/**
		 * get/set default zoom location
		 */
		if(!isset($_POST['loc_query'])): $_POST['loc_query'] = 'from_db'; endif; 
		if($_POST['loc_query'] == 'from_query') //we came from search location
		{
			@$this->default_zoom_location = "var center = new YGeoPoint(".$_SESSION['lat'].", ".$_SESSION['lon'].");";	
		}
		else
		{
		$loc = $GLOBALS['db']->Execute("SELECT DISTINCT lat, lon, city " .
				"FROM ".PREFIX."maps_plugin " .
				"WHERE city='".read_config('maps_default_zoom_location')."'");			
		$locdata = $loc->fetchRow(ADODB_FETCH_ASSOC);
		$this->default_zoom_location = "var center = new YGeoPoint(".$locdata['lat'].", ".$locdata['lon'].");";	
		}

		// Generate the map.
		$mapCode = "";
		$mapCode .= genYahoo::headCode($CMap);
		$mapCode .= genYahoo::addPoints($CMap);
		$mapCode .= genYahoo::footCode($CMap);
		echo $mapCode;
	}
	
	/**
	 * Generates the head code for a Yahoo Map.
	 * @access private
	 */
	function headCode($CMap) {		
		$head = "
		<script type=\"text/javascript\" src=\"http://api.maps.yahoo.com/ajaxymap?v=3.4&appid=" . $CMap->apiKey . "\"></script>
		<script type=\"text/javascript\">
			function createMarker(geopoint, html) {				
				var marker = new YMarker(geopoint);
				YEvent.Capture(marker, EventsList.MouseClick, function() { marker.openSmartWindow(html) });
				return marker;
			}
			var map = new YMap(document.getElementById('" . $CMap->container . "'));
			".$this->slide_control."
			".$this->pan_control."
			".$this->type_control."
			map.setMapType(".$CMap->displayType.")
			".$this->default_zoom_location."
			var zoom = " . $CMap->zoom . "
			map.drawZoomAndCenter(center, zoom);									
		";
		return $head;
	}
			//var center = new YGeoPoint(" . $CMap->center->getLat() . ", " . $CMap->center->getLng() . ");
	
	/**
	 * @access private
	 */
	function addPoints($CMap) {
		$x = 0;
		$points = "";
		while ($x < count($CMap->location)) {
			if(read_config('maps_marker_auto_popup'))
			{
			$points .= "var dummy = new YGeoPoint(".$CMap->location[$x]->getLat().", ".$CMap->location[$x]->getLng().");\n";
			$points .= "var marker = new YMarker(dummy);\n";
			$points .= "marker.addLabel($x);\n";
			$points .= "var _txt = '".$CMap->location[$x]->getHtml()."';\n";
			$points .= "marker.addAutoExpand(_txt);\n";
			$points .= "map.addOverlay(marker);\n";
			}
			else
			{
				$points .= "map.addOverlay(createMarker(new YGeoPoint(" . $CMap->location[$x]->getLat() . ", " . $CMap->location[$x]->getLng() . "), '" . $CMap->location[$x]->getHtml() . "'));";
			}
			$x += 1;
		}
		return $points;
	}
	
	/**
	 * @access private
	 */
	function footCode() {
		$foot = "
		</script>";
		return $foot;
	}
	
	/**
	 * @access private
	 */
	function calcZoom($CMap) {
		// Loop through all the points and find the farthest two away from the center.
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
		// Kick out, otherwise the map can be too zoomed in and the points are lost on the edges.
		$topLat *= 1.15;
		$topLng *= 1.15;
		$btmLat *= 1.15;
		$btmLng *= 1.15;
		return "map.getZoomLevel(new YGeoPoint(" . $topLat . ", " . $topLng . "), new YGeoPoint(" . $btmLat . ", " . $btmLng . "));";
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

	/**
	 * Private method used to calculate the span, which is the difference 
	 * between the most outlier coordinates.
	 * @access private
	 * @param CMap $CMap The CMap object used to calculate the span lat/long pair.
	 * @return Coord The latitude longitude pair of the span.
	 */
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
		// Personal kick out - if not, maps are too close.
		$spanLat = (($topLat - $btmLat)*1.15);
		$spanLng = (($topLng - $btmLng)*1.15);
		return new Location( $spanLng, $spanLat , '');
	}

}
?>
