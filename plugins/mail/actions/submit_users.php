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

if(!defined('TOP_DIR')) { define('TOP_DIR','../../..'); }

ini_set('include_path', TOP_DIR);	// set in include path because in db_connect.php isn't TOP_DIR used to include adodb.inc.php!

include_once(TOP_DIR.'/include/session.php');
include_once(language_file());

$mail_from_address=read_config('mail_from_address');

switch ($_POST["action"]) {
case 'join':
	$name   = $_POST["join_name"];
	$email  = $_POST["join_email"];
	$email2 = $_POST["join_email2"];

	if (empty($name) || empty($email) || empty($email2))
	{
		$redirector = 'mail_user_empty';
	} else
	{
		if ($email <> $email2)
		{
			$redirector = 'mail_user_no_match';
		} else
		{
			$email_query=$GLOBALS['db']->Execute("SELECT email FROM ".PREFIX."mail_list WHERE email = '".linpha_addslashes($email)."'");
			$emails=$email_query->FetchRow();

			if ($email == $emails[0])
			{
				$redirector = 'mail_user_exists';
			} else
			{
				$email_query=$GLOBALS['db']->Execute("INSERT INTO ".PREFIX."mail_list (name, email, date, active) ".
							"VALUES ('".linpha_addslashes($name)."', '".linpha_addslashes($email)."', '".time()."', '0')");

				if($email_query)
				{
					$message = sprintf($mail_activate_message,$name,md5($email));
					$mail_header = "From:".$mail_from_address."\nX-Mailer: PHP/".phpversion();
					mail($email, $mail_user_code_subject, $message, $mail_header);

					$redirector = 'mail_user_code_sent';
				}
			}
		}
	}
break;
case 'leave':
	$email  = $_POST["leave_email"];
	$email2 = $_POST["leave_email2"];
	if (empty($email) || empty($email2))
	{
		$redirector = 'mail_user_empty';
	} else
	{
		if ($email <> $email2)
		{
			$redirector = 'mail_user_no_match';
		} else
		{
			$email_query=$GLOBALS['db']->Execute("SELECT email FROM ".PREFIX."mail_list WHERE email = '".linpha_addslashes($email)."'");
			$emails=$email_query->FetchRow();

			if ($email == $emails[0])
			{
		  		$email_query=$GLOBALS['db']->Execute("DELETE FROM ".PREFIX."mail_list WHERE email = '".linpha_addslashes($email)."'");
				if ($email_query)
				{
					$redirector = 'mail_user_remove_ok';
				} else
				{
					$redirector = 'mail_user_remove_fail';
				}
			} else
			{
				$redirector = 'mail_user_email_not_found';
			}
		}
	}
break;
case 'activate':
	$email = $_POST['activate_email'];
	$code  = $_POST['activate_code'];

	if (empty($email) || empty($code))
	{
		$redirector = 'mail_user_empty';
	} else
	{
		$email_query=$GLOBALS['db']->Execute("SELECT email FROM ".PREFIX."mail_list WHERE email = '".linpha_addslashes($email)."'");
		$emails=$email_query->FetchRow();

		if ($code == md5($emails[0]))
		{
			$email_query=$GLOBALS['db']->Execute("UPDATE ".PREFIX."mail_list SET active='1' WHERE email = '".linpha_addslashes($email)."'");
			$email_query=$GLOBALS['db']->Execute("SELECT active FROM ".PREFIX."mail_list WHERE email = '".linpha_addslashes($email)."'");
			$emails=$email_query->FetchRow();
			if ($emails[0] == '1')
			{
				$redirector = 'mail_user_activated';
			} else {
				$redirector = 'mail_user_activate_error';
			}
		} else
		{
			$redirector = 'mail_user_activate_error';
		}
	}
break;
}

$str = 'Location: '.TOP_DIR.'/plugins/mail/form_users.php';
if(isset($redirector)) {
	$str .= '?redirector='.$redirector;
}
header($str);
?>