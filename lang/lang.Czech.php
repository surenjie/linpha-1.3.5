<?php
/* language file */
/* Feel free to modify this file to make use of your native language.
If you do so, please save it as lang.YourLanguage.php in the LinPHA /lang dir
and PLEASE mail me a copy! mailto:bzrudi@tuxpower.de */


/*
for the translators:
changes:
02. Aug 2004  $path_2_cache  changed default path from '/sql/cache' to 'sql/cache'
*/

/*#################################################
## linpha messages
#################################################*/
/* left menu */
$album="M&#x016F;j foto arch&#x00ED;v";

/* alerts */
$alert_fopen="Chyba! soubor nem&#x016F;&#x017E;e b&#x00FD;t otev&#x0159;en...";
$printing_probs="Tiskov&#x00E9; probl&#x00E9;my";
$printing_probs_msg="Tisk zru&#x0161;en! viz";

/* global messages */
$subfolders="podadres&#x00E1;&#x0159;e";
$img_th="Fotky";
$in_th="v"; /* used for the photos in $foldername */
$alb_th="Alba v podadres&#x00E1;&#x0159;&#x00ED;ch";
$thumb_hint_msg="klepn&#x011B;te pro detailn&#x00ED; pohled ";
$latest_photo="posledn&#x00ED;";
$view_at="prohl&#x00ED;&#x017E;et v ";
$close_button="zav&#x0159;&#x00ED;t";
$help="n&#x00E1;pov&#x011B;da";
$misc_help="R&#x016F;zn&#x00E1; n&#x00E1;pov&#x011B;da";

/*#################################################
## installation
#################################################*/
/* install.php (page 1) */
$welc_header="V&#x00ED;tejte v LinPHA";
$welc_text="Tohle je domov &quot;Linux Foto Archivu&quot; aka LinPHA.
			Vypad&#x00E1; to, &#x017E;e spou&#x0161;t&#x00ED;te LinPHA poprv&#x00E9;, proto MUS&#x00ED;TE
			spustit instalaci!.";
