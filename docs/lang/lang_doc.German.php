<?php
/**
* for translators:
* you have to sync the entries between the english and your language file yourself
* new entries are only added to the english language file
*
* translators: for info see top of the english language file!
* !!!!! PLEASE POINT YOUR BROWSER TO: !!!!!
* http://path2linpha/docs/lang/check_files.php to get a list of missing entries
* 
* !OK! 02. Aug 2004  flo  doc_entry_cachesize
* !OK! 02. Aug 2004  flo  doc_entry_cachepath
* 02. Aug 2004  flo  doc_entry_wm_delete_all_cached_images
* 16. Aug 2004  flo  wm_delete_all_cached_images
* 16. Aug 2004  flo  doc_entry_printprobs (deleted)
* 16. Aug 2004  flo  doc_entry_imgrotate (deleted)
*/

$lang['archive_apps'] = 'Anwendungen f&uuml;r Archive';
$lang['default_date_time_format'] = 'Standard Datum und Zeit Format';
$lang['sql'] = 'DB Management';
$lang['plugins'] = 'LinPHA Plugins';
$lang['benchmark'] = 'Benchmark';
$lang['watermark'] = 'Wasserzeichen';
$lang['cache'] = 'Bilder-Cache';
$lang['mail']="Mailing-Liste Plugin";
$lang['guestbook']="G&auml;stebuch Plugin";
$lang['wm_delete_all_cached_images']="Wasserzeichen: L&ouml;sche alle gecachte Bilder mit Wasserzeichen";
$lang['thumbborder'] = "Rahmen f&uuml;r Vorschaubilder";
$lang['log'] = "Logger Plugin";
$lang['iptcinfo'] = "Bilder IPTC-Informationen";
$lang['iptclevel'] = "Stufe der IPTC-Informationen";
$lang['exif_iptc_search_info'] = "Suchkriterien f&uuml;r EXIF/IPTC";
$lang['search_and_or_info'] = "Such Informationen";
$lang['rss']="RSS";
$lang['stats']="Statistik";
$lang['statscaching']="Ein/Ausschalten der Echtzeit-Statistik";

$lang['doc_entry_search_and_or_info'] = "Um die gew&uuml;nschten Suchergebnisse zu bekommen, " .
	"ist es wichtig den Ablauf der Suche zu verstehen. Hier nun " .
	"ein paar Beispiele wie eine Suche zum Erfolg f&uuml;hren kann:<br> " .
	"<ul><li><b>meine Katze</b> ==> bringt alle Ergebnise f&uuml;r <b><i>meine</i></b> UND/ODER <b><i>Katze</i></b><br>" .
	"z.B. <i><b>meine</b> Tiere, <b>meine Katze</b>, dicke <b>Katze</b></i>...</li>" .
	"<li><b>&quot;meine Katze&quot;</b> ==> bringt alle Ergebnise f&uuml;r <b><i>meine Katze</i></b><br>" .
	"z.B. <i>das ist <b>meine Katze</b></i>, aber nicht <i>eine dicke Katze, das ist meine Wohnung</i>...&quot</li>" .
	"<li><b>\&quot;my cat\&quot;</b> ==> returns all results for <b><i>&quot;my cat&quot;</i></b><br>" .
	"z.B. <i>das ist <b>&quot;meine Katze&quot;</b> Smilla</i>, aber nicht <i>das ist meine Katze Smilla...</i>" .
	"</ul>";   

$lang['doc_entry_exif_iptc_search_info'] = "F&uuml;r eine bessere Leistung " .
	"wird LinPHA keine EXIF/IPTC Meta-Info mehr aus den Bilder auslesen w&auml;rend die Vorschaubilder erstellt werden. " .
	"Das bedeutet, dass alle EXIF/IPTC Informationen erst extra bereitgestellt werden m&uuml;ssen bevor eine Suche " .
	"in den EXIF/IPTC Metadaten m&ouml;glich ist.<br> " .
	"EXIF/IPTC Metadaten k&ouml;nne auf zwei Wegen erstellt werden. Einmal wenn Sie das Bild das Erstemal ansehen, " .
	"und/oder wenn Sie die Funktion \"Erstelle alle Informationen\" im " .
	"LinPHA Admin Bereich unter \"Vorschau EXIF/IPTC\". benutzen.<br> " .
	"Weiter Informationen unter:<a href='#createthumbs'>Vorschau EXIF/IPTC</a><br> " .
	"Sie k&ouml;nnen die Suchfunktion der EXIF/IPTC Metadaten auch in der Datei " .
	"/include/metadata.config.php andern.";
		
$lang['doc_entry_iptclevel'] = "
	Die Menge der IPTC-Informationen ist in <b>drei Stufen</b> (wenig/mittel/viel).<br>
	Je h&ouml;her die Stufe, desto h&ouml;her die Anzahl der angezeigten IPTC-Informationen.<br>
	Standard: mittel
	";
	
$lang['doc_entry_iptcinfo'] = "Manche Bilder enthalten s.g. IPTC Metadaten." .
	"Diese Art von Metadaten wird meist von Adobe Photoshop genutzt, um bestimmte Informationen (Beschreibung, " .
	"Copyright, Keywords/Stichw&ouml;rter oder andere Infos) in einem Bild tzu speichern. Wenn Sie diese Option " .
	"aktivieren, versucht LinPHA die IPTC-Daten aus dem Bild auszulesen und anzuzeigen (wenn vorhanden).<br> " .
	"Standard: aus";
	
