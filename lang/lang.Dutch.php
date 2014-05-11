<?php
/* language file */
/* Feel free to modify this file to make use of your native language.
If you do so, please save it as lang.YourLanguage.php in the LinPHA /lang dir
and PLEASE mail me a copy! mailto:bzrudi@tuxpower.de
Nederlands Vertaler Bas Schaart bas_schaart@hotmail.com 
Verder vertaald door Lieven Nieuwlaet lievenn@users.sourceforge.net aug 2004
*/

/*#################################################
## linpha messages
#################################################*/
/* left menu */
$album="Foto Albums";

/* alerts */
$alert_fopen="Error! Bestand kon niet geopend worden...";
$printing_probs="Er zijn problemen bij het afdrukken";
$printing_probs_msg="Afdrukken!";

/* global messages */
$subfolders="subfolders"; 
$img_th="Foto's";
$in_th="in"; /* used for the Photos in $foldername */
$alb_th="Albums in subfolder";
$thumb_hint_msg="Klik voor verdere informatie";
$latest_photo="Laatste";
$view_at="kies grootte"; 
$close_button="sluiten"; 
$help="help"; 
$misc_help="Miscellaneous Help";

/*#################################################
## installation
#################################################*/
/* install.php (page 1) */
$welc_header="Wekom bij LinPHA";
$welc_text="Welkom bij LinPHA, het lijkt erop dat LinPHA nog niet geinstalleerd is, voor eerst de installatie uit!";
$welc_hint="<b>Voordat je verder gaat:</b>";
$welc_hint1="1. Maak directory &quot;<b>linpha/sql</b>&quot; schrijfbaar!
			(i.e. chmod 777 sql)";
$next_button="Volgende"; /* used as left menu header in all 4 stages */
$inst_msg="LinPHA installatie"; /* used as left menu header in all 4 stages */
$inst_status_1="Selecteer de taal en druk op &quot;volgende&quot;";
$inst_status_step1="Stap 1 of 4";

/* sec_stage_install (page 2) */
$inst_access_msg="Configuratie de databasetoegang";
$inst_full_access_msg="<b>JA !</b><br> Ik heb volledige toegang tot de MySQL database, ik mag databases en gebruikers aanmaken<br>
						In andere woorden: Het is mijn eigen Server!";
$inst_limited_access_msg="<b>NEE !</b><br> Ik ga LinPHA instaleren met beperkte toegang<br>
						tot de MySQL database. Mijn ISP staat niet toe om databases en gebruikers aan te maken.";
$inst_status_2="Kies de SQL toegangstype, als je het niet zeker weet kies NEE!";
$inst_status_step2="Stap 2 of 4";

/* requirements */
$req_check_msg="Controleren van de systeemeisen";
$req_found_msg="OK gevonden";
$req_miss_msg="Niet gevonden";
$req_safe_fail="ENABLED";
$req_safe_ok="DISABLED";
$php_safemode_check_msg="Controleren van PHP safe mode...";
$php_version_check_msg="Controleren van PHP versie > 4.1.0...";
$mem_check_msg="Controleren von PHP memory limit...";
$gd_check_msg="Controleren van de GD library...";
$convert_check_msg="Controleren van ImageMagick...";
$exif_check_msg="Controleren van EXIF support...";
$summary_msg="OVERZICHT:";
$safe_mode_err="De Server is geconfigureerd met PHP safe_mode. LinPHA werkt niet als
		    safe_mode aanstaat in php.ini !";
$inst_abort_msg="!!! INSTALLATIE AFGEBROKEN !!!";
$php_version_err="De Server gebruikt een PHP version < 4.1.0. LinPHA werkt niet als er geen
			 upgrade wordt uitgevoerd op jouw PHP installatie.";
$gd_convert_err="ImageMagick of de GD library kon niet gevonden worden.
		    LinPHA wwerkt niet als je niet 1 van deze twee installeert.";
$convert_sum_found_msg="ImageMagick is gevonden op deze server. Dit geeft LinPHA
			het recht om thumbnails te maken met een hoge kwaliteit.";
$convert_sum_miss_msg="ImageMagick is NIET gevonden op deze server. Dit resulteert in
			lagere kwaliteit.";
$exif_sum_found_msg="Er is EXIF ondersteuning gevonden op de server. LinPHA
			laat nu gedetailleerde informatie bij de foto's zien.";
/* TODO (change this one)
$exif_sum_miss_msg="NO exif support found in your PHP installation. This will prevent LinPHA
			from showing detailed Photo information.";
to ==>*/
$exif_sum_miss_msg="Geen exif ondersteuning gevonden op de server. LinPHA zal gebruik maken van de ingebouwde EXIF parser.";

$session_path_check_msg="controleren voor de session_safe_path...";
$session_path_found_msg="Session_safe_path is ingevuld php.ini. Inloggen geactiveerd. Locatie is: ";
$session_path_miss_msg="Geen waarde gevonden voor session_save_path. U MOET een locatie opgeven
			in php.ini anders kunt u niet inloggen!!";
$mem_limit_ok_msg="OK, je PHP geheugen limiet is >= 16MB. Er mag geen probleem zijn met het
			maken van de thumbnail.";
$mem_limit_low_msg="Hmmh, je PHP geheugen limit is <=16MB. Als je problemen krijgt met thumbnails, bv dat
			dat er wat missen, probeer dan de memory_limit in php.ini te vergroten of verander je foto's
			in een lagere resolutie en probeer dan opnieuw...";



$choose_def_quali="Kies de standaardkwaliteit van de foto's";
$choose_def_quali_warn="Zet de kwaliteit niet te hoog indien uw cpu &lt; 1Ghz (CPU wordt zwaar belast)";

/* third_stage_install (page 3) */
$inst_superadmin_header="Configuratie MySQL Database Administrator";
$inst_superadmin_name="MySQL DB Admin naam:";
$inst_superadmin_name_info="<-De MySQL Database Admin naam (moet bestaan in de DB)";
$inst_superadmin_pass="MySQL DB Admin wachtoord:";
$inst_superadmin_pass_info="<-wachtwoord van MySQL Administrator (moet bestaan in de DB)";

$inst_admin_header="Configureren van de LinPHA Administrator";
$inst_admin_name="LinPHA Admin naam:";
$inst_admin_name_info="<-De LinPHA Admin naam";
$inst_admin_pass="LinPHA Admin wachtwoord:";
$inst_admin_pass_info="<-Het LinPHA Admin wachtwoord";
$inst_admin_email="Admin email:";
$inst_admin_email_info="<-email adres van de Administrator";

$inst_db_header="Configuratie LinPHA Database connectie";
$inst_db_host="Hostnaam:";
$inst_db_host_info="<-hostnaam: standaard &quot;localhost&quot;";
$inst_db_host_info2="<-hostnaam: de MySQL database hostname";
$inst_db_host_port="Poortnummmer:";
$inst_db_host_port_info="<-poorttnummer: als je het niet weet, zo laten!";
$inst_db_name="LinPHA Database naam:";
$inst_db_name_info="<-De Database naam voor LinPHA, standaard &quot;linpha&quot;";
$inst_db_name2="Database naam:";
$inst_db_name_info2="<-De database naam gegeven door jou ISP";
$inst_table_prefix="\"Voorvoegsel\" voor LinPHA tables";
$inst_table_prefix_info="<-De \"Voorvoegsel\" om de LinPHA tabellen te gebruiken";

$general_header="Hoofd configuratie";

$general_album_title="Titel van het album";
$general_album_title_info="<-Leeg laten om de standaardwaarde te gebruiken";
$general_photos_row="Aantal rijen op het scherm:";
$general_photos_row_info="<-i.e. rijen van thumbnails op het scherm!";
$general_photos_col="Aantal kolommen op het scherm:";
$general_photos_col_info="<-i.e. kolommen van thumbnails op het scherm!";
$general_photos_width="Breedte van de foto:";
$general_photos_width_info="<- standaard 512!";
$general_photos_height="Hoogte van de foto:";
$general_photos_height_info="<- standaard 384!";
$general_img_quality="Kwaliteit van de gedetailleerde foto:";
$general_img_quality_info="<- zet de kwaliteit tussen 0-100 (standaard 75)";

$inst_status_3="Je moet alle kolommen invullen!";
$inst_status_step3="Stap 3 of 4";

/* forth_stage_install (page 4) */
$inst_status_4="Gefeliciteerd je installatie is gelukt! LinPHA kan nu gebruikt worden";
$inst_status_step4="Stap 4 of 4";
$inst_submit="Klaar";
$inst_db_tryconn="Verbinding maken met de Database Server";
$inst_db_tryconn_error="Er is een fout opgetreden met de verbinding naar de Database Server, using:";
$inst_db_tryconn_ok="OK, verbinding is gemaakt!";
$inst_db_tryinst="Proberen om de Database aan te maken:";
$inst_db_tryinst_error="Error met het maken van de Database:";
$inst_db_tryinst_ok="OK, gemaakt!";
$inst_create_tb_msg="OK, maken van de alle tabellen";
$inst_db_connect_inc_msg="Error om verbinding te maken met de Database Server!";
$inst_db_connect_inc_msg1="Error met selectie maken van ".@$db_realname." from DB<br>
	Als dit bericht naar voren komt, moet je de file db_connect.php<br>
	in de linpha vernietigen&quot;sql&quot; subdir!";
$table_create="Aanmaken tabel:";
$table_create_error="Error met het aanmaken van de tabellen!";
$table_create_ok="OK, gemaakt!";
$table_insert_admin="Aanmaken van de Admin gebruikers naam:";
$table_insert_admin_error="Error met het aanmaken van het Admin naam!";
$table_insert_admin_ok="OK, gemaakt!";
$write_db_config="Opslaan van de Database config naar een bestand";
$fopen_error="Kon sql/db_config.php niet openen voor herschrijven, je moet chmod 777 uitvoeren op deze directory en dan de installatie herstarten";
$fopen_ok="OK, config herschreven!";
$install_finish_msg="OK. Installatie compleet!!";
$admin_task="klik om verder te gaan";
$file_create_ok="OK, gemaakt!";
$configure_error="Alles invullen AUB !!!";
$could_not_open="Error, kan de tabel users niet openen! Het lijkt erop dat jij niet gemachtigt bent om nieuwe users aan te makenm in de DB<br>
				Kies aub gelimiteerde access installatie methode bij pagina 2 van deze installatie<br>";

