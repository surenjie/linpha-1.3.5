<?php
/* language file */
/* Deutsches Sprachfile fuer LinPHA. Bei Fehlern oder Verbesserungen, 
bitte eine eMail an marco@linpha.org */
/* Feel free to modify this file to make use of your native language.
If you do so, please save it as lang.YourLanguage.php in the LinPHA /lang dir
and PLEASE mail me a copy! mailto:bzrudi@tuxpower.de */

/*#################################################
## linpha messages
#################################################*/
/* left menu */
$album="Mein Fotoarchiv";

/* alerts */
$alert_fopen="Fehler! Datei konnte nicht ge&ouml;ffnet werden...";
$printing_probs="Druckprobleme";
$printing_probs_msg="Drucken deaktiviert! siehe";

/* global messages */
$subfolders="Unterordner";
$img_th="Fotos";
$in_th="in";
//$alb_th="Alben im Unterverzeichnis";
$thumb_hint_msg="Hier klicken f&uuml;r Details";
$latest_photo="Letztes";
$view_at="Ansehen in";
$close_button="schlie&szlig;n";
$help="Hilfe";

/*#################################################
## installation
#################################################*/
/* install.php (page 1) */
$welc_header="Willkommen bei LinPHA";
$welc_text="Hallo, willkommen beim &quot;PHP Foto Archiv&quot; Projekt.".
		" Da Sie LinPHA zum ersten mal starten, m&uuml;ssen Sie nun zuerst die Installation durchf&uuml;hren!<br>";

$welc_hint="<b>Bevor Sie weitermachen:</b>";
$welc_hint1="1. Berechtigungen des Verzeichnisses &quot;<b>linpha/sql</b>&quot; Beschreibbar f&uuml;r ALLE setzen!".
			" (z.B. chmod 777 sql)";
$welc_hint2="2. Wenn es keinen Administrator f&uuml;r Ihre MySQL Datenbank gibt, erstellen Sie einen. Sollten Sie nicht wissen wie, dann lesen Sie".
	" <b>&quot;INSTALL&quot;</b>... ";
$next_button="Weiter"; /* used as left menu header in all 4 stages */
$inst_msg="LinPHA Installation"; /* used as left menu header in all 4 stages */
$inst_status_1="Bitte w&auml;hlen Sie eine Sprache aus. &quot;Weiter&quot;";
$inst_status_step1="Schritt 1 von 4";

/* sec_stage_install (page 2) */
$inst_access_msg="Konfiguration der Zugriffsrechte auf die Datenbank";
$inst_full_access_msg="<b>JA !</b><br> Ich habe volle Zugriffsrechte zur SQL-Datenbank. Ich kann eine neue Datenbank oder neue Benutzer anlegen.<br>".
						" Mit anderen Worten: Das ist mein Server!";
$inst_limited_access_msg="<b>NEIN !</b><br> Ich installiere LinPHA in eine SQL-Datenbank mit eingeschr&auml;nkten Rechten.<br>".
						" Mein Provider erlaubt es nicht, dass ich neue Benutzer oder eine neue Datenbank anlege.";
$inst_status_2="Bitte w&auml;hlen Sie die Art ihrer SQL-Datenbank. Wenn unsicher w&auml;hlen Sie NEIN!";
$inst_status_step2="Schritt 2 von 4";

/* requirements */
$req_check_msg="Pr&uuml;fe die Systemvoraussetzungen";
$req_found_msg="OK gefunden";
$req_miss_msg="FEHLT";
$req_safe_fail="Aktiviert";
$req_safe_ok="Nicht Aktiviert";
$php_safemode_check_msg="pr&uuml;fe PHP safe mode...";
$php_version_check_msg="pr&uuml;fe PHP Version > 4.1.0...";
$mem_check_msg="pr&uuml;fe PHP Speicherlimit...";
$gd_check_msg="pr&uuml;fe GD library...";
$convert_check_msg="pr&uuml;fe ImageMagick...";
$exif_check_msg="pr&uuml;fe EXIF Unterst&uuml;tzung...";
$summary_msg="Zusammenfassung:";
$safe_mode_err="Ihr Server arbeitet im PHP safe_mode. Solange der safe_mode in der php.ini aktiviert ist".
			" k&ouml;nen einige LinPHA Funktionen nicht richtig genutzt werden !";
$inst_abort_msg="!!! INSTALLATION ABGEBROCHEN !!!";
$php_version_err="Ihr Server abeitet mit einer PHP Version < 4.1.0. LinPHA kann damit nicht genutzt werden.".
			" Bitte aktuallisieren Sie ihre PHP Version auf >4.1.0.";
$gd_convert_err="Es wurde weder ImageMagick noch die GD library gefunden. Bitte installieren Sie eins von beiden".
			" damit LinPHA genutzt werden kann.";
$convert_sum_found_msg="ImageMagick wurde auf diesem Server gefunden. Damit kann LinPHA Vorschaubilder mit sehr hoher".
			" Qualit&auml;t erstellen.";
$convert_sum_miss_msg="ImageMagick wurde auf diesem Server NICHT gefunden. Dadurch werden die Vorschaubilder mit einer".
			" etwas niedrigeren Qualit&auml;t erstellt.";
$exif_sum_found_msg="Ihre PHP Installation unterst&uuml;tzt EXIF. Dadurch kann LinPHA auch Details der Fotos anzeigen.";
$session_path_check_msg="pr&uuml;fe session_safe_path...";
$session_path_found_msg="Der Pfad f&uuml;r session_safe_path wurde in der php.ini eingetragen ->";
$session_path_miss_msg="Um sich bei LinPHA anmelden zu k&ouml;nnen m&uuml;ssen sie zuerst in der php.ini einen g&uuml;ltigen Pfad f&uuml;r session_safe_path eintragen!";
$exif_sum_miss_msg="Kein EXIF support in Ihrer PHP version gefunden. Aktiviere die in LinPHA intergrierte".
				" Funktion zum Lesen von EXIF Informationen";
$mem_limit_ok_msg="Sehr gut, Ihr PHP Speicherlimit ist >= 16MB. Es sollte keine Probleme bei der Erstellung von Vorschaubilder geben.";
$mem_limit_low_msg="Schade, Ihr PHP Speicherlimit ist <=16MB. Wenn Sie Probleme beim erstellen von Vorschaubilder haben".
			" z.B. das Vorschaubilder fehlen, dann versuchen Sie bitte das memory_limit in der php.ini zu erh&ouml;hen oder".
			" verringern Sie die Aufl&ouml;sung der Fotos und probieren es erneut...";
$choose_def_quali="Standard Qualit&auml;t der Fotos ausw&auml;hlen";
$choose_def_quali_warn="W&auml;hlen Sie nicht \"hohe Qualit&auml;t\", wenn Ihre CPU < 1Ghz ist (starke CPU-Auslastung)";


/* third_stage_install (page 3) */
$inst_superadmin_header="Konfiguration des MySQL Datenbank Administrators";

$inst_superadmin_name="MySQL DB Adminname:";
$inst_superadmin_name_info="<-MySQL Datenbank Adminname (muss in DB vorhanden sein)";
$inst_superadmin_pass="MySQL DB Admin Kennwort:";
$inst_superadmin_pass_info="<-Kennwort des MySQL Administrators (muss in DB vorhanden sein)";

$inst_admin_header="Konfiguration des LinPHA Administrators";
$inst_admin_name="LinPHA Administrator Name:";
$inst_admin_name_info="<-LinPHA Administrator Name";
$inst_admin_pass="LinPHA Administrator Kennwort:";
$inst_admin_pass_info="<-LinPHA Administrator Kennwort";
$inst_admin_email="E-Mail des Administrators:";
$inst_admin_email_info="<-E-Mail des Administrators";

$inst_db_header="Konfiguration der LinPHA Datenbankverbindung";
$inst_db_host="Hostname:";
$inst_db_host_info="<-Hostname: normalerweise &quot;localhost&quot;";
$inst_db_host_info2="<-Hostname: MySQL Datenbank Hostname";
$inst_db_host_port="Portnummer:";
$inst_db_host_port_info="<-Portnummer: Wenn unsicher, einfach so lassen!";
$inst_db_name="LinPHA Datenbankname:";
$inst_db_name_info="<-LinPHA Datenbankname, normalerweise &quot;linpha&quot;";
$inst_db_name2="Datenbankname:";
$inst_db_name_info2="<-Vom ISP vergebener Datenbankname";
$inst_table_prefix="\"Prefix\" f&uuml;r die LinPHA Tabellen";
$inst_table_prefix_info="<-\"Prefix\" f&uuml;r alle LinPHA Tabellen";

$general_header="Konfiguration der globalen Optionen";
$general_album_title="Titel des Fotoalbums";
$general_album_title_info="<- leer lassen f&uuml;r den Standardnamen";
$general_photos_row="Anzahl der Zeilen die dargestellt werden:";
$general_photos_row_info="<- Anzahl der dargestellten Zeilen!";
$general_photos_col="Anzahl der Spalten die dargestellt werden:";
$general_photos_col_info="<- Anzahl der dargestellten Spalten!";
$general_photos_width="Breite des Detailansichtfotos";
$general_photos_width_info="<- 512 (Standardgr&ouml;&szlig;e)";
$general_photos_height="H&ouml;he des Detailansichtfotos";
$general_photos_height_info="<- 384 (Standardgr&ouml;&szlig;e)";
$general_img_quality="Qualit&auml;t des Detailfotos:";
$general_img_quality_info="<- Bildqualit&auml;t 0-100 (Standard 75)";

$inst_status_3="Bitte alle Felder ausf&uuml;llen!";
$inst_status_step3="Schritt 3 von 4";

/* forth_stage_install (page 4) */
$inst_status_4="Herzlichen Gl&uuml;ckw&uuml;nsch, die Installation ist fertig! LinPHA kann jetzt genutzt werden";
$inst_status_step4="Schritt 4 von 4";
$inst_submit="Fertig";
$inst_db_tryconn="Versuche Verbindung zum DB-Server herzustellen";
$inst_db_tryconn_error="Fehler beim Verbindungsaufbau zum DB-Server, versuch mit folgende Werte:";
$inst_db_tryconn_ok="OK, verbunden!";
$inst_db_tryinst="Versuche Datenbank zu erstellen:";
$inst_db_tryinst_error="Fehler beim Erstellen der Datenbank:";
$inst_db_tryinst_ok="OK, Datenbank erstellt!";
$inst_create_tb_msg="OK, Tabellen wurden erstellt";
$inst_db_connect_inc_msg="Fehler beim Verbindungsaufbau zum Datenbank-Server!";
$inst_db_connect_inc_msg1="Fehler beim ausw&auml;hlen von ".@$db_realname." aus der Datenbank.<br>".
	" Wenn diese Meldung bei der Installation erscheint, m&uuml;ssen Sie erst die Datei <b>db_connect.php</b><br> im LinPHA Verzeichnis".
	" &quot;sql&quot; l&ouml;schen!";
