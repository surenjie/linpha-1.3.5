<?php
/* language file */
/* Feel free to modify this file to make use of your native language.
If you do so, please save it as lang.YourLanguage.php in the LinPHA /lang dir
and PLEASE mail me a copy! mailto:bzrudi@tuxpower.de

--> Brazilian Portuguese translation
Mainteiner: Leonardo Rodrigues <leolistas@solutti.com.br>
Date of Translation: 26/March/2004
Based on English Base Translation from LinPHA 0.9.3 CVS file

*/

/*#################################################
## linpha messages
#################################################*/
/* left menu */
$album="Meu Arquivo de Fotos";

/* alerts */
$alert_fopen="Erro! o arquivo n� pode ser aberto...";
$printing_probs="Problemas de Impress�";
$printing_probs_msg="Impress� Desabilitada! Veja";

/* global messages */
$subfolders="subpastas";
$img_th="Fotos";
$in_th="em"; /* used for the photos in $foldername */
$alb_th="Albuns na subpasta";
$thumb_hint_msg="clique para visualiza�o detalhada";
$latest_photo="Mais Recente";
$view_at="visualizar em";
$close_button="fechar";
$help="ajuda";
$misc_help="Ajuda Variada";

/*#################################################
## installation
#################################################*/
/* install.php (page 1) */

$welc_header="Seja bem vindo ao LinPHA";
$welc_text="Oi, esta �a p�ina inicial do &quot;The Linux Photo Archive&quot; ou LinPHA.
                        Voc�est�executando LinPHA pela primeira vez, portanto voc�PRECISA de
                        efetuar a instala�o!";
$welc_hint="<b>Antes de prosseguir:</b>";
$welc_hint1="1. D�permiss�s de escrita global no diret�io &quot;<b>linpha/sql</b>&quot; !
                        (i.e. chmod 777 sql)";
$next_button="Continuar"; /* used as left menu header in all 4 stages */
$inst_msg="Instala�o do LinPHA"; /* used as left menu header in all 4 stages */
$inst_status_1="Por favor selecione um idioma e clique em &quot;Continuar&quot;";
$inst_status_step1="Passo 1 de 4";

/* sec_stage_install (page 2) */
$inst_access_msg="Configura�o do tipo de acesso ao Banco de Dados";
$inst_full_access_msg="<b>SIM !</b><br> Eu tenho total acesso ao banco de dados MySQL, tenho permiss� de criar novos<br>
                                                databases e novos usu�ios. Resumindo: Esse servidor �MEU!";
$inst_limited_access_msg="<b>N� !</b><br> Eu preciso instalar LinPHA com acesso limitado ao banco de dados<br>
                                                MySQL. Meu provedor n� permite que eu crie novos databases nem usu�ios.";
$inst_status_2="Por favor selecione o tipo de acesso ao MySQL. Na dvida selecione N�!";
$inst_status_step2="Passo 2 de 4";

/* requirements */
$req_check_msg="Verificando requisitos do sistema";
$req_found_msg="OK, encontrado";
$req_miss_msg="N� encontrado";
$req_safe_fail="HABILITADO";
$req_safe_ok="DESABILITADO";
$php_safemode_check_msg="verificando por 'safe mode' do PHP...";
$php_version_check_msg="verificando vers� do PHP > 4.1.0...";
$mem_check_msg="verificando limites de uso de mem�ia do PHP...";
$gd_check_msg="verificando exist�cia da biblioteca gr�ica GD...";
$convert_check_msg="verificando exist�cia da biblioteca gr�ica ImageMagick...";
$exif_check_msg="verificando por suporte ao EXIF no PHP";
$summary_msg="RESUMO:";
$safe_mode_err="Seu servidor est�configurado para utilizar o safe_mode do PHP. LinPHA n� vai funcionar
			 enquanto o safe_mode estiver habilitado no php.ini !";
$inst_abort_msg="!!! INSTALA�O ABORTADA !!!";
$php_version_err="Seu servidor est�utilizando vers� de PHP < 4.1.0. LinPHA n� vai funcionar
			 enquanto voc�n� atualizar a vers� do PHP.";
$gd_convert_err="As bibliotecas gr�icas GD e ImageMagick n� foram encontradas. LinPHA n� vai funcionar
			 enquanto voc�n� instalar pelo menos uma das duas.";
$convert_sum_found_msg="A biblioteca gr�ica ImageMagick foi encontrada no seu servidor. Esta biblioteca permite
			ao LinPHA criar miniaturas com alta qualidade.";
$convert_sum_miss_msg="A biblioteca gr�ica ImageMagick N� foi encontrada no seu servidor. A falta dessa biblioteca
			resultar�em miniaturas de baixa qualidade.";
$exif_sum_found_msg="O suporte EXIF foi encontrada na sua instala�o do PHP. Esse suporte permitir�ao LinPHA
			exibir informa�es detalhadas das fotos.";

/* TODO (change this one)
$exif_sum_miss_msg="Suporte EXIF N� encontrado na sua instala�o do PHP. Isso impedir�o LinPHA
			de exibir informa�es detalhadas das fotos.";
to ==>*/
$exif_sum_miss_msg="Suporte EXIF N� encontrado na sua instala�o do PHP. Vamos utilizar o decodificador
			EXIF incluso no LinPHA no seu lugar.";
/* TODO next 3 */
$session_path_check_msg="verificando por session_safe_path...";
$session_path_found_msg="session_safe_path est�configurado no php.ini. Suporte a login no LinPHA
			dever�funcionar corretamente. O caminho configurado � ";
$session_path_miss_msg="N� encontramos o valor de session_save_path. Voc�DEVE configurar session_save_path
			no php.ini, caso contr�io voc�n� conseguir�se logar no LinPHA posteriormente";
$mem_limit_ok_msg="Beleza, o limite de mem�ia do PHP �>= 16MB. Voc�n� dever�ter problema para a
			cria�o das miniaturas.";
$mem_limit_low_msg="Hmmm, o limite de mem�ia do PHP �<=16MB. Se voc�enfrentar problemas na cria�o das
			miniaturas, como alguns faltando, tente aumentar o memory_limit no php.ini ou redimensionar suas
			imagens para uma resolu�o menor e tente novamente...";
$choose_def_quali="Selecione a resolu�o padr� das fotos";
$choose_def_quali_warn="N� configure alta qualidade se sua CPU for &lt; 1Ghz (alta carga na CPU)";

