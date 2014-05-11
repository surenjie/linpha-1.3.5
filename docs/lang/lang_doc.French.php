<?php
/**
* for translators:
* please check if there are new entries in the english language file yourself
* because there are not automatically added to the other language files like
* in the main language files
*
* you can use the new file 'check_files.php' to check if there are missing entries in
* your language file
*
*
* also don't forget to update these changed entries!
*
* 02. Aug 2004  flo  doc_entry_cachesize
* 02. Aug 2004  flo  doc_entry_cachepath
* 02. Aug 2004  flo  doc_entry_wm_delete_all_cached_images
* 16. Aug 2004  flo  wm_delete_all_cached_images
* 16. Aug 2004  flo  doc_entry_printprobs (deleted)
* 16. Aug 2004  flo  doc_entry_imgrotate (deleted)
* 16. Aug 2004  flo  doc_entry_autolang (switched default to 'on')
* 16. Aug 2004  flo  doc_entry_autolanguage (added missing bracket)
* 15. Oct 2004  flo  doc_thumb_border
* 03. Mar 2005  bzrudi entry_createthumbs (rewrite)
* 03. Mar 2005  bzrudi entry_recreatethumbs (removed, obsolete)
* 03. Mar 2005  bzrudi entry_full_thumbnail (removed, obsolete)
* 04. Apr 2005  bzrudi exif_iptc_search_info
*/

$lang['archive_apps'] = 'Archive applications';
$lang['default_date_time_format'] = 'Format de date et d\'heure par d&eacute;faut';
$lang['sql'] = 'Gestion de la base de donn&eacute;e';
$lang['plugins'] = 'Plugins LinPHA';
$lang['benchmark'] = 'Comparatif';
$lang['watermark'] = 'Watermark';
$lang['cache'] = 'Cache image';
$lang['mail']="Plugin de liste de diffusion";
$lang['guestbook']="Plugin Livre d'or";
$lang['wm_delete_all_cached_images']="Watermark: Supprimer toutes les images marqu&eacute; du cache";
$lang['thumborder'] = "Ordre des vignettes";
$lang['thumbborder'] = "Bordure des vignettes";
$lang['log'] = "Plugin de journalisation";
$lang['iptcinfo'] = "Information IPTC des images";
$lang['iptclevel'] = "Niveau des informations IPTC";
$lang['exif_iptc_search_info'] = "Rechercher des informations EXIF/IPTC";
$lang['search_and_or_info'] = "Recherche d'information";
$lang['rss']="RSS";

$lang['doc_entry_search_and_or_info'] = "Pour obtenir les r&eacute;sultats attendus, il est " .
	"important de comprendre la mani&egrave;re de rechercher des mots-cl&eacute;s. Voici " .
	"une liste qui explique ce qu'il est possible de rechercher:<br> " .
	"<ul><li><b>mon chat</b> ==> renvoie tous les r&eacute;sultats pour <b><i>mon</i></b> ET/OU <b><i>chat</i></b><br>" .
	"ex. <i><b>ma</b> maison, <b>mon chat</b>, joli <b>chat</b></i>...</li>" .
	"<li><b>&quot;mon chat&quot;</b> ==> renvoie tous les r&eacute;ultats pour <b><i>mon chat</i></b><br>" .
	"ex. <i>ceci est <b>mon chat</b></i>, mais pas <i>un joli chat, ceci est ma maison</i>...&quot</li>" .
	"<li><b>\&quot;mon chat\&quot;</b> ==> renvoie tous les r&eacute;sultats pour <b><i>&quot;mon chat&quot;</i></b><br>" .
	"ex. <i>voici <b>&quot;mon chat&quot;</b> Smilla</i>, mais pas <i>voici mon chat Smilla...</i>" .
	"</ul>";   

$lang['doc_entry_exif_iptc_search_info'] = "Pour de meilleures perfromances " .
	"LinPHA n'extrait plus aucune m&eacute;ta-info EXIF/IPTC pendant la cr&eacute;ation des vignettes. " .
	"Cela signifie que vous devez avoir toutes les informations EXIF/IPTC pr&ecirc;tes avant de pouvoir ex&eacute;cuter une recherche dans les m&eacute;ta-donn&eacute;es " .
	"EXIF/IPTC.<br> " .
	"Les donn&eacute;es EXIF/IPTC peuvent &ecirc;tre cr&eacute;&eacute;es de deux mani&egrave;res. Lorsque vous visualisez une image pour la premi&egrave;re fois, " .
	"et/ou si vous utilisez l'option \"Cr&eacute;er toutes les informations\", que vous trouverez dans " .
	"la section d'administration de LinPHA en suivant le lien \"Vignettes EXIF/IPTC\".<br> " .
	"Pour plus de d&eacute;tails, veuillez consulter: <a href='#createthumbs'>Vignettes EXIF/IPTC</a><br> " .
	"Si vous souhaitez modifier les balises de recherche EXIF/IPTC, vous pouvez &eacute;diter le fichier " .
	"\"/include/metadata.config.php\".";
		
$lang['doc_entry_iptclevel'] = "
	le nombre d'informations IPTC est d&eacute;fini par <b>trois niveaux</b> (bas/moyen/&eacute;lev&eacute;).
	Plus vous augmentez ce niveau, plus le nombre d'informations IPTC affich&eacute;es est &eacute;lev&eacute;.<br>
	D&eacute;faut: moyen
	";
	
