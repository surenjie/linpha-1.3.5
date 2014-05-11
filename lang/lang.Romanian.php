<?php
/* language file */
/* Feel free to modify this file to make use of your native language.
If you do so, please save it as lang.YourLanguage.php in the LinPHA /lang dir
and PLEASE mail me a copy! mailto:bzrudi@tuxpower.de */

/*#################################################
## linpha messages
#################################################*/
/* left menu */
$album="Arhiva mea foto";

/* alerts */
$alert_fopen="Eroare! fila nu a putut fi deschisa...";
$printing_probs="Probleme de imprimare";
$printing_probs_msg="Imprimarea nu e valabila! vezi";

/* global messages */
$subfolders="subdirectoare";
$img_th="Fotografii";
$in_th="in"; /* used for the photos in $foldername */
$alb_th="Albume in subdirector";
$thumb_hint_msg="apasa pentru vedere detaliata";
$latest_photo="ultima";
$view_at="vezi la";
$close_button="inchide";
$help="ajutor";
$misc_help="Ajutor Diverse";

/*#################################################
## installation
#################################################*/
/* install.php (page 1) */
$welc_header="Bine ai venit la LinPHA";
$welc_text="Buna, bine ai venit la &quot;Arhiva Foto Linux&quot; aka LinPHA.
			Se pare ca e prima oara cand rulezi LinPHA, de aceea ai NEVOIE sa
			rulezi instalarea!.";
$welc_hint="<b>Inainte de a continua:</b>";
$welc_hint1="Creeaza directorul &quot;<b>linpha/sql</b>&quot; pentru a putea fi citit de catre oricine!
			(i.e. chmod 777 sql)";
$next_button="Continuare"; /* used as left menu header in all 4 stages */
$inst_msg="Instalare LinPHA"; /* used as left menu header in all 4 stages */
$inst_status_1="Selecteaza o limba si apasa &quot;Continuare&quot;";
$inst_status_step1="Pasul 1 din 4";

/* sec_stage_install (page 2) */
$inst_access_msg="Configureaza Tipul de Acces la Baza de Date";
$inst_full_access_msg="<b>DA !</b><br> Am drepturi depline de access la baza de date in MYSQL, Am dreptul sa creez o baza de date noua<br>
						si useri noi. Altfel spus: Asta e server-ul MEU!";
$inst_limited_access_msg="<b>NU !</b><br> Voi instala LinPHA cu acces limitat la<br>
						baza de date MySQL. Provider-ul nu permite creerea a noi baze de date si a noi useri.";
$inst_status_2="Alege tipul de access SQL, daca nu esti sigur specifica NU!";
$inst_status_step2="Pasul 2 din 4";

/* requirements */
$req_check_msg="Verificare cerinte sistem";
$req_found_msg="AM gasit";
$req_miss_msg="NU am gasit";
$req_safe_fail="ACTIVAT";
$req_safe_ok="DEZACTIVAT";
$php_safemode_check_msg="verificare mod de siguranta PHP ...";
$php_version_check_msg="verificare versiune PHP > 4.1.0...";
$mem_check_msg="verificare limita memorie PHP ...";
$gd_check_msg="verificare pentru librariile GD ...";
$convert_check_msg="verificare pentru ImageMagick...";
$exif_check_msg="verificare pentru suport EXIF ...";
$summary_msg="SUMAR:";
$safe_mode_err="Server-ul este configurat sa foloseasca PHP safe_mode. LinPHA nu va functiona
			 cat timp PHP safe_mode este activat in php.ini !";
$inst_abort_msg="!!! INSTALARE INTRERUPTA !!!";
$php_version_err="Server-ul ruleaza o versiune de PHP mai mica de 4.1.0. LinPHA nu va functiona
			 cat timp nu se pune o versiune de PHP mai noua de 4.1.0.";
$gd_convert_err="Nici ImageMagick si/sau librariile GD nu au putut fi gasite in sistem. LinPHA nu va functiona
			 cat timp nu se instaleaza ImageMagik sau GD.";
$convert_sum_found_msg="ImageMagick a fost gasit pe acest server. Acesta va permite LinPHA
			sa creeze thumbnail-uri de o foarte buna calitate.";
$convert_sum_miss_msg="ImageMagick NU a fost gasit pe acest server. Aceasta va duce la 
			thumbnail-uri de o calitate scazuta.";
$exif_sum_found_msg="Am gasit suport pentru EXIF in instalarea PHP. Acesta va permite LinPHA
			sa arate informatii detaliate ale pozelor.";

/* TODO (change this one)
$exif_sum_miss_msg="NU am gasit suport pentru EXIF in instalarea PHP. Aceasta va impedica LinPHA
			sa arate informatii detaliate ale pozelor.";
to ==>*/
$exif_sum_miss_msg="NU am gasit suport pentru EXIF in instalarea PHP. Se va folosi suportul EXIF inclus in LinPHA
			in locul suportului din PHP.";
/* TODO next 3 */
$session_path_check_msg="verificare pentru session_safe_path...";
$session_path_found_msg="calea pentru salvarea sesiunii este setata in php.ini. Logarea LinPHA ar trebui sa mearga corect. Calea este setata spre: ";
$session_path_miss_msg="NU am gasit valoarea pentru for session_save_path. TREBUIE setata valoarea session_save_path
			in php.ini sau NU va functiona sistemul de logare!!";
$mem_limit_ok_msg="Bine, limita de memorie PHP este >= 16MB. Nu ar trevui sa fie nici o problema
			cu creerea thumbnail-urilor.";
$mem_limit_low_msg="Hmmh, limita de memorie PHP este <=16MB. Daca sunt probleme 
			cu thumbnail-uri lipsa, incearca sa maresti memory_limit in php.ini sau redimensioneaza 
			fotografiile la o rezolutie mai joasa si incearca din nou...";
$choose_def_quali="Alege calitatea normala a pozelor";
$choose_def_quali_warn="NU seta pe calitate foarte mare daca procesorul este &lt; 1Ghz (incarcare procesor mare)";

/* third_stage_install (page 3) */
$inst_superadmin_header="Configureaza Administratorul bazei de Date in MySQL";
$inst_superadmin_name="Numele Admin-ului bazei de date MySQL:";
$inst_superadmin_name_info="&lt;-numele admin-ului bazei de date in MySQL (trebuie sa existe in baza de date)";
$inst_superadmin_pass="Parola Admin-ului bazei de date MySQL:";
$inst_superadmin_pass_info="&lt;-parola admin-ului bazei de date in MySQL (trebuie sa existe in baza de date)";

