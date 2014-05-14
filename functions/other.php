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
* This file contains nearly all of the most required functions
* beside the one defined in image.php and db_api.php
*
* @package functions
*/

if(!defined('TOP_DIR')) { define('TOP_DIR','..'); }

/**
 * XSS security functions. This Function checks for valid numeric ids
 * or valid strings not containing any special chars or HTML tags
 * @param $array_input name of $_GET vars to check
 * @param $type whether to check numeric or string
 * @author bzrudi 
 */
function xss_security_check($array_input, $type)
{
	if( $type == 'int')
	{	
		foreach($array_input as $id)
		{	
			if(isset($_GET["$id"]))
			{
				if( !is_numeric($_GET["$id"]) )
				{
					die("FATAL: expecting $id to be numeric...");
				}
			}
		}
	}
	else
	{
		foreach($array_input as $id)
		{
			if(strlen(@$_GET[$id]) > '0')
			{
				if( !preg_match('#^[a-zA-Z_]+$#', $_GET[$id]))
				{
					die("FATAL: unexpected value for $id var");
				}
			}
		}
	} 
}

/**
* Don't rely on just removing all hrefs when a plugin is disabled as we can
* still call it if href is known. Thanks to quixy for this hint!
* 
* @param string $plugin name of plugin to check for 
*/
function exit_if_not_active($plugin)
{
	if(read_plugins_config($plugin))
	{
		return true;
	}
	else
	{
		echo "! PLUGIN DISABLED BY ADMINISTRATOR !";
		include_once(TOP_DIR.'/footer.php');
		exit();
	}
}

/**
* This method is used to format a new config line (HTML) with two radio buttons 
* as input on/off 
*
* @param string $string1, short description of option
* @param string $name, name of option in db (linpha_config)
* @param string $value, value of option to show (read from config) 
* @param string $string2, long description of option
* @param string $helplink, name of href to help page
* @return string HTML button line
*/
function print_radio($string1,$name,$value,$string2,$helplink)
{
	global $button_on_msg, $button_off_msg;
	
	if($value) {
		$conf_on="checked";
		$conf_off="";
	} else {
		$conf_on="";
		$conf_off="checked";

	}

	echo "<tr>".
			"<td class='admintable'>".$string1."</td>".
			"<td class='admintable'>".
				$button_on_msg.
				"<input type='radio' name='".$name."' ".$conf_on." value='1'>".
				$button_off_msg.
				"<input type='radio' name='".$name."' ".$conf_off." value='0'>".
			"</td>".
			"<td class='admintable' align='right'>".$string2."</td>".
			"<td class='admintable' align='center' width='20'>";
				putHelpButton($helplink);
	echo	"</td>".
		"</tr>";
}

/**
* This method is used to format a new config line (HTML) with a select filed 
* as input 
*
* @param string $string1, short description of option
* @param string $name, name of option in db (linpha_config)
* @param string $value, value of option to show (read from config) 
* @param array  $content, array of options to display in select field
* @param string $string2, long description of option
* @param string $helplink, name of href to help page
* @param int    $options witdh of select in px
* @return string HTML select field line
*/
function print_select($string1,$name,$value,$content,$string2,$helplink, $options)
{
	echo "<tr>".
			"<td class='admintable'>".$string1."</td><td class='admintable' style='padding: 1px;'>";
    
    /**
    * form_genearate_select() is defined in other.php
    * @param string $name name of select field
    * @param int    $arg2 size of select
    * @param string $arg3 extra options to add to <select> tag
    * @param string $value selected default value from config
    * @param array  $content the content of thes select <option> tag
    */
	form_generate_select($name,"1","style='width:".$options."px'",$value,$content);

		echo "</td>".
			"<td class='admintable' align='right'>".$string2."</td>".
			"<td class='admintable' align='center' width='20'>"; 

	putHelpButton($helplink);

		echo "</td>".
		"</tr>";
}

/**
* This function takes care of SPAMbots for the guestbook and all comments.
* This is done due a user defined blacklist of words which is compared
* to the posting...
* Should at least help us to protect the guestbook at sf ;-)
*/
function do_blacklist_compare($posting, $action)
{
	$match = false;
	$hit = false;
	$query = $GLOBALS['db']->Execute("SELECT value FROM ".PREFIX."blacklist WHERE action= '".$action."'");
	$data = $query->FetchRow();
	$blacklist = explode(",", $data[0]);
	foreach($blacklist AS $needle)
	{
		$needle = trim($needle);
		$hit = @strpos($posting, $needle);
		
		if($hit === false)
		{
			$match = false;
		}
		else
		{
			$match = true;
			break;
		}
	}
	
	if($match === false)
	{
		return false;
	}
	else
	{
			?>
			<h2>Message blocked</h2><br>
			Your posting is blocked because it contains words which are<br>
			blacklistet by the LinPHA administrator. To make sure your posting<br>
			will be accepted, do not use words from the following list<br>
			(even not as username):<br>
			<br><font color='#FF0000'><?php echo $data[0];?></font>
			<br>
			
			<?php
			echo "<br>";
			echo "<a href='#' onClick=\"history.go(-1)\">back >></a>";
			
			/**
			 * count SPAM attack (to be displayed in admin section later)
			 */
			$current_attacks = read_config('SPAM_attacks')+1;
			update_config($current_attacks, 'SPAM_attacks');
			
	exit();
	}
}





/**
* don't know where to place this part
* other.php is the only one which is also included during the installation
* any ideas? maybe we have to create a new file common_startup.php for example
*
* Note:  The PATH_SEPARATOR was introduced with PHP 4.3.0-RC2.
*/
if(!defined('PATH_SEPARATOR'))
{
	if(getOS()=='win')
	{
		define('PATH_SEPARATOR',';');
	}
	else
	{
		define('PATH_SEPARATOR',':');
	}
}

/**
* @author  flo
* @param  string  $str  string to escape
* @return  string  escaped string
* @uses  several
*/
function linpha_addslashes($str)
{
	if(DB_TYPE == 'sqlite')
	{
		$str = str_replace("'","''",$str);
	}
	else
	{
		$str = addslashes($str);
	}
	return $str;
}

