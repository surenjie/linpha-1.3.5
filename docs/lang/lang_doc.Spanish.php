<?php
/**
* translators: for info see top of the english language file!
fradiavolo@users.sourceforge.net and nandolin@users.sourceforge.net
*
*
* translators: for info see top of the english language file!
* !!!!! PLEASE POINT YOUR BROWSER TO: !!!!!
* http://path2linpha/docs/lang/check_files.php to get a list of missing entries
* 
*
*/

$lang['default_date_time_format'] = 'Default date and time format';
$lang['sql'] = 'Administraci&oacute;n de la DB';
$lang['plugins'] = 'Plugins LinPHA';
$lang['benchmark'] = 'Benchmark';
$lang['watermark'] = 'Watermark';
$lang['cache'] = 'Cache de Imagen';
$lang['mail']="Plugin de lista de correo";
$lang['guestbook']="Plugin de libro de visitas";
$lang['wm_delete_all_cached_images']="Watermark: Delete all cached images";

$lang['doc_entry_mail'] = "
		Este plugin agrega una lista de correo donde los usuarios pueden registrarse por si mismos para recibir noticias de usted mas tarde.<br>
		Adicionalmente los usuarios (seleccionados) pueden enviar correo a todos los otros miembros de la lista. Algunas nuevas opciones
		de configuraci&oacute;n se mostrar&aacute;n en la secci&oacute;n admin para permitirle cambiar el comportamiento de este plugin.<br><br>
		Default: off
		";
$lang['doc_entry_guestbook']="
		Este plugin agrega un libro de visitas donde los usuarios pueden dejarle un mensaje.<br>
		Adicionalmente algunas nuevas opciones de configuraci&oacute;n aparecer&aacute;n en la secci&oacute;n admin para configurar el
		comportamiento del libro de visitas.<br><br>
		Default: off
		";
$lang['doc_entry_new_images']="
		Con esta opci&oacute;n habilitada, un nuevo \"folder virtual\" se mostrar&aacute; en el men&uacute; de la izquierda.<br>
		Este mostrar&aacute; todas las imagenes nuevas de todos los albumes (que este habilitado para ver) sin
		gastar espacio web adicional!<br>
		La vista previa de las imagenes depende de la opcion<a href=\"#doc_entry_new_images_age\">tiempo maximo</a>.<br>
		El folder desaparecer&aacute; tan pronto como el \"tiempo maximo\" sea alcanzado y se mostrar&aacute; nuevamente tan pronto como agregue<br>
		algunas imagenes nuevas (no es magia :-))<br><br>
		Default: On
		";
$lang['doc_entry_new_images_age']="
		Esta opci&oacute;n define (en d&iacute;s) cuanto tiempo se mostrar&aacute;n las im&aacute;genes nuevas en el folder
		\"nuevas imagenes\"<br><br>
		Default: 7 d&iacute;s
		";
$lang['doc_entry_comment_in_subfolder']="Si est&aacute; seleccionada, est&aacute; opci&oacute; un comentario del album en la \"vista de subfolder\"
		tambien para los subalbums y no solo para el album mismo.<br>
		Usted debe considerar el deshabilitar est&aacute; opci&oacute;n si usted tiene comentarios largos en los albumes que puedan afectar
		el aspecto de la vista subfolder.<br><br>
		Default: on
		";
$lang['doc_entry_fullaccess'] = "
		Si usted va a instalar LinPHA en su <b>PC personal</b> o en un \"root-server\"
		en internet, esta es la opci??? a elegir. Tambi??? necesitar???privilegios de accesso total al
		servidor de bases de datos MySQL para crear un nuevo usuario linpha.
	";
$lang['doc_entry_limitedaccess'] = "
		Si usted va a instalar LinPHA en alg&uacute;n lugar de <b>internet</b>, esta es la opci&oacute;n
		a elegir. La mayor&iacute;a de los provedores de internet no permiten acceso total a la base de datos MySQL.
	";
