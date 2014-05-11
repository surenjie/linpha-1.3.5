<?php
/*
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

ini_set('include_path', TOP_DIR);	// set in include path because in 
//db_connect.php isn't TOP_DIR used to include adodb.inc.php!

include_once(TOP_DIR.'/header.php');
include_once(TOP_DIR.'/include/left_menu.class.php');
include_once(TOP_DIR.'/plugins/log/logger.class.php');

//Security: if not an admin goto index :)
if(!in_group('admin')): header("Location: ".TOP_DIR."/index.php");endif;

$menu = new LeftMenuView();
$menu->generateTableHead();
//$menu->buildMenu();
$menu->generateTableFooter();

/**
 * Select field options
 */
$array_options = Array(
	'all' => 'Date range',
	'year_this' => 'This Year',
	'year_last' => 'Last Year',
	'month_this' => 'This Month',
	'month_last' => 'Last Month',
	'week_this' => 'This Week',
	'week_last' => 'Last Week',
	'today' => 'Today',
	'yesterday' => 'Yesterday',
	'custom' => 'Custom'
);

global $array_types;

$array_severity = Array(
	'ALL'     => 'ALL',
	'NOTICE'  => 'NOTICE', 
	'WARNING' => 'WARNING', 
	'ERROR'   => 'ERROR',
	'FATAL'   => 'FATAL' 
);

$array_severity_colour = Array(
	'NOTICE'  => '#009900', // Green
	'WARNING' => '#ff6600', // Orange
	'ERROR'   => '#cc3300', // Red
	'FATAL'   => '#cc00ff'  // Purple
);

echo "<td valign='top' class='adminpages' height='100%' colspan='2'>";

/**
 * calculate date string
 */
if(!isset($_REQUEST['date']))
{
	$_REQUEST['date'] = 'all';
}
if(!isset($_REQUEST['date_from']))
{
	$_REQUEST['date_from'] = '';
}
if(!isset($_REQUEST['date_to']))
{
	$_REQUEST['date_to'] = '';
}
if(!isset($_REQUEST['type']))
{
	$_REQUEST['type'] = 'all';
}
if(!isset($_REQUEST['severity']))
{
	$_REQUEST['severity'] = 'ALL';
}

/**
 * Take good care of XSS in all date select fields
 */
if(!array_key_exists($_REQUEST['date'], $array_options))
{
	die("FATAL: unknown date range selected");
}

if(strlen($_REQUEST['date_from']) > '0' || strlen($_REQUEST['date_to']) > '0')
{
	if(!is_valid_date($_REQUEST['date_from']) || 
		!is_valid_date($_REQUEST['date_to']))
	{
		die("FATAL: wrong date format, expecting yyyy:mm:dd...");
	}	
}

if(!array_key_exists($_REQUEST['type'], $array_types))
{
  if ($_REQUEST['type'] != 'all') 
    {
	  die("FATAL: unknown type selected");
	}
}

if(!array_key_exists($_REQUEST['severity'], $array_severity))
{
  if ($_REQUEST['severity'] != 'ALL') 
    {
	  die("FATAL: unknown severity selected");
	}
}

if($_REQUEST['date'] == 'all')
{
	$timestamp_from = '0';
	$timestamp_to = '9999999999';
}
elseif($_REQUEST['date'] == 'custom')
{
	$from_year = substr($_REQUEST['date_from'],0,4);
	$from_month = substr($_REQUEST['date_from'],5,2);
	$from_day = substr($_REQUEST['date_from'],8,2);
	$to_year = substr($_REQUEST['date_to'],0,4);
	$to_month = substr($_REQUEST['date_to'],5,2);
	$to_day = substr($_REQUEST['date_to'],8,2);
	
	$timestamp_from = mktime(0,0,0,$from_month,$from_day,$from_year);
	$timestamp_to = mktime(23,59,59,$to_month,$to_day,$to_year);
}
else
{
	list($timestamp_from,$timestamp_to) = switch_dates($_REQUEST['date']);
}

/**
 * set link
 */
$adress_link = TOP_DIR.'/plugins/log/log_view.php?date='.$_REQUEST['date'].'&amp;date_from='.$_REQUEST['date_from'].'&amp;date_to='.$_REQUEST['date_to'];

/*
 * show date selection
 */
?>

<h1><?php echo "View Logs"; //TODO: LANG Entry ?></h1>
<hr noshade>
<?php echo $wm_help_and_descr.': '; putHelpButton('log_view'); //TODO: Help Entry ?>
<br /><br />
<b>::&nbsp;<a class='admin' href='<?php echo TOP_DIR."/admin.php?page=log&plugins=1"; ?>'><?php echo $log_options; ?></a>&nbsp;::</b><br />
<br />
<div style="padding-left: 10px;">
<form style="margin-bottom: 0px;" name="date_selection" method="GET" action="<?php echo TOP_DIR.'/plugins/log/log_view.php'; ?>">
<div id="div_selection" style="float: left;">
<select name="date" onchange="formupdate();">
<?php
foreach($array_options AS $key=>$value)
{
	if(isset($_REQUEST['date']))
	{
		if($key == $_REQUEST['date'])
		{
			$selected = ' selected';
		}
		else
		{
			$selected = '';
		}
	}
	else
	{
		$selected = '';
	}
	
	echo '<option value="'.$key.'"'.$selected.'>'.$value.'</option>';
}

