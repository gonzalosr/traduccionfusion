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
	'mpsettings' => 'Settings',
	'desc_mpsettings' => '',
	'tabsettings' => 'Settings',
	'insertcatchallrule' => 'Insert Catch-All Rule',
	'titlenqcatchall' => 'No Email Queues Available',
	'msgnqcatchall' => 'You cannot add a Catch-All rule till there is atleast one available email queue.',
	'wineditcatchall' => 'Edit Catch-All Rule',
	'titledelcatchall' => 'Deleted "%d" Catch-All Rule(s)',
	'msgdelcatchall' => 'Successfully deleted the following Catch-All Rule(s) from the database:<br>',
	'titleupdatecatchall' => 'Updated Catch-All Rule',
	'msgupdatecatchall' => 'Successfully updated the "%s" Catch-All Rule.',
	'titleinsertcatchall' => 'Inserted Catch-All Rule',
	'msginsertcatchall' => 'Successfully inserted the "%s" Catch-All rule into the database.',
	'titleinsertban' => 'Inserted Parser Ban',
	'msginsertban' => 'Successfully inserted parser ban for email "%s" into the database.',
	'titleupdateban' => 'Updated Parser Ban',
	'msgupdateban' => 'Successfully updated the parser ban for email "%s".',
	'wineditban' => 'Edit Parser Ban',
	'titledelbans' => 'Deleted "%d" Parser Ban(s)',
	'msgdelbans' => 'Successfully deleted the following banned emails from the database:',
	// ======= END v4 LOCALES =======

	// ======= BEGIN v3 IMPORT =======
	'invalidemailaddress' => 'Invalid email address specified',
	// ======= END v3 IMPORT =======

	'mailparser' => 'Mail Parser',

	// Email Bans
	'emailbans' => 'Email Bans',
	'emailbanlist' => 'Email Ban List',
	'bannedemail' => 'Email Address',
	'bannedby' => 'Banned By',
	'insertban' => 'Insert Ban',
	'insertnewban' => 'Insert New Ban',
	'desc_bannedemail' => 'Enter the email address to be banned. Any incoming email messages from this address will be rejected without notice. To ban a complete domain name, please enter the email as "@domain.com".',
	'parserbaninsertconfirm' => 'Email ban "%s" inserted successfully',
	'parserbansdelconfirm' => 'Email ban(s) deleted successfully',
	'invalidemailban' => 'Invalid parser ban ID specified',
	'editban' => 'Edit Ban',
	'bandelconfirmmsg' => 'Are you sure you wish to delete this email ban entry?  This action is irreversible!',
	'parserbanupdconfirm' => 'Email ban "%s" updated successfully',
	'desc_mailbans' => 'You can prevent problem users from submitting tickets by adding an email ban for their address.  Whenever ' . SWIFT_PRODUCT . ' receives an email message, it will check the author\'s address against the ban list, and if the address is banned, the message will be ignored without notice.',

	// Catch-All Rules
	'catchallrules' => 'Catch-All Rules',
	'desc_catchallrules' => 'Catch-all rules use regular expressions to match patterns in the addresses of incoming email messages.  The messages can then be routed to whichever email queue you wish. For more information on regular expressions, <a href="http://www.php.net/preg_match" target="_blank" id="red">click here.</a>',
	'insertrule' => 'Insert Rule',
	'insertnewrule' => 'Insert New Rule',
	'editrule' => 'Edit Rule',
	'rregexp' => 'Regular Expression',
	'desc_rregexp' => 'Enter the regular expression to match the sender\'s email address against. Examples:<HR /><b>/^(.*)(\@yourdomain\.com)$/i</b> - Matches any email address that has a domain of "yourdomain.com"<BR /><BR /><b>/^(support\@)(.*)$/i</b> - Matches support@anydomain.com; where anydomain.com can be any specific value',
	'sortorder' => 'Execution Order',
	'desc_sortorder' => 'The mail parser will execute catch-all rules according to this value. (e.g. <i>rule "1" will be executed before "2" etc.</i>)',
	'emailqueue' => 'Destination Email Queue',
	'desc_emailqueue' => 'Incoming emails that are trapped by this catch-all rule will be forwarded to the email queue specified here.',
	'ruletitle' => 'Rule Title',
	'desc_ruletitle' => 'Enter a title for this catch-all rule.',
	'noemailqueueadd' => '-- No Email Queue Added --',
	'errnoqueue' => 'ERROR: You do not have any email queues in the database. You need to have at least one email queue to utilize catch-all rules.',
	'catchruleinsertconfirm' => 'Catch-all rule "%s" inserted successfully',
	'catchruleupdconfirm' => 'Catch-all rule "%s" updated successfully',
	'catchallruledelconfirm' => 'Catch-all rule(s) deleted successfully',
	'invalidcatchalrule' => 'Invalid catch all rule specified',
	'editcatchallrule' => 'Edit Catch-All Rule',
	'cruledelconfirmmsg' => 'Are you sure you wish to delete this catch-all rule?  This action is irreversible!',
);
?>