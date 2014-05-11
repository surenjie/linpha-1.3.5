<?php
/* language file */
/* Feel free to modify this file to make use of your native language.
If you do so, please save it as lang.YourLanguage.php in the LinPHA /lang dir
and PLEASE mail me a copy! mailto:bzrudi@tuxpower.de */


/* Swedish language file by: Marcus Jaensson. If you have any comments or corrections
please mail me at marcus.jaensson@hik.se */


/*#################################################
## linpha messages
#################################################*/
/* left menu */
$album="Mitt Fotoarkiv";

/* alerts */
$alert_fopen="Fel! Filen kunde inte &ouml;ppnas...";
$printing_probs="Skriver ut problem";
$printing_probs_msg="Utskriftsfuktionen avst&auml;ngd! se";

/* global messages */
$subfolders="Undermappar";
$img_th="Foton";
$in_th="i"; /* used for the photos in $foldername */
$alb_th="Album i undermapp";
$thumb_hint_msg="klicka f&ouml;r detaljerad vy";
$latest_photo="Senaste";
$view_at="Se p&aring; i";
$close_button="st&auml;ng";
$help="hj&auml;lp";
$misc_help="Allm&auml;n Hj&auml;lp";

/*#################################################
## installation
#################################################*/
/* install.php (page 1) */
$welc_header="V&auml;lkommen till LinPHA";
$welc_text="Hej!, detta &auml;r &quot;The Linux Photo Archive&quot; ocks&aring; kallat LinPHA.
			Det verkar som att du anv&auml;nder LinPHA f&ouml;r f&ouml;rsta g&aring;ngen, d&auml;rf&ouml;r M&Aring;STE du
			k&ouml;ra ig&aring;ng installationen!.";
$welc_hint="<b>Innan du forts&auml;tter:</b>";
$welc_hint1="G&ouml;r mappen &quot;<b>linpha/sql</b>&quot; skrivbar f&ouml;r alla!
			(tex chmod 777 sql)";
$next_button="Forts&auml;tt"; /* used as left menu header in all 4 stages */
$inst_msg="LinPHA Installation"; /* used as left menu header in all 4 stages */
$inst_status_1="V&auml;lj spr&auml;k och klicka &quot;Forts&auml;tt&quot;";
$inst_status_step1="Steg 1 av 4";

/* sec_stage_install (page 2) */
$inst_access_msg="V&auml;lj hur pass stor &aring;tkomst du har till databasen";
$inst_full_access_msg="<b>JA !</b><br> Jag har full &aring;tkomst till MySQL-databasen, jag till&aring;ts skapa nya<br>
						databaser och nya anv&auml;ndare. Med andra ord: Detta &auml;r min server!!";
$inst_limited_access_msg="<b>NEJ !</b><br> Jag kommer att installera LinPHA med begr&auml;nsad &aring;tkomst till<br>
						MySQL-databasen. Min ISP till&aring;ter inte att jag skapar nya databaser eller anv&auml;ndare.";
$inst_status_2="V&auml;lj hur pass stor &aring;tkomst du har till databasen, om du &auml;r os&auml;ker, v&auml;lj Nej!";
$inst_status_step2="Steg 2 av 4";

/* requirements */
$req_check_msg="Kontrollerar systemkrav";
$req_found_msg="OK hittad";
$req_miss_msg="EJ hittad";
$req_safe_fail="AKTIVERAD";
$req_safe_ok="AVAKTIVERAD";
$php_safemode_check_msg="kontrollerar PHP safe mode...";
$php_version_check_msg="kontrollerar PHP version > 4.1.0...";
$mem_check_msg="kontrollerar minnesbegr&auml;nsning p&aring; PHP...";
$gd_check_msg="kontrollerar GD-bibliotek...";
$convert_check_msg="kontrollerar ImageMagick...";
$exif_check_msg="kontrollerar EXIF-support...";
$summary_msg="SLUTSATS:";
$safe_mode_err="Din server &auml;r konfigurerad med PHP safe_mode. LinPHA kommer inte fungera
			 s&aring; l&auml;nge safe_mode &auml;r aktiverat i php.ini !";
$inst_abort_msg="!!! INSTALLATIONEN AVBRUTEN !!!";
$php_version_err="Din server har version av PHP < 4.1.0. LinPHA kommer inte fungera
			 s&aring; l&auml;nge du inte uppgraderar din PHP-installation.";
$gd_convert_err="Varken ImageMagick eller GD-bilbiotek kunde hittas. LinPHA kommer inte fungera
			 s&aring; l&auml;nge du inte installerar n&aring;got av dom.";
$convert_sum_found_msg="ImageMagick hittades p&aring; servern. Detta m&ouml;jligg&ouml;r h&ouml;gkvalitativa
			miniatyrbilder.";
$convert_sum_miss_msg="ImageMagick kunde inte hittas p&aring; servern. Detta kommer att resultera i
			l&auml;gre kvalitet p&aring; minitayrbilderna.";
$exif_sum_found_msg="EXIF-support hittades i din PHP-installation. Detta m&ouml;jligg&ouml;r visning av
			detaljerad bildinformation.";

/* TODO (change this one)
$exif_sum_miss_msg="NO exif support found in your PHP installation. This will prevent LinPHA
			from showing detailed Photo information.";
to ==>*/
$exif_sum_miss_msg="Ingen EXIF-support hittades i din PHP-installation. Koomer att anv&auml;nda
			LinPHAs inkluderade EXIF-hanterare ist&auml;llet.";
/* TODO next 3 */
$session_path_check_msg="kontrollerar session_safe_path...";
$session_path_found_msg="session_save_path &auml;r aktiverat i php.ini. LinPHA-inloggning borde fungera riktigt. S&ouml;kv&auml;g &auml;r satt till: ";
$session_path_miss_msg="Inget v&auml;rde hittades f&ouml;r session_save_path. Du m&aring;ste aktivera session_save_path
			i php.ini annars kommer du inte kunna logga in senare!!";
$mem_limit_ok_msg="Bra, minnesbegr&auml;nsningen i PHP &auml;r >= 16MB. Det borde inte vara n&aring;gra problem med att skapa miniatyrbilder.";
$mem_limit_low_msg="Hmm, minnesbegr&auml;nsningen i PHP &auml;r <=16MB. Om du st&ouml;ter p&aring; problem med saknade miniatyrbilder, testa att &ouml;ka memory_limit i php.ini
			eller storleksf&ouml;r&auml;ndra dina bilder till en l&auml;gre uppl&ouml;sning och testa igen...";
$choose_def_quali="V&auml;lj f&ouml;rvald kvalitet p&aring; bilder";
$choose_def_quali_warn="V&auml;l inte h&ouml;g kvalitet om din processor &auml;r &lt; 1Ghz (h&ouml;g processorbelastning)";

/* third_stage_install (page 3) */
$inst_superadmin_header="Konfigurera administrat&ouml;ren av MySQL-databasen";
$inst_superadmin_name="MySQL DB Admin-namn:";
$inst_superadmin_name_info="&lt;-administrat&ouml;rens namn av MySQL-databasen (m&aring;ste existera i DB)";
$inst_superadmin_pass="MySQL DB Admin-l&ouml;senord:";
$inst_superadmin_pass_info="&lt;-l&ouml;senord f&ouml;r MySQL-administrat&ouml;ren (m&aring;ste existera i DB)";

$inst_admin_header="Konfigurera administrat&ouml;ren av LinPHA";
$inst_admin_name="LinPHA Admin-namn:";
$inst_admin_name_info="&lt;-LinPHA-administrat&ouml;rens namn";
$inst_admin_pass="LinPHA Admin-l&ouml;senord:";
$inst_admin_pass_info="&lt;-LinPHA-administrat&ouml;rens l&ouml;senord";
$inst_admin_email="Adminstrat&ouml;rens epost:";
$inst_admin_email_info="&lt;-Epostadressen till administrat&ouml;ren";

$inst_db_header="Konfigurera anslutningen till LinPHA-databasen";
$inst_db_host="V&auml;rdnamn:";
$inst_db_host_info="&lt;-v&auml;rdnamn: oftast &quot;localhost&quot;";
$inst_db_host_info2="&lt;-v&auml;rdnamn: MySQL-databasens v&auml;rdnamn";
$inst_db_host_port="Portnummer:";
$inst_db_host_port_info="&lt;-portnummer: om du &auml;r os&auml;ker, l&auml;mna som det &auml;r";
$inst_db_name="LinPHA-databasens namn:";
$inst_db_name_info="&lt;-Databasnamnet f&ouml;r LinPHA, oftast &quot;linpha&quot;";
$inst_db_name2="Databasnamn:";
$inst_db_name_info2="&lt;-databasnamnet du har f&aring;tt fr&aring;n din ISP";
$inst_table_prefix="Prefix f&ouml;r alla LinPHA-tabeller";
$inst_table_prefix_info="&lt;-prefixet f&ouml;r alla LinPHA-tabeller";

$general_header="Konfigurera allm&auml;na inst&auml;llningar";
$general_album_title="Titel p&aring; fotoalbumet";
$general_album_title_info="&lt;-L&auml;mna blankt f&ouml;r att anv&auml;nda standardnamnet";
$general_photos_row="Antal rader som ska visas:";
$general_photos_row_info="&lt;-V&auml;lj det antal rader med miniatyrbilder som ska visas";
$general_photos_col="Antal kolumner som ska visas:";
$general_photos_col_info="&lt;-V&auml;lj det antal kolumner med miniatyrbilder som ska visas";
$general_photos_width="Storlek p&aring; detaljerad fotovy (bredd):";
$general_photos_width_info="&lt;- 512 (standardstorlek)";
$general_photos_height="Storlek p&aring; detaljerad fotovy (h&ouml;jd):";
$general_photos_height_info="&lt;- 384 (standardstorlek)";
$general_img_quality="Kvalitet p&aring; detaljerat foto:";
$general_img_quality_info="&lt;- Justera bildkvalitet 0-100 (standard 75)";

$inst_status_3="Fyll i alla f&auml;lt!";
$inst_status_step3="Steg 3 av 4";

