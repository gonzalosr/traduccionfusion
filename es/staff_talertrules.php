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
	'alertmailsubject' => '%s - [%s!%s]: %s',
	'managealerts' => 'Manage Alerts',
	'insertrule' => 'Insert Rule',
	'insertalert' => 'Insert Alert',
	'ardelfailed' => ' One or more alerts could not be removed.',

	// Manage Alert Rules
	'ruletitle' => 'Alert Title',
	'desc_ruletitle' => 'Enter a title for the alert.',
	'alerttype' => 'Alert Type',
	'desc_alerttype' => 'Select the type for the alert.<BR><BR><i>Email:</i> The alert will be sent to staff users via e-mail.<BR /><i>SMS:</i> The alert will be sent to staff users via Short Message Service on their mobile phone. For more information on SMS, please refer to the SMS gateway section of the user manual.',
	'alertscope' => 'Alert Scope',
	'desc_alertscope' => 'Select the scope of the alert.  If the alert is <i>"Public,"</i> it will be sent to all staff users. If it is <i>"Private,"</i> it will only be sent to the staff user who created it.',
	'alertrules' => 'Alert Rules',
	'alertactions' => 'Alert Events',
	'desc_alertactions' => 'Select the events that will cause this alert to be sent.',

	// Insert Rule
	'sms' => 'SMS',
	'alertoptions' => 'Alert Options',
	'execassign' => 'Run Only For Assigned Tickets',
	'desc_execassign' => 'If enabled, the alert will only be sent for tickets assigned to you.',
	'ralldepartments'=> '-- All Departments --',
	'rdepartment' => 'Filter By Department',
	'desc_rdepartment' => 'If a department is selected here, the alert will only be sent for tickets within that department.  Otherwise, all departments will be used.',
	'rallticketstatus' => '-- All Ticket Statuses --',
	'rticketstatus' => 'Filter By Ticket Status',
	'desc_rticketstatus' => 'If a ticket status is selected here, the alert will only be sent for tickets with that status. Otherwise, all statuses will be used.',
	'rallticketpriorities' => '-- All Ticket Priorities --',
	'rticketpriority' => 'Filter By Ticket Priority',
	'desc_rticketpriority' => 'If a ticket priority is selected here, the alert will only be sent for tickets with that priority. Otherwise, all priorities will be used.  <i>For example, you may wish to only be alerted via SMS for the Critical priority.</i>',
	'actioncnterror' => 'ERROR: You need to select at least one event for which the rule will be executed.',
	'arinsertconfirm' => 'Alert rule "%s" inserted successfully',
	'ardelconfirmmsg' => 'Are you sure you wish to delete this alert rule?',
	'ardelconfirm' => ' Alert rule deleted successfully',
	'invalidar' => 'ERROR: Invalid alert rule specified. Make sure the rule exists.',
	'areditconfirm' => 'Alert rule "%s" updated successfully',
	'alertoptions' => 'Alert Options',
	'deleterule' => 'Delete Rule',

	// Alerts
	'alert_newticket' => 'New Ticket',
	'alert_newreply' => 'New Client Reply',
	'alert_move' => 'Ticket Move',
	'alert_flag' => 'Ticket Flagged',
	'alert_note' => 'New Note',
	'alert_status' => 'Status Change',
	'alert_edit' => 'Ticket Edited',
	'alert_priority' => 'Priority Change',
	'alert_assign' => 'Ticket Assigned',
	'alert_merge' => 'Ticket Merged',
	'alert_deletepost' => 'Post Deleted',
	'alert_deleteticket' => 'Ticket Deleted',
	'alert_newstaffreply' => 'New Staff Reply',

	// Alert Template Text
	'aflagalert' => 'Ticket Flag Alert',
	'aticketid' => 'Ticket ID',
	'aflag' => 'Flag',
	'aflagby' => 'Flagged By',
	'anewticket' => 'New Ticket',
	'anewreply' => 'New Client Reply',
	'anewstaffreply' => 'New Staff Reply',
	'ticketdetails' => 'Ticket Details',
	'articketid' => 'Ticket ID: ',
	'ardepartment' => 'Department: ',
	'arpriority' => 'Priority: ',
	'arstatus' => 'Status: ',
	'aticketnote' => 'Ticket Note',
	'ausernote' => 'User Note',
	'aticketstatus' => 'Ticket Status',
	'aoldstatus' => 'Old Status: ',
	'anewstatus' => 'New Status: ',
	'aticketmoved' => 'Ticket Moved',
	'aolddepartment' => 'Old Department: ',
	'anewdepartment' => 'New Department: ',
	'aticketpriority' => 'Ticket Priority',
	'anewpriority' => 'New Priority: ',
	'aoldpriority' => 'Old Priority: ',
	'aticketassigned' => 'Ticket Assigned',
	'aassignedby' => 'Assigned By: ',
	'aprevowner' => 'Previous Owner: ',
	'aunassigned' => '- Unassigned -',
	'aticketpostdel' => 'Ticket Post Delete',
);
?>