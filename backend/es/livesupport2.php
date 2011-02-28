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
	/**
	* ###############################################
	* Canned
	* ###############################################
	*/
	'canned' => 'Respuestas enlatadas',
	'cannedcategories' => 'Administrar categorías de enlatadas',
	'addsubcat' => 'Añadir subcategoría',
	'addresponse' => 'Añadir respuesta',
	'insertcategory' => 'Insertar categoría',
	'editcategory' => 'Editar categoría',
	'parentcategory' => 'Categoría superior',
	'desc_parentcategory' => 'La categoría bajo la que se creará la nueva categoría. Puede organizar las categorías jerárquicamente sin límite de niveles.',
	'cattitle' => 'Título de la categoría',
	'desc_cattitle' => 'Introduzca un título para la categoría.',
	'cattype' => 'Tipo de categoría',
	'desc_cattype' => '<i>Pública:</i> Es visible para todos los operadores.<br><br><i>Privada:</i> Sólo es visible para el operador que creó la categoría.',
	'catinsertconfirm' => 'La categoría se ha insertado correctamente',
	'redirect_catinsert' => 'La categoría se ha insertado correctamente',
	'responselist' => 'Lista de respuestas enlatadas',
	'type' => 'Tipo',
	'text' => 'Texto',
	'code' => 'Código',
	'url' => 'URL',
	'image' => 'Imagen',
	'insertresponse' => 'Insertar respuesta',
	'responsetitle' => 'Título de la respuesta',
	'desc_responsetitle' => 'Introduzca un nombre descriptivo para la respuesta enlatada.',
	'parentcategoryres' => 'Categoría superior',
	'desc_parentcategoryres' => 'La categoría en la que se añadirá la respuesta.',
	'rescontents' => 'Contenido de la respuesta',
	'desc_rescontents' => 'Introduzca el contenido de la respuesta. Si ha seleccionado una respuesta de tipo <i>URL</i> o <i>imagen</i>, por favor introduzca la <b>URL completa</b> a enviar al cliente.',
	'responsetype' => 'Tipo de respuesta',
	'desc_responsetype' => '<i>Texto:</i> Se enviará el texto plano al usuario.<br><br><i>URL:</i> Se enviará una dirección web (URL) al usuario, y se abrirá automáticamente en una nueva bentana de su navegador. <br><br><i>Imagen:</i> De la misma manera en que se envía una dirección web, se abrirá la imagen en su navegador.<br><br><i>Código fuente:</i> El código fuente enviado al usuario se resaltará.',
	'catdelactionconfirm' => 'Está seguro de que desea eliminar esta categoría? Eliminar la categoría provocará el borrado permanente de todas las subcategorías y respuestas contenidas en la misma.  Esta acción es irreversible!',
	'catdelactionconfirm' => 'Está seguro de que desea eliminar esta categoría? Eliminar la categoría provocará el borrado permanente de todas las subcategorías y respuestas que contenga.',
	'redirect_catdel' => 'La categoría se ha eliminado correctamente',
	'catdelconfirm' => 'La categoría se ha eliminado correctamente',
	'redirect_responseinsert' => 'La respuesta enlatada "%s" se ha insertado correctamente',
	'responseinsertconfirm' => 'La respuesta enlatada "%s" se ha insertado correctamente',
	'responsedelconfirm' => 'La respuesta enlatada se ha eliminado correctamente',
	'editcategory' => 'Editar categoría',
	'invalidcategory' => 'Categoría no válida',
	'cannotsetparenttoself' => 'ERROR: No se puede establecer la propia categoría como superior',
	'redirect_catupdate' => 'La categoría se ha actualizado correctamente',
	'catupdateconfirm' => 'La categoría se ha actualizado correctamente',
	'editresponse' => 'Editar respuesta',
	'invalidresponse' => 'ERROR: Respuesta no válida',
	'responseupdateconfirm' => 'Respuesta enlatada actualizada correctamente',
	'cannedresponses' => 'Respuestas enlatadas',
	'categories' => 'Categorías',
	'managecategories' => 'Administrar categorías',
	'manageresponses' => 'Administrar respuestas',
	'categoryoptions' => 'Opciones de categoria',
	'deletecategory' => 'Eliminar categoría',
	'responseoptions' => 'Opciones de respuesta',
	'deleteresponse' => 'Eliminar respuesta',

	/**
	* ###############################################
	* Ad Tracking
	* ###############################################
	*/
	'adtracking' => 'Seguimiento de anuncios',
	'redirecturl' => 'URL de destino',
	'desc_redirecturl' => 'Especifique la dirección web (URL) de destino para esta campaña (La URL a la que se redirigirá al usuario cuando haga click sobre el enlace del anuncio). En la mayoría de los casos será la página principal de la web de la empresa.',
	'campaignlist' => 'Lista de campañas',
	'insertcampaign' => 'Insertar campaña',
	'campaigntitle' => 'Título de la campaña',
	'desc_campaigntitle' => 'Un título para la campaña.',
	'managecampaigns' => 'Campañas',
	'insertcampaign' => 'Insertar campaña',
	'reports' => 'Informes',
	'campaigns' => 'Campañas',
	'desc_adtrack' => 'La función de seguimiento de anuncios permite hacer un seguimiento de los visitantes provinientes de las diferentes campañas en tiempo real. En primer lugar debe crear una campaña especificando la URL de destino. El sistema le proporcionará una URL única que debe usar como enlace al destino. Los usuarios que visiten esa URL serán redirigidos de forma transparente al destino y su visita quedará registrada.',
	'campaigninsertconfirm' => 'Campaña "%s" insertada correctamente',
	'campaigndelconfirm' => 'Campaña eliminada correctamente',
	'invalidcampaign' => 'Campaña no válida',
	'campaignupdateconfirm' => 'Campaña "%s" actualizada correctamente',
	'editcampaign' => 'Editar campaña',
	'campaignurl' => 'URL de campaña',
	'view' => 'Ver',
	'campaignurlinfo' => 'Use esta URL para hacer el seguimiento de esta campaña. Ponga esta URL en sus enlaces en lugar de enlazar directamente a su página web, para que ' . SWIFT_PRODUCT . ' registre y almacene las visitas.',
	'adoptions' => 'Opciones de anuncio',
	'deletecampaign' => 'Eliminar campaña',

	/**
	* ###############################################
	* AD TRACKING REPORTS
	* ###############################################
	*/
	'adtrackingreport' => 'Informe de seguimiento de anuncio',
	'filter' => 'Filtrar',
	'fildate' => 'Fecha',
	'top15ref' => '15 principales fuentes de tráfico',
	'latest30hits' => 'Últimas 30 visitas',
	'referrer' => 'Fuente',
	'hits' => 'Veces',
);
?>