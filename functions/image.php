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

/**
* image functions
*/

if(!defined('TOP_DIR')) { define('TOP_DIR','..'); }

/**
* convert_image() uses the watermark functions
* so we can't include it on the fly
*/
include_once(TOP_DIR.'/plugins/watermark/func.watermark.php');

/**
* Select random image from db for index.php
*
* use "SELECT * FROM linpha_photos, linpha_first_lev_album WHERE sql_perm()
* ORDER by Rand()" (doesn't work with sqlite)
* ..that's why we use random arrays ;-)
*/
function print_random_image()
{
    global $thumb_hint_msg, $style;
    
    /**
    * initialize randomizer
    */
    srand((float) microtime() * 10000000); 
    
    $max_querys = 50;
    $query_paths = $GLOBALS['db']->Execute("SELECT path FROM ".PREFIX."first_lev_album ".
                    "WHERE ".sql_perm());
                    
        while($content = $query_paths->FetchRow())
        {
            $random_path[] = $content[0];
        }
        
        if(isset($random_path) && is_array($random_path))
        {
            $path_id = rand(0, count($random_path)-1);
        
            $query_img_prev = $GLOBALS['db']->Execute("SELECT id, prev_path, filename, md5sum FROM ".PREFIX."photos ".
                                "WHERE prev_path LIKE '".linpha_addslashes($random_path[$path_id])."%' ".
                                "AND level <> '1'");
            for($counter=0; $data = $query_img_prev->FetchRow(); $counter++)
            {
                $counter++;
                $random_image[] = $data;
                if($counter == $max_querys) {
                    break;
                }
            }
        }
    
    if(isset($random_image) && is_array($random_image))
    {
        srand((float) microtime() * 10000000); 
        $rand_image= rand(0, count($random_image)-1);
        $image_data = $random_image[$rand_image];
        
        if(file_exists($image_data[1]."/".$image_data[2]))
        {
            $valid_image_found = true;
        }
        else
        {
            $valid_image_found = false;
        }
    }
    else
    {
        $valid_image_found = false;
    }

    if($valid_image_found)
    {
        /**
         * Take care of image orientation (GD lib needs it)
         */
        $image_size = read_config('random_image_size');
        list($org_width,$org_height) = getimagesize($image_data[1]."/".$image_data[2]);
        $result = scale_to_fit($org_height,$org_width,$image_size,$image_size,0);  
        $on_fly_width = $result['w'];
        $on_fly_height = $result['h'];
        
        /**
        * if image cache is active, use the cached image even if it is bigger
        */
        if(read_plugins_config('cache'))
        {
            $max_width = read_config('photo_width');
            $max_height = read_config('photo_height');
            
            $result2 = scale_to_fit($org_height,$org_width,$max_height,$max_width,0);
            
            /**
            * only if cached image is bigger than the setting randim_image_size
            * to prevent streching the image
            */
            if($result2['w'] > $result['w'])
            {
                $on_fly_width = $result2['w'];
                $on_fly_height = $result2['h'];
            }
        }
        
        $stage = get_stage_from_prev_path($image_data[1]);
        $albid = get_albid($image_data[1],$stage);
		$array = get_rgb_from_all(read_config('thumb_border_color'));
        $color = get_html_color_from_rgb($array['r'],$array['g'],$array['b']);

        echo "<br /><br />";
        echo "&nbsp;&nbsp;&nbsp;&nbsp;";
        echo "<a href='".TOP_DIR.'/viewer.php?imgid='.$image_data[0].'&albid='.$albid.'&stage='.$stage."'>";
        echo "<img width='".$result['w']."' height='".$result['h']."' title=\"".$image_data[1]."/".$image_data[2]."\" ".
            "src='".TOP_DIR."/get_thumbs_on_fly.php?imgid=".$image_data[0]."&nw=".$on_fly_width."".
            "&nh=".$on_fly_height."' style='border: ".read_config('thumb_border').'px '.$color." solid;' ".
			"border='0' alt='photo'></a>";
        echo "<br />";
        echo "&nbsp;&nbsp;&nbsp;&nbsp;";

        $descr = read_description('description',$image_data[3]);
        if(!empty($descr))
        {
            echo $descr;
        }
    }
    else
    {
        ?>    
        <br /><br />
        <img src='<?php echo TOP_DIR.'/graphics/index_logo_'.$style.'.jpg'; ?>' border='0' alt='linpha logo'>
        <?php
    }
}