/* third_stage_install (page 3) */
$inst_superadmin_header="Configura�o de Administra�o do MySQL";
$inst_superadmin_name="Usu�io Administrador do MySQL:";
$inst_superadmin_name_info="<-o usu�io com privil�ios de administrador do MySQL (j�deve existir no MySQL)";
$inst_superadmin_pass="Senha do Administrador MySQL:";
$inst_superadmin_pass_info="<-senha do administrador MySQL (deve ser a cadastrada no MySQL)";

$inst_admin_header="Configura�o do Administrador LinPHA";
$inst_admin_name="Nome do Administrador LinPHA:";
$inst_admin_name_info="<-nome de usu�io a ser criado para administrar o LinPHA";
$inst_admin_pass="Senha do Administrador LinPHA:";
$inst_admin_pass_info="<-senha que ser�cadastrada para o usu�io acima";
$inst_admin_email="Email do Administrador:";
$inst_admin_email_info="<-Configure o endere� eletr�ico do Administrador LinPHA";

$inst_db_header="Configurando a conex� com o Banco de Dados MySQL";
$inst_db_host="Servidor:";
$inst_db_host_info="<-endere� do servidor: geralmente &quot;localhost&quot;";
$inst_db_host_info2="<-o endere� do servidor MySQL a ser utilizado";
$inst_db_host_port="Porta:";
$inst_db_host_port_info="<-porta: na dvida n� mexa :)";
$inst_db_name="Database para o LinPHA:";
$inst_db_name_info="<-nome do database a ser utilizado pelo LinPHA, geralmente &quot;linpha&quot;";
$inst_db_name2="Database:";
$inst_db_name_info2="<-database que lhe foi fornecido pelo provedor";
$inst_table_prefix="Prefiro para as tabelas do LinPHA";
$inst_table_prefix_info="<-prefixo a ser utilizado para identificar as tabelas do LinPHA no database";

$general_header="Configura�o de Op�es Gerais";
$general_album_title="T�ulo do �bum de fotos";
$general_album_title_info="<-deixe em branco para usar o padr�";
$general_photos_row="Nmero de linhas para exibi�o:";
$general_photos_row_info="<-linhas de miniaturas a serem exibidas";
$general_photos_col="Nmero de colunas para exibi�o:";
$general_photos_col_info="<-colunas de miniaturas a serem exibidas";
$general_photos_width="Tamanho da exibi�o detalhada (altura):";
$general_photos_width_info="<- 512 (padr�)";
$general_photos_height="Tamanho da exibi�o detalhada (largura):";
$general_photos_height_info="<- 384 (padr�)";
$general_img_quality="Qualidade da foto detalhada:";
$general_img_quality_info="<- ajuste a qualidade da imagem 0-100 (padr� 75)";

$inst_status_3="Por favor preencha TODOS os campos!";
$inst_status_step3="Passo 3 de 4";

/* forth_stage_install (page 4) */
$inst_status_4="Parab�s, a instala�o foi conclu�a! LinPHA est�pronto para ser utilizado";
$inst_status_step4="Passo 4 de 4";
$inst_submit="Finalizar";
$inst_db_tryconn="Tentando conectar ao banco de dados";
$inst_db_tryconn_error="Erro na tentativa de conectar ao banco de dados, usando:";
$inst_db_tryconn_ok="OK, conectado!";
$inst_db_tryinst="Tentando criar o database:";
$inst_db_tryinst_error="Erro ao tentar criar o database:";
$inst_db_tryinst_ok="OK, criado!";
$inst_create_tb_msg="OK, criando todas as tabelas";

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
$inst_db_connect_inc_msg="Erro na tentativa de conectar ao banco de dados!";
$inst_db_connect_inc_msg1="Erro ao tentar selecionar ".@$db_realname." do Banco de Dados<br>
	Se essa mensagem apareceu DURANTE a instala�o, voc�ter�que REMOVER o arquivo<br>
	db_connect.php no diret�io &quot;sql&quot; do linpha!";
/* ------------------------------------------------------------------ */

$table_create="Criando tabela:";
$table_create_error="Erro durante a cria�o da tabela!";
$table_create_ok="OK, criada!";
$table_insert_admin="Criando conta Administrador utilizando nome:";
$table_insert_admin_error="Erro durante a cria�o da conta Administrador!";
$table_insert_admin_ok="OK, criado!";
$write_db_config="Armazenando configura�es do Banco de Dados no arquivo";
$fopen_error="Problema ao abrir sql/db_config.php para escrita, fa� chmod 777 e reinicie a instala�o.";
$fopen_ok="OK, configura�es escritas!";
$install_finish_msg="OK. Instala�o conclu�a!!";
$admin_task="clique para continuar";
$file_create_ok="OK, criado!";
$configure_error="Por favor preencha todos os campos obrigat�ios !!!";
$could_not_open="Erro, n� pude abrir a tabela de usu�ios! Aparentemente voc�n� possui permiss� de<br>
				adicionar novos usu�ios ao Banco de Dados. Por favor selecione o m�odo de<br>
				instala�o com acesso limitado na etapa 2 da instala�o.<br>";

/*#################################################
## header.php
#################################################*/
$page_title="LinPHA - �bum de Fotos para Linux";
$head_title="�bum de Fotos para Linux";
$book_home="inicial";
$book_about="sobre";
$book_admin="gerenciador";
$book_admin_user="minhas configura�es";
$book_links="links";
$book_search="busca";
$book_logout="encerrar";
$book_login="logar";
$num_pictures="fotos:";
$user_visits="visitas";
$user_online="usu�ios conectados";
$guest="convidado";
$html_lang="pt_BR";
$html_charset="iso-8859-1";

/*#################################################
## index.php
#################################################*/
$index_welc_text="Oi, esta �a p�ina inicial do &quot;The Linux Photo Archive&quot; ou LinPHA.
			N� deixe de verificar <a href='http://linpha.sf.net/'><u>Sourceforge</u></a> para as mais recentes atualiza�es.";

/*#################################################
## search.php
#################################################*/
$search_header="Busca";
$radio_all="Tudo";
$radio_descript="Descri�o";
$radio_comment="Coment�ios";
$radio_category="Categorias";
$radio_file="Nome do Arquivo";
$search_in="Procurar no �bum";
$search_all="Todos �buns";
$search_for="Procurar Palavra-Chave";
$search_button="Busca";
$photos_found="encontradas";
$search_info="P�ina de Procura";
$search_msg="Fa� uma busca no Banco de Dados de Fotos utilizando:";

