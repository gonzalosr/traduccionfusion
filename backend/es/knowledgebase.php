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
	'kbarticledelconfirmmsg' => 'Está seguro de que desea eliminar este artículo de la base de conocimento?',
	'kbfilter' => 'Filtrar: ',
	'kbfiltercat' => 'Filtrar por categoría',
	'desc_kbfiltercat' => 'Para mostrar únicamente los artículos de una categoría, selecciónela.',

	// Insert Question
	'questiondetails' => 'Detalles del artículo',
	'questionsubject' => 'Asunto',
	'desc_questionsubject' => 'Introduzca un asunto para el artículo.',
	'qdisplayorder' => 'Orden de visualización',
	'desc_qdisplayorder' => 'Los artículos se mostrarán según el orden (ascendente) especificado aquí.',
	'qparentcategory' => 'Categoría superior',
	'desc_qparentcategory' => 'Esta es la categoría en la que se insertará el artículo.',
	'insertquestion' => 'Insertar artículo',
	'selectlink' => 'ERROR: Es necesario seleccionar al menos una categoría',
	'kbarticleinsertconfirm' => 'Artículo de base de conocimiento "%s" insertado correctamente',
	'dlarticledelconfirm' => 'Artículo de base de conocimiento eliminado correctamente',
	'dlarticlesdelconfirm' => 'Artículos de la base de conocimiento eliminados correctamente',

	// Edit Question
	'updatequestion' => 'Actualizar artículo',
	'editquestion' => 'Editar artículo',
	'invalidkbarticle' => 'Artículo de base de conocimiento no válido',
	'kbarticleupdateconfirm' => 'Artículo de base de conocimiento "%s" actualizado correctamente',
	'articleoptions' => 'Opciones del artículo',
	'deletearticle' => 'Eliminar artículo',
	'exportpdf' => 'Exportar a PDF',

	// Import/Export
	'kbexportcat' => 'Exportar categorías',
	'desc_kbexportcat' => '',
	'exportxml' => 'Exportar',
	'export' => 'Exportar',
	'xmlcatstart' => '#### START CATEGORY DATA ####',
	'xmlcatend' => '#### END CATEGORY DATA ####',
	'xmlarticlestart' => '#### START ARTICLE DATA ####',
	'xmlarticleend' => '#### END ARTICLE DATA ####',
	'xmllinkstart' => '#### START LINK DATA ####',
	'xmllinkend' => '#### END LINK DATA ####',
	'exportparentcat' => 'Categoría superior (Sólo artículos)',
	'import' => 'Importar',
	'importbase de conocimiento' => 'Importar base de conocimiento',
	'importxml' => 'Importar',
	'kbfile' => 'Archivo XML de base de conocimiento',
	'desc_kbfile' => 'Por favor, seleccione el archivo XML de base de conocimiento desde el que se importarán los datos.',
	'importfileerror' => 'ERROR: La importación ha fallado porque el archivo no se ha podido subir al servidor',
	'importconfirm' => 'Los datos de la base de conocimiento se han importado correctamente',

	// Comments
	'comments' => 'Comentarios',
	'solution' => 'Artículo',
	'closewindow' => 'X Cerrar ventana',

	// Reports
	'rpopulararticles' => 'Artículos más leídos',
	'commentreport' => 'Informe de comentarios',
	'ratingreport' => 'Informe de valoraciones',
	'filcategory' => 'Categoría:',
	'filgroup' => 'Grupo:',
	'fildate' => 'Fecha:',
	'filnogroup' => '-- Seleccionar grupo --',
	'filnocat' => '-- Seleccionar categoría --',
	'filto' => 'para',
);
?>