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
	'troubleshooter' => 'Asistente',
	'categories' => 'Categorías',
	'titletrcatmismatch' => 'La categoría "%s" ya existe',
	'msgtrcatmismatch' => SWIFT_PRODUCT . ' no puede insertar la categoría "%s" porque ya existe otra categoría con el mismo nombre.',
	'categorytitle' => 'Nombre de la categoría',
	'desc_categorytitle' => 'Introduzca el nombre de la categoría',
	'wininsertcategory' => 'Insertar categoría',
	'wineditcategory' => 'Editar categoría: %s',
	'insertcategory' => 'Insertar categoría',
	'editcategory' => 'Editar categoría',

	'titletrcategoryinsert' => 'Se ha insertado la categoría de asistente "%s"',
	'msgtrcategoryinsert' => SWIFT_PRODUCT . ' ha insertado correctamente la categoría de asistente "%s".',
	'titletrcategoryupdate' => 'Se ha actualizado la categoria de asistente "%s"',
	'msgtrcategoryupdate' => SWIFT_PRODUCT . ' ha actualizado correctamente la categoría de asistente "%s".',
	
	'trcategory' => 'Categoría',
	'desc_trcategory' => '',
	'next' => 'Siguiente',

	'tabgeneral' => 'General',
	'taboptions' => 'Opciones',
	'categorytype' => 'Tipo',
	'desc_categorytype' => 'Seleccione el tipo de categoría.<br /><br /><i>Global:</i> Las categorías clasificadas como Global son visibles en el centro de soporte a usuarios y en el panel de control de operadores.<br /><br /><i>Pública:</i> Las categorías clasificadas como públicas sólo son visibles en centro de soporte a usuarios.<br /><br /><i>Privada:</i> Las categorías clasificadas como privadas sólo son visibles en el panel de control de operadores.',
	'displayorder' => 'Orden de visualización',
	'desc_displayorder' => 'Este es el orden de visualización por defecto en el que se mostrarán los elementos. La lista se ordenará de forma ascendente.',
	'tabpermissionsuser' => 'Permisos: usuario',
	'tabpermissionsstaff' => 'Permisos: operador',
	'uservisibilitycustom' => 'Restringir a grupos de usuarios concretos?',
	'desc_uservisibilitycustom' => 'Si está activado, esta categoría sólo será visible para los grupos de usuarios seleccionados.',
	'staffvisibilitycustom' => 'Restringir a equipos de operadores concretos?',
	'desc_staffvisibilitycustom' => 'Si está activado, esta categoría será visible únicamente para los equipos de operadores seleccionados.',
	'usergroups' => 'Grupos de usuarios',
	'staffteams' => 'Equipos de operadores',
	
	'tablist' => 'Lista',
	'tabtree' => 'Árbol',
	'steptitle' => 'Nombre de paso',
	'categorytitle' => 'Categoría',
	'author' => 'Autor',
	'stepstatus' => 'Estado',

	/**
	 * ---------------------------------------------
	 * INSERT TROUBLESHOOTER
	 * ---------------------------------------------
	 */
	'titletrstepinsert' => 'Insertado paso "%s"',
	'msgtrstepinsert' => SWIFT_PRODUCT . ' ha creado correctamente el paso de asistente "%s".',
	'titletrstepupdate' => 'Actualizado paso "%s"',
	'msgtrstepupdate' => SWIFT_PRODUCT . ' ha actualizado correctamente el paso "%s".',
	'insertstep' => 'Insertar paso',
	'recursionsuffix' => ' (Probable recursión)',
	'parentcategoryitem' => '- Categoría raíz -',
	'parentsteps' => 'Pasos superiores',
	'desc_parentsteps' => '',
	'tabgeneral' => 'General',
	'tabattachments' => 'Adjuntos',
	'taboptions' => 'Opciones',
	'publish' => 'Publicar',
	'published' => 'Publicado',
	'draft' => 'Borrador',
	'infobauthor' => 'AUTOR',
	'infobcreationdate' => 'CREADO EL',
	'infobeditedby' => 'EDITADO POR',
	'infobeditedon' => 'EDITADO EL',
	'ftarticletype' => 'Tipo',
	'ftcategories' => 'Categorías',
	'ftdate' => 'Fecha',
	'informationbox' => 'Información',
	'quickfilter' => 'Filtro rápido',
	'markasdraft' => 'Marcar como borrador',
	'saveasdraft' => 'Guardar como borrador',
	'addfile' => 'Añadir archivo',
	'steptitle' => 'Nombre',
	'desc_steptitle' => '',
	'parentsteps' => 'Pasos superiores',
	'desc_parentsteps' => '',
	'generalsettings' => 'Coonfiguración general',
	'allowcomments' => 'Permitir comentarios',
	'desc_allowcommentsstep' => 'Seleccione si desea activar los comentarios para este paso.',
	'noticketrediractive' => '-- Depatamento no seleccionado --',
	'ticketredirectionsettings' => 'Configuración de redirección de ticket',
	'redirecttickets' => 'Activar redirección de ticket',
	'desc_redirecttickets' => 'Si está activado, el usuario será redirigido al formulario de envío de ticket para el departamento especificado o a la lista de departamentos si no se selecciona ninguno.',
	'redirectdepartment' => 'Departamento al que se redireccionará',
	'desc_redirectdepartment' => 'Seleccione el departamento al que el usuario será redireccionado.',
	'ticketsubject' => 'Asunto de ticket personalizado',
	'desc_ticketsubject' => 'Si se especifica, el formulario de ticket se rellenará automáticamente con el asunto de ticket especificado aquí.',
	'tickettype' => 'Tipo de ticket',
	'desc_tickettype' => 'Seleccione el tipo de ticket que estará seleccionado por defecto en la página de envío de ticket. Esta opción necesita que la configuración de tipo de ticket esté activada para el grupo de plantillas.',
	'ticketpriority' => 'ID de prioridad del ticket',
	'desc_ticketpriority' => 'Seleccione la prioridad del ticket que estará seleccionada por defecto en la página de envío de ticket.',
	'nochange' => '-- Sin cambios --',
	
	/**
	 * ---------------------------------------------
	 * VIEW ALL
	 * ---------------------------------------------
	 */
	'tabviewall' => 'Asistente',
	'troubleshooterdesc' => 'Los asistentes del asistente le guiarán a través de una serie de pasos para diagnosticar y resolver problemas comunes. Comience seleccionando una categoría.',
	'trattachments' => 'Adjuntos',
	'trnextsteps' => 'Siguientes pasos',
	'trnext' => 'Siguiente &raquo;',
	'trback' => '&laquo; Volver',
	'steps' => 'Pasos',
	'trcategoryviews' => ' (%d vistas)',
);
?>