/**
* unified thumbnail output
* because of border size and color
*
* @uses  basket.php, include/img_view.class.php
* @param  int  $imgid  (unencrypted) id of the image
* @param  bool  $title  optional, true=show title
* @param  int  $border  border width
*/
function print_thumbnail($imgid,$title=true)
{
	if($title) {
		$title_str = " title='".$GLOBALS['thumb_hint_msg']."'";
	} else {
		$title_str = '';
	}
	
	$array = get_rgb_from_all(read_config('thumb_border_color'));
	$color = get_html_color_from_rgb($array['r'],$array['g'],$array['b']);
	
	echo "<img src='".TOP_DIR."/get_thumbs.php?id=".$imgid."'".
		$title_str." alt='thumbnail' style='border: ".read_config('thumb_border').'px '.$color." solid;'>";
	/**
	
	<div align='center' style='border: <?php echo read_config('thumb_border').'px '.$color; ?> solid;'>
	</div>
	
	width: 1px; height: 1px; 
	*	<table style='border: <?php echo read_config('thumb_border').'px '.$color; ?> solid;' cellspacing='0' cellpadding='0' width='1'>
		<tr>
			<td>
			</td>
		</tr>
	</table>
	*/
}

/**
* print the links to view the image in different resolutions
*
* @uses  actions/build_stats.php, include/img_view.class.php
* @param  int  $imgid  (unencrypted) id of the image
* @param  int  $org_width|$org_height  original width and height to calc the new resolution
* @param  int  $i either 0 for a single select on page or a real counter var
* 			like in stats
*/
function print_resized_view($imgid,$org_width,$org_height, $i)
{
	global $img_size, $view_at;
		 
	//$printf_link = '&nbsp;<a href="'.TOP_DIR.'/actions/image_resized_view.php?'.
	//	'imgid='.$imgid.'&nw=%s&nh=%s" target="_blank">[%s]</a>';
	
    $array_list[0] = $view_at;
    
	// if width and height == 0 we do not repect ratio at all (stats page)
	// but take care if called from img_view.php
	if( $org_width!="0" && $org_height!="0" && !empty($org_width) && !empty($org_height) )
	{
		$array = scale_to_fit($org_height,$org_width,480,640,0);
        $array_list[$array['w'].'x'.$array['h']] = $array['w'].'x'.$array['h'];
		
		$array = scale_to_fit($org_height,$org_width,600,800,0);
        $array_list[$array['w'].'x'.$array['h']] = $array['w'].'x'.$array['h'];
        
        $array = scale_to_fit($org_height,$org_width,768,1024,0);
        $array_list[$array['w'].'x'.$array['h']] = $array['w'].'x'.$array['h'];

        $array = scale_to_fit($org_height,$org_width,1024,1280,0);
        $array_list[$array['w'].'x'.$array['h']] = $array['w'].'x'.$array['h'];

        $array = scale_to_fit($org_height,$org_width,1200,1600,0);
        $array_list[$array['w'].'x'.$array['h']] = $array['w'].'x'.$array['h'];
		
        $array_list['fullsize'] = $org_width.'x'.$org_height.' ('.$img_size.')';
	}
	else // just print fixed values
	{
		//printf($printf_link,640,480,'640x480');
		//printf($printf_link,800,600,'800x600');
		//printf($printf_link,$org_width,$org_height.'&fullsize=1',$img_size);
        $array_list['640x480'] = '640x480';
        $array_list['800x600'] = '800x600';
        $array_list['1024x768'] = '1024x768';
        $array_list['1280x1024'] = '1280x1024';
        $array_list['1600x1200'] = '1600x1200';
        $array_list['fullsize'] = $img_size;
	}
    
    form_generate_select('view_at','1',' style="width: 100px" class="headerfooter" id="'.$i.'" onChange="resized_view'.$i.'()"',@$_GET['wh'],$array_list);
    ?>
    <script language="JavaScript" type='text/javascript'>
    function resized_view<?php echo $i; ?>()
    {
        elem = document.getElementById('<?php echo $i; ?>');
        if(elem.value != 0)
        {
            <?php
            /**
             * if we are already in image_resized_view, don't open a new window
             */
            if(isset($_GET['wh']))
            {
                ?>
                location.href = '<?php echo TOP_DIR; ?>/actions/image_resized_view.php?imgid=<?php echo $imgid; ?>&wh=' + elem.value;
                <?php
            }
            else
            {
                ?>
                window.open('<?php echo TOP_DIR; ?>/actions/image_resized_view.php?imgid=<?php echo $imgid; ?>&wh=' + elem.value,'');
                <?php
            }
            ?>
        } 
    }
    </script>
    <?php
}