function show_slideshow_function($imgid)
{   
       /* Add the support for the slideshow
        * Notes:
        * - Internet explorer only window.open options:
        *   channelmode=yes: start internet explorer in channel mode (full screen)
        * - Netscape doesn't support fullscreen=yes option, so we use the following
        *   values that are valid only on Netscape/Mozilla (but I.E. ignores it):
        *   screenX=0,screenY=0,height=9999,width=9999
        */
    global $start_slide;
    
    if($imgid != 0)
    {
        $href_options = " class='linkbutton leftmenu'";
    } else {
        $href_options = '';
    }
    ?>
        <script language='JavaScript' type='text/javascript'>
            var screenW = 640;
            var screenH = 480;
            if (parseInt(navigator.appVersion) > 3) {
            screenW = screen.width;
            screenH = screen.height;
        
            } else if (navigator.appName == "Netscape" &&
                parseInt(navigator.appVersion)==3 &&
                navigator.javaEnabled()) {
            var jToolkit = java.awt.Toolkit.getDefaultToolkit();
            var jScreenSize = jToolkit.getScreenSize();
            screenW = jScreenSize.width;
            screenH = jScreenSize.height;
            }
        
            var options;
            if (navigator.appName == "Netscape") {
                options = "toolbar=no,status=no,screenX=0,screenY=0,height="+screenH+",width=" + screenW;
            } else {
                options = "channelmode=yes,fullscreen=yes,scrollbars=no";
            }
        
            function start_slideshow() {
                window.open("<?php echo $GLOBALS['img_view']->link_address.'&img_view=slideshow&imgid='.$imgid; ?>","Slideshow", options);
            }
        </script>
        <?php
        echo "<a href='javascript:start_slideshow();'".$href_options.">".$start_slide."</a>";
}

/**
 * check each imgid
 * 
 * each imgid is checked, because the albid could be changed from a user
 * 
 * @author  flo
 * @package  security
 * @uses  basket_build_*.php
 */
function basket_check_permissions($type)
{
	if( isset($_POST['img_id']) )
	{	

    foreach($_POST['img_id'] AS $value)
    {
        if(!check_permissions($type,$value))
        {
            die($type.': not allowed');
        }
    }
    if(isset($_POST['img_id'])) : reset($_POST['img_id']); endif;
	}
}

/**
 * close session before exec()
 * if exec() is called twice (like on the print preview), apache will hang
 * on windows
 * 
 * use $_SESSION_backup to get $_SESSION back -> it is still possible to
 * read session variables, but not write! take care of this
 * 
 * does it still work with the autoglobal stuff for $_SESSION ..?
 */
function linpha_session_write_close()
{
    /**
     * $_SESSION seems to be still available after session_write_close
     * 
     * no need of this function anymore, as we can call session_write_close()
     * directly
     */
    //$_SESSION_backup = $_SESSION;
    session_write_close();
    //$_SESSION = $_SESSION_backup;
}

/**
* $value can be: '1', '1_2' or '1_2_4' ...
*
* @uses  search.php, print_permissions
*/
function get_path_from_id($value,$without_leading_albums=false)
{
    /**
    * get num of stages
    */
	$num = substr_count($value,'_');
	$num++;
	$stage = get_stage($num);
	
	if($num == 1)
    {
		$id = $value;
	}
    else
    {
        /**
        * get latest id, for example '4' of '1_2_4'
        */
		$pos = strrpos($value,'_');
		$id = substr($value,$pos+1);
	}
	
	$query = $GLOBALS['db']->Execute("SELECT path FROM ".PREFIX.$stage."_lev_album WHERE id = '".linpha_addslashes($id)."'");
	$data = $query->FetchRow();
	
	if($without_leading_albums)
	{
	    $pos = strpos($data['path'],'/');
	    $data['path'] = substr($data['path'],$pos+1);
	}
	
	return $data['path'];
}

/**
* build select form with albums
*
* @uses  search.php, print_permissions
*/
function build_album_select($with_all_albs_entry)
{
    global $seach_multiple_select_use, $search_all;
    ?>
	<select name='album_select[]' size='10' multiple='multiple'>
	<?php
	if($with_all_albs_entry)
	{
    	if(!isset($_REQUEST['album_select']) OR $_REQUEST['album_select']=='all') {
    		$select = ' selected';
            $_REQUEST['album_select'] = Array('all'=>'all');
    	} else {
    		$select = '';
    	}
	    echo "<option value='all'".$select.">".$search_all."</option>\n";
    }
	
	$query = $GLOBALS['db']->Execute("SELECT id, name, path, groups " .
			"FROM ".PREFIX."first_lev_album WHERE ".sql_perm()." ORDER by name");
	
	while($data = $query->FetchRow(ADODB_FETCH_ASSOC))
	{
		if(!isset($_REQUEST['album_select'])) { 
			$_REQUEST['album_select'] = array();
		}		
		if(in_array($data['id'],$_REQUEST['album_select']) OR
		    in_array($data['name'],$_REQUEST['album_select'])) {
			$select = ' selected';
		} else {
			$select = '';
		}
		echo "<option value='".$data['id']."'".$select.">".htmlspecialchars($data['name'],ENT_QUOTES)."</option>\n";
		
		build_album_select_sub_entry(2,$data['id'],$data['name'],$data['name'],$data['path']);
	}
	?>
	</select><br />
    <font size='-2'>(<?php echo $seach_multiple_select_use; ?> 'Ctrl')</font>
	<?php
}

function build_album_select_sub_entry($i,$id,$path,$prev_name,$prev_path)
{
	$stage = get_stage($i);
	
	$query = $GLOBALS['db']->Execute("SELECT id, name, path FROM ".PREFIX.$stage."_lev_album ".
		"WHERE prev_alb_name = '".linpha_addslashes($prev_name)."' ".
		"AND path LIKE '".linpha_addslashes($prev_path)."%' ".
		"AND name <> 'has_images' ".
		"ORDER by name");
	while($data = $query->FetchRow())
	{
		$new_id = $id.'_'.$data['id'];
		$new_path = $path.'/'.$data['name'];
		if(in_array($new_id,$_REQUEST['album_select']) OR
		    in_array($new_path,$_REQUEST['album_select'])) {
			$select = ' selected';
		} else {
			$select = '';
		}
		echo "<option value='".$new_id."'".$select.">".htmlspecialchars($new_path,ENT_QUOTES)."</option>\n";
		
		/**
		* build sub stages
		*/
		if($i<3)
		{
			build_album_select_sub_entry($i+1,$new_id,$new_path,$data['name'],$data['path']);
		}
	}
}



/**
* addslashes to all values of an array
* used for posted data from <select>'s
*/
function addslashes_array(&$array)
{
	if(is_array($array))
	{
		foreach($array AS $key=>$value)
		{
			$array2[$key] = linpha_addslashes($value);
		}
	}
	else
	{
		$array2 = Array();
	}
	
	return $array2;
}

function get_stage($nr_stage='')
{
	if(empty($nr_stage))
	{
		if(isset($_GET['stage']))
		{
			$nr_stage = $_GET['stage'];
		}
		else
		{
			return '';
		}
	}

	switch($nr_stage)
	{
		case 1: $stage = 'first'; break;
		case 2: $stage = 'sec'; break;
		case 3: $stage = 'third'; break;
		default: $stage = ''; break;
	}
	
	return $stage;
}