?>
</select>
</div>
<div id="div_date" style="float: left; ">
&nbsp;&nbsp;
<a href="javascript:void(0);" onclick="var loginWin = window.open('<?php echo TOP_DIR; ?>/actions/calender.php?form=date_selection.date_from&amp;additional_cmd=change_custom()','Calender','height=250,width=300,scrollbars=no,menubar=no,status=no');" target="_top"><?php echo $search_from ?></a> 
<input type='text' onchange="change_custom()" name='date_from' value='<?php echo @$_REQUEST['date_from']; ?>' style='width:80'> / 

<a href="javascript:void(0);" onclick="var loginWin = window.open('<?php echo TOP_DIR; ?>/actions/calender.php?form=date_selection.date_to&amp;additional_cmd=change_custom()','Calender','height=250,width=250,scrollbars=no,menubar=no,status=no'); " target="_top"><?php echo $search_to ?></a>
<input type='text' onchange="change_custom()" name='date_to' value='<?php echo @$_REQUEST['date_to']; ?>' style='width:80'>
</div>
&nbsp;&nbsp;<?php echo 'of type'; //TODO: LANG Entries ?>&nbsp;
<select name="type">
<?php
if($_REQUEST['type'] == 'all'){
	$selected = ' selected';
} else {
	$selected = '';
}
echo '<option value="all"'.$selected.'>ALL TYPES</option>';
foreach($array_types AS $key=>$value)
{
	if(isset($_REQUEST['type']))
	{
		if($key == $_REQUEST['type'])
		{
			$selected = ' selected';
		}
		else
		{
			$selected = '';
		}
	}
	else
	{
		$selected = '';
	}
	
	echo '<option value="'.$key.'"'.$selected.'>'.linpha_log_type($value).'</option>';
}

?>
</select>
&nbsp;&nbsp;<?php echo 'and severity'; //TODO: LANG Entries ?>&nbsp;
<select name="severity">
<?php
foreach($array_severity as $key=>$value)
{
	if(isset($_REQUEST['severity']))
	{
		if($key == $_REQUEST['severity'])
		{
			$selected = ' selected';
		}
		else
		{
			$selected = '';
		}
	}
	else
	{
		$selected = '';
	}
	
	echo '<option value="'.$value.'"'.$selected.'>'.$value.'</option>';
}

?>
</select>
&nbsp;&nbsp;
<input type='submit' name='btn_submit' value='Set'>

</form>
</div>
<hr noshade>
<script language="JavaScript" type='text/javascript'>
<!--

function change_custom()
{
	document.date_selection.date.value = 'custom';
}

function formupdate()
{
	switch(document.date_selection.date.value)
	{
		
		<?php
		foreach($array_options AS $key=>$value)
		{
			echo 'case "'.$key.'":'."\n";
			if($key == 'custom')
			{
				
			} elseif($key=='all')
			{
				echo 'document.date_selection.date_from.value = "";'."\n";
				echo 'document.date_selection.date_to.value = "";'."\n";
			}
			else
			{
				list($time_from,$time_to) = switch_dates($key);

				echo 'document.date_selection.date_from.value = "'.strftime("%Y:%m:%d",$time_from).'";'."\n";
				echo 'document.date_selection.date_to.value = "'.strftime("%Y:%m:%d",$time_to).'";'."\n";
			}
			echo 'break;'."\n";
		}
		?>
	}
}