function scale_to_fit($src_h,$src_w,$dst_h,$dst_w,$no_increase)
{
/*##########################################################
## used in: print_final.php, get_thumbs_on_fly.php (slideshow), linpha_comments.php
## This function returns width and height of the scaled image
## to fit in $dst_h and $dst_w, it keeps the image ratio
## calculated from $src_h and $src_w
## if $no_increase is set, the image is only decreased
##########################################################*/

	if($src_h == 0 OR $src_w == 0)
	{
		return array('w' => 0, 'h' => 0);
	}

	$img_relation = $src_w/$src_h;

	// Image is smaller than screen, no resize required
	if (($src_w <= $dst_w) && ($src_h <= $dst_h) && $no_increase)
	{
		$array['w'] = $src_w;
		$array['h'] = $src_h;
	}
	else
	{
		/*
		The image is way bigger than the screen, resize maintaining aspect ratio

		$src_w, $src_h: original image sizes
		$dst_w, $dst_h: screen width and height
		$img_relation = $src_w/$src_h;
	
		Either $dst_w decisive or $dst_h, usually $dst_h 
		*/

		$tmp_height = $dst_w / $img_relation;		// calc the new height with screen width
		if ($tmp_height > $dst_h) {			// we were wrong, it's still widther than screen -> $dst_h is decisive
			$array['w'] = round($img_relation*$dst_h);
			$array['h'] = $dst_h;
		} else {
			$array['w'] = $dst_w;
			$array['h'] = round($tmp_height);
		}
	}
	return $array;
}

function prepare_gd_rotate_image($img2rotate, $angle)
{
/*##########################################################
## used in: rotate.php
## This function rotates the given image (filename) with the
## specified angle
##########################################################*/
	list($org_width,$org_height,$org_type) = linpha_getimagesize($img2rotate);
	switch($org_type)
	{
		case 1: $image=imagecreatefromgif($img2rotate); break;
		case 2: $image=imagecreatefromjpeg($img2rotate); break;
		case 3: $image=imagecreatefrompng($img2rotate); break;
		default: $image=imagecreatefromjpeg($img2rotate); break;
	}

	// rotate it
	gd_rotate_image($image, $angle, $org_width, $org_height);

	switch($org_type)
	{
		case 1: imagegif($image, $img2rotate); break;
		case 2: imagejpeg($image, $img2rotate, 80); break;
		case 3: imagepng($image, $img2rotate); break;
		default: imagejpeg($image, $img2rotate, 80); break;
	}
	imagedestroy($image);
}

