<?php
/* language file! current maintainer = Tage Madsen <tagevm@blueface.com>*/
/* this version converted to UTF8 by Klaus Slott ( klaus at vink - slott dk )*/
/*#################################################
## linpha messages
#################################################*/
/* left menu */
$album="Mit Fotoalbum";

/* alerts */
$alert_fopen="Fejl! kunne ikke åbne filen..";
$printing_probs="Print problemer"; 
$printing_probs_msg="Print slået fra! se";

/* global messages */
$subfolders="underfoldere";
$img_th="Billeder";
$in_th="i";
$alb_th="Albums i underfolder";
$thumb_hint_msg="klik for flere detaljer";
$latest_photo="seneste";
$view_at="Se som";
$close_button="Luk";
$help="Hjælp";

/*#################################################
## installation
#################################################*/
/* install.php (page 1) */
$welc_header="Velkommen til LinPHA";
$welc_text="Hejsa, dette er &quot;The Linux Photo Archive&quot; aka LinPHA.
		Det ser ud til at du kører LinPHA for første gang, derfor skal du køre installationen.";
$welc_hint="<b>Før du fortsætter:</b>";
$welc_hint1="1. lav &quot;<b>linpha/sql</b>&quot; skrivbar for alle!
			(i.e. chmod 777 sql)";
$next_button="Næste"; /* used as left menu header in all 4 stages */
$inst_msg="LinPHA installation"; /* used as left menu header in all 4 stages */
$inst_status_1="Vælg sprog og klik &quot;N�te&quot;";
$inst_status_step1="Trin 1 af 4";

/* sec_stage_install (page 2) */
$inst_access_msg="Vælg database adgang";
$inst_full_access_msg="<b>Fuld adgang.</b><br> Jeg har fuld adgang til MySQL
			     databasen, jeg har lov til at oprette nye<br>
			     databaser og nye	brugere. Med andre
			     ord: Det er min server!";
$inst_limited_access_msg="<b>Begrænset adgang!</b><br> Jeg vil installere LinPHA med begrænset adgang til<br>
				 MySQL databasen. Min ISP tillader
				 ikke at jeg laver nye databaser eller brugere.";
$inst_status_2="Vælg din adgang til databasen, hvis du er usikker skal du vælge begrænset adgang.";
$inst_status_step2="Trin 2 af 4";
/* requirements */
$req_check_msg="Checker System Krav";
$req_found_msg="OK fundet";
$req_miss_msg="IKKE fundet";
$req_safe_fail="Slået til";
$req_safe_ok="Slået fra";
$php_safemode_check_msg="checker PHP safe mode...";
$php_version_check_msg="checker  PHP version > 4.1.0...";
$mem_check_msg="checker PHP memory limit...";
$gd_check_msg="checker  GD library...";
$convert_check_msg="checker ImageMagick...";
$exif_check_msg="checker EXIF support...";
$summary_msg="Opsamling:";
$safe_mode_err="Din server er kofigureret til at køre PHP i
                      safe_mode. Linpha virker ikke før du har slået safe mode fra i php.ini filen!";
$inst_abort_msg="!!! INSTALLATION AFBRUDT !!!";
$php_version_err="Din server bruger PHP version < 4.1.0. Linpha virker kun med PHP versioner over 4.1.0";
$gd_convert_err="Hverken ImageMagick eller GD library blev fundet. Du skal installere mindst en af dem for at Linpha virker.";
$convert_sum_found_msg="ImageMagick blev fundet. Linpha bruger programmet til at lave høj kvalitets ikoner.";
$convert_sum_miss_msg="ImageMagick blev fundet. Det betyder at Linpha laver lav kvalitet ikoner.";
$exif_sum_found_msg="Din PHP installation har EXIF support. Linpha bruger det til at vise information gemt i dine billeder.";
$exif_sum_miss_msg="EXIF understttelse blev ikke fundet i din PHP installation. Den EXIF parser
			der er med i LinPHA vil blive brugt istedet.";
$session_path_check_msg="undersger session_safe_path...";
$session_path_found_msg="Sti til at gemme sessionen er sat i php.ini. LinPHA login burde virke. Stien er sat til: ";
$session_path_miss_msg="INGEN værdi er sat for session_save_path. Du SKAL sætte session_save_path
			i php.ini, ellers vil du IKKE kunne logge på�senere!!";
$mem_limit_ok_msg="OK, din PHP memory limit er >= 16MB. Der skulle ikke være problemer med
			ikon generering.";
$mem_limit_low_msg="Hmmh, din PHP memory limit er <=16MB. Hvis du oplever problemer
			med manglende ikoner, prøv da at forge memory_limit i php.ini eller resize dine
			billeder til en lavere oplsning og prv igen...";
$choose_def_quali="Vælg default billedkvalitet";
$choose_def_quali_warn="Vælg IKKE høj kvalitet hvis din CPU er &lt; 1Ghz (giver høj CPU belastning)";

/* third_stage_install (page 3) */
$inst_superadmin_header="Konfigurer MySQL database administrator";
$inst_superadmin_name="MySQL DB administrator navn:";
$inst_superadmin_name_info="<-administrator bruger i MySQL database (Skal eksistere i DB)";
$inst_superadmin_pass="MySQL DB admininistrator pass:";
$inst_superadmin_pass_info="<-password til MySQL administrator (Skal eksistere i DB)";

$inst_admin_header="Konfigurer LinPHA administrator";
$inst_admin_name="LinPHA admininistrator navn:";
$inst_admin_name_info="<-LinPHA admininistrator navn";
$inst_admin_pass="LinPHA admininistrator pass:";
$inst_admin_pass_info="<-LinPHA administratorens password";
$inst_admin_email="Admininistrators email:";
$inst_admin_email_info="<-Indtast administratorens email";

$inst_db_header="Konfigurer LinPHA database forbindelse";
$inst_db_host="Maskin navn:";
$inst_db_host_info="<-Databasens hostname: typisk &quot;localhost&quot;";
$inst_db_host_info2="<-MySQL Databasens hostname.";
$inst_db_host_port="Port nummer:";
$inst_db_host_port_info="<-Databasens port, som regel 3306!";
$inst_db_name="LinPHA database navn:";
$inst_db_name_info="<-Databasen til LinPHA, typisk &quot;linpha&quot;";
$inst_db_name2="Databasens navn:";
$inst_db_name_info2="<-Databasens navn som du har fået af din ISP";
$inst_table_prefix="\"Prefix for LinPHA tabeller";
$inst_table_prefix_info="<-Det \"Prefix\" der skal bruges til alle LinPHA tabeller";

$general_header="Generel konfiguration";
$general_album_title="Fotoalbummets titel";
$general_album_title_info="<-Tom for at bruge standard navn";
$general_photos_row="Antal viste rækker:";
$general_photos_row_info="<-Antal ikon rækker!";
$general_photos_col="Antal viste kolonner:";
$general_photos_col_info="<-Antal ikoner kolonner!";
$general_photos_width="Størrelse af detaljeret billede (bredde):";
$general_photos_width_info="<- 512 (default størrelse)!";
$general_photos_height="Størrelse af detaljeret billede (højde):";
$general_photos_height_info="<- 384 (default strrelse)!";
$general_img_quality="Kvalitet af detaljeret foto:";
$general_img_quality_info="<- juster billedkvalitet 0-100 (standard 75)";

