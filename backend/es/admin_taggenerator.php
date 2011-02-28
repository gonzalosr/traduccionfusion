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
	'chattagtype' => 'Tag Type',
	'chatprompttype' => 'Prompt Type',
	'desc_chatprompttype' => '<br /><i>Chat: </i> The visitor is prompted for a chat request and the request is routed to the first available live chat operator.<br /><i>Call (Click to Call): </i>The visitor is prompted for a phone number along with chat details. The submission initiates a chat request and an immediate phone call which is routed to the first available phone operator.',
	'chat' => 'Chat',
	'callrequest' => 'Call (Click to Call)',
	'taggenerator' => 'Tag Generator',
	'manage' => 'Manage',
	'next' => 'Next',
	'livechat' => 'Live Chat',
	'tabchats' => 'Live Chat',
	'tag_htmlbutton' => 'HTML Button',
	'desc_tag_htmlbutton' => 'This tag will print a "live support/call us: online/offline" status image (and hyperlink) depending upon whether or not staff members are online and available to chat or take a call.<BR /><BR />If staff members are available, a window will be displayed when a visitor clicks the image. If staff members are not available, the visitor will be prompted to send a message.<BR /><BR />By adding this HTML code to a web page, you will also be able to track that page\'s visitors through ' . SWIFT_PRODUCT . '.',
	'tag_sitebadge' => 'Site Badge',
	'desc_tag_sitebadge' => 'This tag will place a floating, vertical \'badge\' image (on the left-hand side of your site) for initiating live chat/call. If staff members are available, a window will be displayed when a visitor clicks the image. If staff members are not available the visitor will be prompted to send a message.<BR /><BR />By adding this HTML code to a web page, you will also be able to track that page\'s visitors through ' . SWIFT_PRODUCT . '.',
	'tag_textlink' => 'Text Link',
	'desc_tag_textlink' => 'This tag will print a text link.<BR /><BR />If staff members are available, a live chat/call request window will be displayed when a visitor clicks the image. If staff members are not available, the visitor will be prompted to send a message.<BR /><BR />NOTE: By using this tag, you will be unable to track that page\'s visitors through ' . SWIFT_PRODUCT . '.',
	'tag_monitoring' => 'Monitoring',
	'desc_tag_monitoring' => 'This tag will place just the visitor tracking code onto your web page.<BR /><BR />NOTE: By adding this HTML code to a web page, you will only be able to track that page\'s visitors, they will not see any visible link/image to initiate a live chat.',
	'generate' => 'Generate',
	'tabchatsextended' => 'Live Chat &raquo; %s',
	'filteroptions' => 'Filter Options',
	'filterbydepartment' => 'Filter by Department',
	'desc_filterbydepartment' => 'If specific department(s) are chosen here, ' . SWIFT_PRODUCT . ' will only use the selected department(s) for determining the online/offline status of staff users. Client users will also only be able to choose the selected department(s) when requesting a chat.<BR /><BR /><b>NOTE:</b> This means that if all the staff users in the selected department(s) are offline, even if other staff users are available, the client user will be told that live support is unavailable.',
	'routetochatskill' => 'Route to Chat Skill',
	'desc_routetochatskill' => SWIFT_PRODUCT . ' will give preference to online operators with the selected chat skill(s). If no operators are online with the selected skills, the chat will be routed using the standard method.',
	'generaloptions' => 'General Options',
	'usesecurelinks' => 'Use Secure Links (https://)',
	'desc_usesecurelinks' => 'If enabled, the chat javascript links will be changed to their https equivalent. You need to ensure that the helpdesk URL is set to "https" in settings for this option to work.',
	'notselected' => '- Not Selected -',
	'usedefault' => '- Use Default -',
	'tagtemplategroup' => 'Template Group',
	'desc_tagtemplategroup' => 'If selected, ' . SWIFT_PRODUCT . ' will load all the required templates from the selected template group.',
	'skipuserdetails' => 'Skip User Details',
	'desc_skipuserdetails' => 'If enabled, the user will be immediately redirected to the chat startup and no additional details like full name, email or subject will be requested.',
	'nojavascript' => 'No JavaScript?',
	'desc_nojavascript' => 'If enabled, ' . SWIFT_PRODUCT . ' will generate a HTML tag which includes no JavaScript.<BR /><font color="red"><b>IMPORTANT NOTE: </b></font>This will disable the entire visitor tracking functions and is recommended only for email signatures, auction pages or areas where limited HTML code is allowed.',
	'defaulttextcontents' => 'Live Chat',
	'defaulttextcontentscall' => 'Click to Call',
	'textcontents' => 'Link Contents',
	'desc_textcontents' => '',
	'insertvariable' => 'Insert Variable',
	'insertalert' => 'Insert Alert',
	'tabcustomize' => 'Customize',
	'customonlineimage' => 'Custom Online Image',
	'desc_customonlineimage' => '',
	'customofflineimage' => 'Custom Offline Image',
	'desc_customofflineimage' => '',
	'customawayimage' => 'Custom Away Image',
	'desc_customawayimage' => '',
	'custombackshortlyimage' => 'Custom Back Shortly Image',
	'desc_custombackshortlyimage' => '',
	'badgewhite' => 'White',
	'badgeblack' => 'Black',
	'sitebadgecolor' => 'Text Color',
	'desc_sitebadgecolor' => 'Select the site badge text color',
	'sitebadgelanguage' => 'Badge Language',
	'desc_sitebadgelanguage' => 'Select the language of the text that is displayed on the badge.',
	'title_tagcode' => 'Tag Code Generated',
	'desc_tagcode' => 'Place the keyboard focus in the field below, then copy the contents to the clipboard and paste it into your web site\'s HTML source.',
	'tagcode' => 'Tag Code',
	'tagcodeheader' => 'BEGIN ' . SWIFT_PRODUCT . ' TAG CODE - DO NOT EDIT!',
	'tagcodefooter' => 'END ' . SWIFT_PRODUCT . ' TAG CODE - DO NOT EDIT!',
	'jswarning' => 'JAVASCRIPT IS NOT ENABLED',
	'tagpoweredlivechat' => 'Live Chat Software',
	'tagpoweredby' => 'by',
	'badgelivechat' => 'live chat',
	'badgelivehelp' => 'live help',
	'badgecallus' => 'call us',
	'badgecallme' => 'call me',
	'sitebadgetext' => 'Badge Text',
	'desc_sitebadgetext' => 'Select the text that should appear in the site badge.',
	'sitebadgeonlinecolor' => 'Background Color: Online',
	'desc_sitebadgeonlinecolor' => '',
	'sitebadgeofflinecolor' => 'Background Color: Offline',
	'desc_sitebadgeofflinecolor' => '',
	'sitebadgeawaycolor' => 'Background Color: Away',
	'desc_sitebadgeawaycolor' => '',
	'sitebadgebackshortlycolor' => 'Background Color: Back Shortly',
	'titleinvalidfileext' => 'Invalid Image File Extension',
	'msginvalidfileext' => 'The button image file has an invalid extension. Allowed extensions are: gif, jpeg, jpg, png',

	/*
	 * ###############################################
	 * BADGE LANGUAGE LOCALES
	 * ###############################################
	 */
	'badgeenglish' => 'English',
);
?>