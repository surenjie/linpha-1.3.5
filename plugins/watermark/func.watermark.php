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

/**
* @uses  get_thumbs_on_fly.php, file_download.php
* @author  flo
*/
function need_watermark($imgid)
{
	/*if(!isset($GLOBALS['passed'])) {
		$passed = false;
	} else {
		global $passed;
	}*/
	if( read_plugins_config('watermark') && read_config('wm_active') &&
	    !check_permissions('watermark',$imgid) )
	{
		return true;
	} else {
		return false;
	}
}

function array_watermark()
{
/*##########################################################
## used in: many!
## returns:
## array with all the configs and the default values, they are only defined here
##########################################################*/
	$arr_config = array (
		'wm_active' => "0",
		'wm_watermark' => "0",
		'wm_text' => "Copyright 2004",
		'wm_font' => "",
		'wm_fontsize' => "20",
		'wm_fontcolor' => "white",
		'wm_align' => "southwest",
		'wm_horizontal' => "0",
		'wm_vertical' => "0",
		'wm_enable_shadow' => "1",
		'wm_shadow_size' => "1",
		'wm_shadow_fontsize' => "20",
		'wm_shadow_color' => "black",
		'wm_enable_rectangle' => "1",
		'wm_rectangle_color' => "darkgrey",
		'wm_height' => "30",
		'wm_width' => "145",
		'wm_img_img' => "",
		'wm_dissolve' => "75%",
		'wm_resize' => "30"
	);
	return $arr_config;
}

function read_watermark()
{
	$arr_config = array_watermark();
	while(list($name,$value) = each($arr_config) )
	{
		$arr_read[$name] = read_config($name);
	}
	return $arr_read;
}

function update_watermark()
{
	if(get_magic_quotes_runtime()) {
		$_POST['wm_text'] = stripslashes($_POST['wm_text']);
	}

	$arr_config = array_watermark();
	while(list($name,$value) = each($arr_config) )
	{
		update_config($_POST[$name], $name);
	}
}

function wm_arr_resized($w,$h,$org_width,$org_height,$resize)
{
/*###########################
## used in: build_watermark_str() and watermark_gd()
## calcs the new height and width of the resized watermark
## $w, $h: size of the big image
## $org_width, $org_height: size of the watermark rectangle/image
## $resize: resize factor in percent
###########################*/
	$arr_resized['w'] = round($w * $resize/100);
	$arr_resized['h'] = round($h * $resize/100);

	$no_increase = 0;
	$array = scale_to_fit($org_height,$org_width,$arr_resized['h'],$arr_resized['w'],$no_increase);
	
	//error_log('w: '.$w.' h: '.$h.' arr_resized_w: '.$arr_resized['w'].' arr_resized_h: '.$arr_resized['h'].
	//		' org_w: '.$org_width.' org_h: '.$org_height.' scale_to_fit w: '.$array['w'].' h: '.$array['h']);

	return $array;
}