$inst_status_3="Fyld information i alle felterne!";
$inst_status_step3="Trin 3 af 4";

/* forth_stage_install (page 4) */
$inst_status_4="Tillykke, installation fuldfrt! LinPHA er nu klar til brug";
$inst_status_step4="Trin 4 af 4";
$inst_submit="Færdig";
$inst_db_tryconn="Prøver at forbinde til databasen.";
$inst_db_tryconn_error="Fejl ved forbindelse til databasen, med:";
$inst_db_tryconn_ok="OK, forbindelse!";
$inst_db_tryinst="Forsøger at oprette database:";
$inst_db_tryinst_error="Fejl ved oprettelse af database:";
$inst_db_tryinst_ok="OK, oprettet!";
$inst_create_tb_msg="OK, opretter tabeller";
$inst_db_connect_inc_msg="Fejl ved forbindelse til databasen!";
$inst_db_connect_inc_msg1="Fejl ved forsøg på�select ".@$db_realname." i DB.<br>
	Hvis denne fejl opstår under installation, så�skal du slette db_connect.php filen.<br>
	i LinPHA &quot;sql&quot; under folder!";
$table_create="Opretter tabel:";
$table_create_error="Fejl under oprettelse af tabeller!";
$table_create_ok="OK, oprettet!";
$table_insert_admin="Opretter admininistrator konto med følgende navn:";
$table_insert_admin_error="Fejl under oprettelse af administrator konto!";
$table_insert_admin_ok="OK, oprettet!";
$write_db_config="Gemmer database konfiguration i en fil";
$fopen_error="Kunne ikke skrive til sql/db_config.php, udfør chmod 777 og genstart installationen";
$fopen_ok="OK, konfiguration gemt!";
$install_finish_msg="OK. Installationen er færdig!!";
$admin_task="Fortsæt";
$file_create_ok="OK, oprettet!";
$configure_error="Fejl. Verificer at du har udfyldt alle felter.";
$could_not_open="Fejl, kunne ikke åbne tabellen users! Det lader til du ikke har rettigheder til at tilføje nye brugere<br>
			til databasen. Prøv venligst den begrænsede installation på�side 2.<br>";

/*#################################################
## header.php
#################################################*/
$page_title="LinPHA - Linux Photo Album";
$head_title="The Linux Photo Archive";
$book_home="forside";
$book_about="om";
$book_admin="administration";
$book_admin_user="mine indstillinger";
$book_links="links";
$book_search="søg";
$book_logout="log ud";
$book_login="log ind";
$num_pictures="Antal billeder:";
$user_visits="besøg";
$user_online="brugere online";
$guest="gæst";
$html_lang="dk";
$html_charset="UTF-8";

/*#################################################
## index.php
#################################################*/
$index_welc_text="Hej, dette er &quot;The Linux Photo Archive&quot; aka LinPHA.
			Tag evt. et kig på <a href='http://linpha.sf.net'><u>Sourceforge</u></a> efter opdateringer.";

/*#################################################
## search.php
#################################################*/
$search_header="Linpha søgning";
$radio_all="Alle";
$radio_descript="Beskrivelse";
$radio_comment="Kommentar";
$radio_category="Kategori";
$radio_file="Filnavn";
$search_in="Søg i album";
$search_all="Alle albums";
$search_for="Sgeord";
$search_button="Søg";
$photos_found="fundet";
$search_info="LinPHA søge side";
$search_msg="Søg i Linphas billed database efter:";

/*#################################################
## img_view.php
#################################################*/
$img_detail="Information";
$img_size="Fuld størrelse";
$img_com="kommentar";
$img_des="beskrivelse";
$img_cat="kategori";
$img_name="navn";
$img_info_stored="Kommentar gemt i DB";
$please_login="<a href='login.php'><font color='#000099'><u>Login</u></font></a> for at tilføje kommentarer";
$back_to_thumbs="<b><u>tilbage til oversigten</u></b>";
$back_to_search="<b><u>tilbage til søgning</u></b>";
$button_next="næste";
$button_prev="forrige";
$exif_ext_error="Ingen EXIF support i din PHP version";
$exif_error="Billedet indeholder ingen EXIF information!";
$exif_more="flere detaljer";
$exif_less="færre detaljer";
$detail_header="Billede nummer";
$detail_header1="af";
$detail_header2="i albummet<br>";
$php_to_old="PHP < 4.2.0 EXIF disabled!";
$views="visninger";
$slideshow="Slideshow";
$seconds="sekunder";
$go="Start";
$stopslide="Stop Slideshow";
$img_rotate_ok="roter billede";
$img_rotating="Problem med billed-rotation"; // TOC entry
$img_rotating_hint1="Billed-rotation SLÅET FRA! klik";
$img_rotating_hint2="for at se hvorfor";
/* @translators! $img_rotating_hint1 and $img_rotating_hint2 are ONE sentense
later! i.e. "Image rotating DISABLED! click here to see why", so make sure it make sense ;-)


/*#################################################
## login.php
#################################################*/
$login_msg="Login!";
$login_error="Ukendt brugernavn eller password";
$login_name="Login navn";
$login_pass="Login password";
$login_info="LinPHA log ind side";
$login_request_account_info="Hvis du kunne tænke dig en konto:"; 
$login_request_target="Kontakt LinPHA Administratoren"; 
$login_admin_info="Du skal logge ind med dit admin brugernavn for at administrere LinPHA";
$login_friend_account_info="Hvis du har en konto, kan du ændre dine informationer her";

/*#################################################
## admin.php
#################################################*/
/* other messages */
$admin_page_header="LinPHA administration";
$please_turn_off_msg="Sæt 'Automatisk oprettelse/sletning af ikoner' til nej, når du er færdig med at tilføje billeder<br>
						LinPHA vil kre 10 gange hurtigere :)";
/* left menu */
$logout_msg="log ud";
$welc_msg="Velkommen ";
$stat_msg="Du har nu lov til at udføre administrative opgaver, tilføje kommentarer og beskrivelser til billeder.";
$back_to_msg="<b>Tilbage til billeder.</b>";
$href_general_conf="Generel konfiguration";
$href_user_conf="Bruger/gruppe konfiguration";
$href_folder_conf="Album konfiguration";
$href_sql="MySQL DB konfiguration"; 
$href_ftp="Fil håndtering";
$href_stats="LinPHA statistik";
$href_other_conf="Andet";

/* general config */
/* uses also entries from install.php */
$default_language="Sprog";
$default_language_info="<--standart sprog";
$general_auto_lang="Slå automatisk sprogvalg til/fra";
$general_auto_lang_info="<-- vælge automatisk samme sprog som gæstens browser";
$general_success_msg="! Ændringer gemt !";

$general_rotate="Slå billed-rotation til/fra";
$general_rotate_info="<-- <b>vigtig advarsel! klik info</b>";
$general_exifinfo="Slå AL EXIF understttelse til/fra";
$general_exifinfo_info="<-- slå brug af EXIF information til/fra";
$general_exifdefault="Vis EXIF information som standard";
$general_exifdefault_info="<-- slå til for at vise EXIF info som standard";

