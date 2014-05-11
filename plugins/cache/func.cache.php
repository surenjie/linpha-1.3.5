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


/*##############################################################
## get date of photo
## returns the date of a photo
##############################################################*/
function get_photo_date_by_id($id)
{
	$result=$GLOBALS['db']->Execute("SELECT date FROM ".PREFIX."photos WHERE id='".linpha_addslashes($id)."'");
	$row=$result->FetchRow();
	return $row[0];
}

/*##############################################################
## cleanup cache if to much disk space is used
## called after each cache insert, so we dont need to be to
## hysteric about the actual size
##############################################################*/
function photo_cache_cleanup_size()
{
	$cache_size=read_config('cache_size');
	if($cache_size <= 0) {
		return;
	}

	$result=$GLOBALS['db']->Execute("SELECT SUM(size) FROM ".PREFIX."photo_cache");
	$row=$result->FetchRow();

	if($row[0] < $cache_size || $row[0] <= 0) {
		return;
	}
	
	$cleanup=$row[0] - $cache_size; // size to remove
	
	$result=$GLOBALS['db']->Execute("SELECT filename,size FROM ".PREFIX."photo_cache" .
									" ORDER by used");
	
	while($cleanup > 0 && $row=$result->FetchRow())
	{
		$cleanup = $cleanup - $row[1];
		if(!unlink("$row[0]")) {
			if(file_exists("$row[0]")) {
				error_log("photo_cache_cleanup_size unable to delete file $row[0]");
			}
		}
		$GLOBALS['db']->Execute("DELETE FROM ".PREFIX."photo_cache WHERE filename='".linpha_addslashes($row[0])."'");
	}
}

/*##############################################################
## clears cached photos by id
## 
##############################################################*/
function photo_cache_cleanup_by_id($id)
{
	$result=$GLOBALS['db']->Execute("SELECT filename FROM ".PREFIX."photo_cache WHERE photo_id='".linpha_addslashes($id)."'");

	while($row=$result->FetchRow())
	{
		$file2del = get_full_path($row[0]);
		if(!@unlink($file2del)) {
			if(file_exists($file2del)) {
				error_log("photo_cache_cleanup_by_id unable to delete file: ".$file2del);
			}
		}
	}
	$GLOBALS['db']->Execute("DELETE FROM ".PREFIX."photo_cache WHERE photo_id='".linpha_addslashes($id)."'");
}

function photo_cache_cleanup_invalid($force)
{
/*##############################################################
## cleanup cache for invalid entries
## called after "create_all_thumbs.php"
## cleanup is only done when cache_size <= 0, when there is a size
## invalid entries will automatically be removed over time
## what about cache_size<=0 and auto_thumb=on !!
##############################################################*/
$counter=0;
	if(read_config('cache_size') > 0 && !$force) {
		return;
	}

	// select cache entries that references a non existing photo
	$result=$GLOBALS['db']->Execute("SELECT photo_id FROM ".PREFIX."photo_cache " .
									"LEFT JOIN ".PREFIX."photos ON " .
									PREFIX."photo_cache.photo_id=".PREFIX."photos.id" .
									" WHERE ".PREFIX."photos.id IS NULL GROUP BY photo_id");
	while($row=$result->FetchRow())
	{
		$counter++;
		photo_cache_cleanup_by_id($row[0]);
	}
return $counter;
}

function photo_cache_cleanup_by_imagesize($size)
{
/*##############################################################
## used in: cache.php (cache plugin page)
## cleanup cache files > X kb 
##############################################################*/
$counter=0;
	$size=$size*1024; // kb-> bytes
	// select cache entries where size > X bytes 
	$result=$GLOBALS['db']->Execute("SELECT photo_id FROM ".PREFIX."photo_cache " .
									"WHERE size >='".linpha_addslashes($size)."'");
	while($row=$result->FetchRow())
	{
		$counter++;
		photo_cache_cleanup_by_id($row[0]);
	}
return $counter;
}

