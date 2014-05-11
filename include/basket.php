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

global $href_clear_all, $href_check_all, $book_search, $str_select_row, $str_select_row, $str_select, $thumb_hint_msg;
global $str_new_window, $str_new_images;

?>
<script language="JavaScript" type='text/javascript'>
var checkflag = 0;
function check_all() {
	if (checkflag == 0)	// check all
	{
		checkflag = 1;
		var return_value = "<?php echo $href_clear_all; ?>";
	}
	else			// clear all
	{
		checkflag = 0;
		var return_value = "<?php echo $href_check_all; ?>";
	}

	for (var i = 0; i < document.forms[0].length; i++)
	{
		elem = document.forms[0].elements[i];
		if (elem.type == "checkbox") {
			elem.checked = checkflag;
		}
	}
	return return_value;
}

function update_checkbox(elem_id)
{
	elem = document.getElementById(elem_id);
	if(elem.checked==true)
	{
		elem.checked = false;
	}
	else
	{
		elem.checked = true;
	}
}

function check_from_to(i_start,i_end)
{
	var do_what;
	elem = document.getElementById(i_start);
	if(elem.checked==true)
	{
		do_what = false;
	}
	else
	{
		do_what = true;
	}

	for(var i = i_start; i <= i_end; i++)
	{
		document.getElementById(i).checked = do_what;
	}
}
</script>
<tr>
	<td width='200' valign='top' class='leftmenu'>
		<div class='leftmenuhead'>
				<?php
				global $print_layout, $choose_zips_msg, $choose_mail_msg;
				if(isset($_REQUEST['job']))
					{
					switch($_REQUEST['job'])
					{
					case 'print':
						echo "$print_layout";
					break;
					case 'zip':
						echo "$choose_zips_msg";
					break;
					case 'mail':
						echo "$choose_mail_msg";
					break;
					default:
						echo "Select Images";
					break;
					}
				}
				?>
		</div>
		<div align='center'>
<?php
	if(isset($_REQUEST['job']))
	{
		switch($_REQUEST['job'])
		{
		case 'print':
			include_once(TOP_DIR.'/include/basket_print.php');
		break;
		case 'zip':
			include_once(TOP_DIR.'/include/basket_zip.php');
		break;
		case 'mail':
			include_once(TOP_DIR.'/include/basket_mail.php');
		break;
		default:
			echo "<form name='empty' action=''>";
		break;
		}
	}
	else
	{
		echo "<form name='empty' action=''>";
	}
?>
<input type='hidden' name='pn' value='<?php echo $_REQUEST['pn']; ?>'>
<input type='hidden' name='view' value='<?php echo $_REQUEST['view']; ?>'>
<input type='hidden' name='job' value='<?php echo $_REQUEST['job']; ?>'>
<input type='hidden' name='link_address' value='<?php echo base64_encode($GLOBALS['img_view']->link_address); ?>'>
<br /><hr />
<input type='button' name='button_check_all' value='<?php echo $href_check_all; ?>' onClick='this.value=check_all()'>
<br /><hr />
<a class='linkbutton leftmenu' href='<?php echo $GLOBALS['img_view']->link_address.'&view=normal&pn='.$_REQUEST['pn']; ?>'>&nbsp;&lt;&lt;&nbsp;<?php echo STR_BACK; ?>&nbsp;&lt;&lt;&nbsp;</a>

		</div>
	</td>
	<td class='mainwindow' height='100%' colspan='2'>
		<table class='maintable' width='100%' cellspacing='0'>
			<tr>
				<th class='maintable' colspan='<?php echo ($GLOBALS['img_view']->num_cols+1); ?>' align="left">
					<?php
					switch($GLOBALS['img_view']->mode)
					{
						case 'search': echo $book_search; break;
						case 'folder': build_navigation_view($_REQUEST['stage'],$_REQUEST['albid'],0); break;
						case 'new_images': echo $str_new_images; break;
					}
					echo ' - ';
					/**
					* @todo  language entries
					*/
					echo "<a href='".$GLOBALS['img_view']->link_address."&view=basket&job=".$_REQUEST['job']."&pn=".$_REQUEST['pn']."'>Basket - ".ucfirst($_REQUEST['job'])."</a>";

					?>
				</th>
			</tr>

<?php
/*#############################################
## thumbnails start here...
#############################################*/

    $rows = $this->query->RecordCount();
    $percent_width = round(100/$this->num_cols);    // calc percentage of td width (IE explorer fix)

    // number of images to display
    for($i=0 ; $i<$rows ; $i++)
    {
		echo "<tr>";
				echo "<td class='maintable' width='10%'>";
					echo "<a href='javascript:void();' onclick='check_from_to(".$i.",".($i+$this->num_cols-1).")'>".$str_select_row."</a>";
				echo "</td>";
        for($y=0 ; $y<$this->num_cols ; $y++)
        {
            $data = $this->query->FetchRow(ADODB_FETCH_ASSOC);
      
            if(!empty($data['filename']))
            {

                /*echo "\t<td class='maintable' width='".$percent_width."%' height='140'>\n";
                echo "\t\t<div align='center'>\n";
                
                echo "\t\t<a href='".$this->link_address."&imgid=".$data['id']."'>";
                print_thumbnail($data['id']);
                echo "<br /></a>\n";
                
                if(read_config('filenames') AND !empty($data['filename']) )
                {
                    echo "\t\t".cut_string($data['filename'],25,1)."<br />\n";
                }
                
                $description = read_description("description", $data['md5sum']);
                if(!empty($description))
                {
                    echo "\t\t".cut_string($description,25,1)."<br />\n";
                }

                echo "\t\t</div>\n";
                echo "\t</td>\n";*/
                
			echo "<td class='maintable' width='".$percent_width."%' height='150' align='center'>";
			echo "<div><a href='javascript:void();' onclick='update_checkbox(".($i+$y).")'>";
			print_thumbnail($data['id'],0);
            		echo "<br /></a>";
			
			if(read_config('filenames') AND !empty($data['filename']) )
			{
				echo cut_string($data['filename'],25,1)."<br />";
			}
			
			$description = read_description("description", $data['md5sum']);
			if(!empty($description))
			{
				echo cut_string($description,25,1)."<br />";
			}

			echo "(<input type='checkbox' id='".($i+$y)."' name='img_id[]' value='".$data['id']."'".(isset($_POST['img_id']) && in_array($data['id'],$_POST['img_id']) ? ' checked' : '').">";
			echo "<a href='javascript:void();' onclick='update_checkbox(".($i+$y).")'>".$str_select."</a>) (<a href='".$GLOBALS['img_view']->link_address."&imgid=".$data['id']."&pn=".$_REQUEST['pn']."&job=".$_REQUEST['job']."' target='_blank' title='".$thumb_hint_msg." (".$str_new_window.")'>".ucfirst(STR_VIEW)."</a>)<br /></div></td>";

            }
            else
            {
                echo "\t<td class='maintable' width='".$percent_width."%' height='140'>&nbsp;</td>\n";
            }
        }
        echo "</tr>\n";
        $i=$i+($y-1);
    }



echo "</table></form></td></tr>";

?>