function read_config($value)
{
/*##########################################################
## used in: various
## read DB config entries
## returns:
## the value for an config entry of choice
##########################################################*/

	/*$value=$GLOBALS['db']->Execute("SELECT option_value FROM ".PREFIX."config WHERE option_name='$value'");
	$result=$value->FetchRow();
	
	return $result[0];*/
	
	if(isset($GLOBALS['linpha_config'][$value]))
	{
		return $GLOBALS['linpha_config'][$value];
	}
	else
	{
		return '';
	}
}

/**
* this function adds the unified linpha html header
*
* @author  flo
* @uses  actions/calender.php, actions/image_panorama_view.php,
* image_resized_view.php, print_final.php, header.php, slideshow.php,
* docs/index.php, install/install_header.php
*/
function html_header()
{
	global $html_lang, $html_charset;
	@header('Content-type: text/html; charset='.$html_charset);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html lang='<?php echo $html_lang; ?>'>
<head>
<meta http-equiv='Content-type' content='text/html; charset=<?php echo $html_charset; ?>'>
<meta name='keywords' content='linpha album photoalbum php gallery archive image photo webalbum'>
<meta name='description' content='LinPHA Photo Gallery'>
<?php
}

/**
* @author flo
* @package security
*/
function check_variable($type,$var)
{
	switch($type)
	{
	case 'int':
		if(!preg_match("/^[0-9]+$/",$var)) {
			die('check_variable: '.$var.' is not '.$type.'<br />');
		}
	break;
	case 'path':
	break;
	case 'string':
	break;
	default:
		die('Wrong type');
	break;
	}
}

/**
* this function extends the php strftime with the localizations of linpha
* because the respective locales aren't installed on most systems.
*
*	%a - abbreviated weekday name according to the current locale
*	%A - full weekday name according to the current locale
*	%b - abbreviated month name according to the current locale
*	%B - full month name according to the current locale
*	
*	%c - preferred date and time representation for the current locale
*	%x - preferred date representation for the current locale without the time
*	%X - preferred time representation for the current locale without the date
*	
*	%w - day of the week as a decimal, Sunday being 0
*	%m - month as a decimal number (range 01 to 12)
*
* @author  flo
* @param  string  $str_format  optional, date and time format string, if empty default time format is used
* @param  int  $timestamp  optional, unix timestamp, if empty time() is used
* @return  string  formatted date and time string
* @uses  
* @package  time
*/
function linpha_strftime($str_format='',$timestamp='now')
{
	global $arr_month_short, $arr_month_long, $arr_day_short, $arr_day_long;

	if(empty($str_format)) {
		$str_format = get_date_format().' '.get_time_format();
	}

	if($timestamp == 'now') {
		$timestamp = time();
	}

	$weekday_in_decimal = strftime("%w", $timestamp);
	$month_in_decimal = strftime("%m", $timestamp);	// pay attention: %m is '01 to 12', and not '1 to 12'
	if($month_in_decimal < 10) {
		$month_in_decimal = $month_in_decimal[1];
	}
	
	$str_format = str_replace("%c", get_date_format().' '.get_time_format(), $str_format);
	$str_format = str_replace("%x", get_date_format(), $str_format);
	$str_format = str_replace("%X", get_time_format(), $str_format);

	$str_format = str_replace("%a", $arr_day_short[$weekday_in_decimal], $str_format);
	$str_format = str_replace("%A", $arr_day_long[$weekday_in_decimal], $str_format);
	
	if(!empty($month_in_decimal))
	{
	    $str_format = str_replace("%b", $arr_month_short[$month_in_decimal], $str_format);
	    $str_format = str_replace("%B", $arr_month_long[$month_in_decimal], $str_format);
    }
	
	return strftime($str_format,$timestamp);
}

/**
* gets an array with the days, hours, minutes and seconds from a number of seconds
*
* @author  flo
* @param  int  $number_of_seconds  number of seconds
* @return  array  array(days,hours,minutes,seconds)
* @uses  new_images.php
* @package  time
*/
function get_time_from_sec($number_of_seconds)
{
	// days
	$day_in_sec = 60*60*24;
	for($days = 0; $day_in_sec < $number_of_seconds; $days++)
	{
		$number_of_seconds -= $day_in_sec;
	}
	
	// hours
	$hours_in_sec = 60*60;
	for($hours = 0; $hours_in_sec < $number_of_seconds; $hours++)
	{
		$number_of_seconds -= $hours_in_sec;
	}

	// minutes
	$min_in_sec = 60;
	for($min = 0; $min_in_sec < $number_of_seconds; $min++)
	{
		$number_of_seconds -= $min_in_sec;
	}
	
	return Array($days,$hours,$min,$number_of_seconds);

}

/**
* Get date format string
* if it isn't defined in the current language file (for example in the english language file)
* the date format string is read from the linpha_config table
* 
* @author  flo
* @return  string  time format string for use in strftime()
* @uses  new_images.php,get_photo_date(),nice_date(),plugins/mail/mail.php
* @package  time
*/
function get_date_format()
{
	if(!isset($GLOBALS['date_format'])) {
		return read_config('default_date_format');
	} else {
		return $GLOBALS['date_format'];
	}
}

/**
* Get time format string
* if it isn't defined in the current language file (for example in the english language file)
* the time format string is read from the linpha_config table
* 
* @author  flo
* @return  string  time format string for use in strftime()
* @uses  new_images.php,get_photo_date(),nice_date(),plugins/mail/mail.php
* @package  time
*/
function get_time_format()
{
	if(!isset($GLOBALS['time_format'])) {
		return read_config('default_time_format');
	} else {
		return $GLOBALS['time_format'];
	}
}

function cut_overloaded_strings($str,$len)
{
	if(strlen($str)>$len) //only check long strings
	{
		if(eregi(" ", $str)) // do we have a space in str
		{
			$words = explode(" ", $str);
			$cut = false;

			while(list($key,$value) = each($words)) // check wordlength of ALL words in string
			{
				if(strlen($value)>$len) {
					$cut = true;
					$cut_word = substr_replace($value, '...', ($len-3));
					$translate = array($value => $cut_word);
					$verified_string = strtr($str, $translate);
				}
			}

			if(!$cut)
			{
				
				$verified_string = $str; 
			}
		}
		else
		{
			$verified_string=substr_replace($str, '...', $len); //cut
		}
	}
	else
	{
		$verified_string=$str;
	}
	return $verified_string;
}



