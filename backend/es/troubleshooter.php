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
	'troubleshooter' => 'Solucionador',

	// Manage Categories
	'categories' => 'Categorías',
	'managecategories' => 'Administrar categorías',
	'desc_troubleshootercat' => '',
	'tscattitle' => 'Nombre de categoría',
	'desc_tscattitle' => '',
	'tscatviews' => 'Vistas',
	'desc_tscatviews' => 'El número de veces que se ha visto la categoría. Se incrementa automáticamente cuando un usuario pulsa sobre una categoría. El número puede sin embargo ser alterado según sus necesidades.',
	'tscatdisporder' => 'Orden de visualización',
	'desc_tscatdisporder' => 'Introduzca el orden de visualización de la categoría. Las categorías se ordenan de acuerdo con el orden de visualización, ascendente.',
	'tscatlist' => 'Lista de categorías',
	'tscatdesc' => 'Descripción',
	'desc_tscatdesc' => 'La descripción de la categoría es visible justo debajo del nombre de la categoría. Se recomienda que dscriba aquí la categoría. El texto de la descripción está limitado a 255 caracteres.',
	'steps' => 'Pasos',

	// Insert Category
	'insertcategory' => 'Insertar categoría',
	'tscatdetails' => 'Detalles de categoría',
	'templategroups' => 'Grupos de plantillas',
	'desc_templategroups' => 'Por favor seleccione los grupos de plantillas a los que se asignará esta categoría. La categoría sólo será visible en los grupos de plantillas asignados.',
	'inserttscat' => 'Insertar categoría',
	'updatetscat' => 'Actualizar categoría',
	'selectonetgroup' => 'ERROR: Es necesario seleccionar al menos un grupo de plantillas',
	'troubleshootercatinsertconfirm' => 'Categoría de solucionador "%s" insertada correctamente',
	'tcatdeleteconfirm' => 'Categoría de solucionador eliminada correctamente',
	'tcatsdeleteconfirm' => 'Categorías de solucionador eliminadas correctamente',
	'tcatdelconfirm' => 'Está seguro de que desea eliminar esta categoría?\nEliminar una categoría provocará la aliminación de todos los pasos de solucionador que contenga.',
	'invalidtroubleshootercategory' => 'Categoría de solucionador no válida',

	// Edit Category
	'editcategory' => 'Editar categoría',
	'troubleshootercatupdateconfirm' => 'Categoría de solucionador "%s" actualizada correctamente',
	
	// Manage Steps
	'troubleshootersteps' => 'Pasos del solucionador',
	'managesteps' => 'Administrar pasos',
	'addstep' => 'Añadir paso',
	'addcategory' => 'Añadir categorías',
	'troubleshooters' => 'Solucionadores',
	'filter' => 'Filtrar',
	'stepdelconfirmmsg' => 'Está seguro de que desea eliminar este paso? Eliminar un paso provocará el borrado de todos los pasos que dependan de él.',
	'tsdelconfirm' => 'Paso del solucionador eliminado correctamente',
	'stepdeleteconfirm' => 'Eliminado(s)  "%s" paso(s) del solucionador',
	'filtertgroupid' => 'Grupo de plantillas',
	'desc_filtertgroupid' => 'Seleccione el grupo de plantillas para filtrar los datos. Solo las categorías que estén en el grupo de plantillas filtrado serán visibles.',
	'listview' => 'Vista de lista',
	'tssteplist' => 'Lista de pasos de solucionador',
	'treeview' => 'Vista de árbol',

	// Insert Step
	'insertstep' => 'Insertar paso',
	'stepdetails' => 'Detalles de paso del solucionador',
	'tssubject' => 'Asunto',
	'tsdisporder' => 'Orden de visualización',
	'desc_tsdisporder' => 'Introduzca el orden de visualización de pasos. Los pasos se ordenarán de acuerdo con dicho orden, ascendente.',
	'updatestep' => 'Actualizar paso',
	'tslinks' => 'Pasos superiores',
	'desc_tslinks' => 'Seleccione los pasos superiores para este paso. El solucionador funciona con una navegación en forma de árbol, y resuelve relaciones padre-hijo. PUede seleccionar múltiples pasos superiores pulsando la tecla CTRL y haciendo click en el nombre del paso.',
	'selectonelink' => 'ERROR: Por favor, seleccione al menos un paso superior',
	'tsaddconfirm' => 'Paso del solucionador "%s" insertado correctamente',
	'editstep' => 'Editar paso',

	// Edit Step
	'invalidtroubleshooter' => 'Solucionador no válido',
	'tsupdateconfirm' => 'Paso del solucionador "%s" actualizado correctamente',
	'updatestep' => 'Actualizar paso',
	'editstep' => 'Editar paso',

	// Import/Export
	'importexport' => 'Importar/Exportar',
	'export' => 'Exportar',
	'exportxml' => 'Exportar XML',
	'exportcat' => 'Categorías del solucionador',
	'desc_exportcat' => 'Seleccione las categorías del solucionador a exportar. Sólo se exportarán los pasos que haya dentro de las categorías seleccionadas.',
	'importtroubleshooter' => 'Importar solucionador',
	'troubleshooterfile' => 'Importar archivo',
	'desc_troubleshooterfile' => 'Por favor seleccione el archivo XML a importar',
	'importxml' => 'Importar XML',
	'importconfirm' => 'Se han importado los datos del archivo XML',

	// Comments
	'comments' => 'Comentarios',
	'legend' => 'Leyenda: ',

	// Reports
	'popularcategories' => 'Categorías populares',
	'popularsteps' => 'Pasos populares',
	'views' => 'Vistas',
	'steptitle' => 'Nombre de paso',
);
?>