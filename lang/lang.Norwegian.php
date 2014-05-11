<?php
/* language file */
/* Feel free to modify this file to make use of your native language.
If you do so, please save it as lang.YourLanguage.php in the LinPHA /lang dir
and PLEASE mail me a copy! mailto:bzrudi@tuxpower.de */

/*#################################################
## linpha messages
#################################################*/
/* left menu */
$album="Mitt Fotoalbum";

/* alerts */
$alert_fopen="Feil! Filen kunne ikke &aring;pnes...";
$printing_probs="Utskriftsproblemer";
$printing_probs_msg="Utskrift ikke tilgjengelig! Se";

/* global messages */
$subfolders="Underkataloger";
$img_th="Bilder";
$in_th="i";
$alb_th="Album i underkataloger";
$thumb_hint_msg="klikk for flere detaljer";
$latest_photo="Siste";
$view_at="Se som";
$close_button="Lukk";
$help="Hjelp";

/*#################################################
## installation
#################################################*/
/* install.php (page 1) */
$welc_header="Velkommen til LinPHA";
$welc_text="Hei, dette er &quot;The Linux Photo Archive&quot; alias LinPHA.
		Det ser ut til at du kj&oslash;rer LinPHA for f&oslash;rste gang, derfor m&aring; du kj&oslash;re installasjonen!";
$welc_hint="<b>F&oslash;r du fortsetter:</b>";
$welc_hint1="1. Sett &quot;<b>linpha/sql</b>&quot; skrivbar for alle!
			(chmod 777 sql/)";
$next_button="Neste"; /* used as left menu header in all 4 stages */
$inst_msg="LinPHA installasjon"; /* used as left menu header in all 4 stages */
$inst_status_1="Velg spr&aring;k, og klikk &quot;Neste&quot;";
$inst_status_step1="Trinn 1 av 4";

/* sec_stage_install (page 2) */
$inst_access_msg="Velg databasetilgang";
$inst_full_access_msg="<b>Full adgang.</b><br> Jeg har full tilgang til MySQL
			     databasen, jeg har lov til at opprette nye<br>
			     databaser og nye brukere. Med andre ord: Det er min tjener!";
$inst_limited_access_msg="<b>Begrenset tilgang!</b><br> Jeg vil innstallere LinPHA med begrenset tilgang til<br>
				 MySQL databasen. Min ISP (eller administrator) tillater ikke at jeg oppretter nye databaser eller brukere.";
$inst_status_2="Velg din tilgang til databasen, hvis du er usikker b&oslash;r du velge begrenset tilgang.";
$inst_status_step2="Trinn 2 av 4";

/* requirements */
$req_check_msg="Sjekker Systemkrav";
$req_found_msg="OK, funnet";
$req_miss_msg="IKKE funnet";
$req_safe_fail="Sl&aring;tt p&aring;";
$req_safe_ok="Sl&aring;tt av";
$php_safemode_check_msg="Sjekker PHP trygg modus...";
$php_version_check_msg="Sjekker at PHP er versjon 4.1.0 eller nyere...";
$mem_check_msg="Sjekker PHP minnegrense...";
$gd_check_msg="Sjekker GD library...";
$convert_check_msg="Sjekker ImageMagick...";
$exif_check_msg="Sjekker EXIF support...";
$summary_msg="Oppsummert:";
$safe_mode_err="Din server er konfigureret til at kjre PHP i safe_mode. LinPHA vil ikke virke fr du har skrudd av safe_mode i php.ini filen!";
$inst_abort_msg="!!! installasjon AVBRUTT !!!";
$php_version_err="Din tjener bruker en tidligere versjon av PHP enn 4.1.0. LinPHA virker kun med PHP versjoner over 4.1.0";
$gd_convert_err="Hverken ImageMagick eller GD library ble funnet. Du m&aring; innstallere minst en av dem for at LinPHA skal fungere.";
$convert_sum_found_msg="Fant ImageMagick. LinPHA bruker programmet til &aring; lage h&oslash;ykvalitets miniatyrbilder.";
$convert_sum_miss_msg="Fant IKKE ImageMagick. Det betyr at LinPHA lager lavkvalitets miniatyrbilder.";
$exif_sum_found_msg="Din PHP installasjon har EXIF support. LinPHA bruker det til &aring; vise informasjon gjemt i dine bilder.";

/* TODO (change this one)
$exif_sum_miss_msg="Din PHP installasjon har ikke EXIF support. Dette vil hindre LinPHA i &aring; vise detaljert informasjon om bildene dine.";
to ==>*/
$exif_sum_miss_msg="Din PHP installasjon har ikke EXIF support. LinPHA vil da bruke sin inkluderte EXIF parser.";

/* TODO next 3 */
$session_path_check_msg="Sjekker sikker sti for sesjonen";
$session_path_found_msg="Sesjonens lagringssti er satt i php.ini. Innlogging i LinPHA burde fungere. Stien er satt til: ";
$session_path_miss_msg="Ingen verdi ble funnet for session_save_path. Du M&aring; sette session_save_path i php.ini eller vil du ikke v&aelig;re i stand til &aring; logge inn senere!!";
$mem_limit_ok_msg="OK, din PHP minnegrense er >= 16MB. Det skulle ikke v&aelig;re problemer med miniatyrbilde generering.";
$mem_limit_low_msg="Hmm... din PHP minnegrense er <=16MB. Hvis du opplever problemer med manglende miniatyrbilder, pr&oslash;v da &aring; &oslash;ke memory_limit i php.ini eller endre bildene dine til en lavere oppl&oslash;sning, og pr&oslash;v igjen...";
$choose_def_quali="Velg standard bildekvalitet";
$choose_def_quali_warn="Velg IKKE h&oslash;ykvalitet hvis din CPU er &lt; 1Ghz (h&oslash;y CPU-belastning)";

/* third_stage_install (page 3) */
$inst_superadmin_header="Konfigurer MySQL databaseadministrator";
$inst_superadmin_name="MySQL DB administratornavn:";
$inst_superadmin_name_info="<-administrator bruker i MySQL databasen (M&aring; eksistere i DB)";
$inst_superadmin_pass="MySQL DB admininistratorpassord:";
$inst_superadmin_pass_info="<-passordet til MySQL administratoren (M&aring; eksistere i DB)";

$inst_admin_header="Konfigurer LinPHA administrator";
$inst_admin_name="LinPHA admininistratornavn:";
$inst_admin_name_info="<-LinPHA admininistratornavn";
$inst_admin_pass="LinPHA admininistratorpassord:";
$inst_admin_pass_info="<-LinPHA administratorens passord";
$inst_admin_email="Admininistrators E-post:";
$inst_admin_email_info="<-Skriv inn administratorens E-postaddresse";

$inst_db_header="Konfigurer LinPHA databasekobling";
$inst_db_host="Maskinnavn:";
$inst_db_host_info="<-Databasetjenerens vertsnavn, typisk &quot;localhost&quot;";
$inst_db_host_info2="<-MySQL Databasens vertsnavn.";
$inst_db_host_port="Portnummer:";
$inst_db_host_port_info="<-Databasens port. Er du usikker, la st&aring;";
$inst_db_name="Navnet p&aring; LinPHA-databasen:";
$inst_db_name_info="<-Databasen til LinPHA, typisk &quot;linpha&quot;";
$inst_db_name2="Databasens navn:";
$inst_db_name_info2="<-Databasens navn som du har f&aring;tt av din ISP (eller administrator)";
$inst_table_prefix="Prefiks for LinPHA tabeller";
$inst_table_prefix_info="<-Det prefiks som brukes til alle LinPHA tabeller";

$general_header="Generell konfigurasjon";
$general_album_title="Tittel p&aring; fotoalbumet:";
$general_album_title_info="<-La denne st&aring; blank for &aring; bruke standardnavnet";
$general_photos_row="Antall rader i album:";
$general_photos_row_info="<-- Antall rader med miniatyrbilder.";
$general_photos_col="Antall kolonner i album:";
$general_photos_col_info="<-Antall kolonner med miniatyrbilder.";
$general_photos_width="Bredde p&aring; detaljert bilde:";
$general_photos_width_info="<- Standard bredde: 512";
$general_photos_height="H&oslash;yde p&aring; detajert bilde:";
$general_photos_height_info="<- Standard h&oslash;yde: 384";
$general_img_quality="Kvalitet p&aring; detaljert foto:";
$general_img_quality_info="<- Juster bildekvalitet fra 0-100 (standard 75)";

$inst_status_3="Fyll i informasjon i alle feltene!";
$inst_status_step3="Trinn 3 av 4";

/* forth_stage_install (page 4) */
$inst_status_4="Gratulerer, installasjonen er fullf&oslash;rt! LinPHA er n&aring; klar til bruk";
$inst_status_step4="Trinn 4 av 4";
$inst_submit="Ferdig";
$inst_db_tryconn="Pr&oslash;ver &aring; koble til databasen.";
$inst_db_tryconn_error="Feil ved tilkobling til databasen, med:";
$inst_db_tryconn_ok="OK, har tilkobling!";
$inst_db_tryinst="Fors&oslash;ker &aring; opprette database:";
$inst_db_tryinst_error="Feil ved opprettelse av database:";
$inst_db_tryinst_ok="OK, opprettet!";
$inst_create_tb_msg="OK, oppretter tabeller";

/* ------------------------------------------------------------------
 * Note: The two following messages are used to generate the sql/db_connect.php
 * file. The two variables are expanded, put them between single quotes, and
 * then inside the die() command.
 * I.e.: see sql/db_connect:
 *       mysql_connect("localhost:3306","dummy","dummy")or
 *                            die ('Error connecting Database Server!');
 *
 * As you see, the message is included between quotes.
 * As consequence, YOU CANNOT USE QUOTES INSIDE THE STRINGS. If you really need
 * to use single quotes, remember to escape them: \'
 */
