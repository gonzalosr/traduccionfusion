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
	// ======= BEGIN V4 LOCALES =======
	'titlebayesnodel' => 'Imposible eliminar "%d" categorías bayesianas',
	'msgbayesnodel' => SWIFT_PRODUCT .' no ha podido eliminar las siguientes categorías bayesianas porque están marcadas como MAESTRAS.',
	'check' => 'Revisar',
	'bayesian' => 'Bayesiana',
	'desc_bayesian' => '',
	'categories' => 'Categorías',
	'insertcategory' => 'Insertar categoría',
	'editcategory' => 'Editar categoría',
	'diagnostics' => 'Diagnósticos',
	'sla' => 'SLA',
	'tabtraining' => 'Entrenamiento',
	'tabprobability' => 'Probabilidad',
	'bayescategory' => 'Categoría',
	'desc_bayescategory' => 'Seleccione la categoría bayesiana',
	'bayesactiontype' => 'Acción',
	'desc_bayesactiontype' => 'Seleccione el tipo de acción.',
	'bayestext' => 'Texto',
	'bayestrain' => 'Entrenar',
	'bayesuntrain' => 'Desentrenar',
	'titlebtrain' => 'Entrenamiento correcto',
	'msgbtrain' => 'Se ha entrenado correctamente al filtro bayesiano con los datos especificados',
	'titlebuntrain' => 'Desentrenamiento correcto',
	'msgbuntrain' => 'Se ha desentrenado correctamente al filtro bayesiano',
	'word' => 'Palabra',
	'combinedprobability' => 'Probabilidad combinada',
	'tabsettings' => 'Configuración',
	'bayescattitle' => 'Nombre de categoría',
	'desc_bayescattitle' => 'Introduzca el nombre de la categoría bayesiana.',
	'categoryweight' => 'Peso de la categoría',
	'desc_categoryweight' => 'Especifique el peso de la categoría, la probabilidad de palabra por defecto se multiplica por el peso de la categoría para alcanzar la probabilidad final. Elevar los números resultará en un incremento de la probabilidad de palabras. Introducir "1" hará que la probabilidad de palabras por defecto para esta categoría sea 0.0001. Introducir "0" hace que el sistema ignore todas las palabras de la categoría.',
	'tabgeneral' => 'General',
	'invalidbayescat' => 'Categoría bayesiana no válida',
	'titlebayesmasterdel' => 'Imposible eliminar categoría',
	'msgbayesmasterdel' => 'No puede eliminar las categorías bayesianas maestras (Spam/No Spam). Si desea deshabilitar el filtrado de spam, puede hacerlo en la configuración del filtro bayesiano.',
	'titlebayesdel' => 'Eliminada(s) "%d" categoría(s) bayesiana(s)',
	'msgbayesdel' => 'Se ha(n) eliminado correctamente la(s) siguiente(s) categorías bayesianas de la base de datos:',
	'ismaster' => 'Categoría maestra',
	'wordcount' => 'Contador de palabras',
	'winbayeseditcategory' => 'Editar categoría bayesiana: %s',
	'titlebayesinsert' => 'Insertada categoría bayesiana "%s"',
	'msgbayesinsert' => 'Se ha insertado correctamente la categoría bayesiana "%s".',
	'titlebayesupdate' => 'Actualizada categoría bayesiana "%s"',
	'msgbayesupdate' => 'Se ha actualizado correctamente la categoría bayesiana "%s".',

	'settings' => 'Configuración',
	'desc_settings' => '',
	// ======= END V4 LOCALES =======

	'tickets' => 'Tickets',
	'displayorder' => 'Orden de visualización',
	'desc_displayorder' => 'Este es el orden de visualización por defecto en el que se mostrarán los elementos. La lista se ordenará de forma ascendente.',
	// ======= STATUS =======
	'statustitle' => 'Nombre',
	'statuslist' => 'Lista de estados',
	'ticketstatus' => 'Estado',
	'desc_ticketstatus' => 'Los estados de ticket permiten agrupar tickets similares en diferentes categorías. Puede crear un estado de ticket personalizado pulsando en el botón "Insertar estado" en la barra de navegación.',
	'manage' => 'Administrar',
	'statusdetails' => 'Detalles de estado de ticket personalizado',
	'insertstatus' => 'Insertar estado',
	'statustitle' => 'Nombre de estado',
	'desc_statustitle' => 'Introduzca el nombre del estado de ticket personalizado',
	'redirect_statusinsert' => 'Estado de ticket insertado correctamente',
	'statusinsertconfirmation' => 'Estado de ticket "%s" insertado correctamente',
	'statusdeleteconfirm' => 'estado de ticket "%s" eliminado correctamente',
	'displayinmainlist' => 'Mostrar en listado principal de tickets',
	'desc_displayinmainlist' => 'Si se activa, todos los tickets que tengan este estado se mostrarán en el listado principal de tickets. Se recomienda que desactive esta opción para estados de ticket RESUELTOS como "cerrado", "solucionado" o "precisa más información""',
	'updatestatus' => 'Actualizar estado',
	'editstatus' => 'Editar estado',
	'invalidticketstatus' => 'Estado de ticket no válido',
	'statusupdateconfirm' => 'Estado de ticket "%s" actualizado correctamente',
	'displaycount' => 'Mostrar contador de tickets en árbol',
	'desc_displaycount' => 'Si se activa, se mostrará el total de tickets con este estado en el árbol de filtrado de tickets. Se recomienda que desactive esta opción para estados de ticket RESUELTOS como "cerrado", "solucionado" o "precisa más información"Si se activa.',
	'statuscolor' => 'Color de estado',
	'desc_statuscolor' => 'Introduzca el código de colos que desea asociar con este estado.',
	'statusdep' => 'Vincular estado con departamento',
	'desc_statusdep' => 'Esta opción le permite vincular este estado con un departamento existente. Si un estado se vincula a un departamento, será visible únicamente desde el departamento al que está vinculado.',
	'statusalldep' => '-- Mostrar en todos los departamentos --',
	'statustype' => 'Tipo de estado',
	'errorstr' => 'ERROR',
	'resetduetime' => 'Resetear vencimiento automáticamente',
	'desc_resetduetime' => 'Si se activa, el sistema reseteará automáticamente la fecha de vencimiento de un ticket cuando cambie su estado.',
	'statustype2' => 'Tipo de estado',
	'desc_statustype2' => 'Seleccione el tipo de estado; los estados públicos son visibles en el Centro de Soporte de usuarios, mienstras que los privados sólo son visibles para los operadores',

	// ======= PRIORITY =======
	'ticketpriorities' => 'Prioridades',
	'desc_ticketpriorities' => 'Las prioridades permiten a los usuarios especificar el nivel de urgencia de un ticket. Puede crear prioridades personalizadas pulsando en la opción "Insertar prioridad" en la barra de navegación.',
	'prioritytitle' => 'Nombre',
	'desc_prioritytitle' => 'Introduzca el nombre de la prioridad',
	'prioritylist' => 'Lista de prioridades',
	'prioritydetails' => 'Detalles de prioridad',
	'insertpriority' => 'Insertar prioridad',
	'prioritytype' => 'Tipo',
	'desc_prioritytype' => 'Especifique el tipo de prioridad. Las prioridades privadas no son visibles para los usuarios no operadores.',
	'registrationrequired' => 'Solicitar registro?',
	'desc_registrationrequired' => 'Si está activado, sólo los usuarios registrador podrán crear tickets con esta prioridad.',
	'forecolor' => 'Color de letra en listado',
	'desc_forecolor' => 'Si se especifica, ese será el color de fondo de los tickets que tengan esta prioridad.',
	'bgcolor' => 'Color de fondo en listado',
	'desc_bgcolor' => 'Si se especifica, ese será el color de fondo de los tickets que tengan esta prioridad.',
	'redirect_priorityinsert' => 'Prioridad insertada correctamente',
	'priorityinsertconfirm' => 'Prioridad "%s" insertada correctamente',
	'prioritydeleteconfirm' => 'Prioridad "%s" eliminada correctamente',
	'templategroups' => 'Grupos de plantillas',
	'desc_templategroups' => 'Seleccione los grupos de plantillas a los que se asignará esta prioridad. Esta prioridad sólo será visible en los grupos de plantillas especificados.',
	'updatepriority' => 'Actualizar prioridad',
	'selectonetgroup' => 'ERROR: Es necesario seleccionar al menos un grupo de plantillas. Si no desea mostrar esta prioridad en el Centro de Soporte, seleccione tipo privado.',
	'editpriority' => 'Editar prioridad',
	'invalidpriority' => 'Prioridad de ticket no válida',
	'priorityupdateconfirm' => 'Prioridad "%s" actualizada correctamente',
);

?>