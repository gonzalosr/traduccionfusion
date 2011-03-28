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

$__LANG = array (
	// ======= BEGIN v4 LOCALES =======
	'titlepersonalization' => 'Información actualizada',
	'msgpersonalization' => SWIFT_PRODUCT . ' ha actualizado la información de personalización. Deberá recargar la página para ver los cambios en el logotipo de la cabecera del panel de control (si ha habido alguno).',
	'tabpersonalize' => 'Personalizar',
	'generalinformation' => 'Información general',
	'companyname' => 'Nombre de organización',
	'desc_companyname' => 'Este es el nombre que se usará como marca en el centro de soporte de usuarios y en los emails salientes.',
	'defaultreturnemail' => 'Dirección email de retorno por defecto',
	'desc_defaultreturnemail' => 'Esta es la dirección de email que se usará como remitente por defecto en el correo saliente. Esta dirección debe corresponder a una cola de email activa para poder aceptar respuestas de usuarios.',
	'logoimages' => 'Imágenes de cabecera',
	'supportcenterlogo' => 'Cabecera de centro de soporte',
	'desc_supportcenterlogo' => 'Puede actualizar la imagen de la cabecera del centro de soporte seleccionando una nueva imagen (gif/jpeg/png). Altura máxima: 70 px',
	'stafflogo' => 'Cabecera del panel de control de operadores/Admin/PDA',
	'desc_stafflogo' => 'Puede personalizar la imagen de la cabecera del panel de control de operadores/administradores/PDA que verán los operadores seleccionando un nuevo archivo (gif/jpeg/png). Altura máxima de la imagen: 70 px<br /><br /><i>NOTA: Necesitará forzar la recarga de la página (Ctrl+F5 o Comando+R) para ver los resultados.</i>',
	'personalize' => 'Personalizar',
	'changegroup' => 'Cambiar grupo',
	'desc_importexport' => '',
	'tabexport' => 'Exportar',
	'export' => 'Exportar',
	'tabimport' => 'Importar',
	'import' => 'Importar',
	'result' => 'Resultado',
	'titleisenabledprob' => 'Imposible continuar',
	'msgisenabledprob' => 'No puede deshabilitar el grupo de plantillas por defecto.',
	'useloginshare' => 'Usar LoginShare',
	'desc_useloginshare' => 'Si está habilitado, las credenciales de los usuarios que intenten iniciar sesión en este grupo de plantillas se comprobarán usando la API de LoginShare.',
	'exporthistory' => 'Exportar historial de plantillas',
	'desc_exporthistory' => 'Si está activado, '. SWIFT_PRODUCT.' exporta el historial de plantillas completo junto con el contenido de las plantillas originales.',
	'mergeoptions' => 'Opciones de fusión',
	'addtohistory' => 'Añadir al historial',
	'desc_addtohistory' => 'Si se activa, las plantillas antiguas se guardarán en el historial como referencia del grupo de plantillas fusionado.',
	'titleversioncheckfail' => 'La comprobación de versión ha fallado',
	'msgversioncheckfail' => SWIFT_PRODUCT. ' no puede importar el paquete de plantillas porque fue creado usando una versión antigua de '.SWIFT_PRODUCT,
	'desc_restoretemplates' => '',
	'tabgeneral' => 'General',
	'restoretemplatestatus' => 'Estado de plantilla',
	'restoretgroup' => 'Grupo de plantillas: %s',
	'tabrestore' => 'Restaurar plantillas',
	'restoresubmitquestion' => 'Está seguro de que desea restaurar las plantillas seleccionadas a su estado original?\nEsta acción es irreversible; perderá todas las modificaciones realizadas en las mismas.',
	'titlerestoretemplates' => 'Restauradas "%d" plantillas',
	'msgrestoretemplates' => 'Se han restaurado correctamente las siguientes plantillas:',
	'desc_diagnostics' => '',
	'tabdiagnostics' => 'Diagnósticos',
	'desc_search' => '',
	'tabsearch' => 'Buscar plantillas',
	'tabplugins' => 'Plugins',
	'ls_module' => 'Plugins LoginShare',
	'wineditls' => 'Editar plugin LoginShare: %s',
	'tabsettings' => 'Configuración',
	'invalidloginshareplugin' => 'Plugin LoginShare no válido. Por favor, asegúrese de que el plugin existe en la base de datos.',
	'lsnotitle' => 'No hay opciones disponibles',
	'lsnomsg' => 'No hay configuración disponible para el plugin LoginShare <b>"%s"</b>.',
	'loginsharefile' => 'Archivo XML LoginShare',
	'desc_loginsharefile' => 'Seleccione el archivo XML LoginShare',
	'titlenoelevatedls' => 'Imposible importar el XML LoginShare',
	'msgnoelevatedls' => SWIFT_PRODUCT.' no puede importar el archivo XML LoginShare ya que es necesario iniciar sesión con una cuenta de operador con privilegios especiales. Puede añadir su usuario a la lista de usuarios con privilegios especiales en el archivo config/config.php del paquete.',
	'titlelsversioncheckfail' => 'La comprobación de versión ha fallado',
	'msglsversioncheckfail' => SWIFT_PRODUCT. ' no ha podido importar el plugin LoginShare Plugin porque fue creado para una versión anterior de '.SWIFT_PRODUCT,
	'titlelsinvaliduniqueid' => 'Error de ID único duplicado',
	'msglsinvaliduniqueid' => SWIFT_PRODUCT .' no puede importar el plugin LoginShare debido a un conflicto de ID único. Esto habitualmente significa que el plugin ya ha sido importado a la base de datos.',
	'titlelsinvalidxml' => 'Archivo XML no válido',
	'msglsinvalidxml' => SWIFT_PRODUCT .' no puede importar el plugin LoginShare porque el archivo XML está corrupto o contiene datos no válidos.',
	'titlelsimported' => 'Plugin LoginShare importado correctamente',
	'msglsimported' => SWIFT_PRODUCT .' ha importado correctamente el plugin LoginShare %s.',
	'titlelsdeleted' => 'Eliminado plugin LoginShare',
	'msglsdeleted' => 'Se ha eliminado correctamente el Plugin LoginShare "%s" de la base de datos.',
	'groupusername' => 'Nombre de usuario',
	'desc_groupusername' => 'Introduzca el nombre de usuario de este grupo de plantillas. Esto es necesario únicamente si se habilita la protección con contraseña.',
	'isenabled' => 'Está activado?',
	'desc_isenabled' => 'Active o desactive el uso de este grupo de plantillas activando o desactivando esta opción.',
	'titlepwnomatch' => 'Contraseña no válida',
	'msgpwnomatch' => 'La contraseña especificada para el grupo de plantillas no coincide.',
	'titleinvalidgrouptitle' => 'Nombre de grupo de plantillas no válido',
	'msginvalidgrouptitle' => 'Sólo se permiten caracteres alfanuméricos en el nombre de los grupos de plantillas',
	'titlegrouptitleexists' => 'Nombre de grupo no válido',
	'msggrouptitleexists' => 'Hay otro grupo de plantillas con el mismo nombre; por favor, seleccione un nombre diferente.',
	'winedittemplategroup' => 'Editar grupo de plantillas: %s',
	'tabpermissions' => 'Permisos',
	'titletgroupupdate' => 'Actualizado el grupo de plantillas "%s"',
	'msgtgroupupdate' => 'Se ha actualizado correctamente el grupo de plantillas "%s".',
	'titletgroupinsert' => 'Insertado el grupo de plantillas "%s"',
	'msgtgroupinsert' => 'Se ha insertado correctamente el grupo de plantillas "%s" en la base de datos.',
	'titletgroupnodel' => 'Imposible eliminar el/los grupo(s) de plantillas',
	'msgtgroupnodel' => SWIFT_PRODUCT . ' no puede eliminar el/los siguiente(s) grupo(s) de plantillas maestro(s) de la base de datos:',
	'titletgroupdel' => 'Eliminados "%d" grupos de plantillas',
	'msgtgroupdel' => 'Se han eliminado correctamente los siguientes grupos de plantillas.',
	'titletgrouprestorecat' => 'Restaurada la categoría de grupo de plantillas',
	'msgtgrouprestorecat' => 'Se ha restaurado correctamente la categoría "%s" del grupo de plantillas "%s" (%s)',
	'titletgrouprestore' => 'Restaurados "%d" grupos de plantillas',
	'msgtgrouprestore' => 'Se han restaurado correctamente los siguientes grupos de plantillas.',
	'expandcontract' => 'Expandir/Contraer',
	'tgroupjump' => 'Grupo de plantillas: %s',
	'tabhistory' => 'Historial',
	'templateversion' => 'Versión de plantilla',
	'desc_templateversion' => '',
	'saveasnewversion' => 'Guardar como nueva versión',
	'titletemplaterestore' => 'Plantilla "%s" restaurada',
	'msgtemplaterestore' => 'Se ha restaurado correctamente la plantilla "%s" a su contenido por defecto.',
	'titletemplateupdate' => 'Plantilla "%s" actualizada',
	'msgtemplateupdate' => 'Se ha actualizado correctamente la plantilla "%s"',
	'tabedittemplate' => 'Plantilla: %s (%s)',
	'titlenohistory' => 'No hay historial disponible',
	'msgnohistory' => SWIFT_PRODUCT.' no dispone de registro de historial para la plantilla "%s".',
	'historydescription' => 'Descripción del historial',
	'historyitemlist' => '%s: %s (%s) Notas: <i>%s</i>',
	'system' => '(Sistema)',
	'historyitemcurrent' => '%s: <i><b>Actual</b></i> (%s)',
	'compare' => 'Comparar',
	'current' => 'Actual',
	'notcurrenttemp' => 'Versión antigua',
	'exportdiff' => 'Exportar Diff (Formato unificado)',
	'tabcomparison' => 'Comparación',
	'changelognotes' => 'Notas de cambios',
	'desc_changelognotes' => '',
	'none' => 'Ninguno',
	'inserttemplate' => 'Insertar plantilla',
	'inserttgroup' => 'Grupo de plantillas',
	'desc_inserttgroup' => 'Por favor, seleccione el grupo de plantillas para esta plantilla.',
	'restoreconfirmaskcat' => 'Está seguro de que desea restaurar las plantillas de esta categoría?\nEsta acción es irreversible; la restauración de las plantillas podría provocar la péridida de todos los cambios hechos en el interfaz de usuario!',
	'inserttemplatetgroup' => 'Grupo de plantillas',
	'inserttemplatetcategory' => 'Categoría de plantillas',
	'inserttemplatename' => 'Nombre de plantilla',
	'desc_inserttemplatename' => 'Introduzca el nombre de la plantilla. No se permiten caracteres especiales.',
	'titleinserttemplatedupe' => 'Conflicto de nombre de plantilla',
	'msginserttemplatedupe' => 'Por favor, especifique un nombre de plantilla diferente, ya que existe otra plantilla en el grupo con ese nombre.',
	'titleinserttemplatechar' => 'Nombre de plantilla no válido',
	'msginserttemplatechar' => 'Por favor, especifique un nombre de plantilla sin caracteres especiales ni espacios para poder continuar.',
	'titleinserttemplate' => 'Insertada plantilla "%s"',
	'msginserttemplate' => 'Se ha insertado correctamente la plantilla "%s" en el grupo de plantilla "%s"',
	'titletemplatedel' => 'Plantilla eliminada',
	'msgtemplatedel' => 'Se ha eliminado correctamente la plantilla "%s" de la base de datos.',
	'titletemplateimportfailed' => 'Imposible importar las plantillas',
	'msgtemplateimportfailed' => SWIFT_PRODUCT . ' no ha podido importar las plantillas del paquete %s. Por favor, revise la integridad del archivo del paquete.',
	'titlelsupdate' => 'Actualización LoginShare',
	'msglsupdate' => 'Se ha actualizado la configuración LoginShare "%s"',
	'titletgroupmerge' => 'Grupo de plantillas "%s" fusionado con el archivo importado',
	'msgtgroupmerge' => SWIFT_PRODUCT . ' ha fusionado las actualizaciones del archivo de plantillas "%s" con el grupo de plantillas "%s"',
	'titletgroupimport' => 'Importado grupo de plantillas "%s"',
	'msgtgroupimport' => SWIFT_PRODUCT . ' ha importado las plantillas del archivo de plantillas "%s" al grupo de plantillas "%s"',
	'tabsettings_tickets' => 'Configuración: Tickets',
	'tabsettings_livechat' => 'Configuración: Chat',
	// ======= END v4 LOCALES =======

	'templates' => 'Plantillas',

	// ======= IMPORT/EXPORT =======
	'importexport' => 'Importar/Exportar',
	'exporttemplates' => 'Exportar plantillas',
	'exporttgroup' => 'Grupo de plantillas',
	'desc_exporttgroup' => 'Seleccione el grupo desde el que se exportarán las plantillas.',
	'exportxml' => 'Exportar XML',
	'filename' => 'Nombre de archivo',
	'desc_filename' => 'Especifique el nombre de archivo de exportación.',
	'exportoptions' => 'Opciones de exportación',
	'desc_exportoptions' => 'Seleccione las opciones de exportación. Si selecciona "Exportar sólo modificaciones", sólo se exportarán las plantillas modificadas o que necesiten un reseteo por actualización.',
	'exportalltemplates' => 'Exportar todas las plantillas',
	'exportmodifications' => 'Exportar sólo modificaciones',
	'importtemplates' => 'Importar plantillas',
	'templatefile' => 'Archivo XML de plantilla',
	'desc_templatefile' => 'Subir el archivo XML a importar.',
	'createnewgroup' => '-- Crear nuevo grupo de plantillas --',
	'mergewith' => 'Fusionar con',
	'desc_mergewith' => 'Puede fusionar los cambios del archivo de importación con un grupo existente o crear un nuevo grupo de plantillas.',
	'ignoreversion' => 'Ignorar versión',
	'desc_ignoreversion' => 'Si se selecciona, se ignorará la versión del archivo de importación. No se recomienda activar esta opción, ya que puede producir problemas en el Centro de Soporte.',
	'importxml' => 'Importar XML',
	'tgroupmergeconfirm' => 'Grupo de plantillas "%s" fusionado con el archivo de importación',
	'versioncheckfailed' => 'La comprobación de versión ha fallado: el paquete de plantillas seleccionado fue creado con una versión anterior de '.SWIFT_PRODUCT,
	'tgroupnewimportconfirm' => 'El grupo de plantillas "%s" se ha importado correctamente',

	// ======= INSERT GROUP =======
	'insertemplategroup' => 'Insertar grupo de plantillas',
	'templategroupdetails' => 'Detalles del grupo de plantillas',
	'tgrouptitle' => 'Nombre del grupo de plantillas',
	'desc_tgrouptitle' => 'Introduzca el nombre del grupo de plantillas. El nombre no debería contener símbolos ni espacios.',
	'companyname' => 'Nombre de organización',
	'desc_companyname' => 'Introduzca el nombre de organización por defecto asociado a este grupo de plantillas.',
	'generaloptions' => 'Opciones generales',
	'defaultlanguage' => 'Idioma por defecto',
	'desc_defaultlanguage' => 'Seleccione el idioma por defecto para este grupo de plantillas. Los usuarios podrán seleccionar otro si lo desean.',
	'usergroups' => 'Grupos de usuarios por defecto',
	'guestusergroup' => 'Grupo de usuarios visitantes',
	'desc_guestusergroup' => 'Especifique el grupo de usuarios por defecto para los visitantes (usuarios no registrados). Los permisos de este grupo se aplicarán a todos los visitantes.',
	'regusergroup' => 'Grupo de usuarios registrados',
	'desc_regusergroup' => 'Seleccione el grupo de usuarios para usuarios registrados. Los permisos de este grupo se aplicarán a todos los usuarios registrados.',
	'passwordprotection' => 'Protección por contraseña',
	'enablepassword' => 'Activar protección por contraseña',
	'desc_enablepassword' => 'Cambia la protección por contraseña para este grupo. '.SWIFT_PRODUCT. ' usa el método de autenticación  HTTP si está activada la protección por contraseña.',
	'password' => 'Contraseña',
	'desc_password' => 'Introduzca la contraseña para este grupo de plantillas. Esto sólo es necesario si se ha activado la protección por contraseña.',
	'passwordconfirm' => 'Contraseña (Confirmación)',
	'desc_passwordconfirm' => 'Introduzca la contraseña de nuevo para confirmarla',
	'restrictgroups' => 'Restringir grupo de usuarios',
	'desc_restrictgroups' => 'Si se activa, sólo los usuarios que pertenezcan al grupo de usuarios registrados podrán iniciar sesión en el Centro de Soporte de este grupo de plantillas.',
	'passworddontmatch' => 'ERROR: Las contraseñas no coinciden',
	'invalidgrouptitle' => 'ERROR: Sólo se admiten caracteres alfanuméricos en el nombre del grupo de plantillas',
	'copyfrom' => 'Copiar plantillas desde',
	'desc_copyfrom' => 'Seleccione el grupo desde el que '.SWIFT_PRODUCT.' copiará las plantillas.',
	'grouptitleexists' => 'ERROR: Nombre de grupo no válido. Hay otro grupo de plantillas con el mismo nombre. Por favor, seleccione un nombre diferente.',
	'promptticketpriority' => 'Preguntar prioridad del ticket?',
	'desc_promptticketpriority' => 'Si se activa, se pedirá al usuario que seleccione la prioridad del ticket durante la creación del mismo.',
	'prompttickettype' => 'Preguntar tipo de ticket?',
	'desc_prompttickettype' => 'Si se activa, se pedirá al usuario que seleccione un tipo de ticket durante la creación del mismo.',
	'tickettype' => 'Tipo de ticket por defecto',
	'desc_tickettype' => 'Seleccione el tipo de ticket por defecto para este grupo de plantillas. Todos los tickets que se creen tendrán preseleccionado este valor.',
	'ticketstatus' => 'Estado de ticket por defecto',
	'desc_ticketstatus' => 'Seleccione el estado por defecto para los tickets de este grupo de plantillas. Todos los tickets que se creen tendrán preseleccionado este valor. Además, cada respuesta de un usuario reseteará el estado del ticket al valor por defecto para el grupo de plantillas.',
	'ticketpriority' => 'Prioridad de ticket por defecto',
	'desc_ticketpriority' => 'Seleccione la prioridad que tendrán por defecto los tickets de este grupo de plantillas.',
	'ticketdep' => 'Departamento por defecto',
	'desc_ticketdep' => 'Seleccione el departamento por defecto. Este departamento estará preseleccionado en la página de envío de ticket.',
	'livechatdep' => 'Departamento por defecto',
	'desc_livechatdep' => 'Seleccione el departamento por defecto. Este departamento estará preseleccionado cuando un usuario solicite un chat.',
	'ticketsdeptitle' => '%s (Tickets)',
	'livesupportdeptitle' => '%s (Soporte Chat)',
	'isdefault' => 'Es grupo de plantillas por defecto',
	'desc_isdefault' => '',
	'loginshare' => 'Módulo LoginShare',
	'desc_loginshare' => 'Especifique el módulo LoginShare que se usará para autenticar a los visitantes de este grupo de plantillas. Asegúrese de que ha actualizado la configuración de este módulo en Plantillas &gt; LoginShare.',

	// ======= MANAGE TEMPLATE GROUPS =======
	'grouptitle' => 'Nombre del grupo',
	'glanguage' => 'Idioma',
	'managegroups' => 'Administrar grupos',
	'templategroups' => 'Grupos de plantillas',
	'desc_templategroups' => '',
	'grouplist' => 'Lista de grupos',
	'restore' => 'Restaurar',
	'export' => 'Exportar XML',
	'groupinsertconfirm' => 'El grupo de plantillas "%s" se ha insertado correctamente',
	'groupdelconfirm' => 'El grupo de plantillas "%s" se ha eliminado correctamente',
	'restoreconfirmask' => 'Está seguro de que desea restaurar las plantillas de este grupo?\nEsta acción es irreversible; restaurar las plantillas podría provocar la pérdida de todos los cambios de interfaz de usuario en las plantillas!',
	'restoreconfirm' => 'El grupo de plantillas "%s" ha sido restaurado',
	'inserttemplategroup' => 'Insertar grupo',
	'edittemplategroup' => 'Editar grupo',
	'invalidgroup' => 'Grupo de plantillas no válido',
	'groupupdateconfirm' => 'Grupo de plantillas "%s" actualizado correctamente',

	// ======= MANAGE TEMPLATES =======
	'desc_templates' => '',
	'managetemplates' => 'Administrar plantillas',
	'templatetitle' => 'Plantillas: %s',
	'templatecategories' => 'Categorías de plantillas',
	'expand' => 'Expandir',
	'groupjump' => 'Saltar grupo',
	'legend' => 'Leyenda: ',
	'notmodified' => 'No modificado',
	'modified' => 'Modificado',
	'upgrade' => 'Se requiere restauración por actualización',
	'expandall' => 'Expandir todo',
	'jump' => 'Saltar',
	'templategroup' => 'Grupo de plantillas',
	'desc_templategroup' => '',
	'invalidtemplate' => 'Plantilla no válida',
	'edittemplate' => 'Editar plantilla',
	'edittemplatetitle' => 'Plantilla: %s (Grupo: %s)',
	'generalinfo' => 'Información general',
	'templatedata' => 'Datos de plantilla',
	'savetemplate' => 'Guardar',
	'saveandreload' => 'Guardar y recargar',
	'preview' => 'Previsualizar',
	'restore' => 'Restaurar',
	'copyclipboard' => 'Copiar al portapapeles',
	'templatestatus' => 'Estado',
	'desc_templatestatus' => '',
	'tstatus' => '<img src="%s" align="absmiddle" border="0" /> %s', // Switch position for RTL language
	'dateadded' => 'Fecha adición/modificación',
	'desc_dateadded' => '',
	'contents' => '',
	'desc_contents' => '',
	'templateupdateconfirm' => 'Plantilla "%s" actualizada correctamente',
	'templaterestoreconfirm' => 'Plantillas "%s" restauradas a su contenido original',
	'templatesrestoreconfirm' => '%s plantillas restauradas a su contenido original',
	'restoretemplates' => 'Restaurar plantillas',
	'clipboardconfirm' => 'El contenido de la plantilla se ha copiado al portapapeles de su equipo. Ahora puede pegarlo en su editor HTML preferido.',
	'clipboardconfirmmoz' => 'Se ha seleccinado el texto que se debe copiar. Presione Ctrl+C para copiar el texto al portapapeles.',

	// Diagnostics
	'diagnostics' => 'Diagnósticos',
	'listmodified' => 'Lista de plantillas modificadas',
	'listtorestore' => 'Lista de plantillas a restaurar',
	'moditgroup' => 'Grupo de plantillas',
	'desc_moditgroup' => '',
	'list' => 'Lista',
	'diagnosesmarty' => 'Diagnosticar errores en el motor de plantillas Smarty',
	'diagtgroup' => 'Grupo de plantillas',
	'desc_diagtgroup' => '',
	'diagnose' => 'Diagnosticar',
	'modifiedtemplates' => 'Plantillas modificadas (Grupo: %s)',
	'listtemplates' => 'Lista de plantillas (Grupo: %s)',
	'templatename' => 'Nombre de plantilla',
	'status' => 'Estado',
	'diagnoseerrors' => 'Diagnosticar errores (Grupo: %s)',
	'compiletime' => 'Tiempo de compilación',

	// Search
	'search' => 'Buscar',
	'searchtemplates' => 'Buscar en plantillas',
	'query' => 'Texto a buscar',
	'desc_query' => 'Instroduzca el texto que quiere encontrar',
	'searchtgroup' => 'Buscar en',
	'desc_searchtgroup' => 'Seleccione el grupo de plantillas en el que se debe buscar',
	'searchqueryd' => 'Texto a buscar: %s',

	// LoginShare
	'loginshare' => 'LoginShare',
	'ls_module' => 'Plugin LoginShare',
	'pluginlist' => 'Lista de plugins',
	'hostname' => 'Servidor',
	'dbname' => 'Nombre BD',
	'dbuser' => 'Usuario BD',
	'dbpass' => 'Contraseña BD',
	'tableprefix' => 'Prefijo de tablas',
	'ldaphostname' => 'Servidor Active Directory',
	'ldapport' => 'Puerto (Por defecto: 389)',
	'ldapbasedn' => 'DN Base',
	'ldaprdn' => 'RDN',
	'ldappassword' => 'Contraseña',

	// H-Sphere
	'hsphostserver' => 'Nombre del servidor',
	'hspport' => 'Puerto del servidor',
	'hspurl' => 'URL de API XML',
	'hspconnectfail' => 'No se puede conectar al servidor. Inténtelo más adelante.',

	// ======= Category List =======
	'template_general' => 'General',
	'template_chat' => 'Soporte chat',
	'template_troubleshooter' => 'Asistente',
	'template_news' => 'Noticias',
	'template_downloads' => 'Descargas',
	'template_knowledgebase' => 'Base de conocimiento',
	'template_tickets' => 'Tickets',
	'template_parser' => 'Parser de correo',
	'template_purchase' => 'Comprador de tickets',

	// ======= LOGINSHARE =======
	'loginapi_modernbill' => 'ModernBill',
	'loginapi_ipb' => 'Invision Power Board',
	'loginapi_vb' => 'vBulletin',
	'loginapi_osc' => 'osCommerce',
	'loginapi_iono' => 'IONO License Manager',
	'loginapi_plexum' => 'Plexum',
	'loginapi_awbs' => 'AWBS',
	'loginapi_phpaudit' => 'PHPAudit v2',
	'loginapi_whmautopilot' => 'WHMAP v3',
	'loginapi_activedirectory' => 'Active Directory/LDAP',
	'loginapi_activedirectoryssl' => 'Active Directory/LDAP (SSL)',
	'loginapi_ticketpurchaser' => 'Ticker Purchaser',
	'loginapi_xcart' => 'X-Cart',
	'loginapi_phpbb' => 'PHPBB',
	'loginapi_smf' => 'Simple Machines Forum',
	'loginapi_mybb' => 'MyBB',
	'loginapi_xmb' => 'XMB',
	'loginapi_clientexec' => 'Clientexec',
	'loginapi_joomla' => 'Joomla CMS',
	'loginapi_hsphere' => 'H-Sphere XML-API',
	'loginapi_phpprobid' => 'PHPProBid',
	'loginapi_cubecart' => 'CubeCart',
	'loginapi_modernbillv5' => 'ModernBill v5',
	'loginapi_cscart' => 'CS-Cart',
	'loginapi_fsr' => 'FSRevolution',
	'loginapi_viper' => 'Viper Cart',
	'loginapi_xoops' => 'XOOPS',
	'loginapi_whmcsintegration' => 'WHMCS - Integration Placeholder Only (Not for direct logins)',
);

?>