$inst_db_connect_inc_msg="Feil ved tilkobling til databasen!";
$inst_db_connect_inc_msg1="Feil ved fors&oslash;k p&aring; &aring; velge ".@$db_realname." i DB.<br>
	Hvis denne feil oppst&aring;r under installasjon, s&aring; m&aring; du slette db_connect.php filen<br>
	i LinPHA &quot;sql&quot; underkatalogen!";
/* ------------------------------------------------------------------ */

$table_create="Oppretter tabell:";
$table_create_error="Feil under oppretting av tabeller!";
$table_create_ok="OK, opprettet!";
$table_insert_admin="Oppretter admininistratorkonto med f&oslash;lgende navn:";
$table_insert_admin_error="Feil under opprettelse av administratorkonto!";
$table_insert_admin_ok="OK, opprettet!";
$write_db_config="Lagrer databasekonfigurasjonen i en fil";
$fopen_error="Kunne ikke skrive til sql/db_config.php, kj&oslash;r chmod 777 og start installasjonen p&aring; nytt";
$fopen_ok="OK, konfigurasjonen lagret!";
$install_finish_msg="OK. Installasjonen er ferdig!!";
$admin_task="Fortsett";
$file_create_ok="OK, opprettet!";
$configure_error="Feil. Verifiser at du har fyllt ut alle feltene.";
$could_not_open="Feil, kunne ikke &aring;pne tabellen users! Det virker som om at du ikke har rettigheter til &aring; tilfye nye brukere<br>
			i databasen. Pr&oslash;v den begrensede installasjonen p&aring; side 2.<br>";

/*#################################################
## header.php
#################################################*/
$page_title="LinPHA - Linux Foto Arkiv";
$head_title="Linux Foto Arkiv";
$book_home="Forside";
$book_about="Om";
$book_admin="Administrasjon";
$book_admin_user="Mine instillinger";
$book_links="Lenker";
$book_search="S&oslash;k";
$book_logout="Logg ut";
$book_login="Logg inn";
$num_pictures="Antall bilder:";
$user_visits="bes&oslash;k";
$user_online="brukere online";
$guest="gjest";
$html_lang="no";
$html_charset="iso-8859-1";

/*#################################################
## index.php
#################################################*/
$index_welc_text="Hei, dette er &quot;The Linux Photo Archive&quot; alias LinPHA.
			Ta en titt p&aring; <a href='http://linpha/sf.net'><u>Sourceforge</u></a> for oppdateringer.";

/*#################################################
## search.php
#################################################*/
$search_header="Linpha s&oslash;k";
$radio_all="Alle";
$radio_descript="Beskrivelse";
$radio_comment="Kommentar";
$radio_category="Kategori";
$radio_file="Filnavn";
$search_in="S&oslash;k i album";
$search_all="Alle album";
$search_for="S&oslash;keord";
$search_button="S&oslash;k";
$photos_found="funnet";
$search_info="LinPHA s&oslash;keside";
$search_msg="S&oslash;k i LinPHA's bildedatabase etter:";

/*#################################################
## img_view.php
#################################################*/
$img_detail="Informasjon";
$img_size="Full st&oslash;rrelse";
$img_com="Kommentar";
$img_des="Beskrivelse";
$img_cat="Kategori";
$img_name="Navn";
$img_info_stored="Kommentar lagret i DB";
$please_login="<a href='login.php'><font color='#000099'><u>Logg inn</u></font></a> for &aring; tilfye kommentarer";
$back_to_thumbs="<b><u>tilbake til oversikten</u></b>";
$back_to_search="<b><u>tilbake til s&oslash;king</u></b>";
$button_next="neste";
$button_prev="forrige";
$exif_ext_error="Det er ingen EXIF st&oslash;tte i din versjon av PHP";
$exif_error="Bildet inneholder ingen EXIF informasjon!";
$exif_more="flere detaljer";
$exif_less="f&aelig;rre detaljer";
$detail_header="Bildenummer";
$detail_header1="av";
$detail_header2="i albumet<br>";
$php_to_old="PHP < 4.2.0, EXIF-sttte sl&aring;tt av!";
$views="visninger";
$slideshow="Bildefremvising";
$seconds="sekunder";
$go="Start";
$stopslide="Stopp bildefremvising";
/* image rotating */
$img_rotate_ok="Roter bildet";
$img_rotating="Problemer med bilderotering"; // TOC entry
$img_rotating_hint1="Bilderotering ikke tilgjengelig! Klikk";
$img_rotating_hint2="for &aring; se hvorfor";

/*#################################################
## login.php
#################################################*/
$login_msg="Logg inn!";
$login_error="Ukjent brukernavn eller passord";
$login_name="Brukernavn";
$login_pass="Passord";
$login_info="LinPHA innloggingsside";
$login_request_account_info="For &aring; be om en ny konto, klikk <u>her</u>";
$login_request_target="Kontakt LinPHA administrator";
$login_admin_info="Du m&aring; logge inn med din adminbruker for &aring; administrere LinPHA";
$login_friend_account_info="Hvis du har en konto, kan du endre din personlige informasjon her";

/*#################################################
## admin.php
#################################################*/
/* other messages */
$admin_page_header="Administrering av LinPHA ";
$please_turn_off_msg="Sett 'Automatisk vedlikehold av miniatyrbilder' til nei n&aring;r du er ferdig med &aring; tilf&oslash;ye bilder,<br> s&aring; vil LinPHA kj&oslash;re rundt 10 ganger kjappere.. :)";

/* left menu */
$logout_msg="logg ut";
$welc_msg="Velkommen";
$stat_msg="Du har n&aring; lov til &aring; utf&oslash;re administrative oppgaver, slik som &aring; tilf&oslash;ye kommentarer og beskrivelser til bilder.";
$back_to_msg="<b>Tilbake til bildene.</b>";
$href_general_conf="Generell konfigurasjon";
$href_user_conf="Brukeradministrasjon";
$href_folder_conf="Albumkonfigurasjon";
$href_sql="MySQL DB administrasjon"; /* TODO */
$href_stats="LinPHA statistikk";
$href_ftp="Filh&aring;ndtering";
$href_other_conf="Thumbnails EXIF/IPTC";


/* general config */
/* uses also entries from install.php */
$default_language="Standard spr&aring;k";
$default_language_info="<--Standard spr&aring;k i LinPHA";
$general_auto_lang="Automatisk valg av spr&aring;k via nettleser";
$general_auto_lang_info="<-- velger automatisk samme spr&aring;k som gjestens nettleser";
$general_success_msg="! Endringer lagret !";

$general_rotate="Rotasjon av bilder";
$general_rotate_info="<-- <b>VIKTIG ADVARSEL! Klikk for informasjon</b>";
$general_exifinfo="EXIF st&oslash;tte:";
$general_exifinfo_info="<-- Aktiverer bruk av EXIF informasjon";
$general_exifdefault="Vis EXIF informasjon som standard:";
$general_exifdefault_info="<-- Akriverer standard visning av EXIF informasjon";

$general_exiflevel="Mengde EXIF informasjon:";
$general_exiflevel_info="<-- Angir hvor mye EXIF informasjon som skal vises i detaljert bildevisning";
$exif_low="lite";
$exif_medium="middels";
$exif_high="mye";
$general_filename="Vis filnavn under miniatyrbilde:";
$general_filename_info="<-- Aktiverer visning av filnavn under miniatyrbilde";
$general_thumb_order="Sorterng av miniatyrbilder:";
$general_thumb_order_info="<-- Angir sorteringsrekkef&oslash;lge av miniatyrbilder";
$thumb_order_date="dato";
$thumb_order_file="filnavn";
$general_autoconf="Automatisk opprettelse/sletting av miniatyrbilder";
$general_autoconf_info="<-- <b>Sl&aring; av for h&oslash;yere ytelse</b>";
$general_counterstat="Vis bes&oslash;ksteller:";
$general_counterstat_info="<-- Viser bes&oslash;ksteller i h&oslash;yre hj&oslash;rne";
$general_blocking="IP-blokkeringstid i minutter";
$general_blocking_info="<--brukeren blir ikke regnet som ny f&oslash;r etter x antall minutter";
$general_theme="Standard LinPHA tema:";
$general_theme_info="<-- Angir standard tema";
$aqua_theme="Vann";
$colored_theme="Farget";
$neptune_theme="Neptune";
$shadow_theme="Skygge";
$general_hq="Sl&aring; av/p&aring; HQ miniatyrbilder og bilder";
$general_hq_info="<-- Sl&aring; av for mye h&oslash;yere ytelse";
$submit_button_general="Lagre endringer i databasen";
$button_on_msg="p&aring;";
$button_off_msg="av";
$basic_opts="Grunnleggende";
$advanced_opts="Avansert";
$show_basics="Klikk for &aring; vise Grunnleggende innstillinger";
$show_advanced="Klikk for &aring; vise Avanserte innstillinger";
$general_printing="Anonym tilgang til utskrift";
$general_printing_info="<-- p&aring; alle kan skrive ut";
$general_slideshow="Bildefremviser";
$general_slideshow_info="<-- sl&aring; bildefremvisings mulighet av/p&aring;";
$general_mini_preview="Next/previous button image status/size";
$general_mini_preview_info="<-- Sl&aring; av hvis mange av brukerene har lav b&aring;ndbredde";

/* modify existing user table */
$mod_user_header="Endring av eksisterende brukere.";
$submit_button_mod_user="Lagre endringer";
$mod_user_success_msg="! Bruker endret !";
$submit_button_delete="Slett";
$del_user_success_msg="! Bruker slettet !";

