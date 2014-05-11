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

$menu = new LeftMenuView();
$menu->generateTableHead();
$menu->buildMenu();
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

/**
* count images global once (needed for image section and others like imagecache)
*/
$query = $GLOBALS['db']->Execute("SELECT count(id) FROM ".PREFIX."photos");
$data = $query->FetchRow();
$nr_total_photos = $data[0];
$nr_perm_photos = count_pictures();

echo "<td class='mainwindow' colspan='2'>";

/**
 * exit 
 */
if(!read_plugins_config('stats') OR !check_permissions('stats'))
{
	exit_if_not_active('stats');
}

if(!isset($_REQUEST['mode']))
{
	$_REQUEST['mode'] = 'general';
}

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
$adress_link = TOP_DIR.'/plugins/stats/stats_view.php?date='.$_REQUEST['date'].'&amp;date_from='.$_REQUEST['date_from'].'&amp;date_to='.$_REQUEST['date_to'];


/**
 * show links
 */
echo '<br />';
echo '<div align="center">';
echo '<a href="'.$adress_link.'&amp;mode=general"><strong>'.$stats_general_info.'</strong></a> || ';
echo '<a href="'.$adress_link.'&amp;mode=image"><strong>'.$stats_image_info.'</strong></a> || ';
echo '<a href="'.$adress_link.'&amp;mode=user"><strong>'.$stats_user_info.'</strong></a> || ';
echo '<a href="'.$adress_link.'&amp;mode=comment"><strong>'.$stats_comments_info.'</strong></a>';
echo '</div>';
echo '<br />';

/*
 * show date selection
 */
switch($_REQUEST['mode'])
{
case 'general':
break; // end case general
case 'image':
case 'user':
case 'comment':
?>
<div style="padding-left: 10px;">
<form style="margin-bottom: 0px;" name="date_selection" method="GET" action="<?php echo TOP_DIR.'/plugins/stats/stats_view.php'; ?>">
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
<input type='text' onchange="change_custom()" name='date_from' value='<?php echo htmlspecialchars(@$_REQUEST['date_from'],ENT_QUOTES); ?>' style='width:80'> / 

<a href="javascript:void(0);" onclick="var loginWin = window.open('<?php echo TOP_DIR; ?>/actions/calender.php?form=date_selection.date_to&amp;additional_cmd=change_custom()','Calender','height=250,width=250,scrollbars=no,menubar=no,status=no'); " target="_top"><?php echo $search_to ?></a>
<input type='text' onchange="change_custom()" name='date_to' value='<?php echo htmlspecialchars(@$_REQUEST['date_to'],ENT_QUOTES); ?>' style='width:80'>
</div>

&nbsp;&nbsp;
<input type='submit' name='btn_submit' value='Set'>
<input type='hidden' name='mode' value='<?php echo htmlspecialchars($_REQUEST['mode'],ENT_QUOTES); ?>'>
</form>
</div>

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
<br /><br />
<?php
break;
} // end switch date selection