$lang['doc_entry_iptcinfo'] = "Certaines images contiennent des informations nomm&eacute;es \"m&eacute;ta-donn&eacute;es IPTC\". Ce type " .
	"de donn&eacute;es est principalement utilis&eacute; par Adobe Photoshop pour ajouter/extraire certaines descriptions utiles, comme " .
	"le copyright, les mots-cl&eacute;s ou d'autres informations sur les images. Lorsque ce plugin est actif, LinPHA affichera " .
	"les infos IPTC de l'image (si elles sont disponibles).<br> " .
	"D&eacute;faut: Off";
	
$lang['doc_entry_video_thumbnail'] = " Cette option vous permet d'activer les vignettes " .
	"m&ecirc;me pour certains types de vid&eacute;os. Comme il s'agit d'une t&acirc;che longue et gourmande en m&eacute;moire, " .
	"il est vivement recommand&eacute; de d&eacute;sactiver cette option sur les serveurs lents, " .
	"ou les serveurs partag&eacute;s!<br>".
	"D&eacute;faut: On";
	 
$lang['doc_entry_update_notice'] = "Cette option vous permet de d&eacute;sactiver la notification " .
	"de mise &agrave; jour hebdomadaire pour les admins. Vous devriez la laisser activ&eacute;e (par d&eacute;faut) pour toujours &ecirc;tre " .
	"inform&eacute; des mises &agrave; jour, qui incluent les mises &agrave; jour de s&eacute;curit&eacute;!<br> " .
	"NOTE: Aucune information personnelle n'est transmises ou stock&eacute;e durant la v&eacute;rification!<br>" .
	"D&eacute;faut: On";
	
$lang['doc_entry_random_image_size'] = "Cette option vous permet de modifier ".
    "la taille des images al&eacute;atoires affich&eacute;es sur index.php (si actif)<br>".
    "D&eacute;faut: 300 px";
    
$lang['doc_entry_random_index_image'] = "Cette option vous permet de remplacer le logo de LinPHA ".
    "sur la page index.php par une image al&eacute;atoire de votre collection.<br>".
    "Chaque fois que vous vous rendrez sur LinPHA, vous verrez une nouvelle image de votre galerie ".
    "<br>".
    "D&eacute;faut: off";
    
$lang['doc_entry_adodb_caching'] = "Particuli&egrave;rement pour les serveurs SQL lents, ".
    "vous devriez activer cette fonction. Elle permet de conserver les r&eacute;sultats des requ&ecirc;tes SQL dans une structure de r&eacute;pertoire ".
    "dans le dossier /sql/adocache (par d&eacute;faut) pour un temps donn&eacute; ".
    "en minutes (temps de cache adodb). Normalement, il est inutile d'activer cette fonction ".
    "si vous disposez d'un processeur de plus d'1GHz.".
    "<br /><br />D&eacute;faut: off";

$lang['doc_entry_adodb_cache_path'] = "Le chemin dans lequel les r&eacute;sultats SQL sont " .
    "conserv&eacute;s. Si vous changez la valeur par d&eacute;faut (sql/adocache) assurez-vous que le serveur Web ".
    "a des droits complets d'&eacute;criture sur le nouveau r&eacute;pertoire";

$lang['doc_entry_adodb_cache_time'] = "Le temps de cache des requ&ecirc;tes en minutes.";

$lang['doc_entry_mail_mode_anon'] = "Lorsque cette fonction est activ&eacute;e, n'importe qui est autoris&eacute; ".
    "&agrave; envoyer des images par e-mail &agrave; d'autres utilisateurs. Si elle est d&eacute;sactiv&eacute;e, seuls les utilisateurs enregistr&eacute;s ".
    "pourront utiliser cette option.".
    "<br><br>D&eacute;faut: d&eacute;sactiv&eacute;".
    "";
$lang['doc_entry_mail_mode_max_size'] = "Cette option vous permet de fixer ".
    "la taille maximum autoris&eacute;e pour les e-mails, en bytes.".
    "<br><br>D&eacute;faut: 2097152 (2 MB)";

$lang['doc_entry_archive_apps'] = "Des programmes additionnel pour cr&eacute;er des archives ou extraire des fichiers peuvent &ecirc;tre d&eacute;finis dans le fichier ".
	"linpha/include/archiver.config.php.<br /><br />".
	"Note: Ces programmes <b>ne peuvent pas</b> &ecirc;tre install&eacute;s dans des r&eacute;pertoires contenant des espaces! ".
	"Si vous souhaitez utiliser un programme install&eacute; sous C:/Program Files/... vous devez utiliser le nom C:/Progra~1/...<br />".
	"Par ailleurs, vous pouvez installer le programme dans un autre r&eacute;p&eacute;rtoire OU vous pouvez ajouter le r&eacute;pertoire &agrave; la variable PATH, ".
	"cela fonctionnera aussi.<br /><br />".
	"Un autre raison pour laquelle votre programme n'appara&icirc;t pas dans la s&eacute;lection: l'activation des restrictions <b>safe_mode</b> ou <b>open_basedir</b>. ".
	"Si possible, d&eacute;sactivez safe_mode ou open_basedir, ou utilisez un programme qui figure dans les chemins autoris&eacute;s pour safe_mode ".
	"ou open_basedir.";