$inst_admin_header="Configureaza Administratorul LinPHA";
$inst_admin_name="Numele Admin LinPHA:";
$inst_admin_name_info="&lt;-nume Admin LinPHA";
$inst_admin_pass="Parola Admin LinPHA:";
$inst_admin_pass_info="&lt;-parola Admin LinPHA";
$inst_admin_email="Email Admin:";
$inst_admin_email_info="&lt;-seteaza adresa de email pentru Administrator";

$inst_db_header="Configureaza parametri bazei de date pentru conectarea LinPHA";
$inst_db_host="Hostname:";
$inst_db_host_info="&lt;-hostname: de obicei &quot;localhost&quot;";
$inst_db_host_info2="&lt;-hostname: adresa bazei de date MySQL";
$inst_db_host_port="Port:";
$inst_db_host_port_info="&lt;-portnumber: a se lasa asa in caz de nesiguranta";
$inst_db_name="Numele bazei de date LinPHA:";
$inst_db_name_info="&lt;-baza de date pentru LinPHA, de obicei &quot;linpha&quot;";
$inst_db_name2="Nume Baza de Date:";
$inst_db_name_info2="&lt;-numele bazei de date comunicata de catre provider";
$inst_table_prefix="\"Prefix\" pentru tabele LinPHA";
$inst_table_prefix_info="&lt;-\"Prefix\"ul pentru a fi folosit de toate tabelele LinPHA";

$general_header="Configurare Optiuni Generale";
$general_album_title="Titlu Album Foto";
$general_album_title_info="&lt;-Lasa gol pentru setare automata";
$general_photos_row="Numar de coloane aratate:";
$general_photos_row_info="&lt;-i.e. randuri de thumbnail-uri aratate";
$general_photos_col="Numar de columne aratate:";
$general_photos_col_info="&lt;-i.e. columne de thumbnail-uri aratate";
$general_photos_width="Marimea de vizualizare a fotografiei detaliate (latime):";
$general_photos_width_info="&lt;- 512 (marimea automata)";
$general_photos_height="Marimea de vizualizare a fotografiei detaliate (inaltime):";
$general_photos_height_info="&lt;- 384 (marimea automata)";
$general_img_quality="Calitatea fotografiei detaliate:";
$general_img_quality_info="&lt;- ajusteaza calitatea imaginii 0-100 (automat 75)";

$inst_status_3="Completeaza toate campurile!";
$inst_status_step3="Pasul 3 din 4";

/* forth_stage_install (page 4) */
$inst_status_4="Felicitari, instalarea este completa! LinPHA este acuam gata de folosire";
$inst_status_step4="Pasul 4 din 4";
$inst_submit="Terminare";
$inst_db_tryconn="Incerc sa ma conectez la baza de date";
$inst_db_tryconn_error="Eroare in timp ce am incercat sa ma conectez la baza de date, folosind:";
$inst_db_tryconn_ok="OK, conectat!";
$inst_db_tryinst="Incerc sa creez baza de date:";
$inst_db_tryinst_error="Eroare in timpu ce am incercat sa creez baza de date:";
$inst_db_tryinst_ok="OK, creata!";
$inst_create_tb_msg="OK, creez toate tabelele";

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
$inst_db_connect_inc_msg="Eroare de conectare la baza de date!";
$inst_db_connect_inc_msg1="Eroare in timp ce incercam sa selectez ".@$db_realname." din baza de date<br>
	Daca acest mesaj apare in timpul instalarii, trebuie STERS fisieruldb_connect.php<br>
	din subdirectorul &quot;sql&quot; al LinPHA!";
/* ------------------------------------------------------------------ */

$table_create="Creez tabelele:";
$table_create_error="Eroare in timp ce am incercat sa creez tabelele!";
$table_create_ok="OK, create!";
$table_insert_admin="Creez Admin folosind numele:";
$table_insert_admin_error="Eroare in timp ce am incercat sa creez contul de Admin!";
$table_insert_admin_ok="OK, creat!";
$write_db_config="Stochez configurarea bazei de date in fisierul:";
$fopen_error="Nu am putut deschide sql/db_config.php pentru scriere, executa chmod 777 si restarteaza instalarea";
$fopen_ok="OK, configuratie scrisa!";
$install_finish_msg="OK. Instalare completa!!";
$admin_task="apasa pentru a continua";
$file_create_ok="OK, creata!";
$configure_error="Completeaza toate campurile obligatorii!!!";
$could_not_open="Eroare, nu am putut deschide tabela users! Se pare ca nu am permisiuni de adaugare a noi useri la baza de date<br>
				Alege metoda instalarii cu acces limitat la pagina 2 in timpul instalarii.<br>";

/*#################################################
## header.php
#################################################*/
$page_title="LinPHA - Arhiva Foto Linux";
$head_title="Arhiva Foto Linux";
$book_home="index";
$book_about="despre";
$book_admin="admin";
$book_admin_user="setarile mele";
$book_links="link-uri";
$book_search="cautare";
$book_logout="iesire";
$book_login="autentificare";
$num_pictures="fotografii:";
$user_visits="vizite";
$user_online="useri intrati acuma";
$guest="vizitator";
$html_lang="ro";
$html_charset="iso-8859-1";

/*#################################################
## index.php
#################################################*/
$index_welc_text="Buna, bine ai venit la &quot;Arhiva Foto Linux&quot; aka LinPHA.
			Va rugam vizitati <a href='http://linpha.sf.net/'><u>Sourceforge</u></a> pentru noutati.";

/*#################################################
## search.php
#################################################*/
$search_header="Cautare LinPHA";
$radio_all="Toate";
$radio_descript="Descriere";
$radio_comment="Comentariu";
$radio_category="Categorie";
$radio_file="Fila";
$search_in="Cauta in Album";
$search_all="Toate Albumele";
$search_for="Criteriu Cautare";
$search_button="Cautare";
$photos_found="gasit";
$search_info="Pagina Cautare LinPHA";
$search_msg="Cauta Fotografii in baza de date LinPHA dupa:";

/*#################################################
## img_view.php
#################################################*/
$img_detail="Detalii imagine";
$img_size="marime reala";
$img_com="comentariu";
$img_des="descriere";
$img_cat="categorie";
$img_name="nume";
$img_info_stored="Comentarii scrise in baza de date";
$please_login="Va rugam sa va <a href='login.php'><font color='#000099'><u>autentificati</u></font></a> pentru a adauga un comentariu";
$back_to_thumbs="<b><u>inapoi la vederea thumbnail</u></b>";
$back_to_search="<b><u>inapoi la cautare</u></b>";
$button_next="urmatoarea";
$button_prev="precedenta";
$exif_ext_error="NU exista suport pentru EXIF in aceasta versiune de PHP, imi pare rau";
$exif_error="Imi pare rau, imaginea nu contine informatii EXIF!";
$exif_more="mai multe detalii";
$exif_less="mai putine detalii";
$detail_header="Fotografie";
$detail_header1="din";
$detail_header2="in directorul";
$php_to_old="PHP < 4.2.0 EXIF dezactivat!";
$views="vizualizari";
$slideshow="Prezentare";
$seconds="secunde";
$go="Mergi";
$stopslide="Opreste Prezentarea";
/* image rotating */ /* TODO next */
$img_rotate_ok="roteste poza";
$img_rotating="Probleme rotire imagine"; // TOC entry
$img_rotating_hint1="Rotire imagine DEZACTIVATA! click";
$img_rotating_hint2="ca sa vezi de ce";

