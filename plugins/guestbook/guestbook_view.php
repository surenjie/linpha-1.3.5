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

if(!defined('TOP_DIR')) { define('TOP_DIR','../..'); }

ini_set('include_path', TOP_DIR);	// set in include path because in db_connect.php isn't TOP_DIR used to include adodb.inc.php!

include_once(TOP_DIR.'/header.php');

$mess_per_page=read_config("gb_max_pages");

include_once(TOP_DIR.'/include/left_menu.class.php');
	$menu = new LeftMenuView();
	$menu->generateTableHead();
	$menu->buildMenu();
	$menu->generateTableFooter();
	
?>
	<td class='adminpages' colspan='2' style='vertical-align: top;'>

<?php
/**
 * Guestbook view starts here
 */
if(!isset($_GET['mode'])){$_GET['mode']="view";} // set default to view mesages

// no anonymos entry with direct browser call (Thanks to jst71)
if((!$passed) && (!$gb_anon_posts)) {$_GET['mode']="view";} 

/**
 * Exit if plugin is disabled
 */
exit_if_not_active('guestbook');


switch($_GET['mode']){
/**
 * add new guestbook entry
*/
case("insert"):
	echo "<script language=\"JavaScript\" type=\"text/javascript\">";
	echo "function icon(theicon) {";
	echo 'document.form.comment.value += " "+theicon;';
	echo 'document.form.comment.focus(); ';
	echo '} ';
	echo "</script>";
	
	echo "<div align='center'>
		<form action='guestbook_view.php?mode=store' name=form method=post>
		<table cellspacing=0 cellpadding=0 border=0 width='75%' align='center' style='height: 25px;'>
		<tr>
		<td class='subfoldertable' width='25%' valign=top align=center><b>".$gb_sign."</b></td>
		</tr>
		</table>
		<table><tr><td></td></tr></table>
		<table cellspacing=0 cellpadding=0 border=0 width='75%' style='border-collapse: collapse;'>
		<tr>
		<td class='subfoldertable' width='25%'>".$gb_name." :</td>
		<td class='subfoldertable' width='75%'><input type=text name=name value='".htmlspecialchars(@$_SESSION['user_name'],ENT_QUOTES)."'".
			" maxlength='17'></td>
		</tr>
		<tr>
		<td class='subfoldertable' width='25%'>".$gb_email." :</td>
		<td class='subfoldertable' width='75%'><input type=text name=email></td>
		</tr>
		<tr>
		<td class='subfoldertable' width='25%'>".$gb_hp." :</td>
		<td class='subfoldertable' width='75%'><input type=text name=url value=\"http://\"></td>
		</tr>
		<tr>
		<td class='subfoldertable' width='25%'>".$gb_country." :</td>
		<td class='subfoldertable' width='75%'><input type=text name=country maxlength='15'></td>
		</tr>
		<tr>
		<td class='subfoldertable' width='25%'>".$radio_comment." :</td>
		<td class='subfoldertable' width='75%'><textarea name=comment cols=40 rows=5></textarea><br>";
	
	include_once(TOP_DIR."/plugins/guestbook/smileys.php");
	
	foreach($smileys as $key=>$value)
	{
		echo "<a href=\"javascript:icon('".$value."')\" class='subfoldertable'>";
		echo "<img src=\"".TOP_DIR."/plugins/guestbook/images/smileys/".$key.".gif\" border=0 alt='$value'>";
		echo "</a>\n";
	}
	
	?>
		<br/><a href="guestbook_view.php?mode=formatting" target="_blank"><?php echo $formatting_possibilities; ?></a>
		</td></tr></table>
		<table cellspacing=0 cellpadding=3 border=0 width='98%'>
		<tr>
		<td width='75%' height=40 align=center><input type=submit value="      <?php echo $submit_button_folder; ?>        "></td>
		</tr>
		</table>
		</form></div>
<?php
break;
/**
 * insert comment (DB action)
 */
case("store"):

	if(empty($_POST['name']) || empty($_POST['comment']))
	{
		echo "<br><br><br><center>$gb_msg_error".
		"<form><INPUT TYPE=\"button\"".
		"STYLE=\"background:#666666; font-size: 12px; font-family: Verdana; font-weight: bold; color:#ffffff\"".
		"VALUE=\"  ".STR_BACK."  \" onClick=\"history.go(-1)\"></form></center>";
	} else {
		
		/**
		* take care of blacklists before storing. e.g. SPAMblock
		* (other.php)
		*/
		do_blacklist_compare($_POST['comment'], 'guestbook');
		
		/**
		 * Argh, we have to even check username
		 */
		do_blacklist_compare($_POST['name'], 'guestbook');
		 
		$date=time();
		$gb_name = linpha_addslashes(htmlspecialchars($_POST['name']));
		$gb_email = linpha_addslashes(htmlspecialchars($_POST['email']));
		$gb_country = linpha_addslashes(htmlspecialchars($_POST['country']));
		$gb_url = linpha_addslashes(htmlspecialchars($_POST['url']));
		$gb_comment = linpha_addslashes($_POST['comment']);	// no htmlspecialchars! we use htmltag on output
	
		linpha_log('guestbook','notice','Guestbook entry added by '.$gb_name);

		$insert_entry = $GLOBALS['db']->Execute("INSERT INTO ".PREFIX."guestbook ".
						"(name, email, country, url, comment, date) ".
						"VALUES('".$gb_name."', '".$gb_email."','".$gb_country."',".
						"'".$gb_url."','".$gb_comment."','".$date."')");
	
		echo "<script language=\"JavaScript\" type=\"text/javascript\">parent.location=\"guestbook_view.php?mode=view\";</script>";
		//Header('Location: guestbook_view.php?mode=view');
	}
break;
/**
 * the main guestbook view
 */
case("view"):
	$result = $GLOBALS['db']->Execute("SELECT id FROM ".PREFIX."guestbook");
	
	if(isset($_GET['page'])) {
		$page = $_GET['page'];
	} else {
		$page = 0;
	}
	
	$no_msg = @$result->RecordCount();
	$div=$no_msg%$mess_per_page;
	if($div=="0")
	{
		$num_page=$no_msg/$mess_per_page;
	}else
	{
		$num_page_dec=$no_msg/$mess_per_page;
		$num_page_dec=explode(".",$num_page_dec);
		$num_page=$num_page_dec[0]+1;
	}
	echo "<table cellspacing=0 cellpadding=0 border=0 width='98%'>
		<tr><td width='98%' height=60 align=center class='viewimage'>
		<b>".$num_page."</b> ".$gb_pages." , <b>".$no_msg."</b> ".$gb_messages."<br><br>";
	
	// page register
	if($page!="0")
	{
	$backward=$page-1;
	echo "<a href='guestbook_view.php?mode=view&page=0'>
		<img src='".TOP_DIR."/plugins/guestbook/images/bbw.gif' border=0 alt='first page'></a>
		<a href='guestbook_view.php?mode=view&page={$backward}'>
		<img src='".TOP_DIR."/plugins/guestbook/images/bw.gif' border=0 alt='previous page'></a> ";
	}
	
	if($page==($num_page-1)){$term=$page;if($num_page<3){$beg=$page-1;}else{$beg=$page-2;}}else{$term=$page+1;$beg=$page-1;}
	if($page==0){$term=$page+2;$beg=$page;}
	if($num_page<=$term){$term=$num_page-1;}else{}
	for($i=$beg;$i<=$term;$i++){
	$page_show=$i+1;
	  if($i==$page){echo "(<b>$page_show</b>)";}
	  else{echo "[<a href='guestbook_view.php?mode=view&page={$i}'><b>".$page_show."</b></a>]";}
	}
	if($num_page>1){
		if($page==($num_page-1))
		{
			$forward="";
		}
		else
		{
			$end=$num_page-1;
			$forward=$page+1;
			echo "<a href='guestbook_view.php?mode=view&page={$forward}'>
			<img src='".TOP_DIR."/plugins/guestbook/images/fw.gif' border=0 alt='next page'></a>
			<a href='guestbook_view.php?mode=view&page={$end}'>
			<img src='".TOP_DIR."/plugins/guestbook/images/ffw.gif' border=0 alt='last page'></a> ";
		}
	}
	
	echo "</td></tr></table>";
	// allow insert only in case of login or guest writing (Thanks to jst71)
	if(($passed) || ($gb_anon_posts)) 
	{
		echo "<b>::<a href='guestbook_view.php?mode=insert'>&nbsp;".$gb_new_msg."</a> ::</b><br><hr noshade>";
	}

	$limit=$mess_per_page*$page;	
	$posts_order=read_config('gb_posts_order');
	$query = $GLOBALS['db']->SelectLimit("SELECT id,name, email, country, url, comment, date ".
			"FROM ".PREFIX."guestbook ".
			"ORDER BY date ".$posts_order
			,$mess_per_page, $limit);
	
	echo "<table cellspacing=0 cellpadding=2 border=0 width='98%'><tr><td width='100%'></td></tr></table>";
	echo "<table cellspacing=0 cellpadding=2 border=0 width='98%'>";

	while($row=$query->FetchRow(ADODB_FETCH_ASSOC))
	{
		// Name
		$name=stripslashes($row["name"]);
		
		// Email
		$email=$row["email"];
		if($email=="")
		{
			$aut="<b>$name</b>";$mailico="";
		}
		elseif(!empty($email) && strpos($email,'@') !== false)
		{
			$pieces = explode ("@", $email);

			$aut = '<script language="JavaScript" type="text/javascript">
			<!-- 
				var email2 = "'.$pieces[1].'";
				var email1 = "'.$pieces[0].'";
				var email = email1+"@"+email2;
				document.write(\'<a href="mailto:\'+email+\'"><b>'.$name.'</b></a>\');
			//-->
			</script>
			<NOSCRIPT>NOSPAM_'.str_replace('@',' _ AT _ ',$email).'</NOSCRIPT>';
			
			$mailico = '<script language="JavaScript" type="text/javascript">
			<!-- 
				document.write(\'<a href="mailto:\'+email+\'"><img src='.TOP_DIR.'/plugins/guestbook/images/mail.gif border=0></a>\');
			//-->
			</script>
			<NOSCRIPT>NOSPAM_'.str_replace('@',' _ AT _ ',$email).'<img src='.TOP_DIR.'/plugins/guestbook/images/mail.gif border=0></NOSCRIPT>';
		}
		else
		{
			$aut = '<b>'.$name.'</b>';
			$mailico = '';
		}
	
		// Location
		$country=$row["country"];
		if($country!=""){$location=$gb_from;}else{$location='';}

		// Url
		$url=$row["url"];
		if($url!="http://"){$site="<a href=\"$url\"><img src='".TOP_DIR."/plugins/guestbook/images/url.gif' border=0></a>";}else{$site="";}
		
		// Smileys
		include_once(TOP_DIR."/plugins/guestbook/smileys.php");
		foreach($smileys as $key=>$value)
		{
			$row["comment"]=str_replace ($value, "[img]".TOP_DIR."/plugins/guestbook/images/smileys/".$key.".gif[/img]", $row["comment"]);
		}
		
		// Date
		$date_time = linpha_strftime('',$row['date']);

		// Comment
		$comment=htmltag(stripslashes($row["comment"]));

		?>
			<tr>
			<td width='100%' class='subfoldertable'>
			<table cellspacing=1 cellpadding=0 border=0 width='100%'>
			<tr>
			<td width='25%' valign=top height='100%'>
			<table cellspacing=0 cellpadding=0 border=0 width='100%' style='height: 100%;'>
				<tr>
					<td class='subfoldertable' style='border-bottom: 0px;' width='100%' valign='top' height='18'>
						<?php echo $aut; ?>
					</td>
				</tr>
				<tr>
					<td class='subfoldertable' style='border-top: 0px; border-bottom: 0px;' width='100%' valign='top' height='18'>
						<?php echo $location.' <b>'.$country.'</b>'; ?>
					</td>
				</tr>
				<tr>
					<td class='subfoldertable' style='border-top: 0px; border-bottom: 0px;' width='100%' valign='top' height='100%'>
						<?php echo $mailico.' '.$site.' &nbsp'; ?>
					</td>
				</tr>
				<tr>
					<td class='subfoldertable' style='border-top: 0px;' width='100%' height=50 valign=bottom>
						<?php echo $date_time.' &nbsp;&nbsp;'; ?>
		<?php		
		//add delete href for admin group
		if(in_group("admin"))
		{
			echo "<br/>[<a href='".TOP_DIR."/actions/delete_comment.php?".
				"job=guestbook&id=".$row['id']."&pn=".$page."'>".STR_DELETE."</a>]";
		}
		?>
					</td>
				</tr>
			</table>
			</td>
			<td width='75%' valign='top' height='100%'>
			<table cellspacing='0' cellpadding='3' border='0' width='100%' style='height: 100%;'>
				<tr>
					<td class='subfoldertable' width='100%' height='100%' valign='top'>
						<?php echo $comment; ?>
						<br/>
					</td>
				</tr>
			</table>
			</td>
			</tr>
			</table>
			</td>
			</tr>
		<?php
	}
	echo "</table>";
	echo "<table cellspacing=0 cellpadding=0 border=0 width='98%'>";
	echo "<tr><td width='98%' height=50 align=center>";

	// page register
	if($page!="0")
	{
		$backward=$page-1;
		echo " <a href='guestbook_view.php?mode=view&page=0'>".
			"<img src='".TOP_DIR."/plugins/guestbook/images/bbw.gif' border=0 alt='first page'></a>".
			"<a href='guestbook_view.php?mode=view&page=".$backward."'>".
			"<img src='".TOP_DIR."/plugins/guestbook/images/bw.gif' border=0 alt='previous page'></a> ";
	}
	if($page==($num_page-1)) {
		$term=$page;
		if($num_page<3) {
			$beg=$page-1;
		} else {
			$beg=$page-2;
		}
	} else {
		$term=$page+1;
		$beg=$page-1;
	}
	if($page==0) {
		$term=$page+2;
		$beg=$page;
	}
	if($num_page<=$term) {
		$term=$num_page-1;
	}
	for($i=$beg;$i<=$term;$i++) {
		$page_show=$i+1;
		if($i==$page) {
			echo "<font color='#000000'>(<b>".$page_show."</b>)</font> ";
		} else {
			echo "<font color='#000000'>[<a href='guestbook_view.php?mode=view&page=".$i."'><b>".$page_show."</b></a>]</font> ";
		}
	}
	if($num_page>1) {
		if($page==($num_page-1)) {
			$forward="";
		} else {
			$end=$num_page-1;
			$forward=$page+1;
			echo" <a href='guestbook_view.php?mode=view&page=".$forward."'><img src='".TOP_DIR."/plugins/guestbook/images/fw.gif' border=0 alt='next page'></a>";
			echo "<a href='guestbook_view.php?mode=view&page=".$end."'><img src='".TOP_DIR."/plugins/guestbook/images/ffw.gif' border=0 alt='last page'></a> ";
		}
	}
	
	echo "</td></tr></table>";

break;
case "formatting":

	echo '<br/>';
?>
	<div align='center'>
	<h1><?php echo $formatting_possibilities; ?></h1>
	<a class='linkbutton leftmenu' href="javascript:history.go(-1)">&nbsp;&lt;&lt;&nbsp;<?php echo STR_BACK; ?>&nbsp;&lt;&lt;&nbsp;</a>
	<br/><br/>
	<table width="70%" border="1" class='maintable'>
		<tr>
			<th colspan="2" class='maintable'>
				<?php echo $formatting_possibilities; ?>
			</th>
		</tr>
		<tr>
			<td class='maintable'>www.sourceforge.net</td>
			<td class='maintable'><a href="http://www.sourceforge.net">http://www.sourceforge.net</a></td>
		</tr>
		<tr>
			<td class='maintable'>[url=http://linpha.sf.net]linpha[/url]</td>
			<td class='maintable'><a href="http://linpha.sf.net">linpha</a></td>
		</tr>
		<tr>
			<td class='maintable'>some@email.com</td>
			<td class='maintable'><a href="mailto://some@email.com">some@email.com</a></td>
		</tr>
		<tr>
			<td class='maintable'>[b]LinPHA[/b]</td>
			<td class='maintable'><b>LinPHA</b></td>
		</tr>
		<tr>
			<td class='maintable'>[i]LinPHA[/i]</td>
			<td class='maintable'><i>LinPHA</i></td>
		</tr>
		<tr>
			<td class='maintable'>[s]LinPHA[/s]</td>
			<td class='maintable'><strike>LinPHA</strike></td>
		</tr>
		<tr>
			<td class='maintable'>[u]LinPHA[/u]</td>
			<td class='maintable'><u>LinPHA</u></td>
		</tr>
		<tr>
			<td class='maintable'>[h1]Heading 1[/h1]</td>
			<td class='maintable'><h1>Heading 1</h1></td>
		</tr>
		<tr>
			<td class='maintable'>[h2]Heading2[/h2]</td>
			<td class='maintable'><h2>Heading 2</h2></td>
		</tr>
		<tr>
			<td class='maintable'>[h3]Heading3[/h3]</td>
			<td class='maintable'><h3>Heading 3</h3></td>
		</tr>
		<tr>
			<td class='maintable'>[h4]Heading4[/h4]</td>
			<td class='maintable'><h4>Heading 4</h4></td>
		</tr>
		<tr>
			<td class='maintable'>[h5]Heading5[/h5]</td>
			<td class='maintable'><h5>Heading 5</h5></td>
		</tr>
		<tr>
			<td class='maintable'>[center]LinPHA[/center]</td>
			<td class='maintable'><center>LinPHA</center></td>
		</tr>
		<tr>
			<td class='maintable'>[green]LinPHA[/green]</td>
			<td class='maintable'><font color="#00FF00">LinPHA</font></td>
		</tr>
		<tr>
			<td class='maintable'>[yellow]LinPHA[/yellow]</td>
			<td class='maintable'><font color="#FFFF00">LinPHA</font></td>
		</tr>
		<tr>
			<td class='maintable'>[red]LinPHA[/red]</td>
			<td class='maintable'><font color="#FF0000">LinPHA</font></td>
		</tr>
		<tr>
			<td class='maintable'>[blue]LinPHA[/blue]</td>
			<td class='maintable'><font color="#0000FF">LinPHA</font></td>
		</tr>
		<tr>
			<td class='maintable'>[white]LinPHA[/white]</td>
			<td class='maintable'><font color="#FFFFFF">LinPHA</font></td>
		</tr>
		<tr>
			<td class='maintable'>[black]LinPHA[/black]</td>
			<td class='maintable'><font color="#000000">LinPHA</font></td>
		</tr>
		<tr>
			<td class='maintable'>[color=hotpink]LinPHA[/color]</td>
			<td class='maintable'><span style="color:hotpink">LinPHA</span></td>
		</tr>
		<tr>
			<td class='maintable'>[center][h3][i][url=http://linpha.sf.net][red]LinPHA [/red][/url][/i][/h3][/center]</td>
			<td class='maintable'>
				<center>
					<h3>
						<i>
							<a href="http://linpha.sf.net" target=_blank>
								<span style="color:red">
									LinPHA
								</span>
							</a>
						</i>
					</h3>
				</center>
			</td>
		</tr>
		<tr>
			<td class='maintable'>[img]http://images.sourceforge.net/images/head_bg_new.gif[/img]</td>
			<td class='maintable'><img src="http://images.sourceforge.net/images/head_bg_new.gif" alt='sourceforge logo'></td>
		</tr>
	</table>
	<br/>
	<a class='leftmenu, linkbutton' href="javascript:history.go(-1)">
	<?php echo "&nbsp;&lt;&lt;&nbsp;".STR_BACK."&nbsp;&lt;&lt;&nbsp;" ?></a>
	</div>
<?php
break;
}

echo "</td></tr>";
include_once(TOP_DIR.'/footer.php');
?>
