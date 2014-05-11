<?php
/* language file */
/* Feel free to modify this file to make use of your native language.
If you do so, please save it as lang.YourLanguage.php in the LinPHA /lang dir
and PLEASE mail me a copy! mailto:bzrudi@tuxpower.de */

// Traduit par / Translated by Gr&eacute;gory Chanez (gregory.chanez@freesurf.ch)
// Revu par / Review by Guillaume Moutier (gmoutier@sympatico.ca)
// Revu par / Review by Nicolas GAUVRIT (nicomut@yahoo.com)

/*#################################################
## linpha messages
#################################################*/
/* left menu */
$album="Mes albums photos";

/* alerts */
$alert_fopen="Erreur! le fichier ne peut pas &ecirc;tre ouvert...";
$printing_probs="Erreur d'Impression";
$printing_probs_msg="Impression annul&eacute;e! voir";

// runtime info
$subfolders="sous-dossiers";
$img_th="Photos";
$in_th="dans"; /* used for the Photos in $foldername */
$alb_th="Cat&eacute;gories dans les sous-dossiers";
$thumb_hint_msg="cliquez pour voir le d&eacute;tail";
$full_img_msg="cliquez pour voir en taille compl&egrave;te (dans une nouvelle fen&ecirc;tre)";
$latest_photo="derni&egrave;re";
$view_at="vu &agrave;";
$close_button="fermer";
$help="aide";

/*#################################################
## installation
#################################################*/
/* install.php (page 1) */
$welc_header="Bienvenue dans LinPHA";
$welc_text="Bienvenue, ceci est la page d'acceuil de &quot;The Linux Photo Archive&quot; (le projet Linux d'archivage de photos) alias LinPHA.
			Il semble que vous utilisiez LinPHA pour la premi&egrave;re fois, vous DEVEZ donc executer le script d'installation!";
$welc_hint="<b>Avant de continuer:</b>";
$welc_hint1="1. Mettez les droits d'&eacute;criture &agrave; tout le monde pour le dossier &quot;<b>linpha/sql</b>&quot;!
			(p.ex. # chmod 777 sql/)";
$next_button="Continuer"; /* used as left menu header in all 4 stages */
$inst_msg="Installation de LinPHA"; /* used as left menu header in all 4 stages */
$inst_status_1="Choisissez une langue et cliquez sur &quot;Continuer&quot;";
$inst_status_step1="Etape 1 de 4";

/* sec_stage_install (page 2) */
$inst_access_msg="Configurez le type d'acc&egrave;s &agrave; la base de donn&eacute;e";
$inst_full_access_msg="<b>OUI!</b><br> J'ai un acc&egrave;s complet &agrave; la base de donn&eacute;e MySQL, je suis autoris&eacute; &agrave; cr&eacute;er de nouvelles<br>
						bases et de nouveaux utilisateurs. En d'autres termes: C'est mon serveur!";
$inst_limited_access_msg="<b>NON!</b><br> J'ai l'intention d'installer LinPHA avec des acc&egrave;s limit&eacute;s sur<br>
						la base de donn&eacute;e MySQL. Mon h&eacute;b&eacute;rgeur ne permet pas la cr&eacute;ation de nouvelles bases de donn&eacute;es ou de nouveaux utilisateurs.";
$inst_status_2="Choisissez le type d'acc&egrave;s &agrave; MySQL, Si vous n'&ecirc;tes pas s&ucirc;r, choisissez NON!";
$inst_status_step2="Etape 2 de 4";

/* requirements */
$req_check_msg="V&eacute;rification des logiciels n&eacute;cessaires";
$req_found_msg="OK trouv&eacute;";
$req_miss_msg="NON trouv&eacute;";
$req_safe_fail="ACTIVE";
$req_safe_ok="DESACTIVE";
$php_safemode_check_msg="V&eacute;rification de PHP safe mode...";
$php_version_check_msg="V&eacute;rification de la version de PHP (> 4.1.0)...";
$gd_check_msg="V&eacute;rification de la librairie GD...";
$convert_check_msg="V&eacute;rification de ImageMagick...";
$mem_check_msg="V&eacute;rification de la limite de m&eacute;moire PHP...";
$exif_check_msg="V&eacute;rification du support de EXIF...";
$summary_msg="RECAPITULATIF:";
$safe_mode_err="Le serveur est configur&eacute; pour utiliser PHP en \"safe mode\". LinPHA ne peut fonctionner dans ce mode. Veuillez &eacute;diter le fichier php.ini !";
$inst_abort_msg="!!! INSTALLATION INTERROMPUE !!!";
$php_version_err="Le serveur est &eacute;quip&eacute; de PHP version ant&eacute;rieure &agrave; 4.1.0. LinPHA n&eacute;cessite une version 4.1.0 ou supp&eacute;rieure pour fonctionner.";
$gd_convert_err="Aucune des librairies GD ou ImageMagick n'a &eacute;t&eacute; trouv&eacute;e. LinPHA n&eacute;cessite au moins l'une de ces deux librairies pour fonctionner.";
$convert_sum_found_msg="ImageMagick a &eacute;t&eacute; trouv&eacute; sur le serveur. Ceci va permettre &agrave; LinPHA de cr&eacute;er des aper&ccedil;us de haute qualit&eacute;.";
$convert_sum_miss_msg="ImageMagick n'a pas &eacute;t&eacute; trouv&eacute; sur le serveur. La qualit&eacute; des aper&ccedil;us sera limit&eacute;e.";
$exif_sum_found_msg="Le support EXIF a &eacute;t&eacute; trouv&eacute; dans votre installation. Ceci permettra &agrave; LinPHA d'afficher des d&eacute;tails sur vos photos.";
$exif_sum_miss_msg="Le support EXIF n'a pas &eacute;t&eacute; trouv&eacute; dans votre installation. L'analyseur EXIF interne &agrave; LinPHA sera utilis&eacute; pour afficher
			des d&eacute;tails sur vos photos.";
$session_path_check_msg="v&eacute;rification de session_save_path...";
$session_path_found_msg="session_save_path est d&eacute;fini dans php.ini. La connexion &agrave; LinPHA devrait fonctionner normalement. Le chemin d&eacute;fini est: ";
$session_path_miss_msg="AUCUNE valeur trouv&eacute;e pout session_save_path. Vous DEVEZ d&eacute;finir session_save_path
			dans php.ini ou vous ne pourrez pas vous connecter par la suite!!";
$mem_limit_ok_msg="Bien, La limite m&eacute;moire de PHP est supp&eacute;rieure &agrave; 16MB. Il n'y aura pas de probl&egrave;mes avec la cr&eacute;ation d'aper&ccedil;us."; /* TODO 4 vars */
$mem_limit_low_msg="Hmmh, la limite m&eacute;moire de PHP est inf&eacute;rieure &agrave; 16MB. Si vous rencontrez des probl&egrave;mes
			et qu'il manque des aper&ccedil;us, essayez de modifier l'instruction memory_limit dan php.ini ou de baisser la r&eacute;solution de vos photos, et essayez &agrave; nouveau.";
$choose_def_quali="Choisissez la qualit&eacute; des photos par d&eacute;faut";
$choose_def_quali_warn="NE PAS choisir une haute qualit&eacute; si le CPU est inf&eacute;rieur &agrave; 1Ghz (haute charge CPU)";

/* third_stage_install (page 3) */
$inst_superadmin_header="Configurer l'adminitration MySQL";
$inst_superadmin_name="Administrateur MySQL:";
$inst_superadmin_name_info="<-- Nom d'utilisateur de l'administrateur MySQL (doit exister dans la base de donn&eacute;es)";
$inst_superadmin_pass="Mot de passe administrateur MySQL:";
$inst_superadmin_pass_info="<-- Mot de passe de l'administrateur MySQL (doit exister dans la base de donn&eacute;es)";

$inst_admin_header="Configurer l'administrateur de LinPHA (l'utilisateur va &ecirc;tre cr&eacute;&eacute;)";
$inst_admin_name="Administrateur LinPHA:";
$inst_admin_name_info="<-- Nom de l'administrateur de LinPHA";
$inst_admin_pass="Mot de passe:";
$inst_admin_pass_info="<-- Mot de passe de l'administrateur de LinPHA";
$inst_admin_email="Email de l'administrateur:";
$inst_admin_email_info="<-- E-Mail de l'administrateur de LinPHA";

$inst_db_header="Configurer l'acc&egrave;s &agrave; la base de donn&eacute;e";
$inst_db_host="Nom ou adresse IP de la machine:";
$inst_db_host_info="<-- Nom de la machine: normalement &quot;localhost&quot;";
$inst_db_host_info2="<-- Nom de la machine: nom du serveur MySQL.";
$inst_db_host_port="No de port:";
$inst_db_host_port_info="<--Num&eacute;ro du port de MySQL: Laissez le par d&eacute;faut si vous n'&ecirc;tes pas s&ucirc;r.";
$inst_db_name="Nom de la base de donn&eacute;e LinPHA:";
$inst_db_name_info="<-- Nom de la base de donn&eacute;e pour LinPHA, par d&eacute;faut &quot;linpha&quot;";
$inst_db_name2="Nom de la base de donn&eacute;e:";
$inst_db_name_info2="<-- Nom de la base de donn&eacute;e fournie par votre h&eacute;b&eacute;rgeur";
$inst_table_prefix="pr&eacute;fixe pour les tables linpha";
$inst_table_prefix_info="<-- Le pr&eacute;fixe sera utilis&eacute; sur toutes les tables de LinPHA (p.ex: linpha_)";

$general_header="Configurer les options g&eacute;n&eacute;rales";
$general_album_title="Titre de l'album photo";
$general_album_title_info="<-- Laissez vide pour utiliser le nom par d&eacute;faut";
$general_photos_row="Nombre de lignes:";
$general_photos_row_info="<-- Lignes d'aper&ccedil;us &agrave; afficher!";
$general_photos_col="Nombre de colonnes:";
$general_photos_col_info="<-- Colonnes d'aper&ccedil;us &agrave; afficher!";
$general_photos_width="Taille du d&eacute;tail de la photo (largeur):";
$general_photos_width_info="<-- 512 (taille par d&eacute;faut)!";
$general_photos_height="Taille du d&eacute;tail de la photo (hauteur):";
$general_photos_height_info="<-- 384 (taille par d&eacute;faut)!";
$general_img_quality="Qualit&eacute; de la photo d&eacute;taill&eacute;e:";
$general_img_quality_info="<-- Ajustez la qualit&eacute; de l'image 0-100 (d&eacute;faut 75)";

$inst_status_3="Merci de renseigner tous les champs!";
$inst_status_step3="Etape 3 de 4";

/* forth_stage_install (page 4) */
$inst_status_4="F&eacute;licitations! L'installation est termin&eacute;e! LinPHA est maintenant pr&ecirc;t &agrave; l'emploi.";
$inst_status_step4="Etape 4 de 4";
$inst_submit="Termin&eacute;";
$inst_db_tryconn="Essai de connexion &agrave; la base de donn&eacute;e";
$inst_db_tryconn_error="Erreur de connexion &agrave; la base de donn&eacute;e en utilisant:";
$inst_db_tryconn_ok="OK, connect&eacute;!";
$inst_db_tryinst="Essai de cr&eacute;ation de la base:";
$inst_db_tryinst_error="Erreur lors de la cr&eacute;ation de la base";
$inst_db_tryinst_ok="OK, cr&eacute;&eacute;es!";
$inst_create_tb_msg="OK, cr&eacute;ation des tables";

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
$inst_db_connect_inc_msg="Erreur de connexion au serveur!";
$inst_db_connect_inc_msg1="Erreur lors de la s&eacute;lection de la base ".@$db_realname."<br>
	Si ce message appara? lors de l\'installation, vous devez SUPPRIMER le fichier db_connect.php<br>
	dans le sous-repertoire de linPHA";
/* ------------------------------------------------------------------ */

$table_create="Cr&eacute;ation des tables:";
$table_create_error="Erreur lors de la cr&eacute;ation des tables!";
$table_create_ok="OK, cr&eacute;&eacute;es!";
$table_insert_admin="Cr&eacute;ation de l'utilisateur admin:";
$table_insert_admin_error="Erreur lors de la cr&eacute;ation de l'utilisateur admin!";
$table_insert_admin_ok="OK, cr&eacute;&eacute;!";
$write_db_config="Ecriture de la configuration dans le fichier";
$fopen_error="Impossible d'ouvrir le fichier sql/db_config.php pour l'&eacute;criture, executez un chmod 777 et red&eacute;marrez l'installation";
$fopen_ok="OK, configuration &eacute;crite correctement!";
$install_finish_msg="OK. Installation termin&eacute;e!!";
$admin_task="cliquez pour continuer";
$file_create_ok="OK, cr&eacute;&eacute;!";
$configure_error="Merci de remplir tous les champs.";
$could_not_open="Erreur, impossible d'ouvrir les tables utilisateurs! V&eacute;rifiez que vous &ecirc;tes autoris&eacute; a cr&eacute;er de nouveaux utilisateurs<br>
				choisissez l'installation limit&eacute;e &agrave; l'&eacute;tape 2 durant l'installation<br>";

/*#################################################
## header.php
#################################################*/
$page_title="LinPHA - The Linux Photo Archive";
$head_title="Les archives photos";
$book_home="accueil";
$book_about="&agrave; propos";
$book_admin="admin";
$book_admin_user="mes pr&eacute;f&eacute;rences";
$book_links="liens";
$book_search="recherche";
$book_logout="d&eacute;connexion";
$book_login="connexion";
$num_pictures="photos:";
$user_visits="visites";
$user_online="utilisateur(s) en ligne";
$guest="invit&eacute;";
$html_lang="fr";
$html_charset="iso-8859-1";

/*#################################################
## index.php
#################################################*/
$index_welc_text="Bienvenue, ceci est la page d'accueil de &quot;The Linux Photo Archive&quot; alias LinPHA.
			Merci de v&eacute;rifier les mises &agrave; jour &agrave; l'adresse suivante: <a href='http://sf.net/projects/linpha/'><u>Sourceforge</u></a>.";

/*#################################################
## search.php
#################################################*/
$search_header="Linpha-Recherche";
$radio_all="Tout";
$radio_descript="Description";
$radio_comment="Commentaire";
$radio_category="Cat&eacute;gorie";
$radio_file="Nom du fichier";
$search_in="Chercher dans la cat&eacute;gorie";
$search_all="Toutes les cat&eacute;gories";
$search_for="Mot cl&eacute;";
$search_button="Chercher";
$photos_found="trouv&eacute;s";
$search_info="Page de recherche de LinPHA";
$search_msg="Rechercher des photos dans la base par:";

/*#################################################
## img_view.php
#################################################*/
$img_detail="D&eacute;tails de l'image";
$img_size="taille compl&egrave;te";
$img_com="commentaire";
$img_des="description";
$img_cat="cat&eacute;gorie";
$img_name="nom";
$img_info_stored="Commentaires &eacute;crits dans la base de donn&eacute;e";
$please_login="Merci de vous <a href='login.php'><u>loguer</u></a> pour ajouter un commentaire";
$back_to_thumbs="<b><u>Retour vers les aper&ccedil;us</u></b>";
$back_to_search="<b><u>Retour &agrave; la recherche</u></b>";
$button_next="suivante";
$button_prev="pr&eacute;c&eacute;dente";
$exif_ext_error="Pas de support EXIF dans la version de PHP, d&eacute;sol&eacute;.";
$exif_error="L'image ne contient pas d'informations EXIF!";
$exif_more="plus de d&eacute;tails";
$exif_less="moins de d&eacute;tails";
$detail_header="Photo";
$detail_header1="de";
$detail_header2="dans le dossier<br>";
$php_to_old="PHP < 4.2.0 EXIF d&eacute;sactiv&eacute;!";
$views="vues";
$slideshow="Diaporama"; /* TODO 4 vars */
$seconds="secondes";
$go="Commencer";
$stopslide="Arr&ecirc;ter le diaporamma";
$img_rotate_ok="tourner l'image";
$img_rotating="Probl&egrave;mes de rotation d'image"; // TOC entry
$img_rotating_hint1="Rotation d'image DESACTIVEE! cliquez";
$img_rotating_hint2="pour voir pourquoi";
/* @translators! $img_rotating_hint1 and $img_rotating_hint2 are ONE sentense
later! i.e. "Image rotating DISABLED! click here to see why", so make sure it make sense ;-)

/*#################################################
## login.php
#################################################*/
$login_msg="Merci de vous connecter!";
$login_error="nom d'utilisateur ou mot de passe inconnu.";
$login_name="Nom de l'utilisateur";
$login_pass="Mot de passe";
$login_info="Page de login LinPHA";
$login_request_account_info="Pour ouvrir un compte:";
$login_request_target="Contacter l'Administrateur de LinPHA";
$login_admin_info="Pour effectuer des t&acirc;ches d'administration, merci de vous connecter avec votre compte admin.";
$login_friend_account_info="Si vous avez d&eacute;j&agrave; un compte &quot;invit&eacute;&quot;,
vous pouvez modifier vos donn&eacute;es personnelles.";

/*#################################################
## admin.php
#################################################*/
/* other messages */
$admin_page_header="Administration de LinPHA";
$please_turn_off_msg="Configurez 'Cr&eacute;ation/supression automatique d'aper&ccedil;us' &agrave; OFF lorsque vous ajoutez des photos.<br>
						LinPHA fonctionnera alors 10 fois plus vite :)";
