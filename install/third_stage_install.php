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

<SCRIPT LANGUAGE="JavaScript">
function checkPassLength()
{
if(document.install.admin_pass.value.length <3  )
	{
	alert ('<?php echo "$pass_2_short"; ?>');
	document.install.admin_pass.focus();
	return false;
	}
}
</SCRIPT>

<tr>
	<td width='200' valign='top' class='leftmenu'>
		<div class='leftmenuhead'>
			<?php echo $inst_msg."\n"; ?>
		</div>
		<br />

<?php
echo "<ul type='disc'>
			<li>$inst_status_3</li>
			<li>$inst_status_step3</li>
			</ul></td>
			<td class='adminpages' height='100%' colspan='10'>";

/*###############################################
## check/define SQL dependencies */
###############################################*/
switch($_GET['db_type'])
{
	case "pgsql":
	{
		if($_GET['php_version'])
		{
			$port="5432";
			$admin="postgres";
			// change some language entries to fit Postgresql...
			$inst_superadmin_header=str_replace("MySQL", "PosgreSQL", "$inst_superadmin_header");
			$inst_superadmin_name=str_replace("MySQL", "PosgreSQL", "$inst_superadmin_name");
			$inst_superadmin_name_info=explode("(",str_replace("MySQL", "PosgreSQL", "$inst_superadmin_name_info"));
			$inst_superadmin_pass=str_replace("MySQL", "PosgreSQL", "$inst_superadmin_pass");
			$inst_superadmin_pass_info=explode("(", str_replace("MySQL", "PosgreSQL", "$inst_superadmin_pass_info"));
			$inst_superadmin_name_info=$inst_superadmin_name_info[0];
			$inst_superadmin_pass_info=$inst_superadmin_pass_info[0];
			$inst_db_host_info2=str_replace("MySQL", "PostgreSQL", "$inst_db_host_info2");
		}else
		{
			echo "".str_replace("4.1.0", "4.2.0", "$php_version_err")."";
			echo "<br>(PosgreSQL only)";
			exit();
		}
	break;
	}
	case "mysql":
	{
		$port="3306";
		$admin="root";
	break;
	}

}

/*###############################################
## setup sql administrator
###############################################*/
print "<form method=POST action=forth_stage_install.php name='install'>";
if($_GET['db_type']!="sqlite")
{
print "<table class='maintable' width='100%' cellspacing='0'>";
print "<tr><th class='maintable' colspan='4'>$inst_superadmin_header</th></tr>";
print "<tr><td class='maintable'>$inst_superadmin_name</td>
		<td class='maintable'><input  tabindex='1' type='text' name='superadmin_name' size=25 maxlength=25 value='$admin'></td>
		<td class='maintable' align='right'>$inst_superadmin_name_info</td>";
print "<td class='maintable' width='20' align='center'>"; putHelpButton('sqladminname',$_GET['language']);
print "</td></tr>";
print "<tr><td class='maintable'>$inst_superadmin_pass</td>
		<td class='maintable'><input  tabindex='2' type='password' name='superadmin_pass' size=25 value=''></td>
		<td class='maintable' align='right'>$inst_superadmin_pass_info</td>";
print "<td  class='maintable' width='20' align='center'>"; putHelpButton('sqladminpass',$_GET['language']);
print "</td></tr></table><br>";
}
/*###############################################
## LinPHA DB administrator
###############################################*/
print "<table class='maintable' width='100%' cellspacing='0'>";
print "<tr><th class='maintable' colspan='4'>$inst_admin_header</th></tr>";
print "<tr><td class='maintable'>$inst_admin_name</td>
		<td class='maintable'><input  tabindex='3' type='text' name='admin_name' size=25 maxlength=20 value=></td>
		<td class='maintable' align='right'>$inst_admin_name_info</td>";
print "<td class='maintable' align='center' width='20'>"; putHelpButton('linphaname',$_GET['language']);
print "</td></tr>";
print "<tr><td class='maintable' >$inst_admin_pass</td>
		<td class='maintable'><input  tabindex='4' type='password' name='admin_pass' size=25 value='' onchange=\"return checkPassLength();\"></td>
		<td class='maintable' align='right'>$inst_admin_pass_info</td>";
print "<td class='maintable' align='center' width='20'>"; putHelpButton('linphapass',$_GET['language']);
print "</td></tr>";
print "<tr><td class='maintable'>$inst_admin_email</td>
		<td class='maintable'><input  tabindex='5' type='text' name='admin_email' size=25 value=></td>
		<td class='maintable' align='right'>$inst_admin_email_info</td>";
print "<td class='maintable' align='center' width='20'>"; putHelpButton('linphamail',$_GET['language']);
print "</td></tr></table><br>";

/*###############################################
## general sql options
###############################################*/
if($_GET['button']==1)
{
	$big_admin=true;
} else {
	$big_admin=false;
}

