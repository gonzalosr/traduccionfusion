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
	'dbexport' => 'Exportar XML',
	'desc_dbexport' => '',
	'tabexportxml' => 'Exportar XML',
	'export' => 'Exportar',
	'dbtables' => 'Tablas de la base de datos',
	'exportdata' => 'Exportar datos',
	'desc_exportdata' => 'Si está activado, '. SWIFT_PRODUCT .' exportará los datos y el esquema.',
	'dbdiagnostics' => 'Diagnósticos',
	'desc_dbdiagnostics' => '',
	'tabdiagnostics' => 'Diagnósticos',
	'fieldname' => 'Nombre de campo',
	'maxlength' => 'Longitud máxima',
	'fieldtype' => 'Tipo',
	'fieldprimary' => 'Clave principal',
	'fieldautoincrement' => 'Autoincremento',
	// ======= END v4 LOCALES =======

	'backup' => 'Copia de seguridad',
	'database' => 'Base de datos',
	'desc_backup' => 'Realice una copia de seguridad de la base de datos generando y descargando un archivo de volcado de MySQL. si su base de datos es grande, se recomienda que use la utilidad <b>mysqldump</b> (a través de la línea de comandos de MySQL). Puede restaurar el archivo de volcado posteriormente usando la línea de comandos de MySQL o aplicaciones de administración de base de datos de terceros como phpMyAdmin.',
	'backupoptions' => 'Opciones de copia de seguridad',
	'genbackup' => 'Generar copia de seguridad',
	'title_createtable' => 'Añadir sentencias "CREATE TABLE"',
	'desc_createtable' => 'Si activa esta opción se añadirá una sentencia SQL "CREATE TABLE nombredetabla;" antes de las sentencias INSERT. (active esta opción si desea restaurar el archivo de volcado a una base de datos vacía).',
	'title_compressdump' => 'Comprimir volcado SQL',
	'desc_compressdump' => 'Comprime el archivo de volcado usando compresión <b>gzip</b>.',
	'repairoptimize' => 'Reparar/Optimizar',
	'desc_repairoptimize' => 'Optimizar una base de datos reescribe los índices y es una tarea de procesamiento intensivo para tablas grandes.',
	'repair' => 'Reparar',
	'optimize' => 'Optimizar',
	'repairall' => 'Reparar todo',
	'optimizeall' => 'Optimizar todo',
	'tablelist' => 'Lista de tablas',
	'tablename' => 'Nombre de tabla',
	'tabletype' => 'Tipo de tabla',
	'rows' => 'Filas',
	'indexsize' => 'Tamaño de índice',
	'optimizedtable' => 'Tabla %s optimizada. Mensaje de estado de MySQL: %s',
	'repairedtable' => 'Tabla %s reparada. Mensaje de estado de MySQL: %s',
	'optimizedalltables' => '%s tablas optimizadas',
	'repairedalltables' => '%s tablas reparadas',
);

?>