/* left menu */
$logout_msg="sortir";
$welc_msg="bienvenue ";
$stat_msg="Vous &ecirc;tes maintenant autoris&eacute; &agrave; effectuer des t&acirc;ches administratives comme ajouter des <b>commentaires</b> et des descriptions aux images";
$back_to_msg="<b>retour aux photos</b>";
$href_general_conf="Configuration g&eacute;n&eacute;rale";
$href_user_conf="Gestion d'Utilisateur/Groupe";
$href_folder_conf="Gestion des dossiers";
$href_sql="Gestion de BD MySQL";
$href_ftp="Gestion du FTP";
$href_stats="Statistiques";
$href_other_conf="Vignettes EXIF/IPTC";


/* general config */
/* uses also entrys from install.php */
$default_language="Langue par d&eacute;faut";
$default_language_info="<-- Choisissez la langue par d&eacute;faut";
$general_auto_lang="Activer/d&eacute;sactiver la d&eacute;tection automatique de la langue";
$general_auto_lang_info="<-- Choisir la langue de l'interface en fonction du navigateur";
$general_success_msg="! Changements effectu&eacute;s !";

$general_rotate="Activer/d&eacute;sactiver la rotation d'image";
$general_rotate_info="<-- <b>ATTENTION ! Cliquez pour plus d'infos...</b>";
$general_exifinfo="Activer/d&eacute;sactiver TOUT le support EXIF";
$general_exifinfo_info="<-- Activer/d&eacute;activer l'utilisation de la fonction EXIF";
$general_exifdefault="Montrer les informations EXIF par d&eacute;faut";
$general_exifdefault_info="<-- Activer pour montrer les informations EXIF par d&eacute;faut";

$general_exiflevel="Niveau d'informations EXIF";
$general_exiflevel_info="<-- Choisissez le niveau d'informations EXIF";
$exif_low="minimum";
$exif_medium="moyen";
$exif_high="maximum";
$general_filename="Activer/d&eacute;sactiver les noms de fichiers";
$general_filename_info="<-- Activez pour voir le nom de fichier sous l'aper&ccedil;u";
$general_thumb_order="Organiser les aper&ccedil;us par";
$general_thumb_order_info="<-- Choisir l'ordre des aper&ccedil;us, par nom ou par date";
$thumb_order_date="date";
$thumb_order_file="nom de fichier";
$general_autoconf="Cr&eacute;ation / Supression automatique d'aper&ccedil;us";
$general_autoconf_info="<-- Choisissez OFF pour acc&eacute;l&eacute;rer le syst&egrave;me";
$general_counterstat="Activer/d&eacute;sactiver les compteurs";
$general_counterstat_info="<-- ON par d&eacute;faut";
$general_blocking="Temps de blocage des IP en minutes";
$general_blocking_info="<-- L'utilisateur n'est pas consid&eacute;r&eacute; comme nouveau dans les X minutes";
$general_theme="Th&egrave;me de LinPHA";
$general_theme_info="<-- Choisir le th&egrave;me par d&eacute;faut de LinPHA";
$aqua_theme="Eau";
$colored_theme="Color&eacute;";
$neptune_theme="Neptune";
$shadow_theme="Ombre";
$general_hq="Activer/d&eacute;sactiver les aper&ccedil;us et les photos Haute Qualit&eacute;";
$general_hq_info="<-- D&eacute;sactivez pour gagner en rapidit&eacute;";
$submit_button_general="Ecrire les changements";
$button_on_msg="on";
$button_off_msg="off";
$basic_opts="Basique";
$advanced_opts="Avanc&eacute;";
$show_basics="Cliquez pour voir les options de base";
$show_advanced="Cliquez pour voir les options avanc&eacute;es";
$general_printing="Activer/d&eacute;sactiver l'impression pour les invit&eacute;s";
$general_printing_info="<-- On = tout le monde est autoris&eacute; &agrave; imprimer";
$general_slideshow="Activer/d&eacute;sactiver les diaporammas";
$general_slideshow_info="<-- Choisissez on pour autoriser les diaporammas";
$general_mini_preview="Statut/Taille des boutons-images suivant/pr&eacute;c&eacute;dent";
$general_mini_preview_info="<-- D&eacute;sactivez si il y a beaucoup d'utilisateur &agrave; faible bande passante";


/* modify existing user table */
$mod_user_header="Modifie les utilisateurs existants";
$submit_button_mod_user="Modifier utilisateur";
$mod_user_success_msg="! Utilisateur modifi&eacute; !";
$submit_button_delete="Supprimer";
$del_user_success_msg="! Utilisateur supprim&eacute; !";

/* add new user table */
$new_user_header="Ajouter un nouvel utilisateur";
$new_user_name_info="Nom d'utilisateur";
$new_user_pass_info="Mot de passe";
$new_user_mail_info="E-mail";
$new_user_level_info="Niveau d'utilisateur";
$friend="invit&eacute;";
$submit_button_new_user="Ajouter utilisateur";
$new_user_success_msg="! Utilisateur ajout&eacute; !";

/* friends account table */
$friend_user_header="Configuration de compte";
$submit_button_friend_user="Modifier le compte";
$delete_button_friend_user="Supprimer le compte";
$friend_info_msg="Changer les informations de votre compte";

