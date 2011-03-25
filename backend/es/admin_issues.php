<?php
//=======================================
//###################################
// Kayako Web Solutions
//
// Source Copyright 2001-2004 Kayako Infotech Ltd.
// Unauthorized reproduction is not allowed
// License Number: $%LICENSE%$
// $Author$ ($Date$)
// $RCSfile$ : $Revision$ 
//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
//                   www.kayako.com
//###################################
//=======================================


$__LANG = array (

	'issues' => 'Problemas',
	'settings' => 'Configuración',
	'tabsettings' => 'Configuración',

	// ======= GLOBAL =======
	'displayorder' => 'Orden de visualización',
	'desc_displayorder' => 'Este es el orden de visualización por defecto. La lista está en orden ascendente.',

	// ======= TYPES =======
	'managetypes' => 'Administrar tipos',
	'inserttype' => 'Insertar tipo',
	'typetitle' => 'Nombre de tipo de problema',
	'desc_typetitle' => 'Introduce un nombre para este problema.',
	'issuetypeview' => 'Tipo de vista de problema',
	'desc_issuetypeview' => 'Selecciona la vista del tipo de problema. Los tipos de problema públicos se verán en el Centro de Soporte, mientras que los privados sólo los verán los operadores.',
	'displayicontype' => 'Icono',
	'desc_displayicontype' => 'Introduzca la URL completa del icono que se mostrará junto a cada tipo de problema. Puede usar {$themepath} como variable de sustitución de la URL del directorio del tema. El tamaño recomendado es de 16x16 píxeles.',
	'unabletoinserttype' => 'No se ha podido insertar el tipo de problema. Por favor, compruebe la configuración de la base de datos.',
	'titleinsertissuetype' => 'Se ha insertado el tipo de problema "%s"',
	'msginsertissuetype' => 'Se ha insertado el tipo de problema "%s" en la base de datos.',
	'titleduplicatetype' => 'El tipo de problema "%s" está duplicado',
	'msgduplicatetype' => "Ya existe en la base de datos un tipo de problema con el mismo nombre \"%s\". Es recomendable que cambie el nombre de este tipo <a href=\"javascript:window.\$KAJAX._parser.createWindowXML('". $_SWIFT["swiftpath"] ."admin/index.php?_m=issues&_a=edittype&noheader=1&issuetypeid=%d', 'editissuetype', 'Editar tipo de problema: %s', 'Cargando ventana..', 650, 350, true);\">pinchando aquí.</a>",
	'titledelissuetypemul' => 'Se ha(n) eliminado "%d" tipos de problema',
	'msgdelissuetypemul' => 'Se han eliminado los siguientes tipos de problema:<br>%s',
	'titledelissuetype' => 'Se ha eliminado el tipo de problema "%s" ',
	'msgdelissuetype' => 'Se ha eliminado correctamente el tipo de problema "%s" de la base de datos',
	'typedelconfirmmsg' => 'Está seguro de que desea borrar este tipo de problema?',
	'invalidissuetype' => 'Tipo de problema no válido. Por favor, asegúrese de que este tipo existe en la base de datos.',
	'unabletoupdatetype' => 'No ha sido posible actualizar el tipo de problema. Por favor, asegúrese de que el tipo de problema existe en la base de datos y de que la configuración de base de datos es correcta.',
	'edittype' => 'Editar tipo > %s',
	'wineditissuetype' => 'Editar tipo: %s',
	'msgeditissuetype' => 'Se ha actualizado el tipo de problema "%s".',
	'titleeditissuetype' => 'Actualizado el tipo de problema  "%s"',

	// ======= LINKS =======
	'managelinks' => 'Administrar enlaces',
	'insertlink' => 'Insertar enlace',
	'linktypetitle' => 'Nombre del tipo de enlace',
	'desc_linktypetitle' => 'Introduzca un nombre de tipo de enlace.',
	'issuelinktype' => 'Tipo de enlace',
	'desc_issuelinktype' => 'Seleccione el tipo de enlace. Los enlaces públicos son visibles en el Centro de Soporte, mientras que los privados sólo son visibles para los operadores.',
	'invalidlinktype' => 'El tipo de enlace especificado no es válido. Por favor, asegúrese de que el tipo de enlace existe en la base de datos.',
	'wineditissuelinktype' => 'Editar enlace: %s',
	'linkdelconfirmmsg' => 'Está seguro de que desea borrar este tipo de enlace?',
	'titleinsertissuelink' => 'Insertado enlace de problema "%s"',
	'msginsertissuelink' => 'Se ha insertado el enlace de problema "%s" en la base de datos.',
	'titleduplicatelinktype' => 'Enlace de problema duplicado "%s"',
	'msgduplicatelinktype' => "Ya existe un enlace de problema con el mismo nombre en la base de datos \"%s\". Es recomendable que cambie el nombre de este enlace <a href=\"javascript:window.\$KAJAX._parser.createWindowXML('". $_SWIFT["swiftpath"] ."admin/index.php?_m=issues&_a=editlink&noheader=1&issuelinktypeid=%d', 'editissuelink', 'Editar enlace de problema: %s', 'Cargando Ventana..', 650, 300, true);\">pinchando aquí.</a>",
	'titleeditissuelinktype' => 'Actualizado enlace de problema "%s"',
	'msgeditissuelinktype' => 'Se ha actualizado correctamente el enlace de problema "%s".',
	'linkunableupd' => 'No se ha podido actualizar el tipo de enlace. Por favor, compruebe la configuración de la base de datos.',
	'titledelissuelink' => 'Eliminado enlace de problema "%s"',
	'msgdelissuelink' => 'Se ha eliminado el enlace de problema "%s" de la base de datos.',
	'titledelissuelinkmul' => 'Se han borrado "%d" enlaces de problema',
	'msgdelissuelinkmul' => 'Se han eliminado los siguientes enlaces de problema de la base de datos:<br>%s',
	'editlink' => 'Editar enlace',

	// ======= RESOLUTIONS =======
	'resolutiontitle' => 'Nombre de solución',
	'viewtype' => 'Tipo',
	'resdelconfirm' => 'Solucion(es) de problema eliminada(s) correctamente',
	'wineditissueresolution' => 'Editar solución: %s',
	'manageresolutions' => 'Administrar soluciones',
	'insertresolution' => 'Insertar solución',
	'resolutiontitle' => 'Nombre de solución',
	'desc_resolutiontitle' => 'Introduzca un nombre para la solución.',
	'issueresolutiontype' => 'Tipo de solución',
	'desc_issueresolutiontype' => 'Seleccione el tipo de solución. Las soluciones públicas serán visibles en el Centro de Soporte de usuarios, mientras que las privadas sólo serán visibles para los operadores.',
	'titleinsertissueresolution' => 'Insertada solución de problema "%s"',
	'msginsertissueresolution' => 'Se ha insertado la solución de problema "%s" en la base de datos.',
	'titleduplicateresolution' => 'Solución de problema duplicada "%s"',
	'msgduplicateresolution' => "Ya existe una solución con el mismo nombre \"%s\". Es recomendable que cambie el nombre de esta solución <a href=\"javascript:window.\$KAJAX._parser.createWindowXML('". $_SWIFT["swiftpath"] ."admin/index.php?_m=issues&_a=editresolution&noheader=1&issueresolutionid=%d', 'editissueresolution', 'Editar Solución: %s', 'Cargando Ventana..', 650, 300, true);\">pinchando aquí.</a>",
	'editresolution' => 'Editar solución > %s',
	'invalidissueresolution' => 'Solución no válida. Por favor, asegúrese de que la solución existe en la base de datos y de que tiene permiso para acceder a ella.',
	'failedupdres' => 'No se ha podido actualizar la solución. Por favor, compruebe su configuración.',
	'titleeditissueresolution' => 'Actualizada la solución "%s"',
	'msgeditissueresolution' => 'Se ha actualizado correctamente la solución "%s".',
	'resdelconfirmmsg' => 'Está seguro de que desea eliminar esta solución?',
	'titledelissueresolution' => 'Eliminada solución "%s"',
	'msgdelissueresolution' => 'Se ha eliminado la solución "%s" de la base de datos.',
	'titledelissueresolutionmul' => 'Solución "%d" eliminada',
	'msgdelissueresolutionmul' => 'Se ha eliminado la siguiente solución de la base de datos:<br>%s',

	// ======= ISSUE STATUS =======
	'statustitle' => 'Nombre de estado',
	'managestatus' => 'Administrar estados',
	'insertstatus' => 'Insertar estado',
	'statustitle' => 'Nombre de estado',
	'desc_statustitle' => 'Introduzca el nombre del estado de problema.',
	'issuestatustype' => 'Tipo de estado',
	'desc_issuestatustype' => 'Seleccione el tipo de estado. Público será visible en el Centro de Soporte de usuarios, mientras que Privado sólo será visible por los operadores.',
	'isresolved' => 'Resuelto?',
	'desc_isresolved' => 'Se se activa, este estado se considerará "Resuelto". Debería activar esta opción para los estados que no deben aparecer en la lista de estados principales, y que están vinculados a acciones que tratan el problema como completado/resuelto/cerrado.',
	'displayicon' => 'Icono',
	'desc_displayicon' => 'Introduzca la URL del icono que se mostrará junto al estado. Puede usar la variable {$themepath} en lugar de la  URL de la ruta del directorio del tema. El tamaño recomendado es de 16x16 píxeles.',
	'titleinsertissuestatus' => 'Se ha insertado el estado de problema "%s"',
	'msginsertissuestatus' => 'Se ha insertado el estado de problema "%s" en la base de datos.',
	'invalidissuestatus' => 'El estado de problema especificado no es válido',
	'wineditissuestatus' => 'Editar estado de problema',
	'titleeditissuestatus' => 'Estado de problema actualizado "%s"',
	'msgeditissuestatus' => 'Se ha actualizado correctamente el estado de problema "%s".',
	'titleduplicatestatus' => 'Estado de problema duplicado "%s"',
	'msgduplicatestatus' => "Hay un estado de problema con el mismo nombre en la base de datos \"%s\". Es recomendable que cambie el nombre de este estado <a href=\"javascript:window.\$KAJAX._parser.createWindowXML('". $_SWIFT["swiftpath"] ."admin/index.php?_m=issues&_a=editstatus&noheader=1&issuestatusid=%d', 'editissuestatus', 'Editar Estado de Problema', 'Cargando Ventana..', 680, 400, true);\">pinchando aquí.</a>",
	'titledelissuestatus' => 'Eliminado estado de problema "%s"',
	'msgdelissuestatus' => 'Se ha eliminado el estado de problema "%s" de la base de datos.',
	'statusdelconfirmmsg' => 'Está seguro de que desea eliminar este estado de problema?',
	'titledelissuestatusmul' => 'Se ha(n) eliminado "%d" estados de problema',
	'msgdelissuestatusmul' => 'Se ha eliminado el siguiente estado de problema de la base de datos:<br>%s',

	// ======= ISSUE PRIORITIES =======
	'prioritytitle' => 'Nombre de prioridad',
	'managepriorities' => 'Administrar prioridades',
	'insertpriority' => 'Insertar prioridad',
	'prioritytitle' => 'Nombre de prioridad',
	'desc_prioritytitle' => 'Introduzca el nombre de la prioridad.',
	'issueprioritytype' => 'Tipo de prioridad',
	'desc_issueprioritytype' => 'Seleccione el tipo de prioridad. Las prioridades públicas serán visibles en el Centro de Soporte de usuarios, mientras que las privadas únicamente serán visibles para los operadores.',
	'displayiconpriority' => 'Icono',
	'desc_displayiconpriority' => 'Introduzca la URL del icono que se mostrará junto a esta prioridad. Puede usar la variable {$themepath} en lugar de la URL de la ruta del directorio del tema. El tamaño recomendado es de 16x16 píxeles.',
	'titleinsertissuepriority' => 'Insertada prioridad de problema "%s"',
	'msginsertissuepriority' => 'Se ha insertado correctamente la prioridad de problema "%s" en la base de datos.',
	'titleduplicatepriority' => 'Prioridad de problema duplicada "%s"',
	'msgduplicatepriority' => "Hay una prioridad de problema con el mismo nombre en la base de datos \"%s\". Es recomendable que cambie el nombre <a href=\"javascript:window.\$KAJAX._parser.createWindowXML('". $_SWIFT["swiftpath"] ."admin/index.php?_m=issues&_a=editpriority&noheader=1&issuepriorityid=%d', 'editissuepriority', 'Editar Prioridad de Problema', 'Cargando Ventana..', 680, 350, true);\">pinchando aquí.</a>",
	'invalidissuepriority' => 'Se ha especificado una prioridad de problema no válida. Por favor, asegúrese de que esta prioridad existe en la base de datos y que tiene permiso para acceder a ella.',
	'editpriority' => 'Editar prioridad > %s',
	'issuepriorityupdfailed' => 'No se ha podido actualizar la prioridad de problema',
	'wineditissuepriority' => 'Editar Prioridad: %s',
	'titleeditissuepriority' => 'Actualizada prioridad de problema "%s"',
	'msgeditissuepriority' => 'Actualizada prioridad de problema "%s".',
	'priodelconfirmmsg' => 'está seguro de que desea eliminar esta prioridad de problema?',
	'titledelissuepriority' => 'Eliminada prioridad de problema "%s"',
	'msgdelissuepriority' => 'Se ha eliminado la prioridad de problema "%s" de la base de datos.',
	'titledelissueprioritymul' => 'Se ha(n) eliminado "%d" prioridad(es) de problema',
	'msgdelissueprioritymul' => 'Se ha eliminado la siguiente prioridad de problema de la base de datos:<br>%s',
	
);
?>