$general_exiflevel="EXIF information. (information gemt i billedet)";
$general_exiflevel_info="<-- hvor meget EXIF information skal der vises?";
$exif_low="lidt";
$exif_medium="mellem";
$exif_high="meget";
$general_filename="Vis filnavne";
$general_filename_info="<-- vis filnavn under ikon";
$general_thumb_order="Sorter ikoner efter";
$general_thumb_order_info="<-- angiv sorteringen af ikoner";
$thumb_order_date="dato";
$thumb_order_file="filnavn";
$general_autoconf="Automatisk oprettelse/sletning af ikoner";
$general_autoconf_info="<--sæt til nej for bedre performance";
$general_counterstat="Vis tæller";
$general_counterstat_info="<-- standard ja";
$general_blocking="IP blokering tid i minutter";
$general_blocking_info="<--bruger bliver ikke talt som ny indenfor x minutter";
$general_theme="ændre LinPHA udseende";
$general_theme_info="<-- angiv standart tema";
$aqua_theme="Aqua";
$colored_theme="Farvet";
$neptune_theme="Neptune";
$shadow_theme="Skygge";
$general_hq="Slå HQ ikoner og billeder til/fra";
$general_hq_info="Slå fra for meget bedre performance";
$submit_button_general="Gem ædringer i databasen";
$button_on_msg="ja";
$button_off_msg="nej";
$basic_opts="Grundlæggende";
$advanced_opts="Avanceret";
$show_basics="Klik for at vise Grundlæggende muligheder";
$show_advanced="Klik for at vise avancerede muligheder";
$general_printing="Slå gæst print til/fra";
$general_printing_info="<-- til, alle m�printe";
$general_slideshow="Slå slideshow til/fra";
$general_slideshow_info="<-- slå slideshow mulighed til/fra";
$general_mini_preview="Slå mini billeder til/fra";
$general_mini_preview_info="<-- slå fra hvis mange brugere har lav båndbredde";

/* modify existing user table */
$mod_user_header="Ændring af eksisterende brugere.";
$submit_button_mod_user="Gem ædringer";
$mod_user_success_msg="! Bruger ændret !";
$submit_button_delete="Slet";
$del_user_success_msg="! Bruger slettet !";

/* add new user table */
$new_user_header="Tilfj ny bruger";
$new_user_name_info="brugernavn:";
$new_user_pass_info="password";
$new_user_mail_info="email";
$new_user_level_info="Bruger type";
$friend="ven";
$submit_button_new_user="Tilføj bruger";
$new_user_success_msg="! Bruger tilføjet !";

/* friends account table */
$friend_user_header="Bruger konfiguration";
$submit_button_friend_user="Opdater konto";
$delete_button_friend_user="Slet konto";
$friend_info_msg="Ændrer din konto";

/* add new category table */
$new_cat_header="Tilføj en ny kategori";
$new_cat_info="Kategories navn";
$submit_button_new_cat="Tilføj kategori";
$new_cat_success_msg="! Kategori tilføjet !";
$mod_cat_header="Ændre/Slet kategorier";
$cat_name_header="Kategori navn";
$cat_mod_header="Ændrer kategori";
$cat_del_header="Slet kategori";
$submit_button_mod_cat="Ændrer";

/* set directory permissions */
$set_dir_perms_header="Album konfiguration";
$dir_name="Album";
$dir_perms="Adgang";
$action=" ";
$submit_button_folder="Gem";
$public="offentlig";
$friends="venner";
$private="privat";
$new_perms_success_msg="! Album konfiguration ændret !";

/*#################################################
## build_stats.php (called by admin.php)
#################################################*/
$stats_over_header="Overordnet Statistik";
$stats_over_photos="Billeder i databasen:";
$stats_over_views="Total billed visninger:";
$stats_over_albums="Albums i databasen:";
$stats_over_space="Diskplads brugt (alle albums):";
$stats_over_most_alb_visists="Mest besøgte album:";
$stats_over_visitors="Antal besøgende:";
$stats_over_users="Registrerede brugere:";
$stats_top_ten="Top 10 billeder";
$stats_rank="Vurdering:";
$stats_no_views="Antallet af visninger:";
$stats_last_view="Sidste visning:";
$stats_alb_name="Album Navn:";

/*#################################################
## create_all_thumbs.php
#################################################*/
$parse_first="UNDERS�ER - TRIN ET";
$parse_sec="UNDERS�ER - TRIN TO";
$parse_third="UNDERS�ER - TRIN TRE";
$parse="undersøger nu";
$parsed="undersøgte:";
$dirs="underfoldere";
$done="FÆRDIG...";
$not_allowed_msg="Beklager, du har ikke ret til at køre dette script!";
/* these entries are called from within admin.php */
$th_msg="Generer alle dine ikoner på een gang!";
$table_hint_msg="Klik start for at generere alle ikoner i alle underfoldere nu!";
$start_button="Start!";
$recreate_thumbs_header="Re-generer alle ikoner";
$recreate_thums_msg="Dette vil RE-GENERERE ALLE dine ikoner! Alle kommentarer, beskrivelser og statistik vil blive SLETTET!";
$recreate_thums_warning="Bekræft at du vil RE-GENERATE ALL dine ikoner og slette alle kommentarer, beskrivelser og statistik. Du kan ikke få dem tilbage når der er gjort. Er du sikker på du vil fortsætte?";


/*#################################################
## Printing, all files
#################################################*/
$print_layout="Vælg print format";
$images_page="Billeder/side";
$indexprint="Indeks print (28)";
$note="<strong>BEM�K:</strong> Du skal måske justere på�din browsers sideopsætning
			før print, for at være sikker på�at alle billeder kan være på�siden!!!";
$print_button="Print preview";
$href_check_all="Vælg alle";
$href_clear_all="Vælg ingen";
$print_error="FEJL, ingen billeder er valgt!!!";
$print_mode="Print metode";
$print_image="Print billede";
$videos_msg="Video kan ikke printes";

/*#################################################
## FTP, all files
#################################################*/