/* add new category table */
$new_cat_header="Ajouter une nouvelle cat&eacute;gorie";
$new_cat_info="nom de la cat&eacute;gorie &agrave; ajouter";
$submit_button_new_cat="Ajouter la cat&eacute;gorie";
$new_cat_success_msg="! Cat&eacute;gorie ajout&eacute;e !";
$mod_cat_header="Modifier / Suprimmer des cat&eacute;gories";
$cat_name_header="Nom de la cat&eacute;gorie";
$cat_mod_header="Modifier les cat&eacute;gories";
$cat_del_header="Supprimer la cat&eacute;gorie";
$submit_button_mod_cat="Modifier";

/* set directory permissions */
$set_dir_perms_header="Choisir les permissions du dossier";
$dir_name="Dossier";
$dir_perms="Permissions";
$action="Action";
$submit_button_folder="Soumettre";
$public="publique";
$friends="ami";
$private="priv&eacute;";
$new_perms_success_msg="! Permissions chang&eacute;es !";

/*#################################################
## build_stats.php (called by admin.php)
#################################################*/
$stats_over_header="Statistiques g&eacute;n&eacute;rales";
$stats_over_photos="Photos dans la base de donn&eacute;e:";
$stats_over_views="Nombre de photos vues:";
$stats_over_albums="Cat&eacute;gories dans la base de donn&eacute;e:";
$stats_over_most_alb_visists="Cat&eacute;gories les plus vues:";
$stats_over_space="Espace disque utilis&eacute; (tous les albums):";
$stats_over_visitors="Visiteurs:";
$stats_over_users="Utilisateurs enregistr&eacute;s:";
$stats_top_ten="Top 10";
$stats_rank="Rang:";
$stats_no_views="Nombre de vues:";
$stats_last_view="Derni&egrave;re vue:";
$stats_alb_name="Nom de la cat&eacute;gorie:";

/*#################################################
## create_all_thumbs.php 
#################################################*/
$parse_first="ANALYSE PREMIERE ETAPE";
$parse_sec="ANALYSE DEUXIEME ETAPE";
$parse_third="ANALYSE TROISIEME ETAPE";
$parse="analyse en cours";
$parsed="analys&eacute;:";
$dirs="sous-r&eacute;pertoires";
$done="TERMINE...";
$not_allowed_msg="D&eacute;sol&eacute;, vous n'&ecirc;tes pas autoris&eacute; &agrave; executer ce script !";
/* these entries are called from within admin.php */
$th_msg="Cr&eacute;&eacute;r tous les aper&ccedil;us en m&ecirc;me temps!";
$table_hint_msg="Cliquez sur d&eacute;marrer pour cr&eacute;&eacute;r tous les aper&ccedil;us dans tous les sous-r&eacute;p&eacute;rtoires maintenant !";
$start_button="D&eacute;marrer !";
$recreate_thumbs_header="Recr&eacute;er tous les aper&ccedil;us";
$recreate_thums_msg="Ceci va RECREER TOUS vos aper&ccedil;us! Toutes les statistiques seront PERDUES!";
$recreate_thums_warning="Confirmez que vous voulez recr&eacute;er tous les aper&ccedil;us, et EFFACER TOUTES LES STATISTIQUES! Cette op&eacute;ration ne peut pas &ecirc;tre annul&eacute;e. Etes-vous s&ucirc;r de vouloir continuer?";

/*#################################################
## Printing, all files
#################################################*/
$print_layout="Choisissez l'interface d'impression";
$images_page="Images/page";
$indexprint="Impression de l'index (28)";
$note="<strong>NOTE:</strong> Vous devez configurer la \"mise en page\" d'impression de votre navigateur
			avant l'impression, pour vous assurer que toutes les photos figureront sur la page !!!";
$print_button="Aper&ccedil;u d'impression";
$href_check_all="Tous s&eacute;lectionner";
$href_clear_all="Annuler tout";
$print_error="ERREUR, aucune image s&eacute;lectionn&eacute;e !!!";
$print_mode="Mode d'impression";
$print_image="Imprimer les images";
$videos_msg="Ne peut pas imprimer les vid&eacute;os";

/*#################################################
## FTP, all files
#################################################*/

/*#################################################
## MySQL backup, most files ;-)
#################################################*/
$mysql_info_header="Syst&egrave;me de management de base de donn&eacute;es LinPHA MySQL ver.";
$mysql_cancel="Annuler";
$mysql_DHTML_hint="L'affichage DHTML est d&eacute;sactiv&eacute; - vous ne verrez rien tant que la sauvegarde n'est pas effectu&eacute;e.";
$mysql_select_all="Tout s&eacute;lectionner";
$mysql_deselect_all="Tout d&eacute;s&eacute;lectionner";
$mysql_create_backup="Cr&eacute;&eacute;r une sauvegarde";
$mysql_back_menu="Retour au menu";
$mysql_table_checks="V&eacute;rification des tables...";
$mysql_table_check="V&eacute;rification de la table";
$mysql_struct_msg="Cr&eacute;ation de la structure pour";
$mysql_in_file_dump_msg="vidage des donn&eacute;es pour";
$mysql_progress="Progression globale:";
$mysql_back_complete="Sauvegarde termin&eacute;e dans";
$mysql_back_menu_long="Retour vers le menu principal de sauvegarde de MySQL";
$mysql_open_warn1="<B>Attention:</B> impossible d'ouvrir ";
$mysql_open_warn2="en &eacute;criture!<BR><BR><I>CHMOD 777</I> sur le dossier pour corriger.";
$mysql_date_msg="Il est maintenant "; // it follows time of the day...
$mysql_last_backup="Derni&egrave;re sauvegarde compl&egrave;te des bases MySQL: ";
$mysql_backup_hint="G&eacute;n&eacute;ralement, sauvegarder plus d'une fois par semaine est inutile.";
$mysql_down_backup="T&eacute;l&eacute;charger les sauvegardes compl&egrave;tes pr&eacute;c&eacute;dentes ";
$mysql_down_backup_part="T&eacute;l&eacute;charger les sauvegardes partielles pr&eacute;c&eacute;dentes ";
$mysql_down_backup_struct="T&eacute;l&eacute;charger les sauvegardes de structures seulement pr&eacute;c&eacute;dentes ";
$mysql_down_backup1="(click-droit, Enregistrer Sous...)";
$mysql_unknown_backup="Derni&egrave;re sauvegarde des bases MySQL: <I>inconnu</I>";
$mysql_href_recom="Cr&eacute;&eacute;r une nouvelle sauvegarde compl&egrave;te, insertions compl&egrave;tes (recommend&eacute;)";
$mysql_href_standard="Cr&eacute;&eacute;r une nouvelle sauvegarde compl&egrave;te, insertions standard (plus petit)";
$mysql_href_partial="Cr&eacute;&eacute;r une nouvelle sauvegarde partielle, tables s&eacute;lectionn&eacute;es seulement (avec les insertions compl&egrave;tes)";
$mysql_href_structure="Cr&eacute;&eacute;r une nouvelle sauvegarde compl&egrave;te, structure des tables seulement";
$mysql_days_last="jours";
$mysql_hours_last="heures";
$mysql_min_last="minutes";
$mysql_sec_last="secondes";
$ago="auparavant"; // reads in context "some days ago" //WARNING: this syntax cannot translate in french !
$backup="Sauvegarder";
$restore="Restaurer";
$optimize="Optimiser";
$optimize_tables="Optimisation des tables";
$opt_table_name="Nom de la table";
$opt_table_check="V&eacute;rification de la table";
$opt_table_optimize="Optimisation de la table";
$opt_table_msg="Type de message";
$opt_start_msg="D&eacute;but de la v&eacute;rification et de l'optimisation de toutes les tables de la BD";
$fullback_hint_msg="Si bvous avez plusieurs bases, choisissez une m&eacute;thode de sauvegarde <b>partielle</b> svp";
$restore_last_fullback="Restaurer la derni&egrave;re sauvegarde <b>compl&egrave;te</b>:";
$restore_last_partback="Restaurer la derni&egrave;re sauvegarde <b>partielle</b>:";
$restore_error="ERREUR d'ouverture du fichier de sauvegarde. Fichier non trouv&eacute;!";
$restore_success="Restauration r&eacute;ussie!";

/*########################################################################
### FILEMANGER
########################################################################*/

define('STR_ACCESS_DENIED','<H1>acc&egrave;s refus&eacute;</H1> vous n\'avez pas la permission d\'acc&eacute;der &agrave; ce r&eacute;pertoire');
define('STR_BACK',	'retour');
define('STR_LESS',	'moins');
define('STR_MORE',	'plus');
define('STR_LINES',	'lignes');
define('STR_FUNCTIONLIST', 'Liste de fonction');
define('STR_EDIT',	'&eacute;diter');
define('STR_VIEW',	'voir');
define('STR_RENAME',	'renommer');
define('STR_MKDIR',		'cr&eacute;er le r&eacute;pertoire');
define('STR_DELETE',	'effacer');
define('STR_BOTTOM',	'bas');
define('STR_TOP',		'haut');
define('STR_FILENAME',	   'nom de fichier');
define('STR_FILESIZE',	   'taille');
define('STR_LASTMODIFIED', 'derni&egrave;re modification');
define('STR_SUM', '<B>%s</B> octet(s) dans <B>%s</B> objet(s)');
define('STR_CREATEDIRLEGEND', 'cr&eacute;&eacute;r un r&eacute;pertoire');
define('STR_CREATEDIR',       'nom du r&eacute;pertoire &agrave; cr&eacute;&eacute;r:');
define('STR_CREATEDIRBUTTON', 'cr&eacute;&eacute;r un r&eacute;pertoire');
define('STR_RENAMELEGEND',       'renommer');
define('STR_RENAMEENTERNEWNAME', 'entrer le nouveau nom de %s:');
define('STR_RENAMEBUTTON',       'renommer');
define('STR_ERROR_DIR','Erreur: impossible de lire le contenu du r&eacute;pertoire');
define('STR_AUDIO',            'audio');
define('STR_COMPRESSED',       'compress&eacute;');
define('STR_EXECUTABLE',       'ex&eacute;cutable');
define('STR_IMAGE',            'image');
define('STR_SOURCE_CODE',      'code source');
define('STR_TEXT_OR_DOCUMENT', 'texte ou document');
define('STR_WEB_ENABLED_FILE', 'fichier web');
define('STR_VIDEO',            'vid&eacute;o');
define('STR_DIRECTORY',        'r&eacute;pertoire');
define('STR_PARENT_DIRECTORY', 'r&eacute;pertoire parent');
define('STR_EDITOR_SAVE',      'sauver le fichier');
define('STR_EDITOR_SAVE_ERROR','le fichier <I>%s</I> est en lecture seule ou n\'existe pas');
define('STR_EDITOR_SAVE_ERROR_WRONG_VALUE','en &eacute;ditant le fichier <I>%s</I>, vous avez donn&eacute; la valeur suivante &agrave; la position #%s: %s.');
define('STR_EDITOR_SAVE_ERROR_HEX_VALUE_NEEDED','suivant les param&egrave;tres, vous devez donner une valeur hexad&eacute;cimale positive entre 00 et FF.');
define('STR_EDITOR_SAVE_ERROR_DEC_VALUE_NEEDED','suivant les param&egrave;tres, vous devez donner une valeur d&eacute;cimale positive entre 0 et 255.');
define('STR_FILE_UPLOAD_NAVI_HINT', 'Navigation rapide');
define('STR_FILE_UPLOAD_DRIVES', 'Lecteurs:');
define('STR_FILE_UPLOAD', 'envoi');
define('STR_FILE_UPLOAD_MAIN', 'chargement');
define('STR_FILE_UPLOAD_DISABLED', 'd&eacute;sol&eacute;, l\'envoi de fichier est d&eacute;sactiv&eacute; dans php.ini');
define('STR_FILE_UPLOAD_DESC','Choisissez les fichiers que vous voulez envoyer. Choisissez l\'action &agrave; accomplir lors d\'un envoi r&eacute;ussi.');
define('STR_FILE_UPLOAD_FILE','Fichier');
define('STR_FILE_UPLOAD_TARGET','Envoi de fichier(s) vers');
define('STR_FILE_UPLOAD_ACTION','quand l\'envoi est termin&eacute; faire:');
define('STR_FILE_UPLOAD_NOTHING','ne rien faire');
define('STR_FILE_UPLOAD_DROPFILE','effacer le fichier envoy&eacute; lorsque l\'action s&eacute;l&eacute;ctionn&eacute;e est termin&eacute;e');
define('STR_FILE_UPLOAD_MAXFILESIZE','La taille maximum autoris&eacute;e (chaque fichier!) fix&eacute;e en ce moment dans php.ini est ');
define('STR_FILE_UPLOAD_ERROR',        'Erreur: Impossible de d&eacute;placer le fichier %s dans le r&eacute;pertoire %s');
define('STR_FILE_UPLOAD_CHDIR_ERROR',  'Erreur: Impossible de naviguer (chdir) vers le r&eacute;pertoire %s. Fichier en traitement: %s');
define('STR_FILE_UPLOAD_UNLINK_ERROR', 'Erreur: Impossible d\'effacer %s apr&egrave;s traitement.');
define('STR_FILE_UPLOAD_ERROR_FILE_EXCEEDS_INI_SIZE', 'Erreur: Le fichier envoy&eacute; %s exc&egrave;de la directive upload_max_filesize dans php.ini - %s');
define('STR_FILE_UPLOAD_ERROR_FILE_EXCEEDS_FORM_SIZE','Erreur: La taille du fichier envoy&eacute; %s exc&egrave;de les param&egrave;tres de HTML FORM');
define('STR_FILE_UPLOAD_ERROR_FILE_PARTIAL',          'Erreur: Le fichier envoy&eacute; %s a &eacute;t&eacute; partiellement re&ccedil;u');

