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
	'downloads' => 'Descargas',

	'categories' => 'Categorías',

	// Import from v3
	'errorurlregex' => 'ERROR: Ha introducido una URL no válida para el archivo externo. Por favor, introduzca una URL de este tipo: "http://dominio.com/ruta_al_archivo"',

	// Insert Category
	'selectonetgroup' => 'ERROR: Debe especificar al menos un grupo de plantillas',
	'insertcategory' => 'Insertar categoría',
	'dlcatdetails' => 'Detalles de categoría',
	'dlcattitle' => 'Nombre de la categoría',
	'desc_dlcattitle' => 'Nombre de la categoría de descargas.',
	'dlcatdisporder' => 'Orden de visualización',
	'desc_dlcatdisporder' => 'Las categorías se mostrarán según el orden de visualización especificado aquí (ascendente).',
	'usergroups' => 'Grupos de usuarios',
	'desc_usergroups' => '',
	'insertdlcat' => 'Insertar categoría',
	'updatedlcat' => 'Actualizar categoría',
	'parentcategory' => 'Categoría superior',
	'desc_parentcategory' => 'La categoría superior dentro de la que se creará la nueva categoría.',
	'cattype' => 'Tipo de categoría',
	'desc_cattype' => '<i>Pública:</i> Visible para operadores y usuarios a través del centro de soporte.<br><br><i>Privada:</i> Visible solo para operadores desde su panel de control.',
	'maincategory' => 'Categoría principal',
	'downloadscat' => '(Descargas)',
	'dlinsertconfirm' => 'La categoría "%s" se ha insertado correctamente',
	'templategroups' => 'Grupos de plantillas',
	'desc_templategroups' => 'Las categorías se pueden asignar a grupos de plantillas específicos. Eso hace que dichas categorías sean visibles sólo dentro de los grupos especificados.',
	'filtertgroupid' =>'Grupo de plantillas',
	'desc_filtertgroupid' => 'Es posible filtrar las categorías por grupo de plantillas para hacerlas más fáciles de administrar.',

	// Manage Categories
	'managecategories' => 'Administrar categorías',
	'categorylist' => 'Lista de categorías',
	'filter' => 'Filtrar',
	'addsubcat' => 'Añadir subcategoría',
	'addfile' => 'Añadir archivo',
	'dlcatdelconfirmmsg' => 'Está seguro de que desea eliminar esta categoría? Eliminar una categoría borrará permanentemente todas sus subcategorías y las descargas que contengan. Esta acción es irreversible!',
	'dlcatdeleteconfirm' => 'Se ha eliminado la categoría de descargas "%s"',

	// Manage Files
	'managefiles' => 'Administrar archivos',
	'dlitemlist' => 'Lista de archivos',
	'passprotected' => 'Protegido por contraseña',
	'legend' => 'Leyenda: ',
	'filelinkact' => 'Enlace',
	'dlitemsdelconfirm' => 'Descarga eliminada correctamente',
	'dlitemdelconfirm' => 'Descarga eliminada correctamente',
	'dlitemdelconfirmmsg' => 'Está seguro de que desea eliminar esta descarga? Una vez eliminada, se borrarán tanto el archivo como la entrada de la base de datos.',

	// Insert File
	'insertfile' => 'Insertar archivo',
	'dlitemtitle' => 'Título de la descarga',
	'desc_dlitemtitle' => 'Nombre o título de la descarga.',
	'dlitemdesc' => 'Descripción de la descarga',
	'desc_dlitemdesc' => 'Describa aquí el contenido de la descarga.',
	'dlitemfilename' => 'Nombre del archivo',
	'dlitemfilesize' => 'Tamaño del archivo',
	'dltotaldownloads' => 'Descargas totales',
	'dlfiledetails' => 'Detalles de la descarga',
	'dlfiledisplayorder' => 'Orden de visualización',
	'desc_dlfiledisplayorder' => 'Las descargas se ordenarán según el orden de visualización (ascendente) especificado aquí.',
	'insertfile' => 'Insertar archivo',
	'dlitemfile' => 'Subir archivo',
	'desc_dlitemfile' => 'Seleccione el archivo a subir al servidor.',
	'passwordprotection' => 'Protección por contraseña',
	'enablepassword' => 'Activar la proteción por contraseña',
	'desc_enablepassword' => 'Si está protegido por contraseña, el usuario tendrá que escribirla para poder descargar el archivo.',
	'password' => 'Contraseña',
	'desc_password' => 'Introduzca la contraseña (ver <i>Activar protección por contraseña</i> arriba).',
	'passwordconfirm' => 'Confirme la contraseña',
	'desc_passwordconfirm' => 'Confirme la contraseña.',
	'errorfilesize' => 'ERROR: Este archivo es demasiado grande. El valor <b>upload_max_filesize</b> establecido en el archivo de configuración de PHP php.ini es demasiado bajo.',
	'errorpartialupload' => 'ERROR: El archivo no ha subido correctamente',
	'errornofile' => 'ERROR: No se ha subido ningún archivo',
	'filetype' => 'Tipo de archivo',
	'dlitemfilelink' => 'O enlace a un archivo existente',
	'desc_dlitemfilelink' => 'En vez de subir un archivo puede enlazar a un archivo alojado en otro sitio.',
	'passworddontmatch' => 'ERROR: Las contraseñas no coinciden',
	'dliteminsertconfirm' => 'La descarga "%s" se ha insertado correctamente',

	// Update File
	'updatefile' => 'Actualizar descarga',
	'editfile' => 'Editar descarga',
	'invaliddlitem' => 'Descarga no válida',
	'dlitemupdateconfirm' => 'Descarga "%s" actualizada correctamente',
	'resetpassword' => 'Resetear contraseña',

	// Edit Category
	'invaliddlcat' => 'Categoría de descargas no válida',
	'editcategory' => 'Editar categoría',
	'dlupdateconfirm' => 'Categoría de descargas "%s" actualizada correctamente',

	// Comments
	'comments' => 'Comentarios',

	// Reports
	'populardownloads' => 'Descargas populares',
	'downloadno' => 'Descargas',
	'filetitle' => 'Título de la descarga',
	'chartfiles' => 'a r c h i v o s',
);
?>