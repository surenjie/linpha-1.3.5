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

include_once(TOP_DIR.'/install/install_header.php');
include_once(TOP_DIR.'/adodb/adodb.inc.php');

?>
<tr>
	<td width='200' valign='top' class='leftmenu'>
		<div class='leftmenuhead'>
			<?php echo $inst_msg."\n"; ?>
		</div>
		<br />
<?php
echo "<ul type='disc'>";

print ("<li>$inst_status_4</li>
		<li>$inst_status_step4</li>
   		</ul></td>");

print ("<td class='adminpages' height='100%' colspan='3'>");

if(!defined('DB_TYPE')): define ('DB_TYPE', $_POST['db_type']); endif;	// used by createExifTable()

// error tracking! all required fields filled in?
if($_POST['big_admin'] && $_POST['db_type']!="sqlite") // full access
{
if(empty($_POST['superadmin_name'])
	||($_POST['db_type']=="mysql") ? empty($_POST['superadmin_pass']) : ""
	||empty($_POST['admin_name'])||empty($_POST['admin_pass'])
	||empty($_POST['db_host'])||empty($_POST['db_admin'])||empty($_POST['db_password'])
	||empty($_POST['db_port'])||empty($_POST['db_prefix'])||empty($_POST['db_realname']))
	{
	    echo "$configure_error";
	}
	else
	{
		$db_install="install";
	}
}
elseif($_POST['db_type']!="sqlite") // limited access
{
if(empty($_POST['superadmin_name'])
	||($_POST['db_type']=="mysql") ? empty($_POST['superadmin_pass']) : ""
	||empty($_POST['admin_name'])||empty($_POST['admin_pass'])
	||empty($_POST['db_host'])||empty($_POST['db_port'])
	||empty($_POST['db_realname'])||empty($_POST['db_prefix']))
	{
		echo "$configure_error";
	}
	else
	{
		$db_install="install";
	}
}else // sqlite
{
	if(empty($_POST['admin_name']) || empty($_POST['admin_pass']))
	{
		echo "$configure_error";
	}
	else
	{
		$db_install="install";
	}
}

$DB_host=@$_POST['db_host'];
$DB_port=@$_POST['db_port'];
$DB_admin=@$_POST['superadmin_name'];
$DB_pass=@$_POST['superadmin_pass'];
$DB_name=@$_POST['db_realname'];
$DB_type=$_POST['db_type'];


switch(@$db_install)
{
	case "install":
	{
		// try db connection 
		print("$inst_db_tryconn-->");

		// user is allowed to create new DB, let PHP do the magic (mysql only)
		if($_POST['big_admin'] && $DB_type=="mysql")
		{
			if(!$dbc=mysql_connect("$DB_host:$DB_port",
				$DB_admin, $DB_pass))
			{
				print("<font color=red>$inst_db_tryconn_error</font><br>");
				print("$DB_host<br>");
				print("$DB_port<br>");
				print("$DB_admin<br>");
				print("$DB_name<br>");
				die("");
			}
			else
			{
				if(!$result=mysql_query("CREATE DATABASE ".$DB_name.""))
				{
				    print("<font color=red>ERROR: Couldn't create $DB_name <br> Please make sure not to use any special chars in database names</font><br>");
				    die();    				    
				}
				else
				{
					if(!mysql_select_db($DB_name))
					{
				    print("<font color=red>ERROR: Couldn't select $DB_name </font><br>");
					die();    
					}
				}
			    //print("<font color=green>$inst_db_tryconnect_ok</font><br>");
				mysql_close($dbc);
			}
		}
		elseif($DB_type=="sqlite")
		{
			$sqlite_random = random_password(6);
			if(!$dbc=sqlite_open("../sql/linpha_".$sqlite_random.".sqlite", 0666, $sqliterror))
			{
				echo "<font color=red>$inst_db_tryconn_error</font><br />";
				echo $sqliterror.'<br />';
				echo "SQLITE DB installation failed, please check write permissions";
				die();
			}else
			{
				print("<font color=green>$inst_db_tryinst_ok</font><br>");
				sqlite_close($dbc);
			}
		}
		
		// Data Source Name: This is the universal connection string
		switch ($DB_type)
		{
			case "mysql":
				$db = &NewADOConnection('mysql'); 
				$db->Connect("$DB_host:$DB_port", "$DB_admin", "$DB_pass", "$DB_name");  
			break;
			case "pgsql":
				$db = NewADOConnection('postgres7'); 
				if(isset($DB_pass))
				{
					$db->PConnect("host=$DB_host user=$DB_admin password=$DB_pass dbname=$DB_name");
				}
				else
				{
					$db->PConnect("host=$DB_host user=$DB_admin dbname=$DB_name");
				}
			break;
			case "sqlite":
				$db = &NewADOConnection('sqlite');
				$db->Connect("../sql/linpha_".$sqlite_random.".sqlite");
			break;
			default:
				$db = &NewADOConnection('mysql');
				$db->Connect("$DB_host:$DB_port", "$DB_admin", "$DB_pass", "$DB_name");  
			break;
		}

		if(!$db)
		{
			if($DB_type=="pgsql"){
			echo "<br>HINT: Did you run \"creatdb $DB_name\" from command line first!?<br>";}
			ob_flush();
			flush();
			die ("ERROR");
		}else
		{
		print("<font color=green>$inst_db_tryconn_ok</font><br>");
		}

		print("$inst_create_tb_msg:<br>");

	/*#########################################################
	## prepare LinPHA tables global
	#########################################################*/
		$linpha_tables['config'] = $_POST['db_prefix']."config";
		$linpha_tables['users'] = $_POST['db_prefix']."users";
		$linpha_tables['first_lev_album'] = $_POST['db_prefix']."first_lev_album";
		$linpha_tables['sec_lev_album'] = $_POST['db_prefix']."sec_lev_album";
		$linpha_tables['third_lev_album'] = $_POST['db_prefix']."third_lev_album";
		$linpha_tables['photos'] = $_POST['db_prefix']."photos";
		$linpha_tables['category'] = $_POST['db_prefix']."category";
		$linpha_tables['counter_stats'] = $_POST['db_prefix']."counter_stats";
		$linpha_tables['groups'] = $_POST['db_prefix']."groups";
		$linpha_tables['image_comments'] = $_POST['db_prefix']."image_comments";
		$linpha_tables['album_comments'] = $_POST['db_prefix']."album_comments";
		$linpha_tables['plugins'] = $_POST['db_prefix']."plugins";
		$linpha_tables['guestbook'] = $_POST['db_prefix']."guestbook";
		$linpha_tables['photo_cache'] = $_POST['db_prefix']."photo_cache";
		$linpha_tables['mail_list'] = $_POST['db_prefix']."mail_list";
		$linpha_tables['facetmap'] = $_POST['db_prefix']."facetmap";
        $linpha_tables['permissions'] = $_POST['db_prefix']."permissions";
        $linpha_tables['meta_iptc'] = $_POST['db_prefix']."meta_iptc";
        $linpha_tables['blacklist'] = $_POST['db_prefix']."blacklist";
        $linpha_tables['stats'] = $_POST['db_prefix']."stats";
        

switch ($DB_type)
{
/*#########################################################
## prepare LinPHA tables MYSQL style
#########################################################*/
	case "mysql":
	{
		$tables=array(
		$linpha_tables['config'] => "CREATE TABLE ".$linpha_tables['config']."(
			ID smallint unsigned not null auto_increment,
			option_name varchar(50) not null,
			option_value varchar(100) not null,
			userid mediumint unsigned default 0,
			PRIMARY KEY(ID),
			KEY(option_name),
			KEY(option_value),
			UNIQUE(option_name)
			)",
		$linpha_tables['users'] => "CREATE TABLE ".$linpha_tables['users']."(
			ID mediumint unsigned not null auto_increment,
			nickname varchar(20) not null,
			password varchar(32) not null,
			email varchar(255),
			lang varchar(100) default 'English',
			level tinyint unsigned,
			groups varchar(255),
			fullname varchar(50),
			downloads MEDIUMINT default '0',
			downloads_size INT(11) default '0',		
			PRIMARY KEY(ID)
			)",
		$linpha_tables['first_lev_album'] => "CREATE TABLE ".$linpha_tables['first_lev_album']."(
			ID smallint unsigned not null auto_increment,
			date timestamp,
			path varchar(255) not null,
			name varchar(255) not null,
			level tinyint unsigned,
			groups varchar(255) DEFAULT ';public;',
			photos SMALLINT,
			PRIMARY KEY(ID)
			)",
		$linpha_tables['sec_lev_album'] => "CREATE TABLE ".$linpha_tables['sec_lev_album']."(
			ID smallint unsigned not null auto_increment,
			date timestamp,
			path varchar(255) not null,
			name varchar(255) not null,
			prev_alb_name varchar(255) not null,
			level tinyint unsigned,
			res varchar(64),
			res1 varchar(64),
			PRIMARY KEY(ID),
			KEY (prev_alb_name)
			)",
		$linpha_tables['third_lev_album'] => "CREATE TABLE ".$linpha_tables['third_lev_album']."(
			ID smallint unsigned not null auto_increment,
			date timestamp,
			path varchar(255) not null,
			name varchar(255) not null,
			prev_alb_name varchar(255) not null,
			level tinyint unsigned,
			res varchar(64),
			res1 varchar(64),
			PRIMARY KEY(ID),
			KEY (prev_alb_name)
			)",
		$linpha_tables['photos'] => "CREATE TABLE ".$linpha_tables['photos']."(
			ID int unsigned not null auto_increment,
			date timestamp,
			name varchar(255),
			filename varchar(255) not null,
			thumbnail mediumblob,
			prev_path varchar(255),
			level tinyint unsigned,
			res INT(5) DEFAULT 0 NOT NULL,
			md5sum varchar(40),
			downloads mediumint,
			fmkey_location varchar(100),
			fmkey_type varchar(100),
			fmkey_date varchar(100),
			rotation varchar(10) default '0',
			PRIMARY KEY(ID),
			KEY (date),
			KEY (name),
			KEY (filename),
			KEY (res),
			KEY (md5sum),
			KEY (prev_path)
			)",
		$linpha_tables['photo_cache'] => "CREATE TABLE ".$linpha_tables['photo_cache']."(".
			"filename VARCHAR(255) NOT NULL,".
			"photo_id INT UNSIGNED NOT NULL,".
			"date DATETIME NOT NULL,".
			"used TIMESTAMP,".
			"hits MEDIUMINT UNSIGNED DEFAULT '0' NOT NULL,".
			"size INT UNSIGNED DEFAULT '0' NOT NULL,".
			"convert_time FLOAT DEFAULT '0.0' NOT NULL,".
			"PRIMARY KEY (filename),".
			"KEY (filename)".
			")",
		$linpha_tables['category'] => "CREATE TABLE ".$linpha_tables['category']."(
			ID smallint unsigned not null auto_increment,
			name varchar(255) not null,
			isprivate SMALLINT(1),
			PRIMARY KEY(ID)
			)",
		$linpha_tables['counter_stats'] => "CREATE TABLE ".$linpha_tables['counter_stats']."(
			ID int unsigned not null auto_increment,
			date timestamp,
			ip varchar(32),
			res mediumint unsigned,
			PRIMARY KEY(ID)
			)",
		$linpha_tables['groups'] => "CREATE TABLE ".$linpha_tables['groups']."(
			ID SMALLINT(3) NOT NULL AUTO_INCREMENT,
			groups VARCHAR(15) NOT NULL,
			PRIMARY KEY ( ID )
			)",
		$linpha_tables['image_comments'] => "CREATE TABLE ".$linpha_tables['image_comments']."(
			ID INT NOT NULL AUTO_INCREMENT,
			date TIMESTAMP,
			md5sum VARCHAR(40),
			author VARCHAR(20),
			comment TEXT,
			description VARCHAR(255),
			category VARCHAR(255),
			PRIMARY KEY ( ID ),
			KEY (md5sum)
			)",
		$linpha_tables['album_comments'] => "CREATE TABLE ".$linpha_tables['album_comments']."(
			ID INT NOT NULL AUTO_INCREMENT,
			date TIMESTAMP,
			album VARCHAR(255),
			author VARCHAR(20),
			comment TEXT,
			PRIMARY KEY (ID)
			)",
		$linpha_tables['plugins'] => "CREATE TABLE ".$linpha_tables['plugins']."(".
			"ID INT NOT NULL AUTO_INCREMENT,".
			"name VARCHAR(255),".
			"active SMALLINT(1) DEFAULT '0' NOT NULL,".
			"PRIMARY KEY ( ID )".
			")",
		$linpha_tables['guestbook'] => "CREATE TABLE ".$linpha_tables['guestbook']."(
			id INT (5) UNSIGNED not null AUTO_INCREMENT,   
			name VARCHAR (50), 
			email VARCHAR (50), 
			country VARCHAR (50),
			url VARCHAR (150),
			comment TEXT not null,
			date INT (11), 
			PRIMARY KEY (id)
			)",
		$linpha_tables['mail_list'] => "CREATE TABLE ".$linpha_tables['mail_list']."(".
			"ID int(25) NOT NULL auto_increment,".
			"name varchar(100) NOT NULL default '',".
			"email varchar(100) NOT NULL default '',".
			"date int(14) NOT NULL default '0',".
			"active tinyint(1) NOT NULL default '0',".
			"PRIMARY KEY  (ID)".
			")",
        $linpha_tables['permissions'] => "CREATE TABLE ".$linpha_tables['permissions']."(".
    		"id int(11) NOT NULL auto_increment, ".
    		"type varchar(255) NOT NULL, ".
    		"who int(1) NOT NULL default '0', ".
            "groups_exceptions varchar(255) NOT NULL default '', ".
            "groups_additional varchar(255) NOT NULL default '', ".
            "and_or int(1) NOT NULL default '0', ".
            "alb int(1) NOT NULL default '0', ".
            "albums text NOT NULL, ".
            "PRIMARY KEY  (`id`) ".
            ")",
        $linpha_tables['meta_iptc'] => "CREATE TABLE ".$linpha_tables['meta_iptc']."(".
    		"md5sum VARCHAR(32) NOT NULL, ".
			
			// caption fields
			"caption TEXT NOT NULL, ".
			"caption_writer VARCHAR(255) NOT NULL, " .
			"headline VARCHAR(255) NOT NULL, " .
			"instructions VARCHAR(255) NOT NULL, " .			

			// keywords fields									
			"keywords VARCHAR(255) NOT NULL, ".
			
			// categories fields
			"category VARCHAR(3) NOT NULL, ".
			"supplemental_categorie VARCHAR(255) NOT NULL, ".
			
			//credits fields
			"copyright VARCHAR(255) NOT NULL, ".
			"byline VARCHAR(255) NOT NULL, " .
			"byline_title VARCHAR(255) NOT NULL, " . 			
			"credit VARCHAR(255) NOT NULL, " .	
			"source VARCHAR(255) NOT NULL, " .
		
			//status fields			
			"edit_status VARCHAR(255) NOT NULL, ".
			"priority VARCHAR(255) NOT NULL, ".			
			"object_cycle VARCHAR(255) NOT NULL, ".
			"job_id VARCHAR(255) NOT NULL, ".			
			"program VARCHAR(255) NOT NULL, ".

			// origin fields
			"object_name VARCHAR(255) NOT NULL, ".
			"date_created VARCHAR(255) NOT NULL, " .			
			"date_released VARCHAR(255) NOT NULL, " .
			"time_created VARCHAR(255) NOT NULL, " .			
			"time_released VARCHAR(255) NOT NULL, " .						
			"city VARCHAR(255) NOT NULL, " .
			"sublocation VARCHAR(255) NOT NULL, " .			
			"state VARCHAR(255) NOT NULL, " .			
			"country VARCHAR(255) NOT NULL, " .						
			"country_code VARCHAR(5) NOT NULL, " .
			"trans_reference VARCHAR(255) NOT NULL, " .
			"marked_ignored INT(1), " .
            "PRIMARY KEY  (`md5sum`) " .
            ")",
		$linpha_tables['blacklist'] => "CREATE TABLE ".$linpha_tables['blacklist']."(".
			"action VARCHAR(20), ". 
			"value TEXT".
			")",
		$linpha_tables['stats'] => "CREATE TABLE ".$linpha_tables['stats']." (".
				"id int(11) NOT NULL auto_increment,".
				"stats_user int(11) NOT NULL default '0',".
				"stats_time int(11) NOT NULL default '0',".
				"type varchar(12) NOT NULL default '',".
				"md5sum varchar(32) NOT NULL default '',".
				"PRIMARY KEY (id), ".
				"KEY(stats_time), " .
				"KEY(md5sum) " .
			")"
		); 
	break;
	}
