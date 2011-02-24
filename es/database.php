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
	'dbexport' => 'Export XML',
	'desc_dbexport' => '',
	'tabexportxml' => 'Export XML',
	'export' => 'Export',
	'dbtables' => 'Database Tables',
	'exportdata' => 'Export Data',
	'desc_exportdata' => 'If Enabled, '. SWIFT_PRODUCT .' will export table data along with the schema.',
	'dbdiagnostics' => 'Diagnostics',
	'desc_dbdiagnostics' => '',
	'tabdiagnostics' => 'Diagnostics',
	'fieldname' => 'Field Name',
	'maxlength' => 'Max Length',
	'fieldtype' => 'Type',
	'fieldprimary' => 'Primary Key',
	'fieldautoincrement' => 'Auto Increment',
	// ======= END v4 LOCALES =======

	'backup' => 'Backup',
	'database' => 'Database',
	'desc_backup' => 'Back up the database by generating and downloading a MySQL dump file. If your database is large, it is recommended that you use the <b>mysqldump</b> utility (via the MySQL command line interface). You can restore the dump file at a later time here using the MySQL CLI or third party database management applications such as phpMyAdmin.',
	'backupoptions' => 'Backup Options',
	'genbackup' => 'Generate Backup',
	'title_createtable' => 'Add "CREATE TABLE" SQL statements',
	'desc_createtable' => 'Enabling this option will add a "CREATE TABLE tablename;" SQL statement before the insert statements (enable this if you plan to restore the dump file to an empty database).',
	'title_compressdump' => 'Compress SQL Dump',
	'desc_compressdump' => 'Compresses the dump file using <b>gzip</b> compression.',
	'repairoptimize' => 'Repair/Optimize',
	'desc_repairoptimize' => 'Optimizing a database results in the rewriting of indices and is a resource intensive process for large tables.',
	'repair' => 'Repair',
	'optimize' => 'Optimize',
	'repairall' => 'Repair All',
	'optimizeall' => 'Optimize All',
	'tablelist' => 'Table List',
	'tablename' => 'Table Name',
	'tabletype' => 'Table Type',
	'rows' => 'Rows',
	'indexsize' => 'Index Size',
	'optimizedtable' => 'Optimized table %s. MySQL status message: %s',
	'repairedtable' => 'Repaired table %s. MySQL status message: %s',
	'optimizedalltables' => 'Optimized %s tables',
	'repairedalltables' => 'Repaired %s tables',
);

?>