$lang['doc_entry_dbselect'] = "
		Algunas notas sobre las bases de datos soportadas:<br>
		<b>MySQL database:</b> Para continuar, usted necesita tener configurada la clave para la base de datos  MySQLse. Por favor vea el 
		<a href=\"http://linpha.sourceforge.net/nuke/modules.php?name=FAQ\">LinPHA FAQ</a> para mas detalles.<br><br>

		<b>El motor PostgreSQL:</b> a diferencia de MySQL no le permitir&aacute; a LinPHA crear automaticamente la base de datos. Usted tendr&aacute; que correr el comando <b><i>createdb linpha</i></b> desde la consola, para crear la base de datos de linpha antes de que pueda continuar.El resto es similar a la instalaci&oacute; con MySQL sin la necesidad de tener una clave configurada en su base de datos.
	";
$lang['doc_entry_sqladminname'] = "
		El nombre del administrador de la base de datos MySQL. A menudo se le llama la cuenta \"root\".
	";
$lang['doc_entry_sqladminpass'] = "
		La contrase&ntilde; para la cuenta admin/root de MySQL. <b>NOTA:</b> Por razones de seguridad
		LinPHA NO se instalar&aacute; en sistemas sin contrase&ntilde;a para el usuario admin, as&iacute; que aseg&uacute;rese de tener 
		actualente una ceunta admin/root con contrase&ntilde;

	";
$lang['doc_entry_linphaname'] = "
		El nombre del administrador LinPHA. Luego podr&aacute; iniciar sesi&oacute;n con este nombre para realizar
		tareas administrativas en LinPHA.
	";
$lang['doc_entry_linphapass'] = "
		La contrase&ntilde; para el administrador LinPHA.
	";
$lang['doc_entry_linphamail'] = "
		El correo electr&oacute;nico del administrador LinPHA.
	";
$lang['doc_entry_dbhost'] = "
		El nombre del servidor de base de datos MySQL. Seguramente sea \"localhost\" para PCs personales y
		algo como \"mysql.somewhere.org\" para proveedores de acceso a internet.
	";
$lang['doc_entry_dbport'] = "
		El puerto MySQL en el servidor. En la mayor&iacute;a de los casos el puerto por defecto ser&aacute;3306.
	";
$lang['doc_entry_dbname_full'] = "
		El nombre de la base de datos que mantendr&aacute; todas las tablas LinPHA. Si no est&aacute; seguro use \"linpha\".<br>
		Si piensa instalar varias versiones o instancias de LinPHA
		cambie el nombre de la base de datos aqu&iacute; 
	";
$lang['doc_entry_dbname'] = "
		El nombre de la base de datos a conectar. Este nombre <b>se lo  especifica a usted</b> su proveedor de acceso a internet.
	
	";
$lang['doc_entry_dbprefix'] = "
		El prefijo para todas las tablas LinPHA. Todas las tablas LinPHA tendr&aacute; el <b>prefijo \"linpha_\"</b>

		en su base de datos. Puede sentirse libre de cambiarlo por cualquier cosa que desee.
	";
$lang['doc_entry_albumtitle'] = "
		Esta opci&oacute;n le permite a usted configurar el nombre del album para LinPHA.
		Deje la opci&oacute;n en blanco para usar el nombre por defecto.<br>
		Defecto: (The Linux Photo Archive)
	";
$lang['doc_entry_photoscol'] = "
		Esta opci&oacute;n le permite aumentar o disminuir el <b>numero de columnas</b> con fotos en miniaturas.
		Esta toma efecto en todas las paginas donde las miniaturas sean desplegadas.<br>
		Incremente este valor cuando use LinPHA en alta resoluci&oacute;n > 1024x768.<br>
		Por defecto se usan: 4 columnas.
	";
$lang['doc_entry_photosrow'] = "
		Esta opcion le permite aumentar o disminuir el <b>numero de filas</b> con fotos en miniatura.
		Esta toma efecto en todas las paginas donde las miniaturas sean desplegadas.<br>

		Incremente este valor cuando use LinPHA en alta resoluci&oacute;n > 1024x768.<br>
		Por defecto se usan: 3 filas.
	";
$lang['doc_entry_photoswidth'] = "
		Esta opcion le permite configurar el <b>ancho de las fotos</b> desplegadas en img_view.php.
		Ejemplo, desplegar una imagen en tama&ntilde;o \"medio\" cuando una foto en miniatura se haya seleccionado.<br>
		Incremente este valor cuando use LinPHA en alta resoluci&oacute;n > 1024x768.<br>
		Valor por defecto: 512.
	";