/*########################################################################
### BIG FAT NOTICE !
### AS OF LINPHA 0.9.0 ALL NEW ENTRIES ARE PLACED BELOW THIS MSG
### DEVELOPERS PLEASE MAKE USE OF THE "LANGUPDATE.PHP" SCRIPT!
########################################################################*/

$pano_view="Vue panoramique"; /* (img_view.php) -- new [panorama view] href  */
$close_win="Fermer la fen&ecirc;tre"; /* (various files) -- javascript close window */
$nav_hint="Utiliser la souris ou les fl&egrave;ches pour naviguer svp!"; /* (image_panorama_view.php) --  */
$pano_view_of="Vue panormaique de l'image"; /* (image_panorama_view.php) -- header message */
$php_basedir_check_msg="V&eacute;rification PHP de \"open_basedir\"..."; /* (sec_stage_install.php) --  */
$req_basedir_fail="NON"; /* (sec_stage_install.php) -- YES, it\'s really just no/nein ;-) */
$basedir_active_msg="Probl&egrave;me, vous avez configur&eacute; PHP pour utiliser \"open_basedir\" !<br>"; /* (sec_stage_install.php) --  */
$basedir_active_msg1="+ Linpha va utiliser GD lib pour cr&eacute;&eacute;r les aper&ccedil;us, cependant quelques probl&egrave;mes peuvent survenir (Gestionnaire de fichier et autres)<br>"; /* (sec_stage_install.php) --  */
$basedir_active_msg2="+ Si possible, ne pas fixer \"open_basedir\" dans PHP.ini svp"; /* (sec_stage_install.php) --  */
$gd_basedir_err="+ Si possible, ne pas fixer \"open_basedir\" dans PHP.ini ou recompiler PHP avec le support de GD lib (--with-gd)"; /* (sec_stage_install.php) --  */
$extract_tar_gz="extraire une archive *.tar.gz (UNIX)"; /* (index.php) -- filemanger upload select */
$extract_tar_bz2="extraire une archive *.tar.bz2  (UNIX)"; /* (index.php) --  */
$extract_gz="d&eacute;zipper avec gzip (UNIX)"; /* (index.php) -- filemanger upload select */
$extract_zip="d&eacute;zipper avec unzip (UNIX)"; /* (index.php) -- filemanger upload select */
$extract_winzip="d&eacute;zipper avec pkzip (WINDOWS WINZIP)"; /* (index.php) -- filemanger upload select */
$new_group_success_msg="! Groupe ajout&eacute; !"; /* (admin.php) -- redirect message */
$mod_group_success_msg="! Groupe modifi&eacute; !"; /* (admin.php) -- redirect message */
$del_group_success_msg="! Groupe effac&eacute; !"; /* (admin.php) -- redirect message */
$mod_cat_success_msg="! Categorie modifi&eacute;e !"; /* (admin.php) -- redirect message */
$del_cat_success_msg="! Categorie effac&eacute;e !"; /* (admin.php) -- redirect message */
$href_groups="Cliquer pour ajouter ou modifier un groupe"; /* (build_user_conf/build_folder_conf) -- href message to group management */
$del_warning="ATTENTION: Vous devez vous authentifier avec votre nouveau compte !!!"; /* (build_user_conf.php) -- java popup to notify admin user */
$href_to_folder_conf="retour &agrave; la gestion des dossiers"; /* (build_user_conf.php) -- navi href  */
$href_to_user_conf="retour &agrave; la gestion des utilisateurs"; /* (build_user_conf.php) -- navi href  */
$header_new_group="Ajouter un nouveau groupe"; /* (build_user_conf.php) -- table header */
$header_groupname="Nom du groupe"; /* (build_user_conf.php) -- table header */
$button_addgroup="Ajouter un groupe"; /* (build_user_conf.php) -- submit button */
$header_mod_group="Modifier/effacer un groupe"; /* (build_user_conf.php) -- table header */
$mod_group_header="Modifier un groupe"; /* (build_user_conf.php) -- table header */
$del_group_header="Effacer un groupe"; /* (build_user_conf.php) -- table header */
$search_to_short="Chaine de recherche trop courte, doit &ecirc;tre d'au moins 2 caract&egrave;res!"; /* (search.php) --  */
$general_thumb_size="Taille des aper&ccedil;us"; /* (build_general_conf.php) -- thumbsize stuff */
$general_thumb_size_info="<-- Fixer la taille maxi des aper&ccedil;us"; /* (build_general_conf.php) -- thumbsize stuff */
$general_thumb_border="Activer/d&eacute;sactiver la bordure des aper&ccedil;us"; /* (build_general_conf.php) -- thumb border stuff */
$general_thumb_border_info="<-- activer pour ajouter une bordure aux aper&ccedil;us"; /* (build_general_conf.php) -- thumb border stuff */
$inst_thumbsize_header="Choisissez la taille des aper&ccedil;us"; /* (third_stage_install.php) -- thumb size stuff */
$inst_thumbborder_header="Param&egrave;tres de bordure"; /* (third_stage_install.php) -- thumb border stuff */
$inst_thumbborder_enable="activer la bordure d'image"; /* (third_stage_install.php) -- thumb border checkbox msg */
$inst_thumbborder_disable="d&eacute;sactiver la bordure d'image"; /* (third_stage_install.php) -- thumb border checkbox msg */
$safemode_active_msg="Probl&egrave;me, vous avez configur&eacute; PHP pour utiliser les restrictions de \"save_mode\"!<br>"; /* (sec_stage_install.php) --  */
$safemode_active_msg2="+ Si possible, d&eacute;sactivez \"save_mode\" dans PHP.ini"; /* (sec_stage_install.php) --  */
$general_anon_post="Autoriser/interdire les envois anonymes"; /* (build_general_conf.php) --  */
$general_anon_post_info="<--Une personne non connect&eacute; est autoris&eacute; &agrave; ajouter des commentaires"; /* (build_general_conf.php) --  */
$stats_over_comment="Commentaires envoy&eacute;s"; /* (build_stats.php) --  */
$top10_downs_href="montrer le top 10 des t&eacute;l&eacute;chargements"; /* (build_stats.php) --  */
$top10_views_href="montrer le top 10 des visualisation"; /* (build_stats.php) --  */
$stats_head_downs="Top 10 des t&eacute;l&eacute;chargements"; /* (build_stats.php) --  */
$no_downloads="Nombre de t&eacute;l&eacute;chargements"; /* (build_stats.php) --  */
$general_anon_download="Activer/d&eacute;sactiver les t&eacute;l&eacute;chargements anonymes"; /* (build_genera_config.php) --  */
$general_anon_download_info="<-- Montrer/masquer le lien de t&eacute;l&eacute;chargement pour les images"; /* (build_general_config.php) --  */
$seach_multiple_select_use="Utilisation de s&eacute;lection multiple"; /* (search.php) --  */
$search_and="ET"; /* (search.php) --  */
$search_or="OU"; /* (search.php) --  */
$search_categories="Cat&eacute;gories"; /* (search.php) --  */
$search_with_available_filters="Avec les filtres disponibles"; /* (search.php) --  */
$search_select_album="Selectionner l'album"; /* (search.php) --  */
$search_date_from_to="Date de / &agrave;"; /* (search.php) --  */
$search_combination_and_or="Avec une combinaison de ET et OU"; /* (search.php) --  */
$new_user_new_password="Nouveau mot de passe"; /* (build_user_conf.php) --  */
$new_user_error4="Le nom d'utilisateur ne peut &ecirc;tre vide"; /* (admin.php) --  */
$new_user_error5="Ce nom d'utilisateur existe d&eacute;j&agrave;"; /* (admin.php) --  */
$new_user_error1="L'ancien mot de passe est incorrect"; /* (admin.php) --  */
$new_user_error2="Le nouveau mot de passe n'est pas le m&ecirc;me que celui retap&eacute;"; /* (admin.php) --  */
$new_user_error3="L'email est incorrect"; /* (admin.php) --  */
$new_user_old_password="Ancien mot de passe"; /* (admin.php) --  */
$new_user_retype_password="Re-saisissez le nouveau mot de passe"; /* (admin.php) --  */
$select_db_header="S&eacute;lectionner le type de base de donn&eacute;es svp"; /* (sec_stage_install.php) --  */
$mysql_info="Choisissez ceci pour acc&eacute;der &agrave; une base MySQL"; /* (sec_stage_install.php) --  */
$postgres_info="Choisissez ceci pour acc&eacute;der &agrave; une base PostgreSQL. Veuillez consulter"; /* (sec_stage_install.php) -- reads: ...Please see info */
$login_autologin="Autologin"; /* (toc.php) --  */
$login_autologin_user="Information utilisateur Autologin"; /* (toc.php) --  */
$toc_timer="Minuteur"; /* (toc.php) --  */
$general_autologin="Activer/d&eacute;sactiver l'autologin"; /* (build_general_conf.php) --  */
$general_autologin_info="<-- Activer cette option pour utiliser l'autologin"; /* (build_general_conf.php) --  */
$general_timer="Activer/d&eacute;sactiver le minuteur"; /* (build_general_conf.php) --  */
$general_timer_info="<-- Activer la sortie de l'analyseur dans le bas de page"; /* (build_general_conf.php) --  */
$login_autlogin="Autologin"; /* (login.php) --  */
$lostpw_title="Mot de passe perdu"; /* (login.php) --  */
$lostpw_question="Vous avez perdu votre mot de passe?"; /* (login.php) --  */
$lostpw_type_user_or_email="Entrer votre nom d'utilisateur OU votre adresse email Linpha"; /* (login.php) --  */
$lostpw_email1="Quelqu'un a utilis&eacute; la fonction de mot de passe perdu. Si ce n'&eacute;tait pas vous, ignorez ce message et rien n'arrivera &agrave; votre mot de passe. Si c'&eacute;tait vous, entrez ce code dans le champ demand&eacute;:"; /* (login.php) --  */
$lostpw_email1_part2="(Attention: Ceci n'est PAS votre nouveau mot de passe!)"; /* (login.php) --  */
$lostpw_email1_part3="Votre Administrateur-Linpha"; /* (login.php) --  */
$lostpw_email_error="Erreur: l'E-Mail n'a pas pu &ecirc;tre envoy&eacute;. Contactez l'Administrateur."; /* (login.php) --  */
$lostpw_error_nothing_found="D&eacute;sol&eacute;, aucun nom d'utilisateur ou de mot de passe r&eacute;pondant &agrave; vos crit&egrave;res n'a &eacute;t&eacute; trouv&eacute;."; /* (login.php) --  */
$lostpw_email_sent="Un E-Mail vous a &eacute;t&eacute; envoy&eacute;."; /* (login.php) --  */
$lostpw_should_receive="Vous devriez le recevoir dans une minute. Entrez le code de cet E-Mail dans ce champ:"; /* (login.php) --  */
$lostpw_go_back="Revenir"; /* (login.php) --  */
$lostpw_email2="Le mot de passe a bien &eacute;t&eacute; chang&eacute;. Votre nouveau mot de passe est:"; /* (login.php) --  */
$lostpw_email2_part2="Vous pouvez le changer ult&eacute;rieurement en utilisant le lien \"mes param&egrave;tres\"."; /* (login.php) --  */
$lostpw_new_password="Nouveau mot de passe"; /* (login.php) --  */
$lostpw_successfully_changed="Le mot de passe a bien &eacute;t&eacute; chang&eacute;, vous devriez recevoir un email dans une minute avec le nouveau mot de passe."; /* (login.php) --  */
$lostpw_error_wrong_code="D&eacute;sol&eacute;, c'est incorrect."; /* (login.php) --  */
$lostpw_enter_correct_code="Entrez le code correct de l'email dans ce champ:"; /* (login.php) --  */
$lang_plugins['plugins']="Plugins LinPHA"; /* (admin.php) --  */
$lang_plugins['watermark']="Filigrane"; /* (admin.php, toc.php) --  */
$lang_plugins['benchmark']="Test"; /* (admin.php, toc.php) --  */
$lang_plugins['sql']="Gestion Base de donn&eacute;es"; /* (admin.php, toc.php) --  */
$lang_plugins['active_plugins']="Plugins Actifs"; /* (admin.php) --  */
$lang_plugins['enabled']="Activ&eacute;"; /* (plugins.php) --  */
$lang_plugins['disabled']="D&eacute;sactiv&eacute;"; /* (plugins.php) --  */
$lang_plugins['update']="Mise &agrave; jour"; /* (plugins.php) --  */
$lang_plugins['plugins_updated']="Plugins mis &agrave; jour"; /* (admin.php, plugins.php) --  */
$wm_wm_man="Gestion du filigrane "; /* (watermark.php) --  */
$wm_disable="D&eacute;sactiver le filigrane "; /* (watermark.php) --  */
$wm_change_example_img="Changez l'image d'exemple "; /* (watermark.php) --  */
$wm_no_input_files_found="Pas de fichier d'entr&eacute;e trouv&eacute; "; /* (watermark.php) --  */
$wm_image_quality="Qualit&eacute; de l'image (seulement pour les aper&ccedil;us) "; /* (watermark.php) --  */
$wm_enable_text="Activer: Texte "; /* (watermark.php) --  */
$wm_text="Texte "; /* (watermark.php) --  */
$wm_font="Police "; /* (watermark.php) --  */
$wm_fontsize="Taille de police "; /* (watermark.php) --  */
$wm_fontcolor="Couleur de police "; /* (watermark.php) --  */
$wm_align="Aligner "; /* (watermark.php) --  */
$wm_pos_hor="Position horizontale "; /* (watermark.php) --  */
$wm_pos_ver="Position verticale "; /* (watermark.php) --  */
$wm_height="Hauteur du champ texte "; /* (watermark.php) --  */
$wm_width="Largeur du champ texte "; /* (watermark.php) --  */
$wm_shadow_size="Taille de l'ombrage "; /* (watermark.php) --  */
$wm_shadow_color="Couleur de l'ombrage "; /* (watermark.php) --  */
$wm_enable_image="Activer: Image"; /* (watermark.php) --  */
$wm_available_images="Images disponibles"; /* (watermark.php) --  */
$wm_no_images_found="Pas d'images trouv&eacute;es"; /* (watermark.php) --  */
$wm_dissolve="Dissoudre"; /* (watermark.php) --  */
$wm_preview="Aper&ccedil;us"; /* (watermark.php) --  */
$wm_linebreak="Pour le saut de ligne:"; /* (watermark.php) --  */
$wm_enable_shadow="Activer l'ombrage"; /* (watermark.php) --  */
$wm_enable_rectangle="Activer le rectangle"; /* (watermark.php) --  */
$wm_rectangle_color="Couleur"; /* (watermark.php) --  */
$wm_enable_ext_shadow="Activer l'ombrage &eacute;tendu"; /* (watermark.php) --  */
$wm_status="Statut"; /* (watermark.php) --  */
$wm_enabled="activ&eacute;"; /* (watermark.php) --  */
$wm_disabled="d&eacute;sactiv&eacute;"; /* (watermark.php) --  */
$wm_restore_to="R&eacute;tablir vers"; /* (watermark.php) --  */
$wm_inital_settings="param&egrave;tres initiaux"; /* (watermark.php) --  */
$wm_add_more_examples="Vous pouvez ajouter plus d'images d'exemple dans votre r&eacute;pertoire linpha dans le dossier"; /* (watermark.php) --  */
$wm_example="Exemple"; /* (watermark.php) --  */
$wm_shadow_fontsize="Taille de la police d'ombrage"; /* (watermark.php) --  */
$wm_settings_for_both="Param&egrave;tres pour les images et le texte"; /* (watermark.php) --  */
$wm_center="centr&eacute;"; /* (watermark.php) --  */
$wm_north="en haut"; /* (watermark.php) --  */
$wm_northeast="en haut &agrave; droite"; /* (watermark.php) --  */
$wm_northwest="en haut &agrave; gauche"; /* (watermark.php) --  */
$wm_south="en bas"; /* (watermark.php) --  */
$wm_southeast="en bas &agrave; droite"; /* (watermark.php) --  */
$wm_southwest="en bas &agrave; gauche"; /* (watermark.php) --  */
$wm_east="&agrave; droite"; /* (watermark.php) --  */
$wm_west="&agrave; gauche"; /* (watermark.php) --  */
$bm_file_err="Erreur, pas de fichier sp&eacute;cifi&eacute;";
$bm_var_err="Erreur, v&eacute;rifier les variables d'entr&eacute;e svp";
$bm_notfound_err="Erreur, fichier non trouv&eacute;";
$bm_noimg_err="Erreur, le fichier n'est pas une image";
$bm_tmpfile_err="Erreur en cr&eacute;ant le fichier image temporaire";
$bm_tmpfile_warn="Attention: l'image temporaire ne peut &ecirc;tre effac&eacute;e";
$bm_time_total="Temps total d'ex&eacute;cution: ";
$bm_img_sec="Images par seconde: ";
$bm_avg_img="Temps moyen pour chaque image (passer la souris pour mettre &agrave; jour l'image): ";
$bm_qual_size="Qualit&eacute;/Taille";
$bm_quality="Qualit&eacute;: ";
$bm_height="Hauteur: ";
$bm_width="Largeur: ";
$bm_size="Taille de limage: ";
$bm_create = "Cr&eacute;ation d'un benchmark avec l'utilitaire de conversion";
$bm_interval = "interval";
$bm_calc = "Calcul";
$bm_img = "Images";
$bm_inloop="Boucle en cours";
$bm_qual_range="Gamme de qualit&eacute;: ";
$bm_size_range="Gamme de taille (hauteur seulement): ";
$bm_repeats="R&eacute;p&eacute;titions: ";
$bm_con_util="S&eacute;lectionner l'outil de conversion svp: ";
$bm_current_settings="Param&egrave;tres courants"; /* (benchmark.php) --  */
$bm_preview="Aper&ccedil;u"; /* (benchmark.php) --  */
$bm_save_settings="Sauvez ces param&egrave;tres"; /* (benchmark.php) --  */
$wm_addexamples="Filigrane: Ajouter plus d'images exemple"; /* (watermark.php) --  */
$wm_addimg="Filigrane: Ajouter plus d'images avec filigrane"; /* (watermark.php) --  */
$wm_addfont="Filigrane: Ajouter plus de polices"; /* (watermark.php) --  */
$wm_colorsetting="Filigrane: param&egrave;tres couleur"; /* (watermark.php) --  */
$comment_hint="ASTUCE: cliquer sur l'image du haut ou du bas pour faire d&eacute;filer l'album"; /* (linpha_comments.php) --  */
$comment_end="Fin de l'album"; /* (linpha_comments.php) --  */
$comment_beginning="D&eacute;but de l'album"; /* (linpha_comments.php) --  */
$comment_back="retour &agrave; l'image"; /* (linpha_comments.php) --  */
$comment_edit_img="Editer categorie/commentaire"; /* (linpha_comments.php) --  */
$comment_change_img_details="Changer les d&eacute;tails de l'image"; /* (linpha_comments.php) --  */
$comment_last_comments="Derniers commentaires"; /* (linpha_comments.php) --  */
$comment_comment_by="commentaire de"; /* (linpha_comments.php) --  */
$category_delete_warning="Attention: Les cat&eacute;gories d&eacute;j&agrave; attribu&eacute;es aux images sont perdues"; /* (build_category_conf.php) --  */
$pass_2_short="ERREUR, le mot de passe doit comporter au moins 3 caract&egrave;res..."; /* (various) --  */
$album_edit="Editer les commentaires de l'album"; /* (linpha_comments.php) --  */
$album_details="D&eacute;tails de l'album"; /* (linpha_comments.php) --  */
$wm_save_note="NOTE: Les filigranes ne sont PAS visibles pour utilisateurs enregistr&eacute;s!. Vous DEVEZ d'abord vous d&eacute;logger (devenir invit&eacute;) pour voir vos filigranes en navigant dans LinPHA!"; /* (watermark.php) --  */
$lang_plugins['guestbook']="Livre d'or"; /* (admin.php) --  */
$print_low_quality="Basse qualit&eacute;"; /* (printing_view.php) --  */
$print_high_quality="Haute qualit&eacute; (slow!)"; /* (printing_view.php) --  */
$gb_title="Livre d'or LinPHA";
$gb_sign="Livre d'or LinPHA! Ajoutez un nouveau message";
$gb_from="Lieu";
$gb_from_no="Pas de lieu sp&eacute;cifi&eacute;";
$gb_pages="page(s)";
$gb_messages="messages dans le livre d'or";
$gb_msg_error="D&eacute;sol&eacute;, le Nom et le Commentaire ne peuvent &ecirc;tre vides";
$gb_new_msg="Ajouter un nouveau message";
$gb_name="Nom";
$gb_email="Email";
$gb_hp="Homepage";
$gb_country="D'o&ugrave; venez-vous (Pays)";
$gb_header="Livre d'or LinPHA";
$gb_opts="Options du livre d'or";
$gb_rows="Nombre de commentaires par page";
$gb_anon="Autoriser les commentaires anonymes dans le livre d'or";
$gb_order="Classer les commentaires";
$wm_resize="Toujours mettre &agrave; l'&eacute;chelle les filigranes &agrave; X% de la taille de l'image"; /* (watermark.php) --  */
$wm_help_and_descr="Aide et description"; /* (watermark.php) --  */
$folder_remove_hint="Si tout s'est bien d&eacute;roul&eacute;, vous devriez maintenant effacer le sous-r&eacute;pertoire /install (par s&eacute;curit&eacute;)..."; /* (forth_stage_install.php) --  */
$add_alb_com="Ajouter un commentaire &agrave; l'Album"; /* (img_view.php) --  */
$add_img_com="Ajouter un commentaire &agrave; l'Image"; /* (img_view.php) --  */
$album_com="Commentaire sur l'Album"; /* (*_stage_album.php) --  */
$formatting_possibilities="Balises de formatage HTML"; /* (various) --  */
$stat_cache_elements="El&eacute;ments en cache"; /* (build_stats.php) --  */
$stat_cache_first="Nouveaux El&eacute;ments en cache"; /* (build_stats.php) --  */
$stat_cache_hits="Nombre d'appel d'&eacute;l&eacute;ments du cache"; /* (build_stats.php) --  */
$stat_cache_hits_max="Nombre Max d'appel d'&eacute;l&eacute;ments du cache (pour une image)"; /* (build_stats.php) --  */
$stat_cache_hits_avg="Moyenne d'utilisation du cache"; /* (build_stats.php) --  */
$stat_cache_size="Taille du cache"; /* (build_stats.php) --  */
$stat_cache_convert_time="Temps moyen d'acc&egrave;s au cache"; /* (build_stats.php) --  */
$stat_cache_size="Taille du cache utilis&eacute;e"; /* (build_stats.php) --  */
$cache_options="Options des images en cache";
$cache_max_size="Taille Max du cache en octets (0 = illimit&eacute;s)";
$path_2_cache="R&eacute;pertoire du cache (par d&eacute;faut, dans /sql/cache)";
$cache_optimize="Optimiser/nettoyer les donn&eacute;es en cache"; 
$cache_maintain="Maintenance des images en cache";
$cache_opt_msg="!! Cache optimis&eacute; !!";
$lang_plugins['cache']="Images en cache"; /* () --  */
$stat_cache_title="Statistiques des images en cache"; /* (cache.php) --  */
$bm_saved="Pr&eacute;f&eacute;rences sauvegard&eacute;es"; /* (admin.php) --  */
$cache_optimize_by_size="Effacer tous les &eacute;l&eacute;ments en cache dont la taille (en kb) n'ex&egrave;de pas"; /* (cache.php) --  */
$cache_optimize_by_date="Effacer les &eacute;l&eacute;ments en cache non utilis&eacute; depuis x jours :"; /* (cache.php) --  */
$elements_rem="El&eacute;ments &eacute;ffac&eacute;s"; /* (cache.php) --  */
$general_anon_album_downs="Autoriser/interdire le t&eacute;l&eacute;chargement anonyme de l'album au format zip"; /* (build_general_conf.php) --  */
$general_anon_album_downs_info="<-- Le t&eacute;l&eacute;chargement de l'album zipp&eacute; est autori&eacute;"; /* (build_general_conf.php) --  */
$general_download_speed="Fixer une limite de t&eacute;l&eacute;chargement en kb/sec"; /* (build_general_conf.php) --  */
$general_download_speed_info="<-- Vitesse maximum du t&eacute;l&eacute;chargement de l'album"; /* (build_general_conf.php) --  */
$general_navigation="Autoriser/interdire la barre de navigation"; /* (build_general_conf.php) --  */
$general_navigation_info="<-- Active la barre de navigation sur la page des apper&ccedil;us"; /* (build_general_conf.php) --  */
$toc_navigation="Autoriser/interdire la barre de navigation"; /* (doc/) --  */
$toc_zip_download="Autoriser/interdire le t&eacute;l&eacute;chargement anonyme de l'album"; /* (doc/) --  */
$toc_albdownlimit="Vitesse max du t&eacute;l&eacute;chargement"; /* (doc/) --  */
$choose_zips_msg="Selectionner les images &agrave; t&eacute;l&eacute;charger"; /* (build_zip_view.php) --  */
$zip_button="T&eacute;l&eacute;charger l'archive"; /* (build_zip_view.php) --  */
$type_of_archive="S&eacute;lectionner le type de l'archive"; /* (build_zip_view.php) --  */
$create_tar="cr&eacute;er une archive tar"; /* (build_zip_view.php) --  */
$create_tgz="cr&eacute;er une archive tar.gz"; /* (build_zip_view.php) --  */
$create_bz2="cr&eacute;er une archive tar.bz2"; /* (build_zip_view.php) --  */
$create_zip="cr&eacute;er une archive zip"; /* (build_zip_view.php) --  */
$create_rar="cr&eacute;er une archive rar"; /* (build_zip_view.php) --  */
$menumsg['advanced']="Options Avanc&eacute;es"; /* () --  */
$menumsg['printmode']="Mode d'impression"; /* () --  */
$menumsg['printprobs']="Impression impossible?"; /* () --  */
$menumsg['downloadmode']="Mode de t&eacute;l&eacute;chargement"; /* () --  */
$menumsg['mailmode']="Mode Mail"; /* () --  */
$menumsg['addcomment']="Ajouter un commentaire &agrave; l'album"; /* () --  */
$menumsg['delcomment']="Effacer un commentaire de l'album"; /* () --  */
$menumsg['editcomment']="Editer le commentaire de l'album"; /* () --  */
$album_up="mis &agrave; jour"; /* (album_comment.php) --  */
$album_ins="insr&eacute;r&eacute;"; /* (album_comment.php) --  */
$mail_link="liste de diffusion"; /* (header.php) --  */
$mail_title="Liste de diffusion LinPHA"; /* (mail.php) --  */
$mail_send_link="Envoyer un mail &agrave; la liste"; /* (mail.php) --  */
$mail_return_address="Adresse de r&eacute;ponse:"; /* (mail.php) --  */
$mail_block="Taille limite du message:"; /* (mail.php) --  */
$mail_block_help="# Imposer une limite pour &eacute;viter un timeout PHP."; /* (mail.php) --  */
$mail_options="Options de la liste de diffusion"; /* (mail.php) --  */
$mail_go_back="Retour"; /* (various mail plugin files) --  */
$mail_form_title="Message email"; /* (mail_form.php) --  */
$mail_form_subject="Sujet"; /* (mail_form.php) --  */
$mail_form_msg="Message:"; /* (mail_form.php) --  */
$mail_total_sent="Total d'email(s) envoy&eacute;(s):"; /* (mail_form.php) --  */
$mail_subscribe="Abonner"; /* (mail_users.php) --  */
$mail_unsubscribe="Se d&eacute;sabonner"; /* (mail_users.php) --  */
$mail_activate="Activer"; /* (mail_users.php) --  */
$mail_user_name="Votre nom:"; /* (mail_users.php) --  */
$mail_user_email="Votre adrese email:"; /* (mail_users.php) --  */
$mail_user_email_confirm="Confirmer l'email:"; /* (mail_users.php) --  */
$mail_user_code="Code d'activation:"; /* (mail_users.php) --  */
$mail_user_code_sent="Un email d'activation &agrave;  vous a &eacute;t&eacute; envoy&eacute;."; /* (mail_users.php) --  */
$mail_user_code_subject="Activation de la  liste de diffusion LinPHA"; /* (mail_users.php) --  */
$mail_user_activated="Votre compte est activ&eacute;!"; /* (mail_users.php) --  */
$mail_user_activate_error="Une erreur s'est produite lors de l'activation de votre compte!"; /* (mail_users.php) --  */
$mail_user_email_not_found="n'a pas &eacute;t&eacute; trouv&eacute;(e) dans la liste de diffusion."; /* (mail_users.php) --  */
$mail_user_remove_ok="Vous avez &eacute;t&eacute; supprim&eacute; de la liste de diffusion."; /* (mail_users.php) --  */
$mail_user_remove_fail="ne peut pas &ecirc;tre supprim&eacute;(e) de la liste de diffusion."; /* (mail_users.php) --  */
$mail_user_empty="Remplisser tous les champs."; /* () --  */
$mail_user_no_match="les emails ne correspondent pas."; /* () --  */
$mail_user_exists="cette email existe d&eacute;j&agrave; dans notre liste."; /* (mail_users.php) --  */
$lang_plugins['mail']="Liste de diffusion"; /* (admin.php) --  */
$mail_activate_message="%s,\n\nEntrez le code d'activation : \n\n%s\n\nMerci\n"; /* (submit_users.php) -- dont delete the %s and the \n ! */
$mail_hint="Attention"; /* (mail.php) --  */
$mail_user_permission="Tous les utilisateurs du groupe mail doivent &ecirc;tre autoris&eacute;s &agrave; envoyer un message."; /* (mail.php) --  */
$mail_current_subscribers="Liste des abonn&eacute;s"; /* (mail.php) --  */
$mail_name="Nom"; /* (mail.php) --  */
$mail_mail="Email"; /* (mail.php) --  */
$mail_subscribing_date="Abonn&eacute; depuis"; /* (mail.php) --  */
$mail_active="Actif"; /* (mail.php) --  */
$mail_sent_to="Email envoy&eacute; &agrave;"; /* (mail.php) --  */
$mail_replace_words="Votre nom et adresse email seront remplac&eacute;s."; /* (form_mailing.php) --  */
$misc_help="Aides diverses"; /* () --  */
$mail_create_group="(Vous devez vous m&ecirc;me cr&eacute;er le groupe 'mail'.)"; /* (mail.php) --  */
$alb_th="Sous-dossiers de l'album"; /* (*_stage_album.php) -- overwrites old (wrong) entry */
$arr_month_short = Array('1' => 'janv.','2' => 'f&eacute;vr.','3' => 'mars','4' => 'avr.','5' => 'mai','6' => 'juin','7' => 'juil.','8' => 'ao&ucirc;t','9' => 'sept.','10' => 'oct.','11' => 'nov.','12' => 'd&eacute;c.'); /* abrevations of months */
$arr_month_long = Array('1' => 'janvier','2' => 'f&eacute;vrier','3' => 'mars','4' => 'avril','5' => 'mai','6' => 'juin','7' => 'juillet','8' => 'ao&ucirc;t','9' => 'septembre','10' => 'octobre','11' => 'novembre','12' => 'd&eacute;cembre'); /* months */
$arr_day_short = Array('dim.','lun.','mar.','mer.','jeu.','ven.','sam.'); /* abrevations of weekdays */
$arr_day_long = Array('dimanche','lundi','mardi','mercredi','jeudi','vendredi','samedi'); /* weekdays */