/* forth_stage_install (page 4) */
$inst_status_4="Grattis! Installationen &auml;r slutf&ouml;rd! LinPHA &auml;r nu redo att anv&auml;ndas";
$inst_status_step4="Steg 4 av 4";
$inst_submit="Slutf&ouml;r";
$inst_db_tryconn="F&ouml;rs&ouml;ker ansluta till databasservern";
$inst_db_tryconn_error="Fel vid anslutning till databasservern, anv&auml;nde:";
$inst_db_tryconn_ok="OK, ansluten!";
$inst_db_tryinst="F&ouml;s&ouml;ker skapa databas:";
$inst_db_tryinst_error="Fel vid skapande av databas:";
$inst_db_tryinst_ok="OK, skapad!";
$inst_create_tb_msg="OK, skapar alla tabeller";

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
$inst_db_connect_inc_msg="Fel vad anslutning till databasservern!";
$inst_db_connect_inc_msg1="Fel vid f&ouml;rs&ouml;k att v&auml;lja ".@$db_realname." fr&aring;n DB<br>
	Om detta meddelande dyker upp under installationen m&aring;ste du ta bort filen db_connect.php<br>
	i linphas &quot;sql&quot;-undermapp!";
/* ------------------------------------------------------------------ */

$table_create="Skapar tabell:";
$table_create_error="Fel skapandet av tabeller!";
$table_create_ok="OK, skapad!";
$table_insert_admin="Skapar administrat&ouml;r med namn:";
$table_insert_admin_error="Fel vid skapandet av administrat&ouml;rskontot!";
$table_insert_admin_ok="OK, skapad!";
$write_db_config="Sparar konfigurering av databasen till fil";
$fopen_error="Kunde inte &ouml;ppna sql/db_config.php f&ouml;r &aring;terskrivning, utf&ouml;r chmod 777 och starta om installationen";
$fopen_ok="OK, konfiguration sparad!";
$install_finish_msg="OK. Installationen Slutf&ouml;rd!!";
$admin_task="klicka f&ouml;r forts&auml;tta";
$file_create_ok="OK, skapad!";
$configure_error="Fyll i alla obligatoriska f&auml;lt!";
$could_not_open="Fel, kunde inte &ouml;ppna tabellen users! Det verkar som att du inte &auml;r till&aring;ten att l&auml;gga till nya anv&auml;ndare till DB<br>
				V&auml;lj att du har begr&auml;nsad &aring;tkomst p&aring; sidan 2 under installationen.<br>";

/*#################################################
## header.php
#################################################*/
$page_title="LinPHA - The PHP Photo Archive";
$head_title="The PHP Photo Archive";
$book_home="hem";
$book_about="om";
$book_admin="admin";
$book_admin_user="mina inst&auml;llningar";
$book_links="l&auml;nkar";
$book_search="s&ouml;k";
$book_logout="logga ut";
$book_login="logga in";
$num_pictures="Foton:";
$user_visits="bes&ouml;k";
$user_online="anv&auml;ndare online";
$guest="g&auml;st";
$html_lang="sv";
$html_charset="iso-8859-1";

/*#################################################
## index.php
#################################################*/
$index_welc_text="Hej, detta &auml;r &quot;The PHP Photo Archive&quot; ocks&aring; kallat LinPHA.
			Kolla p&aring; <a href='http://linpha.sf.net/'><u>Sourceforge</u></a> f&ouml;r uppdateringar.";

/*#################################################
## search.php
#################################################*/
$search_header="Linpha-S&ouml;k";
$radio_all="Allt";
$radio_descript="Beskrivning";
$radio_comment="Kommentar";
$radio_category="Kategori";
$radio_file="Filnamn";
$search_in="S&ouml;k i Album";
$search_all="Alla Album";
$search_for="S&ouml;k nyckelord";
$search_button="S&ouml;k";
$photos_found="hittade";
$search_info="LinPHA s&ouml;k-sida";
$search_msg="S&ouml;k foton i LinPHAs databas:";

/*#################################################
## img_view.php
#################################################*/
$img_detail="Bild-detaljer";
$img_size="full storlek";
$img_com="kommentarer";
$img_des="Beskrivning";
$img_cat="kategori";
$img_name="namn";
$img_info_stored="Kommentarer skrivna till DB";
$please_login="<a href='login.php'><font color='#000099'><u>Logga in</u></font></a> f&ouml;r att kommentera";
$back_to_thumbs="<b><u>tillbaka till miniatyrvy</u></b>";
$back_to_search="<b><u>tillbaka till s&ouml;k</u></b>";
$button_next="n&auml;sta";
$button_prev="f&ouml;reg&aring;ende";
$exif_ext_error="Ingen EXIF-support i PHP versionen";
$exif_error="Bilden inneh&aring;ller ingen exif-information!";
$exif_more="mer detaljer";
$exif_less="lindre detaljer";
$detail_header="Foto";
$detail_header1="av";
$detail_header2="i mapp";
$php_to_old="PHP < 4.2.0 EXIF avst&auml;ngt!";
$views="visningar";
$slideshow="Bildspel";
$seconds="sekunder";
$go="G&aring;";
$stopslide="Stoppa Bildspel";
/* image rotating */ /* TODO next */
$img_rotate_ok="rotera bild";
$img_rotating="Problem med att rotera bild"; // TOC entry
$img_rotating_hint1="Rotation av bild avst&auml;ngt! klicka";
$img_rotating_hint2="f&ouml;r att se varf&ouml;r";

/*#################################################
## login.php
#################################################*/
$login_msg="Logga in!";
$login_error="ok&auml;nt anv&auml;ndarnamn eller l&ouml;senord";
$login_name="Anv&auml;ndarnamn";
$login_pass="L&ouml;senord";
$login_info="LinPHA login-sida";
$login_request_account_info="G&ouml;r en f&ouml;rfr&aring;gan p&aring; ett nytt konto:";
$login_request_target="Kontakta LinPHAs Administrat&ouml;r";
$login_admin_info="F&ouml;r att genomf&ouml;ra administrativa uppgifter logga in med ditt adminstrat&ouml;rs-konto";
$login_friend_account_info="Om du redan har ett &quot;v&auml;nner&quot;-konto,
kan du modifiera dina personliga uppgifter h&auml;r";


/*#################################################
## admin.php
#################################################*/
/* other messages */
$admin_page_header="LinPHA Administration";
$please_turn_off_msg="Avaktivera 'Automatiskt Skapa/ta bort miniatyrvy' n&auml;r du &auml;r f&auml;rdig med att l&auml;gga till foton.<br>
						LinPHA borde bli ca 10 g&aring;nger snabbare d&aring; :)";
/* left menu */
$logout_msg="logga ut";
$welc_msg="V&auml;lkommen ";
$stat_msg="Du &auml;r nu auktoriserad att g&ouml;ra administrativa uppgifter, likv&auml;l l&auml;gga till <b>kommentarer<b> och beskrivningar p&aring; bilder.";
$back_to_msg="<b>tillbaka till foton</b>";
$href_general_conf="Allm&auml;n Konfiguration";
$href_user_conf="Anv&auml;ndare- & Grupp-hantering";
$href_folder_conf="Mapphantering";
$href_sql="MySQL DB-hantering";
$href_ftp="Filhantering";
$href_stats="LinPHA-statistik";
$href_other_conf="Thumbnails EXIF/IPTC";


/* general config */
/* uses also entries from install.php */
$default_language="F&ouml;rvalt spr&aring;k";
$default_language_info="&lt;--S&auml;tt f&ouml;rvalt spr&aring;k";
$general_auto_lang="Aktivera/Avaktivera auto-detektering av spr&auml;k"; /* TODO 2 lines*/
$general_auto_lang_info="&lt;-- Auto-detektera anv&auml;ndares webl&auml;sar-spr&aring;k";
$general_success_msg="! &Auml;ndringar sparade !";

/* TODO 6 lines (addition and REPLACEMENT)*/
$general_rotate="Aktivera/Avaktivera rotation av bilder";
$general_rotate_info="&lt;-- <b>Stor fet varning! Klicka p&aring; info</b>";
$general_exifinfo="Aktivera/Avaktivera ALL EXIF-support";
$general_exifinfo_info="&lt;-- Aktivera/Avaktivera anv&auml;ndandet av EXIF";
$general_exifdefault="Visa EXIF-information";
$general_exifdefault_info="&lt;-- Aktivera f&ouml;r att visa EXIF-info";

$general_exiflevel="Niv&aring; av EXIF-information";
$general_exiflevel_info="&lt;-- St&auml;ll in hur mycket EXIF-information som ska visas";
$exif_low="lite";
$exif_medium="normalt";
$exif_high="mycket";
$general_filename="Aktivera/Avaktivera filnamn";
$general_filename_info="&lt;-- Aktivera f&ouml;r att visa filnamn under miniatyrbilden";
$general_thumb_order="Sortera miniatyrvy efter";
$general_thumb_order_info="&lt;-- Sortera miniatyrvyn efter filnamn eller datum";
$thumb_order_date="Datum";
$thumb_order_file="Filnamn";
$general_autoconf="Automatiskt skapa/ta bort miniatyrbilder";
$general_autoconf_info="&lt;-- <b>Avaktivera f&ouml;r att betydligt snabba upp LinPHA</b>";
$general_counterstat="Aktivera/Avaktivera r&auml;knare";
$general_counterstat_info="&lt;-- p&aring; &auml;r f&ouml;rvalt";
$general_blocking="IP-blockering i minuter";
$general_blocking_info="&lt;-- Anv&auml;ndare r&auml;knas inte som ny anv&auml;ndare f&ouml;rr&auml;n efter x antal minuter";
$general_theme="&Auml;ndra LinPHAs stilschema";
$general_theme_info="&lt;-- St&auml;ll in vilket stilschema som ska g&auml;lla i LinPHA";
$aqua_theme="Aqua";
$colored_theme="Colored";
$neptune_theme="Neptune";
$shadow_theme="Shadow";
$general_hq="Aktivera/Avaktivera h&ouml;gkvalitativa miniatyrbilder och foton";
$general_hq_info="&lt;-- Avaktivera f&ouml;r att betydligt snabba upp LinPHA";
$submit_button_general="Skriv &auml;ndringar till databasen";
$button_on_msg="p&aring;";
$button_off_msg="av";
$basic_opts="Grundl&auml;ggande";
$advanced_opts="Avancerade";
$show_basics="Klicka f&ouml;r att se Grundl&auml;ggande inst&auml;llningar";
$show_advanced="Klicka f&ouml;r att se Avancerade inst&auml;llningar";
$general_printing="Aktivera/Avaktivera g&auml;st-utskrifter";
$general_printing_info="&lt;-- P&aring;, alla f&aring;r skriva ut";
$general_slideshow="Aktivera/Avaktivera bildspel";
$general_slideshow_info="&lt;-- Aktivera eller Avaktivera bildspelsfunktionen";
$general_mini_preview="Next/previous button image status/size";
$general_mini_preview_info="&lt;-- Avaktivera om m&aring;nga anv&auml;ndare har l&aring;g bandbredd";