/*#################################################
## login.php
#################################################*/
$login_msg="Te rog autentifica-te!";
$login_error="user sau parola necunoscute";
$login_name="Nume user";
$login_pass="Parola";
$login_info="Pagina autentificare LinPHA";
$login_request_account_info="Pentru a cere un cont nou:"; /* TODO change! */
$login_request_target="Contacteaza Administratorul LinPHA"; /* TODO */
$login_admin_info="Pentru a avea functii administrative autentifica-te cu contul de Administrator";
$login_friend_account_info="Daca ai deja contul unui &quot;prieten&quot; ,
poti modifica setarile tale personale aici";


/*#################################################
## admin.php
#################################################*/
/* other messages */
$admin_page_header="Administrare LinPHA";
$please_turn_off_msg="Seteaza 'Creere/stergere automata de thumbnails' OPRIT cand ai terminat de adaugat pozele.<br>
						LinPHA ar trebui sa mearga de 10 ori mai repede atunci :)";
/* left menu */
$logout_msg="Iesire";
$welc_msg="Bine ai venit ";
$stat_msg="Esti autorizat si ai functii administrative cum ar fi, adaugare de <b>comentarii</b> si descrieri la fotografii";
$back_to_msg="<b>inapoi la fotografii</b>";
$href_general_conf="Configurare Generala";
$href_user_conf="Administrare Useri";
$href_folder_conf="Administrare Directoare";
$href_sql="Administrare baza de date MySQL"; /* TODO */
$href_ftp="Administrare Fisiere";
$href_stats="Statistici LinPHA";
$href_other_conf="Thumbnails EXIF/IPTC";


/* general config */
/* uses also entries from install.php */
$default_language="Limbaj default LinPHA";
$default_language_info="&lt;--seteaza limbaj default";
$general_auto_lang="Activeaza/Dezactiveaza auto-detectare limbaj"; /* TODO 2 lines*/
$general_auto_lang_info="&lt;-- auto-detectare limbaj browser visitatori";
$general_success_msg="! Modificari salvate !";

/* TODO 6 lines (addition and REPLACEMENT)*/
$general_rotate="Activeaza/Dezactiveaza rotatie imagine";
$general_rotate_info="&lt;-- <b>AVERTIZARE! apasa pentru informatii</b>";
$general_exifinfo="Activeaza/Dezactiveaza TOT suportul EXIF";
$general_exifinfo_info="&lt;-- activare/dezactivare folosirea suport EXIF";
$general_exifdefault="Arata informatii EXIF default";
$general_exifdefault_info="&lt;-- activare aratare informatii EXIF default";

$general_exiflevel="Nivel al informatiilor EXIF";
$general_exiflevel_info="&lt;-- seteaza verbozitate informatii EXIF";
$exif_low="scazuta";
$exif_medium="medie";
$exif_high="mare";
$general_filename="Activeaza/Dezactiveaza nume fisiere";
$general_filename_info="&lt;--activare nume fisiere sub thumbnal";
$general_thumb_order="Ordoneaza thumbnails dupa";
$general_thumb_order_info="&lt;-- seteaza ordinea thumbnails dupa nume fisier sau data";
$thumb_order_date="Data";
$thumb_order_file="Nume fisier";
$general_autoconf="Creere/Stergere automata thumbnails";
$general_autoconf_info="&lt;-- <b>Dezactiveaza pentru imbunatatiri majore ale vitezei de lucru</b>";
$general_counterstat="Activeaza/Dezactiveaza contor";
$general_counterstat_info="&lt;-- automat PORNIT";
$general_blocking="Timp blocare IP in minute";
$general_blocking_info="&lt;-- utilizatorul nu este inregistrat ca nou pentru x minute";
$general_theme="Schimba tema LinPHA";
$general_theme_info="&lt;-- seteaza tema automata pe care LinPHA o va folosi";
$aqua_theme="Aqua";
$colored_theme="Colored";
$neptune_theme="Neptune";
$shadow_theme="Shadow";
$general_hq="Activeaza/Dezactiveaza thumbnails si fotografii HQ";
$general_hq_info="&lt;-- <b>Dezactiveaza pentru imbunatatiri majore ale vitezei de lucru</b>";
$submit_button_general="Scrie modificarile in baza de date";
$button_on_msg="PORNIT";
$button_off_msg="OPRIT";
$basic_opts="Optiuni de Baza";
$advanced_opts="Optiuni Avansate";
$show_basics="::Apasa pentru a arata Optiunile de Baza::";
$show_advanced="::Apasa pentru a arata Optiunile Avansate::";
$general_printing="Activeaza/Dezactiveaza access vizitator la imprimare";
$general_printing_info="&lt;-- PORNIT, toata lumea poate sa imprime";
$general_slideshow="Activeaza/Dezactiveaza prezentarea";
$general_slideshow_info="&lt;-- seteaza optiunea de prezentare PORNIT/OPRIT";
$general_mini_preview="Next/previous button image status/size";
$general_mini_preview_info="&lt;-- seteaza OPRIT daca multi utilizatori au bandwidth mic";

/* modify existing user table */
$mod_user_header="Modificare utilizatori existenti";
$submit_button_mod_user="Modifica utilizator";
$mod_user_success_msg="! Utilizator Modificat !";
$submit_button_delete="Sterge";
$del_user_success_msg="! Utilizator Sters !";

/* add new user table */
$new_user_header="Adauga utilizator nou";
$new_user_name_info="Nume Utilizator";
$new_user_pass_info="Parola Utilizator";
$new_user_mail_info="Email";
$new_user_level_info="Nivel Utilizator";
$friend="prieten";
$submit_button_new_user="Adauga utilizator";
$new_user_success_msg="! Utilizator creat !";

/* friends account table */
$friend_user_header="Configurare Cont";
$submit_button_friend_user="Modificare Cont";
$delete_button_friend_user="Stergere Cont";
$friend_info_msg="Seteaza/Schimba detalii cont";