function build_watermark_str($input,$output,$q,$w,$h,$convert_path)
{
/*###########################
## used in: convert_image_convert()
###########################*/
	if(isset($GLOBALS['wm_config'])) {
		$wm_config = $GLOBALS['wm_config'];
	} else {
		$wm_config = read_watermark();
	} 

	$align_str = ' -gravity '.$wm_config['wm_align'];
	$dissolve_str = ' -dissolve '.$wm_config['wm_dissolve'];
	
	/**
	 * check wether brackets are needed or not
	 * details see sec_stage_install.php
	 */
    if(getOS()=="win") {
        $bracket_escape = '';
    } else {
        $bracket_escape = '\\';
    }
	if(read_config('im_bracket_support'))
	{
		$bracket_start = $bracket_escape.'( ';
		$bracket_end = ' '.$bracket_escape.')';
	} else {
		$bracket_start = '';
		$bracket_end = '';
	}
	
	switch($wm_config['wm_watermark'])
	{
	case 0:	//#### Disabled ####

		// if making any changes, change it in the function convert_image_convert() too!
		$convert_str = $convert_path.'convert'.
			' -quality '.$q.
			' -size "'.$w.'x'.$h.'"'.	// new size
			' '.escape_string($input).'[0]'.	// [0] -> take only first frame!!!
			' -resize "'.$w.'x'.$h.'"'.	// new size
			' -strip '. // replaces +profile "*" this should be save to use, as it's available since Jun 2003 '
			' -colorspace RGB'.		// change colorspace always to RGB because all browsers only can display RGB images
			' '.escape_string($output);

	break;
	case 1:	//#### Text #####
	
		//## Rectangle
		if($wm_config['wm_enable_rectangle']==1) {
			$rect_str = ' -fill "'.$wm_config['wm_rectangle_color'].'"'.					// rectangle color
				' -draw "rectangle 0,0,'.$wm_config['wm_width'].','.$wm_config['wm_height'].'"';	// rectangle itself
		} else {
			$rect_str = "";
		}
		
		//## Font
		if($wm_config['wm_font']=="no") {	
			$font_str = '';		// no ttf files found, try without setting the font parameter (on my linux server it has produced an error, on windows it has worked...)
		} else {
			$font_str = ' -font '.TOP_DIR.'"/plugins/watermark/font/'.$wm_config['wm_font'].'.ttf"';
		}
		
		//## Text and Shadow
		$fontsize_str = ' -pointsize '.$wm_config['wm_fontsize'];

		// watermark text
		$systemtext_str = $wm_config['wm_text'];
		// system lang
		$systemlang_str = read_config('systemlang');
		if($systemlang_str){
			$systemtext_str = iconv('utf-8', $systemlang_str, $systemtext_str);
		}
		
			// normal or no shadow
		if($wm_config['wm_enable_shadow'] == 1)
		{
			$draw_str = ' -pointsize '.$wm_config['wm_shadow_fontsize'].	// Shadow fontsize
				' -draw "fill '.$wm_config['wm_shadow_color'].		// Shadow color
				' text 0,0 \''.$systemtext_str.'\'"'.		// Shadow itself
				$fontsize_str.						// Text fontsize
				' -draw "fill '.$wm_config['wm_fontcolor'].		// Text color
				' text '.$wm_config['wm_shadow_size'].','.$wm_config['wm_shadow_size'].' \''.$systemtext_str.'\'"';	// Text itself
		}
			// extended shadow
		elseif($wm_config['wm_enable_shadow'] == 2)
		{
			$draw_str = $fontsize_str.					// Text fontsize
				' -stroke '.$wm_config['wm_shadow_color'].		// Shadow color
				' -strokewidth '.$wm_config['wm_shadow_size'].		// Shadow fontsize
				' -draw "text 0,0 \''.$systemtext_str.'\'"'.	// Shadow itself
				' -gaussian 0x3 -stroke none'.				// Extended Shadow
				' -fill '.$wm_config['wm_fontcolor'].			// Text color
				' -draw "text 0,0 \''.$systemtext_str.'\'"';	// Text itself
		}

		//## Scale watermark always to X% of image size - Stuff
		if($wm_config['wm_resize']!="no") {
			$arr_resized = wm_arr_resized($w,$h,$wm_config['wm_width'],$wm_config['wm_height'],$wm_config['wm_resize']);
			
			$convert_str_part1 = $convert_path.'convert'.
				' -quality 100'.
				' "-"'.
				' -resize "'.$arr_resized['w'].'x'.$arr_resized['h'].'"'.
				'  miff:- | ';
		} else {
			$convert_str_part1 = '';
		}

		//## The magic convert - stuff
		$convert_str = $convert_path.'convert'.
			' -quality 100'.		// quality 100, this is only for the small rectangle
			$font_str.
			' -size '.$wm_config['wm_width'].'x'.$wm_config['wm_height'].
			' xc:none'.			// ? (this slows down watermark..?! (maybe))
			$rect_str.			// if rectangle is enabled, it will be shown here
			' -gravity center'.		// align of text in the smell rectangle is always center
			$draw_str.			// draw the text with shadow
			' miff:- | '.			// not to output, but to pipe '|' so that is for the input for the program 'composite' which is also part of the convert program, this program can merge two images

			$convert_str_part1.		// Scale watermark always to X% of image size - Stuff

			$convert_path.'composite'.
			' -quality '.$q.		// here is the real quality string
			' -size "'.$w.'x'.$h.'"'.	// new size
			$dissolve_str.
			$align_str.
			' -geometry +'.$wm_config['wm_horizontal'].'+'.$wm_config['wm_vertical'].	// adjust the image with the specified paramters
			' -type TruecolorMatte'.
			' "-" '.			// watermark image "input from pipe"
			' '.$bracket_start.escape_string($input).'[0]'.	// [0] -> take only first frame!!!	// input file
			' -resize "'.$w.'x'.$h.'"'.$bracket_end.	// new size (the values are the same like $size_str)
			//' +profile "*"'.		// delete all profiles (-strip isn't available in imagemagick < 6.0)
			' -strip '. // replaces +profile "*" because we have a lot of problems with it! this should be save to use, as it's available since Jun 2003 '
			' -colorspace RGB'.		// change colorspace always to RGB because all browsers only can display RGB images
			' '.escape_string($output);		// output
	break;
	case 2:	//#### Image ####
		//## Watermark image
		if($wm_config['wm_img_img']=="no") {	// no image found, to prevent an error, take the same image as watermark and as input
			$img_path = $input;
			$wm_img_str = ' '.$img_path;		// no '"' before and after $img_path because it is already escaped!
		} else {
			if(file_exists($wm_config['wm_img_img']))	// needed for creating video thumbnails
			{
				$img_path = $wm_config['wm_img_img'];
				$wm_img_str = ' "'.$img_path.'"';
			}
			else
			{
				$img_path = TOP_DIR.'/plugins/watermark/watermarks/'.$wm_config['wm_img_img'];
				$wm_img_str = ' "'.$img_path.'"';
			}
		}

		//## Scale watermark always to X% of image size
		if($wm_config['wm_resize']!="no") {
			list($org_width,$org_height,$org_type) = linpha_getimagesize($img_path);
			
			$arr_resized = wm_arr_resized($w,$h,$org_width,$org_height,$wm_config['wm_resize']);	// calculate the size of the resized watermark image

			$convert_str_part1 = $convert_path.'convert'.
				' -quality 100'.						// quality 100, this is only for the small image
				$wm_img_str.							// input
				' -resize "'.$arr_resized['w'].'x'.$arr_resized['h'].'"'.	// resize watermark image
				'  miff:- | ';							// output to 'pipe'
			$wm_img_str = ' "-"';							// new input from 'pipe'
		} else {
			$convert_str_part1 = '';						// no resize
			
		}

		//## The magic convert - stuff
		$convert_str = $convert_str_part1.
			$convert_path.'composite'.
			' -quality '.$q.							// here is the real quality string
			' -size "'.$w.'x'.$h.'"'.						// new size
			$dissolve_str.
			$align_str.
			' -geometry +'.$wm_config['wm_horizontal'].'+'.$wm_config['wm_vertical'].	// adjust the image with the specified paramters
			$wm_img_str.								// if the wm image is resized, it's "-"
			' '.$bracket_start.escape_string($input).'[0]'.	// [0] -> take only first frame!!!					// input
			' -resize "'.$w.'x'.$h.'"'.$bracket_end.						// new size
			//' +profile "*"'.		// delete all profiles (-strip isn't available in imagemagick < 6.0)
			' -strip '. // replaces +profile "*" because we have a lot of problems with it! this should be save to use, as it's available since Jun 2003 '
			' -colorspace RGB'.		// change colorspace always to RGB because all browsers only can display RGB images
			' '.escape_string($output);							// output
	break;
	}
	//linpha_log("thumbnail","notice","convert_str: $convert_str");
	return $convert_str;
}

