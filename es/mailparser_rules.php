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
	'smatchtype' => 'Match Type',
	'matchtype' => 'Criteria Options',
	'desc_matchtype' => 'Select the grouping method for the criteria fields.',
	'smatchall' => 'Match <b>All</b> Criteria (AND)',
	'smatchany' => 'Match <b>Any</b> Criteria (OR)',
	'isenabled' => 'Is Enabled?',
	'desc_isenabled' => 'Toggle the execution of this rule by enabling/disabling this option.',
	'insertcriteria' => 'Insert Criteria',
	'tabactions' => 'Actions',
	'titlenoaction' => 'No Action Selected',
	'msgnoaction' => 'You need to select atleast one action to execute if the criteria for this rule matches.',
	'if' => 'If',
	'titleinsertrule' => 'Inserted Parser Rule "%s"',
	'msginsertrule' => 'Successfully inserted parser rule "%s" into the database.',
	'titleupdaterule' => 'Updated Parser Rule "%s"',
	'msgupdaterule' => 'Successfully updated parser rule "%s".',
	'titledelprules' => 'Deleted "%s" Parser Rule(s)',
	'msgdelprules' => 'Successfully deleted the following parser rule(s).',
	'titleenableprules' => 'Enabled "%d" Parser Rule(s)',
	'msgenableprules' => SWIFT_PRODUCT . ' has successfully enabled the following parser rule(s):',
	'titledisableprules' => 'Disabled "%d" Parser Rule(s)',
	'msgdisableprules' => SWIFT_PRODUCT . ' has successfully disabled the following parser rule(s):',
	// ======= END v4 LOCALES =======

	'mailparser' => 'Mail Parser',

	'desc_parserrules' => '',

	// Operators
	'opcontains' => 'Contains',
	'opnotcontains' => 'Doesn\'t Contain',
	'opequal' => 'Equal',
	'opnotequal' => 'Not Equal',
	'opgreater' => 'Greater Than',
	'opless' => 'Less Than',
	'opregexp' => 'Regular Expression',
	'strue' => 'True',
	'sfalse' => 'False',

	// Criterias
	'psendername' => 'Sender Name',
	'desc_psendername' => 'The sender name is parsed from the "From:" header of the email message. Example: <i>From: <span class="tabletitle">Sender Name</span> <senderemail@domain.com></i>',

	'psenderemail' => 'Sender Email Address',
	'desc_psenderemail' => 'The sender email address is parsed from the "From:" header of the email message. Example: <i>From: <span class="tabletitle">Sender Name</span> <senderemail@domain.com></i>',

	'pdestinationname' => 'Destination Name',
	'desc_pdestinationname' => 'The destination name is parsed from the "To:" header of the email. The destination name is usually the name of the staff user that has replied to the ticket (unless configured otherwise). Example: <i>To: <span class="tabletitle">Destination Name</span> <destinationemail@domain.com></i>',

	'pdestinationemail' => 'Destination Email Address',
	'desc_pdestinationemail' => 'The destination email address is parsed from the "To:" header of the email message. The destination name is usually the address belonging to the email queue that the reply is being sent from (unless configured otherwise). Example: <i>To: <span class="tabletitle">Destination Name</span> <destinationemail@domain.com></i>',

	'preplytoname' => 'Reply-To Name',
	'desc_preplytoname' => 'The reply-to name is parsed from the "Reply-To:" header of the email message. Example: <i>Reply-To: <span class="tabletitle">Reply-To Name</span> <replytoemail@domain.com></i>',

	'preplytoemail' => 'Reply-To Email Address',
	'desc_preplytoemail' => 'The reply-to email address is parsed from the "Reply-To:" header of the email message. Example: <i>Reply-To: <span class="tabletitle">Reply-To Name</span> <replytoemail@domain.com></i>',

	'psubject' => 'Subject',
	'desc_psubject' => 'Matches the email subject.',

	'precipients' => 'Recipients',
	'desc_precipients' => 'Matches the email recipients. There can be multiple recipients to which the incoming email was sent. This rule also searches the recipients listed under the "To:" and "CC:" headers of the email message.',

	'pbody' => 'Body',
	'desc_pbody' => 'Matches the remaining contents of the email body after HTML (unless configured otherwise) and breaklines have been stripped out.',

	'pbodysize' => 'Body Size',
	'desc_pdbodysize' => 'The total size of the body content of the email in bytes.',

	'ptextbody' => 'Plain-text Body',
	'desc_ptextbody' => 'An email can have two content types; <i>plain-text</i>, <i>HTML</i> or <i>both</i>. This rule searches the <i>plain-text</i> version of the body only. Note that not all emails are sent in <b>both formats</b>.',

	'phtmlbody' => 'HTML Body',
	'desc_phtmlbody' => 'An email can have two content types; <i>plain-text</i>, <i>HTML</i> or <i>both</i>. This rule searches the <i>plain-text</i> version of the body only. Note that not all emails are sent in <b>both formats</b>.',

	'ptextbodysize' => 'Text Body Size',
	'desc_ptextbodysize' => 'An email can have two content types; <i>plain-text</i>, <i>HTML</i> or <i>both</i>. This rule matches the total size of the <i>plain-text</i> body content of the email in bytes.',

	'phtmlbodysize' => 'HTML Body Size',
	'desc_phtmlbodysize' => 'An email can have two content types; <i>plain-text</i>, <i>HTML</i> or <i>both</i>. This rule matches the total size of the <i>HTML</i> body content of the email in bytes.',

	'pattachmentname' => 'Attachment Name',
	'desc_pattachmentname' => 'Matches attachment names of <i>accepted</i> attachments. Accepted attachment types are defined in the administrator control panel under <i>Mail Parser</i>.',

	'pattachmentsize' => 'Attachment Size',
	'desc_pattachmentsize' => 'Matches the size (in bytes) of any <i>accepted</i> attachments in the incoming email. Accepted attachment types are defined in the administrator control panel under <i>Mail Parser</i>.',

	'ptotalattachmentsize' => 'Total Attachment Size',
	'desc_ptotalattachmentsize' => 'Matches the <b>total</b> size (in bytes) of any <i>accepted</i> attachments in the incoming email. Accepted attachment types are defined in the administrator control panel under <i>Mail Parser</i>.',

	'pisreply' => 'Is Reply',
	'desc_pisreply' => 'If the incoming email is flagged as a reply to an <b>existing ticket</b>, this rule will match (return true).',

	'pisthirdparty' => 'Is Third Party',
	'desc_pisthirdparty' => 'If the incoming email is flagged as a reply to an <b>existing ticket</b> from an address that has been added as a third-party recipient, this rule will match (return true).',

	'pfloodprotection' => 'Flood Protection Triggered',
	'desc_pfloodprotection' => 'This Criteria is set to True if the flood protection is triggered on the incoming Email.',

	'pisstaffreply' => 'Is Staff Reply',
	'desc_pisstaffreply' => 'If the incoming email is flagged as a reply to an <b>existing ticket</b> from a staff user email address, this rule will match (return true).',

	'pticketstatus' => 'Ticket Status (Post Parse)',
	'desc_pticketstatus' => 'If the incoming email is parsed as a reply to an existing ticket, the ticket\'s status will be matched by this rule.',

	'pticketemailqueue' => 'Email Queue',
	'desc_pticketemailqueue' => 'If the incoming email is received under the specified queue, this rule will match.',

	'ptickettype' => 'Ticket Type (Post Parse)',
	'desc_ptickettype' => 'If the incoming email is parsed as a reply to an existing ticket, the ticket\'s type will be matched by this rule.',

	'pticketpriority' => 'Ticket Priority (Post Parse)',
	'desc_pticketpriority' => 'If the incoming email is parsed as a reply to an existing ticket, the ticket\'s priority will be matched by this rule.',

	'pticketusergroup' => 'Ticket User Group (Post Parse)',
	'desc_pticketusergroup' => 'If the incoming email is parsed as a reply to an existing ticket, the ticket\'s user group will be matched by this rule.',

	'pticketdepartment' => 'Ticket Department (Post Parse)',
	'desc_pticketdepartment' => 'If the incoming email is parsed as a reply to an existing ticket, the ticket\'s department will be matched by this rule.',

	'pticketowner' => 'Ticket Owner (Post Parse)',
	'desc_pticketowner' => 'If the incoming email is parsed as a reply to an existing ticket, the ticket\'s owner will be matched by this rule.',
	'prunassigned' => '-- Unassigned --',

	'pticketflagtype' => 'Flag Type (Post Parse)',
	'desc_pticketflagtype' => 'If the incoming email is parsed as a reply to an existing ticket, the ticket\'s flag type will be matched by this rule.',

	'pbayescategory' => 'Bayesian Category',
	'desc_pbayescategory' => 'The bayesian category with the highest probability ranking. You can use this to filter spam email or train the system to auto route tickets based on certain contents.',

	// Insert Rule
	'insertrule' => 'Insert Rule',
	'criteria' => 'Criteria',
	'newcriteria' => 'New Criteria',
	'iruletype' => 'Rule Type: ',
	'ipreparse' => 'Pre Parse',
	'ipostparse' => 'Post Parse',

	'paignore' => 'Ignore Email',
	'desc_paignore' => 'The email will be completely ignored by the system and will not be parsed into a ticket or a reply.',
	'panoautoresp' => 'Do not send Autoresponder Message',
	'desc_panoautoresp' => 'The ticket or ticket reply receipt will not be sent.',
	'panoalerts' => 'Do Not Process Ticket Alert Rules',
	'desc_panoalerts' => 'Staff email or SMS alert rules will not be processed.',
	'pnochange' => '-- No Change --',
	'pcstaff' => 'Assign The Ticket',
	'desc_pcstaff' => 'The ticket (whether a new one or a reply to an existing one) will be assigned to the staff user specified here.',
	'pcstatus' => 'Change Ticket Status',
	'desc_pcstatus' => 'The ticket will be changed to the status specified here.',
	'pcpriority' => 'Change Ticket Priority',
	'desc_pcpriority' => ' The ticket will be changed to the priority specified here.',
	'pcdepartment' => 'Change Ticket Department',
	'desc_pcdepartment' => 'The ticket will be moved to the department specified here.',
	'pcslaplan' => 'Change Ticket SLA Plan',
	'desc_pcslaplan' => 'The ticket will be assigned the SLA plan specified here.',
	'pcmovetotrash' => 'Move to Trash',
	'desc_pcmovetotrash' => 'The ticket will be moved to Trash',
	'pcflag' => 'Flag Ticket',
	'desc_pcflag' => 'The ticket will be flagged this color.',
	'paddnotes' => 'Add Note',
	'desc_paddnotes' => 'A note will be added to the ticket.',
	'pcforward' => 'Forward To',
	'desc_pcforward' => 'The email will be forwarded to the address specified here.',
	'preply' => 'Reply To Email',
	'desc_preply' => 'The email will be automatically responded to with the message specified here.',
	'panoticket' => 'Do not parse as Ticket Reply',
	'desc_panoticket' => 'Instead of being appended to the existing ticket, the email will be taken and parsed as a new ticket.',
	'pctickettype' => 'Change Ticket Type',
	'desc_pctickettype' => 'The ticket type will be changed to the one specified here.',
	'pcaddtags' => 'Add Tags',
	'desc_pcaddtags' => 'The specified tags will be added to the ticket.',
	'pcremovetags' => 'Remove Tags',
	'desc_pcremovetags' => 'The specified tags will be removed from the ticket.',

	// Edit Rules
	'editrule' => 'Edit Rule',
	'ptitle' => 'Rule Title',
	'desc_ptitle' => 'Enter a title for the rule.',
	'pstop' => 'Stop processing rules',
	'desc_pstop' => 'If enabled and if this mail parser rule is met first, no other rules will be parsed (even if they match for the incoming email).',
	'ruleinsertconfirm' => 'Parser rule "%s" inserted successfully',
	'ruleupdateconfirm' => 'Parser rule "%s" updated successfully',
	'invalidrule' => 'ERROR: Invalid parser rule',

	// Manage Rules
	'managerules' => 'Rules',
	'ruledelconfirm' => 'Parser rule deleted successfully',
	'ruletitle' => 'Rule Title',
	'sortorder' => 'Execution Order',
	'desc_sortorder' => 'The mail parser will execute the mail parser rules according to this value. (e.g. <i>rule "1" will be executed before "2" etc</i>).',
	'ruletype' => 'Rule Type',
	'creationdate' => 'Creation Date',
	'rulelist' => 'Rule List',
);
?>