/*#################################################
## img_view.php
#################################################*/
$img_detail="Detalhes do Arquivo";
$img_size="Tamanho Original";
$img_com="coment�io";
$img_des="descri�o";
$img_cat="categoria";
$img_name="nome";
$img_info_stored="Coment�ios armazenados no Banco de Dados";
$please_login="Por favor <a href='login.php'><font color='#000099'><u>logue-se</u></font></a> para fazer um coment�io";
$back_to_thumbs="<b><u>voltar para tela de �dice</u></b>";
$back_to_search="<b><u>voltar para tela de busca</u></b>";
$button_next="pr�ima";
$button_prev="anterior";
$exif_ext_error="Vers� do PHP n� possui suporte EXIF, sinto muito";
$exif_error="Sinto muito, a imagem n� possui nenhuma informa�o EXIF!";
$exif_more="mais detalhes";
$exif_less="menos detalhes";
$detail_header="Foto";
$detail_header1="de";
$detail_header2="na pasta<br>";
$php_to_old="PHP < 4.2.0, EXIF desabilitado!";
$views="visualiza�es";
$slideshow="Sequ�cia de Slide";
$seconds="segundos";
$go="Agora";
$stopslide="Parar Sequ�cia de Slides";
/* image rotating */ /* TODO next */
$img_rotate_ok="rotacionar imagem";
$img_rotating="Problemas ao rotacionar a imagem"; // TOC entry
$img_rotating_hint1="Rota�o de imagens DESABILITADA! clique";
$img_rotating_hint2="para visualizar o motivo.";

/*#################################################
## login.php
#################################################*/
$login_msg="Por favor logue-se!";
$login_error="usu�io ou senha desconhecidos";
$login_name="Nome de Usu�io";
$login_pass="Senha";
$login_info="P�ina de Autentica�o";
$login_request_account_info="Para solicitar uma nova conta:"; /* TODO change! */
$login_request_target="Entre em contato com o Administrador do LinPHA"; /* TODO */
$login_admin_info="Para executar tarefas administrativas, favor logar-se com uma conta de admin";
$login_friend_account_info="Se voc�j�tem uma conta de &quot;amigo&quot;, voc�poder�modificar suas configura�es pessoais aqui.";


/*#################################################
## admin.php
#################################################*/
/* other messages */
$admin_page_header="Administra�o do LinPHA";
$please_turn_off_msg="Por favor configure 'Cria�o/Remo�o Autom�icas de Miniaturas' DESLIGADO ao adicionar fotos.<br>
						LinPHA deve executar 10 vezes mais r�ido assim :)";
/* left menu */
$logout_msg="encerrar";
$welc_msg="Bem vindo ";
$stat_msg="Voc�est�autorizado a executar tarefas administrativas, assim como adicionar <b>coment�ios</b> e descri�es para as fotos";
$back_to_msg="<b>voltar � fotos</b>";
$href_general_conf="Configura�es Gerais";
$href_user_conf="User/Group Management";
$href_folder_conf="Gerenciamento de Pastas";
$href_sql="Gerenciamento do Banco MySQL"; /* TODO */
$href_ftp="Gerenciamento de Arquivos";
$href_stats="Estat�ticas";
$href_other_conf="Outras Op�es";


/* general config */
/* uses also entries from install.php */
$default_language="Idioma padr� do LinPHA";
$default_language_info="<--selecione idioma padr�";
$general_auto_lang="Ligar/Desligar auto-detec�o de idioma"; /* TODO 2 lines*/
$general_auto_lang_info="<-- detecta automaticamente o idiona do navegador do visitante";
$general_success_msg="! Altera�es Salvas !";

/* TODO 6 lines (addition and REPLACEMENT)*/
$general_rotate="Ligar/Desligar rota�o de imagens";
$general_rotate_info="<-- <b>aviso! clique em informa�es</b>";
$general_exifinfo="Ligar/Desligar TODO suporte EXIF";
$general_exifinfo_info="<-- ligar/desligar o uso do recurso EXIF";
$general_exifdefault="Mostrar informa�es EXIF por padr�";
$general_exifdefault_info="<-- habilita a exibi�o de informa�es EXIF por padr�";

$general_exiflevel="N�el da informa�o EXIF";
$general_exiflevel_info="<-- quantidade de informa�o EXIF a ser mostrada";
$exif_low="baixo";
$exif_medium="m�io";
$exif_high="alto";
$general_filename="Ligar/Desligar Nomes de Arquivos";
$general_filename_info="<-- habilite para mostrar nome do arquivo abaixo de sua miniatura";
$general_thumb_order="Ordenar miniaturas por";
$general_thumb_order_info="<-- configure ordena�o por nome do arquivo ou data";
$thumb_order_date="Data";
$thumb_order_file="Nome";
$general_autoconf="Cria�o/Exclus� Autom�ica de Miniaturas";
$general_autoconf_info="<-- <b>deixe DESLIGADO para grande melhora na performance</b>";
$general_counterstat="Ligar/Desligar Contador";
$general_counterstat_info="<-- ligado por padr�";
$general_blocking="Tempo de Bloqueio de IP em minutos";
$general_blocking_info="<-- usu�io daquele IP n� �contado como novo por XX minutos";
$general_theme="Selecione o tema padr� para o LinPHA";
$general_theme_info="<-- selecione o tema a ser usado no LinPHA";
$aqua_theme="Aqua";
$colored_theme="Colored";
$neptune_theme="Neptune";
$shadow_theme="Shadow";
$general_hq="Ligar/Desligar fotos e miniaturas em alta qualidade";
$general_hq_info="<-- desabilite para ganho de performance";
$submit_button_general="Salve modifica�es no Banco de Dados";
$button_on_msg="ligado";
$button_off_msg="desligado";
$basic_opts="B�ico";
$advanced_opts="Avan�do";
$show_basics="Clique para modificar Op�es B�icas";
$show_advanced="Clique para modificar Op�es Avan�das";
$general_printing="Ligar/Desligar impress� para convidados";
$general_printing_info="<-- ligado, todo mundo pode imprimir";
$general_slideshow="Ligar/Desligar Sequ�cia de Slides";
$general_slideshow_info="<-- configura recurso ligado/desligado";
$general_mini_preview="Ligar/Desligar mini imagens";
$general_mini_preview_info="<-- desliga se muitos usu�ios n� forem banda larga";