/*#################################################
## MySQL backup, most files ;-)
#################################################*/
$mysql_info_header="LinPHA MySQL database håndtering system ver.";
$mysql_cancel="Annuller";
$mysql_DHTML_hint="DHTML visning er slået fra - du vil ikke se noget før sikkerhedskopieringen er færdig.";
$mysql_select_all="Vælg alt";
$mysql_deselect_all="Fravælg alt";
$mysql_create_backup="Lav Sikkerhedskopi";
$mysql_back_menu="Tilbage til menu";
$mysql_table_checks="Checker tabeller...";
$mysql_table_check="Checker tabel";
$mysql_struct_msg="Laver struktur for";
$mysql_in_file_dump_msg="dumper data til";
$mysql_progress="Total Status:";
$mysql_back_complete="Sikkerhedskopiering færdig om";
$mysql_back_menu_long="Tilbage til MySQL Database Sikkerhedskopi hovedmenu";
$mysql_open_warn1="<B>Advarsel:</B> kunne ikke åbne ";
$mysql_open_warn2="for skrivning!<BR><BR><I>chmod 777</I> på kataloget skulle rette op på det.";
$mysql_date_msg="Klokken er nu "; // it follows time of the day...
$mysql_last_backup="Sidste fulde sikkerhedskopi af MySQL databaser: ";
$mysql_backup_hint="Generelt er det ikke nødvendigt at sikkerhedskopiere mere end en gang om ugen.";
$mysql_down_backup="Hent tidligere fulde sikkerhedkopi ";
$mysql_down_backup_part="Hent tidligere delvise sikkerhedskopi ";
$mysql_down_backup_struct="Hent tidligere sikkerhedskopi af strukturen ";
$mysql_down_backup1="(højre-klik, Gem Som...)";
$mysql_unknown_backup="Sidste sikkerhedskopi af MySQL databaser: <I>ukendt</I>";
$mysql_href_recom="Lav en ny fuld sikkerhedskopi, komplette 'inserts' (tilrådes)";
$mysql_href_standard="Lav en ny fuld sikkerhedskopi, standard 'inserts' (mindre)";
$mysql_href_partial="Lav en ny delvis sikkerhedskopi, kun valgte tabeller (med komplette 'inserts')";
$mysql_href_structure="Lav en ny fuld sikkerhedskopi, kun tabel struktur";
$mysql_days_last="dage";
$mysql_hours_last="timer";
$mysql_min_last="minutter";
$mysql_sec_last="sekunder";
$ago="siden"; // reads in context "some days ago"
$backup="Sikkerhedskopi";
$restore="Gendan";
$optimize="Optimer";
$optimize_tables="Optimerer tabeller";
$opt_table_name="Tabel navn";
$opt_table_check="Tabel check";
$opt_table_optimize="Tabel optimering";
$opt_table_msg="Besked-type";
$opt_start_msg="Start check og optimering af alle DB tabeller";
$fullback_hint_msg="Hvis du har flere databaser, vælg da den <b>delvise</b> sikkerhedskopiering";
$restore_last_fullback="Gendan fra sidste <b>fulde</b> sikkerhedskopi:";
$restore_last_partback="Gendan fra sidste <b>delvise</b> sikkerhedskopi:";
$restore_error="FEJL under åbning af sikkerhedskopi fil. Filen blev ikke fundet!";
$restore_success="korrekt gendannet!";

/*########################################################################
### FILEMANGER
########################################################################*/

define('STR_ACCESS_DENIED','<H1>access denied</H1> you have no permission to access this directory');
define('STR_BACK',	'back');
define('STR_LESS',	'less');
define('STR_MORE',	'more');
define('STR_LINES',	'lines');
define('STR_FUNCTIONLIST', 'Function list');
define('STR_EDIT',	'edit');
define('STR_VIEW',	'view');
define('STR_RENAME',	'rename');
define('STR_MKDIR',		'mkdir');
define('STR_DELETE',	'delete');
define('STR_BOTTOM',	'bottom');
define('STR_TOP',		'top');
define('STR_FILENAME',	   'filename');
define('STR_FILESIZE',	   'size');
define('STR_LASTMODIFIED', 'last modified');
define('STR_SUM', '<B>%s</B> byte(s) in <B>%s</B> item(s)');
define('STR_CREATEDIRLEGEND', 'create a directory');
define('STR_CREATEDIR',       'name of directory to create:');
define('STR_CREATEDIRBUTTON', 'create directory');
define('STR_RENAMELEGEND',       'rename');
define('STR_RENAMEENTERNEWNAME', 'enter new name for %s:');
define('STR_RENAMEBUTTON',       'rename');
define('STR_ERROR_DIR','Error: could not read directory contents');
define('STR_AUDIO',            'audio');
define('STR_COMPRESSED',       'compressed');
define('STR_EXECUTABLE',       'executable');
define('STR_IMAGE',            'image');
define('STR_SOURCE_CODE',      'source code');
define('STR_TEXT_OR_DOCUMENT', 'text or document');
define('STR_WEB_ENABLED_FILE', 'web-enabled file');
define('STR_VIDEO',            'video');
define('STR_DIRECTORY',        'directory');
define('STR_PARENT_DIRECTORY', 'parent directory');
define('STR_EDITOR_SAVE',      'save file');
define('STR_EDITOR_SAVE_ERROR','the file <I>%s</I> is not writable or does not exist');
define('STR_EDITOR_SAVE_ERROR_WRONG_VALUE','while editing the file <I>%s</I>, you have given the following value at byteposition #%s: %s.');
define('STR_EDITOR_SAVE_ERROR_HEX_VALUE_NEEDED','according to the settings, you have to provide a positive hexadecimal value between 00 and FF.');
define('STR_EDITOR_SAVE_ERROR_DEC_VALUE_NEEDED','according to the settings, you have to provide a whole, positive decimal value between 0 and 255.');
define('STR_FILE_UPLOAD_NAVI_HINT', 'Quick Navigator');
define('STR_FILE_UPLOAD_DRIVES', 'Drives:');
define('STR_FILE_UPLOAD', 'upload');
define('STR_FILE_UPLOAD_MAIN', 'uploader');
define('STR_FILE_UPLOAD_DISABLED', 'sorry, file upload is disabled in php.ini');
define('STR_FILE_UPLOAD_DESC','Choose files you would like to upload. Choose desired action to accomplish upon succesful upload.');
define('STR_FILE_UPLOAD_FILE','File');
define('STR_FILE_UPLOAD_TARGET','Upload file(s) to');
define('STR_FILE_UPLOAD_ACTION','when upload is complete do:');
define('STR_FILE_UPLOAD_NOTHING','do nothing');
define('STR_FILE_UPLOAD_DROPFILE','delete the uploaded file when the selected action is finished');
define('STR_FILE_UPLOAD_MAXFILESIZE','Allowed filesize (each file!) maximum currently set in php.ini is');
define('STR_FILE_UPLOAD_ERROR',        'Error: Unable to move file %s to directory %s');
define('STR_FILE_UPLOAD_CHDIR_ERROR',  'Error: Unable to switch (chdir) to %s directory. File being processed: %s');
define('STR_FILE_UPLOAD_UNLINK_ERROR', 'Error: Unable to delete %s after processing.');
define('STR_FILE_UPLOAD_ERROR_FILE_EXCEEDS_INI_SIZE', 'Error: The uploaded file %s exceeds the upload_max_filesize directive in php.ini - %s');
define('STR_FILE_UPLOAD_ERROR_FILE_EXCEEDS_FORM_SIZE','Error: size of uploaded file %s exceeds the HTML FORM settings');
define('STR_FILE_UPLOAD_ERROR_FILE_PARTIAL',          'Error: The uploaded file %s was only partially uploaded');

/*########################################################################
### BIG FAT NOTICE !
### AS OF LINPHA 0.9.0 ALL NEW ENTRIES ARE PLACED BELOW THIS MSG
### DEVELOPERS PLEASE MAKE USE OF THE "LANGUPDATE.PHP" SCRIPT!
########################################################################*/

