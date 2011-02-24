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
	'troubleshooter' => 'Troubleshooter',
	'categories' => 'Categories',
	'titletrcatmismatch' => 'Category "%s" already exists',
	'msgtrcatmismatch' => SWIFT_PRODUCT . ' is unable to insert the troubleshooter category "%s" as a category with the same title already exists.',
	'categorytitle' => 'Category Title',
	'desc_categorytitle' => 'Enter the category title',
	'wininsertcategory' => 'Insert Category',
	'wineditcategory' => 'Edit Category: %s',
	'insertcategory' => 'Insert Category',
	'editcategory' => 'Edit Category',

	'titletrcategoryinsert' => 'Inserted "%s" Troubleshooter Category',
	'msgtrcategoryinsert' => SWIFT_PRODUCT . ' has successfully inserted the troubleshooter category titled "%s".',
	'titletrcategoryupdate' => 'Updated "%s" Troubleshooter Category',
	'msgtrcategoryupdate' => SWIFT_PRODUCT . ' has successfully updated the troubleshooter category titled "%s".',
	
	'trcategory' => 'Category',
	'desc_trcategory' => '',
	'next' => 'Next',

	'tabgeneral' => 'General',
	'taboptions' => 'Options',
	'categorytype' => 'Type',
	'desc_categorytype' => 'Select the Category type.<br /><br /><i>Global:</i> The categories classified as Global are visible in both the client support center and the staff control panel.<br /><br /><i>Public:</i> The categories classified as Public are visible only in the client support center.<br /><br /><i>Private:</i> The categories classified as Private are only visible in the staff control panel.',
	'displayorder' => 'Display Order',
	'desc_displayorder' => 'This is the default display order in which the items are displayed. The list is sorted in Ascending Order.',
	'tabpermissionsuser' => 'Permissions: Users',
	'tabpermissionsstaff' => 'Permissions: Staff',
	'uservisibilitycustom' => 'Restrict to Custom User Groups?',
	'desc_uservisibilitycustom' => 'If Enabled, this category will be visible to only the selected user groups.',
	'staffvisibilitycustom' => 'Restrict to Custom Staff Teams?',
	'desc_staffvisibilitycustom' => 'If Enabled, this category will be visible to only the selected staff teams.',
	'usergroups' => 'User Groups',
	'staffteams' => 'Staff Teams',
	
	'tablist' => 'List',
	'tabtree' => 'Tree',
	'steptitle' => 'Step Title',
	'categorytitle' => 'Category',
	'author' => 'Author',
	'stepstatus' => 'Status',

	/**
	 * ---------------------------------------------
	 * INSERT TROUBLESHOOTER
	 * ---------------------------------------------
	 */
	'titletrstepinsert' => 'Inserted Troubleshooter Step "%s"',
	'msgtrstepinsert' => SWIFT_PRODUCT . ' has successfully created the troubleshooter step titled "%s".',
	'titletrstepupdate' => 'Updated Troubleshooter Step "%s"',
	'msgtrstepupdate' => SWIFT_PRODUCT . ' has successfully updated the troubleshooter step titled "%s".',
	'insertstep' => 'Insert Step',
	'recursionsuffix' => ' (Probable Recursion)',
	'parentcategoryitem' => '- Category Root -',
	'parentsteps' => 'Parent Steps',
	'desc_parentsteps' => '',
	'tabgeneral' => 'General',
	'tabattachments' => 'Attachments',
	'taboptions' => 'Options',
	'publish' => 'Publish',
	'published' => 'Published',
	'draft' => 'Draft',
	'infobauthor' => 'AUTHOR',
	'infobcreationdate' => 'CREATED ON',
	'infobeditedby' => 'EDITED BY',
	'infobeditedon' => 'EDITED ON',
	'ftarticletype' => 'Type',
	'ftcategories' => 'Categories',
	'ftdate' => 'Date',
	'informationbox' => 'Information',
	'quickfilter' => 'Quick Filter',
	'markasdraft' => 'Mark as Draft',
	'saveasdraft' => 'Save as Draft',
	'addfile' => 'Add File',
	'steptitle' => 'Title',
	'desc_steptitle' => '',
	'parentsteps' => 'Parent Steps',
	'desc_parentsteps' => '',
	'generalsettings' => 'General Settings',
	'allowcomments' => 'Allow Comments',
	'desc_allowcommentsstep' => 'Select whether you wish to enable commenting for this step.',
	'noticketrediractive' => '-- No Department Selected --',
	'ticketredirectionsettings' => 'Ticket Redirection Settings',
	'redirecttickets' => 'Enable Ticket Redirection',
	'desc_redirecttickets' => 'If Enabled, the user will be redirected to the ticket submission form for the specified department or the department list page if no department is selected.',
	'redirectdepartment' => 'Redirection Department',
	'desc_redirectdepartment' => 'Select the department to which the user should be redirected to.',
	'ticketsubject' => 'Custom Ticket Subject',
	'desc_ticketsubject' => 'If specified, the ticket form will be prefilled with the specified ticket subject.',
	'tickettype' => 'Ticket Type',
	'desc_tickettype' => 'Select the ticket type to be selected by default on the ticket submission page. This option needs the Ticket Type setting to be enabled for the Template Group.',
	'ticketpriority' => 'Ticket Priority ID',
	'desc_ticketpriority' => 'Select the ticket priority to be selected by default on the ticket submission page.',
	'nochange' => '-- No Change --',
	
	/**
	 * ---------------------------------------------
	 * VIEW ALL
	 * ---------------------------------------------
	 */
	'tabviewall' => 'Troubleshooter',
	'troubleshooterdesc' => 'Troubleshooter wizards guide you through a series of steps in order to diagnose and resolve common problems. Begin by choosing a troubleshooter category.',
	'trattachments' => 'Attachments',
	'trnextsteps' => 'Next Steps',
	'trnext' => 'Next &raquo;',
	'trback' => '&laquo; Back',
	'steps' => 'Steps',
	'trcategoryviews' => ' (%d Views)',
);
?>