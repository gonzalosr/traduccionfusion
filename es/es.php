<?php
/**
 * =======================================
 * ###################################
 * SWIFT Framework
 *
 * @package	SWIFT
 * @author	Kayako Infotech Ltd.
 * @copyright	Copyright (c) 2001-2009, Kayako Infotech Ltd.
 * @license	http://www.kayako.com/license
 * @link		http://www.kayako.com
 * @filesource
 * ###################################
 * =======================================
 */

/**
* BASE LANGUAGE CODES
*/

$_SWIFT = SWIFT::GetInstance();

$__LANG = array (
	'charset' => 'UTF-8',
	'html_encoding' => '8bit',
	'text_encoding' => '8bit',
	'html_charset' => 'UTF-8',
	'text_charset' => 'UTF-8',
	'yes' => 'Sí',
	'no' => 'No',
	'menusupportcenter' => 'Centro de soporte',
	'menustaffcp' => 'CP Operadores',
	'menuadmincp' => 'CP Admins',
	'module_notreg' => 'El módulo %s no está registrado',
	'event_notreg' => 'El evento %s no está registrado',
	'unable_to_execute' => 'No se ha podido ejecutar %s',
	'action_notreg' => 'La acción %s no está registrada',
	'username' => 'Usuario',
	'password' => 'Contraseña',
	'rememberme' => 'Recuérdame',
	'defaulttitle' => '%s - Funciona con Kayako %s',
	'defaultloginapi' => SWIFT_PRODUCT . ' Rutina de inicio de sesión',
	'login' => 'Inicio de sesión',
	'global' => 'Global',
	'first' => 'Primera',
	'last' => 'Última',
	'pagination' => 'Página %s de %s',
	'submit' => 'Enviar',
	'reset' => 'Resetear',
	'poweredby' => 'Software Helpdesk por Kayako %s',
	'copyright' => 'Copyright &copy; 2001-%s Kayako',
	'titlecsrfhash' => 'Hash CSRF no válido',
	'msgcsrfhash' => SWIFT_PRODUCT . ' ha detectado un intento de Cross Site Request Forgery y no puede continuar con la acción solicitada.',
	'invaliduser' => 'Usuario o contraseña no válidos',
	'invaliduseripres' => 'Operador no válido - IP no autorizada (Intento: %d/%d)',
	'invaliduserdisabled' => 'Operador no válido - Cuenta deshabilitada (Intento: %d/%d)',
	'invalid_sessionid' => 'La sesión ha expirado por inactividad',
	'staff_not_admin' => 'Tu usuario no tiene privilegios de administración',
	'redirect_login' => 'Procesando inicio de sesión...',
	'redirect_dashboard' => 'Redirigiendo al panel de control...',
	'no_wait' => 'Por favor, haga click aquí si el navegador no le redirige automáticamente',
	'select_un_all' => 'Seleccionar/Deseleccionar todo',
	'sort_desc' => 'Orden descendente',
	'sort_asc' => 'Orden ascendente',
	'options' => 'Opciones',
	'delete' => 'Eliminar',
	'settings' => 'Configuración',
	'search' => 'Buscar',
	'quicksearch' => 'Búsqueda rápida',
	'mass_action' => 'Acción masivas',
	'massfieldaction' => 'Acción: ',
	'advanced_search' => 'Búsqueda avanzada',
	'searchfieldquery' => 'Query: ',
	'searchfieldfield' => 'Campo: ',
	'searchbutton' => 'Buscar',
	'settingsfieldresultsperpage' => 'Resultados por página: ',
	'actionconfirm' => 'Está seguro de que desea continuar?',
	'clidefault' => "%s v%s\nCopyright (c) 2001-%s Kayako\n",
	'loggedout' => 'Ha cerrado la sesión correctamente',
	'firstselect' => '- Seleccione -',
	'exportasxml' => 'XML',
	'exportascsv' => 'CSV',
	'exportassql' => 'SQL',
	'exportaspdf' => 'PDF',
	'view' => 'Ver',
	'dashboard' => 'Panel de control',
	'help' => 'Ayuda',
	'size' => 'Tamaño',
	'home' => 'Inicio',
	'logout' => 'Cerrar sesión',
	'clientarea' => 'Centro de soporte',
	'staffcp' => 'CP Operadores',
	'admincp' => 'CP Admins',
	'winapp' => 'Winapp',
	'pdainterface' => 'PDA Interface',
	'kayakomobile' => 'Kayako Mobile',
	'bytes' => 'Bytes',
	'kb' => 'KB',
	'mb' => 'MB',
	'gb' => 'GB',
	'noitemstodisplay' => 'No hay elementos para mostrar',
	'thousandsseperator' => '.',
	'manage' => 'Administrar',
	'title' => 'Título',
	'disable' => 'Deshabilitar',
	'enable' => 'Habilitar',
	'edit' => 'Editar',
	'back' => 'Atrás',
	'forward' => 'Adelante',
	'insert' => 'Insertar',
	'edit' => 'Editar',
	'update' => 'Actualizar',
	'public' => 'Público',
	'private' => 'Privado',
	'requiredfieldempty' => 'Uno de los campos necesarios está vacío',
	'clierror' => '[ERROR]: ',
	'cliwarning' => '[WARNING]: ',
	'cliok' => '[OK]: ',
	'cliinfo' => '[INFO]: ',
	'clifatalerror' => 'FATAL ERROR',
	'clienterchoice' => 'Por favor, teclee su elección: ',
	'clinotvalidchoice' => '"%s" no es una elección válida: ',
	'description' => 'Descripción',
	'success' => 'Éxito',
	'failure' => 'Fallo',
	'status' => 'Estado',
	'date' => 'Fecha',
	'seconds' => 'Segundos',
	'order' => 'Orden',
	'email' => 'Email',
	'subject' => 'Asunto',
	'contents' => 'Contenidos',
	'sections' => 'Seccciones',
	'twodesc' => '%s (%s)', // Change only for RTL Languages
	'sunday' => 'Domingo',
	'monday' => 'Lunes',
	'tuesday' => 'Martes',
	'wednesday' => 'Miércoles',
	'thursday' => 'Jueves',
	'friday' => 'Viernes',
	'saturday' => 'Sábado',
	'hourrenderus' => '%s:%s %s',
	'hourrendereu' => '%s:%s',
	'am' => 'AM',
	'pm' => 'PM',
	'pfieldreveal' => '[Mostrar]',
	'pfieldhide' => '[Ocultar]',
	'loadingwindow' => 'Cargando...',
	'customfields' => 'Campos personalizados',
	'jump' => 'Salto',
	'newprvmsgconfirm' => 'Tiene un nuevo mensaje privado.\nPulse OK para abrir la lista de mensajes privados en una ventana nueva.',
	'nopermission' => 'ERROR: No tienes suficientes permisos para realizar esta acción.<BR />Puedes editar las Máscaras de Acceso de Grupo en <i>CP Admin > Operadores > Administrar grupos > Editar</i>',
	'nopermissiontext' => "ERROR: No tienes suficientes permisos para realizar esta acción.\nPuedes editar las Máscaras de Acceso de Grupo en CP Admin > Operadores > Administrar grupos > Editar",
	'generationdate' => 'XML generado el: %s',
	'commentdelconfirm' => 'Comentario eliminado correctamente',
	'commentstatusconfirm' => 'El estado del comentario se ha cambiado correctamente',
	'commentupdconfirm' => 'El comentario de "%s" se ha actualizado correctamente',
	'unapprove' => 'No aprobar',
	'approve' => 'Aprobar',
	'paginall' => 'Todos',
	'approvedcomments' => 'Comentarios aprobados',
	'unapprovedcomments' => 'Comentarios no aprobados',
	'fullname' => 'Nombre completo',
	'editcomment' => 'Editar comentario',
	'onlineusers' => 'Operadores conectados',
	'quickjump' => 'Salto rápido',
	'vardate1' => '%dd %dh %dm',
	'vardate2' => '%dh %dm %ds',
	'vardate3' => '%dm %ds',
	'vardate4' => '%ds',
	'choiceadd' => 'Añadir >',
	'choicerem' => '< Eliminar',
	'choicemup' => 'Mover arriba',
	'choicemdn' => 'Mover abajo',
	'ticketsubjectformat' => '[%s#%s]: %s',
	'forwardticketsubjectformat' => '[%s~%s]: %s',
	'loggedinas' => 'Iniciada la sesión: ',
	'tcustomize' => 'Personalizar...',
	'reports' => 'Informes',
	'demomode' => 'No se puede realizar la acción en modo demo',
	'titledemomode' => 'Imposible continuar',
	'msgdemomode' => 'No se puede realizar la acción solicitada en modo demo',
	'filter' => 'Filtro',
	'editor' => 'Editor',
	'images' => 'Imágenes',
	'uploadfile' => 'Adjuntar archivo: ',
	'uploadedimages' => 'Imágenes subidas',
	'tabinsert' => 'Insertar',
	'tabedit' => 'Editar',
	'titlefieldempty' => 'Datos no válidos, imposible continuar.',
	'msgfieldempty' => 'Uno de los campos necesarios está vacío o contiene datos no válidos. Por favor, asegúrese de que ha introducido toda la información necesaria en los campos en el formato adecuado.',
	'save' => 'Guardar',
	'viewall' => 'Ver todo',
	'allpages' => 'Todas las páginas',
	'cancel' => 'Cancelar',
	'save' => 'Guardar',
	'tabgeneral' => 'General',
	'maddimage' => 'Imagen',
	'maddlinktoimage' => 'Enlace a imagen',
	'maddthumbnail' => 'Miniatura',
	'maddthumbnailwithlink' => 'Miniatura con enlace',
	'checkuncheckall' => 'Marcar/desmarcar todo',
	'language' => 'Idioma',
	'loginshare' => 'LoginShare',
	'defaultloginshare' => SWIFT_PRODUCT.' LoginShare',
	'help' => 'Ayuda',
	'name' => 'Nombre',
	'value' => 'Valor',
	'engagevisitor' => 'Implique al visitante',
	'inlinechat' => 'Chat incorporado',
	'url' => 'URL',
	'hexcode' => 'Código Hex',
	'vactionvariables' => 'Acción: Variables',
	'vactionvexp' => 'Acción: Experiencia del visitante',
	'vactionsalerts' => 'Acción: Alertas de operador',
	'vactionsetdepartment' => 'Acción: Definir departamento',
	'vactionsetskill' => 'Acción: Definir habilidad',
	'vactionsetgroup' => 'Acción: Definir grupo',
	'vactionsetcolor' => 'Acción: Definir color',
	'vactionbanvisitor' => 'Acción: Expulsar visitante',
	'customengagevisitor' => 'Implique al visitante personalizado',
	'managerules' => 'Administrar reglas',
	'open' => 'Abierto',
	'close' => 'Cerrado',
	'invalidusernoapiaccess' => 'Operador no válido. Este operador no tiene acceso a la API, por favor configúrelo en Configuración > General.',
	'titleupdatedswiftsettings' => 'Configuración "%s" actualizada',
	'msgupdatedswiftsettings' => 'Se ha actualizado correctamente la configuración de la categoría "%s".',
	'geoipprocessrunning' => 'No se puede reiniciar el proceso de construcción. La reconstrucción de GeoIP ya está en marcha.',
	'continueprocessquestion' => 'Se está ejecutando una tarea preexistente; para poder continuar debe cancelarla. ¿Desea hacerlo?',
	'titleupdsettings' => 'Actualizada configuración de "%s"',
	'msgupdsettings' => 'La configuración de "%s" se ha actualizado correctamente',
	'type' => 'Tipo',
	'banip' => 'IP (255.255.255.255)',
	'banclassc' => 'Clase C (255.255.255.*)',
	'banclassb' => 'Clase B (255.255.*.*)',
	'banclassa' => 'Clase A (255.*.*.*)',
	'if' => 'Si',
	'loginlogerror' => 'Inicio de sesión bloqueado durante %d minutos (Intento: %d/%d)',
	'loginlogwarning' => 'Usuario o contraseña incorrectos (Intento: %d/%d)',
	'na' => '- NA -',
	'redirectloading' => 'Cargando...',
	'noinfoinview' => 'No hay información disponible en esta vista',
	'nochange' => '-- Sin cambios --',
	'activestaff' => '-- Operador activo --',
	'notificationuser' => 'Usuario',
	'notificationuserorganization' => 'Organización del usuario',
	'notificationstaff' => 'Operador (Propietario)',
	'notificationteam' => 'Equipo del operador',
	'notificationdepartment' => 'Departamento',
	'notificationsubject' => 'Asunto: ',
	'lastupdate' => 'Última actualización',
	'interface_admin' => 'CP Admins',
	'interface_staff' => 'CP Operadores',
	'interface_intranet' => 'Intranet',
	'interface_api' => 'API',
	'interface_winapp' => 'Winapp',
	'interface_syncworks' => 'SyncWorks',
	'interface_instaalert' => 'InstaAlert',
	'interface_pda' => 'PDA',
	'interface_rss' => 'RSS',
	'error_database' => 'Base de datos',
	'error_php' => 'PHP',
	'error_exception' => 'Excepción',
	'error_mail' => 'Email',
	'error_loginshare' => 'LoginShare',
	'loading' => 'Cargando...',
	'pwtooshort' => 'Demasiado corta',
	'pwveryweak' => 'Muy débil',
	'pwweak' => 'Débil',
	'pwmedium' => 'Media',
	'pwstrong' => 'Fuerte',
	'pwverystrong' => 'Muy fuerte',
	'staffpasswordpolicy' => '<span class="tabletitle">Política de contraseñas:</span> Longitud mínima de contraseña: %d, Mínimo de caracteres numéricos que debe incluir: %d, Número mínimo de símbolos: %d, Número mínimo de mayúsculas: %d',
	'titlepwpolicy' => 'Error de política de contraseñas',
	'msgpwpolicy' => 'La contraseña especificada no concuerda con los requisitos de la política de contraseñas.',
	'passwordpolicymismatch' => 'La contraseña especificada no concuerda con los requisitos de la política de contraseñas.',
	'passwordexpired' => 'La contraseña ha caducado',
	'newpassword' => 'Nueva contraseña',
	'passwordagain' => 'Repita la contraseña',
	'passworddontmatch' => 'La nueva contraseña no concuerda o está vacía',
	'defaulttimezone' => '-- Zona horaria por defecto --',
	'tagcloud' => 'Nube de etiquetas',
	'searchmodeactive' => 'Búsqueda avanzada activa',
	'titlesearchfailed' => '"0" Resultados encontrados',
	'msgsearchfailed' => SWIFT_PRODUCT . ' no ha podido encontrar ningún registro que concuerde con los criterios especificados.',
	'quickfilter' => 'Filtro rápido',
	'fuenterurl' => 'Introduzca URL:',
	'fuorupload' => 'o suba un archivo:',
	'errorsmtpconnect' => 'No se ha podido conectar al servidor SMTP',
	'starttypingtags' => 'Empiece a escribir para insertar etiquetas...',
	'titleinvalidfileext' => 'Extensión de archivo no válida',
	'msginvalidfileext' => 'El archivo de imagen del icono tiene una extensión no válida. Las permitidas son: gif, jpeg, jpg, png',
	'notset' => '-- No definido --',
	'benchmarks' => 'Calificaciones',
	'system' => 'Sistema',
	'schatid' => 'ID de Chat',
	'smessagesurvey' => 'Mensajes/Encuestas',

	// Operators
	'opcontains' => 'Contiene',
	'opnotcontains' => 'No contiene',
	'opequal' => 'Es igual a',
	'opnotequal' => 'No es igual a',
	'opgreater' => 'Es mayor que',
	'opless' => 'Es menor que',
	'opregexp' => 'Expresión regular',
	'opchanged' => 'Ha cambiado',
	'opnotchanged' => 'No ha cambiado',
	'opchangedfrom' => 'Ha cambiado de',
	'opchangedto' => 'Ha cambiado a',
	'opnotchangedfrom' => 'No ha cambiado de',
	'opnotchangedto' => 'No ha cambiado a',
	'matchand' => 'Y',
	'matchor' => 'O',
	'strue' => 'Verdadero',
	'sfalse' => 'Falso',
	'titlenoperm' => 'Acción no permitida',
	'msgnoperm' => SWIFT_PRODUCT.' no puede continuar; su usuario no tiene permiso para realizar esta acción.',
	'cyesterday' => 'Ayer',
	'ctoday' => 'Hoy',
	'ccurrentwtd' => 'Toda la semana hasta esa fecha',
	'ccurrentmtd' => 'Todo el mes hasta esa fecha',
	'ccurrentytd' => 'Todo el año hasta esa fecha',
	'cl7days' => 'Los últimos 7 días',
	'cl30days' => 'Los últimos 30 días',
	'cl90days' => 'Los últimos 90 días',
	'cl180days' => 'Los últimos 180 días',
	'cl365days' => 'Los últimos 365 días',
	'ctomorrow' => 'Mañana',
	'cnextwfd' => 'Toda la semana desde esa fecha',
	'cnextmfd' => 'Todo el mes desde esa fecha',
	'cnextyfd' => 'Todo el año desde esa fecha',
	'cn7days' => 'Siguientes 7 días',
	'cn30days' => 'Siguientes 30 días',
	'cn90days' => 'Siguientes 90 días',
	'cn180days' => 'Siguientes 180 días',
	'cn365days' => 'Siguientes 365 días',
	'new' => 'Nuevo',
	'phoneext' => 'Teléfono: %s',
	'snewtickets' => 'Nuevos tickets',
	'sadvancedsearch' => 'Búsqueda avanzada',
	'squicksearch' => 'Búsqueda rápida:',
	'sticketidlookup' => 'Buscar ID de ticket:',
	'screatorreplier' => 'Creado por/Respondido por:',
	'smanage' => 'Administrar',
	'clear' => 'Limpiar',
	'never' => 'Nunca',
	'seuser' => 'Usuarios',
	'seuserorg' => 'Organizaciones de usuario',
	'manage' => 'Administrar',
	'import' => 'Importar',
	'export' => 'Exportar',
	'comments' => 'Commentarios',
	'commentdata' => 'Comentarios:',
	'postnewcomment' => 'Publicar un comentario',
	'buttonsubmit' => 'Enviar',
	'reply' => 'Responder',

	// Import from v3
	'short_all_tickets' => 'Todos',
	'iprestrictdenial' => 'Acceso denegado (%s): IP no autorizada (%s), por favor, añada la IP a la lista de IPs autorizadas en /config/config.php',

	// ======= CALENDAR LOCALE =======
	'calendar' => 'Calendario',
	'cal_clear' => 'Limpiar',
	'cal_close' => 'Cerrar',
	'cal_prev' => '&laquo; Ant',
	'cal_next' => 'Sig &raquo;',
	'cal_today' => 'Hoy',
	'cal_sunday' => 'Do',
	'cal_monday' => 'Lu',
	'cal_tuesday' => 'Ma',
	'cal_wednesday' => 'Mi',
	'cal_thursday' => 'Ju',
	'cal_friday' => 'Vi',
	'cal_saturday' => 'Sa',
	'cal_january' => 'Enero',
	'cal_february' => 'Febrero',
	'cal_march' => 'Marzo',
	'cal_april' => 'Abril',
	'cal_may' => 'Mayo',
	'cal_june' => 'Junio',
	'cal_july' => 'Julio',
	'cal_august' => 'Agosto',
	'cal_september' => 'Septiembre',
	'cal_october' => 'Octubre',
	'cal_november' => 'Noviembre',
	'cal_december' => 'Diciembre',

	/**
	* ###############################################
	* MODULE LIST
	* ###############################################
	*/
	'module_base' => 'Base',
	'module_tickets' => 'Tickets',
	'module_bugs' => 'Bugs',
	'module_knowledgebase' => 'Base de conocimiento',
	'module_parser' => 'Mail Parser',
	'module_livechat' => 'Chat',
	'module_issues' => 'Problemas',
	'module_troubleshooter' => 'Solucionador',
	'module_ringroute' => 'RingRoute',
	'module_news' => 'Novedades',
	'module_downloads' => 'Descargas',
	'module_core' => 'Core',
);