$lang['doc_entry_video_thumbnail'] = "Diese Option erm&ouml;glicht das erstellen von Vorschaubildern f&uuml;r bestimmte Videos. " .
	"Dieser Vorgang ben&ouml;tigt sehr viel Rechenzeit und Speicher." .
	"Bitte deaktivieren Sie diese Funktion auf leistungsschwachen oder s.g. Shared Server, Virtuel Server (vServer)!<br>".
	"Standard: an";
	 
$lang['doc_entry_update_notice'] = "Mit dieser Option k&ouml;nnen Sie die w&ouml;chentliche Update-&Uuml;berpr&uuml;fung " .
	"f&uuml;r den Admin abschalten. Sie sollten diese an lassen, damit Sie immer &uuml;ber aktuelle &Auml;nderungen " .
	"und Sicherheitsinformationen benachrichtigt werden!<br> " .
	"HINWEIS: Bei der Update-&Uuml;berpr&uuml;fung werden keine pers&ouml;nlichen Daten &uuml;bertragen oder gespeichert!<br>" .
	"Standard: an";
	
$lang['doc_entry_random_image_size'] = "Diese Option legt die Gr&ouml;&szlig;e des ".
    "LinPHA Logos fest. Diese Bild wird per Zufall ausgew&auml;hlt und auf der index.php angezeigt.(wenn aktiviert)<br>".
    "Standard: 300 px";
    
$lang['doc_entry_random_index_image'] = "Die Option erm&ouml;glicht das automatische ersetzen des LinPHA Logos ".
    "in der index.php. Das Logo wird per Zufall ausgew&auml;hlt.<br>".
    "Bei jedem neuen Besuch auf LinPHA wird ein anderes Bild angezeigt.<br>".
    "Standard: aus";
    
$lang['doc_entry_adodb_caching'] = "Wenn Sie einen langsamen SQL-Server haben, ".
    "k&ouml;nnen Sie diese Funktion nutzen um die SQL-Ergebnisse in einem Verzeichnis zu speichern.".
    "Als Standard wird das Verzeichnis /sql/adocache genutzt. Dies kann angepasst werden.".
    "Ebenso kann die Speicherzeit angegeben werden (adodb caching time). Es macht gew&ouml;hnlich keinen Sinn".
    "diese Funktion einzuschalten, wenn die CPU > 1GHz ist.".
    "<br /><br />Standard: aus";

$lang['doc_entry_adodb_cache_path'] = "Gibt den Pfad, in dem die SQL-Ergebnisse gespeichert werden." .
    "Wenn Sie den Standardffad (sql/adocache) &auml;ndern, stellen Sie bitte sicher das der Webservere ".
    "volle Schreibrechte im neuen Verzeichnis hat.";

$lang['doc_entry_adodb_cache_time'] = "Gibt die Zeit (in Minuten) an, wie lange DB-Anfragen gespeichert werden.";

$lang['doc_entry_mail_mode_anon'] = "Wenn diese Option aktiviert ist kann jeder Besucher ".
    "Bilder per eMail an andere Personen schicken. Wenn diese Option deaktiviert ist k&ouml;nnen nur registrierte Benutzer ".
    "Bilder per eMail verschicken.".
    "<br><br>Standard: aus".
    "";
$lang['doc_entry_mail_mode_max_size'] = "Diese Option legt die max. Gr&ouml;&szlig;e f&uuml;r eMails fest.".
    "Die Angabe erfolgt in Bytes.".
    "<br><br>Standard: 2097152 (2 MB)";

$lang['doc_entry_archive_apps'] = "Zus&auml;tzliche Anwendungen zum Erstellen/Entpacken von Archiven k&ouml;nnen in dieser Datei angegeben werden".
	"linpha/include/archiver.config.php.<br /><br />".
	"Hinweis: Die Anwendungen d&uuml;rfen <b>nicht</b> in Verzeichnissen liegen die Leerstellen im Namen haben! ".
	"Wenn dennoch ein Programm genutzt werden soll das z.B. unter C:/Program Files/.. liegt, muss die Pfadanga wie folgt lauten: C:/Progra~1/...<br />".
	"Alternativ muss das Programm in ein anderes Verzeichnis instlliert werden, oder das Verzeichnis muss in die PATH Variable aufgenommen werden, ".
	"das w&uuml;rde auch funktionieren.<br /><br />".
	"Ein anderer Grund warum die Anwendung nicht funktioniert k&ouml;nnten die Einschr&auml;nkungen von open_basedir oder safe_mode in der php.ini sein. ".
	"Wenn m&ouml;glich sollte safe_mode oder open_basedir abgeschalten werden, oder es sollte ein Programm genutzt werden das in der Pfadangabe von safe_mode ".
	"oder open_basedir eingetragen ist.";

