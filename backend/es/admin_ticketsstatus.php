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
	'tickets' => 'Tickets',
	'tabgeneral' => 'General',
	'tabpermissions' => 'Permissions',
	'staffvisibilitycustom' => 'Restrict Change to Custom Staff Teams?',
	'desc_staffvisibilitycustom' => 'If Enabled, a ticket can be changed to this ticket status only by the selected staff teams.',
	'staffgroups' => 'Staff Teams',
	'triggersurvey' => 'Trigger Survey Email',
	'desc_triggersurvey' => 'If Enabled, whenever a ticket is changed to this ticket status a survey email will be dispatched to the user asking for rating and comments.',
	'statustitle' => 'Status Title',
	'desc_statustitle' => 'Enter your custom Ticket Status Title',
	'statuscolor' => 'Status Color',
	'desc_statuscolor' => 'Enter the Color Code you would like to associate with this Status.',
	'statusbgcolor' => 'Status Background Color',
	'desc_statusbgcolor' => 'Enter the Background color code you would like to associate with this Status. This color is used for the "General Tab Bar" when viewing the ticket.',
	'displayorder' => 'Display Order',
	'desc_displayorder' => 'This is the default display order in which the items are displayed. The list is sorted in Ascending Order.',
	'displayiconstatus' => 'Display Icon',
	'desc_displayiconstatus' => 'Upload the icon image (png, gif, jpg) or enter the full URL of the display icon to be displayed besides this ticket status, You can use {$themepath} as a replacement variable for the full URL to the themepath directory. Recommended image size is 16x16 pixels.',
	'statusdep' => 'Status Link',
	'desc_statusdep' => 'This option allows you to link this Status to an existing Department. If a Status is linked to a Department, it will be visible only under the linked Department.',
	'statusalldep' => '-- Not Linked --',
	'markasresolved' => 'Mark as Resolved?',
	'desc_markasresolved' => 'If enabled, all Tickets under this Status will be marked as Resolved/Closed. Additionally, the tickets will not be visible under the global ticket lists. It is recommended that this option be enabled for Resolved Ticket Statuses like "Closed", "Resolved", "Fixed" etc.',
	'displayinmainlist' => 'Display in Main Ticket Listing',
	'desc_displayinmainlist' => 'If enabled, all Tickets under this Status will be displayed in the main Ticket Listing. It is recommended that this option be disabled for Resolved Ticket Statuses like "Closed", "Fixed", or "Info Required"',
	'displaycount' => 'Display Ticket Count in Tree',
	'desc_displaycount' => 'If enabled, the total Ticket count for this Status will be displayed in the Filter Tickets Tree. It is recommended that you disable this option for Statuses which are for Resolved or Fixed Tickets.',
	'statustype2' => 'Status Type',
	'desc_statustype2' => 'Select the type of Status, Public Status are visible in the Client Support Center whereas Private status types are visible to only the staff users',
	'resetduetime' => 'Clear the Due Time',
	'desc_resetduetime' => 'If Enabled, the system will automatically clear the due time for a ticket when the ticket status changes to this status.',
	'dispatchnotification' => 'Dispatch Notification to User',
	'desc_dispatchnotification' => 'If Enabled, the system will dispatch a notification to the user/creator whenever this status becomes active for a ticket.',
	'insertstatus' => 'Insert Status',
	'desc_insertstatus' => '',
	'invalidticketstatus' => 'Invalid Ticket Status. Please make sure that the record exists in the database.',
	'managestatus' => 'Statuses',
	'desc_managestatus' => '',
	'wineditticketstatus' => 'Edit Status: %s',
	'editstatus' => 'Edit Status',
	'desc_editstatus' => '',
	'taboptions' => 'Options',
	'titledelticketstatus' => 'Deleted "%d" Ticket Status(es)',
	'msgdelticketstatus' => 'Successfully deleted the following Ticket Status(es) from the database:',
	'titleticketstatusinsert' => 'Inserted "%s" Ticket Status',
	'msgticketstatusinsert' => 'Successfully inserted the "%s" Ticket Status into the database.',
	'titleticketstatusupdate' => 'Updated "%s" Ticket Status',
	'msgticketstatusupdate' => 'Successfully updated the "%s" Ticket Status.',
	'titlemasterstatusdelete' => 'Unable to Delete "%d" Ticket Status(s)',
	'msgmasterstatusdelete' => SWIFT_PRODUCT . ' is unable to delete the following master ticket status:',
	'tablanguages' => 'Languages: Translation',
	// ======= END v4 LOCALES =======
);
?>