/**
* this function can rotate an image even if imagerotate() isn't available
* refer to http://www.php.net/manual/en/function.imagerotate.php
* 
* but still use imagerotate() (if available) because it is much faster!
*
* the function imagerotate() is available when php is built with bundled gd. So this function won't
* be available when you (or your webhosting) build the php gd support with external gd packages,
* either from the distribution CD or from www.boutell.com.
*
* imagerotate() isn't available on debian unstable latest php4 (version 4.3.8)
*/
function gd_rotate_image(& $src_img, $angle, $width, $height)
{
	if(function_exists('imagerotate'))
	{
	    /**
	    * flip $angle, because with this function, left means right, and right means left :-)
	    */
	    $angle += 180;
	    if($angle > 180)
	    {
	        $angle -= 360;
	    }
		$src_img = imagerotate($src_img,$angle,0);
	}
	else
	{
		$dst_img = linpha_gd_imagecreate($height,$width);		// flip $width and $height
		
		if($angle==90)
		{
			$t=0;
			$b=$height-1;
			while($t<=$b)
			{
				$l=0;
				$r=$width-1;
				while($l<=$r)
				{
					imagecopy($dst_img,$src_img,$t,$r,$r,$b,1,1);
					imagecopy($dst_img,$src_img,$t,$l,$l,$b,1,1);
					imagecopy($dst_img,$src_img,$b,$r,$r,$t,1,1);
					imagecopy($dst_img,$src_img,$b,$l,$l,$t,1,1);
					$l++;
					$r--;
				}
				$t++;
				$b--;
			}
		}
		elseif($angle==-90)
		{
			$t=0;
			$b=$height-1;
			while($t<=$b)
			{
				$l=0;
				$r=$width-1;
				while($l<=$r)
				{
					imagecopy($dst_img,$src_img,$t,$l,$r,$t,1,1);
					imagecopy($dst_img,$src_img,$t,$r,$l,$t,1,1);
					imagecopy($dst_img,$src_img,$b,$l,$r,$b,1,1);
					imagecopy($dst_img,$src_img,$b,$r,$l,$b,1,1);
					$l++;
					$r--;
				}
				$t++;
				$b--;
			}
		}
		else
		{
			/**
			* unsupported angle, don't rotate
			*/
			$dst_img = $src_img;
		}
		
		$src_img = $dst_img;
	}
}

function make_thumb($imgid)
{
/*##########################################################
## used in: current
## This function determines the filetype and calls the make_thumbs() function
##
## returns:
## calls make thumbs with correct filetype
//make_thumbs($prev_path, $entry, $org_width, $org_height, $org_type, $name);
##########################################################*/
    $query = $GLOBALS['db']->Execute("SELECT prev_path, filename ".
                "FROM ".PREFIX."photos ".
                "WHERE id = '".linpha_addslashes($imgid)."'");
    $data = $query->fetchRow();
    $src_file = TOP_DIR.'/'.$data['prev_path']."/".$data['filename'];

	list($org_width,$org_height,$org_type) = linpha_getimagesize($src_file);
    
    linpha_log('thumbnail','notice','Creating thumbnail for file: '.linpha_addslashes($src_file));

	if( is_video($org_type) )
	{
        $tmp_file = create_video_thumbnail($src_file);
        
        /**
         * Important: filesize($tmp_file) may return zero if clearstatcache() is not executed!
         */
        clearstatcache();
        $handle = fopen($tmp_file, "rb");
        $file_data = fread($handle, filesize($tmp_file));
        fclose($handle);
        unlink($tmp_file);
        
        if(get_magic_quotes_runtime()) {
            $file_data = stripslashes($file_data);
        }
        
    }
    elseif( is_supported_image($org_type) )
    {
		/**
		 * autorotate
		 */
		if(read_config('exif_image_autorotate'))
		{	 
			if( !isset($metainfo) )
			{
				include_once(TOP_DIR.'/include/metadata.class.php');
				$metainfo = true;
			}
			$rotate = MetaData::rotateByExifTag($src_file);
		
			$rotation =$GLOBALS['db']->Execute("UPDATE ".PREFIX."photos ".
	            "SET rotation=".$rotate." " .
	            "WHERE id='".linpha_addslashes($imgid)."'");
		}
		else
		{
			$rotate = 0;
		}

        /**
        * read thumbsize
        */
        $thumbsize = read_config('thumb_size');
        if(!empty($thumbsize)) {
            $max_width = $thumbsize;
            $max_height = $thumbsize;
        } else { //default fallback
            $max_width = "120";
            $max_height = "120";
        }

        /**
        * set parameters
        */
        $array = scale_to_fit($org_height,$org_width,$max_height,$max_width,0);
        $new_width = $array['w'];
        $new_height = $array['h'];
        $output = 'no_header';      // output to screen but without header information (we get the data with ob_start() and ob_get_contents()
        $quality = 75;
        $border = read_config('thumb_border');

        // start output buffering
        ob_start();
        
        /**
         * warning: session will be closed!
         */
        convert_image($src_file, $output, $quality, $new_height, $new_width, $rotate, $watermark='', $type='');
        $file_data = ob_get_contents();     // no magic_quotes handling needed
        ob_end_clean();
    }

    /**
    * store generated thumbs
    */
    //$GLOBALS['db']->debug = true;
    $timestamp = $GLOBALS['db']->DBTimeStamp(time());
    $up_thumb =$GLOBALS['db']->Execute("UPDATE ".PREFIX."photos ".
            "SET date=".$timestamp." WHERE id='".linpha_addslashes($imgid)."'");
    
    /**
 	* @todo  why do we need to addslashes() on inserting thumbnails into db and
 	* stripslashes() on reading thumbnails from db in sqlite?
 	* Yes, insert query will fail if thumbdata is not escaped ;-) 
 	*/
    if(DB_TYPE == 'sqlite')
	{
		$file_data = addslashes($file_data);
	}

	$sql = $GLOBALS['db']->UpdateBlob(PREFIX."photos", 'thumbnail', $file_data, "id='".$imgid."'");
}

