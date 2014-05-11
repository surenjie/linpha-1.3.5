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
* Class to get latitude, longitude and other stuff frome a location
* uses yahoo geocode api
*
* @author bzrudi
*/
class GeoCode
{
var $accuracy;
var $status;
var $response_code;
var $error;
var $message;

    function GeoCode()
    {
    }

	/**
	 * Get coordinates based on a location.
	 * We use Yahoos geocode api for that porpose, possible queries:
	 * city, state
     * city, state, zip
     * zip
     * street, city, state
     * street, city, state, zip
     * street, zip
	 * 
	 * @param string location name to get lon and lat
	 * @return array long, lat, zip, city, state, country
	 * @author bzrudi
	 */
	function getLatLonByLocationYahoo($location)
	{ 
		
		//Yahoo uses "," as string seperator while Google uses "+" ;-)
		$location = str_replace(" ", ",", $location);
		
		$req = "http://api.local.yahoo.com/MapsService/V1/" .
				"geocode?appid=".read_config('maps_yahoo_id')."&" .
				"location=".$location."&output=php";
		
		if($phpserialized = @file_get_contents($req))
		{
			$geoarray = unserialize($phpserialized);

			$lat = $geoarray['ResultSet']['Result']['Latitude'];
			$lon = $geoarray['ResultSet']['Result']['Longitude'];
			$zip = $geoarray['ResultSet']['Result']['Zip'];
			$street = ""; //dummy
			$city = $geoarray['ResultSet']['Result']['City'];
			$state = $geoarray['ResultSet']['Result']['State'];
			$country = $geoarray['ResultSet']['Result']['Country'];
		}
		else
		{
			echo "FATAL: No Response from Yahoo Geocode API. " .
					"Maybe no connection or unknown location request.<br />";
			return false;
		}
	return array($lat, $lon, $zip, $city, $street, $state, $country );
	}

