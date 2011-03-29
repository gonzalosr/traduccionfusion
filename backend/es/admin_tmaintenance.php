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
	'tabpostindex' => 'Reconstruir índice de búsqueda',
	'tabmoveattachments' => 'Trasladar adjuntos',
	'attachmentsperpass' => 'Número de adjuntos a procesar por página',
	'desc_attachmentsperpass' => 'Especifique el número de adjuntos que se procesarán en cada página. '.SWIFT_PRODUCT . ' iterará por todos los adjuntos página a página, y trasladará los adjuntos cargados. Un número mayor requerirá un servidor más potente. Si recibe un error durante el procesamiento, intente usar un número menor.',
	'move' => 'Trasladar',
	'dbtofiles' => 'Base de datos (%d) => Archivos',
	'filestodb' => 'Archivos (%d) => Base de datos',
	'movetype' => 'Trasladar adjuntos desde',
	'desc_movetype' => 'Seleccione el tipo de traslado de adjuntos. Si desea trasladar los adjuntos de ficheros a la base de datos, se recomienda que revise la configuración de "max packet size" en la base de datos, para evitar corrupción o pérdida de datos.',
	'attachmentsprocessed' => 'Adjuntos trasladados',
	'totalattachments' => 'Adjuntos totales',
	// ======= END v4 LOCALES =======
	'tickets' => 'Tickets',
	'maintenance' => 'Mantenimiento',
	'rebuildpindex' => 'Reconstruir índice de mensajes',
	'indexseterror' => 'Nota: el método de búsqueda por defecto es "texto completo". Para usar el motor de búsqueda incorporado, cambie el <b>Tipo de búsqueda</b> en <i>Configuración > Tickets</i>.',
	'rebuild' => 'Reconstruir',
	'postperpass' => 'Tamaño de pasada',
	'desc_postperpass' => 'Introduzca el número de respuestas de ticket que se procesarán en una sola pasada <i>(defecto = 100).</i><br/><br/>Debido a restricciones de memoria y procesador, no se recomienda que este valor sea superior a (100).<br/><br/><font color="cc3300">Nota: Durante el proceso de una pasada, el reloj <i>no</i> se actualizará, pero el proceso seguirá ejecutándose!</font>',
	'reindexheader' => '<b>Proceso de reindexado</b>',
	'totalposts' => 'Total de respuestas en la base de datos:',
	'postsprocesed' => 'Número de respuestas procesadas:',
	'timeelapsed' => 'Tiempo transcurrido:',
	'timeremaining' => 'Tiempo restante estimado:',
);
?>