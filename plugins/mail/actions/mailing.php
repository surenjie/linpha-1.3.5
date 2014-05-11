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

/******************************************************************************************************************
TODO:
    * Move utf8Encode() function to a seperate include file ???
    * Setup config variables for new settings (SMTP servers, Auth, From Address, etc.)
    * CharSet setting in the send mail form

******************************************************************************************************************/

if(!defined('TOP_DIR')) { define('TOP_DIR','../../..'); }

ini_set('include_path', TOP_DIR);	// set in include path because in db_connect.php isn't TOP_DIR used to include adodb.inc.php!

include_once(TOP_DIR.'/header.php');

require(TOP_DIR.'/include/class.phpmailer.php');

$mail_block_size=read_config('mail_block_size');
$mail_from_address=read_config('mail_from_address');

$DHTMLenabled       = true;     // Displays progress with DHTML
                                // set to FALSE for use with Netscape
?>

	<tr>
		<td>
			<table cellspacing='0' cellpadding='0' style='height: 100%;'>
				<tr>
					<td class='leftmenu'></td>
				</tr>
			</table>
		</td>
		<td class='adminpages' colspan='2' style='vertical-align: top;'>

<?php

function utf8Encode ($source) {
   $utf8Str = '';
   $entityArray = explode ("&#", $source);
   $size = count ($entityArray);
   for ($i = 0; $i < $size; $i++) {
       $subStr = $entityArray[$i];
       $nonEntity = strstr ($subStr, ';');
       if ($nonEntity !== false) {
           $unicode = intval (substr ($subStr, 0, (strpos ($subStr, ';') + 1)));
           // determine how many chars are needed to reprsent this unicode char
           if ($unicode < 128) {
               $utf8Substring = chr ($unicode);
           }
           else if ($unicode >= 128 && $unicode < 2048) {
               $binVal = str_pad (decbin ($unicode), 11, "0", STR_PAD_LEFT);
               $binPart1 = substr ($binVal, 0, 5);
               $binPart2 = substr ($binVal, 5);
          
               $char1 = chr (192 + bindec ($binPart1));
               $char2 = chr (128 + bindec ($binPart2));
               $utf8Substring = $char1 . $char2;
           }
           else if ($unicode >= 2048 && $unicode < 65536) {
               $binVal = str_pad (decbin ($unicode), 16, "0", STR_PAD_LEFT);
               $binPart1 = substr ($binVal, 0, 4);
               $binPart2 = substr ($binVal, 4, 6);
               $binPart3 = substr ($binVal, 10);
          
               $char1 = chr (224 + bindec ($binPart1));
               $char2 = chr (128 + bindec ($binPart2));
               $char3 = chr (128 + bindec ($binPart3));
               $utf8Substring = $char1 . $char2 . $char3;
           }
           else {
               $binVal = str_pad (decbin ($unicode), 21, "0", STR_PAD_LEFT);
               $binPart1 = substr ($binVal, 0, 3);
               $binPart2 = substr ($binVal, 3, 6);
               $binPart3 = substr ($binVal, 9, 6);
               $binPart4 = substr ($binVal, 15);
      
               $char1 = chr (240 + bindec ($binPart1));
               $char2 = chr (128 + bindec ($binPart2));
               $char3 = chr (128 + bindec ($binPart3));
               $char4 = chr (128 + bindec ($binPart4));
               $utf8Substring = $char1 . $char2 . $char3 . $char4;
           }
          
           if (strlen ($nonEntity) > 1)
               $nonEntity = substr ($nonEntity, 1); // chop the first char (';')
           else
               $nonEntity = '';

           $utf8Str .= $utf8Substring . $nonEntity;
       }
       else {
           $utf8Str .= $subStr;
       }
   }
   return $utf8Str;
}