/*#########################################################
## prepare LinPHA tables POSTGRESQL style
#########################################################*/
	case "pgsql":
	{
		$tables=array(
		$linpha_tables['config'] => "CREATE TABLE ".$linpha_tables['config']."(
			ID SERIAL PRIMARY KEY,
			option_name VARCHAR(50) NOT NULL,
			option_value VARCHAR(100) NOT NULL,
			userid INTEGER
			)",
		$linpha_tables['users'] => "CREATE TABLE ".$linpha_tables['users']."(
			ID SERIAL PRIMARY KEY,
			nickname VARCHAR(20) NOT NULL,
			password VARCHAR(32) NOT NULL,
			email VARCHAR(255),
			lang VARCHAR(100) DEFAULT 'English',
			level SMALLINT,
			groups VARCHAR(255),
			fullname VARCHAR(50),
			downloads INT default '0',
			downloads_size BIGINT default '0'
			)",
		$linpha_tables['first_lev_album'] => "CREATE TABLE ".$linpha_tables['first_lev_album']."(
			ID SERIAL PRIMARY KEY,
			date TIMESTAMP,
			path VARCHAR(255) NOT NULL,
			name VARCHAR(255) NOT NULL,
			level SMALLINT,
			groups VARCHAR(255) DEFAULT ';public;',
			photos SMALLINT
			)",
		$linpha_tables['sec_lev_album'] => "CREATE TABLE ".$linpha_tables['sec_lev_album']."(
			ID SERIAL PRIMARY KEY,
			date TIMESTAMP,
			path VARCHAR(255) NOT NULL,
			name VARCHAR(255) NOT NULL,
			prev_alb_name VARCHAR(255) NOT NULL,
			level SMALLINT,
			res VARCHAR(64),
			res1 VARCHAR(64)
			)",
		$linpha_tables['third_lev_album'] => "CREATE TABLE ".$linpha_tables['third_lev_album']."(
			ID SERIAL PRIMARY KEY,
			date TIMESTAMP,
			path VARCHAR(255) NOT NULL,
			name VARCHAR(255) NOT NULL,
			prev_alb_name VARCHAR(255) NOT NULL,
			level SMALLINT,
			res VARCHAR(64),
			res1 VARCHAR(64)
			)",
		$linpha_tables['photos'] => "CREATE TABLE ".$linpha_tables['photos']."(
			ID SERIAL PRIMARY KEY,
			date TIMESTAMP,
			name VARCHAR(255),
			filename VARCHAR(255),
			thumbnail BYTEA,
			prev_path VARCHAR(255),
			level SMALLINT DEFAULT 0,
			res SMALLINT DEFAULT 0,
			md5sum VARCHAR(40),
			downloads SMALLINT DEFAULT 0,
			fmkey_location VARCHAR(100),
			fmkey_type VARCHAR(100),
			fmkey_date VARCHAR(100),
			rotation VARCHAR(10) default 0
			)",
		$linpha_tables['photo_cache'] => "CREATE TABLE ".$linpha_tables['photo_cache']."(
			filename VARCHAR(255) PRIMARY KEY NOT NULL,
			photo_id INT NOT NULL,
			date TIMESTAMP,
			used TIMESTAMP,
			hits INT NOT NULL default '0',
			size INT NOT NULL default '0',
			convert_time FLOAT NOT NULL default '0.0'
			)",
		$linpha_tables['category'] => "CREATE TABLE ".$linpha_tables['category']."(
			ID SERIAL PRIMARY KEY,
			name VARCHAR(255) NOT NULL,
			isprivate SMALLINT
			)",
		$linpha_tables['counter_stats'] => "CREATE TABLE ".$linpha_tables['counter_stats']."(
			ID SERIAL PRIMARY KEY,
			date TIMESTAMP,
			ip VARCHAR(32),
			res SMALLINT
			)",
		$linpha_tables['groups'] => "CREATE TABLE ".$linpha_tables['groups']."(
			ID SERIAL PRIMARY KEY,
			groups VARCHAR(15) NOT NULL
			)",
		$linpha_tables['image_comments'] => "CREATE TABLE ".$linpha_tables['image_comments']."(
			ID SERIAL PRIMARY KEY,
			date TIMESTAMP,
			md5sum VARCHAR(40),
			author VARCHAR(20),
			comment TEXT,
			description VARCHAR(255),
			category VARCHAR(255)
			)",
		$linpha_tables['album_comments'] => "CREATE TABLE ".$linpha_tables['album_comments']."(
			ID SERIAL PRIMARY KEY,
			date TIMESTAMP,
			album VARCHAR(255),
			author VARCHAR(20),
			comment TEXT
			)",
		$linpha_tables['plugins'] => "CREATE TABLE ".$linpha_tables['plugins']."(
			ID SERIAL PRIMARY KEY,
			name VARCHAR(255),
			active SMALLINT DEFAULT 0
			)",
		$linpha_tables['guestbook'] => "CREATE TABLE ".$linpha_tables['guestbook']."(
			ID SERIAL PRIMARY KEY,   
			name VARCHAR (50), 
			email VARCHAR (50), 
			country VARCHAR (50),
			url VARCHAR (150),
			comment TEXT,
			date INT
			)",
		$linpha_tables['mail_list'] => "CREATE TABLE ".$linpha_tables['mail_list']."(".
			"ID SERIAL PRIMARY KEY,".
			"name VARCHAR(100),".
			"email VARCHAR(100),".
			"date INT,".
			"active SMALLINT".
			")",
        $linpha_tables['permissions'] => "CREATE TABLE ".$linpha_tables['permissions']."(".
            "id SERIAL PRIMARY KEY, ".
			"type VARCHAR(255) NOT NULL, ".
			"who SMALLINT default '0', ".
			"groups_exceptions VARCHAR(255) default '', ".
			"groups_additional VARCHAR(255) default '', ".
			"and_or SMALLINT default '0', ".
			"alb SMALLINT default '0', ".
			"albums TEXT ".
			")",

        $linpha_tables['meta_iptc'] => "CREATE TABLE ".$linpha_tables['meta_iptc']."(".            
			"md5sum VARCHAR(32) NOT NULL, ".
			
			// caption fields
			"caption TEXT NOT NULL, ".
			"caption_writer VARCHAR(255) NOT NULL, " .
			"headline VARCHAR(255) NOT NULL, " .
			"instructions VARCHAR(255) NOT NULL, " .			

			// keywords fields									
			"keywords VARCHAR(255) NOT NULL, ".
			
			// categories fields
			"category VARCHAR(3) NOT NULL, ".
			"supplemental_categorie VARCHAR(255) NOT NULL, ".
			
			//credits fields
			"copyright VARCHAR(255) NOT NULL, ".
			"byline VARCHAR(255) NOT NULL, " .
			"byline_title VARCHAR(255) NOT NULL, " . 			
			"credit VARCHAR(255) NOT NULL, " .	
			"source VARCHAR(255) NOT NULL, " .
		
			//status fields			
			"edit_status VARCHAR(255) NOT NULL, ".
			"priority VARCHAR(255) NOT NULL, ".			
			"object_cycle VARCHAR(255) NOT NULL, ".
			"job_id VARCHAR(255) NOT NULL, ".			
			"program VARCHAR(255) NOT NULL, ".

			// origin fields
			"object_name VARCHAR(255) NOT NULL, ".
			"date_created VARCHAR(255) NOT NULL, " .			
			"date_released VARCHAR(255) NOT NULL, " .
			"time_created VARCHAR(255) NOT NULL, " .			
			"time_released VARCHAR(255) NOT NULL, " .						
			"city VARCHAR(255) NOT NULL, " .
			"sublocation VARCHAR(255) NOT NULL, " .			
			"state VARCHAR(255) NOT NULL, " .			
			"country VARCHAR(255) NOT NULL, " .						
			"country_code VARCHAR(5) NOT NULL, " .
			"trans_reference VARCHAR(255) NOT NULL, " .
			"marked_ignored SMALLINT " .
			")",
		$linpha_tables['blacklist'] => "CREATE TABLE ".$linpha_tables['blacklist']."(".
			"action VARCHAR(20), ". 
			"value TEXT".
			")",
		$linpha_tables['stats'] => "CREATE TABLE ".$linpha_tables['stats']."(".
			"id SERIAL PRIMARY KEY, ".
			"stats_user BIGINT NOT NULL default '0', ".
			"stats_time BIGINT NOT NULL default '0', ".
			"type VARCHAR(12) default '', ".
			"md5sum VARCHAR(32) default '' ".
			")"
        ); 
	break;
	}

