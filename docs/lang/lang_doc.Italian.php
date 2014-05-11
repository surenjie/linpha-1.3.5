<?php
/**
* translators: for info see top of the english language file!
*
*
* translators: for info see top of the english language file!
* !!!!! PLEASE POINT YOUR BROWSER TO: !!!!!
* http://path2linpha/docs/lang/check_files.php to get a list of missing entries
* 
*/
$lang['default_date_time_format'] = 'Default date and time format';
$lang['sql'] = 'DB Management';
$lang['plugins'] = 'LinPHA Plugins';
$lang['benchmark'] = 'Benchmark';
$lang['watermark'] = 'Watermark';
$lang['cache'] = 'Image Cache';
$lang['mail']="Mailing list plugin";
$lang['guestbook']="Guestbook plugin";
$lang['wm_delete_all_cached_images']="Watermark: Delete all cached images";

$lang['doc_entry_mail'] = "
		This plugin adds a mailing list where users can register themself to receive news from you later.<br>
		In addition (allowed) users can send out mail to all other mailing list members. Some new configuration 
		options will show up in admin section to allow you to change the behavior of this plugin.<br><br>
		Default: off
		";
$lang['doc_entry_guestbook']="This plugin adds a guestbook where user can leave you a message.<br>
		In addition some new config options will be available in the admin section to configure the
		guestbook behavior.<br><br>
		Default: off
		";