/* add new category table */
$new_cat_header="Adauga o noua categorie";
$new_cat_info="numele noii categorii adaugate";
$submit_button_new_cat="adauga categorie";
$new_cat_success_msg="! Categorie adaugata !";
$mod_cat_header="Modifica/Sterge categorie";
$cat_name_header="Nume categorie";
$cat_mod_header="Modifica categorie";
$cat_del_header="Sterge categorie";
$submit_button_mod_cat="Modifica";

/* set directory permissions */
$set_dir_perms_header="Configurare permisiuni director";
$dir_name="Director";
$dir_perms="Permisiuni";
$action="Actiune";
$submit_button_folder="Proceseaza";
$public="public";
$friends="prieteni";
$private="privat";
$new_perms_success_msg="! Permisiuni Schimbate !";

/*#################################################
## build_stats.php (called by admin.php)
#################################################*/
$stats_over_header="Statistici Totale";
$stats_over_photos="Fotografii in baza de date:";
$stats_over_views="Vizualizare toate fotografiile:";
$stats_over_albums="Albume in baza de date:";
$stats_over_most_alb_visists="Cel mai vizitat album:";
$stats_over_space="Sptiu folosit (toate albumele):";
$stats_over_visitors="Visitatori pana acum:";
$stats_over_users="Utilizatori inregistrati:";
$stats_top_ten="Top 10 Vizualizari";
$stats_rank="Clasament:";
$stats_no_views="Numar de vizualizari:";
$stats_last_view="Ultima vizualizata:";
$stats_alb_name="Nume Album:";

/*#################################################
## create_all_thumbs.php
#################################################*/
$parse_first="PROCESARE PRIMUL STAGIU";
$parse_sec="PROCESARE AL DOILEA STAGIU";
$parse_third="PROCESARE AL TREILEA STAGIU";
$parse="procesand";
$parsed="procesat:";
$dirs="sub directoare";
$done="TERMINAT...";
$not_allowed_msg="NU am permisiuni sa rulez acest script!";
/* these entries are called from within admin.php */
$th_msg="Creaza toate thimbnails odata!";
$table_hint_msg="Apasa start pentru a creea toate thumbnails in toate subdirectoarele acum!";
$start_button="Start!";
$recreate_thumbs_header="Recreeaza toate thumbnails";
$recreate_thums_msg="Aceasta va RECREA TOATE thumbnails! Toate comentariile, descrierile si statisticile vor fi pierdute!";
$recreate_thums_warning="Confirma intentia de a recrea toate thumbnails, si a STERGE TOATE COMENTARIILE, DESCRIERILE SI STATISTICILE! Aceasta operatiune este definitiva. Esti sigur ca vrei sa continui?";

/*#################################################
## Printing, all files
#################################################*/
$print_layout="Alege formatul imprimarii";
$images_page="Imagini/pagina";
$indexprint="Index imprimare (28)";
$note="<strong>NOTA:</strong> S-ar putea sa fie nevoie de ajustarea \"setarilor\" browser-ului
			inainte de a imprima, pentru a fi sigur ca toate fotografiile se incadreaza in pagina!!!";
$print_button="Vizualizeaza inainte de imprimare";
$href_check_all="Selecteaza tot";
$href_clear_all="Deselecteaza tot";
$print_error="EROARE, nici o imagine selectata!!!";
$print_mode="Mod imprimare";
$print_image="Imprima imaginea";
$videos_msg="Nu se pot printa filele video";

/*#################################################
## MySQL backup, most files ;-)
#################################################*/
$mysql_info_header="Sistemul LinPHA de administrare a bazei de date ver.";
$mysql_cancel="Anuleaza";
$mysql_DHTML_hint="Afisarea DHTML este deactivata -  nu se va vedea nimic pana nu este complet backup-ul.";
$mysql_select_all="Selecteaza tot";
$mysql_deselect_all="Deselecteaza tot";
$mysql_create_backup="Creeaza Backup";
$mysql_back_menu="Inapoi la meniu";
$mysql_table_checks="Verific tabelele...";
$mysql_table_check="Verific tabela";
$mysql_struct_msg="Creez structura pentru";
$mysql_in_file_dump_msg="dumpez datele pentru";
$mysql_progress="Progres Total:";
$mysql_back_complete="Backup complet in";
$mysql_back_menu_long="Inapoi la meniul principal de Backup al bazei de date MySQL";
$mysql_open_warn1="<B>Atentie:</B> nu am reusit sa deschid ";
$mysql_open_warn2="pentru scriere!<BR><BR><I>CHMOD 777</I> la director ar trebui sa remedieze problema.";
$mysql_date_msg="Este acum "; // it follows time of the day...
$mysql_last_backup="Ultimul backup complet al bazei de date MySQL: ";
$mysql_backup_hint="In general backup mai mult de odata pe saptamana nu este necesar.";
$mysql_down_backup="Descarca ultimul backup complet ";
$mysql_down_backup_part="Descarca ultimul backup partial ";
$mysql_down_backup_struct="Descarca backup numai pentru ultima structura ";
$mysql_down_backup1="(right-click, Save As...)";

/* for MS Windows language version issues i will leave the above line unchanged */

$mysql_unknown_backup="Ultimul backup al bazei de date MySQL: <I>necunoscut</I>";
$mysql_href_recom="Creaza un nou backup complet, inseratii complete(recomandat)";
$mysql_href_standard="Creaza un nou backup complet, inseratii standard(mai mic)";
$mysql_href_partial="Creaza un nou backup partial, numai tabelele selectate(cu inseratii complete)";
$mysql_href_structure="Creaza un nou backup complet, numai structura tabelelor";
$mysql_days_last="zile";
$mysql_hours_last="ore";
$mysql_min_last="minute";
$mysql_sec_last="secunde";
$ago="in urma"; // reads in context "some days ago"
$backup="Backup";
$restore="Restaureaza";
$optimize="Optimizeaza";
$optimize_tables="Optimizez tabelele";
$opt_table_name="Nume tabela";
$opt_table_check="Verificare Tabela";
$opt_table_optimize="Optimizare tabela";
$opt_table_msg="Tipul mesajului";
$opt_start_msg="Incepe verificarea si optimizeaza toate tabelele din baza de date";
$fullback_hint_msg="Daca ai mai multe baze de date, alege metoda de backup <b>partiala</b>";
$restore_last_fullback="Restaureaza ultimul backup <b>complet</b>:";
$restore_last_partback="Restaureaza ultimul backup <b>partial</b>:";
$restore_error="EROARE in timpul deschiderii fisierului de backup. Fisierul nu a fost gasit!";
$restore_success="restaurata cu succes!";

/*########################################################################
### FILEMANGER
########################################################################*/