$lang['doc_entry_rss'] = "
		Diese Modul erm&ouml;glicht den Besuchern automatisch &uuml;ber &auml;nderungen in LinPHA informiert zu werden. Diese erfolgt &uuml;ber das Abonieren eines RSS 2.0 Feed.
		Wenn Sie neue Bilder hochgeladen, oder ein neues Album erstellt haben, dann klicken Sie einfach auf \"Erstelle RSS\" (oder \"Vorschau RSS\" 
		wenn Sie nur die Vorschau sehen wollen, ohne die XML-Datei zu erstellen) und es wird eine neue RSS-Datei, anhand des &Auml;nderungsdatum des Verzeichnisses, erzeugt. <br />
		Wenn aktiviert erscheint unten ein RSS 2.0 Logo. Einfach per Drag&Drop in einen RSS-Reader ziehen und die &Auml;nderungen werden angezeigt.<br />
		Folgende Einstellungen k&ouml;nnen gemacht werden:<ul>
		<li><strong>Titel</strong> --> Der Titel Ihres Channels im RSS-Feed</li>
		<li><strong>Beschreibung</strong> --> Beschreibung des RSS-Channels</li>
		<li><strong>Link</strong> --> Link zu Ihrer Seite</li>
		<li><strong>Sprache</strong> --> Die Sprache des RSS-Feed</li>
		<li><strong>Copyright</strong> --> Copyright Hinweise</li>
		<li><strong>Genric title</strong> --> Dieser Text erscheint im RSS-Feed und Beschreibt die &Auml;nderungen.</li></ul>
		";
		
$lang['doc_entry_log'] = "
		Diess Modul erm&ouml;glicht das Aufzeichnen von verschiedenen Funktionen. Die Aufzeichnungen k&ouml;nnen an verschiedenen Orten gespeichert werden.<br />
		Momentan unterst&uuml;tzte Funktion: anmelden, Update, Vorschaubilder und Datenbank.<br />
		Momentan unterst&uuml;tzte Speicherorte: keine, System, Datei, eMail und Datenbank.<br /><br />
		Standard: aus
		";		
		
$lang['doc_entry_thumbborder'] = 
        "Diese Option erlaubt es einen Rahmen um die Vorschaubilder zu legen. (Gr&ouml;&szlig;e des Rahmens in Pixel.)
        <br />
        Zum deaktivieren des Rahmens auf 0 setzen.
        <br /><br />
        Wie &auml;ndere ich die Farbe, steht unter <a href='#wm_color'>Rahmenfarbe</a>.
        <br /><br />
		Standard: an";
    
         /*(ImageMagick only).
        Bitte beachten das diese &Auml;nderung <b>NICHT</b> die vorhandenen Vorschaubilder &auml;ndert, diese m&uuml;ssen manuell neu erstellt werden.<br>

        Info hier: <a href='#recreatethumbs'>Vorschaubilder neu erstellen</a> zu finden in &quot;Andere Optionen&quot;
        */

$lang['doc_entry_default_date_time_format'] = 
	"Das Standard Datum und Zeit Format wird nur gebraucht falls es nicht in der Sprachdefinitionsdatei definiert ist ".
	"(Zum Beispiel in der englischen Datei da das Zeit Format unterschiedlich ist in US und UK).<br />".
	"Siehe <a href='http://www.php.net/manual/en/function.strftime.php' target='_blank'>".
	"http://www.php.net/manual/en/function.strftime.php</a> f&uuml;r die Definitionen.";

$lang['doc_entry_wm_delete_all_cached_images'] = 
	"Mit dieser Option k&ouml;nnen Sie alle gecachte Bilder l&ouml;schen welche ein Wasserzeichen haben. ".
	"Diese Option kann n&uuml;tzlich sein falls Sie bereits gecachte Bilder haben und Sie wollen ".
	"das Wasserzeichen &auml;ndern.<br />".
	"(Diese Option ist nur verf&uuml;gbar wenn das Wasserzeichen- und Bilder-Cache-Plugin aktiviert sind.)";

$lang['doc_entry_anonalbdown'] =
		"Diese Option erlaub es Ihnen das Herunterladen von gezippten Albums f&uuml; anonyme Benutzer zu aktivieren/deaktivieren.".
		"<br /><br />Standard: aus";

$lang['doc_entry_albdownlimit'] =
		"Diese Option erlaub es Ihnen ein Geschwindigkeitslimit f&uuml;r das Herunterladen von gezippten Albums zu setzen.".
		"<br /><br />Standard: unlimitiert";

$lang['doc_entry_navigation'] =
		"Diese Option erlaub es Ihnen die Navigationsleiste in den Seiten mit den Vorschaubildern zu aktivieren/deaktiveren.".
		"<br /><br />Standard: aus";

$lang['doc_entry_autolanguage'] =
		"Falls aktiviert, werden die LinPHA-Seiten automatich in der Sprache des Besuchers angezeigt (Browser Einstellung). Falls der Besucher eine nicht unterst&uuml;tzte Sprache eingestellt hat, wird die Standardsprache benutzt.".
		"<br />(<a href='#language'>Standardsprache</a>)".
		"<br /><br />Standard: ein";

$lang['doc_entry_mail'] =
		"Dieses Plugin aktiviert eine Mailing Liste, bei welcher sich die Benutzer eintragen k&ouml;nnen um Neuigkeiten per Email zu erhalten.<br />".
		"Zus&auml;tzlich k&ouml;nnen Benutzer welche Mitglied der Gruppe 'mail' sind Nachrichten and die Mitglieder der Mailing Liste senden.".
		"<br /><br />Standard: aus";