/*#########################################################
## prepare LinPHA tables SQLITE style
#########################################################*/
	case "sqlite":
	{
		$tables=array(
		$linpha_tables['config'] => "CREATE TABLE ".$linpha_tables['config']."(
			ID INTEGER PRIMARY KEY ,
			option_name VARCHAR(50) not null,
			option_value VARCHAR(100) not null,
			userid INTEGER
			)",
		$linpha_tables['users'] => "CREATE TABLE ".$linpha_tables['users']."(
			ID INTEGER PRIMARY KEY,
			nickname VARCHAR(20) not null,
			password VARCHAR(34) not null,
			email VARCHAR(255),
			lang VARCHAR(100) default 'English',
			level SMALLINT,
			groups VARCHAR(255),
			fullname VARCHAR(50),
			downloads INTEGER default '0',
			downloads_size INTEGER default '0'				
			)",
		$linpha_tables['first_lev_album'] => "CREATE TABLE ".$linpha_tables['first_lev_album']."(
			ID INTEGER PRIMARY KEY,
			date TIMESTAMP,
			path VARCHAR(255) not null,
			name VARCHAR(255) not null,
			level INTEGER,
			groups VARCHAR(255) DEFAULT ';public;',
			photos SMALLINT
			)",
		$linpha_tables['sec_lev_album'] => "CREATE TABLE ".$linpha_tables['sec_lev_album']."(
			ID INTEGER PRIMARY KEY,
			date TIMESTAMP,
			path VARCHAR(255) not null,
			name VARCHAR(255) not null,
			prev_alb_name VARCHAR(255) not null,
			level INTEGER,
			res VARCHAR(64),
			res1 VARCHAR(64)
			)",
		$linpha_tables['third_lev_album'] => "CREATE TABLE ".$linpha_tables['third_lev_album']."(
			ID INTEGER PRIMARY KEY,
			date TIMESTAMP,
			path VARCHAR(255) not null,
			name VARCHAR(255) not null,
			prev_alb_name VARCHAR(255) not null,
			level INTEGER,
			res VARCHAR(64),
			res1 VARCHAR(64)
			)",
		$linpha_tables['photos'] => "CREATE TABLE ".$linpha_tables['photos']."(
			ID INTEGER PRIMARY KEY,
			date TIMESTAMP,
			name VARCHAR(255),
			filename VARCHAR(255) not null,
			thumbnail BLOB,
			prev_path VARCHAR(255),
			level INTEGER,
			res INT(5) DEFAULT 0 NOT NULL,
			md5sum VARCHAR(40),
			downloads INTEGER,
			fmkey_location VARCHAR(100),
			fmkey_type VARCHAR(100),
			fmkey_date VARCHAR(100),
			rotation VARCHAR(10) DEFAULT '0'
			)",
		$linpha_tables['photo_cache'] => "CREATE TABLE ".$linpha_tables['photo_cache']."(".
			"filename VARCHAR(255) PRIMARY KEY NOT NULL,".
			"photo_id INT UNSIGNED NOT NULL,".
			"date DATETIME NOT NULL,".
			"used TIMESTAMP,".
			"hits MEDIUMINT UNSIGNED DEFAULT '0' NOT NULL,".
			"size INT UNSIGNED DEFAULT '0' NOT NULL,".
			"convert_time FLOAT DEFAULT '0.0' NOT NULL
			)",			
		$linpha_tables['category'] => "CREATE TABLE ".$linpha_tables['category']."(
			ID INTEGER PRIMARY KEY,
			name VARCHAR(255) not null,
			isprivate SMALLINT
			)",
		$linpha_tables['counter_stats'] => "CREATE TABLE ".$linpha_tables['counter_stats']."(
			ID INTEGER PRIMARY KEY,
			date TIMESTAMP,
			ip VARCHAR(32),
			res INTEGER
			)",
		$linpha_tables['groups'] => "CREATE TABLE ".$linpha_tables['groups']."(
			ID INTEGER PRIMARY KEY,
			groups VARCHAR(15) NOT NULL
			)",
		$linpha_tables['image_comments'] => "CREATE TABLE ".$linpha_tables['image_comments']."(
			ID INTEGER PRIMARY KEY,
			date TIMESTAMP,
			md5sum VARCHAR(40),
			author VARCHAR(20),
			comment TEXT,
			description VARCHAR(255),
			category VARCHAR(255)
			)",
		$linpha_tables['album_comments'] => "CREATE TABLE ".$linpha_tables['album_comments']."(
			ID INTEGER PRIMARY KEY,
			date TIMESTAMP,
			album VARCHAR(255),
			author VARCHAR(20),
			comment TEXT
			)",
		$linpha_tables['plugins'] => "CREATE TABLE ".$linpha_tables['plugins']."(
			ID INTEGER PRIMARY KEY,
			name VARCHAR(255),
			active SMALLINT(1) DEFAULT '0' NOT NULL
			)",
		$linpha_tables['guestbook'] => "CREATE TABLE ".$linpha_tables['guestbook']."(
			ID INTEGER PRIMARY KEY,   
			name VARCHAR (50) , 
			email VARCHAR (50) , 
			country VARCHAR (50) ,
			url VARCHAR (150) ,
			comment TEXT not null ,
			date INT (11)
			)",
		$linpha_tables['mail_list'] => "CREATE TABLE ".$linpha_tables['mail_list']."(".
			"ID INTERGER PRIMARY KEY,".
			"name varchar(100),".
			"email varchar(100),".
			"date INT (14),".
			"active SMALLINT(1) DEFAULT '0' NOT NULL".
			")",
        $linpha_tables['permissions'] => "CREATE TABLE ".$linpha_tables['permissions']."(".
    		"ID INTEGER PRIMARY KEY, ".
    		"type varchar(255) NOT NULL, ".
    		"who int(1) NOT NULL default '0', ".
            "groups_exceptions varchar(255) NOT NULL default '', ".
            "groups_additional varchar(255) NOT NULL default '', ".
            "and_or int(1) NOT NULL default '0', ".
            "alb int(1) NOT NULL default '0', ".
            "albums text NOT NULL" .
            ")",
        $linpha_tables['meta_iptc'] => "CREATE TABLE ".$linpha_tables['meta_iptc']."(".
    		"md5sum VARCHAR(32) NOT NULL, ".
			
			// caption fields
			"caption TEXT NOT NULL, ".
			"caption_writer VARCHAR(255) NOT NULL, " .
			"headline VARCHAR(255) NOT NULL, " .
			"instructions VARCHAR(255) NOT NULL, " .			

			// keywords fields									
			"keywords VARCHAR(255) NOT NULL, ".
			
			// categories fields
			"category VARCHAR(3) NOT NULL, ".
			"supplemental_categorie VARCHAR(255) NOT NULL, ".
			
			//credits fields
			"copyright VARCHAR(255) NOT NULL, ".
			"byline VARCHAR(255) NOT NULL, " .
			"byline_title VARCHAR(255) NOT NULL, " . 			
			"credit VARCHAR(255) NOT NULL, " .	
			"source VARCHAR(255) NOT NULL, " .
		
			//status fields			
			"edit_status VARCHAR(255) NOT NULL, ".
			"priority VARCHAR(255) NOT NULL, ".			
			"object_cycle VARCHAR(255) NOT NULL, ".
			"job_id VARCHAR(255) NOT NULL, ".			
			"program VARCHAR(255) NOT NULL, ".

			// origin fields
			"object_name VARCHAR(255) NOT NULL, ".
			"date_created VARCHAR(255) NOT NULL, " .			
			"date_released VARCHAR(255) NOT NULL, " .
			"time_created VARCHAR(255) NOT NULL, " .			
			"time_released VARCHAR(255) NOT NULL, " .						
			"city VARCHAR(255) NOT NULL, " .
			"sublocation VARCHAR(255) NOT NULL, " .			
			"state VARCHAR(255) NOT NULL, " .			
			"country VARCHAR(255) NOT NULL, " .						
			"country_code VARCHAR(5) NOT NULL, " .
			"trans_reference VARCHAR(255) NOT NULL, " .
			"marked_ignored INT(1)" .
			")",
		$linpha_tables['blacklist'] => "CREATE TABLE ".$linpha_tables['blacklist']."(".
			"action VARCHAR(20), ". 
			"value TEXT".
			")",
		$linpha_tables['stats'] => "CREATE TABLE ".$linpha_tables['stats']." (".
				"ID INTEGER PRIMARY KEY,".
				"stats_user INT(11) NOT NULL default '0',".
				"stats_time INT(11) NOT NULL default '0',".
				"type VARCHAR(12) default '',".
				"md5sum VARCHAR(32) default ''".
			")"
		); 
	break;
	}
}
		