$welc_hint="<b>P&#x0159;edt&#x00ED;m, ne&#x017E; budete pokra&#x010D;ovat:</b>";
$welc_hint1="Vytvo&#x0159;te adres&#x00E1;&#x0159; &quot;<b>linpha/sql</b>&quot; s pr&#x00E1;vy z&#x00E1;pisu pro ka&#x017E;d&#x00E9;ho!
			(nap&#x0159;.: chmod 777 sql)";
$next_button="Pokra&#x010D;ovat"; /* used as left menu header in all 4 stages */
$inst_msg="LinPHA instalace"; /* used as left menu header in all 4 stages */
$inst_status_1="Pros&#x00ED;m vyberte jazyk a stiskn&#x011B;te &quot;Pokra&#x010D;ovat&quot;";
$inst_status_step1="Krok 1 ze 4";

/* sec_stage_install (page 2) */
$inst_access_msg="Konfigurace typu p&#x0159;&#x00ED;stupu k datab&#x00E1;zi";
$inst_full_access_msg="<b>ANO !</b><br> M&#x00E1;m pln&#x00FD; p&#x0159;&#x00ED;stup k datab&#x00E1;zi MySQL, Jsem opr&#x00E1;vn&#x011B;n vytv&#x00E1;&#x0159;et nov&#x00E9;<br>
						datab&#x00E1;ze a u&#x017E;ivatele. Jin&#x00FD;mi slovy: Tohle je m&#x016F;j server!";
$inst_limited_access_msg="<b>NE !</b><br> Budu instalovat LinPHA s omezen&#x00FD;m p&#x0159;&#x00ED;stupem na<br>
						MySQL datab&#x00E1;zi. M&#x016F;j ISP mi neumo&#x017E;&#x0148;uje vytv&#x00E1;&#x0159;et nov&#x00E9; datab&#x00E1;ze a u&#x017E;ivatele.";
$inst_status_2="Pros&#x00ED;m zvolte typ SQL p&#x0159;&#x00ED;stupu, pokud si nejste jisti, zvolte NE!";
$inst_status_step2="Krok 2 ze 4";

/* requirements */
$req_check_msg="Kontroluji syst&#x00E9;mov&#x00E9; po&#x017E;adavky:";
$req_found_msg="OK - Nalezeno";
$req_miss_msg="NEnalezeno";
$req_safe_fail="POVOLENO";
$req_safe_ok="ZAK&#x00E1;Z&#x00E1;NO";
$php_safemode_check_msg="kontroluji PHP safe mode...";
$php_version_check_msg="kontroluji verzi PHP > 4.1.0...";
$mem_check_msg="kontroluji PHP memory limit...";
$gd_check_msg="hled&#x00E1;m knihovnu GD ...";
$convert_check_msg="hled&#x00E1;m ImageMagick...";
$exif_check_msg="kontroluji podporu EXIF ...";
$summary_msg="SOUHRN:";
$safe_mode_err="V&#x00E1;&#x0161; server je nakonfigurov&#x00E1;n s pou&#x017E;it&#x00ED;m PHP safe_mode. LinPHA nebude pracovat,
			 dokud nebude safe_mode povolen v php.ini !";
$inst_abort_msg="!!! INSTALACE ZRU&#x0160;ENA !!!";
$php_version_err="Na va&#x0161;em serveru b&#x011B;&#x017E;&#x00ED; PHP verze star&#x0161;&#x00ED; ne&#x017E; 4.1.0. LinPHA nem&#x016F;&#x017E;e
			 s touto verz&#x00ED; pracovat. Pros&#x00ED;m aktualizujte PHP.";
$gd_convert_err="Ani ImageMagick ani knihovna GD nebyla nalezena. LinPHA nem&#x016F;&#x017E;e fungovat,
			 pokud nedoinstalujete alespo&#x0148; jednu sou&#x010D;&#x00E1;st.";
$convert_sum_found_msg="ImageMagick byl nalezen na tomto serveru. To umo&#x017E;n&#x00ED; LinPHA
			vytv&#x00E1;&#x0159;et vysoce kvalitn&#x00ED; n&#x00E1;hledy.";
$convert_sum_miss_msg="ImageMagick nebyl nalezen na tomto serveru. N&#x00E1;hledy budou
			bohu&#x017E;el ni&#x017E;&#x0161;&#x00ED; kvality.";
$exif_sum_found_msg="Nalezena podpora EXIF ve va&#x0161;&#x00ED; PHP instalaci. To umo&#x017E;n&#x00ED; LinPHA
			zobrazovat detaily o po&#x0159;&#x00ED;zen&#x00FD;ch fotografi&#x00ED;ch.";

/* TODO (change this one)
$exif_sum_miss_msg="Nenalezena podpora EXIF ve va&#x0161;&#x00ED; PHP instalaci. Bohu&#x017E;el LinPHA
			nebude schopen zobrazovat detaily o fotografi&#x00ED;ch.";
to ==>*/
$exif_sum_miss_msg="Nenalezena podpora EXIF v PHP. Pou&#x017E;ij&#x00ED;
			proto EXIF analyz&#x00E1;tor obsa&#x017E;en&#x00FD; v LinPHA.";
/* TODO next 3 */
$session_path_check_msg="kontroluji session_safe_path...";
$session_path_found_msg="session_safe_path nastavena v php.ini. P&#x0159;ihl&#x00E1;&#x0161;en&#x00ED; do LinPHA by m&#x011B;lo prob&#x011B;hnout v po&#x0159;&#x00E1;dku. Cesta nastavena na: ";
$session_path_miss_msg="NEnastavena cesta session_save_path. Mus&#x00ED;te nastavit session_save_path
			v php.ini, nebo v&#x00E1;m bude znemo&#x017E;n&#x011B;no se p&#x0159;ihl&#x00E1;sit!!";
$mem_limit_ok_msg="V&#x00FD;born&#x011B;, v&#x00E1;&#x0161; PHP memory limit >= 16MB. Nebude &#x017E;&#x00E1;dn&#x00FD; probl&#x00E9;m
			s vytv&#x00E1;&#x0159;en&#x00ED;m n&#x00E1;hled&#x016F;.";
$mem_limit_low_msg="Hmmh, v&#x00E1;&#x0161; PHP memory limit <=16MB. Pokud zaznamen&#x00E1;te probl&#x00E9;my
			s chyb&#x011B;j&#x00ED;c&#x00ED;mi n&#x00E1;hledy, zkuste zv&#x00FD;&#x0161;it memory_limit v php.ini nebo zmen&#x0161;ete
			obr&#x00E1;zky a pot&#x00E9; zkuste znovu...";
$choose_def_quali="Zvolte v&#x00FD;choz&#x00ED; kvalitu fotek";
$choose_def_quali_warn="Nenastavujte vysokou kvalitu, pokud takt va&#x0161;eho CPU nen&#x00ED; vy&#x0161;&#x0161;&#x00ED; jak 1Ghz (vysok&#x00E9; vyt&#x00ED;&#x017E;en&#x00ED;)";

/* third_stage_install (page 3) */
$inst_superadmin_header="Konfigurace MySQL administr&#x00E1;tora";
$inst_superadmin_name="MySQL DB Admin - p&#x0159;ihla&#x0161;ovac&#x00ED; jm&#x00E9;no:";
$inst_superadmin_name_info="&lt;- p&#x0159;ihla&#x0161;ovac&#x00ED; jm&#x00E9;no administr&#x00E1;tora MySQL  (mus&#x00ED; existovat v DB)";
$inst_superadmin_pass="MySQL DB Admin - heslo:";
$inst_superadmin_pass_info="&lt;- heslo administr&#x00E1;tora MySQL (mus&#x00ED; existovat v DB)";

$inst_admin_header="Konfigurace LinPHA administr&#x00E1;tora";
$inst_admin_name="LinPHA Admin - p&#x0159;ihla&#x0161;ovac&#x00ED; jm&#x00E9;no:";
$inst_admin_name_info="&lt;- p&#x0159;ihla&#x0161;ovac&#x00ED; jm&#x00E9;no LinPHA administr&#x00E1;tora";
$inst_admin_pass="LinPHA Admin - heslo:";
$inst_admin_pass_info="&lt;- heslo LinPHA administr&#x00E1;tora";
$inst_admin_email="Administr&#x00E1;tor&#x016F;v email:";
$inst_admin_email_info="&lt;- Vypl&#x0148;te administr&#x00E1;tor&#x016F;v email";

$inst_db_header="Konfigurace p&#x0159;ipojen&#x00ED; k datab&#x00E1;zi:";
$inst_db_host="Hostitel:";
$inst_db_host_info="&lt;-hostitel: typicky &quot;localhost&quot;";
$inst_db_host_info2="&lt;-hostitel: hostitel datab&#x00E1;ze MySQL";
$inst_db_host_port="&#x010C;&#x00ED;slo protu:";
$inst_db_host_port_info="&lt;-&#x010D;&#x00ED;slo portu: pokud si nejste jisti, ponechte v&#x00FD;choz&#x00ED;";
$inst_db_name="Jm&#x00E9;no LinPHA datab&#x00E1;ze:";
$inst_db_name_info="&lt;-jm&#x00E9;no datab&#x00E1;ze pro LinPHA (datab&#x00E1;ze v MySQL), v&#x00FD;choz&#x00ED; &quot;linpha&quot;";
$inst_db_name2="Jm&#x00E9;no datab&#x00E1;ze:";
$inst_db_name_info2="&lt;-jm&#x00E9;no datab&#x00E1;ze, kter&#x00E9; bylo p&#x0159;id&#x011B;leno va&#x0161;&#x00ED;m ISP";
$inst_table_prefix="P&#x0159;edpona pro LinPHA tabulky";
$inst_table_prefix_info="&lt;-p&#x0159;edpona pro pou&#x017E;it&#x00ED; se v&#x0161;mi LinPHA tabulkami";

$general_header="Konfigurace obecn&#x00FD;ch nastaven&#x00ED;";
$general_album_title="Titulek foto alba";
$general_album_title_info="&lt;-Ponechte pr&#x00E1;zdn&#x00E9; pro v&#x00FD;choz&#x00ED; nastaven&#x00ED;";
$general_photos_row="Po&#x010D;et &#x0159;&#x00E1;dk&#x016F; na zobrazen&#x00ED;:";
$general_photos_row_info="&lt;-tzn. po&#x010D;et vyobrazen&#x00FD;ch &#x0159;&#x00E1;dk&#x016F; ";
$general_photos_col="Po&#x010D;et sloupc&#x016F; na zobrazen&#x00ED;:";
$general_photos_col_info="&lt;-tzn. po&#x010D;et vyobrazen&#x00FD;ch sloupc&#x016F;";
$general_photos_width="Rozm&#x011B;ry detailn&#x00ED;ho zobrazen&#x00ED; fotky (&#x0161;&#x00ED;&#x0159;ka):";
$general_photos_width_info="&lt;- 512 (v&#x00FD;choz&#x00ED;)";
$general_photos_height="Rozm&#x011B;ry detailn&#x00ED;ho zobrazen&#x00ED; fotky (v&#x00FD;&#x0161;ka):";
$general_photos_height_info="&lt;- 384 (v&#x00FD;hoz&#x00ED;)";
$general_img_quality="Kvalita detaln&#x00ED;ho zobrazen&#x00ED;:";
$general_img_quality_info="&lt;- adjust image quality 0-100 (v&#x00FD;choz&#x00ED; - 75)";

$inst_status_3="Pros&#x00ED;m vypl&#x0148;te v&#x0161;echna pol&#x00ED;&#x010D;ka!";
$inst_status_step3="Krok 3 ze 4";

/* forth_stage_install (page 4) */
$inst_status_4="Gratulujeme! Instalace byla dokon&#x010D;ena! LinPHA je nyn&#x00ED; p&#x0159;ipraven k pou&#x017E;&#x00ED;v&#x00E1;n&#x00ED;.";
$inst_status_step4="Krok 4 ze 4";
$inst_submit="Konec";
$inst_db_tryconn="Pokou&#x0161;&#x00ED;m se p&#x0159;ipojit k DB severu";
$inst_db_tryconn_error="Chyba p&#x0159;i p&#x0159;ipojov&#x00E1;n&#x00ED; k DB serveru s parametry:";
$inst_db_tryconn_ok="OK, p&#x0159;ipojeno!";
$inst_db_tryinst="Pokou&#x0161;&#x00ED;m se vytvo&#x0159;it datab&#x00E1;zi:";
$inst_db_tryinst_error="Chyba p&#x0159;i vytv&#x00E1;&#x0159;en&#x00ED; datab&#x00E1;ze:";
$inst_db_tryinst_ok="OK, vytvo&#x0159;eno!";
$inst_create_tb_msg="OK, vytv&#x00E1;&#x0159;&#x00ED;m tabulky";

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
$inst_db_connect_inc_msg="Chyba p&#x0159;i p&#x0159;ipojov&#x00E1;n&#x00ED; k DB serveru!";
$inst_db_connect_inc_msg1="Chyba p&#x0159;i pokusu pou&#x017E;&#x00ED;t ".@$db_realname." z DB<br>
	Pokud se tato zpr&#x00E1;va zobraz&#x00ED; p&#x0159;i instalaci, mus&#x00ED;te ODSTRANIT soubor db_connect.php<br>
	v linpha &quot;sql&quot; podadres&#x00E1;&#x0159;i!";
/* ------------------------------------------------------------------ */

$table_create="Vytv&#x00E1;&#x0159;&#x00ED;m tabulku:";
$table_create_error="Chyba p&#x0159;i vytv&#x00E1;&#x0159;en&#x00ED; tabulky!";
$table_create_ok="OK, vytvo&#x0159;eno!";
$table_insert_admin="Vytv&#x00E1;&#x0159;&#x00ED;m Admina pojmenovan&#x00E9;ho jako:";
$table_insert_admin_error="Chyba p&#x0159;i vytv&#x00E1;&#x0159;en&#x00ED; &#x00FA;&#x010D;tu Admina!";
$table_insert_admin_ok="OK, vytvo&#x0159;en!";
$write_db_config="Ukl&#x00E1;d&#x00E1;m konfiguraci DB do souboru";
$fopen_error="Nemohu otev&#x0159;&#x00ED; sql/db_config.php pro z&#x00E1;pis, prove&#x010F;te p&#x0159;&#x00ED;kaz chmod 777 a spus&#x0165;te instalaci znovu";
$fopen_ok="OK, konfigurace zaps&#x00E1;na!";
$install_finish_msg="OK. Instalace ukon&#x010D;ena!!";
$admin_task="klep&#x0148;ete pro pokra&#x010D;ov&#x00E1;n&#x00ED;";
$file_create_ok="OK, vytvo&#x0159;eno!";
$configure_error="Pros&#x00ED;m vypl&#x0148;te v&#x0161;echny po&#x017E;adovan&#x00E9; kolonky !!!";
$could_not_open="Chyba, nemohu otev&#x0159;&#x00ED;t tabulku u&#x017E;ivatel&#x016F;! Vypad&#x00E1; to, &#x017E;e nem&#x00E1;te dostate&#x010D;n&#x00E1; pr&#x00E1;va na p&#x0159;id&#x00E1;v&#x00E1;n&#x00ED; nov&#x00FD;ch u&#x017E;ivatel&#x016F; do DB<br>
				Pros&#x00ED;m zvolte limitovan&#x00FD; p&#x0159;&#x00ED;stup instalace v kroku 2 b&#x011B;hem instalace<br>";

/*#################################################
## header.php
#################################################*/
$page_title="LinPHA - The Linux Photo Archive";
$head_title="Linux Foto Arch&#x00ED;v";
$book_home="dom&#x016F;";
$book_about="o aplikaci";
$book_admin="administrace";
$book_admin_user="moje nastaven&#x00ED;";
$book_links="odkazy";
$book_search="vyhled&#x00E1;v&#x00E1;n&#x00ED;";
$book_logout="odhl&#x00E1;sit";
$book_login="p&#x0159;ihl&#x00E1;sit";
$num_pictures="fotek:";
$user_visits="p&#x0159;&#x00ED;stup&#x016F;";
$user_online="u&#x017E;ivatel&#x016F; online";
$guest="n&#x00E1;v&#x0161;t&#x011B;vn&#x00ED;k";
$html_lang="cz";
$html_charset="windows-1250";

/*#################################################
## index.php
#################################################*/
$index_welc_text="Tohle je domov &quot;Linux Foto Arch&#x00ED;vu&quot; aka LinPHA.
                        Sledujte &#x010D;asto <a href='http://linpha.sf.net/'><u>Sourceforge</u></a> kv&#x016F;li updat&#x016F;m aplikace.";

/*#################################################
## search.php
#################################################*/
$search_header="Linpha-vyhled&#x00E1;v&#x00E1;n&#x00ED;";
$radio_all="V&#x0161;e";
$radio_descript="Popis";
$radio_comment="Koment&#x00E1;&#x0159;";
$radio_category="Kategorie";
$radio_file="N&#x00E1;zev souboru";
$search_in="Hledat v albu";
$search_all="V&#x0161;echny alba";
$search_for="Hledat kl&#x00ED;&#x010D;ov&#x00E9; slovo";
$search_button="Hledat";
$photos_found="nalezeno";
$search_info="LinPHA vyhled&#x00E1;v&#x00E1;n&#x00ED;";
$search_msg="Vyhled&#x00E1;v&#x00E1;n&#x00ED; fotografi&#x00ED; v LinPHA datab&#x00E1;zi podle:";

/*#################################################
## img_view.php
#################################################*/
$img_detail="Detaily obr&#x00E1;zku:";
$img_size="pln&#x00E1; velikost";
$img_com="koment&#x00E1;&#x0159;";
$img_des="popis";
$img_cat="kategorie";
$img_name="jm&#x00E9;no";
$img_info_stored="Koment&#x00E1;&#x0159;e zaps&#x00E1;ny do DB";
$please_login="Pro p&#x0159;d&#x00E1;n&#x00ED; koment&#x00E1;&#x0159;e se<a href='login.php'><font color='#000099'><u>p&#x0159;ihlaste.</u></font></a>";
$back_to_thumbs="<b><u>zp&#x011B;t na n&#x00E1;hledy</u></b>";
$back_to_search="<b><u>zp&#x011B;t na vyhled&#x00E1;v&#x00E1;n&#x00ED;</u></b>";
$button_next="dal&#x0161;&#x00ED;";
$button_prev="p&#x0159;edchoz&#x00ED;";
$exif_ext_error="Nenalezena podpora EXIF v t&#x00E9;to verzi PHP.";
$exif_error="Obr&#x00E1;zek neobsahuje &#x017E;&#x00E1;dn&#x00E9; EXIF informace!";
$exif_more="v&#x00ED;ce detail&#x016F;";
$exif_less="m&#x00E9;n&#x011B; detail&#x016F;";
$detail_header="Foto";
$detail_header1="z";
$detail_header2="ve slo&#x017E;ce";
$php_to_old="PHP < 4.2.0 EXIF vypnut!";
$views="x prohl&#x00E9;dnuto";
$slideshow="Prezentace";
$seconds="sekund";
$go="P&#x0159;ejdi";
$stopslide="Zastavit prezentaci";
/* image rotating */ /* TODO next */
$img_rotate_ok="oto&#x010D;it obr&#x00E1;zek";
$img_rotating="Probl&#x00E9;my s ot&#x00E1;&#x010D;en&#x00ED;m obr&#x00E1;zku"; // TOC entry
$img_rotating_hint1="Ot&#x00E1;&#x010D;en&#x00ED; obr&#x00E1;zk&#x016F; je VYPNUTO! Klepn&#x011B;te";
$img_rotating_hint2="pro bli&#x017E;&#x0161;&#x00ED; detaily";

/*#################################################
## login.php
#################################################*/
$login_msg="Pros&#x00ED;m p&#x0159;ihlaste se!";
$login_error="nezn&#x00E1;m&#x00FD; u&#x017E;ivatel nebo heslo";
$login_name="U&#x017E;ivatel";
$login_pass="Heslo";
$login_info="LinPHA p&#x0159;ihla&#x0161;ovac&#x00ED; str&#x00E1;nka";
$login_request_account_info="Pro z&#x00ED;sk&#x00E1;n&#x00ED; nov&#x00E9;ho &#x00FA;&#x010D;tu:"; /* TODO change! */
$login_request_target="Kontaktujte LinPHA administr&#x00E1;tora"; /* TODO */
$login_admin_info="Pro provededen&#x00ED; administrativn&#x00ED;ch akc&#x00ED; se p&#x0159;ihlaste s va&#x0161;&#x00ED;m administr&#x00E1;torsk&#x00FD;m &#x00FA;&#x010D;tem";
$login_friend_account_info="Pokud m&#x00E1;te &#x00FA;&#x010D;et typu &quot;p&#x0159;&#x00ED;tel&quot;,
m&#x016F;&#x017E;ete zde m&#x011B;nit sv&#x00E9; osobn&#x00ED; nastaven&#x00ED;.";


/*#################################################
## admin.php
#################################################*/
/* other messages */
$admin_page_header="LinPHA Administrace";
$please_turn_off_msg="Vypn&#x011B;te 'Automatick&#x00E9; vytv&#x00E1;&#x0159;en&#x00ED;/maz&#x00E1;n&#x00ED; n&#x00E1;hled&#x016F;' p&#x0159;i p&#x0159;id&#x00E1;v&#x00E1;n&#x00ED; fotek.<br>
						LinPHA pot&#x00E9; m&#x016F;&#x017E;e pracovat a&#x017E; 10x rychleji :-)";
/* left menu */
$logout_msg="odhl&#x00E1;sit se";
$welc_msg="V&#x00ED;tejte ";
$stat_msg="Nyn&#x00ED; jste opr&#x00E1;vn&#x011B;ni prov&#x00E1;d&#x011B;t administrativn&#x00ED; akce jako p&#x0159;id&#x00E1;v&#x00E1;n&#x00ED; <b>koment&#x00E1;&#x0159;&#x016F;</b> a popis&#x016F; k obr&#x00E1;zk&#x016F;m";
$back_to_msg="<b>zp&#x011B;t k fotk&#x00E1;m</b>";
$href_general_conf="Obecn&#x00E9; nastaven&#x00ED;";
$href_user_conf="U&#x017E;ivatelsk&#x00E9; nastaven&#x00ED;";
$href_folder_conf="Nastaven&#x00ED; slo&#x017E;ky";
$href_sql="Nastaven&#x00ED; MySQL datab&#x00E1;ze"; /* TODO */
$href_ftp="Pr&#x00E1;ce se soubory";
$href_stats="LinPHA statistiky";
$href_other_conf="Thumbnails EXIF/IPTC";


/* general config */
/* uses also entries from install.php */
$default_language="LinPHA v&#x00FD;choz&#x00ED; jazyk";
$default_language_info="&lt;--nastav&#x00ED; v&#x00FD;choz&#x00ED; jazyk aplikace";
$general_auto_lang="Povolit/zak&#x00E1;zat autodetekci jazyka"; /* TODO 2 lines*/
$general_auto_lang_info="&lt;-- automaticky detekuje jazyk podle n&#x00E1;v&#x0161;t&#x011B;vn&#x00ED;kova prohl&#x00ED;&#x017E;e&#x010D;e";
$general_success_msg="! Zm&#x011B;ny ulo&#x017E;eny !";

/* TODO 6 lines (addition and REPLACEMENT)*/
$general_rotate="Povolit/zak&#x00E1;zat ot&#x00E1;&#x010D;en&#x00ED; obr&#x00E1;zk&#x016F;";
$general_rotate_info="&lt;-- <b>Varov&#x00E1;n&#x00ED;! Klepn&#x011B;te pro dal&#x0161;&#x00ED; informace</b>";
$general_exifinfo="Povolit/zak&#x00E1;zat podporu EXIF";
$general_exifinfo_info="&lt;-- povolit/zak&#x00E1;zat pou&#x017E;&#x00ED;v&#x00E1;n&#x00ED; roz&#x0161;&#x00ED;&#x0159;en&#x00FD;ch EXIF informac&#x00ED;";
$general_exifdefault="Automaticky zobrazit EXIF informace";
$general_exifdefault_info="&lt;-- povolit automatick&#x00E9; zobrazov&#x00E1;n&#x00ED; EXIF informac&#x00ED;";

$general_exiflevel="Stupe&#x0148; EXIF informac&#x00ED;";
$general_exiflevel_info="&lt;-- nastav&#x00ED; detailnost EXIF informac&#x00ED;";
$exif_low="m&#x00E1;lo";
$exif_medium="st&#x0159;edn&#x011B;";
$exif_high="hodn&#x011B;";
$general_filename="Povolit/zak&#x00E1;zat zobrazov&#x00E1;n&#x00ED; n&#x00E1;zv&#x016F; soubor&#x016F;";
$general_filename_info="&lt;-- povol&#x00ED; zobrazov&#x00E1;n&#x00ED; n&#x00E1;zv&#x016F; soubor&#x016F; pod n&#x00E1;hledem";
$general_thumb_order="&#x0158;adit n&#x00E1;hledy podle";
$general_thumb_order_info="&lt;-- nastav&#x00ED; &#x0159;azen&#x00ED; n&#x00E1;hled&#x016F; podle data nebo n&#x00E1;zvu souboru";
$thumb_order_date="Datum";
$thumb_order_file="N&#x00E1;zev souboru";
$general_autoconf="Automaticky vytv&#x00E1;&#x0159;et/mazat n&#x00E1;hledy";
$general_autoconf_info="&lt;-- <b>vypn&#x011B;te pro citeln&#x00E9; zrychlen&#x00ED;</b>";
$general_counterstat="Povolit/zak&#x00E1;zat po&#x010D;&#x00ED;tadlo p&#x0159;&#x00ED;stup&#x016F;";
$general_counterstat_info="&lt;-- v&#x00FD;choz&#x00ED; = ano";
$general_blocking="Prodleva mezi p&#x0159;&#x00ED;stupy 1 IP adresy";
$general_blocking_info="&lt;-- u&#x017E;ivatel se nepo&#x010D;&#x00ED;t&#x00E1; jako nov&#x00FD; za x minut";
$general_theme="Nastavit LinPHA t&#x00E9;ma";
$general_theme_info="&lt;-- nastav&#x00ED; v&#x00FD;chozi LinPHA grafick&#x00FD; vzhled";
$aqua_theme="Vodn&#x00ED;";
$colored_theme="Barevn&#x00FD;";
$neptune_theme="Neptun";
$shadow_theme="St&#x00ED;nov&#x00FD;";
$general_hq="Povolit/zak&#x00E1;zat vysoce kvalitn&#x00ED; n&#x00E1;hledy a fotky";
$general_hq_info="&lt;-- vypn&#x011B;te pro citeln&#x00E9; zrychlen&#x00ED;";
$submit_button_general="Ulo&#x017E;it zm&#x011B;ny do datab&#x00E1;ze";
$button_on_msg="zap.";
$button_off_msg="vyp.";
$basic_opts="Z&#x00E1;kladn&#x00ED;";
$advanced_opts="Roz&#x0161;&#x00ED;&#x0159;en&#x00E9;";
$show_basics="::Klepn&#x011B;te pro zobrazen&#x00ED; z&#x00E1;kladn&#x00ED;ch mo&#x017E;nost&#x00ED;::";
$show_advanced="::Klepn&#x011B;te pro zobrazen&#x00ED; roz&#x0161;&#x00ED;&#x0159;en&#x00FD;ch mo&#x017E;nost&#x00ED;::";
$general_printing="Povolit/zak&#x00E1;zat tisk anonymn&#x00ED;m n&#x00E1;v&#x0161;t&#x011B;vn&#x00ED;k&#x016F;";
$general_printing_info="&lt;-- zapnuto = ka&#x017E;d&#x00FD; m&#x016F;&#x017E;e tisknout";
$general_slideshow="Povolit/zak&#x00E1;zat prezentace";
$general_slideshow_info="&lt;-- zak&#x00E1;zat/vypnout mo&#x017E;nost prezentace";
$general_mini_preview="Next/previous button image status/size";
$general_mini_preview_info="&lt;-- vypn&#x011B;te, pokud m&#x00E1; hodn&#x011B; u&#x017E;ivatel&#x016F; pomal&#x00E9; p&#x0159;ipojen&#x00ED;";

/* modify existing user table */
$mod_user_header="Zm&#x011B;nit nastaven&#x00ED; existuj&#x00ED;c&#x00ED;ch u&#x017E;ivatel&#x016F;";
$submit_button_mod_user="Zm&#x011B;nit u&#x017E;ivatele";
$mod_user_success_msg="! U&#x017E;ivatel zm&#x011B;n&#x011B;n !";
$submit_button_delete="Smazat";
$del_user_success_msg="! U&#x017E;ivatel smaz&#x00E1;n !";

/* add new user table */
$new_user_header="P&#x0159;idat nov&#x00E9;ho u&#x017E;ivatele";
$new_user_name_info="U&#x017E;ivatelsk&#x00E9; jm&#x00E9;no";
$new_user_pass_info="Heslo";
$new_user_mail_info="Email";
$new_user_level_info="Typ u&#x017E;ivatele";
$friend="p&#x0159;&#x00ED;tel";
$submit_button_new_user="P&#x0159;idat u&#x017E;ivatele";
$new_user_success_msg="! U&#x017E;ivatel vytvo&#x0159;en !";

/* friends account table */
$friend_user_header="Konfigurace &#x00FA;&#x010D;tu";
$submit_button_friend_user="Aktualizovat &#x00FA;&#x010D;et";
$delete_button_friend_user="Smazat &#x00FA;&#x010D;et";
$friend_info_msg="Nastavit/zm&#x011B;nit nastaven&#x00ED; va&#x0161;eho &#x00FA;&#x010D;tu";

/* add new category table */
$new_cat_header="P&#x0159;idat novou kategorii";
$new_cat_info="nov&#x00E1; kategorie na p&#x0159;id&#x00E1;n&#x00ED;";
$submit_button_new_cat="p&#x0159;idat kategori";
$new_cat_success_msg="! Kategorie p&#x0159;id&#x00E1;na !";
$mod_cat_header="Zm&#x011B;nit/smazat kategorii";
$cat_name_header="Jm&#x00E9;no kategorie";
$cat_mod_header="Zm&#x011B;nit kategorii";
$cat_del_header="Smazat kategorii";
$submit_button_mod_cat="Zm&#x011B;nit";

/* set directory permissions */
$set_dir_perms_header="Nastavit p&#x0159;&#x00ED;stupov&#x00E1; pr&#x00E1;va slo&#x017E;ky";
$dir_name="Slo&#x017E;ka";
$dir_perms="P&#x0159;&#x00ED;stupov&#x00E1; pr&#x00E1;va";
$action="Akce";
$submit_button_folder="odeslat";
$public="ve&#x0159;ejn&#x00FD;";
$friends="pro p&#x0159;&#x00E1;tele";
$private="osobn&#x00ED;";
$new_perms_success_msg="! P&#x0159;&#x00ED;stupov&#x00E1; pr&#x00E1;va zm&#x011B;n&#x011B;na !";

/*#################################################
## build_stats.php (called by admin.php)
#################################################*/
$stats_over_header="Celkov&#x00E9; statistiky";
$stats_over_photos="Fotografi&#x00ED; v datab&#x00E1;zi:";
$stats_over_views="Celkov&#x011B; zobrazeno fotek:";
$stats_over_albums="Alb v datab&#x00E1;zi";
$stats_over_most_alb_visists="Nejnav&#x0161;t&#x011B;vovan&#x011B;j&#x0161;&#x00ED; album:";
$stats_over_space="V&#x0161;echna alba zab&#x00ED;raj&#x00ED;:";
$stats_over_visitors="N&#x00E1;v&#x0161;t&#x011B;vn&#x00ED;k&#x016F;:";
$stats_over_users="Registrovan&#x00FD;ch u&#x017E;ivatel&#x016F;:";
$stats_top_ten="Nej 10 fotek";
$stats_rank="Hodnocen&#x00ED;:";
$stats_no_views="Po&#x010D;et zobrazen&#x00ED;:";
$stats_last_view="Posledn&#x00ED; zobrazen&#x00FD;:";
$stats_alb_name="N&#x00E1;zev alba:";

/*#################################################
## create_all_thumbs.php
#################################################*/
$parse_first="PRVN&#x00ED; F&#x00E1;ZE ANALYZOV&#x00E1;N&#x00ED;";
$parse_sec="DRUH&#x00E1; F&#x00E1;ZE ANALYZOV&#x00E1;N&#x00ED;";
$parse_third="T&#x0158;ET&#x00ED; F&#x00E1;ZE ANALYZOV&#x00E1;N&#x00ED;";
$parse="nyn&#x00ED; analyzuji";
$parsed="analyzov&#x00E1;no:";
$dirs="podadres&#x00E1;&#x0159;e";
$done="Dokon&#x010D;eno...";
$not_allowed_msg="Nejste opr&#x00E1;vn&#x011B;ni spu&#x0161;t&#x011B;t tento skript!";
/* these entries are called from within admin.php */
$th_msg="Vytvo&#x0159;te v&#x0161;echny n&#x00E1;hledy najednou!";
$table_hint_msg="Klepn&#x011B;te na start a vytvo&#x0159;&#x00ED;te n&#x00E1;hledy ve v&#x0161;ech podadres&#x00E1;&#x0159;&#x00ED;ch!";
$start_button="Start!";
$recreate_thumbs_header="Vytvo&#x0159;it znovu v&#x0161;echny n&#x00E1;hledy";
$recreate_thums_msg="Toto znovu vytvo&#x0159;&#x00ED; v&#x0161;echny n&#x00E1;hledy! V&#x0161;echny koment&#x00E1;&#x0159;e a popisy budou vymaz&#x00E1;ny!";
$recreate_thums_warning="Pros&#x00ED;m potvr&#x010F;te va&#x0161;e rozhodnut&#x00ED; znovu vytvo&#x0159;it v&#x011B;echny n&#x00E1;hledy a smazat v&#x0161;echny koment&#x00E1;&#x0159;e, popisy a nastaven&#x00ED;! Tato opreace je nevratn&#x00E1;. Jste si opravdu jisti?";

/*#################################################
## Printing, all files
#################################################*/
$print_layout="Zvolte rozlo&#x017E;en&#x00ED; tisku";
$images_page="Obr&#x00E1;zk&#x016F; na str&#x00E1;nku";
$indexprint="Index print (28)";
$note="<strong>POZN&#x00E1;MKA:</strong> Mo&#x017E;n&#x00E1; budete muset nastavit  \"form&#x00E1;t str&#x00E1;nky\" ve va&#x0161;em prohl&#x00ED;&#x017E;e&#x010D;i
			p&#x0159;ed vlastn&#x00ED;m tiskem, aby jste si byli jisti, &#x017E;e v&#x0161;echny fotky jsou na str&#x00E1;nce!!!";
$print_button="N&#x00E1;hled tisku";
$href_check_all="Ozna&#x010D;it v&#x0161;e";
$href_clear_all="Zru&#x0161;it ozna&#x010D;en&#x00ED;";
$print_error="CHYBA, nejsou vybr&#x00E1;ny &#x017E;&#x00E1;dn&#x00E9; obr&#x00E1;zky !!!";
$print_mode="M&#x00F3;d tisku";
$print_image="Tisk obr&#x00E1;zku";
$videos_msg="Nemohu tisknout videa";

/*#################################################
## FTP, all files
#################################################*/


/*#################################################
## MySQL backup, most files ;-)
#################################################*/
$mysql_info_header="LinPHA nastaven&#x00ED; datab&#x00E1;ze MySQL ver.";
$mysql_cancel="Zru&#x0161;it";
$mysql_DHTML_hint="Dynamick&#x00E9; zobrazov&#x00E1;n&#x00ED; je vypnuto - dokud nebude z&#x00E1;lohov&#x00E1;n&#x00ED; ukon&#x010D;eno, nic neuvid&#x00ED;te.";
$mysql_select_all="Vybrat v&#x0161;e";
$mysql_deselect_all="Zru&#x0161;it v&#x0161;e";
$mysql_create_backup="Vytvo&#x0159;it z&#x00E1;lohu";
$mysql_back_menu="Zp&#x011B;t na menu";
$mysql_table_checks="Kontroluji tabulky...";
$mysql_table_check="Rovn&#x00E1;m tabulku";
$mysql_struct_msg="Vytv&#x00E1;&#x0159;&#x00ED;m strukturu pro";
$mysql_in_file_dump_msg="dumping data for";
$mysql_progress="Celkov&#x00FD; postup:";
$mysql_back_complete="Z&#x00E1;loha hotova v";
$mysql_back_menu_long="Zp&#x011B;t na menu MySQL z&#x00E1;lohy";
$mysql_open_warn1="<B>Varov&#x00E1;n&#x00ED;:</B> nepoda&#x0159;ilo se otev&#x0159;&#x00ED;t ";
$mysql_open_warn2="pro z&#x00E1;pis!<BR><BR>P&#x0159;&#x00ED;kaz<I> CHMOD 777</I> to m&#x016F;&#x017E;e spravit.";
$mysql_date_msg="Nyn&#x00ED; je "; // it follows time of the day...
$mysql_last_backup="Posledn&#x00ED; kompletn&#x00ED; z&#x00E1;loha MySQL datab&#x00E1;ze provedena: ";
$mysql_backup_hint="Z&#x00E1;lohov&#x00E1;n&#x00ED; v&#x00ED;cekr&#x00E1;t ne&#x017E; 1x t&#x00FD;dn&#x011B; nen&#x00ED; pot&#x0159;eba.";
$mysql_down_backup="St&#x00E1;hnout p&#x0159;edchoz&#x00ED; kompletn&#x00ED; z&#x00E1;lohu ";
$mysql_down_backup_part="St&#x00E1;hnout p&#x0159;edchoz&#x00ED; &#x010D;&#x00E1;ste&#x010D;nou z&#x00E1;lohu ";
$mysql_down_backup_struct="St&#x00E1;hnout p&#x0159;edchoz&#x00ED; z&#x00E1;lohu struktury ";
$mysql_down_backup1="(prav&#x00E1; my&#x0161;, Ulo&#x017E;it jako...)";
$mysql_unknown_backup="P&#x0159;edchoz&#x00ED; z&#x00E1;loha MySQL datab&#x00E1;ze: <I>nezn&#x00E1;m&#x00E1;</I>";
$mysql_href_recom="Vytvo&#x0159;it novou kompletn&#x00ED; z&#x00E1;lohu se v&#x0161;emi z&#x00E1;znamy (doporu&#x010D;ena)";
$mysql_href_standard="Vytvo&#x0159;it novou kompletn&#x00ED; z&#x00E1;lohu se standartn&#x00ED;mi z&#x00E1;znamy (men&#x0161;&#x00ED; objem dat)";
$mysql_href_partial="Vytvo&#x0159;it novou &#x010D;&#x00E1;ste&#x010D;nou z&#x00E1;lohu ze zvolen&#x00FD;ch tabulek (se v&#x0161;emi z&#x00E1;znamy)";
$mysql_href_structure="Vytvo&#x0159;it novou kompletn&#x00ED; z&#x00E1;lohu struktury tabulek";
$mysql_days_last="dn&#x00ED;";
$mysql_hours_last="hodin";
$mysql_min_last="minut";
$mysql_sec_last="sekund";
$ago="zp&#x011B;t"; // reads in context "some days ago"
$backup="Z&#x00E1;lohovat";
$restore="Obnovit";
$optimize="Optimalizovat";
$optimize_tables="Optimalizuji tabulky";
$opt_table_name="N&#x00E1;zev tabulkyTable name";
$opt_table_check="Kontrola tabulkyTable check";
$opt_table_optimize="Optimalizace tabulky";
$opt_table_msg="Typ zpr&#x00E1;vy";
$opt_start_msg="Za&#x010D;it kontrolu a optimalizaci v&#x0161;ech tabulek datab&#x00E1;ze";
$fullback_hint_msg="Pokud m&#x00E1;te v&#x00ED;ce datab&#x00E1;z&#x00ED;, zvolte <b>&#x010D;&#x00E1;ste&#x010D;nou</b> z&#x00E1;lohu";
$restore_last_fullback="Obnovit posledn&#x00ED; <b>kompletn&#x00ED;</b> z&#x00E1;lohu:";
$restore_last_partback="Obnovit posledn&#x00ED; <b>&#x010D;&#x00E1;ste&#x010D;nou</b> z&#x00E1;lohu:";
$restore_error="CHYBA p&#x0159;i otev&#x00ED;r&#x00E1;n&#x00ED; z&#x00E1;lo&#x017E;n&#x00ED;ho souboru. Soubor nenalezen!";
$restore_success="&#x00FA;sp&#x011B;&#x0161;n&#x011B; obnoveno!";

/*########################################################################
### FILEMANGER
########################################################################*/

define('STR_ACCESS_DENIED','<H1>p&#x0159;&#x00ED;stup zam&#x00ED;tnut</H1> nem&#x00E1;te dostate&#x010D;n&#x00E1; pr&#x00E1;va pro p&#x0159;&#x00ED;stup do tohoto adres&#x00E1;&#x0159;e');
define('STR_BACK',	'zp&#x011B;t');
define('STR_LESS',	'm&#x00E9;n&#x011B;');
define('STR_MORE',	'v&#x00ED;ce');
define('STR_LINES',	'&#x0159;&#x00E1;dk&#x016F;');
define('STR_FUNCTIONLIST', 'Seznam funkc&#x00ED;');
define('STR_EDIT',	'upravit');
define('STR_VIEW',	'zobrazit');
define('STR_RENAME',	'p&#x0159;ejmenovat');
define('STR_MKDIR',		'vytvo&#x0159;it adres&#x00E1;&#x0159;');
define('STR_DELETE',	'smazat');
define('STR_BOTTOM',	'dol&#x016F;');
define('STR_TOP',		'nahoru');
define('STR_FILENAME',	   'n&#x00E1;zev souboru');
define('STR_FILESIZE',	   'velikost');
define('STR_LASTMODIFIED', 'naposled zm&#x011B;n&#x011B;n');
define('STR_SUM', '<B>%s</B> byt(&#x016F;) v <B>%s</B> polo&#x017E;k&#x00E1;ch');
define('STR_CREATEDIRLEGEND', 'vytvo&#x0159;it adres&#x00E1;&#x0159;');
define('STR_CREATEDIR',       'jm&#x00E9;no vytv&#x00E1;&#x0159;en&#x00E9;ho adres&#x00E1;&#x0159;e:');
define('STR_CREATEDIRBUTTON', 'vytvo&#x0159;it adres&#x00E1;&#x0159;');
define('STR_RENAMELEGEND',       'p&#x0159;ejmenovat');
define('STR_RENAMEENTERNEWNAME', 'zadejte nov&#x00FD; n&#x00E1;zev pro %s:');
define('STR_RENAMEBUTTON',       'p&#x0159;ejmenovat');
define('STR_ERROR_DIR','Chyba: nelze na&#x010D;&#x00ED;st obsah adres&#x00E1;&#x0159;e');
define('STR_AUDIO',            'audio');
define('STR_COMPRESSED',       'arch&#x00ED;v');
define('STR_EXECUTABLE',       'spustiteln&#x00FD;');
define('STR_IMAGE',            'obr&#x00E1;zek');
define('STR_SOURCE_CODE',      'zdrojov&#x00FD; k&#x00F3;d');
define('STR_TEXT_OR_DOCUMENT', 'text nebo dokument');
define('STR_WEB_ENABLED_FILE', 'webov&#x00FD; soubor');
define('STR_VIDEO',            'video');
define('STR_DIRECTORY',        'adres&#x00E1;&#x0159;');
define('STR_PARENT_DIRECTORY', 'p&#x0159;edchoz&#x00ED; adres&#x00E1;&#x0159;');
define('STR_EDITOR_SAVE',      'ulo&#x017E;it soubor');
define('STR_EDITOR_SAVE_ERROR','do souboru <I>%s</I> nelze zapsat nebo neexistuje');
define('STR_EDITOR_SAVE_ERROR_WRONG_VALUE','p&#x0159;i editaci souboru <I>%s</I>, v&#x00E1;m byla d&#x00E1;na n&#x00E1;sleduj&#x00ED;c&#x00ED; hodnota na pozici bytu #%s: %s.');
define('STR_EDITOR_SAVE_ERROR_HEX_VALUE_NEEDED','vzhledem k nastaven&#x00ED; mus&#x00ED;te nastavit hodnotu v &#x0161;estn&#x00E1;ctkov&#x00E9; soustav&#x011B; mezi 00 a FF.');
define('STR_EDITOR_SAVE_ERROR_DEC_VALUE_NEEDED','vzhledem k nastaven&#x00ED; mus&#x00ED;te nastavit hodnotu v des&#x00ED;tkov&#x00E9; soustav&#x011B; mezi 0 a 255.');
define('STR_FILE_UPLOAD_NAVI_HINT', 'Pr&#x016F;zkumn&#x00ED;k');
define('STR_FILE_UPLOAD_DRIVES', 'Diskov&#x00E9; jednotky:');
define('STR_FILE_UPLOAD', 'nahr&#x00E1;t');
define('STR_FILE_UPLOAD_MAIN', 'nahr&#x00E1;t soubory');
define('STR_FILE_UPLOAD_DISABLED', 'nahr&#x00E1;v&#x00E1;n&#x00ED; soubor&#x016F; je zak&#x00E1;z&#x00E1;no v  php.ini');
define('STR_FILE_UPLOAD_DESC','Zvolte soubor, kter&#x00FD; chcete nahr&#x00E1;t. Zvolte po&#x017E;edovan&#x00FD; &#x00FA;kon pro &#x00FA;sp&#x011B;&#x0161;n&#x00E9; ukon&#x010D;en&#x00ED; nahr&#x00E1;vn&#x00ED;.');
define('STR_FILE_UPLOAD_FILE','Soubor');
define('STR_FILE_UPLOAD_TARGET','Nahr&#x00E1;t soubor(y) do');
define('STR_FILE_UPLOAD_ACTION','a&#x017E; bude nahr&#x00E1;v&#x00E1;n&#x00ED; uko&#x010D;eno:');
define('STR_FILE_UPLOAD_NOTHING','nic neprov&#x00E1;d&#x011B;t');
define('STR_FILE_UPLOAD_DROPFILE','smazat nahr&#x00E1;van&#x00FD; soubor, jakmile bude zvolen&#x00FD; &#x00FA;kon ukon&#x010D;en');
define('STR_FILE_UPLOAD_MAXFILESIZE','Moment&#x00E1;ln&#x011B; povolen&#x00E1; maxim&#x00E1;ln&#x00ED; velikost souboru (ka&#x017E;d&#x00E9;ho!) v php.ini je');
define('STR_FILE_UPLOAD_ERROR',        'Chyba: Nelze p&#x0159;esunout soubor %s do adres&#x00E1;&#x0159;e %s');
define('STR_FILE_UPLOAD_CHDIR_ERROR',  'Chyba: Nelze se p&#x0159;epnout (chdir) do adres&#x00E1;&#x0159;e %s . Pr&#x00E1;v&#x011B; zpracov&#x00E1;van&#x00FD; soubor: %s');
define('STR_FILE_UPLOAD_UNLINK_ERROR', 'Chyba: Nelze po zpracov&#x00E1;n&#x00ED; smazat %s .');
define('STR_FILE_UPLOAD_ERROR_FILE_EXCEEDS_INI_SIZE', 'Chyba: Velikost nahr&#x00E1;van&#x00E9;ho souboru %s p&#x0159;ekra&#x010D;uje maxim&#x00E1;ln&#x00ED; velikost (upload_max_filesize) v php.ini - %s');
define('STR_FILE_UPLOAD_ERROR_FILE_EXCEEDS_FORM_SIZE','Chyba: Velikost nahr&#x00E1;van&#x00E9;ho souboru %s p&#x0159;ekra&#x010D;uje HTML FORM nastaven&#x00ED;');
define('STR_FILE_UPLOAD_ERROR_FILE_PARTIAL',          'Chyba: Nahr&#x00E1;van&#x00FD; soubor %s byl nahr&#x00E1;n pouze &#x010D;&#x00E1;ste&#x010D;n&#x011B;');

/*########################################################################
### BIG FAT NOTICE !
### AS OF LINPHA 0.9.0 ALL NEW ENTRIES ARE PLACED BELOW THIS MSG
### DEVELOPERS PLEASE MAKE USE OF THE "LANGUPDATE.PHP" SCRIPT!
########################################################################*/

$pano_view="panoramatick&#x00FD; pohled"; /* (img_view.php) -- new [panorama view] href  */
$close_win="Zav&#x0159;&#x00ED;t okno"; /* (various files) -- javascript close window */
$nav_hint="Pros&#x00ED;m pou&#x017E;ijte my&#x0161; nebo &#x0161;ipky pro posouv&#x00E1;n&#x00ED;!"; /* (image_panorama_view.php) --  */
$pano_view_of="Panoramatick&#x00FD; pohled obr&#x00E1;zku"; /* (image_panorama_view.php) -- header message */
$php_basedir_check_msg="kontroluji, zda vychoz&#x00ED; adres&#x00E1;&#x0159; PHP je nastaven..."; /* (sec_stage_install.php) --  */
$req_basedir_fail="NE"; /* (sec_stage_install.php) -- YES, it\'s really just no/nein ;-) */
$basedir_active_msg="&#x0160;patn&#x011B; - va&#x0161;e PHP je nakonfigurov&#x00E1;no na pou&#x017E;&#x00ED;v&#x00E1;n&#x00ED; \"open_basedir\", moment&#x00E1;ln&#x011B; nastaveno na ".@$basedir_name." !<br>"; /* (sec_stage_install.php) --  */
$basedir_active_msg1="+ LinPHA pou&#x017E;ije knihovnu GD k vytv&#x00E1;&#x0159;en&#x00ED; n&#x00E1;hled&#x016F;, ale o&#x010D;ek&#x00E1;vejte probl&#x00E9;my<br>"; /* (sec_stage_install.php) --  */
$basedir_active_msg2="+ Pokud mo&#x017E;no, zru&#x0161;te nastaven&#x00ED; \"open_basedir\" v PHP.ini"; /* (sec_stage_install.php) --  */
$gd_basedir_err="+ Pokud mo&#x017E;no, zru&#x0161;te nastaven&#x00ED; \"open_basedir\" v PHP.ini nebo p&#x0159;ekompilujte PHP s podporou knihovny GD (--with-gd)"; /* (sec_stage_install.php) --  */
$extract_tar_gz="rozbalit *.tar.gz arch&#x00ED;v (UNIX)"; /* (index.php) -- filemanger upload select */
$extract_tar_bz2="rozbalit *.tar.bz2 arch&#x00ED;v (UNIX)"; /* (index.php) --  */
$extract_gz="rozbalit pomoc&#x00ED; gzip (UNIX)"; /* (index.php) -- filemanger upload select */
$extract_zip="rozbalit pomoc&#x00ED; unzip (UNIX)"; /* (index.php) -- filemanger upload select */
$extract_winzip="rozbalit pomoc&#x00ED; pkzip (WINDOWS WINZIP)"; /* (index.php) -- filemanger upload select */
$new_group_success_msg="! Skupina p&#x0159;id&#x00E1;na !"; /* (admin.php) -- redirect message */
$mod_group_success_msg="! Skupina zm&#x011B;n&#x011B;na !"; /* (admin.php) -- redirect message */
$del_group_success_msg="! Skupina smaz&#x00E1;na !"; /* (admin.php) -- redirect message */
$mod_cat_success_msg="! Kategorie zm&#x011B;n&#x011B;na !"; /* (admin.php) -- redirect message */
$del_cat_success_msg="! Kategorie smaz&#x00E1;na !"; /* (admin.php) -- redirect message */
$href_groups="Klepn&#x011B;te pro p&#x0159;id&#x00E1;n&#x00ED; nebo zm&#x011B;n&#x011B;n&#x00ED; skupiny"; /* (build_user_conf/build_folder_conf) -- href message to group management */
$del_warning="VAROV&#x00E1;N&#x00ED;: Mus&#x00ED;te se p&#x0159;ihl&#x00E1;sit pomoc&#x00ED; vaeho nov&#x00E9;ho &#x00FA;&#x010D;tu !!!"; /* (build_user_conf.php) -- java popup to notify admin user */
$href_to_folder_conf="zp&#x011B;t na spr&#x00E1;vu slo&#x017E;ek"; /* (build_user_conf.php) -- navi href  */
$href_to_user_conf="zp&#x011B;t na spr&#x00E1;vu u&#x017E;ivatel&#x016F;"; /* (build_user_conf.php) -- navi href  */
$header_new_group="P&#x0159;idat novou skupinu"; /* (build_user_conf.php) -- table header */
$header_groupname="N&#x00E1;zev skupiny"; /* (build_user_conf.php) -- table header */
$button_addgroup="P&#x0159;idat skupinu"; /* (build_user_conf.php) -- submit button */
$header_mod_group="Zm&#x011B;nit/mazat skupiny"; /* (build_user_conf.php) -- table header */
$mod_group_header="Zm&#x011B;nit skupinu"; /* (build_user_conf.php) -- table header */
$del_group_header="Smazat skupinu"; /* (build_user_conf.php) -- table header */
$search_to_short="Hledan&#x00FD; &#x0159;et&#x011B;zec je p&#x0159;&#x00ED;li kr&#x00E1;tk&#x00FD; - mus&#x00ED; b&#x00FD;t nejm&#x00E9;n&#x011B; 2 znaky dlouh&#x00FD;!"; /* (search.php) --  */
$general_thumb_size="Zm&#x011B;nit velikost n&#x00E1;hledu"; /* (build_general_conf.php) -- thumbsize stuff */
$general_thumb_size_info="<-- nastav&#x00ED; maxim&#x00E1;ln&#x00ED; velikost n&#x00E1;hledu v pixelech"; /* (build_general_conf.php) -- thumbsize stuff */
$general_thumb_border="Povolit/zak&#x00E1;zat r&#x00E1;me&#x010D;ek kolem n&#x00E1;hledu"; /* (build_general_conf.php) -- thumb border stuff */
$general_thumb_border_info="<-- m&#x016F;e p&#x0159;idat r&#x00E1;me&#x010D;ek kolem n&#x00E1;hledu"; /* (build_general_conf.php) -- thumb border stuff */
$inst_thumbsize_header="Zvolte rozm&#x011B;ry n&#x00E1;hledu"; /* (third_stage_install.php) -- thumb size stuff */
$inst_thumbborder_header="Nastaven&#x00ED; r&#x00E1;me&#x010D;ku"; /* (third_stage_install.php) -- thumb border stuff */
$inst_thumbborder_enable="povolit r&#x00E1;me&#x010D;ek kolem obr&#x00E1;zku"; /* (third_stage_install.php) -- thumb border checkbox msg */
$inst_thumbborder_disable="zak&#x00E1;zat r&#x00E1;me&#x010D;ek kolem obr&#x00E1;zku"; /* (third_stage_install.php) -- thumb border checkbox msg */
$safemode_active_msg="&#x0160;patn&#x00E9;, &#x0161;patn&#x00E9;, &#x0161;patn&#x00E9;. M&#x00E1;te PHP nakonfigurov&#x00E1;no tak, aby pracovalo v PHP \"safe_mode\"!<br>"; /* (sec_stage_install.php) --  */
$safemode_active_msg2="+ Pokud je to mo&#x017E;n&#x00E9;, zru&#x0161;te pros&#x00ED;m \"safe_mode\" v PHP.ini"; /* (sec_stage_install.php) --  */
$general_anon_post="Povolit/zak&#x00E1;zat anonymn&#x00ED; zpr&#x00E1;vy"; /* (build_general_conf.php) --  */
$general_anon_post_info="<-- anonym m&#x016F;&#x017E;e p&#x0159;id&#x00E1;vat koment&#x00E1;&#x0159;e"; /* (build_general_conf.php) --  */
$stats_over_comment="P&#x0159;id&#x00E1;no koment&#x00E1;&#x0159;&#x016F;"; /* (build_stats.php) --  */
$top10_downs_href="uka&#x017E; top 10 sta&#x017E;en&#x00FD;ch fotek"; /* (build_stats.php) --  */
$top10_views_href="uka&#x017E; top 10 prohl&#x00E9;dnut&#x00FD;ch fotek"; /* (build_stats.php) --  */
$stats_head_downs="Top 10 sta&#x017E;en&#x00FD;ch fotek"; /* (build_stats.php) --  */
$no_downloads="Po&#x010D;et sta&#x017E;en&#x00FD;ch fotek"; /* (build_stats.php) --  */
$general_anon_download="Povolit/zak&#x00E1;zat anonymn&#x00ED; stahov&#x00E1;n&#x00ED;"; /* (build_genera_config.php) --  */
$general_anon_download_info="<-- uk&#x00E1;zat/schovat odkaz na sta&#x017E;en&#x00ED; u obr&#x00E1;zk&#x016F;"; /* (build_general_config.php) --  */
$seach_multiple_select_use="Pro v&#x00ED;cen&#x00E1;sobn&#x00FD; v&#x00FD;b&#x011B;r pou&#x017E;ij"; /* (search.php) --  */
$search_and="AND"; /* (search.php) --  */
$search_or="OR"; /* (search.php) --  */
$search_categories="Kategorie"; /* (search.php) --  */
$search_with_available_filters="S dostupn&#x00FD;mi filtry"; /* (search.php) --  */
$search_select_album="Vyber album"; /* (search.php) --  */
$search_date_from_to="Datum od / do"; /* (search.php) --  */
$search_combination_and_or="V kombinaci s AND a OR"; /* (search.php) --  */
$new_user_new_password="Nov&#x00E9; heslo"; /* (build_user_conf.php) --  */
$new_user_error4="U&#x017E;ivatelsk&#x00E9; jm&#x00E9;no nem&#x016F;&#x017E;e b&#x00FD;t pr&#x00E1;zdn&#x00E9;"; /* (admin.php) --  */
$new_user_error5="U&#x017E;ivatelsk&#x00E9; jm&#x00E9;no ji&#x017E; existuje"; /* (admin.php) --  */
$new_user_error1="Star&#x00E9; heslo nen&#x00ED; spr&#x00E1;vn&#x011B;"; /* (admin.php) --  */
$new_user_error2="Ov&#x011B;&#x0159;en&#x00ED; nov&#x00E9;ho hesla nesouhlas&#x00ED;"; /* (admin.php) --  */
$new_user_error3="Email nen&#x00ED; spr&#x00E1;vn&#x011B;"; /* (admin.php) --  */
$new_user_old_password="Star&#x00E9; heslo"; /* (admin.php) --  */
$new_user_retype_password="Zadejte znovu nov&#x00E9; heslo"; /* (admin.php) --  */
$select_db_header="Pros&#x00ED;m zvolte typ datab&#x00E1;ze"; /* (sec_stage_install.php) --  */
$mysql_info="Zvolte toto pro p&#x0159;&#x00ED;stup do MySQL datab&#x00E1;ze"; /* (sec_stage_install.php) --  */
$postgres_info="Zvolte toto pro p&#x0159;&#x00ED;stup do PostgreSQL datab&#x00E1;ze. Pros&#x00ED;m &#x010D;t&#x011B;te"; /* (sec_stage_install.php) -- reads: ...Please see info */
$login_autologin="Automatick&#x00E9; p&#x0159;ihl&#x00E1;&#x0161;en&#x00ED;"; /* (toc.php) --  */
$login_autologin_user="Informace o u&#x017E;ivateli pro automatick&#x00E9; p&#x0159;ihl&#x00E1;&#x0161;en&#x00ED;"; /* (toc.php) --  */
$toc_timer="&#x010C;asova&#x010D;"; /* (toc.php) --  */
$general_autologin="Povolit/zak&#x00E1;zat automatick&#x00E9; p&#x0159;ihla&#x0161;ov&#x00E1;n&#x00ED;"; /* (build_general_conf.php) --  */
$general_autologin_info="<-- za&#x0161;rtn&#x011B;te, pokud chete vyu&#x017E;&#x00ED;vat automatick&#x00E9; p&#x0159;ihla&#x0161;ov&#x00E1;n&#x00ED;"; /* (build_general_conf.php) --  */
$general_timer="Povolit/zak&#x00E1;zat &#x010D;asova&#x010D;"; /* (build_general_conf.php) --  */
$general_timer_info="<-- za&#x0161;krtn&#x011B;te, pokud chete zobrazit ?parsetime? v z&#x00E1;pat&#x00ED;"; /* (build_general_conf.php) --  */
$login_autlogin="Automatick&#x00E9; p&#x0159;ihl&#x00E1;&#x0161;en&#x00ED;"; /* (login.php) --  */
$lostpw_title="Ztracen&#x00E9; heslo"; /* (login.php) --  */
$lostpw_question="Ztratili jste heslo?"; /* (login.php) --  */
$lostpw_type_user_or_email="Zadejte Va&#x0161;e u&#x017E;ivatelsk&#x00E9; jm&#x00E9;no NEBO emailovou adresu zadavou v Linpha"; /* (login.php) --  */
$lostpw_email1="N&#x011B;kdo vyu&#x017E;il funkci pro zji&#x0161;t&#x011B;n&#x00ED; ztraecen&#x00E9;ho hesla. Pokud jste to nebyl Vy, prost&#x011B; tento email ignorujte a s Va&#x0161;&#x00ED;m heslem se nic nestane. Pokud jste to byl Vy, zadejte tento k&#x00F3;d do po&#x017E;adovan&#x00E9;ho pole:"; /* (login.php) --  */
$lostpw_email1_part2="(Pamatujte: toto NEN&#x00ED; Va&#x0161;e nov&#x00E9; heslo!)"; /* (login.php) --  */
$lostpw_email1_part3="V&#x00E1;&#x0161; Linpha-Administrator"; /* (login.php) --  */
$lostpw_email_error="Chyba: E-Mail nemohl b&#x00FD;t odesl&#x00E1;n. Kontaktujte Administr&#x00E1;tora."; /* (login.php) --  */
$lostpw_error_nothing_found="Omlov&#x00E1;me se, u&#x017E;ivatelsk&#x00E9; jm&#x00E9;no nebo heslo neodpov&#x00ED;d&#x00E1; Va&#x0161;im po&#x017E;adavk&#x016F;m."; /* (login.php) --  */
$lostpw_email_sent="E-Mail k V&#x00E1;m byl odesl&#x00E1;n."; /* (login.php) --  */
$lostpw_should_receive="M&#x011B;l by jste ho obdr&#x017E;et b&#x011B;hem n&#x011B;kolika minut. Zadejte k&#x00F3;d z Emailu do tohoto pole:"; /* (login.php) --  */
$lostpw_go_back="Zp&#x011B;t"; /* (login.php) --  */
$lostpw_email2="Heslo &#x00FA;sp&#x011B;&#x0161;n&#x011B; zmn&#x011B;no. Va&#x0161;e nov&#x00E9; heslo je:"; /* (login.php) --  */
$lostpw_email2_part2="M&#x016F;&#x017E;ete ho zm&#x011B;nit pozd&#x011B;ji  vyu&#x017E;it&#x00ED;m odkazu \"nastaven&#x00ED;\"."; /* (login.php) --  */
$lostpw_new_password="Nov&#x00E9; heslo"; /* (login.php) --  */
$lostpw_successfully_changed="Heslo &#x00FA;sp&#x011B;&#x0161;n&#x011B; zm&#x011B;n&#x011B;no, b&#x011B;hem n&#x011B;kolika minut by V&#x00E1;m m&#x011B;l p&#x0159;ij&#x00ED;t email s nov&#x00FD;m heslem."; /* (login.php) --  */
$lostpw_error_wrong_code="Pardon, ale to nen&#x00ED; spr&#x00E1;vn&#x011B;."; /* (login.php) --  */
$lostpw_enter_correct_code="Zadejte spr&#x00E1;vn&#x00FD; k&#x00F3;d z emailu do tohoto pole:"; /* (login.php) --  */
$lang_plugins['plugins']="LinPHA Plugins"; /* (admin.php) --  */
$lang_plugins['watermark']="Watermark"; /* (admin.php, toc.php) --  */
$lang_plugins['benchmark']="Benchmark"; /* (admin.php, toc.php) --  */
$lang_plugins['sql']="DB Management"; /* (admin.php, toc.php) --  */
$lang_plugins['active_plugins']="Aktivn&#x00ED; Plugins"; /* (admin.php) --  */
$lang_plugins['enabled']="Povoleno"; /* (plugins.php) --  */
$lang_plugins['disabled']="Zak&#x00E1;z&#x00E1;no"; /* (plugins.php) --  */
$lang_plugins['update']="Update"; /* (plugins.php) --  */
$lang_plugins['plugins_updated']="Plugins updated"; /* (admin.php, plugins.php) --  */
$wm_wm_man="Watermark Management "; /* (watermark.php) --  */
$wm_disable="Zak&#x00E1;zat Watermark "; /* (watermark.php) --  */
$wm_change_example_img="Zm&#x011B;nit jm&#x00E9;no obr&#x00E1;zku p&#x0159;&#x00ED;kladu "; /* (watermark.php) --  */
$wm_no_input_files_found="&#x017D;&#x00E1;dn&#x00E9; vstupn&#x00ED; soubory nenalezeny "; /* (watermark.php) --  */
$wm_image_quality="Kvalita obr&#x00E1;zku (pouze pro n&#x00E1;hled) "; /* (watermark.php) --  */
$wm_enable_text="Povolit: Text "; /* (watermark.php) --  */
$wm_text="Text "; /* (watermark.php) --  */
$wm_font="Font "; /* (watermark.php) --  */
$wm_fontsize="Velikost fontu "; /* (watermark.php) --  */
$wm_fontcolor="Barva fontu "; /* (watermark.php) --  */
$wm_align="Zarovn&#x00E1;n&#x00ED; "; /* (watermark.php) --  */
$wm_pos_hor="Horizont&#x00E1;ln&#x00ED; pozice "; /* (watermark.php) --  */
$wm_pos_ver="Vertik&#x00E1;ln&#x00ED; pozice "; /* (watermark.php) --  */
$wm_height="V&#x00FD;&#x0161;ka textov&#x00E9;ho pole "; /* (watermark.php) --  */
$wm_width="D&#x00E9;lka textov&#x00E9;ho pole "; /* (watermark.php) --  */
$wm_shadow_size="Velikost st&#x00ED;nu "; /* (watermark.php) --  */
$wm_shadow_color="Barva st&#x00ED;nu "; /* (watermark.php) --  */
$wm_enable_image="Povolit: Obr&#x00E1;zek"; /* (watermark.php) --  */
$wm_available_images="Dostupn&#x00E9; obr&#x00E1;zky"; /* (watermark.php) --  */
$wm_no_images_found="&#x017D;&#x00E1;dn&#x00E9; obr&#x00E1;zky nenalezeny"; /* (watermark.php) --  */
$wm_dissolve="Dissolve ?zru&#x0161;it, rozpustit?"; /* (watermark.php) --  */
$wm_preview="N&#x00E1;hled"; /* (watermark.php) --  */
$wm_linebreak="pro konec &#x0159;&#x00E1;dku"; /* (watermark.php) --  */
$wm_enable_shadow="Povolit st&#x00ED;ny"; /* (watermark.php) --  */
$wm_enable_rectangle="Povolit ?obd&#x00E9;ln&#x00ED;k?"; /* (watermark.php) --  */
$wm_rectangle_color="Barva"; /* (watermark.php) --  */
$wm_enable_ext_shadow="Povolit vylep&#x0161;en&#x00E9; st&#x00ED;ny"; /* (watermark.php) --  */
$wm_status="Status"; /* (watermark.php) --  */
$wm_enabled="povoleno"; /* (watermark.php) --  */
$wm_disabled="zak&#x00E1;z&#x00E1;no"; /* (watermark.php) --  */
$wm_restore_to="Obnovit do"; /* (watermark.php) --  */
$wm_inital_settings="po&#x010D;&#x00E1;te&#x010D;n&#x00ED; nastaven&#x00ED;"; /* (watermark.php) --  */
$wm_add_more_examples="V&#x00ED;ce uk&#x00E1;zkov&#x00FD;ch sobor&#x016F; m&#x016F;&#x017E;ete p&#x0159;idat do adre&#x00E1;&#x0159;e linpha / "; /* (watermark.php) --  */
$wm_example="P&#x0159;&#x00ED;klad"; /* (watermark.php) --  */
$wm_shadow_fontsize="Velikost fontu st&#x00ED;nu"; /* (watermark.php) --  */
$wm_settings_for_both="Nastaven&#x00ED; obr&#x00E1;zk&#x016F; a textu"; /* (watermark.php) --  */
$wm_center="st&#x0159;ed"; /* (watermark.php) --  */
$wm_north="naho&#x0159;e"; /* (watermark.php) --  */
$wm_northeast="naho&#x0159;e vpravo"; /* (watermark.php) --  */
$wm_northwest="naho&#x0159;e vlevo"; /* (watermark.php) --  */
$wm_south="dole"; /* (watermark.php) --  */
$wm_southeast="dole vpravp"; /* (watermark.php) --  */
$wm_southwest="dole vlevo"; /* (watermark.php) --  */
$wm_east="vpravo"; /* (watermark.php) --  */
$wm_west="vlevo"; /* (watermark.php) --  */
$bm_file_err="Chyba, nevybr&#x00E1;n &#x017E;&#x00E1;dn&#x00FD; soubor";
$bm_var_err="Chyba, zkontrolujte pros&#x00ED;m vstupn&#x00ED; prom&#x011B;nn&#x00E9;";
$bm_notfound_err="Chyba, soubbor nenalezen";
$bm_noimg_err="Chyba, soubor nen&#x00ED; obr&#x00E1;zek";
$bm_tmpfile_err="Chyba b&#x011B;hem vytv&#x00E1;&#x0159;en&#x00ED; do&#x010D;asn&#x00E9;ho obr&#x00E1;zku";
$bm_tmpfile_warn="Varov&#x00E1;n&#x00ED;: do&#x010D;asn&#x00FD; obr&#x00E1;zek nem&#x016F;&#x017E;e b&#x00FD;t smaz&#x00E1;n";
$bm_time_total="&#x010C;as b&#x011B;hu skriptu: ";
$bm_img_sec="Obr&#x00E1;zk&#x016F; za sekundu: ";
$bm_avg_img="Pr&#x016F;m&#x011B;rn&#x00FD; &#x010D;as na jeden obr&#x00E1;zek (p&#x0159;eje&#x010F;te my&#x0161;&#x00ED; p&#x0159;es na update obr&#x00E1;zku): ";
$bm_qual_size="Kvalita/Velikost";
$bm_quality="Kvalita: ";
$bm_height="V&#x00FD;&#x0161;ka: ";
$bm_width="&#x0160;&#x00ED;&#x0159;ka: ";
$bm_size="Velikost obr&#x00E1;zku: ";
$bm_create = "Prov&#x00E1;d&#x00ED;m benchmark s konverzn&#x00ED;m programem";
$bm_interval = "interval";
$bm_calc = "Po&#x010D;&#x00ED;t&#x00E1;m";
$bm_img = "Obr&#x00E1;zk&#x016F;";
$bm_inloop="Prob&#x00ED;h&#x00E1; smy&#x010D;ka";
$bm_qual_range="Kvalita ?range?: ";
$bm_size_range="Velikost ?range? (pouze v&#x00FD;&#x0161;ka): ";
$bm_repeats="Opakov&#x00E1;n&#x00ED;: ";
$bm_con_util="Pros&#x00ED;m vyberte konverzn&#x00ED; utilitu: ";
$bm_current_settings="Nastaven&#x00ED;"; /* (benchmark.php) --  */
$bm_preview="N&#x00E1;hled"; /* (benchmark.php) --  */
$bm_save_settings="Ulo&#x017E;it nastaven&#x00ED;"; /* (benchmark.php) --  */
$wm_addexamples="Watermark: p&#x0159;idat obr&#x00E1;zky p&#x0159;&#x00ED;klad&#x016F;"; /* (watermark.php) --  */
$wm_addimg="Watermark: P&#x0159;idat obr&#x00E1;zky watermark"; /* (watermark.php) --  */
$wm_addfont="Watermark: P&#x0159;idat fonty"; /* (watermark.php) --  */
$wm_colorsetting="Watermark: Nastaven&#x00ED; barev"; /* (watermark.php) --  */
$comment_hint="N&#x00C1;POV&#x011A;DA: pro posun v albu klikn&#x011B;te na horn&#x00ED; nebo doln&#x00ED; obr&#x00E1;zek"; /* (linpha_comments.php) --  */
$comment_end="Konec alba"; /* (linpha_comments.php) --  */
$comment_beginning="Za&#x010D;&#x00E1;tek alba"; /* (linpha_comments.php) --  */
$comment_back="zp&#x011B;t na n&#x00E1;hled obr&#x00E1;zku"; /* (linpha_comments.php) --  */
$comment_edit_img="Editovat kategorii/koment&#x00E1;&#x0159;"; /* (linpha_comments.php) --  */
$comment_change_img_details="Zm&#x011B;nit detaily obr&#x00E1;zku"; /* (linpha_comments.php) --  */
$comment_last_comments="Posledn&#x00ED; koment&#x00E1;&#x0159;"; /* (linpha_comments.php) --  */
$comment_comment_by="koment&#x00E1;&#x0159; od"; /* (linpha_comments.php) --  */
$category_delete_warning="Varov&#x00E1;n&#x00ED;: Vazba mezi obr&#x00E1;zky a kategoriemi bude ztracena"; /* (build_category_conf.php) --  */
$pass_2_short="CHYBA, heslo mus&#x00ED; b&#x00FD;t alespo&#x0148; 3 znaky dlouh&#x00E9;..."; /* (various) --  */
$album_edit="Editovat koment&#x00E1;&#x0159; alba"; /* (linpha_comments.php) --  */
$album_details="Detaily alba"; /* (linpha_comments.php) --  */
$wm_save_note="POZN&#x00E1;MKA: Watermark NEJSOU viditeln&#x00E9; registrovan&#x00FD;m u&#x017E;ivatel&#x016F;m! Mus&#x00ED;te se nejd&#x0159;&#x00ED;ve odhl&#x00E1;sit (b&#x00FD;t host) aby jste vid&#x011B;l watermark b&#x011B;hem prohl&#x00ED;&#x017E;en&#x00ED; LinPHA!"; /* (watermark.php) --  */
$lang_plugins['guestbook']="N&#x00E1;v&#x0161;t&#x011B;vn&#x00ED; kniha"; /* (admin.php) --  */
$print_low_quality="N&#x00ED;zk&#x00E1; kvalita"; /* (printing_view.php) --  */
$print_high_quality="Vysok&#x00E1; kvalita (pomal&#x00E9;!)"; /* (printing_view.php) --  */
$gb_title="LinPHA N&#x00E1;v&#x0161;t&#x011B;vn&#x00ED; kniha";
$gb_sign="LinPHA N&#x00E1;v&#x0161;t&#x011B;vn&#x00ED; kniha! P&#x0159;idejte novou zpr&#x00E1;vu";
$gb_from="Um&#x00ED;st&#x011B;n&#x00ED;";
$gb_from_no="Nezadal jste &#x017E;&#x00E1;dn&#x00E9; um&#x00ED;st&#x011B;n&#x00ED;";
$gb_pages="stran";
$gb_messages="zpr&#x00E1;v v N&#x00E1;v&#x0161;t&#x011B;vn&#x00ED; knize";
$gb_msg_error="Pardon, jm&#x00E9;no a koment&#x00E1;&#x0159; nesm&#x00ED; b&#x00FD;t pr&#x00E1;zdn&#x00FD;";
$gb_new_msg="P&#x0159;idat novou zpr&#x00E1;vu";
$gb_name="Jm&#x00E9;no";
$gb_email="Email";
$gb_hp="Homepage";
$gb_country="Odkud jste (Zem&#x011B;)";
$gb_header="LinPHA N&#x00E1;v&#x0161;t&#x011B;vn&#x00ED; kniha";
$gb_opts="Mo&#x017E;nosti N&#x00E1;v&#x0161;t&#x011B;vn&#x00ED; knihy";
$gb_rows="Po&#x010D;et p&#x0159;&#x00ED;sp&#x011B;vk&#x016F; na str&#x00E1;nce";
$gb_anon="Povolit anonymn&#x00ED; p&#x0159;&#x00ED;sp&#x011B;vky";
$gb_order="Set&#x0159;&#x00ED;dit p&#x0159;&#x00ED;sp&#x011B;vky";
$wm_resize="Zm&#x011B;nit velikost watermark na X% velikosti obr&#x00E1;zku"; /* (watermark.php) --  */
$wm_help_and_descr="N&#x00E1;pov&#x011B;da a popis"; /* (watermark.php) --  */
$folder_remove_hint="Pokud byla instalace bez probl&#x00E9;m&#x016F;, m&#x011B;l by jste nyn&#x00ED; odstranit slo&#x017E;ku /install (bezpe&#x010D;nostn&#x00ED; d&#x016F;vody)..."; /* (forth_stage_install.php) --  */
$add_alb_com="P&#x0159;idat koment&#x00E1;&#x0159; k albu"; /* (img_view.php) --  */
$add_img_com="P&#x0159;idat koment&#x00E1;&#x0159; k obr&#x00E1;zku"; /* (img_view.php) --  */
$album_com="Koment&#x00E1;&#x0159; alba"; /* (*_stage_album.php) --  */
$formatting_possibilities="HTML form&#x00E1;tovac&#x00ED; TAGy"; /* (various) --  */
$stat_cache_elements="Cached elements"; /* (build_stats.php) --  */
$stat_cache_first="Nov&#x00E9; elementy v cache"; /* (build_stats.php) --  */
$stat_cache_hits="Cache hits"; /* (build_stats.php) --  */
$stat_cache_hits_max="Maxim&#x00E1;ln&#x011B; ?z&#x00E1;sah&#x016F;? (jeden obr&#x00E1;zek)"; /* (build_stats.php) --  */
$stat_cache_hits_avg="Pr&#x016F;m&#x011B;rn&#x00FD; po&#x010D;et vyu&#x017E;it&#x00ED; cache (v&#x0161;echny obr&#x00E1;zky)"; /* (build_stats.php) --  */
$stat_cache_size="Velikost cache"; /* (build_stats.php) --  */
$stat_cache_convert_time="Cache u&#x0161;et&#x0159;ila &#x010D;asu"; /* (build_stats.php) --  */
$stat_cache_size="Cache zab&#x00ED;r&#x00E1; m&#x00ED;sta"; /* (build_stats.php) --  */
$cache_options="Nastaven&#x00ED; cache obr&#x00E1;zk&#x016F;";
$cache_max_size="Maxim&#x00E1;ln&#x00ED; velikost cache v bytech (0 = neomezeno)";
$path_2_cache="Cache adres&#x00E1;&#x0159; (v&#x00FD;choz&#x00ED; sql/cache)";
$cache_optimize="Optimalizovat/vy&#x010D;istit cache obr&#x00E1;zk&#x016F;"; 
$cache_maintain="&#x00DA;dr&#x017E;ba Cache obr&#x00E1;zk&#x016F;";
$cache_opt_msg="!! Cache optimalizov&#x00E1;na !!";
$lang_plugins['cache']="Obr&#x00E1;zkov&#x00E1; Cache"; /* () --  */
$stat_cache_title="Statistika obr&#x00E1;zkov&#x00E9; cache"; /* (cache.php) --  */
$bm_saved="Nastaven&#x00ED; ulo&#x017E;eno"; /* (admin.php) --  */
$cache_optimize_by_size="Sma&#x017E; v&#x0161;echny elementy v chace v&#x011B;t&#x0161;&#x00ED; ne&#x017E; (kb) >="; /* (cache.php) --  */
$cache_optimize_by_date="Sma&#x017E; v&#x0161;echny emelenty cace nepou&#x017E;it&#x00E9; X dn&#x00ED;:"; /* (cache.php) --  */
$elements_rem="Smazan&#x00E9; elementy"; /* (cache.php) --  */
$general_anon_album_downs="Povolit/zak&#x00E1;zat anonymn&#x00ED; zip album download"; /* (build_general_conf.php) --  */
$general_anon_album_downs_info="<-- anonym m&#x00E1; povoleno stahovat zapakovan&#x00E1; alba"; /* (build_general_conf.php) --  */
$general_download_speed="Nastavit maxim&#x00E1;ln&#x00ED; rychlost downloadu v kb/sec (0=neomezeno)"; /* (build_general_conf.php) --  */
$general_download_speed_info="<-- rychlost stahov&#x00E1;n&#x00ED; zapakovan&#x00FD;ch alb"; /* (build_general_conf.php) --  */
$general_navigation="Povolit/zak&#x00E1;zat naviga&#x010D;n&#x00ED; panel"; /* (build_general_conf.php) --  */
$general_navigation_info="<-- povolt naviga&#x010D;n&#x00ED; panel na str&#x00E1;nce n&#x00E1;hled&#x016F;"; /* (build_general_conf.php) --  */
$toc_navigation="Povolit/zak&#x00E1;zat naviga&#x010D;n&#x00ED; panel"; /* (doc/) --  */
$toc_zip_download="Povolit/zak&#x00E1;zat anonymn&#x00ED; stahov&#x00E1;n&#x00ED; zapakovan&#x00FD;ch alb"; /* (doc/) --  */
$toc_albdownlimit="Rychlostn&#x00ED; limit pro stahov&#x00E1;n&#x00ED;"; /* (doc/) --  */
$choose_zips_msg="Vyberte obr&#x00E1;zky pro st&#x00E1;hnut&#x00ED;"; /* (build_zip_view.php) --  */
$zip_button="St&#x00E1;hnout archiv"; /* (build_zip_view.php) --  */
$type_of_archive="Vyberte typ archivu"; /* (build_zip_view.php) --  */
$create_tar="vytvo&#x0159;it tar archiv"; /* (build_zip_view.php) --  */
$create_tgz="vytvo&#x0159;it tar.gz archiv"; /* (build_zip_view.php) --  */
$create_bz2="vytvo&#x0159;it tar.bz2 archiv"; /* (build_zip_view.php) --  */
$create_zip="vytvo&#x0159;it zip archive"; /* (build_zip_view.php) --  */
$create_rar="vytvo&#x0159;it rar archive"; /* (build_zip_view.php) --  */
$menumsg['advanced']="Roz&#x0161;&#x00ED;&#x0159;en&#x00E9; mo&#x017E;nosti"; /* () --  */
$menumsg['printmode']="M&#x00F3;d tisku"; /* () --  */
$menumsg['printprobs']="Tisk zak&#x00E1;z&#x00E1;n?"; /* () --  */
$menumsg['downloadmode']="M&#x00F3;d stahov&#x00E1;n&#x00ED;"; /* () --  */
$menumsg['mailmode']="M&#x00F3;d email"; /* () --  */
$menumsg['addcomment']="P&#x0159;idat komen&#x00E1;&#x0159; alba"; /* () --  */
$menumsg['delcomment']="Smazat koment&#x00E1;&#x0159; alba"; /* () --  */
$menumsg['editcomment']="Upravit koment&#x00E1;&#x0159; alba"; /* () --  */
$album_up="updatov&#x00E1;no"; /* (album_comment.php) --  */
$album_ins="vlo&#x017E;eno"; /* (album_comment.php) --  */
$mail_link="mailing list"; /* (header.php) --  */
$mail_title="LinPHA Mailing List"; /* (mail.php) --  */
$mail_send_link="Poslat Mail"; /* (mail.php) --  */
$mail_return_address="Emailov&#x00E1; adresa pro odpov&#x011B;&#x010F;:"; /* (mail.php) --  */
$mail_block="Velikost bloku emailu:"; /* (mail.php) --  */
$mail_block_help="# email&#x016F; v &#x0159;ad&#x011B; p&#x0159;ed p&#x0159;eru&#x0161;en&#x00ED;m(pro prevenci p&#x0159;ed probl&#x00E9;my s prodlevou v PHP)."; /* (mail.php) --  */
$mail_options="Mo&#x017E;nosti mailing Listu"; /* (mail.php) --  */
$mail_go_back="Zp&#x011B;t"; /* (various mail plugin files) --  */
$mail_form_title="E-Mailov&#x00E1; zpr&#x00E1;va"; /* (mail_form.php) --  */
$mail_form_subject="P&#x0159;edm&#x011B;t:"; /* (mail_form.php) --  */
$mail_form_msg="Zpr&#x00E1;va:"; /* (mail_form.php) --  */
$mail_total_sent="Celkem e-mail&#x016F; posl&#x00E1;no:"; /* (mail_form.php) --  */
$mail_subscribe="Zapsat se"; /* (mail_users.php) --  */
$mail_unsubscribe="Odepsat:-) se"; /* (mail_users.php) --  */
$mail_activate="Aktivovat"; /* (mail_users.php) --  */
$mail_user_name="Va&#x0161;e jm&#x00E9;no:"; /* (mail_users.php) --  */
$mail_user_email="V&#x00E1;&#x0161; E-Mail:"; /* (mail_users.php) --  */
$mail_user_email_confirm="Potvrdit E-Mail:"; /* (mail_users.php) --  */
$mail_user_code="Aktiva&#x010D;n&#x00ED; k&#x00F3;d:"; /* (mail_users.php) --  */
$mail_user_code_sent="E-mail s aktiva&#x010D;n&#x00ED;m k&#x00F3;dem byl zasl&#x00E1;n na V&#x00E1;&#x0161; e-mailov&#x00FD; &#x00FA;&#x010D;et."; /* (mail_users.php) --  */
$mail_user_code_subject="Aktivace LinPHA Mailing Listu"; /* (mail_users.php) --  */
$mail_user_activated="Va&#x0161;e konto bylo aktivov&#x00E1;no!"; /* (mail_users.php) --  */
$mail_user_activate_error="Nastaly probl&#x00E9;my s aktivac&#x00ED; va&#x0161;eho konta!"; /* (mail_users.php) --  */
$mail_user_email_not_found="neexistuje v na&#x0161;em mailing listu."; /* (mail_users.php) --  */
$mail_user_remove_ok="odstran&#x011B;no z na&#x0161;eho mailing listu."; /* (mail_users.php) --  */
$mail_user_remove_fail="nemohlo b&#x00FD;t odstran&#x011B;no z na&#x0161;eho mailing listu."; /* (mail_users.php) --  */
$mail_user_empty="Vypl&#x0148;te v&#x0161;echna pole."; /* () --  */
$mail_user_no_match="E-Maily si neodpov&#x00ED;daj&#x00ED;."; /* () --  */
$mail_user_exists="E-Mail ji&#x017E; v na&#x0161;&#x00ED; datab&#x00E1;zi existuje."; /* (mail_users.php) --  */
$lang_plugins['mail']="Mailing List"; /* (admin.php) --  */
$mail_activate_message="V&#x00E1;&#x017E;en&#x00FD; %s,\n\nPro aktivaci Mailing listov&#x00E9;ho konta, pros&#x00ED;m pou&#x017E;ijte detaily z tohoto emailu .\n\nAktiva&#x010D;n&#x00ED; k&#x00F3;d: %s\n\nD&#x011B;kuji!\nWebmaster"; /* (submit_users.php) -- dont delete the %s and the \n ! */
$mail_hint="Tip"; /* (mail.php) --  */
$mail_user_permission="V&#x0161;ichni u&#x017E;ivatel&#x00E9; 'spole&#x010D;n&#x00E9;ho' mailu mohou pos&#x00ED;lat zpr&#x00E1;vy na mailing list."; /* (mail.php) --  */
$mail_current_subscribers="Sou&#x010D;asn&#x00ED; &#x00FA;&#x010D;astn&#x00ED;ci"; /* (mail.php) --  */
$mail_name="Jm&#x00E9;no"; /* (mail.php) --  */
$mail_mail="Email"; /* (mail.php) --  */
$mail_subscribing_date="Datum ups&#x00E1;n&#x00ED;"; /* (mail.php) --  */
$mail_active="Aktivovat"; /* (mail.php) --  */
$mail_sent_to="Email zasl&#x00E1;n na"; /* (mail.php) --  */
$mail_replace_words="<b>[Name]</b> and <b>[Email]</b> budou p&#x0159;eps&#x00E1;ny jm&#x00E9;nem a emailem konkr&#x00E9;tn&#x00ED;ch u&#x017E;ivatel&#x016F;."; /* (form_mailing.php) --  */
$misc_help="U&#x017E;ite&#x010D;n&#x00E9; tipy"; /* () --  */
$mail_create_group="(Mus&#x00ED;te s&#x00E1;m vytvo&#x0159;it 'spole&#x010D;n&#x00FD;' mail.)"; /* (mail.php) --  */
$alb_th="Podlo&#x017E;ky alba"; /* (*_stage_album.php) -- overwrites old (wrong) entry */
$arr_month_short = Array('1' => 'Led','2' => '&#x00DA;no','3' => 'B&#x0159;e','4' => 'Dub','5' => 'Kv&#x011B;','6' => '&#x010C;rn','7' => '&#x010C;vc','8' => 'Srp','9' => 'Z&#x00E1;&#x0159;','10' => '&#x0158;&#x00ED;j','11' => 'Lis','12' => 'Pro'); /* abrevations of months */
$arr_month_long = Array('1' => 'Leden','2' => '&#x00DA;nor','3' => 'B&#x0159;ezen','4' => 'Duben','5' => 'Kv&#x011B;ten','6' => '&#x010C;erven','7' => '&#x010C;ervenec','8' => 'Srpen','9' => 'Z&#x00E1;&#x0159;&#x00ED;','10' => '&#x0158;&#x00ED;jen','11' => 'Listopad','12' => 'Prosinec'); /* months */
$arr_day_short = Array('Ned','Pon','&#x00DA;te','St&#x0159;','&#x010C;tv','P&#x00E1;t','Sob'); /* abrevations of weekdays */
$arr_day_long = Array('Ned&#x011B;le','Pond&#x011B;l&#x00ED;','&#x00DA;ter&#x00FD;','St&#x0159;eda','&#x010C;tvrek','P&#x00E1;tek','Sobota'); /* weekdays */
/*
If the time and date format in your country is different with these formats,
please uncomment these lines and set it to the right format. Otherwise, leave
it as it is. See http://www.php.net/manual/en/function.strftime.php for definitions.
(Don't apply this to the english language file, the default date and time format are
set in the options page of linpha. This is because the date format is different within
the english spoken countries.)*/
$date_format = "%a %d/%m/%Y";
$time_format = "%I:%M:%S %p";

$layout="Layout";
$features="Vlastnosti";
$perform="V&#x00FD;kon";
$general_comment_in_subfolder = 'Povolit/zak&#x00E1;zat koment&#x00E1;&#x0159;e alb v podslo&#x017E;ce';
$general_comment_in_subfolder_info = '<-- zobrazit koment&#x00E1;&#x0159;e alb v n&#x00E1;hled&#x016F; podslo&#x017E;ky';
$general_default_date_format = 'V&#x00FD;choz&#x00ED; form&#x00E1;t datumu';
$general_default_date_format_info = '<- p&#x0159;&#x00ED;klad: 06/28/2004, koukn&#x011B;te se na info pro v&#x00ED;ce detail&#x016F;';
$general_default_time_format = 'V&#x00FD;choz&#x00ED; form&#x00E1;t &#x010D;asu';
$general_default_time_format_info = '<- p&#x0159;&#x00ED;klad: 01:45:50 PM, koukn&#x011B;te se na info pro v&#x00ED;ce detail&#x016F;';
$general_new_images_folder = 'Virtu&#x00E1;ln&#x00ED; slo&#x017E;ka "Nov&#x00E9; obr&#x00E1;zky"';
$general_new_images_folder_info = '<- zobrazit virtu&#x00E1;ln&#x00ED; slo&#x017E;ku nov&#x00E9; obr&#x00E1;zky';
$general_new_images_folder_age = 'St&#x00E1;&#x0159;&#x00ED; "nov&#x00FD;ch obr&#x00E1;zk&#x016F; " ve dnech';
$general_new_images_folder_age_info = '<- maxim&#x00E1;ln&#x00ED; st&#x00E1;&#x0159;&#x00ED; obr&#x00E1;zk&#x016F;. kter&#x00E9; se maj&#x00ED; zobrazit';
$control_key="Ctrl"; /* (various) --  */
$search_date="Datum"; /* (search.php) -- reads: date from to... */
$search_from="od"; /* (search.php) -- reads: date from to... */
$search_to="do"; /* (search.php) -- reads: date from to... */
$start_slide="Spustit slideshow"; /* (img_view.php) --  */
$pass_msg="Mus&#x00ED;te se p&#x0159;ihl&#x00E1;sit s nov&#x00FD;m heslem"; /* (build_my_settings.php) --  */
$str_new_images = "Nov&#x00E9; obr&#x00E1;zky"; /* (new_images.php) -- */
$str_order_by = "Se&#x0159;adit podle"; /* (new_images.php) -- */
$str_age = "St&#x00E1;&#x0159;&#x00ED;"; /* (new_images.php) -- */
$str_album = "Album"; /* (new_images.php) -- */
$str_in_album = "V albu"; /* (new_images.php) -- */
$str_img_newer_than = "v&#x0161;echny obr&#x00E1;zky nov&#x011B;j&#x0161;&#x00ED; ne&#x017E; %s dn&#x016F;"; /* (new_images.php) -- */
$timespanfmt = "%s dn&ugrave;, %s hodin, %s minut a %s sekund";  /* (new_images.php) -- */
$str_delete_all_cached_images_with_watermarks="Smazat v&#x0161;echny obr&#x00E1;zky v cache s watermark"; /* (watermark.php) --  */
$str_error_changing_perm="CHYBA, p&#x0159;&#x00ED;stupov&#x00E1; pr&#x00E1;va k souboru nemohla b&#x00FD;t zm&#x011B;n&#x011B;na! (Mo&#x017E;n&#x00E1; nem&#x00E1;te pot&#x0159;ebn&#x00E1; pr&#x00E1;va)"; /* (plugins/ftp/index.php) --  */
$str_change_perm="Zm&#x011B;nit opr&#x00E1;vn&#x011B;n&#x00ED; k:"; /* (plugins/ftp/index.php) --  */
$str_read="Read"; /* (plugins/ftp/index.php) --  */
$str_write="Write"; /* (plugins/ftp/index.php) --  */
$str_execute="Execute"; /* (plugins/ftp/index.php) --  */
$str_owner="Owner"; /* () --  */
$str_group="Group"; /* (plugins/ftp/index.php) --  */
$str_all_other="All others"; /* (plugins/ftp/index.php) --  */
$str_copy="kop&#x00ED;rovat"; /* (plugins/ftp/index.php) --  */
$str_copy_to="Kop&#x00ED;ruj %s do:"; /* (plugins/ftp/index.php) --  */
$str_rename_to="P&#x0159;ejmenuj %s do:"; /* (plugins/ftp/index.php) --  */
$str_rotation_disabled="Ot&#x00E1;&#x010D;en&#x00ED; obr&#x00E1;zk&#x016F; zak&#x00E1;z&#x00E1;no"; /* (img_view.php) --  */
$str_no_write_perm="Nejsou pr&#x00E1;va k z&#x00E1;pisu"; /* (img_view.php) --  */
$str_new_images_in_these_folders="Nov&#x00E9; obr&#x00E1;zky nalezeny v n&#x00E1;sleduj&#x00ED;c&#x00ED;m albu:"; /* (new_images.php) --  */
$str_reinstall_remove_dbconnect="Pokud chcete p&#x0159;einstalovat LinPHA, mus&#x00ED;te nejd&#x0159;&#x00ED;v smazat ./sql/db_connect.php! (To se d&#x00E1; ud&#x011B;lat pomoc&#x00ED; vestav&#x011B;n&#x00E9;ho prohl&#x00ED;&#x017E;e&#x010D;e v Administr&#x00E1;torsk&#x00FD;ch n&#x00E1;stroj&#x00ED;ch)"; /* (install_header.php) --  */
$str_Version="Verze"; /* (sec_stage_install.php) --  */
$str_no_supported_database_activated="CHYBA: Nen&#x00ED; aktivovan&#x00E1; &#x017E;&#x00E1;dn&#x00E1; podporovan&#x00E1; datab&#x00E1;ze ve Va&#x0161;&#x00ED; konfiguraci PHP"; /* (sec_stage_install.php) --  */
$str_extract_with="Kdy&#x017E; je UPLOAD hotov, extrahuj soubory s"; /* (ftp/index.php) --  */
$str_files_to_upload="Soubory k UPLOADu"; /* (ftp/index.php) --  */
$posix_check_msg="kontrola podpory POSIXu..."; /* (sec_stage_install.php) --  */
$posix_sum_found_msg="Nalezena podpora POSIX ve Va&#x0161;&#x00ED; instalaci PHP. V&#x0161;echny funkce integrovan&#x00E9;ho souborov&#x00E9;ho mana&#x017E;eru jsou aktivov&#x00E1;ny."; /* (sec_stage_install.php) --  */
$posix_sum_miss_msg="nenalazena podpora POSIX ve Va&#x0161;&#x00ED; instalaci PHP. N&#x011B;kter&#x00E9; funkce integrovan&#x00E9;ho souborov&#x00E9;ho mana&#x017E;eru nebudou dostupn&#x00E9; (Zejm&#x00E9;na zm&#x011B;na pr&#x00E1;v k soubor&#x016F;m)."; /* (sec_stage_install.php) --  */
$mod_cache_fail="CHYBA: Nastaven&#x00ED; nemohlo b&#x00FD;t ulo&#x017E;eno. Ujist&#x011B;te se, &#x017E;e je cesta napsan&#x00E1; dob&#x0159;e a &#x017E;e m&#x00E1;te opr&#x00E1;vn&#x011B;n&#x00ED; k z&#x00E1;pisu do adres&#x00E1;&#x0159;e."; /* (admin.php) --  */
$str_create_archive="vytvo&#x0159;&#x00ED; %s archiv"; /* (build_zip_view.php) --  */
$str_download_error="CHYBA! Download nemohl z n&#x011B;jak&#x00E9;ho d&#x016F;vodu za&#x010D;&#x00ED;t, omluv&#x00E1;me se."; /* (build_zip_view.php) --  */
$str_search_all_images_taken="Naj&#x00ED;t v&#x0161;echny obr&#x00E1;zky po&#x0159;&#x00ED;zen&#x00E9; %s"; /* (read_php_exif.php) --  */
$str_try_a_lower_resolution="Pokud trv&#x00E1; nahr&#x00E1;v&#x00E1;n&#x00ED; p&#x0159;&#x00ED;li&#x0161; dlouho, zkuste pou&#x017E;&#x00ED;t men&#x0161;&#x00ED; rozli&#x0161;en&#x00ED;:"; /* (image_panorama_view.php) --  */
$str_current_resolution="sou&#x010D;asn&#x00E9; rozli&#x0161;en&#x00ED;:"; /* (image_panorama_view.php) --  */
$href_group_conf="Nastaven&#x00ED; skupin"; /* (admin.php + build_user_conf.php) -- Admin menu item + table heading */
$href_tools_section="N&#x00E1;stroje:"; /* (admin.php) -- Tools section in admin menu */
$lang_plugins['plugin']="Plugin"; /* (plugin.php) --  */
$choose_mail_msg="Vyberte obr&#x00E1;zek do mailu"; /* () --  */
$new_user_full_name="Pln&#x00E9; jm&#x00E9;no"; /* (build_my_settings.php) -- And build_user_conf.php */
$href_category_conf="Nastaven&#x00ED; kategori&#x00ED;"; /* (admin.php) --  */
$cat_private="Soukrom&#x00E9;"; /* (build_category_conf.php) --  */
$lang_plugins['facetmap']="FacetMap"; /* (plugins.php) --  */
$str_add_more_apps="P&#x0159;idat v&#x00ED;ce aplikac&#x00ED;"; /* (include/basket_zip.php, ftp/index.p) --  */
$session_check="zji&#x0161;&#x0165;uji platn&#x00E9; nastaven&#x00ED; session..."; /* (sec_stage_install.php) --  */
$session_save_handler_ok_msg="Session save handler nastaven spr&#x00E1;vn&#x011B;."; /* (sec_stage_install.php) --  */
$session_save_handler_miss_msg="Session save handler NEN&#x00CD; nastaven spr&#x00E1;vn&#x011B;."; /* (sec_stage_install.php) --  */
$session_miss_msg="Nastaven&#x00ED; Session nen&#x00ED; spr&#x00E1;vn&#x00E9;. Mus&#x00ED;te nejd&#x0159;&#x00ED;ve opravit v&#x00FD;&#x0161;e uveden&#x00E9; probl&#x00E9;my v php.ini nebo LinPHA asi nebude fungovat spr&#x00E1;vn&#x011B;!!"; /* (sec_stage_install.php) --  */
$session_ok_msg="Ve&#x0161;ker&#x00E9; nastaven&#x00ED; session je spr&#x00E1;vn&#x00E9;. LinPHA by m&#x011B;la fungovat spr&#x00E1;vn&#x011B;."; /* (sec_stage_install.php) --  */
$new_user_error6="Chyba: Nepou&#x017E;&#x00ED;v&#x00E1;te V&#x00E1;&#x0161; vlastn&#x00ED; &#x00FA;&#x010D;et?!?"; /* (build_my_settings.php) --  */
$str_old_comments="Star&#x00E9; koment&#x00E1;&#x0159;e (nejsou p&#x0159;i&#x0159;azeny &#x017E;&#x00E1;dn&#x00E9;mu obr&#x00E1;zku):"; /* (build_stats.php) --  */
$str_last_viewed_page="Naposledy prohl&#x00ED;&#x017E;en&#x00E1; str&#x00E1;nka:"; /* (index.php) --  */
$str_select_row="Vyberte &#x0159;&#x00E1;dek"; /* (basket.php) --  */
$str_select="Vyberte"; /* (basket.php) --  */
$str_new_window="nov&#x00E9; okno"; /* (basket.php) --  */
$general_anon_mail_mode="Povolit/zak&#x00E1;zat mailov&#x00E1;n&#x00ED; obr&#x00E1;zk&#x016F; pro anonymn&#x00ED; u&#x017E;ivatele"; /* (build_general_conf.php) --  */
$general_anon_mail_mode_info="<-- anynomn&#x00ED; u&#x017E;ivatel&#x00E9; maj&#x00ED; povoleno mailovat obr&#x00E1;zky"; /* (build_general_conf.php) --  */
$general_mail_mode_max_size="Po&#x0161;tovn&#x00ED; m&#x00F3;d: Maxim&#x00E1;ln&#x00ED; velikost zpr&#x00E1;vy"; /* (build_general_conf.php) --  */
$general_mail_mode_max_size_info="<-- maxim&#x00E1;ln&#x00ED; velikost v bytech"; /* (build_general_conf.php) --  */
$general_thumbnail_view="Zobrazit n&#x00E1;hledy"; /* (build_general_conf.php) --  */
$general_image_view="Zobrazit obr&#x00E1;zky"; /* (build_general_conf.php) --  */
$general_ado_msg="Povolit/zak&#x00E1;zat cache SQL dotaz&#x016F;"; /* (build_general_conf.php) --  */
$general_ado_msg_info="<-- povolte pokud m&#x00E1;te pomal&#x00FD; SQL server nebo nepou&#x017E;&#x00ED;v&#x00E1;te PHP akceler&#x00E1;tor"; /* (build_general_conf.php) --  */
$general_ado_time_msg="SQL query caching time:"; /* (build_general_conf.php) --  */
$general_ado_time_msg_info="<-- nastav&#x00ED; maxim&#x00E1;ln&#x00ED; dobu trv&#x00E1;n&#x00ED; cache v minut&#x00E1;ch"; /* (build_general_conf.php) --  */
$general_ado_path_msg="Cesta do cache SQL doatz&#x016F;:"; /* (build_general_conf.php) --  */
$general_ado_path_msg_info="<-- kam ukl&#x00E1;dat data cache sql dotaz&#x016F;"; /* (build_general_conf.php) --  */
$str_other_features="Dal&#x0161;&#x00ED; mo&#x017E;nosti"; /* (build_general_conf.php) --  */
$str_language_settings="Jazykov&#x00E9; nastaven&#x00ED;"; /* (build_general_conf.php) --  */
$str_sql_query_caching="Cache SQL dotaz&#x016F;"; /* (build_general_conf.php) --  */
$general_thumb_border="Tlou&#x0161;&#x0165;ka r&#x00E1;me&#x010D;k&#x016F; n&#x00E1;hled&#x016F; v px"; /* (build_general_conf.php) --  */
$general_thumb_border_info="<-- 0 = zak&#x00E1;z&#x00E1;no, v&#x00FD;choz&#x00ED;: 5"; /* (build_general_conf.php) --  */
$general_thumb_border_color="Barva r&#x00E1;me&#x010D;ku n&#x00E1;hled&#x016F;"; /* (build_general_conf.php) --  */
$general_thumb_border_color_info="<-- zobrazte si info pro v&#x00ED;ce detail&#x016F;"; /* (build_general_conf.php) --  */
$str_recipient="P&#x0159;&#x00ED;jemce"; /* (basket_mail.php) --  */
$str_sender="Odes&#x00ED;latel"; /* (basket_mail.php) --  */
$str_mail_too_big="Chyba: E-Mail je p&#x0159;&#x00ED;li&#x0161; velk&#x00FD;.<br /><br />Povolen&#x00E1; velikost: %sBytes. V&#x00E1;mi vybran&#x00E9; obr&#x00E1;zky maj&#x00ED; %sBytes.<br /><br />Odstra&#x0148;te n&#x011B;jak&#x00E9; obr&#x00E1;zky nebo vyu&#x017E;ijte funkce stahov&#x00E1;n&#x00ED; zabalen&#x00FD;ch obr&#x00E1;zk&#x016F;!"; /* (basket_mail.php) --  */
$str_size_of_email="Velikost E-Mailu: %s."; /* (basket_mail.php) --  */
$str_new_search="Nov&#x00E9; hled&#x00E1;n&#x00ED;"; /* (search.php) --  */
$str_edit_search="Editovat hled&#x00E1;n&#x00ED;"; /* (search.php) --  */
$str_View="Zobrazit"; /* (img_view.class.php) --  */
$str_normal="norm&#x00E1;ln&#x00ED;"; /* (img_view.class.php) --  */
$str_detail="podrobn&#x00FD;"; /* (img_view.class.php) --  */
$search_result_empty="Pardon, nena&#x0161;el jsem nic co by odpov&#x00ED;dalo Va&#x0161;im po&#x017E;adavk&#x016F;m"; /* (search.php) --  */
$str_chars_entered="vlo&#x017E;eno znak&#x016F;"; /* (img_view.class.php) --  */
$str_information_lost="N&#x011B;jak&#x00E9; informace budou ztraceny, pros&#x00ED;m zkra&#x0165;t&#x011B; V&#x00E1;&#x0161; vstup."; /* (img_view.class.php) --  */
$general_random_image="Povolit/Zak&#x00E1;zat n&#x00E1;hodn&#x00E9; obr&#x00E1;zky na indexu"; /* () --  */
$general_random_image_info="<-- povolit obrazov&#x00E1;n&#x00ED; n&#x00E1;hodn&#x00FD;ch obr&#x00E1;zk&#x016F; na index.php"; /* () --  */
$general_random_image_size="Maxim&#x00E1;ln&#x00ED; velikost n&#x00E1;hodn&#x00E9;ho obr&#x00E1;zku na index.php"; /* () --  */
$general_random_image_size_info="<-- nastavit maxim&#x00E1;ln&#x00ED; velikost v pixelech "; /* () --  */
$str_edit_watermark="Editovat watermark"; /* (watermark.php) --  */
$str_edit_permissions="Editovat watermark opr&#x00E1;vn&#x011B;n&#x00ED;"; /* () --  */
$str_Everyone="V&#x0161;ichni"; /* () --  */
$str_Nobody="Nikdo"; /* () --  */
$str_only_logged_in_users=" Pouze p&#x0159;ihl&#x00E1;&#x0161;en&#x00ED; u&#x017E;ivatel&#x00E9;"; /* () --  */
$str_except_these_groups="krom&#x011B; t&#x011B;chto skupin"; /* () --  */
$str_additionally_groups="a&#x017E; na tyto skupiny:"; /* () --  */
$str_allow_these_persons="&#x017D;&#x00E1;dn&#x00FD; watermark pro tyto u&#x017E;ivatele/skupiny"; /* () --  */
$str_album_based_permissions="Opr&#x00E1;vn&#x011B;n&#x00ED; k jednotliv&#x00FD;m alb&#x016F;m"; /* () --  */
$str_all_albums_but_without_these="V&#x0161;echna alba krom&#x011B; t&#x011B;chto:"; /* () --  */
$str_only_on_these_albums="Pouze na tato alba:"; /* () --  */
$str_allow_these_persons="Povolit t&#x011B;mto osob&#x00E1;m"; /* (db_api.php) --  */
$str_no_watermarks="&#x017D;&#x00E1;dn&#x00FD; watermark pro tyto osoby"; /* (db_api.php) --  */
$str_watermark_perm_part1="Definovat obr&#x00E1;zkov&#x00FD; watermark pro jednotliv&#x00E9;ho u&#x017E;ivatele, v&#x00ED;ce u&#x017E;ivatel&#x016F;, a/nebo album uvedeno zde."; /* (watermark.php) --  */
$str_watermark_perm_part2="V&#x00FD;choz&#x00ED; nastaven&#x00ED; je 'Pouze p&#x0159;ihl&#x00E1;&#x0161;en&#x00ED; u&#x017E;ivael&#x00E9;' A 'V&#x0161;echna alba'."; /* (watermark.php) --  */
$str_watermark_perm_part3="Co&#x017E; znamen&#x00E1;, &#x017E;e v&#x0161;ichn&#x00ED; p&#x0159;ihl&#x00E1;&#x0161;en&#x00ED; u&#x017E;ivatel&#x00E9; mohou vid&#x011B;t obr&#x00E1;zky bez watermark&#x016F; ve v&#x0161;ech albech."; /* (watermark.php) --  */
$inst_linpha_not_work_correctly="LinPHA asi nebude fungovat spr&#x00E1;vn&#x011B;"; /* (sec_stage_install.php) --  */
$gd_jpg_missing_msg="V&#x00E1;&#x0161; syst&#x00E9;m nepodporuje JPEG! v GDlib. Obr&#x00E1;zky JPEG nebudou fungovat!"; /* (sec_stage_install.php) --  */
$general_video_thumbnail="Zkusit ud&#x011B;lat n&#x00E1;hledy pro videa"; /* (build_generl_config.php) --  */
$general_video_thumbnail_info="<--Vypn&#x011B;te pokud zaznamen&#x00E1;te probl&#x00E9;my p&#x0159;i vytv&#x00E1;&#x0159;n&#x00ED; n&#x00E1;hled&#x016F; k videu"; /* (build_generl_config.php) --  */
$general_update_notice="Povolit/zak&#x00E1;zat kontrolu existence aktualizac&#x00ED; LinPHA "; /* (build_generl_config.php) --  */
$general_update_notice_info="<-- povolit t&#x00FD;denn&#x00ED; kontrolu akutalizac&#x00ED; "; /* (build_general_config.php) --  */
$large="velk&#x00FD;"; /* (build_general_config) -- selectfield for mini images size */
$directories="Adres&#x00E1;&#x0159;e"; /* (build_thumbnail_conf.php) --  */
$do_nothing="Ned&#x011B;lej nic"; /* (build_thumbnail_conf.php) --  */
$create="Vytvo&#x0159;"; /* (build_thumbnail_conf.php) --  */
$recreate="Znovu vytvo&#x0159;"; /* (build_thumbnail_conf.php) --  */
$exif_disabled_in_conf="Informace EXIF jsou zak&#x00E1;z&#x00E1;ny v konfiguraci"; /* (build_thumbnail_conf.php) --  */
$iptc_disabled_in_conf="Informace IPTC jsou z&#x00E1;k&#x00E1;z&#x00E1;ny v konfiguraci"; /* (build_thumbnail_conf.php) --  */
$silent_mode="Tich&#x00FD; m&#x00F3;d (tich&#x00FD; chod, nevypisuje chybov&#x00E9; hl&#x00E1;&#x0161;en&#x00ED;)"; /* (build_thumbnail_conf.php) --  */
$just_thumb_msg="N&#x00E1;hledy"; /* (build_thumbnail_conf.php) --  */
$log_title="LinPHA z&#x00E1;znamn&#x00ED;k"; /* (log.php) --  */
$log_options="Volby z&#x00E1;znamn&#x00ED;ku LinPHA"; /* (log.php) --  */
$log_method_label="Zaznamen&#x00E1;vat do:"; /* (log.php) --  */
$str_extra_headers="Extra Hlavi&#x010D;ky:"; /* (log.php) --  */
$str_log_events['login']="P&#x0159;ihl&#x00E1;&#x0161;n&#x00ED; u&#x017E;ivatele"; /* (log.php) --  */
$str_log_events['thumbnail']="Vytvo&#x0159;en&#x00ED; n&#x00E1;hled&#x016F;"; /* (log.php) --  */
$str_log_events['update']="Aktualizace"; /* (log.php) --  */
$str_log_events['db']="Datab&#x00E1;ze"; /* (log.php) --  */
$str_log_events['filemanager']="Spr&#x00E1;vce soubor&#x016F;"; /* (log.php) --  */
$str_events="Ud&#x00E1;losti"; /* (log.php) --  */
$find_duplicates="Naj&#x00ED;t duplik&#x00E1;ty v kolekci obr&#x00E1;zk&#x016F;"; /* (build_thumbnail_conf.php) --  */
$str_not_enabled_in_php_config="Nen&#x00ED; povoleno v nastaven&#x00ED; PHP (php.ini)"; /* (sec_stage_install.php) --  */
$str_warning="Varovani"; /* (build_thumbnail_conf.php) --  */
$str_thumbnails_deleted="Nahledy budou smazany"; /* (build_thumbnail_conf.php) --  */
$str_statistics_deleted="Vsechny statistiky budou smazany"; /* (build_thumbnail_conf.php) --  */
$str_random_index_image="N&#x00E1;hodn&#x00FD; obr&#x00E1;zek"; /* (build_general_conf.php) --  */
$str_download_images="St&#x00E1;hnout jeden obr&#x00E1;zek"; /* (build_perms.php) --  */
$str_add_image_comments="P&#x0159;idat koment&#x00E1;&#x0159;e k obr&#x00E1;zku"; /* (build_perms.php) --  */
$str_add_image_description="P&#x0159;idat popis a kategorie obr&#x00E1;zku"; /* (build_perms.php) --  */
$str_mail_add_all_users="P&#x0159;idat v&#x0161;echny u&#x017E;ivatele Linpha do mail listu"; /* (plugins/mail.php) --  */
$str_note_upload="<b>Pozn&#x00E1;mka:</b> Nemus&#x00ED;te nahr&#x00E1;vat va&#x0161;e obr&#x00E1;zky t&#x00ED;mto formul&#x00E1;&#x0159;em. M&#x016F;&#x017E;ete pou&#x017E;&#x00ED;t jak&#x00FD;koliv zp&#x016F;sob chcete (ftp,scp,nfs,local,...). Prost&#x011B; je zkop&#x00ED;rujte do slo&#x017E;ky alb."; /* (plugins/ftp/index.php) --  */
$blacklist_opts="Mo&#x017E;nosti &#x010D;ern&#x00E9; listiny (blokov&#x00E1;n&#x00ED; SPAMu)"; /* (varios) --  */
$blacklist_onoff="Povolit filtrov&#x00E1;n&#x00ED; zpr&#x00E1;v"; /* (varios) --  */
$blacklist_keywords="Slova do bloku:"; /* (varios) --  */
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