$lang['doc_entry_guestbook'] =
		"Dieses Plugin aktiviert ein G&auml;stebuch in dem Benutzer Nachrichten hinterlassen k&ouml;nnen.<br />".
		"Zus&auml;tzlich werden neue Konfigurationsoptionen im Adminbereich um das Verhalten des G&auml;stechbuchs zu &auml;ndern.".
		"<br /><br />Standard: aus";

$lang['doc_entry_new_images'] = 
		"Mit dieser Option aktiviert, erscheint ein neuer \"virtueller Ordner\" im linken Menu.<br />".
		"Dieser Ordner zeigt alle neu hinzugef&uuml;gten Bilder von allen Alben an ohne zus&auml;tzlichen Speicherplatz zu verschwenden!<br />".
		"Der Ordner verschwindet sobald das \"maximale Alter\" erreicht ist und erscheint wieder sobald neue Bilder hinzugef&uuml;gt werden.".
		"<br /><br />Standard: ein";

$lang['doc_entry_new_images_age']=
		"Diese Einstellung definiert wie lange neu hinzugef&uuml;gte Bilder im \"Neue Bilder\"-Ordner angezeigt werden (in Tagen).".
		"<br /><br />Standard: 7 Tage";

$lang['doc_entry_comment_in_subfolder']=
		"Falls aktiviert wird der Album Kommentar zus&auml;tzlich in der \"Unterordner-Vorschau\" angezeigt.<br />".
		"Sie sollten diese Funktion deaktivieren falls Sie lange Kommentare benutzen, da dies das LinPHA-Layout durcheinander bringen kann.".
		"<br /><br />Standard: ein";

$lang['doc_entry_fullaccess'] = "
		W&auml;hlen Sie diese Option wenn Sie LinPHA auf Ihrem <b>Heim-PC</b>, oder auf einem so 
		genannten \"root-server\" im Internet, installieren wollen. Sie ben&ouml;tigen dazu volle 
		Zugriffsrechte auf einen SQL-Datenbankserver um einen neuen LinPHA Benutzter anzulegen.
	";
$lang['doc_entry_limitedaccess'] = "
		Wenn Sie LinPHA irgendwo im <b>Internet</b> installieren wollen m&uuml;ssen Sie diese Option w&auml;hlen, da
		die meisten ISP keinen Vollzugriff auf die SQL-Datenbank erlauben.
	";
$lang['doc_entry_dbselect'] = "
		Einige Hinweise und Tipps zu den verschiedenen Datenbanken:<br>
		<b>MySQL Datenbank:</b> Um weiterzumachen, ben&ouml;tigen Sie ein root Passwort f&uuml;r 
		die MySQL Datenbank. Bitte schauen sie in der  
		<a href=\"http://linpha.sourceforge.net/nuke/modules.php?name=FAQ\">LinPHA FAQ</a> f&uuml; mehr Details.<br><br>
		<b>PostgreSQL Datenbank:</b> Anders als bei der MySQL Datenbank m&uuml;ssen Sie die Datenbank selbst erstellen. LinPHA kann dies nicht f&uuml;r Sie tun. Daher m&uuml;ssen Sie zuerst <b><i>createdb linpha</i></b> auf der Befehlszeile starten um eine neue Datenbank namens &quot;linpha&quot; zu erstellen. Die abschliessende Installation ist analog zur Installation mit MySQL, allerdings ben&ouml;tigen Sie nicht zwingend ein root Passwort
		";
$lang['doc_entry_sqladminname'] = "
		Name des MySQL Administrators. Meistens \"root\" genannt.
	";
$lang['doc_entry_sqladminpass'] = "
		Das Administrator Passwort f&uuml;r die MySQL-Datenbank. <b>WICHTIG:</b> 
		Aus Sicherheitsgr&uuml;nden kann LinPHA nicht auf einem System ohne Passwort installiert werden.
		Stellen Sie sicher das Sie einen Administratorzuganng und ein Passwort besitzen. 
	";
$lang['doc_entry_linphaname'] = "
		Name des LinPHA Administrators. Sie k&ouml;nnen sich mit diesem Namen anmelden und
		LinPHA damit administrieren.
	";
$lang['doc_entry_linphapass'] = "
		Das Passwort f&uuml;r den LinPHA Administrator.
	";
$lang['doc_entry_linphamail'] = "
		Email Adresse des LinPHA Administrators.
	";
$lang['doc_entry_dbhost'] = "
		Hostname des SQL-Datenbank-Servers. F&uuml;r den Heim-PC ist das meist \"localhost\", f&uuml;r den
		Server im Internet ist es meist der Name des ISP, z.B. \"mysql.irgendwo.org\".
	";
$lang['doc_entry_dbport'] = "
		SQL-Server-Port. Meistens wird der Standard verwendet: 3306.
	";
$lang['doc_entry_dbname_full'] = "
		Name der Datenbank in der die LinPHA Tabellen abgespeichert werden. Wenn Sie unsicher sind 
		lassen Sie den Standard \"linpha\" stehen. Wenn Sie mehrere Versionen von LinPHA installieren
		wollen, dann &auml;ndern Sie hier den Namen.
	";
$lang['doc_entry_dbname'] = "
		Name der Datenbank mit der die Verbindung aufgebaut werden soll. Der Name wird Ihnen von Ihrem
		<b>ISP</b> gegeben.
	";