while (list($name,$query)=each($tables))
{
	print("$table_create $name-->");
	$result=$db->Execute("$query");
	if (!$result)
	{
		print("<font color=red>$table_create_error</font><br>");
		die ("ERROR");
	}else
	{
		print("<font color=green>$table_create_ok</font><br>");
	}
}

/**
 * create dynamically the linpha_meta_exif table
 */
    include_once(TOP_DIR.'/include/metadata.class.php');
    $metadata = new MetaData;
    $metadata->createExifTable();

/**
 * make md5sum UNIQUE in postgres DB (linpha_meta_iptc)
 * linpha_meta_exif is already done by $metadata->createExifTable()
 * + add important indexes
 */
if($DB_type == "pgsql")
{
	$add = $db->Execute("CREATE UNIQUE INDEX md5index " .
    			"ON ".$_POST['db_prefix']."meta_iptc USING btree (md5sum)");
	/**
	 * photos
	 */
	$add = $db->Execute("CREATE INDEX prev_path " .
			"ON ".$_POST['db_prefix']."photos USING btree (prev_path)"); 		
	$add = $db->Execute("CREATE INDEX date " .
			"ON ".$_POST['db_prefix']."photos USING btree (date)"); 		
	$add = $db->Execute("CREATE INDEX name " .
			"ON ".$_POST['db_prefix']."photos USING btree (name)"); 		
	$add = $db->Execute("CREATE INDEX filename " .
			"ON ".$_POST['db_prefix']."photos USING btree (filename)"); 		
	$add = $db->Execute("CREATE INDEX md5sum " .
			"ON ".$_POST['db_prefix']."photos USING btree (md5sum)"); 		
	/**
	 * others
	 */
	$add = $db->Execute("CREATE INDEX filename_cache " .
			"ON ".$_POST['db_prefix']."photo_cache USING btree (filename)"); 	
	$add = $db->Execute("CREATE INDEX stats_time " .
			"ON ".$_POST['db_prefix']."stats USING btree (stats_time)"); 	
	$add = $db->Execute("CREATE INDEX stats_md5sum " .
			"ON ".$_POST['db_prefix']."stats USING btree (md5sum)"); 	

}
    			
