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
	'benchmarks' => 'Puntuaciones',
	'tabgeneral' => 'General',
	'tabpermissionsstaff' => 'Permisos (Operador)',
	'tabpermissionsuser' => 'Permisos (Usuario)',
	'staffgroups' => 'Equipos de operadores',
	'usergroups' => 'Grupos de usuarios',
	'benchmarkticket' => 'Ticket',
	'benchmarkticketpost' => 'Publicación de tickets',
	'benchmarkchatsurvey' => 'Encuesta de chat',
	'benchmarkchathistory' => 'Historial de chat',
	'benchmarkknowledgebase' => 'Base de conocimiento',
	'benchmarkdownloads' => 'Descargas',
	'benchmarktroubleshooter' => 'Solucionador',
	'benchmarknews' => 'Noticias',

	'staffvisibilitycustom' => 'Restringir modificación de puntuación a determinados equipos de operadores?',
	'desc_staffvisibilitycustom' => 'Active esta opción si desea controlar qué equipos de operadores (seleccionados más abajo) pueden <strong>modificar</strong> esta puntuación.',

	'buservisibilitycustom' => 'Restringir puntuación a determinados grupos de usuarios?',
	'desc_buservisibilitycustom' => 'Active esta opción si desea controlar qué grupos de usuarios (seleccionados abajo) pueden <strong>ver y modificar</strong> esta puntuación.',

	'bstaffvisibilitycustom' => 'Restringir puntuación a determinados equipos de operadores?',
	'desc_bstaffvisibilitycustom' => 'Active esta opción si desea controlar qué equipos de operadores (seleccionados abajo) pueden <strong>ver</strong> esta puntuación.',

	'isclientonly' => 'Impedir que los operadores establezcan o editen la puntuación?',
	'desc_isclientonly' => 'Si está activado, sólo los usuarios podrán establecer o editar esta puntuación. Los operadores no podrán modificarla.',

	'benchmarkscale' => 'Rating scale',
	'desc_benchmarkscale' => 'Select the maximum rating that can be given (this number translates to <em>stars</em>).',

	'benchmarktype' => 'Rating type',
	'desc_benchmarktype' => 'Select the area of your helpdesk for which this rating will apply. <br /><br /><strong>Ticket:</strong> Offer ratings for an overall ticket<br /><strong>Ticket post:</strong> Offer ratings for individual ticket replies<br /><strong>Post-chat survey:</strong> Offer ratings for a chat as part of the post-chat survey<br /><strong>Chat history record:</strong> Offer ratings for chat histories in the staff control panel (intended for internal rating and auditing)',

	'benchmarktitle' => 'Rating title',
	'desc_benchmarktitle' => 'For example, <em>"Overall satisfaction"</em> or <em>"Promptness of reply"</em>.',

	'displayorder' => 'Display Order',
	'desc_displayorder' => 'This is the default display order in which the items are displayed. The list is sorted in Ascending Order.',

	'benchmarkdep' => 'Restrict rating to a department',
	'desc_benchmarkdep' => 'If you would like to restrict this rating to a particular department, select one here.',
	'benchmarkalldep' => '-- All departments --',

	'iseditable' => 'Can be modified after submission?',
	'desc_iseditable' => 'Can this rating be modified after a rating has been submitted?',

	'benchmarkvisibility' => 'Who can rate?',
	'desc_benchmarkvisibility' => '<strong>Public</strong> ratings are available to both your users and staff users. Select this to solicit feedback from your users. <strong>Private</strong> ratings are available only to your staff users, for internal rating and auditing.',

	'benchmarkvis' => 'Visibility',
	'insertbenchmark' => 'Insert Rating',
	'desc_insertbenchmark' => '',
	'managebenchmarks' => 'Manage',
	'desc_managebenchmarks' => '',
	'wineditbenchmark' => 'Edit rating: %s',
	'editbenchmark' => 'Edit rating',
	'desc_editbenchmark' => '',
	'titledelbenchmark' => 'Deleted "%d" rating(s)',
	'msgdelbenchmark' => 'Successfully deleted the following rating(s) from the database:',
	'titlebenchmarkinsert' => 'Inserted rating',
	'msgbenchmarkinsert' => 'Successfully inserted the "%s" rating into the database.',
	'titlebenchmarkupdate' => 'Updated Benchmark',
	'msgbenchmarkupdate' => 'Successfully updated the "%s" rating.',
	// ======= END v4 LOCALES =======
);
?>