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
	// ======= BEGIN v3 IMPORT =======
	'chatreport' => 'Informe de chat',
	'visitortrackinghtmlcode' => 'Código HTML de seguimiento de visitantes',
	'desc_visitortrackinghtmlcode' => 'Copie este código HTML a los lugares en los que quiera hacer seguimiento de visitantes. Esta opción no mostrará una imagen de chat o un enlace en tu página web; sólo le permitirá hacer seguimiento de los visitantes que tenga la página.',
	'textlinkhtmlcode' => 'Código HTML de enlace de texto',
	'desc_textlinkhtmlcode' => 'Este código HTML mostrará un enlace de texto con un texto personalizado dependiendo de si hay operadores conectados y disponibles para chatear.<br><br>Si <i>hay</i> operadores disponibles, se mostrará una ventana de chat cuando los visitantes pulsen el enlace. Si <i>no hay</i> operadores disponibles, se mostrará un formulario al visitante para que envíe un mensaje.<br><br>Al añadir este código HTML a una página web, podrá hacer un seguimiento de los visitantes a través de'. SWIFT_PRODUCT .'.',
	'emailsignaturehtmlcode' => 'Código HTML para firma de email',
	'desc_emailsignaturehtmlcode' => 'Este código HTML mostrará una imagen -y un enlace- que hará saber a los visitantes que el chat no está disponible, pero que pueden dejar un mensaje. <i>(Nota: siempre mostrará la imagen de "chat no disponible", aunque haya operadores dispnibles para chatear!)</i>. Si desea que los visitantes puedan iniciar sesiones de chat, use el "botón HTML".<br><br>Use este código cuando quiera que los visitantes puedan enviar un mensaje al centro de soporte, pero no iniciar un chat con un operador. si desea que los mensajes lleguen a un departamento específico, selecciónelo a continuación.<br><br>al añadir este código HTML a una página web, podrá hacer el seguimiento de las visitas a través de '. SWIFT_PRODUCT .'.',
	'desc_emailsignaturedepartment' => 'Si selecciona un departamento específico aquí, los mensajes enviados a través de este código HTML se enviarán a ese departamento. si selecciona  <i>Todos los departamentos</i>, el visitante podrá seleccionar el departamento al que quiere enviar el mensaje.',
	'departments' => 'Departamentos',
	'lschatreport' => 'Informe de chat',
	'lschatfilter' => 'Filtro de informe de chat',
	'lsnotpicked' => 'No seleccionado',
	'lsaccepted' => 'Aceptado',
	'lsrejected' => 'Rechazado',
	'lsendchat' => 'Chat finalizado',
	'lsdate' => 'Fecha:',
	'lsstaff' => 'Operador:',
	'lschatstatus' => 'Estado de chat:',
	'userwarningnoresponse' => 'La ventana de chat del cliente no responde. Si continúa recibiendo este mensaje, el cliente puede haber finalizado la sesión de chat, o la sesión puede haber caducado.',
	'transferattempt' => 'Intentando transferrir el chat a "%s"',
	'transferrejected' => '"%s" ha rechazado la solicitud de transferencia. Motivo: %s',
	// ======= END v3 IMPORT =======

	'staffchatnotonline' => 'Operador desconectado',
	'staffnochatobjectcreate' => 'No se ha podido crear el objeto de chat',
	'livesupport' => 'Chat',
	'adcampaign' => 'Campaña de anuncios',
	'incomingchat' => 'Chat pendiente',
	'inchat' => 'En el chat',
	'browsing' => 'Navegando',
	'fullname' => 'Nombre completo',
	'email' => 'Email',
	'department' => 'Departamento',
	'visitorblocked' => 'Visitante expulsado por %s',
	'sno' => 'No.',
	'dateadded' => 'Fecha',
	'addedby' => 'Añadido por',
	'note' => 'Nota',
	'nonotesavailable' => 'No hay notas disponibles para este visitante',
	'conversation' => 'Conversación',
	'nochatactive' => 'Este visitante no tiene ningún chat activo',
	'refresh' => 'Actualizar',
	'goback' => 'Volver',
	'nohistoryavailable' => 'No hay historial de chat para este visitante',
	'chatid' => 'ID de chat',
	'date' => 'Fecha',
	'fullname' => 'Nombre completo',
	'staffname' => 'Nombre del operador',
	'department' => 'Departamento',
	'chatleave' => '%s ha abandonado el chat.',
	'chatenter' => '%s se ha unido al chat.',
	'chatexpired' => 'La sesión de chat ha terminado o expirado.',
	'clientnoresponse' => 'La ventana de chat del cliente no responde. Si continúa recibiendo este mensaje, el cliente puede haber finalizado la sesión de chat, o la sesión puede haber caducado.',
	'staffchaterror' => 'No se ha podido iniciar un chat de operador a operador; no se ha encontrado el departamento.',
	'errorchatnotstarted' => 'No se ha podido entregar el mensaje de chat. Por favor, espere a que arranque la sesión de chat.',
	'errorchatended' => 'No se ha podido entregar el mensaje. La sesión de chat ha terminado o caducado.',
	'noliveresponseerror' => 'Debe usar la aplicación de escritorio LiveResponse para ver esta página correctamente',
	'typingmsg' => '%s está escribiendo...',
	'startingvoicechat' => 'Iniciando chat de voz con  %s (%s)',
	'startingstaffviewshare' => 'Iniciando sesión de ViewShare con %s',

	/**
	* ###############################################
	* Tools
	* ###############################################
	*/
	'tools' => 'Herramientas',
	'htmlbutton' => 'Botón HTML',
	'htmlcode' => 'Código HTML',
	'desc_htmlcode' => 'Este código HTML mostrará una imagen (y enlace) con el mensaje "Operador online/offline" dependiendo de si los operadores están conectados y disponibles para chatear. .<br><br>Si <i>hay</i> operadores disponibles, se mostrará una ventana de chat cuando un visitante pulse la imagen. Si <i>no hay</i> operadores disponibles, se mostrará un formulario para enviar un mensaje.<br><br>Al añadir este código HTML a una página web, también podrá hacer un seguimiento de las visitas a la página a través de ' . SWIFT_PRODUCT . '.',
	'generate' => 'Generar',
	'alldepartments' => '-- Todos los departamentos --',
	'fordepartment' => 'Departamento',
	'desc_fordepartment' => 'If a specific department is chosen here, ' . SWIFT_PRODUCT . ' will only use this department for determining the online/offline status of staff users.  Client users will also only be able to choose this department when requesting a chat.<br/><br/><b>NOTE:</b> This means that if all the staff users in this department are offline, even if other staff users are available, the client user will be told that live chat is unavailable.',
	'generatedcode' => 'New HTML code generated. Copy & paste it from the field below.',
	'textlink' => 'Text Link',
	'visitortracking' => 'Visitor Tracking',
	'customsettings' => 'Custom Settings',
	'onlinetext' => 'Staff Online Text',
	'desc_onlinetext' => 'This is the text that is displayed if there is at least one available staff user in the specified department.',
	'offlinetext' => 'Staff Offline Text',
	'desc_offlinetext' => 'This is the text that is displayed if there are no available staff users in the specified department.',
	'conlinetext' => 'Live chat is available. Chat now!',
	'cofflinetext' => 'Live chat is unavailable. Please leave a message.',
	'emailsignature' => 'Email Signature',
	'taggenerator' => 'Tag Generator',
	'emailbutton' => 'Email Button',

	/**
	* ###############################################
	* Messages
	* ###############################################
	*/
	'messages' => 'Messages',
	'newmessagelist' => 'New Message List',
	'repliedmessagelist' => 'Replied Message List',
	'markasreplied' => 'Mark as Replied',
	'staffname' => 'Staff Name',
	'createdon' => 'Created On',
	'repliedon' => 'Replied On',
	'messagedeleteconfirm' => 'Message "%s" deleted successfully',
	'reply' => 'Reply',
	'messagereply' => 'Message Reply',
	'messagedetails' => 'Message Details',
	'replydetails' => 'Reply Details',
	'clientname' => 'Full Name',
	'clientemail' => 'Email',
	'subject' => 'Subject',
	'contents' => 'Contents',
	'subjectformat' => 'Re: %s',
	'sendreply' => 'Send Reply',
	'redirect_messagereplied' => 'Sending reply to "%s"',
	'confirmmessagereplied' => 'Sent reply to "%s',
	'details' => 'Details',
	'replied' => 'Replied',
	'repliedmessages' => 'Replied Messages',
	'replytomessage' => 'Reply to Message',
	'newmessages' => 'New Messages',
	'repliedmessages' => 'Replied Messages',
	'messageoptions' => 'Message Options',
	'deletemessage' => 'Delete Message',
);
?>