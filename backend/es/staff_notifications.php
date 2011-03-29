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

$__LANG = array(
	'notifications' => 'Notificaciones',
	'manage' => 'Administrar',
	'ruletitle' => 'Nombre de la regla',
	'desc_ruletitle' => 'Introduzca el nombre de la regla de notificación',
	'isenabled' => 'Activada',
	'desc_isenabled' => 'Active o desactive la ejecución de esta regla de notificación.',
	'ruletype' => 'Tipo',
	'desc_ruletype' => '',
	'next' => 'Siguiente',
	'creator' => 'Creador',
	'wininsertnotification' => 'Insertar notificación',

	'unassigned' => '-- No asignada --',

	'tabgeneral' => 'General',
	'tabactions' => 'Acciones',
	'insertcriteria' => 'Insertar criterio',

	'na_email' => 'Email',
	'na_sms' => 'SMS',
	'na_pool' => 'Aplicación de escritorio',
	'na_staff' => 'Operador',
	'na_staffgroup' => 'Equipo de operadores',
	'na_department' => 'Departamento',
	'nactionemaildispatch' => 'Responsable del ticket',
	'desc_nactionemaildispatch' => '',
	'nadispatchemail' => 'Enviar email (personalizado)',
	'desc_nadispatchemail' => '',
	'nadispatchemailstaff' => 'Enviar email (operador)',
	'desc_nadispatchemailstaff' => '',
	'nactionpooldispatch' => 'Responsable del ticket',
	'desc_nactionpooldispatch' => '',
	'nactionpoolcustomdispatch' => 'Operador',
	'desc_nactionpoolcustomdispatch' => '',
	'notificationruledesc' => 'Seleccione un tipo de regla de notificación de entre las opciones disponibles.',
	'titlenocriteria' => 'No se ha especificado ningún criterio',
	'msgnocriteria' => 'No se ha podido crear/actualizar la regla de notificación porque no se ha especificado ningún criterio.',
	'titlenotificationinsert' => 'Se ha insertado la regla de notificación "%s"',
	'msgnotificationinsert' => SWIFT_PRODUCT . ' ha insertado correctamente la regla de notificación "%s".',
	'titlenotificationupdate' => 'Se ha actualizado la regla de notificación "%s"',
	'msgnotificationupdate' => SWIFT_PRODUCT . ' ha actualizado correctamente la regla de notificación "%s".',
	'tabnotifyapp' => 'Aplicación Windows',
	'tabemail' => 'Email',
	'titleenablenotification' => 'Se han activado "%d" reglas de notificación',
	'msgenablenotification' => SWIFT_PRODUCT . ' ha activado correctamente las siguientes reglas de notificación:<br/>%s',
	'titledisablenotification' => 'Se han desactivado "%d" reglas de notificación',
	'msgdisablenotification' => SWIFT_PRODUCT . ' ha desactivado correctamente las siguientes reglas de notificación:<br/>%s',
	
	'emailprefix' => 'Prefijo de asunto',
	'desc_emailprefix' => 'Puede especificar aquí un prefijo de asunto personalizado para identificar fácilmente las alertas de email para esta regla.',

	/**
	 * ---------------------------------------------
	 * RULE TYPES
	 * ---------------------------------------------
	 */
	'nrule_chat' => 'Chat',
	'nrule_message' => 'Mensaje offline',
	'nrule_survey' => 'Encuesta de chat',
	'nrule_ticket' => 'Ticket',
	'nrule_user' => 'Usuario',

	/**
	 * ---------------------------------------------
	 * RULE CRITERIA: TICKETS
	 * ---------------------------------------------
	 */

	'ntickettype' => 'Tipo de ticket',
	'desc_ntickettype' => '',
	'nbayesian' => 'Categoría bayesiana',
	'desc_nbayesian' => '',
	'notapplicable' => '-- No disponible --',
	'nticketstatus' => 'Estado del ticket',
	'desc_nticketstatus' => '',
	'nticketpriority' => 'Prioridad del ticket',
	'desc_nticketpriority' => '',
	'nusergroup' => 'Grupo de usuarios',
	'desc_nusergroup' => '',
	'ndepartment' => 'Departamento',
	'desc_ndepartment' => '',
	'nowner' => 'Responsable',
	'desc_nowner' => '',
	'nunassigned' => '-- Sin asignar --',
	'nactivestaff' => '-- Operador activo --',
	'nemailqueue' => 'Cola de email',
	'desc_nemailqueue' => '',
	'nflagtype' => 'Tipo de marca',
	'desc_nflagtype' => '',
	'purpleflag' => 'Marca violeta',
	'orangeflag' => 'Marca naranja',
	'greenflag' => 'Marca verde',
	'yellowflag' => 'Marca amarilla',
	'redflag' => 'Marca roja',
	'blueflag' => 'Marca azul',
	'ncreator' => 'Creador del ticket',
	'desc_ncreator' => '',
	'creatorstaff' => 'Operador',
	'creatorclient' => 'Usuario',
	'nslaplan' => 'Plan SLA',
	'desc_nslaplan' => '',
	'ndaterange' => 'Fecha de creación <rango>',
	'desc_ndaterange' => '',
	'nlastactivityrange' => 'Última actividad <rango>',
	'desc_nlastactivityrange' => '',
	'nlaststaffreplyrange' => 'Última respuesta de operador <rango>',
	'desc_nlaststaffreplyrange' => '',
	'nlastuserreplyrange' => 'Última respuesta de usuario <rango>',
	'desc_nlastuserreplyrange' => '',
	'nduerange' => 'Fecha de vencimiento <rango>',
	'desc_nduerange' => '',
	'nisoverdue' => 'Ha vencido?',
	'desc_nisoverdue' => '',
	'nresolutionduerange' => 'Vencimiento de la resolución <rango>',
	'desc_nresolutionduerange' => '',
	'nisresolutionoverdue' => 'La resolución ha vencido?',
	'desc_nisresolutionoverdue' => '',
	'ntemplategroup' => 'Grupo de plantillas',
	'desc_ntemplategroup' => '',
	'ntimeworked' => 'Tiempo trabajado (en minutos)',
	'desc_ntimeworked' => '',
	'ntotalreplies' => 'Respuestas totales',
	'desc_ntotalreplies' => '',
	'npendingfollowups' => 'Seguimientos pendientes',
	'desc_npendingfollowups' => '',
	'nipaddress' => 'Dirección IP',
	'desc_nipaddress' => '',
	'nisemailed' => 'Enviado por email',
	'desc_nisemailed' => '',
	'nisedited' => 'Editado',
	'desc_nisedited' => '',
	'nhasnotes' => 'Tiene notas',
	'desc_nhasnotes' => '',
	'nhasattachments' => 'Tiene adjuntos',
	'desc_nhasattachments' => '',
	'nisescalated' => 'Ha sido priorizado',
	'desc_nisescalated' => '',
	'nhasdraft' => 'Tiene borrador',
	'desc_nhasdraft' => '',
	'nhasbilling' => 'Tiene facturación',
	'desc_nhasbilling' => '',
	'nisphonecall' => 'Es un ticket telefónico',
	'desc_nisphonecall' => '',
	'nislabeled' => 'Está etiquetado',
	'desc_nislabeled' => '',

	'nticketevent' => 'Evento',
	'desc_nticketevent' => '',
	'tevent_newticket' => 'Nuevo ticket',
	'tevent_newticketnotes' => 'Nueva nota de ticket',
	'tevent_newclientreply' => 'Nueva respuesta del cliente',
	'tevent_newclientsurvey' => 'Nueva encuesta del cliente',
	'tevent_newstaffreply' => 'Nueva respuesta de operador',
	'tevent_ticketassigned' => 'Ticket asignado',
	'tevent_newuser' => 'Nuevo registro de usuario',

	'nuserevent' => 'Evento',
	'desc_nuserevent' => '',

	
);
?>