function cut_string($string,$len,$with_span_title)
{
/*##########################################################
## used in: *_stage_album.php, img_view.php (comment system)
## cut a string to the given size
##########################################################*/
	$append = '...';

	if( strlen($string) > ($len+strlen($append)) )
	{
		$str_cutted = substr_replace($string, $append, $len);
		if($with_span_title)
		{
			return '<span title="'.$string.'">'.$str_cutted.'</span>';
		}
		else
		{
			return $str_cutted;
		}
	}
	else
	{
		return $string;
	}

}

/**
* Javascript menu in *_stage_album
* This function builds up the javascript menu found in the *_stage_album.php
* files. It takes care of different features to be enabled/disabled also...
*
* @subpackage layout
*/
function build_javascript_menu()
{
	/**
	* Get set some variables
	*/
	global $menumsg, $passed;

/**
* prerequisites
*/
	/**
	* hasimages
	*/
	if($GLOBALS['img_view']->num_photos > 0) {
		$hasimages = true;
	} else {
		$hasimages = false;
	}
    
    /**
     * slideshow
     */
    if($hasimages && read_config('slideshow'))
    {
        $menu_entries['slideshow'] = 1;
    }
	
	/**
	* printing
	*/
	if( $hasimages && check_permissions('basket_print'/*,'basket_'.$_GET['albid']*/) ) {
		$menu_entries['printing'] = 1;
	}

	/**
	* album downloads
	*/
	if( $hasimages && check_permissions('basket_download'/*,'basket_'.$_GET['albid']*/) ) {
		$menu_entries['album_downloads'] = 1;
	}
	
	/**
	* mail mode
	*/
	if( $hasimages && check_permissions('basket_mail'/*,'basket_'.$_GET['albid']*/) ) {
		$menu_entries['mail_mode'] = 1;
	}

	/**
	* map mode
	*/
	if( $hasimages && read_plugins_config('maps') && read_config('maps_setup_ok')
		&& check_permissions('maps')) {
		$menu_entries['map_mode'] = 1;
	}
	
	$basket_link = $GLOBALS['img_view']->link_address.'&view=basket&pn='.$_GET['pn'];

	if(isset($_GET['albid']))
	{			
		/**
		* album comment stuff
		*/
		$stage = get_stage();
		$tbl_cmt = PREFIX."album_comments";
		$tbl_alb = PREFIX.$stage."_lev_album";
		$query_comment = $GLOBALS['db']->Execute("SELECT ".$tbl_cmt.".comment AS comment, " .
			"".$tbl_cmt.".id AS id ".
			"FROM ".$tbl_cmt.", ".$tbl_alb." ".
			"WHERE ".$tbl_cmt.".album = ".$tbl_alb.".path ".
			"AND ".$tbl_alb.".id = '".$_GET['albid']."'");
		$alb_comment = $query_comment->FetchRow(ADODB_FETCH_ASSOC);

		if($passed && in_group('admin'))
		{
			if(!isset($alb_comment['comment']))
			{
				$menu_entries['new_comment'] = 1;
				
			} else {
				$menu_entries['edit_comment'] = 1;
				$comment_id = $alb_comment['id'];
			}
		}
		
		/**
		 * static link stuff
		 */
		$menu_entries['static_link'] = 1;
        $path = str_replace("'",'%27',$GLOBALS['prev_path']);
		$static_link = TOP_DIR.'/viewer.php?album='.urlencode($path).'&pn='.$_GET['pn'];
	}
	
	/**
	* stuff for browsers with deactivated javascript
	*/
	if(isset($_GET['menu']))
	{
		if($_GET['menu'] == 'open')
		{
			$style_section = " style='z-index: 1;'";
			$style_box = " style='visibility: visible;'";
			$link = 'close';
		}
		elseif($_GET['menu'] == 'close')
		{
			$style_section = " style='z-index: -1;'";
			$style_box = " style='visibility: hidden;'";
			$link = 'open';
		}
	}
	else
	{
		$style_section = "";
		$style_box = "";
		$link = 'open';
	}

/**
* prestuff done, build menu
*/
	if(isset($menu_entries))
	{
		echo "<div id='menu'>".
			"<table cellspacing='0' cellpadding='0'>".
				"<tr><td>".
					"<div class='top'><a href='".$GLOBALS['img_view']->link_address."&pn=".$_GET['pn']."&menu=".$link."' onclick='return false'>".$menumsg['advanced']."</a></div>".
					"<div class='section'".$style_section.">";
	
		if(isset($menu_entries['printing']))
		{ 
			echo "<div class='box'".$style_box."><a href='".$basket_link."&job=print'>".$menumsg['printmode']."</a></div>";
		}
		
		if(isset($menu_entries['album_downloads'])) {
			echo "<div class='box'".$style_box."><a href='".$basket_link."&job=zip'>".$menumsg['downloadmode']."</a></div>";
		}

		if(isset($menu_entries['map_mode'])) {
			echo "<div class='box'".$style_box."><a href='".TOP_DIR.'/maps_view.php?job=asignloc&albid='.$_GET['albid'].'&stage='.$_GET['stage'].''."'>Add to Map location</a></div>";
		}
		
		if(isset($menu_entries['mail_mode'])) {
			echo "<div class='box'".$style_box."><a href='".$basket_link."&job=mail'>".$menumsg['mailmode']."</a></div>";
		}

		if(isset($menu_entries['new_comment'])) {
			echo "<div class='box'".$style_box."><a href='actions/album_comment.php?albid=".$_GET['albid'].
				"&stage=".$_GET['stage']."&pn=".$_GET['pn']."'>".$menumsg['addcomment']."</a></div>";
		}
		
		if(isset($menu_entries['edit_comment'])) {
			echo "<div class='box'".$style_box."><a href='actions/delete_comment.php?albid=".$_GET['albid']."".
				"&job=album&stage=".$_GET['stage']."&id=".$comment_id."&pn=".$_GET['pn']."'>".
				"".$menumsg['delcomment']."</a></div>";
		
			echo "<div class='box'".$style_box."><a href='actions/album_comment.php?albid=".$_GET['albid']."".
				"&stage=".$_GET['stage']."&pn=".$_GET['pn']."'>".$menumsg['editcomment']."</a></div>";
		}
        
        if(isset($menu_entries['slideshow'])) {
            echo "<div class='box'".$style_box.">";
            show_slideshow_function(0);
            echo "</div>";
        }
        
        if(isset($menu_entries['static_link'])) {
        	$str_create_static_link = "Create static link";
            echo "<div class='box'".$style_box."><a href='".$static_link."'>".$str_create_static_link."</a></div>";
        }
	
			echo "</div>".
			"</td></tr>".
		"</table>".
		"</div>\n";
	
?>
		<script language="JavaScript" type='text/javascript' src='<?php echo TOP_DIR; ?>/include/menu.js'></script>
<?php
	}
	else
	{
		echo '&nbsp;';
	}


}