/*
If the time and date format in your country is different with these formats,
please uncomment these lines and set it to the right format. Otherwise, leave
it as it is. See http://www.php.net/manual/en/function.strftime.php for definitions.
(Don't apply this to the english language file, the default date and time format are
set in the options page of linpha. This is because the date format is different within
the english spoken countries.)
*/
$date_format = "%a %d/%m/%Y";
$time_format = "%H:%M:%S";
$layout="Apparences";
$features="Caract&eacute;ristiques";
$perform="Performances";
$general_comment_in_subfolder = 'Autoriser/interdire les commentaires des sous-dossiers de l\'album';
$general_comment_in_subfolder_info = '<-- Montrer les commentaires lors de la pr&eacute;visualisation de l\'album';
$general_default_date_format = 'Format de date par d&eacute;faut';
$general_default_date_format_info = '<-- Exemple: 06/28/2004, d&eacute;tails dans info';
$general_default_time_format = 'Format de l\'heure par d&eacute;faut';
$general_default_time_format_info = '<-- Exemple: 01:45:50 PM, d&eacute;tails dans info';
$general_new_images_folder = 'Dossier virtuel "Derni&egrave;res images"';
$general_new_images_folder_info = '<-- Montre un dossier virtuel "Derni&egrave;res images" avec les derni&egrave;res images mises en ligne';
$general_new_images_folder_age = 'Age du dossier "Derni&egrave;res images" en jours';
$general_new_images_folder_age_info = '<-- Age maximum des images &agrave; montrer';
$control_key="Ctrl"; /* (various) --  */
$search_date="Date"; /* (search.php) -- reads: date from to... */
$search_from="de"; /* (search.php) -- reads: date from to... */
$search_to="&agrave;"; /* (search.php) -- reads: date from to... */
$start_slide="D&eacute;marrer la pr&eacute;sentation"; /* (img_view.php) --  */
$pass_msg="Vous devez vous connecter avec votre nouveau mot de passe"; /* (build_my_settings.php) --  */
$str_new_images = "Derni&egrave;res images"; /* (new_images.php) -- */
$str_order_by = "Trier par"; /* (new_images.php) -- */
$str_age = "Age"; /* (new_images.php) -- */
$str_album = "Album"; /* (new_images.php) -- */
$str_in_album = "Dans l'album"; /* (new_images.php) -- */
$str_img_newer_than = "Toutes les images depuis %s jours"; /* (new_images.php) -- */
$timespanfmt = "%s jours, %s heures, %s minutes et %s secondes"; /* (new_images.php) -- */
$str_delete_all_cached_images_with_watermarks="Supprimez toutes les images en cache avec des filigranes"; /* (watermark.php) --  */
$str_error_changing_perm="ERREUR, Les droits des fichiers ne peuvent pas &ecirc;tre chang&eacute;s! (Vous n'avez sans doute pas la permission)"; /* (plugins/ftp/index.php) --  */
$str_change_perm="Changer la permission de:"; /* (plugins/ftp/index.php) --  */
$str_read="Lire"; /* (plugins/ftp/index.php) --  */
$str_write="Ecrire"; /* (plugins/ftp/index.php) --  */
$str_execute="Executer"; /* (plugins/ftp/index.php) --  */
$str_owner="Propri&eacute;taire"; /* () --  */
$str_group="Groupe"; /* (plugins/ftp/index.php) --  */
$str_all_other="Tous les utilisateurs"; /* (plugins/ftp/index.php) --  */
$str_copy="copie"; /* (plugins/ftp/index.php) --  */
$str_copy_to="Copier %s dans:"; /* (plugins/ftp/index.php) --  */
$str_rename_to="Renommer %s en:"; /* (plugins/ftp/index.php) --  */
$str_rotation_disabled="Rotation des image d&eacute;sactiv&eacute;es"; /* (img_view.php) --  */
$str_no_write_perm="Pas de permissions d'&eacute;criture"; /* (img_view.php) --  */
$str_new_images_in_these_folders="Nouvelles images trouv&eacute;es dans les albums suivant :"; /* (new_images.php) --  */
$str_reinstall_remove_dbconnect="Si vous voulez reinstaller LinPHA, Vous devez, en premier lieu, effacer le fichier ./sql/db_connect.php! (Vous pouvez le faire avec le gestionnaire de fichier dans la partie administration de LinPHA)"; /* (install_header.php) --  */
$str_Version="Version"; /* (sec_stage_install.php) --  */
$str_no_supported_database_activated="Erreur: Base de donn&eacute;es non support&eacute; par la configuration de PHP"; /* (sec_stage_install.php) --  */
$str_extract_with="Quand l'upload est fini, extraire l'archive avec"; /* (ftp/index.php) --  */
$str_files_to_upload="Fichier &agrave; uploader"; /* (ftp/index.php) --  */
$posix_check_msg="V&eacute;rification du support POSIX..."; /* (sec_stage_install.php) --  */
$posix_sum_found_msg="Le support POSIX pour PHP a &eacute;t&eacute; trouv&eacute;. Toutes les fonctionnalit&eacute;s du gestionnaire de fichiers sont activ&eacute;es."; /* (sec_stage_install.php) --  */
$posix_sum_miss_msg="Aucun support POSIX pour PHP n'a &eacute;t&eacute; trouv&eacute;. Certaines fonctionnalit&eacute;s du gestionnaire de fichiers ne peuvent pas &ecirc; activ&eacute;es (Surtout les fonctionnalit&eacute;s de changement de permissions)."; /* (sec_stage_install.php) --  */
$mod_cache_fail="Erreur: Les param&egrave;tres ne peuvent pas &ecirc;tre sauvegard&eacute;s. Assurez-vous que le chemin est correct et que vous avez les permissions pour &eacute;crire dans ce r&eacute;pertoire."; /* (admin.php) --  */
$str_create_archive="cr&eacute;&eacute; %s archives"; /* (build_zip_view.php) --  */
$str_download_error="ERREUR! Le t&eacute;l&eacute;chargement ne peut pas d&eacute;marrer, d&eacute;sol&eacute;"; /* (build_zip_view.php) --  */
$str_search_all_images_taken="Rechercher toutes les images prises %s"; /* (read_php_exif.php) --  */
$str_try_a_lower_resolution="Si le chargement est trop long, essayer une r&eacute;solution plus basse:"; /* (image_panorama_view.php) --  */
$str_current_resolution="r&eacute;solution courante:"; /* (image_panorama_view.php) --  */
$href_group_conf="Gestion des Groupes"; /* (admin.php + build_user_conf.php) -- Admin menu item + table heading */
$href_tools_section="Outils:"; /* (admin.php) -- Tools section in admin menu */
$lang_plugins['plugin']="Plugin"; /* (plugin.php) --  */
$choose_mail_msg="Selectionner les images &agrave; envoyer par mail"; /* () --  */
$new_user_full_name="Nom complet"; /* (build_my_settings.php) -- And build_user_conf.php */
$href_category_conf="Gestion des Cat&eacute;gories"; /* (admin.php) --  */
$cat_private="Priv&eacute;e"; /* (build_category_conf.php) --  */
$lang_plugins['facetmap']="FacetMap"; /* (plugins.php) --  */
$str_add_more_apps="Ajouter plus d'applications"; /* (include/basket_zip.php, ftp/index.p) --  */
$session_check="V&eacute;rification de la validit&eacute; des param&egrave;tres de session..."; /* (sec_stage_install.php) --  */
$session_save_handler_ok_msg="La variable d'environnement session.save_handler est correctement param&egrave;tr&eacute;e."; /* (sec_stage_install.php) --  */
$session_save_handler_miss_msg="La variable d'environnement session.save_handler n'est PAS correctement param&egrave;tr&eacute;e.."; /* (sec_stage_install.php) --  */
$session_miss_msg="Les param&egrave;tres de session ne sont PAS corrects. Vous DEVEZ au pr&eacute;alable corriger les erreurs ci-dessus dans php.ini sinon LinPHA ne fonctionnera probablement PAS correctement !!"; /* (sec_stage_install.php) --  */
$session_ok_msg="Tous les param&egrave;tres de sessions sont corrects. LinPHA devrait fonctionner sans probl&egrave;me."; /* (sec_stage_install.php) --  */
$new_user_error6="Erreur: Vous n'utilisez pas votre compte personnel?!?"; /* (build_my_settings.php) --  */
$str_old_comments="Anciens commentaires (ils n'appartiennent plus &agrave; une image):"; /* (build_stats.php) --  */
$str_last_viewed_page="Derni&egrave;re page visit&eacute;e :"; /* (index.php) --  */
$str_select_row="Selectionner une ligne"; /* (basket.php) --  */
$str_select="Selectionner"; /* (basket.php) --  */
$str_new_window="nouvelle fen&ecirc;tre"; /* (basket.php) --  */
$general_anon_mail_mode="Autoriser/interdire le mode mail pour les utilisateurs anonymes"; /* (build_general_conf.php) --  */
$general_anon_mail_mode_info="<-- les utilisateurs anonymes sont autoris&eacute;s &agrave; mailer des images"; /* (build_general_conf.php) --  */
$general_mail_mode_max_size="Mode Mail: Taille maximum des mails"; /* (build_general_conf.php) --  */
$general_mail_mode_max_size_info="<-- taille maximum en bytes"; /* (build_general_conf.php) --  */
$general_thumbnail_view="Affichage des Vignettes"; /* (build_general_conf.php) --  */
$general_image_view="Affichage des Photos"; /* (build_general_conf.php) --  */
$general_ado_msg="Activer/D&eacute;sactiver le syst&egrave;me de cache des requ&ecirc;tes SQL"; /* (build_general_conf.php) --  */
$general_ado_msg_info="<-- activer si votre serveur SQL est lent ou s'il n'existe pas d'accel&eacute;rateur PHP"; /* (build_general_conf.php) --  */
$general_ado_time_msg="Temps de cache des requ&ecirc;tes SQL:"; /* (build_general_conf.php) --  */
$general_ado_time_msg_info="<-- param&egrave;tre le temps maximim du cache en minutes"; /* (build_general_conf.php) --  */
$general_ado_path_msg="Chemin du cache des requ&ecirc;tes SQL:"; /* (build_general_conf.php) --  */
$general_ado_path_msg_info="<-- o&ugrave; enregistrer les donn&eacute;es du cache SQL"; /* (build_general_conf.php) --  */
$str_other_features="Autre param&egrave;tres"; /* (build_general_conf.php) --  */
$str_language_settings="Param&egrave;tres de Langues"; /* (build_general_conf.php) --  */
$str_sql_query_caching="Cache des requ&ecirc;tes Sql"; /* (build_general_conf.php) --  */
$general_thumb_border="Taille (en pixel) du cadre des Vignettes"; /* (build_general_conf.php) --  */
$general_thumb_border_info="<-- Saisissez 0 pour d&eacute;sactiver, defaut: 5"; /* (build_general_conf.php) --  */
$general_thumb_border_color="Couleur du cadre des Vignettes"; /* (build_general_conf.php) --  */
$general_thumb_border_color_info="<-- Voir les informations pour le d&eacute;tails"; /* (build_general_conf.php) --  */
$str_recipient="Destinataire"; /* (basket_mail.php) --  */
$str_sender="Exp&eacute;diteur"; /* (basket_mail.php) --  */
$str_mail_too_big="Erreur: L'e-Mail est trop volumineux.<br /><br />Taille autoris&eacute;e: %sBytes. Les images s&eacute;lectionn&eacute;es prennent %sBytes.<br /><br />Supprimer certaines images ou utiliser la fonctionnalit&eacute; de t&eacute;l&eacute;chargement zipp&eacute; des albums!"; /* (basket_mail.php) --  */
$str_size_of_email="Taille de l'E-Mail: %s."; /* (basket_mail.php) --  */
$str_new_search="Nouvelle recherche"; /* (search.php) --  */
$str_edit_search="Editer la recherche"; /* (search.php) --  */
$str_View="Vue"; /* (img_view.class.php) --  */
$str_normal="normal"; /* (img_view.class.php) --  */
$str_detail="detail"; /* (img_view.class.php) --  */
$search_result_empty="D&eacute;sol&eacute;, votre recherche n'a renvoy&eacute; aucun r&eacute;sultat"; /* (search.php) --  */
$str_chars_entered="caract&egrave;res saisis"; /* (img_view.class.php) --  */
$str_information_lost="Certaines informations vont &ecirc;tre perdues, veuillez mettre &agrave; jour votre saisie."; /* (img_view.class.php) --  */
$general_random_image="Activer/d&eacute;sactiver l'image al&eacute;atoire sur la page d'accueil"; /* () --  */
$general_random_image_info="<-- image al&eacute;atoire sur la page d'accueil"; /* () --  */
$general_random_image_size="Taille maximum de l'image al&eacute;atoire sur la page d'accueil"; /* () --  */
$general_random_image_size_info="<-- param&egrave;tre la taille maximum de l'image en pixel"; /* () --  */
$str_edit_watermark="Editer les filigranes"; /* (watermark.php) --  */
$str_edit_permissions="Editer ler permissions des filigranes"; /* () --  */
$str_Everyone="Tout le monde"; /* () --  */
$str_Nobody="Personne"; /* () --  */
$str_only_logged_in_users=" Uniquement les utilisateurs authentifi&eacute;s"; /* () --  */
$str_except_these_groups="hormis ces groupes:"; /* () --  */
$str_additionally_groups="sauf ces groupes:"; /* () --  */
$str_allow_these_persons="Pas de filigranes pour ces utilisateurs/groupes"; /* () --  */
$str_album_based_permissions="Album based permissions"; /* () --  */
$str_all_albums_but_without_these="Tous les albums hormis:"; /* () --  */
$str_only_on_these_albums="uniquement sur ces albums:"; /* () --  */
$str_allow_these_persons="Autoriser ces internautes"; /* (db_api.php) --  */
$str_no_watermarks="Pas defiligranes pour ces internautes"; /* (db_api.php) --  */
$str_watermark_perm_part1="Definit les filigranes pour un utilisateur simple, plusieurs utilisateurs, et/ou album based here."; /* (watermark.php) --  */
$str_watermark_perm_part2="Le param&egrave;tre par defaut est 'Uniquement les utilisateurs authentifi&eacute;s' ET 'Tous les albums'."; /* (watermark.php) --  */
$str_watermark_perm_part3="Ce qui signifit que tous les utilisateurs authentifi&eacute;s peuvent voir les images sans filigranes dans tous les albums."; /* (watermark.php) --  */
$inst_linpha_not_work_correctly="LinPHA ne fonctionnera probablement PAS correctement"; /* (sec_stage_install.php) --  */
$gd_jpg_missing_msg="Votre Syst&egrave;me n'impl&eacute;mente pas le support jpeg dans GDlib. Les images JPEG NE fonctionneront PAS!"; /* (sec_stage_install.php) --  */
$general_video_thumbnail="Essaye de cr&eacute;er des vignettes pour les vid&eacute;os"; /* (build_generl_config.php) --  */
$general_video_thumbnail_info="<-- Mettez off si vous rencontrez des probl&egrave;mes avec la cr&eacute;ation des vignettes pour vid&eacute;os"; /* (build_generl_config.php) --  */
$general_update_notice="Activer/d&eacute;sactiver la v&eacute;rification des mises &agrave; jour de LinPHA"; /* (build_generl_config.php) --  */
$general_update_notice_info="<-- active la v&eacute;rification des mises &agrave; jour une fois par semaine"; /* (build_general_config.php) --  */
$large="large"; /* (build_general_config) -- selectfield for mini images size */
$directories="R&eacute;pertoires"; /* (build_thumbnail_conf.php) --  */
$do_nothing="Ne rien faire"; /* (build_thumbnail_conf.php) --  */
$create="Cr&eacute;er"; /* (build_thumbnail_conf.php) --  */
$recreate="Recr&eacute;er"; /* (build_thumbnail_conf.php) --  */
$exif_disabled_in_conf="EXIF est d&eacute;sactiv&eacute; dans la configuration"; /* (build_thumbnail_conf.php) --  */
$iptc_disabled_in_conf="IPTC est d&eacute;sactiv&eacute; dans la configuration"; /* (build_thumbnail_conf.php) --  */
$silent_mode="Mode Silencieux (n'affiche pas les informations de debug)"; /* (build_thumbnail_conf.php) --  */
$just_thumb_msg="Vignettes"; /* (build_thumbnail_conf.php) --  */
$log_title="Journalisation LinPHA"; /* (log.php) --  */
$log_options="Options de journalisation"; /* (log.php) --  */
$log_method_label="Mettre un Log dans:"; /* (log.php) --  */
$str_extra_headers="En-t&ecirc;tes suppl&eacute;mentaires"; /* (log.php) --  */
$str_log_events['login']="Authentification Utilisateur"; /* (log.php) --  */
$str_log_events['thumbnail']="Cr&eacute;ation des vignettes"; /* (log.php) --  */
$str_log_events['update']="Mise &agrave; jour"; /* (log.php) --  */
$str_log_events['db']="Base de donn&eacute;es"; /* (log.php) --  */
$str_log_events['filemanager']="Syst&egrave;me de fichiers"; /* (log.php) --  */
$str_events="Ev&eacute;nements"; /* (log.php) --  */
$find_duplicates="Trouver les doublons"; /* (build_thumbnail_conf.php) --  */
$str_not_enabled_in_php_config="D&eacute;sactiv&eacute; dans la configuration PHP (php.ini)"; /* (sec_stage_install.php) --  */
$str_warning="Attention"; /* (build_thumbnail_conf.php) --  */
$str_thumbnails_deleted="Les vignettes vont &ecirc;tre supprim&eacute;es"; /* (build_thumbnail_conf.php) --  */
$str_statistics_deleted="Toutes les Statistiques seront supprim&eacute;es"; /* (build_thumbnail_conf.php) --  */
$str_random_index_image="Image al&eacute;atoire sur la page d'accueil"; /* (build_general_conf.php) --  */
$str_download_images="T&eacute;l&eacute;chargement des images"; /* (build_perms.php) --  */
$str_add_image_comments="Ajout de commentaires aux images"; /* (build_perms.php) --  */
$str_add_image_description="Ajouts de description et cat&eacute;gories aux images"; /* (build_perms.php) --  */
$str_mail_add_all_users="Ajouter tous les utilisateurs de Linpha &agrave; la mailing list"; /* (plugins/mail.php) --  */
$str_note_upload="<b>Note:</b> Vous n'&ecirc;tes pas obliger dd'utiliser cette interface pour d&eacuteposer vos images. Vous pouvez utiliser ce que vous d�sirez (ftp,scp,nfs,local,...). Copiez simplement vos images dans le r&eacute;pertoire 'albums'."; /* (plugins/ftp/index.php) --  */
$blacklist_opts="Options liste noire (Blocage SPAM)"; /* (varios) --  */
$blacklist_onoff="Activer le filtrage des messages"; /* (varios) --  */
$blacklist_keywords="Mots &agrave; bloquer:"; /* (varios) --  */
$str_entire_path="Chemin complet"; /* (search.php) --  */
$mail_format="Formation du mail:"; /* (basket_mail.php) --  */
$mail_format_is_txt="TXT (images attach&eacute;es)"; /* (basket_mail.php) --  */
$mail_format_is_html="HTML (images en ligne)"; /* (basket_mail.php) --  */
$mail_toggle_active="Toggle Active"; /* (mail.php) --  */
$statistics="statistiques"; /* (various) --  */
$stats_total_images="Total images"; /* () --  */
$stats_total_img_views="Total images vues"; /* () --  */
$stats_total_img_downs="Total images t&eacute;l&eacute;charg&eacute;es"; /* () --  */
$stats_total_img_selected="Total images uniques vues"; /* () --  */
$stats_total_downs_selected="Total images uniques t&eacute;l&eacute;charg&eacute;es"; /* () --  */
$stats_downloads="T&eacute;l&eacute;chargements"; /* () --  */
$stats_downl_size="Taille des t&eacute;l&eacute;chargements"; /* () --  */
$stats_coments_total="Total commentaires"; /* () --  */
$stats_coments_sel="Commentaires selectionn&eacute;s"; /* () --  */
$str_log_events['guestbook']="Livre d'or"; /* (log.php) --  */
$stats_realtime="Activ&eacute;/D&eacute;sactiv&eacute; les statistiques temps r&eacute;el"; /* (build_stats.php) --  */
$stats_realtime_info="<-- affiche toutes les informations statistiques en temps r&eacute;el (pas de caching)"; /* (build_stats.php) --  */
$stats_cache_time="Dur&eacute;e du cache pour les Statistiques"; /* (build_stats.php) --  */
$stats_cache_time_info="<-- raffra&icirc;chit (taille du t&eacute;l&eacute;chargement) les Statistiques seuleument apr&egrave;s un temps donn&eacute;"; /* (build_stats.php) --  */
$stats_user_info="Utilisateur"; /* (stats_view.php) --  */
$stats_image_info="Image"; /* (stats_view.php) --  */
$stats_comments_info="Commentaires"; /* (stats_view.php) --  */
$stats_general_info="General"; /* (stats_view.php) --  */
$spam_blocked="Attaques SPAM bloqu&eacute;es"; /* () --  */
$mail_current_status="Statut actuel"; /* (mailing.php) --  */
$mail_sending_to="Envoi &egrave;: "; /* (mailing.php) --  */
$mail_counters="Bilan (R&eacute;ussis/Echou&eacute;s/Total)"; /* (mailing.php) --  */
$mail_send_fail="Envoi ECHOUE: "; /* (mailing.php) --  */
$mail_send_ok="Envoi OK: "; /* (mailing.php) --  */
$mail_all_complete="Tous r&eacute;ussis!"; /* (mailing.php) --  */
$mail_failed_list="Liste des adresses ayant &eacute;chou&eacute;es"; /* (mailing.php) --  */
$mail_ok_list="Liste des addresses ayant r&eacuteussies"; /* (mailing.php) --  */
$mail_mailer_error=" - Erreur Mailer: "; /* (mailing.php) --  */
$str_log_events['comments']="Saisie d'un commentaire"; /* (log.php) --  */
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