switch($_REQUEST['mode'])
{
case 'general':
	/**
	 * calculate total of the album and most view album
	 */
	$i = 0;
	$old_wd = getcwd();
	chdir(TOP_DIR);
	
	$array_values[$i]['key'] = $stats_over_albums;
	$array_values[$i]['value'] = get_all_albums('albums', 0, "albums", 0);
	$i++;
	
	$array_values[$i]['key'] = $stats_over_most_alb_visists;
	$array_values[$i]['value'] = get_all_albums('albums', 0, "top_visits", 0);
	$i++;
	
	chdir($old_wd);

	/**
	 * calculate total MB of the images
	 */
	$query = $GLOBALS['db']->Execute("SELECT  filename, prev_path FROM ".PREFIX."photos");
	$size = 0;
	while($data = $query->FetchRow())
	{
		$filename = TOP_DIR.'/'.$data[1].'/'.$data[0];
		if(file_exists($filename))
		{
			$size += filesize($filename);
		}
	}
	
	$array_values[$i]['key'] = $stats_over_space;
	$array_values[$i]['value'] = round( $size/1024/1024 , 2 ).' MB';
	$i++;
	
	$array_values[$i]['key'] = $stats_over_visitors;
	$array_values[$i]['value'] = read_config('users');
	$i++;
	
	?>
	<div align="center">
	<table class='admintable' cellspacing="0">
	<th class='maintable' colspan='2'><?php echo $href_stats; ?></th>
	<?php
	foreach($array_values AS $entry)
	{
		?>
		<tr>
			<td class='admintable'><?php echo htmlspecialchars($entry['key'],ENT_QUOTES); ?></td>
			<td class='admintable'><?php echo htmlspecialchars($entry['value'],ENT_QUOTES); ?></td>
		</tr>
		<?php
	}
	/**
	 * cache info
	 */
	if(read_plugins_config('cache'))
	{
		include_once(TOP_DIR.'/plugins/cache/func.cache.php');
		if(!isset($nr_total_photos)): $nr_total_photos="0"; endif;
		show_cache_stats($nr_total_photos);
	}
	?>
	</div>
	</table>
	<?php

break; // end case general
case 'image':
	
	/**
	 * total image views
	 */
	$query = $GLOBALS['db']->Execute("SELECT count(id) FROM ".PREFIX."stats WHERE type='view'");
	$data = $query->FetchRow();
	$nr_total_views = $data[0];

	/**
	 * total image downloads
	 */
	$query = $GLOBALS['db']->Execute("SELECT count(id) FROM ".PREFIX."stats WHERE type='download'");
	$data = $query->FetchRow();
	$nr_total_downloads = $data[0];
	
	/**
	 * set query for image views
	 */
	unset($query);
	
	/**
	 * trying to fix this error:
	 * mysql error: [1104: The SELECT would examine more than MAX_JOIN_SIZE
rows; check your WHERE and use SET SQL_BIG_SELECTS=1 or SET
SQL_MAX_JOIN_SIZE=# if the SELECT is okay] in EXECUTE("SELECT
linpha_stats.md5sum, count(linpha_stats.id) AS nr_count,
max(linpha_stats.stats_time) AS max_time FROM linpha_photos,
linpha_first_lev_album, linpha_stats WHERE linpha_photos.prev_path LIKE
CONCAT(linpha_first_lev_album.path,'%') AND 1=1 AND
(linpha_photos.md5sum=linpha_stats.md5sum AND linpha_stats.type = 'view'
AND linpha_stats.stats_time >= '0' AND linpha_stats.stats_time <=
'9999999999' ) GROUP by linpha_stats.md5sum ORDER by nr_count DESC LIMIT
0,10") 

	--> works on sf.net!!
	 */
	if(DB_TYPE == "mysql")
	{
		$GLOBALS['db']->Execute("SET SQL_BIG_SELECTS=1");
	}
	
	$sql = sql_query_str(
		array(
			PREFIX.'stats.md5sum',
			'count('.PREFIX.'stats.id) AS nr_count',
			'max('.PREFIX.'stats.stats_time) AS max_time'
		),
		P.".md5sum=".PREFIX."stats.md5sum ".
    	"AND ".PREFIX."stats.type = 'view' ".
    	"AND ".PREFIX."stats.stats_time >= '".$timestamp_from."' ".
    	"AND ".PREFIX."stats.stats_time <= '".$timestamp_to."' "
    	//"AND ".PREFIX."stats.type = 'view'"
    	,
       	'nr_countdesc_max_timedesc',
    	array("stats"),
    	PREFIX.'stats.md5sum'
    	);
	$query[1] = $GLOBALS['db']->SelectLimit($sql, 10, 0);

	/*$query[1] = $GLOBALS['db']->SelectLimit("SELECT md5sum, count(id) AS nr_count, max(stats_time) AS max_time \n" .
			"FROM ".PREFIX."stats"."\n" .
			"WHERE type = 'view'"."\n" .
			"AND stats_time >= '".$timestamp_from."'"."\n".
			"AND stats_time <= '".$timestamp_to."'"."\n".
			"GROUP by md5sum"."\n" .
			"ORDER by nr_count DESC", 10, 0);*/
	$nr_selected_views = $query[1]->RecordCount();
	
	/**
	 * set query for image downloads
	 */
	$sql = sql_query_str(
		array(
			PREFIX.'stats.md5sum',
			'count('.PREFIX.'stats.id) AS nr_count',
			'max('.PREFIX.'stats.stats_time) AS max_time'
		),
		P.".md5sum=".PREFIX."stats.md5sum ".
    	"AND ".PREFIX."stats.type = 'download' ".
    	"AND ".PREFIX."stats.stats_time >= '".$timestamp_from."' ".
    	"AND ".PREFIX."stats.stats_time <= '".$timestamp_to."' "
    	//"AND ".PREFIX."stats.type = 'view'"
    	,
       	'nr_countdesc_max_timedesc',
    	array("stats"),
    	PREFIX.'stats.md5sum'
    	);
	$query[2] = $GLOBALS['db']->SelectLimit($sql, 10, 0);
	
	/*$query[2] = $GLOBALS['db']->SelectLimit("SELECT md5sum, count(id) AS nr_count, max(stats_time) AS max_time \n" .
			"FROM ".PREFIX."stats"."\n" .
			"WHERE type = 'download'"."\n" .
			"AND stats_time >= '".$timestamp_from."'"."\n".
			"AND stats_time <= '".$timestamp_to."'"."\n".
			"GROUP by md5sum"."\n" .
			"ORDER by nr_count DESC", 10, 0);*/
	$nr_selected_downloads = $query[2]->RecordCount();

	?>
	<div style="padding-left: 10px; ">
	<strong><?php echo $stats_total_images.":"; ?></strong>
		&nbsp;<?php echo $nr_perm_photos; ?><br />
	<strong><?php echo $stats_total_img_views.":"; ?></strong>
		&nbsp;<?php echo $nr_total_views; ?><br />
	<strong><?php echo $stats_total_img_downs.":"; ?></strong>
		&nbsp;<?php echo $nr_total_downloads; ?><br />
	<strong><?php echo $stats_total_img_selected.":"; ?></strong>
		&nbsp;<?php echo $nr_selected_views; ?><br />
	<strong><?php echo $stats_total_downs_selected.":"; ?></strong>
		&nbsp;<?php echo $nr_selected_downloads; ?><br />
	</div>
	<br />
	<div align="center" >
	<table class='admintable' width='95%' border="0">
		<tr>
			<th class='maintable'><?php echo $stats_rank; ?></th>
			<th class='maintable'><?php echo $stats_top_ten; ?></th>
			<th class='maintable'><?php echo $stats_head_downs; ?></th>
		</tr>
	<?php
	for($i = 1; $i <= 10; $i++)
	{
		?>
		<tr>
			<td align="center" class='admintable'><?php echo $i; ?>.</td>
			<?php
			for($n = 1; $n <= 2; $n++)
			{
				echo '<td class="admintable">';
				$data = $query[$n]->FetchRow();
				if(isset($data) && is_array($data))
				{
					$query_id = $GLOBALS['db']->Execute("SELECT id, prev_path " .
							"FROM ".PREFIX."photos " .
							"WHERE md5sum = '".$data[0]."'");
					$data_id = $query_id->FetchRow();
					?>
					<div style="float:left; padding-left:2px;">
 					<?php
					print_thumbnail($data_id['id']);
					?>
					</div>
					<span style="padding-top: 5px; padding-left: 3px;">
					<?php
					($n==2) ? $stats_info = $no_downloads.":": $stats_info = $stats_no_views;
					echo $stats_info.' '.$data['nr_count'].'<br />&nbsp;';
					echo $thumb_order_date.': '.linpha_strftime('',$data['max_time']).'<br />';
					
			        $stage = get_stage_from_prev_path($data_id['prev_path']);
	    			$albid = get_albid($data_id['prev_path'],$stage);
	    			build_navigation_view($stage,$albid,$data_id['id']);
	    			echo '<br />&nbsp;';
	    			print_resized_view($data_id['id'], 0, 0, $i.$n);
					?>
					</span>
					<?php
				}
				else
				{
					echo '&nbsp;';
				}
	
				unset($data);
				echo '</td>';
			}	
			?>
		</tr>
		<?php
	}
	?>
	</table>
	</div>
	<?php
break; // end case image
case 'user':
	/**
	 * get all users
	 */
	$query = $GLOBALS['db']->Execute("SELECT id, nickname FROM ".PREFIX."users");
	while($data = $query->FetchRow())
	{
		$array_users[$data[0]] = $data[1];
	}
	$array_users[0] = 'anonymous';

	/**
	 * get views, downloads, comments
	 */
	foreach($array_users AS $key=>$value)
	{
		$array_users_data[$key]['username'] = $value;
		
		/**
		 * get views
		 */
		$query_views = $GLOBALS['db']->Execute("SELECT count(id) AS nr_count"."\n" .
			"FROM ".PREFIX."stats"."\n" .
			"WHERE type = 'view'"."\n" .
			"AND stats_time >= '".$timestamp_from."'"."\n".
			"AND stats_time <= '".$timestamp_to."'"."\n".
			"AND stats_user = '".$key."'"."\n");
		$data_views = $query_views->FetchRow();
		
		$array_users_data[$key]['view'] = $data_views[0];

		/**
		 * get downloads
		 */
		$query_views = $GLOBALS['db']->Execute("SELECT md5sum AS nr_count"."\n" .
			"FROM ".PREFIX."stats"."\n" .
			"WHERE type = 'download'"."\n" .
			"AND stats_time >= '".$timestamp_from."'"."\n".
			"AND stats_time <= '".$timestamp_to."'"."\n".
			"AND stats_user = '".$key."'"."\n");
		$array_users_data[$key]['download'] = $query_views->RecordCount();
		
		/**
		 * Getting filesize for thousands of downloads and a large number 
		 * of users takes to much time. We use some bad hack here to prevent
		 * counting each time if nothing has changed. 
		 * This is somekind of trick, as we have no regular "anonymous" user 
		 * (and for sure we don't want it.) So save values for anonymous in 
		 * linpha_config instead of linpha_users...
		 * Use only for alltime downloads (e.g. do not recalculate if "this week, 
		 * this month" and so on is selected)
		 * Takes care of admin option "realtime stats" 
		 */

		/**
		 * take care of anonymous
		 */
		if($key == "0") // anonymous user
		{
			$user_downloads = read_config('stats_anonymous_downloads');
			$array_users_data[$key]['download_size'] = read_config('stats_anonymous_downloads_size');
		}
		else // regular user from linpha_users
		{
			$userinfo = $GLOBALS['db']->Execute("SELECT downloads, downloads_size " .
			"FROM ".PREFIX."users " . 
			"WHERE id = '".$key."' ");
			$data = $userinfo->FetchRow();
			
			$user_downloads = $data[0];
			$array_users_data[$key]['download_size'] = $data[1];
		}
		
		/**
		 * refresh stats if realtime is enabled or if stats cache timed out
		 */
		if(read_config('stats_realtime') 
		|| (time() - ((read_config('stats_cache_time')*3600)) 
		> read_config('stats_last_refresh')))
		{ 

		/**
		 * Prevent filesize counting if no new downloads for user, but do it 
		 * just for all time downloads and as second performance boost
		 */
		if($array_users_data[$key]['download'] > $user_downloads
		   || $timestamp_from != '0' && $timestamp_to != '9999999999')
		{
			/**
			 * calculate filesize
			 */
			$array_users_data[$key]['download_size'] = 0;
			while($data_views = $query_views->FetchRow())
			{
				$query_filename = $GLOBALS['db']->Execute("SELECT prev_path, filename " .
						"FROM ".PREFIX."photos " .
						"WHERE md5sum = '".$data_views[0]."'");
				$data_filename = $query_filename->FetchRow();
				
				$filename = TOP_DIR.'/'.$data_filename['prev_path'].'/'.$data_filename['filename'];
				if(file_exists($filename))
				{
					$array_users_data[$key]['download_size'] += filesize($filename);
				}
			}
			/**
			 * Save new values
			 */
			if($key == "0")
			{
				update_config($array_users_data[$key]['download'], 'stats_anonymous_downloads');
				update_config($array_users_data[$key]['download_size'], 'stats_anonymous_downloads_size');
			}
			else
			{
				$update = $GLOBALS['db']->Execute("UPDATE ".PREFIX."users SET ".
							"downloads='".linpha_addslashes($array_users_data[$key]['download'])."', ".
							"downloads_size='".linpha_addslashes($array_users_data[$key]['download_size'])."' ".
							"WHERE id='".linpha_addslashes($key)."'");
			}
		}
		update_config(time(), 'stats_last_refresh');
		}
				
		/**
		 * get comments
		 */
		$date_query = $GLOBALS['db']->Execute("SELECT date " .
			"FROM ".PREFIX."image_comments ".
			"WHERE comment <> ''".
			"AND author = '".$value."'");	
		
		$user_comments = "0";	
		
		while($result = $date_query->FetchRow())
		{
		$date = $GLOBALS['db']->UnixTimeStamp($result[0]);

			if($date >= $timestamp_from && $date <= $timestamp_to)
			{
				$user_comments++;
			}
		}

		$array_users_data[$key]['comment'] = $user_comments;
		unset($user_comments);
	}

	/**
	 * sort data
	 */
	if(!isset($_REQUEST['sort']) OR !isset($_REQUEST['asc']))
	{
		$_REQUEST['sort'] = 'username';
		$_REQUEST['asc'] = 1;
	}
	
	$array_users_data_sorted = multi_sort($array_users_data, $global_key = $_REQUEST['sort'], $global_asc = $_REQUEST['asc']);


	/**
	 * print table
	 */
	?>
	<div style="padding-left: 10px; ">
	<strong><?php echo $stats_over_users; ?></strong>
		&nbsp;<?php echo count($array_users)-1; ?>
	</div>
	<br />
	<div align="center">
	<table class='admintable' width="95%" border="1">
	<tr>
		<th class='maintable'><a href="<?php echo $adress_link; ?>
			&amp;mode=user&amp;sort=username&amp;asc=1"><?php echo $login_name; ?></a></th>
		<th class='maintable'><a href="<?php echo $adress_link; ?>
			&amp;mode=user&amp;sort=view&amp;asc=0"><?php echo (str_replace("v", "V", $views)); ?></a></th>
		<th class='maintable'><a href="<?php echo $adress_link; ?>
			&amp;mode=user&amp;sort=download&amp;asc=0"><?php echo $stats_downloads; ?></a></th>
		<th class='maintable'><a href="<?php echo $adress_link; ?>
			&amp;mode=user&amp;sort=download_size&amp;asc=0"><?php echo $stats_downl_size; ?></a></th>
		<th class='maintable'><a href="<?php echo $adress_link; ?>
			&amp;mode=user&amp;sort=comment&amp;asc=0"><?php echo $stats_over_comment; ?></a></th>
	</tr>
	<?php
	foreach($array_users_data_sorted AS $key=>$value)
	{
		?>
		<tr>
			<td class='admintable'><?php echo $value['username']; ?></td>
			<td class='admintable' align="right"><?php echo $value['view']; ?></td>
			<td class='admintable' align="right"><?php echo $value['download']; ?></td>
			<td class='admintable' align="right"><?php echo round($value['download_size']/1024/1024).' MB'; ?></td>
			<td class='admintable' align="right"><?php echo $value['comment']; ?></td>
		</tr>
		<?php
	}
	?>
	</table>
	</div>
	<?php
break; // end case user
case 'comment':

	$link = base64_encode('plugins/stats/stats_view.php?mode=comment');

	$sql = sql_query_str(
		array(
			PREFIX."image_comments.id",
			PREFIX."image_comments.comment",
			PREFIX."image_comments.author",
			PREFIX."image_comments.md5sum",
			PREFIX."image_comments.date",
		),
		P.".md5sum = ".PREFIX."image_comments.md5sum ".
    	"AND ".PREFIX."image_comments.comment <> ' '",
       	'date',
    	array("image_comments")
    	);
	$info = $GLOBALS['db']->SelectLimit($sql, 50, 0);

	$query = $GLOBALS['db']->Execute("SELECT count(id) " .
				"FROM ".PREFIX."image_comments " .
				"WHERE comment <> ''");
	$data = $query->FetchRow();
	?>

	<div style="padding-left: 10px; ">
	<strong><?php echo $stats_coments_total.":"; ?></strong>&nbsp;<?php echo $data[0]; ?>
	<br />
	<strong><?php echo $stats_coments_sel.":"; ?></strong>&nbsp;<?php echo $info->RecordCount(); ?>
	</div>
	<br />

	<div align="center">
	<table class='admintable' width='95%' cellspacing='1' border='0'>
	<tr><th class='maintable' colspan='4'><?php echo $comment_last_comments; ?></th></tr>
	<?php

	
	while($comment=$info->FetchRow())
	{
		$date = $GLOBALS['db']->UnixTimeStamp($comment[4]);

		if($date >= $timestamp_from && $date <= $timestamp_to)
		{
			$query = $GLOBALS['db']->Execute("SELECT id, prev_path " .
					"FROM ".PREFIX."photos WHERE md5sum = '".$comment[3]."'");
			$data = $query->FetchRow();
		
			/**
			 * catch old comments which haven't an image anymore
			 */ 
			if(empty($data[0]))
			{
				$old_comments[] = $comment;
			}
			else
			{
				$stage = get_stage_from_prev_path($data[1]);
				$albid = get_albid($data[1],$stage);		
				?>
				<tr>
					<td class='admintable' width='5%' align='center'>
						<a href='<?php echo TOP_DIR."/viewer.php?imgid=".$data[0]."&albid=".$albid."&stage=".$stage; ?>' title="<?php echo $thumb_hint_msg; ?>">
						<img src='<?php echo TOP_DIR."/get_thumbs.php?id=".$data[0]; ?>' border='0' alt='thumbnail''></a>
					</td> 
					<td class='admintable' width='20%' align='center'>
						<?php echo nice_date($comment[0]); ?><br />
						<b><?php echo $comment[2]; ?></b>
					</td>
					<td class='admintable' valign='top'>
						<?php echo htmltag(stripslashes($comment[1])); ?>
					</td>
					<td class='admintable' width='5%'>
						<?php
						if($passed && in_group('admin'))
						{
							echo "<a href='".TOP_DIR."/actions/delete_comment.php?id=".$comment[0]."&" .
									"job=comment&ref=".$link."'>[".STR_DELETE."]</a>";
						}
						?>
					</td>
				</tr>
				<?php 
			}
		}
	}
	echo "</table>";
		
	if(isset($old_comments))
	{
		echo "<br />";
		echo "<table class='admintable' width='100%' cellspacing='1' border='0'>";
		echo "<tr><th class='maintable' colspan='4'>".$str_old_comments."</th></tr>";
		foreach($old_comments AS $comment)
		{
			print("<tr>".
				"<td class='admintable' width='20%' align='center'>".
				nice_date($comment[0])."<br />".
				"<b>$comment[2]</b></td>".
				"<td class='admintable' valign='top' colspan='2'>".htmltag(stripslashes($comment[1])).
				"<td class='admintable' width='5%'>".
					"<a href='actions/delete_comment.php?id={$comment[0]}&job=comment&ref=".$link."'>[".STR_DELETE."]".
				"</td></tr>");
		}
		
		echo "</table>";
	}
	echo "</div>";

break;
}
?>
<br /></td></tr>
<?php
include_once(TOP_DIR.'/footer.php');

