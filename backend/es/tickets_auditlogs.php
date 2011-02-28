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
	// Activity Log
	'log_newreply' => 'Replied to Ticket: #%s',
	'log_forward' => 'Forwarded Ticket #%s to: %s',
	'log_newticket' => 'Created Ticket #%s: %s',

	// Audit Log
	'al_newticket' => 'New ticket created by %s (%s), Subject: %s', // DONE
	'al_newreply' => 'New reply created by %s (%s)', // DONE
	'al_watch' => 'Ticket Watch Activated: #%s by: %s', // DONE
	'al_owner' => 'Ticket owner changed from: %s to: %s', // DONE
	'al_priority' => 'Ticket priority changed from: %s to: %s', // DONE
	'al_status' => 'Ticket status changed from: %s to: %s', // DONE
	'al_type' => 'Ticket type changed from: %s to: %s', // DONE
	'al_department' => 'Ticket department changed from: %s to: %s', // DONE
	'al_due' => 'Setting due time to: %s', // DONE
	'al_resolutiondue' => 'Setting resolution due time to: %s', // DONE
	'al_sla' => 'SLA plan set to: %s', // DONE
	'al_slaclear' => 'SLA plan associated deleted', // DONE
	'al_flag' => 'Ticket flagged to: %s', // DONE
	'al_flagclear' => 'Ticket flag cleared', // DONE
	'al_duestaffoverdue' => 'Ticket marked as overdue', // DONE
	'al_duestaffclear' => 'Ticket due time cleared', // DONE
	'al_resduestaffclear' => 'Ticket resolution due time cleared', // DONE
	'al_ban' => 'Ticket Creator Banned. Ticket ID: #%s, Email: %s', // DONE
	'al_merge' => 'Ticket merged. Ticket ID: #%s, Subject: %s, Full Name: %s, Email: %s', // DONE
	'al_untrashticket' => 'Ticket moved back from trash. Ticket ID: #%s, Subject: %s, Full Name: %s, Email: %s', // DONE
	'al_deleteticket' => 'Deleted ticket. Ticket ID: #%s, Subject: %s, Full Name: %s, Email: %s', // DONE
	'al_trashticket' => 'Ticket moved to trash. Ticket ID: #%s, Subject: %s, Full Name: %s, Email: %s', // DONE
	'al_updateticketpost' => 'Ticket post updated. Creator: %s (%s)', // DONE
	'al_deleteticketpost' => 'Ticket post deleted. Creator: %s (%s)', // DONE
	'al_ticketnote' => 'Ticket note added to ticket', // DONE
	'al_usernote' => 'User note added to ticket', // DONE
	'al_deletenote' => 'Ticket note deleted', // DONE
	'al_updatenote' => 'Ticket note updated', // DONE
	'al_delbilling' => 'Ticket billing entry deleted', // DONE
	'al_ticketbilling' => 'Ticket billing entry added to ticket', // DONE
	'al_updticketbilling' => 'Updated ticket billing entry', // DONE
	'al_delfollowup' => 'Ticket Follow-Up Entry Deleted', // DONE
	'al_createfollowup' => 'Created Ticket Follow-Up', // DONE
	'al_updateproperties' => 'Updated Ticket Properties. Subject: %s > %s, Full Name: %s > %s, Email: %s > %s',

	'al_newforward' => 'New forward message created by %s (%s)',
	'al_escalated' => 'Ticket escalated under rule: %s',
	'al_print' => 'Ticket printed by: %s',
	'al_cleardraft' => 'Ticket draft cleared by: %s',
	'al_savedraft' => 'Ticket draft saved by: %s',
	'al_forward' => 'Ticket forwarded to: %s by: %s',
	'al_recipientdel' => 'Ticket recipient: %s deleted by: %s',
	'al_timetrackdel' => 'Time tracking entry #%s deleted by: %s',
	'al_timetrack' => 'Time tracking entry added for: %s by: %s (Worked: %s Billable: %s)',
	'al_prule' => 'Processed under parser rule: %s',
	'al_statusac' => 'AUTO CLOSE: Ticket status changed from: %s to: %s',
	'al_xmlexport' => 'Ticket exported as XML by: %s',
	'al_pdfexport' => 'Ticket exported as PDF by: %s',
);
?>