/* add new user table */
$new_user_header="Legg til ny bruker";
$new_user_name_info="Brukernavn";
$new_user_pass_info="Passord";
$new_user_mail_info="EPostadresse";
$new_user_level_info="Brukertype";
$friend="venn";
$submit_button_new_user="Legg til bruker";
$new_user_success_msg="! Bruker lagt til !";

/* friends account table */
$friend_user_header="Brukerkonfigurasjon";
$submit_button_friend_user="Oppdater konto";
$delete_button_friend_user="Slett konto";
$friend_info_msg="Endrer dine kontoinnstillinger";
$friend_redirect_msg="OK, Autorisasjon godkjent. Du vil bli videresendt til index.php etter 30 sekunder.
	<br> Alle skjulte album for ditt forrige niv&aring; vil v&aelig;re tilgjengelig etter vidresendingen. Ha det hyggelig :)
	<br> Du kan endre dine kontoinnstillinger n&aring;r som helst ved &aring; bruke &quot;Admin&quot; linken p&aring; toppen av siden.";
$friend_redirect_link="Det kan hende du &oslash;nsker &aring; klikke <a href='index.php'>
		<font color='#000099'>her</font></a> for &aring; skifte til index.php n&aring;";

/* add new category table */
$new_cat_header="Legg til en ny kategori";
$new_cat_info="Kategoriens navn";
$submit_button_new_cat="legg til kategori";
$new_cat_success_msg="! Kategori lagt til !";
$mod_cat_header="Endre/Slette kategorier";
$cat_name_header="Kategorinavn";
$cat_mod_header="Endrer kategori";
$cat_del_header="Slett kategori";
$submit_button_mod_cat="Endre";

/* set directory permissions */
$set_dir_perms_header="Albumkonfigurasjon";
$dir_name="Album";
$dir_perms="Tilgang";
$action="Funksjon";
$submit_button_folder="Send";
$public="offentlig";
$friends="venner";
$private="privat";
$new_perms_success_msg="! Albumkonfigurasjon endret !";

/*#################################################
## build_stats.php (called by admin.php)
#################################################*/
$stats_over_header="Statistikk";
$stats_over_photos="Bilder i databasen:";
$stats_over_views="Totalt antall bildevisninger:";
$stats_over_albums="Antall album i databasen:";
$stats_over_space="Brukt diskplass (alle album):";
$stats_over_most_alb_visists="Mest bes&oslash;kte album:";
$stats_over_visitors="Antall bes&oslash;kende s&aring; langt:";
$stats_over_users="Antall registrerte brukere:";
$stats_top_ten="Topp 10 visninger";
$stats_rank="Plassering:";
$stats_no_views="Antall visninger:";
$stats_last_view="Siste visning:";
$stats_alb_name="Albumnavn:";

/*#################################################
## create_all_thumbs.php
#################################################*/
$parse_first="UNDERS&Oslash;KER - F&Oslash;RSTE TRINN";
$parse_sec="UNDERS&Oslash;KER - ANDRE TRINN";
$parse_third="UNDERS&Oslash;KER - TREDJE TRINN";
$parse="undersker n&aring;";
$parsed="Ferdig unders&oslash;kt:";
$dirs="underkataloger";
$done="FERDIG...";
$not_allowed_msg="Beklager, du har ikke rett til at kj&oslash;re dette skriptet!";
/* these entries are called from within admin.php */
$th_msg="Generer alle dine miniatyrbilder n&aring;";
$table_hint_msg="Klikk start for &aring; generere alle miniatyrbilder i alle underkataloger n&aring;";
$start_button="Start!";
$recreate_thumbs_header="Regenerer alle miniatyrbildene";
$recreate_thums_msg="Dette vil REGENERERE ALLE dine miniatyrbilder! Alle kommentarer, beskrivelser og statistikk vil g&aring; tapt!";
/* TODO */
$recreate_thums_warning="V&aelig;r vennlig &aring; bekreft din intensjon om &aring; regenerere alle miniatyrbilder, og SLETTE ALLE KOMMENTARER, BESKRIVELSER OG STATISTIKK! Denne operasjonen kan ikke omgj&oslash;res. Er du sikker p&aring; at du vil fortsette?";


/*#################################################
## Printing, all files
#################################################*/
$print_layout="Velg utskriftsformat";
$images_page="Bilder pr. side";
$indexprint="Indeksutskrift (28)";
$note="<strong>NB!:</strong> Du m&aring; muligens justere din nettlesers sidevisning \"page setup\"
			f&oslash;r utskrift, for &aring; v&aelig;re sikker p&aring; at alle bildene f&aring;r plass p&aring; siden!!!";
$print_button="Forh&aring;ndsvisning av utskrift";
$href_check_all="Velg alle";
$href_clear_all="Velg ingen";
$print_error="FEIL, ingen bilder er valgt!!!";
$print_mode="Utskriftsmetode";
$print_image="Skriv ut bilde";
$videos_msg="Video kan ikke skrives ut";

/*#################################################
## FTP, all files
#################################################*/


/*#################################################
## MySQL backup, most files ;-)
#################################################*/
$mysql_info_header="LinPHA MySQL database administrasjonssystem.";
$mysql_cancel="Avbryt";
$mysql_DHTML_hint="DHTML visning er sl&aring;tt av - Du vil ikke se noen f&oslash;r sikkerhetskopien er ferdig.";
$mysql_select_all="Velg alle";
$mysql_deselect_all="Ikke velg noen";
$mysql_create_backup="Lag sikkerhetskopi";
$mysql_back_menu="Tilbake til menyen";
$mysql_table_checks="Sjekker tabeller...";
$mysql_table_check="Sjekker tabell";
$mysql_struct_msg="Lager struktur for";
$mysql_in_file_dump_msg="dumper data for";
$mysql_progress="Total fremdrift:";
$mysql_back_complete="Sikkerhetskopi ferdig om";
$mysql_back_menu_long="Tilbake til MySQL Database Backup hovedmeny";
$mysql_open_warn1="<B>Advarsel:</B> Kunne ikke &aring;pnes ";
$mysql_open_warn2="for skriving!<BR><BR><I>CHMOD 777</I> p&aring; katalogen burde fikse det.";
$mysql_date_msg="Klokka er n&aring;"; // F&oslash;lger tid p&aring; dagen...
$mysql_last_backup="Siste fulle sikkerhetskopi av MySQL-databasene: ";
$mysql_backup_hint="Sikkerhetskopi mer enn en gang i uken er generellt ikke n&oslash;dvendig.";
$mysql_down_backup="Last ned siste fulle sikkerhetskopi ";
$mysql_down_backup_part="Last ned forrige delvise sikkerhetskopi ";
$mysql_down_backup_struct="Last ned forrige \"structure only backup\" ";
$mysql_down_backup1="(h&oslash;yreklikk, lagre som...)";
$mysql_unknown_backup="Siste sikkerhetskopi av MySQL databasene: <I>ukjent</I>";
$mysql_href_recom="Lag en ny full sikkerhetskopi, fullstendige \"inserts\" (anbefalt)";
$mysql_href_standard="Lag en ny full sikkerhetskopi, standard \"inserts\" (mindre)";
$mysql_href_partial="Lag en ny delvis sikkerhetskopi, kun utvalgte tabeller (Med komplette \"inserts\")";
$mysql_href_structure="Lag en ny full sikkerhetskopi, kun tabellstruktur";
$mysql_days_last="dager";
$mysql_hours_last="timer";
$mysql_min_last="minutter";
$mysql_sec_last="sekunder";
$ago="siden"; // reads in context "some days ago"
$backup="Sikkerhetskopi ";
$restore="Gjenopprett";
$optimize="Optimaliser";
$optimize_tables="Optimaliserer tabeller";
$opt_table_name="Tabellnavn";
$opt_table_check="Tabellsjekk";
$opt_table_optimize="Optimaliser tabell";
$opt_table_msg="Type beskjed";
$opt_start_msg="Start sjekk og optimalisering av alle DB tabeller";
$fullback_hint_msg="Hvis du har flere databaser, s&aring; velg <b>delvis</b> sikkerhetskopi";
$restore_last_fullback="Gjenopprett siste <b>fulle</b> sikkerhetskopi:";
$restore_last_partback="Gjenopprett siste <b>delvise</b> sikkerhetskopi:";
$restore_error="FEIL under &aring;pning av sikkerhetskopi-filen. Fant ikke filen!";
$restore_success="Gjenopprettet med suksess!";

/*########################################################################
### FILEMANGER
########################################################################*/