function multi_sort($array, $akey)
{ 
	usort($array, "compare_asc_desc");
	return $array;
}

function compare_asc_desc($a, $b)
{
	global $global_key, $global_asc;
	
	/**
	 * sort ascending
	 */
	if($global_asc)
	{
		if ($a[$global_key] == $b[$global_key]) return 0;
		if ($a[$global_key] < $b[$global_key]) return -1;
		return 1;
	}
	else
	{
		if ($a[$global_key] == $b[$global_key]) return 0;
		if ($a[$global_key] < $b[$global_key]) return 1;
		return -1;
	}
}

/**
 * calculate number of albums (recursive)
 * 
 * it does not work correctly if this function is in the switch statement above!!
 * the function can be declared in the switch statement, but we try to access this
 * functione, i get on a hosting server an "internal server error"
 * on all other server it works normal
 * very strange..!!
 */
function get_all_albums($dir_name, $countit, $choice, $highest)
{
	global $countit;
	global $highest;
	global $the_name;

	if(is_readable($dir_name))
	{
		$dirs = dir($dir_name);
  	
    	while($entry = $dirs->read())
    	{
    		if ($entry{0} != "." && $entry != "Thumbs.db" && $entry != "ZbThumbnail.info")
    		{
    			if (is_dir("$dir_name/$entry"))
    			{
    				$albums_array[]=array("$dir_name/$entry"=>"$entry");
    				$countit++;
    				get_all_albums("$dir_name/$entry", $countit, $choice, $highest);
    			}
    		}
		}
   		$dirs->close();
		clearstatcache();  
	}
	
	/* return either number of albums or most visited album */
	if($choice=="albums")
	{
		/* return number of albums */
		return $countit;
	}
	else
	{
		/* return most visited album */
		$i=0;
		while(list($prev_path, $name) = @each($albums_array[$i]))
		{
			$query_visits=$GLOBALS['db']->Execute("SELECT SUM(res) ".
							"FROM ".PREFIX."photos ".
							"WHERE prev_path='".linpha_addslashes($prev_path)."' ".
							"AND name='".linpha_addslashes($name)."' ".
							"AND res !='0'");
			$num_visits=$query_visits->fetchRow();
			$visits_array[]=array("$prev_path" => "$num_visits[0]");
			$i++;
		}
	}
	
	$i=0;
	while (list($path, $value) = @each ($visits_array[$i]))
	{
		if($value>$highest)
		{
			$highest=$value;
			$the_name=$path." [$highest]";
		}
	$i++;
	}
	return $the_name;
}


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