function create_video_thumbnail($src_file)
{
	$dummy_thumbnail = TOP_DIR."/graphics/avi_mov.gif";
	$h = read_config('thumb_size');
	$w = read_config('thumb_size');

	/**
	* check if we can get a thumbnail
	*/
		$found_thumbnail = false;
		$tmp_file = linpha_tempnam('video_thumbnail','.jpg');

		/**
		* check if there exists a .thm file
		* (video thumbnail of Canon videos)
		*/
		$pos = strrpos($src_file,'.');
		$start = substr($src_file,0,$pos);
		$thm_file = $start.'.thm';
		if(file_exists($thm_file))
		{
			copy($thm_file,$tmp_file);
			
			$found_thumbnail = true;
			$src_file = $thm_file;
		}
		
		if(!$found_thumbnail)
		{
			/**
			* try to get the tumbnail with convert
			*/
			if(read_config('use_convert') && read_config('video_thumbnail'))
			{
				/**
				* only if codec is mjpg, because otherwise we get an access
				* violation message box on the servers desktop of convert.exe
				* (already reported to imagemagick http://studio. imagemagick.
				* org/magick/viewtopic.php?t=2868)
				*/
				include_once(TOP_DIR.'/plugins/getid3/getid3.php');
			    if(!defined('GETID3_HELPERAPPSDIR'))
			    {
                    // needs to be set to a valid dir, otherwise it doesn't 
                    // work under windows
                    define('GETID3_HELPERAPPSDIR', TOP_DIR); 
    		    }
				$getID3 = new getID3;
				$file_info = $getID3->analyze($src_file);

                $tryit = false;
				if(isset($file_info['video']['codec']))
                {
                    $codec = strtolower($file_info['video']['codec']);
                    if(strpos($codec, "mjpeg") !== false 
                        OR strpos($codec, "motion jpeg") !== false
                        OR strpos($codec, "motion jpg") !== false
                        OR strpos($codec, "mjpg") !== false)
                    {
                        $tryit = true;
                    }
                }

				if($tryit)
				{
					$convert_path = read_config('convert_path');
					/**
					* redirect stderr to get all error messages to see if convert fails
					* on divx videos, convert outputs 'convert: AVI chunk vprp
					* not yet supported.' to stderr but exists with return value
					* 0
					*
					* "2>&1" produces no error under windows
					* 
					* $input[0] -> take only first frame!!!
					*/
                    linpha_session_write_close();

					//echo $convert_path.'convert '.escape_string($src_file.'[0]').' -resize '.$w.'x'.$h.' '.escape_string($tmp_file).' 2>&1';
					//exit();

					$array_output = array(); $return_value = '';	// do not this inside exec() !!!!!!!!!! it will overwrite the returned content !!
					exec($convert_path.'convert '.escape_string($src_file.'[0]').' -resize '.$w.'x'.$h.' '.
						escape_string($tmp_file).' 2>&1',$array_output,$return_value);
					if($return_value == 0 && /*empty($array_output[0]) && */file_exists($tmp_file))
					{
						$found_thumbnail = true;
					}
				}
			}
		}
	
	/**
	* copy the video icon in the lower right corner
	*/
	if($found_thumbnail)
	{
		global $wm_config;
		$wm_config = Array(
			'wm_watermark' => 2,
			'wm_align' => 'southeast',
			'wm_dissolve' => 100,
			'wm_img_img' => TOP_DIR.'/graphics/avi_mov.gif',
			'wm_resize' => 30,
			'wm_horizontal' => 5,
			'wm_vertical' => 5
		);
        /**
         * warning: session will be closed!
         */
		convert_image($src_file, $tmp_file, $q=75, $h, $w, $rotate='', $watermark=1, $type='');
	}
	else
	{
		copy($dummy_thumbnail,$tmp_file);
	}
	
	return $tmp_file;
}