$pano_view="panorama view"; /* (img_view.php) -- new [panorama view] href  */
$close_win="Luk vindue"; /* (various files) -- javascript close window */
$nav_hint="Brug must og piletaster til at navigere!"; /* (image_panorama_view.php) --  */
$pano_view_of="Panorama view af billedet"; /* (image_panorama_view.php) -- header message */
$php_basedir_check_msg="Checker on PHP open basedir er sat..."; /* (sec_stage_install.php) --  */
$req_basedir_fail="NEJ"; /* (sec_stage_install.php) -- YES, it\'s really just no/nein ;-) */
$basedir_active_msg="Dårligt, dårligt, dårligt, du har konfigureret PHP til at bruge open_basedir!<br>"; /* (sec_stage_install.php) --  */
$basedir_active_msg1="+ LinPHA vil bruge GD lib til at lave ikoner, forvent nogle problemer (FileManager og andre)<br>"; /* (sec_stage_install.php) --  */
$basedir_active_msg2="+ Hvis muligt så�fjern \"open_basedir\" i PHP.ini"; /* (sec_stage_install.php) --  */
$gd_basedir_err="+ Hvis muligt så�fjern \"open_basedir\" i PHP.ini eller rekompiler PHP med GD lib support (--with-gd)"; /* (sec_stage_install.php) --  */
$extract_tar_gz="pak et *.tar.gz arkiv ud (UNIX)"; /* (index.php) -- filemanger upload select */
$extract_tar_bz2="pak et *.tar.bz2 arkiv ud (UNIX)"; /* (index.php) --  */
$extract_gz="pak et gzip arkiv ud (UNIX)"; /* (index.php) -- filemanger upload select */
$extract_zip="unzip med unzip (UNIX)"; /* (index.php) -- filemanger upload select */
$extract_winzip="unzip med pkzip (WINDOWS WINZIP)"; /* (index.php) -- filemanger upload select */
$new_group_success_msg="! Gruppe tilføjer !"; /* (admin.php) -- redirect message */
$mod_group_success_msg="! Gruppe ændret !"; /* (admin.php) -- redirect message */
$del_group_success_msg="! Gruppe slettet !"; /* (admin.php) -- redirect message */
$mod_cat_success_msg="! Kategori ændret !"; /* (admin.php) -- redirect message */
$del_cat_success_msg="! Kategori slettet !"; /* (admin.php) -- redirect message */
$href_groups="Klik for at tilfje eller ændre grupper"; /* (build_user_conf/build_folder_conf) -- href message to group management */
$del_warning="ADVARSEL: Du skal logge ind med din nye konto !!!"; /* (build_user_conf.php) -- java popup to notify admin user */
$href_to_folder_conf="tilbage til folder administration"; /* (build_user_conf.php) -- navi href  */
$href_to_user_conf="tilbage til bruger administration"; /* (build_user_conf.php) -- navi href  */
$header_new_group="Tilføj ny gruppe"; /* (build_user_conf.php) -- table header */
$header_groupname="Gruppe navn"; /* (build_user_conf.php) -- table header */
$button_addgroup="Tilføj gruppe"; /* (build_user_conf.php) -- submit button */
$header_mod_group="Ændre/slet grupper"; /* (build_user_conf.php) -- table header */
$mod_group_header="Ændre gruppe"; /* (build_user_conf.php) -- table header */
$del_group_header="Slet gruppe"; /* (build_user_conf.php) -- table header */
$search_to_short="Søge teksten er for kort, den skal have mindst 2 tegn!"; /* (search.php) --  */
$general_thumb_size="Ændre ikon størrelsen"; /* (build_general_conf.php) -- thumbsize stuff */
$general_thumb_size_info="<-- søg max ikon strrelse i pixel"; /* (build_general_conf.php) -- thumbsize stuff */
$general_thumb_border="Ikon ramme, eller ej"; /* (build_general_conf.php) -- thumb border stuff */
$general_thumb_border_info="<-- enable for at tilføje en ramme om ikoner"; /* (build_general_conf.php) -- thumb border stuff */
$inst_thumbsize_header="Vælg ikon størrelse"; /* (third_stage_install.php) -- thumb size stuff */
$inst_thumbborder_header="Ramme indstillinger"; /* (third_stage_install.php) -- thumb border stuff */
$inst_thumbborder_enable="enable billed rammer"; /* (third_stage_install.php) -- thumb border checkbox msg */
$inst_thumbborder_disable="disable dilled rammer"; /* (third_stage_install.php) -- thumb border checkbox msg */
$safemode_active_msg="Bad bad bad, du har konfigureret PHP til at bruge \"save_mode\" begrænsninger!<br>"; /* (sec_stage_install.php) --  */
$safemode_active_msg2="+ Hvis muligt så�fjern \"save_mode\" i PHP.ini"; /* (sec_stage_install.php) --  */
$general_anon_post="Tillad/nægt anonymous kommentarer"; /* (build_general_conf.php) --  */
$general_anon_post_info="<-- anonymous må tilføje kommentarer"; /* (build_general_conf.php) --  */
$stats_over_comment="Kommentarer tilføjet"; /* (build_stats.php) --  */
$top10_downs_href="vis top 10 downloads"; /* (build_stats.php) --  */
$top10_views_href="vis top 10 views"; /* (build_stats.php) --  */
$stats_head_downs="Top 10 downloads"; /* (build_stats.php) --  */
$no_downloads="Antal downloads"; /* (build_stats.php) --  */
$general_anon_download="Tillad/nægt anonymous downloads"; /* (build_genera_config.php) --  */
$general_anon_download_info="<-- show/hide download link for images"; /* (build_general_config.php) --  */
$seach_multiple_select_use="Multiple select use"; /* (search.php) --  */
$search_and="AND"; /* (search.php) --  */
$search_or="OR"; /* (search.php) --  */
$search_categories="Categories"; /* (search.php) --  */
$search_with_available_filters="With available filters"; /* (search.php) --  */
$search_select_album="Select album"; /* (search.php) --  */
$search_date_from_to="Date from / to"; /* (search.php) --  */
$search_combination_and_or="In combination with AND and OR"; /* (search.php) --  */
$new_user_new_password="Nyt kodeord"; /* (build_user_conf.php) --  */
$new_user_error4="Username can't be empty"; /* (admin.php) --  */
$new_user_error5="Username already exists"; /* (admin.php) --  */
$new_user_error1="Det tidligere kodeord er ikke korrekt"; /* (admin.php) --  */
$new_user_error2="De 2 indtastninger passer ikke sammen, de er ikke ens"; /* (admin.php) --  */
$new_user_error3="Email isn't correct"; /* (admin.php) --  */
$new_user_old_password="Tidligere kodeord"; /* (admin.php) --  */
$new_user_retype_password="Ny kodeord - igen"; /* (admin.php) --  */
$select_db_header="Please select Database type"; /* (sec_stage_install.php) --  */
$mysql_info="Choose this for accessing a MySQL database"; /* (sec_stage_install.php) --  */
$postgres_info="Choose this for accessing a PostgreSQL database. Please see"; /* (sec_stage_install.php) -- reads: ...Please see info */
$login_autologin="Autologin"; /* (toc.php) --  */
$login_autologin_user="Autologin Userinfo"; /* (toc.php) --  */
$toc_timer="Timer"; /* (toc.php) --  */
$general_autologin="Enable/disable autologin"; /* (build_general_conf.php) --  */
$general_autologin_info="<-- activate the option to use the autologin"; /* (build_general_conf.php) --  */
$general_timer="Enable/disable timer"; /* (build_general_conf.php) --  */
$general_timer_info="<-- activate the output of the parsetime in the footer"; /* (build_general_conf.php) --  */
$login_autlogin="Autologin"; /* (login.php) --  */
$lostpw_title="Lost Password"; /* (login.php) --  */
$lostpw_question="Lost your password?"; /* (login.php) --  */
$lostpw_type_user_or_email="Type in your username OR your Linpha email-address"; /* (login.php) --  */
$lostpw_email1="Somebody has made use of the lost password function. If it wasn't you, just ignore this message and nothing will happen with your password. If it was you, put this code in the demanded field:"; /* (login.php) --  */
$lostpw_email1_part2="(Remember: This is NOT your new password!)"; /* (login.php) --  */
$lostpw_email1_part3="Your Linpha-Administrator"; /* (login.php) --  */
$lostpw_email_error="Error: E-Mail couldn't be sent. Contact the Administrator."; /* (login.php) --  */
$lostpw_error_nothing_found="Sorry, no username or password has been found that match your criterias."; /* (login.php) --  */
$lostpw_email_sent="E-Mail has been sent to you."; /* (login.php) --  */
$lostpw_should_receive="You should receive it within a minute. Enter the code from the email in this field:"; /* (login.php) --  */
$lostpw_go_back="Go back"; /* (login.php) --  */
$lostpw_email2="Password successfully changed. Your new password is:"; /* (login.php) --  */
$lostpw_email2_part2="You can change it later by using the \"my settings\" link."; /* (login.php) --  */
$lostpw_new_password="Nyt kodeord"; /* (login.php) --  */
$lostpw_successfully_changed="Password successfully changed, you should receive an email within a minute with the new password."; /* (login.php) --  */
$lostpw_error_wrong_code="Sorry, that isn't correct."; /* (login.php) --  */
$lostpw_enter_correct_code="Enter the correct code from the email in this field:"; /* (login.php) --  */
$lang_plugins['plugins']="LinPHA Plugins"; /* (admin.php) --  */
$lang_plugins['watermark']="Watermark"; /* (admin.php, toc.php) --  */
$lang_plugins['benchmark']="Benchmark"; /* (admin.php, toc.php) --  */
$lang_plugins['sql']="DB Management"; /* (admin.php, toc.php) --  */
$lang_plugins['active_plugins']="Active Plugins"; /* (admin.php) --  */
$lang_plugins['enabled']="Enabled"; /* (plugins.php) --  */
$lang_plugins['disabled']="Disabled"; /* (plugins.php) --  */
$lang_plugins['update']="Update"; /* (plugins.php) --  */
$lang_plugins['plugins_updated']="Plugins updated"; /* (admin.php, plugins.php) --  */
$wm_wm_man="Watermark Management "; /* (watermark.php) --  */
$wm_disable="Disable Watermark "; /* (watermark.php) --  */
$wm_change_example_img="Change example image "; /* (watermark.php) --  */
$wm_no_input_files_found="No input files found "; /* (watermark.php) --  */
$wm_image_quality="Image quality (only for preview) "; /* (watermark.php) --  */
$wm_enable_text="Enable: Text "; /* (watermark.php) --  */
$wm_text="Text "; /* (watermark.php) --  */
$wm_font="Font "; /* (watermark.php) --  */
$wm_fontsize="Fontsize "; /* (watermark.php) --  */
$wm_fontcolor="Fontcolor "; /* (watermark.php) --  */
$wm_align="Align "; /* (watermark.php) --  */
$wm_pos_hor="Position horizontal "; /* (watermark.php) --  */
$wm_pos_ver="Position vertical "; /* (watermark.php) --  */
$wm_height="Textfield height "; /* (watermark.php) --  */
$wm_width="Textfield width "; /* (watermark.php) --  */
$wm_shadow_size="Shadow size "; /* (watermark.php) --  */
$wm_shadow_color="Shadow color "; /* (watermark.php) --  */
$wm_enable_image="Enable: Image"; /* (watermark.php) --  */
$wm_available_images="Available images"; /* (watermark.php) --  */
$wm_no_images_found="No images found"; /* (watermark.php) --  */
$wm_dissolve="Dissolve"; /* (watermark.php) --  */
$wm_preview="Preview"; /* (watermark.php) --  */
$wm_linebreak="for linebreak"; /* (watermark.php) --  */
$wm_enable_shadow="Enable shadow"; /* (watermark.php) --  */
$wm_enable_rectangle="Enable rectangle"; /* (watermark.php) --  */
$wm_rectangle_color="Color"; /* (watermark.php) --  */
$wm_enable_ext_shadow="Enable extended shadow"; /* (watermark.php) --  */
$wm_status="Status"; /* (watermark.php) --  */
$wm_enabled="enabled"; /* (watermark.php) --  */
$wm_disabled="disabled"; /* (watermark.php) --  */
$wm_restore_to="Restore to"; /* (watermark.php) --  */
$wm_inital_settings="initial settings"; /* (watermark.php) --  */
$wm_add_more_examples="You can add more example images in your linpha directory in the folder"; /* (watermark.php) --  */
$wm_example="Example"; /* (watermark.php) --  */
$wm_shadow_fontsize="Shadow fontsize"; /* (watermark.php) --  */
$wm_settings_for_both="Settings for image and text"; /* (watermark.php) --  */
$wm_center="center"; /* (watermark.php) --  */
$wm_north="top"; /* (watermark.php) --  */
$wm_northeast="topright"; /* (watermark.php) --  */
$wm_northwest="topleft"; /* (watermark.php) --  */
$wm_south="bottom"; /* (watermark.php) --  */
$wm_southeast="bottomright"; /* (watermark.php) --  */
$wm_southwest="bottomleft"; /* (watermark.php) --  */
$wm_east="right"; /* (watermark.php) --  */
$wm_west="left"; /* (watermark.php) --  */
$bm_file_err="Error, no file specified";
$bm_var_err="Error, please check input variables";
$bm_notfound_err="Error, file not found";
$bm_noimg_err="Error, file is not an image";
$bm_tmpfile_err="Error, while creating temporary image file";
$bm_tmpfile_warn="Warning: Temporary image cannot be deleted";
$bm_time_total="Total execution time: ";
$bm_img_sec="Images per second: ";
$bm_avg_img="Average time for each image (mouse over to update image): ";
$bm_qual_size="Quality/Size";
$bm_quality="Quality: ";
$bm_height="Height: ";
$bm_width="Width: ";
$bm_size="Image size: ";
$bm_create = "Creating benchmark with conversion utility";
$bm_interval = "interval";
$bm_calc = "Calculating";
$bm_img = "Images";
$bm_inloop="Running loop";
$bm_qual_range="Quality range: ";
$bm_size_range="Size range (only height): ";
$bm_repeats="Repeats: ";
$bm_con_util="Please select conversion utility: ";
$bm_current_settings="Current settings"; /* (benchmark.php) --  */
$bm_preview="Preview"; /* (benchmark.php) --  */
$bm_save_settings="Save this settings"; /* (benchmark.php) --  */
$wm_addexamples="Watermark: Add more example images"; /* (watermark.php) --  */
$wm_addimg="Watermark: Add more watermark images"; /* (watermark.php) --  */
$wm_addfont="Watermark: Add more fonts"; /* (watermark.php) --  */
$wm_colorsetting="Watermark: Color settings"; /* (watermark.php) --  */
$comment_hint="HINT: click upper or lower image to scroll the album"; /* (linpha_comments.php) --  */
$comment_end="End of album"; /* (linpha_comments.php) --  */
$comment_beginning="Beginning of album"; /* (linpha_comments.php) --  */
$comment_back="back to image view"; /* (linpha_comments.php) --  */
$comment_edit_img="Ret kategori/kommetar"; /* (linpha_comments.php) --  */
$comment_change_img_details="Change image details"; /* (linpha_comments.php) --  */
$comment_last_comments="Last comments"; /* (linpha_comments.php) --  */
$comment_comment_by="comment by"; /* (linpha_comments.php) --  */
$category_delete_warning="Warning: Categories already assigned to images get lost"; /* (build_category_conf.php) --  */
$pass_2_short="ERROR, password must be at least 3 characters long..."; /* (various) --  */
$album_edit="Edit album comment"; /* (linpha_comments.php) --  */
$album_details="Album details"; /* (linpha_comments.php) --  */
$wm_save_note="NOTE: Watermarks aren NOT visible for registered users!. You MUST log out first (be guest) to see your watermarks while browsing LinPHA!"; /* (watermark.php) --  */
$lang_plugins['guestbook']="Guestbook"; /* (admin.php) --  */
$print_low_quality="Low quality"; /* (printing_view.php) --  */
$print_high_quality="High quality (slow!)"; /* (printing_view.php) --  */
$gb_title="LinPHA Guestbook";
$gb_sign="LinPHA Guestbook! Add new Message";
$gb_from="Location";
$gb_from_no="No Location given";
$gb_pages="page(s)";
$gb_messages="messages in guestbook";
$gb_msg_error="Sorry, Name and Comment mustn't be emtpy";
$gb_new_msg="Add new message";
$gb_name="Name";
$gb_email="Email";
$gb_hp="Homepage";
$gb_country="Where you from (Country)";
$gb_header="LinPHA Guestbook";
$gb_opts="Guestbook Options";
$gb_rows="Number of postings per page";
$gb_anon="Allow anonymous guestbook postings";
$gb_order="Order postings";
$wm_resize="Scale watermark always to X% of image size"; /* (watermark.php) --  */
$wm_help_and_descr="Help and description"; /* (watermark.php) --  */
$folder_remove_hint="If all went well, you should now remove the /install subfolder (security)..."; /* (forth_stage_install.php) --  */
$add_alb_com="Add Album comment"; /* (img_view.php) --  */
$add_img_com="Add image comment"; /* (img_view.php) --  */
$album_com="Album comment"; /* (*_stage_album.php) --  */
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
$bm_saved="Settings saved"; /* (admin.php) --  */
$cache_optimize_by_size="Delete all cache elements where size (in kb) >="; /* (cache.php) --  */
$cache_optimize_by_date="Delete all cache elements not used for days:"; /* (cache.php) --  */
$elements_rem="Removed elements"; /* (cache.php) --  */
$general_anon_album_downs="Allow/deny anonymous zip album downloads"; /* (build_general_conf.php) --  */
$general_anon_album_downs_info="<-- anonymous is allowed to download zipped albums"; /* (build_general_conf.php) --  */
$general_download_speed="Set download speed limit in kb/sec (0=unlimited)"; /* (build_general_conf.php) --  */
$general_download_speed_info="<-- download speed limit for album downloads"; /* (build_general_conf.php) --  */
$general_navigation="Enable/disable navigation bar"; /* (build_general_conf.php) --  */
$general_navigation_info="<-- activate the navigation bar on the ikoner pages"; /* (build_general_conf.php) --  */
$toc_navigation="Enable/disable navigation bar"; /* (doc/) --  */
$toc_zip_download="Enable/disable anonymous album downloads"; /* (doc/) --  */
$toc_albdownlimit="Download speed limit"; /* (doc/) --  */
$choose_zips_msg="Select images to download"; /* (build_zip_view.php) --  */
$zip_button="Download archive"; /* (build_zip_view.php) --  */
$type_of_archive="Select type of archive"; /* (build_zip_view.php) --  */
$create_tar="create tar archive"; /* (build_zip_view.php) --  */
$create_tgz="create tar.gz archive"; /* (build_zip_view.php) --  */
$create_bz2="create tar.bz2 archive"; /* (build_zip_view.php) --  */
$create_zip="create zip archive"; /* (build_zip_view.php) --  */
$create_rar="create rar archive"; /* (build_zip_view.php) --  */
$menumsg['advanced']="Avanceret"; /* () --  */
$menumsg['printmode']="Print Mode"; /* () --  */
$menumsg['printprobs']="Printing Disabled?"; /* () --  */
$menumsg['downloadmode']="Download Mode"; /* () --  */
$menumsg['mailmode']="Mail Mode"; /* () --  */
$menumsg['addcomment']="Add Album Comment"; /* () --  */
$menumsg['delcomment']="Delete Album Comment"; /* () --  */
$menumsg['editcomment']="Edit Album Comment"; /* () --  */
$album_up="updated"; /* (album_comment.php) --  */
$album_ins="inserted"; /* (album_comment.php) --  */
$mail_link="mailing list"; /* (header.php) --  */
$mail_title="LinPHA Mailing List"; /* (mail.php) --  */
$mail_send_link="Send Mail"; /* (mail.php) --  */
$mail_return_address="Return address:"; /* (mail.php) --  */
$mail_block="Mail Block Size:"; /* (mail.php) --  */
$mail_block_help="# of emails in a block before a break to avoid PHP timeouts."; /* (mail.php) --  */
$mail_options="Mailing List Options"; /* (mail.php) --  */
$mail_go_back="Go Back"; /* (various mail plugin files) --  */
$mail_form_title="E-Mail Message"; /* (mail_form.php) --  */
$mail_form_subject="Subject:"; /* (mail_form.php) --  */
$mail_form_msg="Message:"; /* (mail_form.php) --  */
$mail_total_sent="Total e-mail(s) sent:"; /* (mail_form.php) --  */
$mail_subscribe="Subscribe"; /* (mail_users.php) --  */
$mail_unsubscribe="Unsubscribe"; /* (mail_users.php) --  */
$mail_activate="Activate"; /* (mail_users.php) --  */
$mail_user_name="Your Name:"; /* (mail_users.php) --  */
$mail_user_email="Your E-Mail:"; /* (mail_users.php) --  */
$mail_user_email_confirm="Confirm E-Mail:"; /* (mail_users.php) --  */
$mail_user_code="Activation Code:"; /* (mail_users.php) --  */
$mail_user_code_sent="An e-mail with the activation code has been sent to your e-mail account."; /* (mail_users.php) --  */
$mail_user_code_subject="LinPHA Mailing List Activation"; /* (mail_users.php) --  */
$mail_user_activated="Your account has been activated!"; /* (mail_users.php) --  */
$mail_user_activate_error="There was an error in activating your account!"; /* (mail_users.php) --  */
$mail_user_email_not_found="does NOT exist in our mailing list."; /* (mail_users.php) --  */
$mail_user_remove_ok="removed from our mailing list."; /* (mail_users.php) --  */
$mail_user_remove_fail="could not be removed from our mailing list."; /* (mail_users.php) --  */
$mail_user_empty="Fill in all fields."; /* () --  */
$mail_user_no_match="E-Mails don't match."; /* () --  */
$mail_user_exists="E-Mail already exists in our list."; /* (mail_users.php) --  */
$lang_plugins['mail']="Mailing List"; /* (admin.php) --  */
$mail_activate_message="Dear %s,\n\nPlease enter these details to activate your Mailing List account.\n\nActivation Code: %s\n\nThanks!\nThe Webmaster"; /* (submit_users.php) -- dont delete the %s and the \n ! */
$mail_hint="Hint"; /* (mail.php) --  */
$mail_user_permission="All users in the group 'mail' are able to send messages to the mailing list."; /* (mail.php) --  */
$mail_current_subscribers="Current subscribers"; /* (mail.php) --  */
$mail_name="Name"; /* (mail.php) --  */
$mail_mail="Email"; /* (mail.php) --  */
$mail_subscribing_date="Subscribing Date"; /* (mail.php) --  */
$mail_active="Active"; /* (mail.php) --  */
$mail_sent_to="Email sent to"; /* (mail.php) --  */
$mail_replace_words="<b>[Name]</b> and <b>[Email]</b> will be replaced with the name and email address of the specific users."; /* (form_mailing.php) --  */
$misc_help="Miscellaneous Help"; /* () --  */
$mail_create_group="(You have to create the group 'mail' yourself.)"; /* (mail.php) --  */
$alb_th="Subfolders in album"; /* (*_stage_album.php) -- overwrites old (wrong) entry */
$arr_month_short = Array('1' => 'Jan','2' => 'Feb','3' => 'Mar','4' => 'Apr','5' => 'May','6' => 'Jun','7' => 'Jul','8' => 'Aug','9' => 'Sep','10' => 'Oct','11' => 'Nov','12' => 'Dec'); /* abrevations of months */
$arr_month_long = Array('1' => 'January','2' => 'February','3' => 'March','4' => 'April','5' => 'May','6' => 'June','7' => 'July','8' => 'August','9' => 'September','10' => 'October','11' => 'November','12' => 'December'); /* months */
$arr_day_short = Array('Sun','Mon','Tue','Wed','Thu','Fri','Sat'); /* abrevations of weekdays */
$arr_day_long = Array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'); /* weekdays */
/*
If the time and date format in your country is different with these formats,
please uncomment these lines and set it to the right format. Otherwise, leave
it as it is. See http://www.php.net/manual/en/function.strftime.php for definitions.
(Don't apply this to the english language file, the default date and time format are
set in the options page of linpha. This is because the date format is different within
the english spoken countries.)
$date_format = "%m/%d/%Y";
$time_format = "%I:%M:%S %p";
*/
$layout="Layout";
$features="Features";
$perform="Performance";
$general_comment_in_subfolder = 'Enable/disable album comments in subfolder';
$general_comment_in_subfolder_info = '<-- show album comments in subfolder preview';
$general_default_date_format = 'Default date format';
$general_default_date_format_info = '<- example: 06/28/2004, see info for details';
$general_default_time_format = 'Default time format';
$general_default_time_format_info = '<- example: 01:45:50 PM, see info for details';
$general_new_images_folder = 'Virtual "New images" folder';
$general_new_images_folder_info = '<- shows a virtual folder with new added images';
$general_new_images_folder_age = '"New images" folder age in days';
$general_new_images_folder_age_info = '<- max age of images to be displayed';
$control_key="Ctrl"; /* (various) --  */
$search_date="Date"; /* (search.php) -- reads: date from to... */
$search_from="from"; /* (search.php) -- reads: date from to... */
$search_to="to"; /* (search.php) -- reads: date from to... */
$start_slide="Start Slideshow"; /* (img_view.php) --  */
$pass_msg="You have to login with your new password"; /* (build_my_settings.php) --  */
$str_new_images = "New images"; /* (new_images.php) -- */
$str_order_by = "Order by"; /* (new_images.php) -- */
$str_age = "Age"; /* (new_images.php) -- */
$str_album = "Album"; /* (new_images.php) -- */
$str_in_album = "In album"; /* (new_images.php) -- */
$str_img_newer_than = "all images newer than %s days"; /* (new_images.php) -- */
$timespanfmt = "%s days, %s hours, %s minutes and %s seconds"; /* (new_images.php) -- */
$str_delete_all_cached_images_with_watermarks="Delete all cached images with watermarks"; /* (watermark.php) --  */
$str_error_changing_perm="ERROR, the file permissions couldn't be changed! (Maybe you haven't the permission)"; /* (plugins/ftp/index.php) --  */
$str_change_perm="Change permission of:"; /* (plugins/ftp/index.php) --  */
$str_read="Read"; /* (plugins/ftp/index.php) --  */
$str_write="Write"; /* (plugins/ftp/index.php) --  */
$str_execute="Execute"; /* (plugins/ftp/index.php) --  */
$str_owner="Owner"; /* () --  */
$str_group="Group"; /* (plugins/ftp/index.php) --  */
$str_all_other="All others"; /* (plugins/ftp/index.php) --  */
$str_copy="copy"; /* (plugins/ftp/index.php) --  */
$str_copy_to="Copy %s to:"; /* (plugins/ftp/index.php) --  */
$str_rename_to="Rename %s to:"; /* (plugins/ftp/index.php) --  */
$str_rotation_disabled="Image rotation disabled"; /* (img_view.php) --  */
$str_no_write_perm="No write permissions"; /* (img_view.php) --  */
$str_new_images_in_these_folders="New images found in the following albums:"; /* (new_images.php) --  */
$str_reinstall_remove_dbconnect="If you want to reinstall LinPHA, you first have to delete the file ./sql/db_connect.php! (You can do this with the integrated filemanager in the admin section)"; /* (install_header.php) --  */
$str_Version="Version"; /* (sec_stage_install.php) --  */
$str_no_supported_database_activated="Error: No supported database activated in your PHP configuration"; /* (sec_stage_install.php) --  */
$str_extract_with="When upload is completed, extract archive with"; /* (ftp/index.php) --  */
$str_files_to_upload="Files to upload"; /* (ftp/index.php) --  */
$posix_check_msg="checking for POSIX support..."; /* (sec_stage_install.php) --  */
$posix_sum_found_msg="Found POSIX support in your PHP installation. All functions of the integrated file management tool are activated."; /* (sec_stage_install.php) --  */
$posix_sum_miss_msg="No POSIX support found in your PHP installation. Unable to use some functions of the integrated file management tool (Especially changing permissions of files)."; /* (sec_stage_install.php) --  */
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
$new_user_full_name="Dit navn"; /* (build_my_settings.php) -- And build_user_conf.php */
$general_mini_preview_full_thm="Enable/Disable prev/next mini images as full ikoner"; /* (build_general_conf.php) --  */
$general_mini_preview_full_thm_info="<-- enable to show buttons as full ikoner in image viewer"; /* (build_general_conf.php) --  */
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
$general_icon_view="Thumbnail View"; /* (build_general_conf.php) --  */
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