/* modify existing user table */
$mod_user_header="Modificar Usu�ios Existentes";
$submit_button_mod_user="Modificar";
$mod_user_success_msg="! Usu�io Modificado !";
$submit_button_delete="Excluir";
$del_user_success_msg="! Usu�io Exclu�o !";

/* add new user table */
$new_user_header="Adicionar Novos Usu�ios";
$new_user_name_info="Nome de Usu�io";
$new_user_pass_info="Senha";
$new_user_mail_info="Email";
$new_user_level_info="N�el";
$friend="amigo";
$submit_button_new_user="Adicionar";
$new_user_success_msg="! Usu�io Criado !";

/* friends account table */
$friend_user_header="Configura�es da Conta";
$submit_button_friend_user="Modifica";
$delete_button_friend_user="Exclui";
$friend_info_msg="Visualiza/Modifica configura�es da sua conta";

/* add new category table */
$new_cat_header="Adicionar Nova Categoria";
$new_cat_info="nome da nova categoria";
$submit_button_new_cat="adicionar";
$new_cat_success_msg="! Categoria Adicionada !";
$mod_cat_header="Modificar/Excluir Categorias";
$cat_name_header="Nome da Categoria";
$cat_mod_header="Modificar";
$cat_del_header="Excluir";
$submit_button_mod_cat="Modificar";

/* set directory permissions */
$set_dir_perms_header="Configura Permiss�s de Pastas";
$dir_name="Pasta";
$dir_perms="Permiss�";
$action="A�o";
$submit_button_folder="Enviar";
$public="pblica";
$friends="amigos";
$private="privada";
$new_perms_success_msg="! Permiss�s Alteradas !";

/*#################################################
## build_stats.php (called by admin.php)
#################################################*/
$stats_over_header="Estat�ticas Gerais";
$stats_over_photos="Fotos no Banco de Dados:";
$stats_over_views="Visualiza�o M�ia de Fotos:";
$stats_over_albums="�buns no Banco de Dados:";
$stats_over_most_alb_visists="�bum Mais Visitado:";
$stats_over_space="Espa� em disco utilizado (TODOS �buns):";
$stats_over_visitors="Visitantes at�agora:";
$stats_over_users="Usu�ios registrados:";
$stats_top_ten="Top 10 em visualiza�es";
$stats_rank="Posi�o:";
$stats_no_views="Visualiza�es:";
$stats_last_view="�tima Visualiza�o:";
$stats_alb_name="�bum:";

/*#################################################
## create_all_thumbs.php
#################################################*/
$parse_first="Processando PRIMEIRO est�io";
$parse_sec="Processando SEGUNDO est�io";
$parse_third="Processando TERCEIRO est�io";
$parse="processando";
$parsed="processado:";
$dirs="subpastas";
$done="TUDO PRONTO...";
$not_allowed_msg="Sinto muito, voc�<b>N�</b> tem permiss� para executar este script!";
/* these entries are called from within admin.php */
$th_msg="Criar TODAS as miniaturas de uma vez s�";
$table_hint_msg="Clique para criar as miniaturas em todas as pastas agora!";
$start_button="Crie!";
$recreate_thumbs_header="Recriar TODAS as miniaturas";
$recreate_thums_msg="Ser�feita a RECRIA�O de TODAS as miniaturas. Todas as estat�ticas ser� perdidas!";
/* TODO */
$recreate_thums_warning="Please confirm your intention to recreate all the thumbnails, and DELETE ALL THE COMMENTS, DESCRIPTION AND STATS! This operation cannot be undone. Are you sure you want to continue?";

/*#################################################
## Printing, all files
#################################################*/
$print_layout="Selecione Layout para Impress�";
$images_page="Imagens/P�ina";
$indexprint="Impress� de �dice (28)";
$note="<strong>NOTE:</strong> You may have to adjust your browsers \"page setup\"
			before printing, to make sure all photos fit on page !!!";
$note="<strong>AVISO:</strong> Voc�provavelmente precisar�ajustar as \"Configurar P�ina\"
			antes de imprimir para certificar que todas as imagens cabem em uma p�ina !!!";
$print_button="Visualizar Impress�";
$href_check_all="Marcar Todas";
$href_clear_all="Desmarcar Todas";
$print_error="ERRO, nenhuma imagem selecionada !!!";
$print_mode="Modo de Impress�";
$print_image="Imprimir";
$videos_msg="Imposs�el Imprimir V�eo";

/*#################################################
## FTP, all files
#################################################*/


/*#################################################
## MySQL backup, most files ;-)
#################################################*/
$mysql_info_header="LinPHA Gerenciador MySQL vers�";
$mysql_cancel="Cancelar";
$mysql_DHTML_hint="Visualiza�o DHTML est�desabilitada - voc�n� poder�ver nada at�que o backup seja conclu�o.";
$mysql_select_all="Marcas Todas";
$mysql_deselect_all="Desmarcar Todas";
$mysql_create_backup="Criar Backup";
$mysql_back_menu="Voltar ao Menu";
$mysql_table_checks="Checando Tabelas...";
$mysql_table_check="Checando Tabela";
$mysql_struct_msg="Criando estrutura para";
$mysql_in_file_dump_msg="dump de dados para";
$mysql_progress="Progresso Geral:";
$mysql_back_complete="Backup completo em";
$mysql_back_menu_long="Voltar para menu do Gerenciador de Backups MySQL";
$mysql_open_warn1="<B>AVISO:</B> problemas ao abrir ";
$mysql_open_warn2="para escrita!<BR><BR><I>CHMOD 777</I> nesse diret�io deve resolver.";
$mysql_date_msg="Hor�io atual: "; // it follows time of the day...
$mysql_last_backup="�timo backup completo do MySQL: ";
$mysql_backup_hint="Geralmente n� �necess�io fazer backup mais de uma vez por semana.";
$mysql_down_backup="Pegue o backup completo anterior ";
$mysql_down_backup_part="Pegue o backup parcial anterior ";
$mysql_down_backup_struct="Pegue o backup apenas das estruturas anterior ";
$mysql_down_backup1="(clique com bot� direito, Salvar Como...)";
$mysql_unknown_backup="�timo backup completo do MySQL: <I>desconhecido</I>";
$mysql_href_recom="Criar um novo backup completo, INSERTs completos (recomendado)";
$mysql_href_standard="Criar um novo backup completo, INSERTs padr� (menor)";
$mysql_href_partial="Criar um novo backup parcial, apenas algumas tabelas apenas (INSERTs completos)";
$mysql_href_structure="Criar um novo backup completo, somente de estruturas";
$mysql_days_last="dias";
$mysql_hours_last="horas";
$mysql_min_last="minutos";
$mysql_sec_last="segundos";
$ago="atr�"; // reads in context "some days ago"
$backup="Backup";
$restore="Restaura";
$optimize="Otimizar";
$optimize_tables="Otimizando Tabelas";
$opt_table_name="Nome";
$opt_table_check="Verifica�o";
$opt_table_optimize="Otimiza�o";
$opt_table_msg="Tipo de Mensagem";
$opt_start_msg="Iniciar Verifica�o e Otimiza�o de todas as tabelas do Banco de Dados";
$fullback_hint_msg="Se voc�possuir v�ios databases, por favor selecione o m�odo <b>parcial</b> de backup";
$restore_last_fullback="Restaurar o ltimo backup <b>completo</b>:";
$restore_last_partback="Restaurar o ltimo backup <b>parcial</b>:";
$restore_error="ERRO na abertura do arquivo de backup. Arquivo N� encontrado!";
$restore_success="restaurado com sucesso!";

