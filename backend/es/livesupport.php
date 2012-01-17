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
	'onsitelegacy' => 'Su versión de Kayako Desktop es demasiado antigua. Por favor, actualícela.',
	'transferrejected' => '"%s" ha rechazado la solicitud de transferencia. Motivo: %s',
	// ======= END v3 IMPORT =======

	'staffchatnotonline' => 'Operador desconectado',
	'staffnochatobjectcreate' => 'No se ha podido crear el objeto de chat',
	'staffchatobjectnotfound' => 'Objeto de chat no válido. Ha sido imposible encontrar el objeto de chat con la ID de referencia: %s',
	'livesupport' => 'Chat',
	'adcampaign' => 'Campaña de anuncios',
	'incomingchat' => 'Chat pendiente',
	'inchat' => 'En el chat',
	'browsing' => 'Navegando',
	'fullname' => 'Nombre completo',
	'email' => 'Email',
	'department' => 'Departamento',
	'visitorblocked' => 'Visitante bloqueado por %s',
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
	'chatexpired' => 'La sesión de chat ha terminado o caducado.',
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
	'desc_fordepartment' => 'Si se selecciona aquí un departamento concreto, ' . SWIFT_PRODUCT . ' sólo utilizará el departamento seleccionado para determinar el estado de conexión delos operadores. Los usuarios además únicamente podrán seleccionar este departamento cuando soliciten un chat.<br/><br/><b>NOTA:</b> Esto quiere decir que si todos los operadores en ese departamento están desconectados, se le dirá al usuario que el chat no está disponible, incluso si hay operadores conectados en otros departamentos.',
	'generatedcode' => 'Se ha generado el código HTML. Cópielo desde el campo siguiente, después péguelo en el destino.',
	'textlink' => 'Enlace de texto',
	'visitortracking' => 'Seguimiento de visitantes',
	'customsettings' => 'Opciones personalizadas',
	'onlinetext' => 'Texto si operador conectado',
	'desc_onlinetext' => 'Este es el texto que se mostrará si hay al menos un operador disponible en el departamento especificado.',
	'offlinetext' => 'Texto si operador desconectado',
	'desc_offlinetext' => 'Este es el texto que se mostrará si no hay operadores disponibles en el departamento especificado.',
	'conlinetext' => 'El chat está disponible. Haga click aquí para conectar con un operador',
	'cofflinetext' => 'El chat no está disponible. Por favor, deje un mensaje.',
	'emailsignature' => 'Firma de email',
	'taggenerator' => 'Generador de etiquetas',
	'emailbutton' => 'Botón de email',

	/**
	* ###############################################
	* Messages
	* ###############################################
	*/
	'messages' => 'Mensajes',
	'newmessagelist' => 'Lista de nuevos mensajes',
	'repliedmessagelist' => 'Lista de mensajes respondidos',
	'markasreplied' => 'Marcar como respondido',
	'staffname' => 'Nombre del operador',
	'createdon' => 'Creado el',
	'repliedon' => 'Respondido el',
	'messagedeleteconfirm' => 'El mensaje "%s" ha sido eliminado',
	'reply' => 'Responder',
	'messagereply' => 'Respuesta del mensaje',
	'messagedetails' => 'Detalles del mensaje',
	'replydetails' => 'Detalles de respuesta',
	'clientname' => 'Nombre completo',
	'clientemail' => 'Email',
	'subject' => 'Asunto',
	'contents' => 'Contenido',
	'subjectformat' => 'Re: %s',
	'sendreply' => 'Enviar respuesta',
	'redirect_messagereplied' => 'Enviando respuesta a "%s"',
	'confirmmessagereplied' => 'Se ha enviado la respuesta a "%s',
	'details' => 'Detalles',
	'replied' => 'Respondido',
	'repliedmessages' => 'Mensajes respondidos',
	'replytomessage' => 'Responder al mensaje',
	'newmessages' => 'Nuevos mensajes',
	'repliedmessages' => 'Mensajes respondidos',
	'messageoptions' => 'Opciones del mensaje',
	'deletemessage' => 'Eliminar mensaje',
);
?>