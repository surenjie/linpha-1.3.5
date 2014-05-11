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

include_once(TOP_DIR.'/install/install_header.php');

?>
<tr>
	<td width='200' valign='top' class='leftmenu'>
		<div class='leftmenuhead'>
			<?php echo $inst_msg."\n"; ?>
		</div>
		<br />
<?php

if(@$_GET['page']=="check") {
	print ("<ul type='disc'><li>$req_check_msg</li></ul>");
} else {
	print ("<ul type='disc'><li>$inst_status_2</li><li>$inst_status_step2</li></ul>");
}

echo "</td>";
echo "<td class='adminpages' height='100%' colspan='10'>";

/*####################################################
##check for supported databases
####################################################*/
if(function_exists('mysql_connect')) {
	$supported_db['mysql'] = 1;
}
if(function_exists('pg_connect')) {
	$supported_db['pgsql'] = 1;
}
if(function_exists('sqlite_open')) {
	$supported_db['sqlite'] = 1;
}

/*####################################################
##check for GD lib jpeg support
####################################################*/
if(!function_exists('imagecreatefromjpeg') || !function_exists('imagejpeg'))
{
	$gd_jpg_status=("<b><font color='#FFFF00'>$req_found_msg</font></b>");
	$gd_jpg_ok=false;
}else{
	$gd_jpg_status=("<b><font color='#32CD32'>$req_miss_msg</font></b>");
	$gd_jpg_ok=true;
}

/*####################################################
##check for GD lib
####################################################*/
if(extension_loaded('gd'))
{
	$gd_status=("<b><font color='#32CD32'>$req_found_msg</font></b>");
	$gd_ok=true;
}else{
	$gd_status=("<b><font color='#FFFF00'>$req_miss_msg</font></b>");
	$gd_ok=false;
}

/*####################################################
##check for PHP > 4.1.0
####################################################*/
if($version_ok=check_php_version('4.1.0'))
{
	$php_status=("<b><font color='#32CD32'>$req_found_msg</font></b>");
	$php_ok=true;
}else{
	$php_status="<b><font color='#FF0000'>$req_miss_msg</font></b>";
	$php_ok=false;
}

/*####################################################
##check for ImageMagick (convert)
####################################################*/
/**
 * this part is in upgrade.php too
 */
list($convert_avail, $convert_path, $convert_version) = check_convert();
if($convert_avail)
{

    /**
     * the imagemagick  versions 6.1.1 - 6.1.3 contains a bug with the switch
     * +profile "*", the "*" is taken as a wildcard and produces error messages
     * like this: https://sourceforge.net/tracker/index.php?func=detail&aid=1073728&group_id=64772&atid=508614
     *
     * i tested these versions:
     * 6.1.0	-	6.1.0-9
	 * 6.1.1	x	6.1.1-6
	 * 6.1.2	x	6.1.2-7
     * 6.1.3	x	6.1.3-7
     * 6.1.4	-	6.1.4-5
     * 6.1.5	-	6.1.5-6
     */
    if($convert_version == "6.1.1" OR $convert_version == "6.1.2" OR $convert_version == "6.1.3")
    {
        $reg_unsupported_msg = "Unsupported";
        $convert_status=("<b><font color='#FF0000'>".$reg_unsupported_msg."</font></b>");
        $convert_unsupported = true;
        $convert_ok=false;
    }
    else
    {
    	$convert_ok=true;
        $convert_status=("<b><font color='#32CD32'>".$req_found_msg."</font></b>");
    }
}
else
{
   	$convert_status="<b><font color='#FFFF00'>$req_miss_msg</font></b>";
    $convert_ok=false;
}