$lang['doc_entry_default_date_time_format'] = 
	"Les formats de date et d'heure par d&eacute;faut ne sont utilis&eacute;s que s'il en sont pas d&eacute;finis dans les fichiers de langues ".
	"(par exemple dans le fichier anglais,car le format de l'heure diff&egrave;re entre les USA et le Royaume-Uni).<br />".
	"Voir <a href='http://www.php.net/manual/en/function.strftime.php' target='_blank'>".
	"http://www.php.net/manual/en/function.strftime.php</a> pour les d&eacute;finitions.";

$lang['doc_entry_wm_delete_all_cached_images'] = 
	"Avec cette option, vous pouvez supprimer toutes les images en cache qui ont une watermark. Cette option peut &ecirc;tre utilise ".
	"si vous avez des images d&eacute;j&agrave; cach&eacute;es et que vous changez la watermark. <br />".
	"(Cette option n'est disponible que si Watermark et le cache d'images sont actifs.)";

$lang['doc_entry_mail'] = "
		Ce plugin ajoute une liste de diffusion &agrave; laquelle les utilisateurs peuvent s'inscrire pour reçevoir de vos nouvelles.<br>
		De plus, les utilisateurs (autoris&eacute;s) peuvent envoyer des mails &agrave; tous les autres membres de la liste de diffusion. Certaines nouvelles options de configurations 
		appara&icirc;tront dan la section admin pour vous permettre de changer le comportement de ce plugin.<br><br>
		D&eacute;faut: off
		";
$lang['doc_entry_guestbook']="Ce plugin ajoute un livre d'Or dans lequel les utilisateurs peuvent vous laisser des messages.<br>
		Certaines nouvelles options de configurations 
		appara&icirc;tront dan la section admin pour vous permettre de changer le comportement du livre d'Or.<br><br>
		D&eacute;faut: off
		";
$lang['doc_entry_new_images']="
		Une fois cette option activ&eacute;e, un nouveau \"dossier virtuel\" sera affich&eacute; dans le menu de gauche.<br>
		Il affichera toutes les images r&eacute;cemment ajout&eacute;es de tous les albums (Celles que vous &ecirc;tes autoris&eacute; &agrave; voir) Sans perte de place!<br>
		La pr&eacute;visualisation des images d&eacute;pend de <a href=\"#new_images_age\">l'&acirc;ge max</a> fix&eacute; ci-dessous.<br>
		Le dossier dispara&icirc;tra d&egrave;s que l' \"&acirc;ge max\" sera atteint et sera r&eacute;affich&eacute; lorsque vous ajouterez de nouvelles images (n'est-ce pas magique :-))<br>
		<br><br>
		D&eacute;faut: On
		";
$lang['doc_entry_new_images_age']="Ce param&egrave;tre d&eacute;finit (en jours) le temps que les images r&eacute;centes restent dans le dossier \"nouvelles images\" <br><br>
		D&eacute;faut: 7 jours
		";
$lang['doc_entry_comment_in_subfolder']="Lorsqu'elle est activ&eacute;e, cette option affiche le commentaire de l'album dans la \"pr&eacute;visualisation du sous-dossier\"&eacute;galement, 
		et pas seulement dans l'album lui-m&ecirc;me.<br>
		Vous ne devriez pas enclancher cette option si vous avez de longs commentaires, car cela risque de corrompre l'affichage du site .<br><br>
		D&eacute;faut: on
		";
$lang['doc_entry_fullaccess'] = "
		Si vous installez LinPHA sur votre <b>PC domestique</b> ou sur un \"serveur racine\"
		sur Internet, enclanchez cette option. Vous aurez &eacute;galement besoin des droits complet SQL pour cr&eacute;er un nouvel utilisateur.
	";
$lang['doc_entry_limitedaccess'] = "
		Si vous installez LinPHA quelque part <b>sur Internet</b>, s&eacute;l&eacute;ctionnez cette option. La plupart des FAI ne donnenet pas les droits complets pour SQL.
	";
$lang['doc_entry_dbselect'] = "
		Quelques points sur les diff&eacute;rentes bases de donn&eacute;es support&eacute;es:<br>
		<b>Base MySQL:</b> pour continuer, vous avez d'avoir le mot de passe root (fix&eacute;) 
		pour votre base de donn&eacute;es MySQL. Merci de vous r&eacute;f&eacute;rer &agrave; la  
		<a href=\"http://linpha.sourceforge.net/nuke/modules.php?name=FAQ\">FAQ LinPHA</a> pour plus de d&eacute;tail.<br><br>
		<b>Base PostgreSQL:</b> Mis &agrave; part avec MySQL, LinPHA ne cr&eacute;era pas de base de donn&eacute;es automatiquement
		. Vous devrez donc lancer <b><i>createdb linpha</i></b> depuis la ligne de commande  pour cr&eacute;er un nouvelle base de donn&eacute;es nomm&eacute;e &quot;linpha&quot; avant de continuer. Le reste est similaire &agrave; une installation avec MySQL, sans avoir besoin d'un mot de passe.
		<br>Pour toutes les autres bases de donn&eacute;es, assurez-vous qu'il y aie un support PHP activ&eacute;!!!!
	";
$lang['doc_entry_sqladminname'] = "
		Le nom de l'administrateur de la base MySQL. G&eacute;n&eacute;ralement, c'est le compte \"root\".
	";
$lang['doc_entry_sqladminpass'] = "
		Le mot de passe pour le compte admin/root de MySQL. <b>NOTE:</b> Pour des raisons de s&eacute;curit&eacute;, 
		LinPHA ne s'installera PAS sur un syst&egrave;me sans mot de passe root, assurez-vous donc d'avoir un compte root ou admin avec un mot de passe fix&eacute;!
	";
