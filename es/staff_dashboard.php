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
	'dashboard' => 'Dashboard',
	'preferences' => 'Preferences',
	'privatemessages' => 'Private Messages',

	// ======= BEGIN v3 IMPORT =======
	'timezonephp' => 'Time Zone',
	'desc_timezonephp' => 'Select the time zone that you reside in.  If you choose a time zone here, it will override the default time zone.',
	'defaulttimezone' => '-- Use the default time zone --',
	// ======= END v3 IMPORT =======

	// Preferences
	'staffdetails' => 'Staff Details',
	'requiredfields' => 'Required Fields',
	'staffgroup' => 'Team',
	'updatedetails' => 'Update Details',
	'stafffullname' => 'Full Name',
	'desc_stafffullname' => 'Enter your full name. This will be publicly visible to your users and also used as the from name in all outgoing emails.',
	'changepassword' => 'Change Password',
	'staffpassword' => 'Reset Password',
	'desc_staffpassword' => 'If you wish to change your current password, enter the new password you wish to use here.',
	'staffpasswordconfirm' => 'Password (Confirm)',
	'desc_staffpasswordconfirm' => 'Re-enter your new password.',
	'staffemail' => 'Email',
	'optionalfields' => 'Optional Fields',
	'staffmobilenumber' => 'Mobile Number',
	'desc_staffmobilenumber' => 'If you wish to receive SMS alerts, enter your mobile telephone number.<br/><i>Note: Enter only your telephone number without spaces, dashes or other symbols.<br/>Example: \'18005551212\'</i> ',
	'staffsignature' => 'Signature',
	'desc_staffsignature' => 'Enter the signature that you would like to be appended to all outoging emails.<br/><i>Example:<br/>\'John Smith<br/>My Company<br/>http://mycompany.com/\'</i>',
	'timezoneoffset' => 'Time Zone',
	'desc_timezoneoffset' => 'Select your Time Zone. If set, this time zone will override the default setting.',
	'enabledst' => 'Enable Daylight Savings',
	'desc_enabledst' => 'Select whether or not you wish to enable Daylight Savings Time.',
	'passworddontmatch' => 'ERROR: Passwords do not match',
	'informationupdated' => 'Information successfully updated',
	'enablepmalerts' => 'Enable Private Message Email Alerts',
	'enablepmjsalerts' => 'Enable Private Message JavaScript Alerts',
	'desc_enablepmalerts' => 'Select whether or not you wish to receive email alerts when a private message is sent to you.',
	'desc_enablepmjsalerts' => 'Select whether or not you wish to be prompted by an on-screen message when a private message is sent to you.',
	'generalsettings' => 'General Settings',
	'desc_staffemail' => 'Enter your personal email address here. All alerts assigned to your account will be sent to this address.'.IIF(SWIFT_Module::IsRegistered(MODULE_PARSER), ' Make sure that this address has not been associated with an email queue.  If there is an already existing email queue with the same address, it may create bounce-back loops, causing performance problems.'),

	// Time Zones
	'time_99' => '-- Default Time Zone Setting --',
	'time_-12' => 'GMT -12:00 hours : Enitwetok, Kwajalien',
	'time_-11' => 'GMT -11:00 hours : Midway Island, Samoa',
	'time_-10' => 'GMT -10:00 hours : Hawaii',
	'time_-9' => 'GMT -9:00 hours : Alaska',
	'time_-8' => 'GMT -8:00 hours : Pacific Time (US & Canada)',
	'time_-7' => 'GMT -7:00 hours : Mountain Time (US & Canada)',
	'time_-6' => 'GMT -6:00 hours : Central Time (US & Canada), Mexico City',
	'time_-5' => 'GMT -5:00 hours : Eastern Time (US & Canada), Bogota, Lima, Quito',
	'time_-4' => 'GMT -4:00 hours : Atlantic Time (Canada), Caracas, La Paz',
	'time_-3.5' => 'GMT -3:30 hours : Newfoundland',
	'time_-3' => 'GMT -3:00 hours : Brazil, Buenos Aires, Georgetown, Falkland Is.',
	'time_-2' => 'GMT -2:00 hours : Mid-Atlantic, Ascention Is., St Helena',
	'time_-1' => 'GMT -1:00 hours : Azores, Cape Verde Islands',
	'time_0' => 'GMT : Casablanca, Dublin, Edinburgh, London, Lisbon, Monrovia',
	'time_1' => 'GMT +1:00 hours : Berlin, Brussels, Copenhagen, Madrid, Paris, Rome',
	'time_2' => 'GMT +2:00 hours : Kaliningrad, South Africa, Warsaw',
	'time_3' => 'GMT +3:00 hours : Baghdad, Riyadh, Moscow, Nairobi',
	'time_3.5' => 'GMT +3:30 hours : Tehran',
	'time_4' => 'GMT +4:00 hours : Abu Dhabi, Baku, Muscat, Tbilisi',
	'time_4.5' => 'GMT +4:30 hours : Kabul',
	'time_5' => 'GMT +5:00 hours : Ekaterinburg, Islamabad, Karachi, Tashkent',
	'time_5.5' => 'GMT +5:30 hours : Bombay, Calcutta, Madras, New Delhi',
	'time_6' => 'GMT +6:00 hours : Almaty, Colomba, Dhaka',
	'time_7' => 'GMT +7:00 hours : Bangkok, Hanoi, Jakarta',
	'time_8' => 'GMT +8:00 hours : Beijing, Hong Kong, Perth, Singapore, Taipei',
	'time_9' => 'GMT +9:00 hours : Osaka, Sapporo, Seoul, Tokyo, Yakutsk',
	'time_9.5' => 'GMT +9:30 hours : Adelaide, Darwin',
	'time_10' => 'GMT +10:00 hours : Melbourne, Papua New Guinea, Sydney, Vladivostok',
	'time_11' => 'GMT +11:00 hours : Magadan, New Caledonia, Solomon Islands',
	'time_12' => 'GMT +12:00 hours : Auckland, Wellington, Fiji, Marshall Island',


	// Work Schedule
	'workschedule' => 'Work Schedule',
	'closed' => 'Not Working',
	'invalidschedule' => 'Invalid staff schedule specified',
	'hourrangeerror' => 'ERROR: An interval for one of the days is incorrect',
	'workscheduleconfirm' => 'Work Schedule updated successfully',
);
?>