function convert_image($input, $output, $q, $h, $w, $rotate, $watermark, $type/*, $border*/)
{
/*##########################################################
## used in: get_thumbs_on_fly.php
## calls convert_image_convert or convert_image_gd with the correct settings
## this function needs db access
##########################################################*/
	$convert=read_config('use_convert');
	
	if(empty($type)) // check config for type
	{
		if($convert) {
			$type = "convert";
		} else {
			if(read_config('thumb_quality')) {
				$type = 'gdhigh';
			} else {
				$type = "gd";
			}
		}
	}

	switch($type)
	{
	case "convert":
		convert_image_convert($input, $output, $q, $h, $w, $rotate, $watermark/*, $border*/);
	break;
	case "gd":
	case "gdhigh":
		convert_image_gd($input, $output, $q, $h, $w, $rotate, $watermark, $type);
	break;
	}
}

function convert_image_convert($input, $output, $q, $h, $w, $rotate, $watermark)
{
/*##########################################################
## used in: convert_image()
## this function don't need db access
##########################################################*/

	$convert_path=read_config('convert_path');

	if(empty($output))	// if $output is empty, the image is printed to the display
	{
		$output = linpha_tempnam(basename($input),".jpg");
		$no_header = 0;
		$output_to_screen = 1;
	} elseif($output == 'no_header') {		// output to screen, but without header (used in creating thumbnails)
		$output = linpha_tempnam(basename($input),".jpg");
		$no_header = 1;
		$output_to_screen = 1;
	} else {
		$output_to_screen = 0;
	}

	// SECURITY
	// check all variables coming from $_GET parameters
	check_variable('int',$q);	// comes from $_GET['quality'], but is also checked in get_thumbs_on_fly.php
	check_variable('int',$w);	// comes from $_GET['nw']
	check_variable('int',$h);	// comes from $_GET['nh']
	
	if($watermark) {
		$convert_str = build_watermark_str($input,$output,$q,$w,$h,$convert_path);
	} else {
		// if making any changes, change it in the function build_watermark_str() too!
		$convert_str = $convert_path.'convert'.
			' -quality '.$q.
			' -size "'.$w.'x'.$h.'"'.	// new size
			' '.escape_string($input).'[0]'.	// [0] -> take only first frame!!!
			' -resize "'.$w.'x'.$h.'"'.	// new size
			' -strip '. // replaces +profile "*" because we have a lot of problems with it! this should be save to use, as it's available since Jun 2003 '
			' -colorspace RGB'.		// change colorspace always to RGB because all browsers only can display RGB images
			' '.escape_string($output);
	}
	
    /**
     * close session before exec()
     * if exec() is called twice (like on the print preview), apache will hang
     * on windows
     * 
     * use $_SESSION_backup to get $_SESSION back -> it is still possible to
     * read session variables, but not write! take care of this
     */
    linpha_session_write_close();

	$array_output = array(); $return_value = '';	// do not this inside exec() !!!!!!!!!! it will overwrite the returned content !!
	exec($convert_str,$array_output,$return_value);

	if(!empty($rotate))
	{
		$convert_str_rotate = $convert_path.'convert'.
    		' '.escape_string($output).
    		' -rotate '.$rotate.
    		' '.escape_string($output);
    		
        $array_output2 = array(); $return_value2 = '';	// do not this inside exec() !!!!!!!!!! it will overwrite the returned content !!
        exec($convert_str_rotate,$array_output2,$return_value2);
	}

	if($return_value == 0)
	{
		if($output_to_screen) {
			image_file_to_screen($output,$no_header);
			@unlink($output);
		}
	}
	else
	{
		echo 'Error while creating image '.$input.'! Return Value: '.$return_value.'<br />';
		echo $convert_str.'<br /><pre>';
		print_r($output);
		echo '</pre>';
	}
}

