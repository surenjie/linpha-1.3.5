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

global $str_size_of_email, $print_error, $lostpw_email_error, $str_mail_too_big, $inst_status_3, $mail_sent_to;
global $str_recipient, $str_sender, $mail_form_subject, $mail_form_msg, $mail_send_link, $mail_format, $mail_format_is_txt, $mail_format_is_html;

$default_text_message = ($GLOBALS['img_view']->mode=='viewer' ? $prev_path."\n"."http://".$_SERVER["HTTP_HOST"].dirname($_SERVER["PHP_SELF"]).'/viewer.php?albid='.$_REQUEST['albid'].'&stage='.$_REQUEST['stage'].'&pn='.$_REQUEST['pn'] : '');

$mail_address = (isset($_SESSION['mail_address']) ? $_SESSION['mail_address'] : '');
$sender_address = (isset($_SESSION['sender_address']) ? $_SESSION['sender_address'] : '');
$subject = (isset($_SESSION['subject']) ? $_SESSION['subject'] : '');
$text_message = (isset($_SESSION['text_message']) ? $_SESSION['text_message'] : $default_text_message);

(@$_SESSION['mail_mode'] == "html") ? $html = "checked" : $txt = "checked";

if(isset($_GET['error_mail']))
{
	$mail_size = round($_SESSION['tot_filesize']*$_SESSION['overhead_base64']);
	echo '<h3><font color="red">';
	switch($_GET['error_mail'])
	{
	case 0:
		echo $mail_sent_to.': <span title="'.$_SESSION['mail_address'].'">';
		echo cut_overloaded_strings($_SESSION['mail_address'],18);
		echo '</span>';
		echo '<br /><br />';
		printf($str_size_of_email,nice_filesize($mail_size,1));
	break;		// success
	case 1: echo $print_error; break;	// no images selected
	case 2: echo $lostpw_email_error; break;	// error in mail()
	case 3: printf($str_mail_too_big,$max_mail_size,$mail_size); break;	// mail too big
	case 4: echo $inst_status_3; break;	// not everything filled in
	}
	echo '</font></h3>';
}
?>
<form name='mail_selected' action='<?php echo TOP_DIR; ?>/actions/basket_build_mail.php' method='POST'>
</div><div align='left'>
&nbsp;<?php echo $str_recipient; ?>:<br />
</div><div align='center'>
<input type='text' name='mail_address' value='<?php echo $mail_address; ?>' style='width:175'><br />
</div><div align='left'>
&nbsp;<?php echo $str_sender; ?>:<br />
</div><div align='center'>
<input type='text' name='sender_address' value='<?php echo $sender_address; ?>' style='width:175'><br />
</div><div align='left'>
&nbsp;<?php echo $mail_form_subject; ?><br />
</div><div align='center'>
<input type='text' name='subject' value='<?php echo $subject; ?>' style='width:175'><br />
</div><div align='left'>
&nbsp;<?php echo $mail_form_msg; ?><br />
</div><div align='center'>
<textarea name='text_message' style='width:175' rows='5' cols='40'><?php echo $text_message; ?></textarea><br />
</div>
<div align='left'>&nbsp;<?php echo $mail_format; ?><br/>
	<input type="radio" name="mail_mode" value="txt" <?php echo @$txt; ?>><?php echo $mail_format_is_txt; ?><br>
	<input type="radio" name="mail_mode" value="html" <?php echo @$html; ?>><?php echo $mail_format_is_html; ?><br>
</div><br>
<div align='center'>
<input type='submit' value='<?php echo $mail_send_link; ?>'>