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
	/*
	 * ###############################################
	 * BEGIN V4 LOCALES
	 * ###############################################
	 */
	'reports' => 'Reports',
	'managereports' => 'Manage Reports',
	'reporttabular' => 'Tabular Report',
	'reportmatrix' => 'Matrix Report',
	'reportsummary' => 'Summary Report',
	'fields' => 'Fields',
	'tabfields' => 'Fields',
	'tabcriteria' => 'Criteria',
	'tabgroups' => 'Groups',
	'tabsortfields' => 'Sort Fields',
	'tabfinish' => 'Finish',
	'groups' => 'Groups',
	'sortfields' => 'Sort Fields',
	'insertcriteria' => 'Insert Criteria',
	'matchtype' => 'Search Criteria Options',
	'desc_matchtype' => 'Select the grouping method for the search criteria fields.',
	'smatchall' => 'Match All (AND)',
	'smatchany' => 'Match Any (OR)',
	'next' => 'Next',
	'finish' => 'Finish',
	'groupfield1' => '1st Group Field',
	'desc_groupfield1' => 'The first field based on which the report will be grouped',
	'groupfield2' => '2nd Group Field',
	'desc_groupfield2' => 'The second field based on which the report will be grouped',
	'groupfield3' => '3rd Group Field',
	'desc_groupfield3' => 'The third field based on which the report will be grouped',
	'sortfield1' => '1st Sort Field',
	'desc_sortfield1' => 'The first field based on which the report will be sorted',
	'sortfield2' => '2nd Sort Field',
	'desc_sortfield2' => 'The second field based on which the report will be sorted',
	'sortfield3' => '3rd Sort Field',
	'desc_sortfield3' => 'The third field based on which the report will be sorted',
	'sortfieldorder1' => 'Sort Order',
	'desc_sortfieldorder1' => 'Sort Order for 1st field',
	'sortfieldorder2' => 'Sort Order',
	'desc_sortfieldorder2' => 'Sort Order for 2nd field',
	'sortfieldorder3' => 'Sort Order',
	'desc_sortfieldorder3' => 'Sort Order for 3rd field',
	'titleupdatereport' => 'Successfully Updated Report "%s"',
	'msgupdatereport' => '<b>Report Title</b>: %s <br /><b>Report Type</b>: %s',
	'titleinsertreport' => 'Successfully Inserted Report "%s"',
	'msginsertreport' => '<b>Report Title</b>: %s <br /><b>Report Type</b>: %s',
	'reportcreator' => 'Created By',
	'createdon' => 'Created On',
	'lastaccessed' => 'Last Accessed',

	'functionfield1' => '1st Function Field',
	'desc_functionfield1' => 'The first field on which functions can be based',
	'functionfield2' => '2nd Function Field',
	'desc_functionfield2' => 'The second field on which functions can be based',
	'functionfield3' => '3rd Function Field',
	'desc_functionfield3' => 'The third field on which functions can be based',

	'sortorderasc' => 'Ascending',
	'sortorderdesc' => 'Descending',
	'selectfields' => 'Select Fields to be displayed',
	'desc_selectfields' => 'Select the Fields to be displayed in the report',
	'selectone' => '--Select One--',
	'selectxfield' => 'Field for columns',
	'selectyfield' => 'Field for rows',
	'activitydeletereport' => 'Report deleted',

	'insert_finish' => 'You have entered all the information required to generate the report. Please click on Finish to complete the wizard',

	'reportresult' => 'Report Result',
	'print' => 'Print Report',

	'supportcenter' => 'Support Center:',

	'reportmatrixsummary' => 'Summary',

	'graph' => 'Display Chart',

	'informationbox' => 'Information',
	'infobreporttitle' => 'REPORT TITLE',
	'infobstafffullname' => 'CREATOR',
	'infobcreatedate' => 'CREATED ON',
	'infoblastaccessed' => 'LAST ACCESSED',

	'daterangesuffix' => '<range>',

	'lastpage' => 'Previous Page',
	'nextpage' => 'Next Page',



	/*
	 * ###############################################
	 * END V4 LOCALES
	 * ###############################################
	 */

	// ======= MANAGE REPORTS =======
	'reportid' => 'Report ID',
	'reporttitle' => 'Report Title',
	'desc_reporttitle' => 'The Report Title',
	'reportbasetablename' => 'Base Table Name',
	'desc_reportbasetablename' => 'The table this report is based on',
	'reporttype' => 'Report Type',
	'desc_reporttype' => 'Type of the report viz. Tabular, Summary or Matrix',
	'reportbasetablename' => 'Base Table Name',
	'desc_reportbasetablename' => 'Table the report is based on',


	// ======= INSERT REPORT =======


	// ======= EDIT REPORT =======
	'editreport' => 'Edit Report',
	'update' => 'Update',
	'runreport' => 'Run Report',


	// ======= AJAX =======

	// ======= IMPORT/EXPORT =======
	'export' => 'Export',
	'import' => 'Import',
	'importexport' => 'Import/Export',
	'tabimport' => 'Import',
	'tabexport' => 'Export',
	'expreport' => 'Export Report',
	'desc_expreport' => 'Export the report',
	'reportfile' => 'Report File',
	'desc_reportfile' => 'XML File containing the reports',
	'activityexportedreport' => 'Exported Report: %s',
	'importfailed' => 'Failed to import the Report',
	'msgimportfailed' => SWIFT_PRODUCT . ' failed to import the Report. Please check the integrity of the file.',
	'titlefieldempty' => 'Invalid Data, Unable to proceed.',
	'msgtitlefieldempty' => 'One of the required field(s) is empty or contains invalid data. Please make sure that you have entered all the required information.',
	'titleimportreport' => 'Successfully imported report "%s"',
	'msgimportreport' => '<b>Report Title</b>: %s <br /><b>Report Type</b>: %s <br /><b>Base Table Name</b>: %s',
	'noreports' => 'No reports available',
	'desc_noreports' => 'No reports have been created/imported yet',

	//======== FUNCTIONS ========
	'functions' => 'Functions',
	'FUNCTION_SUM' => 'Sum',
	'FUNCTION_MIN' => 'Minimum',
	'FUNCTION_MAX' => 'Maximum',
	'FUNCTION_COUNT' => 'Count',
	'FUNCTION_AVG' => 'Average',

	//======== ERRORS ========

	'error_generaltab_empty' => 'Required field missing',
	'desc_error_generaltab_empty' => 'One of the required fields is empty or contains an invalid value',
	'error_fieldstab_empty' => 'Required field missing',
	'desc_error_fieldstab_empty' => 'No fields are selected',
	'error_fieldstab' => 'Required field missing',
	'desc_error_fieldstab' => 'No fields are selected',
	'error_insert' => 'An error occured while Inserting',
	'desc_error_insert' => 'Invalid was supplied to one of the fields. Insertion of data failed',

	//======== TICKET STATISTICS ========

	'ticketstatistics' => 'Ticket Statistics',
	'ticketstatisticsgenerate' => 'Ticket Statistics Generation Form',
	'ticketstatisticscriteria' => 'Criteria',
	'timeperiod' => 'Time Period',
	'all' => 'All',
	'selectdepartments' => 'Select Departments',
	'selectstatus' => 'Select Statuses',
	'selectpriority' => 'Select Priority',
	'last24hours' => 'Last 24 Hours',
	'last7days' => 'Last Week',
	'last30days' => 'Last Month',
	'last12months' => 'Last Year',

);

?>