function watermark_gd(&$scaled_image,$w,$h)
{
	if(isset($GLOBALS['wm_config'])) {
		$wm_config = $GLOBALS['wm_config'];
	} else {
		$wm_config = read_watermark();
	} 

	if($wm_config['wm_watermark']!=0)
	{
		switch($wm_config['wm_watermark'])
		{
		case 1:	//#### Text ####

			//## Font heigth and width
			$font_height = imagefontheight($wm_config['wm_fontsize']);
			$font_width = imagefontwidth($wm_config['wm_fontsize']);
			$string_width = strlen($wm_config['wm_text'])*$font_width;
			$string_height = $font_height;

			//## Create image
			$wm_img = imagecreate($wm_config['wm_width'], $wm_config['wm_height']);

			//## Colors
			$array_rgb = get_rgb_from_all($wm_config['wm_shadow_color']);
			$shadow_color  = ImageColorAllocate($wm_img, $array_rgb['r'], $array_rgb['g'], $array_rgb['b']);
			$array_rgb = get_rgb_from_all($wm_config['wm_fontcolor']);
			$text_color  = ImageColorAllocate($wm_img, $array_rgb['r'], $array_rgb['g'], $array_rgb['b']);

			//## Rectangle
			if($wm_config['wm_enable_rectangle']) {
				$array_rgb = get_rgb_from_all($wm_config['wm_rectangle_color']);
				$rect_col  = ImageColorAllocate($wm_img, $array_rgb['r'], $array_rgb['g'], $array_rgb['b']);
				imagefill($wm_img, 0, 0, $rect_col);
			}

			//## Text
			$pos_x = ($wm_config['wm_width']-$string_width)/2;
			$pos_y = ($wm_config['wm_height']-$string_height)/2;
			imagestring($wm_img, $wm_config['wm_shadow_fontsize'], $pos_x, $pos_y, $wm_config['wm_text'], $shadow_color);
			imagestring($wm_img, $wm_config['wm_fontsize'], $pos_x+($wm_config['wm_shadow_size']), $pos_y+($wm_config['wm_shadow_size']), $wm_config['wm_text'], $text_color);

			//## Position on the big image
			$src_w = $wm_config['wm_width'];
			$src_h = $wm_config['wm_height'];
		break;
		case 2:	//#### Image ####
			
			if(file_exists($wm_config['wm_img_img']))	// needed for creating video thumbnails
			{
				$wm_file = $wm_config['wm_img_img'];
			}
			else
			{
				$wm_file = TOP_DIR.'/plugins/watermark/watermarks/'.$wm_config['wm_img_img'];
			}
			
			list($wm_img_width,$wm_img_height,$wm_img_type) = linpha_getimagesize($wm_file);
			
			switch($wm_img_type)
			{
				case 1: $wm_img=imagecreatefromgif($wm_file); break;
				case 2: $wm_img=imagecreatefromjpeg($wm_file); break;
				case 3: $wm_img=imagecreatefrompng($wm_file); break;
				default: $wm_img=imagecreatefromjpeg($wm_file); break;
			}

			$src_w = $wm_img_width;
			$src_h = $wm_img_height;
		break;
		}

		//## Scale watermark always to X% of image size
		if($wm_config['wm_resize']!='no') {
			$arr_resized = wm_arr_resized($w,$h,$src_w,$src_h,$wm_config['wm_resize']);

			$resized_image=imagecreate($arr_resized['w'],$arr_resized['h']); 
			imagecopyresized($resized_image,$wm_img,0,0,0,0,
				$arr_resized['w'],$arr_resized['h'],$src_w,$src_h);
			$src_w = $arr_resized['w'];
			$src_h = $arr_resized['h'];

			// Overwrite $wm_img with the resized image
			$wm_img = $resized_image;
		}

		//## Merge watermark image into scaled image
		$src_x = 0; $src_y = 0;
		$arr_pos = calc_align($wm_config['wm_align'],$src_w,$src_h, $w, $h, $wm_config['wm_horizontal'], $wm_config['wm_vertical']);
		@imagecopymerge($scaled_image, $wm_img, $arr_pos['x'], $arr_pos['y'], $src_x, $src_y, $src_w, $src_h, $wm_config['wm_dissolve']);
	}
}