$table_create="Erstelle Tabelle:";
$table_create_error="Fehler beim erstellen der Tabellen!";
$table_create_ok="OK, erstellt!";
$table_insert_admin="Erstelle Admin Zugang mit dem Namen:";
$table_insert_admin_error="Fehler beim erstellen des Admin Zugangs!";
$table_insert_admin_ok="OK, erstellt!";
$write_db_config="Speichere Datenbank Konfigurations Datei";
$fopen_error="Konnte sql/db_connect.php nicht &ouml;ffnen um die &Auml;nderungen zu schreiben. Berechtigung mit chmod 777 &auml;ndern und Installation erneut ausf&uuml;hren";
$fopen_ok="OK, Konfiguration wurde geschrieben!";
$install_finish_msg="OK. Installation ist fertig!!";
$admin_task="Bitte hier klicken um weiter zu machen";
$file_create_ok="OK, erstellt!";
$configure_error="Bitte alle ben&ouml;tigten Felder ausf&uuml;llen!!!";
$could_not_open="Fehler, kann die Tabelle users nicht &ouml;ffnen! Sie sind nicht berechtigt neue Benutzer in der Datenbank anzulegen.<br>".
		" Bitte die Installations Methode auf Seite 2 benutzen.<br>";

/*#################################################
## header.php
#################################################*/
$page_title="LinPHA - Das PHP Foto Archiv";
$head_title="Das PHP Foto Archiv";
$book_home="Home";
$book_about="&Uuml;ber";
$book_admin="Admin";
$book_admin_user="Meine Einstellungen";
$book_links="Links";
$book_search="Suchen";
$book_logout="Abmelden";
$book_login="Anmelden";
$num_pictures="Fotos:";
$user_visits="Besuche";
$user_online="Besucher Online";
$guest="Gast";
$html_lang="de";
$html_charset="iso-8859-1";

/*#################################################
## index.php
#################################################*/
$index_welc_text="Hallo, willkommen beim &quot;PHP Foto Archiv&quot; Projekt.<br>".
		" F&uuml;r aktuelle Updates schauen Sie bitte bei <a href='http://LinPHA.sf.net'><u>Sourceforge</u></a> nach.<br>Viel Spa&#223;!";

/*#################################################
## search.php
#################################################*/
$search_header="LinPHA-Suche";
$radio_all="Alle";
$radio_descript="Beschreibung";
$radio_comment="Kommentar";
$radio_category="Kategorie";
$radio_file="Dateiname";
$search_in="Suche im Album";
$search_all="Alle Alben";
$search_for="Suchbegriff";
$search_button="Suchen";
$photos_found="gefunden";
$search_info="LinPHA Suche";
$search_msg="Suchen Sie nach Fotos in der LinPHA Datenbank nach folgenden Kriterien:";

/*#################################################
## img_view.php
#################################################*/
$img_detail="Bilddetails";
$img_size="Vollbild";
$img_com="Kommentar";
$img_des="Beschreibung";
$img_cat="Kategorie";
$img_name="Name";
$img_info_stored="Kommentar wurde in DB gespeichert";
$please_login="Bitte <a href='login.php'><font color='#000099'><u>Anmelden</u></font></a> um einen Kommentar hinzuzuf&uuml;gen";
$back_to_thumbs="<b><u>Zur&uuml;ck zu den Vorschaubildern</u></b>";
$back_to_search="<b><u>Zur&uuml;ck zur Suche</u></b>";
$button_next="n&auml;chstes";
$button_prev="vorheriges";
$exif_ext_error="Leider keine EXIF-Unterst&uuml;tzung in dieser PHP Version";
$exif_error="Das Foto enth&auml;lt leider keine EXIF-Informationen!";
$exif_more="Mehr Details";
$exif_less="Weniger Details";
$detail_header="Bild";
$detail_header1="von";
$detail_header2="im Ordner<br>";
$php_to_old="PHP < 4.2.0 EXIF gesperrt!";
$views="mal angesehen";
$slideshow="Diashow"; 
$seconds="Sekunden";
$go="Start";
$stopslide="Stopp Diashow";
/* image rotating */
$img_rotate_ok="Bild drehen";
$img_rotating="Probleme beim Bilderdrehen"; // TOC entry
$img_rotating_hint1="Bilderdrehen ist deaktiviert! klick";
$img_rotating_hint2="um zu sehen warum";

/*#################################################
## login.php
#################################################*/
$login_msg="Bitte anmelden!";
$login_error="Unbekannter Benutzer oder falsches Kennwort.";
$login_name="Benutzername";
$login_pass="Kennwort";
$login_info="LinPHA Anmeldung";
$login_request_account_info="Um einen neuen Zugang zu beantragen:";
$login_request_target="Kontaktieren Sie bitte den LinPHA Administrator";
$login_admin_info="Um LinPHA zu administrieren, melden Sie sich mit Ihrem LinPHA-Adminzugang an";
$login_friend_account_info="Wenn Sie schon einen Zugang als &quot;Freund&quot; haben, k&ouml;nnen Sie hier Ihre pers&ouml;nlichen Daten &auml;ndern";

/*#################################################
## admin.php
#################################################*/
/* other messages */
$admin_page_header="LinPHA Administration";
$please_turn_off_msg="Bitte 'Automatisches erstellen/l&ouml;schen der Vorschaubilder' ausschalten wenn alle Fotos hinzugef&uuml;gt wurden.<br> LinPHA wird dadurch ca. 10 mal schneller :)";

/* left menu */
$logout_msg="Abmelden";
$welc_msg="Willkommen ";
$stat_msg="Sie sind nun berechtigt <b>Kommentare</b> und Beschreibungen zu den Bildern hinzuzuf&uuml;gen";
$back_to_msg="zur&uuml;ck zu den Fotos";
$href_general_conf="Allgemeine Konfiguration";
$href_user_conf="Benutzer-Management";
$href_folder_conf="Ordner-Management";
$href_sql="MySQL DB Management";
$href_ftp="Dateimanager";
$href_stats="LinPHA Statistik";
$href_other_conf="Vorschau EXIF/IPTC";

/* general config */
/* uses also entries from install.php */
$default_language="LinPHA Standardsprache";
$default_language_info="<- gew&auml;hlte Standardsprache";
$general_auto_lang="Ein/Ausschalten der automatischen Spracherkennung";
$general_auto_lang_info="<- automatisches Erkennen der verwendeten Sprache des Browsers";
$general_success_msg="! &Auml;nderungen &uuml;bernommen !";
$general_rotate="Ein/Ausschalten Bilder drehen";
$general_rotate_info="<- <b>Achtung Warnung! klick info</b>";
$general_exifinfo="Ein/Ausschalten ALLER EXIF Unterst&uuml;tzung";
$general_exifinfo_info="<- EXIF Funktion an/aus";
$general_exifdefault="EXIF Informationen immer an";
$general_exifdefault_info="<- Einschalten um EXIF Informationen immer anzuzeigen";

$general_exiflevel="Stufe der EXIF Informationen";
$general_exiflevel_info="<- Menge der angezeigten EXIF Informationen";
$exif_low="niedrig";
$exif_medium="mittel";
$exif_high="hoch";
$general_filename="Ein/Ausschalten der Dateinamenanzeige";
$general_filename_info="<- Dateinamen unter Vorschaubild ";
$general_thumb_order="Sortieren der Vorschaubilder nach";
$general_thumb_order_info="<- sortiert die Vorschaubilder nach Dateiname oder Datum";
$thumb_order_date="Datum";
$thumb_order_file="Dateiname";
$general_autoconf="Automatisches erstellen/l&ouml;schen der Vorschaubilder";
$general_autoconf_info="<- Auf \"AUS\" stellen f&uuml;r h&ouml;here Geschwindigkeit";
$general_counterstat="Ein- und Ausschalten des Z&auml;hlers";
$general_counterstat_info="<- Standard ist AN";
$general_blocking="IP-Adresse-Zeitsperre in Minuten";
$general_blocking_info="<- Benutzer wird X min lang nicht gez&auml;hlt";
$general_theme="&Auml;ndern des LinPHA Styles";
$general_theme_info="<- Standard Style das benutzt wird";
$aqua_theme="Aqua";
$colored_theme="Colored";
$neptune_theme="Neptune";
$shadow_theme="Shadow";
$general_hq="Ein/Ausschalten der HQ f&uuml;r Vorschaubilder und Fotos";
$general_hq_info="Auschalten um eine h&ouml;here Geschwindigkeit zu erreichen";
$submit_button_general="&Auml;nderungen in Datenbank &uuml;bernehmen";
$button_on_msg="an";
$button_off_msg="aus";
$basic_opts="einfach";
$advanced_opts="erweitert";
$show_basics="Klicken f&uuml;r die einfachen Optionen";
$show_advanced="Klicken f&uuml;r die erweiterten Optionen";
$general_printing="Ein/Ausschalten der Druckberechtigung";
$general_printing_info="<- an, jeder darf drucken";
$general_slideshow="Ein/Ausschalten der  Diashow";
$general_slideshow_info="<-- schaltet die Diashow ein oder aus";
$general_mini_preview="Next/previous button image status/size";
$general_mini_preview_info="<- auschalten, wenn mehrere Benutzer eine geringe Bandbreite haben";

/* Vorhandenen Benutzer &auml;ndern */
$mod_user_header="Vorhandenen Benutzer &auml;ndern";
$submit_button_mod_user="&auml;ndern";
$mod_user_success_msg="! Benutzer ge&auml;ndert !";
$submit_button_delete="l&ouml;schen";
$del_user_success_msg="! Benutzer gel&ouml;scht !";

/* Neuer Benutzer */
$new_user_header="Neuen Benutzer erstellen";
$new_user_name_info="Benutzername";
$new_user_pass_info="Kennwort";
$new_user_mail_info="E-Mail";
$new_user_level_info="Benutzerlevel";
$friend="Freund";
$submit_button_new_user="Benutzer erstellen";
$new_user_success_msg="! Benutzer wurde erstellt !";

/* friends account table */
$friend_user_header="Konto Konfiguration";
$submit_button_friend_user="Aktualisiere Konto";
$delete_button_friend_user="L&ouml;sche Konto";
$friend_info_msg="&Uuml;bernehmen der Kont&ouml;instellungen";

/* Neue Kategorie */
$new_cat_header="Neue Kategorie erstellen";
$new_cat_info="Name der neuen Kategorie";
$submit_button_new_cat="Kategorie erstellen";
$new_cat_success_msg="! Kategorie wurde erstellt !";
$mod_cat_header="&Auml;ndern/L&ouml;schen von Kategorien";
$cat_name_header="Name der Kategorie";
$cat_mod_header="&Auml;ndern der Kategorie";
$cat_del_header="L&ouml;schen der Kategorie";
$submit_button_mod_cat="&Uuml;bernehmen";


/* set directory permissions */
$set_dir_perms_header="Setzen der Ordner Berechtigungen";
$dir_name="Ordner";
$dir_perms="Berechtigungen";
$action="Aktion";
$submit_button_folder="Abschicken";
$public="Jeder";
$friends="Freunde";
$private="Privat";
$new_perms_success_msg="! Berechtigungen wurden ge&auml;ndert !";