function image_file_to_screen($filename,$no_header=0)
{
	if(!$no_header)
	{
		header("Content-Type: image/jpeg");
	}
	
	if($handle = fopen($filename, "rb"))
	{
		while (!feof($handle))
		{
			$contents = fread($handle, 8192);
			if(get_magic_quotes_runtime()==1)	// get rid of magic_quotes
			{
				$contents=stripslashes($contents);
			}
			echo $contents;
		}
		fclose($handle);
	}
}

function linpha_gd_imagecreate($w,$h)
{
	// ask config for GD version
	$gd_current=read_config('gd_version');
	switch($gd_current)
	{
		case ">2":
			$scaled_image=imagecreatetruecolor($w, $h);
			break;
		case "<2":
			$scaled_image=imagecreate($w, $h);
			break;
		default:
			$scaled_image=imagecreate($w,$h);
			break;
	}
	return $scaled_image;
}

function convert_image_gd($input, $output, $q, $h, $w, $rotate, $watermark, $gdhigh)
{
/*##########################################################
## used in: convert_image_gd()
## this function don't need db access
##########################################################*/

	@ini_set("memory_limit", "64M"); // try to increase memory_limit
	@set_time_limit(0); // try remove php script time limit of 30 sec

	list($org_width,$org_height,$org_type) = @linpha_getimagesize($input);
	
	switch($org_type)
	{
		case 1: $image_type=imagecreatefromgif($input); break;
		case 2: $image_type=imagecreatefromjpeg($input); break;
		case 3: $image_type=imagecreatefrompng($input); break;
		default: $image_type=imagecreatefromjpeg($input); break;
	}

	$scaled_image = linpha_gd_imagecreate($w,$h);
	
	if($gdhigh=="gdhigh")
	{
		// create HQ thumbnails using imagecopyresampled()
		imagecopyresampled($scaled_image,$image_type,0,0,0,0,
				$w,$h,
				$org_width,$org_height);
	}
	else
	{
		imagecopyresized($scaled_image,$image_type,0,0,0,0,
				$w,$h,
				$org_width,$org_height);
	}
	imagedestroy($image_type);

	// Watermark
	if($watermark) {
		watermark_gd($scaled_image,$w,$h);
	}

	/**
	* rotate for printing
	*/
	if($rotate == 90 OR $rotate == -90)
	{
		gd_rotate_image($scaled_image,$rotate,$w,$h);
	}

	if(empty($output)) {
		header("Content-Type: image/jpeg");
		imagejpeg($scaled_image,'', $q);	// output to screen
	} elseif($output == 'no_header') {		// output to screen, but without header (used in creating thumbnails)
		imagejpeg($scaled_image,'', $q);
	} else {
		@imagejpeg($scaled_image,$output, $q);	// output to file
	}
	imagedestroy($scaled_image);
}

?>
