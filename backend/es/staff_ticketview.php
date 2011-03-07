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
	'titlemasterviewdel' => 'Imposible eliminar "%d" vistas',
	'msgmasterviewdel' => SWIFT_PRODUCT . ' no ha podido eliminar las siguientes vistas maestras de ticket:',
	'manageviews' => 'Vistas',
	'insertview' => 'Insertar vista',
	'viewtitle' => 'Nombre',
	'desc_viewtitle' => 'Introduzca un nombre para la vista. Sólo se permiten caracteres alfanuméricos y espacios.',
	'viewscope' => 'Ámbito de aplicación',
	'createdby' => 'Creada por',
	'editview' => 'Editar vista',
	'titleticketviewinsert' => 'Insertada vista de ticket "%s"',
	'msgticketviewinsert' => SWIFT_PRODUCT . ' ha insertado correctamente la vista de ticket "%s".',
	'titleticketviewupdate' => 'Actualizada vista de ticket "%s"',
	'msgticketviewupdate' => SWIFT_PRODUCT . ' ha actualizado correctamente la vista de ticket "%s".',
	'titleviewfieldempty' => 'No se han especificado columnas',
	'msgviewfieldempty' => 'No se ha podido insertar/actualizar la vista de ticket. Es necesario especificar al menos una columna para continuar.',

	'viewlinkdepartment' => 'Vincular con los departamentos',
	'desc_viewlinkdepartment' => 'Usando esta opción puede vincular esta vista con los departamentos que seleccione. Los departamentos vinculados usarán automáticamente esta vista; sin embargo si hay más de una vista vinculada con un departamento, se usará la más antigua.',

	'taboptions' => 'Opciones',
	'tabcolumns' => 'Columnas',

	'viewscope_global' => 'Global',
	'viewscope_private' => 'Privada',
	'viewscope_team' => 'Equipo',

	'viewunassigned' => 'Sin asignar',
	'viewassigned' => 'Asignados a mí',
	'viewalltickets' => 'Todos los tickets',

	'viewassignedfield' => 'Mostrar tickets asignados a',
	'desc_viewassignedfield' => 'Seleccione el tipo de tickets que se mostrarán en esta vista.<br /><br /><em>Sin asignar:</em> Tickets que no están asignados a ningún operador.<br /><br /><em>Asignados a mí:</em> Tickets asignados a usted.<br /><br /><em>Todos los tickets:</em> Tickets sin asignar o asignados a cualquier usuario.',
	'viewscope' => 'Ámbito de aplicación de la vista',
	'desc_viewscope' => '<em>Vistas globales:</em> Visibles para todos los operadores.<br /><br /><em>Vistas privadas:</em> Visibles únicamente para el operador que creó la vista.<br /><br /><em>Vistas de equipo:</em> Visibles para todos los miembros del equipo.',

	'viewselectfields' => 'Seleccione los campos (Arrastre y suelte los campos sobre la caja amarilla)',
	'viewsortoptions' => 'Opciones de orden',
	'viewsortby' => 'Ordenar por',
	'desc_viewsortby' => 'Seleccione el campo que se usará para ordenar los tickets.',
	'viewsortorder' => 'Orden de vistas',
	'desc_viewsortorder' => 'Las vistas de ticket se mostrarán según el orden especificado aquí.',
	'viewticketsperpage' => 'Tickets por página',
	'desc_viewticketsperpage' => 'Introduzca el número de tickets que se mostrará en cada página de esta vista.',
	'generaloptions' => 'Opciones generales',
	'viewautorefresh' => 'Autoactualizar listado',
	'desc_viewautorefresh' => 'La lista de tickets puede autoactualizarse en intervalos de tiempo determinados.',
	'autorefresh_disable' => '-- Desactivar autoactualización --',
	'autorefresh_30s' => 'Cada 30 segundos',
	'autorefresh_1m' => 'Cada minuto',
	'autorefresh_5m' => 'Cada 5 minutos',
	'autorefresh_15m' => 'Cada 15 minutos',
	'autorefresh_30m' => 'Cada 30 minutos',
	'autorefresh_1h' => 'Cada hora',
	'viewsetasowner' => 'Establecer al operador activo como responsable',
	'desc_viewsetasowner' => 'Si está activado, el ticket se asignará automáticamente al operador que responda o reenvíe el ticket.',
	'viewdefaultstatusonreply' => 'Estado del ticket por defectoal responder o reenviar',
	'desc_viewdefaultstatusonreply' => 'Seleccione el estado que tendrán los tickets después de haberlos respondido o reenviado.<br /><br /><em>Nota:</em> Esto <strong>NO SE APLICARÁ</strong> a las respuestas realizadas desde el correo electrónico.',
	'defaultstatus_unspecified' => '-- No especificado --',

	'afterreply_topticketlist' => 'Lista de tickets de máximo nivel (Ver todos)',
	'afterreply_activeticketlist' => 'Lista de tickets activos (Departamento/Búsqueda)',
	'afterreply_ticket' => 'El ticket activo',
	'afterreply_nextticket' => 'El siguiente ticket disponible',
	'viewafterreplyaction' => 'Después de responder/reenviar llevame a ',
	'desc_viewafterreplyaction' => 'Seleccione el área a la que ' . SWIFT_PRODUCT . ' debe llevarle después de responder o reenviar un ticket.',

	'viewfilteroptions' => 'Opciones de filtrado',
	'viewfilterdepartments' => 'Filtar departamentos',
	'desc_viewfilterdepartments' => SWIFT_PRODUCT . ' mostrará por defecto tickets de todos los departamentos. Sin embargo, puede usar esta opción para mostrar sólo los tickets de los departamentos seleccionados.',
	'viewfiltertype' => 'Filtrar tipos de ticket',
	'desc_viewfiltertype' => 'Puede usar esta opción para mostrar sólo los tickets de los tipos seleccionados.',
	'viewfilterstatus' => 'Filtrar estados de ticket',
	'desc_viewfilterstatus' => 'Puede usar esta opción para mostrar sólo los tickets que tengan los estados seleccionados.',

	'sort_asc' => 'Ascendente',
	'sort_desc' => 'Descendente',
);
?>
