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
	'autoclose' => 'Autocierre',
	'manage' => 'Administrar',
	'targetstatus' => 'Estado objetivo',
	'tabgeneral' => 'General',

	'insertrule' => 'Insertar regla',
	'editrule' => 'Editar regla',

	'ruletitle' => 'Nombre de regla',
	'desc_ruletitle' => 'Introduzca el nombre de la regla de autocierre.',
	'targetticketstatus' => 'Estado final',
	'desc_targetticketstatus' => 'Seleccione el estado al que se cambiará el ticket cuando transcurra el plazo de cierre.',
	'inactivitythreshold' => 'Inactividad (horas)',
	'desc_inactivitythreshold' => 'Introduzca el número de horas tras las que un ticket se marcará como inactivo. Este es el primer paso hacia el autocierre y habitualmente se utiliza para avisar al usuario del próximo cierre del ticket.',
	'closurethreshold' => 'Cierre (horas)',
	'desc_closurethreshold' => 'Introduzca el número de horas tras las que un ticket <i>inactivo</i> se marcará como resuelto. Este es el paso final en el autocierre y activa el aviso final de cierre y el cambio de estado del ticket.',
	'isenabled' => 'Activado?',
	'desc_isenabled' => 'Active la ejecución de esta regla de autocierre mediante esta opción.',
	'sortorder' => 'Orden',
	'desc_sortorder' => 'Especifique el orden (ascendente) para esta regla.',
	'sendpendingnotification' => 'Enviar notificación de cierre inminente',
	'desc_sendpendingnotification' => 'Si se activa, el sistema avisará al cliente del cierre inminente del ticket. Esta notificación se activa cuando no se ha actualizado el ticket durante un número de horas establecido en el umbral de inactividad especificado antes.',
	'sendfinalnotification' => 'Enviar notificación final de cierre',
	'desc_sendfinalnotification' => 'Si se activa, el sistema avisará al cliente del cierre final del ticket. Esta notificación se activará en un ticket inactivo cuando se alcance el umbral de inactividad y después de que el estado del ticket haya cambiado al estado final.',
	'insertcriteria' => 'Insertar criterio',


	'titleautocloseruledel' => 'Eliminada(s) "%d" regla(s) de autocierre',
	'msgautocloseruledel' => 'Se ha(n) eliminado correctamente la(s) siguiente(s) regla(s) de autocierre:',
	'titleautocloseruleenable' => 'Activada(s) "%d" regla(s) de autocierre',
	'msgautocloseruleenable' => 'Se ha(n) activado correctamente la(s) siguiente(s) regla(s) de autocierre:',
	'titleautocloseruledisable' => 'Desactivada(s) "%d" regla(s) de autocierre',
	'msgautocloseruledisable' => 'Se ha(n) desactivado correctamente la(s) siguiente(s) regla(s) de autocierre:',
	'titleautocloseruleinsert' => 'Insertada regla de autocierre',
	'msgautocloseruleinsert' => 'Insertada la regla de autocierre "%s" en la base de datos.',
	'titleautocloseruleupdate' => 'Actualizada regla de autocierre',
	'msgautocloseruleupdate' => 'Actualizada la regla de autocierre "%s".',

	'titlenocriteriaadded' => 'No hay criterios disponibles',
	'msgnocriteriaadded' => 'Debe haber al menos un criterio para poder insertar/editar la regla de autocierre.',

	/**
	 * ---------------------------------------------
	 * Rule Criterias
	 * ---------------------------------------------
	 */
	'notapplicable' => '-- NA --',
	'articketstatusid' => 'Estado de ticket',
	'desc_articketstatusid' => '',
	'arpriorityid' => 'Prioridad de ticket',
	'desc_arpriorityid' => '',
	'ardepartmentid' => 'Departamento',
	'desc_ardepartmentid' => '',
	'arownerstaffid' => 'Responsable del ticket',
	'desc_arownerstaffid' => '',
	'aremailqueueid' => 'Cola de email',
	'arusergroupid' => 'Grupo de usuarios',
	'desc_arusergroupid' => '',
	'desc_aremailqueueid' => '',
	'arflagtype' => 'Tipo de marca',
	'desc_arflagtype' => '',
	'arbayescategoryid' => 'Categoría filtro bayesiano',
	'desc_arbayescategoryid' => '',
	'purpleflag' => 'Marca violeta',
	'redflag' => 'Marca roja',
	'orangeflag' => 'Marca naranja',
	'yellowflag' => 'Marca amarilla',
	'blueflag' => 'Marca azul',
	'greenflag' => 'Marca verde',
	'arcreator' => 'Creador',
	'desc_arcreator' => '',
	'creatorstaff' => 'Operador',
	'creatorclient' => 'Usuario',
	'arunassigned' => '-- Sin asignar --',
	'artemplategroupid' => 'Grupo de plantillas',
	'desc_artemplategroupid' => '',
	'artickettypeid' => 'Tipo de ticket',
	'desc_artickettypeid' => '',
);
?>