function photo_cache_cleanup_by_date($date)
{
/*##############################################################
## used in: cache.php (cache plugin page)
## cleanup cache files not accessed within X days
##############################################################*/
	$counter=0;
	$days_in_sec=$date*86400; //seconds day
	
	$query=$GLOBALS['db']->Execute("SELECT photo_id, date, used FROM ".PREFIX."photo_cache");
	while($data = $query->FetchRow())
	{
		/**
		 * select cache entries older X days
		 */
		
		$date = $GLOBALS['db']->UnixTimeStamp($data[1]);							
		$used = $GLOBALS['db']->UnixTimeStamp($data[2]);
		
		if($used < (time()-$days_in_sec) || ( $used == 0 && $date < (time()-$days_in_sec)))
        {
            $counter++;
            photo_cache_cleanup_by_id($data[0]);
		}
	}
	return $counter;
}

function photo_cache_delete_folder($path)
{
	$full_path = get_full_path($path);

	if(file_exists($full_path))
	{
		for($i = 0; $i <= 9; $i++)
		{
			if(file_exists($full_path.'/'.$i))
			{
				if($d = dir($full_path.'/'.$i))
				{
					while(false !== ($entry = $d->read()))
					{
						if($entry != '.' && $entry != '..')
						{
							unlink($full_path.'/'.$i.'/'.$entry);
						}
					}
					$d->close();
				}
				rmdir($full_path.'/'.$i);
			}
		}
		rmdir($full_path);
	}
}

function build_cache_filename($id,$q,$h,$w,$r,$wm)
{
	$cache_path=read_config('cache_path');
	
    if($wm) {
        $wm = 1;
    } else {
        $wm = '';
    }
    
	$output = $cache_path."/".($id%10)."/" .
				$id."-".$q."-".$h."-".$w."-".$r."-".$wm.".jpg";
				
	return $output;
}

