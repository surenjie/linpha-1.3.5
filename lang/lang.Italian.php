<?php
/* language file */
/* Feel free to modify this file to make use of your native language.
If you do so, please save it as lang.YourLanguage.php in the LinPHA /lang dir
and PLEASE mail me a copy! mailto:bzrudi@tuxpower.de */

/*###################################################
# Translated by Manuel kawa deftones209@yahoo.it    #
###################################################*/

/*#################################################
## linpha messages
#################################################*/
/* left menu */
$album="Archivio Fotografico";

/* alerts */
$alert_fopen="Errore! impossibile aprire il file...";
$printing_probs="Problemi durante la stampa";
$printing_probs_msg="Stampa disabilitata! Rif.";

/* global messages */
$subfolders="sotto-cartelle";
$img_th="Foto";
$in_th="in"; /* used for the Photos in $foldername */
$alb_th="Album nelle sottocartelle";
$thumb_hint_msg="clicca per vista dettagliata";
$latest_photo="ultima";
$view_at="visualizza a";
$close_button="chiudi";
$help="aiuto";

/*#################################################
## installation
#################################################*/
/* install.php (page 1) */
$welc_header="Benvenuti su LinPHA";
$welc_text="Benvenuti sul &quot;Linux Photo Archive&quot; conosciuto come LinPHA.
			Stai eseguendo LinPHA per la prima volta, quindi devi eseguire la
			procedura di installazione.";
$welc_hint="<b>Prima di continuare:</b>";
$welc_hint1="1. Assicurati che la directory &quot;<b>linpha/sql</b>&quot; sia scrivibile da tutti!
			(esempio: chmod 777 sql)";
$next_button="Continua"; /* used as left menu header in all 4 stages */
$inst_msg="Installazione di LinPHA"; /* used as left menu header in all 4 stages */
$inst_status_1="Seleziona la lingua e premi &quot;Continua&quot;";
$inst_status_step1="Fase 1 di 4";

/* sec_stage_install (page 2) */
$inst_access_msg="Configura Tipo Di Accesso Al Database";
$inst_full_access_msg="<b>SI !</b><br> Ho completo accesso al database MySQL, posso creare nuovi database e nuovi utenti. In altre parole: questo &egrave; il mio server!";
$inst_limited_access_msg="<b>NO !</b><br> Intendo installare LinPHA con accesso limitato al database MySQL. Il mio amministratore di sistema non mi permette di creare nuovi database od utenti.";
$inst_status_2="Seleziona il tipo di accesso a MySQL. Se non sei sicuro, scegli NO!";
$inst_status_step2="Fase 2 di 4";

/* requirements */
$req_check_msg="Verifica Configurazione di Sistema";
$req_found_msg="OK trovato";
$req_miss_msg="NON trovato";
$req_safe_fail="ABILITATO";
$req_safe_ok="DISABILITATO";
$php_safemode_check_msg="controllo modalit&agrave; &quot;safe mode&quot; del PHP...";
$php_version_check_msg="controllo della versione di PHP > 4.1.0...";
$mem_check_msg="controllo limite di memoria del PHP...";
$gd_check_msg="controllo esistenza della libreria GD...";
$convert_check_msg="controllo esistenza di ImageMagick...";
$exif_check_msg="controllo per support di EXIF...";
$summary_msg="SOMMARIO:";
$safe_mode_err="Il server &egrave; configurato ad usare PHP in &quot;Safe Mode&quot;. LinPHA non pu&ograve;
			 funzionare finch&eacute; &quot;Safe Mode&quot; non verr&agrave; disabilitato nel file &quot;php.ini&quot; !";
$inst_abort_msg="!!! INSTALLAZIONE INTERROTTA !!!";
$php_version_err="Il Server sta eseguendo una versione di PHP precedente la 4.1.0. LinPHA non pu&ograve; funzionare
			 finch&eacute; l'interprete PHP non verr&agrave; aggiornato.";
$gd_convert_err="N&eacute;ImageMagick n&eacute; la libreria GD &egrave; stata identificata. LinPHA non pu&ograve; funzionare finch&eacute; non verr&agrave; installato uno dei due";
$convert_sum_found_msg="ImageMagick &egrave; stato correttamente identificato. Questo permetter&agrave; LinPHA di creare dei provini di alta qualit&agrave;";
$convert_sum_miss_msg="ImageMagick non &egrave; stato trovato. LinPHA user&agrave; la libreria GD per creare i provini, che non potrannon non essere di alta qualit&agrave;";
$exif_sum_found_msg="Trovato il support per EXIF nel sistema. Questo permetter&agrave; LinPHA di mostrare informazioni dettagliate sulle foto";
$exif_sum_miss_msg="Il sistema riesce a trovare la libreria richiesta per accedere ai dati in formato exif contenuti nelle immagini. LinPHA utilizzer&agrave; un parser interno in PHP.";
$session_path_check_msg="verifica di 'session_safe_path'...";
$session_path_found_msg="'Session save path' (salvataggio di sessione) &egrave; correttamente settato nel file php.ini. LinPHA dovrebbe funzionare correttamente. Il path &egrave; impostato a: ";
$session_path_miss_msg="Non &egrave; stato rilevato il valore per la variabile 'session_save_path'. E` obbligatorio di impostare tale valore nel file php.ini, altrimenti non sarai pi&ugrave; in grado di effettuare un login successivamente!!";
$mem_limit_ok_msg="Bene, il limite della memoria del PHP &egrave; >= 16MB. Non dovrebbero sorgere complicazione durante creazione dei provini.";
$mem_limit_low_msg="Hmmh, il limite della memoria del PHP &egrave; <=16MB. Se dovrebbero sorgere dei problemi durante la visualizzazione e creazione dei provini, prova ad aumentare il valore di 'memory_limit' nel file 'php.ini', o ridimensiona le foto ad una qualit&agrave; pi&ugrave; bassa e riprova...";
$choose_def_quali="Seleziona la qualit&agrave delle foto";
$choose_def_quali_warn="Non impostare alta qualit&agrave; se la CPU non ha almeno 1GHz";

/* third_stage_install (page 3) */
$inst_superadmin_header="Configurazione Amministratore di MySQL Database";
$inst_superadmin_name="Nome Amministratore:";
$inst_superadmin_name_info="<-il nome dell'amministratore del database (deve gi&agrave; esistere nel database";
$inst_superadmin_pass="Password Amministratore:";
$inst_superadmin_pass_info="<-password dell'amministratore del database (deve gi&agrave; esistere nel database";

