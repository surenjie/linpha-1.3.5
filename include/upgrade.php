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

if(!defined('TOP_DIR')) { define('TOP_DIR','..'); }

$dbversion=intval(read_config('db_version'));
$dbtype=read_config('db_type');

/**
 * linpha update
 * 
 * @todo language entries
 */
if( ( time() > read_config('update_time') OR (isset($_GET['force_updatecheck'])) ) && in_group('admin') )
{
    /**
     * update_notice disables only the linpha update check
     * but not system changes etc.
     */
    if( read_config('update_notice') OR (isset($_GET['force_updatecheck'])) )
    {
        //$number_of_days_to_wait_for_next_update = 0.0001;
        $number_of_days_to_wait_for_next_update = 7;
        update_config(time()+60*60*24*$number_of_days_to_wait_for_next_update,'update_time');
    
        echo "Starting LinPHA weekly update check...<br />" .
        	 "NOTE: No user will see this message!<br /><br />";
        /**
     	* check for new updates
     	*/
        $version = "1.3.4";
        
        /**
         * get version.txt from linpha server
         */
        $receivesize = 128; //standard 128
        $fp = @fsockopen("tuxpower.kicks-ass.net", 80, $errno, $errstr, $timeout=15);
        if (!$fp) {
            echo "Error: Update server seems to be down<br />";
        }
        else
        {
            $sendtext = "GET /download/version.txt HTTP/1.0
            Host: localhost
            User-Agent: PHP\r\n\r\n";
            
            fputs($fp, $sendtext);
            $rectext = "";
            while (!feof($fp)) {
                $rectext .= fgets($fp, $receivesize);
            }
            
            /**
             * close connection
             */
            fclose($fp);
            
            /**
             * extract data from file
             */
            $pos = strpos($rectext,'linpha_versions');
            if($pos === false)
            {
                echo "Error: Couldn't get version file from server.<br />";
            }
            else
            {
                $rectext = substr($rectext,$pos);
                $array_versions = explode("\n",$rectext);
                
                array_shift($array_versions);
            
                /**
                 * analyse data
                 */
                echo 'Current version: '.$version.'<br />';
                echo 'Latest version at linpha.sf.net: '.$array_versions[0].'<br />';
                
                if($array_versions[0] == $version)
                {
                    echo '<font color=#00FF00><b>No new updates available</b></font><br /><br />';
                }
                else
                {
                	$key = array_search($version,$array_versions);

					/**
					 * we probably use a newer release than in update.txt
					 */
                	if(empty($key))
                	{
                    	echo '<font color=#00FF00><b>No new updates available</b></font><br /><br />';
                	}
                	else
                	{
	                    echo '<font color=#FF0000><b>New Update available:</b></font><br /><br />';
	                    
	                    
	                    for($key-- ; $key >= 0; $key--)
	                    {
	                        echo $array_versions[$key].' <a href="http://sourceforge.net/project/showfiles.php?group_id=64772">(Download)</a><br />';
	                    }
	                    
	                    echo '<br />Please download the latest release ('.$array_versions[0].') and follow the update instructions<br />';
	                    echo 'found in the: /docs/ subdirectory of the downloaded release';
                	}
                }
            }
        }
    }
    
    /**
     * check for new imagemagick
     */
    $use_convert = read_config('use_convert');
    list($convert_avail, $convert_path, $convert_version) = check_convert();
    if($convert_avail) {
        /**
         * see sec_stage_install.php for details
         */
        if($convert_version == "6.1.1" OR $convert_version == "6.1.2" OR $convert_version == "6.1.3") {
            $convert_ok=false;
            $convert_unsupported = true;
        } else {
            $convert_ok=true;
        }
    } else {
        $convert_ok=false;
    }
    if($use_convert && !$convert_ok)
    {
        /**
         * skip this test, because the user may changed use_convert and
         * convert_path manually
         */
        //echo "Convert (ImageMagick) isn't installed anymore. Using GD Lib instead.<br />";
        //update_config('0','use_convert');
        if(isset($convert_unsupported))
        {
            /**
             * already in sec_stage_install.php
             */
            $convert_unsupported_msg = "In ImageMagick Version 6.1.1 to 6.1.3 exists a bug which makes the use of ImageMagick not possible. Upgrade ImageMagick to the latest Version. Using GD Lib instead.";
            echo "<br /><br />".$convert_unsupported_msg;
            update_config('0','use_convert');
            
            if(!extension_loaded('gd'))
            {
                /**
                 * already in sec_stage_install.php
                 */
                $inst_linpha_not_work_correctly = "LinPHA will probably NOT work correctly";
                echo '<br />'.$gd_convert_err;
                echo '<br />'.$inst_linpha_not_work_correctly;
            }
        }
    }
    
    if(!$use_convert && $convert_ok)
    {
        echo "<br /><br />Convert (ImageMagick) has been found on your system. Using convert to create faster and better images.";
        update_config('1','use_convert');
        update_config($convert_path,'convert_path');
        $use_convert = 1;
        
		/**
		 * check if imagemagick supports brackets in commands
		 * this check occurs three times (2x in upgrade.php, 1x
		 * sec_stage_install.php)
		 * details see sec_stage_install.php
		 */
	    if($convert_version >= "6.1.4") {
	    	$bracket_support = 1;
	    } else {
	    	$bracket_support = 0;
	    }
	    update_config($bracket_support,'im_bracket_support');
    }
     
     /**
      * check for new gd lib
      * 
      * only if convert isn't used
      */
    if(!$use_convert)
    {
        $gd_version = read_config('gd_version');
        $gd_version2_found = get_gd_version(); 
        if($gd_version2_found && $gd_version == "<2")
        {
            update_config('>2','gd_version');
            echo "<br /><br />GD lib has been updated to version >2. Activating TrueColor images.";
        }
        if(!$gd_version2_found && $gd_version == ">2")
        {
            update_config('<2','gd_version');
            echo "<br /><br />GD lib has been downgraded to version <2!? Disabling TrueColor images.";
        }
    }
}