/*#################################################
## build_stats.php (called by admin.php)
#################################################*/
$stats_over_header="Statistik";
$stats_over_photos="Bilder in der Datenbank:";
$stats_over_views="Anzahl der Ansichten:";
$stats_over_albums="Alben in der Datenbank:";
$stats_over_space="Verwendeter Speicherplatz (Alle Alben):";
$stats_over_most_alb_visists="Das meist besuchte Album:";
$stats_over_visitors="Anzahl der Besucher:";
$stats_over_users="Registrierte Benutzer:";
$stats_top_ten="Top 10 der Bilder";
$stats_rank="Platzierung:";
$stats_no_views="Anzahl der angesehenen Bilder:";
$stats_last_view="Zuletzt angesehen:";
$stats_alb_name="Albumname:";

/*#################################################
## create_all_thumbs.php
#################################################*/
$parse_first="Bearbeite Stufe Eins";
$parse_sec="Bearbeite Stufe Zwei";
$parse_third="Bearbeite Stufe Drei";
$parse="wird bearbeitet";
$parsed="Bearbeitet:";
$dirs="Verzeichnisse";
$done="Fertig...";
$not_allowed_msg="Fehler, Sie sind nicht berechtigt dieses Script auszuf&uuml;hren!";
/* these entries are called from within admin.php */
$th_msg="Erstelle alle Vorschaubilder in einem Durchgang!";
$table_hint_msg="Klicken Sie \"Start\" um die Vorschaubilder in allen Verzeichnissen zu erstellen!";
$start_button="Start!";
$recreate_thumbs_header="Erstellt alle Vorschaubilder neu";
$recreate_thums_msg="Erstellt alle Vorschaubilder neu! Alle Statistiken gehen dabei verloren!";
$recreate_thums_warning="Achtung, dieser schritt l&ouml;scht alle Statistiken! Wollen Sie wirklich fortfahren?";


/*#################################################
## Printing, all files
#################################################*/
$print_layout="Drucklayout ausw&auml;hlen";
$images_page="Fotos/Seite";
$indexprint="Index drucken (28)";
$note="<strong>WICHTIG:</strong> Vor dem Drucken m&uuml;ssen Sie den Browser einrichten \" Seite einrichten\" um".
				" sicherzustellen das alle Fotos auf die Seite passen !!!";
$print_button="Druckvorschau";

$href_check_all="Alle auswaehlen";	// no '&auml;' because it is used with javascript
$href_clear_all="Auswahl loeschen";	// no '&ouml;' because it is used with javascript

$print_error="FEHLER, es wurde kein Foto ausgewaehlt !!!";	// no '&auml;' because it is used with javascript
$print_mode="Druck Modus";
$print_image="Fotos drucken";
$videos_msg="Videos k&ouml;nnen nicht gedruckt werden";

/*#################################################
## FTP, all files
#################################################*/

/*#################################################
## MySQL backup, most files
#################################################*/
$mysql_info_header="LinPHA MySQL Datenbank Management System Ver.";
$mysql_cancel="Abbruch";
$mysql_DHTML_hint="DHTML Anzeige deaktiviert. Sie sehen daher keinen Fortschritt, bis das Backup beendet wurde.";
$mysql_select_all="Alle Ausw&auml;hlen";
$mysql_deselect_all="Auswahl aufheben";
$mysql_create_backup="Erstelle Backup";
$mysql_back_menu="Zur&uuml;ck zum Men&uuml;";
$mysql_table_checks="&Uuml;berpr&uuml;fe Tabellen...";
$mysql_table_check="&Uuml;berpr&uuml;fe Tabelle";
$mysql_struct_msg="Erstelle Struktur f&uuml;r";
$mysql_in_file_dump_msg="sichere Daten fuer";	// keine umlaute da dieser Text in die .sql-Datei geschrieben, und nicht am Browser ausgegeben wird
$mysql_progress="Gesamtfortschritt:";
$mysql_back_complete="Backup Fertiggestellt in";
$mysql_back_menu_long="Zur&uuml;ck zum MySQL Datenbank Backup Hauptmen&uuml;";
$mysql_open_warn1="<B>Warnung:</B> Fehler beim &ouml;ffenen von ";
$mysql_open_warn2="zum Schreiben!<BR><BR><I>CHMOD 777</I> Verzeichnisname sollte das Problem beheben.";
$mysql_date_msg="Es ist heute der "; // it follows time of the day...
$mysql_last_backup="Letztes Vollbackup der MySQL Datenbank ";
$mysql_backup_hint="Allgemein ist ein sichern &ouml;fter als einmal in der Woche nicht n&ouml;tig.";
$mysql_down_backup="Download letztes Vollbackup ";
$mysql_down_backup_part="Download letztes Partialbackup ";
$mysql_down_backup_struct="Download letztes Strukturbackup ";
$mysql_down_backup1="(rechts-klick, Speichern unter...)";
$mysql_unknown_backup="Letztes Backup der MySQL Datenbank: <I>unbekannt</I>";
$mysql_href_recom="Erstelle neues Vollbackup, lange Version (empfohlen)";
$mysql_href_standard="Erstelle neues Vollbackup, standard Version (etwas kleiner)";
$mysql_href_partial="Erstelle neues Partialbackup, nur ausgew&auml;hlte Tabellen";
$mysql_href_structure="Erstelle neues Vollbackup, nur Tabellenstruktur (keine Daten)";
$mysql_days_last="Tage";
$mysql_hours_last="Stunden";
$mysql_min_last="Minuten";
$mysql_sec_last="Sekunden";
$ago="her"; // reads in context "some days ago"
$backup="Sichern";
$restore="Wiederherstellen";
$optimize="Optimieren";
$optimize_tables="Optimiere Tabelle";
$opt_table_name="Tabellen Name";
$opt_table_check="Tabellen &uuml;berfr&uuml;fung";
$opt_table_optimize="Tabelle optimiert";
$opt_table_msg="Art der Meldung";
$opt_start_msg="Tabellen &Uuml;berpr&uuml;fung und Optimierung starten";
$fullback_hint_msg="Wenn Sie mehrere Datenbanken benutzen, w&auml;hlen Sie bitte die <b>partielle</b> Backup Methode";
$restore_last_fullback="Letzte <b>Voll</b>-Sicherung:";
$restore_last_partback="Wiederherstellen der letzten <b>Teil</b>-Sicherung:";
$restore_error="Fehler beim &Ouml;ffnen der Backup Datei, Datei nicht gefunden!";
$restore_success="Wiederherstellung war erfolgreich!";

/*########################################################################
### FILEMANAGER
########################################################################*/

define('STR_ACCESS_DENIED','<H1>Zutritt verboten</H1> Sie haben keine Zugriffsberechtigung f&uuml;r diese Dateien');
define('STR_BACK',	'zur&uuml;ck');
define('STR_LESS',	'weniger');
define('STR_MORE',	'mehr');
define('STR_LINES',	'Zeilen');
define('STR_FUNCTIONLIST', 'Funktionsliste');
define('STR_EDIT',	'editieren');
define('STR_VIEW',	'ansehen');
define('STR_RENAME',	'umbenennen');
define('STR_MKDIR',		'erstellen');
define('STR_DELETE',	'l&ouml;schen');
define('STR_BOTTOM',	'unten');
define('STR_TOP',		'oben');
define('STR_FILENAME',	   'Dateiname');
define('STR_FILESIZE',	   'Gr&ouml;&szlig;e');
define('STR_LASTMODIFIED', 'letzte &Auml;nderung');
define('STR_SUM', '<B>%s</B> Byte(s) in <B>%s</B> Datei(en)');
define('STR_CREATEDIRLEGEND', 'Verzeichnis erstellen');
define('STR_CREATEDIR',       'Neuer Verzeichnisname:');
define('STR_CREATEDIRBUTTON', 'erstellen');
define('STR_RENAMELEGEND',       'Umbenennen');
define('STR_RENAMEENTERNEWNAME', 'Geben Sie einen neuen Namen f&uuml;r %s ein:');
define('STR_RENAMEBUTTON',       'umbenennen');
define('STR_ERROR_DIR','FEHLER: Kann das Verzeichnis nicht lesen');
define('STR_AUDIO',            'Audio');
define('STR_COMPRESSED',       'komprimiert');
define('STR_EXECUTABLE',       'ausf&uuml;hrbar');
define('STR_IMAGE',            'Bild');
define('STR_SOURCE_CODE',      'Quellcode');
define('STR_TEXT_OR_DOCUMENT', 'Text oder Dokument');
define('STR_WEB_ENABLED_FILE', 'Web Datei');
define('STR_VIDEO',            'Video');
define('STR_DIRECTORY',        'Verzeichnis');
define('STR_PARENT_DIRECTORY', 'aktuelles Verzeichnis');
define('STR_EDITOR_SAVE',      'Datei speichern');
define('STR_EDITOR_SAVE_ERROR','Die Datei <I>%s</I> ist schreibgesch&uuml;tzt oder nicht vorhanden');
define('STR_EDITOR_SAVE_ERROR_WRONG_VALUE','Beim Edititieren der Datei <I>%s</I>, haben Sie den folgenden Wert #%s an Byteposition %s angegeben.');
define('STR_EDITOR_SAVE_ERROR_HEX_VALUE_NEEDED','Entsprechend den Einstellungen, m&uuml;ssen Sie einen positiven Hexadezimal Wert zwischen 00 und FF eingeben.');
define('STR_EDITOR_SAVE_ERROR_DEC_VALUE_NEEDED','Entsprechend den Einstellungen, m&uuml;ssen Sie eine positive dezimalen Wert zwischen 0 und 255 eingeben.');
define('STR_FILE_UPLOAD_NAVI_HINT', 'Quick Navigator');
define('STR_FILE_UPLOAD_DRIVES', 'Laufwerk:');
define('STR_FILE_UPLOAD', 'hochladen');
define('STR_FILE_UPLOAD_MAIN', 'hochladen');
define('STR_FILE_UPLOAD_DISABLED', 'FEHLER: Das hochladen von Dateien (upload) ist in der php.ini deaktiviert');
define('STR_FILE_UPLOAD_DESC','W&auml;hlen Sie die Dateien, die hochgeladen werden soll, aus. W&auml;hlen Sie zus&auml;tzlich aus welche Aktion nach einem erfolgreichen hochladen ausgef&uuml;hrt werden soll.');
define('STR_FILE_UPLOAD_FILE','Datei');
define('STR_FILE_UPLOAD_TARGET','Hochladen der Datei(en) nach');
define('STR_FILE_UPLOAD_ACTION','Nach erfolgreichem hochladen ausf&uuml;hren:');
define('STR_FILE_UPLOAD_NOTHING','nichts');
define('STR_FILE_UPLOAD_DROPFILE','l&ouml;sche die hochgeladene Datei wenn die ausgew&auml;hlte Aktion beendet ist');
define('STR_FILE_UPLOAD_MAXFILESIZE','Erlaubte Dateigr&ouml;&szlig;e (jede einzelne Datei!). Das Maximum in der php.ini ist');
define('STR_FILE_UPLOAD_ERROR',        'FEHLER: Kann Datei %s nicht in das Verzeichnis %s verschieben');
define('STR_FILE_UPLOAD_CHDIR_ERROR',  'FEHLER: Kann nicht in das Verzeichnis %s wechseln (chdir). Bearbeitete Datei: %s');
define('STR_FILE_UPLOAD_UNLINK_ERROR', 'FEHLER: Kann Datei %s nicht l&ouml;schen.');
define('STR_FILE_UPLOAD_ERROR_FILE_EXCEEDS_INI_SIZE', 'FEHLER: Die Datei %s ist gr&ouml;&szlig;er als in der php.ini erlaubt (upload_max_filesize) %s');
define('STR_FILE_UPLOAD_ERROR_FILE_EXCEEDS_FORM_SIZE','FEHLER: Die Datei %s ist gr&ouml;&szlig;er als die in der HTML FORM erlaubte Gr&ouml;&szlig;e');
define('STR_FILE_UPLOAD_ERROR_FILE_PARTIAL',          'FEHLER: Die Datei %s wurde nicht vollst&auml;dig hochgeladen');