if(in_group("mail")) {

	$subject = $_POST['mail_subject'];
	
	$email_query=$GLOBALS['db']->Execute("SELECT email, name FROM ".PREFIX."mail_list WHERE active = '1'");
	
	echo '<b>'.$mail_form_subject.'</b> '.$subject.'<br />';
	echo '<b>'.$mail_form_msg.'</b><br />'.nl2br($_POST['mail_message']).'<br /><br />';

	if ($DHTMLenabled) {
		echo '<SPAN ID="mailstatus"></SPAN><BR>';
	} else {
		echo '<b>'.$mail_sent_to.'</b>:<br />';
	}

	@ob_flush();
	flush();
	
	$language = get_language();
	
	/**
	 * translate linpha naming convention to the one which fits PHPMailer
	 */
	$translate_lang = array (  
		'English' => 'en',
		'German' => 'de',
		'Czech' => 'cz',
		'Dutch' => 'nl',
		'French' => 'fr',
		'Italian' => 'it',
		'Norwegian' => 'no',
		'Spanish' => 'es',
		'Swedish' => 'se');

	$successcount = 0;
	$successlist = '';
	$failedcount = 0;
	$failedlist = '';
	$totalemails = $email_query->RecordCount();

	if(isset($_SERVER['HTTPS'])) {
		$my_linpha = 'https://';
	} else {
		$my_linpha = 'http://';
	}
	$my_linpha .= $_SERVER['SERVER_NAME'].$_SERVER['SCRIPT_NAME'];
	$my_linpha  = str_replace('plugins/mail/actions/mailing.php','', $my_linpha);
	
	for($counter=1,$total_msgs=0 ; $emails=$email_query->FetchRow() ; $counter++, $total_msgs++)
	{
		$mail = new PHPMailer();

		$mail->SetLanguage($translate_lang[$language], TOP_DIR.'/lang/');
		$mail->IsSMTP();                                    // set mailer to use SMTP
		$mail->Host = "localhost";                       // specify main and backup server
		//  $mail->SMTPAuth = true;     // turn on SMTP authentication
		//  $mail->Username = "jswan";  // SMTP username
		//  $mail->Password = "secret"; // SMTP password

		$mail->From = $mail_from_address;
		$mail->FromName = "";
		$mail->CharSet="UTF-8";
		$mail->AddReplyTo($mail_from_address);
	
		$message = $_POST['mail_message'];
		$name  = $emails["name"];
		$email = $emails["email"];
		
		$message = str_replace('[Name]', $name, $message);
		$message = str_replace('[Email]', $email, $message);
		$message = str_replace('[My_LinPHA]', $my_linpha, $message);
		
		if ($DHTMLenabled) {
			$statusline  = "<TABLE class='admintable' width='100%' cellspacing='0'>";
			$statusline .= "<TR><TD class='maintable' width='30%'><B>".$mail_current_status."</B></TD><TD class='maintable'>".$mail_sending_to.$email."</TD></TR>";
			$statusline .= "<TR><TD class='maintable' width='30%'><B>".$mail_counters."</B></TD><TD class='maintable'>".$successcount." / ".$failedcount." / ".$totalemails."</TD></TR>";
			$statusline .= "</TABLE>";
			echo '<SCRIPT>document.getElementById("mailstatus").innerHTML="'.$statusline.'"</SCRIPT>';
		@ob_flush();
		flush();
		}

		$mail->Subject = utf8Encode($subject);

		$mail->AddAddress($email, utf8Encode($name));

		$mail->Body = utf8Encode($message);

		if(!$mail->Send())
		{
			if ($DHTMLenabled) {
				$failedcount++;	
				$failedlist .= '<b>'.$email.'</b> - '.$mail->ErrorInfo.'<BR>';			
			} else {
				echo $mail_send_fail.$email.$mail_mailer_error.$mail->ErrorInfo . "<br>";
			}
		    
		} else {
			if ($DHTMLenabled) {
				$successcount++;	
				$successlist .= $email.'<BR>';		
			} else {
				echo $mail_send_ok.$email."<br>";
			}
		}
		@ob_flush();
		flush();
		$mail = null;
	}

	if ($DHTMLenabled) {
		$statusline  = "<TABLE class='admintable' width='100%' cellspacing='0'>";
		$statusline .= "<TR><TD class='maintable' width='30%'><B>".$mail_current_status."</B></TD><TD class='maintable'>".$mail_all_complete."</TD></TR>";
		$statusline .= "<TR><TD class='maintable' width='30%'><B>".$mail_counters."</B></TD><TD class='maintable'>".$successcount." / ".$failedcount." / ".$totalemails."</TD></TR>";
		$statusline .= "</TABLE>";
		echo '<SCRIPT>document.getElementById("mailstatus").innerHTML="'.$statusline.'"</SCRIPT>';
		echo "<div align='center'><h3>".$mail_failed_list."</h3>".$failedlist."</div>";
		echo "<div align='center'><h3>".$mail_ok_list."</h3>".$successlist."</div>";
	} else {
		echo "<div align='center'><h1>".$mail_total_sent." ".$total_msgs."</h1></div>";
	}
}
?>

		</td>
	</tr>
<?php
include_once(TOP_DIR.'/footer.php');
?>