/* modify existing user table */
$mod_user_header="Modifiera existerande anv&auml;ndare";
$submit_button_mod_user="Modifiera anv&auml;ndare";
$mod_user_success_msg="! Anv&auml;ndare modifierad !";
$submit_button_delete="Ta bort";
$del_user_success_msg="! Anv&auml;ndare borttagen !";

/* add new user table */
$new_user_header="L&auml;gg till ny anv&auml;ndare";
$new_user_name_info="Anv&auml;ndarnamn";
$new_user_pass_info="L&ouml;senord";
$new_user_mail_info="Epost";
$new_user_level_info="Anv&auml;ndarniv&aring;";
$friend="v&auml;n";
$submit_button_new_user="L&auml;gg till anv&auml;ndare";
$new_user_success_msg="! Anv&auml;ndare skapad !";

/* friends account table */
$friend_user_header="Kontokonfiguration";
$submit_button_friend_user="Uppdatera Konto";
$delete_button_friend_user="Ta bort Konto";
$friend_info_msg="&Auml;ndra dina kontoinst&auml;llningar";

/* add new category table */
$new_cat_header="Skapa ny kategori";
$new_cat_info="nytt kategorinamn att l&auml;gga till";
$submit_button_new_cat="l&auml;gg till kategori";
$new_cat_success_msg="! Kategori tillagd !";
$mod_cat_header="Modifiera/ta bort kategorier";
$cat_name_header="Kategorinamn";
$cat_mod_header="Modifiera kategori";
$cat_del_header="Ta bort kategori";
$submit_button_mod_cat="Modifiera";

/* set directory permissions */
$set_dir_perms_header="St&auml;ll in mappars r&auml;ttigheter";
$dir_name="Mapp";
$dir_perms="R&auml;ttighet";
$action="Funktion";
$submit_button_folder="Skicka";
$public="publik";
$friends="v&auml;nner";
$private="privat";
$new_perms_success_msg="! R&auml;ttigheter &Auml;ndrade !";

/*#################################################
## build_stats.php (called by admin.php)
#################################################*/
$stats_over_header="Total Statistik";
$stats_over_photos="Foton i databasen:";
$stats_over_views="Totalt visade foton:";
$stats_over_albums="Album i databasen:";
$stats_over_most_alb_visists="Mest bes&ouml;kta album:";
$stats_over_space="Diskutrymme anv&auml;nt (alla album):";
$stats_over_visitors="Anv&auml;ndare hitills:";
$stats_over_users="Registrerade anv&auml;ndare:";
$stats_top_ten="Topp 10";
$stats_rank="Rankning:";
$stats_no_views="Antal visningar:";
$stats_last_view="Senast visad:";
$stats_alb_name="Albumnamn:";

/*#################################################
## create_all_thumbs.php
#################################################*/
$parse_first="G&Aring;R IGENOM F&Ouml;RSTA STEGET";
$parse_sec="G&Aring;R IGENOM ANDRA STEGET";
$parse_third="G&Aring;R IGENOM TREDJE STEGET";
$parse="g&aring;r igenom nu";
$parsed="genomg&aring;ng klar:";
$dirs="Undermappar";
$done="ALLT KLART...";
$not_allowed_msg="Du f&aring;r inte k&ouml;ra detta skript!";
/* these entries are called from within admin.php */
$th_msg="Skapa alla dina miniatyrbilder p&aring; en g&aring;ng!";
$table_hint_msg="Klicka p&aring; Starta f&ouml;r att skapa miniatyrbilder i alla undermappar nu!";
$start_button="Starta!";
$recreate_thumbs_header="&Aring;terskapa alla miniatyrbilder";
$recreate_thums_msg="Detta kommer att &aring;terskapa alla dina miniatyrbilder! All statistik kommer att F&Ouml;RSVINNA!";
$recreate_thums_warning="Bekr&auml;fta att du vill &aring;terskapa alla miniatyrbilder, och TA BORT ALLA KOMMENTARER, BESKRIVNINGAR OCH STATISTIK! Detta kan inte &aring;ngras. &Auml;r du s&auml;ker p&aring; att du vill fullf&ouml;lja?";

/*#################################################
## Printing, all files
#################################################*/
$print_layout="V&auml;lj utskriftslayout";
$images_page="Bilder/sida";
$indexprint="Index-utskrift (28)";
$note="<strong>NOTERA:</strong> Du kanske m&aring;ste &auml;ndra din webbl&auml;sares \"Utskriftsinst&auml;llningar\"
			innan du skriver ut f&ouml;r att garantera att alla foton f&aring;r plats p&aring; en sida!";
$print_button="F&ouml;rhandsgranska utskrift";
$href_check_all="Bocka i alla";
$href_clear_all="Bocka ur alla";
$print_error="FEL, inga bilder valda !!!";
$print_mode="Utskriftsl&auml;ge";
$print_image="Skriv ut bild";
$videos_msg="G&aring;r inte skriva ut filmer";

/*#################################################
## FTP, all files
#################################################*/


/*#################################################
## MySQL backup, most files ;-)
#################################################*/
$mysql_info_header="LinPHA MySQL databashanterigssystem ver.";
$mysql_cancel="Avbryt";
$mysql_DHTML_hint="DHTML visning &auml;r avst&auml;ngd - du kommer inte se n&aring;gonting f&ouml;rr&auml;n backupen &auml;r klar.";
$mysql_select_all="Markera Allt";
$mysql_deselect_all="Avmarkera Allt";
$mysql_create_backup="G&ouml;r backup";
$mysql_back_menu="Tillbaka till menyn";
$mysql_table_checks="Kontrollerar tabeller...";
$mysql_table_check="Kontrollerar tabell";
$mysql_struct_msg="Skapar struktur f&ouml;r";
$mysql_in_file_dump_msg="dumpar data f&ouml;r";
$mysql_progress="Totalt f&ouml;rlopp:";
$mysql_back_complete="Backup f&auml;rdig inom";
$mysql_back_menu_long="Tillbaka till menyn f&ouml;r MySQL Databasbackup";
$mysql_open_warn1="<B>Varning:</B> misslyckades att &ouml;ppna ";
$mysql_open_warn2="f&ouml;r &aring;terskrivning!<BR><BR><I>CHMOD 777</I> p&aring; mappen borde fixa det problemet.";
$mysql_date_msg="Det &auml;r nu "; // it follows time of the day...
$mysql_last_backup="Senaste fullst&auml;ndiga backupen av MySQL databaser: ";
$mysql_backup_hint="Generellt &auml;r backup av databas inte n&ouml;dv&auml;ndig mer &auml;n en g&aring;ng i veckan.";
$mysql_down_backup="Ladda ner den tidigare fullst&auml;ndiga backupen ";
$mysql_down_backup_part="Ladda ner den tidigare partiella backupen ";
$mysql_down_backup_struct="Ladda ner den tidigare, endast strukturella backupen ";
$mysql_down_backup1="(h&ouml;gerklicka, Spara som...)";
$mysql_unknown_backup="Senaste backup av MySQL-databaser: <I>ok&auml;nt</I>";
$mysql_href_recom="Skapa en ny fullst&auml;nding backup, med komplett inneh&aring;ll (rekommenderat)";
$mysql_href_standard="Skapa en ny fullst&auml;ndig backup, med standardinneh&aring;ll (mindre)";
$mysql_href_partial="Skapa en ny partiell backup, endast med markerade tabeller (med komplett inneh&aring;ll)";
$mysql_href_structure="Skapa en ny fullst&auml;ndig backup, endast tabellstruktur";
$mysql_days_last="dagar";
$mysql_hours_last="timmar";
$mysql_min_last="minuter";
$mysql_sec_last="sekunder";
$ago="sedan"; // reads in context "some days ago"
$backup="Backup";
$restore="&Aring;terskapa";
$optimize="Optimisera";
$optimize_tables="Optimisera tabeller";
$opt_table_name="Tabellnamn";
$opt_table_check="Tabellkontroll";
$opt_table_optimize="Tabelloptimisering";
$opt_table_msg="Typ av meddelande";
$opt_start_msg="Starta kontroll och optimisering av alla databastabeller";
$fullback_hint_msg="Om du har flera databaser, v&auml;lj <b>partiell<b> backup";
$restore_last_fullback="&Aring;terskapa senaste <b>fullst&auml;ndiga<b> backupen:";
$restore_last_partback="&Aring;terskapa senaste <b>partiella<b> backupen:";
$restore_error="Fel vid l&auml;sning av backupfilen. Filen kunde inte hittas!";
$restore_success="&Aring;terskapning var framg&aring;ngsrik!";

/*########################################################################
### FILEMANGER
########################################################################*/