function restore_watermark()
{
/*##########################################################
## used in: watermark.php
## restore watermark settings to initial settings
## or to examples
##########################################################*/

	GLOBAL $wm_restore_to;

	$arr_config = array_watermark();
	switch($_POST['setdefault'])
	{
	case 'initial':
	break;
	case 'settings1':
		$arr_config['wm_watermark'] = 1;
		$arr_config['wm_text'] = "(C) 2004 linpha.sf.net";
		$arr_config['wm_fontsize'] = "10";
		$arr_config['wm_fontcolor'] = "white";
		$arr_config['wm_align'] = "south";
		$arr_config['wm_horizontal'] = "0";
		$arr_config['wm_vertical'] = "0";
		$arr_config['wm_enable_rectangle'] = "1";
		$arr_config['wm_rectangle_color'] = "darkgrey";
		$arr_config['wm_enable_shadow'] = "2";
		$arr_config['wm_height'] = "20";
		$arr_config['wm_width'] = "2000";
		$arr_config['wm_resize'] = "no";
	break;
	case 'settings2':
		$arr_config['wm_watermark'] = 2;
		$arr_config['wm_dissolve'] = "65%";
		$arr_config['wm_align'] = "southwest";
		$arr_config['wm_img_img'] = "linpha.png";
		$arr_config['wm_horizontal'] = "10";
		$arr_config['wm_vertical'] = "10";
		$arr_config['wm_resize'] = "30";

	break;
	case 'settings3':	// maybe better for gd lib than for convert
		$arr_config['wm_watermark'] = 1;
		$arr_config['wm_dissolve'] = "100%";
		$arr_config['wm_align'] = "southwest";
		$arr_config['wm_text'] = "(C) 2004 linpha.sf.net";
		$arr_config['wm_fontsize'] = "20";
		$arr_config['wm_fontcolor'] = "white";
		$arr_config['wm_horizontal'] = "0";
		$arr_config['wm_vertical'] = "0";
		$arr_config['wm_enable_rectangle'] = "1";
		$arr_config['wm_rectangle_color'] = "darkgrey";
		$arr_config['wm_enable_shadow'] = "1";
		$arr_config['wm_shadow_size'] = "5";
		$arr_config['wm_shadow_fontsize'] = "2";
		$arr_config['wm_height'] = "30";
		$arr_config['wm_width'] = "260";
		$arr_config['wm_resize'] = "no";
	break;
	}
	while(list($name,$value) = each($arr_config) )
	{
		update_config($value, $name);
	}
}

