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
	'titlemasterviewdel' => 'Unable to Delete "%d" View(s)',
	'msgmasterviewdel' => SWIFT_PRODUCT . ' is unable to delete the following master ticket view(s):',
	'manageviews' => 'Views',
	'insertview' => 'Insert View',
	'viewtitle' => 'Title',
	'desc_viewtitle' => 'Enter the View Title. Only alphanumeric characters and space is allowed.',
	'viewscope' => 'View Scope',
	'createdby' => 'Created By',
	'editview' => 'Edit View',
	'titleticketviewinsert' => 'Inserted Ticket View "%s"',
	'msgticketviewinsert' => SWIFT_PRODUCT . ' has successfully inserted the ticket view "%s".',
	'titleticketviewupdate' => 'Updated Ticket View "%s"',
	'msgticketviewupdate' => SWIFT_PRODUCT . ' has successfully updated the ticket view "%s".',
	'titleviewfieldempty' => 'No Columns Specified',
	'msgviewfieldempty' => 'Unable to insert/update the ticket view. You need to specify at least one column to continue.',

	'viewlinkdepartment' => 'Link with Department(s)',
	'desc_viewlinkdepartment' => 'Using this option, you can link this view with the selected departments. The linked departments will automatically use this view when opened, however, if there are two views linking to the same department then the view to be used will be selected in the chronological order.',

	'taboptions' => 'Options',
	'tabcolumns' => 'Columns',

	'viewscope_global' => 'Global',
	'viewscope_private' => 'Private',
	'viewscope_team' => 'Team',

	'viewunassigned' => 'Unassigned',
	'viewassigned' => 'Assigned To Me',
	'viewalltickets' => 'All Tickets',

	'viewassignedfield' => 'Display Tickets Assigned To',
	'desc_viewassignedfield' => 'Select the type of tickets to be displayed in this view.<br /><br /><em>Unassigned:</em> Tickets that are not assigned to any staff user.<br /><br /><em>Assigned To Me:</em> Tickets that are assigned to you.<br /><br /><em>All Tickets:</em> Tickets that are either unassigned or assigned to any user.',
	'viewscope' => 'View Scope',
	'desc_viewscope' => '<em>Global Views:</em> Visible to all staff users.<br /><br /><em>Private Views:</em> Visible to you (the staff user who created the view).<br /><br /><em>Team Views:</em> Visible to your team members.',

	'viewselectfields' => 'Select Fields (Drag and drop the fields in to the yellow box)',
	'viewsortoptions' => 'Sort Options',
	'viewsortby' => 'Sort By',
	'desc_viewsortby' => 'Select the field that will be used to sort the tickets.',
	'viewsortorder' => 'Sort Order',
	'desc_viewsortorder' => 'The ticket views will be listed according to the order specified here.',
	'viewticketsperpage' => 'Tickets Per Page',
	'desc_viewticketsperpage' => 'Enter the number of tickets that will be displayed on one page in this view (before being split into multiple pages).',
	'generaloptions' => 'General Options',
	'viewautorefresh' => 'Auto Refresh Grid',
	'desc_viewautorefresh' => 'The ticket listing can be set to automatically refresh after a certain interval of time.',
	'autorefresh_disable' => '-- Disable Auto Refresh --',
	'autorefresh_30s' => 'Every 30 Seconds',
	'autorefresh_1m' => 'Every 1 Minute',
	'autorefresh_5m' => 'Every 5 Minutes',
	'autorefresh_15m' => 'Every 15 Minutes',
	'autorefresh_30m' => 'Every 30 Minutes',
	'autorefresh_1h' => 'Every 1 Hour',
	'viewsetasowner' => 'Select Owner as Active Staff User',
	'desc_viewsetasowner' => 'If enabled, the ticket will automatically be assigned to the active staff user when replying or forwarding.',
	'viewdefaultstatusonreply' => 'Default Ticket Status when Replying/Forwarding',
	'desc_viewdefaultstatusonreply' => 'Select the status to which tickets should be set to after you have made a reply or forwarded the ticket to a third party.<br /><br /><em>Note:</em> This setting <strong>does not</strong> apply to replies made from your email client.',
	'defaultstatus_unspecified' => '-- Unspecified --',

	'afterreply_topticketlist' => 'Top Level Ticket List (View All)',
	'afterreply_activeticketlist' => 'The Active Ticket List (Department/Search)',
	'afterreply_ticket' => 'The Active Ticket',
	'afterreply_nextticket' => 'The Next Available Ticket',
	'viewafterreplyaction' => 'After reply/forward take me to',
	'desc_viewafterreplyaction' => 'Select the area that ' . SWIFT_PRODUCT . ' should take you to after you have replied to a ticket.',

	'viewfilteroptions' => 'Filter Options',
	'viewfilterdepartments' => 'Filter Department(s)',
	'desc_viewfilterdepartments' => SWIFT_PRODUCT . ' by default will display tickets from all/selected department. However, you can use this option to filter the tickets based on the selected departments.',
	'viewfiltertype' => 'Filter Ticket Type(s)',
	'desc_viewfiltertype' => 'You can use this option to filter the tickets based on the selected ticket type(s).',
	'viewfilterstatus' => 'Filter Ticket Status(es)',
	'desc_viewfilterstatus' => 'You can use this option to filter the tickets based on the selected ticket status(es).',

	'sort_asc' => 'Ascending',
	'sort_desc' => 'Descending',
);
?>
