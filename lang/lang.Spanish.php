<?php
/* spanish language file - fradiavolo@users.sourceforge.net and nandolin@users.sourceforge.net*/

/*#################################################
## Mensajes de Linpha
#################################################*/

/* Menu izquierdo */

$album="Archivo de fotos";

/* Alertas */
$alert_fopen="Error! no puedo abrir el archivo...";
$printing_probs="Problemas al imprimir"; /* TODO next 2 */
$printing_probs_msg="Impresion deshabilitada! ver";

/* Mensajes globales */
$subfolders="carpetas";
$img_th="Fotos";
$in_th="en"; /* used for the photos in $foldername */
$alb_th="Albumes en la subcarpeta";
$thumb_hint_msg="click para una vista detallada";
$latest_photo="ltima";
$view_at="ver en"; /* TODO */
$close_button="cerrar"; /* TODO */
$help="ayuda"; /* TODO */

/*#################################################
## Instalacion
#################################################*/
/* install.php (page 1) */
$welc_header="Bienvenido a LinPHA";
$welc_text="Hola, &eacute;sta es la p&aacute;gina inicial de &quot;The Linux Photo Archive&quot; tambi&eacute;n  conocida como LinPHA.
			Parece que usted est&aacute; corriendo LinPHA por primera vez, por lo tanto usted necesita 
			continuar con la instalaci&oacute;n.";
$welc_hint="<b>Antes de continuar:</b>";
$welc_hint1="1. El directorio &quot;<b>linpha/sql</b>&quot; debe ser escribible para todos!, haga:
		  	   (chmod 777 sql)";
$next_button="Continuar"; /* used as left menu header in all 4 stages */
$inst_msg="Instalaci&oacute;n de LinPHA"; /* used as left menu header in all 4 stages */
$inst_status_1="Por favor seleccione un lenguaje y haga click en &quot;Continuar&quot;";
$inst_status_step1="Paso 1 de 4";

/* sec_stage_install (page 2) */
$inst_access_msg="Configurar el tipo de acceso a la Base de Datos";
$inst_full_access_msg="<b>SI !</b><br> Tengo acceso completo a MySQL, y estoy autorizado para crear nuevas<br>
						bases de datos y nuevos usuarios. En otras palabras: Este es mi servidor!";
$inst_limited_access_msg="<b>NO !</b><br> Voy a instalar LinPHA con acceso limitado a la base de datos<br>
						MySQL. Mi ISP no permite la creaci&oacute;n  de nuevas bases de datos ni nuevos usuarios.";
$inst_status_2="Por favor eliga el tipo de acceso SQL, si no est&aacute; seguro, elija NO!";
$inst_status_step2="Paso 2 de 4";

/* Requerimientos */

$req_check_msg="Revisando los requerimientos del sistema";
$req_found_msg="OK encontrado";
$req_miss_msg="NO encontrado";
$req_safe_fail="HABILITADO";
$req_safe_ok="DESHABILITADO";
$php_safemode_check_msg="revisando modo seguro para PHP...";
$php_version_check_msg="revisando versi&oacute;n de PHP > 4.1.0...";
$mem_check_msg="revisando limite de memoria para PHP...";
$gd_check_msg="revisando librer&iacute;a  GD...";
$convert_check_msg="revisando ImageMagick...";
$exif_check_msg="revisando soporte para EXIF...";
$summary_msg="RESUMEN:";
$safe_mode_err="Su servidor esta usando PHP en modo seguro. Linpha no funcionara mientras el modo 
seguro este habilitado en el archivo php.ini!";
$inst_abort_msg="!!! INSTALLACION ABORTADA !!!";
$php_version_err="Su servidor est&aacute; corriendo una versi&oacute;n de PHP < 4.1.0. LinPHA no funcionar&aacute; hasta que actualice su PHP.";
$gd_convert_err="No se encontraron ni ImageMagick ni la librer&iacute;a  GD. LinPHA no funcionar&aacute;  hasta que instale una de ellas.";
$convert_sum_found_msg="Se encontr&oacute; ImageMagick. Esto le permitir&aacute; a linpha crear fotos en miniatura de alta calidad.";
$convert_sum_miss_msg="ImageMagick NO se encontr&oacute; en este servidor. Como resultado
			tendr&aacute;  vistas previas de baja calidad.";
/* TODO next 3 */
$session_path_check_msg="Buscando la ruta session_safe_path...";
$session_path_found_msg="Se encontro el session_safe_path en el archivo  php.ini. La entrada a LinPHA  deberia de funcionar correctamente. La ruta definida es: ";
$session_path_miss_msg="NO se encontro un valor para session_save_path. Debe configurar un valor en session_safe_path en el archivo php.ini o no podra entrar al sistema LinPHA despues!!";
/* TODO (change this one)
old value:
$exif_sum_miss_msg="No se encontro soporte de exif en su instalaci&oacute;n de PHP. LinPHA no podr&aacute; mostrar informaci&oacute;n detallada de las fotos.";
to new value:
==>see below*/
$exif_sum_miss_msg="NO se encontro soporte para Exif en su instalaci&oacute;n de PHP. Se har&aacute; uso de el parser EXIF incluido en LinPHA.";
$exif_sum_found_msg="Se encontr&oacute; soporte para EXIF en su instalaci&oacute;  PHP. Esto le permitir&aacute; a  LinPHA
			mostrar informaci&oacute;n  detallada de las fotograf&iacute;as.";
$mem_limit_ok_msg="Bien, su l&iacute;mite de memoria para PHP es >= 16MB. No deberi&aacute;n haber problemas con la creaci&oacute;n
			de las vistas previas.";
$mem_limit_low_msg="Hmmh, su l&iacute;mite de memoria para PHP es <=16MB. Si usted encuentra problemas como vistas
			previas que no aparecen, intente incrementar la variable memory_limit en su archivo php.ini o cambie sus
			imagenes a una resoluci&oacute;n menor e intente nuevamente...";
$choose_def_quali="Escoja la calidad por defecto para las fotos";
$choose_def_quali_warn="NO establezca la calidad en alta si su CPU es &lt; 1Ghz (por la alta carga del CPU)";

