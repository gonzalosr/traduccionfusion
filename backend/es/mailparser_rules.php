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
	'smatchtype' => 'Tipo de coincidencia',
	'matchtype' => 'Opciones de criterio',
	'desc_matchtype' => 'Seleccione el método de agrupación para los campos de criterio.',
	'smatchall' => 'Coincidir <b>Todos</b> los criterios (Y)',
	'smatchany' => 'Coincidir <b>Cualquier</b> criterio (O)',
	'isenabled' => 'Está activado?',
	'desc_isenabled' => 'Active o desactive la ejecución de esta regla mediante esta opción.',
	'insertcriteria' => 'Insertar criterio',
	'tabactions' => 'Acciones',
	'titlenoaction' => 'No se ha seleccionado acción',
	'msgnoaction' => 'Es necesario seleccionar al menos una acción a ejecutar si coincide el criterio para esta regla.',
	'if' => 'Si',
	'titleinsertrule' => 'Insertada regla de Procesador "%s"',
	'msginsertrule' => 'Se ha insertado correctamente la regla de Procesador "%s".',
	'titleupdaterule' => 'Actualizada regla de Procesador "%s"',
	'msgupdaterule' => 'Se ha actualizado la regla de Procesador "%s".',
	'titledelprules' => 'Eliminada(s) "%s" regla(s) de procesador',
	'msgdelprules' => 'Se han eliminado correctamente las siguientes reglas de Procesador.',
	'titleenableprules' => 'Activadas "%d" reglas de Procesador',
	'msgenableprules' => SWIFT_PRODUCT . ' ha activado correctamente las siguientes reglas:',
	'titledisableprules' => 'Desactivadas "%d" reglas de Procesador',
	'msgdisableprules' => SWIFT_PRODUCT . ' ha desactivado correctamente las siguientes reglas:',
	// ======= END v4 LOCALES =======

	'mailparser' => 'Procesador de correo',

	'desc_parserrules' => '',

	// Operators
	'opcontains' => 'contiene',
	'opnotcontains' => 'no contiene',
	'opequal' => 'igual a',
	'opnotequal' => 'no igual a',
	'opgreater' => 'mayor que',
	'opless' => 'menor que',
	'opregexp' => 'Expresión regular',
	'strue' => 'Verdadero',
	'sfalse' => 'Falso',

	// Criterias
	'psendername' => 'Nombre remitente',
	'desc_psendername' => 'El nombre del remitente se extrae de la cabecera "De:" del mensaje de correo electrónico. Ejemplo: <i>De: <span class="tabletitle">Nombre remitente</span> <emailremitente@dominio.com></i>',

	'psenderemail' => 'Dirección email remitente',
	'desc_psenderemail' => 'La dirección de email remitente se extrae de la cabecera "De:" del mensaje de correo electrónico. Ejemplo: <i>De: <span class="tabletitle">Nombre remitente</span> <emailremitente@dominio.com></i>',

	'pdestinationname' => 'Nombre destinatario',
	'desc_pdestinationname' => 'El nombre del destinatario se extrae de la cabecera "Para:" del mensaje de correo electrónico. El nombre del destinatario es habitualmente el nombre del operador que ha respondido al ticket (si no se ha configurado de otra manera)Ejemplo: <i>Para: <span class="tabletitle">Nombre destinatario</span> <emaildestinatario@dominio.com></i>',

	'pdestinationemail' => 'Dirección email destinatario',
	'desc_pdestinationemail' => 'La dirección de correo electrónico del destinatario se extrae de la cabecera "Para:" del mensaje de correo electrónico. La dirección es habitualmente la dirección de la cola a la que se envía la respuesta (excepto que se configure de otra manera) Ejemplo: <i>Para: <span class="tabletitle">Nombre destinatario</span> <emaildestinatario@dominio.com></i>',

	'preplytoname' => 'Nombre responder-a',
	'desc_preplytoname' => 'El nombre responder-a se extrae de la cabecera "Responder-a:" del mensaje de correo electrónico. Ejemplo: <i>Responder-a: <span class="tabletitle">Nombre responder-a</span> <emailrespondera@dominio.com></i>',

	'preplytoemail' => 'Dirección email responder-a',
	'desc_preplytoemail' => 'La dirección de correo electrónico de responder-a se extrae de la cabecera "Responder-a:" del mensaje. Ejemplo: <i>Responder-a: <span class="tabletitle">Nombre responder-a</span> <emailrespondera@dominio.com></i>',

	'psubject' => 'Asunto',
	'desc_psubject' => 'El asunto del correo electrónico.',

	'precipients' => 'Destinatarios',
	'desc_precipients' => 'Los destinatarios del mensaje. Puede haber múltiples destinatarios a los que se envió el mensaje entrante. Esta regla busca también en los destinatarios de las cabeceras "Para:" y "CC:".',

	'pbody' => 'Cuerpo del mensaje',
	'desc_pbody' => 'Los contenidos del cuerpo del mensaje tras haber quitado el HTML y líneas de corte.',

	'pbodysize' => 'Tamaño del cuerpo del mensaje',
	'desc_pdbodysize' => 'El tamaño total del cuerpo del mensaje en bytes.',

	'ptextbody' => 'Cuerpo del mensaje en texto plano',
	'desc_ptextbody' => 'Un email puede tener dos tipos de contenido; <i>texto plano</i>, <i>HTML</i> o <i>ambos</i>. Esta regla busca únicamente en la versión de <i>texto plano</i>. No todos los emails se envían en <b>ambos formatos</b>.',

	'phtmlbody' => 'Cuerpo del mensaje en HTML',
	'desc_phtmlbody' => 'Un email puede tener dos tipos de contenido; <i>texto plano</i>, <i>HTML</i> o <i>ambos</i>. Esta regla busca únicamente en la versión de <i>HTML</i>. No todos los emails se envían en <b>ambos formatos</b>.',

	'ptextbodysize' => 'Tamaño de cuerpo de texto',
	'desc_ptextbodysize' => 'Un email puede tener dos tipos de contenido; <i>texto plano</i>, <i>HTML</i> o <i>ambos</i>. Esta regla coincide con el tamaño total del contenido en <i>texto plano</i> en bytes.',

	'phtmlbodysize' => 'Tamaño de cuerpo de HTML',
	'desc_phtmlbodysize' => 'Un email puede tener dos tipos de contenido; <i>texto plano</i>, <i>HTML</i> o <i>ambos</i>. Esta regla coincide con el tamaño total del contenido en <i>HTML</i> en bytes.',

	'pattachmentname' => 'Nombre de adjunto',
	'desc_pattachmentname' => 'Coincide con los nombres de adjunto de adjuntos <i>aceptados</i>. Los tipos de adjunto aceptados se definen en el panel de control de administración en la sección <i>Procesador de correo</i>.',

	'pattachmentsize' => 'Tamaño de adjunto',
	'desc_pattachmentsize' => 'Coincide con el tamaño (en bytes) de cualquier adjunto <i>aceptado</i>. Los tipos de adjunto aceptados se definen en el panel de control de administración en la sección <i>Procesador de correo</i>.',

	'ptotalattachmentsize' => 'Tamaño total de adjunto',
	'desc_ptotalattachmentsize' => 'Coincide con el tamaño <b>total</b> (en bytes) de los adjuntos <i>aceptados</i> en un correo entrante. Los tipos de adjunto aceptados se definen en el panel de control de administración en la sección <i>Procesador de correo</i>.',

	'pisreply' => 'Es respuesta',
	'desc_pisreply' => 'Si el email entrante es marcado como respuesta a un <b>ticket existente</b>, esta regla devolverá verdadero.',

	'pisthirdparty' => 'Es tercero',
	'desc_pisthirdparty' => 'Si el email entrante se marca como respuesta a aun <b>ticket existente</b> desde una dirección que ha sido añadida como tercero, esta regla devolverá verdadero.',

	'pfloodprotection' => 'Protección contra flood activada',
	'desc_pfloodprotection' => 'Este criterio devuelve verdadero si se ha activado la protección contra flood en el email entrante.',

	'pisstaffreply' => 'Es respuesta de operador',
	'desc_pisstaffreply' => 'Si el correo entrante se marca como respuesta a un <b>ticket existente</b> desde la dirección de email de un operador, esta regla devolverá verdadero.',

	'pticketstatus' => 'Estado de ticket (tras procesarse)',
	'desc_pticketstatus' => 'Si el email entrante se procesa como respuesta a un ticket existente, el estado del ticket se comprobará por esta regla.',

	'pticketemailqueue' => 'Cola de email',
	'desc_pticketemailqueue' => 'Si el email entrante se recibe por la cola especificada la regla devolverá verdadero.',

	'ptickettype' => 'Tipo de ticket (tras procesarse)',
	'desc_ptickettype' => 'Si el email entrante se procesa como respuesta a un ticket existente, el tipo de ticket se comprobará por esta regla.',

	'pticketpriority' => 'Prioridad de ticket (tras procesarse)',
	'desc_pticketpriority' => 'Si el email entrante se procesa como respuesta a un ticket existente, la prioridad se comprobará por esta regla.',

	'pticketusergroup' => 'Grupo de usuarios del ticket (tras procesarse)',
	'desc_pticketusergroup' => 'Si el email entrante se procesa como respuesta a un ticket existente, el grupo de usuarios se comprobará por esta regla.',

	'pticketdepartment' => 'Departamento del ticket (tras procesarse)',
	'desc_pticketdepartment' => 'Si el email entrante se procesa como respuesta a un ticket existente, el departmento se comprobará por esta regla.',

	'pticketowner' => 'Responsable del ticket (tras procesarse)',
	'desc_pticketowner' => 'Si el email entrante se procesa como respuesta a un ticket existente, el responsable se comprobará por esta regla.',
	'prunassigned' => '-- Si asignar --',

	'pticketflagtype' => 'Tipo de marca (tras procesarse)',
	'desc_pticketflagtype' => 'Si el email entrante se procesa como respuesta a un ticket existente, el tipo de marca se comprobará por esta regla.',

	'pbayescategory' => 'Categoría bayesiana',
	'desc_pbayescategory' => 'La categoría bayesiana con el ranking de probabilidad más alto. Puede usar esto para filtrar el spam o entrenar el sistema para enrutar tickets automáticamente basándose en su contenido.',

	// Insert Rule
	'insertrule' => 'Insertar regla',
	'criteria' => 'Criterio',
	'newcriteria' => 'Nuevo criterio',
	'iruletype' => 'Tipo de regla: ',
	'ipreparse' => 'Pre procesado',
	'ipostparse' => 'Post procesado',

	'paignore' => 'Ignorar email',
	'desc_paignore' => 'El email será completamente ignorado por el sistema y no se procesará en un ticket o respuesta.',
	'panoautoresp' => 'No enviar acuse de recibo',
	'desc_panoautoresp' => 'El acuse de recibo del ticket o respuesta no se enviará.',
	'panoalerts' => 'No procesar reglas de alerta de tickets',
	'desc_panoalerts' => 'No se procesarán las alertas por email o SMS a operadores.',
	'pnochange' => '-- Sin cambios --',
	'pcstaff' => 'Asignar el ticket',
	'desc_pcstaff' => 'El ticket (nuevo o respuesta a uno existente) se asignará al operador especificado aquí.',
	'pcstatus' => 'Cambiar estado del ticket',
	'desc_pcstatus' => 'El estado del ticket se cambiará al especificado aquí.',
	'pcpriority' => 'Cambiar prioridad del ticket',
	'desc_pcpriority' => 'La prioridad del ticket se cambiará a la especificada aquí.',
	'pcdepartment' => 'Cambiar ticket de departamento',
	'desc_pcdepartment' => 'El ticket se moverá al departamento especificado aquí.',
	'pcslaplan' => 'Cambiar Plan SLA del ticket',
	'desc_pcslaplan' => 'Se asignará al ticket el plan SLA especificado aquí.',
	'pcmovetotrash' => 'Mover a papelera',
	'desc_pcmovetotrash' => 'El ticket se moverá a la papelera',
	'pcflag' => 'Marcar ticket',
	'desc_pcflag' => 'El ticket se marcará con este color.',
	'paddnotes' => 'Añadir nota',
	'desc_paddnotes' => 'Se añadirá una nota al ticket.',
	'pcforward' => 'Reenviar a',
	'desc_pcforward' => 'El email se reenviará a la dirección especificada aquí.',
	'preply' => 'Responder al email',
	'desc_preply' => 'Se reponderá automáticamente al email con el mensaje especificado aquí.',
	'panoticket' => 'No procesar como respuesta de ticket',
	'desc_panoticket' => 'En lugar de añadirse a un ticket existente, el email se procesará como un nuevo ticket.',
	'pctickettype' => 'Cambiar tipo de ticket',
	'desc_pctickettype' => 'El tipo de ticket se cambiará al especificado aquí.',
	'pcaddtags' => 'Añadir etiquetas',
	'desc_pcaddtags' => 'Las etiquetas que se especifiquen se4 añadirán al ticket.',
	'pcremovetags' => 'Eliminar etiquetas',
	'desc_pcremovetags' => 'Se eliminarán del ticket las etiquetas especificadas.',

	// Edit Rules
	'editrule' => 'Editar regla',
	'ptitle' => 'Nombre de regla',
	'desc_ptitle' => 'Introduzca un nombre para la regla.',
	'pstop' => 'Parar procesamiento de reglas',
	'desc_pstop' => 'Si se activa y se encuentra esta regla, no se procesarán las siguientes independientemente de que el correo entrante las cumpla.',
	'ruleinsertconfirm' => 'Regla de Procesador "%s" insertada correctamente',
	'ruleupdateconfirm' => 'Regla de Procesador "%s" actualizada correctamente',
	'invalidrule' => 'ERROR: Regla de Procesador no válida',

	// Manage Rules
	'managerules' => 'Reglas',
	'ruledelconfirm' => 'Regla de Procesador eliminada correctamente',
	'ruletitle' => 'Nombre de regla',
	'sortorder' => 'Orden de ejecución',
	'desc_sortorder' => 'El Procesador ejecutará las reglas de acuerdo con este valor. (p.ej. <i>la regla "1" seejecutará antes que la "2", etc</i>).',
	'ruletype' => 'Tipo de regla',
	'creationdate' => 'Fecha de creación',
	'rulelist' => 'Lista de reglas',
);
?>