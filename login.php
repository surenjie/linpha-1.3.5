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

if(!defined('TOP_DIR')) { define('TOP_DIR','.'); }

include_once(TOP_DIR.'/header.php');
?>
<tr>
	<td width='200' valign='top' class='leftmenu'>
	<div class='leftmenuhead'><?php echo $login_msg."\n"; ?></div>
	<br />
	<?php
	/* session login failure (prints error)*/
	if (@$_GET["fail"]=='true')
	{
	print("<div align='center'>$login_error</div>");
	}

	/* query Admin email address, used 3 times below */
	$adr_query=$GLOBALS['db']->Execute("SELECT email FROM ".PREFIX."users
						WHERE groups like '%;".get_group_id_from_name('admin').";%' ORDER BY id ASC");
	$data=$adr_query->FetchRow();
	$admin_address = $data[0];
	?>

	<form action='<?php echo TOP_DIR; ?>/verify.php' method='POST'
		name='login'>
	<div class='login'><?php echo $login_name; ?><br />
	<input type='text' name='user_name' style='width: 140px;'
		maxlength='20' value=''><br />
	<br />
	<?php echo $login_pass; ?><br />
	<input type='password' name='user_pass' style='width: 140px;'
		maxlength='20' value=''><br />
	<br />
	<?php
	if(read_config('autologin')) {
	?> <input type='checkbox' name='autologin' value='1'><?php echo $login_autlogin."\n"; ?>
	<?php putHelpButton('autologinuser')."\n\n"; ?> <br />
	<br />
	<?php
}
if(isset($_SERVER['HTTP_REFERER']))
{
echo "<input type='hidden' name='referer' value='".base64_encode($_SERVER['HTTP_REFERER'])."'>\n";
}
?> <input type='hidden' name='ref'
		value='<?php echo @htmlspecialchars($_GET["ref"], ENT_QUOTES); ?>'> <input
		class='linkbutton' type='submit' value='<?php echo $book_login; ?>'> <br />
	<br />
	<a class='leftmenu' href="<?php echo TOP_DIR; ?>/login.php?cmd=lostpw"><?php echo $lostpw_question; ?></a>
	<script type='text/javascript'>
					document.login.user_name.focus();
					</script></div>
	</form>
	</td>
	<td class='main_whitebg' colspan='2'><?php
	if((isset($_GET['cmd']) && $_GET['cmd']=="lostpw") OR (isset($_POST['name_or_email']) && $_POST['name_or_email']==""))
	{
	?> <br />
	&nbsp;<img src='<?php echo TOP_DIR; ?>/graphics/admintool.jpg'
		alt='login'> &nbsp;&nbsp;<font size='+1'><?php echo $lostpw_title; ?></font>
	<hr noshade>
	<br />
	<blockquote>
	<form name="lostpw" method="POST"
		action="<?php echo TOP_DIR; ?>/login.php"><?php echo $lostpw_type_user_or_email; ?><br />
	<input type="text" name="name_or_email" value=""><br />
	<br />
	<input type="submit" name="submit"
		value="<?php echo $mail_send_link; ?>"> <input type="hidden"
		name="cmd" value="lostpw_stage2"></form>
	<script type='text/javascript'>
				document.lostpw.name_or_email.focus();
				</script></blockquote>
				<?php
} elseif(isset($_POST['cmd']) && $_POST['cmd']=="lostpw_stage2") {
?> <br />
	&nbsp;<img src='<?php echo TOP_DIR; ?>/graphics/admintool.jpg'
		alt='login'> &nbsp;&nbsp;<font size='+1'><?php echo $lostpw_title; ?></font>
	<hr noshade>
	<br />
	<blockquote><?php
	$query_name_or_email = $GLOBALS['db']->Execute("SELECT email, ID FROM ".PREFIX."users WHERE ".
					"nickname = '".linpha_addslashes($_POST['name_or_email'])."' OR ".
					"email = '".linpha_addslashes($_POST['name_or_email'])."' LIMIT 1");
	if($row = $query_name_or_email->FetchRow())
	{
	$_SESSION['lost_pw_randompw'] = random_password(10);
	$_SESSION['lost_pw_email'] = $row[0];
	$_SESSION['lost_pw_userid'] = $row[1];
	$subject = "Linpha - $lostpw_title";
	$message = "Linpha - http://".$_SERVER["SERVER_NAME"].$_SERVER["PHP_SELF"]."\n\n";
	$message .= "$lostpw_email1\n\n".$_SESSION['lost_pw_randompw']."\n".$lostpw_email1_part2."\n\n".$lostpw_email1_part3;
	//echo $_SESSION['lost_pw_email'].'<br/>'.$subject.'<br/>'.$message.'<br/>'.$admin_address.'<br/>';

	if(@mail($_SESSION['lost_pw_email'], $subject, $message, "From: $admin_address"))
	{
	?>
	<form name="lostpw" method="POST"
		action="<?php echo TOP_DIR; ?>/login.php"><?php echo $lostpw_email_sent; ?><br />
		<?php echo $lostpw_should_receive; ?> <input type="text"
		name="lost_pw_code" value=""><br />
	<br />
	<input type="submit" name="submit" value="Submit"> <input type="hidden"
		name="cmd" value="lostpw_stage3"></form>
	<script type='text/javascript'>
					document.lostpw.lost_pw_code.focus();
					</script> <?php
} else {
echo $lostpw_email_error."<br/>";
}
} else {
?> <?php echo $lostpw_error_nothing_found; ?><br />
	<a href="javascript:history.go(-1)"><?php echo $lostpw_go_back; ?></a>
	<?php
}
?></blockquote>
<?php
} elseif(isset($_POST['cmd']) && $_POST['cmd']=="lostpw_stage3") {
?> <br />
	&nbsp;<img src='<?php echo TOP_DIR; ?>/graphics/admintool.jpg'
		alt='login'> &nbsp;&nbsp;<font size='+1'><?php echo $lostpw_title; ?></font>
	<hr noshade>
	<br />
	<blockquote><?php
	if($_SESSION['lost_pw_randompw'] == $_POST['lost_pw_code'])
	{
	$new_password = random_password(8);
	$update_pw = $GLOBALS['db']->Execute("UPDATE ".PREFIX."users SET password = '".md5($new_password)."'
									WHERE ID = '".linpha_addslashes($_SESSION['lost_pw_userid'])."'");

	$message = "Linpha - http://".$_SERVER["SERVER_NAME"].$_SERVER["PHP_SELF"]."\n\n";
	$message .= $lostpw_email2."\n\n".$new_password."\n\n".$lostpw_email2_part2;
	$subject = "Linpha - ".$lostpw_title.": ".$lostpw_new_password;
	mail($_SESSION['lost_pw_email'], $subject, $message, "From: $admin_address");
	echo $lostpw_successfully_changed."<br/>";

	unset($_SESSION['lost_pw_randompw']);
	unset($_SESSION['lost_pw_email']);
	unset($_SESSION['lost_pw_userid']);
	} else {
	?>
	<form name="lostpw" method="POST"
		action="<?php echo TOP_DIR; ?>/login.php"><?php echo $lostpw_error_wrong_code; ?><br />
		<?php echo $lostpw_enter_correct_code."\n"; ?> <input type="text"
		name="lost_pw_code" value=""><br />
	<br />
	<input type="submit" name="submit"
		value="<?php $submit_button_folder; ?>"> <input type="hidden"
		name="cmd" value="lostpw_stage3"></form>
	<script type='text/javascript'>
				document.lostpw.lost_pw_code.focus();
				</script> <?php
}
?></blockquote>
<?php
} else {
?> <br />
	&nbsp;<img src='<?php echo TOP_DIR; ?>/graphics/admintool.jpg'
		alt='login'> &nbsp;&nbsp;<font size='+1'><?php echo $login_info; ?></font>
	<hr noshade>
	<br />
	<blockquote>+&nbsp;<?php echo $login_admin_info; ?><br />
	+&nbsp;<?php echo $login_friend_account_info; ?><br />
	<?php

	if(!empty($admin_address) && strpos($admin_address,'@') !== false)
	{
	$pieces = explode ("@", $admin_address);
	?> +&nbsp;<?php echo $login_request_account_info; ?> <script
		language="JavaScript" type='text/javascript'>
			<!-- 
				var email2 = "<?php echo $pieces[1]; ?>";
				var email1 = "<?php echo $pieces[0]; ?>";
				var email = email1+"@"+email2;
				document.write('<a class="admin" href="mailto:'+email+'"><?php echo htmlspecialchars($login_request_target, ENT_QUOTES); ?><\/a>');
			//-->
			</script>
	<NOSCRIPT><?php
	echo $login_request_target.': NOSPAM_';
	echo str_replace('@',' _ AT _ ',$admin_address);
	?></NOSCRIPT>

	<?php
}
?> <br />
	</blockquote>
	<?php
}
?></td>
</tr>

<?php
include_once(TOP_DIR.'/footer.php');
?>
