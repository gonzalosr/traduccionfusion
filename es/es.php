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
	'msgsearchfailed' => SWIFT_PRODUCT . ' was unable to locate any records matching the criteria specfied.',
	'quickfilter' => 'Quick Filter',
	'fuenterurl' => 'Enter URL:',
	'fuorupload' => 'or Upload:',
	'errorsmtpconnect' => 'Unable to connect to SMTP server',
	'starttypingtags' => 'Start typing to insert tags...',
	'titleinvalidfileext' => 'Invalid Image File Extension',
	'msginvalidfileext' => 'The icon image file has an invalid extension. Allowed extensions are: gif, jpeg, jpg, png',
	'notset' => '-- Not Set --',
	'benchmarks' => 'Ratings',
	'system' => 'System',
	'schatid' => 'Chat ID',
	'smessagesurvey' => 'Messages/Surveys',

	// Operators
	'opcontains' => 'Contains',
	'opnotcontains' => 'Doesn\'t  Contain',
	'opequal' => 'Equal',
	'opnotequal' => 'Not Equal',
	'opgreater' => 'Greater Than',
	'opless' => 'Less Than',
	'opregexp' => 'Regular Expression',
	'opchanged' => 'Changed',
	'opnotchanged' => 'Not Changed',
	'opchangedfrom' => 'Changed from',
	'opchangedto' => 'Changed to',
	'opnotchangedfrom' => 'Not Changed from',
	'opnotchangedto' => 'Not Changed to',
	'matchand' => 'AND',
	'matchor' => 'OR',
	'strue' => 'True',
	'sfalse' => 'False',
	'titlenoperm' => 'Action not Permitted',
	'msgnoperm' => SWIFT_PRODUCT.' is unable to continue as the currently logged in staff user does not have enough permission to carry out this action.',
	'cyesterday' => 'Yesterday',
	'ctoday' => 'Today',
	'ccurrentwtd' => 'Current week to date',
	'ccurrentmtd' => 'Current month to date',
	'ccurrentytd' => 'Current year to date',
	'cl7days' => 'Last 7 days',
	'cl30days' => 'Last 30 days',
	'cl90days' => 'Last 90 days',
	'cl180days' => 'Last 180 days',
	'cl365days' => 'Last 365 days',
	'ctomorrow' => 'Tomorrow',
	'cnextwfd' => 'Current week from date',
	'cnextmfd' => 'Current month from date',
	'cnextyfd' => 'Current year from date',
	'cn7days' => 'Next 7 days',
	'cn30days' => 'Next 30 days',
	'cn90days' => 'Next 90 days',
	'cn180days' => 'Next 180 days',
	'cn365days' => 'Next 365 days',
	'new' => 'New',
	'phoneext' => 'Phone: %s',
	'snewtickets' => 'New Tickets',
	'sadvancedsearch' => 'Advanced Search',
	'squicksearch' => 'Quick Search:',
	'sticketidlookup' => 'Ticket ID Lookup:',
	'screatorreplier' => 'Creator/Replier:',
	'smanage' => 'Manage',
	'clear' => 'Clear',
	'never' => 'Never',
	'seuser' => 'Users',
	'seuserorg' => 'User Organizations',
	'manage' => 'Manage',
	'import' => 'Import',
	'export' => 'Export',
	'comments' => 'Comments',
	'commentdata' => 'Comments:',
	'postnewcomment' => 'Post a new comment',
	'buttonsubmit' => 'Submit',
	'reply' => 'Reply',

	// Import from v3
	'short_all_tickets' => 'All',
	'iprestrictdenial' => 'Access Denied (%s): IP not allowed (%s), please add the IP in the allowed list under /config/config.php',

	// ======= CALENDAR LOCALE =======
	'calendar' => 'Calendar',
	'cal_clear' => 'Clear',
	'cal_close' => 'Close',
	'cal_prev' => '&laquo; Prev',
	'cal_next' => 'Next &raquo;',
	'cal_today' => 'Today',
	'cal_sunday' => 'Su',
	'cal_monday' => 'Mo',
	'cal_tuesday' => 'Tu',
	'cal_wednesday' => 'We',
	'cal_thursday' => 'Th',
	'cal_friday' => 'Fr',
	'cal_saturday' => 'Sa',
	'cal_january' => 'January',
	'cal_february' => 'February',
	'cal_march' => 'March',
	'cal_april' => 'April',
	'cal_may' => 'May',
	'cal_june' => 'June',
	'cal_july' => 'July',
	'cal_august' => 'August',
	'cal_september' => 'September',
	'cal_october' => 'October',
	'cal_november' => 'November',
	'cal_december' => 'December',

	/**
	* ###############################################
	* MODULE LIST
	* ###############################################
	*/
	'module_base' => 'Base',
	'module_tickets' => 'Tickets',
	'module_bugs' => 'Bugs',
	'module_knowledgebase' => 'Knowledgebase',
	'module_parser' => 'Mail Parser',
	'module_livechat' => 'Live Chat',
	'module_issues' => 'Issues',
	'module_troubleshooter' => 'Troubleshooter',
	'module_ringroute' => 'RingRoute',
	'module_news' => 'News',
	'module_downloads' => 'Downloads',
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

		14 => array ('Settings', 'bar_settings.gif', MODULE_CORE, '/Base/Settings/Index'),
		26 => array ('REST API', 'bar_restapi.gif', MODULE_BASE),
		27 => array ('Tag Generator', 'bar_tag.gif', MODULE_BASE, '/Base/TagGenerator/Index'),
		0 => array ('Templates', 'bar_templates.gif', MODULE_BASE),
		1 => array ('Languages', 'bar_languages.gif', MODULE_CORE),
		2 => array ('Custom Fields', 'bar_customfields.gif', MODULE_CORE),
		25 => array ('GeoIP', 'bar_geoip.gif', MODULE_CORE, '/Base/GeoIP/Manage'),
		13 => array ('Live Chat', 'bar_livesupport.gif', MODULE_LIVECHAT),
		3 => array ('RingRoute', 'bar_ringroute.gif', MODULE_RINGROUTE),
		4 => array ('Mail Parser', 'bar_mailparser.gif', MODULE_PARSER),
		5 => array ('Tickets', 'bar_tickets.gif', MODULE_TICKETS),
		29 => array ('Workflow', 'bar_workflow.gif', MODULE_TICKETS, '/Tickets/Workflow/Manage'),
		30 => array ('Ratings', 'bar_benchmarks.gif', MODULE_TICKETS, '/Base/Benchmark/Manage'),
		6 => array ('SLA', 'bar_sla.gif', MODULE_TICKETS),
		7 => array ('Escalations', 'bar_escalations.gif', MODULE_TICKETS, '/Tickets/Escalation/Manage'),
		20 => array ('Bayesian', 'bar_bayesian.gif', MODULE_TICKETS),
		21 => array ('Knowledgebase', 'bar_knowledgebase.gif', MODULE_KNOWLEDGEBASE),
		22 => array ('Downloads', 'bar_downloads.gif', MODULE_DOWNLOADS),
		23 => array ('News', 'bar_news.gif', MODULE_NEWS),
		24 => array ('Troubleshooter', 'bar_troubleshooter.gif', MODULE_TROUBLESHOOTER),
		17 => array ('Reports', 'bar_reports.gif', MODULE_REPORTS),
		31 => array ('Widgets', 'bar_widgets.gif', MODULE_BASE, '/Core/Widget/Manage'),
		32 => array ('Modules', 'bar_modules.gif', MODULE_BASE, '/Core/Module/Manage'),
		9 => array ('Logs', 'bar_logs.gif', MODULE_BASE),
		10 => array ('Scheduled Tasks', 'bar_cron.gif', MODULE_BASE),
		11 => array ('Database', 'bar_database.gif', MODULE_BASE),
		33 => array ('Import', 'bar_import.gif', MODULE_BASE),
		12 => array ('Diagnostics', 'bar_diagnostics.gif', MODULE_BASE),
		34 => array ('Maintenance', 'bar_maintenance.gif', MODULE_BASE),
	);

	SWIFT::Set('adminbar', $_adminBarContainer);

	$_adminBarItemContainer = array (
		0 => array (
				0 => array ('Groups', '/Base/TemplateGroup/Manage'),
				1 => array ('Templates', '/Base/Template/Manage'),
				2 => array ('Search', '/Base/TemplateSearch/Index'),
				3 => array ('Import/Export', '/Base/TemplateManager/ImpEx'),
				4 => array ('Restore', '/Base/TemplateRestore/Index'),
				5 => array ('Diagnostics', '/Base/TemplateDiagnostics/Index'),
				6 => array ('Personalize', '/Base/TemplateManager/Personalize'),
			),

		1 => array (
				0 => array ('Languages', '/Base/Language/Manage'),
				1 => array ('Phrases', '/Base/LanguagePhrase/Manage'),
				2 => array ('Search', '/Base/LanguagePhrase/Search'),
				3 => array ('Import/Export', '/Base/LanguageManager/ImpEx'),
				4 => array ('Restore', '/Base/LanguageManager/Restore'),
				5 => array ('Diagnostics', '/Base/LanguageManager/Diagnostics'),
			),

		2 => array (
				0 => array ('Groups', '/Base/CustomFieldGroup/Manage'),
				1 => array ('Fields', '/Base/CustomField/Manage'),
			),

		3 => array (
				0 => array ('Settings', '/RingRoute/SettingsManager/Index'),
				1 => array ('Manage Profiles', '/RingRoute/ProfileManager/Index')
			),

		4 => array (
				0 => array ('Settings', '/Parser/SettingsManager/Index'),
				1 => array ('Email Queues', '/Parser/EmailQueue/Manage'),
				2 => array ('Rules', '/Parser/Rule/Manage'),
				3 => array ('Breaklines', '/Parser/Breakline/Manage'),
				4 => array ('Bans', '/Parser/Ban/Manage'),
				5 => array ('Catch-All', '/Parser/CatchAll/Manage'),
				6 => array ('Loop Blockages', '/Parser/LoopBlock/Manage'),
				7 => array ('Loop Rules', '/Parser/LoopRule/Manage'),
				9 => array ('Parser Log', '/Parser/ParserLog/Manage'),
			),

		5 => array (
				0 => array ('Settings', '/Tickets/SettingsManager/Index'),
				1 => array ('Types', '/Tickets/Type/Manage'),
				2 => array ('Statuses', '/Tickets/Status/Manage'),
				3 => array ('Priorities', '/Tickets/Priority/Manage'),
				4 => array ('File Types', '/Tickets/FileType/Manage'),
				5 => array ('Links', '/Tickets/Link/Manage'),
				7 => array ('Maintenance', '/Tickets/Maintenance/Index'),
			),

		6 => array (
				0 => array ('Settings', '/Tickets/SettingsManager/SLA'),
				1 => array ('Plans', '/Tickets/SLA/Manage'),
				2 => array ('Schedules', '/Tickets/Schedule/Manage'),
				3 => array ('Holidays', '/Tickets/Holiday/Manage'),
				4 => array ('Import/Export', '/Tickets/HolidayManager/Index'),
			),

		20 => array (
				0 => array ('Settings', '/Tickets/SettingsManager/Bayesian'),
				1 => array ('Categories', '/Tickets/BayesianCategory/Manage'),
				2 => array ('Diagnostics', '/Tickets/BayesianDiagnostics/Index'),
		),

		17 => array (
				0 => array ('Settings', '/Reports/SettingsManager/Index'),
		),

		9 => array (
				0 => array ('Error Log', '/Core/ErrorLog/Manage'),
				1 => array ('Task Log', '/Core/ScheduledTasks/TaskLog'),
				3 => array ('Activity Log', '/Core/ActivityLog/Manage'),
				4 => array ('Login Log', '/Core/LoginLog/Manage'),
		),

		10 => array (
				0 => array ('Manage', '/Core/ScheduledTasks/Manage'),
				1 => array ('Task Log', '/Core/ScheduledTasks/TaskLog'),
			),

		11 => array (
				0 => array ('Table Information', '/Core/Database/TableInfo'),
				1 => array ('Export XML', '/Core/Database/Export'),
			),

		12 => array (
				0 => array ('Active Sessions', '/Core/Diagnostics/ActiveSessions'),
				1 => array ('Cache Info', '/Core/Diagnostics/CacheInformation'),
				2 => array ('Rebuild Cache', '/Core/Diagnostics/RebuildCache'),
				3 => array ('PHP Info', '/Core/Diagnostics/PHPInfo'),
				4 => array ('Report Bug', '/Core/Diagnostics/ReportBug'),
				5 => array ('License Info', '/Core/Diagnostics/LicenseInformation'),
			),

		13 => array (
				0 => array ('Settings', '/LiveChat/SettingsManager/Index'),
				1 => array ('Rules', '/LiveChat/Rule/Manage'),
				2 => array ('Groups', '/LiveChat/Group/Manage'),
				3 => array ('Skills', '/LiveChat/Skill/Manage'),
				4 => array ('Bans', '/LiveChat/Ban/Manage'),
				5 => array ('Message Routing', '/LiveChat/MessageRouting/Index'),
				6 => array ('Online Status', '/LiveChat/OnlineStatus/Index'),
			),

		19 => array (
				0 => array ('Settings', '/Manuals/SettingsManager/Index'),
			),

		21 => array (
				0 => array ('Settings', '/KnowledgeBase/SettingsManager/Index'),
			),

		22 => array (
				0 => array ('Settings', '/Downloads/SettingsManager/Index'),
			),

		23 => array (
				0 => array ('Settings', '/News/SettingsManager/Index'),
				1 => array ('Import/Export', '/News/ImpEx/Manage'),
			),

		24 => array (
				0 => array ('Settings', '/Troubleshooter/SettingsManager/Index'),
			),

		25 => array (
				0 => array ('Maintenance', '/Base/GeoIP/Manage'),
			),

		26 => array (
				0 => array ('Settings', '/Base/Settings/RESTAPI'),
				1 => array ('API Information', '/Base/RESTAPI/Index'),
			),

		33 => array (
				0 => array ('Manage', '/Base/Import/Manage'),
				1 => array ('Import Log', '/Base/ImportLog/Manage'),
			),

		34 => array (
				0 => array ('Purge Attachments', '/Base/PurgeAttachments/Index'),
				1 => array ('Move Attachments', '/Base/MoveAttachments/Index'),
			),

	);

	// Log stuff
	if (SWIFT_PRODUCT == 'Fusion' || SWIFT_PRODUCT == 'Resolve')
	{
		$_adminBarItemContainer[9][2] = array ('Parser Log', '/Parser/ParserLog/Manage');
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

		1 => array ('Home', 80, MODULE_CORE),
		2 => array ('Staff', 100, MODULE_BASE),
		3 => array ('Departments', 120, MODULE_BASE),
		4 => array ('Users', 100, MODULE_BASE),
	);

	SWIFT::Set('adminmenu', $_adminMenuContainer);

	/**
	* Item Format Example: 0 => array ('Name Of Item to Display', 'www.link-to-item.com', PREFIX_SPACING, SUFFIX_BAR_AND_SPACING),
	* The PREFIX_SPACING and SUFFIX_BAR_AND_SPACING are required for the theme to display the seperater items for the menu items
	*/
	$_adminLinkContainer = array (

		1 => array (
				0 => array ('Dashboard', '/Core/Dashboard/Index'),
				1 => array ('Settings', '/Base/Settings/Index'),
				),

		2 => array (
				0 => array ('Manage Staff', '/Base/Staff/Manage'),
				1 => array ('Manage Teams', '/Base/StaffGroup/Manage'),
				2 => array ('Insert Staff', '/Base/Staff/Insert'),
				3 => array ('Insert Team', '/Base/StaffGroup/Insert'),
				4 => array ('LoginShare', '/Base/Settings/StaffLoginShare'),
				5 => array ('Settings', '/Base/Settings/Staff'),
				),

		3 => array (
				0 => array ('Manage Departments', '/Base/Department/Manage'),
				1 => array ('Insert Department', '/Base/Department/Insert'),
				2 => array ('Access Overview', '/Base/Department/AccessOverview'),
				),

		4 => array (
				0 => array ('Manage User Groups', '/Base/UserGroup/Manage'),
				1 => array ('Insert User Group', '/Base/UserGroup/Insert'),
				2 => array ('LoginShare', '/Base/Settings/UserLoginShare'),
				3 => array ('Settings', '/Base/Settings/User'),
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
		1 => array ('Home', 80, MODULE_CORE),
		2 => array ('Tickets', 100, MODULE_TICKETS, 't_entab'),
		3 => array ('Live Chat', 120, MODULE_LIVECHAT, 'ls_entab'),
		4 => array ('Knowledgebase', 140, MODULE_KNOWLEDGEBASE, 'kb_entab'),
		5 => array ('Downloads', 110, MODULE_DOWNLOADS, 'dl_entab'),
		6 => array ('Troubleshooter', 140, MODULE_TROUBLESHOOTER, 'tr_entab'),
		7 => array ('News', 90, MODULE_NEWS, 'nw_entab'),
		8 => array ('Users', 90, MODULE_CORE, 'cu_entab'),
		9 => array ('Reports', 90, MODULE_REPORTS, 'rp_entab'),
	);

	SWIFT::Set('staffmenu', $_staffMenuContainer);

	/**
	* Item Format Example: 0 => array ('Name Of Item to Display', 'www.link-to-item.com', PREFIX_SPACING, SUFFIX_BAR_AND_SPACING),
	* The PREFIX_SPACING and SUFFIX_BAR_AND_SPACING are required for the theme to display the seperater items for the menu items
	*/
	$_staffLinkContainer = array (

		1 => array (
				0 => array ('Dashboard', '/Core/Dashboard/Index'),
				1 => array ('Preferences', '/Base/Preferences/ViewPreferences'),
				2 => array ('Notifications', '/Base/Notification/Manage', 'staff_canviewnotifications'),
				3 => array ('Comments', '/Base/Comment/Manage', 'staff_canviewcomments'),
				),

		2 => array (
				0 => array ('Manage Tickets', '/Tickets/Manage/Index', 'staff_tcanviewtickets'),
				1 => array ('Search', ':UIDropDown(\'ticketsearchmenu\', event, \'linkmenu2_1\', \'linksdiv\'); LinkTicketSearchForms();'),
				2 => array ('New Ticket', ':UICreateWindow(\'/Tickets/Ticket/NewTicket/\', \'newticket\', \'New Ticket\', \'Loading..\', 600, 350, true);', 'staff_tcaninsertticket'),
				3 => array ('Macros', '/Tickets/MacroCategory/Manage', 'staff_tcanviewmacro'),
				4 => array ('Views', '/Tickets/View/Manage', 'staff_tcanview_views'),
				5 => array ('Filters', ':UIDropDown(\'ticketfiltermenu\', event, \'linkmenu2_5\', \'linksdiv\');'),
				),

		3 => array (
				0 => array ('Chat History', '/LiveChat/ChatHistory/Manage', 'staff_lscanviewchat'),
				1 => array ('Messages/Surveys', '/LiveChat/Message/Manage', 'staff_lscanviewmessages'),
				2 => array ('Call Logs', '/LiveChat/Call/Manage', 'staff_lscanviewcalls'),
				3 => array ('Canned', '/LiveChat/CannedCategory/Manage', 'admin_lscanviewcanned'),
				4 => array ('Search', ':UIDropDown(\'chatsearchmenu\', event, \'linkmenu3_4\', \'linksdiv\'); LinkChatSearchForms();'),
				),

		4 => array (
				0 => array ('View Knowledgebase', '/Knowledgebase/ViewKnowledgebase/Index'),
				1 => array ('Manage Knowledgebase', '/Knowledgebase/Article/Manage'),
				2 => array ('Categories', '/Knowledgebase/Category/Manage'),
				3 => array ('New Article', '/Knowledgebase/Article/Insert'),
				),

		5 => array (
				0 => array ('View Downloads', '/Downloads/Downloads/Manage'),
				1 => array ('Manage Downloads', '/Downloads/Downloads/Manage'),
				2 => array ('Categories', '/Downloads/Category/Insert'),
				3 => array ('New File', '/Downloads/File/Insert'),
				),

		6 => array (
				0 => array ('View Troubleshooter', '/Troubleshooter/Category/ViewAll'),
				1 => array ('Manage Troubleshooter', '/Troubleshooter/Step/Manage'),
				2 => array ('Categories', '/Troubleshooter/Category/Manage'),
				3 => array ('New Step', ':UICreateWindow(\'/Troubleshooter/Step/InsertDialog/\', \'newstep\', \'Insert Step\', \'Loading..\', 400, 200, true);'),
				),

		7 => array (
				0 => array ('View News', '/News/NewsItem/ViewAll', 'staff_nwcanviewitems'),
				1 => array ('Manage News', '/News/NewsItem/Manage', 'staff_nwcanmanageitems'),
				2 => array ('Categories', '/News/Category/Manage', 'staff_nwcanviewcategories'),
				3 => array ('Subscribers', '/News/Subscriber/Manage', 'staff_nwcanviewsubscribers'),
				4 => array ('Insert News', ':UICreateWindow(\'/News/NewsItem/InsertDialog/\', \'newnews\', \'Insert News\', \'Loading..\', 600, 350, true);'),
				),

		8 => array (
				0 => array ('Manage Users', '/Base/User/Manage', 'staff_canviewusers'),
				1 => array ('Manage Organizations', '/Base/UserOrganization/Manage', 'staff_canviewuserorganizations'),
				2 => array ('Search', ':UIDropDown(\'usersearchmenu\', event, \'linkmenu8_2\', \'linksdiv\'); LinkUserSearchForms();'),
				3 => array ('Insert User', '/Base/User/Insert', 'staff_caninsertuser'),
				4 => array ('Insert Organization', '/Base/UserOrganization/Insert', 'staff_caninsertuserorganization'),
				),

		9 => array (
				0 => array ('Manage Reports', '/Reports/Report/Manage'),
				1 => array ('New Report', '/Reports/Report/Insert'),
				2 => array ('Import/Export', '/Reports/ReportManager/ImpEx'),
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