/**
* UPDATES START HERE
*/

/**
 * START UPDATE 1.1.0 -> 1.1.1
 */
if($dbversion < 1011)
{
	if($dbtype != "sqlite")
	{
    	linpha_log('update','notice','DB update 1011 (altering IPTC caption field)');
    	echo 'DB update 1011 (altering IPTC caption field)<br />';

		$alter_caption = $GLOBALS['db']->query("ALTER TABLE ".PREFIX."meta_iptc " .
												"CHANGE caption caption TEXT");
	}
	update_config(1011, 'db_version');
}

/**
 * END UPDATE 1.1.0 -> 1.1.1 
 */

/**
 * START UPDATE 1.1.1 -> 1.2.0
 */
if($dbversion < 1012)
{
   	linpha_log('update','notice','DB update 1012 (adding config entry for EXIF autorotate)');
   	echo 'DB update 1012 (adding config entry for EXIF autorotate)<br />';	

	write_config('exif_image_autorotate', '1');

	if($dbtype != "sqlite")
	{
    	linpha_log('update','notice','DB update 1012-1 (altering photos rotation field)');
    	echo 'DB update 1012-1 (altering photos rotation field)<br />';

		$alter_exif = $GLOBALS['db']->query("ALTER TABLE ".PREFIX."photos " .
												"ADD rotation VARCHAR(10) DEFAULT 0");
	}

	update_config(1012, 'db_version');
}
/**
 * END UPDATE 1.1.1 -> 1.2.0 
 */

/**
 * START UPDATE 1.2.0 -> 1.3.0
 */
if($dbversion < 1013)
{
   	linpha_log('update','notice','DB update 1013 (adding maps plugin support)');
   	echo 'DB update 1013 (adding maps plugin support)<br />';	

	$add_maps_plugin = $GLOBALS['db']->query("INSERT INTO ".PREFIX."plugins " .
										"(name, active) VALUES ('maps', '0')");
	write_config('maps_setup_ok', '0');
	write_config('maps_yahoo_id', 'YourYahooIDHere');  
	write_config('maps_google_key', '0');
	write_config('maps_type', 'google');
	write_config('maps_default_zoom', '16');
	write_config('maps_default_zoom_location', 'London');
	write_config('maps_yahoo_type_control', '1');
	write_config('maps_yahoo_pan_control', '1');
	write_config('maps_yahoo_slide_control', '1');

	update_config(1013, 'db_version');
}

if($dbversion < 1014)
{
   	linpha_log('update','notice','DB update 1014 (adding maps marker popup support)');
   	echo 'DB update 1014 (adding maps marker popup support)<br />';	

	write_config('maps_marker_auto_popup', '1');

	update_config(1014, 'db_version');
}
 
if($dbversion < 1015)
{
   	linpha_log('update','notice','DB update 1015 (adding google maps support)');
   	echo 'DB update 1015 (adding google maps support)<br />';	

	write_config('maps_display_type', '1');
	write_config('maps_google_ctrl_size', '1');

	update_config(1015, 'db_version');
}
if($dbversion < 1016)
{
   	linpha_log('update','notice','DB update 1016 (adding google maps permissions support)');
   	echo 'DB update 1016 (adding google maps permissions support)<br />';	
	
	$GLOBALS['db']->Execute("INSERT into ".PREFIX."permissions " .
			"(type, who, groups_exceptions, groups_additional, and_or, alb, albums) ".
			"VALUES ('stats','1','','','0','0','')");
	update_config(1016, 'db_version');
}
/**
 * END UPDATE 1.2.0 -> 1.3.0 
 */

/**
 * START UPDATE 1.3.0 -> 1.3.1
 */
if($dbversion < 1017)
{
   	linpha_log('update','notice','DB update 1017 (adding advanced filehandling options)');
   	echo 'DB update 1017 (adding advanced filehandling options)<br />';	

	write_config('files_2_ignore', 'Thumbs.db,ZbThumbnail.info,_vti_cnf,_derived,Picasa.ini,Cdlabel.alb');
	write_config('fileext_2_ignore', 'thm,doc,txt');

	update_config(1017, 'db_version');
}
?>
	