/*#################################################
## header.php
#################################################*/
$page_title="Linux Foto Album";
$head_title="Linux Foto Album";
$book_home="Beginscherm";
$book_about="Info";
$book_admin="Admin";
$book_admin_user="Instellingen";
$book_links="Links";
$book_search="Zoeken";
$book_logout="Uitloggen";
$book_login="Inloggen"; 
$num_pictures="foto's:";
$user_visits="keer bezocht; ";
$user_online="bezoeker(s) online";
$guest="gast";
$html_lang="nl";
$html_charset="iso-8859-1";

/*#################################################
## index.php
#################################################*/
$index_welc_text="Veel Plezier!!";

/*#################################################
## search.php
#################################################*/
$search_header="Linpha Zoek Machine";
$radio_all="Alles";
$radio_descript="Beschrijving";
$radio_comment="Commentaar";
$radio_category="Categorie";
$radio_file="Bestandsnaam";
$search_in="Zoek in Album";
$search_all="Alle Albums";
$search_for="Zoek Op Woord";
$search_button="Zoek";
$photos_found="gevonden";
$search_info="LinPHA zoek pagina";
$search_msg="Zoeken van foto's in de LinnPHA database:";

/*#################################################
## img_view.php
#################################################*/
$img_detail="Foto Info";
$img_size="Normaal Formaat";
$img_com="commentaar";
$img_des="Beschrijving";
$img_cat="categorie";
$img_name="naam";
$img_info_stored="Commentaar opgeslagen in de DB";
$please_login="Hier <a href='login.php'><font color='#000099'><u>inloggen</u></font></a> om commentaar toe te voegen";
$back_to_thumbs="<b><u>terug naar kleine foto's</u></b>";
$back_to_search="<b><u>terug naar zoeken</u></b>";
$button_next="volgende";
$button_prev="vorige";
$exif_ext_error="GEEN EXIF ondersteuning in PHP versie, sorry";
$exif_error="Sorry, foto heeft geen exif informatie!";
$exif_more="meer info";
$exif_less="minder info";
$detail_header="Foto";
$detail_header1="van";
$detail_header2="in album<br>";
$php_to_old="PHP < 4.2.0 EXIF uitgeschakeld!";
$views="bekeken";
$slideshow="Diashow";
$seconds="seconden";
$go="Start";
$stopslide="Stop Diashow";
/* image rotating */ 
$img_rotate_ok="draai foto";
$img_rotating="Problemen bij het draaien van foto"; // TOC entry
$img_rotating_hint1="Het draaien van foto's is niet mogelijk! Klik";
$img_rotating_hint2="om te zien waarom";
/* @translators! $img_rotating_hint1 and $img_rotating_hint2 are ONE sentense
later! i.e. "Image rotating DISABLED! click here to see why", so make sure it make sense ;-)*/

/*#################################################
## login.php
#################################################*/
$login_msg="Hier Inloggen!";
$login_error="onbekende gebruikersnaam of wachtwoord";
$login_name="Naam";
$login_pass="Wachtwoord";
$login_info="LinPHA login pagina";
$login_request_account_info="Vraag een nieuwe account aan:"; 
$login_request_target="Contacteer de LinPHA Administrator"; 
$login_admin_info="Om administratieve taken uit te voeren login met je admin account";
$login_friend_account_info="Als je al een account hebt &quot;friend&quot; ,
dan kun je je persoonlijke opties hier veranderen";

/*#################################################
## admin.php
#################################################*/
/* other messages */
$admin_page_header="LinPHA Administratie Pagina";
$please_turn_off_msg="Zet AUB Auto aanmaken/verwijderen thumbnails UIT, wanneer je foto's aan het toevoegen bent.<br>
						LinPHA werkt dan 10x sneller! :)";
/* left menu */
$logout_msg="Uitloggen";
$welc_msg="welkom ";
$stat_msg="Je bent nu gemachtigd om administratieve taken uit te voeren, en <b>commentaar</b> te plaatsen bij de foto's";
$back_to_msg="<b>terug naar foto's</b>";
$href_general_conf="Hoofd Configuratie";
$href_user_conf="Gebruiker -en groepsbeheer";
$href_folder_conf="Mappen beheren";
$href_sql="MySQL DB beheer"; 
$href_stats="LinPHA statistieken";
$href_ftp="Bestandsbeheer"; 
$href_other_conf="Thumbnails EXIF/IPTC";


/* general config */
/* uses also entries from install.php */
$default_language="LinPHA standaard taal";
$default_language_info="<--standaard taal";
$general_auto_lang="Aanzetten/uitzetten automatische dectectie van de taal"; 
$general_auto_lang_info="<-- detecteer automatisch de taal van de bezoeker";
$general_success_msg="! Veranderingen opgeslagen !";


$general_rotate="Aanzetten/uitzetten draaien van foto's";
$general_rotate_info="<-- <b>OPGELET! klik op info</b>";
$general_exifinfo="Aanzetten/uitzetten ALLE EXIF ondersteuning";
$general_exifinfo_info="<-- aanzetten/uitzetten gebruik van de EXIF informatie";
$general_exifdefault="Toon standaard de EXIF informatie";
$general_exifdefault_info="<-- aanzetten om standaard de EXIF informatie te tonen";

$general_exiflevel="Niveau van de getoonde EXIF informatie";
$general_exiflevel_info="<-- Hoeveel EXIF informatie wil je";
$exif_low="laag";
$exif_medium="medium";
$exif_high="hoog";
$general_filename="Aanzetten/uitzetten bestandsnamen";
$general_filename_info="<-- zet aan om de bestandsnaam te zien onder de thumbnails";
$general_thumb_order="Sorteer thumbnails op";
$general_thumb_order_info="<-- sorteer thumbs op bestandsnaam of op datum";
$thumb_order_date="datum";
$thumb_order_file="bestandsnaam";
$general_autoconf="Auto aanmaken/verwijderen thumbnails";
$general_autoconf_info="<--uitzetten voor grotere snelheid";
$general_counterstat="Aanzetten/uitzetten teller";
$general_counterstat_info="<-- standaard op aan";
$general_blocking="IP blokkade tijd in minuten";
$general_blocking_info="<--gebruiker word niet gezien als nieuwe gebruiker voor x minuten";
$general_theme="Verander het thema van LinPHA";
$general_theme_info="<-- set LinPHA standaard thema";
$aqua_theme="Water";
$colored_theme="Kleurijk";
$neptune_theme="Neptune";
$shadow_theme="Shadow"; 
$general_hq="Aanzetten/uitzetten HQ thumbnails en fotos";
$general_hq_info="Uitzetten om hogere snelheden te halen";
$submit_button_general="Veranderingen in database opslaan";
$button_on_msg="aan";
$button_off_msg="uit";
$basic_opts="Basis"; 
$advanced_opts="Geadvanceerd";
$show_basics="Klik om de basisoptieste tonen";
$show_advanced="Klik om de geavanceerde opties te tonen";
$general_printing="Aanzetten/uitzetten wie kan afdrukken";
$general_printing_info="<--Aan, iedereen kan afdrukken";
$general_slideshow="Aanzetten/uitzetten diashow";
$general_slideshow_info="<-- mogelijkheid tot gebruik van de diashow";
$general_mini_preview="Next/previous button image status/size";
$general_mini_preview_info="<-- afzetten indien de gebruikers beschikken over een lage bandbreedte";

/* modify existing user table */
$mod_user_header="Update bestaande gebruiker";
$submit_button_mod_user="Update gebruiker";
$mod_user_success_msg="! Gebruiker geupdate !";
$submit_button_delete="Verwijder";
$del_user_success_msg="! Gebruiker verwijdert !";

/* add new user table */
$new_user_header="Nieuwe gebruiker toevoegen";
$new_user_name_info="Gebruikersnaam:";
$new_user_pass_info="Wachtwoord";
$new_user_mail_info="Email";
$new_user_level_info="Gebruiker level";
$friend="vriend";
$submit_button_new_user="Gebruiker toevoegen";
$new_user_success_msg="! Gebruiker aangemaakt !";

/* friends account table */
$friend_user_header="Account Configuratie";
$submit_button_friend_user="Update Account";
$delete_button_friend_user="Verwijder Account";
$friend_info_msg="Set/Verander je account instellingen";

/* add new category table */
$new_cat_header="Nieuwe categorie aanmaken";
$new_cat_info="Nieuwe categorie aanmaken";
$submit_button_new_cat="Categorie toevoegen";
$new_cat_success_msg="! Categorie teogevoegd !";
$mod_cat_header="Veranderen/Verwijderen categorieen";
$cat_name_header="Categorie naam";
$cat_mod_header="Veranderen van de categorie";
$cat_del_header="Categorie verwijderen";
$submit_button_mod_cat="Veranderen";

/* set directory permissions */
$set_dir_perms_header="Map toegang";
$dir_name="Map";
$dir_perms="Toegang";
$action="Actie";
$submit_button_folder="Akkoord";
$public="publiek";
$friends="vrienden";
$private="prive";
$new_perms_success_msg="! Toegang verandert !";

/*#################################################
## build_stats.php (called by admin.php) 
#################################################*/
$stats_over_header="Totaal overzicht Statistieken";
$stats_over_photos="Foto's in de database:";
$stats_over_views="Aantal keren foto bekeken:";
$stats_over_albums="Albums in database:";
$stats_over_space="Gebruikte schijfruimte (allle albums):"; 
$stats_over_most_alb_visists="Meest bekeken album:";
$stats_over_visitors="Bezoekers tot nu toe:";
$stats_over_users="Geregistreerde gebruikers:";
$stats_top_ten="Top 10 foto's";
$stats_rank="Lijst:";
$stats_no_views="Aantal kijkers:";
$stats_last_view="Laatst bekeken:";
$stats_alb_name="Album Naam:";