$inst_admin_header="Configura Amministratore di LinPHA";
$inst_admin_name="Nome Amministratore:";
$inst_admin_name_info="<-scegli il nome dell'amministratore di LinPHA";
$inst_admin_pass="Password Amministratore:";
$inst_admin_pass_info="<-scegli la password dell'amministratore di LinPHA";
$inst_admin_email="Email Amministratore:";
$inst_admin_email_info="<-inserisci l'indirizzo di e-mail dell'amministratore";

$inst_db_header="Configura la connessione con MySQL";
$inst_db_host="Nome Host:";
$inst_db_host_info="<-nome host: normalmente &egrave; &quot;localhost&quot;";
$inst_db_host_info2="<-nome host: il nome della macchina dove gira MySQL";
$inst_db_host_port="Numero porta:";
$inst_db_host_port_info="<-numero porta: non cambiare nulla se non sei sicuro!";
$inst_db_name="Nome del database dedicato a LinPHA:";
$inst_db_name_info="<-il nome del database che LinPHA user&agrave;, tipicamente &quot;linpha&quot;";
$inst_db_name2="Nome Database:";
$inst_db_name_info2="<-Il nome del database da usare come dato dall'amministratore di sistema";
$inst_table_prefix="Prefisso per le tabelle di LinPHA";
$inst_table_prefix_info="<-il prefisso da usare per le tablle usate da LinPHA";

$general_header="Configura Opzioni Generali";
$general_album_title="Titolo dell'album";
$general_album_title_info="<-Lascia il campo vuoto per usare il valore standard";
$general_photos_row="Numbero di righe da mostrare:";
$general_photos_row_info="<-es. numero righe di provini per pagina";
$general_photos_col="Number di colonne da mostrare:";
$general_photos_col_info="<-es. numero colonne di provini per pagina";
$general_photos_width="Dimensioni della foto dettagliata (larghezza)";
$general_photos_width_info="<- 512 (valore standard)!";
$general_photos_height="Dimensioni della foto dettagliata (altezza)";
$general_photos_height_info="<- 384 (valore standard)!";
$general_img_quality="Qualit&agrave; della foto in dettaglio:";
$general_img_quality_info="<- aggiusta la qualit&agrave; dell'immagine: 0-100 (standard=75)";

$inst_status_3="Inserisci tutti i campi!";
$inst_status_step3="Fase 3 di 4";

/* forth_stage_install (page 4) */
$inst_status_4="Congratulazioni: installazione cokmpletata! LinPHA &egrave; ora pronto ad essere utilizzato";
$inst_status_step4="Fase 4 di 4";
$inst_submit="Finito";
$inst_db_tryconn="Connessione con il Database";
$inst_db_tryconn_error="Errore durante la connessione con il Database, usando:";
$inst_db_tryconn_ok="OK, connesso!";
$inst_db_tryinst="Creazione del database:";
$inst_db_tryinst_error="Errore durante la creazione del database";
$inst_db_tryinst_ok="OK, creato!";
$inst_create_tb_msg="OK, create tutte le tabelle";

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
$inst_db_connect_inc_msg="Errore durante la connessione con il database";
$inst_db_connect_inc_msg1="Errore durante select di &quot;".@$db_realname."&quot; dal database<br>
	Se il problema persiste durante l\'installazione, devi cancellare il file &quot;db_connect.php&quot;<br>
	dalla diretory &quot;sql&quot;";
/* ------------------------------------------------------------------ */


$table_create="Creazione tabelle:";
$table_create_error="Errore durante la creazione delle tabelle!";
$table_create_ok="OK, create!";
$table_insert_admin="Creazione account amministratore:";
$table_insert_admin_error="Errore durante la creazione dell'account amministratore!";
$table_insert_admin_ok="OK, creato!";
$write_db_config="Memorizzazione della configurazione";
$fopen_error="Impossibile aprire il file &quot;sql/db_config.php&quot; in scrittura, esegui &quot;chmod 777&quot; sul file e ri-esegui l'installazione";
$fopen_ok="OK, configurazione scritta!";
$install_finish_msg="OK. Installazione completata!!";
$admin_task="premi per continuare";
$file_create_ok="OK, creato!";
$configure_error="Per favore, inserisci tutti i campi richiesti!!!";
$could_not_open="Errore, impossibile aprire la tabella degli utenti! Probabilmente non hai accesso ad aggiungere nuovi utenti al database. Seleziona la modalit&agrave; ad accesso limitato durante la fase 2 dell\'installazione<br>";

/*#################################################
## header.php
#################################################*/
$page_title="LinPHA - Linux Archivio Fotografico";
$head_title="Linux Archivio Fotografico";
$book_home="pagina principale";
$book_about="versione";
$book_admin="amministrazione";
$book_admin_user="my settings";
$book_links="links";
$book_search="ricerca";
$book_logout="uscita";
$book_login="registrati";
$num_pictures="foto:";
$user_visits="visite";
$user_online="utenti/e online";
$guest="ospite";
$html_lang="it";
$html_charset="iso-8859-1";

/*#################################################
## index.php
#################################################*/
$index_welc_text="Questa &egrave; la Home Page del LinPHA, il &quot;Linux Photo Archive&quot; (Archivio Fotografico. Per aggiornamenti di LinPHA, per favore fate riferimento alla Home Page del progetto su <a href='http://linpha.sf.net'><u>Sourceforge</u></a>.";

/*#################################################
## search.php
#################################################*/
$search_header="Linpha-Ricerca";
$radio_all="Tutti i campi";
$radio_descript="Descrizione";
$radio_comment="Commento";
$radio_category="Categoria";
$radio_file="Nome del file";
$search_in="Cerca nell' Album";
$search_all="Tutti gli Album";
$search_for="Ricerca parola chiave";
$search_button="Ricerca";
$photos_found="trovato";
$search_info="LinPHA Ricerca Foto";
$search_msg="In questa pagina puoi cercare le foto archiviate nel database per:";