/*########################################################################
### FILEMANGER
########################################################################*/

define('STR_ACCESS_DENIED','<H1>Acesso Negado !</H1> Voc�n� tem permiss� para acessar este diret�io.');
define('STR_BACK',	'voltar');
define('STR_LESS',	'anterior');
define('STR_MORE',	'pr�ima');
define('STR_LINES',	'linhas');
define('STR_FUNCTIONLIST', 'Lista de Fun�es');
define('STR_EDIT',	'editar');
define('STR_VIEW',	'visualizar');
define('STR_RENAME',	'renomear');
define('STR_MKDIR',	'criar diret�io');
define('STR_DELETE',	'excluir');
define('STR_BOTTOM',	'abaixo');
define('STR_TOP',	'acima');
define('STR_FILENAME',	   'nome do arquivo');
define('STR_FILESIZE',	   'tamanho');
define('STR_LASTMODIFIED', 'ltima modifica�o');
define('STR_SUM', '<B>%s</B> byte(s) em <B>%s</B> arquivo(s)');
define('STR_CREATEDIRLEGEND', 'cria um diret�io');
define('STR_CREATEDIR',       'nome do diret�io a ser criado:');
define('STR_CREATEDIRBUTTON', 'criar diret�io');
define('STR_RENAMELEGEND',       'renomear diret�io/arquivo');
define('STR_RENAMEENTERNEWNAME', 'digite o novo nome de %s:');
define('STR_RENAMEBUTTON',       'renomeia');
define('STR_ERROR_DIR','Error: could not read directory contents');
define('STR_ERROR_DIR','Erro: n� pude ler o contedo do diret�io');
define('STR_AUDIO',            '�dio');
define('STR_COMPRESSED',       'compactado');
define('STR_EXECUTABLE',       'execut�el');
define('STR_IMAGE',            'imagem');
define('STR_SOURCE_CODE',      'c�igo fonte');
define('STR_TEXT_OR_DOCUMENT', 'texto ou documento');
define('STR_WEB_ENABLED_FILE', 'arquivo web');
define('STR_VIDEO',            'v�eo');
define('STR_DIRECTORY',        'diret�io');
define('STR_PARENT_DIRECTORY', 'diret�io acima');
define('STR_EDITOR_SAVE',      'salvar arquivo');
define('STR_EDITOR_SAVE_ERROR','o arquivo <I>%s</I> n� pode ser escrito ou n� existe');

define('STR_EDITOR_SAVE_ERROR_WRONG_VALUE','ao editar o arquivo <I>%s</I>, voc�forneceu o seguinte valor na posi�o #%s: %s.');
define('STR_EDITOR_SAVE_ERROR_HEX_VALUE_NEEDED','de acordo com as configura�es, voc�deve fornecer um hexadecimal positivo entre 00 e FF.');
define('STR_EDITOR_SAVE_ERROR_DEC_VALUE_NEEDED','de acordo com as configura�es, voc�deve fornecer um nmero decimal positivo entre 0 e 255.');
define('STR_FILE_UPLOAD_NAVI_HINT', 'Navegador Simples');
define('STR_FILE_UPLOAD_DRIVES', 'Discos:');
define('STR_FILE_UPLOAD', 'enviar');
define('STR_FILE_UPLOAD_MAIN', 'Envio de Arquivos');
define('STR_FILE_UPLOAD_DISABLED', 'desculpe, o envio de arquivos est�desabilitado no php.ini');
define('STR_FILE_UPLOAD_DESC','Selecione os arquivos que voc�gostaria de enviar. Selecione a a�o a ser executada ap� o envio bem sucedido.');
define('STR_FILE_UPLOAD_FILE','Arquivo');
define('STR_FILE_UPLOAD_TARGET','Enviar arquivo(s) para');
define('STR_FILE_UPLOAD_ACTION','ap� o upload executar:');
define('STR_FILE_UPLOAD_NOTHING','nada');
define('STR_FILE_UPLOAD_DROPFILE','excluir o arquivo enviado quando a a�o for finalizada');
define('STR_FILE_UPLOAD_MAXFILESIZE','Tamanho m�imo (de cada arquivo) configurado no php.ini �');

define('STR_FILE_UPLOAD_ERROR',        'Erro: Imposs�el mover o arquivo %s para o diret�io %s');
define('STR_FILE_UPLOAD_CHDIR_ERROR',  'Erro: Imposs�el mudar para o diret�io %s. Arquivo sendo processado: %s');
define('STR_FILE_UPLOAD_UNLINK_ERROR', 'Erro: Imposs�el excluir %s ap� o processamento.');
define('STR_FILE_UPLOAD_ERROR_FILE_EXCEEDS_INI_SIZE', 'Erro: O arquivo %s excedeu a configura�o upload_max_filesize do php.ini - %s');
define('STR_FILE_UPLOAD_ERROR_FILE_EXCEEDS_FORM_SIZE','Erro: O tamanho do arquivo %s excedeu as configura�es do FORM HTML');
define('STR_FILE_UPLOAD_ERROR_FILE_PARTIAL',          'Erro: O arquivo %s s�foi _parcialmente_ enviado');