$lang['doc_entry_dbprefix'] = "
		Das prefix f&uuml;r alle LinPHA Tabellen. Alle Tabellen in der Datenbank haben das prefix <b>\"linpha_\"</b>.
		Wenn Sie ein anderes prefix m&ouml;chten, k&ouml;nnen Sie es hier einfach &auml;ndern.
	";
$lang['doc_entry_albumtitle'] = "
		Diese Option erlaubt es Ihnen den Titel des Albums zu &auml;ndern.
		Leer lassen um den Standard Titel zu verwenden.<br>

		Standard: leer (Das Linux Foto Archiv)
	";
$lang['doc_entry_photoscol'] = "
		Diese Option erlaubt es Ihnen die <b>Anzahl der Spalten</b>, die f&uuml;r die Darstellung der Vorschaubilder
		verwendet werden sollen, anzupassen. Diese Einstellung gilt f&uuml;r <b>alle</b> Seiten auf denen
		Vorschaubilder dargestellt werden.<br>
		Wenn Sie LinPHA mit eine Aufl&ouml;sung > 1024*768 betreiben erh&ouml;hen Sie die Anzahl der Spalten.<br>
		Standard: 4 Spalten
	";
$lang['doc_entry_photosrow'] = "
		Diese Option erlaubt es Ihnen die <b>Anzahl der Reihen</b>, die f&uuml;r die Darstellung der Vorschaubilder
		verwendet werden sollen, anzupassen. Diese Einstellung gilt f&uuml;r <b>alle</b>

		Seiten auf denen Vorschaubilder dargestellt werden.<br>
		Wenn Sie LinPHA mit einer Aufl&ouml;sung > 1024*768 betreiben erh&ouml;hen Sie die Anzahl der Reihen.<br>
		Standard: 3 Reihen
	";
$lang['doc_entry_photoswidth'] = "
		Diese Option erlaubt es Ihnen die Breite der Photos in der img_view.php festzulegen. Diese Angabe gilt
		wenn Sie ein Vorschaubild &ouml;ffnen.<br> 
		Wenn Sie LinPHA mit eine Aufl&ouml;sung > 1024*768 betreiben, erh&ouml;hen Sie diesen Wert.<br>

		Standard: 512
	";
$lang['doc_entry_photosheight'] = "
		Diese Option erlaubt es Ihnen die H&ouml;he der Photos in der img_view.php festzulegen. Diese Angabe gilt
		wenn Sie ein Vorschaubild ?&ouml;ffnen.<br>
		Wenn Sie LinPHA mit eine Aufl&ouml;sung > 1024*768 betreiben, erh&ouml;hen Sie diesen Wert.<br>
		Standard: 384
	";
$lang['doc_entry_imgquality'] = "
		Mit dieser Option k&ouml;nnen Sie den Standardwert f&uuml;r die <b>qualit&auml;t der Bilder</b>,
		die nach dem Klick auf das Vorschaubild erscheinen, festlegen (img_view.php).
		Mit einer geringeren Qualit&auml;t verringern Sie die Ladezeit. Beispiel:<br>

		Bildgr&ouml;sse (Qualit&auml;t 75 Prozent) = 28.55 KB<br>
		Bildgr&ouml;sse (Qualit&auml;t 50 Prozent) = 18.47 KB<br>
		Bildgr&ouml;sse (Qualit&auml;t 40 Prozent) = 15.80 KB<br>
		Standard: 75 Prozent
	";