define('STR_ACCESS_DENIED','<H1>ingen tilgang</H1> du har ingen tilgang til denne katalogen');
define('STR_BACK',	'tilbake');
define('STR_LESS',	'mindre');
define('STR_MORE',	'mer');
define('STR_LINES',	'linjer');
define('STR_FUNCTIONLIST', 'Funksjonsliste');
define('STR_EDIT',	'rediger');
define('STR_VIEW',	'vis');
define('STR_RENAME',	'omd&oslash;p');
define('STR_MKDIR',		'mkdir');
define('STR_DELETE',	'slett');
define('STR_BOTTOM',	'bunn');
define('STR_TOP',		'topp');
define('STR_FILENAME',	   'filnavn');
define('STR_FILESIZE',	   'st&oslash;rrelse');
define('STR_LASTMODIFIED', 'sist endret');
define('STR_SUM', '<B>%s</B> byte(r) i <B>%s</B> enhet(er)');
define('STR_CREATEDIRLEGEND', 'lag en katalog');
define('STR_CREATEDIR',       'navn p&aring; ny katalog:');
define('STR_CREATEDIRBUTTON', 'lag katalog');
define('STR_RENAMELEGEND',       'omd&oslash;p');
define('STR_RENAMEENTERNEWNAME', 'go nytt navn til %s:');
define('STR_RENAMEBUTTON',       'omd&oslash;p');
define('STR_ERROR_DIR',        'Feil: Kunne ikke lese katalogens innhold');
define('STR_AUDIO',            'lyd');
define('STR_COMPRESSED',       'komprimert');
define('STR_EXECUTABLE',       'kj&oslash;rbar');
define('STR_IMAGE',            'bilde');
define('STR_SOURCE_CODE',      'kildekode');
define('STR_TEXT_OR_DOCUMENT', 'tekst eller dokument');
define('STR_WEB_ENABLED_FILE', 'web-aktivert fil');
define('STR_VIDEO',            'video');
define('STR_DIRECTORY',        'katalog');
define('STR_PARENT_DIRECTORY', 'overordnet katalog');
define('STR_EDITOR_SAVE',      'lagre fil');
define('STR_EDITOR_SAVE_ERROR','file <I>%s</I> er ikke skrivbar eller eksisterer ikke');
define('STR_EDITOR_SAVE_ERROR_WRONG_VALUE','ved redigering av filen <I>%s</I> har du oppgitt f&oslash;lgende verdi for byteposisjon #%s: %s.');
define('STR_EDITOR_SAVE_ERROR_HEX_VALUE_NEEDED','if&oslash;lge innstillingene m&aring; du oppgi et positivt hexadesimalt tall mellom 00 og FF.');
define('STR_EDITOR_SAVE_ERROR_DEC_VALUE_NEEDED','iflge innstillingene m&aring; du oppgi et positivt heltall mellom 0 og 255.');
define('STR_FILE_UPLOAD_NAVI_HINT', 'Hurtig navigasjon');
define('STR_FILE_UPLOAD_DRIVES', 'Disker:');
define('STR_FILE_UPLOAD', 'opplast');
define('STR_FILE_UPLOAD_MAIN', 'fil opplaster');
define('STR_FILE_UPLOAD_DISABLED', 'beklager, opplasting av filer er sl&aring;tt av i php.ini');
define('STR_FILE_UPLOAD_DESC','Velg filene du vil laste opp. Velg oppgave som skal utf&oslash;res n&aring;r filene er lastet opp.');
define('STR_FILE_UPLOAD_FILE','Fil');
define('STR_FILE_UPLOAD_TARGET','Last opp fil(er) til');
define('STR_FILE_UPLOAD_ACTION','n&aring;r opplasting er fullf&oslash;rt:');
define('STR_FILE_UPLOAD_NOTHING','ikke gj&oslash;re noe');
define('STR_FILE_UPLOAD_DROPFILE','slette den opplastede filen n&aring;r valgt oppgave er utf&oslash;rt');
define('STR_FILE_UPLOAD_MAXFILESIZE','Maksimum tillatte filst&oslash;rresle satt i php.ini er');
define('STR_FILE_UPLOAD_ERROR',        'Feil: Kunne ikke flytte filen %s til katalogen %s');
define('STR_FILE_UPLOAD_CHDIR_ERROR',  'Feil: kunne ikke bytte til katalog %s. Gjeldende fil: %s');
define('STR_FILE_UPLOAD_UNLINK_ERROR', 'Feil: Kunne ikke slette %s etter behandling.');
define('STR_FILE_UPLOAD_ERROR_FILE_EXCEEDS_INI_SIZE', 'Feil: St&oslash;rrelsen p&aring; den opplastede filen %s overskrider upload_max_filesize innstillingen i php.ini - %s');
define('STR_FILE_UPLOAD_ERROR_FILE_EXCEEDS_FORM_SIZE','Feil: St&oslash;rrelsen p&aring; den opplastede filen %s overskrider HTML FORM innstillingene');
define('STR_FILE_UPLOAD_ERROR_FILE_PARTIAL',          'Feil: Filen %s ble kun delvis lastet opp');

/*########################################################################
### BIG FAT NOTICE !
### AS OF LINPHA 0.9.0 ALL NEW ENTRIES ARE PLACED BELOW THIS MSG
### DEVELOPERS PLEASE MAKE USE OF THE "LANGUPDATE.PHP" SCRIPT!
########################################################################*/