define('STR_ACCESS_DENIED','<H1>acces refuzat</H1> nu ai permisiuni sa accesezi acest director');
define('STR_BACK',	'inapoi');
define('STR_LESS',	'mai putin');
define('STR_MORE',	'mai mult');
define('STR_LINES',	'linii');
define('STR_FUNCTIONLIST', 'Lista functii');
define('STR_EDIT',	'editeaza');
define('STR_VIEW',	'vizualizeaza');
define('STR_RENAME',	'redenumeste');
define('STR_MKDIR',		'mkdir');
define('STR_DELETE',	'sterge');
define('STR_BOTTOM',	'capat');
define('STR_TOP',		'sus');
define('STR_FILENAME',	   'nume fila');
define('STR_FILESIZE',	   'marima');
define('STR_LASTMODIFIED', 'ultima modificare');
define('STR_SUM', '<B>%s</B> byte(s) in <B>%s</B> obiect(e)');
define('STR_CREATEDIRLEGEND', 'creere director');
define('STR_CREATEDIR',       'numele directorului ce urmeaza a fi creat:');
define('STR_CREATEDIRBUTTON', 'creaza un director');
define('STR_RENAMELEGEND',       'redenumire');
define('STR_RENAMEENTERNEWNAME', 'introduceti noul nume pentru %s:');
define('STR_RENAMEBUTTON',       'redenumeste');
define('STR_ERROR_DIR','Eroare: nu se poate citi continutul directorului');
define('STR_AUDIO',            'audio');
define('STR_COMPRESSED',       'compresat');
define('STR_EXECUTABLE',       'executabil');
define('STR_IMAGE',            'imagine');
define('STR_SOURCE_CODE',      'cod sursa');
define('STR_TEXT_OR_DOCUMENT', 'text sau document');
define('STR_WEB_ENABLED_FILE', 'fisier web-enabled');
define('STR_VIDEO',            'video');
define('STR_DIRECTORY',        'director');
define('STR_PARENT_DIRECTORY', 'director parinte');
define('STR_EDITOR_SAVE',      'salveaza fila');
define('STR_EDITOR_SAVE_ERROR','fila <I>%s</I> nu poate fi scrisa sau nu exista');
define('STR_EDITOR_SAVE_ERROR_WRONG_VALUE','in timpul editarii filei <I>%s</I>, am primit urmatoarea valoare la byteposition #%s: %s.');
define('STR_EDITOR_SAVE_ERROR_HEX_VALUE_NEEDED','potrivit configuratiei, trebuie sa asiguri o valoare hexadecimala pozitivaintre 00 si FF.');
define('STR_EDITOR_SAVE_ERROR_DEC_VALUE_NEEDED','potrivit configuratiei, trebuie sa aisugir o valoare intreaga decimala pozitiva intre 0 and 255.');
define('STR_FILE_UPLOAD_NAVI_HINT', 'Navigatie Rapida');
define('STR_FILE_UPLOAD_DRIVES', 'Drives:');
define('STR_FILE_UPLOAD', 'upload');
define('STR_FILE_UPLOAD_MAIN', 'uploader');
define('STR_FILE_UPLOAD_DISABLED', 'imi pare rau, upload-ul de fisiere este dezactivat in php.ini');
define('STR_FILE_UPLOAD_DESC','Alege filele pe care vrei sa le uploadezi. Alege ce actiune sa fie executata dupa un upload de succes.');
define('STR_FILE_UPLOAD_FILE','Fila');
define('STR_FILE_UPLOAD_TARGET','Upload fila(e) la');
define('STR_FILE_UPLOAD_ACTION','cand upload este complet fa:');
define('STR_FILE_UPLOAD_NOTHING','nu face nimic');
define('STR_FILE_UPLOAD_DROPFILE','sterge fila uploadata cand actiunea selectata este terminata');
define('STR_FILE_UPLOAD_MAXFILESIZE','Marimea filei permisa (fiecare fila!) configurata in acest moment in php.ini este');
define('STR_FILE_UPLOAD_ERROR',        'Eroare: Incapabil sa mut fila %s in directorul %s');
define('STR_FILE_UPLOAD_CHDIR_ERROR',  'Eroare: Incabail sa schimb (chdir) in directorul %s . Fila procesata: %s');
define('STR_FILE_UPLOAD_UNLINK_ERROR', 'Eroare: Incapabil sa sterg %s dupa procesare.');
define('STR_FILE_UPLOAD_ERROR_FILE_EXCEEDS_INI_SIZE', 'Eroare: Fila %s uploadata depaseste directiva upload_max_filesize din php.ini - %s');
define('STR_FILE_UPLOAD_ERROR_FILE_EXCEEDS_FORM_SIZE','Eroare: Marimea filei %s uploadata depaseste configurartia HTML FORM');
define('STR_FILE_UPLOAD_ERROR_FILE_PARTIAL',          'Eroare: Fila %s a fost numai partial uploadata');

/*########################################################################
### BIG FAT NOTICE !
### AS OF LINPHA 0.9.0 ALL NEW ENTRIES ARE PLACED BELOW THIS MSG
### DEVELOPERS PLEASE MAKE USE OF THE "LANGUPDATE.PHP" SCRIPT!
########################################################################*/