/*#########################################################
## add LinPHA admin user to linpha_users table
#########################################################*/
	print("$table_insert_admin $_POST[admin_name]-->");
	
	$result = $db->Execute("INSERT INTO ".$linpha_tables['users']." " .
			"VALUES('1','".$_POST['admin_name']."','".md5($_POST['admin_pass'])."'," .
			"'".$_POST['admin_email']."','".$_POST['language']."','10',';1;','','0','0')");
	if( ! $result)
	{
		print("<font color=red>$table_insert_admin_error</font><br>");
	}
	else
	{
		print("<font color=green>$table_insert_admin_ok</font><br>");
	}

/*#########################################################
## create random password for bigadmin (security)
#########################################################*/
	$random_pass=random_password(8);
	$random_user=random_password(4);

	$dbrand_admin=@$_POST['db_admin']."_$random_user";

/*#########################################################
## set DB user permissions (if bigadmin)
#########################################################*/
	if($_POST['big_admin'])
	{
		switch ($DB_type)
		{
			case "mysql":
			{
				if($_POST['db_host'] == 'localhost' OR $_POST['db_host'] == '127.0.0.1')
				{
					$local_host = 'localhost';
				} else {
					$local_host = '%';	// we don't know what our extern ip adress or hostname is "SELECT USER()" would be a help, but only for mysql, therefore set to "all hosts"
				}
				$grant_user=$db->Execute("GRANT ALL ON ".$DB_name.".* TO '".
							$dbrand_admin."'@'".$local_host."' ".
							"IDENTIFIED BY '".$random_pass."' WITH GRANT OPTION");
				$flush_priv=$db->Execute("FLUSH PRIVILEGES");
				break;
			}
		}
	}