$pano_view="panorama"; /* (img_view.php) -- new [panorama view] href  */
$close_win="Lukk vindu"; /* (various files) -- javascript close window */
$nav_hint="Bruk mus eller piltaster for &aring; navigere!"; /* (image_panorama_view.php) --  */
$pano_view_of="Panorama av bilde"; /* (image_panorama_view.php) -- header message */
$php_basedir_check_msg="sjekker om PHP open basedir er satt..."; /* (sec_stage_install.php) --  */
$req_basedir_fail="NEI"; /* (sec_stage_install.php) -- YES, it\'s really just no/nein ;-) */
$basedir_activE_msg="Farlig: Du har konfigurert PHP til &aring; bruke \"open_basedir\". !<br>"; /* (sec_stage_install.php) --  */
$basedir_active_msg1="+ LinPHA vil bruke GD lib til &aring; lage miniatyrbilder, men dette kan f&oslash;re til noen problemer (Filemanager and others)<br>"; /* (sec_stage_install.php) --  */
$basedir_active_msg2="+ Hvis mulig, vennligst deaktiver \"open_basedir\" i PHP.ini"; /* (sec_stage_install.php) --  */
$gd_basedir_err="+ Hvis mulig, vennligst deaktiver \"open_basedir\" i PHP.ini eller rekompiler PHP med GD lib support (--with-gd)"; /* (sec_stage_install.php) --  */
$extract_tar_gz="pakk ut et *.tar.gz arkiv (UNIX)"; /* (index.php) -- filemanger upload select */
$extract_tar_bz2="pakk ut et *.tar.bz2 arkiv (UNIX)"; /* (index.php) --  */
$extract_gz="pakk ut med gzip (UNIX)"; /* (index.php) -- filemanger upload select */
$extract_zip="pakk ut med unzip (UNIX)"; /* (index.php) -- filemanger upload select */
$extract_winzip="pakk ut med pkzip (WINDOWS WINZIP)"; /* (index.php) -- filemanger upload select */
$new_group_success_msg="! Gruppe lagt til !"; /* (admin.php) -- redirect message */
$mod_group_success_msg="! Gruppe endret !"; /* (admin.php) -- redirect message */
$del_group_success_msg="! Gruppe slettet !"; /* (admin.php) -- redirect message */
$mod_cat_success_msg="! Kategori endret !"; /* (admin.php) -- redirect message */
$del_cat_success_msg="! Kategori slettet !"; /* (admin.php) -- redirect message */
$href_groups="klikk for &aring; legge til eller endre grupper"; /* (build_user_conf/build_folder_conf) -- href message to group management */
$del_warning="ADVARSEL: Du m&aring; logge inn med din nye konto !!!"; /* (build_user_conf.php) -- java popup to notify admin user */
$href_to_folder_conf="Tilbake til katalogh&aring;ndterer"; /* (build_user_conf.php) -- navi href  */
$href_to_user_conf="Tilbake til brukerh&aring;ndtering"; /* (build_user_conf.php) -- navi href  */
$header_new_group="Legg til gruppe"; /* (build_user_conf.php) -- table header */
$header_groupname="Gruppenavn"; /* (build_user_conf.php) -- table header */
$button_addgroup="Legg til gruppe"; /* (build_user_conf.php) -- submit button */
$header_mod_group="Endre/slett grupper"; /* (build_user_conf.php) -- table header */
$mod_group_header="Endre gruppe"; /* (build_user_conf.php) -- table header */
$del_group_header="Slett gruppe"; /* (build_user_conf.php) -- table header */
$search_to_short="S&oslash;kestrengen er for kort, den m&aring; v&aelig;re minst 2 tegn lang!"; /* (search.php) --  */
$general_thumb_size="St&oslash;rrelse p&aring; miniatyrbilde:"; /* (build_general_conf.php) -- thumbsize stuff */
$general_thumb_size_info="<-- Angi st&oslash;rrelse p&aring; miniatyrbilde i piksler"; /* (build_general_conf.php) -- thumbsize stuff */
$general_thumb_border="Ramme rundt miniatyrbilde:"; /* (build_general_conf.php) -- thumb border stuff */
$general_thumb_border_info="<-- Aktiverer ramme rundt miniatyrbildene"; /* (build_general_conf.php) -- thumb border stuff */
$inst_thumbsize_header="Velg miniatyrbilde st&oslash;rrelse"; /* (third_stage_install.php) -- thumb size stuff */
$inst_thumbborder_header="Ramme instillinger"; /* (third_stage_install.php) -- thumb border stuff */
$inst_thumbborder_enable="Aktiver bilderamme"; /* (third_stage_install.php) -- thumb border checkbox msg */
$inst_thumbborder_disable="Deaktiver bilderamme"; /* (third_stage_install.php) -- thumb border checkbox msg */
$safemode_active_msg="D&aring;rlig, du har konfigurert PHP til &aring; bruke \"save_mode\" restriksjoner !<br>"; /* (sec_stage_install.php) --  */
$safemode_active_msg2="+ Hvis mulig, vennligst deaktiver \"save_mode\" i PHP.ini"; /* (sec_stage_install.php) --  */
$general_anon_post="Kommentarer fra anonyme brukere"; /* (build_general_conf.php) --  */
$general_anon_post_info="<-- Anonyme brukere kan legge til kommentar"; /* (build_general_conf.php) --  */
$stats_over_comment="Kommentar postet"; /* (build_stats.php) --  */
$top10_downs_href="Vis top 10 nedlastinger"; /* (build_stats.php) --  */
$top10_views_href="Vis top 10 visninger"; /* (build_stats.php) --  */
$stats_head_downs="Top 10 nedlastinger"; /* (build_stats.php) --  */
$no_downloads="Antall nedlastinger"; /* (build_stats.php) --  */
$general_anon_download="Nedlasting av bilder for anonyme brukere"; /* (build_genera_config.php) --  */
$general_anon_download_info="<-- Skal anonyme brukere f&aring; laste ned bilder"; /* (build_general_config.php) --  */
$seach_multiple_select_use="Flere valg"; /* (search.php) --  */
$search_and="OG"; /* (search.php) --  */
$search_or="ELLER"; /* (search.php) --  */
$search_categories="Kategorier"; /* (search.php) --  */
$search_with_available_filters="Med tilgjengelige filter"; /* (search.php) --  */
$search_select_album="velg album"; /* (search.php) --  */
$search_date_from_to="Dato fra / til"; /* (search.php) --  */
$search_combination_and_or="I kombinasjon med OG og ELLER"; /* (search.php) --  */
$new_user_new_password="Passord"; /* (build_user_conf.php) --  */
$new_user_error4="Brukernavn kan ikke v&aelig;re tomt"; /* (admin.php) --  */
$new_user_error5="Brukernavnet eksisterer allerede"; /* (admin.php) --  */
$new_user_error1="Gammelt passord stemmer ikke"; /* (admin.php) --  */
$new_user_error2="Nytt passord stemmer ikke med gjentatt passord"; /* (admin.php) --  */
$new_user_error3="E-post stemmer ikke"; /* (admin.php) --  */
$new_user_old_password="Gammelt passord"; /* (admin.php) --  */
$new_user_retype_password="Gjenta nytt passord"; /* (admin.php) --  */
$select_db_header="Vennligst velg databasetype"; /* (sec_stage_install.php) --  */
$mysql_info="Velg dette for &aring; bruke MySQL database"; /* (sec_stage_install.php) --  */
$postgres_info="Velg dette for &aring; bruke PostgreSQL database. Vennligst se"; /* (sec_stage_install.php) -- reads: ...Please see info */
$login_autologin="Automatisk innlogging"; /* (toc.php) --  */
$login_autologin_user="Automatisk login brukerinfo"; /* (toc.php) --  */
$toc_timer="Timer"; /* (toc.php) --  */
$general_autologin="Automatisk innlogging"; /* (build_general_conf.php) --  */
$general_autologin_info="<-- Aktiver muligheten for automatisk innlogging"; /* (build_general_conf.php) --  */
$general_timer="Tidtaker for generering av sider:"; /* (build_general_conf.php) --  */
$general_timer_info="<-- vis tid for generering av side i bunnline"; /* (build_general_conf.php) --  */
$login_autlogin="Automatisk innlogging"; /* (login.php) --  */
$lostpw_title="Glemt passord"; /* (login.php) --  */
$lostpw_question="Har du glemt passordet?"; /* (login.php) --  */
$lostpw_type_user_or_email="Skriv inn ditt brukernavn eller din Linpha e-post-addresse"; /* (login.php) --  */
$lostpw_email1="Noen har tatt i bruk mistet passord funksjonen. Hvis det ikke var deg, bare ignorer denne meldinga og ingen ting vil skje med ditt passord. Hvis det var deg, skriv denne koden i foresp&oslash;rsel feltet:"; /* (login.php) --  */
$lostpw_email1_part2="(Husk: Dette er IKKE ditt nye passord!)"; /* (login.php) --  */
$lostpw_email1_part3="Din Linpha-Administrator"; /* (login.php) --  */
$lostpw_email_error="Feil: E-Post kunne ikke sendes. Kontakt administratoren."; /* (login.php) --  */
$lostpw_error_nothing_found="Beklager, ingen brukernavn eller passord som stemmer med dine kriterier ble funnet."; /* (login.php) --  */
$lostpw_email_sent="E-post har blitt sendt til deg."; /* (login.php) --  */
$lostpw_should_receive="Du vil motta den innen ett minutt. Skriv inn koden fra e-posten i dette feltet:"; /* (login.php) --  */
$lostpw_go_back="G&aring; tilbake"; /* (login.php) --  */
$lostpw_email2="Passordet har blitt endret ditt nye passord er:"; /* (login.php) --  */
$lostpw_email2_part2="Du kan endre det senere ved &aring; bruke \"my settings\" linken."; /* (login.php) --  */
$lostpw_new_password="Nytt passord"; /* (login.php) --  */
$lostpw_successfully_changed="Passord endret, du vil motta en e-post med det nye passordet om et &oslash;yeblikk."; /* (login.php) --  */
$lostpw_error_wrong_code="Beklager, det er feil."; /* (login.php) --  */
$lostpw_enter_correct_code="Legg inn koden fra e-posten i dette feltet:"; /* (login.php) --  */
$lang_plugins['plugins']="LinPHA tillegg"; /* (admin.php) --  */
$lang_plugins['watermark']="Vannmerke"; /* (admin.php, toc.php) --  */
$lang_plugins['benchmark']="Benchmark"; /* (admin.php, toc.php) --  */
$lang_plugins['sql']="DB Management"; /* (admin.php, toc.php) --  */
$lang_plugins['active_plugins']="Aktive tillegg"; /* (admin.php) --  */
$lang_plugins['enabled']="Aktivert"; /* (plugins.php) --  */
$lang_plugins['disabled']="Deaktivert"; /* (plugins.php) --  */
$lang_plugins['update']="Oppdater"; /* (plugins.php) --  */
$lang_plugins['plugins_updated']="Tillegg oppdatert"; /* (admin.php, plugins.php) --  */
$wm_wm_man="Vannmerkehandtering"; /* (watermark.php) --  */
$wm_disable="Deaktiver vannmerking"; /* (watermark.php) --  */
$wm_change_example_img="Endre eksempelbilde"; /* (watermark.php) --  */
$wm_no_input_files_found="Ingen input filer funnet"; /* (watermark.php) --  */
$wm_image_quality="Bildekvalitet (kun for forh&aring;ndsvisning)"; /* (watermark.php) --  */
$wm_enable_text="Aktiver: Tekst"; /* (watermark.php) --  */
$wm_text="Tekst"; /* (watermark.php) --  */
$wm_font="Skrift"; /* (watermark.php) --  */
$wm_fontsize="Skriftst&oslash;rrelse"; /* (watermark.php) --  */
$wm_fontcolor="Skriftfarge"; /* (watermark.php) --  */
$wm_align="Justering"; /* (watermark.php) --  */
$wm_pos_hor="Horisontal posisjon"; /* (watermark.php) --  */
$wm_pos_ver="Vertikal posisjon"; /* (watermark.php) --  */
$wm_height="H&oslash;yde p&aring; tekstfelt"; /* (watermark.php) --  */
$wm_width="Bredde p&aring; tekstfelt"; /* (watermark.php) --  */
$wm_shadow_size="Skygge st&oslash;rrelse"; /* (watermark.php) --  */
$wm_shadow_color="Skygge farge"; /* (watermark.php) --  */
$wm_enable_image="Aktiver: Bilde"; /* (watermark.php) --  */
$wm_available_images="Tilgjengelige bilder"; /* (watermark.php) --  */
$wm_no_images_found="Ingen bilder funnet"; /* (watermark.php) --  */
$wm_dissolve="Oppl&oslash;s"; /* (watermark.php) --  */
$wm_preview="Forh&aring;ndsvis"; /* (watermark.php) --  */
$wm_linebreak="for linjeskift"; /* (watermark.php) --  */
$wm_enable_shadow="Aktiver skygge"; /* (watermark.php) --  */
$wm_enable_rectangle="Aktiver rektangel"; /* (watermark.php) --  */
$wm_rectangle_color="Farge"; /* (watermark.php) --  */
$wm_enable_ext_shadow="Aktiver utvidet skygge"; /* (watermark.php) --  */
$wm_status="Status"; /* (watermark.php) --  */
$wm_enabled="Aktiv"; /* (watermark.php) --  */
$wm_disabled="deaktiver"; /* (watermark.php) --  */
$wm_restore_to="Gjenopprett til"; /* (watermark.php) --  */
$wm_inital_settings="Begynnende instillinger"; /* (watermark.php) --  */
$wm_add_more_examples="Du kan legge til flere eksempelbilder i linpha katalogen i katalogen "; /* (watermark.php) --  */
$wm_example="Eksempel"; /* (watermark.php) --  */
$wm_shadow_fontsize="Skygge skriftst&oslash;rrelse"; /* (watermark.php) --  */
$wm_settings_for_both="Innstillinger for bilde og tekst"; /* (watermark.php) --  */
$wm_center="midtstill"; /* (watermark.php) --  */
$wm_north="top"; /* (watermark.php) --  */
$wm_northeast="top-h&oslash;yre"; /* (watermark.php) --  */
$wm_northwest="top-venstre"; /* (watermark.php) --  */
$wm_south="bunn"; /* (watermark.php) --  */
$wm_southeast="bunn-h&oslash;yre"; /* (watermark.php) --  */
$wm_southwest="bunn-venstre"; /* (watermark.php) --  */
$wm_east="h&oslash;yre"; /* (watermark.php) --  */
$wm_west="venstre"; /* (watermark.php) --  */
$bm_file_err="Feil, ingen fil spesifisert";
$bm_var_err="Feil, vennligst sjekk input variabel";
$bm_notfound_err="Feil, filen ikke funnet";
$bm_noimg_err="Feil, filen er ikke et bilde";
$bm_tmpfile_err="Feil, mens midlertidig bildefil lages";
$bm_tmpfile_warn="Advarsel: Midlertidig bilde kan ikke slettes";
$bm_time_total="Total kj&oslash;retid: ";
$bm_img_sec="Bilder pr sekund: ";
$bm_avg_img="Gjennomsnittstid pr bilde (mus over for &aring; oppdatere bilde): ";
$bm_qual_size="Kvalitet / st&oslash;rrelse";
$bm_quality="Kvalitet: ";
$bm_height="H&oslash;yde: ";
$bm_width="Bredde: ";
$bm_size="Bildest&oslash;rrelse: ";
$bm_create = "Genererings benchmark med endringsverkt&oslash;y";
$bm_interval = "interval";
$bm_calc = "Kalkulerer";
$bm_img = "Bilder";
$bm_inloop="Kj&oslash;rings l&oslash;kke";
$bm_qual_range="Kvalitetsintervall: ";
$bm_size_range="St&oslash;rrelsesintervall (h&oslash;yde): ";
$bm_repeats="Gjentakelser: ";
$bm_con_util="Konverteringsverkt&oslash;y: ";
$bm_current_settings="Gjeldende innstillinger"; /* (benchmark.php) --  */
$bm_preview="Forh&aring;ndsvisning"; /* (benchmark.php) --  */
$bm_save_settings="Lagre instillingene"; /* (benchmark.php) --  */
$wm_addexamples="Vannmerke: Legg til eksempelbilder"; /* (watermark.php) --  */
$wm_addimg="Vannmerke: Legg til vannmerke bilde"; /* (watermark.php) --  */
$wm_addfont="Vannmerke: Legg til skrifttype"; /* (watermark.php) --  */
$wm_colorsetting="Vannmerke: Fargeinstillinger"; /* (watermark.php) --  */
$comment_hint="HINT: Trykk &oslash;vre eller nedre bilde for &aring; skifte plassering i albumet"; /* (linpha_comments.php) --  */
$comment_end="Slutt p&aring; album"; /* (linpha_comments.php) --  */
$comment_beginning="Begynnelse av album"; /* (linpha_comments.php) --  */
$comment_back="tilbake til bildevisning"; /* (linpha_comments.php) --  */
$comment_edit_img="Endre kategori / kommentar"; /* (linpha_comments.php) --  */
$comment_change_img_details="Endre bildedetaljer"; /* (linpha_comments.php) --  */
$comment_last_comments="Siste kommentarer"; /* (linpha_comments.php) --  */
$comment_comment_by="Kommentar av "; /* (linpha_comments.php) --  */
$category_delete_warning="Advarsel: Kategorier allerede satt p&aring; bildet forsvinner"; /* (build_category_conf.php) --  */
$pass_2_short="Feil, passord m&aring; v&aelig;re minst 3 tegn langt ..."; /* (various) --  */
$album_edit="Endre album kommentar"; /* (linpha_comments.php) --  */
$album_details="Album detaljer"; /* (linpha_comments.php) --  */
$wm_save_note="OBS: Vannmerker er ikke synlige for registrerte brukere!. du M&Aring; logge ut f&oslash;rst (v&aelig;re gjest) for &aring; se vannmerkene mens du blar i LinPHA!"; /* (watermark.php) --  */
$lang_plugins['guestbook']="Gjestebok"; /* (admin.php) --  */
$print_low_quality="Lav kvalitet"; /* (printing_view.php) --  */
$print_high_quality="H&oslash;y kvalitet (sen!)"; /* (printing_view.php) --  */
$gb_title="LinPHA Gjestebok";
$gb_sign="LinPHA Gjestebok! Legg til ny beskjed";
$gb_from="Sted";
$gb_from_no="Sted ikke angitt";
$gb_pages="Side(r)";
$gb_messages="beskjeder i gjesteboken";
$gb_msg_error="Beklager, navn og kommentar kan ikke v&aelig;re tomme";
$gb_new_msg="Legg til ny beskjed";
$gb_name="Navn";
$gb_email="E-post";
$gb_hp="Hjemmeside";
$gb_country="Hvor er du fra (land)";
$gb_header="LinPHA Gjestebok";
$gb_opts="Innstillinger"; //Gjestebok alternativer
$gb_rows="Antall oppf&oslash;ringer pr side";
$gb_anon="Tillat anonyme oppf&oslash;ringer i gjestebok";
$gb_order="Sorter oppf&oslash;ringer";
$wm_resize="Skaler vannmerker til X% av bildest&oslash;rrelse"; /* (watermark.php) --  */
$wm_help_and_descr="Hjelp og beskrivelse"; /* (watermark.php) --  */
$folder_remove_hint="Hvis alt gikk bra, kan du n&aring; slette install underkatalogen (sikkerhet)..."; /* (forth_stage_install.php) --  */
$add_alb_com="Legg til album kommentar"; /* (img_view.php) --  */
$add_img_com="Legg til bildekommentar"; /* (img_view.php) --  */
$album_com="Album kommentar"; /* (*_stage_album.php) --  */
$formatting_possibilities="HTML Formatting Tags"; /* (various) --  */
$stat_cache_elements="Midlertidig lagrede element"; /* (build_stats.php) --  */
$stat_cache_first="Nye mellomlagrede element"; /* (build_stats.php) --  */
$stat_cache_hits="Mellomlagertips"; /* (build_stats.php) --  */
$stat_cache_hits_max="Maks treff (enkelt bilde)"; /* (build_stats.php) --  */
$stat_cache_hits_avg="Gjennomsnittlig mellomlagertreff (alle bilder)"; /* (build_stats.php) --  */
$stat_cache_size="Mellomlager st&oslash;rrelse"; /* (build_stats.php) --  */
$stat_cache_convert_time="Mellomlager fartsendringstid"; /* (build_stats.php) --  */
$stat_cache_size="Mellomlagerets st&oslash;rrelse"; /* (build_stats.php) --  */
$cache_options="Konfigurasjon bildemellomlager";
$cache_max_size="Maksimal st&oslash;rrelse p&aring; mellomlager i bytes (0 = ubegrenset)";
$path_2_cache="Katalog for mellomlager (standard /sql/cache)";
$cache_optimize="Rydd opp data i bildemellomlager"; 
$cache_maintain="Vedlikelhold av bildemellomlager";
$cache_opt_msg="!! Mellomlager optimalisert !!";
$lang_plugins['cache']="Bildemellomlager"; /* () --  */
$stat_cache_title="Statistikk"; /* (cache.php) -- ??*/
$bm_saved="Instillinger lagret"; /* (admin.php) -- ??*/
$cache_optimize_by_size="Slett alle mellomlagrede element der st&oslash;rrelse (i kb) >="; /* (cache.php) -- ??*/
$cache_optimize_by_date="Slett alle mellomlagrede element som ikke er brukt p&aring; dager:"; /* (cache.php) -- ??*/
$elements_rem="Fjernede element"; /* (cache.php) -- ??*/
$general_anon_album_downs="Last ned som ZIP fil for anonyme brukere"; /* (build_general_conf.php) -- ??*/
$general_anon_album_downs_info="<-- Anonym kan laste ned zip-pakka album"; /* (build_general_conf.php) -- ??*/
$general_download_speed="Begrensning av hastighet ved ledlasting av bilder"; /* (build_general_conf.php) --  */
$general_download_speed_info="<-- fartsbegrensing for album nedlasting"; /* (build_general_conf.php) --  */
$general_navigation="Navigasjonsmeny:"; /* (build_general_conf.php) -- ??*/
$general_navigation_info="<-- Aktiver navigasjonsmeny p&aring; miniatyrbildesider"; /* (build_general_conf.php) -- ??*/
$toc_navigation="Aktiver / Deaktiver navigasjonsmeny"; /* (doc/) -- ??*/
$toc_zip_download="Aktiver/deaktiver anonym album nedlasting"; /* (doc/) - -- ??*/
$toc_albdownlimit="Fartsbegrensning p&aring; nedlasting"; /* (doc/) -- ??*/
$choose_zips_msg="Velg bilder som skal lastes ned"; /* (build_zip_view.php) - -- ??*/
$zip_button="Last ned arkiv"; /* (build_zip_view.php) -- ??*/
$type_of_archive="Velg arkivtype"; /* (build_zip_view.php) --  */
$create_tar="Lag tar arkiv"; /* (build_zip_view.php) -- ??*/
$create_tgz="Lag tar.gz arkiv"; /* (build_zip_view.php) -- ??*/
$create_bz2="Lag tar.bz2 arkiv"; /* (build_zip_view.php) -- ??*/
$create_zip="Lag zip arkiv"; /* (build_zip_view.php) -- ??*/
$create_rar="Lag rar arkiv"; /* (build_zip_view.php) -- ??*/
$menumsg['advanced']="Avanserte instillinger"; /* () -- ??*/
$menumsg['printmode']="Skriverinstillinger"; /* () -- ??*/
$menumsg['printprobs']="Utskriftsmulighet sl??tt av?"; /* () -- ??*/
$menumsg['downloadmode']="Nedlastingsmetode"; /* () -- ??*/
$menumsg['mailmode']="E-post metode"; /* () -- ??*/
$menumsg['addcomment']="Legg til album kommentar"; /* () -- ??*/
$menumsg['delcomment']="Fjern album kommentar"; /* () -- ??*/
$menumsg['editcomment']="Rediger album kommentar"; /* () -- ??*/
$album_up="oppdatert"; /* (album_comment.php) -- ??*/
$album_ins="lagt inn"; /* (album_comment.php) -- ??*/
$mail_link="Epostliste"; /* (header.php) --  */
$mail_title="LinPHA epostliste"; /* (mail.php) --  */
$mail_send_link="Send email"; /* (mail.php) --  */
$mail_return_address="Retur adresse:"; /* (mail.php) --  */
$mail_block="Epost blokkst&oslash;rrelse:"; /* (mail.php) --  */
$mail_block_help="antall epost i en blokk f&oslash;r pause for &aring; unng&aring; PHP timeouts."; /* (mail.php) --  */
$mail_options="Epostliste alternativer"; /* (mail.php) --  */
$mail_go_back="G&aring; tilbake"; /* (various mail plugin files) --  */
$mail_form_title="Epost melding"; /* (mail_form.php) --  */
$mail_form_subject="Emne:"; /* (mail_form.php) --  */
$mail_form_msg="Melding:"; /* (mail_form.php) --  */
$mail_total_sent="Totalt antall eposter sent:"; /* (mail_form.php) --  */
$mail_subscribe="Meld p&aring;"; /* (mail_users.php) --  */
$mail_unsubscribe="Meld av"; /* (mail_users.php) --  */
$mail_activate="Aktiver"; /* (mail_users.php) --  */
$mail_user_name="Ditt navn:"; /* (mail_users.php) --  */
$mail_user_email="Din epost adresse:"; /* (mail_users.php) --  */
$mail_user_email_confirm="Bekreft epost adresse:"; /* (mail_users.php) --  */
$mail_user_code="Aktiveringskode:"; /* (mail_users.php) --  */
$mail_user_code_sent="En epost med aktiveringskode er sendt til din epostadresse."; /* (mail_users.php) --  */
$mail_user_code_subject="LinPHA Epostliste aktivering"; /* (mail_users.php) --  */
$mail_user_activated="Din konto er aktivert!"; /* (mail_users.php) --  */
$mail_user_activate_error="Det er oppst&aring;tt en feil med aktivering av din konto!"; /* (mail_users.php) --  */
$mail_user_email_not_found="eksisterer ikke i epostlisten."; /* (mail_users.php) --  */
$mail_user_remove_ok="fjernet fra epostlisten."; /* (mail_users.php) --  */
$mail_user_remove_fail="kunne ikke bli fjernet fra epostlisten."; /* (mail_users.php) --  */
$mail_user_empty="Fyll inn alle felt."; /* () --  */
$mail_user_no_match="Epostadressene er ikke like."; /* () --  */
$mail_user_exists="Epostadressen eksisterer allerede."; /* (mail_users.php) --  */
$lang_plugins['mail']="Epostliste"; /* (admin.php) --  */
$mail_activate_message="Hei %s,\n\nVennligst fyll inn disse detaljene for &aring; aktivere din epostliste konto.\n\nAktiveringskode: %s\n\nTakk, Webmaster"; /* (submit_users.php) -- dont delete the %s and the \n ! */
$mail_hint="Hint"; /* (mail.php) --  */
$mail_user_permission="Alle brukerene i gruppen 'epost' kan sende epost kan sende epost til listen."; /* (mail.php) --  */
$mail_current_subscribers="Gjeldende medlemmer"; /* (mail.php) --  */
$mail_name="Navn"; /* (mail.php) --  */
$mail_mail="Epost"; /* (mail.php) --  */
$mail_subscribing_date="P&aring;meldingsdato"; /* (mail.php) --  */
$mail_active="Aktiv"; /* (mail.php) --  */
$mail_sent_to="Epost sendt til"; /* (mail.php) --  */
$mail_replace_words="<b>[Navn]</b> og <b>[Epost]</b> vil bli erstattet med navnet og epostadressen til den spesifikke brukeren."; /* (form_mailing.php) --  */
$misc_help="Diverse hjelp"; /* () --  */
$mail_create_group="(Du m&aring; lage gruppen 'epost' selv.)"; /* (mail.php) --  */
$alb_th="Underkataloger i album"; /* (*_stage_album.php) -- overwrites old (wrong) entry */
$arr_month_short = Array('1' => 'jan','2' => 'feb','3' => 'mar','4' => 'apr','5' => 'mai','6' => 'jun','7' => 'jul','8' => 'aug','9' => 'sep','10' => 'okt','11' => 'nov','12' => 'des'); /* abrevations of months */
$arr_month_long = Array('1' => 'januar','2' => 'februar','3' => 'mars','4' => 'april','5' => 'mai','6' => 'juni','7' => 'juli','8' => 'august','9' => 'september','10' => 'oktober','11' => 'november','12' => 'desember'); /* months */
$arr_day_short = Array('s&oslash;','ma','ti','on','to','fr','l&oslash;'); /* abrevations of weekdays */
$arr_day_long = Array('s&oslash;ndag','mandag','tirsdag','onsdag','torsdag','fredag','l&oslash;rdag'); /* weekdays */

