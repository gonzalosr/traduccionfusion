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
	// ======= BEGIN v3 IMPORT =======
	'chatreport' => 'Chat Report',
	'visitortrackinghtmlcode' => 'Visitor Tracking HTML Code',
	'desc_visitortrackinghtmlcode' => 'Copy this HTML code to all the locations that you wish to track visitors from.  Unlike the "HTML Button" and "Text Link" features, this will not display a live chat image or hyperlink on your web page; it will only allow you to track the people who visit the page.',
	'textlinkhtmlcode' => 'Text Link HTML Code',
	'desc_textlinkhtmlcode' => 'This HTML code will print a text hyperlink with a custom caption provided by you below depending upon whether or not staff members are online and available to chat.<br><br>If staff members <i>are</i> available, a live chat window will be displayed when a visitor clicks the hyperlink.  If staff members <i>are not</i> available, the visitor will be prompted to send a message.<br><br>By adding this HTML code to a web page, you will also be able to track that page\'s visitors through '. SWIFT_PRODUCT .'.',
	'emailsignaturehtmlcode' => 'Email Signature HTML Code',
	'desc_emailsignaturehtmlcode' => 'This HTML code will print an image (and hyperlink) that lets visitors know that live chat is unavailable, but that they can leave a messsage <i>(Note: it will always display the "live support offline" image, even if staff members are online and available to chat!)</i>.  If you want visitors to be able to start live chat sessions, use the "HTML Button" feature.<br><br>Use this code when you want visitors to be able to send a message to the help desk, but not start a live chat session with a staff member.  If you want messages routed to a specific department, choose it below.<br><br>By adding this HTML code to a web page, you will also be able to track that page\'s visitors through '. SWIFT_PRODUCT .'.',
	'desc_emailsignaturedepartment' => 'If you choose a specific department here, messages sent by visitors from this HTML code will be routed to that department.  If you choose <i>All Departments</i>, the visitor will be allowed to select the department that they wish to contact.',
	'departments' => 'Department(s)',
	'lschatreport' => 'Chat Report',
	'lschatfilter' => 'Chat Report Filter',
	'lsnotpicked' => 'Not Picked',
	'lsaccepted' => 'Accepted',
	'lsrejected' => 'Rejected',
	'lsendchat' => 'Chat Finished',
	'lsdate' => 'Date:',
	'lsstaff' => 'Staff:',
	'lschatstatus' => 'Chat Status:',
	'userwarningnoresponse' => 'The client\'s chat window is not responding. If you continue to receive this message, the client may have ended the chat session, or the session may have timed out.',
	'transferattempt' => 'Attempting to transfer the chat to "%s"',
	'transferrejected' => '"%s" has rejected the transfer request. Reason: %s',
	// ======= END v3 IMPORT =======

	'staffchatnotonline' => 'Staff is not online',
	'staffnochatobjectcreate' => 'Unable to create Chat Object',
	'livesupport' => 'Live Chat',
	'adcampaign' => 'Ad Campaign',
	'incomingchat' => 'Pending Chat',
	'inchat' => 'In Chat',
	'browsing' => 'Browsing',
	'fullname' => 'Full Name',
	'email' => 'Email',
	'department' => 'Department',
	'visitorblocked' => 'Visitor banned by %s',
	'sno' => 'No.',
	'dateadded' => 'Date',
	'addedby' => 'Added By',
	'note' => 'Note',
	'nonotesavailable' => 'There are no notes available for this visitor',
	'conversation' => 'Conversation',
	'nochatactive' => 'There is no chat active for this visitor',
	'refresh' => 'Refresh',
	'goback' => 'Go Back',
	'nohistoryavailable' => 'There is no chat history for this visitor',
	'chatid' => 'Chat ID',
	'date' => 'Date',
	'fullname' => 'Full Name',
	'staffname' => 'Staff Name',
	'department' => 'Department',
	'chatleave' => '%s has left the chat conversation.',
	'chatenter' => '%s has joined the chat conference.',
	'chatexpired' => 'Chat session has expired or ended.',
	'clientnoresponse' => 'The client\'s chat window is not responding. If you continue to receive this message, the client may have ended the chat session, or the session may have timed out.',
	'staffchaterror' => 'Unable to start staff-to-staff chat; no department found.',
	'errorchatnotstarted' => 'Unable to deliver the chat message. Please wait for the chat session to begin.',
	'errorchatended' => 'Unable to deliver the message. The chat session has either ended or expired.',
	'noliveresponseerror' => 'You must use the LiveResponse Desktop Application to view this page properly',
	'typingmsg' => '%s is typing...',
	'startingvoicechat' => 'Starting voice chat with %s (%s)',
	'startingstaffviewshare' => 'Starting ViewShare session with %s',

	/**
	* ###############################################
	* Tools
	* ###############################################
	*/
	'tools' => 'Tools',
	'htmlbutton' => 'HTML Button',
	'htmlcode' => 'HTML Code',
	'desc_htmlcode' => 'This HTML code will print a "live chat is online/offline" status image (and hyperlink) depending upon whether or not staff members are online and available to chat.<br><br>If staff members <i>are</i> available, a live chat window will be displayed when a visitor clicks the image.  If staff members <i>are not</i> available, the visitor will be prompted to send a message.<br><br>By adding this HTML code to a web page, you will also be able to track that page\'s visitors through ' . SWIFT_PRODUCT . '.',
	'generate' => 'Generate',
	'alldepartments' => '-- All Departments --',
	'fordepartment' => 'Department',
	'desc_fordepartment' => 'If a specific department is chosen here, ' . SWIFT_PRODUCT . ' will only use this department for determining the online/offline status of staff users.  Client users will also only be able to choose this department when requesting a chat.<br/><br/><b>NOTE:</b> This means that if all the staff users in this department are offline, even if other staff users are available, the client user will be told that live chat is unavailable.',
	'generatedcode' => 'New HTML code generated. Copy & paste it from the field below.',
	'textlink' => 'Text Link',
	'visitortracking' => 'Visitor Tracking',
	'customsettings' => 'Custom Settings',
	'onlinetext' => 'Staff Online Text',
	'desc_onlinetext' => 'This is the text that is displayed if there is at least one available staff user in the specified department.',
	'offlinetext' => 'Staff Offline Text',
	'desc_offlinetext' => 'This is the text that is displayed if there are no available staff users in the specified department.',
	'conlinetext' => 'Live chat is available. Chat now!',
	'cofflinetext' => 'Live chat is unavailable. Please leave a message.',
	'emailsignature' => 'Email Signature',
	'taggenerator' => 'Tag Generator',
	'emailbutton' => 'Email Button',

	/**
	* ###############################################
	* Messages
	* ###############################################
	*/
	'messages' => 'Messages',
	'newmessagelist' => 'New Message List',
	'repliedmessagelist' => 'Replied Message List',
	'markasreplied' => 'Mark as Replied',
	'staffname' => 'Staff Name',
	'createdon' => 'Created On',
	'repliedon' => 'Replied On',
	'messagedeleteconfirm' => 'Message "%s" deleted successfully',
	'reply' => 'Reply',
	'messagereply' => 'Message Reply',
	'messagedetails' => 'Message Details',
	'replydetails' => 'Reply Details',
	'clientname' => 'Full Name',
	'clientemail' => 'Email',
	'subject' => 'Subject',
	'contents' => 'Contents',
	'subjectformat' => 'Re: %s',
	'sendreply' => 'Send Reply',
	'redirect_messagereplied' => 'Sending reply to "%s"',
	'confirmmessagereplied' => 'Sent reply to "%s',
	'details' => 'Details',
	'replied' => 'Replied',
	'repliedmessages' => 'Replied Messages',
	'replytomessage' => 'Reply to Message',
	'newmessages' => 'New Messages',
	'repliedmessages' => 'Replied Messages',
	'messageoptions' => 'Message Options',
	'deletemessage' => 'Delete Message',
);
?>