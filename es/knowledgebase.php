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
	'knowledgebase' => 'Knowledgebase',
	'managecategories' => 'Manage Categories',
	'managequestions' => 'Manage Articles',
	'insertcategory' => 'Insert Category',
	'insertquestion' => 'Insert Article',
	'importexport' => 'Import/Export',
	'categories' => 'Categories',
	'viewarticle' => 'View Article',

	// Manage Categories
	'addquestion' => 'Add Article',
	'addsubcat' => 'Add Sub Category',
	'categorylist' => 'Category List',
	'filter' => 'Filter',
	'viewarticles' => 'View Articles',
	'kbparentcat' => 'Parent Category',
	'catdeleteconfirm' => 'Deleted (%s) knowledgebase categories',
	'kbcatdelconfirmmsg' => 'Are you sure you wish to delete this knowledgebase category? Deleting a category will result in the deletion of ALL subcategories and their articles.  This action is irreversible!',
	'filtertgroupid' => 'Template Groups',
	'desc_filtertgroupid' => 'Select the template group for filtering the category list. Only the categories under the specified template group will be displayed.',

	// Insert Category
	'catdetails' => 'Category Details',
	'cattitle' => 'Category Title',
	'desc_cattitle' => 'Knowledgebase category title; (<i>e.g. "Presales Questions" or "System FAQs"</i>).',
	'catdisplayorder' => 'Display Order',
	'desc_catdisplayorder' => 'The order in which this category will be displayed amongst other knowledgebase categories (ascending).',
	'parentcategory' => 'Parent Category',
	'desc_parentcategory' => 'The parent is the category under which the new knowledgebase category will be created.',
	'cattype' => 'Category Type',
	'desc_cattype' => '<i>Public:</i> Visible to both users of the client support interface and staff users of the staff control panel.<br><br><i>Private:</i> Visible only to staff users via the staff control panel.',
	'templategroups' => 'Template Group(s)',
	'desc_templategroups' => 'The template group(s) under which this knowledgebase category will be visible.',
	'kbcatinsertconfirm' => 'Knowledgebase category "%s" inserted successfully',

	// Edit Category
	'updatecategory' => 'Update Category',
	'invalidkbcat' => 'Invalid knowledgebase category',
	'editcategory' => 'Edit Category',
	'kbcatupdateconfirm' => 'Knowledgebase category "%s" updated successfully',
	'errornoparent' => 'ERROR: Invalid parent category',

	// Manage Articles
	'kbsubject' => 'Subject',
	'kbcontents' => 'Contents',
	'kbdate' => 'Date',
	'kbviews' => 'Views',
	'kbcomments' => 'Comments',
	'kbedited' => 'Edited',
	'articlelist' => 'Article List',
	'legend' => 'Legend: ',
	'hasattachments' => 'Has Attachments',
	'hascomments' => 'Has Comments',
	'published' => 'Published',
	'draft' => 'Draft',
	'kbarticlestatus' => 'Article Status',
	'desc_kbarticlestatus' => '<i>Published:<i> Visible to both users of the client support interface and staff users.<br><br><i>Private:</i> Visible only to staff users via the staff control panel.<br><br><i>Draft:</i> Marked as a draft article and visible only to staff users via the staff control panel.',
	'kbrating' => 'Rating',
	'kbarticledelconfirmmsg' => 'Are you sure you wish to delete this knowledgebase article?',
	'kbfilter' => 'Filter: ',
	'kbfiltercat' => 'Filter By Category',
	'desc_kbfiltercat' => 'To list articles from a specific category only, select the category.',

	// Insert Question
	'questiondetails' => 'Article Details',
	'questionsubject' => 'Subject',
	'desc_questionsubject' => 'Enter a subject for the article.',
	'qdisplayorder' => 'Display Order',
	'desc_qdisplayorder' => 'The articles will be displayed according to the order (ascending) specified here.',
	'qparentcategory' => 'Parent Category',
	'desc_qparentcategory' => 'This is the category that the article will be inserted into.',
	'insertquestion' => 'Insert Article',
	'selectlink' => 'ERROR: You need to select at least one category',
	'kbarticleinsertconfirm' => 'Knowledgebase article "%s" inserted successfully',
	'dlarticledelconfirm' => 'Knowledgebase article deleted successfully',
	'dlarticlesdelconfirm' => 'Knowledgebase articles deleted successfully',

	// Edit Question
	'updatequestion' => 'Update Article',
	'editquestion' => 'Edit Article',
	'invalidkbarticle' => 'Invalid knowledgebase article',
	'kbarticleupdateconfirm' => 'Knowledgebase article "%s" updated successfully',
	'articleoptions' => 'Article Options',
	'deletearticle' => 'Delete Article',
	'exportpdf' => 'Export PDF',

	// Import/Export
	'kbexportcat' => 'Export Categories',
	'desc_kbexportcat' => '',
	'exportxml' => 'Export',
	'export' => 'Export',
	'xmlcatstart' => '#### START CATEGORY DATA ####',
	'xmlcatend' => '#### END CATEGORY DATA ####',
	'xmlarticlestart' => '#### START ARTICLE DATA ####',
	'xmlarticleend' => '#### END ARTICLE DATA ####',
	'xmllinkstart' => '#### START LINK DATA ####',
	'xmllinkend' => '#### END LINK DATA ####',
	'exportparentcat' => 'Parent Category (Only Articles)',
	'import' => 'Import',
	'importknowledgebase' => 'Import Knowledgebase',
	'importxml' => 'Import',
	'kbfile' => 'Knowledgebase XML File',
	'desc_kbfile' => 'Please select a knowledgebase XML file to import data from.',
	'importfileerror' => 'ERROR: Import failed as the file was not successfully uploaded to the server',
	'importconfirm' => 'Knowledgebase data imported successfully',

	// Comments
	'comments' => 'Comments',
	'solution' => 'Article',
	'closewindow' => 'X Close Window',

	// Reports
	'rpopulararticles' => 'Popular Articles',
	'commentreport' => 'Comment Report',
	'ratingreport' => 'Rating Report',
	'filcategory' => 'Category:',
	'filgroup' => 'Group:',
	'fildate' => 'Date:',
	'filnogroup' => '-- Select Group --',
	'filnocat' => '-- Select Category --',
	'filto' => 'to',
);
?>