/*
 * ###############################################
 * BEGIN INTERFACE RELATED CODE
 * ###############################################
 */



if ($_SWIFT->Interface->GetInterface() == SWIFT_Interface::INTERFACE_ADMIN)
{
	/**
	* Admin Area Navigation Bar
	*/

	$_adminBarContainer = array (

		14 => array ('Configuración', 'bar_settings.gif', MODULE_CORE, '/Base/Settings/Index'),
		26 => array ('REST API', 'bar_restapi.gif', MODULE_BASE),
		27 => array ('Generador de etiquetas', 'bar_tag.gif', MODULE_BASE, '/Base/TagGenerator/Index'),
		0 => array ('Plantillas', 'bar_templates.gif', MODULE_BASE),
		1 => array ('Idiomas', 'bar_languages.gif', MODULE_CORE),
		2 => array ('Campos personalizados', 'bar_customfields.gif', MODULE_CORE),
		25 => array ('GeoIP', 'bar_geoip.gif', MODULE_CORE, '/Base/GeoIP/Manage'),
		13 => array ('Chat', 'bar_livesupport.gif', MODULE_LIVECHAT),
		3 => array ('RingRoute', 'bar_ringroute.gif', MODULE_RINGROUTE),
		4 => array ('Parser de email', 'bar_mailparser.gif', MODULE_PARSER),
		5 => array ('Tickets', 'bar_tickets.gif', MODULE_TICKETS),
		29 => array ('Flujo de trabajo', 'bar_workflow.gif', MODULE_TICKETS, '/Tickets/Workflow/Manage'),
		30 => array ('Calificaciones', 'bar_benchmarks.gif', MODULE_TICKETS, '/Base/Benchmark/Manage'),
		6 => array ('SLA', 'bar_sla.gif', MODULE_TICKETS),
		7 => array ('Escalado', 'bar_escalations.gif', MODULE_TICKETS, '/Tickets/Escalation/Manage'),
		20 => array ('Bayesiano', 'bar_bayesian.gif', MODULE_TICKETS),
		21 => array ('Base de conocimiento', 'bar_knowledgebase.gif', MODULE_KNOWLEDGEBASE),
		22 => array ('Descargas', 'bar_downloads.gif', MODULE_DOWNLOADS),
		23 => array ('Noticias', 'bar_news.gif', MODULE_NEWS),
		24 => array ('Solucionador', 'bar_troubleshooter.gif', MODULE_TROUBLESHOOTER),
		17 => array ('Informes', 'bar_reports.gif', MODULE_REPORTS),
		31 => array ('Widgets', 'bar_widgets.gif', MODULE_BASE, '/Core/Widget/Manage'),
		32 => array ('Módulos', 'bar_modules.gif', MODULE_BASE, '/Core/Module/Manage'),
		9 => array ('Logs', 'bar_logs.gif', MODULE_BASE),
		10 => array ('Tareas programadas', 'bar_cron.gif', MODULE_BASE),
		11 => array ('Base de datos', 'bar_database.gif', MODULE_BASE),
		33 => array ('Importar', 'bar_import.gif', MODULE_BASE),
		12 => array ('Diagnósticos', 'bar_diagnostics.gif', MODULE_BASE),
		34 => array ('Mantenimiento', 'bar_maintenance.gif', MODULE_BASE),
	);

	SWIFT::Set('adminbar', $_adminBarContainer);

	$_adminBarItemContainer = array (
		0 => array (
				0 => array ('Grupos', '/Base/TemplateGroup/Manage'),
				1 => array ('Plantillas', '/Base/Template/Manage'),
				2 => array ('Búsqueda', '/Base/TemplateSearch/Index'),
				3 => array ('Importar/Exportar', '/Base/TemplateManager/ImpEx'),
				4 => array ('Restaurar', '/Base/TemplateRestore/Index'),
				5 => array ('Diagnósticos', '/Base/TemplateDiagnostics/Index'),
				6 => array ('Personalizar', '/Base/TemplateManager/Personalize'),
			),

		1 => array (
				0 => array ('Idiomas', '/Base/Language/Manage'),
				1 => array ('Frases', '/Base/LanguagePhrase/Manage'),
				2 => array ('Buscar', '/Base/LanguagePhrase/Search'),
				3 => array ('Importar/Exportar', '/Base/LanguageManager/ImpEx'),
				4 => array ('Restaurar', '/Base/LanguageManager/Restore'),
				5 => array ('Diagnósticos', '/Base/LanguageManager/Diagnostics'),
			),

		2 => array (
				0 => array ('Grupos', '/Base/CustomFieldGroup/Manage'),
				1 => array ('Campos', '/Base/CustomField/Manage'),
			),

		3 => array (
				0 => array ('Configuración', '/RingRoute/SettingsManager/Index'),
				1 => array ('Administrar perfiles', '/RingRoute/ProfileManager/Index')
			),

		4 => array (
				0 => array ('Configuración', '/Parser/SettingsManager/Index'),
				1 => array ('Colas de email', '/Parser/EmailQueue/Manage'),
				2 => array ('Reglas', '/Parser/Rule/Manage'),
				3 => array ('Líneas de corte', '/Parser/Breakline/Manage'),
				4 => array ('Expulsados', '/Parser/Ban/Manage'),
				5 => array ('Catch-All', '/Parser/CatchAll/Manage'),
				6 => array ('Loop Blockages', '/Parser/LoopBlock/Manage'),
				7 => array ('Loop Rules', '/Parser/LoopRule/Manage'),
				9 => array ('Parser Log', '/Parser/ParserLog/Manage'),
			),

		5 => array (
				0 => array ('Configuración', '/Tickets/SettingsManager/Index'),
				1 => array ('Tipos', '/Tickets/Type/Manage'),
				2 => array ('Estados', '/Tickets/Status/Manage'),
				3 => array ('Prioridades', '/Tickets/Priority/Manage'),
				4 => array ('Tipos de archivo', '/Tickets/FileType/Manage'),
				5 => array ('Enlaces', '/Tickets/Link/Manage'),
				7 => array ('Mantenimiento', '/Tickets/Maintenance/Index'),
			),

		6 => array (
				0 => array ('Configuración', '/Tickets/SettingsManager/SLA'),
				1 => array ('Planes', '/Tickets/SLA/Manage'),
				2 => array ('Programaciones', '/Tickets/Schedule/Manage'),
				3 => array ('Vacaciones', '/Tickets/Holiday/Manage'),
				4 => array ('Importar/Exportar', '/Tickets/HolidayManager/Index'),
			),

		20 => array (
				0 => array ('Configuración', '/Tickets/SettingsManager/Bayesian'),
				1 => array ('Categorías', '/Tickets/BayesianCategory/Manage'),
				2 => array ('Diagnósticos', '/Tickets/BayesianDiagnostics/Index'),
		),

		17 => array (
				0 => array ('Configuración', '/Reports/SettingsManager/Index'),
		),

		9 => array (
				0 => array ('Log de errores', '/Core/ErrorLog/Manage'),
				1 => array ('Log de tareas', '/Core/ScheduledTasks/TaskLog'),
				3 => array ('Log de actividad', '/Core/ActivityLog/Manage'),
				4 => array ('log de inicio de sesión', '/Core/LoginLog/Manage'),
		),

		10 => array (
				0 => array ('Administrar', '/Core/ScheduledTasks/Manage'),
				1 => array ('Log de tareas', '/Core/ScheduledTasks/TaskLog'),
			),

		11 => array (
				0 => array ('Información de tabla', '/Core/Database/TableInfo'),
				1 => array ('Exportar XML', '/Core/Database/Export'),
			),

		12 => array (
				0 => array ('Sesiones activas', '/Core/Diagnostics/ActiveSessions'),
				1 => array ('Información de caché', '/Core/Diagnostics/CacheInformation'),
				2 => array ('Reconstruir caché', '/Core/Diagnostics/RebuildCache'),
				3 => array ('PHPinfo', '/Core/Diagnostics/PHPInfo'),
				4 => array ('Avisar de Bug', '/Core/Diagnostics/ReportBug'),
				5 => array ('Info de licencia', '/Core/Diagnostics/LicenseInformation'),
			),

		13 => array (
				0 => array ('Configuración', '/LiveChat/SettingsManager/Index'),
				1 => array ('Reglas', '/LiveChat/Rule/Manage'),
				2 => array ('Grupos', '/LiveChat/Group/Manage'),
				3 => array ('Habilidades', '/LiveChat/Skill/Manage'),
				4 => array ('Expulsados', '/LiveChat/Ban/Manage'),
				5 => array ('Enrutamiento de mensajes', '/LiveChat/MessageRouting/Index'),
				6 => array ('Estado online', '/LiveChat/OnlineStatus/Index'),
			),

		19 => array (
				0 => array ('Configuración', '/Manuals/SettingsManager/Index'),
			),

		21 => array (
				0 => array ('Configuración', '/KnowledgeBase/SettingsManager/Index'),
			),

		22 => array (
				0 => array ('Configuración', '/Downloads/SettingsManager/Index'),
			),

		23 => array (
				0 => array ('Configuración', '/News/SettingsManager/Index'),
				1 => array ('Importar/Exportar', '/News/ImpEx/Manage'),
			),

		24 => array (
				0 => array ('Configuración', '/Troubleshooter/SettingsManager/Index'),
			),

		25 => array (
				0 => array ('Mantenimiento', '/Base/GeoIP/Manage'),
			),

		26 => array (
				0 => array ('Configuración', '/Base/Settings/RESTAPI'),
				1 => array ('Información de API', '/Base/RESTAPI/Index'),
			),

		33 => array (
				0 => array ('Administrar', '/Base/Import/Manage'),
				1 => array ('Log de importación', '/Base/ImportLog/Manage'),
			),

		34 => array (
				0 => array ('Purgar adjuntos', '/Base/PurgeAttachments/Index'),
				1 => array ('Mover adjuntos', '/Base/MoveAttachments/Index'),
			),

	);

	// Log stuff
	if (SWIFT_PRODUCT == 'Fusion' || SWIFT_PRODUCT == 'Resolve')
	{
		$_adminBarItemContainer[9][2] = array ('Log del Parser', '/Parser/ParserLog/Manage');
	}

	if (SWIFT_PRODUCT == 'Fusion' || SWIFT_PRODUCT == 'Engage')
	{
		unset($_adminBarContainer[27]);
	}

	SWIFT::Set('adminbaritems', $_adminBarItemContainer);


	/**
	* Admin Area Menu Links
	* Translate the Highlighted Text: 0 => array (>>>'Home'<<<, 100, MODULE_NAME),
	* ! IMPORTANT ! The following array does NOT have a Zero based index
	*/

	$_adminMenuContainer = array (

		1 => array ('Inicio', 80, MODULE_CORE),
		2 => array ('Operadores', 100, MODULE_BASE),
		3 => array ('Departamentos', 120, MODULE_BASE),
		4 => array ('Usuarios', 100, MODULE_BASE),
	);

	SWIFT::Set('adminmenu', $_adminMenuContainer);

	/**
	* Item Format Example: 0 => array ('Name Of Item to Display', 'www.link-to-item.com', PREFIX_SPACING, SUFFIX_BAR_AND_SPACING),
	* The PREFIX_SPACING and SUFFIX_BAR_AND_SPACING are required for the theme to display the seperater items for the menu items
	*/
	$_adminLinkContainer = array (

		1 => array (
				0 => array ('Panel de control', '/Core/Dashboard/Index'),
				1 => array ('Configuración', '/Base/Settings/Index'),
				),

		2 => array (
				0 => array ('Administrar operadores', '/Base/Staff/Manage'),
				1 => array ('Administrar equipos', '/Base/StaffGroup/Manage'),
				2 => array ('Insertar operador', '/Base/Staff/Insert'),
				3 => array ('Insertar equipo', '/Base/StaffGroup/Insert'),
				4 => array ('LoginShare', '/Base/Settings/StaffLoginShare'),
				5 => array ('Configuración', '/Base/Settings/Staff'),
				),

		3 => array (
				0 => array ('Admnistrar departamentos', '/Base/Department/Manage'),
				1 => array ('Insertar departamento', '/Base/Department/Insert'),
				2 => array ('Ver permisos de acceso', '/Base/Department/AccessOverview'),
				),

		4 => array (
				0 => array ('Administrar grupos de usuarios', '/Base/UserGroup/Manage'),
				1 => array ('Insertar grupos de usuarios', '/Base/UserGroup/Insert'),
				2 => array ('LoginShare', '/Base/Settings/UserLoginShare'),
				3 => array ('Configuración', '/Base/Settings/User'),
				),
	);

	SWIFT::Set('adminlinks', $_adminLinkContainer);
} else if ($_SWIFT->Interface->GetInterface() == SWIFT_Interface::INTERFACE_STAFF) {
	/**
	* Staff Area Menu Links
	* Translate the Highlighted Text: 0 => array (>>>'Home'<<<, 100),
	* ! IMPORTANT ! The following array does NOT have a Zero based index
	*/

	$_staffMenuContainer = array (
		1 => array ('Inicio', 80, MODULE_CORE),
		2 => array ('Tickets', 100, MODULE_TICKETS, 't_entab'),
		3 => array ('Chat', 120, MODULE_LIVECHAT, 'ls_entab'),
		4 => array ('Base de conocimiento', 140, MODULE_KNOWLEDGEBASE, 'kb_entab'),
		5 => array ('Descargas', 110, MODULE_DOWNLOADS, 'dl_entab'),
		6 => array ('Solucionador', 140, MODULE_TROUBLESHOOTER, 'tr_entab'),
		7 => array ('Noticias', 90, MODULE_NEWS, 'nw_entab'),
		8 => array ('Usuarios', 90, MODULE_CORE, 'cu_entab'),
		9 => array ('Informes', 90, MODULE_REPORTS, 'rp_entab'),
	);

	SWIFT::Set('staffmenu', $_staffMenuContainer);

	/**
	* Item Format Example: 0 => array ('Name Of Item to Display', 'www.link-to-item.com', PREFIX_SPACING, SUFFIX_BAR_AND_SPACING),
	* The PREFIX_SPACING and SUFFIX_BAR_AND_SPACING are required for the theme to display the seperater items for the menu items
	*/
	$_staffLinkContainer = array (

		1 => array (
				0 => array ('Panel de control', '/Core/Dashboard/Index'),
				1 => array ('Preferencias', '/Base/Preferences/ViewPreferences'),
				2 => array ('Notificaciones', '/Base/Notification/Manage', 'staff_canviewnotifications'),
				3 => array ('Comentarios', '/Base/Comment/Manage', 'staff_canviewcomments'),
				),

		2 => array (
				0 => array ('Administrar Tickets', '/Tickets/Manage/Index', 'staff_tcanviewtickets'),
				1 => array ('Buscar', ':UIDropDown(\'ticketsearchmenu\', event, \'linkmenu2_1\', \'linksdiv\'); LinkTicketSearchForms();'),
				2 => array ('Nuevo Ticket', ':UICreateWindow(\'/Tickets/Ticket/NewTicket/\', \'newticket\', \'Nuevo Ticket\', \'Cargando..\', 600, 350, true);', 'staff_tcaninsertticket'),
				3 => array ('Macros', '/Tickets/MacroCategory/Manage', 'staff_tcanviewmacro'),
				4 => array ('Vistas', '/Tickets/View/Manage', 'staff_tcanview_views'),
				5 => array ('Filtros', ':UIDropDown(\'ticketfiltermenu\', event, \'linkmenu2_5\', \'linksdiv\');'),
				),

		3 => array (
				0 => array ('Historial de chat', '/LiveChat/ChatHistory/Manage', 'staff_lscanviewchat'),
				1 => array ('Mensajes/Encuestas', '/LiveChat/Message/Manage', 'staff_lscanviewmessages'),
				2 => array ('Registros de llamada', '/LiveChat/Call/Manage', 'staff_lscanviewcalls'),
				3 => array ('Enlatado', '/LiveChat/CannedCategory/Manage', 'admin_lscanviewcanned'),
				4 => array ('Buscar', ':UIDropDown(\'chatsearchmenu\', event, \'linkmenu3_4\', \'linksdiv\'); LinkChatSearchForms();'),
				),

		4 => array (
				0 => array ('Ver base de conocimiento', '/Knowledgebase/ViewKnowledgebase/Index'),
				1 => array ('Administrar base de conocimiento', '/Knowledgebase/Article/Manage'),
				2 => array ('Categorías', '/Knowledgebase/Category/Manage'),
				3 => array ('Nuevo artículo', '/Knowledgebase/Article/Insert'),
				),

		5 => array (
				0 => array ('Ver descargas', '/Downloads/Downloads/Manage'),
				1 => array ('Administrar descargas', '/Downloads/Downloads/Manage'),
				2 => array ('Categorías', '/Downloads/Category/Insert'),
				3 => array ('Nuevo archivo', '/Downloads/File/Insert'),
				),

		6 => array (
				0 => array ('Ver solucionador', '/Troubleshooter/Category/ViewAll'),
				1 => array ('Administrar solucionador', '/Troubleshooter/Step/Manage'),
				2 => array ('Categorías', '/Troubleshooter/Category/Manage'),
				3 => array ('Nuevo paso', ':UICreateWindow(\'/Troubleshooter/Step/InsertDialog/\', \'newstep\', \'Insertar paso\', \'Cargando..\', 400, 200, true);'),
				),

		7 => array (
				0 => array ('Ver Noticias', '/News/NewsItem/ViewAll', 'staff_nwcanviewitems'),
				1 => array ('Administrar noticias', '/News/NewsItem/Manage', 'staff_nwcanmanageitems'),
				2 => array ('Categorías', '/News/Category/Manage', 'staff_nwcanviewcategories'),
				3 => array ('Suscriptores', '/News/Subscriber/Manage', 'staff_nwcanviewsubscribers'),
				4 => array ('Insertar noticias', ':UICreateWindow(\'/News/NewsItem/InsertDialog/\', \'newnews\', \'Insertar noticias\', \'Cargando..\', 600, 350, true);'),
				),

		8 => array (
				0 => array ('Administrar usuarios', '/Base/User/Manage', 'staff_canviewusers'),
				1 => array ('Administrar organizaciones', '/Base/UserOrganization/Manage', 'staff_canviewuserorganizations'),
				2 => array ('Buscar', ':UIDropDown(\'usersearchmenu\', event, \'linkmenu8_2\', \'linksdiv\'); LinkUserSearchForms();'),
				3 => array ('Insertar usuario', '/Base/User/Insert', 'staff_caninsertuser'),
				4 => array ('Insertar organización', '/Base/UserOrganization/Insert', 'staff_caninsertuserorganization'),
				),

		9 => array (
				0 => array ('Administrar informes', '/Reports/Report/Manage'),
				1 => array ('Nuevo informe', '/Reports/Report/Insert'),
				2 => array ('Importar/Exportar', '/Reports/ReportManager/ImpEx'),
				//2 => array ('Schedule', '/Reports/Schedule'),
				//4 => array ('Saved Reports', '/Reports/SavedReports'),
				),
	);

	$_staffLinkContainer[2][1][15] = true;
	$_staffLinkContainer[2][5][15] = true;
	$_staffLinkContainer[8][2][15] = true;
	$_staffLinkContainer[3][4][15] = true;

	SWIFT::Set('stafflinks', $_staffLinkContainer);
}


?>