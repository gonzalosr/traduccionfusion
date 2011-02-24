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
	// ======= BEGIN V4 LOCALES =======
	'titlebayesnodel' => 'Unable to Delete "%d" Bayesian Categories',
	'msgbayesnodel' => SWIFT_PRODUCT .' was unable to delete the following Bayesian Categories as they are flagged as "MASTER" Categories.',
	'check' => 'Check',
	'bayesian' => 'Bayesian',
	'desc_bayesian' => '',
	'categories' => 'Categories',
	'insertcategory' => 'Insert Category',
	'editcategory' => 'Edit Category',
	'diagnostics' => 'Diagnostics',
	'sla' => 'SLA',
	'tabtraining' => 'Training',
	'tabprobability' => 'Probability',
	'bayescategory' => 'Category',
	'desc_bayescategory' => 'Select the Bayesian Category',
	'bayesactiontype' => 'Action',
	'desc_bayesactiontype' => 'Select the type of action.',
	'bayestext' => 'Text',
	'bayestrain' => 'Train',
	'bayesuntrain' => 'Untrain',
	'titlebtrain' => 'Training Successful',
	'msgbtrain' => 'Successfully trained the Bayesian filter with the specified data',
	'titlebuntrain' => 'Untraining Successful',
	'msgbuntrain' => 'Successfully untrained the Bayesian filter',
	'word' => 'Word',
	'combinedprobability' => 'Combined Probability',
	'tabsettings' => 'Settings',
	'bayescattitle' => 'Category Title',
	'desc_bayescattitle' => 'Enter the Bayesian category title.',
	'categoryweight' => 'Category Weight',
	'desc_categoryweight' => 'Specify the category weight, the default word probability is multiplied by category weight to achieve the final probability. Increasing the number results in an increase in word probability. Entering "1" defaults the word probability for this category to 0.0001. Entering "0" makes the system ignore all words for this category.',
	'tabgeneral' => 'General',
	'invalidbayescat' => 'Invalid Bayesian Category',
	'titlebayesmasterdel' => 'Unable to delete category',
	'msgbayesmasterdel' => 'You cannot delete the master bayesian categories (Spam/Not Spam). If you wish to disable spam filtering, you can do so under the bayesian settings section.',
	'titlebayesdel' => 'Deleted "%d" Bayesian Categories',
	'msgbayesdel' => 'Successfully deleted the following bayesian categories from the database:',
	'ismaster' => 'Master Category',
	'wordcount' => 'Word Count',
	'winbayeseditcategory' => 'Edit Bayesian Category: %s',
	'titlebayesinsert' => 'Inserted Bayesian Category "%s"',
	'msgbayesinsert' => 'Successfully inserted Bayesian Category "%s".',
	'titlebayesupdate' => 'Updated Bayesian Category "%s"',
	'msgbayesupdate' => 'Successfully updated Bayesian Category "%s".',

	'settings' => 'Settings',
	'desc_settings' => '',
	// ======= END V4 LOCALES =======

	'tickets' => 'Tickets',
	'displayorder' => 'Display Order',
	'desc_displayorder' => 'This is the default display order in which the items are displayed. The list is sorted in Ascending Order.',
	// ======= STATUS =======
	'statustitle' => 'Title',
	'statuslist' => 'Status List',
	'ticketstatus' => 'Status',
	'desc_ticketstatus' => 'Ticket Status allows you to group similar Tickets into different Categories. You can create a custom Ticket Status by clicking on the "Insert Status" option in the Navigation Bar.',
	'manage' => 'Manage',
	'statusdetails' => 'Custom Ticket Status Details',
	'insertstatus' => 'Insert Status',
	'statustitle' => 'Status Title',
	'desc_statustitle' => 'Enter your custom Ticket Status Title',
	'redirect_statusinsert' => 'Ticket Status inserted successfully',
	'statusinsertconfirmation' => 'Ticket Status "%s" inserted successfully',
	'statusdeleteconfirm' => 'Ticket Status "%s" deleted successfully',
	'displayinmainlist' => 'Display in Main Ticket Listing',
	'desc_displayinmainlist' => 'If enabled, all Tickets under this Status will be displayed in the main Ticket Listing. It is recommended that this option be disabled for Resolved Ticket Statuses like "Closed", "Fixed", or "Info Required"',
	'updatestatus' => 'Update Status',
	'editstatus' => 'Edit Status',
	'invalidticketstatus' => 'Invalid Ticket Status',
	'statusupdateconfirm' => 'Ticket Status "%s" updated successfully',
	'displaycount' => 'Display Ticket Count in Tree',
	'desc_displaycount' => 'If enabled, the total Ticket count for this Status will be displayed in the Filter Tickets Tree. It is recommended that you disable this option for Statuses which are for Resolved or Fixed Tickets.',
	'statuscolor' => 'Status Color',
	'desc_statuscolor' => 'Enter the Color Code you would like to associate with this Status.',
	'statusdep' => 'Link Status with Department',
	'desc_statusdep' => 'This option allows you to link this Status to an existing Department. If a Status is linked to a Department, it will be visible only under the linked Department.',
	'statusalldep' => '-- Display under all Departments --',
	'statustype' => 'Status Type',
	'errorstr' => 'ERROR',
	'resetduetime' => 'Reset the Due Time Automatically',
	'desc_resetduetime' => 'If Enabled, the system will automatically reset the due time for a ticket when the ticket status changes.',
	'statustype2' => 'Status Type',
	'desc_statustype2' => 'Select the type of Status, Public Status are visible in the Client Support Center whereas Private status types are visible to only the staff users',

	// ======= PRIORITY =======
	'ticketpriorities' => 'Priorities',
	'desc_ticketpriorities' => 'Priorities allow your clients to specify the level of urgency for a given ticket. You can create custom Ticket Priorities by clicking on the "Insert Priority" option in the Navigation Bar.',
	'prioritytitle' => 'Title',
	'desc_prioritytitle' => 'Enter your Ticket Priority Title',
	'prioritylist' => 'Priority List',
	'prioritydetails' => 'Priority Details',
	'insertpriority' => 'Insert Priority',
	'prioritytype' => 'Type',
	'desc_prioritytype' => 'Specify the Priority Type. Private Priories are not visible to clients.',
	'registrationrequired' => 'Registration Required?',
	'desc_registrationrequired' => 'If enabled, only registered clients will be able to create Tickets with this Priority.',
	'forecolor' => 'Foreground Listing Color',
	'desc_forecolor' => 'If specified, the foreground color of a Ticket with this Priority will be set to the one chosen.',
	'bgcolor' => 'Background Listing Color',
	'desc_bgcolor' => 'If specified, the background color of a Ticket with this Priority will be set to the one chosen.',
	'redirect_priorityinsert' => 'Priority inserted successfully',
	'priorityinsertconfirm' => 'Priority "%s" inserted successfully',
	'prioritydeleteconfirm' => 'Ticket Priority "%s" deleted successfully',
	'templategroups' => 'Template Groups',
	'desc_templategroups' => 'Select the Template Groups that this Priority will be assigned to. This Priority will only be visible under the specified Template Groups.',
	'updatepriority' => 'Update Priority',
	'selectonetgroup' => 'ERROR: You need to select at least one Template Group. If you do not wish to display this Priority in the Support Center, please select Private as the Type.',
	'editpriority' => 'Edit Priority',
	'invalidpriority' => 'Invalid Ticket Priority',
	'priorityupdateconfirm' => 'Ticket Priority "%s" updated successfully',
);

?>