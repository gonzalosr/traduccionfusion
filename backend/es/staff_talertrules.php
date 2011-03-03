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
	'alertmailsubject' => '%s - [%s!%s]: %s',
	'managealerts' => 'Administrar alertas',
	'insertrule' => 'Insertar regla',
	'insertalert' => 'Insertar alerta',
	'ardelfailed' => ' Una o más alertas no se han podido eliminar.',

	// Manage Alert Rules
	'ruletitle' => 'Nombre de alerta',
	'desc_ruletitle' => 'Introduzca un nombre para la alerta.',
	'alerttype' => 'Tipo de alerta',
	'desc_alerttype' => 'Seleccione el tipo de alerta..<BR><BR><i>Email:</i> La alerta se enviará a los operadores por email.<BR /><i>SMS:</i> La alerta se enviará a los operadores mediante un SMS a su móvil. Para más información sobre SMSs, consulte la sección de pasarelas SMS del manual de usuario.',
	'alertscope' => 'Alcance de la alerta',
	'desc_alertscope' => 'Seleccione el ámbito de aplicación de la alerta. Si la alerta es <i>"Pública,"</i>se enviará a todos los operadores. Si es <i>"Privada,"</i> únicamente se enviará al oeprador que la creó.',
	'alertrules' => 'Reglas de alerta',
	'alertactions' => 'Eventos de alerta',
	'desc_alertactions' => 'Seleccione los eventos que harán que esta alerta se envíe.',

	// Insert Rule
	'sms' => 'SMS',
	'alertoptions' => 'Opciones de alerta',
	'execassign' => 'Ejecutar solo para tickets asignados',
	'desc_execassign' => 'Si está activado, la alerta sólo se enviará para tickets asignados a usted.',
	'ralldepartments'=> '-- Todos los departamentos --',
	'rdepartment' => 'Filtrar por departamento',
	'desc_rdepartment' => 'Si se selecciona un departamento aquí, la alerta sólo se enviará para los tickets de ese departamento. De lo contrario se usarán todos los departamentos.',
	'rallticketstatus' => '-- Todos los estados --',
	'rticketstatus' => 'Filtrar por estado de ticket',
	'desc_rticketstatus' => 'Si se selecciona aquí un estado de ticket, la alerta sólo se enviará para los tickets que tengan ese estado. De lo contrario se usarán todos los estados.',
	'rallticketpriorities' => '-- Todas las prioridades --',
	'rticketpriority' => 'Filtrar por prioridad de ticket',
	'desc_rticketpriority' => 'Si se selecciona aquí una prioridad de ticket, la alerta solo se enviará para los tickets con esa prioridad. De lo contrario, se usarán todas las prioridades.  <i>Por ejemplo, usted podría querer solo ser alertado por SMS para la prioridad Critica.</i>',
	'actioncnterror' => 'ERROR: Es necesario seleccionar como mínimo un evento para el que se ejecutará la regla.',
	'arinsertconfirm' => 'Regla de alerta "%s" insertada correctamente',
	'ardelconfirmmsg' => 'Está seguro de que desea eliminar esta regla de alerta?',
	'ardelconfirm' => ' Regla de alerta eliminada correctamente',
	'invalidar' => 'ERROR: Se ha especificado una regla de alerta no válida. Asegúrese de que la regla existe.',
	'areditconfirm' => 'La regla de alerta  "%s" se ha actualizado correctamente',
	'alertoptions' => 'Opciones de alerta',
	'deleterule' => 'Eliminar regla',

	// Alerts
	'alert_newticket' => 'Nuevo ticket',
	'alert_newreply' => 'Nueva respuesta de usuario',
	'alert_move' => 'Ticket movido',
	'alert_flag' => 'Ticket marcado',
	'alert_note' => 'Nueva nota',
	'alert_status' => 'Cambio de estado',
	'alert_edit' => 'Ticket editado',
	'alert_priority' => 'Cambio de prioridad',
	'alert_assign' => 'Ticket asignado',
	'alert_merge' => 'Ticket fusionado',
	'alert_deletepost' => 'Mensaje eliminado',
	'alert_deleteticket' => 'Ticket eliminado',
	'alert_newstaffreply' => 'Nueva respuesta de operador',

	// Alert Template Text
	'aflagalert' => 'Alerta de marcado de ticket',
	'aticketid' => 'ID de ticket',
	'aflag' => 'Marca',
	'aflagby' => 'Marcado por',
	'anewticket' => 'Nuevo ticket',
	'anewreply' => 'Nueva respuesta de usuario',
	'anewstaffreply' => 'Nueva respuesta de operador',
	'ticketdetails' => 'Detalles de ticket',
	'articketid' => 'ID de ticket: ',
	'ardepartment' => 'Departamento: ',
	'arpriority' => 'Prioridad: ',
	'arstatus' => 'Estado: ',
	'aticketnote' => 'Nota de ticket',
	'ausernote' => 'Nota de usuario',
	'aticketstatus' => 'Estado de ticket',
	'aoldstatus' => 'Antiguo estado: ',
	'anewstatus' => 'Nuevo estado: ',
	'aticketmoved' => 'Ticket movido',
	'aolddepartment' => 'Antiguo departamento: ',
	'anewdepartment' => 'Nuevo departamento: ',
	'aticketpriority' => 'Prioridad de ticket',
	'anewpriority' => 'Nueva prioridad: ',
	'aoldpriority' => 'Antigua prioridad: ',
	'aticketassigned' => 'Ticket asignado',
	'aassignedby' => 'Asignado por: ',
	'aprevowner' => 'Antiguo responsable: ',
	'aunassigned' => '- Sin asignado -',
	'aticketpostdel' => 'Eliminación de mensaje de ticket',
);
?>