$lang['doc_entry_photosheight'] = "
		Esta opci&oacute;n le permite configurar el <b>alto de las fotos</b> desplegadas en img_view.php.
		Ejemplo, desplegar una imagen en tama&ntilde; \"medio\" cuando una foto en miniatura se haya seleccionado.<br>

		Incremente este valor cuando use LinPHA en alta resolucion > 1024x768.<br>
		Valor por defecto: 384.
	";
$lang['doc_entry_imgquality'] = "
		Esta opci&oacute;n le permite especificar por defecto la <b>Calidad de las imagenes</b> en el archivo img_view.php.
		(La imagen que aparece una vez usted da click sobre una imagen en miniatura )
		usted podria incrementar la rapidez de carga de las imagenes poniendola en un valor inferior. Ejemplos:<br>
		Tama&ntilde; de imagen (Calidad 75) = 28.55KB<br>
		Tama de imagen (Calidad 50) = 18.47 KB<br>

		Tama&ntilde;o de imagen (Calidad 40) = 15.80 KB<br>
		Defecto: 75
	";
$lang['doc_entry_rotateonoff'] = "
		Esta opci&oacute;n le permite habilitar/deshabilitar la rotaci&oacute;n de imagenes en el archivo img-view.php
		POR FAVOR LEA:<br>
		Si usted esta usando la libreria GD observe por favor que <b><font color=\"FF0000\">TODA LA INFORMACION DE EXIF EN LA IMAGEN SE PERDERA!!!</font></b> durante la rotaci&oacute;n de la imagen.<br> Yo escribi un reporte de este BUG a los desarrolladores de PHP pero ellos me dijeron que NO parcharan este bug :-(<br><br>

		Si usted esta usando el software \"convert\" de la suite de ImageMagick podria estar a salvo, pero primero haga la prueba!<br>
		Defecto: off
	";
$lang['doc_entry_exifonoff'] = "
		Muchas imagenes en formato jpg contienen alguna informaci&oacute;n especial conocida como EXIF.
		Esta opci&oacute;n le permite a usted habilitar/deshabilitar el despliegue de informacion de EXIF en el archivo img_view.php (El sitio que aparece despues de que usted da click csobre una vista en miniatura) si no hay una buena razon usted deberia dejarla por defecto en (ON)<br>
		AYUDA: si usted habilita tambien ver&aacute;<br>
		<a href='#exifdefault'>Configuraci&oacute;n por defecto de EXIF</a><br>
		<a href='#exiflevel'>Nivel de verbosidad de la configuraci&oacute;n de EXIF</a>

	";
$lang['doc_entry_exifdefault'] = "
		Esta opci&oacute;n le permite a usted desplegar la informaci&oacute;n de EXIF de la imagen en img_view.php (el sitio aparece despues de usted dar click sobre una imagen en miniatura) por defecto.
		De otro modo los usuarios tendran que clickear en el enlace <b>\"mas detalles\"</b> para obetener toda la informaci??? de EXIF.<br>
		Defecto: off
	";
$lang['doc_entry_exiflevel'] = "
		La cantidad de informaci&oacute;n EXIF esta definida en <b>tres niveles</b> (bajo/medio/alto).
		Entre mas alto escoja este nivel, la cantidad de informaci&oacute;n que EXIF despliega es mayor.<br>
		Defecto: medio
	";
$lang['doc_entry_filename'] = "
		Esta opci&oacute;n le permite a su gusto desplegar el nombre del archivo de la imagen o no.<br>

		Defecto: on
	";
$lang['doc_entry_thumborder'] = "
		Esta opcion le permite cambiar el orden en el cual aparecen las imagenes en miniatura.
		Usted puede elegir entre <b>\"Ordenar por fecha\"</b> (La ultima foto primero) y <b>\"Ordenar por nombre de archivo\"</b> (decendente).<br>
		Valor por defecto: Ordenar por fecha.
	";
$lang['doc_entry_thumbsize'] = "
		Esta opci&oacute;n le permite cambiar el tama&ntilde;o de las imagenes en miniatura. Usted puede escoger entre 90, 120 y 150 pixeles de tama&ntilde;o m&aacute;ximo. Por favor note que el cambio NO actualizar&aacute; las miniaturas existentes.
		Usted tendra que crear estas manualmente.<br>

		vea: <a href='#recreatethumbs'>creando las vistas miniaturas</a> que se encuentra bajo &quot; Otras opciones&quot;<br>
		Defecto: 120 pixeles
	";