function build_navigation_view($nr_stage,$albid,$imgid)
{
/*##########################################################
## used in: include/album_comment.php, img_view.php
## build the whole navigation bar
##########################################################*/

	//$array_stages = Array(1=>"first",2=>"sec",3=>"third",4=>"forth");
	
	// get fullpath of current album
	//$query_stage = decrement_stage($stage);
	$stage = get_stage($nr_stage);
	$result = $GLOBALS['db']->Execute("SELECT path FROM ".PREFIX.$stage."_lev_album WHERE ID = '".linpha_addslashes($albid)."'");
	$alb_info = $result->FetchRow();
	$path = $alb_info[0];
	
	// split path into an array
	$array = explode("/",$path);
	
	// ignore first entry ("album")
	list($key,$value) = each($array);
	$full_path = $value;	// rebuild path for query

	echo '&nbsp;/&nbsp;';
	
	$id = 0;
	$str_pn = '';
	
	// go through all other entries
	for($i=1 ; list($key,$value) = each($array) ; $i++)
	{
		$full_path .= '/'.$value;	// rebuild path for query the id
		
		$result = $GLOBALS['db']->Execute("SELECT ID FROM ".PREFIX.get_stage($i)."_lev_album WHERE path = '".linpha_addslashes($full_path)."'");	// query the id
		$row = $result->FetchRow();
		$id = $row[0];
		
		// include page number on the last stage (only if exists)
		if($i == $nr_stage)
		{
			if(isset($_GET['ref_imgid']))
			{
				$str_pn = '&ref_imgid='.$_GET['ref_imgid'];
			}
			elseif(isset($_GET['imgid']))
			{
				$str_pn = '&ref_imgid='.$_GET['imgid'];
			}
			elseif(isset($_GET['pn']))
			{
				$str_pn = '&pn='.$_GET['pn'];
			}
		}
		
		echo '<a href="'.TOP_DIR.'/viewer.php?albid='.$id.'&stage='.$i.$str_pn.'">'.
			cut_string($value,30,1).'</a> / ';
		// $i+1: $array_stages are the query-stages, not the file-stages
	}
	
	// show image filename
	if($imgid != 0) {
		$result = $GLOBALS['db']->Execute("SELECT filename FROM ".PREFIX."photos WHERE ID = '".linpha_addslashes($imgid)."'");
		$row = $result->FetchRow();
		echo '<a href="'.TOP_DIR.'/viewer.php?imgid='.$imgid.'&albid='.$id.'&stage='.$nr_stage.'">'.
			cut_string($row[0],30,1).'</a>';
	}
	echo "\n";
}

function getOS()
{
/*##########################################################
## used in: build_zip_view.php
## used to enable/disable OS related features
## returns OS
##########################################################*/

if(strtoupper(substr(PHP_OS,0,3)) == 'WIN'){
	return "win";
	}
	else{
	return "unix";
}
}

function htmltag($post)
{
/*##########################################################
## used in: guestbook.php, linpha_comments.php
## format user inputs and autoformat urls and mailaddresses
##########################################################*/
	include_once(TOP_DIR.'/include/phpmeta/Unicode.php');
	
	// hack because we have already posts in the wrong format in the database
/*	$post=str_replace("&quot;",'"',$post);
	$post=str_replace("&#039;","'",$post);
	$post=str_replace("&amp;",'&',$post);*/

	$post= smart_htmlspecialchars($post, ENT_QUOTES);
	
	//###### URL
	// the next two parts converts http://linpha.sf.net to [url]http://linpha.sf.net[/url]
	// and www.sourceforge.net to [url]http://www.sourceforge.net[/url]
	// im the third part converts [url]http://linpha.sf.net[/url] to <a href="http://linpha.sf.net">http://linpha.sf.net</a>

	// 1. part
	// detect url if it is after one of the following signs: ' ', '\r' or '\n'
	$post=eregi_replace("([ \r\n])http://([^ ,\r\n]*)","\\1[url]http://\\2[/url]",$post);
	$post=eregi_replace("([ \r\n])https://([^ ,\r\n]*)","\\1[url]https://\\2[/url]",$post);
	$post=eregi_replace("([ \r\n])ftp://([^ ,\r\n]*)","\\1[url]ftp://\\2[/url]",$post);
	$post=eregi_replace("([ \r\n])www\\.([^ ,\r\n]*)","\\1[url]http://www.\\2[/url]",$post);

	// 2. part
	// detect url if the url is in the beginning of the string
	$post=eregi_replace("^http://([^ ,\r\n]*)","[url]http://\\1[/url]",$post);
	$post=eregi_replace("^https://([^ ,\r\n]*)","[url]https://\\1[/url]",$post);
	$post=eregi_replace("^ftp://([^ ,\r\n]*)","[url]ftp://\\1[/url]",$post);
	$post=eregi_replace("^www\\.([^ ,\r\n]*)","[url]http://www.\\1[/url]",$post);

	// 3. part
	$post=preg_replace("/\[url\](.*)\[\/url\]/iUms","<a href=\"\\1\" target=_blank>\\1</a>",$post);
	$post=preg_replace("/\[url=(.*)\](.*)\[\/url\]/iUms","<a href=\"\\1\" target=_blank>\\2</a>",$post);
	//#####


	// e-mail	
	$post= eregi_replace('([_a-z0-9-]+(\.[_a-z0-9-]+)*@[_a-z0-9-]+(\.[_a-z]+)+)','<a href="mailto:\\1">\\1</a>',$post);
	
	// formatting
	$post = str_replace("[hr]","<hr>",$post);
	$post=preg_replace("/\[b\](.*)\[\/b\]/iUms","<b>\\1</b>",$post);
	$post=preg_replace("/\[i\](.*)\[\/i\]/iUms","<i>\\1</i>",$post);
	$post=preg_replace("/\[s\](.*)\[\/s\]/iUms","<strike>\\1</strike>",$post);
	$post=preg_replace("/\[u\](.*)\[\/u\]/iUms","<u>\\1</u>",$post);
	$post=preg_replace("/\[h1\](.*)\[\/h1\]/iUms","<h1>\\1</h1>",$post);
	$post=preg_replace("/\[h2\](.*)\[\/h2\]/iUms","<h2>\\1</h2>",$post);
	$post=preg_replace("/\[h3\](.*)\[\/h3\]/iUms","<h3>\\1</h3>",$post);
	$post=preg_replace("/\[h4\](.*)\[\/h4\]/iUms","<h4>\\1</h4>",$post);
	$post=preg_replace("/\[h5\](.*)\[\/h5\]/iUms","<h5>\\1</h5>",$post);
	
	
	//code
	$post=preg_replace("/\[code\](.*)\[\/code\]/msiU", "<blockquote><pre><smallfont><hr>\\1<hr></smallfont></pre></blockquote>", $post);
	
	// image
	$post=preg_replace("/\[img\](.*)\[\/img\]/iUms","<img src=\"\\1\" border=\"0\">",$post);
	
	// center
	$post=preg_replace("/\[center\](.*)\[\/center\]/iUms","<center>\\1</center>",$post);
	
	// colors
	$post=preg_replace("/\[green\](.*)\[\/green\]/iUms","<span style=\"color:green\">\\1</span>",$post);
	$post=preg_replace("/\[yellow\](.*)\[\/yellow\]/iUms","<span style=\"color:yellow\">\\1</span>",$post);
	$post=preg_replace("/\[red\](.*)\[\/red\]/iUms","<span style=\"color:red\">\\1</span>",$post);
	$post=preg_replace("/\[blue\](.*)\[\/blue\]/iUms","<span style=\"color:blue\">\\1</span>",$post);
	$post=preg_replace("/\[white\](.*)\[\/white\]/iUms","<span style=\"color:white\">\\1</span>",$post);
	$post=preg_replace("/\[black\](.*)\[\/black\]/iUms","<span style=\"color:black\">\\1</span>",$post);
	
	$post=preg_replace("/\[color=(.*)\](.*)\[\/color\]/iUms","<span style=\"color:\\1\">\\2</span>",$post);
	
	// <br />
	$post= nl2br($post);

	return $post;
}