/*########################################################################
### BIG FAT NOTICE !
### AS OF LINPHA 0.9.0 ALL NEW ENTRIES ARE PLACED BELOW THIS MSG
### DEVELOPERS PLEASE MAKE USE OF THE "LANGUPDATE.PHP" SCRIPT!
########################################################################*/

$pano_view="Panorama Ansicht"; /* (img_view.php) -- new [panorama view] href  */
$close_win="Fenster schliessen"; /* (various files) -- javascript close window */
$nav_hint="Bitte benutzen Sie zur Navigation die Maus oder die Pfeiltasten!"; /* (image_panorama_view.php) --  */
$pano_view_of="Panorama Ansicht des Bildes"; /* (image_panorama_view.php) -- header message */
$php_basedir_check_msg="&uuml;berpr&uuml;fe ob \"PHP open basedir\" gesetzt ist..."; /* (sec_stage_install.php) --  */
$req_basedir_fail="NEIN"; /* (sec_stage_install.php) -- JA,  it\'s really just no/nein ;-) */
$basedir_active_msg="Oh, oh, oh, Sie haben PHP zur Verwendung von \"open_basedir\" eingerichtet. !<br />"; /* (sec_stage_install.php) --  */
//$basedir_active_msg1="+ LinPHA benutzt die GD-Lib um die Vorschaubilder zu erstellen. Dies kann zu Problemen f&uuml;hren (Dateimanager und andere)<br>"; /* (sec_stage_install.php) --  */
$basedir_active_msg2="+ Wenn m&ouml;glich, &auml;ndern Sie bitte die Einstellung \"open_basedir\" in der PHP.ini"; /* (sec_stage_install.php) --  */
$gd_basedir_err="+ Wenn m&ouml;glich, &auml;ndern Sie bitte folgende Einstellung \"open_basedir\" in der PHP.ini oder kompilieren Sie PHP mit Unterst&uuml;tzung f&uuml;r die GD-Lib (--with-gd) neu"; /* (sec_stage_install.php) --  */
$extract_tar_gz="entpacke ein *.tar.gz Archiv (UNIX)"; /* (index.php) -- filemanger upload select */
$extract_tar_bz2="entpacke ein *.tar.bz2 Archiv (UNIX)"; /* (index.php) --  */
$extract_gz="entpacken mit gzip (UNIX)"; /* (index.php) -- filemanger upload select */
$extract_zip="entpacken mit unzip (UNIX)"; /* (index.php) -- filemanger upload select */
$extract_winzip="entpacken mit pkzip (WINDOWS WINZIP)"; /* (index.php) -- filemanger upload select */
$new_group_success_msg="! Gruppe erstellt !"; /* (admin.php) -- redirect message */
$mod_group_success_msg="! Gruppe modifiziert !"; /* (admin.php) -- redirect message */
$del_group_success_msg="! Gruppe gel&ouml;scht !"; /* (admin.php) -- redirect message */
$mod_cat_success_msg="! Kategorie modifiziert !"; /* (admin.php) -- redirect message */
$del_cat_success_msg="! Kategorie gel&ouml;scht deleted !"; /* (admin.php) -- redirect message */
$href_groups="Klicken um Gruppen zu erstellen oder zu modifizieren"; /* (build_user_conf/build_folder_conf) -- href message to group management */
$del_warning="ACHTUNG: Sie m&uuml;ssen sich mit ihrem neuen Zugang einloggen !!!"; /* (build_user_conf.php) -- java popup to notify admin user */
$href_to_folder_conf="Zur&uuml;ck zum Ordner-Management"; /* (build_user_conf.php) -- navi href  */
$href_to_user_conf="Zur&uuml;ck zum Benutzer-Management"; /* (build_user_conf.php) -- navi href  */
$header_new_group="Neue Gruppe hinzuf&uuml;gen"; /* (build_user_conf.php) -- table header */
$header_groupname="Gruppenname"; /* (build_user_conf.php) -- table header */
$button_addgroup="Gruppe hinzuf&uuml;gen"; /* (build_user_conf.php) -- submit button */
$header_mod_group="Gruppen l&ouml;schen/modifizieren"; /* (build_user_conf.php) -- table header */
$mod_group_header="Gruppen modifizieren"; /* (build_user_conf.php) -- table header */
$del_group_header="Gruppe l&ouml;schen"; /* (build_user_conf.php) -- table header */
$search_to_short="Suchanfrage zu kurz. Mindestl&auml;nge zwei Zeichen!"; /* (search.php) --  */
$general_thumb_size="Gr&ouml;&szlig;e des Vorschaubildes &auml;ndern"; /* (build_general_conf.php) -- thumbsize stuff */
$general_thumb_size_info="<-- Gr&ouml;&szlig;e Vorschaubild in px"; /* (build_general_conf.php) -- thumbsize stuff */
//$general_thumb_border="Ein/Ausschalten des Rahmens bei Vorschaubildern"; /* (build_general_conf.php) -- thumb border stuff */
//$general_thumb_border_info="<-- Vorschaubilder mit Rahmen anzeigen"; /* (build_general_conf.php) -- thumb border stuff */
$inst_thumbsize_header="Auswahl der Vorschaubild-Gr&ouml;&szlig;e"; /* (third_stage_install.php) -- thumb size stuff */
$inst_thumbborder_header="Rahmen Einstellungen"; /* (third_stage_install.php) -- thumb border stuff */
$inst_thumbborder_enable="Bild Rahmen aktivieren"; /* (third_stage_install.php) -- thumb border checkbox msg */
$inst_thumbborder_disable="Bild Rahmen deaktivieren"; /* (third_stage_install.php) -- thumb border checkbox msg */
$safemode_active_msg="Schlecht, Sie verwenden PHP mit eingeschaltetem \"save_mode\" !<br>"; /* (sec_stage_install.php) --  */
$safemode_active_msg2="+ Wenn m&ouml;glich, bitte \"save_mode\" in der PHP.ini deaktivieren"; /* (sec_stage_install.php) --  */
$general_anon_post="Erlauben/verbieten von anonymen Nachrichten"; /* (build_general_conf.php) --  */
$general_anon_post_info="<-- Kommentare von anonymen Benutzern "; /* (build_general_conf.php) --  */
$stats_over_comment="Kommentare bekanntgegeben"; /* (build_stats.php) --  */
$top10_downs_href="TOP 10 der Downloads"; /* (build_stats.php) --  */
$top10_views_href="TOP 10 der angesehenen Bilder"; /* (build_stats.php) --  */
$stats_head_downs="TOP 10 Downloads"; /* (build_stats.php) --  */
$no_downloads="Anzahl der Downloads"; /* (build_stats.php) --  */
$general_anon_download="Ein/Ausschalten des anonymen Downloads"; /* (build_genera_config.php) --  */
$general_anon_download_info="<-- anzeigen/ausblenden der Links zum Herunterladen der Bilder"; /* (build_general_config.php) --  */
$seach_multiple_select_use="F&uuml;r Mehrfachauswahl benutze"; /* (search.php) --  */
$search_and="UND"; /* (search.php) --  */
$search_or="ODER"; /* (search.php) --  */
$search_categories="Kategorien"; /* (search.php) --  */
$search_with_available_filters="Verf&uuml;gbare Filter"; /* (search.php) --  */
$search_select_album="W&auml;hle Album"; /* (search.php) --  */
$search_date_from_to="Datum von / bis"; /* (search.php) --  */
$search_combination_and_or="In Kombination mit UND und ODER"; /* (search.php) --  */
$new_user_new_password="Neues Kennwort"; /* (build_user_conf.php) --  */
$new_user_error4="Benutzername kann nicht leer sein"; /* (admin.php) --  */
$new_user_error5="Benutzername ist schon vorhanden"; /* (admin.php) --  */
$new_user_error1="Altes Kennwort ist nicht richtig"; /* (admin.php) --  */
$new_user_error2="Neues und wiederholtes Kennwort sind nicht identisch"; /* (admin.php) --  */
$new_user_error3="E-Mail ist falsch"; /* (admin.php) --  */
$new_user_old_password="Altes Kennwort"; /* (admin.php) --  */
$new_user_retype_password="Wiederhole neues Kennwort"; /* (admin.php) --  */
$select_db_header="Bitte den Datenbanktyp ausw&auml;len"; /* (sec_stage_install.php) --  */
$mysql_info="Auswahl einer MySQL Datenbank"; /* (sec_stage_install.php) --  */
$postgres_info="Auswahl einer PostgreSQL Datenbank. Bitte lesen: "; /* (sec_stage_install.php) -- reads: ...Please see info */
$login_autologin="Automatisches Anmelden"; /* (toc.php) --  */
$login_autologin_user="Benutzerinfo f&uuml;rs automatische Anmelden"; /* (toc.php) --  */
$toc_timer="Timer"; /* (toc.php) --  */
$general_autologin="Ein/Ausschalten automatisches Anmelden"; /* (build_general_conf.php) --  */
$general_autologin_info="<-- aktiviert das automatische Anmelden "; /* (build_general_conf.php) --  */
$general_timer="Ein/Ausschalten der Laufzeit"; /* (build_general_conf.php) --  */
$general_timer_info="<-- aktiviert die Anzeige der ben&ouml;tigten Prozesszeit im Fu&szlig;teil der Seite"; /* (build_general_conf.php) --  */
$login_autlogin="Autologin"; /* (login.php) --  */
$lostpw_title="Kennwort verloren"; /* (login.php) --  */
$lostpw_question="Kennwort verloren?"; /* (login.php) --  */
$lostpw_type_user_or_email="Geben Sie ihren Benutzernamen oder Ihre Linpha E-Mail-Adresse ein"; /* (login.php) --  */
$lostpw_email1="Jemand hat die Funktion fuer ein verlorenes Kennwort benutzt. Wenn nicht Sie das waren, ignorieren Sie diese Nachricht einfach und es wird nichts mit Ihrem Kennwort passieren. Falls Sie Ihr Kennwort wirklich aendern wollen, dann tragen Sie bitte den untenstehenden Code in das verlangte Feld auf der LinPHA Seite ein:"; /* (login.php) -- no german umlauts because this message is sent trough an email, and not displayed in the browser */
$lostpw_email1_part2="(Bemerkung: Dies ist NICHT Ihr neues Kennwort!)"; /* (login.php) --  */
$lostpw_email1_part3="Ihr Linpha-Administrator"; /* (login.php) --  */
$lostpw_email_error="Fehler: Die E-Mail konnte nicht verschickt werden. Wenden Sie sich bitte an den Administrator."; /* (login.php) --  */
$lostpw_error_nothing_found="Es wurde leider kein entsprechender Benutzername oder entsprechende E-Mail-Adresse gefunden."; /* (login.php) --  */
$lostpw_email_sent="Die E-Mail wurde an Sie verschickt."; /* (login.php) --  */
$lostpw_should_receive="In wenigen Minuten sollten Sie eine E-Mail erhalten. Tragen Sie bitte den Code aus der E-Mail in dieses Feld ein:"; /* (login.php) --  */
$lostpw_go_back="Zur&uuml;ck"; /* (login.php) --  */
$lostpw_email2="Das Kennwort wurde erfolgreich ge&auml;ndert. Das neue Kennwort lautet:"; /* (login.php) --  */
$lostpw_email2_part2="Sie k&ouml;nnen es nacher unter \"Meine Einstellungen\" auf der LinPHA-Seite wieder &auml;ndern."; /* (login.php) --  */
$lostpw_new_password="Neues Kennwort"; /* (login.php) --  */
$lostpw_successfully_changed="Das Kennwort wurde erfolgreich ge&auml;ndert. Sie werden in wenigen Minuten das neue Kennwort per E-Mail erhalten."; /* (login.php) --  */
$lostpw_error_wrong_code="Falsche Eingabe."; /* (login.php) --  */
$lostpw_enter_correct_code="Tragen Sie den richtigen Code aus der E-Mail hier ein:"; /* (login.php) --  */
$lang_plugins['plugins']="LinPHA Plugins"; /* (admin.php) --  */
$lang_plugins['watermark']="Wasserzeichen"; /* (admin.php, toc.php) --  */
$lang_plugins['benchmark']="Benchmark"; /* (admin.php, toc.php) --  */
$lang_plugins['sql']="DB Management"; /* (admin.php, toc.php) --  */
$lang_plugins['active_plugins']="Aktivierte Plugins"; /* (admin.php) --  */
$lang_plugins['enabled']="Aktivieren"; /* (plugins.php) --  */
$lang_plugins['disabled']="Deaktivieren"; /* (plugins.php) --  */
$lang_plugins['update']="Aktualisieren"; /* (plugins.php) --  */
$lang_plugins['plugins_updated']="Plugins aktualisiert"; /* (admin.php, plugins.php) --  */
$wm_wm_man="Wasserzeichen-Management"; /* (watermark.php) --  */
$wm_disable="Wasserzeichen deaktivieren"; /* (watermark.php) --  */
$wm_change_example_img="Beispielbild &auml;ndern"; /* (watermark.php) --  */
$wm_no_input_files_found="Keine Datei zur Eingabe gefunden"; /* (watermark.php) --  */
$wm_image_quality="Bildqualit&auml;t (nur f&uuml;r die Vorschau)"; /* (watermark.php) --  */
$wm_enable_text="Aktivieren: Text"; /* (watermark.php) --  */
$wm_text="Text"; /* (watermark.php) --  */
$wm_font="Schrift"; /* (watermark.php) --  */
$wm_fontsize="Schriftgr&ouml;&szlig;e"; /* (watermark.php) --  */
$wm_fontcolor="Schriftfarbe"; /* (watermark.php) --  */
$wm_align="Ausrichtung"; /* (watermark.php) --  */
$wm_pos_hor="Position horizontal"; /* (watermark.php) --  */
$wm_pos_ver="Position vertikal"; /* (watermark.php) --  */
$wm_height="H&ouml;he des Textfeldes"; /* (watermark.php) --  */
$wm_width="Breite des Textfeldes"; /* (watermark.php) --  */
$wm_shadow_size="Gr&ouml;&szlig;e des Schattens"; /* (watermark.php) --  */
$wm_shadow_color="Farbe des Schattens"; /* (watermark.php) --  */
$wm_enable_image="Aktiviere: Bild"; /* (watermark.php) --  */
$wm_available_images="Verf&uuml;gbare Bilder"; /* (watermark.php) --  */
$wm_no_images_found="Keine Bilder gefunden"; /* (watermark.php) --  */
$wm_dissolve="Aufl&ouml;sen"; /* (watermark.php) --  */
$wm_preview="Vorschau"; /* (watermark.php) --  */
$wm_linebreak="f&uuml;r Zeilenumbruch"; /* (watermark.php) --  */
$wm_enable_shadow="Aktiviere Schatten"; /* (watermark.php) --  */
$wm_enable_rectangle="Aktiviere Rechteck"; /* (watermark.php) --  */
$wm_rectangle_color="Farbe"; /* (watermark.php) --  */
$wm_enable_ext_shadow="Aktiviere erweiterten Schatten"; /* (watermark.php) --  */
$wm_status="Status"; /* (watermark.php) --  */
$wm_enabled="aktiviert"; /* (watermark.php) --  */
$wm_disabled="Kein Wasserzeichen ausgew&auml;hlt"; /* (watermark.php) --  */
$wm_restore_to="Wiederherstellen nach"; /* (watermark.php) --  */
$wm_inital_settings="Starteinstellungen"; /* (watermark.php) --  */
$wm_add_more_examples="Sie k&ouml;nnen mehrere Beispielbilder im LinPHA Verzeichnis ablegen"; /* (watermark.php) --  */
$wm_example="Beispiel"; /* (watermark.php) --  */
$wm_shadow_fontsize="Schriftgr&ouml;&szlig;e f&uuml;r den Schatten"; /* (watermark.php) --  */
$wm_settings_for_both="Einstellungen f&uuml;r Bilder und Text"; /* (watermark.php) --  */
$wm_center="Zentriert"; /* (watermark.php) --  */
$wm_north="Oben"; /* (watermark.php) --  */
$wm_northeast="Obenrechts"; /* (watermark.php) --  */
$wm_northwest="Obenlinks"; /* (watermark.php) --  */
$wm_south="Unten"; /* (watermark.php) --  */
$wm_southeast="Untenrechts"; /* (watermark.php) --  */
$wm_southwest="Untenlinks"; /* (watermark.php) --  */
$wm_east="Rechts"; /* (watermark.php) --  */
$wm_west="Links"; /* (watermark.php) --  */
$bm_file_err="Fehler, kein Bild ausgew&auml;hlt";
$bm_var_err="Fehler, bitte &uuml;berpr&uuml;fen Sie die Eingaben";
$bm_notfound_err="Fehler, Datei nicht gefunden";
$bm_noimg_err="Fehler, Datei ist kein Bild";
$bm_tmpfile_err="Fehler, beim erstellen des tempor&auml;ren Bildes";
$bm_tmpfile_warn="Warnung: Tempor&auml;re Datei konnte nicht gel&ouml;scht werden";
$bm_time_total="Ben&ouml;tigte Zeit: ";
$bm_img_sec="Bilder pro Sekunde: ";
$bm_avg_img="Durchschnittliche Zeit pro Bild (Zum Aktualisieren die Maus &uuml;ber das Bild bewegen): ";
$bm_qual_size="Qualit&auml;t/Gr&ouml;&szlig;e";
$bm_quality="Qualit&auml;t: ";
$bm_height="H&ouml;he: ";
$bm_width="Breite: ";
$bm_size="Bildgr&ouml;&szlig;e: ";
$bm_create = "Erstelle Benchmark mit dem Grafikprogramm";
$bm_interval = "Intervall";
$bm_calc = "Berechnen";
$bm_img = "Bilder";
$bm_inloop="Durchg&auml;nge";
$bm_qual_range="Qualit&auml;tsbereich: ";
$bm_size_range="Gr&ouml;&szlig;en (nur H&ouml;he): ";
$bm_repeats="Wiederholungen: ";
$bm_con_util="Bitte w&auml;hlen Sie das Grafikprogramm: ";
$bm_current_settings="Aktuelle Einstellungen"; /* (benchmark.php) --  */
$bm_preview="Vorschau"; /* (benchmark.php) --  */
$bm_save_settings="Einstellungen speichern"; /* (benchmark.php) --  */
$wm_addexamples="Wasserzeichen: Weitere Bilder hinzuf&uuml;gen"; /* (watermark.php) --  */
$wm_addimg="Wasserzeichen: Weitere Bilder als Wasserzeichen hinzuf&uuml;gen"; /* (watermark.php) --  */
$wm_addfont="Wasserzeichen: Weitere Schriften hinzuf&uuml;gen"; /* (watermark.php) --  */
$wm_colorsetting="Wasserzeichen: Farbeinstellung"; /* (watermark.php) --  */
$comment_hint="HINWEIS: Klicken Sie auf das obere oder untere Bild um durch das Album zu bl&auml;ttern."; /* (linpha_comments.php) --  */
$comment_end="Ende des Albums"; /* (linpha_comments.php) --  */
$comment_beginning="Anfang des Albums"; /* (linpha_comments.php) --  */
$comment_back="zur&uuml;ck zur Bilderansicht"; /* (linpha_comments.php) --  */
$comment_edit_img="Editieren von Kommentar/Kategorie"; /* (linpha_comments.php) --  */
$comment_change_img_details="&Auml;ndern der Details"; /* (linpha_comments.php) --  */
$comment_last_comments="Letzte Kommentare"; /* (linpha_comments.php) --  */
$comment_comment_by="Kommentar von"; /* (linpha_comments.php) --  */
$category_delete_warning="Warnung: Bilder die der Kategorie zugeordnet sind gehen verloren"; /* (build_category_conf.php) --  */
$pass_2_short="Fehler: Kennwort muss mind. 3 Zeichen lang sein."; /* (various) --  */
$album_edit="Editieren der Kommentare"; /* (linpha_comments.php) --  */
$album_details="Albumdetails"; /* (linpha_comments.php) --  */
$wm_save_note="Hinweis: Wasserzeichen sind NICHT fuer registrierte Benutzer sichtbar!\\nSie muessen sich zuerst abmelden um Ihr Wasserzeichen beim Blaettern durch LinPHA zu sehen!"; /* (watermark.php) -- no &uuml; because it is used in javascript! */
$lang_plugins['guestbook']="G&auml;stebuch"; /* (admin.php) --  */
$print_low_quality="Normale Qualit&auml;t"; /* (printing_view.php) --  */
$print_high_quality="Hohe Qualit&auml;t (langsam!)"; /* (printing_view.php) --  */
$gb_title="LinPHA G&auml;stebuch";
$gb_sign="LinPHA G&auml;stebuch! Neue Nachricht schreiben";
$gb_from="Wohnort";
$gb_from_no="Kein Wohnort angegeben";
$gb_pages="Seite(n)";
$gb_messages="Nachrichten im G&auml;stebuch";
$gb_msg_error="Name und Kommentar d&uuml;rfen nicht leer sein";
$gb_new_msg="Neue Nachricht schreiben";
$gb_name="Name";
$gb_email="E-Mail";
$gb_hp="Homepage";
$gb_country="Woher kommen Sie (Land)";
$gb_header="LinPHA G&auml;stebuch";
$gb_opts="G&auml;stebuch Optionen";
$gb_rows="Anzahl der Nachrichten pro Seite";
$gb_anon="Anonyme G&auml;stebuch-Nachrichten erlauben";
$gb_order="Nachrichten sortieren";
$wm_resize="Bild immer auf X% der Bildgr&ouml;&szlig;e skalieren"; /* (watermark.php) --  */
$wm_help_and_descr="Hilfe und Beschreibung"; /* (watermark.php) --  */
$folder_remove_hint="Wenn alles funktioniert hat, sollten Sie nun das /install Verzeichnis l&ouml;schen (Sicherheit)..."; /* (forth_stage_install.php) --  */
$add_alb_com="Albumkommentar hinzuf&uuml;gen"; /* (img_view.php) --  */
$add_img_com="Bildkommentar hinzuf&uuml;gen"; /* (img_view.php) --  */
$album_com="Albumkommentar"; /* (*_stage_album.php) --  */
$formatting_possibilities="HTML Formatierungs Zeichen"; /* (various) --  */
$stat_cache_elements="Elemente im Cache"; /* (build_stats.php) --  */
$stat_cache_first="Neue Cache-Elemente"; /* (build_stats.php) --  */
$stat_cache_hits="Cache-Treffer"; /* (build_stats.php) --  */
$stat_cache_hits_max="Maximale Treffer (einzelnes Bild)"; /* (build_stats.php) --  */
$stat_cache_hits_avg="Durchschnittliche Trefferrate"; /* (build_stats.php) --  */
$stat_cache_size="Cache-Gr&ouml;&szlig;e"; /* (build_stats.php) --  */
$stat_cache_convert_time="Eingesparte CPU Zeit"; /* (build_stats.php) --  */
$stat_cache_size="Benutzte Cache-Gr&ouml;&szlig;e"; /* (build_stats.php) --  */
$cache_options="Bilder-Cache-Optionen";
$cache_max_size="Maximale Cache-Gr&ouml;&szlig;e in Bytes (0 = ohne Gr&ouml;&szlig;enbeschr&auml;nkung)";
$path_2_cache="Cache-Verzeichnis (Standard sql/cache)";
$cache_optimize="Optimieren und Aufr&auml;umen des Caches"; 
$cache_maintain="Bilder-Cache-Wartung";
$cache_opt_msg="!! Cache optimiert !!";
$lang_plugins['cache']="Bilder-Cache"; /* () --  */
$stat_cache_title="Bilder-Cache-Statistik"; /* (cache.php) --  */
$bm_saved="Einstellungen gespeichert"; /* (admin.php) --  */
$cache_optimize_by_size="L&ouml;sche alle Cache-Elemente, die  gr&ouml;&szlig;er oder gleich (in kBytes) sind"; /* (cache.php) --  */
$cache_optimize_by_date="L&ouml;sche alle Elemente im Cache, die nicht mehr benutzt wurden seit (in Tagen)"; /* (cache.php) --  */
$elements_rem="Entfernte Elemente"; /* (cache.php) --  */
$general_anon_album_downs="Erlauben/verbieten anonymer Alben-Downloads (als Zip-Archiv)"; /* (build_general_conf.php) --  */
$general_anon_album_downs_info="<-- nicht angemeldete Benutzer d&uuml;rfen Alben als Zip-Archive herunterladen"; /* (build_general_conf.php) --  */
$general_download_speed="Download-Geschwindigkeitsbegrenzung in kB/s (unlimited=ohne Begrenzung)"; /* (build_general_conf.php) --  */
$general_download_speed_info="<-- Download-Geschwindigkeitsbegrenzung f&uuml;r Alben-Downloads"; /* (build_general_conf.php) --  */
$general_navigation="Ein/Ausschalten der Navigationszeile"; /* (build_general_conf.php) --  */
$general_navigation_info="<-- Aktivierung der Navigationszeile auf den Vorschaubilderseiten"; /* (build_general_conf.php) --  */
$toc_navigation="Ein/Ausschalten der Navigationszeile"; /* (doc/) --  */
$toc_zip_download="Ein/Ausschalten des anonymen Album downloads"; /* (doc/) --  */
$toc_albdownlimit="Download-Geschwindigkeitslimit"; /* (doc/) --  */
$choose_zips_msg="Bilder ausw&auml;hlen"; /* (build_zip_view.php) --  */
$zip_button="Archiv downloaden"; /* (build_zip_view.php) --  */
$type_of_archive="Art der Komprimierung w&auml;hlen"; /* (build_zip_view.php) --  */
$create_tar="erstelle tar Archiv"; /* (build_zip_view.php) --  */
$create_tgz="erstelle tar.gz Archiv"; /* (build_zip_view.php) --  */
$create_bz2="erstelle tar.bz2 Archiv"; /* (build_zip_view.php) --  */
$create_zip="erstelle zip Archiv"; /* (build_zip_view.php) --  */
$create_rar="erstelle rar Archiv"; /* (build_zip_view.php) --  */
$menumsg['advanced']="Erweiterte Optionen"; /* () --  */
$menumsg['printmode']="Druck Modus"; /* () --  */
$menumsg['printprobs']="Druckprobleme?"; /* () --  */
$menumsg['downloadmode']="Download Modus"; /* () --  */
$menumsg['mailmode']="Mail Modus"; /* () --  */
$menumsg['addcomment']="Albumkommentar hinzuf&uuml;gen"; /* () --  */
$menumsg['delcomment']="Albumkommentar l&ouml;schen"; /* () --  */
$menumsg['editcomment']="Albumkommentar &auml;ndern"; /* () --  */
$album_up="aktualisiert"; /* (album_comment.php) --  */
$album_ins="eingef&uuml;gt"; /* (album_comment.php) --  */
$mail_link="Mailing-Liste"; /* (header.php) --  */
$mail_title="LinPHA Mailing-Liste"; /* (mail.php) --  */
$mail_send_link="Sende E-Mail"; /* (mail.php) --  */
$mail_return_address="Absenderadresse:"; /* (mail.php) --  */
$mail_block="Mail-Blockgr&ouml;&szlig;e:"; /* (mail.php) --  */
$mail_block_help="Max. Anzahl E-Mails in einem Durchgang ohne Pause, um einen PHP Timeout zu vermeiden."; /* (mail.php) --  */
$mail_options="Mailing-Liste-Optionen"; /* (mail.php) --  */
$mail_go_back="Geh Zur&uuml;ruck"; /* (various mail plugin files) --  */
$mail_form_title="E-Mail-Nachricht"; /* (mail_form.php) --  */
$mail_form_subject="Betreff:"; /* (mail_form.php) --  */
$mail_form_msg="Nachricht:"; /* (mail_form.php) --  */
$mail_total_sent="Insgesamt E-Mail(s) verschickt:"; /* (mail_form.php) --  */
$mail_subscribe="Anmelden"; /* (mail_users.php) --  */
$mail_unsubscribe="Abmelden"; /* (mail_users.php) --  */
$mail_activate="Aktivieren"; /* (mail_users.php) --  */
$mail_user_name="Ihr Name:"; /* (mail_users.php) --  */
$mail_user_email="Ihre E-Mail-Adresse:"; /* (mail_users.php) --  */
$mail_user_email_confirm="Best&auml;tigen Sie Ihre E-Mail-Adresse:"; /* (mail_users.php) --  */
$mail_user_code="Aktivierungscode:"; /* (mail_users.php) --  */
$mail_user_code_sent="Eine E-Mail mit dem Aktivierungscode wurde an Ihre E-Mail-Adresse verschickt."; /* (mail_users.php) --  */
$mail_user_code_subject="LinPHA Mailing-Liste-Aktivierung"; /* (mail_users.php) --  */
$mail_user_activated="Ihr Account wurde aktiviert!"; /* (mail_users.php) --  */
$mail_user_activate_error="Es gab einen Fehler w&auml;hrend der Aktivierung!"; /* (mail_users.php) --  */
$mail_user_email_not_found="Diese E-Mail-Adresse existiert nicht in unserer Mailing-Liste."; /* (mail_users.php) --  */
$mail_user_remove_ok="Die E-Mail-Adresse wurde von der Mailing-Liste entfernt."; /* (mail_users.php) --  */
$mail_user_remove_fail="Die E-Mail-Adresse konnte nicht entfernt werden."; /* (mail_users.php) --  */
$mail_user_empty="Bitte alle Felder ausf&uuml;llen."; /* () --  */
$mail_user_no_match="Die beiden E-Mail-Adressen stimmen nicht &uuml;berein."; /* () --  */
$mail_user_exists="Diese E-Mail-Adresse existiert bereits in unserer Mailing-Liste."; /* (mail_users.php) --  */
$lang_plugins['mail']="Mailing-Liste"; /* (admin.php) --  */
$mail_activate_message="Hallo %s,\n\nBitte geben Sie diese Informationen ein, um Ihr Mailing-Liste-Konto zu aktivieren.\n\nAktivierungscode: %s\n\nDanke!\nDer Webmaster"; /* (submit_users.php) -- dont delete the %s and the \n ! */
$mail_hint="Bemerkung"; /* (mail.php) --  */
$mail_user_permission="Alle Benutzer in der Gruppe 'mail' haben die Berechtigung Nachrichten an die Mailing-Liste zu senden."; /* (mail.php) --  */
$mail_current_subscribers="Aktuelle Abonnenten"; /* (mail.php) --  */
$mail_name="Name"; /* (mail.php) --  */
$mail_mail="E-Mail"; /* (mail.php) --  */
$mail_subscribing_date="Anmeldedatum"; /* (mail.php) --  */
$mail_active="Aktiv"; /* (mail.php) --  */
$mail_sent_to="E-Mail gesendet an"; /* (mail.php) --  */
$mail_replace_words="<b>[Name]</b> und <b>[Email]</b> wird durch den Namen und die E-Mail-Adresse der entsprechenden Benutzer ersetzt."; /* (form_mailing.php) --  */
$misc_help="Allgemeine Hilfe"; /* () --  */
$mail_create_group="(Sie m&uuml;ssen die Gruppe 'mail' selbst anlegen)"; /* (mail.php) --  */
$alb_th="Unterverzeichnisse im Album"; /* (*_stage_album.php) -- overwrites old (wrong) entry */
$arr_month_short = Array('1' => 'Jan','2' => 'Feb','3' => 'M&auml;r','4' => 'Apr','5' => 'Mai','6' => 'Jun','7' => 'Jul','8' => 'Aug','9' => 'Sep','10' => 'Okt','11' => 'Nov','12' => 'Dez'); /* abrevations of months */
$arr_month_long = Array('1' => 'Januar','2' => 'Februar','3' => 'M&auml;rz','4' => 'April','5' => 'Mai','6' => 'Juni','7' => 'Juli','8' => 'August','9' => 'September','10' => 'Oktober','11' => 'November','12' => 'Dezember'); /* months */
$arr_day_short = Array('So','Mo','Di','Mi','Do','Fr','Sa'); /* abrevations of weekdays */
$arr_day_long = Array('Sonntag','Montag','Dienstag','Mittwoch','Donnerstag','Freitag','Samstag'); /* weekdays */