/**
 * Check if ImageMagick contains support for brackets
 * 
 * this check occurs three times (2x in upgrade.php, 1x in sec_stage_install.
 * php)
 * 
 * since version 6.1.3 (6.1.1 - 6.1.3 are unsupported anyway)
 * 
 * copy from http://redux.imagemagick.org/discussion-server/viewtopic.php?
 * t=4701:
 * since imagemagick 6.1 the resizing isn't working the same as it was with 6.0
for example, i need to resize a big photo to 640x480, and want composite a watermark image
i've done this with this command:
      composite -size "640x480" "wm.jpg" "orig.jpg" -resize "640x480" "output.jpg"
but since version 6.1 the watermark image (wm.jpg) is resized to 640x480 too, but it shouldn't
is this a bug or a feature?
i've tested this versions:
6.0.8 watermark image isn't resized
6.1.9 watermark image is resized
6.2.3 watermark image is resized

--------- Answer -------------
This is a feature. composite is doing things to images, as the option appears.
However surroungin orig.jpg and -resize operations with parenthesis should do the trick.

----------
but version below 6.1.3 doesn't support the "parenthesis", so we have to check which version we are using

another solution would be to first resize the photo, save it to a file and then composite the watermark image
over, but this would be much more dirty as the version depended commands because the function build_watermark_str()
generates only the command, and doesn't execute anything this time, so we would have to change the whole procedure...
 */
    if($convert_version >= "6.1.4") {
    	$bracket_support = 1;
    } else {
    	$bracket_support = 0;
    }

/*####################################################
##check for POSIX support
####################################################*/
if(check_posix())
{
	$posix_status=("<b><font color='#32CD32'>$req_found_msg</font></b>");
	$posix_ok=true;
}else{
	$posix_status=("<b><font color='#FFFF00'>$req_miss_msg</font></b>");
	$posix_ok=false;
}

/*####################################################
##check for safe mode
####################################################*/
if(ini_get('safe_mode'))
{
	$safe_status=("<b><font color='#FFFF00'>$req_safe_fail</font></b>");
	$safemode=1;
//	$convert_ok=0;
}else{
	$safe_status=("<b><font color='#32CD32'>$req_safe_ok</font></b>");
	$safemode=0;
}

/*####################################################
##check for open basedir restrictions
####################################################*/
$basedir_name=ini_get("open_basedir");
if(empty($basedir_name))
{
	$basedir_status=("<b><font color='#32CD32'>$req_basedir_fail</font></b>");
	$basedir_ok=1;
}else{
	$basedir_status=("<b><font color='#FFFF00'>$basedir_name</font></b>");
	$basedir_ok=0;
//	$convert_ok=0;
}

// deny use of convert 
//if($basedir_ok==0 || $safemode==1) : $restricted=1; endif;

/**
* memory limit
*/
	$limit=get_mem_limit();
    if($limit === false)
    {
        $str_unlimited = "Unlimited";
        $mem_status=("<b><font color='#32CD32'>".$str_unlimited."</font></b>");
        $mem_ok=1;
    }
	elseif($limit<=16)
	{
		$mem_status=("<b><font color='#FFFF00'>$limit MByte</font></b>");
		$mem_ok=0;
	}else{
		$mem_status=("<b><font color='#32CD32'>$limit MByte</font></b>");
		$mem_ok=1;
	}

/**
* session
*/
	/**
	* we cannot use session_start here because headers are already sent
	* and
	* unfortunatly a check like this doesn't work:
	* if(!@session_start()) { }
	* because session_start() hasn't a return value
	*/

	$session_path=session_save_path();
	if(!empty($session_path))
	{
		$session_path_ok = 1;
	}
	else
	{
		$session_path_ok = 0;
	}
	
	$session_save_handler = strtolower(ini_get('session.save_handler'));
	if($session_save_handler == 'files')
	{
		$session_handler_ok = 1;
	}
	else
	{
		$session_handler_ok = 0;
	}
	
	if($session_path_ok && $session_handler_ok)
	{
		$session_status=("<b><font color='#32CD32'>$req_found_msg</font></b>");
		$session_ok=1;
	}
	else
	{
		$session_status=("<b><font color='#FFFF00'>$req_miss_msg</font></b>");
		$session_ok=0;
	}