/* third_stage_install (page 3) */
$inst_superadmin_header="Configure el Administrador para la  Base de Datos MySQL";
$inst_superadmin_name="Nombre del MySQL DB Admin:";
$inst_superadmin_pass="contrase&ntilde;a del MySQL DB Admin:";
$inst_superadmin_pass_info="<-contrase&ntilde;a para el MySQL Administrator (debe existir en la DB)";
$inst_admin_header="Configure el Administrador de LinPHA";
$inst_admin_name="Nombre del Administrador de LinPHA:";
$inst_admin_name_info="<-el nombre del Administrador de LinPHA";
$inst_admin_pass="contrase&ntilde;a del Administrador de LinPHA:";
$inst_admin_pass_info="<-la contrase&ntilde;a del Administrador de LinPHA";
$inst_admin_email="correo electronico del Administrador:";
$inst_admin_email_info="<-Correo electronico del Administrador de LinPHA";
$inst_db_header="Configure la conexion a la base de datos de LinPHA";
$inst_db_host="Nombre del servidor:";
$inst_db_host_info="<-instalacion local: normalmente &quot;localhost&quot;";
$inst_db_host_info2="<-hostname: the MySQL database hostname";
$inst_db_host_port="Numero de puerto:";
$inst_db_host_port_info="<-puerto donde escucha MySQL: si no esta seguro, dejelo asi";
$inst_db_name="Base de datos para LinPHA:";
$inst_db_name_info="<-normalmente &quot;linpha&quot;";
$inst_db_name2="Base de datos:";
$inst_db_name_info2="<-Nombre de la base de datos dada por su ISP";
$inst_table_prefix="Prefijo para las tablas de LinPHA ";
$inst_table_prefix_info="<-El prefijo a usar para todas las tablas de LinPHA";

$general_header="Configurar opciones generales";
/* TODO */
$general_album_title="Titulo del album";
$general_album_title_info="<-Deje esto en blanco para usar el nombre por defecto";
$general_photos_row="N&uacute;mero de filas a mostrar:";
$general_photos_row_info="<-i.e. filas de las fotos en miniatura a mostrar";
$general_photos_col="N&uacute;mero de columnas a mostrar:";
$general_photos_col_info="<-i.e. columnas de fotos en miniaturas a desplegar";
$general_photos_width="Tama&ntilde;o de las fotos (ancho):";
$general_photos_width_info="<- 512 (Tama&ntilde;o por defecto.)";
$general_photos_height="Tama&ntilde;o de las fotos (alto):";
$general_photos_height_info="<- 384 (Tama&ntilde;o por defecto)";
/* TODO next2 */
$general_img_quality="Calidad de la imagen:";
$general_img_quality_info="<- Ajuste la calidad de la imagen 0-100 (Valor por defecto 75)";

$inst_status_3="Por favor llene todos los campos!";
$inst_status_step3="Paso 3 de 4";

/* forth_stage_install (page 4) */
$inst_status_4="Felicitaciones, ha completado la instalac&oacute;n. LinPHA est&aacute; lista para ser usada";
$inst_status_step4="Paso 4 de 4";
$inst_submit="Finalizar";
$inst_db_tryconn="Intentando conectarse al servidor de la  base de datos";
$inst_db_tryconn_error="Error conectando al servidor de la  base de datos, usando:";
$inst_db_tryconn_ok="OK, conectado!";
$inst_db_tryinst="Intentando crear la base de datos:";
$inst_db_tryinst_error="Error creando la base de datos:";
$inst_db_tryinst_ok="OK, creada!";
$inst_create_tb_msg="OK, creando todas las tablas";
$inst_db_connect_inc_msg="Error al conectar a la base de datos del servidor!";
$inst_db_connect_inc_msg1="Error mientras intenta encontrar ".@$db_realname." en la DB<br>
	Si este mensaje ocurre mientras usted esta instalando, debe BORRAR el archivo db_connect.php<br>
	en el subdirectorio &quot;sql&quot; !";
$table_create="Creaando tablas:";
$table_create_error="Error mientras se crean las tablas!";
$table_create_ok="OK, creadas!";
$table_insert_admin="Creando el usuario Administrador:";
$table_insert_admin_error="Error mientras crea la cuenta del Administrador!";
$table_insert_admin_ok="OK, creada!";
$write_db_config="Almacenando la configuracion de la base de datos";
$fopen_error="No se pudo abrir el archivo sql/db_config.php, haga un chmod 777 y reinicie la instalacion";
$fopen_ok="OK, Configuracion escrita!";
$install_finish_msg="OK. Instalaci&oacute; completa!!";
$admin_task="click para continuar";
$file_create_ok="OK, creada!";
$configure_error="Por favor llene todos los campos requeridos !!!";
$could_not_open="Error, no se pudo abrir la tabla de usuarios! Verifique!, si usted no tiene permisos para crear nuevos usuarios en la DB<br>
				Por favor seleccione la instalacion con acceso limitado en la segunda parte del proceso de instalaci&oacute;n <br>";

/*#################################################
## header.php
#################################################*/
$page_title="LinPHA - The Linux Photo Archive";
$head_title="The Linux Photo Archive";
$book_home="inicio";
$book_about="acerca de...";
$book_admin="administraci&oacute;n";
$book_admin_user="mi configuraci&oacute;n";
$book_links="enlaces";
$book_search="b&uacute;squeda";
$book_logout="cerrar sesi&oacute;n";
$book_login="iniciar sesi&oacute;n";
$num_pictures="fotos:";
$user_visits="visitas";
$user_online="usuarios en linea";
$guest="invitado";
$html_lang="es";
$html_charset="iso-8859-1";

/*#################################################
## index.php
#################################################*/
$index_welc_text="Hola, est&aacute;  es la p&aacute;gina principal de &quot;The Linux Photo Archive&quot; mas conocido como LinPHA.
			Por favor visite <a href='http://linpha.sf.net/'><u>Sourceforge</u></a> para posibles actualizaciones.";

/*#################################################
## search.php
#################################################*/
$search_header="B&uacute;squeda Linpha";
$radio_all="Todas";
$radio_descript="Descripci&oacute;n";
$radio_comment="Comentarios";
$radio_category="Categor&iacute;a";
$radio_file="Nombre de Archivo";
$search_in="Buscar en Album";
$search_all="Todos los Albumes";
$search_for="Buscar palabra clave";
$search_button="B&uacute;squeda";
$photos_found="encontrada(s)";
$search_info="P&aacute;gina de B&uacute;squeda de LinPHA";
$search_msg="Busca fotos en la base de datos de LinPHA seg&uacute;n:";