/*#########################################################
## create db_connect file
#########################################################*/
	print("$write_db_config-->");
		$fp=fopen("../sql/db_connect.php","w+");
		
		if($fp)
		{
			$str="<?php\n";
			$str.="if(!@include_once('adodb/adodb.inc.php')) : include_once('../adodb/adodb.inc.php'); endif;\n";
			$str.="/* LinPHA table prefix*/\n";
			$str.="if(!defined('PREFIX')): define('PREFIX', \"$_POST[db_prefix]\"); endif;\n";
			$str.="/* DB connect*/\n";

			if($_POST['big_admin'])
			{
				switch ($DB_type)
				{
					case "mysql":
					{
					$str.="\$db = &NewADOConnection('mysql');\n";
					$str.="\$db->Connect(\"$DB_host:$DB_port\", \"$dbrand_admin\", \"$random_pass\", \"$DB_name\");\n";  
					break;
					}

					case "pgsql":
					{
					$str.="\$db = &NewADOConnection('postgres7');\n";
					if(isset($DB_pass))
					{
						$str.="\$db->Connect(\"host=$DB_host user=$DB_admin password=$DB_pass dbname=$DB_name\");\n";
					}
					else
					{
						$str.="\$db->Connect(\"host=$DB_host user=$DB_admin dbname=$DB_name\");\n";
					}
					
					break;
					}
					case "sqlite":
					{
					$str.="\$db = &NewADOConnection('sqlite');\n";
					$str.="\$db->Connect(TOP_DIR.\"/sql/linpha_".$sqlite_random.".sqlite\");\n"; 
					break;
					}
				}
			}else
			{
				switch ($DB_type)
				{
					case "mysql":
					{
					$str.="\$db = &NewADOConnection('mysql');\n";
					$str.="\$db->Connect(\"$DB_host:$DB_port\", \"$DB_admin\", \"$DB_pass\", \"$DB_name\");\n";  
					break;
					}
					case "pgsql":
					{
					$str.="\$db = &NewADOConnection('postgres7');\n";
					if(isset($DB_pass))
					{
						$str.="\$db->Connect(\"host=$DB_host user=$DB_admin password=$DB_pass dbname=$DB_name\");\n";
					}
					else
					{
						$str.="\$db->Connect(\"host=$DB_host user=$DB_admin dbname=$DB_name\");\n";
					}
					break;
					}
					case "sqlite":
					{
					$str.="\$db = &NewADOConnection('sqlite');\n";
					$str.="\$db->Connect(\"./sql/linpha_".$sqlite_random.".sqlite\");\n"; 
					break;
					}
				}
			}
			$str.="\n";
			$str.="?>";

			fputs($fp,$str,strlen($str));
			fclose($fp);
			if(!chmod("../sql/db_connect.php", 0600)) {
			  echo "chmod for db_connect.php failed, please set to 600 manually (security), sorry<br />";
			}
		}
		else
		{
			print("<font color=red>$fopen_error</font><br>");
		}