$lang['doc_entry_linphaname'] = "
		Le nom de l'administrateur de LinPHA. Vous pourrez plus tard vous connecter avec ce compte pour les t&acirc;ches d'administration du site.
	";
$lang['doc_entry_linphapass'] = "
		Le mot de passe pour l'administrateur LinPHA.
	";
$lang['doc_entry_linphamail'] = "
		L'adresse mail de l'administrateur LinPHA.
	";
$lang['doc_entry_dbhost'] = "
		Le nom d'hôte du serveur MySQL de LinPHA. Il s'agit souvent de \"localhost\" pour un PC domestique, et de
		quelque chose comme \"mysql.somewhere.org\" pour un FAI.
	";
$lang['doc_entry_dbport'] = "
		Le port utilis&eacute; par le serveur MySQL. Dans la pluspart des cas c'est la valeur par d&eacute;faut 3306.
	";
$lang['doc_entry_dbname_full'] = "
		Le nom de la base de donn&eacute;es contenant les tables de LinPHA. en cas de doute, laissez la valeur par d&eacute;faut \"linpha\".<br>

		Si vous souhaitez installer plusieurs version ou instaces de LinPHA
		changez le nom de la base ici.
	";
$lang['doc_entry_dbname'] = "
		Le nom de la base de donn&eacute;es &agrave; laquelle se connecter. Ce nom <b>vous est communiqu&eacute;</b> par votre FAI.
	";
$lang['doc_entry_dbprefix'] = "
		Le pr&eacute;fixe pour toute les tables de LinPHA. Toutes les tables auront le <b>pr&eacute;fixe \"linpha_\"</b>
		dans votre base de donn&eacute;e. Vous pouvez le changer selon votre convenance.
	";