/* create info table */
if(@$_GET['page']=="check")
{
print("<form name='go_on' action='sec_stage_install.php?page=nocheck' method=GET>");
print("<table class='maintable' width='100%' cellspacing='0'>");
print("<tr><th class='maintable' colspan='5'>$req_check_msg</th></tr>");
print("<tr><td class='maintable'>$php_safemode_check_msg</td><td class='maintable'>$safe_status</td></tr>");
print("<tr><td class='maintable'>$php_basedir_check_msg</td><td class='maintable'>$basedir_status</td></tr>");
print("<tr><td class='maintable'>$php_version_check_msg</td><td class='maintable'>$php_status</td></tr>");
print("<tr><td class='maintable'>$mem_check_msg</td><td class='maintable'>$mem_status</td></tr>");
print("<tr><td class='maintable'>$gd_check_msg</td><td class='maintable'>$gd_status</td></tr>");
print("<tr><td class='maintable'>$convert_check_msg</td><td class='maintable'>$convert_status</td></tr>");
if(getOS() != "win"){ //only if we are we are on unix
	print("<tr><td class='maintable'>$posix_check_msg</td><td class='maintable'>$posix_status</td></tr>");
}
print("<tr><td class='maintable'>$session_check</td><td class='maintable'>$session_status</td></tr>");
print("</table><br><br>");

/* imagecopyresampled() available + GD > 2.0 */
if($gd_ok==1 && get_gd_version()==1 && $convert_ok==0)
{
print("<table class='maintable' width='100%' cellspacing='0'>");
print("<tr><th  class='maintable' colspan='2'>$choose_def_quali<font color='#FF0000'>*</font></th></tr>");
print("<tr><td class='maintable' align='center'><img src='hqdemo.jpg' width=120 height=90 border=0></td>
		<td class='maintable' align='center'><img src='lqdemo.jpg' width=120 height=90 border=0></td></tr>");
print("<tr><td class='maintable' align='center'><input type='radio' name='quality' value='1'>High Quality</td>
		<td class='maintable' align='center'><input type='radio' name='quality' value='0' checked>Low Quality</td></tr>");
print("<tr><td class='maintable' align='center' colspan='2'><font color='#FF0000'>
			* $choose_def_quali_warn</font></td></tr>");
print("</table><br><br>");
}
else
{
print("<input type='hidden' name='quality' value='0'>");
}

print("<table class='maintable' width='100%' cellspacing='0'>");
print("<tr><th class='maintable' colspan='5'><b>$summary_msg</b></th></tr>");

if(!$php_ok) // php version --> ABORT!!!
{
	print("<tr><td class='maintable'>$php_version_err<br>");
	print("<font color='#FF0000'>$inst_abort_msg</font></td></tr>");
	print("</table>");
	include_once(TOP_DIR.'/footer.php');
	exit();
}
if(!$gd_ok && !$convert_ok) // missing gd + convert --> ABORT!!!
{
	print("<tr><td class='maintable'>$gd_convert_err<br>");
	print("<font color='#FF0000'>$inst_abort_msg</font></td></tr>");
	print("</table>");
	include_once(TOP_DIR.'/footer.php');
	exit();
}

// create summary view...

if(!$basedir_ok) // basedir msg
{
	echo "<tr><td class='maintable' style='background-color:#FFFF00;' width='1%'>-</td>
			<td class='maintable'>".$basedir_active_msg.
				"+ ".$inst_linpha_not_work_correctly."<br />".
				$basedir_active_msg2."</td></tr>";
}
if(!$gd_jpg_ok && $gd_ok && !$convert_ok) // gd jpeg missing msg
{
	echo "<tr><td class='maintable' style='background-color:#FFFF00;' width='1%'>-</td>
			<td class='maintable'>".$gd_jpg_missing_msg."<br />".
				"+ ".$inst_linpha_not_work_correctly."</td></tr>";
}
if($safemode==1) // savemode msg
{
	echo "<tr><td class='maintable' style='background-color:#FFFF00;' width='1%'>-</td>
			<td class='maintable'>".$safemode_active_msg.
				"+ ".$inst_linpha_not_work_correctly."<br />".
				$safemode_active_msg2."</td></tr>";
}

	if($convert_ok) // convert msg
	{
            print("<tr><td class='maintable' style='background-color:#32CD32;' width='1%'>+</td>
				<td class='maintable'>".$convert_sum_found_msg." <br><b>ImageMagick ".$str_Version.": ".$convert_version."</b></td></tr>");
	}
    else
	{
        if($convert_unsupported)
        {
            $convert_unsupported_msg = "In ImageMagick Version 6.1.1 to 6.1.3 exists a bug which makes the use of ImageMagick not possible. Upgrade ImageMagick to the latest Version. Using GD Lib instead.";
            print("<tr><td class='maintable' style='background-color:#FF0000;' width='1%'>-</td>
                <td class='maintable'>".$convert_unsupported_msg." <br><b>ImageMagick ".$str_Version.": ".$convert_version."</b></td></tr>");
        }
        else
        {
    		print("<tr><td class='maintable' style='background-color:#FFFF00;' width='1%'>-</td>
				<td class='maintable'>$convert_sum_miss_msg</td></tr>");
        }
	}

if(getOS() != "win"){
	if($posix_ok) // posix msg
	{
		print("<tr><td class='maintable' style='background-color:#32CD32;' width='1%'>+</td>
				<td class='maintable'>$posix_sum_found_msg</td></tr>");
	}else
	{
		print("<tr><td class='maintable' style='background-color:#FFFF00;' width='1%'>-</td>
				<td class='maintable'>$posix_sum_miss_msg</td></tr>");
	}
}

if($mem_ok) // memory limit msg
{
	print("<tr><td class='maintable' style='background-color:#32CD32;' width='1%'>+</td>
			<td class='maintable'>$mem_limit_ok_msg</td></tr>");
}
else
{
	print("<tr><td class='maintable' style='background-color:#FFFF00;' width='1%'>-</td>
				<td class='maintable'>$mem_limit_low_msg</td></tr>");
}


/**
* session
*/
	if($session_path_ok) // session msg
	{
		print("<tr><td class='maintable' style='background-color:#32CD32;' width='1%'>+</td>
				<td class='maintable'>$session_path_found_msg $session_path</td></tr>");
	}else
	{
		print("<tr><td class='maintable' style='background-color:#FFFF00;' width='1%'>-</td>
				<td class='maintable'>$session_path_miss_msg</td></tr>");
	}
	
	if($session_handler_ok)
	{
		print("<tr><td class='maintable' style='background-color:#32CD32;' width='1%'>+</td>
				<td class='maintable'>$session_save_handler_ok_msg</td></tr>");
	}else
	{
		print("<tr><td class='maintable' style='background-color:#FFFF00;' width='1%'>-</td>
				<td class='maintable'>$session_save_handler_miss_msg</td></tr>");
	}
	
	if($session_ok)
	{
		print("<tr><td class='maintable' style='background-color:#32CD32;' width='1%'>+</td>
				<td class='maintable'>$session_ok_msg</td></tr>");
	}
	else
	{
		print("<tr><td class='maintable' style='background-color:#FF0000;' width='1%'>-</td>
				<td class='maintable'>$session_miss_msg</td></tr>");
	}


/* set use_convert == 0 , even if it's available but "open_basedir" or safemode is set*/
//if(@$restricted): $convert_ok==0; endif;

print("<tr><td  class='maintable' colspan='5' align='center'>");
print("<input type='submit' name='page' value='$next_button'>
		<input type='hidden' name='whatlang' value='1'>
		<input type='hidden' name='language' value='".@$_GET['language']."'>
		<input type='hidden' name='use_convert' value='".@$convert_ok."'>
		<input type='hidden' name='convert_path' value='".@$convert_path."'>" .
		"<input type='hidden' name='bracket_support' value='".@$bracket_support."'>");
print("</td></tr>");
print("</table></form>");
}
else
{
/* config starts here (system requirements ok)*/
/*###############################################
## setup sql access type
###############################################*/
print "<form method='GET' action='third_stage_install.php'>";
print "<table class='maintable' width='100%' cellspacing='0'>";
print "<tr><th class='maintable' colspan='3'>$inst_access_msg</th></tr>";
print "<tr><td class='maintable' width='5%'><input type='radio' name='button' value='1' checked></td>
		<td class='maintable' >$inst_full_access_msg</td>";
print "<td class='maintable' width='20' align='center'>"; putHelpButton('fullaccess',$_GET['language']);
print "</td></tr>";
print "<tr><td class='maintable' width='5%'><input type='radio' name='button' value='0'></td>
		<td class='maintable'>$inst_limited_access_msg</td>";
print "<td class='maintable' width='20' align='center'>"; putHelpButton('fullaccess',$_GET['language']);
print "</td></tr></table>";
print("<input type=hidden name=language value=".$_GET['language'].">".
		"<input type='hidden' name='quality' value='".$_GET['quality']."'>".
		"<input type='hidden' name='use_convert' value='".$_GET['use_convert']."'>".
		"<input type='hidden' name='convert_path' value='".$_GET['convert_path']."'>".
		"<input type='hidden' name='bracket_support' value='".@$bracket_support."'>".
		"<input type='hidden' name='php_version' value='".check_php_version('4.2.0')."'>");
?>
    <br />
    <table class='maintable' width='100%' cellspacing='0'>
        <tr>
            <th class='maintable' colspan='2'>
                <?php
                echo $select_db_header;
                putHelpButton('dbselect',$_GET['language']);
                ?>
            </th>
        </tr>
        <tr>
            <td class='maintable' width='5%'>
                <input type='radio' name='db_type' value='mysql'<?php echo (isset($supported_db['mysql']) ? ' checked="checked"' : ' disabled="disabled"'); ?>>
            </td>
            <td class='maintable'>
                <b>MySQL</b><br />
                <?php
                if(!isset($supported_db['mysql']))
                {
                    echo '<b>'.$str_not_enabled_in_php_config.'</b>';
                }
                else
                {
                    echo $mysql_info;
                }
                ?>
            </td>
        </tr>
        
    	<tr>
    		<td class='maintable' width='5%'>
                <input type='radio' name='db_type' value='pgsql'<?php echo (isset($supported_db['pgsql']) ? '' : ' disabled="disabled"'); ?>>
            </td>
    		<td class='maintable'>
                <b>Postgresql</b><br />
                <?php
                if(!isset($supported_db['pgsql']))
                {
                    echo '<b>'.$str_not_enabled_in_php_config.'</b>';
                }
                else
                {
                    echo $postgres_info;
                    ?>
                    <a href='../docs/index.php?chapter=dbselect&language=<?php echo $_GET['language']; ?>'>
                    <b>info</b></a>
                    <?php
                }
                ?>
            </td>
    	</tr>
    
    	<tr>
    		<td class='maintable' width='5%'><input type='radio' name='db_type' value='sqlite' ></td>
    		<td class='maintable'><b>SQLite</b><br />
                <?php
                if(!isset($supported_db['sqlite']))
                {
                    echo $str_not_enabled_in_php_config;
                }
                else
                {
                	$sqlite_info = str_replace("MySQL", "SQLite", $mysql_info);
                	echo $sqlite_info;
				}
                ?>
                </b><br />
            </td>
    	</tr>
<?php

    if(!isset($supported_db))
    {
    ?>
		<tr>
			<td class='maintable' colspan='3'><b><font color="red"><?php echo $str_no_supported_database_activated; ?> (MySQL, PostgreSQL, SQLite)</font></b></td>
		</tr>
        </table>
    <?php
    } else {
    ?>
        </table><br /><hr/>
        <div align='center'>
            <input type='submit' value='<?php echo $next_button; ?>'>
        </div>
    <?php
    }

    echo "</form></td></tr>";
}
include_once(TOP_DIR.'/footer.php');
?>