//-->
</script>
<br />
	<div align="center">
	<table class='admintable' width='95%' cellspacing='1' border='0'>
	<COLGROUP>
		<COL width="150" align='center'>
		<COL width="100" align='center'>
		<COL width="100" align='center'>
		<COL width="*">
		<COL width="150" align='center'>
	<thead>
		<tr>
			<th class='maintable' colspan='5'><?php echo "Log Entries"; //TODO LANG Entry ?></th>
		</tr>
		<tr>
			<th class='maintable' style="border: 1px #888888 solid;">Date & Time</td> 
			<th class='maintable' style="border: 1px #888888 solid;">Type</td>
			<th class='maintable' style="border: 1px #888888 solid;">Severity</td>
			<th class='maintable' style="border: 1px #888888 solid;">Message</td>
			<th class='maintable' style="border: 1px #888888 solid;">IP</td>
		</tr>
	</thead>
	<tfoot>
		<tr>
			<th class='maintable' colspan='5'>End of Log</td>
		</tr>
	</tfoot>
	<tbody>
	<?php
	    $log_sql  = "SELECT `time`, `type`, `severity`, `message`, `ip` FROM `".PREFIX."log` ";
		$log_sql .= "WHERE `time` >= '".$timestamp_from."' ";
		$log_sql .= "AND `time` <= '".$timestamp_to."' ";
		if ($_REQUEST['type'] != 'all') 
		{
		$log_sql .= "AND `type` = '".linpha_log_type($_REQUEST['type'])."' ";
		}
		if ($_REQUEST['severity'] != 'ALL')
		{
		$log_sql .= "AND `severity` = '".$_REQUEST['severity']."' ";
		}
		$log_sql .= "ORDER BY `time` DESC";
		$log_event_query = $GLOBALS['db']->Execute($log_sql);
		if ($log_event_query->RecordCount() == 0) {
	?>
		<tr>
			<td class='admintable' colspan='5' align='center'><font color='#FF0000'><?php echo 'No Logs Found!'; //TODO: LANG Entry  ?></font></td>
		</tr>
	<?php	
		} else {
			while ($log_event = $log_event_query->FetchRow(ADODB_FETCH_ASSOC))
			{
	?>
		<tr>
			<td class='admintable'><?php echo '<font color="'.$array_severity_colour[$log_event['severity']].'">'.linpha_strftime('',$log_event['time']).'</font>'; ?></td> 
			<td class='admintable'><?php echo '<font color="'.$array_severity_colour[$log_event['severity']].'">'.$log_event['type'].'</font>'; ?></td>
			<td class='admintable'><?php echo '<font color="'.$array_severity_colour[$log_event['severity']].'">'.$log_event['severity'].'</font>'; ?></td>
			<td class='admintable'><?php echo '<font color="'.$array_severity_colour[$log_event['severity']].'">'.$log_event['message'].'</font>'; ?></td>
			<td class='admintable'><?php echo '<font color="'.$array_severity_colour[$log_event['severity']].'">'.$log_event['ip'].'</font>'; ?></td>
		</tr>	
	<?php
			}
		}
	?>
	</tbody>
	</table>
		
	</div>

<br /></td></tr>
<?php
include_once(TOP_DIR.'/footer.php');

function switch_dates($switch_dates)
{
	$year = date("Y");
	$month = date("n");
	$day = date("j");
	$weekday = date("w");
	
	$this_week_from = $day-$weekday;
	$this_week_to = $day-$weekday+6;
	
	
	switch($switch_dates)
	{
	case 'all':
	break;
	case 'custom':
		$timestamp_from = '';
		$timestamp_to = '';
	break;
	case 'year_this':
		$timestamp_from = mktime(0,0,0,1,1,$year);
		$timestamp_to = mktime(23,59,59,12,31,$year);
	break;
	case 'year_last':
		$timestamp_from = mktime(0,0,0,1,1,$year-1);
		$timestamp_to = mktime(23,59,59,12,31,$year-1);
	break;
	case 'month_this':
		$timestamp_from = mktime(0,0,0,$month,1,$year);
		$timestamp_to = mktime(23,59,59,$month+1,0,$year);	// mktime(hour,minute,sec,month,day,year) day=1 => 1., day=0 => 31., day=-1 => 30.
	break;
	case 'month_last':
		$timestamp_from = mktime(0,0,0,$month-1,1,$year);
		$timestamp_to = mktime(23,59,59,$month-1+1,0,$year);
	break;
	case 'week_this':
		$timestamp_from = mktime(0,0,0,$month,$this_week_from,$year);
		$timestamp_to = mktime(23,59,59,$month,$this_week_to,$year);
	break;
	case 'week_last':
		$timestamp_from = mktime(0,0,0,$month,$this_week_from-7,$year);
		$timestamp_to = mktime(23,59,59,$month,$this_week_to-7,$year);
	break;
	case 'today':
		$timestamp_from = mktime(0,0,0,$month,$day,$year);
		$timestamp_to = mktime(23,59,59,$month,$day,$year);
	break;
	case 'yesterday':
		$timestamp_from = mktime(0,0,0,$month,$day-1,$year);
		$timestamp_to = mktime(23,59,59,$month,$day-1,$year);
	break;
	default:
		echo "FATAL: no matching switching date";
	break;
	}
	
	return Array($timestamp_from,$timestamp_to);
}

/**
 * take good care of date input fields
 */
function is_valid_date($string)
{
	if (eregi("^[0-9]{4}:[0-9]{2}:[0-9]{2}$", $string))
	{
		$date_arr = explode(':', $string);
		if (checkdate($date_arr[1], $date_arr[2], $date_arr[0]))
		{
			unset($date_arr);
			return true;
		}
		else
		{
			unset($date_arr);
			return false;
		}
	}
    else
    {
		return false;
	}
}

?>