/*#################################################
## img_view.php
#################################################*/
$img_detail="Dettagli Immagine";
$img_size="dimensioni originali";
$img_com="commento";
$img_des="descrizione";
$img_cat="categoria";
$img_name="nome";
$img_info_stored="I commenti sono stati scritti correttamente";
$please_login="Prima di poter aggiungere dei commenti, devi <a href='login.php'><font color='#000099'><u>registrarti</u></font></a>";
$back_to_thumbs="<b><u>indietro alla vista dei provini</u></b>";
$back_to_search="<b><u>indietro alla ricerca</u></b>";
$button_next="successiva";
$button_prev="precedente";
$exif_ext_error="Supporto EXIF non attivato.";
$exif_error="Purtroppo l'immagine non contiene informazioni EXIF";
$exif_more="incrementa il livello dei dettagli";
$exif_less="meno dettagli";
$detail_header="Foto";
$detail_header1="di";
$detail_header2="<br>";
$php_to_old="PHP < 4.2.0 EXIF disabilitato!";
$views="visite";
/* Slideshow non e` stato tradotto perche` e` un termine abbastanza popolare */
$slideshow="Slideshow";
$seconds="secondi";
$go="Via";
$stopslide="Ferma Slideshow";
/* image rotating */ 
$img_rotate_ok="ruota immagine";
$img_rotating="Problemi durante rotazione dell'immagine"; // TOC entry
$img_rotating_hint1="Ruotazione dell'immagine DISABILITATA! Clicca ";
$img_rotating_hint2="per vedere il perch&eacute;";
/* @translators! $img_rotating_hint1 and $img_rotating_hint2 are ONE sentense
later! i.e. "Image rotating DISABLED! click here to see why", so make sure it make sense ;-)

/*#################################################
## login.php
#################################################*/
$login_msg="Per favore registrati!";
$login_error="nome utente o password sconosciuti";
$login_name="Nome amministratore";
$login_pass="Password amministratore";
$login_info="LinPHA pagina di login";
$login_request_account_info="Per richiedere un nuovo account:";
$login_request_target="Contatta l'amministratore di LinPHA";
$login_admin_info="Per funzioni di amministrazione, ti devi registrare con il tuo account di amministratore";
$login_friend_account_info="Se hai gi&agrave; un accesso &quot;amico&quot; puoi modificare le impostazioni personali qui";

/*#################################################
## admin.php
#################################################*/
/* other messages */
$admin_page_header="LinPHA Amministrazione";
$please_turn_off_msg="Imposta 'Creazione/Cancellazione automatica provini' quando hai aggiunto tutte le foto.<br>
						LinPHA dovrebbe girare circa 10 volte pi&ugrave; veloce :)";
/* left menu */
$logout_msg="logout";
$welc_msg="benvenuto ";
$stat_msg="Sei ora autorizzato ad eseguire operazioni di amministrazione, come aggiungere commenti e descrizioni alle foto";
$back_to_msg="<b>ritorna alle foto</b>";
$href_general_conf="Configurazione Generale";
$href_user_conf="Gestione Utenti/Group";
$href_folder_conf="Gestione Cartelle";
$href_sql="Gestione MySQL Database";
$href_ftp="Gestione FTP";
$href_stats="LinPHA statistiche";
$href_other_conf="Thumbnails EXIF/IPTC";


/* general config */
/* uses also entries from install.php */
$default_language="Lingua in uso";
$default_language_info="<--imposta la lingua di LinPHA";
$general_auto_lang="Abilita/disabilita riconoscimento automatico della lingua";
$general_auto_lang_info="<-- riconosce automaticamente la lingua del browser";
$general_success_msg="! Modifiche scritte !";

$general_rotate="Abilita/disabilita rotazione delle immagini";
$general_rotate_info="<-- <b>ATTENZIONE! Premere su Info</b>";
$general_exifinfo="Abilita/disabilita il supporto completo di EXIF";
$general_exifinfo_info="<-- abilita/disabilita l'accesso ai dati EXIF";
$general_exifdefault="Mostra normalmente le informazioni EXIF";
$general_exifdefault_info="<-- abilita la stampa delle informazioni EXIF";

$general_exiflevel="Livello di informazioni EXIT";
$general_exiflevel_info="<-- imposta la quantit&agrave di informazioni mostrata";
$exif_low="bassa";
$exif_medium="media";
$exif_high="alta";
$general_filename="Abilita/disabilita nomi dei files";
$general_filename_info="<-- mostra il nome del file sotto il provino";
$general_thumb_order="Ordina provini per";
$general_thumb_order_info="<-- imposta l'ordine dei provini: nome del file o data";
$thumb_order_date="data";
$thumb_order_file="nome del file";
$general_autoconf="Creazione/cancellazione automatica provini";
$general_autoconf_info="<--disattiva per prestazioni superiori";
$general_counterstat="Abilita/disabilita contatori";
$general_counterstat_info="<-- normalmente attivo";
$general_blocking="Tempo di blocco di IP in minuti";
$general_blocking_info="<--utente non &egrave; contato per x minuti";
$general_theme="Cambia lo stile di LnPHA";
$general_theme_info="<-- imposta lo stile da usare";
$aqua_theme="Acqua";
$colored_theme="Colorato";
$neptune_theme="Neptune";
$shadow_theme="Shadow";
$general_hq="Abilita/disabilita provini e foto ad alta qualit&agrave;";
$general_hq_info="Disabilita per una velocit&agrave; maggiore";
$submit_button_general="Memorizza impostazioni";
$button_on_msg="acceso";
$button_off_msg="spento";
$basic_opts="Base";
$advanced_opts="Avanzato";
$show_basics="Clicca per mostrare le opzioni di base";
$show_advanced="Clicca per mostrare le opzioni avanzate";
$general_printing="Abilita/disabilita stampa per utenti anonimi";
$general_printing_info="<--Se attivo, chiunque e` autorizzato a stampare";
$general_slideshow="Abilita/disabilita slideshow";
$general_slideshow_info="<-- se attivo, chiunque pu&ograve; usare lo slideshow";
$general_mini_preview="Next/previous button image status/size";
$general_mini_preview_info="<-- disabilita se molti utenti sono connessi a bassa velocit&agrave;";

/* modify existing user table */
$mod_user_header="Modifica utenti esistenti";
$submit_button_mod_user="Modifica utente";
$mod_user_success_msg="! Utente modificato !";
$submit_button_delete="Cancella";
$del_user_success_msg="! Utente cancellato !";

/* add new user table */
$new_user_header="Aggiunti un nuovo utente";
$new_user_name_info="Nome Utente:";
$new_user_pass_info="Password";
$new_user_mail_info="Email";
$new_user_level_info="Livello utente";
$friend="amico";
$submit_button_new_user="Aggiungi utente";
$new_user_success_msg="! Utente creato !";

