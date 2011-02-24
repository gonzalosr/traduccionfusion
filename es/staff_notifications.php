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
	'notifications' => 'Notifications',
	'manage' => 'Manage',
	'ruletitle' => 'Rule Title',
	'desc_ruletitle' => 'Enter the Notification Rule Title',
	'isenabled' => 'Is Enabled',
	'desc_isenabled' => 'Toggle the execution of this Notification rule by enabling/disabling this option.',
	'ruletype' => 'Type',
	'desc_ruletype' => '',
	'next' => 'Next',
	'creator' => 'Creator',
	'wininsertnotification' => 'Insert Notification',

	'unassigned' => '-- Unassigned --',

	'tabgeneral' => 'General',
	'tabactions' => 'Actions',
	'insertcriteria' => 'Insert Criteria',

	'na_email' => 'Email',
	'na_sms' => 'SMS',
	'na_pool' => 'Desktop Application',
	'na_staff' => 'Staff',
	'na_staffgroup' => 'Staff Team',
	'na_department' => 'Department',
	'nactionemaildispatch' => 'Active Ticket Owner',
	'desc_nactionemaildispatch' => '',
	'nadispatchemail' => 'Dispatch Email (Custom)',
	'desc_nadispatchemail' => '',
	'nadispatchemailstaff' => 'Dispatch Email (Staff)',
	'desc_nadispatchemailstaff' => '',
	'nactionpooldispatch' => 'Active Ticket Owner',
	'desc_nactionpooldispatch' => '',
	'nactionpoolcustomdispatch' => 'Staff',
	'desc_nactionpoolcustomdispatch' => '',
	'notificationruledesc' => 'Select a notification rule type from the available options below.',
	'titlenocriteria' => 'No Criteria Specified',
	'msgnocriteria' => 'Unable to create/update the notification rule as no criteria was specified.',
	'titlenotificationinsert' => 'Inserted Notification Rule "%s"',
	'msgnotificationinsert' => SWIFT_PRODUCT . ' has successfully inserted the notification rule "%s".',
	'titlenotificationupdate' => 'Updated Notification Rule "%s"',
	'msgnotificationupdate' => SWIFT_PRODUCT . ' has successfully updated the notification rule "%s".',
	'tabnotifyapp' => 'Notify App',
	'tabemail' => 'Email',
	'titleenablenotification' => 'Enabled "%d" Notification Rule(s)',
	'msgenablenotification' => SWIFT_PRODUCT . ' has successfully enabled the following notification rule(s):<br/>%s',
	'titledisablenotification' => 'Disabled "%d" Notification Rule(s)',
	'msgdisablenotification' => SWIFT_PRODUCT . ' has successfully disabled the following notification rule(s):<br/>%s',
	
	'emailprefix' => 'Subject Prefix',
	'desc_emailprefix' => 'You can specify a custom subject prefix to easily identify the alert emails for this notification rule.',

	/**
	 * ---------------------------------------------
	 * RULE TYPES
	 * ---------------------------------------------
	 */
	'nrule_chat' => 'Chat',
	'nrule_message' => 'Offline Message',
	'nrule_survey' => 'Chat Survey',
	'nrule_ticket' => 'Ticket',
	'nrule_user' => 'User',

	/**
	 * ---------------------------------------------
	 * RULE CRITERIA: TICKETS
	 * ---------------------------------------------
	 */

	'ntickettype' => 'Ticket Type',
	'desc_ntickettype' => '',
	'nbayesian' => 'Bayesian Category',
	'desc_nbayesian' => '',
	'notapplicable' => '-- Not Available --',
	'nticketstatus' => 'Ticket Status',
	'desc_nticketstatus' => '',
	'nticketpriority' => 'Ticket Priority',
	'desc_nticketpriority' => '',
	'nusergroup' => 'User Group',
	'desc_nusergroup' => '',
	'ndepartment' => 'Department',
	'desc_ndepartment' => '',
	'nowner' => 'Owner',
	'desc_nowner' => '',
	'nunassigned' => '-- Unassigned --',
	'nactivestaff' => '-- Active Staff --',
	'nemailqueue' => 'Email Queue',
	'desc_nemailqueue' => '',
	'nflagtype' => 'Flag Type',
	'desc_nflagtype' => '',
	'purpleflag' => 'Purple Flag',
	'orangeflag' => 'Orange Flag',
	'greenflag' => 'Green Flag',
	'yellowflag' => 'Yellow Flag',
	'redflag' => 'Red Flag',
	'blueflag' => 'Blue Flag',
	'ncreator' => 'Ticket Creator',
	'desc_ncreator' => '',
	'creatorstaff' => 'Staff',
	'creatorclient' => 'Client',
	'nslaplan' => 'SLA Plan',
	'desc_nslaplan' => '',
	'ndaterange' => 'Creation Date <range>',
	'desc_ndaterange' => '',
	'nlastactivityrange' => 'Last Post Activity <range>',
	'desc_nlastactivityrange' => '',
	'nlaststaffreplyrange' => 'Last Staff Reply <range>',
	'desc_nlaststaffreplyrange' => '',
	'nlastuserreplyrange' => 'Last User Reply <range>',
	'desc_nlastuserreplyrange' => '',
	'nduerange' => 'Due Timeline <range>',
	'desc_nduerange' => '',
	'nisoverdue' => 'Is Overdue?',
	'desc_nisoverdue' => '',
	'nresolutionduerange' => 'Resolution Due Timeline <range>',
	'desc_nresolutionduerange' => '',
	'nisresolutionoverdue' => 'Is Resolution Overdue?',
	'desc_nisresolutionoverdue' => '',
	'ntemplategroup' => 'Template Group',
	'desc_ntemplategroup' => '',
	'ntimeworked' => 'Time Worked (In Minutes)',
	'desc_ntimeworked' => '',
	'ntotalreplies' => 'Total Replies',
	'desc_ntotalreplies' => '',
	'npendingfollowups' => 'Pending Follow-Ups',
	'desc_npendingfollowups' => '',
	'nipaddress' => 'IP Address',
	'desc_nipaddress' => '',
	'nisemailed' => 'Is Emailed',
	'desc_nisemailed' => '',
	'nisedited' => 'Is Edited',
	'desc_nisedited' => '',
	'nhasnotes' => 'Has Notes',
	'desc_nhasnotes' => '',
	'nhasattachments' => 'Has Attachments',
	'desc_nhasattachments' => '',
	'nisescalated' => 'Is Escalated',
	'desc_nisescalated' => '',
	'nhasdraft' => 'Has Draft',
	'desc_nhasdraft' => '',
	'nhasbilling' => 'Has Billing',
	'desc_nhasbilling' => '',
	'nisphonecall' => 'Is Phone Ticket',
	'desc_nisphonecall' => '',
	'nislabeled' => 'Is Labeled',
	'desc_nislabeled' => '',

	'nticketevent' => 'Event',
	'desc_nticketevent' => '',
	'tevent_newticket' => 'New Ticket',
	'tevent_newticketnotes' => 'New Ticket Note',
	'tevent_newclientreply' => 'New Client Reply',
	'tevent_newclientsurvey' => 'New Client Survey',
	'tevent_newstaffreply' => 'New Staff Reply',
	'tevent_ticketassigned' => 'Ticket Assigned',
	'tevent_newuser' => 'New User Registration',

	'nuserevent' => 'Event',
	'desc_nuserevent' => '',

	
);
?>