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

include_once(TOP_DIR.'/include/phpmeta/Unicode.php');

/*##############################################
# user management page
##############################################*/
?>
<script language="JavaScript" type="text/javascript">
function checkPassLength()
{
	if(document.new_user.new_user_pass.value.length <3  )
	{
		alert ('<?php echo "$pass_2_short"; ?>');
		document.new_user.new_user_pass.focus();
		return false;
	}
}
</script>

<?php


if($_GET['job']=="user")
{
	/*##############################################
	# modify user table
	##############################################*/
	/**
    * build table header, get all available groups from DB
    */
        $groups_query = $GLOBALS['db']->Execute("SELECT id, groups FROM ".PREFIX."groups ORDER BY groups");
        
        print "<table class='admintable' width='100%' cellspacing='0'>";
        print "<tr><th class='maintable' colspan='8' style='height: 25px;'>$href_user_conf</th></tr>";
        print "<tr><td class='admintable'><b>$new_user_name_info</b></td>".
            "<td class='admintable'><b>$new_user_full_name</b></td>".
            "<td class='admintable'><b>$new_user_new_password</b></td>".
            "<td class='admintable'><b>$new_user_mail_info</b></td>";
        
        print "<td class='admintable' colspan='3'><b>$action</b></td>";
        print "<td class='admintable' align='center' width='20'>"; putHelpButton('usermod');
        print "</td></tr>";
        $counter=1;

    /**
    * show users
    */
    $users=$GLOBALS['db']->Execute("SELECT * FROM ".PREFIX."users ORDER BY nickname");
	while($user=$users->FetchRow())
	{
		$groupcount=0; 
        ?>
	    <tr>
	        <form name="mod_user" method="POST" action="<?php echo TOP_DIR; ?>/actions/submit_mod_data.php">
	        <td class='admintable'>
	            <input type='text' name='mod_user_name' size='10' maxlength='25' value='<?php echo smart_htmlspecialchars($user[1], ENT_QUOTES); ?>'>
	        </td>
		    <td class='admintable'>
		        <input type='text' name='mod_user_fullname' size='15' maxlength='50' value='<?php echo smart_htmlspecialchars($user[7], ENT_QUOTES); ?>'>
		    </td>
            <td class='admintable'>
                <input type='password' name='mod_user_pass' size='10' maxlength='25' AUTOCOMPLETE='OFF'>
            </td>
		    <td class='admintable'>
		        <input type='text' name='mod_user_mail' size='15' maxlength='45' value='<?php echo $user[3]; ?>'>
		    </td>
        <?php
        ?>
            <td class='admintable'>
                <input type='hidden' name='id' value='<?php echo $user[0]; ?>'>
                <input type='hidden' name='old_user_name' value='<?php echo smart_htmlspecialchars($user[1], ENT_QUOTES); ?>'>
                <input type='hidden' name='action' value='user'>
                <input type='submit' value='<?php echo $submit_button_mod_user; ?>'>
            </td>
            </form>
           	<form name='edit_groups' method='POST' action='<?php echo TOP_DIR; ?>/admin.php?page=user_group_members'>
            <td class='admintable'>
            	<input type='hidden' name='action' value='edit_memberships'>
            	<input type='hidden' name='user_id' value='<?php echo $user[0]; ?>'>
                <input type='submit' name='edit_groups' value='<?php echo $edit_groups; ?>'>
            </td>
            </form>
            <form name='del_user' method='POST' action='<?php echo TOP_DIR; ?>/actions/delete_data.php'>
            <td class='admintable'>
                <input type='hidden' name='id' value='<?php echo $user[0]; ?>'>
                <input type='submit' value='<?php echo $submit_button_delete; ?>'>
                <input type='hidden' name='action' value='user'>
            </td>
            </form>
        </tr>
        <?php
		//if(isset($print_alert)) : unset($print_alert); endif;
		$counter++;
	}

	/*##############################################
	# add new user
	##############################################*/
	?>
    	<form name=new_user method=POST action=actions/submit_new_data.php>
    	<tr>
    	    <td class='adminalternate'><input type='text' name='new_user_name' size='10' maxlength='25'></td>
    		<td class='adminalternate'><input type='text' name='new_user_fullname' size='15' maxlength='50'></td>
    		<td class='adminalternate'><input type='password' name='new_user_pass' size='10' maxlength='25' AUTOCOMPLETE='OFF'></td>
    		<td class='adminalternate'><input type='text' name='new_user_mail' size='15' maxlength='45'></td>
    		<input type='hidden' name='action' value='user'>
    	    <td colspan='3' class='adminalternate'>
    	        <input type='submit' value='<?php echo $submit_button_new_user; ?>' onclick="return checkPassLength();">
    	    </td>
            <td class='adminalternate' align='center' width='20'>
                <?php putHelpButton('usernew'); ?>
    	    </td>
    	</tr>
        </form>
    </table>
    <br />
    <?php
}
elseif(@$_GET['job'] == 'group')
{
	if (isset($_GET['call_from']) && $_GET['call_from']=="folder")
	{
		print ("<b>:: <a href='admin.php?page=folder'>$href_to_folder_conf</a>&nbsp;::</b><br /><br />");
	}
	/*##############################################
	# table modify groups
	##############################################*/
	/* query all groups from DB */

	print("<table class='admintable' width='100%' cellspacing='1' border='0'>");
	print("<tr><th class='maintable' COLSPAN='6' style='height: 25px;'>$href_group_conf</th></tr>");
	print("<tr><td class='admintable'><b>$header_groupname</b></td>"
				."<td colspan=2 class='admintable'><b>$action</b></td>");
	print "<td class='admintable' align='center' width='20'>"; putHelpButton('groupmod');
	print "</td></tr>";
    
	$array_builtin_groups = Array('admin', 'friend', 'uploader');

    /**
     * builtin groups
     */
    foreach($array_builtin_groups AS $value)
    {
    	$group_id = get_group_id_from_name($value);
		?>
		<tr>
			<td class='admintable'>
				<input type='text' name='group_name' size='30' maxlength='15' value='<?php echo $value; ?>' readonly='true'>
			</td>

			<td class='admintable' colspan='2'>&nbsp;</td>

			<form name='edit_members' method='POST' action='<?php echo TOP_DIR; ?>/admin.php?page=user_group_members'>
			<td class='admintable'>
				<input type='submit' value='<?php echo $str_edit_members; ?>'>
				<input type='hidden' name='action' value='edit_members'>
				<input type='hidden' name='group_id' value=<?php echo $group_id; ?>>
			</td>
			</form>
		</tr>
		<?php			
    }

	$users=$GLOBALS['db']->Execute("SELECT id, groups FROM ".PREFIX."groups ORDER BY groups");
	while($groupinfo=$users->FetchRow())
	{
		/* mod/delete group table */
		if(!in_array($groupinfo[1],$array_builtin_groups))
		{
			?>
			<tr>
				<form name="mod_group" method="POST" action='<?php echo TOP_DIR; ?>/actions/submit_mod_data.php'>
				<td class='admintable'>
					<input type='text' name='group_name' size='30' maxlength='15' value='<?php echo $groupinfo[1]; ?>'>
				</td>
				
				<td class='admintable'>
					<input type='hidden' name='id' value='<?php echo $groupinfo[0]; ?>'>
					<input type='hidden' name='call_from' value="<?php echo @$_GET['call_from']; ?>">
					<input type='hidden' name='action' value='group'>
					<input type='submit' value='<?php echo $mod_group_header; ?>'>
				</td>
				</form>
				<form name='del_group' method='POST' action='<?php echo TOP_DIR; ?>/actions/delete_data.php'>
				<td class='admintable'>
					<input type='submit' value='<?php echo $del_group_header; ?>'>
					<input type='hidden' name='action' value='group'>
					<input type='hidden' name='call_from' value="<?php echo @$_GET['call_from']; ?>">
					<input type='hidden' name='id' value='<?php echo $groupinfo[0]; ?>'>
				</td>
				</form>
				<form name='edit_members' method='POST' action='<?php echo TOP_DIR; ?>/admin.php?page=user_group_members'>
				<td class='admintable'>
					<input type='submit' value='<?php echo $str_edit_members; ?>'>
					<input type='hidden' name='action' value='edit_members'>
					<input type='hidden' name='group_id' value=<?php echo $groupinfo[0]; ?>>
				</td>
				</form>
			</tr>
			<?php
		}
	}


	/*##############################################
	# add new group
	##############################################*/

	print "<form name=new_user method=POST action=actions/submit_new_data.php>"
		."<input type='hidden' name='call_from' value=".@$_GET['call_from'].">";
	print "<td class='adminalternate'><input type='text' name='new_group_name' size=30 maxlength=15></td>"
		."</td><td colspan=2 class='adminalternate'><input type=submit value='$button_addgroup'></td>";
	print("<td class='adminalternate' align='center' width='20'>"); putHelpButton('groupnew');
	print("<input type='hidden' name='action' value='group'></tr></form></table><br>");


}

?>