$pano_view="Vedere panoramica"; /* (img_view.php) -- new [panorama view] href  */
$close_win="Inchide fereastra"; /* (various files) -- javascript close window */
$nav_hint="Foloseste mouse-ul sau sagetile directionale pentru a naviga!"; /* (image_panorama_view.php) --  */
$pano_view_of="Vedere panoramica a imaginii"; /* (image_panorama_view.php) -- header message */
$php_basedir_check_msg="verific daca <b>PHP open basedir</b> este configurat in PHP..."; /* (sec_stage_install.php) --  */
$req_basedir_fail="NU"; /* (sec_stage_install.php) -- YES, it\'s really just no/nein ;-) */
$basedir_active_msg="Rau Rau Rau, PHP este configurat sa foloseasca \"open_basedir\" configurat!<br>"; /* (sec_stage_install.php) --  */
$basedir_active_msg1="+ LinPHA va folosi GD lib pentru a crea thumbnails, oricum pot aparea probleme<br>"; /* (sec_stage_install.php) --  */
$basedir_active_msg2="+ Daca e posibil, deconfigureaza \"open_basedir\" in php.ini"; /* (sec_stage_install.php) --  */
$gd_basedir_err="+ Daca e posibil, deconfigureaza \"open_basedir\" in php.ini sau recompileaza PHP cu suport GD lib  (--with-gd)"; /* (sec_stage_install.php) --  */
$extract_tar_gz="extrage o arhiva *.tar.gz (UNIX)"; /* (index.php) -- filemanger upload select */
$extract_tar_bz2="extrage o arhiva *.tar.bz2 (UNIX)"; /* (index.php) --  */
$extract_gz="dezarhiveaza cu gzip (UNIX)"; /* (index.php) -- filemanger upload select */
$extract_zip="dezarhiveaza cu unzip (UNIX)"; /* (index.php) -- filemanger upload select */
$extract_winzip="dezarhiveaza cu pkzip (WINDOWS WINZIP)"; /* (index.php) -- filemanger upload select */
$new_group_success_msg="! Grup Adaugat !"; /* (admin.php) -- redirect message */
$mod_group_success_msg="! Grup Modificat !"; /* (admin.php) -- redirect message */
$del_group_success_msg="! Grup Sters !"; /* (admin.php) -- redirect message */
$mod_cat_success_msg="! Categorie modificata !"; /* (admin.php) -- redirect message */
$del_cat_success_msg="! Categorie stearsa !"; /* (admin.php) -- redirect message */
$href_groups="Apasa pentru a adauga sau modifica groupurile"; /* (build_user_conf/build_folder_conf) -- href message to group management */
$del_warning="ATENTIE: Trebuie sa te autentifici cu noul tau cont !!!"; /* (build_user_conf.php) -- java popup to notify admin user */
$href_to_folder_conf="inapoi la administrarea directoarelor"; /* (build_user_conf.php) -- navi href  */
$href_to_user_conf="inapoi la administrarea userilor"; /* (build_user_conf.php) -- navi href  */
$header_new_group="Adauga un grup nou"; /* (build_user_conf.php) -- table header */
$header_groupname="Numele grupului"; /* (build_user_conf.php) -- table header */
$button_addgroup="Adauga grup"; /* (build_user_conf.php) -- submit button */
$header_mod_group="Modifica/Sterge grupuri"; /* (build_user_conf.php) -- table header */
$mod_group_header="Modificare grup"; /* (build_user_conf.php) -- table header */
$del_group_header="Stergere grup"; /* (build_user_conf.php) -- table header */
$search_to_short="Criteriu de cautare prea scurt, trebuie sa fie lung de cel putin 2 caractere!"; /* (search.php) --  */
$general_thumb_size="Marimea cache-ului de thumbnails"; /* (build_general_conf.php) -- thumbsize stuff */
$general_thumb_size_info="<-- configureaza marimea maxima a thumbnails in pixeli"; /* (build_general_conf.php) -- thumbsize stuff */
$general_thumb_border="Activeaza/Dezactiveaza cadrul thumbnails"; /* (build_general_conf.php) -- thumb border stuff */
$general_thumb_border_info="<-- activeaza pentru a adauga cadru la thumnails"; /* (build_general_conf.php) -- thumb border stuff */
$inst_thumbsize_header="Alege marimea thumbnails"; /* (third_stage_install.php) -- thumb size stuff */
$inst_thumbborder_header="Configurare cadru"; /* (third_stage_install.php) -- thumb border stuff */
$inst_thumbborder_enable="activare cadru imagine"; /* (third_stage_install.php) -- thumb border checkbox msg */
$inst_thumbborder_disable="dezactivare cadru imagine"; /* (third_stage_install.php) -- thumb border checkbox msg */
$safemode_active_msg="Rau Rau Rau, PHP este configurat sa foloseasca restrictiile \"save_mode\" !<br>"; /* (sec_stage_install.php) --  */
$safemode_active_msg2="+ Daca e posibil, deconfigureaza \"save_mode\" in php.ini"; /* (sec_stage_install.php) --  */
$general_anon_post="Permite/Restrictioneaza postuarea anonima"; /* (build_general_conf.php) --  */
$general_anon_post_info="<-- vizitatorii anonimi pot adauga comentarii"; /* (build_general_conf.php) --  */
$stats_over_comment="Comentariu postat"; /* (build_stats.php) --  */
$top10_downs_href="arata topul 10 al descarcarilor"; /* (build_stats.php) --  */
$top10_views_href="arata topul 10 al vizualizarilor"; /* (build_stats.php) --  */
$stats_head_downs="Top 10 descarcari"; /* (build_stats.php) --  */
$no_downloads="Numarul de descarcari"; /* (build_stats.php) --  */
$general_anon_download="Activeaza/Dezactiveaza descarcarile anonime"; /* (build_genera_config.php) --  */
$general_anon_download_info="<-- arata/ascunde link-ul de descarcare al imaginilor"; /* (build_general_config.php) --  */
$seach_multiple_select_use="Folosire selectari multiple"; /* (search.php) --  */
$search_and="SI"; /* (search.php) --  */
$search_or="SAU"; /* (search.php) --  */
$search_categories="Categorii"; /* (search.php) --  */
$search_with_available_filters="Cu filtrele disponibile"; /* (search.php) --  */
$search_select_album="Selecteaza album"; /* (search.php) --  */
$search_date_from_to="Data de la / pana la"; /* (search.php) --  */
$search_combination_and_or="In combinatie cu SI si SAU"; /* (search.php) --  */
$new_user_new_password="Noua parola"; /* (build_user_conf.php) --  */
$new_user_error4="Username nu poate fi gol"; /* (admin.php) --  */
$new_user_error5="Username existent"; /* (admin.php) --  */
$new_user_error1="Vechea parola nu este corecta"; /* (admin.php) --  */
$new_user_error2="Noua parola nu se potriveste cu cea retiparita"; /* (admin.php) --  */
$new_user_error3="Adresa de e-mail nu este corecta"; /* (admin.php) --  */
$new_user_old_password="Vechea Parola"; /* (admin.php) --  */
$new_user_retype_password="Rescrie noua Parola"; /* (admin.php) --  */
$select_db_header="Selecteaza tpul bazei de date"; /* (sec_stage_install.php) --  */
$mysql_info="Alege asta pentru accesarea unei baze de date MySQL"; /* (sec_stage_install.php) --  */
$postgres_info="Alege asta pentru accesarea unei baze de date in PostgreSQL."; /* (sec_stage_install.php) -- reads: ...Please see info */
$login_autologin="Autologare"; /* (toc.php) --  */
$login_autologin_user="Autologare Userinfo"; /* (toc.php) --  */
$toc_timer="Cronometru"; /* (toc.php) --  */
$general_autologin="Activeaza/Dezactiveaza autologin"; /* (build_general_conf.php) --  */
$general_autologin_info="<-- activeaza optiunea pentru a folosi autologin"; /* (build_general_conf.php) --  */
$general_timer="Activeaza/Dezactiveaza cronometru"; /* (build_general_conf.php) --  */
$general_timer_info="<-- activeaza afisarea timpului trecut in footer"; /* (build_general_conf.php) --  */
$login_autlogin="Autologin"; /* (login.php) --  */
$lostpw_title="Parola Pierduta"; /* (login.php) --  */
$lostpw_question="Ai uitat parola?"; /* (login.php) --  */
$lostpw_type_user_or_email="Scrie user-ul SAU adresa de e-mail"; /* (login.php) --  */
$lostpw_email1="Cineva a folosit deja functia de recuperare a parolei. Daca nu ai fost tu, ignora acest mesaj si nimic nu se va intampla cu parola ta. Daca ai fost tu, pune acest cod in campul cerut:"; /* (login.php) --  */
$lostpw_email1_part2="(Tine minte: Aceasta NU este noua ta parola!)"; /* (login.php) --  */
$lostpw_email1_part3="Linpha-Administrator Personal"; /* (login.php) --  */
$lostpw_email_error="Eroare: E-Mail-ul nu a putut fi trimis. Contacteaza Administrator-ul."; /* (login.php) --  */
$lostpw_error_nothing_found="Ne pare rau, nici un username sau parola nu a fost gasit sa corespunda criteriilor tale."; /* (login.php) --  */
$lostpw_email_sent="E-Mail-ul ti-a fost trimis."; /* (login.php) --  */
$lostpw_should_receive="Ar trebui sa-l primesti intr-un minut. Introdu codul din e-mail in acest camp:"; /* (login.php) --  */
$lostpw_go_back="Inapoi"; /* (login.php) --  */
$lostpw_email2="Parola schimbata cu succes. Noua parola este:"; /* (login.php) --  */
$lostpw_email2_part2="Puteti schimba parola mai tarziu folosind link-ul \"my settings\" ."; /* (login.php) --  */
$lostpw_new_password="Parola Noua"; /* (login.php) --  */
$lostpw_successfully_changed="Parola schimbata cu succes, ar trebuie sa primiti un email intr-un minut cu noua parola."; /* (login.php) --  */
$lostpw_error_wrong_code="Ne pare rau, codul nu este corect."; /* (login.php) --  */
$lostpw_enter_correct_code="Introduceti codul corect din email in acest camp:"; /* (login.php) --  */