/*#################################################
## img_view.php
#################################################*/
$img_detail="Detalles de la imagen";
$img_size="Tama&ntilde;o completo";
$img_com="comentarios";
$img_des="descripci&oacute;n";
$img_cat="categor&iacute;a";
$img_name="nombre";
$img_info_stored="Los comentarios se escribieron en la BD";
$please_login="Por favor <a href='login.php'><font color='#000099'><u>inicie sesi&oacute;n</u></font></a> para agregar comentarios";
$back_to_thumbs="<b><u>regresar a vistas previas</u></b>";
$back_to_search="<b><u>regresar a bsquedas</u></b>";
$button_next="siguiente";
$button_prev="anterior";
$exif_ext_error="No hay soporte EXIF en su versi&oacute;n PHP, lo sentimos";
$exif_error="Lo siento, la imagen no contiene informaci&oacute;n EXIF!";
$exif_more="mas detalles";
$exif_less="menos detalles";
$detail_header="Foto";
$detail_header1="de";
$detail_header2="en carpeta<br>";
$php_to_old="PHP < 4.2.0 EXIF deshabilitado!";
$views="vistas";
$slideshow="Muestra automatica"; /* TODO 4 lines */
$seconds="segundos";
$go="Go";
$stopslide="Parar la muestra automatica";
/* image rotating */ /* TODO next 4*/
$img_rotate_ok="rotar la imagen";
$img_rotating="Problemas al rotar la imagen"; // TOC entry
$img_rotating_hint1="Rotaci&oacute;n de imagen DESHABILITADA! click";
$img_rotating_hint2="ver por que!!";
/* @translators! $img_rotating_hint1 and $img_rotating_hint2 are ONE sentense
later! i.e. "Image rotating DISABLED! click here to see why", so make sure it make sense ;-)

/*#################################################
## login.php
#################################################*/
$login_msg="Por favor inicie sesi&oacute;n";
$login_error="usuario o contrase&ntilde;a inv&aacute;lidos";
$login_name="Usuario";
$login_pass="Contrase&ntilde;a";
$login_info="Inicio de sesi&oacute;n en LinPHA";
$login_request_account_info="Solicitar una nueva cuenta:"; /* TODO change! */
$login_request_target="Contactar al administrador de LinpHA"; /* TODO */
$login_admin_info="Para realizar tareas administrativas debe iniciar sesi&oacute;n con la cuenta del administrador LinPHA";
$login_friend_account_info="Si tiene una cuenta de tipo &quot;amigo&quot;,
puede modificar su configuraci&oacute;n personal aqu&iacute;";

/*#################################################
## admin.php
#################################################*/
/* other messages */
$admin_page_header="Administraci&oacute;n de LinPHA";
$please_turn_off_msg="Por favor establezca 'Crear/Borrar Automaticamente las vistas previas' a OFF cuando termine de agregar las fotos.<br>
						LinPHA deber&iacute;a trabajar cerca de 10 veces mas r&aacute;pido entonces :)";
/* left menu */
$logout_msg="cerrar sesi&oacute;n";
$welc_msg="Bienvenido ";
$stat_msg="Ahora est&aacute; autorizado para realizar tareas administrativas, adem&aacute;s puede agregar <b>comentarios</b> a las im&aacute;genes";
$back_to_msg="<b>Regresar a las fotos</b>";
$href_general_conf="Configuraci&oacute;n General";
$href_user_conf="Administraci&oacute;n de usuarios/grupos";
$href_folder_conf="Administraci&oacute;n de carpetas";
$href_sql="Administrador de la base de datos MySQL"; /* TODO */
$href_ftp="Administraci&oacute;n del FTP";
$href_stats="Estad&iacute;sticas de LinPHA";
$href_other_conf="Thumbnails EXIF/IPTC";


/* general config */
/* uses also entries from install.php */
$default_language="Lenguaje por defecto para LinPHA";
$default_language_info="<--establezca el lenguaje por defecto";
$general_auto_lang="Autodetecci&oacute;n de lenguajes"; /* TODO 2 lines*/
$general_auto_lang_info="<-- autodetectar lenguaje desde el navegador";
$general_success_msg="! Los cambios se han guardado !";

/* TODO 6 lines (addition and REPLACEMENT)*/
$general_rotate="Habilitar/Deshabilitar rotaci&oacute;n de la imagen";
$general_rotate_info="<-- <b>Muy grande, Peligro!! click para mas info</b>";
$general_exifinfo="Habilitar/Deshabilitar todo excepto todo el soporte EXIF";
$general_exifinfo_info="<--Habilitar/Deshabilitar el uso de las caracteristicas de EXIF";
$general_exifdefault="MUestre la informaci&oacute;n de EXIF por defecto";
$general_exifdefault_info="<-- Habilite el mostrar la informaci&oacute;n de EXIF por defecto";

$general_exiflevel="Nivel de informaci&oacute;n EXIF";
$general_exiflevel_info="<-- Configure el nivel de informaci&oacute;n de EXIF";
$exif_low="bajo";
$exif_medium="medio";
$exif_high="alto";
$general_filename="Nombres de archivos";
$general_filename_info="<-- permite ver el nombre del archivo bajo la vista previa";
$general_thumb_order="Ordenar las vistas previas segn";
$general_thumb_order_info="<-- ordenar vistas previas por nombre de archivo o fecha";
$thumb_order_date="fecha";
$thumb_order_file="nombre de archivo";
$general_autoconf="Auto crear/eliminar miniaturas";
$general_autoconf_info="<--establezcalo en OFF para mejorar la velocidad";
$general_counterstat="Habilitar/deshabilitar contador";
$general_counterstat_info="<-- habilitado por defecto";
$general_blocking="Bloqueo de la IP (en minutos)";
$general_blocking_info="<--el usuario no se cuenta como nuevo por x minutos";
$general_theme="Cambiar el tema de LinPHA";
$general_theme_info="<-- establecer el tema de LinPHA a usar por defecto";
$aqua_theme="Aqua";
$colored_theme="Colored";
$neptune_theme="Neptune";
$shadow_theme="Shadow";
$general_hq="Habilitar/Deshabilitar vistas previas de alta calidad y fotos";
$general_hq_info="<--deshabilitelo para mejorar la velocidad";
$submit_button_general="Guardar cambios en la base de datos";
$button_on_msg="habilitado";
$button_off_msg="deshabilitado";
$basic_opts="Basicas";
$advanced_opts="Avanzadas";
$show_basics="Haga click aqui para ver las opciones basicas";
$show_advanced="Haga click aqui para ver las opciones avanzadas";
$general_printing="Impresion de Invitado";
$general_printing_info="<--habilitado, todo el mundo puede imprimir";
$general_slideshow="Habilitar/Deshabilitar el despliegue automatico"; /* TODO 4 lines */
$general_slideshow_info="<-- Active o desactive el despliegue automatica";
$general_mini_preview="Next/previous button image status/size";
$general_mini_preview_info="<-- configurelo en OFF, si muchos usuarios tienen ancho de banda reducido";

/* modify existing user table */
$mod_user_header="Modificar usuarios existentes";
$submit_button_mod_user="Modificar usuario";
$mod_user_success_msg="! Usuario modificado !";
$submit_button_delete="Eliminar";
$del_user_success_msg="! Usuario eliminado !";

/* add new user table */
$new_user_header="Agregar usuario";
$new_user_name_info="Nombre de usuario:";
$new_user_pass_info="Contrase&ntilde;a";
$new_user_mail_info="Correo electr&oacute;nico";
$new_user_level_info="Nivel del Usuario";
$friend="amigo";
$submit_button_new_user="Agregar usuario";
$new_user_success_msg="! Usuario creado !";