/*
If the time and date format in your country is different with these formats,
please uncomment these lines and set it to the right format. Otherwise, leave
it as it is. See http://www.php.net/manual/en/function.strftime.php for definitions.
(Don't apply this to the english language file, the default date and time format are
set in the options page of linpha. This is because the date format is different within
the english spoken countries.)
*/
$date_format = "%a %d. %b %Y";
$time_format = "%H:%M:%S";
$layout="Aussehen";
$features="Funktionen";
$perform="Leistung";

$general_comment_in_subfolder = 'Ein/Ausschalten der Anzeige der Albenkommentare in der Unterordner&uuml;bersicht';
$general_comment_in_subfolder_info = '<-- Anzeige der Albenkommentare in der Unterordner&uuml;bersicht';
$general_default_date_format = 'Datumsformat';
$general_default_date_format_info = '<- Beispiel: 28.06.2004, mehr dazu in der Info';
$general_default_time_format = 'Uhrzeitformat';
$general_default_time_format_info = '<- Beispiel: 13:45:50, mehr dazu in der Info';
$general_new_images_folder = 'Virtueller "Neue Bilder" Ordner';
$general_new_images_folder_info = '<- zeigt einen Ordner im linken Menu mit den neu hinzugef&uuml;gten Bildern';
$general_new_images_folder_age = 'Alter des "Neue Bilder" Ordners in Tagen';
$general_new_images_folder_age_info = '<- max. Alter der angezeigten neuen Bilder';
$control_key="Strg"; /* (various) --  */
$search_date="Datum"; /* (search.php) -- reads: date from to... */
$search_from="von"; /* (search.php) -- reads: date from to... */
$search_to="bis"; /* (search.php) -- reads: date from to... */
$start_slide="Starte Diashow"; /* (img_view.php) --  */
$pass_msg="Sie m&uuml;ssen sich jetzt mit dem neuen Kennwort anmelden."; /* (build_my_settings.php) --  */
$str_new_images = "Neue Bilder";  /* (new_images.php) -- */
$str_order_by = "Sortieren nach";  /* (new_images.php) -- */
$str_age = "Alter";  /* (new_images.php) -- */
$str_album = "Album";  /* (new_images.php) -- */
$str_in_album = "In Album";  /* (new_images.php) -- */
$str_img_newer_than = "alle Fotos neuer als %s Tage";  /* (new_images.php) -- */
$timespanfmt = "%s Tage, %s Stunden, %s Minuten und %s Sekunden";  /* (new_images.php) -- */
$str_delete_all_cached_images_with_watermarks="L&ouml;sche alle gecachte Bilder mit Wasserzeichen"; /* (watermark.php) --  */
$str_error_changing_perm = "FEHLER, die Dateiberechtigungen konnten nicht ge&auml;ndert werden! (Evtl. hast du keine Berechtigung)";
$str_change_perm = 'Berechtigungen &auml;ndern von:';
$str_read = 'Lesen';
$str_write = 'Schreiben';
$str_execute = 'Ausf&uuml;hren';
$str_owner = 'Besitzer';
$str_group = 'Gruppe';
$str_all_other = 'Alle anderen';
$str_copy = 'kopieren';
$str_copy_to = 'Kopiere %s nach:';
$str_rename_to = 'Benenne %s um nach:';
$str_rotation_disabled="Bilderdrehen deaktiviert"; /* (img_view.php) --  */
$str_no_write_perm="Keine Schreibbrechtigung"; /* (img_view.php) --  */
$str_new_images_in_these_folders="Neue Bilder in folgenden Alben gefunden:"; /* (new_images.php) --  */
$str_reinstall_remove_dbconnect="Falls du LinPHA erneut installieren m&ouml;chtest, mu&szlig;t du zuerst die Datei ./sql/db_connect.php l&ouml;schen! (Du kanst dies mit dem integrierten Dateimanager im Admin-Bereich erledigen.)"; /* (install_header.php) --  */
$str_Version="Version"; /* (sec_stage_install.php) --  */
$str_no_supported_database_activated="Fehler: Keine unterst&uuml;tzte Datenbank in deiner PHP-Konfiguration"; /* (sec_stage_install.php) --  */
$str_extract_with="Nach dem Upload, entpacken mit"; /* (ftp/index.php) --  */
$str_files_to_upload="Datein zum Uploaden"; /* (ftp/index.php) --  */
$posix_check_msg="&uuml;berpr&uuml;fe Unterst&uuml;tzung f&uuml;r POSIX..."; /* (sec_stage_install.php) --  */
$posix_sum_found_msg="Unterst&uuml;tzung f&uuml;r POSIX in deiner PHP-Installation gefunden. Alle Funktionen des integrierten Dateimanagers sind aktiviert."; /* (sec_stage_install.php) --  */
$posix_sum_miss_msg="Keine Unterst&uuml;tzung f&uuml;r POSIX in deiner PHP-Installation gefunden. Einige Funktionen des integrierten Dateimanagers wurden deaktiviert (Speziell das &auml;ndern der Dateirechte)."; /* (sec_stage_install.php) --  */
$mod_cache_fail="Fehler: Die Einstellungen konnten nicht gespeichert werden. Stelle sicher das der Pfad richtig angegeben ist und da&szlig; du Schreibrechte f&uuml;r dieses Verzeichnis hast."; /* (admin.php) --  */
$str_create_archive="erstelle %s Archiv"; /* (build_zip_view.php) --  */
$str_download_error="Fehler! Der Download konnte, aus irgend einem Grund, leider nicht gestartet werden"; /* (build_zip_view.php) --  */
$str_search_all_images_taken="Suche alle Bilder welche am %s aufgenommen wurden"; /* (read_php_exif.php) --  */
$str_try_a_lower_resolution="Falls der Ladevorgang zu lange dauert, versuchen Sie eine geringere Aufl&ouml;sung:"; /* (image_panorama_view.php) --  */
$str_current_resolution="aktuelle Aufl&ouml;sung:"; /* (image_panorama_view.php) --  */
$href_group_conf="Gruppen Management"; /* (admin.php + build_user_conf.php) -- Admin menu item + table heading */
$href_tools_section="Tools:"; /* (admin.php) -- Tools section in admin menu */
$lang_plugins['plugin']="Plugin"; /* (plugin.php) --  */
$choose_mail_msg="Auswahl Bilder f&uuml;r E-Mail"; /* () --  */
$new_user_full_name="Ganzer Name"; /* (build_my_settings.php) -- And build_user_conf.php */
$href_category_conf="Kategorien"; /* (admin.php) --  */
$cat_private="Privat"; /* (build_category_conf.php) --  */
$lang_plugins['facetmap']="FacetMap"; /* (plugins.php) --  */
$str_add_more_apps="Mehr Programme hinzuf&uuml;gen"; /* (include/basket_zip.php, ftp/index.p) --  */
$session_check="pr&uuml;fe korrekte Sitzungseinstellungen (session settings)..."; /* (sec_stage_install.php) --  */
$session_save_handler_ok_msg="Session save handler richtig gesetzt."; /* (sec_stage_install.php) --  */
$session_save_handler_miss_msg="Session save handler NICHT richtig gesetzt."; /* (sec_stage_install.php) --  */
$session_miss_msg="Sitzungseinstellungen nicht richtig gesetzt. Du MUST diesen Fehler zuerst korrigieren. Dies geschieht in der php.ini oder LinPHA wird vermutlich nicht ordnungsgem&auml;ss funktionieren!!"; /* (sec_stage_install.php) --  */
$session_ok_msg="Alle Sitzungseinstellungen richtig gesetzt. LinPHA sollte ordnungsgem&auml;ss funktionieren."; /* (sec_stage_install.php) --  */
$new_user_error6="Fehler: Du benutzt nicht deinen eigenen Account?!?"; /* (build_my_settings.php) --  */
$str_old_comments="Alte Kommentare (geh&ouml;ren zu keinem Bild mehr):"; /* (build_stats.php) --  */
$str_last_viewed_page="Zuletzt angesehene Seite:"; /* (index.php) --  */
$str_select_row="Reihe ausw&auml;hlen"; /* (basket.php) --  */
$str_select="Ausw&auml;hlen"; /* (basket.php) --  */
$str_new_window="Neues Fenster"; /* (basket.php) --  */
$general_anon_mail_mode="Erlaubt/Verbietet das senden von Bilder durch nicht angemeldete Benutzer"; /* (build_general_conf.php) --  */
$general_anon_mail_mode_info="<-- Erlaubt das versenden von Bildern per E-Mails auch nicht angemeldeten Benutzern."; /* (build_general_conf.php) --  */
$general_mail_mode_max_size="E-Mail Modus: Max. gr&ouml;&szlig;e der Nachrichten"; /* (build_general_conf.php) --  */
$general_mail_mode_max_size_info="<-- max. Gr&ouml;&szlig;e in Bytes"; /* (build_general_conf.php) --  */
$general_thumbnail_view="Vorschau Ansicht"; /* (build_general_conf.php) --  */
$general_image_view="Bilder Ansicht"; /* (build_general_conf.php) --  */
$general_ado_msg="Ein/Ausschalten des zwischenspeicherns der SQL-Abfragen"; /* (build_general_conf.php) --  */
$general_ado_msg_info="<-- einschalten, wenn ein langsamer SQL-Server oder keine PHP-Beschleunigung benutzt wird."; /* (build_general_conf.php) --  */
$general_ado_time_msg="SQL-Abfrage Zeit:"; /* (build_general_conf.php) --  */
$general_ado_time_msg_info="<-- legt die max. Zeit, die die Abfrage gespeichert wird, fest. Angbabe in Minuten"; /* (build_general_conf.php) --  */
$general_ado_path_msg="Pfad zum SQL-Abfrage-Speicher:"; /* (build_general_conf.php) --  */
$general_ado_path_msg_info="<-- wo sollen die SQL-Abfragen gespeichert werden."; /* (build_general_conf.php) --  */
$str_other_features="Andere Funktionen"; /* (build_general_conf.php) --  */
$str_language_settings="Einstellung der Sprache"; /* (build_general_conf.php) --  */
$str_sql_query_caching="Sql query caching"; /* (build_general_conf.php) --  */
$general_thumb_border="Gr&ouml;&szlig;e des Rahmens in px"; /* (build_general_conf.php) --  */
$general_thumb_border_info="<-- 0 zum Deaktivieren, Standard: 5"; /* (build_general_conf.php) --  */
$general_thumb_border_color="Farbe des Rahmens"; /* (build_general_conf.php) --  */
$general_thumb_border_color_info="<-- siehe Info f&uuml;r Details"; /* (build_general_conf.php) --  */
$str_recipient="Empf&auml;nger"; /* (basket_mail.php) --  */
$str_sender="Sender"; /* (basket_mail.php) --  */
$str_mail_too_big="Fehler: Die E-Mail ist zu gro&szlig;.<br /><br />Erlaubte Gr&ouml;&szlig;e: %sBytes. Dein ausgew&auml;hltes Bild ist %sBytes gro&szlig;.<br /><br />Entfernen ein paar Bilder oder benutze die ZIP-Funktion! des Albums"; /* (basket_mail.php) --  */
$str_size_of_email="Gr&ouml;&szlig;e der E-Mail: %s."; /* (basket_mail.php) --  */
$str_new_search="Neue Suche"; /* (search.php) --  */
$str_edit_search="Suche bearbeiten"; /* (search.php) --  */
$str_View="Ansicht"; /* (img_view.class.php) --  */
$str_normal="Normal"; /* (img_view.class.php) --  */
$str_detail="Detailliert"; /* (img_view.class.php) --  */
$search_result_empty="Schade, Ihre Suche ergab keine Ergebnisse."; /* (search.php) --  */
$str_chars_entered="Buchstaben eingegeben"; /* (img_view.class.php) --  */
$str_information_lost="Text wird abgeschnitten, bitte k&uuml;rzen Sie Ihren Text."; /* (img_view.class.php) --  */
$general_random_image="Ein/Ausschalten der Zufallswiedergabe auf der Titelseite"; /* () --  */
$general_random_image_info="<-- Zeigt zuf&auml;llig ausgew&auml;hlte Bilder auf der Titelseite an"; /* () --  */
$general_random_image_size="Max. Bildergr&ouml;&szlig;e der Zufallswiedergabe auf der Titelseite"; /* () --  */
$general_random_image_size_info="<-- Legt die max. Bildergr&ouml;&szlig;e, in Pixel, fest"; /* () --  */
$str_edit_watermark="Bearbeite Wasserzeichen"; /* (watermark.php) --  */
$str_edit_permissions="Bearbeite Wasserzeichen Berechtigungen"; /* () --  */
$str_Everyone="Jeder"; /* () --  */
$str_Nobody="Niemand"; /* () --  */
$str_only_logged_in_users="Nur eingeloggte Benutzer"; /* () --  */
$str_except_these_groups="ausser diesen Gruppen:"; /* () --  */
$str_additionally_groups="aber erlaube diese Gruppen:"; /* () --  */
//$str_allow_these_persons="Kein Wasserzeichen f&uuml;r folgende Benutzer/Gruppen"; /* () --  */
$str_album_based_permissions="Album basierte Berechtigungen"; /* () --  */
$str_all_albums_but_without_these="Alle Alben, ausser diesen:"; /* () --  */
$str_only_on_these_albums="Nur f&uuml;r diese Alben:"; /* () --  */
$str_allow_these_persons="Erlaube diese Personen"; /* (db_api.php) --  */
$str_no_watermarks="Kein Wasserzeichen f&uuml;r diese Personen"; /* (db_api.php) --  */
$str_watermark_perm_part1="Definiere hier das Wasserzeichen (Bild) f&uuml;r einen, mehrere Benutzer und/oder f&uuml;r die Alben."; /* (watermark.php) --  */
$str_watermark_perm_part2="Die Standard Einstellung gilt f&uuml;r 'Angemeldete Benutzer' UND 'Alle Alben'."; /* (watermark.php) --  */
$str_watermark_perm_part3="Das bedeutet, da&szlig; alle angemeldeten Benutzer s&auml;mtliche Bilder ohne Wasserzeichen sehen."; /* (watermark.php) --  */
$inst_linpha_not_work_correctly="LinPHA wird NICHT korrekt arbeiten"; /* (sec_stage_install.php) --  */
$gd_jpg_missing_msg="Deinem System fehlt jpeg-Unterst&uuml;tzung in der GDlib. JPEG-Bilder funktionieren nicht!"; /* (sec_stage_install.php) --  */
$general_video_thumbnail="Versuche Vorschaubild f&uuml;r Videos zu erstellen."; /* (build_generl_config.php) --  */
$general_video_thumbnail_info="<--Abschalten, wenn Fehler bei der Erstellung von Vorschaubildern f&uuml;r Videos auftreten."; /* (build_generl_config.php) --  */
$general_update_notice="Ein/Ausschalten der LinPHA-Update-Funktion"; /* (build_generl_config.php) --  */
$general_update_notice_info="<-- Einschalten um automatisch nach vorhandenen Updates zu suchen."; /* (build_general_config.php) --  */
$large="gro&szlig;"; /* (build_general_config) -- selectfield for mini images size */
$directories="Verzeichnisse"; /* (build_thumbnail_conf.php) --  */
$do_nothing="Tu nichts"; /* (build_thumbnail_conf.php) --  */
$create="Erstellen"; /* (build_thumbnail_conf.php) --  */
$recreate="Neuerstellen"; /* (build_thumbnail_conf.php) --  */
$exif_disabled_in_conf="EXIF Info ist in der Konfiguration deaktiviert"; /* (build_thumbnail_conf.php) --  */
$iptc_disabled_in_conf="IPTC Info ist in der Konfiguration deaktiviert"; /* (build_thumbnail_conf.php) --  */
$silent_mode="Silent Modus (d.h es werden keine Debug-Infos angezeigt.)"; /* (build_thumbnail_conf.php) --  */
$just_thumb_msg="Vorschaubilder"; /* (build_thumbnail_conf.php) --  */
$log_title="LinPHA Logger"; /* (log.php) --  */
$log_options="LinPHA Logger Optionen"; /* (log.php) --  */
$log_method_label="Log nach:"; /* (log.php) --  */
$str_extra_headers="Extra Headers:"; /* (log.php) --  */
$str_log_events['login']="Benutzer Anmeldung"; /* (log.php) --  */
$str_log_events['thumbnail']="Vorschau Erstellung"; /* (log.php) --  */
$str_log_events['update']="Update"; /* (log.php) --  */
$str_log_events['db']="Datenbank"; /* (log.php) --  */
$str_log_events['filemanager']="Dateimanager"; /* (log.php) --  */
$str_events="Ereignisse"; /* (log.php) --  */
$find_duplicates="Finde doppelte Bilder"; /* (build_thumbnail_conf.php) --  */
$str_not_enabled_in_php_config="Nicht aktiviert in der PHP Konfiguration (php.ini)"; /* (sec_stage_install.php) --  */
$str_warning="Warnung"; /* (build_thumbnail_conf.php) --  */
$str_thumbnails_deleted="Vorschaubilder werden geloescht"; // no '&ouml;' because it is used with javascript /* (build_thumbnail_conf.php) --  */
$str_statistics_deleted="Alle Statistiken werden geloescht"; // no '&ouml;' because it is used with javascript /* (build_thumbnail_conf.php) --  */
$str_random_index_image="Zufallsbild auf Startseite"; /* (build_general_conf.php) --  */
$str_download_images="Herunterladen einzelner Bilder"; /* (build_perms.php) --  */
$str_add_image_comments="Bildkommentar hinzuf&uuml;gen"; /* (build_perms.php) --  */
$str_add_image_description="Bildbeschreibung und Kategorien hinzuf&uuml;gen"; /* (build_perms.php) --  */
$str_mail_add_all_users="Alle Linpha-Benutzer zu der Mailing-Liste hinzuf&uuml;gen"; /* (plugins/mail.php) --  */
$str_note_upload="<b>Hinweis:</b> Die Bilder m&uuml;ssen nicht zwingend &uuml;ber dieses Formular hinaufgeladen werden. Es kann jedes Protokoll verwendet werden (ftp,scp,nfs,lokal,...). Die Bilder m&uuml;ssen einfach in den albums-Ordner kopiert werden."; /* (plugins/ftp/index.php) --  */
$blacklist_opts="Blacklist options (SPAM blockieren)"; /* (varios) --  */
$blacklist_onoff="Einschalten des Nachrichtenfilters"; /* (varios) --  */
$blacklist_keywords="W&ouml;rter die geblockt werden:"; /* (varios) --  */
$str_entire_path="Vollst&auml;ndiger Pfad"; /* (search.php) --  */
$mail_format="Nachrichtenformat:"; /* (basket_mail.php) --  */
$mail_format_is_txt="TXT (Bilder angeh&auml;ngt)"; /* (basket_mail.php) --  */
$mail_format_is_html="HTML (Bilder im Text)"; /* (basket_mail.php) --  */
$mail_toggle_active="Mail ja/nein"; /* (mail.php) --  */
$statistics="Statistik"; /* (various) --  */
$stats_total_images="Summe der Bilder"; /* () --  */
$stats_total_img_views="Summe der Bilder ansichten"; /* () --  */
$stats_total_img_downs="Summe der Bilder downloads"; /* () --  */
$stats_total_img_selected="Summe der ausgew&auml;hlten Bilderansichten"; /* () --  */
$stats_total_downs_selected="Summe der Augew&auml;hlten Bilderdownloads"; /* () --  */
$stats_downloads="Downloads"; /* () --  */
$stats_downl_size="Download gr&ouml;sse"; /* () --  */
$stats_coments_total="Summe Kommentare"; /* () --  */
$stats_coments_sel="Kommentare ausgew&auml;hlt"; /* () --  */
$str_log_events['guestbook']="G&auml;stebuch"; /* (log.php) --  */
$stats_realtime="Ein/Ausschalten der Echtzeit-Statistik"; /* (build_stats.php) --  */
$stats_realtime_info="<-- zeigt die Statistik in Echtzeit an. (keine Zwischenspeicherung)"; /* (build_stats.php) --  */
$stats_cache_time="Statistik-Intervall"; /* (build_stats.php) --  */
$stats_cache_time_info="<-- Legt den Intervall der Statistik (Downloadgr&ouml;&szlig;e) fest"; /* (build_stats.php) --  */
$stats_user_info="Benutzer"; /* (stats_view.php) --  */
$stats_image_info="Bild"; /* (stats_view.php) --  */
$stats_comments_info="Kommentar"; /* (stats_view.php) --  */
$stats_general_info="Allgemein"; /* (stats_view.php) --  */
$spam_blocked="Verhinderte SPAM-Angriffe"; /* () --  */
$mail_current_status="Aktueller Status"; /* (mailing.php) --  */
$mail_sending_to="Senden nach: "; /* (mailing.php) --  */
$mail_counters="Z&auml;ler (Erfolgreich/Fehler/Gesamt)"; /* (mailing.php) --  */
$mail_send_fail="Sende Fehler: "; /* (mailing.php) --  */
$mail_send_ok="Senden OK: "; /* (mailing.php) --  */
$mail_all_complete="All Completed!"; /* (mailing.php) --  */
$mail_failed_list="List der fehlerhaften Adressen"; /* (mailing.php) --  */
$mail_ok_list="Liste gesendeter Adressen"; /* (mailing.php) --  */
$mail_mailer_error=" - Mail Fehler: "; /* (mailing.php) --  */
$str_log_events['comments']="Kommentar-Eintrag"; /* (log.php) --  */
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