/*
If the time and date format in your country is different with these formats,
please uncomment these lines and set it to the right format. Otherwise, leave
it as it is. See http://www.php.net/manual/en/function.strftime.php for definitions.
(Don't apply this to the english language file, the default date and time format are
set in the options page of linpha. This is because the date format is different within
the english spoken countries.)
*/
$date_format = "%a %d.%m.%Y";
$time_format = "%H:%M:%S";
$layout="Innstillinger";
$features="Opsjoner";
$perform="Ytelse";
$general_comment_in_subfolder = 'Albumkommentarer i underkatalog:';
$general_comment_in_subfolder_info = '<-- Vise albumkommentarer i forh&aring;ndsvisning av underatalog';
$general_default_date_format = 'Standard datoformat:';
$general_default_date_format_info = '<-- Se info for flere detaljer om datoformat';
$general_default_time_format = 'Standard tidsformat:';
$general_default_time_format_info = '<-- Se info for flere detaljer om tidsformat';
$general_new_images_folder = 'Virtuell "Nye bilder" mappe';
$general_new_images_folder_info = '<-- Viser en virtuell mappe med nye bilder';
$general_new_images_folder_age = 'Alder i dager for bilder i "Nye bilder" mappe';
$general_new_images_folder_age_info = '<-- maksimum alder for bilder som vises';
$control_key="Ctrl"; /* (various) --  */
$search_date="Dato"; /* (search.php) -- reads: date from to... */
$search_from="fra"; /* (search.php) -- reads: date from to... */
$search_to="til"; /* (search.php) -- reads: date from to... */
$start_slide="Start lysbildevisning"; /* (img_view.php) --  */
$pass_msg="Du m&aring; logge inn med ditt nye passord"; /* (build_my_settings.php) --  */
$str_new_images = "Nye bilder"; /* (new_images.php) -- */
$str_order_by = "Sorter etter"; /* (new_images.php) -- */
$str_age = "Alder"; /* (new_images.php) -- */
$str_album = "Album"; /* (new_images.php) -- */
$str_in_album = "I album"; /* (new_images.php) -- */
$str_img_newer_than = "alle bilder nyere enn %s dager"; /* (new_images.php) -- */
$timespanfmt = "%s dager, %s timer, %s minutter og %s sekunder";  /* (new_images.php) -- */
$str_delete_all_cached_images_with_watermarks="Slett alle mellomlagrede bilder med vannmerke"; /* (watermark.php) --  */
$str_error_changing_perm="FEIL, rettigheten p&aring; filen kunne ikke endres. (Du har mulig vis ikke rettigheter)"; /* (plugins/ftp/index.php) --  */
$str_change_perm="Endre rettiger p&aring;:"; /* (plugins/ftp/index.php) --  */
$str_read="Lese"; /* (plugins/ftp/index.php) --  */
$str_write="Skrive"; /* (plugins/ftp/index.php) --  */
$str_execute="Kj&oslash;re"; /* (plugins/ftp/index.php) --  */
$str_owner="Eier"; /* () --  */
$str_group="Gruppe"; /* (plugins/ftp/index.php) --  */
$str_all_other="Alle andre"; /* (plugins/ftp/index.php) --  */
$str_copy="kopi"; /* (plugins/ftp/index.php) --  */
$str_copy_to="kopier %s til:"; /* (plugins/ftp/index.php) --  */
$str_rename_to="Omd&oslash;pe %s til:"; /* (plugins/ftp/index.php) --  */
$str_rotation_disabled="Bilderotasjon deaktivert"; /* (img_view.php) --  */
$str_no_write_perm="Ingen skriverettigheter"; /* (img_view.php) --  */
$str_new_images_in_these_folders="Nye bilder funnet i f&oslash;lgende album:"; /* (new_images.php) --  */
$str_reinstall_remove_dbconnect="Du m&aring; slette filen ./sql/db_connect.php hvis du fil reinstallere LinPHA. Dette kan gj&oslash;res med den integrerte filadministratoren."; /* (install_header.php) --  */
$str_Version="Versjon"; /* (sec_stage_install.php) --  */
$str_no_supported_database_activated="Feil, ingen st&oslash;ttet database er aktivert i din PHP konfigurasjon"; /* (sec_stage_install.php) --  */
$str_extract_with="N&aring;r opplasting er avsluttet, pakk ut med med"; /* (ftp/index.php) --  */
$str_files_to_upload="Filer til &aring; laste opp"; /* (ftp/index.php) --  */
$posix_check_msg="sjekker for POSIX st&oslash;tte..."; /* (sec_stage_install.php) --  */
$posix_sum_found_msg="POSIX st&oslash;tte funnet i din PHP installasjon. Alle funksjoner i den integrerte filadministratoren er aktivert."; /* (sec_stage_install.php) --  */
$posix_sum_miss_msg="Ingen POSIX st&oslash;tte i din PHP installasjon. Noten funksjoner i den integrerte filadministrattoren er deaktivert."; /* (sec_stage_install.php) --  */
$mod_cache_fail="Feil, innstillingene kunne ikke lagres. S&oslash;rg for at banen er skrevet korrekt og at du har rettigeter til &aring; skrive til katalogen."; /* (admin.php) --  */
$str_create_archive="opprett %s arkiv"; /* (build_zip_view.php) --  */ 
$str_download_error="Feil, nedlastingen kunne ikke starte"; /* (build_zip_view.php) --  */
$str_search_all_images_taken="S&oslash;k alle bilder tatt %s"; /* (read_php_exif.php) --  */
$str_try_a_lower_resolution="Hvis det tar for lang til &aring; laste, fors&oslash;k en lavere oppl&oslash;sning:"; /* (image_panorama_view.php) --  */
$str_current_resolution="gjeldende oppl&oslash;sning:"; /* (image_panorama_view.php) --  */
$href_group_conf="Gruppeadministrasjon"; /* (admin.php + build_user_conf.php) -- Admin menu item + table heading */
$href_tools_section="Verkt&oslash;y:"; /* (admin.php) -- Tools section in admin menu */
$lang_plugins['plugin']="Tillegg"; /* (plugin.php) --  */
$choose_mail_msg="Velg bilder til epost"; /* () --  */
$new_user_full_name="Fullt navn"; /* (build_my_settings.php) -- And build_user_conf.php */
$href_category_conf="Kategorier"; /* (admin.php) --  */
$cat_private="Privat"; /* (build_category_conf.php) --  */
$lang_plugins['facetmap']="FacetMap"; /* (plugins.php) --  */
/*FIX*/$str_add_more_apps="Add more apps"; /* (include/basket_zip.php, ftp/index.p) --  */ 
/*FIX*/$session_check="checking for valid session settings..."; /* (sec_stage_install.php) --  */
/*FIX*/$session_save_handler_ok_msg="Session save handler correctly set."; /* (sec_stage_install.php) --  */
/*FIX*/$session_save_handler_miss_msg="Session save handler NOT correctly set."; /* (sec_stage_install.php) --  */
/*FIX*/$session_miss_msg="Session settings not correctly set. You MUST correct the above errors first in php.ini or LinPHA will probably NOT work correctly later!!"; /* (sec_stage_install.php) --  */
/*FIX*/$session_ok_msg="All session settings correctly set. LinPHA should work properly."; /* (sec_stage_install.php) --  */
$new_user_error6="Feil: Du bruker ikke din egen konto?!?"; /* (build_my_settings.php) --  */
$str_old_comments="Gamle kommentarer (ikke tilknyttet til bilder):"; /* (build_stats.php) --  */
$str_last_viewed_page="Side sist vist:"; /* (index.php) --  */
$str_select_row="Velg rad"; /* (basket.php) --  */
$str_select="Velg"; /* (basket.php) --  */
$str_new_window="nytt vindu"; /* (basket.php) --  */
/*FIX*/$general_anon_mail_mode="Allow/deny mail mode for anonymous users"; /* (build_general_conf.php) --  */
/*FIX*/$general_anon_mail_mode_info="<-- anonymous users are allowed to mail images"; /* (build_general_conf.php) --  */
/*FIX*/$general_mail_mode_max_size="Mail mode: Max mail size"; /* (build_general_conf.php) --  */
/*FIX*/$general_mail_mode_max_size_info="<-- max size in bytes"; /* (build_general_conf.php) --  */
$general_thumbnail_view="Miniatyrbilde"; /* (build_general_conf.php) --  */
$general_image_view="Bildevisning"; /* (build_general_conf.php) --  */
$general_ado_msg="Aktiver mellomlagring av SQLsp&oslash;rringer"; /* (build_general_conf.php) --  */
$general_ado_msg_info="<-- sl� p� hvis SQL serveren er treg eller ingen PHP akselerator er i bruk"; /* (build_general_conf.php) --  */
$general_ado_time_msg="Tid for mellomlagring av SQLsp�rringer:"; /* (build_general_conf.php) --  */
$general_ado_time_msg_info="<-- maksimum tid i minutter for mellomlagring"; /* (build_general_conf.php) --  */
$general_ado_path_msg="Bane til mellomlager for SQLsp�rringer:"; /* (build_general_conf.php) --  */
$general_ado_path_msg_info="<-- omr�de hvor SQLsp�rringer mellomlagres"; /* (build_general_conf.php) --  */
/*FIX*/$str_other_features="Andre opsjoner (features)"; /* (build_general_conf.php) --  */
$str_language_settings="Spr�kinnstillinger"; /* (build_general_conf.php) --  */
$str_sql_query_caching="Mellomlager av SQLsp�rringer"; /* (build_general_conf.php) --  */
$general_thumb_border="Kant rundt miniatyrbilde i px:"; /* (build_general_conf.php) --  */
$general_thumb_border_info="<-- Settes til 0 for � sl� av. Standardverdi er 5."; /* (build_general_conf.php) --  */
$general_thumb_border_color="Farge p� kant:"; /* (build_general_conf.php) --  */
$general_thumb_border_color_info="<-- se info for detaljer"; /* (build_general_conf.php) --  */
$str_recipient="Mottaker"; /* (basket_mail.php) --  */
$str_sender="Avsender"; /* (basket_mail.php) --  */
$str_mail_too_big="Feil: ePostmeldingen er for stor.<br /><br />Tillatt st�rrelse: %s Bytes. Dine valgte bilder bruker %s Bytes.<br /><br />Fjern noen bilder eller bruk muligheten til � laste ned en zip fil!"; /* (basket_mail.php) --  */
$str_size_of_email="ePostmeldingens st�rrelse: %s."; /* (basket_mail.php) --  */
$str_new_search="Nytt s�k"; /* (search.php) --  */
$str_edit_search="Rediger s�k"; /* (search.php) --  */
$str_View="Vis"; /* (img_view.class.php) --  */
$str_normal="normal"; /* (img_view.class.php) --  */
$str_detail="detail"; /* (img_view.class.php) --  */
$search_result_empty="Beklager men s�ket ga ingen treff"; /* (search.php) --  */
/*FIX*/$str_chars_entered="tegn registrert"; /* (img_view.class.php) --  */
/*FIX*/$str_information_lost="Some information will be lost, please revise your entry."; /* (img_view.class.php) --  */
$general_random_image="Vis tilfeldig bilde p� f�rstesiden:"; /* () --  */
$general_random_image_info="<-- Aktiver for � vise tilfeldig bilde p� f�rstesiden"; /* () --  */
$general_random_image_size="Maksimum st�rrelse p� f�rstesidens bilde:"; /* () --  */
$general_random_image_size_info="<-- angi st�rrelse i pixels"; /* () --  */
$str_edit_watermark="Rediger vannmerke"; /* (watermark.php) --  */
$str_edit_permissions="Rettigheter"; /* () --  */
$str_Everyone="Alle brukere"; /* () --  */
$str_Nobody="Ingen brukere"; /* () --  */
$str_only_logged_in_users="Innloggede brukeree"; /* () --  */
$str_except_these_groups="bortsett fra disse grupper:"; /* () --  */
$str_additionally_groups="bortsett fra disse grupper:"; /* () --  */
$str_allow_these_persons="Ingen vannmerker for disse brukere/grupper"; /* () --  */
$str_album_based_permissions="Skjul vannmerke for:"; /* () --  */
$str_all_albums_but_without_these="Alle album bortsett fra disse:"; /* () --  */
$str_only_on_these_albums="Disse album:"; /* () --  */
/*FIX*/$str_allow_these_persons="Allow these persons"; /* (db_api.php) --  */
$str_no_watermarks="Skjul vannmerke for:"; /* (db_api.php) --  */
$str_watermark_perm_part1="Definer vannmerkebilde for en enkelt bruker, flere brukere og/eller album."; /* (watermark.php) --  */
$str_watermark_perm_part2="Standard innstilling er 'Innloggede brukere' og 'Alle album'."; /* (watermark.php) --  */
$str_watermark_perm_part3="Dette betyr at alle innloggede brukere ser bilder uten vannmerke i alle album."; /* (watermark.php) --  */
$inst_linpha_not_work_correctly="LinPHA vil trolig IKKE fungere"; /* (sec_stage_install.php) --  */
$gd_jpg_missing_msg="JPEG st�tte mangler i GDlib! JPEG bilder vil ikke kunne vises!"; /* (sec_stage_install.php) --  */
$general_video_thumbnail="Fors&oslash;k &aring; generere miniatyrbilde for videoer:"; /* (build_generl_config.php) --  */
$general_video_thumbnail_info="<-- Sl� av om det oppst�r problemer med � generere miniatyrbilder for videoer."; /* (build_generl_config.php) --  */
$general_update_notice="Automatisk sjekk for LinPHA oppdateringer:"; /* (build_generl_config.php) --  */
$general_update_notice_info="<-- aktiver for � se etter oppdateringer en gang i uken."; /* (build_general_config.php) --  */
$large="stor"; /* (build_general_config) -- selectfield for mini images size */
/*FIX*/$directories="Directories"; /* (build_thumbnail_conf.php) --  */
$do_nothing="Ikke utf&oslash;r"; /* (build_thumbnail_conf.php) --  */
$create="Opprett"; /* (build_thumbnail_conf.php) --  */
$recreate="Oppdater"; /* (build_thumbnail_conf.php) --  */
$exif_disabled_in_conf="St�tte for EXIF er sl�tt av i konfigurasjonen."; /* (build_thumbnail_conf.php) --  */
$iptc_disabled_in_conf="St�tte for IPTC er sl�tt av i konfigurasjonen."; /* (build_thumbnail_conf.php) --  */
$silent_mode="Stille modus (ikke skriv ut debug informasjon)."; /* (build_thumbnail_conf.php) --  */
$just_thumb_msg="Miniatyrbilder"; /* (build_thumbnail_conf.php) --  */
$log_title="LinPHA Logg"; /* (log.php) --  */
$log_options="LinPHA Logginnstillinger"; /* (log.php) --  */
$log_method_label="Logg til:"; /* (log.php) --  */
$str_extra_headers="Ekstra mailhode informajon:"; /* (log.php) --  */
$str_log_events['login']="Bruker innlogging"; /* (log.php) --  */
$str_log_events['thumbnail']="Miniatyrbildegenerering"; /* (log.php) --  */
$str_log_events['update']="Oppdatering"; /* (log.php) --  */
$str_log_events['db']="Database"; /* (log.php) --  */
$str_log_events['filemanager']="Filbehandler"; /* (log.php) --  */
$str_events=""; /* Hendelser (log.php) --  */
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