$lang['doc_entry_albumtitle'] = "
		Cette option vous permet de donner un nom &agrave; votre album. 
		Laisser &agrave; blanc pour utiliser la valeur par d&eacute;faut.<br>
		D&eacute;faut: blanc (\"Les Archives Photo Linux\")
	";
$lang['doc_entry_photoscol'] = "
		Cette option vous permet d'augmenter ou de diminuer le <b>nombre de colonnes</b> des vignettes.
		Cela vaut pour toutes les pages qui affichent des vignettes.<br>
		Vous pouvez activer cette option si vous utilisez LinPHA avec une haute r&eacute;solution (> 1024x768)<br>

		D&eacute;faut: 4 colonnes
	";
$lang['doc_entry_photosrow'] = "
		Cette option vous permet d'augmenter ou de diminuer le <b>nombre de lignes</b> des vignettes.
		Cela prends effet sur toutes les pages qui affichent des vignettes.<br>
		Vous pouvez activer cette option si vous utilisez LinPHA avec une haute r&eacute;solution (> 1024x768)<br>
		D&eacute;faut: 3 lignes
	";
$lang['doc_entry_photoswidth'] = "
		cette option vous permet de d&eacute;finir la <b>largeur par d&eacute;faut</b> des photos affich&eacute;es dans img_view.php.
		C'est a dire la taille \"moyenne\" des photos lors d'un clic sur une vignette.<br>
		Vous pouvez augmenter cette valeur si vous utilisez LinPHA en haute r&eacute;solution (> 1024x768)<br>

		D&eacute;faut: 512
	";
$lang['doc_entry_photosheight'] = "
		Cette option vous permet de d&eacute;finir la <b>hauteur par d&eacute;faut</b> des photos affich&eacute;es dans img_view.php.
		C'est a dire la taille \"moyenne\" des photos lors d'un clic sur une vignette.<br>
		Vous pouvez augmenter cette valeur si vous utilisez LinPHA en haute r&eacute;solution (> 1024x768)<br>
		D&eacute;faut: 384
	";
$lang['doc_entry_imgquality'] = "
		Cette option vous permet de fixer la valeur par d&eacute;faut de la <b>qualit&eacute; des images</b> dans img_view.php.
		(L'image qui s'affiche apr&egrave;s un clic sur une vignette). Vous pouvez augmenter la vitesse de chargement en diminuant cette valeur.
		Exemples:<br>
		Taille de l'image (qualit&eacute; 75) = 28.55 KB<br>

		Taille de l'image (qualit&eacute; 50) = 18.47 KB<br>
		Taille de l'image (qualit&eacute; 40) = 15.80 KB<br>
		D&eacute;faut: 75
	";
$lang['doc_entry_rotateonoff'] = "
		Cette option permet d'activer/d&eacute;sactiver la fonction de rotation des images dan img_view.php
		ATTENTION:<br>
		Si vous utilisez la biblioth&egrave;que GD, veuillez noter que <b><font color=\"FF0000\">TOUTES LES IMFORMATION EXIF DE LA PHOTO SERONT PERDUES !!!</font></b> lors de la rotation.<br>Un rapport de bug a d&eacute;j&agrave; &eacute;t&eacute; envoy&eacute; aux d&eacute;veloppeurs PHP, mais ces derniers
		ont annonc&eacute;s que ce bogue ne serait PAS r&eacute;solu! :-(<br><br>
		Si vous utilisez les fonctions d'ImageMagick, il ne devrait pas y avoir de probl&egrave;me, mais s'il vous pla&icirc;t faites un test!<br>

		D&eacute;faut: off
	";
$lang['doc_entry_exifonoff'] = "
		De nombreuses images au format JPG contiennent des informations sp&eacute;ciales appel&eacute;es EXIF.
		Cette option vous permet d'activer ou d&eacute;sactiver leur affichage par img_view.php.
		Vous devriez laisser cette option &agrave; sa valeur par d&eacute;faut (on), sans bonne raison de la d&eacute;sactiver.<br>
		ASTUCE: Si cette option est activ&eacute;e, vous devriez &eacute;galement voir:<br>
		<a href='#exifdefault'>Configuration par d&eacute;faut d'EXIF</a><br>
		<a href='#exiflevel'>Configuration du degr&eacute; d'affichage EXIF</a>
	";
$lang['doc_entry_exifdefault'] = "
		Cette option vous permet d'afficher par d&eacute;faut les informations EXIF sur img_view.php
		(la page qui appara&icirc;t apr&egrave;s avoir cliqu&eacute; sur une vignette).
		Sinon, les utilisateurs devront suivre le lien <b>\"plus de d&eacute;tail\"</b> pour voir les informations EXIF.<br>

		D&eacute;faut: off
	";
$lang['doc_entry_exiflevel'] = "
	Le niveau des infromations EXIF affich&eacute;es est d&eacute;fini en <b>trois niveaux</b> (bas/moyen/haut).
	Plus cette valeur est &eacute;lev&eacute;e, plus le nombre d'informations EXIF affich&eacute; est important.<br>
	D&eacute;faut: moyen
	";
$lang['doc_entry_filename'] = "
		Cette option permet d'afficher ou non le nom du fichier sous l'image.<br>
		D&eacute;faut: on
	";
$lang['doc_entry_thumborder'] = "
		Cette option permet de changer l'ordre d'affichage des vignettes. Vous avez le choix entre
		<b>\"trier par date\"</b> (la photo la plus r&eacute;cente en premier) et <b>\"trier par nom\"</b> (par ordre d&eacute;croissant).<br>

		D&eacute;faut: date
	";
$lang['doc_entry_thumbsize'] = "
		Cette option vous permet de changer la taille des vignettes. Vous pouvez choisir entre une taille maximum de
		90, 120 et 150 pixels. Notez que cette option ne modifiera <b>PAS</b> les vignettes existantes.
		Vous devrez donc les recr&eacute;er manuellement.<br>
		Veuillez vous r&eacute;f&eacute;rer &agrave;: <a href='#recreatethumbs'>Recr&eacute;er des Vignettes</a> sous la rubrique &quot;Autres options&quot;<br>
		D&eacute;faut: 120 pixels
	";
$lang['doc_entry_thumbborder'] = 
        "Cette option vous permet d'ajouter une bordure &agrave; vos vignettes. (La taille est fix&eacute;e en pixel.)
        <br />
        Une valeur &agrave; 0 d&eacute;sactive la bordure.
        <br /><br />
        Pour changer la couleur, r&eacute;f&eacute;rez vous &agrave; <a href='#wm_color'>Couleur des bordures</a>.
        <br /><br />
		D&eacute;faut: On";
    
         /*(ImageMagick only).
        Please note that a change will <b>NOT</b> update the existing thumbnails, so you have
        to recreate them manually.<br>

        please see: <a href='#recreatethumbs'>recreate thumbnails</a> found under &quot;Other options&quot;
        */
        
$lang['doc_entry_autoconf'] = "
		Avec cette option mise &agrave; ON, LinPHA d&eacute;tecte automatiquement les changements dans vos albums. Cela signifie que
		LinPHA cr&eacute;e automatiquement des vignettes pour les images ajout&eacute;es, et supprime les enregistrements de la base de donn&eacute;e pour les images ou albums supprim&eacute;s.<br>
		Puisque cette t&acirc;che requiert un gros travail du processeur, vous devriez la d&eacute;sactiver, et ne l'enclancher que si vous avez chang&eacute; quelque chose. Vous avez meilleur temps de la laisser &agrave; OFF et d'utiliser la fonction \"Cr&eacute;ation/Suppression automatique de vignettes\"!
		<a href='#createthumbs'>(Infos &agrave; ce sujet)</a><br>
		D&eacute;faut: off
	";
$lang['doc_entry_counter'] = "
		Cette option vous permet d'afficher ou non le compteur des utilisateurs en haut &agrave; droite .<br>

		D&eacute;faut: Activ&eacute;
	";
$lang['doc_entry_ipblocking'] = "
		Cette option vous permet de d&eacute;terminer le temps qu'une adresse IP <b>est bloqu&eacute;e</b>. Cela signifie que
		durant ce laps de temps, un utilisateur n'est pas compt&eacute; comme nouveau.<br>
		D&eacute;faut: 15 minutes
	";
$lang['doc_entry_language'] = "
		La langue par d&eacute;faut de LinPHA. Si vous avez activ&eacute; \"l'auto-d&eacute;tection de la langue\" ce sera la langue par d&eacute;faut du navigateur du client.<br>
	";
$lang['doc_entry_autolanguage'] = "
		Lorsque cette option est activ&eacute;e, LinPHA affichera la page d'accueil dans la langue du client (si elle est support&eacute;e). Si une langue non support&eacute;e est d&eacute;tect&eacute;e, LinPHA  utilise la langue par d&eacute;faut.
		(Voir <a href='#language'>langue par d&eacute;faut</a>)<br>
		D&eacute;faut: on
	";
$lang['doc_entry_theme'] = "
		Cette option vous permet de changer l'apparence par d&eacute;faut de LinPHA. Choisissez entre les <b>trois
		th&egrave;mes</b> disponibles. (Aqua/Colored/Shadow)<br>

		D&eacute;faut: Aqua
	";
$lang['doc_entry_hqthumbs'] = "
		Cette option vous permet de cr&eacute;er des vignettes de haute qualit&eacute; en utilisant la biblioth&egrave;que GD. Elles sont nettement plus fines, mais ceci causes <b>une tr&egrave;s forte chage du processeur</b>.<br>
		Ne l'activez pas si vous avez un processeur de moins de 1 GHz!!<br>
		D&eacute;faut: off
	";
$lang['doc_entry_printing'] = "
		Cette option vous permet d'activer les fonctions d'impression de LinPHA pour les utilisateurs \"invit&eacute;s\". Lorsque elle est activ&eacute;e
		n'importe qui est autoris&eacute; &agrave; imprimer (c&agrave;d. que le lien \"Mode Impression\" et son icone sont visibles).
		Lorsqu'elle est d&eacute;sactiv&eacute;e, les utilisateurs doivent &ecirc;tre connect&eacute;s avant de pouvoir imprimer.<br>
		D&eacute;faut: off
	";
$lang['doc_entry_slideshow'] = "
		Cette option vous permet d'activer/d&eacute;sactiver la fonction de diaporama de LinPHA. Si vous disposez d'une faible bande passante ou d'un processeur plsu lent que 300MHz vous devriez d&eacute;sactiver le diaporama.<br>
		D&eacute;faut: on
	";
$lang['doc_entry_miniprev'] = "
		Cette option vous permet d'activer/d&eacute;sactiver l'utilisation de petites images comme boutons suivant/pr&eacute;c&eacute;dent
		dans img_view.php plutôt que les icônes de fl&egrave;ches. Si vous avez de nombreux visiteurs et une faible bande passante
		vous devriez d&eacute;sactiver cette option, car elle cause une \"surcharge\" de 7kb comparativement aux icones de fl&egrave;ches.<br>

		D&eacute;faut: on
	";
$lang['doc_entry_anonpost'] = "
		Cette option vous permet d'activer/d&eacute;sactiver les commentaires anonymes. Lorsqu'elle est d&eacute;sactiv&eacute;e, n'importe quel visiteur 
		est autoris&eacute; &agrave; &eacute;crire un commentaire pour les images. Si elle est activ&eacute;e, SEULS les utilisateurs enregistr&eacute;s sont autoris&eacute;s 
		&agrave; &eacute;crire un commentaire.<br>
		D&eacute;faut: off
	";
$lang['doc_entry_anondown'] = "
		Cette option vous permet d'activer/d&eacute;sactiver les t&eacute;l&eacute;chargement (downloads) anonymes. Si elle est activ&eacute;e, n'importe quel visiteur 
		t&eacute;l&eacute;charger vos images (le lien download est actif sous l'image). D&eacute;sactiv&eacute;e, elle n'autorise QUE les utilisateurs enregistr&eacute;s &agrave; utiliser cette fonction .<br>
		D&eacute;faut: off
	";
$lang['doc_entry_autologin'] = "
		Si cette option est activ&eacute;e, les utilisateurs peuvent utiliser l'autologin. L'autologin cr&eacute;e un cookie dans le quel le mot de passe, crypt&eacute;, est conserv&eacute; (hash MD5). Ils ne devraient utiliser cette possibilit&eacute;
		que s'ils sont sur leur propre ordinateur. Vous pouvez d&eacute;sactiver cette fonction si cela vous pose un probl&egrave;me.<br/>
		D&eacute;faut: on
	";
$lang['doc_entry_autologinuser'] = "
		Si cette option est activ&eacute;e, vous pouvez utiliser l'autologin. L'autologin cr&eacute;e un cookie dans le quel le mot de passe, crypt&eacute;, est conserv&eacute; (hash MD5). Vous ne devriez utiliser cette possibilit&eacute;
		que si vous &ecirc;tes sur votre propre ordinateur.
	";
$lang['doc_entry_timer'] = "
		Cette option vous permet d'afficher ou non le temps de traitement dans le peid de page.
		<br/>D&eacute;faut: off
	";
$lang['doc_entry_anonalbdown'] = "
		Cette option vous permet d'activer ou de d&eacute;sactiver le t&eacute;l&eacute;chargement d'abums zipp&eacute;s pour les utilisateurs anonymes.
		<br/>D&eacute;faut: off
	";
$lang['doc_entry_albdownlimit'] = "
		Cette option vous permet de fixer une vitesse de t&eacute;l&eacute;chargement maximale pour les albums zipp&eacute;s.
		<br/>D&eacute;faut: illimit&eacute;
	";
$lang['doc_entry_navigation'] = "
		Cette option vous permet d'activer ou de d&eacute;sactiver les barres de navigation dans les pages de vignettes.
		<br/>D&eacute;faut: off
	";
$lang['doc_entry_usermod'] = "
		Modifiez les nom, mot de passe et adresses mail des utilisateurs ici. Vous pouvez &eacute;galement supprimer des utilisateurs.
	";
$lang['doc_entry_usernew'] = "
		Utilisez ce formulaire pour cr&eacute;er de nouveaux comptes utilisateurs, et leur assigner un mot de passe, une adresse mail et un groupe.<br>
		Les groupes d'utilisateurs (friend/admin) vous permettent de fixer les privil&egrave;ges. <b>Attention!</b> Si cette valeur est fix&eacute;e &agrave; admin, l'utilisateur aura les m&ecirc;me droits que VOUS!<br>

	";
$lang['doc_entry_groupnew'] = "
		Utilisez ce formulaire pour cr&eacute;er de nouveaux groupes. LinPHA est fourni avec trois groupes par d&eacute;faut:<br>
		Admin (ne peut pas &ecirc;tre supprim&eacute;), friends et uploaders.
	";
$lang['doc_entry_groupmod'] = "
		Utilisez ce formulaire pour modifier ou supprimer un groupe. Le groupe uploaders est particulier: 
		si vous ajoutez un membre &agrave; ce groupe, il/elle pourra utiliser le gestionnaire de fichiers de LinPHA
		pour envoyer des fichiers depuis leur page \"mes pr&eacute;f&eacute;rences\".<br>
		Il ne devrait donc pas &ecirc;tre supprim&eacute;.
	";
$lang['doc_entry_folderperms'] = "
		Cette page vous permet de masque des albums/dossiers. LinPHA a quatre niveaux par d&eacute;faut. 
		Bien entendu, vous pouvez ajouter plus de groupes selon vos besoins:<br>
		<b>PUBLIC:</b> Visible pour n'importe quel utilisateur, pas besoin de s'enregistrer.<br>
		<b>FRIEND:</b> Visibles uniquement pour les utilisateurs membres de ce groupe.<br>

		<b>ADMIN:</b> Visible uniqement pour les administrateurs. (pas les amis)<br>
		<b>UPLOADER</b> Pseudo groupe. Active le gestionnaire de fichiers dans \"mes pr&eacute;f&eacute;rences\" afin qu'ils puissent envoyer des images<br>
	";

$lang['doc_entry_createthumbs'] = "
		Bien que LinPHA puisse cr&eacute;er &agrave; la vol&eacute;e toutes les vignettes et les informations IPTC/EXIF si <a href='#autoconf'>Cr&eacute;ation/Suppression automatique des vignettes</a> 
		est activ&eacute;, vous pourriez cependant souhaiter cr&eacute;er ces vignettes et/ou informations IPTC/EXIF &agrave; l'avance. 
		Vous &ecirc;tes au bon endroit!<br>
		Merci de garder &agrave; l'exprit que ces op&eacute;rations peuvent &eacute;chouer &agrave; cause des limites de temps d'ex&eacute;cution de PHP, bien que, si vous utilisez la biblioth&egrave;que GD avec PHP, la conversion fonctionne g&eacute;n&eacute;ralement bien.<br>
		Or donc, si vous rencontrez des probl&egrave;mes avec des cr&eacute;ations en masse de m&eacute;ta-donn&eacute;es ou de vignettes (par exemple si toutes les vignettes d'un album ne sont pas g&eacute;n&eacute;r&eacute;es, mais uniquement quelques-unes...), vous avez meilleur temps de laisser 
		<a href='#autoconf'>Cr&eacute;ation/Suppression automatique des vignettes</a>  
		enclanch&eacute;, et tout devrait se passer sans probl&egrave;me.<br/><br/> 
		<ul>
		<li><strong>R&eacute;pertoires:</strong> Cette option (re-)cr&eacute;e uniquement la structure 
			de l'album et pr&eacute;pare le \"md5sum\" pour les vignettes. 
		<li><strong>Vignettes:</strong> Cette option (re-)cr&eacute;e les 
			vignettes pour les images. (et supprime celles des images qui 
			ne figurent plus dans votre collection) 
		<li><strong>EXIF:</strong> Cette option (re-)cr&eacute;e les informations EXIF  
			trouv&eacute;es dans les images. 
		<li><strong>IPTC:</strong> Cette option (re-)cr&eacute;e les informations IPTC  
			trouv&eacute;es dans les images. 
		<li><strong>Mode silencieux:</strong> Evite d'afficher les informations d&eacute;taill&eacute;es  
			du processus de (re-)cr&eacute;ation. Seules la progression de l'op&eacute;ration en pourcent est affich&eacute;e.
		</ul>
	";

$lang['doc_entry_catnew'] = "
		LinPHA Vous permet de cr&eacute;er des cat&eacute;gories. Ces cat&eacute;gories ne sont PAS affich&eacute;es aux utilisateurs si vous les d&eacute;finissez comme 
		\"priv&eacute;es\". Dans le cas contraire, elles sont disponibles 
		pour tous les utilisateurs dans la page de recherche.<br>
		Cela vous permet <b>d'organiser vos photos</b> en cat&eacute;gories comme Vacances, Voitures, 
		Chat, ou n'importe quoi.
		Le but essentiel est de <b>les retrouver</b> plus facilement via la page de recherche, 
		et d'offrir une meilleur pr&eacute;visualisation.
	";
$lang['doc_entry_catmod'] = "
		Modifiez ou supprimez vos cat&eacute;gories ici...
	";
$lang['doc_entry_benchmark'] = "
		Le plugin Benchmark (Test) vous permet de d&eacute;terminer les meilleurs param&egrave;tres pour la taille de vos images en fonction de votre serveur.
	";
$lang['doc_entry_watermark'] = "
		Le plugin Watermark vous permet d'afficher une watermark sur chacune de vos images.
		La Watermark ne modifie pas vos images, elle est g&eacute;n&eacute;r&eacute;e &agrave; la vol&eacute;e.
		Vous pouvez ins&eacute;rer un texte ou une image personalis&eacute;s sur chaque image.
	";
$lang['doc_entry_wm_addexamples'] = "
		Pour ajouter des exemples d'images, ajoutez les simplement dans votre r&eacute;pertoire LinPHA 
		dans le dossier'plugins/watermark/examples'
	";
$lang['doc_entry_wm_addimg'] = "
		Pour ajouter des images, ajoutez les simplement dans votre r&eacute;pertoire LinPHA 
		dans le dossier 'plugins/watermark/watermarks'
	";
$lang['doc_entry_wm_addfont'] = "
		Pour ajouter d'autre polices, ajoutez les simplement dans votre r&eacute;pertoire LinPHA 
		dans le dossier 'plugins/watermark/font'. Les polices doivent &ecirc;tre 
		Truetype (.ttf). Vous en trouverez des quantit&eacute;s sur Internet:
		<a href=\"http://directory.google.fr/Top/World/Fran%C3%A7ais/Informatique/Logiciels/Polices_de_caract%C3%A8res/\" target=\"_blank\">R&eacute;p&eacute;rtoire de polices Google</a>

	";
$lang['doc_entry_wm_color'] = "
		Pour choisir une couleur, vous pouvez utiliser le format de couleur HTML ('#00FF00' ou '00FF00') ou un texte normal (en anglais), comme 'blue' 'darkblue' etc. La liste des textes de couleurs utilisables et une introduction sur l'utilisation des valeurs hexad&eacute;cimales peut &ecirc;tre trouv&eacute;e, par exemple, sur <a href=\"http://minso.free.fr/cavinfo/internet/html.html#couleurs\"> Minso.free.fr</a>
	";
$lang['doc_entry_sql'] = "
		Avec le gestionnaire de la base de donn&eacute;es SQL, vous pouvez sauvegarder votre base.
	";
$lang['doc_entry_cache'] = "
		Le plugin de cache d'image vous permet de sauvegarder en cache les images en taille moyenne (celles qui s'affichent lors d'un clic sur une vignette) 
		Ceci augmentera passablement la vistesse de LinPHA, particuli&egrave;rement sur du mat&eacute;riel lent.<br>
		Bien entendu, le prix en est de l'espace disque suppl&eacute;mentaire.
		<br/>D&eacute;faut: OFF (activez si le processeur < 500 MHz)
	";
$lang['doc_entry_cachesize'] = "
		Cet option vous permet de sp&eacute;cifier la taille maximum, en bytes, utilis&eacute;e par le cache. 
		<br/>D&eacute;faut: 0 (= illimit&eacute;)
	";
$lang['doc_entry_cachepath'] = "
		Cette option permet de changer le r&eacute;pertoire du cache.<br />
		Si vous changez de r&eacute;pertoire, toute les images en cache seront supprim&eacute;es!<br />
		Si le nouveau dossier n'existe pas, LinPHA tentera de le cr&eacute;er.<br />
		<br />D&eacute;faut: sql/cache
	";
$lang['doc_entry_cacheoptimize'] = "
		Cette option vous permet de purger et optimiser le cache d'images.
	";

$lang['doc_entry_log'] = "
		Ce plugin ajoute une fonction de journalisation &agrave; LinPHA. Chaque type d'&eacute;v&eacute;nement peut &ecirc;tre enregistr&eacute; dans une destination diff&eacute;rente.<br />
		Ev&eacute;nement actuellement support&eacute;s: login, mises &agrave; jour, vignettes and base de donn&eacute;e.<br />
		Destination actuellement support&eacute;es: aucune, syst&egrave;me, fichier, email and base de donn&eacute;e.<br /><br />
		D&eacute;faut: off
		";

$lang['doc_entry_rss'] = "
		Ce plugin permet &agrave; vos visiteurs de se tenir au courant des changements sur votre site en s'inscrivant &agrave; un flux RSS 2.0. Lorsque vous avez mis de nouvelles images en ligne, ou cr&eacute;&eacute; un nouvel album, cliquez simplement sur \"G&eacute;n&eacute;rer le RSS\" (ou \"Pr&eacute;visualiser le RSS\" si vous souhaitez voir le fichier XML sans le construire) et un nouveau fichier RSS sera cr&eacute;&eacute; sur la base des dates de modification des dossiers du r&eacute;pertoire \"albums\". <br />
		Si cette option est activ&eacute;e, un logo RSS 2.0 est affich&eacute; dans la barre de navigation. Ajout&eacute; &agrave; un aggr&eacute;gateur, il affichera les mises &agrave; jour.<br />
		Vous devez cr&eacute;er un dossier \"feed\" sous \"plugins/RSS\" sur votre serveur, en vous assurant de mettre des droits d'&eacute;criture dessus afin de pouvoir g&eacute;n&eacute;rer le RSS. La section de configuration vous offre les options suivantes:<ul>
		<li><strong>Titre</strong> --> Le titre affich&eacute; dans le lecteur RSS pour votre flux</li>
		<li><strong>Description</strong> --> La description de votre flux</li>
		<li><strong>Lien</strong> --> Un lien vers votre site</li>
		<li><strong>Langue</strong> --> La langue de votre flux</li>
		<li><strong>Copyright</strong> --> Le copyright de que vous souhaitez</li>
		<li><strong>Titre g&eacute;n&eacute;rique</strong> --> Le texte qui figurera avant le nom de votre album dans la description de l'entr&eacute;e.</li></ul>
		<br /><br />
		D&eacute;faut: off
		";
?>