/*########################################################################
### BIG FAT NOTICE !
### AS OF LINPHA 0.9.0 ALL NEW ENTRIES ARE PLACED BELOW THIS MSG
### DEVELOPERS PLEASE MAKE USE OF THE "LANGUPDATE.PHP" SCRIPT!
########################################################################*/

$pano_view="Visualiza�o Panor�ica"; /* (img_view.php) -- new [panorama view] href  */
$close_win="Fechar Janela"; /* (various files) -- javascript close window */
$nav_hint="Por favor utilize o mouse ou as teclas de dire�o para navegar!"; /* (image_panorama_view.php) --  */
$pano_view_of="Visualiza�o Panor�ica da Imagem"; /* (image_panorama_view.php) -- header message */
$php_basedir_check_msg="verificando se open_basedir do PHP est�configurado..."; /* (sec_stage_install.php) --  */
$req_basedir_fail="N�"; /* (sec_stage_install.php) -- YES, it\'s really just no/nein ;-) */
$basedir_active_msg="N� n� n�, voc�configurou o PHP para utilizar \"open_basedir\".!<br>"; /* (sec_stage_install.php) --  */
$basedir_active_msg1="+ Utilizaremos a biblioteca HD para gerar miniaturas, mas alguns problemas podem ocorrer (Filemanager and others)<br>"; /* (sec_stage_install.php) --  */
$basedir_active_msg2="+ Se for poss�el, por favor desconfigure \"open_basedir\" no php.ini"; /* (sec_stage_install.php) --  */
$gd_basedir_err="+ Se for poss�el, por favor desconfigure \"open_basedir\" no php.ini ou recompile o PHP com suporte a biblioteca GD (--with-gd)"; /* (sec_stage_install.php) --  */
$extract_tar_gz="extrair arquivo *.tar.gz (UNIX)"; /* (index.php) -- filemanger upload select */
$extract_tar_bz2="extrair arquivo *tar.bz2 (UNIX)"; /* (index.php) --  */
$extract_gz="extrair com gzip (UNIX)"; /* (index.php) -- filemanger upload select */
$extract_zip="extrair com unzip (UNIX)"; /* (index.php) -- filemanger upload select */
$extract_winzip="extrair com pkzip (WINDOWS WINZIP)"; /* (index.php) -- filemanger upload select */
$new_group_success_msg="! Grupo adicionado !"; /* (admin.php) -- redirect message */
$mod_group_success_msg="! Grupo modificado !"; /* (admin.php) -- redirect message */
$del_group_success_msg="! Grupo exclu�o !"; /* (admin.php) -- redirect message */
$mod_cat_success_msg="! Categoria modificada !"; /* (admin.php) -- redirect message */
$del_cat_success_msg="! Categoria exclu�a !"; /* (admin.php) -- redirect message */
$href_groups="Clique para adicionar ou remover grupos"; /* (build_user_conf/build_folder_conf) -- href message to group management */
$del_warning="AVISO: Voc�precisa efetuar login com sua nova conta !!!"; /* (build_user_conf.php) -- java popup to notify admin user */
$href_to_folder_conf="voltar ao gerenciador de pastas"; /* (build_user_conf.php) -- navi href  */
$href_to_user_conf="voltar ao gerenciamento de usu�ios"; /* (build_user_conf.php) -- navi href  */
$header_new_group="Adicionar novo grupo"; /* (build_user_conf.php) -- table header */
$header_groupname="Nome do Grupo"; /* (build_user_conf.php) -- table header */
$button_addgroup="Adicionar Grupo"; /* (build_user_conf.php) -- submit button */
$header_mod_group="Modificar/Excluir Grupos"; /* (build_user_conf.php) -- table header */
$mod_group_header="Modificar Grupo"; /* (build_user_conf.php) -- table header */
$del_group_header="Excluir Grupo"; /* (build_user_conf.php) -- table header */
$search_to_short="Crit�io de busca muito curto, precisa ter no m�imo 2 caracteres!"; /* (search.php) --  */
$general_thumb_size="Mudar tamanho da miniatura"; /* (build_general_conf.php) -- thumbsize stuff */
$general_thumb_size_info="<-- ajuste o tamanho m�imo da miniatura em pontos"; /* (build_general_conf.php) -- thumbsize stuff */
$general_thumb_border="Ligar/Desligar bordas nas miniaturas"; /* (build_general_conf.php) -- thumb border stuff */
$general_thumb_border_info="<-- ligue para adicionar uma borda � miniaturas"; /* (build_general_conf.php) -- thumb border stuff */
$inst_thumbsize_header="Selecione tamanho da miniatura"; /* (third_stage_install.php) -- thumb size stuff */
$inst_thumbborder_header="Configura�o da Borda"; /* (third_stage_install.php) -- thumb border stuff */
$inst_thumbborder_enable="ligar borda da imagem"; /* (third_stage_install.php) -- thumb border checkbox msg */
$inst_thumbborder_disable="desligar borda da imagem"; /* (third_stage_install.php) -- thumb border checkbox msg */
$safemode_active_msg="N� n� n�, voc�configurou o PHP para utilizar as restri�es de \"save_mode\" !<br>"; /* (sec_stage_install.php) --  */
$safemode_active_msg2="+ Se for poss�el, por favor desabilite \"save_mode\" no PHP.ini"; /* (sec_stage_install.php) --  */