function get_html_from_color($string)
{
/*##########################################################
## used in: get_rgb_from_all()
## a list with many available colors
##########################################################*/

	// http://mail.gnu.org/archive/html/emacs-diffs/2002-06/msg00158.html

	$rgb = Array ('aliceblue'=>'#f0f8ff',
		'antiquewhite'=>'#faebd7',
		'aquamarine'=>'#7fffd4',
		'azure'=>'#f0ffff',
		'beige'=>'#f5f5dc',
		'bisque'=>'#ffe4c4',
		'black'=>'#000000',
		'blanchedalmond'=>'#ffebcd',
		'blue'=>'#0000ff',
		'blueviolet'=>'#8a2be2',
		'brown'=>'#a52a2a',
		'burlywood'=>'#deb887',
		'cadetblue'=>'#5f9ea0',
		'chartreuse'=>'#7fff00',
		'chocolate'=>'#d2691e',
		'coral'=>'#ff7f50',
		'cornflowerblue'=>'#6495ed',
		'cornsilk'=>'#fff8dc',
		'cyan'=>'#00ffff',
		'darkblue'=>'#00008b',
		'darkcyan'=>'#008b8b',
		'darkgoldenrod'=>'#b886011',
		'darkgray'=>'#a9a9a9',
		'darkgreen'=>'#006400',
		'darkgrey'=>'#a9a9a9',
		'darkkhaki'=>'#bdb76b',
		'darkmagenta'=>'#8b008b',
		'darkolivegreen'=>'#556b2f',
		'darkorange'=>'#ff8c00',
		'darkorchid'=>'#9932cc',
		'darkred'=>'#8b0000',
		'darksalmon'=>'#e9967a',
		'darkseagreen'=>'#8fbc8f',
		'darkslateblue'=>'#483d8b',
		'darkslategray'=>'#2f4f4f',
		'darkslategrey'=>'#2f4f4f',
		'darkturquoise'=>'#00ced1',
		'darkviolet'=>'#9400d3',
		'deeppink'=>'#ff1493',
		'deepskyblue'=>'#00bfff',
		'dimgray'=>'#696969',
		'dimgrey'=>'#696969',
		'dodgerblue'=>'#1e90ff',
		'firebrick'=>'#b22222',
		'floralwhite'=>'#fffaf0',
		'forestgreen'=>'#228b22',
		'gainsboro'=>'#dcdcdc',
		'ghostwhite'=>'#f8f8ff',
		'gold'=>'#ffd700',
		'goldenrod'=>'#daa520',
		'gray'=>'#bebebe',
		'green'=>'#00ff00',
		'greenyellow'=>'#adff2f',
		'honeydew'=>'#f0fff0',
		'hotpink'=>'#ff69b4',
		'indianred'=>'#cd5c5c',
		'ivory'=>'#fffff0',
		'khaki'=>'#f0e68c',
		'lavender'=>'#e6e6fa',
		'lavenderblush'=>'#fff0f5',
		'lawngreen'=>'#7cfc00',
		'lemonchiffon'=>'#fffacd',
		'lightblue'=>'#add8e6',
		'lightcoral'=>'#f08080',
		'lightcyan'=>'#e0ffff',
		'lightgoldenrod'=>'#eedd82',
		'lightgoldenrodyellow'=>'#fafad2',
		'lightgray'=>'#d3d3d3',
		'lightgreen'=>'#90ee90',
		'lightgrey'=>'#d3d3d3',
		'lightpink'=>'#ffb6c1',
		'lightred'=>'#ffc8c8',
		'lightsalmon'=>'#ffa07a',
		'lightseagreen'=>'#20b2aa',
		'lightskyblue'=>'#87cefa',
		'lightslateblue'=>'#8470ff',
		'lightslategray'=>'#778899',
		'lightsteelblue'=>'#b0c4de',
		'lightyellow'=>'#ffffe0',
		'limegreen'=>'#32cd32',
		'linen'=>'#faf0e6',
		'magenta'=>'#ff00ff',
		'maroon'=>'#b03060',
		'mediumaquamarine'=>'#66cdaa',
		'mediumblue'=>'#0000cd',
		'mediumorchid'=>'#ba55d3',
		'mediumpurple'=>'#9370db',
		'mediumseagreen'=>'#3cb371',
		'mediumslateblue'=>'#7b68ee',
		'mediumspringgreen'=>'#00fa9a',
		'mediumturquoise'=>'#48d1cc',
		'mediumvioletred'=>'#c71585',
		'midnightblue'=>'#191970',
		'mintcream'=>'#f5fffa',
		'mistyrose'=>'#ffe4e1',
		'moccasin'=>'#ffe4b5',
		'navajowhite'=>'#ffdead',
		'navy'=>'#000080',
		'navyblue'=>'#000080',
		'oldlace'=>'#fdf5e6',
		'olivedrab'=>'#6b8e23',
		'orange'=>'#ffa500',
		'orangered'=>'#ff4500',
		'orchid'=>'#da70d6',
		'palegoldenrod'=>'#eee8aa',
		'palegreen'=>'#98fb98',
		'paleturquoise'=>'#afeeee',
		'palevioletred'=>'#db7093',
		'papayawhip'=>'#ffefd5',
		'peachpuff'=>'#ffdab9',
		'peru'=>'#cd853f',
		'pink'=>'#ffc0cb',
		'plum'=>'#dda0dd',
		'powderblue'=>'#b0e0e6',
		'purple'=>'#a020f0',
		'red'=>'#ff0000',
		'rosybrown'=>'#bc8f8f',
		'royalblue'=>'#4169e1',
		'saddlebrown'=>'#8b4513',
		'salmon'=>'#fa8072',
		'sandybrown'=>'#f4a460',
		'seagreen'=>'#2e8b57',
		'seashell'=>'#fff5ee',
		'sienna'=>'#a0522d',
		'skyblue'=>'#87ceeb',
		'slateblue'=>'#6a5acd',
		'slategray'=>'#708090',
		'slategrey'=>'#708090',
		'snow'=>'#fffafa',
		'springgreen'=>'#00ff7f',
		'steelblue'=>'#4682b4',
		'tan'=>'#d2b48c',
		'thistle'=>'#d8bfd8',
		'tomato'=>'#ff6347',
		'turquoise'=>'#40e0d0',
		'violet'=>'#ee82ee',
		'violetred'=>'#d02090',
		'wheat'=>'#f5deb3',
		'white'=>'#ffffff',
		'yellow'=>'#ffff00',
		'yellowgreen'=>'#9acd32'
	);
	
	if(array_key_exists($string, $rgb))
	{
		$temp_str = $rgb[$string];
		return $temp_str;
	} else {
		return 0;
	}
}