/*#################################################
## create_all_thumbs.php 
#################################################*/
$parse_first="PARSING FIRST STAGE";
$parse_sec="PARSING SECOND STAGE";
$parse_third="PARSING THIRD STAGE";
$parse="now parsing";
$parsed="parsed:";
$dirs="sub directories";
$done="ALL DONE...";
$not_allowed_msg="Sorry, u hebt geen rechten om dit script uit te voeren!";
/* these entries are called from within admin.php */
$th_msg="Maak alle thumbnails in 1x aan!";
$table_hint_msg="Klik start om onmiddelijk in alle submappen alle thumbnails aan te maken!";
$start_button="Start!";
$recreate_thumbs_header="Maak alle thumbnails opnieuw aan"; 
$recreate_thums_msg="Deze actie zal alle informatie van de foto's WISSEN!";
$recreate_thums_warning="Gelieve te bevestigen dat alle thumbnails opnieuw aangemaakt moeten worden en dat hierbij ALLE informatie verloren gaat. Deze actie kan niet ongedaan gemaakt worden. Weet u zeker dat u door wil gaan?";


/*#################################################
## Printing, all files 
#################################################*/
$print_layout="Kies print layout";
$images_page="Afbeeldingen/pagina";
$indexprint="Index print (28)";
$note="<strong>OPGELET:</strong> Controleer voor het afdrukken de afdrukinstellingen van uw browser om zeker te zijn dat alle foto's op de pagina passen!!!";
$print_button="Afdrukvoorbeeld";
$href_check_all="Alles aanvinken";
$href_clear_all="Alles uitvinken";
$print_error="ERROR, geen afbeeldingen geselecteerd!!!";
$print_mode="Afdrukmodus";
$print_image="Print afbeelding";
$videos_msg="Video's kunnen niet afgedrukt worden";

/*#################################################
## FTP, all files
#################################################*/


/*#################################################
## MySQL backup, most files ;-)
#################################################*/
$mysql_info_header="LinPHA MySQL database beheersysteem versie";
$mysql_cancel="Annuleren";
$mysql_DHTML_hint="DHTML wordt niet getoond - U ziet niks totdat het backuppen voltooid is.";
$mysql_select_all="Alles aanvinken";
$mysql_deselect_all="Alles uitvinken";
$mysql_create_backup="Maak Backup";
$mysql_back_menu="Terug naar menu";
$mysql_table_checks="Controleren tabellen...";
$mysql_table_check="Controleren tabel...";
$mysql_struct_msg="Aanmaken structuur voor";
$mysql_in_file_dump_msg="verwijderen data voor";
$mysql_progress="Totale vooruitgang:";
$mysql_back_complete="Backup voltooid in";
$mysql_back_menu_long="Terug naar de MySQL Database Backup hoofdmenu";
$mysql_open_warn1="<B>Opgelet:</B> kan niet openen ";
$mysql_open_warn2="om te schrijven!<BR><BR><I>CHMOD 777</I> op de map zou het probleem moeten oplossenon.";
$mysql_date_msg="Het is nu "; // it follows time of the day...
$mysql_last_backup="Laatste volledige backup van de MySQL database: ";
$mysql_backup_hint="Algemeen is 1 backup per week voldoende.";
$mysql_down_backup="Download vorige volledige backup ";
$mysql_down_backup_part="Download vorige gedeeltelijke backup ";
$mysql_down_backup_struct="Download vorige structure only backup ";
$mysql_down_backup1="(rechts-klikken, Opslaan als...)";
$mysql_unknown_backup="Laatste volledige backup van de MySQL database: <I>onbekend</I>";
$mysql_href_recom="Maak een nieuwe volledige backup, met inhoud (aangeraden)";
$mysql_href_standard="Maak een nieuwe volledige backup, standaard inhoud (kleiner)"; /*whats te meaning?*/
$mysql_href_partial="Maak een nieuwe gedeeltelijke backup, alleen de geselecteerde tabellen (met inhoud)";
$mysql_href_structure="Maak een nieuwe volledige backup, alleen de tabelstructuren";
$mysql_days_last="dagen";
$mysql_hours_last="uren";
$mysql_min_last="minuten";
$mysql_sec_last="seconden";
$ago="geleden"; // reads in context "some days ago"
$backup="Backup";
$restore="Terugzetten";
$optimize="Optimalizeren";
$optimize_tables="Optimalizeren tabellen";
$opt_table_name="Tabel naam";
$opt_table_check="Controleren tabel";
$opt_table_optimize="Optimalizeren tabel";
$opt_table_msg="Soort boodschap";
$opt_start_msg="Start controleren en optimaliseren van alle tabellen";
$fullback_hint_msg="Indien u meerdere databases heeft, gelieve de optie <b>gedeeltelijke</b> backup methode te kiezen";
$restore_last_fullback="Herstel de laaste <b>volledige</b> backup:";
$restore_last_partback="Herstel de laaste <b>gedeeltelijke</b> backup:";
$restore_error="ERROR bij het openen van de backup. Bestand niet gevonden!";
$restore_success="Herstel geslaagd!";

/*########################################################################
### FILEMANGER
########################################################################*/

define('STR_ACCESS_DENIED','<H1>toegang geweiger</H1> u hebt geen toelating om deze map te openen');
define('STR_BACK',	'terug');
define('STR_LESS',	'minder');
define('STR_MORE',	'meer');
define('STR_LINES',	'lijnen');
define('STR_FUNCTIONLIST', 'Functielijst');
define('STR_EDIT',	'wijzigen');
define('STR_VIEW',	'beeld');
define('STR_RENAME',	'hernoem');
define('STR_MKDIR',		'nieuwe map');
define('STR_DELETE',	'verwijderen');
define('STR_BOTTOM',	'beneden');
define('STR_TOP',		'boven');
define('STR_FILENAME',	   'bestandsnaam');
define('STR_FILESIZE',	   'grootte');
define('STR_LASTMODIFIED', 'laatst gewijzigd');
define('STR_SUM', '<B>%s</B> byte(s) in <B>%s</B> bestand(en)');
define('STR_CREATEDIRLEGEND', 'maak map');
define('STR_CREATEDIR',       'naam van de nieuwe map:');
define('STR_CREATEDIRBUTTON', 'maak map');
define('STR_RENAMELEGEND',       'hernoem');
define('STR_RENAMEENTERNEWNAME', 'vul de nieuwe naam in voor %s:');
define('STR_RENAMEBUTTON',       'hernoem');
define('STR_ERROR_DIR','Error: kan de mapinhoud niet lezen');
define('STR_AUDIO',            'geluid');
define('STR_COMPRESSED',       'gecomprimeerd');
define('STR_EXECUTABLE',       'toepassing');
define('STR_IMAGE',            'afbeelding');
define('STR_SOURCE_CODE',      'broncode');
define('STR_TEXT_OR_DOCUMENT', 'tekst of document');
define('STR_WEB_ENABLED_FILE', 'web-enabled bestand');
define('STR_VIDEO',            'video');
define('STR_DIRECTORY',        'map');
define('STR_PARENT_DIRECTORY', 'bovenliggende map');
define('STR_EDITOR_SAVE',      'bestand opslaan');
define('STR_EDITOR_SAVE_ERROR','het bestand <I>%s</I> is niet wijzigbaar of beschikbaar');
define('STR_EDITOR_SAVE_ERROR_WRONG_VALUE','tijdens het bewerken van het bestand <I>%s</I>, heeft u de volgende waarde op bytepositie #%s gegeven: %s.');
define('STR_EDITOR_SAVE_ERROR_HEX_VALUE_NEEDED','in overeenstemming met de instellingen, je moet een positief hexadecimale waarde tussen 00 en FF opgeven.');
define('STR_EDITOR_SAVE_ERROR_DEC_VALUE_NEEDED','in overeenstemming met de instellingen, je moet een geheel positief decimale waarde tussen 0 en 255 opgeven.');
define('STR_FILE_UPLOAD_NAVI_HINT', 'Quick Navigator');
define('STR_FILE_UPLOAD_DRIVES', 'Schijven:');
define('STR_FILE_UPLOAD', 'upload');
define('STR_FILE_UPLOAD_MAIN', 'uploader');
define('STR_FILE_UPLOAD_DISABLED', 'sorry, bestanden uploaden is uitgeschakeld in php.ini');
define('STR_FILE_UPLOAD_DESC','Kies de bestanden dat u wil uploaden. Kies een volgende actie indien de upload geslaagd is.');
define('STR_FILE_UPLOAD_FILE','Bestand');
define('STR_FILE_UPLOAD_TARGET','Upload bestand(en) naar');
define('STR_FILE_UPLOAD_ACTION','wanneer het uploaden voltooid is doe:');
define('STR_FILE_UPLOAD_NOTHING','niets');
define('STR_FILE_UPLOAD_DROPFILE','verwijder het geuploade bestand wanneer de geselecteerde actie uitgevoerd is');
define('STR_FILE_UPLOAD_MAXFILESIZE','De toegelaten grootte van elk bestand in php.ini is');
define('STR_FILE_UPLOAD_ERROR',        'Error: Onmogelijk om betsnad %s te verplaatsen naar de map %s');
define('STR_FILE_UPLOAD_CHDIR_ERROR',  'Error: Onmogelijk om te veranderen van map (chdir) naar %s. Huidig bestand: %s');
define('STR_FILE_UPLOAD_UNLINK_ERROR', 'Error: Onmogelijk om na het uploaden het bestand %s te verwjderen.');
define('STR_FILE_UPLOAD_ERROR_FILE_EXCEEDS_INI_SIZE', 'Error: Het bestand %s overschrijd de maximale bestandsgrootte gedefinieerd in php.ini - %s');
define('STR_FILE_UPLOAD_ERROR_FILE_EXCEEDS_FORM_SIZE','Error: de grootte van het bestand %s overschrijd de HTML FORM instellingen');
define('STR_FILE_UPLOAD_ERROR_FILE_PARTIAL',          'Error: Het bestand %s is maar gedeeltelijk geupload');

/*########################################################################
### BIG FAT NOTICE !
### AS OF LINPHA 0.9.0 ALL NEW ENTRIES ARE PLACED BELOW THIS MSG
### DEVELOPERS PLEASE MAKE USE OF THE "LANGUPDATE.PHP" SCRIPT!
########################################################################*/