$general_anon_post="Ligar/Desligar coment�ios an�imos"; /* (build_general_conf.php) --  */
$general_anon_post_info="<-- an�imos t� permiss� para adicionar coment�ios"; /* (build_general_conf.php) --  */
$stats_over_comment="Coment�ios postados"; /* (build_stats.php) --  */
$top10_downs_href="mostrar 10 mais downloads"; /* (build_stats.php) --  */
$top10_views_href="mostrar 10 mais visualizadas"; /* (build_stats.php) --  */
$stats_head_downs="10 mais downloads"; /* (build_stats.php) --  */
$no_downloads="Nmero de downloads"; /* (build_stats.php) --  */
$general_anon_download="Ligar/Desligar downloads an�imos"; /* (build_genera_config.php) --  */
$general_anon_download_info="<-- mostra/esconde link de download das imagens"; /* (build_general_config.php) --  */
$seach_multiple_select_use="Para selecionar mltiplos use"; /* (search.php) --  */
$search_and="E"; /* (search.php) --  */
$search_or="OU"; /* (search.php) --  */
$search_categories="Categorias"; /* (search.php) --  */
$search_with_available_filters="Com os seguintes filtros"; /* (search.php) --  */
$search_select_album="Selecione �bum"; /* (search.php) --  */
$search_date_from_to="Data de"; /* (search.php) --  */
$search_combination_and_or="Em combina�es com E e OU"; /* (search.php) --  */
$new_user_new_password="Nova senha"; /* (build_user_conf.php) --  */
$new_user_error4="Usu�io n� pode ficar vazio"; /* (admin.php) --  */
$new_user_error5="Usu�io j�existe"; /* (admin.php) --  */
$new_user_error1="Senha antiga est�incorreta"; /* (admin.php) --  */
$new_user_error2="Nova senha n� confere com a senha redigitada"; /* (admin.php) --  */
$new_user_error3="Email n� est�correto"; /* (admin.php) --  */
$new_user_old_password="Senha antiga"; /* (admin.php) --  */
$new_user_retype_password="Redigite sua nova senha"; /* (admin.php) --  */
$select_db_header="Por favor selecione o tipo de Banco de Dados"; /* (sec_stage_install.php) --  */
$mysql_info="Selecione este para utilizar Banco de Dados MySQL"; /* (sec_stage_install.php) --  */
$postgres_info="Selecione este para utilizar Banco de Dados PostgresSQL. Por favor veja "; /* (sec_stage_install.php) -- reads: ...Please see info */
$login_autologin="Login Autom�ico"; /* (toc.php) --  */
$login_autologin_user="Informa�es de Login Autom�ico"; /* (toc.php) --  */
$toc_timer="Tempos"; /* (toc.php) --  */
$general_autologin="Ligar/Desligar Login Autom�ico"; /* (build_general_conf.php) --  */
$general_autologin_info="<-- ativar a op�o de utilizar Login Autom�ico"; /* (build_general_conf.php) --  */
$general_timer="Ligar/Desligar tempos"; /* (build_general_conf.php) --  */
$general_timer_info="<-- ativa a exibi�o do tempo de processamento no rodap�"; /* (build_general_conf.php) --  */
$login_autlogin="Login Autom�ico"; /* (login.php) --  */
$lostpw_title="Senha Perdida"; /* (login.php) --  */
$lostpw_question="Perdeu sua senha?"; /* (login.php) --  */
$lostpw_type_user_or_email="Digite seu usu�io OU seu email cadastrado"; /* (login.php) --  */
$lostpw_email1="Algu� utilizou o recurso de Senha Perdida nessa conta. Se n� foi voc� simplesmente ignore esta mensagem e nada vai acontecer com sua senha. Se foi voc� coloque este c�igo no campo solicitado:"; /* (login.php) --  */
$lostpw_email1_part2="(Lembre-se: Esta N� �sua nova senha!)"; /* (login.php) --  */
$lostpw_email1_part3="Administrador do Linpha"; /* (login.php) --  */
$lostpw_email_error="ERRO: O email n� pode ser enviado. Por favor entre em contato com o Administrador."; /* (login.php) --  */
$lostpw_error_nothing_found="Desculpe, nenhum usu�io ou senha foi encontrado utilizando seus crit�ios de busca."; /* (login.php) --  */
$lostpw_email_sent="Email com c�igo foi enviado para voc�"; /* (login.php) --  */
$lostpw_should_receive="Voc�deve receb�lo nos pr�imos minutos. Coloque o c�igo que est�na mensagem aqui:"; /* (login.php) --  */
$lostpw_go_back="Voltar"; /* (login.php) --  */
$lostpw_email2="Senha alterada com sucesso. Sua nova senha �"; /* (login.php) --  */
$lostpw_email2_part2="Voc�pode alter�la mais tarde utilizando o link \"minhas configura�es\"."; /* (login.php) --  */
$lostpw_new_password="Nova Senha"; /* (login.php) --  */
$lostpw_successfully_changed="Senha alterada com sucesso, voc�deve receber um email nos pr�imos minutos com a nova senha."; /* (login.php) --  */
$lostpw_error_wrong_code="Desculpe, o c�igo n� est�correto."; /* (login.php) --  */
$lostpw_enter_correct_code="Entre o c�igo do email neste campo:"; /* (login.php) --  */
$lang_plugins['plugins']="Plugins do LinPHA"; /* (admin.php) --  */
$lang_plugins['watermark']="Marca d'�ua"; /* (admin.php, toc.php) --  */
$lang_plugins['benchmark']="Performance"; /* (admin.php, toc.php) --  */
$lang_plugins['sql']="Gerenciamento de Banco de Dados"; /* (admin.php, toc.php) --  */
$lang_plugins['active_plugins']="Plugin Ativos"; /* (admin.php) --  */
$lang_plugins['enabled']="Ligado"; /* (plugins.php) --  */
$lang_plugins['disabled']="Desligado"; /* (plugins.php) --  */
$lang_plugins['update']="Atualiza"; /* (plugins.php) --  */
$lang_plugins['plugins_updated']="Plugins atualizados"; /* (admin.php, plugins.php) --  */
$wm_wm_man="Gerenciamento de Marca d'�ua "; /* (watermark.php) --  */
$wm_disable="Desativa Marca d'�ua "; /* (watermark.php) --  */
$wm_change_example_img="Selecione imagem de exemplo "; /* (watermark.php) --  */
$wm_no_input_files_found="Nenhum arquivo de entrada encontrado "; /* (watermark.php) --  */
$wm_image_quality="Qualidade da Imagem (apenas para preview) "; /* (watermark.php) --  */
$wm_enable_text="Habilitar: Texto "; /* (watermark.php) --  */
$wm_text="Texto "; /* (watermark.php) --  */
$wm_font="Fonte "; /* (watermark.php) --  */
$wm_fontsize="Tamanho da Fonte "; /* (watermark.php) --  */
$wm_fontcolor="Cor da Fonte "; /* (watermark.php) --  */
$wm_align="Alinhamento "; /* (watermark.php) --  */
$wm_pos_hor="Posicionamento Horizontal "; /* (watermark.php) --  */
$wm_pos_ver="Posicionamento Vertical "; /* (watermark.php) --  */
$wm_height="Altura do Campo de Texto "; /* (watermark.php) --  */
$wm_width="Largura do Campo de Texto "; /* (watermark.php) --  */
$wm_shadow_size="Tamanho da Sombra "; /* (watermark.php) --  */
$wm_shadow_color="Cor da Sombra "; /* (watermark.php) --  */
$wm_enable_image="Habilitar: Imagem"; /* (watermark.php) --  */
$wm_available_images="Imagens Dispon�eis"; /* (watermark.php) --  */
$wm_no_images_found="Imagens n� encontradas"; /* (watermark.php) --  */
$wm_dissolve="Transpar�cia"; /* (watermark.php) --  */
$wm_preview="Preview"; /* (watermark.php) --  */
$wm_linebreak="para nova linha"; /* (watermark.php) --  */
$wm_enable_shadow="Habilita sombra"; /* (watermark.php) --  */
$wm_enable_rectangle="Habilita ret�gulo"; /* (watermark.php) --  */
$wm_rectangle_color="Cor"; /* (watermark.php) --  */
$wm_enable_ext_shadow="Habilita sombra extendida"; /* (watermark.php) --  */
$wm_status="Status"; /* (watermark.php) --  */
$wm_enabled="habilitada"; /* (watermark.php) --  */
$wm_disabled="desabilitada"; /* (watermark.php) --  */
$wm_restore_to="Voltar para"; /* (watermark.php) --  */
$wm_inital_settings="configura�es iniciais"; /* (watermark.php) --  */
$wm_add_more_examples="Voc�pode adicionar mais imagens de exemplo na seguinte pasta"; /* (watermark.php) --  */
$wm_example="Exemplo"; /* (watermark.php) --  */
$wm_shadow_fontsize="Tamanho da fonte da sombra"; /* (watermark.php) --  */
$wm_settings_for_both="Configura�es para imagem e texto"; /* (watermark.php) --  */
$wm_center="centro"; /* (watermark.php) --  */
$wm_north="acima"; /* (watermark.php) --  */
$wm_northeast="acima �direita"; /* (watermark.php) --  */
$wm_northwest="acima �esquerda"; /* (watermark.php) --  */
$wm_south="abaixo"; /* (watermark.php) --  */
$wm_southeast="abaixo �direita"; /* (watermark.php) --  */
$wm_southwest="abaixo �esquerda"; /* (watermark.php) --  */
$wm_east="direita"; /* (watermark.php) --  */
$wm_west="esquerda"; /* (watermark.php) --  */
$bm_file_err="ERRO, nenhum arquivo especificado";
$bm_var_err="ERRO, por favor verifique vari�eis de entrada";
$bm_notfound_err="ERRO, arquivo n� encontrado";
$bm_noimg_err="ERRO, arquivo n� �uma imagem";
$bm_tmpfile_err="ERRO, ao criar arquivo de imagem tempor�ia";
$bm_tmpfile_warn="AVISO: Imagem tempor�ia n� pode ser exclu�a";
$bm_time_total="Tempo total de execu�o: ";
$bm_img_sec="Imagens por segundo: ";
$bm_avg_img="Tempo m�io para cada imagem (passe mouse para atualizar imagem): ";
$bm_qual_size="Qualidade/Tamanho";
$bm_quality="Qualidade: ";
$bm_height="Largura: ";
$bm_width="Altura: ";
$bm_size="Tamanho da Imagem: ";
$bm_create = "Criando teste de performance com utilit�io de convers�";
$bm_interval = "intervalo";
$bm_calc = "Calculando";
$bm_img = "Imagens";
$bm_inloop="Executando loop";
$bm_qual_range="Faixa de Qualidade: ";
$bm_size_range="Faixa de Tamanho (somente largura): ";
$bm_repeats="Repeti�es: ";
$bm_con_util="Por favor selecione utilit�io de convers�: ";
$bm_current_settings="Configura�es atuais"; /* (benchmark.php) --  */
$bm_preview="Preview"; /* (benchmark.php) --  */
$bm_save_settings="Salve estas configura�es"; /* (benchmark.php) --  */
$wm_addexamples="Marca d'�ua: Adicionar mais imagens de exemplo"; /* (watermark.php) --  */
$wm_addimg="Marca d'�ua: Adicionar mais imagens de marcas d'�ua"; /* (watermark.php) --  */
$wm_addfont="Marca d'�ua: Adicionar mais fontes"; /* (watermark.php) --  */
$wm_colorsetting="Marca d'�ua: Configura�es de cor"; /* (watermark.php) --  */
$comment_hint="DICA: clique na imagem de cima ou de baixo para rolar o �bum"; /* (linpha_comments.php) --  */
$comment_end="Fim do �bum"; /* (linpha_comments.php) --  */
$comment_beginning="In�io do �bum"; /* (linpha_comments.php) --  */
$comment_back="voltar para visualiza�o de imagem"; /* (linpha_comments.php) --  */
$comment_edit_img="Edit category/comment"; /* (linpha_comments.php) --  */
$comment_change_img_details="Alterar detalhes da imagem"; /* (linpha_comments.php) --  */
$comment_last_comments="�timos Coment�ios"; /* (linpha_comments.php) --  */
$comment_comment_by="coment�io de"; /* (linpha_comments.php) --  */
$category_delete_warning="AVISO: Categorias j�designadas � imagens ser� perdidas"; /* (build_category_conf.php) --  */
$pass_2_short="ERRO, senha deve ter no m�imo 3 caracteres..."; /* (various) --  */
$album_edit="Editar coment�io do �bum"; /* (linpha_comments.php) --  */
$album_details="Detalhes do �bum"; /* (linpha_comments.php) --  */
$wm_save_note="NOTE: Marca d\'�uas N� s� vis�eis para usu�ios registrados E logados. Voc�DEVE encerrar a sess� primeiro para visualizar a marca d\'�ua nas imagens!"; /* (watermark.php) --  */
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
$date_format = "%m/%d/%Y";
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
$timespanfmt = "%s days, %s hours, %s minutes and %s seconds"; /* (new_images.php) -- */
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
$general_mini_preview_full_thm="Enable/Disable prev/next mini images as full thumbnails"; /* (build_general_conf.php) --  */
$general_mini_preview_full_thm_info="<-- enable to show buttons as full thumbnails in image viewer"; /* (build_general_conf.php) --  */
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
?>