$lang['doc_entry_thumbborder'] = "
		Esta opci&oacute;n le permite agregar bordes a las imagenes miniaturas. (solo ImageMagick).
		Observe que los cambios NO actualizar&aacute;n las miniaturas existentes, asi que usted tendr&aacute; que crear estos manualmente.<br>
		Por favor vea: <a href='#recreatethumbs'>crear miniaturas</a> encontradas bajo &quot;Otras opciones&quot;<br><br>

		Defecto: On
	";
$lang['doc_entry_autoconf'] = "
		Si tiene seleccionada esta opcion, LinPHA detecta todos los cambios en sus albumes
		 automaticamente. Esto significa que LinPHA creara las imagenes en miniatura automaticamente para las nuevas imagenes agregadas, y borrara todo de la Base de datos si usted borra una imagen del album.<br>
		Ya que esta tarea requiere mucha carga en la CPU, usted deberia de poner la opcion en OFF y habilitarla solo si usted ha cambiado algo. Es mejor dejar la opcion desactivada y hacer uso de la opcion: \"Crear todas las imagenes en miniatura de una vez!\".<a href='#createthumbs'>(INFO)</a><br>
		Estado por defecto: off
	";
$lang['doc_entry_counter'] = "
		Esta opci&oacute;n le permite definir, si quiere mostrar o no el contador de usuarios en la esquina superior derecha.<br>
		Defecto: habilitado
	";
$lang['doc_entry_ipblocking'] = "
		Esta opci&oacute;n  le permite definir el tiempo durante el que una direcci&oacute;n ip <b>esta bloqueada</b>. Esto significa que durante esta cantidad de tiempo el usuario no contara como un nuevo visitante.<br>

		Defecto: 15 minutos
	";
$lang['doc_entry_language'] = "
		El lenguaje por defecto de LinPHA. Si tiene habilitado  \"Autodeteccion del lenguaje\" Este sera el lenguaje a usar por defecto.<br>
	";