	/**
	 * Get coordinates based on a location.
	 * We use Googles geocode api for that porpose, possible queries:
	 * nearly all, even streetbased
	 * 
	 * @param string location name to get lon and lat
	 * @return array long, lat, zip, city, street, state, country
	 * @author bzrudi
	 */
	function getLatLonByLocationGoogle($location)
	{ 

		//Google uses "+" as string seperator while Yahoo uses "," ;-)
		$location = str_replace(" ", "+", $location);
		$location = str_replace(",", "+", $location);
		$req = "http://maps.google.com/maps/geo?" .
				"q=".$location."&output=kml&" .
				"key=".read_config('maps_google_key')." ";

		if($xml = @file_get_contents($req))
		{
			require_once(TOP_DIR.'/plugins/maps/libxml/IsterXmlSimpleXMLImpl.php');
  
  			$impl = new IsterXmlSimpleXMLImpl;
  			$xml  = $impl->load_file($req);
			
			/**
			 * check query response status for errors
			 */
			$status = $xml->kml->Response->Status->code->CDATA();
			list($this->response_code, $this->error, $this->message) 
				= GeoCode::checkGoogleResponseStatus($status);

			if ($this->response_code == '200') //query OK
			{
			/**
			 * check accuracy to take good care of available information to
			 * prevent parsing errors
			 * 
			 * 0    Unknown location. (Since 2.59)
			 * 1 	Country level accuracy. (Since 2.59)
			 * 2 	Region (state, province, prefecture, etc.) level accuracy. (Since 2.59)
			 * 3 	Sub-region (county, municipality, etc.) level accuracy. (Since 2.59)
			 * 4 	Town (city, village) level accuracy. (Since 2.59)
			 * 5 	Post code (zip code) level accuracy. (Since 2.59)
			 * 6 	Street level accuracy. (Since 2.59)
			 * 7 	Intersection level accuracy. (Since 2.59)
			 * 8 	Address level accuracy. (Since 2.59)
			 * 
			 */
			@$this->accuracy = $xml->kml->Response->Placemark->AddressDetails->attributes();			
            
			if(is_array($this->accuracy))
			{
			     $this->accuracy = $this->accuracy['Accuracy'];
			}
			else
			{
			    $this->accuracy = 0;
			}

			//echo "ACCURACY == ".$this->accuracy."<br>";
			
//echo '<pre>', print_r($xml->kml->Response->Placemark->AddressDetails->Country->AdministrativeArea->SubAdministrativeArea->Locality), '</pre>';

			if($this->accuracy != '0') //location data avail			
			{
			switch($this->accuracy)
			{
				case '1':
				{
				$country = $xml->kml->Response->Placemark->AddressDetails->Country->CountryNameCode->CDATA();			
				$coordinates = $xml->kml->Response->Placemark->Point->coordinates->CDATA();			
				break;	
				}
				case '2':
				{
				$country = $xml->kml->Response->Placemark->AddressDetails->Country->CountryNameCode->CDATA();			
				$state = $xml->kml->Response->Placemark->AddressDetails->Country->AdministrativeArea->AdministrativeAreaName->CDATA();			
				$coordinates = $xml->kml->Response->Placemark->Point->coordinates->CDATA();			
				break;	
				}
				case '3':
				{
				$country = $xml->kml->Response->Placemark->AddressDetails->Country->CountryNameCode->CDATA();			
				$state = $xml->kml->Response->Placemark->AddressDetails->Country->AdministrativeArea->AdministrativeAreaName->CDATA();			
				$coordinates = $xml->kml->Response->Placemark->Point->coordinates->CDATA();			
				break;	
				}
				case '4':
				{
				$country = $xml->kml->Response->Placemark->AddressDetails->Country->CountryNameCode->CDATA();			
				$state = $xml->kml->Response->Placemark->AddressDetails->Country->AdministrativeArea->AdministrativeAreaName->CDATA();			
				$coordinates = $xml->kml->Response->Placemark->Point->coordinates->CDATA();			
				break;	
				}
				case '5':
				{
				$country = $xml->kml->Response->Placemark->AddressDetails->Country->CountryNameCode->CDATA();			
				$city = $xml->kml->Response->Placemark->AddressDetails->Country->AdministrativeArea->AdministrativeAreaName->CDATA();			
				$zip = $xml->kml->Response->Placemark->AddressDetails->Country->AdministrativeArea->SubAdministrativeArea->Locality->PostalCode->PostalCodeNumber->CDATA();			
				$coordinates = $xml->kml->Response->Placemark->Point->coordinates->CDATA();			
				break;	
				}
				case '6':
				{
			    $country = $xml->kml->Response->Placemark->AddressDetails->Country->CountryNameCode->CDATA();			
				$street = $xml->kml->Response->Placemark->AddressDetails->Country->AdministrativeArea->AdministrativeAreaName->CDATA();			
				$suburb = $xml->kml->Response->Placemark->AddressDetails->Country->AdministrativeArea->SubAdministrativeArea->SubAdministrativeAreaName->CDATA();			
				$city = $xml->kml->Response->Placemark->AddressDetails->Country->AdministrativeArea->SubAdministrativeArea->Locality->LocalityName->CDATA();			
				$zip = $xml->kml->Response->Placemark->AddressDetails->Country->AdministrativeArea->SubAdministrativeArea->Locality->DependentLocality->PostalCode->PostalCodeNumber->CDATA();			
				$state = $xml->kml->Response->Placemark->AddressDetails->Country->AdministrativeArea->SubAdministrativeArea->Locality->DependentLocality->Thoroughfare->ThoroughfareName->CDATA();			
				$coordinates = $xml->kml->Response->Placemark->Point->coordinates->CDATA();			
				break;	
				}
				case '7':
				{
				$country = $xml->kml->Response->Placemark->AddressDetails->Country->CountryNameCode->CDATA();			
				$street = $xml->kml->Response->Placemark->AddressDetails->Country->AdministrativeArea->AdministrativeAreaName->CDATA();			
				$suburb = $xml->kml->Response->Placemark->AddressDetails->Country->AdministrativeArea->SubAdministrativeArea->SubAdministrativeAreaName->CDATA();			
				$city = $xml->kml->Response->Placemark->AddressDetails->Country->AdministrativeArea->SubAdministrativeArea->Locality->LocalityName->CDATA();			
				$zip = $xml->kml->Response->Placemark->AddressDetails->Country->AdministrativeArea->SubAdministrativeArea->Locality->DependentLocality->PostalCode->PostalCodeNumber->CDATA();			
				$state = $xml->kml->Response->Placemark->AddressDetails->Country->AdministrativeArea->SubAdministrativeArea->Locality->DependentLocality->Thoroughfare->ThoroughfareName->CDATA();			
				$coordinates = $xml->kml->Response->Placemark->Point->coordinates->CDATA();			
				break;	
				}
				case '8':
				{
				$country = $xml->kml->Response->Placemark->AddressDetails->Country->CountryNameCode->CDATA();			
				$street = $xml->kml->Response->Placemark->AddressDetails->Country->AdministrativeArea->AdministrativeAreaName->CDATA();			
				$suburb = $xml->kml->Response->Placemark->AddressDetails->Country->AdministrativeArea->SubAdministrativeArea->SubAdministrativeAreaName->CDATA();			
				$city = $xml->kml->Response->Placemark->AddressDetails->Country->AdministrativeArea->SubAdministrativeArea->Locality->LocalityName->CDATA();			
				$zip = $xml->kml->Response->Placemark->AddressDetails->Country->AdministrativeArea->SubAdministrativeArea->Locality->DependentLocality->PostalCode->PostalCodeNumber->CDATA();			
				$state = $xml->kml->Response->Placemark->AddressDetails->Country->AdministrativeArea->SubAdministrativeArea->Locality->DependentLocality->Thoroughfare->ThoroughfareName->CDATA();			
				$coordinates = $xml->kml->Response->Placemark->Point->coordinates->CDATA();			
				break;	
				}
			}
		
			$coordinates = explode(",", $coordinates); 
			$lat = $coordinates[1];
			$lon = $coordinates[0];
			
			// needed for location query to show up result
			$_SESSION['lat'] = $lat;
			$_SESSION['lon'] = $lon;
			
			//we need to prevent some notices in vars, as they were not always set
			return array($lat, $lon, @$zip, @$city, @$street, @$state, $country );
			}
			else
			{
			    return false;
			}
			
			}
			else
			{
				echo $this->message;
			}
		}
		else
		{
			echo "FATAL: No Response from Google Geocode API. " .
					"Please check your internet connection.<br />";
			return false;
		}

	}

/**
 * check google return codes for possible errors
 * 
 * G_GEO_SUCCESS (200) 	 No errors occurred; the address was successfully parsed and its geocode has been returned. (Since 2.55)
 * G_GEO_SERVER_ERROR (500) 	A geocoding request could not be successfully processed, yet the exact reason for the failure is not known. (Since 2.55)
 * G_GEO_MISSING_ADDRESS (601) 	The HTTP q parameter was either missing or had no value. (Since 2.55)
 * G_GEO_UNKNOWN_ADDRESS (602) 	No corresponding geographic location could be found for the specified address. This may be due to the fact that the address is relatively new, or it may be incorrect. (Since 2.55)
 * G_UNAVAILABLE_ADDRESS (603) 	The geocode for the given address cannot be returned due to legal or contractual reasons. (Since 2.55)
 * G_GEO_BAD_KEY (610) 	The given key is either invalid or does not match the domain for which it was given. (Since 2.55)
 * 
 * @param int status code
 * @return array true/false and error message * @author bzrudi
 *
 **/
function checkGoogleResponseStatus($status)
{
	switch($status)
	{
		case '200':
		{
			return array("200", "true", "OK");
			break;
		}
		case '500':
		{
			return array("500", "false", "A geocoding request could not be successfully processed.");
			break;
		}
		case '601':
		{
			return array("601", "false", "The HTTP q parameter was either missing or had no value.");			
			break;
		}
		case '602':
		{
			return array("602", "false", "No corresponding geographic location could be found for the specified address.");			
			break;
		}
		case '603':
		{
			return array("603", "false", "The geocode for the given address cannot be returned due to legal or contractual reasons.");			
			break;
		}
		case '610':
		{
			return array("610", "false", "The given key is either invalid or does not match the domain for which it was given.");			
			break;
		}
	}
}


} //end class
?>