define('STR_ACCESS_DENIED','<H1>beh&ouml;righet nekad</H1> du har inga r&auml;ttigheter till att komma &aring;t denna mappen');
define('STR_BACK',	'tillbaka');
define('STR_LESS',	'mindre');
define('STR_MORE',	'mer');
define('STR_LINES',	'streck');
define('STR_FUNCTIONLIST', 'Funktionslista');
define('STR_EDIT',	'redigera');
define('STR_VIEW',	'visning');
define('STR_RENAME',	'd&ouml;p om');
define('STR_MKDIR',		'mkdir');
define('STR_DELETE',	'ta bort');
define('STR_BOTTOM',	'botten');
define('STR_TOP',		'toppen');
define('STR_FILENAME',	   'filnamn');
define('STR_FILESIZE',	   'storlek');
define('STR_LASTMODIFIED', 'senast modifierad');
define('STR_SUM', '<B>%s</B> byte(s) i <B>%s</B> filer');
define('STR_CREATEDIRLEGEND', 'skapa en mapp');
define('STR_CREATEDIR',       'namn p&aring; mappen du vill skapa:');
define('STR_CREATEDIRBUTTON', 'skapa mapp');
define('STR_RENAMELEGEND',       'd&ouml;p om');
define('STR_RENAMEENTERNEWNAME', 'skriv in nytt namn f&ouml;r %s:');
define('STR_RENAMEBUTTON',       'd&ouml;p om');
define('STR_ERROR_DIR','Fel: gick inte l&auml;sa inneh&aring;llet i mappen');
define('STR_AUDIO',            'ljud');
define('STR_COMPRESSED',       'komprimerad');
define('STR_EXECUTABLE',       'k&ouml;rbar');
define('STR_IMAGE',            'bild');
define('STR_SOURCE_CODE',      'k&auml;llkod');
define('STR_TEXT_OR_DOCUMENT', 'text eller dokument');
define('STR_WEB_ENABLED_FILE', 'web-aktiverad fil');
define('STR_VIDEO',            'video');
define('STR_DIRECTORY',        'mapp');
define('STR_PARENT_DIRECTORY', '&ouml;verst&aring;ende mapp');
define('STR_EDITOR_SAVE',      'spara fil');
define('STR_EDITOR_SAVE_ERROR','filen <I>%s</I> &auml;r inte skrivbar eller finns den inte');
define('STR_EDITOR_SAVE_ERROR_WRONG_VALUE','under tiden filen <I>%s</I> blev redigerad, har du getts f&ouml;ljande v&auml;rde vid byteposition #%s: %s.');
define('STR_EDITOR_SAVE_ERROR_HEX_VALUE_NEEDED','enligt inst&auml;llningarna m&aring;ste du ange ett positivt hexadecimalt v&auml;rde mellan 00 och FF.');
define('STR_EDITOR_SAVE_ERROR_DEC_VALUE_NEEDED','enligt inst&auml;llningarna m&aring;ste du ange ett helt, positivt decimalt v&auml;rde mellan 0 och 255.');
define('STR_FILE_UPLOAD_NAVI_HINT', 'Snabbnavigator');
define('STR_FILE_UPLOAD_DRIVES', 'Diskar:');
define('STR_FILE_UPLOAD', 'ladda upp');
define('STR_FILE_UPLOAD_MAIN', 'uppladdare');
define('STR_FILE_UPLOAD_DISABLED', 'filuppladdning &auml;r avaktiverat i php.ini');
define('STR_FILE_UPLOAD_DESC','V&auml;lj de filer du vill ladda upp. V&auml;lj funktion att genomf&ouml;ra efter framg&aring;ngsrik uppladdning.');
define('STR_FILE_UPLOAD_FILE','Fil');
define('STR_FILE_UPLOAD_TARGET','ladda upp fil(er) till');
define('STR_FILE_UPLOAD_ACTION','n&auml;r uppladning &auml;r klar, utf&ouml;r f&ouml;ljande:');
define('STR_FILE_UPLOAD_NOTHING','g&ouml;r ingenting');
define('STR_FILE_UPLOAD_DROPFILE','ta bort den uppladdade filen n&auml;r vald funktion &auml;r klar');
define('STR_FILE_UPLOAD_MAXFILESIZE','Till&aring;ten filstorlek (f&ouml;r varje fil) &auml;r i php.ini satt till max');
define('STR_FILE_UPLOAD_ERROR',        'Fel: Lyckades inte flytta filen %s till mappen %s');
define('STR_FILE_UPLOAD_CHDIR_ERROR',  'Fel: Lyckades inte &auml;ndra (chdir) mapp till %s. Fil som blir behandlad: %s');
define('STR_FILE_UPLOAD_UNLINK_ERROR', 'Fel: Lyckades inte ta bort %s efter behandling.');
define('STR_FILE_UPLOAD_ERROR_FILE_EXCEEDS_INI_SIZE', 'Fel: Den uppladdade filen %s &ouml;verskrider inst&auml;llningen upload_max_filesize i php.ini - %s');
define('STR_FILE_UPLOAD_ERROR_FILE_EXCEEDS_FORM_SIZE','Fel: Storlek p&aring; den uppladdade filen %s &ouml;verskrider HTML FORM-inst&auml;llningen');
define('STR_FILE_UPLOAD_ERROR_FILE_PARTIAL',          'Fel: Den uppladdade filen %s var endast partiellt uppladdad');

/*########################################################################
### BIG FAT NOTICE !
### AS OF LINPHA 0.9.0 ALL NEW ENTRIES ARE PLACED BELOW THIS MSG
### DEVELOPERS PLEASE MAKE USE OF THE "LANGUPDATE.PHP" SCRIPT!
########################################################################*/