$lang['doc_entry_autolanguage'] = "
		Si esta opci&oacute;n est&aacute; habilitada, LinPHA dar&aacute; la bienvenida a los visitantes en su lenguaje nativo (simpre que este sea soportado). 
		Si se detecta un lenguaje no soportado, LinPHA usar&aacute; el lenguaje por defecto.
		(vea <a href='#language'>lenguaje por defecto</a><br>
		Por defecto: deshabilidato
	";
$lang['doc_entry_theme'] = "
		Esta opcion le permite cambiar la apariencia de LinPHA por defecto. Escoje entre los <b>tres
		</b> temas disponibles (Aqua/Colored/Shadow)<br>

		Tema por defecto: Aqua
	";
$lang['doc_entry_hqthumbs'] = "
		Esta opci&oacute;n le permitir&aacute; crear vistas previas de alta calidad usando la librer&iacute;a GD.
		Se ver&aacute;  mucho mejor pero esto causa una <b>alta carga del procesador</b>.<br>
		No lo habilite si su CPU es mas lento que 1 GHz!!<br>
		Por defecto: Deshabilitado
	";
$lang['doc_entry_printing'] = "
		Esta opci&oacute;n le permite habilitar la opci&oacute;n de impresi&oacute;n de LinPHA para los usuarios invitados. 
		Si se habilita todos podr&aacute;n imprimir (El enlace y el icono \"Modos de impresi&oacute;n\" estar&aacute;n  visibles).
		Si se deshabilita, los usuarios deber&aacute;n iniciar sesi&oacute;n para imprimir.<br>

		Por defecto: Deshabilitado
	";
$lang['doc_entry_slideshow'] = "
		Esta opci&oacute;n le permite habilitar/deshabilitar la caracteristica de despliegue automatico de las imagenes. si su servidor tiene un ancho de banda peque&ntilde; o su procesador es menor a 300MHz usted debe desahabilitar esta opci&oacute;n.<br>
		Defecto: on
	";
$lang['doc_entry_miniprev'] = "
		Esta opci&oacute;n le permite habilitar/deshabilitar el uso de imagenes para los botones de Siguiente/Atras en el archivo img_view.php en vez de un icono en forma de flecha. si usted tiene mas visitantes con ancho de banda bajo, deberia de deshabilitar esta opci&oacute;n debido a que causa un sobrepeso de 7kb coparado al icono de flecha.<br>
		Defecto: on
	";
$lang['doc_entry_anonpost'] = "
		Esta opci&oacute;n  le permite habilitar/deshabilitar los anuncios anonimos, si esta habilitado el visitante podr&aacute; escribir comentarios a las imagenes. si esta deshabilitado, SOLO los usuarios registrados estan permitidos a escribir comentarios.<br>

		Defecto: off
	";
$lang['doc_entry_anondown'] = "
		
		Esta opci&oacute;n  le permite habilitar/deshabilitar la descarga de imagenes si esta habilitado el visitante podr&aacute; descargar imagenes haciendo clic en el enlace. si esta deshabilitado, SOLO los usuarios registrados estan permitidos a descargar imagenes.<br>
		Defecto: off
	";
$lang['doc_entry_autologin'] = "
		Si esta opci&oacute;n esta activada, los usuarios podr&aacute;n usar el autologin. El autologin crea una cookie en la cual una clave encriptada es almacenada (MD5 hash). Esto deberia solo ser usado si esta en su propio computador. Usted puede deshabilitar esto si lo considera un problema.<br/>
		Defecto: on
	";
$lang['doc_entry_autologinuser'] = "
		Si esta opci&oacute;n esta habilitada, usted no tendr&aacute; que loguearse cada vez en el sistema. El autologin crea una cookie que tiene una clave encriptada (MD5 hash). Esto deberia ser usado si se encuentra en su propio computador.
	";
$lang['doc_entry_timer'] = "
		Esta opcion le permite habilitar/deshabilitar la salida de la hora en la parte inferior del sistema.
		<br/>Defecto: off
	";
$lang['doc_entry_anonalbdown'] = "
		This option allows you to enable/disable the function to download zipped albums for anonymous users.
		<br/>Default: off
	";
$lang['doc_entry_navigation'] = "
		This option allows you to enable/disable the navigation bar on the thumbnail pages.
		<br/>Default: off
	";
$lang['doc_entry_usermod'] = "
		Cambie nombre de usuarios, claves, correos y niveles de usuario aqui. Usted tambien puede borrar usuarios aqui.
		La informaci&oacute;n de nivel de usuario esta <a href='#usernew'>aqui</a>.
	";
$lang['doc_entry_usernew'] = "
		Use este formulario para crear nuevas cuentas de usuario y asignarles a estas claves, direcciones de correos y niveles de usuario.<br>

		El nivel de usuario (amigo/admin) le permite configurar los privilegios. <b>Advertencia!</b> si usted ofrece acceso admin, los usuarios tendran los mismos derechos que USTED!<br>
	";
$lang['doc_entry_groupnew'] = "
		Use este formulario para crear nuevos grupos. LinPHA trae 3 grupos por defecto:<br>
		Admin (no puede ser borrado), friends y uploaders.
	";
$lang['doc_entry_groupmod'] = "
		Use este formulario para borrar/modificar grupos. El grupo uploaders es especial, si usted agrega un usuario al grupo uploaders, el/ella puede usar el manejador de archivos LinPHA para subir informaci&oacute;n en su p&aacute;gina \"mi configuraci&oacute;n\".<br>
		De cualquier forma este no deberia ser borrado.
	";
$lang['doc_entry_folderperms'] = "
		Esta opci&oacute;n le permite esconder albumes/carpetas. LinPHA maneja tres estados:<br>

		<b>PUBLICO:</b> Visible para cualquier usuario, inclusive si no se autentica en el sistema.<br>
		<b>AMIGO:</b> Visible solo para los usuarios autenticados con amigo o estatus de administrador.<br>
		<b>PRIVADO:</b> Visible solo para los usuarios administradores. (no amigos)
	";
$lang['doc_entry_createthumbs'] = "
		Esto le permite crear/borrar todas las imagenes en miniatura <b>sin interactuar</b>.
		Dependiendo de la cantidad de nuevas imagenes, esto podria<b>tomar algun tiempo</b> para finalizar!<br>

		Otra forma entonces <a href='#autoconf'>Auto configurar</a>, Este script crea TODAS las imagenes en miniatura en TODAS las carpetas (recursivamente).
	";
$lang['doc_entry_recreatethumbs'] = "
		Esto le permite RE-crear todas las imagenes en miniatura <b>sin interacci&oacute;n</b>.
		Otra forma entonces<a href='#createthumbs'>Crear todas las imagenes en miniatura</a> este script recrea TODAS las imagenes en miniatura en TODAS las carpetas (recursivamente) Y TODAS los comentarios, descripciones y estadisticas se perderan.<br>
	";
$lang['doc_entry_catnew'] = "
		LinPHA le permite a usted crear categorias. estas categorias NO son visibles para losusuarios.<br>
		Este le permite a usted<b>organizar sus fotoss</b> dento de categorias como Dias de fiesta, Carros, Gatos, Cualquier cosa.
		El proposito principal<b>encontrar estos</b> mucho mas facil despues, por medio de la pagina de busqueda de LinPHA.
	";
$lang['doc_entry_catmod'] = "
		Modifique/borre todas las categorias aqui...
	";
$lang['doc_entry_benchmark'] = "
		El plugin de benchmark le permite encontrar la mejor configuraci&oacute; para el tama&ntilde;o  y calidad de las imagenes dependiendo del rendimiento de su servidor.
	";
$lang['doc_entry_watermark'] = "
		El plugin Watermark le permite colocar una marca sobre cada imagen.
		El Watermark no cambia sus imagenes, esto es generado al vuelo.
		Usted puede tomar una imagen propia o usted puede poner su propio texto sobre cada imagen.
	";
$lang['doc_entry_wm_addexamples'] = "
		Para adicionar mas imagenes de ejemplo, solo pongalas en el directorio de linpha 'plugins/watermark/examples' 
	";
$lang['doc_entry_wm_addimg'] = "
		Para adicionar mas imagenes de ejemplo, solo pongalas en eldirectorio de linpha 'plugins/watermark/watermarks'
	";
$lang['doc_entry_wm_addfont'] = "
		Para adicionar mas fuentes, solo pongalas en el directorio de linpha 'plugins/watermark/font'.
		Las fuentes tienen que ser Truetype-Fonts (.ttf). Encontraras muchas en Internet:
		<a href=\"http://directory.google.com/Top/Computers/Software/Fonts/\" target=\"_blank\">Directorios de fuentes en Google</a>

	";
$lang['doc_entry_wm_color'] = "
		Para configurar el color, usted puede usar el formato HTML ('#00FF00' or '00FF00') o texto normal como: 
		'blue' 'darkblue' etc.
	";
$lang['doc_entry_sql'] = "
		Con el manejador de la base de datos SQL, usted puede crear copias de seguridad para su base de datos actual.
	";
$lang['doc_entry_imgrotate'] = "
		Si la caracteristica de la rotaci&oacute;n de imagen de LinPHA esta deshabilitada, este seguro que:<br><br>
		<b>1. Tiene puesto los permisos correctos!</b><br>
		Tampoco ha cambiado los permisos para los archivos sobre el cual apache esta corriendo. (quizas nobody/apache/wwwrun...)
		o solo haz un chmod 666 (Solo en UNIX)...<br>

		<b>2. Verifique su versi&oacute;n de PHP</b><br>
		Si usted instalo \"convert\" de la suite de ImageMagick usted esta a salvo :)<br>
		Si usted esta usando la libreria GD para crear las imagenes en miniatura, su versi&oacute;n de PHP debe ser por lo menos <b>=4.3.0</b>. Todas las versiones anteriores no soportan la rotaci&oacute;n de imagenes.
		(ver http://su_dominio/linpha/info.php para obtener la version de PHP instalada <br>
		Deberia de actualizarse, lo siento....
	";
$lang['doc_entry_printprobs'] = "
		Si la caracteristica de LinPHA para imprimir esta deshabilitada asegurese de lo siguiente:<br><br>

		1. Su version de PHP es por lo menos <b>>=4.3.0</b>. Todas las versiones anteriores no soportan la rotacion de imagenes lo cual es requerido para poder imprimir.<br><br>
		2. Si usted no quiere actualizar si version de PHP, deberia de instalar el software \"convert\" de la suite ImageMagick el cual no depende la version de PHP instalada.<br>
		(recuerde configurar \"use_covert\" = \"1\" en la tabla linpha_config despues de instalar!!!)</b><br><br>
		3. Usted puede deshabilitar este mensaje (para los visitantes anonimos) configurando la opci&oacute;n \"impresion de visitantes\" a off en la secci&oacute;n de administraci&oacute;n. ver <a href='#printing'>Imprimiendo con LinPHA</a>

	";


?>