/* friends account table */
$friend_user_header="Configurazione Utente";
$submit_button_friend_user="Aggiorna Utente";
$delete_button_friend_user="Cancella Utente";
$friend_info_msg="Cambia le tue impostazioni";

/* add new category table */
$new_cat_header="Aggiungi una nuova categoria";
$new_cat_info="nuova categoria da aggiungere";
$submit_button_new_cat="aggiungi categoria";
$new_cat_success_msg="! Categoria aggiunta !";
$mod_cat_header="Modifica/cancella categorie";
$cat_name_header="Nome categoria";
$cat_mod_header="Modifica categoria";
$cat_del_header="Cancella categoria";
$submit_button_mod_cat="Modify";

/* set directory permissions */
$set_dir_perms_header="Cambia permessi sulle cartelle";
$dir_name="Cartella";
$dir_perms="Permessi";
$action="Azione";
$submit_button_folder="Invia";
$public="pubblica";
$friends="solo amici";
$private="privata";
$new_perms_success_msg="! Permessi Cambiati !";

/*#################################################
## build_stats.php (called by admin.php)
#################################################*/
$stats_over_header="Statistiche Generali";
$stats_over_photos="Foto nel database:";
$stats_over_views="Viste generali foto:";
$stats_over_albums="Album nel database:";
$stats_over_space="Spazio disco usato (tutti gli album):";
$stats_over_most_alb_visists="Album pi&ugrave; visitati:";
$stats_over_visitors="Visitatori fino ad ora:";
$stats_over_users="Utenti registrati:";
$stats_top_ten="Le 10 pi&ugrave popolari";
$stats_rank="Classifica:";
$stats_no_views="Numero di viste:";
$stats_last_view="Ultima vista:";
$stats_alb_name="Nome Album:";

/*#################################################
## create_all_thumbs.php
#################################################*/
$parse_first="LETTURA PRIMO LIVELLO";
$parse_sec="LETTURA SECONDO LIVELLO";
$parse_third="LETTURA TERZO LIVELLO";
$parse="sto leggendo";
$parsed="letto:";
$dirs="Sotto-directories";
$done="COMPLETATO...";
$not_allowed_msg="Spiacente, ma non sei autorizzato ad eseguire questo script!";
/* these entries are called from within admin.php */
$th_msg="Crea tutti i provini automaticamente";
$table_hint_msg="Premi il bottone di Start per creare tutti i provini in tutte le sottodirectory";
$start_button="Start!";
$recreate_thumbs_header="Ricrea tutti i provini";
$recreate_thums_msg="Questa funzione ricreer&agrave; TUTTI i provini! Tutti i commenti, descrizioni e stati verranno CANCELLATI!";
$recreate_thums_warning="Si prega di confermare l'intenzione di ricreare tutti i provini e CANCELLARE PERMANENTEMENTE TUTTE LE STATISTICHE! Questa operazione non pu&ograve; essere annullata. Sei sicuro di voler continuare?";


/*#################################################
## Printing, all files
#################################################*/
$print_layout="Seleziona disposizione";
$images_page="Immagini/pagina";
$indexprint="Stampa indice (28)";
$note="<strong>NOTA:</strong> Devi modificare le impostazioni di pagina nel tuo navigatore prima di stampare, per assicurarsi che tutte le immagini entrino in una pagina !!!";
$print_button="Anteprima di stampa";
$href_check_all="Seleziona tutti";
$href_clear_all="Deseleziona tutti";
$print_error="ERRORE, non ci sono immagini selezionate !!!";
$print_mode="Modalit&agrave; di stampa";
$print_image="Stampa immagine";
$videos_msg="Non posso stampare i video";

/*#################################################
## FTP, all files
#################################################*/

/*#################################################
## MySQL backup, most files ;-)
#################################################*/
$mysql_info_header="LinPHA MySQL manutenzione database ver.";

$mysql_cancel="Annulla";
$mysql_DHTML_hint="L'uso di DHTML &egrave; disabilitato - Non sarai in grado di vedere niente finch&eacute; il backup non sar&agrave; completato.";
$mysql_select_all="Seleziona tutte";
$mysql_deselect_all="Annulla Selezioni";
$mysql_create_backup="Crea Backup";
$mysql_back_menu="Torna al menu";
$mysql_table_checks="Controllo tabelle...";
$mysql_table_check="Controllo tabella";
$mysql_struct_msg="Creazione struttura per";
$mysql_in_file_dump_msg="salvataggio dati per";
$mysql_progress="Avanzamento totale:";
$mysql_back_complete="Backup completato in";
$mysql_back_menu_long="Indietro al menu di backup di MySQL";
$mysql_open_warn1="<B>Attenzione:</B> impossibile aprire ";
$mysql_open_warn2="in scrittura!<BR><BR><I>CHMOD 777</I> dovrebbe risolvere il problema.";
$mysql_date_msg="Sono le ore "; // it follows time of the day...
$mysql_last_backup="L'ultimo backup del database MYSQL: ";
$mysql_backup_hint="Generalmente, non &egrave; necessario effettuare i backup pi&ugrave; di una volta a settimana.";
$mysql_down_backup="Scarica un precedente backup completo ";
$mysql_down_backup_part="Scarica un precedente backup parziale ";
$mysql_down_backup_struct="Scarica un precedente backup (solo struttura) ";
$mysql_down_backup1="(Click tasto-dx, Salva come...)";
$mysql_unknown_backup="L'ultimo backup del database MYSQL: <I>sconosciuto</I>";
$mysql_href_recom="Crea un nuovo backup completo, contenente tutti i dati (suggerito)";
$mysql_href_standard="Crea un nuovo backup completo, contenente solo i dati pi&ugrave; importanti (pi&ugrave; piccolo)";
$mysql_href_partial="Crea un nuovo backup parziale, con solo alcune tabelle (con dati completi)";
$mysql_href_structure="Crea un nuovo backup completo, contenente solo la strutura delle tabelle (senza dati)";
$mysql_days_last="giorni";
$mysql_hours_last="ore";
$mysql_min_last="minuti";
$mysql_sec_last="secondi";
$ago="fa"; // reads in context "some days ago"
$backup="Backup";
$restore="Ripristina";
$optimize="Ottimizza";
$optimize_tables="Ottimizza tabelle";
$opt_table_name="Nome tabella";
$opt_table_check="Conntrollo tabella";
$opt_table_optimize="Ottimizza tabella";
$opt_table_msg="Tipo di messaggio";
$opt_start_msg="Inizio controllo ed ottimizzazione di tutte le tabelle";
$fullback_hint_msg="Se hai pi&ugrave; di un database, &egrave; consigliato di utilizzare il metodo di backup <b>parziale</b>";
$restore_last_fullback="Ripristina l'ultimo backup <b>completo</b>:";
$restore_last_partback="Ripristina l'ultimo backup <b>parziale</b>:";
$restore_error="ERRORE durante l'apertura del file di backup. File inesistente!";
$restore_success="ripristino completato!";

