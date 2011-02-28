<?php
//=======================================
//###################################
// Kayako Web Solutions
//
// Source Copyright 2001-2004 Kayako Infotech Ltd.
// Unauthorized reproduction is not allowed
// License Number: $%LICENSE%$
// $Author$ ($Date$)
// $RCSfile$ : $Revision$ 
//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
//                   www.kayako.com
//###################################
//=======================================


$__LANG = array (
	'issues' => 'Issues',
	'settings' => 'Settings',
	'tabsettings' => 'Settings',

	// ======= GLOBAL =======
	'displayorder' => 'Display Order',
	'desc_displayorder' => 'This is the default display order in which the items are displayed. The list is sorted in Ascending Order.',

	// ======= TYPES =======
	'managetypes' => 'Manage Types',
	'inserttype' => 'Insert Type',
	'typetitle' => 'Issue Type Title',
	'desc_typetitle' => 'Enter your custom Issue Type title.',
	'issuetypeview' => 'Issue View Type',
	'desc_issuetypeview' => 'Select the view of Issue Type, Public Issue Types are visible in the Client Portal whereas Private issue types are visible to only the staff users.',
	'displayicontype' => 'Display Icon',
	'desc_displayicontype' => 'Enter the full URL to the display icon to be displayed besides this issue type, You can use {$themepath} as a replacement variable for the full URL to the themepath directory. Recommended image size is 16x16 pixels.',
	'unabletoinserttype' => 'Unable to insert issue type. Please check your database settings.',
	'titleinsertissuetype' => 'Inserted Issue Type "%s"',
	'msginsertissuetype' => 'Successfully inserted issue type "%s" into the database.',
	'titleduplicatetype' => 'Duplicate Issue Type "%s"',
	'msgduplicatetype' => "A duplicate Issue Type with the same title \"%s\" already exists in the database. It is recommended that you change the title of this type by <a href=\"javascript:window.\$KAJAX._parser.createWindowXML('". $_SWIFT["swiftpath"] ."admin/index.php?_m=issues&_a=edittype&noheader=1&issuetypeid=%d', 'editissuetype', 'Edit Issue Type: %s', 'Loading Window..', 650, 350, true);\">clicking here.</a>",
	'titledelissuetypemul' => 'Deleted "%d" Issue Type(s)',
	'msgdelissuetypemul' => 'Successfully deleted the following Issue Type(s) from the database:<br>%s',
	'titledelissuetype' => 'Deleted Issue Type "%s"',
	'msgdelissuetype' => 'Successfully deleted issue type "%s" from database',
	'typedelconfirmmsg' => 'Are you sure you wish to delete this issue type?',
	'invalidissuetype' => 'Invalid Issue Type. Please make sure that this issue type exists in the database.',
	'unabletoupdatetype' => 'Unable to update issue type. Please make sure that this type exists in database and your database configuration is correct.',
	'edittype' => 'Edit Type > %s',
	'wineditissuetype' => 'Edit Type: %s',
	'msgeditissuetype' => 'Successfully updated issue type "%s".',
	'titleeditissuetype' => 'Updated Issue Type "%s"',

	// ======= LINKS =======
	'managelinks' => 'Manage Links',
	'insertlink' => 'Insert Link',
	'linktypetitle' => 'Link Type Title',
	'desc_linktypetitle' => 'Enter your custom Issue Link Type title.',
	'issuelinktype' => 'Link Type',
	'desc_issuelinktype' => 'Select the type of Link, Public Links are visible in the Client Portal whereas Private link types are visible to only the staff users.',
	'invalidlinktype' => 'Invalid Link Type Specified. Please make sure that the link type exists in database.',
	'wineditissuelinktype' => 'Edit Link: %s',
	'linkdelconfirmmsg' => 'Are you sure you wish to delete this link type?',
	'titleinsertissuelink' => 'Inserted Issue Link "%s"',
	'msginsertissuelink' => 'Successfully inserted issue link "%s" into the database.',
	'titleduplicatelinktype' => 'Duplicate Issue Link "%s"',
	'msgduplicatelinktype' => "A duplicate Issue Link with the same title \"%s\" already exists in the database. It is recommended that you change the title of this link by <a href=\"javascript:window.\$KAJAX._parser.createWindowXML('". $_SWIFT["swiftpath"] ."admin/index.php?_m=issues&_a=editlink&noheader=1&issuelinktypeid=%d', 'editissuelink', 'Edit Issue Link: %s', 'Loading Window..', 650, 300, true);\">clicking here.</a>",
	'titleeditissuelinktype' => 'Updated Issue Link "%s"',
	'msgeditissuelinktype' => 'Successfully updated issue link "%s".',
	'linkunableupd' => 'Unable to update link type. Please check your database configuration.',
	'titledelissuelink' => 'Deleted Issue Link "%s"',
	'msgdelissuelink' => 'Successfully deleted issue link "%s" from database.',
	'titledelissuelinkmul' => 'Deleted "%d" Issue Link(s)',
	'msgdelissuelinkmul' => 'Successfully deleted the following Issue Link(s) from the database:<br>%s',
	'editlink' => 'Edit Link',

	// ======= RESOLUTIONS =======
	'resolutiontitle' => 'Resolution Title',
	'viewtype' => 'Type',
	'resdelconfirm' => 'Issue Resolution(s) deleted successfully',
	'wineditissueresolution' => 'Edit Resolution: %s',
	'manageresolutions' => 'Manage Resolutions',
	'insertresolution' => 'Insert Resolution',
	'resolutiontitle' => 'Resolution Title',
	'desc_resolutiontitle' => 'Enter your custom Issue Resolution title.',
	'issueresolutiontype' => 'Resolution Type',
	'desc_issueresolutiontype' => 'Select the type of Resolution, Public Resolutions are visible in the Client Portal whereas Private resolution types are visible to only the staff users.',
	'titleinsertissueresolution' => 'Inserted Issue Resolution "%s"',
	'msginsertissueresolution' => 'Successfully inserted issue resolution "%s" into the database.',
	'titleduplicateresolution' => 'Duplicate Issue Resolution "%s"',
	'msgduplicateresolution' => "A duplicate Issue Resolution with the same title \"%s\" already exists in the database. It is recommended that you change the title of this resolution by <a href=\"javascript:window.\$KAJAX._parser.createWindowXML('". $_SWIFT["swiftpath"] ."admin/index.php?_m=issues&_a=editresolution&noheader=1&issueresolutionid=%d', 'editissueresolution', 'Edit Issue Resolution: %s', 'Loading Window..', 650, 300, true);\">clicking here.</a>",
	'editresolution' => 'Edit Resolution > %s',
	'invalidissueresolution' => 'Invalid Issue Resolution. Please make sure the resolution exists in the database and that you have permission to access it.',
	'failedupdres' => 'Failed to update resolution, please check your configuration.',
	'titleeditissueresolution' => 'Updated Issue Resolution "%s"',
	'msgeditissueresolution' => 'Successfully updated issue resolution "%s".',
	'resdelconfirmmsg' => 'Are you sure you wish to delete this issue resolution?',
	'titledelissueresolution' => 'Deleted Issue Resolution "%s"',
	'msgdelissueresolution' => 'Successfully deleted issue resolution "%s" from database.',
	'titledelissueresolutionmul' => 'Deleted "%d" Issue Resolution(s)',
	'msgdelissueresolutionmul' => 'Successfully deleted the following Issue Resolution(s) from the database:<br>%s',

	// ======= ISSUE STATUS =======
	'statustitle' => 'Status Title',
	'managestatus' => 'Manage Status',
	'insertstatus' => 'Insert Status',
	'statustitle' => 'Status Title',
	'desc_statustitle' => 'Enter your custom Issue Status title.',
	'issuestatustype' => 'Status Type',
	'desc_issuestatustype' => 'Select the type of Status, Public Status are visible in the Client Portal whereas Private status types are visible to only the staff users.',
	'isresolved' => 'Is Resolved?',
	'desc_isresolved' => 'If Enabled, this status is treated as "Resolved". You should enable this option for the status items which are not to be displayed in the main issue list and are linked to actions that treat the issue as completed/resolved/closed.',
	'displayicon' => 'Display Icon',
	'desc_displayicon' => 'Enter the full URL to the display icon to be displayed besides this status, You can use {$themepath} as a replacement variable for the full URL to the themepath directory. Recommended image size is 16x16 pixels.',
	'titleinsertissuestatus' => 'Inserted Issue Status "%s"',
	'msginsertissuestatus' => 'Successfully inserted issue status "%s" into the database.',
	'invalidissuestatus' => 'Invalid Issue Status Specified',
	'wineditissuestatus' => 'Edit Issue Status',
	'titleeditissuestatus' => 'Updated Issue Status "%s"',
	'msgeditissuestatus' => 'Successfully updated issue status "%s".',
	'titleduplicatestatus' => 'Duplicate Issue Status "%s"',
	'msgduplicatestatus' => "A duplicate Issue Status with the same title \"%s\" already exists in the database. It is recommended that you change the title of this status by <a href=\"javascript:window.\$KAJAX._parser.createWindowXML('". $_SWIFT["swiftpath"] ."admin/index.php?_m=issues&_a=editstatus&noheader=1&issuestatusid=%d', 'editissuestatus', 'Edit Issue Status', 'Loading Window..', 680, 400, true);\">clicking here.</a>",
	'titledelissuestatus' => 'Deleted Issue Status "%s"',
	'msgdelissuestatus' => 'Successfully deleted issue status "%s" from database.',
	'statusdelconfirmmsg' => 'Are you sure you wish to delete this issue status?',
	'titledelissuestatusmul' => 'Deleted "%d" Issue Status',
	'msgdelissuestatusmul' => 'Successfully deleted the following Issue Status from the database:<br>%s',

	// ======= ISSUE PRIORITIES =======
	'prioritytitle' => 'Priority Title',
	'managepriorities' => 'Manage Priorities',
	'insertpriority' => 'Insert Priority',
	'prioritytitle' => 'Priority Title',
	'desc_prioritytitle' => 'Enter your custom Issue Priority title.',
	'issueprioritytype' => 'Priority Type',
	'desc_issueprioritytype' => 'Select the type of Priority, Public Priorities are visible in the Client Portal whereas Private portal types are visible to only the staff users.',
	'displayiconpriority' => 'Display Icon',
	'desc_displayiconpriority' => 'Enter the full URL to the display icon to be displayed besides this priority, You can use {$themepath} as a replacement variable for the full URL to the themepath directory. Recommended image size is 16x16 pixels.',
	'titleinsertissuepriority' => 'Inserted Issue Priority "%s"',
	'msginsertissuepriority' => 'Successfully inserted issue priority "%s" into the database.',
	'titleduplicatepriority' => 'Duplicate Issue Priority "%s"',
	'msgduplicatepriority' => "A duplicate Issue Priority with the same title \"%s\" already exists in the database. It is recommended that you change the title of this priority by <a href=\"javascript:window.\$KAJAX._parser.createWindowXML('". $_SWIFT["swiftpath"] ."admin/index.php?_m=issues&_a=editpriority&noheader=1&issuepriorityid=%d', 'editissuepriority', 'Edit Issue Priority', 'Loading Window..', 680, 350, true);\">clicking here.</a>",
	'invalidissuepriority' => 'Invalid Issue Priority Specified. Please make sure that this priority exists and that you have permission to access it.',
	'editpriority' => 'Edit Priority > %s',
	'issuepriorityupdfailed' => 'Failed to update issue priority',
	'wineditissuepriority' => 'Edit Priority: %s',
	'titleeditissuepriority' => 'Updated Issue Priority "%s"',
	'msgeditissuepriority' => 'Successfully updated issue priority "%s".',
	'priodelconfirmmsg' => 'Are you sure you wish to delete this issue priority?',
	'titledelissuepriority' => 'Deleted Issue Priority "%s"',
	'msgdelissuepriority' => 'Successfully deleted issue priority "%s" from database.',
	'titledelissueprioritymul' => 'Deleted "%d" Issue Priorities',
	'msgdelissueprioritymul' => 'Successfully deleted the following Issue Priorities from the database:<br>%s',
);
?>