/**
 * dooh, only use unix timestamps in future!
 */
/* OBSOLETE ? 
function get_timestamp_from_sqldate($date)
{
	if(DB_TYPE=="mysql")
	{
        $pos = strpos($date,'-');
        /**
         * format is 20040421180901
         */
/*        if($pos === false)
        {
    		$year=substr($date,0,4);
    		$month=substr($date,4,2);
    		$day=substr($date,6,2);
    		$hour=substr($date,8,2);
    		$min=substr($date,10,2);
    		$sec=substr($date,12,2);
        }
        else
        {
            /**
             * for is like 2004-12-27 17:09:04
             */
/*            $year=substr($date,0,4);
            $month=substr($date,5,2);
            $day=substr($date,8,2);
            $hour=substr($date,11,2);
            $min=substr($date,14,2);
            $sec=substr($date,17,2);            
        }
	}
	else
	{
		$year=substr($date,0,4);
		$month=substr($date,5,2);
		$day=substr($date,8,2);
		$hour=substr($date,11,2);
		$min=substr($date,14,2);
		$sec = 0;
	}

	return mktime($hour,$min,$sec,$month,$day,$year);
}
*/

function nice_date($id)
{
/*##########################################################
## used in: img_view.php (linpha_comments)
## returns a readable time string
##########################################################*/
	global $date_format, $arr_day_short, $time_format;
	$db_time=$GLOBALS['db']->Execute("SELECT date FROM ".PREFIX."image_comments WHERE id='".linpha_addslashes($id)."'");
	$result=$db_time->FetchRow();
	
	$timestamp = $GLOBALS['db']->UnixTimeStamp($result[0]);
	//$timestamp = get_timestamp_from_sqldate($result[0]);

	return linpha_strftime(get_date_format().' -- '.get_time_format(), $timestamp);
}

function get_language()
{
	if(read_config('autolang'))
	{
		// get language from browser and switch to new language (if supported)
		$lang = get_http_accept_lang();
	}else{
		$lang=read_config('lang');
		if(empty($lang)){
			$lang="English";
		}
	}
	return $lang;
}

function language_file()
{
/*##########################################################
## used in: header.php, print_final.php, image_resized_view.php
## this function returns the path to the correct language file
##########################################################*/
	return TOP_DIR."/lang/lang.".get_language().".php";
}


function form_generate_select($name, $size, $options, $selected, $array)
{
/*##########################################################
## used in: build_general_conf.php
## this function generates select fields in an unique name
##########################################################*/
    if(!is_array($selected))
    {
        $selected = Array($selected);
    }

	print "<select name='".$name."' size='".$size."'".$options.">\n";
	foreach ($array as $key => $value)
	{
		if(in_array($key,$selected)) {
			$select = ' selected';
		} else {
			$select = '';
		}
		echo "<option value='".$key."'".$select.">".($value)."</option>\n";
	}
	print "</select>";
}

function get_render_time()
{
/*##########################################################
## used in: various
## some functions to calculate the page rendering time, this is
## very useful while trying to speed up LinPHA :-)
##########################################################*/
	list ($usec, $sec)=explode(" ", microtime());
	return ((float)$usec + (float)$sec);
}

// start timer 
function start_timer($string) 
{
	global $timer;
	$timer[$string]=get_render_time();
}

// stop timer 
function stop_timer($string)
{
	global $timer;
	return number_format(get_render_time()-$timer[$string],4);
}

function putHelpButton($chapter,$lang='')
{
	if(empty($lang)) {
		$lang_param = '';
	} else {
		$lang_param = 'lang='.$lang;
	}
	$link = TOP_DIR.'/docs/index.php?'.$lang_param.'#';
	/**
	* use href= and onclick= because of compatibility on browsers with deactivated javascript
	*/
	?>
	<a href="<?php echo $link.$chapter; ?>" target="_blank" onclick="javascript:window.open('<?php echo $link.$chapter; ?>', 'help','dependent=yes,width=700,height=500,titlebar=yes,menubar=no,resizable=yes,scrollbars=yes,status=no,toolbar=no');return false">
	<img src="<?php echo TOP_DIR; ?>/graphics/help.png" border="0" alt="help"></a>
	<?php
}

function check_path($path)
{
/*##########################################################
## used in: *_stage_album.php
## Security check to recognize URL changes (albums/ MUST be first in prev_path= !!)
## we also take care of "../" values...
## returns:
## 0/1
##########################################################*/

global $mydirectory;
/* security */
$pathcheck=explode("/", "$path");
($mydirectory!="albums") ? $mydircheck=explode("/", "$mydirectory") : $mydircheck[0]=$mydirectory;

if($pathcheck[0]!=$mydircheck[0] || in_array("../", $pathcheck))
{
	return false;
}else
{
	return true;}
}