/*########################################################################
### FILEMANGER
########################################################################*/

define('STR_ACCESS_DENIED','<H1>Accesso negato</H1> non hai permessi sufficenti per accedere a questa directory');
define('STR_BACK',	'indietro');
define('STR_LESS',	'meno');
define('STR_MORE',	'pi&ugrave;');
define('STR_LINES',	'linee');
define('STR_FUNCTIONLIST', 'Lista funzioni');
define('STR_EDIT',	'modifica');
define('STR_VIEW',	'vista');
define('STR_RENAME',	'rinomina');
define('STR_MKDIR',	'crea dir.');
define('STR_DELETE',	'cancella');
define('STR_BOTTOM',	'in fondo');
define('STR_TOP',	'in cima');
define('STR_FILENAME',	   'nome file');
define('STR_FILESIZE',	   'dimensioni');
define('STR_LASTMODIFIED', 'ultima modifica');
define('STR_SUM', '<B>%s</B> bytes in <B>%s</B> oggetti');
define('STR_CREATEDIRLEGEND', 'crea directory');
define('STR_CREATEDIR',       'nome della directory da creare:');
define('STR_CREATEDIRBUTTON', 'crea directory');
define('STR_RENAMELEGEND',       'rinomina');
define('STR_RENAMEENTERNEWNAME', 'inserisci il nuovo nome per %s:');
define('STR_RENAMEBUTTON',       'rinomina');
define('STR_ERROR_DIR','Errore: impossibile leggere il contenuto della directory');
define('STR_AUDIO',            'audio');
define('STR_COMPRESSED',       'compresso');
define('STR_EXECUTABLE',       'eseguibile');
define('STR_IMAGE',            'immagine');
define('STR_SOURCE_CODE',      'codice sorgente');
define('STR_TEXT_OR_DOCUMENT', 'testo o documento');
define('STR_WEB_ENABLED_FILE', 'file per web');
define('STR_VIDEO',            'video');
define('STR_DIRECTORY',        'directory');
define('STR_PARENT_DIRECTORY', 'directory precedente');
define('STR_EDITOR_SAVE',      'salva file');
define('STR_EDITOR_SAVE_ERROR','il file <I>%s</I> non &egrave; scrivibile o non accedibile');
define('STR_EDITOR_SAVE_ERROR_WRONG_VALUE','durante la modifica del file <i>%s</i>, hai inserito il seguente valore alla posizione #%s: %s.');
define('STR_EDITOR_SAVE_ERROR_HEX_VALUE_NEEDED','secondo le impostazioni, devi inserire un valore positivo esadecimale compreso tra 00 e FF.');
define('STR_EDITOR_SAVE_ERROR_DEC_VALUE_NEEDED','secondo le impostazioni, devi inserire un valore intero positivo decimale compreso tra 0 e 255.');
define('STR_FILE_UPLOAD_NAVI_HINT', 'Quick Navigator');
define('STR_FILE_UPLOAD_DRIVES', 'Dischi:');
define('STR_FILE_UPLOAD', 'trasferisci');
define('STR_FILE_UPLOAD_MAIN', 'trasferimenti');
define('STR_FILE_UPLOAD_DISABLED', 'spiacente, il caricamento dei files &egrave; disabilitato (in php.ini)');
define('STR_FILE_UPLOAD_DESC','Seleziona il file da trasferire, inoltre scegli cosa fare quando il trasferimento &egrave; completato con successo.');
define('STR_FILE_UPLOAD_FILE','File');
define('STR_FILE_UPLOAD_TARGET','Trasferisci i files in');
define('STR_FILE_UPLOAD_ACTION','quando il trasferimento &egrave; completato:');
define('STR_FILE_UPLOAD_NOTHING','non fare nulla');
define('STR_FILE_UPLOAD_DROPFILE','cancella il file trasferito quando l\'azione selezionata &egrave; completata');
define('STR_FILE_UPLOAD_MAXFILESIZE','Le dimensioni massime di ogni file che pu&ograve; essere trasferito (impostazioni in php.ini) sono"');
define('STR_FILE_UPLOAD_ERROR',        'Errore: impossibile muovere il file %s nella directory %s');
define('STR_FILE_UPLOAD_CHDIR_ERROR',  'Errore: impossibile cambiare la directory in %s durante esecuzione dell\'azione sul file: %s');
define('STR_FILE_UPLOAD_UNLINK_ERROR', 'Errore: impossibile cancellare %s dopo l\'azione');
define('STR_FILE_UPLOAD_ERROR_FILE_EXCEEDS_INI_SIZE', 'Errore: il file trasferito (%s) eccede le dimensioni massime permesse (modifica il parametro upload_max_filesize nel file php.ini - %s)');
define('STR_FILE_UPLOAD_ERROR_FILE_EXCEEDS_FORM_SIZE','Errore: le dimensioni del file %s eccedono le impostazioni del comando FORM dell\'HTML');
define('STR_FILE_UPLOAD_ERROR_FILE_PARTIAL',          'Errore: il file %s &egrave; stato soltanto parzialmente trasferito');

/*########################################################################
### BIG FAT NOTICE !
### AS OF LINPHA 0.9.0 ALL NEW ENTRIES ARE PLACED BELOW THIS MSG
### DEVELOPERS PLEASE MAKE USE OF THE "LANGUPDATE.PHP" SCRIPT!
########################################################################*/

