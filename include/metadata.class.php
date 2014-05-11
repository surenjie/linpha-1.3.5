<?php
/**
 * This class handles all the EXIF and IPTC stuff used in LinPHA
 */
 
/*
* Copyright (c) 2002-2005 Heiko Rutenbeck <bzrudi@tuxpower.de>
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

include_once(TOP_DIR.'/include/metadata.config.php');
 
class MetaData {

var $trans_array;

  	/**
 	 * store EXIF data in DB
     * 
     * create an entry in the db even if we haven't found anything
     * to prevent img_view.class.php to call this function every time
     * the image is viewed
 	 */
 	function saveExifData($filename,$md5sum)
 	{
        /**
         * get exif info from file
         */
        $exif_data =  get_EXIF_JPEG( $filename );
        
        /**
         * get exif tags
         */
        $exif_tags = $this->getExifTranslationArray();

        /**
         * special tags
         */
        // Canon Owner Name append to Artist
        if(isset($exif_data['Makernote_Tag']['Decoded Data'])
         && is_array($exif_data['Makernote_Tag']['Decoded Data']) // sometimes 'Decoded Data' is an empty string
         && isset($exif_data['Makernote_Tag']['Decoded Data'][0][9]['Text Value']))
        {
            $owner = $exif_data['Makernote_Tag']['Decoded Data'][0][9]['Text Value']; 
            if(isset($exif_data[0][315]['Text Value']))
            {
                $exif_data[0][315]['Text Value'] .= $owner;
            }
            else
            {
                $exif_data[0][315]['Text Value'] = $owner;
            }
             
        }
 
        /**
         * search for valid tags 
         */       
        $str_columns = "md5sum, ";
        $str_values = "'".$md5sum."', ";
        foreach($exif_tags AS $key=>$value)
        {
            if($value != "")
            {
            	/**
            	 * there are currently only entries at level deep 2 and 5 in the
            	 * array
            	 */
                $array_pieces = explode('/',$value);
                switch(count($array_pieces))
                {
                case 2:
                    if(isset($exif_data[ $array_pieces[0] ][ $array_pieces[1] ]['Text Value']))
                    {
                        $str_columns .= strtolower($key).', ';
                        
                        $exif_value = $exif_data[ $array_pieces[0] ][ $array_pieces[1] ]['Text Value'];
                        $str_values .= "'".linpha_addslashes(trim( $exif_value ))."', ";
                    }
                break;
                case 5:
                    if(isset($exif_data[ $array_pieces[0] ][ $array_pieces[1] ][ $array_pieces[2] ][ $array_pieces[3] ][ $array_pieces[4] ]['Text Value']))
                    {
                        $str_columns .= strtolower($key).', ';
                        
                        $exif_value = $exif_data[ $array_pieces[0] ][ $array_pieces[1] ][ $array_pieces[2] ][ $array_pieces[3] ][ $array_pieces[4] ]['Text Value'];
                        $str_values .= "'".linpha_addslashes(trim( $exif_value ))."', ";
                    }
                break;
                default:
                    echo "Error no valid path for key: ".$key." value: ".$value;
                break;
                }
            }
        }
        
        include_once(TOP_DIR.'/include/phpmeta/JPEG.php');

		/**
		 * add jpegcomment
		 */
		$jpeg_header_data = get_jpeg_header_data( $filename );
		$comment = get_jpeg_Comment( $jpeg_header_data );
		if(!empty($comment))
		{
			$str_columns .= 'jpegcomment, ';
			$str_values .= "'".linpha_addslashes(trim( $comment ))."', ";
		}
        
        /**
         * remove last two signs
         */
        $str_columns = substr($str_columns,0,strlen($str_columns)-2);
        $str_values = substr($str_values,0,strlen($str_values)-2);
        

		/**
		 * no double entries
		 */        
        $query = $GLOBALS['db']->Execute("SELECT md5sum FROM ".PREFIX."meta_exif ".
        	"WHERE md5sum = '".$md5sum."'");
    	$num = $query->RecordCount();
    	if($num == 0)
    	{
	        $GLOBALS['db']->Execute("INSERT into ".PREFIX."meta_exif (".$str_columns.") ".
	            "VALUES (".$str_values.")");
    	}
 	}
	
	/**
	 * esacape sql strings a clean way

	function cleansql($text)
    {
    	$return="";
 		$chars = preg_split('//', $text, -1, PREG_SPLIT_NO_EMPTY);
		$count = count($chars);
 			for ($c=0; $c<$count; $c++)
 			{
   				$letter=$chars[$c];
   				if (!preg_match("/[a-zA-Z0-9]/", $letter))
   				{
      				$return .= "\\$letter";
   				}
   				else
   				{
       				$return .= "$letter";
   				}
 			}
 		return $return;
	} 	
 	 */	
 	/**
 	 * store IPTC data in DB
 	 */
    function saveIptcData($filename, $md5sum)
    {
        // Retrieve the header information
        $jpeg_header_data = get_jpeg_header_data($filename);
        
        if($jpeg_header_data)
        {
            // get array with all available IPTC data
            $IPTC_Info = get_Photoshop_IPTC(get_Photoshop_IRB($jpeg_header_data));

            // init values (prevent php notice msg if not set)
            $caption = "";
            $object_name = "";
            $edit_status = "";
            $priority = "";
            $category = "";
            $supplemental_categorie = "";
            $job_id = "";
            $keywords = "";
            $date_released = "";
            $time_released = "";
            $instructions = "";
            $date_created = "";
            $time_created = "";
            $program = "";
            $object_cycle = "";
            $byline = "";
            $byline_title = "";
            $city = "";
            $sublocation = "";
            $state = "";
            $country_code = "";
            $country = "";
            $trans_reference = "";
            $headline = "";
            $credit = "";
            $source = "";
            $copyright = "";
            $caption_writer = "";
            
            $IPTC_Meta = array();
            $query = $GLOBALS['db']->Execute("SELECT md5sum FROM ".PREFIX."meta_iptc " .
            		"WHERE md5sum = '".$md5sum."' ");
            $num = $query->RecordCount();

            if($num == 0)
            {
            if(is_array($IPTC_Info))
            {
                // Cycle through each of the IPTC-NAA IIM records
                foreach($IPTC_Info as $IPTC_Record)
                {
                    switch ( $IPTC_Record['IPTC_Type'] )
                    {
                        case "2:05":    // object name
                            $object_name = linpha_addslashes(rtrim($IPTC_Record['RecData']));
                        break;

                        case "2:07":    // edit_status
                            $edit_status = linpha_addslashes(rtrim($IPTC_Record['RecData']));
                        break;
                    
                        case "2:10":    // priority
                            $priority = linpha_addslashes(rtrim($IPTC_Record['RecData']));
                        break;

                        case "2:15":    // category
                            $category = linpha_addslashes(rtrim($IPTC_Record['RecData']));
                        break;

                        case "2:20":    // supplemental_categorie
                            $supplemental_categorie .= " ".linpha_addslashes(rtrim($IPTC_Record['RecData']));
                        break;

                        case "2:22":    // job_id
                            $job_id = linpha_addslashes(rtrim($IPTC_Record['RecData']));
                        break;

                        case "2:25":    // keywords
                            $keywords .= " ".linpha_addslashes(rtrim($IPTC_Record['RecData']));
                        break;

                        case "2:30":    // date_released
                            $date_released = linpha_addslashes(rtrim($IPTC_Record['RecData']));
                        break;

                        case "2:35":    // time_released
                            $time_released = linpha_addslashes(rtrim($IPTC_Record['RecData']));
                        break;

                        case "2:40":    // instructions
                            $instructions = linpha_addslashes(rtrim($IPTC_Record['RecData']));
                        break;

                        case "2:55":    // date_created
                            $date_created = linpha_addslashes(rtrim($IPTC_Record['RecData']));
                        break;

                        case "2:60":    // time_created
                            $time_created = linpha_addslashes(rtrim($IPTC_Record['RecData']));
                        break;

                        case "2:65":    // program
                            $program = linpha_addslashes(rtrim($IPTC_Record['RecData']));
                        break;

                        case "2:75":    // object_cycle
                            $object_cycle = linpha_addslashes(rtrim($IPTC_Record['RecData']));
                        break;

                        case "2:80":    // byline
                            $byline = linpha_addslashes(rtrim($IPTC_Record['RecData']));
                        break;

                        case "2:85":    // byline_title
                            $byline_title = linpha_addslashes(rtrim($IPTC_Record['RecData']));
                        break;

                        case "2:90":    // city
                            $city = linpha_addslashes(rtrim($IPTC_Record['RecData']));
                        break;

                        case "2:92":    // sublocation
                            $sublocation = linpha_addslashes(rtrim($IPTC_Record['RecData']));
                        break;

                        case "2:95":    // state
                            $state = linpha_addslashes(rtrim($IPTC_Record['RecData']));
                        break;

                        case "2:100":   // country_code
                            $country_code = linpha_addslashes(rtrim($IPTC_Record['RecData']));
                        break;

                        case "2:101":   // country
                            $country = linpha_addslashes(rtrim($IPTC_Record['RecData']));
                        break;

                        case "2:103":   // trans_reference
                            $trans_reference = linpha_addslashes(rtrim($IPTC_Record['RecData']));
                        break;

                        case "2:105":   // headline
                            $headline = linpha_addslashes(rtrim($IPTC_Record['RecData']));
                        break;

                        case "2:110":   // credit
                            $credit = linpha_addslashes(rtrim($IPTC_Record['RecData']));
                        break;

                        case "2:115":   // source
                            $source = linpha_addslashes(rtrim($IPTC_Record['RecData']));
                        break;

                        case "2:116":   // copyright
                            $copyright = linpha_addslashes(rtrim($IPTC_Record['RecData']));
                        break;

                        case "2:120":   // caption
                            $caption = linpha_addslashes(rtrim($IPTC_Record['RecData']));
                        break;

                        case "2:122":   // caption_writer
                            $caption_writer = linpha_addslashes(rtrim($IPTC_Record['RecData']));
                        break;
                    }
                }
            
            $saveiptc = $GLOBALS['db']->Execute("INSERT INTO ".PREFIX."meta_iptc ( " .
                "md5sum, caption, caption_writer, headline, " .
                "instructions, keywords, category, supplemental_categorie, " .
                "copyright, byline, byline_title, credit, source, " .
                "edit_status, priority, object_cycle, job_id, program, " .
                "object_name, date_created, date_released, time_created, " .
                "time_released, city, sublocation, state, country, " .
                "country_code, trans_reference, marked_ignored) " .
                "VALUES('".$md5sum."', '".$caption."', '".$caption_writer."', '".$headline."', " .
                "'".$instructions."', '".$keywords."', '".$category."', '".$supplemental_categorie."', " .
                "'".$copyright."', '".$byline."', '".$byline_title."', '".$credit."', '".$source."', " .
                "'".$edit_status."', '".$priority."', '".$object_cycle."', '".$job_id."', '".$program."', " .
                "'".$object_name."', '".$date_created."', '".$date_released."', '".$time_created."', " .
                "'".$time_released."', '".$city."', '".$sublocation."', '".$state."', '".$country."', " .
                "'".$country_code."', '".$trans_reference."', '0')");
			
				return true;           
            }
            else
            {
            $saveiptc_dummy = $GLOBALS['db']->Execute("INSERT INTO ".PREFIX."meta_iptc ( " .
                "md5sum, caption, caption_writer, headline, " .
                "instructions, keywords, category, supplemental_categorie, " .
                "copyright, byline, byline_title, credit, source, " .
                "edit_status, priority, object_cycle, job_id, program, " .
                "object_name, date_created, date_released, time_created, " .
                "time_released, city, sublocation, state, country, " .
                "country_code, trans_reference, marked_ignored) " .
                "VALUES('".$md5sum."', '', '', '', '', '', '', '', '', '', '', '', '', " .
                "'', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1')");            	
                
                return false;
            }
            }
        }
        else
        {
            return false;
        }
    }

	/**
	 * generate "more EXIF details" link. Used if we have only IPTC data but
	 * also wonna have an option to display EXIF
	 */
	function showMoreDetailLink($meta)
	{
        global $exif_less, $exif_more;
		
		if($meta == "exif")
		{
    		$link = "<a class='leftmenu' href='".$GLOBALS['img_view']->link_address."&imgid=".$_GET['imgid']."&exif=";
	       	echo "<tr><td colspan='2' align='center'>".$link."2'>".
    	       	"<u><b>".$exif_more." (EXIF)</b></u></a></td></tr>";      

		}
		else
		{
    		$link = "<a class='leftmenu' href='".$GLOBALS['img_view']->link_address."&imgid=".$_GET['imgid']."&iptc=";
	       	echo "<tr><td colspan='2' align='center'>".$link."2'>".
           	"<u><b>".$exif_more." (IPTC)</b></u></a></td></tr>";      

		}

	}
        		  	
 	/**
 	 * prepare EXIF HTML output left menu (get from DB)
 	 */
 	function showExifData($md5sum)
 	{
        global $exif_less, $exif_more, $str_search_all_images_taken;
        $link = "<a class='leftmenu' href='".$GLOBALS['img_view']->link_address."&imgid=".$_GET['imgid']."&exif=";

        switch(read_config("exif_level"))
        {
            case 'low': $exif_level = 1; break;
            case 'medium': $exif_level = 2; break;
            case 'high': $exif_level = 3; break;
        }

        /**
        * set exif setting in $_SESSION
        */
        $show_exif = true;
        
        if(isset($_GET['exif']) && !isset($_GET['iptc']))
        {
            $_SESSION['exif'] = $_GET['exif'];

            if($_GET['exif'] == 0)
            {
                $show_exif = false;
                unset($_SESSION['exif']);

            } else {
                $exif_level = $_GET['exif'];
            }
        }
       	elseif( isset($_SESSION['exif']) )
        {
            $exif_level = $_SESSION['exif'];
        }       
        elseif(!read_config("exif_default"))
        {
            $show_exif = false;
        }
        
        if( $show_exif )
        {
            /**
            * get showed tags according to exif verbosity level
            */
            $exif_tags = getExifTagsByVerbosityLevel($exif_level);
            $str_exif_tags = strtolower( implode(', ',$exif_tags) );
            $str_exif_tags .= ", imagedescription, jpegcomment";
            
            $query = $GLOBALS['db']->Execute("SELECT ".$str_exif_tags." ".
                "FROM ".PREFIX."meta_exif WHERE md5sum = '".$md5sum."'");
            $data = $query->FetchRow(ADODB_FETCH_ASSOC);
            
            /**
             * imagedescription and usercomment are later used in
             * leftSideImage (img_view)
             * 
             * use @ because on mysql 3.x we got an undefined index if they
             * are empty... strange...
             */

            $this->exif_imagedescription = @$data['imagedescription'];
            $this->exif_jpegcomment = @$data['jpegcomment'];
             
            /**
             * Workaround for Olympus Cameras, as they do not make use of the 
             * EXIF standard, which results in image descriptions displayed as:
             * OLYMPUS DIGITAL CAMERA (exif) 
             * (They don't use "model" and "make", but "imagedescription" field)
             * As this is rather useful information, we just don't display it
             */
			if(strpos($this->exif_imagedescription, "OLYMPUS DIGITAL") !== false)
			{
	            $this->exif_imagedescription = "";
			}

            foreach($exif_tags AS $value)
            {
                if(!empty($data[strtolower($value)]))
                {
                    $exif_key = $value;
                    $exif_value = $data[strtolower($value)];
                    
                    /**
                     * special tags
                     */
                    if($exif_key == 'DateTime' OR $exif_key == 'DateTimeOriginal')
                    {
                        $exif_key = 'DateTime';
                        $tmp = explode(" ",$exif_value);
                        $exif_value = "<a class='FromTo' href='".TOP_DIR."/search.php?sk=".$tmp[0]."' title='".sprintf($str_search_all_images_taken,$tmp[0])."'>".
                            $tmp[0]."</a><br />".@$tmp[1];
                    }
                    if($exif_key == "ShutterSpeedValue")
                    {
                        $exif_key = "ShutterSpeed";
                    }
                    
                    echo "<tr><td><span class='leftmenuexiflabel'>".$exif_key."</span></td>".
                        "<td><span class='leftmenuexifvalue'>".$exif_value."</span></td></tr>";
                }

            }
            
            switch($exif_level)
            {
            case 1: $less = 0; $more = 2; break;
            case 2: $less = 1; $more = 3; break;
            case 3: $less = 2; $more = 3; break;
            default: $less = 2; $more = 3; break;
            }
            
            echo "<tr><td colspan='2' align='center'>";
            echo $link.$less."'><u><b>Less</b></u></a> ";
            
            if($more!="3" || @$_SESSION['exif']!="3")
            echo $link.$more."'><u><b>More</b></u></a> ";
            echo "<a class='leftmenu' target='_blank' href='".TOP_DIR."/include/metadata_editor.php?md5sum=".$md5sum."'><u><b>All</b></u></a>";
            
            echo "</td></tr>";
        }
		
		if(@$_GET['exif'] == 0 && @$_SESSION['exif'] == 0 && !read_config('exif_default'))
		{
			$this->showMoreDetailLink("exif");
		}        
 	}

 	/**
 	 * prepare IPTC HTML output left menu (get from DB)
 	 */
 	function showIptcData($md5sum)
 	{
        global $exif_less, $exif_more, $str_search_all_images_taken;
        $link = "<a class='leftmenu' href='".$GLOBALS['img_view']->link_address."&imgid=".$_GET['imgid']."&iptc=";

        switch(read_config("iptc_level"))
        {
            case 'low': $iptc_level = 1; break;
            case 'medium': $iptc_level = 2; break;
            case 'high': $iptc_level = 3; break;
        }
        
       /**
        * set iptc setting in $_SESSION
        */
		$show_iptc = true;

        if(!isset($_GET['exif']))
        {
	        if(isset($_GET['iptc']))
	        {
	            $_SESSION['iptc'] = $_GET['iptc'];
	
	            if($_GET['iptc'] == 0)
	            {
	                $show_iptc = false;
	            } else {
	                $iptc_level = $_GET['iptc'];
	            }
	        }
	        elseif(isset($_SESSION['iptc']))
	        {
	            $iptc_level = $_SESSION['iptc'];
				if($iptc_level == 0)
				{
					$show_iptc = false;
				}
	        }
        }
        else
        {
        	$show_iptc = false;
        }
		
		/**
		 * @uses metadata.config.php
		 */     	
     	$trans_array = translateIptcSearchTags("", "array");
	    $has_iptc_data = false;
        
        if( $show_iptc && !read_config('exif_default'))
        { 
            /**
            * get showed tags according to iptc verbosity level
            */
            $iptc_tags = getIptcTagsByVerbosityLevel($iptc_level);
            $trans_array=array_flip($trans_array);
            $iptc_tags = array_intersect($trans_array, $iptc_tags);
            $str_iptc_tags = "";
            
            while(list($long_term, $query_term) = each($iptc_tags))
            {
            	$str_iptc_tags .= "".$query_term.", ";
            }

			reset($iptc_tags);
            
			$str_iptc_tags .= substr($str_iptc_tags,0,strlen($str_iptc_tags)-2);

            $query = $GLOBALS['db']->Execute("SELECT ".$str_iptc_tags." ".
                "FROM ".PREFIX."meta_iptc WHERE md5sum = '".$md5sum."'");
            $data = $query->FetchRow(ADODB_FETCH_ASSOC);
            
            $this->iptc_imagedescription = stripslashes($data['headline']);
        	$this->iptc_usercomment = stripslashes($data['caption']);
			
			if(isset($this->iptc_imagedescription) || isset($this->iptc_usercomment))
			{
				$has_iptc_data = true;
			}

            while(list($key, $value) = each($iptc_tags))
            {
                if(!empty($data[$value]))
                {
                    $iptc_key = $key;
                    $iptc_value = stripslashes($data[$value]);
                    if($key != "Caption" && $key != "Headline")
                    echo "<tr><td><span class='leftmenuexiflabel'>".$iptc_key."</span></td>".
                        "<td><span class='leftmenuexifvalue'>".$iptc_value."</span></td></tr>";
			        $has_iptc_data = true;
			        
                }
            }
            
	        switch($iptc_level)
	        {
	        case 1: $less = 0; $more = 2; break;
	        case 2: $less = 1; $more = 3; break;
	        case 3: $less = 2; $more = 3; break;
	        default: $less = 2; $more = 3; break;
	        }
	        
	        if($has_iptc_data)
	        {
	        echo "<tr><td colspan='2' align='center'>";
	        echo $link.$less."'><u><b>Less</b></u></a> ";
	        if($more!="3" || @$_SESSION['iptc']!="3")
	        echo $link.$more."'><u><b>More</b></u></a> ";
	        echo "<a class='leftmenu' target='_blank' href='".TOP_DIR."/include/metadata_editor.php?md5sum=".$md5sum."'><u><b>All</b></u></a>";
	        echo "</td></tr>";
	        }
        }
		else
		{
			$this->showMoreDetailLink("iptc");
		}
 	}
	
	/**
	 * edit IPTC Data in HTML popup
	 */		 
	function editIptcData()
	{
		
	}
	
	/**
	 * save modified IPTC data to DB
	 */
	function saveModIptcData()
	{
		
	}
    

    
   /**
     * get array with exiftags and path where they are
     * keys are used to create the database table
     * 
     * warning: if making changes in the keys of the array, we will need to
     * update the db!!
     */
    function getExifTranslationArray()
    {
        return Array(
        // TIFF Rev. 6.0 Attribute Information
            // A. Tags relating to image data structure
            'ImageWidth' => '',
            'ImageLength' => '',
            'BitsPerSample' => '',
            'Compression' => '',
            'PhotometricInterpretation' => '',
            'Orientation' => '0/274',
            'SamplesPerPixel' => '',
            'PlanarConfiguration' => '',
            'YCbCrSubSampling' => '',
            'YCbCrPositioning' => '0/531',
            'XResolution' => '0/282',
            'YResolution' => '0/283',
            'ResolutionUnit' => '0/296',
            
            // B. Tags relating to recording offset
            'StripOffsets' => '',
            'RowsPerStrip' => '',
            'StripByteCounts' => '',
            'JPEGInterchangeFormat' => '',
            'JPEGInterchangeFormatLength' => '',
            
            // C. Tags relating to image data characteristics
            'TransferFunction' => '',
            'WhitePoint' => '',
            'PrimaryChromaticities' => '',
            'YCbCrCoefficients' => '',
            'ReferenceBlackWhite' => '',
            
            // D. Other tags
            'DateTime' => '0/306',
            'ImageDescription' => '0/270',
            'Make' => '0/271',
            'Model' => '0/272',
            'Software' => '0/305',
            'Artist' => '0/315',
            'Copyright' => '0/33432',
            
        // Exif IFD Attribute Information
            // A. Tags Relating to Version
            'ExifVersion' => '0/34665/Data/0/36864',
            'FlashpixVersion' => '0/34665/Data/0/40960',
            
            // B. Tag Relating to Image Data Characteristics
            'ColorSpace' => '0/34665/Data/0/40961',
            
            // C. Tags Relating to Image Configuration
            'ComponentsConfiguration' => '0/34665/Data/0/37121',
            'CompressedBitsPerPixel' => '0/34665/Data/0/37122',
            'PixelXDimension' => '0/34665/Data/0/40962',
            'PixelYDimension' => '0/34665/Data/0/40963',
            
            // D. Tags Relating to User Information
            //'MakerNote' => '', too big to store!!
            'UserComment' => '0/34665/Data/0/37510',
            
            // E. Tag Relating to Related File Information
            'RelatedSoundFile' => '',
            
            // F. Tags Relating to Date and Time
            'DateTimeOriginal' => '0/34665/Data/0/36867',
            'DateTimeDigitized' => '0/34665/Data/0/36868',
            'SubSecTime' => '',
            'SubSecTimeOriginal' => '',
            'SubSecTimeDigitized' => '',
            
            // G. Tags Relating to Picture-Taking Conditions
            'ExposureTime' => '0/34665/Data/0/33434',
            'FNumber' => '0/34665/Data/0/33437',
            'ExposureProgram' => '0/34665/Data/0/34850',
            'SpectralSensitivity' => '',
            'ISOSpeedRatings' => '0/34665/Data/0/34855',
            'OECF' => '',
            'ShutterSpeedValue' => '0/34665/Data/0/37377',
            'ApertureValue' => '0/34665/Data/0/37378',
            'BrightnessValue' => '0/34665/Data/0/37379',
            'ExposureBiasValue' => '0/34665/Data/0/37380',
            'MaxApertureValue' => '0/34665/Data/0/37381',
            'SubjectDistance' => '0/34665/Data/0/37382',
            'MeteringMode' => '0/34665/Data/0/37383',
            'LightSource' => '0/34665/Data/0/37384',
            'Flash' => '0/34665/Data/0/37385',
            'FocalLength' => '0/34665/Data/0/37386',
            'SubjectArea' => '',
            'FlashEnergy' => '',
            'SpatialFrequencyResponse' => '',
            'FocalPlaneXResolution' => '0/34665/Data/0/41486',
            'FocalPlaneYResolution' => '0/34665/Data/0/41487',
            'FocalPlaneResolutionUnit' => '0/34665/Data/0/41488',
            'SubjectLocation' => '',
            'ExposureIndex' => '',
            'SensingMethod' => '0/34665/Data/0/41495',
            'FileSource' => '0/34665/Data/0/41728',
            'SceneType' => '0/34665/Data/0/41729',
            'CFAPattern' => '',
            'CustomRendered' => '0/34665/Data/0/41985',
            'ExposureMode' => '0/34665/Data/0/41986',
            'WhiteBalance' => '0/34665/Data/0/41987',
            'DigitalZoomRatio' => '0/34665/Data/0/41988',
            'FocalLengthIn35mmFilm' => '',
            'SceneCaptureType' => '0/34665/Data/0/41990',
            'GainControl' => '0/34665/Data/0/41991',
            'Contrast' => '0/34665/Data/0/41992',
            'Saturation' => '0/34665/Data/0/41993',
            'Sharpness' => '0/34665/Data/0/41994',
            'DeviceSettingDescription' => '',
            'SubjectDistanceRange' => '',
            
            // H. Other Tags
            'ImageUniqueID' => '',
            
        // GPS Attribute Information
            // A. Tags Relating to GPS
            'GPSVersionID' => '0/34853/Data/0/0',
            'GPSLatitudeRef' => '0/34853/Data/0/1',
            'GPSLatitude' => '0/34853/Data/0/2',
            'GPSLongitudeRef' => '0/34853/Data/0/3',
            'GPSLongitude' => '0/34853/Data/0/4',
            'GPSAltitudeRef' => '0/34853/Data/0/5',
            'GPSAltitude' => '0/34853/Data/0/6',
            'GPSTimeStamp' => '0/34853/Data/0/7',
            'GPSSatellites' => '0/34853/Data/0/8',
            'GPSStatus' => '0/34853/Data/0/9',
            'GPSMeasureMode' => '0/34853/Data/0/10',
            'GPSDOP' => '0/34853/Data/0/11',
            'GPSSpeedRef' => '0/34853/Data/0/12',
            'GPSSpeed' => '0/34853/Data/0/13',
            'GPSTrackRef' => '0/34853/Data/0/14',
            'GPSTrack' => '0/34853/Data/0/15',
            'GPSImgDirectionRef' => '0/34853/Data/0/16',
            'GPSImgDirection' => '0/34853/Data/0/17',
            'GPSMapDatum' => '0/34853/Data/0/18',
            'GPSDestLatitudeRef' => '0/34853/Data/0/19',
            'GPSDestLatitude' => '0/34853/Data/0/20',
            'GPSDestLongitudeRef' => '0/34853/Data/0/21',
            'GPSDestLongitude' => '0/34853/Data/0/22',
            'GPSDestBearingRef' => '0/34853/Data/0/23',
            'GPSDestBearing' => '0/34853/Data/0/24',
            'GPSDestDistanceRef' => '0/34853/Data/0/25',
            'GPSDestDistance' => '0/34853/Data/0/26',
            'GPSProcessingMethod' => '0/34853/Data/0/27',
            'GPSAreaInformation' => '0/34853/Data/0/28',
            'GPSDateStamp' => '0/34853/Data/0/29',
            'GPSDifferential' => '0/34853/Data/0/30',
            
        // Custom Makernotes http://www.ozhiker.com/electronics/pjmt/jpeg_info/makernotes.html
            // there are several tags: camera settings etc. might be usefull

            // Canon
            // overwrite Artist => 0/315
            //'OwnerName' => 'Makernote_Tag/Decoded Data/0/9'
            
            // Casio
            
            // Fujifilm
            
            // Konica/Minolta
            
            // Nikon

            // Olympus
            
            // Panasonic
            
            // Ricoh

			'JpegComment' => ''
        );
    }

	/**
	 * $suffix required to create temporary table during upgrade on sqlite
	 */
    function createExifTable($suffix='')
    {
    	if(!defined('PREFIX')): define('PREFIX', $_POST['db_prefix']); endif;
    	
        $array = $this->getExifTranslationArray(); 
        
        /**
         * use DB_TYPE as it is defined in db_api.php and
         * forth_stage_installation.php
         */
        if(DB_TYPE=="mysql")
        {
            $str = "CREATE TABLE ".PREFIX."meta_exif".$suffix." (".
                        "md5sum VARCHAR(32) NOT NULL, ";
            foreach($array AS $key=>$value)
            {
                $str .= strtolower($key)." VARCHAR(255), ";
            }
            $str .= "PRIMARY KEY  (`md5sum`), ";
            $str .= "KEY (md5sum) )";
            
            $GLOBALS['db']->Execute($str);
        }
        elseif(DB_TYPE=="sqlite")
        {
            $str = "CREATE TABLE ".PREFIX."meta_exif".$suffix." (".
                        "md5sum VARCHAR(32) PRIMARY KEY NOT NULL, ";
            foreach($array AS $key=>$value)
            {
                $str .= strtolower($key)." VARCHAR(255), ";
            }
            /**
             * remove last 2 signs (the comma and the space)
             */
            $str = substr($str,0,strlen($str)-2).")";

            
            $GLOBALS['db']->Execute($str);
        }
        else
        {
            $str = "CREATE TABLE ".PREFIX."meta_exif".$suffix." (".
                        "md5sum VARCHAR(32) NOT NULL, ";
    
            foreach($array AS $key=>$value)
            {
                $str .= strtolower($key)." VARCHAR(255), ";
            }
            
            /**
             * remove last 2 signs (the comma and the space)
             */
            $str = substr($str,0,strlen($str)-2).")";
            
            $GLOBALS['db']->Execute($str);
            
            // unique md5sum
            $unique = $GLOBALS['db']->Execute("CREATE UNIQUE INDEX md5index " .
                "ON ".PREFIX."meta_exif USING btree (md5sum)");
        }
    }

	/**
	 * Autorotate Images via EXIF tag
	 * Most Images contain an orientation tag which shows if and how to rotate 
	 * the images
	 * @param string filename
	 * @return degrees to rotate
	 * @author bzrudi
	 */	
	 function rotateByExifTag($filename)
	 {
	 	include_once(TOP_DIR.'/include/phpmeta/EXIF.php');
		$meta = get_EXIF_JPEG($filename);
		
		/**
		 * just get orientation tag data
		 */
    	$rotation = @$meta[0][274]['Data'][0];
    
	    if(is_numeric($rotation))
	    {
	    	switch($rotation)
	    	{
	    		//No Rotation, No Flip Row 0 is at the visual top of the 
	    		//image, and column 0 is the visual left-hand side
	    		case "1":
	    		$rotate = "0";
	    		break;
	    		//No Rotation, Flipped Horizontally Row 0 is at the visual 
	    		//top of the image,and column 0 is the visual right-hand side
	    		case "2":
	    		$rotate = "0";
	    		break;
	    		//Rotated 180 degrees, No Flip Row 0 is at the visual 
	    		//bottom of the image, and column 0 is the visual right-hand side
	    		case "3":
	    		$rotate = "180";
	    		break;
	    		//No Rotation, Flipped Vertically Row 0 is at the visual 
	    		//bottom of the image, and column 0 is the visual left-hand side
	    		case "4":
	    		$rotate = "0";
	    		break;
	    		//Flipped Horizontally, Rotated 90 degrees counter clockwise 
	    		//Row 0 is at the visual left-hand side of of the image, 
	    		//and column 0 is the visual top
	    		case "5":
	    		$rotate = "0";
	    		break;
	    		//No Flip, Rotated 90 degrees clockwise Row 0 is at the visual 
	    		//right-hand side of of the image, and column 0 is the visual top
	    		case "6":
	    		$rotate = "90";
	    		break;
	    		//Flipped Horizontally, Rotated 90 degrees clockwise Row 0 is 
	    		//at the visual right-hand side of of the image, and 
	    		//column 0 is the visual bottom
	    		case "7":
	    		$rotate = "0";
	    		break;
	    		//No Flip, Rotated 90 degrees counter clockwise Row 0 is at 
	    		//the visual left-hand side of of the image, and column 0 is 
	    		//the visual bottom
	    		case "8":
	    		$rotate = "-90";
	    		break;
	    		default:
	    		$rotate = "0";
	    		break;
	
	    	}
	    }
		else // no rotation data is found, default to "0"
		{
			$rotate = "0";
		}
   	return $rotate;
	}

}
 
?>