$pano_view="panorama view"; /* (img_view.php) -- new [panorama view] href  */
$close_win="Sluit venster"; /* (various files) -- javascript close window */
$nav_hint="Gebruik de muis of pijltjestoetsen om te navigeren!"; /* (image_panorama_view.php) --  */
$pano_view_of="Panorama view of image"; /* (image_panorama_view.php) -- header message */
$php_basedir_check_msg="Controleren of de PHP open basedir geconfigureerd is..."; /* (sec_stage_install.php) --  */
$req_basedir_fail="Nee"; /* (sec_stage_install.php) -- YES, it\'s really just no/nein ;-) */
$basedir_activE_msg="Uw PHP maakt gebruik van \"open_basedir\". !<br>"; /* (sec_stage_install.php) --  */
$basedir_active_msg1="+ LinPHA wzal GD lib gebruiken om thumbnails te genereren maar er kunnen hierbij problemen optreden(Bestandsbeheer en andere)<br>"; /* (sec_stage_install.php) --  */
$basedir_active_msg2="+ Indien mogelijk, maak van  \"open_basedir\" in PHP.ini commentaar"; /* (sec_stage_install.php) --  */
$gd_basedir_err="+ Indien mogelijk, maak van \"open_basedir\" in PHP.ini commentaar of hercompileer PHP met GD lib ondersteuning (--met-gd)"; /* (sec_stage_install.php) --  */
$extract_tar_gz="extract een *.tar.gz archief (UNIX)"; /* (index.php) -- filemanger upload select */
$extract_tar_bz2="extract een *.tar.bz2 archief (UNIX)"; /* (index.php) --  */
$extract_gz="unzip met gzip (UNIX)"; /* (index.php) -- filemanger upload select */
$extract_zip="unzip met unzip (UNIX)"; /* (index.php) -- filemanger upload select */
$extract_winzip="unzip met pkzip (WINDOWS WINZIP)"; /* (index.php) -- filemanger upload select */
$new_group_success_msg="! Groep toegevoegd!"; /* (admin.php) -- redirect message */
$mod_group_success_msg="! Groep gewijzigd !"; /* (admin.php) -- redirect message */
$del_group_success_msg="! Groep verwijderd !"; /* (admin.php) -- redirect message */
$mod_cat_success_msg="! Categorie gewijzigd !"; /* (admin.php) -- redirect message */
$del_cat_success_msg="! Categorie verwijderd !"; /* (admin.php) -- redirect message */
$href_groups="Klik om groepen toe te voegen of om te wijzigen"; /* (build_user_conf/build_folder_conf) -- href message to group management */
$del_warning="OPGELET: Je moet inloggen met je nieuwe account!!!"; /* (build_user_conf.php) -- java popup to notify admin user */
$href_to_folder_conf="terug naar mappen beheren"; /* (build_user_conf.php) -- navi href  */
$href_to_user_conf="terug naar gebruikersbeheer"; /* (build_user_conf.php) -- navi href  */
$header_new_group="Voeg een nieuwe groep toe"; /* (build_user_conf.php) -- table header */
$header_groupname="Groepsnaam"; /* (build_user_conf.php) -- table header */
$button_addgroup="Toevoegen"; /* (build_user_conf.php) -- submit button */
$header_mod_group="Wijzig/verwijder groepen"; /* (build_user_conf.php) -- table header */
$mod_group_header="Wijzig groep"; /* (build_user_conf.php) -- table header */
$del_group_header="Verwijder groep"; /* (build_user_conf.php) -- table header */
$search_to_short="De zoektekst moet minstens 2 karakters bevatten!"; /* (search.php) --  */
$general_thumb_size="Wijzig grootte thumbnail"; /* (build_general_conf.php) -- thumbsize stuff */
$general_thumb_size_info="<-- max grootte van de thumbnails in px"; /* (build_general_conf.php) -- thumbsize stuff */
$general_thumb_border="Aanzetten/uitzetten rand thumbnail"; /* (build_general_conf.php) -- thumb border stuff */
$general_thumb_border_info="<-- kies aanzetten om een rand te hebben rond de thumbnails"; /* (build_general_conf.php) -- thumb border stuff */
$inst_thumbsize_header="Kies grootte thumbnail"; /* (third_stage_install.php) -- thumb size stuff */
$inst_thumbborder_header="Instellingen rand"; /* (third_stage_install.php) -- thumb border stuff */
$inst_thumbborder_enable="maak fotorand"; /* (third_stage_install.php) -- thumb border checkbox msg */
$inst_thumbborder_disable="geen fotorand"; /* (third_stage_install.php) -- thumb border checkbox msg */
$safemode_active_msg="PHP is geconfigureerd in de \"save_mode\"!<br>"; /* (sec_stage_install.php) --  */
$safemode_active_msg2="+ Indien mogelijk, maak van \"save_mode\" in PHP.ini commentaar"; /* (sec_stage_install.php) --  */
$general_anon_post="Toelaten/verbieden anonieme postings"; /* (build_general_conf.php) --  */
$general_anon_post_info="<-- niet geregistreerde bezoekers kunnen commentaar toevoegen"; /* (build_general_conf.php) --  */
$stats_over_comment="Commentaar gepost"; /* (build_stats.php) --  */
$top10_downs_href="toon top 10 downloads"; /* (build_stats.php) --  */
$top10_views_href="toon de 10 meest bekeken foto's"; /* (build_stats.php) --  */
$stats_head_downs="Top 10 downloads"; /* (build_stats.php) --  */
$no_downloads="Aantal downloads"; /* (build_stats.php) --  */
$general_anon_download="Aanzetten/uitzetten anonieme downloads"; /* (build_genera_config.php) --  */
$general_anon_download_info="<-- toon/verberg link voor de afbeeldingen"; /* (build_general_config.php) --  */
$seach_multiple_select_use="Meerdere geselecteerd"; /* (search.php) --  */
$search_and="EN"; /* (search.php) --  */
$search_or="OF"; /* (search.php) --  */
$search_categories="Categories"; /* (search.php) --  */
$search_with_available_filters="Met beschikbare filters"; /* (search.php) --  */
$search_select_album="Selecteer album"; /* (search.php) --  */
$search_date_from_to="Datum van / tot"; /* (search.php) --  */
$search_combination_and_or="In combinatie met EN en OF"; /* (search.php) --  */
$new_user_new_password="Nieuw paswoord"; /* (build_user_conf.php) --  */
$new_user_error4="Gebruikersnaam kan niet leeg zijn"; /* (admin.php) --  */
$new_user_error5="Gebruikersnaam bestaat reeds"; /* (admin.php) --  */
$new_user_error1="Oud paswoord is niet correct"; /* (admin.php) --  */
$new_user_error2="Nieuw paswoord komt niet overeen met het hertypte paswoord"; /* (admin.php) --  */
$new_user_error3="Email is niet correct"; /* (admin.php) --  */
$new_user_old_password="Oud paswoord"; /* (admin.php) --  */
$new_user_retype_password="Hertyp nieuw paswoord"; /* (admin.php) --  */
$select_db_header="Gelieve een databasetype te selecteren"; /* (sec_stage_install.php) --  */
$mysql_info="Kies deze optie om toegang te hebben tot een MySQL database"; /* (sec_stage_install.php) --  */
$postgres_info="Kies deze optie om toegang te hebben tot een PostgreSQL database. Zie"; /* (sec_stage_install.php) -- reads: ...Please see info */
$login_autologin="Autologin"; /* (toc.php) --  */
$login_autologin_user="Autologin Gebruikersinformatie"; /* (toc.php) --  */
$toc_timer="Timer"; /* (toc.php) --  */
$general_autologin="Aanzetten/uitzetten autologin"; /* (build_general_conf.php) --  */
$general_autologin_info="<-- activeer deze optie om gebruik te maken van de autologin"; /* (build_general_conf.php) --  */
$general_timer="Aanzetten/uitzetten timer"; /* (build_general_conf.php) --  */
$general_timer_info="<-- toon de benodigde parsetime onderaan de pagina"; /* (build_general_conf.php) --  */
$login_autlogin="Autologin"; /* (login.php) --  */
$lostpw_title="Paswoord vergeten"; /* (login.php) --  */
$lostpw_question="Paswoord vergeten?"; /* (login.php) --  */
$lostpw_type_user_or_email="Vul je gebruikersnaam OF je Linpha email-adres in"; /* (login.php) --  */
$lostpw_email1="Iemand heeft gebruik gemaakt van de vergeten paswoord funtie. Indien het jij niet was, negeer dit bericht en je paswoord wordt niet veranderd. Indien jij het was, vul dan deze code in in het gevraagde veld:"; /* (login.php) --  */
$lostpw_email1_part2="(Onthoud: Dit is niet uw nieuw paswoord!)"; /* (login.php) --  */
$lostpw_email1_part3="Uw Linpha-Administrator"; /* (login.php) --  */
$lostpw_email_error="Error: E-Mail kon niet verzonden worden. Contacteer de Administrator."; /* (login.php) --  */
$lostpw_error_nothing_found="Sorry, geen gebruikersnaam of wachtwoord dat voldoet aan de voorwaarden."; /* (login.php) --  */
$lostpw_email_sent="een email is verzonden."; /* (login.php) --  */
$lostpw_should_receive="U zal binnen een minuut een mail ontvangen. Vul de code dat u terugvindt in de email in in dit veld:"; /* (login.php) --  */
$lostpw_go_back="Ga terug"; /* (login.php) --  */
$lostpw_email2="Paswoord veranderd. Uw nieuw paswoord is:"; /* (login.php) --  */
$lostpw_email2_part2="Je kan het later veranderen door gebruik te maken van de \"Instellingen\" link."; /* (login.php) --  */
$lostpw_new_password="Nieuw Paswoord"; /* (login.php) --  */
$lostpw_successfully_changed="Paswoord veranderd, je zal binnen de minuut een email ontvangen met het nieuwe paswoord."; /* (login.php) --  */
$lostpw_error_wrong_code="Sorry, niet correct."; /* (login.php) --  */
$lostpw_enter_correct_code="Vul de correcte code van de email in in dit veld:"; /* (login.php) --  */
$lang_plugins['plugins']="LinPHA Plugins"; /* (admin.php) --  */
$lang_plugins['watermark']="Watermrk"; /* (admin.php, toc.php) --  */
$lang_plugins['benchmark']="Benchmark"; /* (admin.php, toc.php) --  */
$lang_plugins['sql']="DB Management"; /* (admin.php, toc.php) --  */
$lang_plugins['active_plugins']="Actieve Plugins"; /* (admin.php) --  */
$lang_plugins['enabled']="Aan"; /* (plugins.php) --  */
$lang_plugins['disabled']="Uit"; /* (plugins.php) --  */
$lang_plugins['update']="Aanpassen"; /* (plugins.php) --  */
$lang_plugins['plugins_updated']="Plugins aangepast"; /* (admin.php, plugins.php) --  */
$wm_wm_man="Watermark Management "; /* (watermark.php) --  */
$wm_disable="Disable Watermark "; /* (watermark.php) --  */
$wm_change_example_img="Verander voorbeeldfoto "; /* (watermark.php) --  */
$wm_no_input_files_found="Geen bestanden gevonden "; /* (watermark.php) --  */
$wm_image_quality="Beeldkwaliteit (alleen voor voorbeeld) "; /* (watermark.php) --  */
$wm_enable_text="Enable: Tekst "; /* (watermark.php) --  */
$wm_text="Tekst "; /* (watermark.php) --  */
$wm_font="Lettertype "; /* (watermark.php) --  */
$wm_fontsize="Grootte lettertype "; /* (watermark.php) --  */
$wm_fontcolor="Kleur lettertype "; /* (watermark.php) --  */
$wm_align="Uitlijning "; /* (watermark.php) --  */
$wm_pos_hor="Horizontaal "; /* (watermark.php) --  */
$wm_pos_ver="Verticaal "; /* (watermark.php) --  */
$wm_height="Hoogte tekstveld "; /* (watermark.php) --  */
$wm_width="Breedte tekstveld "; /* (watermark.php) --  */
$wm_shadow_size="Grootte schaduw  "; /* (watermark.php) --  */
$wm_shadow_color="Kleur schaduw "; /* (watermark.php) --  */
$wm_enable_image="Enable: Afbeelding"; /* (watermark.php) --  */
$wm_available_images="Beschikbare afbeeldingen"; /* (watermark.php) --  */
$wm_no_images_found="Geen foto's gevonden"; /* (watermark.php) --  */
$wm_dissolve="Dissolve"; /* (watermark.php) --  */
$wm_preview="Voorbeeld"; /* (watermark.php) --  */
$wm_linebreak="voor nieuwe regel"; /* (watermark.php) --  */
$wm_enable_shadow="Enable schaduw"; /* (watermark.php) --  */
$wm_enable_rectangle="Enable rechthoek"; /* (watermark.php) --  */
$wm_rectangle_color="Kleur"; /* (watermark.php) --  */
$wm_enable_ext_shadow="Enable uitgebreide schaduw"; /* (watermark.php) --  */
$wm_status="Status"; /* (watermark.php) --  */
$wm_enabled="enabled"; /* (watermark.php) --  */
$wm_disabled="disabled"; /* (watermark.php) --  */
$wm_restore_to="Herstellen naar"; /* (watermark.php) --  */
$wm_inital_settings="oorspronkelijke instellingen"; /* (watermark.php) --  */
$wm_add_more_examples="Je kan meer voorbeelden toevoegen in de linpha map"; /* (watermark.php) --  */
$wm_example="Voorbeeld"; /* (watermark.php) --  */
$wm_shadow_fontsize="Grootte schaduwlettertype"; /* (watermark.php) --  */
$wm_settings_for_both="Instellingen voor afbeeldingen en tekst"; /* (watermark.php) --  */
$wm_center="centraal"; /* (watermark.php) --  */
$wm_north="boven"; /* (watermark.php) --  */
$wm_northeast="rechtsboven"; /* (watermark.php) --  */
$wm_northwest="linksboven"; /* (watermark.php) --  */
$wm_south="beneden"; /* (watermark.php) --  */
$wm_southeast="rechtsbeneden"; /* (watermark.php) --  */
$wm_southwest="linksbeneden"; /* (watermark.php) --  */
$wm_east="rechts"; /* (watermark.php) --  */
$wm_west="links"; /* (watermark.php) --  */
$bm_file_err="Error, geen bestand aangeduid";
$bm_var_err="Error, controleer de gegevens";
$bm_notfound_err="Error, bestand niet gevonden";
$bm_noimg_err="Error, bestand is geen abeelding";
$bm_tmpfile_err="Error, kan geen tijdelijke afbeelding aanmaken";
$bm_tmpfile_warn="Opgelet: Tijdelijke afbeelding kan niet gewist worden";
$bm_time_total="Totale benodigde tijd: ";
$bm_img_sec="Afbeeldingen per seconde: ";
$bm_avg_img="Gemiddelde tijd voor elke afbeelding (beweeg de muis over de afbeelding om te vernieuwen): ";
$bm_qual_size="Kwaliteit/Grootte";
$bm_quality="Kwaliteit: ";
$bm_height="Hoogte: ";
$bm_width="Breedte: ";
$bm_size="Grootte afbeelding: ";
$bm_create = "Aanmeken benchmark d.m.v. conversie";
$bm_interval = "interval";
$bm_calc = "Berekenen";
$bm_img = "Afbeeldingen";
$bm_inloop="Herhalen";
$bm_qual_range="Kwaliteitsbereik: ";
$bm_size_range="Bereik hoogte (alleen de hoogte): ";
$bm_repeats="Herhalingen: ";
$bm_con_util="Gelieve het conversieprogramma te selecteren: ";
$bm_current_settings="Huidige instellingen"; /* (benchmark.php) --  */
$bm_preview="Voorbeeld"; /* (benchmark.php) --  */
$bm_save_settings="Deze instellingen opslaan"; /* (benchmark.php) --  */
$wm_addexamples="Watermark: voeg meer voorbeeldafbeeldingen toe"; /* (watermark.php) --  */
$wm_addimg="Watermark: Voeg meer watermerkafbeeldingen toe"; /* (watermark.php) --  */
$wm_addfont="Watermark: Voeg lettertypen toe"; /* (watermark.php) --  */
$wm_colorsetting="Watermark: Kleurinstellingen"; /* (watermark.php) --  */
$comment_hint="HINT: klik op de boven -of onderliggende afbeelding om door het album te bladeren"; /* (linpha_comments.php) --  */
$comment_end="Einde van het album"; /* (linpha_comments.php) --  */
$comment_beginning="Begin van het album"; /* (linpha_comments.php) --  */
$comment_back="terug naar de afbeelding"; /* (linpha_comments.php) --  */
$comment_edit_img="Wijzig categorie/commentaar"; /* (linpha_comments.php) --  */
$comment_change_img_details="Verander details van afbeelding"; /* (linpha_comments.php) --  */
$comment_last_comments="Laatste commentaar"; /* (linpha_comments.php) --  */
$comment_comment_by="commentaar van"; /* (linpha_comments.php) --  */
$category_delete_warning="Opgelet: De reeds toegewezen categorieen gaan verloren"; /* (build_category_conf.php) --  */
$pass_2_short="ERROR, paswoord moet minstens 3 karakters bevatten..."; /* (various) --  */
$album_edit="Wijzig commentaar bij album"; /* (linpha_comments.php) --  */
$album_details="Album details"; /* (linpha_comments.php) --  */
$wm_save_note="NOTE: Watermerken zijn NIET zichtbaar voor geregistreerde gebruikers!. Je MOET uitgelogd zijn om de watermerken te zien!"; /* (watermark.php) --  */
$lang_plugins['guestbook']="Gastenboek"; /* (admin.php) --  */
$print_low_quality="Lage kwaliteit"; /* (printing_view.php) --  */
$print_high_quality="Hoge kwaliteit (trager!)"; /* (printing_view.php) --  */
$gb_title="LinPHA Gastenboek";
$gb_sign="LinPHA Gastenboek! Nieuw bericht toevoegen";
$gb_from="Locatie";
$gb_from_no="Geen locatie ingevuld";
$gb_pages="pagina('s)";
$gb_messages="berichten in het gastenboek";
$gb_msg_error="Sorry, Name and Comment mustn't be emtpy";
$gb_new_msg="Nieuw bericht toevoegen";
$gb_name="Naam";
$gb_email="Email";
$gb_hp="Homepage";
$gb_country="Land";
$gb_header="LinPHA gastenboek";
$gb_opts="Instellingen gastenboek";
$gb_rows="Aantal berichten per pagina";
$gb_anon="Niet geregistreerde gebruikers mogen berichten posten";
$gb_order="sorteer berichten";
$wm_resize="Schaal watermerk altijd naar X% van de afbeeldingsgrootte"; /* (watermark.php) --  */
$wm_help_and_descr="Help en beschrijving"; /* (watermark.php) --  */
$folder_remove_hint="Indien alles goed gaat moet je nu de /install submap verwijderen (beveiliging)..."; /* (forth_stage_install.php) --  */
$add_alb_com="Voeg commentaar toe aan het album"; /* (img_view.php) --  */
$add_img_com="Voeg commentaar toe aan een afbeelding"; /* (img_view.php) --  */
$album_com="Album commentaar"; /* (*_stage_album.php) --  */
$formatting_possibilities="HTML Formatting Tags"; /* (various) --  */
$stat_cache_elements="Cached elements"; /* (build_stats.php) --  */
$stat_cache_first="New cached elements"; /* (build_stats.php) --  */
$stat_cache_hits="Cache hits"; /* (build_stats.php) --  */
$stat_cache_hits_max="Max hits (single image)"; /* (build_stats.php) --  */
$stat_cache_hits_avg="Average cache hits (all images)"; /* (build_stats.php) --  */
$stat_cache_size="Cache size"; /* (build_stats.php) --  */
$stat_cache_convert_time="Cache speedup time"; /* (build_stats.php) --  */
$stat_cache_size="Cache size used"; /* (build_stats.php) --  */
$cache_options="Image Cache Options";
$cache_max_size="Max cache size in bytes (0 = unlimited)";
$path_2_cache="Cache directory (default /sql/cache)";
$cache_optimize="Optimize/cleanup image cache data"; 
$cache_maintain="Image Cache Maintainance";
$cache_opt_msg="!! Cache optimized !!";
$lang_plugins['cache']="Image Cache"; /* () --  */
$stat_cache_title="Image Cache Stats"; /* (cache.php) --  */
$bm_saved="Instellingen opgeslagen"; /* (admin.php) --  */
$cache_optimize_by_size="Delete all cache elements where size (in kb) >="; /* (cache.php) --  */
$cache_optimize_by_date="Delete all cache elements not used for days:"; /* (cache.php) --  */
$elements_rem="Verwijderde onderdelen"; /* (cache.php) --  */
$general_anon_album_downs="Toelaten/wijgeren anonieme zip album downloads"; /* (build_general_conf.php) --  */
$general_anon_album_downs_info="<-- niet geregistreerde gebruikers kunnen albums downloaden in zip formaat"; /* (build_general_conf.php) --  */
$general_download_speed="Limiteer downloadsnelheid in kb/sec (0=onbeperkt)"; /* (build_general_conf.php) --  */
$general_download_speed_info="<-- stel een limiet in voor de downloadsnelheid van alle albums "; /* (build_general_conf.php) --  */
$general_navigation="Aanzetten/uitzetten navigatiebalk"; /* (build_general_conf.php) --  */
$general_navigation_info="<-- activeert de navigatiebalk op de thumbnail pagina's"; /* (build_general_conf.php) --  */
$toc_navigation="Aanzetten/uitzetten navigatiebalk"; /* (doc/) --  */
$toc_zip_download="Aanzetten/uitzetten album downloads"; /* (doc/) --  */
$toc_albdownlimit="Limiteer downloadsnelheid"; /* (doc/) --  */
$choose_zips_msg="Selecteer de te downloaden afbeeldingen"; /* (build_zip_view.php) --  */
$zip_button="Download archief"; /* (build_zip_view.php) --  */
$type_of_archive="Selecteer archieftype"; /* (build_zip_view.php) --  */
$create_tar="maak tar archief"; /* (build_zip_view.php) --  */
$create_tgz="maak tar.gz archief"; /* (build_zip_view.php) --  */
$create_bz2="maak tar.bz2 archief"; /* (build_zip_view.php) --  */
$create_zip="maak zip archief"; /* (build_zip_view.php) --  */
$create_rar="maak rar archief"; /* (build_zip_view.php) --  */
$menumsg['advanced']="Geavanceerde optiess"; /* () --  he don't show the latest letter */
$menumsg['printmode']="Afdrukmodus"; /* () --  */
$menumsg['printprobs']="Afdrukken uitgeschakeld?"; /* () --  */
$menumsg['downloadmode']="Downloadmodus"; /* () --  */
$menumsg['mailmode']="Mailmodus"; /* () --  */
$menumsg['addcomment']="Toevoegen album commentaar  "; /* () --  */
$menumsg['delcomment']="Verwijder album commentaar  "; /* () --  */
$menumsg['editcomment']="Wijzig album commentaar     "; /* () --  */
$album_up="gewijzigd"; /* (album_comment.php) --  */
$album_ins="ingevoegd"; /* (album_comment.php) --  */
$mail_link="Mailing list"; /* (header.php) --  */
$mail_title="LinPHA Mailing List"; /* (mail.php) --  */
$mail_send_link="Verstuur Mail"; /* (mail.php) --  */
$mail_return_address="Antwoordadres:"; /* (mail.php) --  */
$mail_block="Mail Block Size:"; /* (mail.php) --  */
$mail_block_help="# of emails in a block before a break to avoid PHP timeouts."; /* (mail.php) --  */
$mail_options="Mailing List Options"; /* (mail.php) --  */
$mail_go_back="Terug"; /* (various mail plugin files) --  */
$mail_form_title="E-Mail bericht"; /* (mail_form.php) --  */
$mail_form_subject="Onderwerp:"; /* (mail_form.php) --  */
$mail_form_msg="Bericht:"; /* (mail_form.php) --  */
$mail_total_sent="Totaal aantal email(s) verzonden:"; /* (mail_form.php) --  */
$mail_subscribe="Inschrijven"; /* (mail_users.php) --  */
$mail_unsubscribe="Uitschrijven"; /* (mail_users.php) --  */
$mail_activate="Activeer"; /* (mail_users.php) --  */
$mail_user_name="Je naam:"; /* (mail_users.php) --  */
$mail_user_email="Je email:"; /* (mail_users.php) --  */
$mail_user_email_confirm="Bevestig email:"; /* (mail_users.php) --  */
$mail_user_code="Activatie Code:"; /* (mail_users.php) --  */
$mail_user_code_sent="Een email met de activatie code is verzonden naar je email adres."; /* (mail_users.php) --  */
$mail_user_code_subject="LinPHA Mailing List activatie"; /* (mail_users.php) --  */
$mail_user_activated="Je account is geactiveerd!"; /* (mail_users.php) --  */
$mail_user_activate_error="Er is een fout opgetreden tijdens het activeren van je account!"; /* (mail_users.php) --  */
$mail_user_email_not_found="bestaat NIET in onze mailing list."; /* (mail_users.php) --  */
$mail_user_remove_ok="verwijderd van onze mailing list."; /* (mail_users.php) --  */
$mail_user_remove_fail="kon niet verwijderd worden van onze mailing list."; /* (mail_users.php) --  */
$mail_user_empty="Vul alle velden in."; /* () --  */
$mail_user_no_match="Emails komen niet overeen."; /* () --  */
$mail_user_exists="Email bestaat reeds in onze lijst."; /* (mail_users.php) --  */
$lang_plugins['mail']="Mailing List"; /* (admin.php) --  */
$mail_activate_message="Geachte %s,\n\nGelieve onderstaand veld in te vullen.\n\nActivatie Code: %s\n\nDank u!\nDe Webmaster"; /* (submit_users.php) -- dont delete the %s and the \n ! */
$mail_hint="Hint"; /* (mail.php) --  */
$mail_user_permission="Alle gebruikers van de groep mail kunnen berichten versturen naar de mailing list."; /* (mail.php) --  */
$mail_current_subscribers="Huidige leden"; /* (mail.php) --  */
$mail_name="Naam"; /* (mail.php) --  */
$mail_mail="Email"; /* (mail.php) --  */
$mail_subscribing_date="Datum inschrijving"; /* (mail.php) --  */
$mail_active="Activeer"; /* (mail.php) --  */
$mail_sent_to="Email versturen aan"; /* (mail.php) --  */
$mail_replace_words="<b>[Naam]</b> en <b>[Email]</b> zal vervangen worden door de naam en email van de leden."; /* (form_mailing.php) --  */
$misc_help="Miscellaneous Help"; /* () --  */
$mail_create_group="(Je moet de groep 'mail' aanmaken.)"; /* (mail.php) --  */
$alb_th="Subfolders in album"; /* (*_stage_album.php) -- overwrites old (wrong) entry */
$arr_month_short = Array('1' => 'Jan','2' => 'Feb','3' => 'Mar','4' => 'Apr','5' => 'Mei','6' => 'Jun','7' => 'Jul','8' => 'Aug','9' => 'Sep','10' => 'Okt','11' => 'Nov','12' => 'Dec'); /* abrevations of months */
$arr_month_long = Array('1' => 'Januari','2' => 'Februari','3' => 'Maart','4' => 'April','5' => 'Mei','6' => 'Juni','7' => 'Juli','8' => 'Augustus','9' => 'September','10' => 'Oktober','11' => 'November','12' => 'December'); /* months */
$arr_day_short = Array('Ma','Di','Wo','Do','Vr','Zat','Zon'); /* abrevations of weekdays */
$arr_day_long = Array('Maandag','Dinsdag','Woensdag','Donderdag','Vrijdag','Zaterdag','Zondag'); /* weekdays */
/*
If the time and date format in your country is different with these formats,
please uncomment these lines and set it to the right format. Otherwise, leave
it as it is. See http://www.php.net/manual/en/function.strftime.php for definitions.
(Don't apply this to the english language file, the default date and time format are
set in the options page of linpha. This is because the date format is different within
the english spoken countries.)
$date_format = "%a %m/%d/%Y";
$time_format = "%I:%M:%S %p";
*/
$layout="Layout";
$features="Features";
$perform="Performantie";
$general_comment_in_subfolder = 'Aanzetten/uitzetten album commentaar in submappen';
$general_comment_in_subfolder_info = '<-- toon album commentaar in voorbeeld submappen';
$general_default_date_format = 'Standaard datum formaat';
$general_default_date_format_info = '<- voorbeeld: 06/28/2004, zie info voor meer details';
$general_default_time_format = 'Standaard tijd formaat';
$general_default_time_format_info = '<- voorbeeld: 01:45:50 PM, zie info voor meer details';
$general_new_images_folder = 'Virtuele "Nieuwe afbeeldingen" map';
$general_new_images_folder_info = '<- shows a virtual folder with new added images';
$general_new_images_folder_age = '"Nieuwe afbeeldingen" map in dagen';
$general_new_images_folder_age_info = '<- max aantal dagen dat nieuwe afbeeldingen getoond worden';
$control_key="Ctrl"; /* (various) --  */
$search_date="Datum"; /* (search.php) -- reads: date from to... */
$search_from="van"; /* (search.php) -- reads: date from to... */
$search_to="tot"; /* (search.php) -- reads: date from to... */
$start_slide="Start Diashow"; /* (img_view.php) --  */
$pass_msg="Je moet inloggen met e nieuw paswoord"; /* (build_my_settings.php) --  */
$str_new_images = "Nieuwe afbeeldingen"; /* (new_images.php) -- */
$str_order_by = "Sorteren op"; /* (new_images.php) -- */
$str_age = "Oude"; /* (new_images.php) -- */
$str_album = "Album"; /* (new_images.php) -- */
$str_in_album = "In album"; /* (new_images.php) -- */
$str_img_newer_than = "alle afbeeldingen nieuwer dan %s dagen"; /* (new_images.php) -- */
$timespanfmt = "%s dagen, %s uren, %s minuten en %s seconden";  /* (new_images.php) -- */
$str_delete_all_cached_images_with_watermarks="Delete all cached images with watermarks"; /* (watermark.php) --  */
$str_error_changing_perm="ERROR, the file permissions couldn't be changed! (Maybe you haven't the permission)"; /* (plugins/ftp/index.php) --  */
$str_change_perm="Verander recht van:"; /* (plugins/ftp/index.php) --  */
$str_read="Lezen"; /* (plugins/ftp/index.php) --  */
$str_write="Schrijven"; /* (plugins/ftp/index.php) --  */
$str_execute="Uitvoeren"; /* (plugins/ftp/index.php) --  */
$str_owner="Eigenaar"; /* () --  */
$str_group="Groep"; /* (plugins/ftp/index.php) --  */
$str_all_other="Alle andere"; /* (plugins/ftp/index.php) --  */
$str_copy="kopie"; /* (plugins/ftp/index.php) --  */
$str_copy_to="Kopieer %s naar:"; /* (plugins/ftp/index.php) --  */
$str_rename_to="Hernoem %s naar:"; /* (plugins/ftp/index.php) --  */
$str_rotation_disabled="Draaien van afbeeldingen uitgeschakeld"; /* (img_view.php) --  */
$str_no_write_perm="Geen schrijfrechten"; /* (img_view.php) --  */
$str_new_images_in_these_folders="Nieuwe afbeeldingen gevonden in de volgende albums:"; /* (new_images.php) --  */
$str_reinstall_remove_dbconnect="Indien je LinPHA wil herinstalleren, moet je eerst het bestand ./sql/db_connect.php verwijderen! (Je kan dit met de geintegreerde bestandsbeheerder in de admin pagina's)"; /* (install_header.php) --  */
$str_Version="Versie"; /* (sec_stage_install.php) --  */
$str_no_supported_database_activated="Error: Geen ondersteunde database gevonden in je PHP configuratie"; /* (sec_stage_install.php) --  */
$str_extract_with="Wanneer de upload voltooid is, pak archief uit met"; /* (ftp/index.php) --  */
$str_files_to_upload="Bestanden om te uploaden"; /* (ftp/index.php) --  */
$posix_check_msg="controleren ondersteuning voor POSIX ..."; /* (sec_stage_install.php) --  */
$posix_sum_found_msg="POSIX ondersteuning gevonden in je PHP installation. Alle functies in de geintegreerde bestandsbeheerder zijn geactiveerd."; /* (sec_stage_install.php) --  */
$posix_sum_miss_msg="Geen POSIX ondersteuning gevonden in je PHP installatie. Het is onmogelijk om sommige functies van de geintegreerde bestandsbeheerder te gebruiken (Uitgezonderd het veranderen van bestandsrechten)."; /* (sec_stage_install.php) --  */
$mod_cache_fail="Error: Settings could not be saved. Make sure your the path is spelled correctly and you have permissions to write into that directory."; /* (admin.php) --  */
$str_create_archive="create %s archiv"; /* (build_zip_view.php) --  */
$str_download_error="ERROR! The download couldn't be started for some reasons, sorry"; /* (build_zip_view.php) --  */
$str_search_all_images_taken="Search all images taken %s"; /* (read_php_exif.php) --  */
$str_try_a_lower_resolution="If it takes too long to load, try a lower resolution:"; /* (image_panorama_view.php) --  */
$str_current_resolution="current resolution:"; /* (image_panorama_view.php) --  */
$href_group_conf="Group Management"; /* (admin.php + build_user_conf.php) -- Admin menu item + table heading */
$href_tools_section="Tools:"; /* (admin.php) -- Tools section in admin menu */
$lang_plugins['plugin']="Plugin"; /* (plugin.php) --  */
$choose_mail_msg="Select images to mail"; /* () --  */
$new_user_full_name="Full name"; /* (build_my_settings.php) -- And build_user_conf.php */
$href_category_conf="Category Management"; /* (admin.php) --  */
$cat_private="Private"; /* (build_category_conf.php) --  */
$lang_plugins['facetmap']="FacetMap"; /* (plugins.php) --  */
$str_add_more_apps="Add more apps"; /* (include/basket_zip.php, ftp/index.p) --  */
$session_check="checking for valid session settings..."; /* (sec_stage_install.php) --  */
$session_save_handler_ok_msg="Session save handler correctly set."; /* (sec_stage_install.php) --  */
$session_save_handler_miss_msg="Session save handler NOT correctly set."; /* (sec_stage_install.php) --  */
$session_miss_msg="Session settings not correctly set. You MUST correct the above errors first in php.ini or LinPHA will probably NOT work correctly later!!"; /* (sec_stage_install.php) --  */
$session_ok_msg="All session settings correctly set. LinPHA should work properly."; /* (sec_stage_install.php) --  */
$new_user_error6="Error: You are not using your own account?!?"; /* (build_my_settings.php) --  */
$str_old_comments="Old comments (they don't belong to an image anymore):"; /* (build_stats.php) --  */
$str_last_viewed_page="Last viewed page:"; /* (index.php) --  */
$str_select_row="Select row"; /* (basket.php) --  */
$str_select="Select"; /* (basket.php) --  */
$str_new_window="new window"; /* (basket.php) --  */
$general_anon_mail_mode="Allow/deny mail mode for anonymous users"; /* (build_general_conf.php) --  */
$general_anon_mail_mode_info="<-- anonymous users are allowed to mail images"; /* (build_general_conf.php) --  */
$general_mail_mode_max_size="Mail mode: Max mail size"; /* (build_general_conf.php) --  */
$general_mail_mode_max_size_info="<-- max size in bytes"; /* (build_general_conf.php) --  */
$general_thumbnail_view="Thumbnail View"; /* (build_general_conf.php) --  */
$general_image_view="Image View"; /* (build_general_conf.php) --  */
$general_ado_msg="Enable/disable caching of SQL queries"; /* (build_general_conf.php) --  */
$general_ado_msg_info="<-- enable if slow SQL server or no PHP accelerator is used"; /* (build_general_conf.php) --  */
$general_ado_time_msg="SQL query caching time:"; /* (build_general_conf.php) --  */
$general_ado_time_msg_info="<-- set max caching time in minutes"; /* (build_general_conf.php) --  */
$general_ado_path_msg="Path to SQL query cache:"; /* (build_general_conf.php) --  */
$general_ado_path_msg_info="<-- where to store query cache data"; /* (build_general_conf.php) --  */
$str_other_features="Other features"; /* (build_general_conf.php) --  */
$str_language_settings="Language settings"; /* (build_general_conf.php) --  */
$str_sql_query_caching="Sql query caching"; /* (build_general_conf.php) --  */
$general_thumb_border="Thumbnail border size in px"; /* (build_general_conf.php) --  */
$general_thumb_border_info="<-- Set to 0 to disable, default: 5"; /* (build_general_conf.php) --  */
$general_thumb_border_color="Thumbnail border color"; /* (build_general_conf.php) --  */
$general_thumb_border_color_info="<-- see info for details"; /* (build_general_conf.php) --  */
$str_recipient="Recipient"; /* (basket_mail.php) --  */
$str_sender="Sender"; /* (basket_mail.php) --  */
$str_mail_too_big="Error: The E-Mail is too big.<br /><br />Allowed size: %sBytes. Your selected images use %sBytes.<br /><br />Remove some images or use the download zipped albums feature!"; /* (basket_mail.php) --  */
$str_size_of_email="Size of E-Mail: %s."; /* (basket_mail.php) --  */
$str_new_search="New search"; /* (search.php) --  */
$str_edit_search="Edit search"; /* (search.php) --  */
$str_View="View"; /* (img_view.class.php) --  */
$str_normal="normal"; /* (img_view.class.php) --  */
$str_detail="detail"; /* (img_view.class.php) --  */
$search_result_empty="Sorry, Your search did not match any content"; /* (search.php) --  */
$str_chars_entered="characters entered"; /* (img_view.class.php) --  */
$str_information_lost="Some information will be lost, please revise your entry."; /* (img_view.class.php) --  */
$general_random_image="Enable/Disable random images in index page"; /* () --  */
$general_random_image_info="<-- enable to have random images in index.php"; /* () --  */
$general_random_image_size="Max size of the random image in index.php"; /* () --  */
$general_random_image_size_info="<-- set image max size in pixel  "; /* () --  */
$str_edit_watermark="Edit watermark"; /* (watermark.php) --  */
$str_edit_permissions="Edit watermark permissions"; /* () --  */
$str_Everyone="Everone"; /* () --  */
$str_Nobody="Nobody"; /* () --  */
$str_only_logged_in_users=" Logged in users only"; /* () --  */
$str_except_these_groups="except these groups:"; /* () --  */
$str_additionally_groups="but for these groups:"; /* () --  */
$str_allow_these_persons="No watermarks for these users/groups"; /* () --  */
$str_album_based_permissions="Album based permissions"; /* () --  */
$str_all_albums_but_without_these="All albums, except these:"; /* () --  */
$str_only_on_these_albums="Only on these albums:"; /* () --  */
$str_allow_these_persons="Allow these persons"; /* (db_api.php) --  */
$str_no_watermarks="No watermarks for these persons"; /* (db_api.php) --  */
$str_watermark_perm_part1="Define image watermarks for a single user, multiple user, and/or album based here."; /* (watermark.php) --  */
$str_watermark_perm_part2="The default setting is 'Logged in users only' AND 'All albums'."; /* (watermark.php) --  */
$str_watermark_perm_part3="Which means that all logged in users are able to view images without watermarks in all albums."; /* (watermark.php) --  */
$inst_linpha_not_work_correctly="LinPHA will probably NOT work correctly"; /* (sec_stage_install.php) --  */
$gd_jpg_missing_msg="Your System lacks jpeg! support in GDlib. JPEG images WILL NOT work!"; /* (sec_stage_install.php) --  */
$general_video_thumbnail="Try to create thumbnails for videos"; /* (build_generl_config.php) --  */
$general_video_thumbnail_info="<--Turn off if you encounter problems with creating thumbnails for videos"; /* (build_generl_config.php) --  */
$general_update_notice="Enable/disable LinPHA update check"; /* (build_generl_config.php) --  */
$general_update_notice_info="<-- enable to check once a week for available updates"; /* (build_general_config.php) --  */
$large="large"; /* (build_general_config) -- selectfield for mini images size */
$directories="Directories"; /* (build_thumbnail_conf.php) --  */
$do_nothing="Do Nothing"; /* (build_thumbnail_conf.php) --  */
$create="Create"; /* (build_thumbnail_conf.php) --  */
$recreate="Recreate"; /* (build_thumbnail_conf.php) --  */
$exif_disabled_in_conf="EXIF info disabled in config"; /* (build_thumbnail_conf.php) --  */
$iptc_disabled_in_conf="IPTC info disabled in config"; /* (build_thumbnail_conf.php) --  */
$silent_mode="Silent Mode (e.g run silent, do not print debug info)"; /* (build_thumbnail_conf.php) --  */
$just_thumb_msg="Thumbnails"; /* (build_thumbnail_conf.php) --  */
$log_title="LinPHA Logger"; /* (log.php) --  */
$log_options="LinPHA Logger Options"; /* (log.php) --  */
$log_method_label="Log to:"; /* (log.php) --  */
$str_extra_headers="Extra Headers:"; /* (log.php) --  */
$str_log_events['login']="User Login"; /* (log.php) --  */
$str_log_events['thumbnail']="Thumbnail Creation"; /* (log.php) --  */
$str_log_events['update']="Update"; /* (log.php) --  */
$str_log_events['db']="DataBase"; /* (log.php) --  */
$str_log_events['filemanager']="Filemanager"; /* (log.php) --  */
$str_events="Events"; /* (log.php) --  */
$find_duplicates="Find duplicates in image collection"; /* (build_thumbnail_conf.php) --  */
$str_not_enabled_in_php_config="Not enabled in PHP config (php.ini)"; /* (sec_stage_install.php) --  */
$str_warning="Warning"; /* (build_thumbnail_conf.php) --  */
$str_thumbnails_deleted="Thumbnails will be deleted"; /* (build_thumbnail_conf.php) --  */
$str_statistics_deleted="All Statistics will be deleted"; /* (build_thumbnail_conf.php) --  */
$str_random_index_image="Random index image"; /* (build_general_conf.php) --  */
$str_download_images="Download single images"; /* (build_perms.php) --  */
$str_add_image_comments="Add image comments"; /* (build_perms.php) --  */
$str_add_image_description="Add image descriptions and categories"; /* (build_perms.php) --  */
$str_mail_add_all_users="Add all linpha users to the mailing list"; /* (plugins/mail.php) --  */
$str_note_upload="<b>Note:</b> You don't have to upload your images through this form. You can use whatever you want (ftp,scp,nfs,local,...). Just copy them to the albums folder."; /* (plugins/ftp/index.php) --  */
$blacklist_opts="Blacklist options (SPAM blocking)"; /* (varios) --  */
$blacklist_onoff="Enable message filtering"; /* (varios) --  */
$blacklist_keywords="Words to block:"; /* (varios) --  */
$str_entire_path="Entire path"; /* (search.php) --  */
$mail_format="Mail format:"; /* (basket_mail.php) --  */
$mail_format_is_txt="TXT (images attached)"; /* (basket_mail.php) --  */
$mail_format_is_html="HTML (images inline)"; /* (basket_mail.php) --  */
$mail_toggle_active="Toggle Active"; /* (mail.php) --  */
$statistics="statistics"; /* (various) --  */
$stats_total_images="Total images"; /* () --  */
$stats_total_img_views="Total image views"; /* () --  */
$stats_total_img_downs="Total image downloads"; /* () --  */
$stats_total_img_downs="Total image downloads"; /* () --  */
$stats_total_img_selected="Total selected image views"; /* () --  */
$stats_total_downs_selected="Total selected image downloads"; /* () --  */
$stats_downloads="Downloads"; /* () --  */
$stats_downl_size="Downloads size"; /* () --  */
$stats_coments_total="Total comments"; /* () --  */
$stats_coments_sel="Comments selected"; /* () --  */
$str_log_events['guestbook']="Guestbook"; /* (log.php) --  */
$stats_realtime="Enable/disable realtime Statistics"; /* (build_stats.php) --  */
$stats_realtime_info="<-- display all Statistics information realtime (no caching)"; /* (build_stats.php) --  */
$stats_cache_time="Statistics cache time"; /* (build_stats.php) --  */
$stats_cache_time_info="<-- refresh (download size) Statistics only after given time"; /* (build_stats.php) --  */
$stats_user_info="User"; /* (stats_view.php) --  */
$stats_image_info="Image"; /* (stats_view.php) --  */
$stats_comments_info="Comments"; /* (stats_view.php) --  */
$stats_general_info="General"; /* (stats_view.php) --  */
$spam_blocked="Blocked SPAM attacks"; /* () --  */
$mail_current_status="Current Status"; /* (mailing.php) --  */
$mail_sending_to="Sending to: "; /* (mailing.php) --  */
$mail_counters="Counters (Success/Fail/Total)"; /* (mailing.php) --  */
$mail_send_fail="Send FAIL: "; /* (mailing.php) --  */
$mail_send_ok="Send OK: "; /* (mailing.php) --  */
$mail_all_complete="All Completed!"; /* (mailing.php) --  */
$mail_failed_list="List of failed addresses"; /* (mailing.php) --  */
$mail_ok_list="List of sent addresses"; /* (mailing.php) --  */
$mail_mailer_error=" - Mailer Error: "; /* (mailing.php) --  */
$str_log_events['comments']="Comment Entry"; /* (log.php) --  */
$str_edit_members="Edit members"; /* (build_user.conf.php) --  */
$edit_groups="Edit groups "; /* (build_user.conf.php) --  */
$str_basket="Basket"; /* (various) --  */
$lang_plugins['log']="Logger"; /* (admin.php) --  */
$rss_created="XML RSS file generated successfully"; /* () --  */
$rss_not_created="RSS has not been built, because no change has been found"; /* () --  */
$rss_settings_saved="RSS settings saved"; /* () --  */
$lang_plugins['stats']="Statistics"; /* (various) --  */
$lang_plugins['RSS']="RSS"; /* (various) --  */
$str_no_watermarks="No Watermarks"; /* () --  */
$str_with_watermarks="With Watermarks"; /* () --  */
$str_create_cache_img="Create Cached Images"; /* () --  */
$str_reset_button="Reset"; /* () --  */
$cache_stats="Image Cache Stats"; /* () --  */
$drop_duplicates="Drop duplicates"; /* () --  */
$general_exif_rotate="Enable/Disable image auto rotation "; /* () --  */
$general_exif_rotate_info="<-- enable/disable image auto rotation by EXIF data"; /* () --  */
$lang_plugins['maps']="Google/Yahoo Maps"; /* () -- maps plugin */
$maps_setup_info_header="Google/Yahoo Maps Setup"; /* () -- maps plugin */
$maps_setup_yahoo_id="Your Yahoo Application ID"; /* (maps plugin) --  */
$maps_setup_google_key="Your Google Key"; /* (maps plugin) --  */
$maps_setup_php_version_warning="Sorry - This Plugin requires at least PHP Version 4.2.0 or newer. Please update PHP"; /* (maps plugin) --  */
$maps_select_type="Please sleect Map Type:"; /* (maps plugin) --  */
$maps_select_type_info="<-- select whether to use Google or Yahoo maps"; /* (maps plugin) --  */
$maps_select_display_type="Please choose Map display Type:"; /* (maps plugin) --  */
$maps_select_display_type_info="<-- show Hybrid, Sat or Regular Map"; /* (maps plugin) --  */
$maps_zoom_level="Default Zoom Level: 1-16 (Default 16, World Map)"; /* (maps plugin) --  */
$maps_zoom_level_info="<-- set default zoom level for Maps"; /* (maps plugin) --  */
$maps_zoom_location="Default location to center in view"; /* (maps plugin) --  */
$maps_zoom_location_info="<-- default location to center in Map"; /* (maps plugin) --  */
$maps_google_ctrl_size="Google Map controls size"; /* (maps plugin) --  */
$maps_google_ctrl_size_info="<-- adjust Google Maps slider and pan size"; /* (maps plugin) --  */
$maps_str="Maps"; /* (maps plugin) --  */
$map_type_ctrl="Enable Map Type Controls"; /* (maps plugin) --  */
$map_type_ctrl_info="<-- show Map type controls in Map"; /* (maps plugin) --  */
$map_slide_ctrl="Enable Map Slide Controls"; /* (maps plugin) --  */
$map_slide_ctrl_info="<-- show Map slide controls in Map"; /* (maps plugin) --  */
$map_pan_ctrl="Enable Map Pan Controls"; /* (maps plugin) --  */
$map_pan_ctrl_info="<-- show Map pan controls in Map"; /* (maps plugin) --  */
$map_auto_popup="Enable Marker Auto Popup"; /* (maps plugin) --  */
$map_auto_popup_info="<-- auto show Marker Popups on mousover"; /* (maps plugin) --  */
$map_album_add="Add Album"; /* (maps plugin) --  */
$map_marker_del="Delete Marker"; /* (maps plugin) --  */
$map_search_location="Search/Add new Location"; /* (maps plugin) --  */
$map_location_here="Your Location Here"; /* (maps plugin) --  */
$map_search_loc_button="Search Location"; /* (maps plugin) --  */
$map_add_location="Add new Location"; /* (maps plugin) --  */
$map_assign_album="Assign Album to Map Location"; /* (maps plugin) --  */
$general_ignored_files="Files to ignore in collection"; /* (build_general_config.php) --  */
$general_ignored_files_info="<-- files to ignore (comma seperated)"; /* (build_general_config.php) --  */
$general_ignored_fileext="File extensions to ignore in collection"; /* (build_general_config.php) --  */
$general_ignored_fileext_info="<-- file extensions to ignore (comma seperated)"; /* (build_general_config.php) --  */
?>