function get_html_color_from_rgb($r,$g,$b)
{
/*####################################
## used in: not used anymore
####################################*/
	
	if(strlen(dechex($r))==1) {
		$r = '0'.$r;
	} else {
		$r = dechex($r);
	}
	if(strlen(dechex($g))==1) {
		$g = '0'.$g;
	} else {
		$g = dechex($g);
	}
	if(strlen(dechex($b))==1) {
		$b = '0'.$b;
	} else {
		$b = dechex($b);
	}


	return '#'.$r.$g.$b;
}

function every_char_is_hex($string)
/*##########################################################
## used in: is_html_color
## used to check if it is a valid html color
##########################################################*/
{
	for($i=0;$i<strlen($string);$i++)
	{
		$char = substr($string,$i,1);
		$valid_color = false;
		
		if($char == "0") {	// zero makes problems... '== 0' and '== "0"' is not the same...
			$valid_color = true;
		}
		for($n=1;$n<=9;$n++)
		{
			if($char == $n) {
				$valid_color = true;
			}
		}

		for($n='a';$n<='f';$n++)
		{
			if($char === $n) {
				$valid_color = true;
			}
		}

		for($n='A';$n<='F';$n++)
		{
			if($char === $n) {
				$valid_color = true;
			}
		}
		if(!$valid_color) {
			return 0;
		}
	}
	return 1;
}