function get_http_accept_lang()
{
 /*##########################################################
## used in: header.php/install.php
## The magic of language auto-detection
## This alows us to welcome users with their natural language if already available
## returns:
## language to use
##########################################################*/

	$http_accept_language = trim(@$_SERVER["HTTP_ACCEPT_LANGUAGE"]);
	// Accept-Language Header detail, see RFC2616 
	$knownlangs = array( "dk" => "Danish",
						"nl"	=> "Dutch",
						"en"	=> "English",
						"de"	=> "German",
						"de-ch"	=> "German",	// for IE 6
						"de-at"	=> "German",	// for IE 6
						"ja"	=> "Japanese",
						"it"	=> "Italian",
						"es"	=> "Spanish",
						"co"	=> "Spanish",
						"fr"	=> "French",
						"no"	=> "Norwegian",
						//"pt"	=> "BrazilianPortuguese",
						//"br"	=> "BrazilianPortuguese",
						"zh"	=> "zh-cn",
						"tw"	=> "zh-tw",
						"cz"	=> "Czech",
						"cs"	=> "Czech",
						"ro"	=> "Romanian",
						"cn"	=> "zh-cn",
						"zh-CN"	=> "Simplified Chinese",
						"kr"	=> "Korean",
						"se"	=> "Swedish",
						"sv"	=> "Swedish",
						"ru"	=> "Russian" );


  $accept_lang = 'English';
  $lastquality = 0.0;

  $langtag = '((?:[a-zA-Z]{1,8})(?:-[a-zA-Z]{1,8})*)';
  $qvalue ='(0(?:\.[0-9]{1,3})?|1(?:\.0{1,3}))';
  $eachbit = '^' . $langtag . '(?:;q=' . $qvalue . ')?(?:,\s*)?(.*)$';

  while (strlen($http_accept_language)) {
    if (preg_match( "/$eachbit/", $http_accept_language, $m)) {
      $tag = $m[1];
      $quality = $m[2];
      if (strlen($quality) == 0) $quality = 1;
      $http_accept_language = $m[3];

      if (array_key_exists($tag, $knownlangs) and $quality > $lastquality) {
	$accept_lang = $knownlangs[$tag];
	$lastquality = $quality;
      }
    } else {
      break;
    }
  }
  return $accept_lang;
}

function get_category_select($array_category)
{
/*##########################################################
## used in: various
## read category info (select field) used in:
## img_view.php/search.php/linpha_comments.php to display all available categories
## returns:
## array of albums for select fields
##########################################################*/
	
	$result = $GLOBALS['db']->Execute("SELECT * FROM ".PREFIX."category ORDER BY name");
	
	// search.php condition  show all, except the private ones...
	if(!is_array($array_category))
	{	
		while($array = $result->FetchRow())
		{
			if(in_group('admin') || !$array[2])
			{
				echo '<option value="'.htmlspecialchars($array[0],ENT_QUOTES).'">'.htmlspecialchars($array[1],ENT_QUOTES).'</option>'."\n";
			}
		}
	}else // linpha_comments.php wants us to build select. take care of selected entries
	{
		while($array = $result->FetchRow())
		{
			$is_checked = false;

			reset($array_category);
			while(list($key,$value) = each($array_category))
			{
				if($array[0]==$value)
				{
					$is_checked = true;
				}
			}

			if($is_checked)
			{
				if(in_group('admin') || !$array[2])
				{
					echo '<option value="'.htmlspecialchars($array[0],ENT_QUOTES).'" selected>'.htmlspecialchars($array[1],ENT_QUOTES).'</option>'."\n";
				}
			}else
			{
				if(in_group('admin') || !$array[2])
				{
					echo '<option value="'.htmlspecialchars($array[0],ENT_QUOTES).'">'.htmlspecialchars($array[1],ENT_QUOTES).'</option>'."\n";
				}
			}
		}

	}
}

function multi_array_sum($array)
{
/*##########################################################
## used in: benchmark.php
## same function as array_sum()
## but this works with multidimension arrays too
##########################################################*/

	if(!is_array($array)) return $array;
	$sum = 0;
	foreach($array as $key=>$value) {
		$sum += multi_array_sum($value);
	}
	return $sum;
}

/**
* Set autologin-cookie
*
* can only be set once per request
* must be set before a header is already sent
*
* @uses  verify.php
*/
function set_linpha_cookie($userid, $md5pw)
{
    /**
    * calculate correct path for cookie
    * needs always to be the linpha root folder
    * for example: http://localhost/linpha/index.php -> must be /linpha/
    */
        /**
        * get directory and append needed ending slash
        */
        $php_self_dir = dirname($_SERVER['PHP_SELF']);
        $php_self_dir .= '/';
    
        if(TOP_DIR != '.')
        {
            if(TOP_DIR == '..')
            {
                $num = 1;
            }
            else
            {
                $num = 1 + substr_count(TOP_DIR, '/');
            }
            
            /**
            * remove directories
            */
            for( ; $num > 0 ; $num--)
            {
                /**
                * remove last slash
                */
                $php_self_dir = substr($php_self_dir,0,strlen($php_self_dir)-1);
                
                /**
                * get last slash
                */
                $pos = strrpos($php_self_dir,'/');
                
                /**
                * remove last directory
                */
                $php_self_dir = substr($php_self_dir,0,$pos+1);
            }
        }
    
    /**
    * set the cookie
    */
	setcookie("linpha_userid", $userid, (time() + 60 * 60 * 24 * 31), $php_self_dir);
	setcookie("linpha_password", $md5pw, (time() + 60 * 60 * 24 * 31), $php_self_dir);
}

function random_password($len)
{
/*##########################################################
## used in: login.php, forth_stage_install.php
## Create a random password
## Paramter: length of the password
##########################################################*/

	$pass = '';
	$lchar = 0;
	$char = 0;
	for($i = 0; $i < $len; $i++)
	{
		while($char == $lchar)
		{
			$char = rand(48, 109);
			if($char > 57) $char += 7;
			if($char > 90) $char += 6;
		}
		$pass .= chr($char);
		$lchar = $char;
	}
	return $pass;
}

/**
* remove dirs not in open_basedir and safe_mode_exec_dir (only if activated)
*/
function get_PATH($array_path)
{
	/**
	* use the path variable instead of own array
	*/
	if($array_path == 'PATH')
	{
		unset($array_path);
		if(!empty($_SERVER['PATH']))
		{
			$path = $_SERVER['PATH'];
		}
		elseif(!empty($_SERVER['Path']))
		{
			$path = $_SERVER['Path'];
		}
		else
		{
			$path = '';
		}
		$array_path = explode(PATH_SEPARATOR,$path);
	}
	// if we have open_basedir restrictions, take only the paths which are allowed from open_basedir to prevent errors
	$open_basedir = ini_get('open_basedir');
	if(!empty($open_basedir)) {
		$arr_open_basedir = explode(PATH_SEPARATOR,$open_basedir);
		
		$array_path = array_intersect($array_path, $arr_open_basedir);
	}
	
	// same with safemode
	if(ini_get('safe_mode'))
	{
		$safe_mode_exec_dir = ini_get('safe_mode_exec_dir');
		if(!empty($safe_mode_exec_dir)) {
			
			$arr_safe_mode_exec_dir = explode(PATH_SEPARATOR,$safe_mode_exec_dir);
			
			$array_path = array_intersect($array_path, $arr_safe_mode_exec_dir);
		}
	}
	
	return $array_path;
}

