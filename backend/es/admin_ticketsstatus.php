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
	'tabgeneral' => 'General',
	'tabpermissions' => 'Permisos',
	'staffvisibilitycustom' => '¿Restringir cambio a determinados equipos de operadores?',
	'desc_staffvisibilitycustom' => 'Si se activa, únicamente los equipos de operadores seleccionados podrán cambiar el estado de un ticket.',
	'staffgroups' => 'Equipos de operadores',
	'triggersurvey' => 'Activar encuesta por email',
	'desc_triggersurvey' => 'Si se activa, cuando se cambie el estado de un ticket se enviará al usuario un correo solicitándole una valoración de la atención recibida.',
	'statustitle' => 'Nombre de estado',
	'desc_statustitle' => 'Introduzca un nombre de estado de ticket personalizado',
	'statuscolor' => 'Color fuente de estado',
	'desc_statuscolor' => 'Introduzca el código de color que quiere asociar con este estado.',
	'statusbgcolor' => 'Color de fondo de estado',
	'desc_statusbgcolor' => 'Introduzca el código de color de fondo que quiere asociar con este estado. Este color se usará para la barra general de pestañas cuando se vea el Ticket.',
	'displayorder' => 'Orden de visualización',
	'desc_displayorder' => 'Este es el orden de visualización por defecto en que se mostrarán los elementos (ascendente).',
	'displayiconstatus' => 'Icono',
	'desc_displayiconstatus' => 'Suba la imagen del icono (png, gif, jpg) o indique la URL del icono que se mostrará junto a este estado de ticket. Puede usar la variable {$themepath} en lugar de la ruta al directorio de temas. El tamaño recomendado es de 16x16 píxeles.',
	'statusdep' => 'Vincular estado',
	'desc_statusdep' => 'Esta opción le permite vincular este estado con un departamento determinado. La hacerlo el estado sólo será visible en el departamento vinculado.',
	'statusalldep' => '-- No vinculado --',
	'markasresolved' => '¿Marcar como resuelto?',
	'desc_markasresolved' => 'Si se activa, todos los tickets con este estado se marcarán como Resueltos/Cerrados. Además, los tickets no aparecerán en la lista general de tickets. Es recomendable que se active esta opción para estados de ticket resueltos como "Cerrado, "Resuelto", "Solucionado", etc.',
	'displayinmainlist' => 'Mostrar en listado principal de tickets',
	'desc_displayinmainlist' => 'Si se activa, todos los tickets con este estado se mostrarán en el listado principal de tickets. Se recomienda desactivar esta opción para tickets con estados como "Cerrado", "Solucionado" o "Solicitud de Información"',
	'displaycount' => 'Mostrar número de tickets en el árbol',
	'desc_displaycount' => 'Si se activa, se mostrará en el arbol de filtrado de tickets el número de tickets con este estado. Se recomienda desactivar esta opción para estados asociados a tickets solucionados o resueltos.',
	'statustype2' => 'Tipo de estado',
	'desc_statustype2' => 'Seleccione el tipo de estado. Los estados públicos son visibles en el Centro de Soporte, mientras que los privados únicamente serán visibles para los operadores',
	'resetduetime' => 'Eliminar fecha de vencimiento',
	'desc_resetduetime' => 'Si se activa, el sistema eliminará automáticamente la fecha de vencimiento del ticket cuando el estado del ticket cambie a este estado.',
	'dispatchnotification' => 'Enviar notificación al usuario',
	'desc_dispatchnotification' => 'Si se activa, el sistema enviará una notificación al usuario/creador cuando el estado de este ticket esté activo.',
	'insertstatus' => 'Insertar estado',
	'desc_insertstatus' => '',
	'invalidticketstatus' => 'Estado de ticket no válido. Por favor, asegúrese de que este registro existe en la base de datos.',
	'managestatus' => 'Estados',
	'desc_managestatus' => '',
	'wineditticketstatus' => 'Editar Estado: %s',
	'editstatus' => 'Editar Estado',
	'desc_editstatus' => '',
	'taboptions' => 'Opciones',
	'titledelticketstatus' => 'Eliminados "%d" estados de ticket',
	'msgdelticketstatus' => 'Se han eliminado correctamente los siguientes estados de ticket de la base de datos:',
	'titleticketstatusinsert' => 'Insertados "%s" estados de ticket',
	'msgticketstatusinsert' => 'Se ha insertado el estado de ticket "%s" en la base de datos.',
	'titleticketstatusupdate' => 'Actualizado "%s" estado de ticket',
	'msgticketstatusupdate' => 'Se ha actualizado correctamente el estado de ticket "%s".',
	'titlemasterstatusdelete' => 'No se ha podido eliminar el estado de ticket "%d"',
	'msgmasterstatusdelete' => SWIFT_PRODUCT . ' no ha podido eliminar el siguiente estado maestro de ticket:',
	'tablanguages' => 'Idiomas: Traducción',
	// ======= END v4 LOCALES =======
);
?>