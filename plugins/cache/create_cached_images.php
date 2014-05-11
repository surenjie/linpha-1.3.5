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

ini_set('include_path', TOP_DIR);   // set in include path because in db_connect.php isn't TOP_DIR used to include adodb.inc.php!

include_once(TOP_DIR.'/include/session.php');
include_once(language_file());
include_once(TOP_DIR.'/plugins/cache/func.cache.php');

if(!in_group('admin'))
{
    include_once(language_file());
    echo STR_ACCESS_DENIED;
    exit(1);
}

/**
* only if at least one album is selected
*/
if(isset($_POST['album_select']))
{
    $max_height = read_config('photo_height');
    $max_width = read_config('photo_width');
    $img_quality = read_config('img_quality');
    
    if(isset($_POST['with_watermarks']))
    {
        $array_wm[] = 1;
    }
    
    if(isset($_POST['no_watermarks']))
    {
        $array_wm[] = 0;
    }
    
    /**
    * only if at least one checkbox is selected
    */
    if(isset($array_wm))
    {
        foreach($_POST['album_select'] AS $value)
        {
            $path = get_path_from_id($value,$without_leading_albums=false);
            
            $query = $GLOBALS['db']->Execute("SELECT id, prev_path, filename FROM ".PREFIX."photos ".
                "WHERE prev_path='".linpha_addslashes($path)."' AND level='0'");
            while($data = $query->FetchRow(ADODB_FETCH_ASSOC))
            {
                $src_file = TOP_DIR.'/'.$data[1]."/".$data[2];
                list($org_width,$org_height) = getimagesize($src_file);
                $array = scale_to_fit($org_height,$org_width,$max_height,$max_width,1);  
                $nw = $array['w'];
                $nh = $array['h'];

                /**
                * one time with watermark, one time without
                */
                foreach($array_wm AS $value_wm)
                {
                	if(create_cached_image_if_not_exists($data['id'],$src_file, $img_quality,
                		$nh,$nw,$rotate='', $watermark=$value_wm, $type='',$increment_count_on_hit=0))
                	{
            			/**
            			 * @todo  language entry
            			 */
	                	echo 'Caching file: '.$src_file.'<br />';
	                	@ob_flush();	// in php5 we're getting a notice, in php4 we need ob_flush() to flush properly
	                	flush();
                	}

                    /*$output = build_cache_filename($data['id'],$img_quality,$nh,$nw,$rotate='',$watemark=$value_wm);
                    
                    /**
                    * check if this image isn't already cached
                    
                    $query_cache = $GLOBALS['db']->Execute("SELECT photo_id FROM ".PREFIX."photo_cache ".
                        "WHERE filename='".linpha_addslashes($output)."'");
                    $num = $query_cache->RecordCount();
                    if($num==0)
                    {
                        
                    }*/
                }
            }
        }
    }
}

echo "<br /><br /><a href='".TOP_DIR."/admin.php?plugins=1&page=cache'>".$admin_task."</a>";
?>