if($_GET['db_type']!="sqlite")
{
	/**
	 * switch view for different sql access level
	 */
	if($big_admin) /* full db access */
	{
		print "<table class='maintable' width='100%' cellspacing='0'>";
		print "<tr><th class='maintable' colspan='4'>$inst_db_header</th></tr>";
		print "<tr><td class='maintable'>$inst_db_host</td>
				<td class='maintable'><input  tabindex='6' type='text' name='db_host' size=25 value='localhost'></td>
				<td class='maintable' align='right'>$inst_db_host_info</td>";
		print "<td class='maintable'  align='center' width='20'>"; putHelpButton('dbhost',$_GET['language']);
		print "</td></tr>";
	
		print "<tr><td class='maintable' >$inst_db_host_port</td>
			<td class='maintable'><input  tabindex='7' type='text' name='db_port' size=25 value='$port'></td>
			<td class='maintable' align='right'>$inst_db_host_port_info</td>";
		print "<td class='maintable' align='center' width='20'>"; putHelpButton('dbport',$_GET['language']);
		print "</td></tr>";
	
		/* create dummy user entrys for db access (security) */
		print "<input type=hidden name=db_admin value='linpha'>";
		print "<input type=hidden name=db_password value='dummy'>";
		print "<input type=hidden name=db_prefix value='linpha_'>";
	
		print "<tr><td class='maintable'>$inst_db_name</td>
				<td class='maintable' ><input  tabindex='8' type='text' name='db_realname' size=25 value='linpha'></td>
				<td class='maintable' align='right'>$inst_db_name_info</td>";
		print "<td class='maintable' align='center' width='20'>"; putHelpButton('dbname_full',$_GET['language']);
		print "</td></tr></table><br>";
	}
	else /* limited db access */
	{
		print "<table class='maintable' width='100%' cellspacing='0'>";
		print "<tr><th class='maintable' colspan='4'>$inst_db_header</th></tr>";
		print "<tr><td class='maintable'>$inst_db_host</td>
				<td class='maintable'><input  tabindex='6' type='text' name='db_host' size=25 value='localhost'></td>
				<td class='maintable' align='right'>$inst_db_host_info2</td>";
		print "<td class='maintable' align='center' width='20'>"; putHelpButton('dbhost',$_GET['language']);
		print "</td></tr>";
	
		print "<tr><td class='maintable'>$inst_db_host_port</td>
				<td class='maintable'><input  tabindex='7' type='text' name='db_port' size=25 value='$port'></td>
				<td class='maintable' align='right'>$inst_db_host_port_info</td>";
		print "<td class='maintable' align='center' width='20'>"; putHelpButton('dbport',$_GET['language']);
		print "</td></tr>";
	
		print "<tr><td class='maintable'>$inst_db_name2</td>
				<td class='maintable'><input  tabindex='8' type='text' name='db_realname' size=25 value=''></td>
				<td class='maintable' align='right'>$inst_db_name_info2</td>";
		print "<td class='maintable' align='center' width='20'>"; putHelpButton('dbname',$_GET['language']);
		print "</td></tr>";
		print "<tr><td class='maintable'>$inst_table_prefix</td>
				<td class='maintable'><input  tabindex='9' type='text' name='db_prefix' size=25 value='linpha_'></td>
				<td class='maintable' align='right'>$inst_table_prefix_info</td>";
		print "<td class='maintable' align='center' width='20'>"; putHelpButton('dbprefix',$_GET['language']);
		print "</td></tr></table><br>";
	}
}
else
{
	echo "<input type='hidden' name='db_prefix' value='linpha_'>";
}

/*###############################################
## thumbnail size
###############################################*/
print "<table class='maintable' width='100%' cellspacing='0'>";
print "<tr><th class='maintable' colspan='4'>$inst_thumbsize_header</th></tr>";
print "<tr><td class='maintable'>".STR_FILESIZE.": 90 pixel</td>
		<td class='maintable'>".STR_FILESIZE.": 120 pixel</td>
		<td class='maintable'>".STR_FILESIZE.": 150 pixel</td></tr>";
print "<tr><td class='maintable' align='center'><img src='thumb90px.jpg'></td>
		<td class='maintable' align='center'><img src='thumb120px.jpg'></td>
		<td class='maintable' align='center'><img src='thumb150px.jpg'></td></tr>";
print "<tr><td class='maintable'><input type='radio' name='thumb_size' value='90' tabindex='10'>90 pixel</td>
		<td class='maintable'><input type='radio' name='thumb_size' value='120' tabindex='11'checked>120 pixel</td>
		<td class='maintable'><input type='radio' name='thumb_size' value='150' tabindex='12'>150 pixel</td></tr>";
print ("</table><br>");

/*
/*###############################################
## thumbnail border (convert only)
###############################################
if($_GET['use_convert'])
{
print "<table class='maintable' width='100%' cellspacing='0'>";
print "<tr><th class='maintable' colspan='2'>$inst_thumbborder_header</th></tr>";
print "<tr><td class='maintable' align='center'><img src='thumb120px_border.jpg'></td>
		<td class='maintable' align='center'><img src='thumb120px.jpg'></td></tr>";
print("<tr><td class='maintable'><input type='radio' name='thumb_border' value='1'  tabindex='13'checked'>$inst_thumbborder_enable</td>
		<td class='maintable'><input type='radio' name='thumb_border' value='0' tabindex='14'>$inst_thumbborder_disable</td></tr>");
print ("</table><br>");
}else
{
	print("<input type=hidden name='thumb_border' value='0'>");
}*/

print "<div align='center'><hr>";
print "<input  tabindex='15' type=submit name=submit_install value=$next_button></div>
		<input type=hidden name='language' value=".@$_GET['language'].">
		<input type=hidden name='big_admin' value='$big_admin'>
		<input type=hidden name='use_convert' value=".@$_GET['use_convert'].">
		<input type=hidden name='convert_path' value=".@$_GET['convert_path'].">
		<input type=hidden name='bracket_support' value=".@$_GET['bracket_support'].">
		<input type=hidden name='quality' value=".@$_GET['quality'].">
		<input type=hidden name='db_type' value=".@$_GET['db_type'].">";
print "</form></td></tr>";

include_once(TOP_DIR.'/footer.php');
?>