/* friends account table */
$friend_user_header="Configuraci&oacute;n de Cuentas";
$submit_button_friend_user="Actualizar cuenta";
$delete_button_friend_user="Eliminar cuenta";
$friend_info_msg="Establecer/Cambiar las preferencias de su cuenta";

/* add new category table */
$new_cat_header="Agregar una nueva categor&iacute;a";
$new_cat_info="nueva categor&iacute;a a agregar";
$submit_button_new_cat="agregar categor&iacute;a";
$new_cat_success_msg="! Categor&iacute;a agregada !";
$mod_cat_header="Modificar/Eliminar categor&iacute;as";
$cat_name_header="Nombre de la categor&iacute;a";
$cat_mod_header="Modificar categor&iacute;a";
$cat_del_header="Eliminar categor&iacute;a";
$submit_button_mod_cat="Modificar";

/* set directory permissions */
$set_dir_perms_header="Establecer permisos de las carpetas";
$dir_name="Carpeta";
$dir_perms="Permiso";
$action="Acci&oacute;n";
$submit_button_folder="Enviar";
$public="p&uacute;blica";
$friends="amigos";
$private="privada";
$new_perms_success_msg="! Permisos Cambiados !";

/*#################################################
## build_stats.php (called by admin.php)
#################################################*/
$stats_over_header="Estad&iacute;sticas generales";
$stats_over_photos="Fotos en la base de datos:";
$stats_over_views="Fotos vistas en general:";
$stats_over_albums="Albumes en la base de datos:";
$stats_over_space="Espacio en disco usado (todos los albumes):"; /* TODO 2 lines*/
$stats_over_most_alb_visists="Album mas visitado:";
$stats_over_visitors="Visitors so far:";
$stats_over_users="Usuarios registrados:";
$stats_top_ten="Las 10 m&aacute;s vistas";
$stats_rank="Clasificaci&oacute;n:";
$stats_no_views="N&uacute;mero de veces vista:";
$stats_last_view="La &uacute;ltima visitada:";
$stats_alb_name="Nombre del Album:";

/*#################################################
## create_all_thumbs.php
#################################################*/
$parse_first="Configurando la primera etapa";
$parse_sec="Configurando la segunda etapa";
$parse_third="Configurando la tercera etapa";
$parse="Agregando directorio:";
$parsed="Agregado:";
$dirs="sub directorios";
$done="TRABAJO TERMINADO...";
$not_allowed_msg="Lo siento, a usted NO le est&aacute; permitido correr este script!";
/* these entries are called from within admin.php */
$th_msg="Crear todas las fotos en miniatura de una sola vez!";
$table_hint_msg="Haga click en iniciar para crear todas las fotos en miniatura en todas las subcarpetas ahora!";
$start_button="Iniciar!";
$recreate_thumbs_header="Regenerar todas las vistas previas"; /* TODO 2 lines */
$recreate_thums_msg="Esta opci&oacute;n VOLVERA A CREAR TODAS las vistas previas! Todos los comentarios, descripciones y estad&iacute;sticas se PERDERAN!";
/* TODO */
$recreate_thums_warning="Por favor confirme la intenci&oacute;n de volver a crear todas las vistas en miniatura y BORRAR TODOS LOS COMENTARIOS, DESCRIPCIONES, ESTADISTICAS!. Esta operacion no puede ser deshecha. ESTA SEGURO QUE QUIERE CONTINUAR?";

/*#################################################
## Printing, all files /* TODO */
#################################################*/
$print_layout="Elija la forma de imprimir";
$images_page="Im&aacute;genes/p&aacute;gina";
$indexprint="Indice de impresi&oacute;n (28)";
$note="<strong>NOTA:</strong> Usted deber&iacute;a configurar su browser \"Configurar pagina\"
			antes de imprimir, para asegurarse de que todas las fotos quepan en la pagina!!!";
$print_button="Vista previa de la impresi&oacute;n";
$href_check_all="Seleccionar todas";
$href_clear_all="Limpiar todas";
$print_error="ERROR, no hay im&aacute;genes seleccionadas!!!";
$print_mode="Modo de impresi&oacute;n";
$print_image="Imprimir imagen";
$videos_msg="No se pueden imprimir videos";

/*#################################################
## FTP, all files
#################################################*/

/*#################################################
## MySQL backup, most files ;-)
#################################################*/
$mysql_info_header="Versi&oacute;n del administrador de la base de datos MySQL de LinPHA.";
$mysql_cancel="Cancelar";
$mysql_DHTML_hint="DHTML esta desactivado - NO podr&aacute; ver nada hasta que la copia de seguridad este realizada.";
$mysql_select_all="Seleccione todo";
$mysql_deselect_all="Deseleccione todo";
$mysql_create_backup="Crear copia de seguridad";
$mysql_back_menu="Volver al menu";
$mysql_table_checks="Verificando tablas...";
$mysql_table_check="Verificando tabla";
$mysql_struct_msg="Creando la estructura";
$mysql_in_file_dump_msg="Volcando los datos";
$mysql_progress="Progreso general:";
$mysql_back_complete="Copia de seguridad completa";
$mysql_back_menu_long="Volver al menu principal de la copia de seguridad de la base de datos de MYSQL";
$mysql_open_warn1="<B>Advertencia:</B> Fallo al abrir ";
$mysql_open_warn2="para escritura!<BR><BR><I>CHMOD 777</I> en el directorio puede solucionar el problema.";
$mysql_date_msg="Ahora mismo. "; // it follows time of the day...
$mysql_last_backup="Ultimas copias de seguridad de la base de datos de MYSQL: ";
$mysql_backup_hint="Generalmente, realizar copias mas de una vez en una semana no es necesario.";
$mysql_down_backup="Descargando la versi&oacute;n anterior de la copia de seguridad completa";
$mysql_down_backup_part="Descargar parte de la copia de seguridad";
$mysql_down_backup_struct="Descargar solo la  estructura de la copia de seguridad ";
$mysql_down_backup1="(click-derecho Salvar como...)";
$mysql_unknown_backup="Ultima copia de seguridad de las bases de datos de MYSQL: <I>desconocida</I>";
$mysql_href_recom="Crear una nueva copia de seguridad, inserts completos (recomendado)";
$mysql_href_standard="Crear una nueva copia de seguridad, inserts estandar(mas peque&ntilde;os)";
$mysql_href_partial="Crear una copia de seguridad parcial, seleccione solo las tablas (con inserts completos)";
$mysql_href_structure="Crear una copia de seguridad completa, solo las estrucuras de las tablas ";
$mysql_days_last="d&iacute;as";
$mysql_hours_last="horas";
$mysql_min_last="minutos";
$mysql_sec_last="segundos";
$ago="anteriores"; // reads in context "some days ago"
$backup="Copia de seguridad";
$restore="Restablecer";
$optimize="Optimizar";
$optimize_tables="Optimizar las tablas";
$opt_table_name="Nombre de la tabla";
$opt_table_check="Verifica la tabla";
$opt_table_optimize="Optimiza la tabla";
$opt_table_msg="Tipo de mensaje";
$opt_start_msg="Inicia la verificaci&oacute;n y optimiza todas las tablas de la base de datos";
$fullback_hint_msg="Si usted tiene m&uacute;ltiples bases de datos, por favor seleccione la copia de seguridad parcial";
$restore_last_fullback="&uacute;ltima recuperaci&oacute;n de la copia de seguridad <b>completa</b>:";
$restore_last_partback="Recuperaci&oacute;n de la ultima copia de seguridad <b>parcial</b>:";
$restore_error="ERROR mientras abre la copia de seguridad. Esta no se encuentra!";
$restore_success="Copia de seguridad restablecida correctamente!";