$lang['doc_entry_rotateonoff'] = "
		Diese Option erlaubt es Ihnen das Drehen von Bildern Ein / Aus zu schalten (img_view.php).
		Wenn Sie die GD Lib benutzen, ist folgendes zu beachten beim Drehen:<br>

		<b><font color=\"FF0000\">ALLE EXIF INFORMATIONEN DES BILDES GEHEN VERLOREN !!!</font></b><br>
		Diesen Fehler habe ich schon an das PHP Entwicklerteam geschickt, aber das PHP Entwicklerteam
		will diesen Fehler nicht beheben! :-(<br><br>
		Wenn Sie das Tool Convert von ImageMagick benutzen, testen Sie vorher ob es fehlerfrei funktioniert!<br>
		Standart: Aus
	";
$lang['doc_entry_exifonoff'] = "
		Viele Bilder im jpeg/tiff Format beinhalten einige Zusatzinformationen bekannt als EXIF.
		Diese Option erlaubt es Ihnen diese Informationen in der img_view.php (die Seite die erscheint, wenn ein 
		Vorschaubild angeklickt wurde) anzuzeigen.<br>
		HINWEIS: Wenn aktiviert, sollten Sie auch folgende Punkte beachten:<br>
		<a href='#exifdefault'>EXIF Informationen immer an</a><br>

		<a href='#exiflevel'>Stufe der EXIF Informationen</a>
	";
$lang['doc_entry_exifdefault'] = "
		Diese Option erlaubt es Ihnen EXIF Informationen in der img_view.php (die Seite die erscheint, wenn ein 
		Vorschaubild angeklickt wurde) IMMER anzuzeigen. Andernfalls m&uuml;ssen die Benutzer erst 
		<b>\"Mehr Details\"</b> anklicken um die Informationen zu erhalten.
		Standard: Aus
	";
$lang['doc_entry_exiflevel'] = "
	Die Menge der EXIF Informationen ist <b>dreistuffig</b> einstellbar (niedrig/mittel/hoch). 
	Je h&ouml;her die Stufe, desto h&ouml;her die Anzahl der angezeigten EXIF Informationen.<br>
	Standard: mittel
	";
$lang['doc_entry_filename'] = "
		Diese Option gibt an, ob der Dateiname unter dem Vorschaubild angezeigt wird oder nicht.<br>

		Standard: An
	";
$lang['doc_entry_thumborder'] = "
		Diese Option legt die Sortierung fest. Sie k&ouml;nnen zwischen
		<b>\"sortieren nach Datum\"</b> und <b>\"sortieren nach Dateiname\"</b> (jeweils aufsteigend oder absteigend) w&auml;hlen.<br>
		Default: Dateiname
	";
$lang['doc_entry_thumbsize'] = "
		Diese Option erlaubt es Ihnen die Gr&ouml;sse der Vorschaubilder festzulegen. Sie k&ouml;nnen w&auml;hlen zwischen
		90, 120 und 150 Pixeln. Bitte beachten Sie, dass die &Auml;nderunge sich NICHT auf bestehende Vorschaubilder auswirkt. 
		Sie m&uuml;ssen die Vorschaubilder neu erstellen lassen!.<br>

		Siehe: <a href='#recreatethumbs'>Erstelle alle Vorschaubilder in einem Durchgang</a><br>
		Standard: 120 Pixel
	";
/*$lang['doc_entry_thumbborder'] = "
		Diese Option erlaubt es, einen Rahmen um die Vorschaubilder erstellen zu lassen.(Nur ImageMagick).
		Bitte beachten Sie, dass die &Auml;nderunge sich NICHT auf bestehende Vorschaubilder auswirkt. 
		Sie m&uuml;ssen die Vorschaubilder neu erstellen lassen!.<br>
		Siehe: <a href='#recreatethumbs'>Erstelle alle Vorschaubilder in einem Durchgang</a><br>
		Standard: An
	";*/
$lang['doc_entry_autoconf'] = "
		Wenn diese Option aktiviert ist, erkennt LinPHA alle &Auml;nderungen in den Alben automatisch. Das bedeutet
		dass LinPHA automatisch die Vorschaubilder f&uuml;r neu hinzugef&uuml;gte Photos erstellt und gel&ouml;schte Photos/Alben aus
		der Datenbank entfernt.<br>

		Da diese Option eine sehr hohe CPU Auslastung verursacht, sollten Sie diese Option ausschalten und nur
		bei Bedarf aktivieren. Es ist besser die Funktion \"Erstelle alle Vorschaubilder in einem Durchgang\"
		<a href='#createthumbs'>(INFO)</a> zu nutzen!<br>
		Standard: Aus
	";
$lang['doc_entry_counter'] = "
		Mit dieser Option legen Sie fest ob der Besucherz&auml;hler rechts oben angezeigt wird oder nicht.<br>
		Standard: An
	";
$lang['doc_entry_ipblocking'] = "
		Mit dieser Option legen Sie fest wie lang eine IP-Adresse <b>gesperrt wird</b>. Erst nach Ablauf 
		dieser Zeit wird der Besucher wieder als neuer Besucher gez&auml;hlt.
		Standard: 15 Minuten
	";
$lang['doc_entry_language'] = "
		Legt die Standardsprache von LinPHA fest. Es erfolgt eine &Uuml;berpr&uuml;fung des Browsers welche Landessprache verwendet werden soll. Sollte keine passende Sprache bei LinPHA vorhanden sein wird die hier eingestellte Standardsprache verwendet.<br />

		Standard: Englisch
	";
$lang['doc_entry_theme'] = "
		Mit dieser Option legen Sie das standard Aussehen von LinPHA fest. Sie haben dabei die Wahl
		zwischen Aqua, Colored, iLinpha und Shadow.<br>
		Standard: Aqua
	";
$lang['doc_entry_hqthumbs'] = "
		Mit dieser Option erstellen Sie, mit der GD-Bibliothek, Vorschaubilder in sehr hoher Qualit&auml;t.
		Diese Vorschaubilder sehen besser aus, verursachen aber eine <b>sehr hohe CPU Auslastung!!</b><br>
		Standard: Aus
	";
$lang['doc_entry_printing'] = "
		Mit dieser Option erlauben Sie es G&auml;sten die LinPHA Druckfunktion zu nutzen.
		Wenn Sie diese Option einschalten kann jeder drucken (d.h. der Link und das Icon \"Druckmodus\"
		sind verf&uuml;gbar). Wenn diese Option ausgeschaltet ist m&uuml;ssen sich die Benutzer erst anmelden um
		die Druckfunktion nutzen zu k&ouml;nnen.<br>
		Standard: aus
	";
$lang['doc_entry_slideshow'] = "
		Diese Option schaltet die Diashow an oder aus. Wenn Ihr Server eine CPU < 300 MHz oder Ihre 
		Internetanbindung nur ber eine geringe Bandbreite verf&uuml;gt, sollten Sie diese Option ausschalten.<br>

		Standard: an
	";
$lang['doc_entry_miniprev'] = "
		Mit dieser Option schalten Sie die Verwendung des vorherigen/folgenden Fotos als Ersatz f&uuml;r die
		Navigationspfeile, in der img_view.php, an oder aus. 
		Wenn Sie viele Besucher mit einer geringen Bandbreite haben, sollten Sie diese Feature ausschalten
		da es im Vergleich zu den Pfeilen ca. 7kb gr&ouml;sser ist.<br>
		Standard: an
	";
$lang['doc_entry_anonpost'] = "
		Dies Option regelt das anonyme schreiben von Kommentaren. Wenn Sie diese Option einschalten
		kann jeder Besucher einen Kommentar zu einem Bild schreiben. Wenn Sie es auschalten k&ouml;nnen
		nur registrierte Benutzer Kommentare schreiben.<br>
		Standard: aus
	";
$lang['doc_entry_anondown'] = "
		Mit dieser Option regeln Sie das anonyme Herunterladen von Bildern. Wenn Sie diese Option einschalten
		kann jeder Besucher das Bild herunterladen (der Link zum herunterladen wird unter dem Bild angezeigt).
		Wenn Sie es auschalten k&ouml;nnen nur registrierte Benutzer Bilder Herunterladen.<br>
		Standard: aus
	";
$lang['doc_entry_autologin'] = "
		Mit dieser Option erhalten die Benutzer die M???glichkeit die Autologin-Funktion zu benutzen. Das Autologin erstellt ein Cookie in welchem das verschl???sselte Passwort (MD5 Checksumme) abgespeichert ist. Es sollte wirklich nur am eigenen Computer benutzt werden. In den Optionen kann das Autologin deaktiviert werden, fall es ein Problem f&uuml;r Sie darstellt.<br/>

		Standard: ein
	";
$lang['doc_entry_autologinuser'] = "
		Mit dieser Option m&uuml;ssen Sie sich nicht jedes Mal neu anmelden. Das Autologin erstellt ein Cookie in welchem das verschl???sselte Passwort (MD5 Checksumme) abgespeichert ist. Es sollte wirklich nur am eigenen Computer benutzt werden.
	";
$lang['doc_entry_timer'] = "
		Diese Option erlaubt es Ihnen die Ausgabe der Parsezeit im rechten Fussteil der Seite anzeigen zu lassen.
		<br/>Standard: aus
	";
$lang['doc_entry_usermod'] = "
		Mit dieser Option &auml;ndern Sie Benutzernamen, Passw&ouml;rter, EMail und Gruppenzugeh&ouml;rigkeit. Ausserdem k&ouml;nnen
		Sie hier&uuml;ber auch Benutzer l&ouml;schen. Userlevel info is <a href='#usernew'>here</a>.
	";
$lang['doc_entry_usernew'] = "
		In diesem Formular k&ouml;nnen Sie neue Benutzer anlegen und ihnen ein Passwort, eine EMail-Adresse und einen
		Benutzerlevel festlegen.<br>
		Mit den Benutzerlevel k&ouml;nnen Sie Privilegien (Freund/Admin) vergeben. <b>Achtung!</b>

		Wenn Sie einem Benutzer den Level \"Admin\" zuweisen, hat dieser die <b>gleichen</b> Rechte wie Sie!<br>
	";
$lang['doc_entry_groupnew'] = "
		Benutzen Sie dieses Formular um neu Gruppen zu erstellen. LinPHA hat standardm&auml;ssig 3 Gruppen:<br/>
		Admin (kann nicht gel&ouml;scht werden), Freunde und Uploaders.
	";
$lang['doc_entry_groupmod'] = "
		Benutzen Sie dieses Formular um Gruppen zu l&ouml;schen und zu &auml;ndern. Mitglieder der speziellen Gruppe \"Uploaders\" k???nnen in der \"Einstellungen\"-Seite den Dateimanager benutzen um Bilder/Dateien hinaufzuladen.<br/>
		Deswegen sollte diese Gruppe nicht gel&ouml;scht werden.
	";
$lang['doc_entry_folderperms'] = "
		Diese Option erlaubt es Ihnen die Alben nur f&uuml;r bestimmte Personen freizugeben. Dazu gibt es 3 Stufen:<br>

		<b>ALLE:</b> F&uuml;r alle sichtbar. Keine Anmeldung erforderlich.<br>
		<b>FREUNDE:</b> Nur f&uuml;r angemedete Benutzer sichtbar.<br>
		<b>PRIVAT:</b> Nur f&uuml;r den Admin sichtbar (nicht f&uuml;r Freunde).
	";
$lang['doc_entry_createthumbs'] = "
		Hiermit k&ouml;nen Sie alle Vorschaubilder, <b>ohne einzugreifen</b>, erstellen und l&ouml;schen. 
		Abh&auml;ngig von der Anzahl der hinzugef&uuml;gten Photos kann dieser Vorgang <b>einige Zeit</b> in Anspruch nehmen!<br>

		Anders als <a href='#autoconf'>Automatisches erstellen/l&ouml;schen der Vorschaubilder</a>, erstellt dieses Script ALLE 
		Thumbnails in ALLEN Orner auf einmal.
	";
$lang['doc_entry_recreatethumbs'] = "
		Mit dieser Option k&ouml;nnen Sie alle Vorschaubilder <b>automatisch</b> neu erstellen.
		Anders als <a href='#createthumbs'>Erstelle alle Vorschaubilder in einem Durchgang!</a> 
		erstellt dieses Skript ALLE Vorschaubilder in ALLEN Verzeichnissen neu UND l&ouml;scht alle Kommentare,
		Beschreibungen und Statistiken.<br>
	";
$lang['doc_entry_catnew'] = "
		LinPHA erlaubt es Ihnen verschiedene Kategorien anzulegen.
		Diese Kategorien sind f&uuml;r die User nicht sichtbar.<br>

		Dadurch ist es m&ouml;glich <b>Photos zu organisieren</b>, z.B. mit Kategorien
		wie Urlaub, Auto, Tiere usw.
		Der Vorteil ist, dass Sie die Photos sp&auml;ter ber die Suchseite viel leichter
		finden k&ouml;nnen, dadurch erhalten Sie eine bessere &Uuml;bersicht.
	";
$lang['doc_entry_catmod'] = "
		Hier k&ouml;nnen Sie die Kategorien &auml;ndern oder l&ouml;schen.
	";
$lang['doc_entry_benchmark'] = "
		Das Benchmark Plugin erlaubt es Ihnen die besten Einstellungen f&uuml;r die Gr&ouml;sse und Qualit&auml;t der Bilder zu finden, abh&auml;ngig von der Geschwindigkeit des Servers.
	";
$lang['doc_entry_watermark'] = "
		Das Wasserzeichen Plugin erlaubt Ihnen ein Wasserzeichen &uuml;ber jedes Bild zu legen. Diese Plugin &auml;ndert nichts an den Bildern, es wird \"on the fly\" generiert. Sie k&ouml;nnen Ihr eigenes Logo oder eigenen Text benutzen.
	";
$lang['doc_entry_wm_addexamples'] = "
		Um mehr Beispiel-Bilder hinzuzuf&uuml;gen, m&uuml;ssen Sie lediglich diese Bilder in den Ordner 'plugins/watermark/examples' kopieren.
	";
$lang['doc_entry_wm_addimg'] = "
		Um mehr Wasserzeichen-Bilder hinzuzuf&uuml;gen, m&uuml;ssen Sie lediglich diese Bilder in den Ordner 'plugins/watermark/watermarks' kopieren.
	";
$lang['doc_entry_wm_addfont'] = "
		Um mehr Schriftarten hinzuzuf&uuml;gen, m&uuml;ssen Sie lediglich diese Schriftarten in den Ordner 'plugins/watermark/font' im LinPHA-Verzeichnis kopieren. Die Schriftarten m&uuml;ssen Truetype-Schriftarten sein (.ttf). Sie finden sehr viele im Internet. Zum Beispiel:
		<a href=\"http://directory.google.com/Top/Computers/Software/Fonts/\" target=\"_blank\">Google Verzeichnis f&uuml;r Schriftarten</a>

	";
$lang['doc_entry_wm_color'] = "
		Um die Farbe zu setzen, k&ouml;nnen Sie das HTML Farbformat ('#00FF00' or '00FF00') oder normalen Text wie 'blue', 'darkblue' etc. (in Englisch) benutzen.
	";
$lang['doc_entry_sql'] = "
		Mit dem SQL DB Management k&ouml;nnen Sie Backups f&uuml;r Sicherunszwecke von der aktuellen Datenbank erstellen.
	";
$lang['doc_entry_cache'] = "
		Das Bilder Cache Plugin erlaubt es Ihnen die Bilder in der Grossansicht zwischenzuspeichern (diejenigen nach dem Anklicken eines Vorschaubildes). Diese Option wird LinPHA stark beschleunigen, vor allem auf langsamerer Hardware.<br/>
		Nat&uuml;rlich auf Kosten von zus&auml;tzlichen Webspace-Verbrauch.<br/>
		Standard: aus (einschalten falls CPU < 500 MHz)
	";
$lang['doc_entry_cachesize'] = "
		Diese Option erlaubt es Ihnen den maximal ben&ouml;tigten Speicherplatz f&uuml;r das Zwischenspeichern anzugeben (in Bytes).
		<br />Standard: 0 (= unlimitiert)
	";
$lang['doc_entry_cachepath'] = "
		Diese Option erlaubt es Ihnen den Cache-Ordner zu wechseln.<br />
		Falls Sie den Ordner wechseln, werden alle gecachte Dateien gel&ouml;scht!<br />
		LinPHA probiert den neuen Ordner selbst zu erstellen falls dieser noch nicht existiert.<br />
		<br />Standard: sql/cache
	";
$lang['doc_entry_cacheoptimize'] = "
		Diese Option erlaubt es Ihnen den Bild-Cache aufzur&auml;umen und zu optimieren.
	";
$lang['doc_entry_stats'] = "
		Diese PlugIn ermöglicht das Anzeigen verschiedener Statistiken. Auch f&uuml;r Besucher.<br />
		Zum Beispiel: Anzahl der Kommentare, Anzahl der Downloads, meist besuchte Bild oder Album, usw.
		";

$lang['doc_entry_statscaching'] = "
		Speziell bei großen Bildersammlungen und/oder bei Seiten mit sehr hohem Datenaufkommen, haben sie die Möglichkeit
		die Option \"Echtzeit-Statistik\" abzuschalten.<br>
		Diese Option <b>wirkt sich nur auf die \"Downloadgröße\", im Bereich </b>	\"Benutzer\"aus.
		Es reicht meist aus, die \"Echtzeit-Statistik\" abzuschalten um eine hohe Server Auslastung zu verhindern!<br>
		Wichtig: Auch wenn diese Option ausgeschalten ist, werden <b>alle Statistiken, ausser \"Downloads size\" in Echtzeit</b> angezeigt.
		";
?>