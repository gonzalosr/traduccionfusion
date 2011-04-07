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
	// ======= BEGIN v4 LOCALES =======
	'mpsettings' => 'Configuración',
	'desc_mpsettings' => '',
	'tabsettings' => 'Configuración',
	'insertcatchallrule' => 'Insertar regla Recoge-Todo',
	'titlenqcatchall' => 'No hay colas de email disponibles',
	'msgnqcatchall' => 'No puede añadir una regla Recoge-Todo hasta que haya al menos una cola de email disponible.',
	'wineditcatchall' => 'Editada regla Recoge-Todo',
	'titledelcatchall' => 'Eliminada(s) "%d" regla(s) Recoge-Todo',
	'msgdelcatchall' => 'Se han eliminado las siguientes reglas Recoge-Todo:<br>',
	'titleupdatecatchall' => 'Actualizada regla Recoge-Todo',
	'msgupdatecatchall' => 'Se ha actualizado correctamente la regla "%s".',
	'titleinsertcatchall' => 'Insertada regla Recoge-Todo',
	'msginsertcatchall' => 'Se ha insertado correctamente la regla Recoge-Todo "%s".',
	'titleinsertban' => 'Insertado bloqueo de Procesador',
	'msginsertban' => 'Se ha insertado el bloqueo de Procesador para el email "%s".',
	'titleupdateban' => 'Actualizado bloqueo de Procesador',
	'msgupdateban' => 'Se ha actualizac correctamente el bloqueo de Procesador para el email "%s".',
	'wineditban' => 'Editar bloqueo de Procesador',
	'titledelbans' => 'Eliminados "%d" Bloqueos de Procesador',
	'msgdelbans' => 'Eliminados los siguientes emails bloqueados de la base de datos:',
	// ======= END v4 LOCALES =======

	// ======= BEGIN v3 IMPORT =======
	'invalidemailaddress' => 'Se ha especificado una dirección de email no válida',
	// ======= END v3 IMPORT =======

	'mailparser' => 'Procesador de correo',

	// Email Bans
	'emailbans' => 'Bloqueos de email',
	'emailbanlist' => 'Lista de bloqueos de email',
	'bannedemail' => 'Dirección de email',
	'bannedby' => 'Bloqueado por',
	'insertban' => 'Insertar bloqueo',
	'insertnewban' => 'Insertar nuevo bloqueo',
	'desc_bannedemail' => 'Introduzca la dirección de email que se bloqueará. Los mensajes entrantes desde esta dirección se rechazarán silenciosamente. Para bloquear un dominio completo introduzca "@dominio.com".',
	'parserbaninsertconfirm' => 'Bloqueo de email "%s" insertado correctamente',
	'parserbansdelconfirm' => 'Bloqueo(s) de email eliminado(s) correctamente',
	'invalidemailban' => 'Se ha especificado un ID de bloqueo de Procesador no válido',
	'editban' => 'Editar bloqueo',
	'bandelconfirmmsg' => '¿Está seguro de que desea eliminar este bloqueo de email? ¡Esta acción es irreversible!',
	'parserbanupdconfirm' => 'Bloqueo de email "%s" eliminado correctamente',
	'desc_mailbans' => 'Puede evitar que los usuarios problemáticos envíen tickets añadiendo un bloqueo de email para su dirección.  Cuando ' . SWIFT_PRODUCT . ' reciba un mensaje de correo comprobará la dirección del remitente y si está en la lista de bloqueos el mensaje se ignorará.',

	// reglas Recoge-Todo
	'catchallrules' => 'Reglas Recoge-Todo',
	'desc_catchallrules' => 'Las reglas Recoge-Todo usan expresiones regulares para encontrar patrones en las direcciones de correo de los emails entrantes. Los mensajes pueden enrutarse a la cola de email que se desee. Para más información sobre expresiones regulares <a href="http://www.php.net/preg_match" target="_blank" id="red">haga click aquí.</a>',
	'insertrule' => 'Insertar regla',
	'insertnewrule' => 'Insertar nueva regla',
	'editrule' => 'Editar regla',
	'rregexp' => 'Expresión regular',
	'desc_rregexp' => 'Introduzca una expresión regular con la que comprobar la dirección de email del remitente. Ejemplo:<HR /><b>/^(.*)(\@sudominio\.com)$/i</b> - es válida para cualquier dirección de correo electrónico dentro del dominio "sudominio.com"<BR /><BR /><b>/^(soporte\@)(.*)$/i</b> - es válida para soporte@cualquierdominio.com',
	'sortorder' => 'Orden de ejecución',
	'desc_sortorder' => 'El Procesador de correo ejecutará las reglas Recoge-Todo de acuerdo con este valor. (p.ej. <i>la regla "1" se ejecutará antes que la "2", etc.</i>)',
	'emailqueue' => 'Cola de email de destino',
	'desc_emailqueue' => 'Los emails entrantes capturados por esta regla Recoge-Todo se enrutarán a la cola de email especificada aquí.',
	'ruletitle' => 'Nombre de regla',
	'desc_ruletitle' => 'Introduzca un nombre para esta regla Recoge-Todo.',
	'noemailqueueadd' => '-- No se ha añadido cola de email --',
	'errnoqueue' => 'ERROR: No hay ninguna cola de email en la base de datos. Es necesario tener al menos una cola de email activa para poder utilizar las reglas Recoge-Todo.',
	'catchruleinsertconfirm' => 'Regla Recoge-Todo "%s" insertada correctamente',
	'catchruleupdconfirm' => 'Regla Recoge-Todo "%s" actualizada correctamente',
	'catchallruledelconfirm' => 'Regla(s) Recoge-Todo eliminada(s) correctamente',
	'invalidcatchalrule' => 'Se ha especificado una regla Recoge-Todo no válida',
	'editcatchallrule' => 'Editar regla Recoge-Todo',
	'cruledelconfirmmsg' => '¿Está seguro de que desea eliminar esta regla Recoge-Todo?  ¡Esta acción es irreversible!',
);
?>