/*########################################################################
### FILEMANGER
########################################################################*/

define('STR_ACCESS_DENIED','<H1>acceso denegado</H1> usted no tiene permisos para accesar a este directorio');
define('STR_BACK',	'volver');
define('STR_LESS',	'menos');
define('STR_MORE',	'mas');
define('STR_LINES',	'lineas');
define('STR_FUNCTIONLIST', 'Lista de funciones');
define('STR_EDIT',	'editar');
define('STR_VIEW',	'ver');
define('STR_RENAME',	'renombrar');
define('STR_MKDIR',		'mkdir');
define('STR_DELETE',	'delete');
define('STR_BOTTOM',	'final');
define('STR_TOP',		'inicio');
define('STR_FILENAME',	   'nombre de archivo');
define('STR_FILESIZE',	   'tama&ntilde;o');
define('STR_LASTMODIFIED', 'ultima modificaci&oacute;n');
define('STR_SUM', '<B>%s</B> byte(s) en <B>%s</B> elementos(s)');
define('STR_CREATEDIRLEGEND', 'crear un directorio');
define('STR_CREATEDIR',       'nombre del directorio a crear:');
define('STR_CREATEDIRBUTTON', 'crear directorio');
define('STR_RENAMELEGEND',       'renombrar');
define('STR_RENAMEENTERNEWNAME', 'ingrese el nuevo nombre para %s:');
define('STR_RENAMEBUTTON',       'renombrar');
define('STR_ERROR_DIR','Error: no puedo leer el contenido del directorio');
define('STR_AUDIO',            'audio');
define('STR_COMPRESSED',       'comprimido');
define('STR_EXECUTABLE',       'ejecutable');
define('STR_IMAGE',            'imagen');
define('STR_SOURCE_CODE',      'codigo fuente');
define('STR_TEXT_OR_DOCUMENT', 'texto o documento');
define('STR_WEB_ENABLED_FILE', 'archivo web');
define('STR_VIDEO',            'video');
define('STR_DIRECTORY',        'directorio');
define('STR_PARENT_DIRECTORY', 'directorio padre');
define('STR_EDITOR_SAVE',      'guardar archivo');
define('STR_EDITOR_SAVE_ERROR','el archivo <I>%s</I> no es escribible o no existe');
define('STR_EDITOR_SAVE_ERROR_WRONG_VALUE','mientras edita el archivo <I>%s</I>, usted ha dado la siguiente posici&oacute;n del byte #%s: %s.');
define('STR_EDITOR_SAVE_ERROR_HEX_VALUE_NEEDED','de acuerdo a la configuraci&oacute;, usted debe ingresar un valor hexadecimal positivo entre 00 y FF');
define('STR_EDITOR_SAVE_ERROR_DEC_VALUE_NEEDED','de acuerdo a la configuraci&oacute;, usted debe ingresar un valor decimal positivo entre 0 y 255');
define('STR_FILE_UPLOAD_NAVI_HINT', 'Navegador Rapido');
define('STR_FILE_UPLOAD_DRIVES', 'Unidades:');
define('STR_FILE_UPLOAD', 'subir');
define('STR_FILE_UPLOAD_MAIN', 'uploader');
define('STR_FILE_UPLOAD_DISABLED', 'lo siento, subir archivos no esta permitido en el php.ini');
define('STR_FILE_UPLOAD_DESC','Elija los archivos que quiere subir. Elija la accion deseada una vez terminada la tranferencia.');
define('STR_FILE_UPLOAD_FILE','Archivo');
define('STR_FILE_UPLOAD_TARGET','Subir archivo(s) a');
define('STR_FILE_UPLOAD_ACTION','cuando la tranferencia este completa haga:');
define('STR_FILE_UPLOAD_NOTHING','no hacer nada');
define('STR_FILE_UPLOAD_DROPFILE','eliminar el archivo transferido cuando la accion seleccionada termine');
define('STR_FILE_UPLOAD_MAXFILESIZE','El tama&ntilde;o de los archivos permitidos est&aacute; configurado actualmente en php.ini');
define('STR_FILE_UPLOAD_ERROR',        'Error: No pude mover el archivo %s al directorio %s');
define('STR_FILE_UPLOAD_CHDIR_ERROR',  'Error: No puedo cambiar (chdir) al directorio %s. Archivo siendo procesado: %s');
define('STR_FILE_UPLOAD_UNLINK_ERROR', 'Error: No puedo borrar %s despues de procesarlo.');
define('STR_FILE_UPLOAD_ERROR_FILE_EXCEEDS_INI_SIZE', 'Error: El archivo transferido %s excede la directiva upload_max_filesize en el php.ini - %s');
define('STR_FILE_UPLOAD_ERROR_FILE_EXCEEDS_FORM_SIZE','Error: el tama&ntilde;o del archivo %s excede la configuraci&oacute;n del HTML FORM');
define('STR_FILE_UPLOAD_ERROR_FILE_PARTIAL',          'Error: El archivo transferido %s solo fue subido parcialmente');

/*########################################################################
### BIG FAT NOTICE !
### AS OF LINPHA 0.9.0 ALL NEW ENTRIES ARE PLACED BELOW THIS MSG
### DEVELOPERS PLEASE MAKE USE OF THE "LANGUPDATE.PHP" SCRIPT!
########################################################################*/

