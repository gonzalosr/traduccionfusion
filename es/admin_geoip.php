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
	'geoip' => 'GeoIP',
	'completed' => 'Completed',
	'maintenance' => 'Maintenance',
	'desc_maintenance' => '',
	'tabcitylocations' => 'City (Locations)',
	'tabcityblocks' => 'City (Blocks)',
	'generalinformation' => 'General Information',
	'indexsettings' => 'Index Settings',
	'rebuild' => 'Rebuild',
	'taborganization' => 'Organization',
	'tabisp' => 'ISP',
	'tabnetspeed' => 'Netspeed',
	'geoiploadingalert' => 'Indexing in progress. Please do not move away from this page, or indexing will be cancelled.',
	'entriesperpass' => 'Number of Entries to process per pass',
	'desc_entriesperpass' => 'Specify the number of Entries to process in one pass. '. SWIFT_PRODUCT.' will iterate through all the entries one at a time, then rebuild the index for the loaded entries. A higher number requires a more powerful server. If you receive an error during process, try using a lower number.',
	'passnumber' => 'Number of Pass in one refresh',
	'desc_passnumber' => 'Specify the number of pass to process in a single refresh. A higher number requires a more powerful server.',
	'sizeprocessed' => 'Processed Size (KB)',
	'totalsize' => 'Total Size (KB)',
	'timeelapsed' => 'Time Elapsed',
	'timeremaining' => 'Time Remaining',
	'databaseinformation' => 'Database Information',
	'rebuildoptions' => 'Rebuild Options',
	'licensetype' => 'License Type:',
	'premium' => 'Premium (High Accuracy)',
	'lite' => 'Lite (Free: <b>Low Accuracy</b>)',
	'lastupdate' => 'Last Update:',
	'notavailable' => '- Not Available -',
	'titlenofilecitylocation' => 'City (Location) Database is Unavailable',
	'msgnofilecitylocation' => SWIFT_PRODUCT.' is unable to locate a valid GeoIP database for City (Locations). You can download the latest Lite (Free) or Premium (Paid) versions of the database from your Members Area to correct this error. Please refer to the product documentation for installation instructions.',
	'titlenofilecityblocks' => 'City (Blocks) Database is Unavailable',
	'msgnofilecityblocks' => SWIFT_PRODUCT.' is unable to locate a valid GeoIP database for City (Blocks). You can download the latest Lite (Free) or Premium (Paid) versions of the database from your Members Area to correct this error. Please refer to the product documentation for installation instructions.',
	'titlenofilenetspeed' => 'Netspeed Database is Unavailable',
	'msgnofilenetspeed' => SWIFT_PRODUCT.' is unable to locate a valid GeoIP database for Netspeed. You can download the latest Lite (Free) or Premium (Paid) versions of the database from your Members Area to correct this error. Please refer to the product documentation for installation instructions.',
	'titlenofileisp' => 'ISP Database is Unavailable',
	'msgnofileisp' => SWIFT_PRODUCT.' is unable to locate a valid GeoIP database for ISP. You can download the latest Lite (Free) or Premium (Paid) versions of the database from your Members Area to correct this error. Please refer to the product documentation for installation instructions.',
	'titlenofileorganization' => 'Organization Database is Unavailable',
	'msgnofileorganization' => SWIFT_PRODUCT.' is unable to locate a valid GeoIP database for Organization. You can download the latest Lite (Free) or Premium (Paid) versions of the database from your Members Area to correct this error. Please refer to the product documentation for installation instructions.',
	'titlenotbuiltcitylocations' => 'GeoIP City (Location) Database is not Indexed',
	'msgnotbuiltcitylocations' => SWIFT_PRODUCT .' has not indexed the GeoIP City (Location) database. GeoIP information will be inaccurate or unavailable till the database is completely indexed.',
	'titlenotbuiltcityblocks' => 'GeoIP City (Blocks) Database is not Indexed',
	'msgnotbuiltcityblocks' => SWIFT_PRODUCT .' has not indexed the GeoIP City (Blocks) database. GeoIP information will be inaccurate or unavailable till the database is completely indexed.',
	'titlenotbuiltisp' => 'GeoIP ISP Database is not Indexed',
	'msgnotbuiltisp' => SWIFT_PRODUCT .' has not indexed the GeoIP ISP database. GeoIP information will be inaccurate or unavailable till the database is completely indexed.',
	'titlenotbuiltnetspeed' => 'GeoIP Netspeed Database is not Indexed',
	'msgnotbuiltnetspeed' => SWIFT_PRODUCT .' has not indexed the GeoIP Netspeed database. GeoIP information will be inaccurate or unavailable till the database is completely indexed.',
	'titlenotbuiltorganization' => 'GeoIP Organization Database is not Indexed',
	'msgnotbuiltorganization' => SWIFT_PRODUCT .' has not indexed the GeoIP Organization database. GeoIP information will be inaccurate or unavailable till the database is completely indexed.',
	'titlenotbuiltgeoip' => 'GeoIP Database is not Indexed',
	'msgnotbuiltgeoip' => SWIFT_PRODUCT . ' has not indexed the following GeoIP database(s). GeoIP information will be inaccurate or unavailable till the database is completely indexed.',
	'titlenotuptodategeoip' => 'GeoIP Database is not Up-To Date',
	'msgnotuptodategeoip' => SWIFT_PRODUCT . ' does not have an up-to date index for the following GeoIP database(s). GeoIP information will be inaccurate or unavailable till the database is completely re-indexed.',
);
?>