/*##############################################################
## check for GD lib version wether to use imagecreate or imagecreatetruecolor
##############################################################*/
	ob_start();
	phpinfo(8);
	$phpinfo=ob_get_contents();
	ob_end_clean();
	$phpinfo=strip_tags($phpinfo);
	$phpinfo=stristr($phpinfo,"gd version");
	$phpinfo=stristr($phpinfo,"version");
	$end=strpos($phpinfo,".");
	$phpinfo=substr($phpinfo,0,$end);
	$length = strlen($phpinfo)-1;
	$phpinfo=substr($phpinfo,$length);
	if($phpinfo<2)
	{
		$gd_version="<2";
	}
	else
	{
		$gd_version=">2";
	}

/*##########################################################
## prepare config table values
##########################################################*/
	$new_options = array(
            'db_version' => '1017',
			'photo_width' => '512',
			'photo_height' => '384',
			'lang' => $_POST['language'],
			'autolang' => '1',
			'photos_row' => '3',
			'photos_col' => '4',
			'filenames' => '1',
			'autoconf'   => '1',
			'counterstat' => '1',
			'exifinfo' => '1',
			'exif_level' => 'medium',
			'exif_default' => '0',
			'users' => '0',
			'ip_blocking' => '15',
			'gd_version' => $gd_version,
			'use_convert' => $_POST['use_convert'],
			'convert_path' => $_POST['convert_path'],
			'sort_thumbs' => 'file',
			'style' => 'aqua',
			'thumb_quality' => $_POST['quality'],
			'slideshow' => '1',
			'mini_img_preview' => 'default',
			'img_rotation' => '0',
			'img_quality' => '75',
			'photo_archive_title' => '',
			'thumb_size' => $_POST['thumb_size'],
			'thumb_border' => '5',
			'thumb_border_color' => '#CCCCCC',
			'db_type' => $DB_type,
			'autologin' => '1',
			'timer' => '0',
			'gb_max_pages' => '8',
			'gb_anon_posts' => '1',
			'gb_posts_order' => 'DESC',
			'cache_path' => 'sql/cache',
			'cache_size' => '0', 		// 0 = unlimited, x = max cache size in bytes
			'alb_download_limit' => '0',
			'navigation_view' => '0',
			'mail_block_size' => '30',
			'mail_from_address' => 'noreply@'.$_SERVER["HTTP_HOST"].'',
			'show_comments_in_subfolder' => '1',
			'default_date_format' => "%a %m/%d/%Y",
			'default_time_format'=> "%I:%M:%S %p",
			'showNewImagesFolderDays' => '7',
			'showNewImagesFolder' => '1',
			'tmp_dir' => 'sql/tmp',
			'mail_mode_max_size' => (1024*1024*2),
            'adodb_caching' => '0',
            'adodb_cache_time' => '1440',
            'adodb_cache_path' => 'sql/adocache',
            'random_index_image' => '0',
            'random_image_size' => '300',
            'log_email' => 'LinPHA Logger<log@'.$_SERVER["HTTP_HOST"].'>',
            'log_email_headers' => 'From:LinPHA Logger<noreply@'.$_SERVER["HTTP_HOST"].'>',
            'log_email_subject' => 'Linpha Log',
            'log_filename' => 'sql/tmp/linpha.log',
            'log_method_db' => 'none',
            'log_method_filemanager' => 'none',
            'log_method_login' => 'none',
            'log_method_thumbnail' => 'none',
            'log_method_update' => 'none',
            'log_method_guestbook' => 'none',
            'log_method_comments' => 'none',
            'update_time' => time(),
            'update_notice' => '1',
			'iptcinfo' => '0',
			'iptc_level' => 'medium',
            'video_thumbnail' => '1',
			'blacklist_comments' => '1',
			'blacklist_guestbook' => '1',
			'im_bracket_support' => $_POST['bracket_support'],
			'stats_anonymous_downloads' => '0',
			'stats_anonymous_downloads_size' => '0',
			'rss_title' => 'LinPHA RSS',
			'rss_description' => 'LinPHA RSS Feed',
			'rss_link' => 'http://linpha.sf.net',
			'rss_language' => 'en',
			'rss_copyright' => 'The LinPHA Developers',
			'rss_generic_title' => '',
			'rss_last_mod' => '0',
			'stats_cache_time' => '24',
			'stats_realtime' => '1',
			'stats_last_refresh' => '0',
			'SPAM_attacks' => '0',
			'exif_image_autorotate' => '1',
			'maps_setup_ok' => '0',
			'maps_yahoo_id' => 'YourYahooIDHere', 
			'maps_google_key' => 'YourGoogleKeyHere',
			'maps_type' => 'yahoo',
			'maps_default_zoom' => '16',
			'maps_default_zoom_location' => 'London',
			'maps_yahoo_type_control' => '1',
			'maps_yahoo_pan_control' => '1',
			'maps_yahoo_slide_control' => '1',
			'maps_marker_auto_popup' => '1',
			'maps_display_type' => '3',
			'maps_google_ctrl_size' => '1',
            'files_2_ignore' => 'Thumbs.db,ZbThumbnail.info,_vti_cnf,_derived,Picasa.ini,Cdlabel.alb',
            'fileext_2_ignore' => 'thm,doc,txt'
			
		);