$pano_view="panoramavy"; /* (img_view.php) -- new [panorama view] href  */
$close_win="St&auml;ng f&ouml;nster"; /* (various files) -- javascript close window */
$nav_hint="Anv&auml;nd musen eller piltangenterna f&ouml;r att navigera!"; /* (image_panorama_view.php) --  */
$pano_view_of="Panoramavy av bild"; /* (image_panorama_view.php) -- header message */
$php_basedir_check_msg="kontrollerar om inst&auml;llningen PHP open basedir &auml;r p&aring;..."; /* (sec_stage_install.php) --  */
$req_basedir_fail="NEJ"; /* (sec_stage_install.php) -- YES, it\'s really just no/nein ;-) */
$basedir_active_msg="Inte bra, du har konfigurerat PHP f&ouml;r att anv&auml;nda \"open_basedir\". !<br>"; /* (sec_stage_install.php) --  */
$basedir_active_msg1="+ LinPHA kommer att anv&auml;nda GD lib f&ouml;r att skapa miniatyrbilder, f&ouml;rv&auml;nta dig lite problem<br>"; /* (sec_stage_install.php) --  */
$basedir_active_msg2="+ Om det &auml;r m&ouml;jligt, avaktivera \"open_basedir\" i PHP.ini"; /* (sec_stage_install.php) --  */
$gd_basedir_err="+ Om det &auml;r m&ouml;jligt, avaktivera \"open_basedir\" i PHP.ini eller kompilera om PHP med GD lib-support (--with-gd)"; /* (sec_stage_install.php) --  */
$extract_tar_gz="extrahera ett *.tar.gz-arkiv (UNIX)"; /* (index.php) -- filemanger upload select */
$extract_tar_bz2="extrahera ett *.tar.bz2-arkiv (UNIX)"; /* (index.php) --  */
$extract_gz="zip-extrahera med gzip (UNIX)"; /* (index.php) -- filemanger upload select */
$extract_zip="zip-extrahera med unzip (UNIX)"; /* (index.php) -- filemanger upload select */
$extract_winzip="zip-extrahera med pkzip (WINDOWS WINZIP)"; /* (index.php) -- filemanger upload select */
$new_group_success_msg="! Grupp tillagd !"; /* (admin.php) -- redirect message */
$mod_group_success_msg="! Grupp modfierad !"; /* (admin.php) -- redirect message */
$del_group_success_msg="! Grupp borttagen !"; /* (admin.php) -- redirect message */
$mod_cat_success_msg="! Kategori modfierad !"; /* (admin.php) -- redirect message */
$del_cat_success_msg="! Kategori borttagen !"; /* (admin.php) -- redirect message */
$href_groups="Klicka f&ouml;r att l&auml;gga till eller modifiera grupper"; /* (build_user_conf/build_folder_conf) -- href message to group management */
$del_warning="VARNING: Du m&aring;ste logga in med ditt nya konto!"; /* (build_user_conf.php) -- java popup to notify admin user */
$href_to_folder_conf="tillbaka till mapphanteringen"; /* (build_user_conf.php) -- navi href  */
$href_to_user_conf="tillbaka till anv&auml;ndarhanteringen"; /* (build_user_conf.php) -- navi href  */
$header_new_group="L&auml;gg till ny grupp"; /* (build_user_conf.php) -- table header */
$header_groupname="Gruppnamn"; /* (build_user_conf.php) -- table header */
$button_addgroup="L&auml;gg till grupp"; /* (build_user_conf.php) -- submit button */
$header_mod_group="Modifiera/ta bort grupper"; /* (build_user_conf.php) -- table header */
$mod_group_header="Modifiera grupp"; /* (build_user_conf.php) -- table header */
$del_group_header="Ta bort grupp"; /* (build_user_conf.php) -- table header */
$search_to_short="S&ouml;kstr&auml;ng f&ouml;r kort, den m&aring;ste vara &aring;tminstone 2 tecken l&aring;ng!"; /* (search.php) --  */
$general_thumb_size="&Auml;ndra miniatyrbildsstorlek"; /* (build_general_conf.php) -- thumbsize stuff */
$general_thumb_size_info="<-- St&auml;ll in maxstorlek p&aring; miniatyrbild i pixlar"; /* (build_general_conf.php) -- thumbsize stuff */
$general_thumb_border="Aktivera/Avaktivera ram runt miniatyrbilder"; /* (build_general_conf.php) -- thumb border stuff */
$general_thumb_border_info="<-- Aktivera f&ouml;r att f&aring; ram runt miniatyrbilder"; /* (build_general_conf.php) -- thumb border stuff */
$inst_thumbsize_header="V&auml;lj storlek p&aring; miniatyrbilder"; /* (third_stage_install.php) -- thumb size stuff */
$inst_thumbborder_header="Ram-inst&auml;llningar"; /* (third_stage_install.php) -- thumb border stuff */
$inst_thumbborder_enable="aktivera bildram"; /* (third_stage_install.php) -- thumb border checkbox msg */
$inst_thumbborder_disable="avaktivera bildram"; /* (third_stage_install.php) -- thumb border checkbox msg */
$safemode_active_msg="Inte bra, du har konfigurerat PHP till att anv&auml;nda \"safe_mode\"-restriktioner!<br>"; /* (sec_stage_install.php) --  */
$safemode_active_msg2="+ Om det &auml;r m&ouml;jligt, Avaktivera funktionen \"safe_mode\" i PHP.ini"; /* (sec_stage_install.php) --  */
$general_anon_post="Till&aring;t/till&aring;t ej anonyma inl&auml;gg"; /* (build_general_conf.php) --  */
$general_anon_post_info="<-- Anonyma anv&auml;ndare har till&aring;telse att l&auml;gga till kommentarer"; /* (build_general_conf.php) --  */
$stats_over_comment="Inlagda kommentarer"; /* (build_stats.php) --  */
$top10_downs_href="visa de 10 popul&auml;raste nerladdningarna"; /* (build_stats.php) --  */
$top10_views_href="visa de 10 mest visade"; /* (build_stats.php) --  */
$stats_head_downs="Nerladdning Topp 10"; /* (build_stats.php) --  */
$no_downloads="Antal nerladdningar"; /* (build_stats.php) --  */
$general_anon_download="Aktivera/avaktivera anonyma nerladdningar"; /* (build_genera_config.php) --  */
$general_anon_download_info="<-- visa/g&ouml;m l&auml;nk f&ouml;r nerladding av bilder"; /* (build_general_config.php) --  */
$seach_multiple_select_use="Anv&auml;nd f&ouml;ljande vid markering av flera"; /* (search.php) --  */
$search_and="AND"; /* (search.php) --  */
$search_or="OR"; /* (search.php) --  */
$search_categories="Kategorier"; /* (search.php) --  */
$search_with_available_filters="Med tillg&auml;ngliga filter"; /* (search.php) --  */
$search_select_album="V&auml;lj album"; /* (search.php) --  */
$search_date_from_to="Datum fr&aring;n / till"; /* (search.php) --  */
$search_combination_and_or="I kombination med AND och OR"; /* (search.php) --  */
$new_user_new_password="Nytt l&ouml;senord"; /* (build_user_conf.php) --  */
$new_user_error4="Anv&auml;ndarnamn kan inte vara tomt"; /* (admin.php) --  */
$new_user_error5="Anv&auml;ndarnamn finns redan"; /* (admin.php) --  */
$new_user_error1="Gammalt l&ouml;senord &auml;r ej korrekt"; /* (admin.php) --  */
$new_user_error2="Det nya l&ouml;senordet matchar inte varandra"; /* (admin.php) --  */
$new_user_error3="Eposten &auml;r ej korrekt"; /* (admin.php) --  */
$new_user_old_password="Gammalt l&ouml;senord"; /* (admin.php) --  */
$new_user_retype_password="Skriv om det nya l&ouml;senordet"; /* (admin.php) --  */
$select_db_header="V&auml;lj typ av databas"; /* (sec_stage_install.php) --  */
$mysql_info="V&auml;lj detta f&ouml;r att anv&auml;nda en MySQL-databas"; /* (sec_stage_install.php) --  */
$postgres_info="V&auml;lj detta f&ouml;r att anv&auml;nda en PostgreSQL-databas. Se"; /* (sec_stage_install.php) -- reads: ...Please see info */
$login_autologin="Autoinlogging"; /* (toc.php) --  */
$login_autologin_user="Autoinlogging Anv&auml;ndarinfo"; /* (toc.php) --  */
$toc_timer="Timer"; /* (toc.php) --  */
$general_autologin="Aktivera/avaktivera autoinlogging"; /* (build_general_conf.php) --  */
$general_autologin_info="<-- aktivera f&ouml;r att anv&auml;nda autoinlogging"; /* (build_general_conf.php) --  */
$general_timer="Aktivera/avaktivera timer"; /* (build_general_conf.php) --  */
$general_timer_info="<-- aktivera visning av renderingstiden i fotnoten"; /* (build_general_conf.php) --  */
$login_autlogin="Autoinloggning"; /* (login.php) --  */
$lostpw_title="Tappat bort l&ouml;senord"; /* (login.php) --  */
$lostpw_question="Tappat bort ditt l&ouml;senord?"; /* (login.php) --  */
$lostpw_type_user_or_email="Skriv in ditt anv&auml;ndarnamn ELLER den epost-adress du angivit innan"; /* (login.php) --  */
$lostpw_email1="N&aring;gon har anv&auml;nt funktionen f&ouml;r borttappat l&ouml;senord. Om det inte &auml;r du kan du ignorera detta meddelande. Om det var du ska du skriva in f&ouml;ljande kod i r&auml;tt f&auml;lt:"; /* (login.php) --  */
$lostpw_email1_part2="(OBS! Kom ih&aring;g att detta INTE &auml;r ditt nya l&ouml;senord!)"; /* (login.php) --  */
$lostpw_email1_part3="Er Linpha-Administrat&ouml;r"; /* (login.php) --  */
$lostpw_email_error="Fel: Epost-meddelandet kunde inte skickas. Kontakta administrat&ouml;ren."; /* (login.php) --  */
$lostpw_error_nothing_found="Inget anv&auml;ndarnamn eller l&ouml;senord har hittats med dina kriterier."; /* (login.php) --  */
$lostpw_email_sent="Ett epost-meddelande har skickats till dig."; /* (login.php) --  */
$lostpw_should_receive="Du borde f&aring; det inom ett par minuter. Skriv in koden fr&aring;n epost-meddelandet i detta f&auml;lt:"; /* (login.php) --  */
$lostpw_go_back="G&aring; tillbaka"; /* (login.php) --  */
$lostpw_email2="L&ouml;senordet har &auml;ndrats. Ditt nya l&ouml;senord &auml;r:"; /* (login.php) --  */
$lostpw_email2_part2="Du kan &auml;ndra det senare genom att klicka p&aring; l&auml;nken \"mina inst&auml;llningar\*."; /* (login.php) --  */
$lostpw_new_password="Nytt l&ouml;senord"; /* (login.php) --  */
$lostpw_successfully_changed="L&ouml;senordet har &auml;ndrats, du borde f&aring; ett epost-meddelande inom ett par minuter med ditt nya l&ouml;senord."; /* (login.php) --  */
$lostpw_error_wrong_code="Det var fel."; /* (login.php) --  */
$lostpw_enter_correct_code="Skriv in koden fr&aring;n epostmeddelandet i detta f&auml;lt:"; /* (login.php) --  */
$lang_plugins['plugins']="LinPHA Instickprogram"; /* (admin.php) --  */
$lang_plugins['watermark']="Vattenst&auml;mpel"; /* (admin.php, toc.php) --  */
$lang_plugins['benchmark']="Prestandatest"; /* (admin.php, toc.php) --  */
$lang_plugins['sql']="DB-Hantering"; /* (admin.php, toc.php) --  */
$lang_plugins['active_plugins']="Aktiva Instickprogram"; /* (admin.php) --  */
$lang_plugins['enabled']="Aktiverad"; /* (plugins.php) --  */
$lang_plugins['disabled']="Avaktiverad"; /* (plugins.php) --  */
$lang_plugins['update']="Uppdatera"; /* (plugins.php) --  */
$lang_plugins['plugins_updated']="Instickprogram uppdaterade"; /* (admin.php, plugins.php) --  */
$wm_wm_man="Hantering av Vattenst&auml;mpel "; /* (watermark.php) --  */
$wm_disable="Avaktivera Vattenst&auml;mpel "; /* (watermark.php) --  */
$wm_change_example_img="Byt bildexempel "; /* (watermark.php) --  */
$wm_no_input_files_found="Inga inmatningsfiler hittades "; /* (watermark.php) --  */
$wm_image_quality="Bildkvalitet (endast f&ouml;rhandsgranskningen) "; /* (watermark.php) --  */
$wm_enable_text="Axtivera: Text "; /* (watermark.php) --  */
$wm_text="Text "; /* (watermark.php) --  */
$wm_font="Typsnitt "; /* (watermark.php) --  */
$wm_fontsize="Typsnittsstorlek "; /* (watermark.php) --  */
$wm_fontcolor="Typsnittsf&auml;rg "; /* (watermark.php) --  */
$wm_align="Placering "; /* (watermark.php) --  */
$wm_pos_hor="Horisontell position "; /* (watermark.php) --  */
$wm_pos_ver="Vertikal position "; /* (watermark.php) --  */
$wm_height="H&ouml;jd p&aring; textf&auml;lt "; /* (watermark.php) --  */
$wm_width="Bredd p&aring; textf&auml;lt "; /* (watermark.php) --  */
$wm_shadow_size="Storlek p&aring; skugga "; /* (watermark.php) --  */
$wm_shadow_color="F&auml;rg p&aring; skugga "; /* (watermark.php) --  */
$wm_enable_image="Aktivera: Bild"; /* (watermark.php) --  */
$wm_available_images="Tillg&auml;ngliga bilder"; /* (watermark.php) --  */
$wm_no_images_found="Inga bilder hittade"; /* (watermark.php) --  */
$wm_dissolve="Toning"; /* (watermark.php) --  */
$wm_preview="F&ouml;rhandsgranska"; /* (watermark.php) --  */
$wm_linebreak="f&ouml;r radbyte"; /* (watermark.php) --  */
$wm_enable_shadow="Aktivera skugga"; /* (watermark.php) --  */
$wm_enable_rectangle="Aktivera rektangel"; /* (watermark.php) --  */
$wm_rectangle_color="F&auml;rg"; /* (watermark.php) --  */
$wm_enable_ext_shadow="Aktivera ut&ouml;kad skugga"; /* (watermark.php) --  */
$wm_status="Status"; /* (watermark.php) --  */
$wm_enabled="aktiverad"; /* (watermark.php) --  */
$wm_disabled="avaktiverad"; /* (watermark.php) --  */
$wm_restore_to="&Aring;terst&auml;ll till"; /* (watermark.php) --  */
$wm_inital_settings="standardinst&auml;llningen"; /* (watermark.php) --  */
$wm_add_more_examples="Du kan l&auml;gga till fler exempelbilder i mappen"; /* (watermark.php) --  */
$wm_example="Exempel"; /* (watermark.php) --  */
$wm_shadow_fontsize="Typsnittsstorlek p&aring; skugga"; /* (watermark.php) --  */
$wm_settings_for_both="Inst&auml;llningar f&ouml;r bild och text"; /* (watermark.php) --  */
$wm_center="centrerad"; /* (watermark.php) --  */
$wm_north="&ouml;verst"; /* (watermark.php) --  */
$wm_northeast="&ouml;verst till h&ouml;ger"; /* (watermark.php) --  */
$wm_northwest="&ouml;verst till v&auml;nster"; /* (watermark.php) --  */
$wm_south="l&auml;ngst ner"; /* (watermark.php) --  */
$wm_southeast="l&auml;ngst ner till h&ouml;ger"; /* (watermark.php) --  */
$wm_southwest="l&auml;ngst ner till v&auml;nster"; /* (watermark.php) --  */
$wm_east="h&ouml;ger"; /* (watermark.php) --  */
$wm_west="v&auml;nster"; /* (watermark.php) --  */
$bm_file_err="Fel, ingen fil specificerad";
$bm_var_err="Fel, kontrollera variablerna";
$bm_notfound_err="Fel, filen kunde inte hittas";
$bm_noimg_err="Fel, filen &auml;r inte en bild";
$bm_tmpfile_err="Fel vid skapandet av tempor&auml;r bildfil";
$bm_tmpfile_warn="Varning: Tempor&auml;r bild kunde inte tas bort";
$bm_time_total="Total exekveringtid: ";
$bm_img_sec="Bilder per sekund: ";
$bm_avg_img="Ungef&auml;rlig tid f&ouml;r varje bild (f&ouml;rflytta musen &ouml;ver bilden f&ouml;r att uppdatera den): ";
$bm_qual_size="Kvalitet/Storlek";
$bm_quality="Kvalitet: ";
$bm_height="H&ouml;jd: ";
$bm_width="Bredd: ";
$bm_size="Bildstorlek: ";
$bm_create = "Utf&ouml;r prestandatest med konverteringsverktyget";
$bm_interval = "intervall";
$bm_calc = "Kalkylerar";
$bm_img = "Bilder";
$bm_inloop="Utf&ouml;r loop";
$bm_qual_range="Kvalitetsomf&aring;ng: ";
$bm_size_range="Storleksomf&aring;ng (endast h&ouml;jd): ";
$bm_repeats="&Aring;terupprepningar: ";
$bm_con_util="V&auml;lj konverteringsverktyg: ";
$bm_current_settings="Aktuella inst&auml;llningar"; /* (benchmark.php) --  */
$bm_preview="F&ouml;rhandsgranska"; /* (benchmark.php) --  */
$bm_save_settings="Spara dessa inst&auml;llningar"; /* (benchmark.php) --  */
$wm_addexamples="Vattenst&auml;mpel: L&auml;gg till fler exempelbilder"; /* (watermark.php) --  */
$wm_addimg="Vattenst&auml;mpel: L&auml;gg till fler bilder f&ouml;r vattenst&auml;mpel"; /* (watermark.php) --  */
$wm_addfont="Vattenst&auml;mpel: L&auml;gg till fler typsnitt"; /* (watermark.php) --  */
$wm_colorsetting="Vattenst&auml;mpel: F&auml;rginst&auml;llningar"; /* (watermark.php) --  */
$comment_hint="TIPS: klicka p&aring; &ouml;vre eller undre bilden f&ouml;r att rulla albumet"; /* (linpha_comments.php) --  */
$comment_end="inga fler bilder i albumet"; /* (linpha_comments.php) --  */
$comment_beginning="inga fler f&ouml;reg&aring;ende bilder i albumet"; /* (linpha_comments.php) --  */
$comment_back="tillbaka till bildvyn"; /* (linpha_comments.php) --  */
$comment_edit_img="Redigera kategori/kommentar"; /* (linpha_comments.php) --  */
$comment_change_img_details="&Auml;ndra bilddetaljer"; /* (linpha_comments.php) --  */
$comment_last_comments="Senaste kommentarer"; /* (linpha_comments.php) --  */
$comment_comment_by="kommentar av"; /* (linpha_comments.php) --  */
$category_delete_warning="Varning: Kategorier &auml;r redan kopplade till bilder"; /* (build_category_conf.php) --  */
$pass_2_short="Fel, l&ouml;senord m&aring;ste vara minst 3 tecken l&aring;nga..."; /* (various) --  */
$album_edit="Redigera kommentar p&aring; album"; /* (linpha_comments.php) --  */
$album_details="Albumdetaljer"; /* (linpha_comments.php) --  */
$wm_save_note="Notera: Vattenst&auml;mplar &auml;r INTE synliga f&ouml;r registrerade anv&auml;ndare! Du m&aring;ste logga ut f&ouml;rst (vara g&auml;st) f&ouml;r att se vattenst&auml;mplar!"; /* (watermark.php) --  */
$lang_plugins['guestbook']="G&auml;stbok"; /* (admin.php) --  */
$print_low_quality="L&aring;g kvalitet"; /* (printing_view.php) --  */
$print_high_quality="H&ouml;g kvalitet (lngsamt!)"; /* (printing_view.php) --  */
$gb_title="LinPHA G&auml;stbok";
$gb_sign="LinPHA G&auml;stbok! L&auml;gg till nytt meddelande";
$gb_from="Plats";
$gb_from_no="Ingen plats angiven";
$gb_pages="sidor";
$gb_messages="meddelanden i g&auml;stboken";
$gb_msg_error="Namn och kommentar kan inte vara tomt";
$gb_new_msg="L&auml;gg till nytt meddelande";
$gb_name="Namn";
$gb_email="Email";
$gb_hp="Hemsida";
$gb_country="Var kommer du ifr&aring;n (land)";
$gb_header="LinPHA G&auml;stbok";
$gb_opts="G&auml;stboksinst&auml;llningar";
$gb_rows="Antal inl&auml;gg per sida";
$gb_anon="Till&aring;t anonyma g&auml;stboksinl&auml;gg";
$gb_order="Sortera inl&auml;gg";
$wm_resize="Skala alltid vattenst&auml;mpeln till X% av bildstorleken"; /* (watermark.php) --  */
$wm_help_and_descr="Hj&auml;lp och beskrivning"; /* (watermark.php) --  */
$folder_remove_hint="Om allt gick bra ska du nu ta bort undermappen /install (s&auml;kerhetssk&auml;l)..."; /* (forth_stage_install.php) --  */
$add_alb_com="L&auml;gg till kommentar p&aring; album"; /* (img_view.php) --  */
$add_img_com="L&auml;gg till kommentar p&aring; bild"; /* (img_view.php) --  */
$album_com="Albumkommentar"; /* (*_stage_album.php) --  */
$formatting_possibilities="Formateringstaggar f&ouml;r HTML"; /* (various) --  */
$stat_cache_elements="Cachade bitar"; /* (build_stats.php) --  */
$stat_cache_first="Nya Cachade bitar"; /* (build_stats.php) --  */
$stat_cache_hits="Cachetr&auml;ffar"; /* (build_stats.php) --  */
$stat_cache_hits_max="Max tr&auml;ffar (enstaka bild)"; /* (build_stats.php) --  */
$stat_cache_hits_avg="Cachetr&auml;ffsmedel (alla bilder)"; /* (build_stats.php) --  */
$stat_cache_size="Cachestorlek"; /* (build_stats.php) --  */
$stat_cache_convert_time="Hastighets&ouml;kning med cache"; /* (build_stats.php) --  */
$stat_cache_size="Cachestorlek anv&auml;nt"; /* (build_stats.php) --  */
$cache_options="Inst&auml;llningar f&ouml;r bildcache";
$cache_max_size="Max cachestorlek i bytes (0 = obegr&auml;nsad)";
$path_2_cache="Cachemapp (f&ouml;rvalt /sql/cache)";
$cache_optimize="Optimisera/Rensa bildcachedata"; 
$cache_maintain="Bildcache-underh&aring;ll";
$cache_opt_msg="!! Cache optimiserad !!";
$lang_plugins['cache']="Bildcache"; /* () --  */
$stat_cache_title="Statistik bildcache"; /* (cache.php) --  */
$bm_saved="Inst&auml;llningar sparade"; /* (admin.php) --  */
$cache_optimize_by_size="Ta bort all cache d&auml;r storlek (i kb) >="; /* (cache.php) --  */
$cache_optimize_by_date="Ta bort all cache som inte anv&auml;nts p&aring; antal dagar:"; /* (cache.php) --  */
$elements_rem="Borttaget"; /* (cache.php) --  */
$general_anon_album_downs="Till&aring;t/till&aring;t inte anonyma nerladdningar av zippade album"; /* (build_general_conf.php) --  */
$general_anon_album_downs_info="<-- anonyma &auml;r till&aring;tna att ladda ner zippade album"; /* (build_general_conf.php) --  */
$general_download_speed="Hastighetsbegr&auml;nsning p&aring; nerladdningar i kb/sec (0 = obegr&auml;nsad)"; /* (build_general_conf.php) --  */
$general_download_speed_info="<-- hastighetsbegr&auml;nsning p&aring; album-nerladdningar"; /* (build_general_conf.php) --  */
$general_navigation="Aktivera/avaktivera navigationsmeny"; /* (build_general_conf.php) --  */
$general_navigation_info="<-- aktivera navigeringsmenyn p&aring; tumnagelsidor"; /* (build_general_conf.php) --  */
$toc_navigation="Aktivera/avaktivera navigationsmeny"; /* (doc/) --  */
$toc_zip_download="Aktivera/avaktivera anonyma album-nerladdningar"; /* (doc/) --  */
$toc_albdownlimit="Hastighetsbegr&auml;nsning p&aring; nerladdningar"; /* (doc/) --  */
$choose_zips_msg="V&auml;lj bilder att ladda ner"; /* (build_zip_view.php) --  */
$zip_button="Ladda ner arkiv"; /* (build_zip_view.php) --  */
$type_of_archive="V&auml;lj arkiveringsmetod"; /* (build_zip_view.php) --  */
$create_tar="skapa tar-arkiv"; /* (build_zip_view.php) --  */
$create_tgz="skapa tar.gz-arkiv"; /* (build_zip_view.php) --  */
$create_bz2="skapa tar.bz2-arkiv"; /* (build_zip_view.php) --  */
$create_zip="skapa zip-arkiv"; /* (build_zip_view.php) --  */
$create_rar="skapa rar-arkiv"; /* (build_zip_view.php) --  */
$menumsg['advanced']="Avancerade val"; /* () --  */
$menumsg['printmode']="Utskriftsvy"; /* () --  */
$menumsg['printprobs']="Utskrift avaktiverad?"; /* () --  */
$menumsg['downloadmode']="Nerladdningsvy"; /* () --  */
$menumsg['mailmode']="Mailvy"; /* () --  */
$menumsg['addcomment']="L&auml;gg till albumkommentar"; /* () --  */
$menumsg['delcomment']="Ta bort albumkommentar"; /* () --  */
$menumsg['editcomment']="Redigera albumkommnetar"; /* () --  */
$album_up="uppdaterad"; /* (album_comment.php) --  */
$album_ins="inlagd"; /* (album_comment.php) --  */
$mail_link="mailinglista"; /* (header.php) --  */
$mail_title="LinPHA Mailinglista"; /* (mail.php) --  */
$mail_send_link="Skicka Mail"; /* (mail.php) --  */
$mail_return_address="Returneringsadress:"; /* (mail.php) --  */
$mail_block="Blockstorlek mail:"; /* (mail.php) --  */
$mail_block_help="antal mail i ett block innan paus f&ouml;r att undvika PHP-timeouts."; /* (mail.php) --  */
$mail_options="Val mailinglista"; /* (mail.php) --  */
$mail_go_back="G&aring; tillbaka"; /* (various mail plugin files) --  */
$mail_form_title="E-Mailmeddelande"; /* (mail_form.php) --  */
$mail_form_subject="&auml;mne:"; /* (mail_form.php) --  */
$mail_form_msg="Meddelande:"; /* (mail_form.php) --  */
$mail_total_sent="Totala antalet skickade mail:"; /* (mail_form.php) --  */
$mail_subscribe="Prenumerera"; /* (mail_users.php) --  */
$mail_unsubscribe="Avprenumerera"; /* (mail_users.php) --  */
$mail_activate="Aktivera"; /* (mail_users.php) --  */
$mail_user_name="Ditt namn:"; /* (mail_users.php) --  */
$mail_user_email="Din e-mail:"; /* (mail_users.php) --  */
$mail_user_email_confirm="Bekr&auml;fta e-mail:"; /* (mail_users.php) --  */
$mail_user_code="Aktiveringskod:"; /* (mail_users.php) --  */
$mail_user_code_sent="Ett e-mail med aktiveringskoden har skickats till din e-mailadress."; /* (mail_users.php) --  */
$mail_user_code_subject="LinPHA mailinglistsaktivering"; /* (mail_users.php) --  */
$mail_user_activated="Ditt konto har blivit aktiverat!"; /* (mail_users.php) --  */
$mail_user_activate_error="Fel vid aktivering av ditt konto!"; /* (mail_users.php) --  */
$mail_user_email_not_found="finns INTE i v&aring;r mailinglista."; /* (mail_users.php) --  */
$mail_user_remove_ok="borttagen fr&aring;n v&aring;r mailinglista."; /* (mail_users.php) --  */
$mail_user_remove_fail="kunde tas bort fr&aring;n v&aring;r mailinglista."; /* (mail_users.php) --  */
$mail_user_empty="Fyll i alla f&auml;lt."; /* () --  */
$mail_user_no_match="E-mailadresserna matchar inte varandra."; /* () --  */
$mail_user_exists="E-mailadressen finns redan i v&aring;r mailinglista."; /* (mail_users.php) --  */
$lang_plugins['mail']="Mailinglista"; /* (admin.php) --  */
$mail_activate_message="Hej %s,\n\nSkriv in dessa uppgifter f&ouml;r att aktivera ditt mailinglistskonto.\n\nAktiveringskod: %s\n\nTack!\nWebmaster"; /* (submit_users.php) -- dont delete the %s and the \n ! */
$mail_hint="Ledtr&aring;d"; /* (mail.php) --  */
$mail_user_permission="Alla anv&auml;ndare i gruppen 'mail' kan skicka mail till mailinglistan."; /* (mail.php) --  */
$mail_current_subscribers="Nuvarande prenumeranter"; /* (mail.php) --  */
$mail_name="Namn"; /* (mail.php) --  */
$mail_mail="Email"; /* (mail.php) --  */
$mail_subscribing_date="Prenumereringsdatum"; /* (mail.php) --  */
$mail_active="Aktivera"; /* (mail.php) --  */
$mail_sent_to="Email skickat till"; /* (mail.php) --  */
$mail_replace_words="<b>[Namn]</b> och <b>[Email]</b> blir ersatt med namn och epostadress av den specificerade anv&auml;ndaren."; /* (form_mailing.php) --  */
$misc_help="Diverse hj&auml;lp"; /* () --  */
$mail_create_group="(Du m&aring;ste skapa gruppen 'mail' sj&auml;lv.)"; /* (mail.php) --  */
$alb_th="Undermappar i album"; /* (*_stage_album.php) -- overwrites old (wrong) entry */
$arr_month_short = Array('1' => 'Jan','2' => 'Feb','3' => 'Mar','4' => 'Apr','5' => 'Maj','6' => 'Jun','7' => 'Jul','8' => 'Aug','9' => 'Sep','10' => 'Okt','11' => 'Nov','12' => 'Dec'); /* abrevations of months */
$arr_month_long = Array('1' => 'Januari','2' => 'Februari','3' => 'Mars','4' => 'April','5' => 'Maj','6' => 'Juni','7' => 'Juli','8' => 'Augusti','9' => 'September','10' => 'Oktober','11' => 'November','12' => 'December'); /* months */
$arr_day_short = Array('S&ouml;n','M&aring;n','Tis','Ons','Tor','Fre','L&ouml;r'); /* abrevations of weekdays */
$arr_day_long = Array('S&ouml;ndag','M&aring;ndag','Tisdag','Onsdag','Torsdag','Fredag','L&ouml;rdag'); /* weekdays */
/*
If the time and date format in your country is different with these formats,
please uncomment these lines and set it to the right format. Otherwise, leave
it as it is. See http://www.php.net/manual/en/function.strftime.php for definitions.
(Don't apply this to the english language file, the default date and time format are
set in the options page of linpha. This is because the date format is different within
the english spoken countries.)
*/
$date_format = "%a %Y/%m/%d";
$time_format = "%H:%M:%S";

