<?php
/*
for developers and translators:
- replace the output of this script with the entries in your language file
  (except the last two lines of each entry)
  (maybe you need to change the variable $locales)

- and modify the function print_date() until the two time strings are correct

flo (linpha-AT-angehrn-DOT-com)
*/


$locales = Array('en','ge','fr','it','no','ro','es','sv','zh-cn','zh','cn','tw','br','pt','cz','ja','dk','nl','bg');

function print_array($format_string,$array_name,$what,$comment)
{
	echo $array_name.' = Array(';
	
	if($what=='m')
	{
		for($i = 1, $str = ''; $i <= 12; $i++)
		{
			$str .= "'$i' => '".htmlentities(htmlentities(strftime($format_string,mktime(0,0,0,$i,1,2004))))."',";
		}
	}
	elseif($what=='d')
	{
		for($i = 4, $str = ''; $i <= 10; $i++)
		{
			$str .= "'".htmlentities(htmlentities(strftime($format_string,mktime(0,0,0,1,$i,2004))))."',";
		}
	}
	$str = substr($str,0,strlen($str)-1);

	echo $str;
	echo ');';
	echo $comment;
	echo '<br />';
}

function print_date($value)
{
	switch($value)
	{
		case 'en':
			$date_str = "%m/%d/%Y";
			$time_str = "%I:%M:%S %p";
		break;
		case 'ge':
			$date_str = "%d.%m.%Y";
			$time_str = "%H:%M:%S";
		break;
		case 'fr':
			$date_str = "%d/%m/%Y";
			$time_str = "%H:%M:%S";
		break;
		case 'it':
			$date_str = "%d/%m/%Y";
			$time_str = "%H.%M.%S";
		break;
		case 'ja':
			$date_str = "%Y-%m-%d";
			$time_str = "%H:%M:%S";
		break;
		case 'no':
			$date_str = "%d.%m.%Y";
			$time_str = "%H:%M:%S";
		break;

		default:
			$date_str = "??";
			$time_str = "??";
		break;
	}
	echo '$date_format = "'.$date_str.'";<br />';
	echo '$time_format = "'.$time_str.'";<br />';

	echo strftime("%x %X",mktime(13,45,50,6,28,2004)).'<br />';
	echo strftime($date_str." ".$time_str,mktime(13,45,50,6,28,2004)).'<br />';
}

foreach($locales AS $key=>$value)
{
	if(setlocale(LC_ALL, $value))
	{
		echo $value.'<br />';
		print_array('%b','$arr_month_short','m',' /* abrevations of months */');
		print_array('%B','$arr_month_long','m',' /* months */');
		print_array('%a','$arr_day_short','d',' /* abrevations of weekdays */');
		print_array('%A','$arr_day_long','d',' /* weekdays */');
		
		print_date($value);
	}
	else
	{
		echo $value.' failed (-> this "locale" doesn\'t exists on your server...)';
	}
	echo '<br />';
}

?>