/*########################################################################
### latest translation part 
########################################################################*/

$lang_plugins['plugins']="Plugin-uri LinPHA"; /* (admin.php) --  */
$lang_plugins['watermark']="Watermark"; /* (admin.php, toc.php) --  */
$lang_plugins['benchmark']="Benchmark"; /* (admin.php, toc.php) --  */
$lang_plugins['sql']="Management al bazei de date"; /* (admin.php, toc.php) --  */
$lang_plugins['active_plugins']="Plugin-uri Active"; /* (admin.php) --  */
$lang_plugins['enabled']="Activat"; /* (plugins.php) --  */
$lang_plugins['disabled']="Dezactivat"; /* (plugins.php) --  */
$lang_plugins['update']="Update"; /* (plugins.php) --  */
$lang_plugins['plugins_updated']="Plugin-uri updatate"; /* (admin.php, plugins.php) --  */
$wm_wm_man="Management Watermark "; /* (watermark.php) --  */
$wm_disable="Dezactiveaza Watermark "; /* (watermark.php) --  */
$wm_change_example_img="Schimba imaginea exemplu "; /* (watermark.php) --  */
$wm_no_input_files_found="Nu am gasit nici o fila "; /* (watermark.php) --  */
$wm_image_quality="Calitatea imaginii (numai pentru pre-vizualizare) "; /* (watermark.php) --  */
$wm_enable_text="Activeaza: Text "; /* (watermark.php) --  */
$wm_text="Text "; /* (watermark.php) --  */
$wm_font="Caracter "; /* (watermark.php) --  */
$wm_fontsize="Marime Caractere "; /* (watermark.php) --  */
$wm_fontcolor="Culoare Caractere "; /* (watermark.php) --  */
$wm_align="Aliniaza "; /* (watermark.php) --  */
$wm_pos_hor="Positioneaza orizontal "; /* (watermark.php) --  */
$wm_pos_ver="Positioneaza vertical "; /* (watermark.php) --  */
$wm_height="Inaltimea campului text  "; /* (watermark.php) --  */
$wm_width="latimea campului text "; /* (watermark.php) --  */
$wm_shadow_size="Marime umbra "; /* (watermark.php) --  */
$wm_shadow_color="Culoare umbra "; /* (watermark.php) --  */
$wm_enable_image="Aciveaza: Imagine"; /* (watermark.php) --  */
$wm_available_images="Imagini disponibile"; /* (watermark.php) --  */
$wm_no_images_found="Nici o imagien gasita"; /* (watermark.php) --  */
$wm_dissolve="Dissolve"; /* (watermark.php) --  */
$wm_preview="Pre-vizualizeaza"; /* (watermark.php) --  */
$wm_linebreak="pentru linebreak"; /* (watermark.php) --  */
$wm_enable_shadow="Activeaza umbra"; /* (watermark.php) --  */
$wm_enable_rectangle="Activeaza rectangle"; /* (watermark.php) --  */
$wm_rectangle_color="Culoare"; /* (watermark.php) --  */
$wm_enable_ext_shadow="Activeaza umbra extinsa"; /* (watermark.php) --  */
$wm_status="Status"; /* (watermark.php) --  */
$wm_enabled="activat"; /* (watermark.php) --  */
$wm_disabled="dezactivat"; /* (watermark.php) --  */
$wm_restore_to="Revenire la"; /* (watermark.php) --  */
$wm_inital_settings="configurare initiala"; /* (watermark.php) --  */
$wm_add_more_examples="Poti adauga mai multe imagini exemplu in directorul tau linpha"; /* (watermark.php) --  */
$wm_example="Examplu"; /* (watermark.php) --  */
$wm_shadow_fontsize="Marime caracter umbra"; /* (watermark.php) --  */
$wm_settings_for_both="Configurari prntru imagini si text"; /* (watermark.php) --  */
$wm_center="centru"; /* (watermark.php) --  */
$wm_north="sus"; /* (watermark.php) --  */
$wm_northeast="sus dreapta"; /* (watermark.php) --  */
$wm_northwest="sus stanga"; /* (watermark.php) --  */
$wm_south="jos"; /* (watermark.php) --  */
$wm_southeast="jos dreapta"; /* (watermark.php) --  */
$wm_southwest="jos stanga"; /* (watermark.php) --  */
$wm_east="dreapta"; /* (watermark.php) --  */
$wm_west="stanga"; /* (watermark.php) --  */
$bm_file_err="Eroare, nici o fila specificata";
$bm_var_err="Eroare, verifica variabilele introducerii";
$bm_notfound_err="Eroare, fila nu a fost gasita";
$bm_noimg_err="Eroare, fila nu este o imagine";
$bm_tmpfile_err="Eroare, in timpul creerii filei imagine temporara";
$bm_tmpfile_warn="Atentie: Imaginea temporara nu a putut fi stearsa";
$bm_time_total="Timp total de executie: ";
$bm_img_sec="Imagini pe secunda: ";
$bm_avg_img="Timp mediu pentru fiecare imagine (mouseover ca sa vizualizezi schimbarile): ";
$bm_qual_size="Calitate/Marime";
$bm_quality="Calitate: ";
$bm_height="Inaltime: ";
$bm_width="Latime: ";
$bm_size="Marime imagine: ";
$bm_create = "Creere test cu utlilitar de conversie";
$bm_interval = "interval";
$bm_calc = "Calculare";
$bm_img = "Imagini";
$bm_inloop="Rulare infinita";
$bm_qual_range="Parametrii calitate: ";
$bm_size_range="Parametrii marime (numai inaltime): ";
$bm_repeats="Repetari: ";
$bm_con_util="Selectati utilitar conversie: ";
$bm_current_settings="Configuratie curenta"; /* (benchmark.php) --  */
$bm_preview="Pre-vizualizeaza"; /* (benchmark.php) --  */
$bm_save_settings="Salveaza aceasta configuratie"; /* (benchmark.php) --  */
$wm_addexamples="Watermark: Adauga mai multe imagini exemplu"; /* (watermark.php) --  */
$wm_addimg="Watermark: Adauga mai multe imagini cu watermark"; /* (watermark.php) --  */
$wm_addfont="Watermark: Adauga mai multe caractere"; /* (watermark.php) --  */
$wm_colorsetting="Watermark: Configuratie culori"; /* (watermark.php) --  */
$comment_hint="SUGESTIE: click in partea de sus sau de jos a imginii pentru a vizualiza albumul"; /* (linpha_comments.php) --  */
$comment_end="Sfarsitul albumului"; /* (linpha_comments.php) --  */
$comment_beginning="Inceputul albumului"; /* (linpha_comments.php) --  */
$comment_back="inapoi la vizualizare imagine"; /* (linpha_comments.php) --  */
$comment_edit_img="Editeaza informatii imagine"; /* (linpha_comments.php) --  */
$comment_change_img_details="Schimba detalii imagine"; /* (linpha_comments.php) --  */
$comment_last_comments="Ultimele comentarii"; /* (linpha_comments.php) --  */
$comment_comment_by="comentariu de "; /* (linpha_comments.php) --  */
$category_delete_warning="Atentie: Categoriile deja asignate la imagini se vor pierde"; /* (build_category_conf.php) --  */
$pass_2_short="EROARE, parola trebuie sa contina cel putin 3 caractere..."; /* (various) --  */
$album_edit="Editeaza comentariu album"; /* (linpha_comments.php) --  */
$album_details="Detalii album"; /* (linpha_comments.php) --  */
$wm_save_note="NOTA: Watermark-l NU este vizibil pentru userii inregistrati!. Trebuie sa fiti vizitator (guest) pentru a vedea watermark-ul!"; /* (watermark.php) --  */
$lang_plugins['guestbook']="Carte vizitatori"; /* (admin.php) --  */
$print_low_quality="Calitate scazuta"; /* (printing_view.php) --  */
$print_high_quality="Calitate crescuta (ma incet!)"; /* (printing_view.php) --  */
$gb_title="Carte vizitatori LinPHA";
$gb_sign="Carte vizitatori LinPHA! Adauga un nou mesaj";
$gb_from="Locatie";
$gb_from_no="Nici o locatie specificata";
$gb_pages="pagina(pagini)";
$gb_messages="mesaje in cartea vizitatori";
$gb_msg_error="Sorry, campurile pentru nume si comentariu nu pot fi goale";
$gb_new_msg="Adauga un nou mesaj";
$gb_name="Nume";
$gb_email="Email";
$gb_hp="Homepage";
$gb_country="De unde esti (Tara)";
$gb_header="Carte vizitatori LinPHA";
$gb_opts="Optiuni carte vizitatori";
$gb_rows="Numarul de postari pe pagina";
$gb_anon="Permite postarea anonima in cartea de vizitatori";
$gb_order="Orindea postarilor";
$wm_resize="Scaleaza intodeauna watermark-ul la X% din marimea imaginii"; /* (watermark.php) --  */
$wm_help_and_descr="Ajutor si descriere"; /* (watermark.php) --  */
$folder_remove_hint="Daca totul a mers bine, ar trebui sa stergeti sub-directorul /install (securitate)..."; /* (forth_stage_install.php) --  */
$add_alb_com="Adauga comentariu album"; /* (img_view.php) --  */
$add_img_com="Adauga comentariu imagine"; /* (img_view.php) --  */
$album_com="Comentariu album"; /* (*_stage_album.php) --  */
$formatting_possibilities="TAG-uri formatare HTML"; /* (various) --  */
$stat_cache_elements="Elemente cache"; /* (build_stats.php) --  */
$stat_cache_first="Noi elemente in cache"; /* build_stats.php) --  */
$stat_cache_hits="Numar vizualizari in cache"; /* (build_stats.php) --  */
$stat_cache_hits_max="Nr. maxim vizualizari in cache (o singura imagine)"; /* (build_stats.php) --  */
$stat_cache_hits_avg="Media vizualizarilor in cache (toate imaginile)"; /* (build_stats.php) --  */
$stat_cache_size="Marime cache"; /* (build_stats.php) --  */
$stat_cache_convert_time="Timp procesare cache"; /* (build_stats.php) --  */
$stat_cache_size="Marime cache folosita"; /* (build_stats.php) --  */
$cache_options="Optiuni cache imagini";
$cache_max_size="Marimea maxima a cache-ului in octeti (0 = unlimited)";
$path_2_cache="Directorul cache-ului (automat /sql/cache)";
$cache_optimize="Optimizeaza/curata data cache-ului imaginilor"; 
$cache_maintain="Administrare Cache Imagini";
$cache_opt_msg="!! Cache Optimizat !!";
$lang_plugins['cache']="Cache Imagini";
/* All Done */
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
$general_navigation_info="<-- activate the navigation bar on the thumbnails pages"; /* (build_general_conf.php) --  */
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
$menumsg['advanced']="Advanced Options"; /* () --  */
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
$date_format = "%a %m/%d/%Y";
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
$timespanfmt = "%s zile, %s ore, %s minute si %s secunde";  /* (new_images.php) -- */
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