/*#########################################################
## create cache directories
#########################################################*/
	/**
	* delete cache folder if already exists
	*/
	if(file_exists('../sql/cache'))
	{
		include_once(TOP_DIR.'/plugins/cache/func.cache.php');
		photo_cache_delete_folder('sql/cache');
	}
	
	/**
	* create directory structure
	*/
	if(!file_exists('../sql/cache'))
	{
		mkdir("../sql/cache", 0700);
		for($i=0 ; $i<=9 ; $i++)
		{
				mkdir("../sql/cache/{$i}", 0700);
		}
	}
	
/*#########################################################
## create tmp directory
#########################################################*/
	if(!file_exists('../sql/tmp'))
	{	
		mkdir('../sql/tmp', 0700);
	}
	
	/**
 	* @author bzrudi create adodb cache directory
 	*/
	if(!file_exists('../sql/adocache'))
	{ 
    	mkdir('../sql/adocache',0700);
	}
	
/*#########################################################
## insert into config
#########################################################*/
while( list($name, $value) = each($new_options) )
	{
		$write_result=$db->Execute("INSERT INTO ".$linpha_tables['config']." (option_name, option_value) VALUES ('".$name."', '".$value."')");
	}

/*##########################################################
## insert into groups
##########################################################*/

	$ins_admin=$db->Execute("INSERT INTO ".$linpha_tables['groups']." (id, groups) VALUES (1,'admin')");	// id must be 1 !
	$ins_friend=$db->Execute("INSERT INTO ".$linpha_tables['groups']." (groups) VALUES ('friend')");
	$ins_uploader=$db->Execute("INSERT INTO ".$linpha_tables['groups']." (groups) VALUES ('uploader')");

/*##########################################################
## insert into blacklist
##########################################################*/

	$ins_blacklist_comment=$db->Execute("INSERT INTO ".$linpha_tables['blacklist']." (action, value) VALUES ('comment','jack, casino, poker, betting, gambling, sex, blackjack, winning')");
	$ins_blacklist_guestbook=$db->Execute("INSERT INTO ".$linpha_tables['blacklist']." (action, value) VALUES ('guestbook','jack, casino, poker, betting, gambling, sex, blackjack, winning')");

/*##########################################################
## insert into plugins
##########################################################*/

	$ins_sql=$db->Execute("INSERT INTO ".$linpha_tables['plugins']." (name) VALUES ('sql')");
	$ins_bm=$db->Execute("INSERT INTO ".$linpha_tables['plugins']." (name) VALUES ('benchmark')");
	$ins_wm=$db->Execute("INSERT INTO ".$linpha_tables['plugins']." (name) VALUES ('watermark')");
	$ins_gb=$db->Execute("INSERT INTO ".$linpha_tables['plugins']." (name) VALUES ('guestbook')");
	$ins_cache=$db->Execute("INSERT INTO ".$linpha_tables['plugins']." (name) VALUES ('cache')");
	$ins_mail=$db->Execute("INSERT INTO ".$linpha_tables['plugins']." (name) VALUES ('mail')");
	//$ins_facetmap=$db->Execute("INSERT INTO ".$linpha_tables['plugins']." (name) VALUES ('facetmap')");
	$ins_log=$db->Execute("INSERT INTO ".$linpha_tables['plugins']." (name) VALUES ('log')");
	$GLOBALS['db']->Execute("INSERT into ".$linpha_tables['plugins']." (name, active) VALUES ('stats', '0')");
	$GLOBALS['db']->Execute("INSERT into ".$linpha_tables['plugins']." (name, active) VALUES ('RSS', '0')");
	$GLOBALS['db']->Execute("INSERT into ".$linpha_tables['plugins']." (name, active) VALUES ('maps', '0')");

/*##########################################################
## insert into permissions
##########################################################*/
    $GLOBALS['db']->Execute("INSERT into ".$linpha_tables['permissions']." ".
            "(type, who, groups_exceptions, groups_additional, and_or, alb, albums) ".
            "VALUES ('watermark', '1', '', '', 0, 0, '')");
    $GLOBALS['db']->Execute("INSERT into ".$linpha_tables['permissions']." ".
            "(type, who, groups_exceptions, groups_additional, and_or, alb, albums) ".
            "VALUES ('download', '1', '', '', 0, 0, '')");
    $GLOBALS['db']->Execute("INSERT into ".$linpha_tables['permissions']." ".
            "(type, who, groups_exceptions, groups_additional, and_or, alb, albums) ".
            "VALUES ('img_comments', '1', '', '', 0, 0, '')");
    $GLOBALS['db']->Execute("INSERT into ".$linpha_tables['permissions']." ".
            "(type, who, groups_exceptions, groups_additional, and_or, alb, albums) ".
            "VALUES ('basket_print', '1', '', '', 0, 0, '')");
    $GLOBALS['db']->Execute("INSERT into ".$linpha_tables['permissions']." ".
            "(type, who, groups_exceptions, groups_additional, and_or, alb, albums) ".
            "VALUES ('basket_download', '1', '', '', 0, 0, '')");
    $GLOBALS['db']->Execute("INSERT into ".$linpha_tables['permissions']." ".
            "(type, who, groups_exceptions, groups_additional, and_or, alb, albums) ".
            "VALUES ('basket_mail', '1', '', '', 0, 0, '')");
    $GLOBALS['db']->Execute("INSERT into ".$linpha_tables['permissions']." ".
            "(type, who, groups_exceptions, groups_additional, and_or, alb, albums) ".
            "VALUES ('img_description', '0', '', ';1;', 0, 0, '')");
	$GLOBALS['db']->Execute("INSERT into ".PREFIX."permissions " .
			"(type, who, groups_exceptions, groups_additional, and_or, alb, albums) ".
			"VALUES ('stats','1','','','0','','')");
	$GLOBALS['db']->Execute("INSERT into ".PREFIX."permissions " .
			"(type, who, groups_exceptions, groups_additional, and_or, alb, albums) ".
			"VALUES ('maps','1','','','0','0','')");
			
/*##########################################################
## Create watermark config
##########################################################*/
	include_once('../plugins/watermark/func.watermark.php');
	$arr_config = array_watermark();
	while(list($name,$value) = each($arr_config) )
	{
		$write_result=$db->Execute("INSERT INTO ".$linpha_tables['config']." (option_name, option_value) VALUES ('".$name."','".$value."')");
	}
	print("<font color=green>$fopen_ok</font><br>");
	print("<br><strong>$install_finish_msg</strong><br>
			<strong>$folder_remove_hint</strong><br><br>");
	print("<a href=../index.php><b><u>$admin_task</u></b></a>");

print ("</td></tr>");

// end switch case install
	}
}

include_once(TOP_DIR.'/footer.php');
?>