function show_cache_stats($photos)
{
	if($photos > 0)
	{
		$q = read_config('img_quality');
		$h = read_config('photo_height');
		$w = read_config('photo_width');

		$query = $GLOBALS['db']->Execute("SELECT COUNT(1) FROM ".PREFIX."photo_cache ".
			"WHERE filename LIKE '%-".$q."-%-".$w."--.jpg' OR ".
			"filename LIKE '%-".$q."-".$h."-%--.jpg'");
		$data = $query->FetchRow();
		$cache_elements_percent = ($data[0]*100)/$photos;
	} else {
		$cache_elements_percent=0;
	}

	$query=$GLOBALS['db']->Execute("SELECT COUNT(1),SUM(hits),MAX(hits),AVG(hits),SUM(size),SUM(convert_time*hits) FROM ".PREFIX."photo_cache");
	$result=$query->FetchRow();
	$cache_elements = $result[0];
	$cache_hits=$result[1];
	$cache_hits_max=$result[2];
	$cache_hits_avg=round($result[3], 2);
	$cache_size=round(($result[4]/1024)/1024, 2);
	$totsec=round($result[5]);
	$sec=($totsec%60);
	if($sec > 9) {
		$cache_convert_time=floor($totsec/60).":".$sec;
	} else {
		$cache_convert_time=floor($totsec/60).":0".$sec;
	}
	$query=$GLOBALS['db']->Execute("SELECT COUNT(1) FROM ".PREFIX."photo_cache WHERE hits=0");
	$result=$query->FetchRow();
	$cache_first=$result[0];

global $cache_stats, $stat_cache_elements,$stat_cache_first,$stat_cache_hits,$stat_cache_hits_max,$stat_cache_hits_avg,$stat_cache_size,$stat_cache_convert_time;
print("<tr><th class='maintable' colspan='3'>$cache_stats</th></tr>");
print("	<tr><td class='admintable'>$stat_cache_elements:</td><td class='admintable'>".@$cache_elements."&nbsp;&nbsp;(".round(($cache_elements_percent),2)."&nbsp;%)</td></tr>
			<tr><td class='admintable'>$stat_cache_first:</td><td class='admintable'>".@$cache_first."</td></tr>
			<tr><td class='admintable'>$stat_cache_hits:</td><td class='admintable'>".@$cache_hits."</td></tr>
			<tr><td class='admintable'>$stat_cache_hits_max:</td><td class='admintable'>".@$cache_hits_max."</td></tr>
			<tr><td class='admintable'>$stat_cache_hits_avg:</td><td class='admintable'>".@$cache_hits_avg."</td></tr>
			<tr><td class='admintable'>$stat_cache_size:</td><td class='admintable'>".@$cache_size." MB</td></tr>
			<tr><td class='admintable'>$stat_cache_convert_time:</td><td class='admintable'>".@$cache_convert_time." Min</td></tr>");
}

function create_cached_image_if_not_exists($imgid,$src_file, $img_quality, $nh, $nw, $rotate,
	$watermark, $type, $increment_count_on_hit)
{
	/**
	* build cache filename
	*/
	$output = build_cache_filename($imgid,$img_quality,$nh,$nw,$rotate,$watermark);
	$file_output = get_full_path($output);
	
	$query = $GLOBALS['db']->Execute("SELECT filename,photo_id,date,used,hits,size ". 
									"FROM ".PREFIX."photo_cache " .
									"WHERE filename='".linpha_addslashes($output)."'");

	$cache_info = $query->FetchRow(ADODB_FETCH_ASSOC);
	
	/**
	* check for invalid cache
	*
	* need check isset($cache_info) because otherwise photo_cache_cleanup_by_id() is executed
	* even if no images were found in the cache table. this isn't funny if we have more than one
	* cached image with the same id -> they were deleted everytime
	*/
	if( isset($cache_info['date']) && 
        $GLOBALS['db']->UnixTimeStamp( get_photo_date_by_id( $imgid ) ) >
        $GLOBALS['db']->UnixTimeStamp( $cache_info['date'] )
        )
	{
		photo_cache_cleanup_by_id($imgid);	// delete cached image in db and filesys
		$cache_info['size'] = 0;	// make sure the cached image is recreated
	}
	
	if(file_exists($file_output) && $cache_info['size'] > 0)
	{
        /**
        * increment cache counter
        */
        if($increment_count_on_hit)
        {
			$GLOBALS['db']->Execute("UPDATE ".PREFIX."photo_cache ".
					"SET hits=hits+1 WHERE filename='".linpha_addslashes($output)."'");
        }
    }
	else
	{
		$cache_path = get_full_path( read_config('cache_path') );
		if(!is_writable($cache_path))
		{
			/**
			 * Error: Cache directory isn't writable!
			 * "disable" caching
			 */
			/*$query = $GLOBALS['db']->Execute("SELECT filename, prev_path ".
				"FROM ".PREFIX."photos WHERE id = '".linpha_addslashes($imgid)."'");
			$data = $query->FetchRow();
			
			return TOP_DIR.'/'.$data[1].'/'.$data[0];*/
			
			return TOP_DIR.'/graphics/error_img_cache.jpg';
		}
	
		/**
		* Always update the DB with the cache element, before the cached file is created,
		* so we don't leak half files in case of user abort
		*/
		$timestamp = $GLOBALS['db']->DBTimeStamp(time());
		$GLOBALS['db']->Execute("INSERT INTO ".PREFIX."photo_cache (photo_id,date,filename,size) ".
			"VALUES (".linpha_addslashes($imgid).",".$timestamp.",'".linpha_addslashes($output)."','0')");

		start_timer("convert");
	    /**
	     * warning: session will be closed!
	     */
		convert_image($src_file, $file_output, $img_quality, $nh, $nw, $rotate, $watermark, $type);
		if(!file_exists($file_output))
		{
			echo "Error: Cannot create image!";
			exit(1);
		}
		$time=stop_timer("convert");
	
		$GLOBALS['db']->Execute("UPDATE ".PREFIX."photo_cache set ".
								"size=".filesize($file_output).", convert_time=".$time." ".
								"WHERE filename='".linpha_addslashes($output)."'");
	}
	return $file_output;
}
?>