$pano_view="vista panoramica"; /* (img_view.php) -- new [panorama view] href  */
$close_win="Cerrar ventana"; /* (various files) -- javascript close window */
$nav_hint="Por favor use el mouse o las teclas para nevegar!"; /* (image_panorama_view.php) --  */
$pano_view_of="Vista panoramica de la imagen"; /* (image_panorama_view.php) -- header message */
$php_basedir_check_msg="verificando que PHP open basedir este configurado..."; /* (sec_stage_install.php) --  */
$req_basedir_fail="NO"; /* (sec_stage_install.php) -- YES, it\'s really just no/nein ;-) */
$basedir_active_msg="Mal, muy mal, debe configurar PHP para hacer uso de \"open_basedir\".!<br>"; /* (sec_stage_install.php) --  */
$basedir_active_msg1="+ LinPHA usar&aacute; la libreria GD para crear las imagenes en miniatura, sin embargo puede esperar algunos problemas (Manejador de archivos y otros)<br>"; /* (sec_stage_install.php) --  */
$basedir_active_msg2="+ Si es posible, por favor remueva \"open_basedir\" de la configuraci&oacute;n en el archivo PHP.ini"; /* (sec_stage_install.php) --  */
$gd_basedir_err="+ Si es posible, por favor remueva \"open_basedir\" de la configuraci&oacute;n en el archivo PHP.ini o recompile PHP con soporte para libreria GD (--with-gd)"; /* (sec_stage_install.php) --  */
$extract_tar_gz="extraer un archivo *.tar.gz (UNIX)"; /* (index.php) -- filemanger upload select */
$extract_tar_bz2="extraer un archivo *.tar.bz2 (UNIX)"; /* (index.php) --  */
$extract_gz="descomprimir con gzip (UNIX)"; /* (index.php) -- filemanger upload select */
$extract_zip="descomprimir con unzip (UNIX)"; /* (index.php) -- filemanger upload select */
$extract_winzip="descomprimir con pkzip (WINDOWS WINZIP)"; /* (index.php) -- filemanger upload select */
$new_group_success_msg="! Grupo adicionado!"; /* (admin.php) -- redirect message */
$mod_group_success_msg="! Grupo modificado !"; /* (admin.php) -- redirect message */
$del_group_success_msg="! Grupo eliminado !"; /* (admin.php) -- redirect message */
$mod_cat_success_msg="! Categoria modificada !"; /* (admin.php) -- redirect message */
$del_cat_success_msg="! Categoria eliminada !"; /* (admin.php) -- redirect message */
$href_groups="Clic aqui para modificar o eliminar grupos."; /* (build_user_conf/build_folder_conf) -- href message to group management */
$del_warning="Advertencia: Usted debe ingresar al sistema con su nueva cuenta!!"; /* (build_user_conf.php) -- java popup to notify admin user */
$href_to_folder_conf="volver al manejador de carpetas"; /* (build_user_conf.php) -- navi href  */
$href_to_user_conf="volver al manejador de usuarios"; /* (build_user_conf.php) -- navi href  */
$header_new_group="Agregar nuevo grupo"; /* (build_user_conf.php) -- table header */
$header_groupname="Nombre del Grupo"; /* (build_user_conf.php) -- table header */
$button_addgroup="Agregar grupo"; /* (build_user_conf.php) -- submit button */
$header_mod_group="Modificar/Eliminar grupos"; /* (build_user_conf.php) -- table header */
$mod_group_header="Modificar grupo"; /* (build_user_conf.php) -- table header */
$del_group_header="Eliminar grupo"; /* (build_user_conf.php) -- table header */
$search_to_short="Buscar cadena corta, debe ser por lo menos de 2 caracteres de largo!"; /* (search.php) --  */
$general_thumb_size="Cambiar el tama&ntilde;o de la foto en miniatura"; /* (build_general_conf.php) -- thumbsize stuff */
$general_thumb_size_info="<-- Configute el tama&ntilde;o m&aacute;ximo de las miniaturas en px"; /* (build_general_conf.php) -- thumbsize stuff */
$general_thumb_border="Habilitar/Deshabilitar el borde las miniaturas"; /* (build_general_conf.php) -- thumb border stuff */
$general_thumb_border_info="<-- Habilitar la adicion de bordes a las figuras miniatura."; /* (build_general_conf.php) -- thumb border stuff */
$inst_thumbsize_header="Escoja el tama&ntilde;o de las figuras en miniatura "; /* (third_stage_install.php) -- thumb size stuff */
$inst_thumbborder_header="Configurar bordes"; /* (third_stage_install.php) -- thumb border stuff */
$inst_thumbborder_enable="Habilitar el borde de la imagen"; /* (third_stage_install.php) -- thumb border checkbox msg */
$inst_thumbborder_disable="Deshabilitar el borde de la imagen"; /* (third_stage_install.php) -- thumb border checkbox msg */
$afemode_active_msg="Mal, muy mal, la configuraci&oacuten de su PHP hace uso de las restricciones \"save_mode\" !<br>"; /* (sec_stage_install.php) --  */
$safemode_active_msg2="+ Si es posible, por favor desactive el modo \"save_mode\" en el archivo PHP.ini"; /* (sec_stage_install.php) --  */
$general_anon_post="Permita/Deniegue los anuncios anonimos."; /* (build_general_conf.php) --  */
$general_anon_post_info="<-- Es permitido agregar anuncios anonimos"; /* (build_general_conf.php) --  */
$stats_over_comment="Comentarios publicados:"; /* (build_stats.php) --  */
$top10_downs_href="Top 10 de descargas"; /* (build_stats.php) --  */
$top10_views_href="Top 10 mas vistos"; /* (build_stats.php) --  */
$stats_head_downs="Top 10 descargas"; /* (build_stats.php) --  */
$no_downloads="N&uacute;mero de descargas"; /* (build_stats.php) --  */
$general_anon_download="Habilita/Deshabilita las descargas anonimas"; /* (build_genera_config.php) --  */
$general_anon_download_info="<-- Muestra/Esconde los enlaces de las imagenes para bajar"; /* (build_general_config.php) --  */
$seach_multiple_select_use="Seleccionado multiples usos"; /* (search.php) --  */
$search_and="AND"; /* (search.php) --  */
$search_or="OR"; /* (search.php) --  */
$search_categories="Categorias"; /* (search.php) --  */
$search_with_available_filters="Con disponibilidad de filtros"; /* (search.php) --  */
$search_select_album="Seleccione albumes"; /* (search.php) --  */
$search_date_from_to="Fecha de / a"; /* (search.php) --  */
$search_combination_and_or="En combinacion con AND y OR"; /* (search.php) --  */
$new_user_new_password="Nueva contrase&ntilde;a "; /* (build_user_conf.php) --  */
$new_user_error4="El usuario no puede ser vacio"; /* (admin.php) --  */
$new_user_error5="El usuario ya existe"; /* (admin.php) --  */
$new_user_error1="La contrase&ntilde;a antigua no es correcta"; /* (admin.php) --  */
$new_user_error2="La nueva contrase&ntilde;a no coincide"; /* (admin.php) --  */
$new_user_error3="El correo electronico no es correcto"; /* (admin.php) --  */
$new_user_old_password="Contrase&ntilde;a antigua"; /* (admin.php) --  */
$new_user_retype_password="Repita la nueva contrase&ntilde;a "; /* (admin.php) --  */
$select_db_header="Por favor seleccione el tipo de base de datos"; /* (sec_stage_install.php) --  */
$mysql_info="Seleccione esta para usar MySQL "; /* (sec_stage_install.php) --  */
$postgres_info="Seleccione esta para usar PostgreSQL"; /* (sec_stage_install.php) -- reads: ...Please see info */
$login_autologin="Autologin"; /* (toc.php) --  */
$login_autologin_user="Autologin informaci&oacute;n de usuario"; /* (toc.php) --  */
$toc_timer="Timer"; /* (toc.php) --  */
$general_autologin="Habilite/Deshabilite el autologin"; /* (build_general_conf.php) --  */
$general_autologin_info="<-- active la opci&oacute;n para usar el autologin"; /* (build_general_conf.php) --  */
$general_timer="Habilite/Deshabilite el timer"; /* (build_general_conf.php) --  */
$general_timer_info="<-- active la salida de el parser de tiempo en la parte de abajo"; /* (build_general_conf.php) --  */
$login_autlogin="Autologin"; /* (login.php) --  */
$lostpw_title="Contrase&ntilde;a perdida"; /* (login.php) --  */
$lostpw_question="Perdi&oacute; su contrase&ntilde;a ?"; /* (login.php) --  */
$lostpw_type_user_or_email="Escriba su nombre de usuario o correo electronico"; /* (login.php) --  */
$lostpw_email1="Alguien ha echo uso de la funci&oacute;n de recuperaci&oacute;n de contrase&ntilde;a. si no fu&eacute; usted, solo ignore este mensaje y nada suceder&aacute; con su clave. si fu&eacute; usted, ponga este codigo en el campo de solicitud:"; /* (login.php) --  */
$lostpw_email1_part2="(Recuerde: Esta NO es su nueva contrase&ntilde;a!)"; /* (login.php) --  */
$lostpw_email1_part3="Su Administrador LinPHA"; /* (login.php) --  */
$lostpw_email_error="Error: El correo pudo no ser enviado. Contacte al administrador."; /* (login.php) --  */
$lostpw_error_nothing_found="Lo siento, no hay un usuario o contrase&ntilde;a que coincida con sus criterios."; /* (login.php) --  */
$lostpw_email_sent="El correo ha sido enviado."; /* (login.php) --  */
$lostpw_should_receive="Deberia recibir este en un minuto cuando mucho. Ingrese el codigo del correo en este campo."; /* (login.php) --  */
$lostpw_go_back="Regresar"; /* (login.php) --  */
$lostpw_email2="la contrase&ntilde;a ha sido cambiado exitosamente. Su nueva contrase&ntilde;a es:"; /* (login.php) --  */
$lostpw_email2_part2="Usted puede cambiar &eacute;sta despues, usando el enlace 'mi configuraci&oacute;n'."; /* (login.php) --  */
$lostpw_new_password="Nueva contrase&ntilde;a "; /* (login.php) --  */
$lostpw_successfully_changed="La contrase&ntilde;a se cambi&oacute; exitosamente, usted deberia recibir un correo con su nueva clave."; /* (login.php) --  */
$lostpw_error_wrong_code="Lo siento, esta no es correcta."; /* (login.php) --  */
$lostpw_enter_correct_code="Ingrese el codigo del correo en este campo:"; /* (login.php) --  */
$lang_plugins['plugins']="Plugins de LinPHA"; /* (admin.php) --  */
$lang_plugins['watermark']="Watermark"; /* (admin.php, toc.php) --  */
$lang_plugins['benchmark']="Prueba de rendimiento"; /* (admin.php, toc.php) --  */
$lang_plugins['sql']="Manejo de la Base de Datos"; /* (admin.php, toc.php) --  */
$lang_plugins['active_plugins']="Plugins activos"; /* (admin.php) --  */
$lang_plugins['enabled']="Habilitar"; /* (plugins.php) --  */
$lang_plugins['disabled']="Deshabilitar"; /* (plugins.php) --  */
$lang_plugins['update']="Actualizar"; /* (plugins.php) --  */
$lang_plugins['plugins_updated']="Plugins actualizados"; /* (admin.php, plugins.php) --  */
$wm_wm_man="Manejo de Watermark "; /* (watermark.php) --  */
$wm_disable="Deshabilitar Watermark "; /* (watermark.php) --  */
$wm_change_example_img="Cambiar la imagen de ejemplo "; /* (watermark.php) --  */
$wm_no_input_files_found="No se encontraron archivos de entrada"; /* (watermark.php) --  */
$wm_image_quality="calidad de la imagen (solo para previsualizaci&oacute;n) "; /* (watermark.php) --  */
$wm_enable_text="Habilite: Texto "; /* (watermark.php) --  */
$wm_text="Texto "; /* (watermark.php) --  */
$wm_font="Fuente "; /* (watermark.php) --  */
$wm_fontsize="Tama&ntilde;o de la fuente "; /* (watermark.php) --  */
$wm_fontcolor="Color de la fuente "; /* (watermark.php) --  */
$wm_align="Align "; /* (watermark.php) --  */
$wm_pos_hor="Posici&oacute;n horizontal "; /* (watermark.php) --  */
$wm_pos_ver="Posici&oacute;n vertical "; /* (watermark.php) --  */
$wm_height="Alto del campo de texto "; /* (watermark.php) --  */
$wm_width="Ancho del campo de texto"; /* (watermark.php) --  */
$wm_shadow_size="Tama&ntilde;o de sombra "; /* (watermark.php) --  */
$wm_shadow_color="Color de sombra"; /* (watermark.php) --  */
$wm_enable_image="Habilite: Imagen"; /* (watermark.php) --  */
$wm_available_images="Imagenes disponibles"; /* (watermark.php) --  */
$wm_no_images_found="No se encontraron imagenes"; /* (watermark.php) --  */
$wm_dissolve="Disolver"; /* (watermark.php) --  */
$wm_preview="Previsualizaci&oacute;n"; /* (watermark.php) --  */
$wm_linebreak="para linebreak"; /* (watermark.php) --  */
$wm_enable_shadow="Habilite sombra"; /* (watermark.php) --  */
$wm_enable_rectangle="Habilite rectangulo"; /* (watermark.php) --  */
$wm_rectangle_color="Color"; /* (watermark.php) --  */
$wm_enable_ext_shadow="Habilite sombra extendida"; /* (watermark.php) --  */
$wm_status="Estado"; /* (watermark.php) --  */
$wm_enabled="Habilita"; /* (watermark.php) --  */
$wm_disabled="Deshabilita"; /* (watermark.php) --  */
$wm_restore_to="Restablecer a"; /* (watermark.php) --  */
$wm_inital_settings="configuraci&oacute;n"; /* (watermark.php) --  */
$wm_add_more_examples="Usted puede adicionar mas imagenes de ejemplo en su directorio de linpha"; /* (watermark.php) --  */
$wm_example="Ejemplo"; /* (watermark.php) --  */
$wm_shadow_fontsize="Tama&ntilde;o de fuente sombra"; /* (watermark.php) --  */
$wm_settings_for_both="Configuraci&oacute;n para imagen y texto"; /* (watermark.php) --  */
$wm_center="centro"; /* (watermark.php) --  */
$wm_north="arriba"; /* (watermark.php) --  */
$wm_northeast="topright"; /* (watermark.php) --  */
$wm_northwest="topleft"; /* (watermark.php) --  */
$wm_south="bottom"; /* (watermark.php) --  */
$wm_southeast="bottomright"; /* (watermark.php) --  */
$wm_southwest="bottomleft"; /* (watermark.php) --  */
$wm_east="right"; /* (watermark.php) --  */
$wm_west="left"; /* (watermark.php) --  */
$bm_file_err="Error, no se ha especificado archivo";
$bm_var_err="Error, por favor revise las variables de entrada";
$bm_notfound_err="Error, no se encuentra archivo";
$bm_noimg_err="Error, el archivo no es una imagen";
$bm_tmpfile_err="Error, mientras se creaba el archivo temporal de la imagen";
$bm_tmpfile_warn="Advertencia: el archivo temporal de la imagen no puede ser borrado";
$bm_time_total="Tiempo de ejecuci&oacute;n total : ";
$bm_img_sec="Imagenes por segundo: ";
$bm_avg_img="Media del tiempo para cada imagen (pase el cursor sobre la imagen para actualizar): ";
$bm_qual_size="Calidad/Tama&ntilde;o";
$bm_quality="Calidad: ";
$bm_height="Altura: ";
$bm_width="Ancho: ";
$bm_size="Tama&ntilde;o : ";
$bm_create = "Creando una prueba de rendimiento con la utilidad de conversion";
$bm_interval = "intervalo";
$bm_calc = "Calculando";
$bm_img = "Imagenes";
$bm_inloop="Loop habilitado";
$bm_qual_range="Rango de calidad: ";
$bm_size_range="Tama&ntilde;o de rango (solo Altura): ";
$bm_repeats="Repetidos: ";
$bm_con_util="Por favor seleccione la utilidad de conversi&oacute;n: ";
$bm_current_settings="Configuraci&oacute;n actual"; /* (benchmark.php) --  */
$bm_preview="Previsualizaci&oacute;n "; /* (benchmark.php) --  */
$bm_save_settings="Salvar esta configuraci&oacute;n "; /* (benchmark.php) --  */
$wm_addexamples="Watermark: agregue mas imagenes de ejemplo"; /* (watermark.php) --  */
$wm_addimg="Watermark: agregue mas imagenes watermark"; /* (watermark.php) --  */
$wm_addfont="Watermark: agregue mas fuentes"; /* (watermark.php) --  */
$wm_colorsetting="Watermark: configuraci&oacute;n del color"; /* (watermark.php) --  */
$comment_hint="PISTA: haga click arriba y abajo de la imagen para hacer scroll sobre el album"; /* (linpha_comments.php) --  */
$comment_end="Fin del album"; /* (linpha_comments.php) --  */
$comment_beginning="Inicio del album"; /* (linpha_comments.php) --  */
$comment_back="volver a ver la imagen"; /* (linpha_comments.php) --  */
$comment_edit_img="Editar categoria/comentario"; /* (linpha_comments.php) --  */
$comment_change_img_details="Cambiar detalles de la imagen"; /* (linpha_comments.php) --  */
$comment_last_comments="Ultimos comentarios"; /* (linpha_comments.php) --  */
$comment_comment_by="comentarios por:"; /* (linpha_comments.php) --  */
$category_delete_warning="Advertencia: Las categorias han sido asignadas a imagenes perdidas"; /* (build_category_conf.php) --  */
$pass_2_short="ERROR, la clave debe tener por lo menos 3 caracteres de largo..."; /* (various) --  */
$album_edit="Editar comentarios del album"; /* (linpha_comments.php) --  */
$album_details="Detalles del Album"; /* (linpha_comments.php) --  */
$wm_save_note="NOTA: Watermarks NO son visibles para los usuarios registrados!. Debe abandonar la seci&oacute;n antes de ver las watermarks mientras navega por LinPHA!"; /* (watermark.php) --  */
$lang_plugins['guestbook']="Libro de visitas"; /* (admin.php) --  */
$print_low_quality="baja calidad"; /* (printing_view.php) --  */
$print_high_quality="alta calidad (lento!)"; /* (printing_view.php) --  */
$gb_title="Libro de visitas LinPHA";
$gb_sign="Agregar mensajes al libro de visitas LinPHA";
$gb_from="Ubicaci&oacute;n";
$gb_from_no="No ha dado una ubicaci&oacute;n";
$gb_pages="p&aacute;gina(s)";
$gb_messages="mensajes en el libro de visitas";
$gb_msg_error="Lo siento, El nombre y comentario no pueden estar vacios";
$gb_new_msg="Agregar un nuevo mensaje";
$gb_name="Nombre";
$gb_email="Correo";
$gb_hp="P&aacute;gina Web";
$gb_country="De donde eres? (Pais)";
$gb_header="Libro de visitas de LinPHA";
$gb_opts="Opciones del libro de visitas";
$gb_rows="N&uacute;mero de anuncios por p&aacute;gina";
$gb_anon="Permitir subir anuncios anonimos";
$gb_order="Ordenar los anuncios";
$wm_resize="Escalar watermark siempre a X% del tama&ntilde;o de la imagen"; /* (watermark.php) --  */
$wm_help_and_descr="Ayuda y descripci&oacute;n"; /* (watermark.php) --  */
$folder_remove_hint="Si todo sali&oacute; bien, deberias ahora eliminar la carpeta /install (por seguridad)..."; /* (forth_stage_install.php) --  */
$add_alb_com="Agregar un comentario al album"; /* (img_view.php) --  */
$add_img_com="Agregar un comentario a la imagen"; /* (img_view.php) --  */
$album_com="Comentario(s) del album"; /* (*_stage_album.php) --  */
$formatting_possibilities="Tags de formateo HTML"; /* (various) --  */
$stat_cache_elements="Elementos almacenados"; /* (build_stats.php) --  */
$stat_cache_first="Nuevos elementos almacenados"; /* (build_stats.php) --  */
$stat_cache_hits="Hits de almacenamiento"; /* (build_stats.php) --  */
$stat_cache_hits_max="Maximos Hits (imagen sola)"; /* (build_stats.php) --  */
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
$general_new_images_folder_info = '<- shows a folder in left menu with new added images';
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
$timespanfmt = "%s d&iacute;as, %s horas, %s minutos y %s segundos";  /* (new_images.php) -- */
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