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
	'tabpostindex' => 'Rebuild search index',
	'tabmoveattachments' => 'Move Attachments',
	'attachmentsperpass' => 'Number of Attachments to process per page',
	'desc_attachmentsperpass' => 'Specify the number of Attachments to process on one page. '.SWIFT_PRODUCT . ' will iterate through all the attachments one page at a time, then move over the loaded attachments. A higher number requires a more powerful server. If you receive an error during processing, try using a lower number.',
	'move' => 'Move',
	'dbtofiles' => 'Database (%d) => Files',
	'filestodb' => 'Files (%d) => Database',
	'movetype' => 'Move Attachments from',
	'desc_movetype' => 'Select the type of move to initiate for attachments. If you wish to move the attachments from files to database, it is recommend you check the max packet size setting in your database to prevent any corruption or loss of data.',
	'attachmentsprocessed' => 'Attachments Moved',
	'totalattachments' => 'Total Attachments',
	// ======= END v4 LOCALES =======
	'tickets' => 'Tickets',
	'maintenance' => 'Maintenance',
	'rebuildpindex' => 'Rebuild Post Index',
	'indexseterror' => 'Note: The default search mode is set to full text. To use the inbuilt search engine, change the <b>Search Type</b> setting under <i>Settings > Tickets</i>.',
	'rebuild' => 'Rebuild',
	'postperpass' => 'Batch size',
	'desc_postperpass' => 'Enter the number of ticket replies to process in a single batch <i>(default = 100).</i><br/><br/>Due to memory and CPU usage constraints, it is not recommended that this value be higher than one hundred (100).<br/><br/><font color="cc3300">Note: During the processing of a batch, the elapsed time counter will <i>not</i> update, but the process is still running!</font>',
	'reindexheader' => '<b>Reindex process</b>',
	'totalposts' => 'Total # of replies in database:',
	'postsprocesed' => '# of replies processed:',
	'timeelapsed' => 'Elapsed time:',
	'timeremaining' => 'Time remaining (estimated):',
);
?>