$lang['doc_entry_new_images']="
		With this option enabled, a new \"virtual folder\" will be displayed in the left menu.<br>
		It will show all new added images from all albums (you are allowed to view) without 
		wasting any additional webspace!<br>
		The preview of images depends on the <a href=\"#doc_entry_new_images_age\">max age</a> setting below.<br>
		The folder will disapear as soon as the \"max age\" is reached and show up again as soon as you add<br>
		some new images (isn't that magic :-))<br><br>
		Default: On
		";
$lang['doc_entry_new_images_age']="This setting defines (in days) how long new added images show up in the \"new images\" 
		folder<br><br>
		Default: 7 days
		";
$lang['doc_entry_comment_in_subfolder']="If set to on, this will display an album comment also in the \"subfolder preview\"
		for the subalbums and not only in the album itself.<br>
		You should consider to turn this feature off if you have long album comments as it may break the layout
		of the subfolder preview.<br><br>
		Default: on
		";
$lang['doc_entry_fullaccess'] = "
                Se stai per installare LinPHA nel tuo PC di casa o su un server a cui hai accesso come
                \"root\" scegli questa opzione. Devi avere anche pieno accesso a un database server MySQL
                per creare i nuovi utenti di LinPHA.
	";
$lang['doc_entry_limitedaccess'] = "
                Se stai installando LinPHA da qualche parte in <b>internet</b>, scegli questa opzione.La
                maggior parte dei provider internet non concedono pieno accesso al database MySQL.
	";
$lang['doc_entry_dbselect'] = "
                Alcune note riguardo i database supportati:<br>
                <b>Database MySQL:</b> Per continuare devi avere una password amministratore ( gi? impostata )
                per il tuo database MySQL.Per maggiori informazioni visita:
                <a href=\"http://linpha.sourceforge.net/nuke/modules.php?name=FAQ\">LinPHA FAQ</a>.<br><br>
                <b>Database PostgreSQL:</b> in questo caso LinPHA non creer? da solo il database. Quindi dovrete
                lanciare il comando <b><i>createdb linpha</i></b> dalla riga di comando per creare un nuovo database
                con il nome &quot;linpha&quot; prima di poter continuare. Il resto dell'installazione ? simile all'installazione
                con MySQL, con la differenza che non ? richiesta una password amministratore impostata.
                <br> per tutti i RDBMS assicurarsi che PHP sia supportato!!
	";
$lang['doc_entry_sqladminname'] = "
                La username dell'amministratore del tuo database MySQL. Spesso il valore ? \"root\".
	";
$lang['doc_entry_sqladminpass'] = "
	        La password per l'accesso come amministratore al database MySQL. <b>Nota:</b> Per
	        ragioni di sicurezza LinPHA non sar? installato su sistemi che non hanno un accesso
	        al database come amministratore, quindi siate sicuri di avere una username e una
                password per accedere come amministratore al database.
	";
$lang['doc_entry_linphaname'] = "
                La username dell'amministratore di LinPHA. Potrete in seguito accedere all'area
                riservata all'amministratore di LinPHA per compiere le varie operazioni di gestione.
	";
$lang['doc_entry_linphapass'] = "
                La password dell'amministratore di LinPHA.
	";
$lang['doc_entry_linphamail'] = "
                L'indirizzo E-Mail dell amministratore di LinPHA.
	";
$lang['doc_entry_dbhost'] = "
	        Il nome del computer nel quale ? installato MySQL. Se state installando sul vostro PC di
	        casa probabilmente il nome sar? \"localhost\",mentre se state installando su un Internet
	        Service provider sar? qualcosa del tipo \"mysql.dominio.org\".
	";
$lang['doc_entry_dbport'] = "
                La porta del server MySQL. Nella maggior parte dei casi sar? \"3306\".
	";
$lang['doc_entry_dbname_full'] = "
	        Il nome del database che conterr? tutte le tabelle di LinPHA. Se non siete sicuri potete
                lasciare il valore di default \"linpha\".<br>

                Se state installando varie versioni o varie copie di linpha,
                cambiate il nome del database qui.
	";
$lang['doc_entry_dbname'] = "
	        Il nome del database a cui connettersi. Questo nome ? <b>fornito</b> dal vostro Internet Service Provider.
	";
$lang['doc_entry_dbprefix'] = "
	        Il prefisso per il nome di tutte le tabelle di LinPHA. Tutte le tabelle avranno il
	        <b>prefisso \"linpha_\"</b> nel vostro database (es. linpha_nometabella). cambiate
                a vostro piacere questo valore.
	";
$lang['doc_entry_albumtitle'] = "
                Questa opzione permette di impostare il nome dell'album fotografico di LinPHA.
                Lasciate questo ampo vuoto per usare il nome di default.<br>
                Default: campo vuoto (The Linux Photo Archive)
	";
$lang['doc_entry_photoscol'] = "
                Questa opzione consente di modificare il <b>numero di colonne</b> con le anteprime.
                Saranno modificate tutte le pagine nelle quali vengono mostrate delle anteprime.<br>
                Potete aumentare questo valore se state utilizzando LinPHA ad alta risoluzione (maggiore di 1024x768)
		Default: 4 colonne
	";
$lang['doc_entry_photosrow'] = "
                Questa opzione consente di modificare il <b>numero di righe</b> con le anteprime.
                Saranno modificate tutte le pagine nelle quali vengono mostrate delle anteprime.<br>

                Potete aumentare questo valore se state utilizzando LinPHA ad alta risoluzione (maggiore di 1024x768).
		Default: 3 righe
	";
$lang['doc_entry_photoswidth'] = "
                Questa opzione consente di impostare la <b>larghezza dell'immagine</b> mostrata
                quando visualizzate una foto (Cio? la dimensione \"media\" delle immagini quando cliccate
                su una anteprima).<br>
                Potete aumentare questo valore se state utilizzando LinPHA ad alta risoluzione (maggiore di 1024x768).
		Default: 512
	";
$lang['doc_entry_photosheight'] = "
		Questa opzione consente di impostare l'<b>altezza dell'immagine</b> mostrata
                quando visualizzate una foto (Cio? la dimensione \"media\" delle immagini quando cliccate
                su una anteprima).<br>
                Potete aumentare questo valore se state utilizzando LinPHA ad alta risoluzione (maggiore di 1024x768).
		Default: 384
	";
$lang['doc_entry_imgquality'] = "
	        Questa opzione consente di impostare la <b>qualit? dell'immagine</b> mostrata
                quando visualizzate una foto (Cio? la dimensione \"media\" delle immagini quando cliccate
                su una anteprima).Potete aumentare la velocit? di caricamento impostando un valore basso
                di questo parametro.
                Esempi:<br>

                Dimensione immagine (Qualit? 75) = 28.55 KBytes<br>
		Dimensione immagine (Qualit? 50) = 18.47 KBytes<br>
		Dimensione immagine (Qualit? 40) = 15.80 KBytes<br>
		Default: 75
	";
$lang['doc_entry_rotateonoff'] = "
                Questa opzione permette di abilitare/disabilitare la rotazione delle immagini.<br>
                <b>ATTENZIONE!</b><br>
                Se state usando la libreria GD,<b><font color=\"FF0000\"> TUTTE LE INFORMAZIONI EXIF DELL'IMMAGINE
                SARANNO PERSE !!!</font></b> durante la rotazione delle immagini.<br> Ho gi? reso noto questo bug agli sviluppatori PHP
                ma mi hanno detto che non lo correggeranno. :-(<br><br>

                Se state usando lo strumento di conversione di ImageMagick non dovreste avere problemi,ma si consiglia comunque di
                effettuare dei test!<br>
		Default: spento
	";
$lang['doc_entry_exifonoff'] = "
	        Molte immagini nel formato Jpg contengono alcune informazioni speciali conosciute come EXIF.
	        Questa opzione abilita/disabilita la visualizzazione delle informazioni EXIF nella pagina
                principale (quella che appare quando cliccate su una anteprima).Se non ci sono particolari
                indicazioni dovreste lasciare il valore di default (acceso).<br>
                SUGGERIMENTO: Se abilitato dovreste anche avere visualizzato:<br>
                <a href='#exifdefault'>EXIF impostazioni di default</a><br>
		<a href='#exiflevel'>EXIF </a>
	";
$lang['doc_entry_exifdefault'] = "
                Questa opzione consente di visualizzare <b>sempre</b> le informazioni EXIF quando
                visualizzate una immagine. Altrimenti gli utenti dovranno cliccare sul link
                <b>\"Dettagli\"</b>per ottenere le informazioni EXIF.
		Default: spento
	";
$lang['doc_entry_exiflevel'] = "
		La quantit? di informazioni EXIF ? definita dai <b>tre livelli</b> (basso/medio/alto).
		Maggiore ? il livello impostato, maggiore sar? la quantit? di informazioni EXIF mostrate.
		Default: medio
	";
$lang['doc_entry_filename'] = "
                Questa opzione consente di visualizzare il nome del file vicino all'anteprima.<br>

		Default: acceso
	";
$lang['doc_entry_thumborder'] = "
                Questa opzione consente di cambiare l'ordine delle anteprime. Potete scegliere tra
                <b>\"l'ordinamento per data\"</b> e <b>\"l'ordinamento per nome del file\"</b>.
                Potete anche impostare il tipo di ordinamento (crescente/descrescente).
		Default: data
	";
$lang['doc_entry_thumbsize'] = "
                Questa opzione consente di cambiare la dimensione delle anteprime. Potete scegliere tra
                una dimensione massima di 90, 120 o 150 pixel. Attenzione. Cambiando questa impostazione
                le anteprime attualmente presenti <b>non</b> saranno aggiornate.Dovrete manualmente ricreare
                le anteprime,andando nella pagina di amministrazione,sezione \"Altre Opzioni\".<br>
		Maggiori informazioni: <a href='#recreatethumbs'>ricrea anteprime</a><br>
		Default: 120 pixels
	";
$lang['doc_entry_thumbborder'] = "
                Questa opzione consente di aggiungere un bordo alle anteprime. (solo se usate ImageMagick).
                Attenzione. Cambiando questa impostazione
                le anteprime attualmente presenti <b>non</b> saranno aggiornate.Dovrete manualmente ricreare
                le anteprime,andando nella pagina di amministrazione,sezione \"Altre Opzioni\".<br>

		Maggiori informazioni: <a href='#recreatethumbs'>ricrea anteprime</a><br>
                Default: acceso
	";
$lang['doc_entry_autoconf'] = "
                Con questa opzione impostata ad \"acceso\", LinPHa rilever? i cambiamenti nei vostri albums
                automaticamente. Questo significa che LinPHA crea automaticamente le anteprime per le
                immagini appena aggiunte, e cancella le informazioni di una immagine dal database se rimuovete
                l'immagine stessa o un album.<br>
                Poich? questa operazione provoca un forte carico sulla CPU, ? consigliato di impostare questa
                opzione a \"spento\" e abilitarla solamente quando effettuate delle modifiche agli albums.
                Oppure potete impostare questa opzione a \"spento\" e utilizzare \"crea tutte le anteprime\"!
                <a href='#createthumbs'>Maggiori informazioni</a><br>
		Default: spento
	";
$lang['doc_entry_counter'] = "
                Questa opzione consente di impostare se visualizare il contatore degli utenti nell'angolo in alto a sinistra.<br>
		Default: acceso
	";
$lang['doc_entry_ipblocking'] = "
                Questa opzione consente di definire il tempo durante il quale un indirizzo Ip ? <b>bloccato</b>.
                Questo significa che durante questo periodo di tempo l'utente non ? contato come un nuovo
                visitatore.<br>

                Default: 15 minuti
	";
$lang['doc_entry_language'] = "
                la lingua di default di LinPHA. Se abilitate \" auto-riconoscimento lingua\" LinPHA
                cercher? di riconoscere automaticamente la lingua dell'utente.
	";
$lang['doc_entry_autolanguage'] = "
	        Se abilitato, LinPHA d? il benvenuto a un nuovo visitatore nella sua lingua naturale (se supportato).
	        Se viene riconosciuto una lingua che non ? supportata, LinPHA user? la lingua di default.
		Maggiori informazioni:<a href='#language'>Lingua</a><br>
		Default: spento
	";
$lang['doc_entry_theme'] = "
                Questa opzione permette di cambiare lo stile di LinPHA. Potete sceglieree uno dei <b>temi</b>
                disponibili.<br>
		Default: Aqua
	";
$lang['doc_entry_hqthumbs'] = "
	        Questa opzione consente di creare anteprime di alta qualit? usando la libreris GD.
	        Queste risultano molto pi? omogeneee, ma questa caratteristica causa un <b>carico della CPU
                molto alto.</b>
                Non abilitare se la vostra CPU ? al di sotto di 1 GHz!!<br>

		Default: spento
	";
$lang['doc_entry_printing'] = "
                Questa opzione consente di abilitare la funzione di stampa per tutti gli utenti.
                Se abilitato chiunque ? autorizzato a stampare (cio? il link \"Stampa\" e l'icona sono
                visibili a tutti). Se impostato a spento gli utenti devono prima autenticarsi per
                poter stampare.
                Default: spento
	";
$lang['doc_entry_slideshow'] = "
                Questa opzione consente di abilitare/disabilitare la funzione diapositive di LinPHA.
                Se il vostro server ha poca banda libera o una CPU inferiore a 300MHz si consiglia di
                disabilitare la funzione diapositive.
		Default: acceso
	";
$lang['doc_entry_miniprev'] = "
                Questa opzione consente di abilitare/disabilitare l'uso di immagini come pulsanti
                precedente/successivo invece delle icone-frecce. Se avete molti visitatori con poca banda
                dovreste disabilitare questa caratteristica poich? causa un sovraccarico di \"7 Kbytes\"
                rispetto alle icone frecce.
                Default: acceso
	";
$lang['doc_entry_anonpost'] = "
                Questa opzione consente di abilitare/disabilitare l'inserimento di commenti da parte di utenti non registrati.
                Se abilitato ogni utente pu? inserire un commento per l'immagine.
                Se disabilitato, SOLO gli utenti registrati possono inserire dei commenti.<br>
		Default: spento
	";
$lang['doc_entry_anondown'] = "
                Questa opzione conesnte di abilitare/disabilitare i download per gli utenti non registrati.
                Se abilitato ogni utente pu? scaricare le vostre immagini ( Il link per il download sotto l'immagine ? abilitato).
                Se disabilitato il link per il downaload ? presente solo per gli utenti registrati.<br>
                Default: spento
	";
$lang['doc_entry_autologin'] = "
                Se questa opzione ? attivata, gli utenti hanno l'opzione di usare l'autologin.
                L'autologin crea un cookie nel quale ? salvata la password (codificata con la tecnica MD5).
                Dovrebbe essere abilitata solamnte se accedono al servizio dal proprio pc personale.
                se vi crea dei problemi potete disabilitare questa opzione.<br>
		Default: acceso
	";
$lang['doc_entry_autologinuser'] = "
                Se questa opzione ? attivata, non dovete effettuare il login ogni volta. L'autologin crea un cookie
                nel quale ? salvata la password (codificata con la tecnica MD5).
                Dovrebbe essere abilitata solamnte se accedono al servizio dal proprio pc personale.<br>
	";
$lang['doc_entry_timer'] = "
	        Questa opzione consente di abilitare/disabilitare la visualizzazione del timer nella parte inferiore della pagina.
		<br/>Default: off
	";
$lang['doc_entry_usermod'] = "
                Cambia le username, passwords, e-mail e il livello degli utenti qui. potete anche cancellare gli utenti.
		Maggiori informazioni sul livello degli utenti <a href='#usernew'>qui</a>.
	";
$lang['doc_entry_usernew'] = "
                Usate questo form per creare nuovi account per gli utenti e assegnare loro delle password, indirizzi e-mail
                e livello utenti.<br>

                Il livello utente (amico/amministratore) permete di impostare i privilegi dell'utente.<br>
                <b>ATTENZIOBE!</b>Se impostate un utente al livello amministratore, L'utente avr? gli stessi vostri privilegi.<br>
	";
$lang['doc_entry_groupnew'] = "
                usate questo form per creare novi gruppi. LinPHA ha 3 gruppi creati automaticamente:<br>
                Amminisratore (non pu? essere cancellato), amici e uploaders.
	";
$lang['doc_entry_groupmod'] = "
                Usate qesto form per cancellare/modificare i gruppi. Il gruppo uploader ? un gruppo speciale.
                Se aggiungete un utente a questo gruppo, questo potr? usare il file manager di
                LinPHA per gli uploads nella propria pegina \"impostazioni personali\".<br>
                Quindi non dovrebbe essere acncellato questo gruppo.
	";
$lang['doc_entry_folderperms'] = "
                Questa opzione consente di nascondere albums. LinPHA supporta tre livelli.<br>
                <b>PUBBLICO:</b> Visibile a tutti gli utenti.<br>

		<b>AMICO:</b> Visibile solo agli utenti registrati, sia amici che amministratori.<br>
		<b>PRIVATO:</b> Visibile solo agli utenti di tipo amministratori. (non agli amici)
	";
$lang['doc_entry_createthumbs'] = "
                Questo vi permette di creare/cancellare tutte le anteprime <b>senza interazione</b>.
                A seconda della quantit? di immagini aggiunte/cancellate, questa operazione potrebbe
                <b>richiedere alcuni minuti</b>.
                Alternativamente a <a href='#autoconf'>Auto configura</a>,questo script crea/cancella
                tutte le anteprime aggiunte/cancellate in TUTTE le cartelle (ricorsive).
	";
$lang['doc_entry_recreatethumbs'] = "
                Consente di RICREARE tutte le anteprime <b>senza interazione</b>.
                Alternativamente a <a href='#createthumbs'>Crea tutte le anteprime
                </a>,questo script crea/cancella tutte le anteprime aggiunte/cancellate in
                TUTTE le cartelle (ricorsive) e tutti i commenti descrizione e statistiche verranno persi.<br>

	";
$lang['doc_entry_catnew'] = "
	        LinPHA vi consente di creare categorie. Queste categorie non sono visibili agli utenti.<br>
	        Le categorie vi consentono di <b>organizzare le vostre foto</b> in categorie come ad esempio
	        Vacanze, Auto, Gatti, altro... <br>
	        Lo scopo principale ? di <b>trovarle pi? facilmente</b> attraverso la pagine di ricerca.
	";
$lang['doc_entry_catmod'] = "
                Modificate e cancellate le vostre categorie qui...
                
	";
$lang['doc_entry_benchmark'] = "
                Il plugin benchmark vi consente di trovare le impostazioni migliori per la dimensione e
                la qualit? delle immagini a seconda delle prestazioni del vostro server.
	";
$lang['doc_entry_watermark'] = "
                Il plugin filigrana consente di posizionare un testo o una imamgine su ogni foto.
                La filigrana (testo/immagine) non modifica le vostre immagini, essendo generata al momento.
                Potete inserire un testo in ogni vostra immagine.
	";
$lang['doc_entry_wm_addexamples'] = "
                Per aggiungere ulteriori immagini di esempio, basta inserirle
                nella directory 'plugins/watermark/examples'.
	";
$lang['doc_entry_wm_addimg'] = "
                Per aggiungere ulteriori immagini di esempio, basta inserirle
                nella directory 'plugins/watermark/examples'.
	";
$lang['doc_entry_wm_addfont'] = "
                Per aggiungere ulteriori caratteri, basta inserirli
                nella directory 'plugins/watermark/font'. I font devono essere di tipo
                Truetype-Fonts (.ttf). Ne potete trovare molti su I-Net:
                <a href=\"http://directory.google.com/Top/Computers/Software/Fonts/\" target=\"_blank\">Fonts</a>
	";
$lang['doc_entry_wm_color'] = "
                Per impostare il colore potete usare il formato html ('#00FF00' or '00FF00')
                o il testo normale in inglese come 'blue' 'darkblue' etc.
	";
$lang['doc_entry_sql'] = "
                Con la gestione del database SQL potete creare dei backup per i database presenti.
	";

$lang['doc_entry_imgrotate'] = "
                Se la rotazione delle immagini in LinPHA ? disabilitata controllate:<br><br>
                <b>1. Avete impostato correttamente i permessi dei file.<b><br>
                Forse dovete cambiare il proprietario dei file. (controllare maybe nobody/apache/wwwrun...)
                Oppure dovete eseguire un chmod 666 ( solo UNIX )...<br>
                <b>2. Controllate la versione PHP!</b>

                Se utilizzate ImageMagick non dovreste avere problemi.<br><br>
                se state utilizzando la libreria GD per creare le anteprime, la versione di PHP
                deve essere superiore a <b>4.3.0</b> . Tutte le versioni precedenti non supportano la
                rotazione delle immagini.( controllate http://your_domain/linpha/config/info.php
                per avere la versione di PHP)<br>
                Forse dovreste aggiornate PHP...
	";
$lang['doc_entry_printprobs'] = "
	        Se la stampa delle imamgini ? disabilitata controllate:<br><br>
	        1. La vostra versione di PHP sia superiore a <b>4.3.0</b>.Tutte le versioni
                precedenti non supportano la rotazione delle immagini che ? necessaria per la stampa.
                2. Se non volete aggiornate PHP potreste installare lo strumento di
                conversione di ImageMagick, che non dipende dalla versione di PHP installata.<br>

                <b>( ricordate di impostare \"use_convert\"= \"1\" dopo l'installazione
                nella tabella di configurazione di LinPHA!!!)</b><br><br>
                3. Potete disabilitare questo messaggio ( per i visitatori non registrati)
                impostando \"abilita stampa utenti anonimi\" a spento nella sezione di amministrazione.
                Maggiori informazioni:<a href='#printing'>LinPHA stampa</a>
	";

?>