$pano_view="vista panoramica"; /* (img_view.php) -- new [panorama view] href  */
$close_win="Chiudi finestra"; /* (various files) -- javascript close window */
$nav_hint="Usa il mouse oppure le frecce sulla tastiera per navigare"; /* (image_panorama_view.php) --  */
$pano_view_of="Vista panoramica dell'immagine"; /* (image_panorama_view.php) -- header message */
$php_basedir_check_msg="controllo se PHP open_basedir &egrave; impostato..."; /* (sec_stage_install.php) --  */
$req_basedir_fail="NO"; /* (sec_stage_install.php) -- YES, it\'s really just no/nein ;-) */
$basedir_activE_msg="ATTENZIONE.Hai configurato PHP per utilizzare \"open_basedir\". !<br>"; /* (sec_stage_install.php) --  */
$basedir_active_msg1="+ LinPHA utilizzer&agrave; la libreria GD per creare i provini, comunque preparati ad avere dei problemi<br>"; /* (sec_stage_install.php) --  */
$basedir_active_msg2="+ Se possibile, per favore rimuovi le impostazioni di \"open_basedir\" nel file PHP.ini"; /* (sec_stage_install.php) --  */
$gd_basedir_err="+ Se possibile, per favore rimuovi le impostazioni di \"open_basedir\" in PHP.ini oppure ricompila PHP con la libreria GD (--with-gd)"; /* (sec_stage_install.php) --  */
$extract_tar_gz="extrai un archivio *.tar.gz (Unix)"; /* (index.php) -- filemanger upload select */
$extract_tar_bz2="estrai un archivio *.tar.bz2 (Unix)"; /* (index.php) --  */
$extract_gz="scompatta con gzip (Unix)"; /* (index.php) -- filemanger upload select */
$extract_zip="scompatta con unzip (Unix)"; /* (index.php) -- filemanger upload select */
$extract_winzip="scompatta con pkzip (Windows WinZip)"; /* (index.php) -- filemanger upload select */
$new_group_success_msg="Gruppo aggiunto"; /* (admin.php) -- redirect message */
$mod_group_success_msg="Gruppo modificato"; /* (admin.php) -- redirect message */
$del_group_success_msg="Gruppo cancellato!"; /* (admin.php) -- redirect message */
$mod_cat_success_msg="Categoria modificata"; /* (admin.php) -- redirect message */
$del_cat_success_msg="Categoria cancellata"; /* (admin.php) -- redirect message */
$href_groups="Clicca qui per aggiungere o modificare i gruppi"; /* (build_user_conf/build_folder_conf) --
href message to group management */
$del_warning="WARNING: You have to login with your new account !!!"; /* (build_user_conf.php) -- java popup
to notify admin user */
$href_to_folder_conf="Torna alla gestione cartelle"; /* (build_user_conf.php) -- navi href  */
$href_to_user_conf="Torna alla gestione utenti"; /* (build_user_conf.php) -- navi href  */
$header_new_group="Aggiungi gruppo"; /* (build_user_conf.php) -- table header */
$header_groupname="Nome gruppo"; /* (build_user_conf.php) -- table header */
$button_addgroup="Aggiungi gruppo"; /* (build_user_conf.php) -- submit button */
$header_mod_group="Modifica/cancella gruppo"; /* (build_user_conf.php) -- table header */
$mod_group_header="Modifica gruppo"; /* (build_user_conf.php) -- table header */
$del_group_header="Cancella gruppo"; /* (build_user_conf.php) -- table header */
$search_to_short="La stringa per la ricerca &egrave; troppo corta(minimo 2 caratteri)."; /* (search.php) --  */
$general_thumb_size="Cambia la dimensione delle anteprime"; /* (build_general_conf.php) -- thumbsize
stuff */
$general_thumb_size_info="Imposta la dimensione in pixel"; /* (build_general_conf.php) -- thumbsize stuff
*/
$general_thumb_border="Abilita il bordo nella anteprime"; /* (build_general_conf.php) -- thumb
border stuff */
$general_thumb_border_info="Abilita il bordo nella anteprime"; /* (build_general_conf.php) -- thumb
border stuff */
$inst_thumbsize_header="Imposta grandezza anteprime"; /* (third_stage_install.php) -- thumb size stuff */
$inst_thumbborder_header="Imposta bordi"; /* (third_stage_install.php) -- thumb border stuff */
$inst_thumbborder_enable="Abilita bordi immagini"; /* (third_stage_install.php) -- thumb border checkbox msg
*/
$inst_thumbborder_disable="Disabilita bordi immagini"; /* (third_stage_install.php) -- thumb border checkbox
msg */
$afemode_active_msg="ATTENZIONE, hai configurato PHP in modo da usare le restrizioni \"save_mode\".<br>";
/* (sec_stage_install.php) --  */
$safemode_active_msg2="+ Se possibile disabilitare \"save_mode\" in PHP.ini"; /* (sec_stage_install.php)

--  */
$general_anon_post="Consenti/Non consenti i post agli utenti non registrati"; /* (build_general_conf.php) --  */
$general_anon_post_info="<-- Gli utenti non registrati possono pubblicare commenti"; /* (build_general_conf.php) --  */
$stats_over_comment="Commenti aggiunti"; /* (build_stats.php) --  */
$top10_downs_href="Mostra i 10 downaload pi frequenti"; /* (build_stats.php) --  */
$top10_views_href="Mostra i 10 pi visti"; /* (build_stats.php) --  */
$stats_head_downs="I 10 downloads pi frequenti"; /* (build_stats.php) --  */
$no_downloads="Numero di downloads"; /* (build_stats.php) --  */
$general_anon_download="Abilita/Disabilita il download per gli utenti non registrati"; /* (build_genera_config.php) --  */
$general_anon_download_info="<-- Mostra/Nascondi il link per il download delle immagini"; /* (build_general_config.php) --  */
$seach_multiple_select_use="Usa la selezione multipla"; /* (search.php) --  */
$search_and="E"; /* (search.php) --  */
$search_or="OPPURE"; /* (search.php) --  */
$search_categories="Categorie"; /* (search.php) --  */
$search_with_available_filters="Con i filtri disponibili"; /* (search.php) --  */
$search_select_album="Seleziona album"; /* (search.php) --  */
$search_date_from_to="Data da/a"; /* (search.php) --  */
$search_combination_and_or="In cobminazione con E/OPPURE"; /* (search.php) --  */
$new_user_new_password="Nuova password"; /* (build_user_conf.php) --  */
$new_user_error4="La username non pu&ograve; essere vuota"; /* (admin.php) --  */
$new_user_error5="La username esiste gi&agrave"; /* (admin.php) --  */
$new_user_error1="La vecchia password noni &egrave; corretta"; /* (admin.php) --  */
$new_user_error2="La nuova password inserita nei due campi &egrave; diversa"; /* (admin.php) --  */
$new_user_error3="L'E-mail non &egrave; corretta"; /* (admin.php) --  */
$new_user_old_password="Vecchia Password"; /* (admin.php) --  */
$new_user_retype_password="Riscrivi la nuova password"; /* (admin.php) --  */
$select_db_header="Prego selezionare il tipo di database"; /* (sec_stage_install.php) --  */
$mysql_info="Scegli questa opzione per accedere a un database MySQL"; /* (sec_stage_install.php) --  */
$postgres_info="Scegli questa opzione per accedere a un database PostgreSQL. Maggiori informazioni"; /* (sec_stage_install.php) -- reads: ...Please see info */
$login_autologin="Autologin"; /* (toc.php) --  */
$login_autologin_user="Autologin Userinfo"; /* (toc.php) --  */
$toc_timer="Timer"; /* (toc.php) --  */
$general_autologin="Abilita/Disabilita autologin"; /* (build_general_conf.php) --  */
$general_autologin_info="<-- Attiva questa opzione per usare l'autologin"; /* (build_general_conf.php) --  */
$general_timer="Abilita/Disabilita timer"; /* (build_general_conf.php) --  */
$general_timer_info="<-- Attiva la visualizzazione del timer sulla barra inferiore"; /* (build_general_conf.php) --  */
$login_autlogin="Autologin"; /* (login.php) --  */
$lostpw_title="Password Dimenticata"; /* (login.php) --  */
$lostpw_question="Hai dimenticato la tua password?"; /* (login.php) --  */
$lostpw_type_user_or_email="Inserisci la tua username o il tuo indirizzo E-Mail di LinPHA"; /* (login.php) --  */
$lostpw_email1="Qualcuno ha usato la funzione recupera password.Se non sei stato tu, ignora questo messaggio e non sar&agrave; effettuato nessun cambiamento.Se hai usato tu la funzione recupera password, inserisci questo codice dove rischiesto."; /* (login.php) --  */
$lostpw_email1_part2="(Ricorda: Questa NON &egrave; la tua nuova password!)"; /* (login.php) --  */
$lostpw_email1_part3="Amministratore LinPHA"; /* (login.php) --  */
$lostpw_email_error="ATTENZIONE: L'E-Mail non &egrave; stata inviata.Contatta l'amministratore."; /* (login.php) --  */
$lostpw_error_nothing_found="Mi dispiace, non &egrave; stata trovata nessuna username e password corrispoindente ai criteri inseriti."; /* (login.php) --  */
$lostpw_email_sent="E-Mail inviata."; /* (login.php) --  */
$lostpw_should_receive="Dovresti ricevere l'E-mail in pochi minuti.Inserisci il codice che trovi nell'E-mail in questo campo: "; /* (login.php) --  */
$lostpw_go_back="Indietro"; /* (login.php) --  */
$lostpw_email2="Password cambiata correttamente.La vostra nuova password &egrave; "; /* (login.php) --  */
$lostpw_email2_part2="Potete cambiarla successivamente usando \"impostazioni personali\"."; /* (login.php) --  */
$lostpw_new_password="Nuova Password"; /* (login.php) --  */
$lostpw_successfully_changed="Password cambiata correttamente, dovreste ricevere in pochi minuti una E-mail con la vostra nuova password."; /* (login.php) --  */
$lostpw_error_wrong_code="ATTENZIONE, hai inserito un codice non corretto."; /* (login.php) --  */
$lostpw_enter_correct_code="Inserisci il codice corretto presente nell'E-mail in questo campo:"; /* (login.php) --  */
$lang_plugins['plugins']="Plugins LinPHA"; /* (admin.php) --  */
$lang_plugins['watermark']="Filigrana"; /* (admin.php, toc.php) --  */
$lang_plugins['benchmark']="Benchmark"; /* (admin.php, toc.php) --  */
$lang_plugins['sql']="Gestione Database"; /* (admin.php, toc.php) --  */
$lang_plugins['active_plugins']="Plugins Attivi"; /* (admin.php) --  */
$lang_plugins['enabled']="Abilitato"; /* (plugins.php) --  */
$lang_plugins['disabled']="Disabilitato"; /* (plugins.php) --  */
$lang_plugins['update']="Aggiorna"; /* (plugins.php) --  */
$lang_plugins['plugins_updated']="Plugins aggiornati"; /* (admin.php, plugins.php) --  */
$wm_wm_man="Gestione filigrana "; /* (watermark.php) --  */
$wm_disable="Disabilita filigrana "; /* (watermark.php) --  */
$wm_change_example_img="Cambia immagine di esempio "; /* (watermark.php) --  */
$wm_no_input_files_found="Nessun file di input trovato "; /* (watermark.php) --  */
$wm_image_quality="Qualit&agrave; dell'immagine (solo per le anteprime) "; /* (watermark.php) --  */
$wm_enable_text="Abilita: Testo "; /* (watermark.php) --  */
$wm_text="Testo "; /* (watermark.php) --  */
$wm_font="Carattere "; /* (watermark.php) --  */
$wm_fontsize="Dimensione carattere "; /* (watermark.php) --  */
$wm_fontcolor="Colore carattere "; /* (watermark.php) --  */
$wm_align="Allinea "; /* (watermark.php) --  */
$wm_pos_hor="Posizione orizzontale "; /* (watermark.php) --  */
$wm_pos_ver="posizione verticale "; /* (watermark.php) --  */
$wm_height="Altezza testo "; /* (watermark.php) --  */
$wm_width="Larghezza testo "; /* (watermark.php) --  */
$wm_shadow_size="Dimensione ombreggiatura "; /* (watermark.php) --  */
$wm_shadow_color="Colore ombreggiatura "; /* (watermark.php) --  */
$wm_enable_image="Abilita: Immagine"; /* (watermark.php) --  */
$wm_available_images="Immagini disponibili"; /* (watermark.php) --  */
$wm_no_images_found="Nessuna immagine trovata"; /* (watermark.php) --  */
$wm_dissolve="Dissolvenza"; /* (watermark.php) --  */
$wm_preview="Anteprima"; /* (watermark.php) --  */
$wm_linebreak="per interruzioni di linea"; /* (watermark.php) --  */
$wm_enable_shadow="Enable ombreggiatura"; /* (watermark.php) --  */
$wm_enable_rectangle="Enable rettangoli"; /* (watermark.php) --  */
$wm_rectangle_color="Colore"; /* (watermark.php) --  */
$wm_enable_ext_shadow="Enable ombreggitura estesa"; /* (watermark.php) --  */
$wm_status="Stato"; /* (watermark.php) --  */
$wm_enabled="abilitato"; /* (watermark.php) --  */
$wm_disabled="disabilitato"; /* (watermark.php) --  */
$wm_restore_to="Riporta a"; /* (watermark.php) --  */
$wm_inital_settings="impostazioni iniziali"; /* (watermark.php) --  */
$wm_add_more_examples="Puoi aggiungere pi immagini di esempio nella tua directory LinPHA nella cartella"; /* (watermark.php) --  */
$wm_example="Esempi"; /* (watermark.php) --  */
$wm_shadow_fontsize="Ombreggiatura fontsize"; /* (watermark.php) --  */
$wm_settings_for_both="Impostazioni per immagini e testo"; /* (watermark.php) --  */
$wm_center="al centro"; /* (watermark.php) --  */
$wm_north="tin alto"; /* (watermark.php) --  */
$wm_northeast="in alto a destra"; /* (watermark.php) --  */
$wm_northwest="in alto a sinistra"; /* (watermark.php) --  */
$wm_south="in basso"; /* (watermark.php) --  */
$wm_southeast="in basso a destra"; /* (watermark.php) --  */
$wm_southwest="in basso a sinistra"; /* (watermark.php) --  */
$wm_east="a destra"; /* (watermark.php) --  */
$wm_west="a sinistra"; /* (watermark.php) --  */
$bm_file_err="Errore, nessun file specificato";
$bm_var_err="Errore, prego controllare i campi di input";
$bm_notfound_err="Errore, file non trovato";
$bm_noimg_err="Errore, il file non &egrave; una immagine";
$bm_tmpfile_err="Errore mentre stavo creando il file temporaneo";
$bm_tmpfile_warn="ATTENZIONE: L'immagine temporanea non pu&ograve; essere cancellata";
$bm_time_total="Tempo totale di esecuzione: ";
$bm_img_sec="Immagini al secondo: ";
$bm_avg_img="tempo medio per ogni immagine : ";
$bm_qual_size="Qualit&agrave; Dimensione";
$bm_quality="Qualit&agrave; ";
$bm_height="Altezza: ";
$bm_width="Larghezza: ";
$bm_size="Dimensione immagine: ";
$bm_create = "Sto crendo un benchmark con lo strumento di conversione";
$bm_interval = "intervallo";
$bm_calc = "Sto calcolando";
$bm_img = "Immagini";
$bm_inloop="Eseguo un loop";
$bm_qual_range="Qualit&agrave;";
$bm_size_range="Dimensione (solo altezza): ";
$bm_repeats="Ripetizioni: ";
$bm_con_util="Selezionare lo strumento di conversione: ";
$bm_current_settings="Impostazioni correnti"; /* (benchmark.php) --  */
$bm_preview="Anteprima"; /* (benchmark.php) --  */
$bm_save_settings="Salva le impostazioni"; /* (benchmark.php) --  */
$wm_addexamples="Filigrana: aggiungi pi immagini esempio"; /* (watermark.php) --  */
$wm_addimg="Filigrana: Aggiungi immagini filigrana"; /* (watermark.php) --  */
$wm_addfont="Filigrana: Aggiungi caratteri"; /* (watermark.php) --  */
$wm_colorsetting="Filigrana: Impostazione colori"; /* (watermark.php) --  */
$comment_hint="SUGGERIMENTO: clicca sull'immagine superiore o inferioe per scorrere l'album"; /* (linpha_comments.php) --  */
$comment_end="Fine dell'album"; /* (linpha_comments.php) --  */
$comment_beginning="Inizio dell'album"; /* (linpha_comments.php) --  */
$comment_back="Torna alle immagini"; /* (linpha_comments.php) --  */
$comment_edit_img="Edit category/comment"; /* (linpha_comments.php) --  */
$comment_change_img_details="Modifica dettagli immagini"; /* (linpha_comments.php) --  */
$comment_last_comments="Ultimi commenti"; /* (linpha_comments.php) --  */
$comment_comment_by="commento di"; /* (linpha_comments.php) --  */
$category_delete_warning="ATTENZIONE: Le categorie assegnate saranno perse"; /* (build_category_conf.php) --  */
$pass_2_short="ERRORE, la password deve contenere almeno 3 caratteri..."; /* (various) --  */
$album_edit="Modifica commento all'album"; /* (linpha_comments.php) --  */
$album_details="Dettagli album"; /* (linpha_comments.php) --  */
$wm_save_note="ATTENZIONE: La filigrana NON &egrave; visibile agli utenti registrati. Dovete uscire (logout) per vedere la filigrana mentre usate LinPHA."; /* (watermark.php) --  */
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
$arr_month_short = Array('1' => 'gen','2' => 'feb','3' => 'mar','4' => 'apr','5' => 'mag','6' => 'giu','7' => 'lug','8' => 'ago','9' => 'set','10' => 'ott','11' => 'nov','12' => 'dic'); /* abrevations of months */
$arr_month_long = Array('1' => 'gennaio','2' => 'febbraio','3' => 'marzo','4' => 'aprile','5' => 'maggio','6' => 'giugno','7' => 'luglio','8' => 'agosto','9' => 'settembre','10' => 'ottobre','11' => 'novembre','12' => 'dicembre'); /* months */
$arr_day_short = Array('dom','lun','mar','mer','gio','ven','sab'); /* abrevations of weekdays */
$arr_day_long = Array('domenica','luned&igrave;','marted&igrave;','mercoled&igrave;','gioved&igrave;','venerd&igrave;','sabato'); /* weekdays */

/*
If the time and date format in your country is different with these formats,
please uncomment these lines and set it to the right format. Otherwise, leave
it as it is. See http://www.php.net/manual/en/function.strftime.php for definitions.
(Don't apply this to the english language file, the default date and time format are
set in the options page of linpha. This is because the date format is different within
the english spoken countries.)
*/
$date_format = "%a %d/%m/%Y";
$time_format = "%H.%M.%S";
$layout="Layout"; /* build_general_config.php */
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
$timespanfmt = "%s giorni, %s ore, %s minuti e %s secondi";  /* (new_images.php) -- */
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