// #####################################
// #####################################
// #####################################

// new function file: phpinfo.php

// #####################################
// #####################################
// #####################################

/**
* @package  requirements
*/

/**
* this function checks if the posix functions are available
*
* @author  flo
* @return  bool  true if posix enabled, false if not
* @uses  sec_stage_install.php, plugins/ftp/index.php
* @package  requirements
*/
function check_posix()
{
	$array_needed_functions = Array(
		'posix_getuid',
		'posix_getpwuid',
		'posix_getgrgid'
	);
	
	foreach($array_needed_functions AS $value)
	{
		if( !function_exists($value) )
		{
			return false;
		}
	}
	
    /**
    * can return true even if it fails...!!! seen on sf.net
    */
	if($uid = @posix_getuid())
	{
		if(@posix_getpwuid($uid))
		{
			return true;
		}
	}
    
    return false;
}

function check_php_version($min_version)
{
/*##########################################################
## used in: various
## Check for PHP version (also takes care of different patchlevels and rc's)
## returns:
##  the current PHP version to enable disable some features which depend
## on the installed PHP version.
##########################################################*/

/**
* @todo  use version_compare()
*/

$is_version=phpversion();

list($v1,$v2,$v3,$v4) = sscanf($is_version,"%d.%d.%d%s");
list($m1,$m2,$m3,$m4) = sscanf($min_version,"%d.%d.%d%s");

	if($v1>$m1)
	return(1);
		elseif($v1<$m1)
		return(0);
	if($v2>$m2)
	return(1);
		elseif($v2<$m2)
		return(0);
	if($v3>$m3)
	return(1);
		elseif($v3<$m3)
		return(0);

	if((!$v4)&&(!$m4))
	return(1);
	if(($v4)&&(!$m4))
	{
		$is_version=strpos($v4,"pl");
		if(is_integer($is_version))
		return(1);
		return(0);
	}
	elseif((!$v4)&&($m4))
	{
		$is_version=strpos($m4,"rc");
		if(is_integer($is_version))
		return(1);
	return(0);
	}
return(0);
}

/**
* @package  requirements
*/
function check_convert()
{
	if(getOS()=='win') {
		$convert = 'convert.exe';
	} else {
		$convert = 'convert';
	}
	$array_path = get_PATH('PATH');
	$array_lookfor = get_PATH(Array('/bin','/usr/bin','/usr/local/bin','/sw/bin','/opt/local/bin'));
	
	/**
	* need a special check if safe_mode is on
	* because we can't check anymore with file_exists() since php 4.3.9 even if the file is in
	* allowed dirs (see http://bugs.php.net/bug.php?id=30259)
	*
	* try to execute in every location
	*/
	if(ini_get('safe_mode'))
	{
		foreach($array_path AS $value)
		{
			if( !isset($array) )
			{
				//echo $value.'<br />';
				
				$arr = array(); $return_var = '';	// do not this inside exec() !!!!!!!!!! it will overwrite the returned content !!
				exec($value.'/'.$convert.' -help',$arr,$return_var);
			
				//print_r($arr);
				
				if(isset($return_var) && $return_var == 0)
				{
					$array = Array(1, '', '');
				}
			}
		}
		
		// search file in other locations
		foreach($array_lookfor AS $value)
		{
			if( !isset($array) )
			{
				$arr = array(); $return_var = '';	// do not this inside exec() !!!!!!!!!! it will overwrite the returned content !!
				exec($value.'/'.$convert.' -help',$arr,$return_var);
			
				if(isset($return_var) && $return_var == 0)
				{
					$array = Array(1, '', '');
				}
			}
		}
	}
	else
	{
		/**
		* search file in PATH
		*
		* if convert is found in the path variable, don't store the full path
		* because if the path changes, we get problems (for example under windows:
		* c:/program files/imagemagick-5.8.... changes to c:/program files/imagemagick-6.0.0)
		*/
		foreach($array_path AS $value)
		{
			if( !isset($array) && file_exists($value.'/'.$convert) )
			{
				$array = Array(1, '','');
			}
		}
		
		// search file in other locations
		foreach($array_lookfor AS $value)
		{
			if( !isset($array) && file_exists($value.'/'.$convert) )
			{
				$array = Array(1, $value.'/','');
			}
		}
	}
	
	if(!isset($array) )
	{
		$array = Array(0,'','');
		return $array;
	}
	
	/**
	* now, we do an improved check
	*/
	$arr = array(); $return_var = '';	// do not this inside exec() !!!!!!!!!! it will overwrite the returned content !!
	exec($array[1].$convert.' -help',$arr,$return_var);

	if(isset($return_var) && $return_var == 0)
	{
		$needle = 'ImageMagick ';

		$pos = @strpos($arr[0],$needle);
		
		if($pos === false)
		{
			/**
			* wrong convert found ?!
			* @todo  we should now set use_convert to '0' ?!
			*/
			$version = '';
		}
		else
		{
			$version = substr($arr[0],$pos+strlen($needle),5);
		}
		
		$array[2] = $version;
	}
	else
	{
		/**
		* convert not found...
		*/
		$array = array(0,'','');
	}
	
	return $array;
}

/**
* @package  requirements
*/
function get_mem_limit()
{
	$memlimit=ini_get('memory_limit');
	if(empty($memlimit))
    {
        $memlimit = get_cfg_var('memory_limit');
    }
    
    /**
     * mem limit disabled (-1) or not compiled in
     */
    if(empty($memlimit) OR $memlimit == -1)
    {
        return false;
    }
    else
    {
	   $memlimit=str_replace("M", "", $memlimit);
	   return $memlimit;
    }
}

/**
* @subpackage  requirements
*/
function get_gd_version()
{
	ob_start();
	phpinfo(8);
	$phpinfo=ob_get_contents();
	ob_end_clean();
	$phpinfo=strip_tags($phpinfo);
	$phpinfo=stristr($phpinfo,"gd version");
	$phpinfo=stristr($phpinfo,"version");
	$end=strpos($phpinfo,".");
	$phpinfo=substr($phpinfo,0,$end);
	$length = strlen($phpinfo)-1;
	$phpinfo=substr($phpinfo,$length);
	if($phpinfo<2)
	{
		return false;
	}
	else
	{
		return true;
	}
}

?>
