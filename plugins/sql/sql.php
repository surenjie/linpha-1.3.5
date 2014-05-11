<?php
/*##############################################################
## mysql backup/restore script based on:
##
## backupDB() - MySQL database backup utility
## backupDB() by James Heinrich <info@silisoftware.com>
## available at http://www.silisoftware.com
##
## modified, extended, migrated bzrudi71
#################################################################*/

$version="1.2.2";

/* query Admin email address (in case of backup failure a notice is send) */
$adr_query=$GLOBALS['db']->Execute("SELECT email FROM ".PREFIX."users
						WHERE groups like '%;".get_group_id_from_name('admin').";%' ORDER BY id ASC");
$address=$adr_query->FetchRow();

// If any MySQL table errors occur, a notice will be sent here
if(!empty($address[0])):define('ADMIN_EMAIL', "$address[0]");endif;

/* get timestamp from config. we append this to the backup
filenames for security reasons...If missing store new value once*/
;
if(strlen($time_query=read_config("file_time"))>2)
{
	$backuptimestamp    = $time_query;
}else
{
	$backuptimestamp    = time();
	write_config("file_time", $backuptimestamp);
}

define('BACKTICKCHAR',   '');
define('QUOTECHAR',      '\'');
define('BUFFER_SIZE',    32768);
define('TABLES_PER_COL', 40);

$GZ_enabled         = (bool) function_exists('gzopen');

$DHTMLenabled       = TRUE;  // set $DHTMLenabled = FALSE to prevent JavaScript errors in Netscape
                             // set $DHTMLenabled = TRUE to get the nice DHTML display in IE 4.0+

/* check for OS to make sure the right line terminator is used */
(strtoupper(substr(PHP_OS,0,3)) == "WIN") ? $LineTerminator = "\r\n" : $LineTerminator ="\n";

//$LineTerminator     = "\n";  // set to "\n"   for UNIX-style
                             // set to "\r\n" for Windows-style
                             // set to "\r"   for Macintosh-style

$fullbackupfilename = 'db_backup_full-'.$backuptimestamp.'.sql'.($GZ_enabled ? '.gz' : '');
$partbackupfilename = 'db_backup_partial-'.$backuptimestamp.'.sql'.($GZ_enabled ? '.gz' : '');
$strubackupfilename = 'db_backup_structure-'.$backuptimestamp.'.sql'.($GZ_enabled ? '.gz' : '');
$tempbackupfilename = 'db_backup.temp.sql'.($GZ_enabled ? '.gz' : '');
$db_connect_filename= 'db_connect.'.$backuptimestamp.'.php';

/* OK, now we have to rebuild the "real" path to the users webroot. This is some kind
of trick but works. The original way failed on vservers and ~xyz homes ;-) */
// we use the scriptname to build the path
/*$scriptname=$_SERVER['PATH_TRANSLATED'];
if(empty($scriptname)): $scriptname=$HTTP_SERVER_VARS['PATH_TRANSLATED']; endif; //globals on*/

$backupabsolutepath = realpath(TOP_DIR).'/sql/';

/* db_connect.php file backup (we do this silent as it's not of users interest)*/
@copy($backupabsolutepath.'db_connect.php', $backupabsolutepath."$db_connect_filename");
chmod($backupabsolutepath.$db_connect_filename,0600);	// change permissions (SECURITY)


if (!function_exists('getmicrotime')) {
	function getmicrotime() {
		list($usec, $sec) = explode(' ', microtime());
		return ((float) $usec + (float) $sec);
	}
}

echo "<blockquote>";
print("<H2>$mysql_info_header $version</H2>");

if (isset($_REQUEST['StartBackup'])) {
	echo '<A class="admin" HREF='.@$PHP_SELF.'?page=sql&plugins=1>'.$mysql_cancel.'</A><BR><BR>';
}
if ($DHTMLenabled) {
	echo '<SPAN ID="statusinfo"></SPAN>';
} else {
	print("$mysql_DHTML_hint");
}

ob_flush();
flush();

if (isset($_REQUEST['StartBackup']) && ($_REQUEST['StartBackup'] == 'partial')) {

	echo '<SCRIPT LANGUAGE="JavaScript">'.$LineTerminator.'<!--'.$LineTerminator.'function CheckAll(checkornot) {'.$LineTerminator;
	echo 'for (var i = 0; i < document.SelectedTablesForm.elements.length; i++) {'.$LineTerminator;
	echo '  document.SelectedTablesForm.elements[i].checked = checkornot;'.$LineTerminator;
	echo '}'.$LineTerminator.'}'.$LineTerminator.'-->'.$LineTerminator.'</SCRIPT>';

	echo '<FORM NAME="SelectedTablesForm" METHOD="POST" ACTION="'.@$PHP_SELF.'?page=sql&plugins=1">';
	$db_name_list = mysql_list_dbs();
	while (list($dbname) = mysql_fetch_array($db_name_list)) {
		if (!defined('DB_NAME') || (defined('DB_NAME') && (DB_NAME == $dbname))) {
			$tables = mysql_list_tables($dbname);
			if (is_resource($tables)) {
				echo '<TABLE class=admintable><TR><TH class=maintable COLSPAN="'.ceil(mysql_num_rows($tables) / TABLES_PER_COL).'"><B>'.$dbname.'</B></TH></TR><TR><TD class=admintable>';
				$tablecounter = 0;
				while (list($tablename) = mysql_fetch_array($tables)) {
					if ($tablecounter++ >= TABLES_PER_COL) {
						echo '</TD><TD class=admintable>';
						$tablecounter = 0;
					}
					$SQLquery = 'SELECT COUNT(*) AS num FROM '.$tablename;
					mysql_select_db($dbname);
					$result = mysql_query($SQLquery);
					$row = mysql_fetch_array($result);
					echo '<INPUT TYPE="CHECKBOX" NAME="SelectedTables['.htmlentities($dbname, ENT_QUOTES).'][]" VALUE="'.$tablename.'" CHECKED>'.$tablename.' ('.$row['num'].')<BR>';
				}
				echo '</TD></TR></TABLE><BR>';
			}
		}
	}
	print("<INPUT TYPE='BUTTON' OnClick='CheckAll(true)' VALUE='$mysql_select_all'>");
	print("<INPUT TYPE='BUTTON' OnClick='CheckAll(false)' VALUE='$mysql_deselect_all'>");
	echo '<INPUT TYPE="HIDDEN" NAME="StartBackup" VALUE="complete">';
	print("<INPUT TYPE='SUBMIT' NAME='SelectedTablesOnly' VALUE='$mysql_create_backup'></FORM>");
	print("<A class='admin' HREF='admin.php?page=sql&plugins=1'>$mysql_back_menu</A>");

} else if (isset($_REQUEST['StartBackup'])) {

	/* OK do it the local file path way. fails at servers using "private homes i.e ~bzrudi/ */
	if (($GZ_enabled && ($zp = gzopen($backupabsolutepath.$tempbackupfilename, 'wb')))
	|| (!$GZ_enabled && ($fp = fopen($backupabsolutepath.$tempbackupfilename, 'wb')))){
		$fileheaderline = '# LinPHA MySQL backup v'.$version.''.$LineTerminator.'# mySQL backup ('.date('F j, Y g:i a').')   Type = ';
		if ($GZ_enabled) {
			gzwrite($zp, $fileheaderline, strlen($fileheaderline));
		} else {
			fwrite($fp, $fileheaderline, strlen($fileheaderline));
		}
		if ($_REQUEST['StartBackup'] == 'structure') {

			if ($GZ_enabled) {
				gzwrite($zp, 'Structure Only'.$LineTerminator.$LineTerminator, strlen('Structure Only'.$LineTerminator.$LineTerminator));
			} else {
				fwrite($fp, 'Structure Only'.$LineTerminator.$LineTerminator, strlen('Structure Only'.$LineTerminator.$LineTerminator));
			}
			$backuptype = 'full';
			unset($SelectedTables);
			$db_name_list = mysql_list_dbs();
			while (list($dbname) = mysql_fetch_array($db_name_list)) {
				if (!defined('DB_NAME') || (defined('DB_NAME') && (DB_NAME == $dbname))) {
					$tables = mysql_list_tables($dbname);
					if (is_resource($tables)) {
						$tablecounter = 0;
						while (list($tablename) = mysql_fetch_array($tables)) {
							$SelectedTables["$dbname"][] = $tablename;
						}
					}
				}
			}

		} else if (isset($_REQUEST['SelectedTables']) && is_array($_REQUEST['SelectedTables'])) {

			if ($GZ_enabled) {
				gzwrite($zp, 'Selected Tables Only'.$LineTerminator.$LineTerminator, strlen('Selected Tables Only'.$LineTerminator.$LineTerminator));
			} else {
				fwrite($fp, 'Selected Tables Only'.$LineTerminator.$LineTerminator, strlen('Selected Tables Only'.$LineTerminator.$LineTerminator));
			}
			$backuptype = 'partial';
			$SelectedTables = $_REQUEST['SelectedTables'];

		} else {

			if ($GZ_enabled) {
				gzwrite($zp, 'Complete'.$LineTerminator.$LineTerminator, strlen('Complete'.$LineTerminator.$LineTerminator));
			} else {
				fwrite($fp, 'Complete'.$LineTerminator.$LineTerminator, strlen('Complete'.$LineTerminator.$LineTerminator));
			}
			$backuptype = 'full';
			unset($SelectedTables);
			$db_name_list = mysql_list_dbs();
			while (list($dbname) = mysql_fetch_array($db_name_list)) {
				if (!defined('DB_NAME') || (defined('DB_NAME') && (DB_NAME == $dbname))) {
					$tables = mysql_list_tables($dbname);
					if (is_resource($tables)) {
						$tablecounter = 0;
						while (list($tablename) = mysql_fetch_array($tables)) {
							$SelectedTables["$dbname"][] = $tablename;
						}
					}
				}
			}

		}

		if (!$DHTMLenabled) {
			print("$mysql_table_checks <BR><BR>");
		}
		$TableErrors = array();
		foreach ($SelectedTables as $dbname => $selectedtablesarray) {
			mysql_select_db($dbname);
			foreach ($selectedtablesarray as $selectedtablename) {
				if ($DHTMLenabled) {
					echo '<SCRIPT>statusinfo.innerHTML="'.$mysql_table_check.' <B>'.$dbname.'.'.$selectedtablename.'</B>"</SCRIPT>';
				}
				ob_flush();
				flush();
				$result = mysql_query('CHECK TABLE '.$selectedtablename);
				while ($row = mysql_fetch_array($result)) {
					if ($row['Msg_text'] == 'OK') {
						mysql_query('OPTIMIZE TABLE '.$selectedtablename);
					} else {
						$TableErrors[] = $row['Table'].' ['.$row['Msg_type'].'] '.$row['Msg_text'];
						if (!isset($TableErrorTables) || !is_array($TableErrorTables) || !in_array($dbname.'.'.$selectedtablename, $TableErrorTables)) {
							$TableErrorDB[]     = $dbname;
							$TableErrorTables[] = $selectedtablename;
						}
					}
				}
			}
		}
		if ($DHTMLenabled) {
			echo '<SCRIPT>statusinfo.innerHTML=""</SCRIPT>';
		}

		if (isset($TableErrorTables) && is_array($TableErrorTables)) {
			for ($t = 0; $t < count($TableErrorTables); $t++) {
				mysql_select_db($TableErrorDB["$t"]);
				$fixresult = mysql_query('REPAIR TABLE '.$TableErrorTables["$t"].' EXTENDED');
				while ($fixrow = mysql_fetch_array($fixresult)) {
					$TableErrors[] = $fixrow['Table'].' ['.$fixrow['Msg_type'].'] '.$fixrow['Msg_text'];
				}
			}
		}

		if (count($TableErrors) > 0) {
			if (defined('ADMIN_EMAIL') && ADMIN_EMAIL) {
				mail(ADMIN_EMAIL, 'MySQL Table Error Report', implode($LineTerminator.' * ', $TableErrors));
			}
			echo '<B>TABLE ERRORS!</B><UL><LI>'.implode('</LI><LI>', $TableErrors).'</LI></UL>';
			exit;
		}

		if ($DHTMLenabled) {
			echo '<BR><B><SPAN ID="topprogress">'.$mysql_progress.'</SPAN></B><BR>';
		}
		$overallrows = 0;
		foreach ($SelectedTables as $dbname => $value) {
			mysql_select_db($dbname);
			echo '<TABLE class=admintable><TR><TH class=maintable COLSPAN="'.ceil(count($SelectedTables["$dbname"]) / TABLES_PER_COL).'"><B>'.$dbname.'</B></TH></TR><TR><TD class=admintable>';
			$tablecounter = 0;
			for ($t = 0; $t < count($SelectedTables["$dbname"]); $t++) {
				if ($tablecounter++ >= TABLES_PER_COL) {
					echo '</TD><TD class=admintable>';
					$tablecounter = 1;
				}
				$SQLquery = 'SELECT COUNT(*) AS num FROM '.$SelectedTables["$dbname"]["$t"];
				$result = mysql_query($SQLquery);
				$row = mysql_fetch_array($result);
				$rows["$t"] = $row['num'];
				$overallrows += $rows["$t"];
				echo '<SPAN ID="rows_'.$dbname.'_'.$SelectedTables["$dbname"]["$t"].'">'.$SelectedTables["$dbname"]["$t"].' ('.number_format($rows["$t"]).' records)</span><BR>';
			}
			echo '</TD></TR></TABLE><BR>';
		}

		$starttime = getmicrotime();
		$alltablesstructure = '';
		foreach ($SelectedTables as $dbname => $value) {
			mysql_select_db($dbname);
			for ($t = 0; $t < count($SelectedTables["$dbname"]); $t++) {
				if ($DHTMLenabled) {
					echo '<SCRIPT>statusinfo.innerHTML = " '.$mysql_struct_msg.' <B>'.$dbname.'.'.$SelectedTables["$dbname"]["$t"].'</B>"</SCRIPT>';
				}

				$fieldnames     = array();
				$structurelines = array();
				$result = mysql_query('SHOW FIELDS FROM '.$SelectedTables["$dbname"]["$t"]);
				while ($row = mysql_fetch_array($result)) {
					$structureline  = $row['Field'];
					$structureline .= ' '.$row['Type'];
					$structureline .= ' '.($row['Null'] ? '' : 'NOT ').'NULL';
					if (isset($row['Default'])) {
						switch ($row['Type']) {
							case 'tinytext':
							case 'tinyblob':
							case 'text':
							case 'blob':
							case 'mediumtext':
							case 'mediumblob':
							case 'longtext':
							case 'longblob':
								// no default values
								break;
							default:
								$structureline .= ' default \''.$row['Default'].'\'';
								break;
						}
					}
					$structureline .= ($row['Extra'] ? ' '.$row['Extra'] : '');
					$structurelines[] = $structureline;

					$fieldnames[] = $row['Field'];
				}
				mysql_free_result($result);

				$tablekeys    = array();
				$uniquekeys   = array();
				$fulltextkeys = array();
				$result = mysql_query('SHOW KEYS FROM '.$SelectedTables["$dbname"]["$t"]);
				while ($row = mysql_fetch_array($result)) {
					$uniquekeys[$row['Key_name']] = FALSE;
					if ($row['Non_unique'] == 0) {
						$uniquekeys[$row['Key_name']] = TRUE;
					}
					$fulltextkeys[$row['Key_name']] = FALSE;
					if ($row['Comment'] == 'FULLTEXT') {
						$fulltextkeys[$row['Key_name']] = TRUE;
					}
					$tablekeys[$row['Key_name']][$row['Seq_in_index']] = $row['Column_name'];
					ksort($tablekeys[$row['Key_name']]);
				}
				mysql_free_result($result);
				foreach ($tablekeys as $keyname => $keyfieldnames) {
					$structureline  = '';
					if ($keyname == 'PRIMARY') {
						$structureline .= 'PRIMARY ';
					} else {
						$structureline .= ($fulltextkeys[$keyname] ? 'FULLTEXT ' : '');
						$structureline .= ($uniquekeys[$keyname]   ? 'UNIQUE '   : '');
					}
					$structureline .= 'KEY'.(($keyname == 'PRIMARY') ? '' : ' '.$keyname);
					$structureline .= ' ('.implode(',', $keyfieldnames).')';
					$structurelines[] = $structureline;
				}
				$tablestructure  = 'DROP TABLE IF EXISTS '.$dbname.'.'.$SelectedTables["$dbname"]["$t"].';#%%'.$LineTerminator.'';
				$tablestructure .= 'CREATE TABLE '.$dbname.'.'.$SelectedTables["$dbname"]["$t"].' ('.$LineTerminator;
				$tablestructure .= '  '.implode(','.$LineTerminator.'  ', $structurelines).$LineTerminator;
				$tablestructure .= ');#%%'.$LineTerminator.$LineTerminator;

				$alltablesstructure .= str_replace(' ,', ',', $tablestructure);
				//$tablestructure=' DROP TABLE IF EXISTS '.$dbname.'.'.$SelectedTables["$dbname"]["$t"].';#%%.'.$LineTerminator.'';
			} // end table structure backup
		}
		if ($GZ_enabled) {
			//gzwrite($zp, $droptable.$LineTerminator, strlen($droptable) + strlen($LineTerminator));
			gzwrite($zp, $alltablesstructure.$LineTerminator, strlen($alltablesstructure) + strlen($LineTerminator));
		} else {
			fwrite($fp, $alltablesstructure.$LineTerminator, strlen($alltablesstructure) + strlen($LineTerminator));
		}

		if ($DHTMLenabled) {
			echo '<SCRIPT>statusinfo.innerHTML=""</SCRIPT>';
		}
		if ($_REQUEST['StartBackup'] != 'structure') {
			$processedrows    = 0;
			foreach ($SelectedTables as $dbname => $value) {
				mysql_select_db($dbname);
				for ($t = 0; $t < count($SelectedTables["$dbname"]); $t++) {
					$result = mysql_query('SELECT * FROM '.$SelectedTables["$dbname"]["$t"]);
					$rows["$t"] = mysql_num_rows($result);
					if ($rows["$t"] > 0) {
						$tabledatadumpline = '# '.$mysql_in_file_dump_msg.' '.$dbname.'.'.$SelectedTables["$dbname"]["$t"].$LineTerminator;
						if ($GZ_enabled) {
							gzwrite($zp, $tabledatadumpline, strlen($tabledatadumpline));
						} else {
							fwrite($fp, $tabledatadumpline, strlen($tabledatadumpline));
						}
					}
					unset($fieldnames);
					for ($i = 0; $i < mysql_num_fields($result); $i++) {
						$fieldnames[] = mysql_field_name($result, $i);
					}
					if ($_REQUEST['StartBackup'] == 'complete') {
						$insertstatement = 'INSERT INTO '.BACKTICKCHAR.$SelectedTables["$dbname"]["$t"].BACKTICKCHAR.' ('.implode(', ', $fieldnames).') VALUES (';
					} else {
						$insertstatement = 'INSERT INTO '.BACKTICKCHAR.$SelectedTables["$dbname"]["$t"].BACKTICKCHAR.' VALUES (';
					}
					$currentrow       = 0;
					$thistableinserts = '';
					while ($row = mysql_fetch_array($result)) {
						unset($valuevalues);
						foreach ($fieldnames as $key => $val) {
							$valuevalues[] = mysql_escape_string($row["$key"]);
						}
						$thistableinserts .= $insertstatement.QUOTECHAR.implode(QUOTECHAR.', '.QUOTECHAR, $valuevalues).QUOTECHAR.');#%%'.$LineTerminator;

						if (strlen($thistableinserts) >= BUFFER_SIZE) {
							if ($GZ_enabled) {
								gzwrite($zp, $thistableinserts, strlen($thistableinserts));
							} else {
								fwrite($fp, $thistableinserts, strlen($thistableinserts));
							}
							$thistableinserts = '';
						}
						if ((++$currentrow % 1000) == 0) {
							set_time_limit(60);
							if ($DHTMLenabled) {
								echo '<SCRIPT>rows_'.$dbname.'_'.$SelectedTables["$dbname"]["$t"].'.innerHTML="<B>'.$SelectedTables["$dbname"]["$t"].' ('.number_format($rows["$t"]).' records, ['.number_format(($currentrow / $rows["$t"])*100).'%])</B>"</SCRIPT>';
								$elapsedtime = getmicrotime() - $starttime;
								$percentprocessed = ($processedrows + $currentrow) / $overallrows;
								echo '<SCRIPT>topprogress.innerHTML = "'.$mysql_progress.' '.number_format($processedrows + $currentrow).' / '.number_format($overallrows).' ('.number_format($percentprocessed * 100, 1).'% done) ['.FormattedTimeRemaining($elapsedtime).' elapsed';
								if (($percentprocessed > 0) && ($percentprocessed < 1)) {
									echo ', '.FormattedTimeRemaining(abs($elapsedtime - ($elapsedtime / $percentprocessed))).' remaining';
								}
								echo ']"</SCRIPT>';
								ob_flush();
								flush();
							}
						}
					}
					if ($DHTMLenabled) {
						echo '<SCRIPT>rows_'.$dbname.'_'.$SelectedTables["$dbname"]["$t"].'.innerHTML="'.$SelectedTables["$dbname"]["$t"].' ('.number_format($rows["$t"]).' records, [100%])"</SCRIPT>';
						$processedrows += $rows["$t"];
					}
					if ($GZ_enabled) {
						gzwrite($zp, $thistableinserts.$LineTerminator.$LineTerminator, strlen($thistableinserts) + strlen($LineTerminator) + strlen($LineTerminator));
					} else {
						fwrite($fp, $thistableinserts.$LineTerminator.$LineTerminator, strlen($thistableinserts) + strlen($LineTerminator) + strlen($LineTerminator));
					}
				}
			}
		}
		if ($GZ_enabled) {
			gzclose($zp);
		} else {
			fclose($fp);
		}

		echo '<BR>'.$mysql_back_complete.' '.FormattedTimeRemaining(getmicrotime() - $starttime, 2, $mysql_days_last, $mysql_hours_last, $mysql_min_last, $mysql_sec_last).'.<BR>';
		echo '<A class="admin" HREF="';
		if ($_REQUEST['StartBackup'] == 'structure') {
			if (file_exists($backupabsolutepath.$strubackupfilename)) {
				unlink($backupabsolutepath.$strubackupfilename); // Windows won't allow overwriting via rename
			}
			rename($backupabsolutepath.$tempbackupfilename, $backupabsolutepath.$strubackupfilename);
			echo 'sql/'.$strubackupfilename.'"><B>'.$strubackupfilename.'</B> ('.nice_filesize(filesize($backupabsolutepath.$strubackupfilename), 2);
		} else if ($backuptype == 'full') {
			if (file_exists($backupabsolutepath.$fullbackupfilename)) {
				unlink($backupabsolutepath.$fullbackupfilename); // Windows won't allow overwriting via rename
			}
			rename($backupabsolutepath.$tempbackupfilename, $backupabsolutepath.$fullbackupfilename);
			echo 'sql/'.$fullbackupfilename.'"><B>'.$fullbackupfilename.'</B> ('.nice_filesize(filesize($backupabsolutepath.$fullbackupfilename), 2);
		} else {
			if (file_exists($backupabsolutepath.$partbackupfilename)) {
				unlink($backupabsolutepath.$partbackupfilename); // Windows won't allow overwriting via rename
			}
			rename($backupabsolutepath.$tempbackupfilename, $backupabsolutepath.$partbackupfilename);
			echo 'sql/'.$partbackupfilename.'"><B>'.$partbackupfilename.'</B> ('.nice_filesize(filesize($backupabsolutepath.$partbackupfilename), 2);
		}
		echo ')</A><BR><BR><A class="admin" HREF="admin.php?page=sql&plugins=1">'.$mysql_back_menu_long.'</A><BR>';
	} else {
		echo ''.$mysql_open_warn1.''.$backupabsolutepath.$tempbackupfilename.' '.$mysql_open_warn2.'';
	}

}
/*#########################################################
## Optimize tables
#########################################################*/
elseif(@$_GET['job']=="optimize")
{
	print("<BR><B>$optimize_tables</B><hr noshade>");

	$db_name_list = mysql_list_dbs();

	while (list($dbname) = mysql_fetch_array($db_name_list)) {
	{
		$tables = @mysql_list_tables($dbname);
		if (!empty($tables))
		{

		/* prevent optimizing and display of tables if we have now access rights */
		$columns = @mysql_num_rows($tables);

		if($columns>0)
		{
			echo '<TABLE class=admintable><TR><TH class=maintable COLSPAN="4" align="center"><B>'.$dbname.'</B></TH></TR>';
			print("<tr><td class=admintable><b>$opt_table_name</b></td><td class=admintable><b>$opt_table_check</b></td><td class=admintable><b>$opt_table_optimize</b></td><td class=admintable><b>$opt_table_msg</b></td></tr>");
			print("<tr>");
			while (list($tablename) = mysql_fetch_row($tables))
			{
				print("<td class=admintable>$tablename</td>");

				$check_result = mysql_query('CHECK TABLE '.$tablename);
				while ($row = mysql_fetch_array($check_result))
				{
					if ($row['Msg_text']== "OK")
					{
						print("<td class=admintable style='background-color: #32CD32;'>$row[Msg_text]</td>");
						/* check went OK doing optimize */
						if(mysql_query('OPTIMIZE TABLE '.$tablename))
						{
							print("<td class=admintable style='background-color: #32CD32;'>OK</td>");
						}else
						{
							print("<td class=admintable style='background-color: #FF0000;'>ERROR</td>");
						}
					}
					if ($row['Msg_type']):print("<td class=admintable>$row[Msg_type]</td>");endif;
				}
				print("</tr>");
			}
			print("</tr><br>");
			print("</table>");
			}
		}
	}
}
print("<br><hr noshade>");
echo '<BR><A class="admin" HREF="admin.php?page=sql&plugins=1">'.$mysql_back_menu_long.'</A><BR><BR><BR>';
}

/*#########################################################
## Restore DB
#########################################################*/
elseif(@$_GET['job']=="restore")
{
if (!empty($_GET['restorefile']))
{
	if ($GZ_enabled)
	{
		$filename=gzread(gzopen($backupabsolutepath.$_GET['restorefile'], "rb"), filesize($backupabsolutepath.$_GET['restorefile']));
	}
	else
	{
		$filename=fread(fopen($backupabsolutepath.$_GET['restorefile'], "rb"), filesize($backupabsolutepath.$_GET['restorefile']));
	}

	//if(eregi(";#%%\n", $query_content));
	$query_content=explode(";#%%$LineTerminator",$filename);

	while(list($id,$query_value)=each($query_content))
	{
	//if(eregi(";#%%\n", $query_content));
		mysql_query($query_value) or die(mysql_error());
	}
	print("<b>$_GET[restorefile] $restore_success</b>");
}
else
{
	print("$restore_error");
}
}

else {  // !$_REQUEST['StartBackup']

	/*#############################################################
	### BACKUP part
	#############################################################*/
	echo "<B>$backup</B><hr noshade>";
	if (file_exists($backupabsolutepath.$fullbackupfilename))
	{
		echo ''.$mysql_date_msg.' '.gmdate('F j, Y g:ia T', time() + date('Z')).'<BR>';
		echo ''.$mysql_last_backup.'';
		$lastbackuptime = filemtime($backupabsolutepath.$fullbackupfilename);
		echo gmdate('F j, Y g:ia T', $lastbackuptime + date('Z'));
		echo ' (<B>'.FormattedTimeRemaining(time() - $lastbackuptime, 1, $mysql_days_last, $mysql_hours_last, $mysql_min_last, $mysql_sec_last).'</B> '.$ago.')<BR>';
		if ((time() - $lastbackuptime) < 86400)
		{
			print ("$mysql_backup_hint<BR>");
		}
	echo '<BR><A class="admin" HREF="'.'sql/'.$fullbackupfilename.'">'.$mysql_down_backup.'('.nice_filesize(filesize($backupabsolutepath.$fullbackupfilename), 2).')</A> '.$mysql_down_backup1.'';
	}
	else
	{
		print("<br>$mysql_unknown_backup:");
	}
	if(file_exists($backupabsolutepath.$partbackupfilename))
	{
		echo '<BR><A class="admin" HREF="'.'sql/'.$partbackupfilename.'">'.$mysql_down_backup_part.'('.nice_filesize(filesize($backupabsolutepath.$partbackupfilename), 2).')</A> '.$mysql_down_backup1.'';
	}
	if(file_exists($backupabsolutepath.$strubackupfilename))
	{
		echo '<BR><A class="admin" HREF="'.'sql/'.$strubackupfilename.'">'.$mysql_down_backup_struct.'('.nice_filesize(filesize($backupabsolutepath.$strubackupfilename), 2).')</A> '.$mysql_down_backup1.'';
	}
	echo '<BR><BR><A class="admin" HREF="'.@$PHP_SELF.'?StartBackup=complete&page=sql&plugins=1"><B>'.$mysql_href_recom.'<font color="#FF0000">*</font></font></B></A><BR>';
	echo '<A class="admin" HREF="'.@$PHP_SELF.'?StartBackup=standard&page=sql&plugins=1">'.$mysql_href_standard.'</A><BR>';
	echo '<A class="admin" HREF="'.@$PHP_SELF.'?StartBackup=partial&page=sql&plugins=1">'.$mysql_href_partial.'</A><BR>';
	echo '<A class="admin" HREF="'.@$PHP_SELF.'?StartBackup=structure&page=sql&plugins=1">'.$mysql_href_structure.'</A><BR>';

	/*#############################################################
	### RESTORE part
	#############################################################
	print("<BR><B>$restore</B><hr noshade>");
	echo "DO NOT USE, BROKEN!!...<br>";
	//global $restorefile;

	if(file_exists($backupabsolutepath.$fullbackupfilename))
	{
		print("<A class='admin' HREF='$PHP_SELF?page=sql&plugins=1&job=restore&restorefile=$fullbackupfilename'>$restore_last_fullback </a>");
		$last_full_time = filemtime($backupabsolutepath.$fullbackupfilename);
		$form_time=gmdate('F j, Y ', $last_full_time + date('Z'));
		$size=nice_filesize(filesize($backupabsolutepath.$fullbackupfilename), 2);

		print("&nbsp;($form_time $size) <br>");
	}

	if(file_exists($backupabsolutepath.$partbackupfilename))
	{
		print("<A class='admin' HREF='$PHP_SELF?page=sql&plugins=1&job=restore&restorefile=$partbackupfilename'>$restore_last_partback </a>");
		$last_part_time = filemtime($backupabsolutepath.$partbackupfilename);
		$form_time=gmdate('F j, Y ', $last_part_time + date('Z'));
		$size=nice_filesize(filesize($backupabsolutepath.$partbackupfilename), 2);

		print("&nbsp;($form_time $size) <br>");
	}*/
	
	/*#############################################################
	### OPTIMIZE part
	#############################################################*/
	print("<BR><B>$optimize</B><hr noshade>");
	print("<A class='admin' HREF='".@$PHP_SELF."?page=sql&plugins=1&job=optimize'>$opt_start_msg</A><BR><br>");

	/* full backup hint message */
	echo '<font color="#FF0000"><b>* </b></font>'.$fullback_hint_msg.'<br><br>';
	echo "</blockquote>";
}

function FormattedTimeRemaining($seconds, $precision=1, $mysql_days_last, $mysql_hours_last, $mysql_min_last, $mysql_sec_last) {
	if ($seconds > 86400) {
		return number_format($seconds / 86400, $precision)." $mysql_days_last";
	} else if ($seconds > 3600) {
		return number_format($seconds / 3600, $precision)." $mysql_hours_last";
	} else if ($seconds > 60) {
		return number_format($seconds / 60, $precision)." $mysql_min_last";
	}
	return number_format($seconds, $precision)." $mysql_sec_last";
}
?>
