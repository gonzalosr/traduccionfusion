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
	'downloads' => 'Downloads',

	'categories' => 'Categories',

	// Import from v3
	'errorurlregex' => 'ERROR: You have entered an invalid URL for the external file. Please enter a URL in the form "http://domain.com/file"',

	// Insert Category
	'selectonetgroup' => 'ERROR: At least one template group must be specified',
	'insertcategory' => 'Insert Category',
	'dlcatdetails' => 'Category Details',
	'dlcattitle' => 'Category Title',
	'desc_dlcattitle' => 'A title for the downloads category.',
	'dlcatdisporder' => 'Display Order',
	'desc_dlcatdisporder' => 'Categories will be ordered by the display order specified here (ascending).',
	'usergroups' => 'User Groups',
	'desc_usergroups' => '',
	'insertdlcat' => 'Insert Category',
	'updatedlcat' => 'Update Category',
	'parentcategory' => 'Parent Category',
	'desc_parentcategory' => 'The parent category under which the new category will be created.',
	'cattype' => 'Category Type',
	'desc_cattype' => '<i>Public:</i> Visible to both staff users and client users via the client support interface.<br><br><i>Private:</i> Visible only to staff users via the staff control panel.',
	'maincategory' => 'Main Category',
	'downloadscat' => '(Downloads)',
	'dlinsertconfirm' => 'Category "%s" inserted successfully',
	'templategroups' => 'Template Groups',
	'desc_templategroups' => 'Categories can be assigned to specific template groups. Doing so makes this category visible only within the specified groups.',
	'filtertgroupid' =>'Template Group',
	'desc_filtertgroupid' => 'Categories can be filtered by template group to make them easier to manage.',

	// Manage Categories
	'managecategories' => 'Manage Categories',
	'categorylist' => 'Category List',
	'filter' => 'Filter',
	'addsubcat' => 'Add Subcategory',
	'addfile' => 'Add File',
	'dlcatdelconfirmmsg' => 'Are you sure you wish to delete this category? Deleting a category will result in the permanent deletion of all subcategories and contained download items.  This action is irreversible!',
	'dlcatdeleteconfirm' => 'Deleted download category "%s"',

	// Manage Files
	'managefiles' => 'Manage Files',
	'dlitemlist' => 'File List',
	'passprotected' => 'Password Protected',
	'legend' => 'Legend: ',
	'filelinkact' => 'Link',
	'dlitemsdelconfirm' => 'Download item deleted successfully',
	'dlitemdelconfirm' => 'Dowload item deleted successfully',
	'dlitemdelconfirmmsg' => 'Are you sure you wish to delete this download item? Once deleted, both the file and the database entry will be removed.',

	// Insert File
	'insertfile' => 'Insert File',
	'dlitemtitle' => 'Download Title',
	'desc_dlitemtitle' => 'Download name or title.',
	'dlitemdesc' => 'Download Description',
	'desc_dlitemdesc' => 'A description of the download item.',
	'dlitemfilename' => 'Download Name',
	'dlitemfilesize' => 'Download Size',
	'dltotaldownloads' => 'Total Downloads',
	'dlfiledetails' => 'Download Details',
	'dlfiledisplayorder' => 'Display Order',
	'desc_dlfiledisplayorder' => 'Downloads will be ordered according to the display order (ascending) specified here.',
	'insertfile' => 'Insert File',
	'dlitemfile' => 'Upload File',
	'desc_dlitemfile' => 'Browse and select the file to upload to the server.',
	'passwordprotection' => 'Password Protection',
	'enablepassword' => 'Enable Password Protection',
	'desc_enablepassword' => 'If password protected, the client user will be required to enter a password before being able to download the file.',
	'password' => 'Password',
	'desc_password' => 'Enter the password (see <i>Enable Password Protection</i> above).',
	'passwordconfirm' => 'Confirm Password',
	'desc_passwordconfirm' => 'Confirm the password.',
	'errorfilesize' => 'ERROR: This file is too large. The <b>upload_max_filesize set</b> in the php.ini (PHP configuration file) is set lower than is needed.',
	'errorpartialupload' => 'ERROR: The file was not properly uploaded',
	'errornofile' => 'ERROR: No file was uploaded',
	'filetype' => 'File Type',
	'dlitemfilelink' => 'OR link to an existing file',
	'desc_dlitemfilelink' => 'Instead of uploading a file you can link to an externally hosted file.',
	'passworddontmatch' => 'ERROR: Passwords do not match',
	'dliteminsertconfirm' => 'Download item "%s" inserted successfully',

	// Update File
	'updatefile' => 'Update Download',
	'editfile' => 'Edit Download',
	'invaliddlitem' => 'Invalid download item',
	'dlitemupdateconfirm' => 'Download item "%s" updated successfully',
	'resetpassword' => 'Reset Password',

	// Edit Category
	'invaliddlcat' => 'Invalid download category',
	'editcategory' => 'Edit Category',
	'dlupdateconfirm' => 'Download category "%s" updated successfully',

	// Comments
	'comments' => 'Comments',

	// Reports
	'populardownloads' => 'Popular Downloads',
	'downloadno' => 'Downloads',
	'filetitle' => 'Download Title',
	'chartfiles' => 'f i l e s',
);
?>