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
* LinPHA Logger Plugin by Vytautas Krivickas
*/

if(!defined('TOP_DIR')) { define('TOP_DIR','../..');}

include_once(TOP_DIR.'/plugins/log/logger.class.php');

$log_filename = read_config('log_filename');
$log_email = read_config('log_email');
$log_email_subject = read_config('log_email_subject');
$log_email_headers = read_config('log_email_headers');

create_log_table(); // create if needed
 
?>

<h1><?php echo $log_title; ?></h1>
<hr noshade>
<?php echo $wm_help_and_descr.': '; putHelpButton('log'); ?>
<br /><br />
<b>::&nbsp;<a class='admin' href='plugins/log/log_view.php'><?php echo "LinPHA Log Viewer"; ?></a>&nbsp;::</b><br />
<hr noshade>

<form name='log' method='POST' action='<?php echo TOP_DIR; ?>/plugins/log/update_settings.php?plugins=1&amp;page=log'>
<table class='admintable' width='100%' cellspacing='0'>
	<tr>
		<th class='maintable' colspan='2'><?php echo $log_options; ?></th>
	</tr>
    <tr>
        <td class='maintable' width='50%'>
            <?php echo $radio_file; ?>:
        </td>
        <td class='maintable' width='50%'>
            <input type="text" name="log_filename" value="<?php echo $log_filename; ?>" size="40" />
        </td>
    </tr>
    <tr>
        <td class='maintable'><?php echo $gb_email.' '.$str_recipient; ?>:</td>
        <td class='maintable'>
            <input type="text" name="log_email" value="<?php echo $log_email; ?>" size="40" />
        </td>
    </tr>
    <tr>
        <td class='maintable'><?php echo $gb_email.' '.$mail_form_subject; ?>:</td>
        <td class='maintable'>
            <input type="text" name="log_email_subject" value="<?php echo $log_email_subject; ?>" size="40" />
        </td>
    </tr>
    <tr>
        <td class='maintable'><?php echo $gb_email.' '.$str_extra_headers; ?>:</td>
        <td class='maintable'>
            <input type="text" name="log_email_headers" value="<?php echo $log_email_headers; ?>" size="40" />
        </td>
    </tr>
<?php
for($i=0; list($key,$value) = each($array_types); $i++)
{
    $selected_str = read_config('log_method_'.$value);
    $selected = explode(';',$selected_str);


    if($i % 2 == 0)
    {
        ?>
        <tr>
        <?php
    }
    else
    {
    }
    ?>
    <td>
        <table width='100%'>
            <tr>
                <td class='adminalternate' colspan='2'><b><?php echo $str_log_events[$value].' '.$str_events; ?></b></td>
            </tr>
            <tr>
                <td class='maintable'><?php echo $log_method_label; ?></td>
                <td class='maintable'>
            <?php
            form_generate_select('log_method_'.$value.'[]','5',' style="width: 100px" multiple',$selected,$array_methods);
            ?>
                </td>
            </tr>
        </table>
    </td>
    <?php
    if($i % 2 == 0)
    {
    }
    else
    {
        ?>
        </tr>
        <?php
    }
}

?>
 	<tr>
		<td class='maintable' colspan='2' align='center'>
			<input type='submit' value='<?php echo $submit_button_folder; ?>'>
		</td>
	</tr>
</table>
</form>

<?php

/**
 * create the database table (always) but only if not exists. this is an easy 
 * way to prevent an error in log viewer later if the DB doesn't exist.
 */

function create_log_table()
{
$query_tables = $GLOBALS['db']->MetaTables('TABLES'); 

while(list($key, $value) = each($query_tables))
{
    if($value == PREFIX.'log')
    {
        $found = true;
    }
}
    
if(!isset($found))
{
    $dbtype=read_config('db_type');
    if($dbtype == "mysql" || $dbtype == "sqlite")
    { 
        $update = $GLOBALS['db']->Execute("CREATE TABLE ".PREFIX."log (".
                    "time int(14) NOT NULL default '0', ".
                    "type varchar(20) NOT NULL default '', ".
                    "severity varchar(20) NOT NULL default '', ".
                    "message varchar(255) NOT NULL default '', ".
                    "ip varchar(15) NOT NULL default '' ".
               	    ")"
                );
    }
    else
    {
        $update = $GLOBALS['db']->Execute("CREATE TABLE ".PREFIX."log (".
                    "time INT NOT NULL default '0', ".
                    "type varchar(20) NOT NULL default '', ".
                    "severity varchar(20) NOT NULL default '', ".
                    "message varchar(255) NOT NULL default '', ".
                    "ip varchar(15) NOT NULL".
                    ")"
                );
    
    }
}
}
