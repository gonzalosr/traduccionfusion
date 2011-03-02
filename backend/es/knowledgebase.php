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
	'knowledgebase' => 'Base de conocimiento',
	'managecategories' => 'Administrar categorías',
	'managequestions' => 'Administrar artículos',
	'insertcategory' => 'Insertar categoría',
	'insertquestion' => 'Insertar artículo',
	'importexport' => 'Importar/Exportar',
	'categories' => 'Categorías',
	'viewarticle' => 'Ver artículo',

	// Manage Categories
	'addquestion' => 'Añadir artículo',
	'addsubcat' => 'Añadir subcategoría',
	'categorylist' => 'Lista de categorías',
	'filter' => 'Filtrar',
	'viewarticles' => 'Ver artículos',
	'kbparentcat' => 'Categoría superior',
	'catdeleteconfirm' => 'Eliminadas (%s) categorías de base de conocimiento',
	'kbcatdelconfirmmsg' => 'Está seguro de que desea eliminar esta categoría de base de conocimiento? Eliminar una categoría provocará el borrado definitivo de todas las subcategorías y artículos contenidos en ella. Esta acción es irreversible!',
	'filtertgroupid' => 'Grupos de plantillas',
	'desc_filtertgroupid' => 'Seleccione el grupo de plantillas para filtrar la lista de categorías, Sólo se mostrarán las categorías bajo el grupo de plantillas seleccionado.',

	// Insert Category
	'catdetails' => 'Detalles de categoría',
	'cattitle' => 'Nombre de categoría',
	'desc_cattitle' => 'Nombre de la categoría de base de conocimiento; (<i>p.ej. "Preguntas previas a la compra" o "Preguntas frecuentes sobre el sistema"</i>).',
	'catdisplayorder' => 'Orden de visualización',
	'desc_catdisplayorder' => 'El orden en el que se mostrará esta categoría entre las demás categorías (ascendente).',
	'parentcategory' => 'Categoría superior',
	'desc_parentcategory' => 'La categoría superior es aquella bajo la que se creará la nueva categoría.',
	'cattype' => 'Tipo de categoría',
	'desc_cattype' => '<i>Pública:</i> Visible para usuarios y operadores.<br><br><i>Privada:</i> Visible sólo para operadores a través de su panel de control.',
	'templategroups' => 'Grupos de plantillas',
	'desc_templategroups' => 'Los grupos de plantillas bajo las que se mostrará esta categoría de base de conocimiento.',
	'kbcatinsertconfirm' => 'La categoría "%s" de base de conocimiento se ha insertado correctamente',

	// Edit Category
	'updatecategory' => 'Actualizar categoría',
	'invalidkbcat' => 'Categoría de base de conocimiento no válida',
	'editcategory' => 'Editar categoría',
	'kbcatupdateconfirm' => 'Categoría de base de conocimiento "%s" actualizada correctamente',
	'errornoparent' => 'ERROR: Categoría superior no válida',

	// Manage Articles
	'kbsubject' => 'Asunto',
	'kbcontents' => 'Contenido',
	'kbdate' => 'Fecha',
	'kbviews' => 'Veces visto',
	'kbcomments' => 'Comentarios',
	'kbedited' => 'Editado',
	'articlelist' => 'Lista de artículos',
	'legend' => 'Leyenda: ',
	'hasattachments' => 'Tiene adjuntos',
	'hascomments' => 'Tiene comentarios',
	'published' => 'Publicado',
	'draft' => 'Borrador',
	'kbarticlestatus' => 'Estado del artículo',
	'desc_kbarticlestatus' => '<i>Publicado:<i>Visible para usuarios y operadores.<br><br><i>Privado:</i> Visible únicamente para los operadores mediante su panel de control.<br><br><i>Borrador:</i> Marcado como borrador y visible únicamente para los operadores mediante su panel de control.',
	'kbrating' => 'Valoración',
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