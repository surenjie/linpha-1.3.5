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
$style['tablebg']="#B3BCDE";

include_once(TOP_DIR.'/functions/db_api.php');
include_once(language_file());

html_header();
?>
<title>Calender - LinPHA</title>
</head>
<body>
<?php 
	$m = (!isset($_GET['m'])) ? date("n",mktime()) : $_GET['m'];	// wenn $m $y noch nicht existiert, aktuellen monat und aktuelles jahr in $m und $y schreiben
   	$y = (!isset($_GET['y'])) ? date("Y",mktime()) : $_GET['y'];
?>
<div align="center">
<table bgcolor="<?php echo $style['tablebg']; ?>">
	<tr>
		<td valign="top">
<?php
    /*== get what weekday the first is on ==*/
    $month_in_dec = strftime("%m",mktime(0,0,0,$m,1,$y));
	
	$tmpd = getdate(mktime(0,0,0,$m,1,$y));
    $firstwday= $tmpd["wday"];

    $lastday = mk_getLastDayofMonth($m,$y);
?>
<table cellpadding=2 cellspacing=0 border=1>
    <tr>
		<td colspan=7 bgcolor="<?php echo $style['tablebg']; ?>">
   			<table cellpadding=0 cellspacing=0 border=0 width="100%">
    			<tr>
					<td width="20"><a href="?m=<?php echo (($m-1)<1) ? 12 : $m-1 ; ?>&y=<?php echo (($m-1)<1) ? $y-1 : $y ; ?>&form=<?php echo $_GET['form']; ?>">&lt;&lt;</a></td>
					<td bgcolor="<?php echo $style['tablebg']; ?>" align="center"><font size=2>
						<?php echo $arr_month_long[intval($month_in_dec)]." ".$y; ?>
						</font></td>
					<td width="20"><a href="?m=<?php echo (($m+1)>12) ? 1 : $m+1 ; ?>&y=<?php echo (($m+1)>12) ? $y+1 : $y ; ?>&form=<?php echo $_GET['form']; ?>">&gt;&gt;</a></td>
				</tr>
			</table></td>
	</tr>
    <tr>
		<td width=22><?php echo $arr_day_short[0]; ?></td>
		<td width=22><?php echo $arr_day_short[1]; ?></td>
		<td width=22><?php echo $arr_day_short[2]; ?></td>
		<td width=22><?php echo $arr_day_short[3]; ?></td>
		<td width=22><?php echo $arr_day_short[4]; ?></td>
		<td width=22><?php echo $arr_day_short[5]; ?></td>
		<td width=22><?php echo $arr_day_short[6]; ?></td>
	</tr>
    <?php
	$d = 1;
    $wday = $firstwday;
    $firstweek = true;

    /*== loop through all the days of the month ==*/
    while ( $d <= $lastday) 
    {

        /*== set up blank days for first week ==*/
        if ($firstweek) {
            print "<tr>";
            for ($i=1; $i<=$firstwday; $i++) 
            { print "<td><font size=2>&nbsp;</font></td>"; }
            $firstweek = false;
        }

        /*== Sunday start week with <tr> ==*/
        if ($wday==0) { print "<tr>"; }

        /*== check for event ==*/
        print "<td>";
        	if($d<10) {
        		if($m<10) {
        			$tag = "$y:0$m:0$d";
        		} else {
        			$tag = "$y:$m:0$d";
        		}
        	} else {
        		if($m<10) {
        			$tag = "$y:0$m:$d";
        		} else {
        			$tag = "$y:$m:$d";
        		}
        	}
		
		$heute = date("Y:m:d",mktime());	// "01" bis "12"
		if($tag==$heute)
		{
			$font1 = "<font color=\"#FF0000\">";
			$font2 = "</font>";
		}
		else
		{
			$font1 = "";
			$font2 = "";
		}
		if(isset($_GET['additional_cmd']))
		{
			$str = ",opener.".$_GET['additional_cmd'];
		}
		else
		{
			$str = "";
		}
        echo '<a href="#" onClick="opener.document.'.$_GET['form'].'.value=\''.$tag.'\'' . $str . ',window.close();">'.$font1.$d.$font2.'</a>';
        print "</td>\n";

        /*== Saturday week with </tr> ==*/
        if ($wday==6) { print "</tr>\n"; }

        $wday++;
        $wday = $wday % 7;
        $d++;
    }
?>
</tr>
</table>
<br/><div align="center"><a href="#" onClick="window.close()"><?php echo $close_win; ?></a></div>
		</td>
	</tr>
</table>
</div>
</body>
</html>
<?php
/*== get the last day of the month ==*/
function mk_getLastDayofMonth($mon,$year)
{
    for ($tday=28; $tday <= 31; $tday++) 
    {
        $tdate = getdate(mktime(0,0,0,$mon,$tday,$year));
        if ($tdate["mon"] != $mon) 
        { break; }

    }
    $tday--;

    return $tday;
}
?>