$layout="Layout";
$features="Finesser";
$perform="Prestanda";
$general_comment_in_subfolder = 'Aktivera/avaktivera albumkommentar i undermapp';
$general_comment_in_subfolder_info = '<-- visar albumkommentarer i f&ouml;rhandsvisning av undermappar';
$general_default_date_format = 'F&ouml;rvalt datumformat';
$general_default_date_format_info = '<- exempel: 2004/06/28, se info f&ouml;r detaljer';
$general_default_time_format = 'F&ouml;rvalt tidsformat';
$general_default_time_format_info = '<- exempel: 23:45:50, se info f&ouml;r detaljer';
$general_new_images_folder = 'Virtuell "Nya Bilder"-mapp';
$general_new_images_folder_info = '<- visar en virtuell mapp med nyligen tillagda bilder';
$general_new_images_folder_age = '&aring;lder i dagar p&aring; "Nya Bilder"-mappen';
$general_new_images_folder_age_info = '<- max &aring;lder p&aring; bilder som skall visas';
$control_key="Ctrl"; /* (various) --  */
$search_date="Datum"; /* (search.php) -- reads: date from to... */
$search_from="fr&aring;n"; /* (search.php) -- reads: date from to... */
$search_to="till"; /* (search.php) -- reads: date from to... */
$start_slide="Starta Slideshow"; /* (img_view.php) --  */
$pass_msg="Du m&aring;ste logga in med ditt nya l&ouml;senord"; /* (build_my_settings.php) --  */
$str_new_images = "Nya Bilder"; /* (new_images.php) -- */
$str_order_by = "Sortera i"; /* (new_images.php) -- */
$str_age = "&aring;lder"; /* (new_images.php) -- */
$str_album = "Album"; /* (new_images.php) -- */
$str_in_album = "I album"; /* (new_images.php) -- */
$str_img_newer_than = "alla bilder nyare &auml;n %s dagar"; /* (new_images.php) -- */
$timespanfmt = "%s dagar, %s timmar, %s minuter och %s sekunder";  /* (new_images.php) -- */
$str_delete_all_cached_images_with_watermarks="Ta bort alla cachade bilder med vattenst&auml;mpel"; /* (watermark.php) --  */
$str_error_changing_perm="FEL, filr&auml;ttigheterna kunde inte &auml;ndras! (Du kanske inte har r&auml;ttigheter)"; /* (plugins/ftp/index.php) --  */
$str_change_perm="&auml;ndra r&auml;ttigheterna p&aring;:"; /* (plugins/ftp/index.php) --  */
$str_read="L&auml;s"; /* (plugins/ftp/index.php) --  */
$str_write="Skriv"; /* (plugins/ftp/index.php) --  */
$str_execute="Exekvera"; /* (plugins/ftp/index.php) --  */
$str_owner="&auml;gare"; /* () --  */
$str_group="Grupp"; /* (plugins/ftp/index.php) --  */
$str_all_other="Alla andra"; /* (plugins/ftp/index.php) --  */
$str_copy="kopiera"; /* (plugins/ftp/index.php) --  */
$str_copy_to="Kopiera %s till:"; /* (plugins/ftp/index.php) --  */
$str_rename_to="D&ouml;p om %s till:"; /* (plugins/ftp/index.php) --  */
$str_rotation_disabled="Bildrotation avaktiverat"; /* (img_view.php) --  */
$str_no_write_perm="Inga skrivr&auml;ttigheter"; /* (img_view.php) --  */
$str_new_images_in_these_folders="Nya bilder funna i f&ouml;ljande album:"; /* (new_images.php) --  */
$str_reinstall_remove_dbconnect="Om du vill installera om  LinPHA, m&aring;ste du f&ouml;rst ta bort filen ./sql/db_connect.php! (Du kan g&ouml;ra detta med den integrerade filhanteraren i admindelen)"; /* (install_header.php) --  */
$str_Version="Version"; /* (sec_stage_install.php) --  */
$str_no_supported_database_activated="Fel: Inga supporterade databaser &auml;r aktiverade i din PHP-konfiguration"; /* (sec_stage_install.php) --  */
$str_extract_with="N&auml;r uppladdning &auml;r klar, packa upp arkivet med"; /* (ftp/index.php) --  */
$str_files_to_upload="Filer att ladda upp"; /* (ftp/index.php) --  */
$posix_check_msg="kontrollerar POSIX-support..."; /* (sec_stage_install.php) --  */
$posix_sum_found_msg="Hittade POSIX-support i din PHP-konfiguration. Alla funktioner i den integrerade filhanteraren &auml;r aktiverade."; /* (sec_stage_install.php) --  */
$posix_sum_miss_msg="Ingen POSIX-support hittad i din PHP-konfiguration. Vissa funktioner i den integrerade filhanteraren kan ej anv&auml;ndas (Speciellt &auml;ndring av filr&auml;ttigheter)."; /* (sec_stage_install.php) --  */
$mod_cache_fail="Fel: Inst&auml;llningar kunde inte sparas. Kontrollera att s&ouml;kv&auml;gen &auml;r stavad korrekt och att du har r&auml;ttigheter att skriva i din mappen."; /* (admin.php) --  */
$str_create_archive="skapa %s arkiv"; /* (build_zip_view.php) --  */
$str_download_error="Fel! Av n&aring;gon anledning kunde nerladdningen inte startas, f&ouml;rl&aring;t"; /* (build_zip_view.php) --  */
$str_search_all_images_taken="S&ouml;k efter alla bilder tagna %s"; /* (read_php_exif.php) --  */
$str_try_a_lower_resolution="Om det tar f&ouml;r l&aring;ng tid att ladda, testa en l&auml;gre uppl&ouml;sning:"; /* (image_panorama_view.php) --  */
$str_current_resolution="nuvarande uppl&ouml;sning:"; /* (image_panorama_view.php) --  */
$href_group_conf="Grupphantering"; /* (admin.php + build_user_conf.php) -- Admin menu item + table heading */
$href_tools_section="Verktyg:"; /* (admin.php) -- Tools section in admin menu */
$lang_plugins['plugin']="Plugin"; /* (plugin.php) --  */
$choose_mail_msg="V&auml;lj bilder att maila"; /* () --  */
$new_user_full_name="Namn"; /* (build_my_settings.php) -- And build_user_conf.php */
$href_category_conf="Kategorihantering"; /* (admin.php) --  */
$cat_private="Privat"; /* (build_category_conf.php) --  */
$lang_plugins['facetmap']="FacetMap"; /* (plugins.php) --  */
$str_add_more_apps="L&auml;gg till fler program"; /* (include/basket_zip.php, ftp/index.p) --  */
$session_check="kontrollerar godk&auml;nda sessions-inst&auml;llningar..."; /* (sec_stage_install.php) --  */
$session_save_handler_ok_msg="Session save handler correctly set."; /* (sec_stage_install.php) --  */
$session_save_handler_miss_msg="Session save handler NOT correctly set."; /* (sec_stage_install.php) --  */
$session_miss_msg="Sessionsinst&auml;llningarna &auml;r inte korrekt satta. Du m&aring;ste korrigera ovanst&aring;ende fel f&ouml;rst i php.ini, annars kommer LinPHA antagligen inte att fungera som det ska!!"; /* (sec_stage_install.php) --  */
$session_ok_msg="Alla sessionsinst&auml;llningar &auml;r korrekta. LinPHA borde fungera som det ska."; /* (sec_stage_install.php) --  */
$new_user_error6="Fel: Du anv&auml;nder inte ditt egna konto?!?"; /* (build_my_settings.php) --  */
$str_old_comments="Gamla kommentarer (dom tillh&ouml;r inte n&aring;gon bild l&auml;ngre):"; /* (build_stats.php) --  */
$str_last_viewed_page="Senast bes&ouml;kta sida:"; /* (index.php) --  */
$str_select_row="V&auml;lj rad"; /* (basket.php) --  */
$str_select="V&auml;lj"; /* (basket.php) --  */
$str_new_window="nytt f&ouml;nster"; /* (basket.php) --  */
$general_anon_mail_mode="Till&aring;t/till&aring;t inte mailvy f&ouml;r anonyma anv&auml;ndare"; /* (build_general_conf.php) --  */
$general_anon_mail_mode_info="<-- anonyma anv&auml;ndare &auml;r till&aring;tna att maila bilder"; /* (build_general_conf.php) --  */
$general_mail_mode_max_size="Mailvy: Max mailstorlek"; /* (build_general_conf.php) --  */
$general_mail_mode_max_size_info="<-- maxstorlek i bytes"; /* (build_general_conf.php) --  */
$general_thumbnail_view="Tumnagelsvy"; /* (build_general_conf.php) --  */
$general_image_view="Bildvy"; /* (build_general_conf.php) --  */
$general_ado_msg="Aktivera/avaktivera cachning av SQL-fr&aring;gor"; /* (build_general_conf.php) --  */
$general_ado_msg_info="<-- aktivera om en l&aring;ngsam SQL-server eller ingen PHP-accelerator anv&auml;nds"; /* (build_general_conf.php) --  */
$general_ado_time_msg="Tid att cacha SQL-fr&aring;gor:"; /* (build_general_conf.php) --  */
$general_ado_time_msg_info="<-- s&auml;tt maxtid av cachning i minuter"; /* (build_general_conf.php) --  */
$general_ado_path_msg="S&ouml;kv&auml;g till cache av SQL-fr&aring;gor:"; /* (build_general_conf.php) --  */
$general_ado_path_msg_info="<-- var dom cachade fr&aring;gorna ska lagras"; /* (build_general_conf.php) --  */
$str_other_features="Andra finesser"; /* (build_general_conf.php) --  */
$str_language_settings="Spr&aring;kinst&auml;llningar"; /* (build_general_conf.php) --  */
$str_sql_query_caching="Cachning av SQL-fr&aring;gor"; /* (build_general_conf.php) --  */
$general_thumb_border="Storlek p&aring; ram till tumnaglar (pixlar)"; /* (build_general_conf.php) --  */
$general_thumb_border_info="<-- 0 f&ouml;r inga ramar, standard: 5"; /* (build_general_conf.php) --  */
$general_thumb_border_color="Ramf&auml;rg f&ouml;r tumnaglar"; /* (build_general_conf.php) --  */
$general_thumb_border_color_info="<-- se info f&ouml;r detaljer"; /* (build_general_conf.php) --  */
$str_recipient="Till"; /* (basket_mail.php) --  */
$str_sender="Fr&aring;n"; /* (basket_mail.php) --  */
$str_mail_too_big="Fel: Mailet &auml;r f&ouml;r stort.<br /><br />Till&aring;ten storlek: %sBytes. De bilder du valt anv&auml;nder %sBytes.<br /><br />Ta bort n&aring;gra bilder eller anv&auml;nd funktionen ladda ner arkiv!"; /* (basket_mail.php) --  */
$str_size_of_email="Storlek p&aring; mail: %s."; /* (basket_mail.php) --  */
$str_new_search="Ny s&ouml;kning"; /* (search.php) --  */
$str_edit_search="Redigera s&ouml;kning"; /* (search.php) --  */
$str_View="Visa"; /* (img_view.class.php) --  */
$str_normal="normal"; /* (img_view.class.php) --  */
$str_detail="detalj"; /* (img_view.class.php) --  */
$search_result_empty="Ledsen, din s&ouml;kning gav inget resultat"; /* (search.php) --  */
$str_chars_entered="tecken skrivna"; /* (img_view.class.php) --  */
$str_information_lost="Viss information kommer f&ouml;rsvinna, skriv om ditt inl&auml;gg."; /* (img_view.class.php) --  */
$general_random_image="Aktivera/avaktivera slumpvist vald bild p&aring; framsidan"; /* () --  */
$general_random_image_info="<-- aktivera f&ouml;r att visa slumpvald bild p&aring; framsidan (index.php)"; /* () --  */
$general_random_image_size="Max storlek p&aring; slumpvald bild p&aring; framsidan (index.php)"; /* () --  */
$general_random_image_size_info="<-- s&auml;tt max bildstorlek i pixlar  "; /* () --  */
$str_edit_watermark="Redigera vattenst&auml;mpel"; /* (watermark.php) --  */
$str_edit_permissions="Redigera r&auml;ttigheter p&aring; vattenst&auml;mpeln"; /* () --  */
$str_Everyone="Alla"; /* () --  */
$str_Nobody="Ingen"; /* () --  */
$str_only_logged_in_users=" Endast inloggade anv&auml;ndare"; /* () --  */
$str_except_these_groups="f&ouml;rutom dessa grupper:"; /* () --  */
$str_additionally_groups="men f&ouml;r dessa gruppen:"; /* () --  */
$str_allow_these_persons="Inga vattenst&auml;mplar f&ouml;r f&ouml;ljande anv&auml;ndare/grupper"; /* () --  */
$str_album_based_permissions="Albumbaserade r&auml;ttigheter"; /* () --  */
$str_all_albums_but_without_these="Alla album, f&ouml;rutom dessa:"; /* () --  */
$str_only_on_these_albums="Bara p&aring; dessa album:"; /* () --  */
$str_allow_these_persons="Till&aring;t dessa personer"; /* (db_api.php) --  */
$str_no_watermarks="Inga vattenst&auml;mplar f&ouml;r dessa personer"; /* (db_api.php) --  */
$str_watermark_perm_part1="Definiera vattenst&auml;mplar f&ouml;r enskild anv&auml;ndare, flera anv&auml;ndare och/eller albumbaserade h&auml;r."; /* (watermark.php) --  */
$str_watermark_perm_part2="Standardinst&auml;llningen &auml;r 'Endast inloggade anv&auml;ndare OCH 'Alla album'."; /* (watermark.php) --  */
$str_watermark_perm_part3="Vilket inneb&auml;r att alla inloggade anv&auml;ndare ser bilder utan vattenst&auml;mpel i alla album."; /* (watermark.php) --  */
$inst_linpha_not_work_correctly="LinPHA kommer antagligen INTE fungera korrekt"; /* (sec_stage_install.php) --  */
$gd_jpg_missing_msg="Ditt system saknar jpeg-support i GDlib. JPEG-bilder kommer INTE fungera!"; /* (sec_stage_install.php) --  */
$general_video_thumbnail="F&ouml;rs&ouml;k skapa tumnaglar f&ouml;r videoklipp"; /* (build_generl_config.php) --  */
$general_video_thumbnail_info="<-- Avaktivera om du tr&auml;ffar p&aring; problem n&auml;r du skapar tumnaglar f&ouml;r videoklipp"; /* (build_generl_config.php) --  */
$general_update_notice="Aktivera/avaktivera uppdateringkontroll f&ouml;r LinPHA"; /* (build_generl_config.php) --  */
$general_update_notice_info="<-- aktivera f&ouml;r att kolla en g&aring;ng i vecka efter nya uppdateringar"; /* (build_general_config.php) --  */
$large="stor"; /* (build_general_config) -- selectfield for mini images size */
$directories="Mappar"; /* (build_thumbnail_conf.php) --  */
$do_nothing="G&ouml;r ingenting"; /* (build_thumbnail_conf.php) --  */
$create="Skapa"; /* (build_thumbnail_conf.php) --  */
$recreate="&aring;terskapa"; /* (build_thumbnail_conf.php) --  */
$exif_disabled_in_conf="EXIF-info avaktiverat i inst&auml;llningarna"; /* (build_thumbnail_conf.php) --  */
$iptc_disabled_in_conf="IPTC-info avaktiverat i inst&auml;llningarna"; /* (build_thumbnail_conf.php) --  */
$silent_mode="Tyst exekvering (skriv ingen debug-information)"; /* (build_thumbnail_conf.php) --  */
$just_thumb_msg="Tumnaglar"; /* (build_thumbnail_conf.php) --  */
$log_title="LinPHA-Loggaren"; /* (log.php) --  */
$log_options="Inst&auml;llningar f&ouml;r LinPHA-Loggaren"; /* (log.php) --  */
$log_method_label="Logga till:"; /* (log.php) --  */
$str_extra_headers="Extra Headers:"; /* (log.php) --  */
$str_log_events['login']="Anv&auml;ndarlogin"; /* (log.php) --  */
$str_log_events['thumbnail']="Skapa tumnagel"; /* (log.php) --  */
$str_log_events['update']="Uppdatera"; /* (log.php) --  */
$str_log_events['db']="DataBas"; /* (log.php) --  */
$str_log_events['filemanager']="Filhanterare"; /* (log.php) --  */
$str_events="H&auml;ndelser"; /* (log.php) --  */
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