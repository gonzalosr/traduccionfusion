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
	'tickets' => 'Tickets',
	'insertworkflow' => 'Insertar flujo de trabajo',
	'desc_insertworkflow' => '',
	'tabgeneral' => 'General',
	'tabactions' => 'Acciones',
	'workflowtitle' => 'Nombre de flujo de trabajo',
	'desc_workflowtitle' => 'Introduzca el nombre de flujo de trabajo',
	'isenabled' => '¿Activado?',
	'desc_isenabled' => 'Determine si se ejecutará esta regla de flujo de trabajo activando/desactivando esta opción.',
	'triggerevent' => 'Activación',
	'desc_triggerevent' => 'Seleccione el evento que activará esta regla de flujo de trabajo',
	'insertcriteria' => 'Insertar criterio',
	'sortorder' => 'Orden',
	'desc_sortorder' => 'Especifique el orden para esta regla de flujo de trabajo. Las reglas se procesarán en orden ascendente.',
	'smatchtype' => 'Tipo de coincidencia',
	'matchtype' => 'Opciones de criterio',
	'desc_matchtype' => 'Seleccione el método de agrupación para los campos de criterio.',
	'smatchall' => 'Coincidir todo (Y)',
	'smatchany' => 'Coincidir cualquiera (O)',
	'editworkflow' => 'Editar flujo de trabajo',
	'desc_editworkflow' => '',
	'invalidworkflowrule' => 'Flujo de trabajo no válido. Por favor, asegúrese de que el registro existe en la base de datos.',
	'manageworkflows' => 'Flujos de trabajo',
	'desc_manageworkflows' => '',
	'creationdate' => 'Fecha de creación',
	'titleworkflowdel' => 'Eliminados "%d" flujos de trabajo',
	'msgworkflowdel' => 'Se han eliminado los siguientes flujos de trabajo para tickets:',
	'tabnotifications' => 'Notificaciones',
	'insertnotification' => 'Insertar notificación',

	'tabpermissions' => 'Permisos',
	'staffvisibilitycustom' => '¿Restringir el cambio a determinados equipos de operadores?',
	'desc_staffvisibilitycustom' => 'Si se activa, el flujo de trabajo será visible y podrá ser ejecutado únicamente por los equipos de operadores seleccionados.',
	'staffgroups' => 'Equipos de operadores',

	// Actions
	'nochange' => '-- Sin cambios --',
	'actionstaff' => 'Asignar a operador',
	'desc_actionstaff' => '',
	'actionpriority' => 'Cambiar prioridad',
	'desc_actionpriority' => '',
	'actionticketstatus' => 'Cambiar estado del ticket',
	'desc_actionticketstatus' => '',
	'actiondepartment' => 'Mover a departamento',
	'desc_actiondepartment' => '',
	'actionslaplan' => 'Cambiar Plan SLA',
	'desc_actionslaplan' => '',
	'actionflagtype' => 'Cambiar tipo de marca',
	'desc_actionflagtype' => '',
	'noplanavailable' => '-- No disponible --',
	'actionnotes' => 'Añadir notas',
	'desc_actionnotes' => '',
	'titlenoaction' => 'Sin acción seleccionada',
	'msgnoaction' => 'Es necesario seleccionar al menos una acción a ejecutar en caso de coincidencia con el criterio seleccionado para este flujo de trabajo.',
	'actionaddtags' => 'Añadir etiquetas',
	'desc_actionaddtags' => '',
	'actionremovetags' => 'Eliminar etiquetas',
	'desc_actionremovetags' => '',
	'actiontickettype' => 'Cambiar tipo de ticket',
	'desc_tickettype' => '',
	'actiontrainbayesian' => 'Entrenar bayesiano',
	'desc_trainbayesian' => '',
	'actiontrash' => 'Mover a la papelera',
	'desc_actiontrash' => '',

	// Trigger Events
	'tecron' => 'Tarea programada (Ejecución automatizada recurrente)',
	'desc_tecron' => 'Este evento se activará cada vez que se ejecute una tarea programada. Lo normal es que sea cada 3-5 minutos dependiendo de la ejecución de cron pseudo/manual.',
	'teticketcreation' => 'Creación de ticket',
	'desc_teticketcreation' => 'Este evento se activará cuando se cree un nuevo ticket',
	'teslaplan' => 'Cambiar Plan SLA',
	'desc_teslaplan' => 'Este evento se activará cuando se cambie un Plan SLA',
	'teflag' => 'Cambio marca',
	'desc_teflag' => 'Este evento se activará cuando se cambie el tipo de marca de un ticket',
	'temarkdue' => 'Ticket marcado como vencido',
	'desc_temarkdue' => 'Este evento se activará cuando un ticket esté marcado como vencido',
	'teaddrecipients' => 'Añadir destinatarios',
	'desc_teaddrecipients' => 'Este evento se activará cuando se añada destinatarios a un ticket',
	'teupdateproperties' => 'Actualizar propiedades',
	'desc_teupdateproperties' => 'Este evento se activará cuando se actualicen las propiedades del ticket',
	'testaffreply' => 'Respuesta operador',
	'desc_testaffreply' => 'Este evento se activará cuando un operador responda un ticket',
	'teuserreply' => 'Respuesta usuario',
	'desc_teuserreply' => 'Este evento se activará cuando un usuario responda a un ticket',
	'teticketnote' => 'Nota de ticket',
	'desc_teticketnote' => 'Este evento se activará cuando se añada una nota a un ticket',
	'techangepriority' => 'Cambio prioridad',
	'desc_techangepriority' => 'Este evento se activará cuando se cambie la prioridad de un ticket',
	'techangestatus' => 'Cambio estado',
	'desc_techangestatus' => 'Este evento se activará cuando se cambie el estado de un ticket',
	'teassignticket' => 'Asignar ticket',
	'desc_teassignticket' => 'Este evento se activará cuando se asigne un ticket a un operador',
	'temoveticket' => 'Mover ticket',
	'desc_temoveticket' => 'Este evento se activará cuando un ticket se mueva a un nuevo departamento',
	'teforwardticket' => 'Reenvío de ticket',
	'desc_teforwardticket' => 'Este evento se activará cuando un ticket se reenvíe a un tercero',
	'tesavedraft' => 'Guardar como borrador',
	'desc_tesavedraft' => 'Este evento se activará cuando un ticket se guarde como borrador',
	'teescalateticket' => 'Ticket cambiado de nivel',
	'desc_teescalateticket' => 'Este evento se activará cuando un ticket sea cambiado de nivel',
	'tetimeworked' => 'Tiempo trabajado',
	'desc_timeworked' => 'Este evento se activará cuando un se añada una entrada de tiempo de trabajo al ticket',
	'teticketpost' => 'Mensaje de ticket actualizado',
	'desc_teticketpost' => 'Este evento se activará cuando un mensaje de un ticket sea actualizado por un operador',
	'teaddlabel' => 'Etiquetado',
	'desc_teaddlabel' => 'Este evento se activará cuando se añada una etiqueta a un ticket',
	'titleinsertworkflow' => 'Insertada regla de flujo de trabajo "%s"',
	'msginsertworkflow' => 'Se ha insertado correctamente la regla de flujo de trabajo "%s" en la base de datos.',
	'titleupdateworkflow' => 'Actualizada regla de flujo de trabajo "%s"',
	'msgupdateworkflow' => 'Se ha actualizado correctamente la regla de flujo de trabajo "%s".',
	'titleworkflowenable' => 'Activados "%d" flujos de trabajo',
	'msgworkflowenable' => SWIFT_PRODUCT . ' ha activado correctamente los siguientes flujos de trabajo:',
	'titleworkflowdisable' => 'Desactivados "%d" flujos de trabajo',
	'msgworkflowdisable' => SWIFT_PRODUCT . ' ha desactivado los siguientes flujos de trabajo:',
	'wfaticketstatus' => 'Cambiar estado de ticket',
	'wfatickettype' => 'Cambiar tipo de ticket',
	'wfaaddtags' => 'Añadir etiquetas',
	'wfaremovetags' => 'Eliminar etiquetas',
	'wfadepartment' => 'Cambiar departamento del ticket',
	'wfaflag' => 'Marcar ticket',
	'wfaddnotes' => 'Añadir notas',
	'wfapriority' => 'Cambiar prioridad de ticket',
	'wfastaff' => 'Cambiar responsable del ticket',
	'wfaslaplan' => 'Cambiar Plan SLA',
	'wfabayesian' => 'Entrenar bayesiano',
	'wfatrash' => 'Mover a la papelera',

	// Criteria Tags
	'wftickettype' => 'Tipo de ticket',
	'desc_wftickettype' => '',
	'wfbayesian' => 'Categoría bayesiana',
	'desc_wfbayesian' => '',
	'wfsubject' => 'Asunto',
	'desc_wfsubject' => '',
	'notapplicable' => '-- No disponible --',
	'wfticketstatus' => 'Estado ticket',
	'desc_wfticketstatus' => '',
	'wfticketpriority' => 'Prioridad ticket',
	'desc_wfticketpriority' => '',
	'wfusergroup' => 'Grupo usuarios',
	'desc_wfusergroup' => '',
	'wfdepartment' => 'Departamento',
	'desc_wfdepartment' => '',
	'wfowner' => 'Responsable',
	'desc_wfowner' => '',
	'wfunassigned' => '-- Sin asignar --',
	'wfactivestaff' => '-- Operador activo --',
	'wfemailqueue' => 'Cola email',
	'desc_wfemailqueue' => '',
	'wfflagtype' => 'Tipo de marca',
	'desc_wfflagtype' => '',
	'purpleflag' => 'Marca violeta',
	'orangeflag' => 'Marca naranja',
	'greenflag' => 'Marca verde',
	'yellowflag' => 'Marca amarilla',
	'redflag' => 'Marca roja',
	'blueflag' => 'Marca azul',
	'wfcreator' => 'Creador del ticket',
	'desc_wfcreator' => '',
	'creatorstaff' => 'Operador',
	'creatorclient' => 'Usuario',
	'wffullname' => 'Nombre',
	'desc_wffullname' => '',
	'wfemail' => 'Email',
	'desc_wfemail' => '',
	'wflastreplier' => 'Último en responder',
	'desc_wflastreplier' => '',
	'wfcharset' => 'Juego caracteres',
	'desc_wfcharset' => '',
	'wfslaplan' => 'Plan SLA',
	'desc_wfslaplan' => '',
	'wfdate' => 'Fecha creación',
	'desc_wfdate' => '',
	'wfdaterange' => 'Fecha creación <rango>',
	'desc_wfdaterange' => '',
	'wflastactivity' => 'Último mensaje',
	'desc_wflastactivity' => '',
	'wflastactivityrange' => 'Último mensaje <rango>',
	'desc_wflastactivityrange' => '',
	'wflaststaffreply' => 'Última respuesta de operador',
	'desc_wflaststaffreply' => '',
	'wflaststaffreplyrange' => 'Última respuesta de operador <rango>',
	'desc_wflaststaffreplyrange' => '',
	'wflastuserreply' => 'Última respuesta de usuario',
	'desc_wflastuserreply' => '',
	'wflastuserreplyrange' => 'Última respuesta de usuario <rango>',
	'desc_wflastuserreplyrange' => '',
	'wfdue' => 'Vencimiento',
	'desc_wfdue' => '',
	'wfduerange' => 'Vencimiento <rango>',
	'desc_wfduerange' => '',
	'wfisoverdue' => '¿Ha vencido?',
	'desc_wfisoverdue' => '',
	'wfresolutiondue' => 'Vencimiento resolución',
	'desc_wfresolutiondue' => '',
	'wfresolutionduerange' => 'Vencimiento resolución <rango>',
	'desc_wfresolutionduerange' => '',
	'wfisresolutionoverdue' => '¿Resolución vencida?',
	'desc_wfisresolutionoverdue' => '',
	'wftemplategroup' => 'Grupo de plantillas',
	'desc_wftemplategroup' => '',
	'wftimeworked' => 'Tiempo trabajado (en minutos)',
	'desc_wftimeworked' => '',
	'wftotalreplies' => 'Respuestas totales',
	'desc_wftotalreplies' => '',
	'wfpendingfollowups' => 'Seguimientos pendientes',
	'desc_wfpendingfollowups' => '',
	'wfipaddress' => 'Dirección IP',
	'desc_wfipaddress' => '',
	'wfisemailed' => 'Enviado al email',
	'desc_wfisemailed' => '',
	'wfisedited' => 'Editado',
	'desc_wfisedited' => '',
	'wfhasnotes' => 'Tiene notas',
	'desc_wfhasnotes' => '',
	'wfhasattachments' => 'Tiene adjuntos',
	'desc_wfhasattachments' => '',
	'wfisescalated' => 'Cambiado nivel',
	'desc_wfisescalated' => '',
	'wfhasdraft' => 'Tiene borrador',
	'desc_wfhasdraft' => '',
	'wfhasbilling' => 'Tiene facturación',
	'desc_wfhasbilling' => '',
	'wfisphonecall' => 'Ticket telefónico',
	'desc_wfisphonecall' => '',
	'wfislabeled' => 'Etiquetado',
	'desc_wfislabeled' => '',
);
?>