function is_html_color($string)
/*##########################################################
## used in: get_rgb_from_all
## used to check if it is a valid html color
##########################################################*/
{
	switch(strlen($string))
	{
	case 6:
		if(every_char_is_hex($string)) {
			return 1;
		}
	break;
	case 7:
		if(substr($string,0,1)=="#") {
			if(every_char_is_hex(substr($string,1,6))) {
				return 1;
			}
		}
	break;
	}
	return 0;
}

function get_rgb_from_html($string)
{
/*##########################################################
## used in: get_rgb_from_all()
## converts a html color to an array with the rgb values
## it doesn't matter if the html color is '#00FF00' or '00FF00'
##########################################################*/

	switch(strlen($string))
	{
	case 6:
	break;
	case 7:
		$string = substr($string,1,6);
	break;
	}
	$r_hex = substr($string,0,2);
	$g_hex = substr($string,2,2);
	$b_hex = substr($string,4,2);
	$arr['r'] = hexdec($r_hex);
	$arr['g'] = hexdec($g_hex);
	$arr['b'] = hexdec($b_hex);
	return $arr;
}

function get_rgb_from_all($string)
{
/*##########################################################
## used in: watermark_gd()
## returns an array with the rgb values
## it doesn't matter if the argument is 'darkblue', '#00FF55' or '00FF55'
## if it isn't a correct color, the color (0,0,0) is returned
##########################################################*/

	$str_rgb = get_html_from_color($string); 
	if(substr($str_rgb,0,1)=="#") {
		$array_rgb = get_rgb_from_html($str_rgb);
	} elseif (is_html_color($string)) {
		$array_rgb = get_rgb_from_html($string);
	} else {
		$array_rgb = Array('r'=>0,'g'=>0,'b'=>0);
	}
	return $array_rgb;
}

function calc_align($align, $src_w, $src_h, $dst_w, $dst_h, $pos_x, $pos_y)
{
/*##########################################################
## used in: watermark_gd()
## calcs the position in pixel with a given align
## src_w, src_h: width and height from the textfield (or the small watermark image)
## dst_w, dst_h: width and height from the image
## pos_x, pos_y: additional adjust for the image
##########################################################*/

	switch($align)
	{
		case "center":
			$arr_pos['x'] = ($dst_w-$src_w)/2+($pos_x);
			$arr_pos['y'] = ($dst_h-$src_h)/2+($pos_y);
		break;
		case "east":
			$arr_pos['x'] = $dst_w-$src_w+($pos_x);
			$arr_pos['y'] = ($dst_h-$src_h)/2+($pos_y);
		break;
		case "west":
			$arr_pos['x'] = $pos_x;
			$arr_pos['y'] = ($dst_h-$src_h)/2+($pos_y);
		break;
		case "north":
			$arr_pos['x'] = ($dst_w-$src_w)/2+($pos_x);
			$arr_pos['y'] = $pos_y;
		break;
		case "south":
			$arr_pos['x'] = ($dst_w-$src_w)/2+($pos_x);
			$arr_pos['y'] = $dst_h-$src_h+($pos_y);
		break;
		case "northeast":
			$arr_pos['x'] = $dst_w-$src_w+($pos_x);
			$arr_pos['y'] = $pos_y;
		break;
		case "northwest":
			$arr_pos['x'] = $pos_x;
			$arr_pos['y'] = $pos_y;
		break;
		case "southwest":
			$arr_pos['x'] = $pos_x;
			$arr_pos['y'] = $dst_h-$src_h+($pos_y);
		break;
		case "southeast":
			$arr_pos['x'] = $dst_w-$src_w+($pos_x);
			$arr_pos['y'] = $dst_h-$src_h+($pos_y);
		break;
		default:
			$arr_pos['x'] = $pos_x;
			$arr_pos['y'] = $pos_y;
		break;

	}
	return $arr_pos;
}

?>