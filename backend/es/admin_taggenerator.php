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
	'chattagtype' => 'Tipo de etiqueta',
	'chatprompttype' => 'Tipo de solicitud',
	'desc_chatprompttype' => '<br /><i>Chat: </i> Al visitante se le solicita una sesión de chat y se redirige al primer operador disponible.<br /><i>Llamar (Pulse para Llamar): </i>Al visitante se le solicita un número de teléfono junto con los detalles del chat. Se produce una solicitud de chat y la llamada es dirigida de inmediato al primer operador disponible.',
	'chat' => 'Chat',
	'callrequest' => 'Llamar (Pulse para Llamar)',
	'taggenerator' => 'Generador de etiquetas',
	'manage' => 'Administrar',
	'next' => 'Siguiente',
	'livechat' => 'Chat',
	'tabchats' => 'Chat',
	'tag_htmlbutton' => 'Botón HTML',
	'desc_tag_htmlbutton' => 'Esta etiqueta mostrará una imagen de estado "asistencia/llámenos: conectado/desconectado" (y enlace) dependiendo de si hay o no operadores conectados disponibles para hacerse cargo del chat o la llamada.<BR /><BR />Si hay algún operador disponible, aparecerá una ventana cuando el visitante pinche en la imagen. Si no hay operadores disponibles, se le ofrecerá al visitante enviar un mensaje.<BR /><BR />Añadiendo este código HTML a una página web también podrá monitorizar los visitantes esa página a través de ' . SWIFT_PRODUCT . '.',
	'tag_sitebadge' => 'Distintivo de sitio',
	'desc_tag_sitebadge' => 'Este distintivo mostrará una imagen flotante vertical (a la izquierda de la web) para iniciar una llamada o sesión de chat. Si hay operadores disponibles se mostrará una ventana cuando el visitante pinche en la imagen. Si no hay operadores disponibles se le sugerirá al visitante el envío de un mensaje.<BR /><BR />Añadiendo este código HTML en una página web podrá hacer un seguimiento de los visitantes en esa página ' . SWIFT_PRODUCT . '.',
	'tag_textlink' => 'Enlace de Texto',
	'desc_tag_textlink' => 'Este etiqueta mostrará un enlace de texto.<BR /><BR />Si hay operadores disponibles se mostrará una ventana cuando el visitante pinche en el enlace. Si no hay operadores disponibles se le sugerirá al visitante enviar un mensaje.<BR /><BR />NOTA: Usando este etiqueta no podrá hacer el seguimiento de los visitantes mediante ' . SWIFT_PRODUCT . '.',
	'tag_monitoring' => 'Monitorización',
	'desc_tag_monitoring' => 'Esta etiqueta colocará un código de seguimiento en la página web.<BR /><BR />NOTA: Añadiendo este código HTML en una página web, sólo podrá seguir a los visitantes, que no podrán ver ninguna imagen o enlace para iniciar el chat.',
	'generate' => 'Generar',
	'tabchatsextended' => 'Chat &raquo; %s',
	'filteroptions' => 'Opciones de filtrado',
	'filterbydepartment' => 'Filtrar por Departamento',
	'desc_filterbydepartment' => 'Si no se elige aquí algún departamento específico, ' . SWIFT_PRODUCT . ' sólo usará los departamentos seleccionados para determinar el estado conectado/desconectado de los usuarios. Los usuarios, además, únicamente podrán elegir los departamentos seleccionados cuando soliciten un chat.<BR /><BR /><b>NOTA:</b> Esto quiere decir que si todos los operadores del departamento seleccionado están desconectados se le mostrará al usuario que no hay nadie disponible, aún en el caso de que haya operadores disponibles en otros departamentos.',
	'routetochatskill' => 'Redirigir chat a especialista',
	'desc_routetochatskill' => SWIFT_PRODUCT . ' dará preferencia a los operadores conectados con la especialidad seleccionada. Si no hay operadores disponibles con la especialidad seleccionada, el chat será redirigido usando el método estándar.',
	'generaloptions' => 'Opciones Generales',
	'usesecurelinks' => 'Usar Enlaces Seguros (https://)',
	'desc_usesecurelinks' => 'Si se activa, los enlaces de chat javascript se cambiarán por su equivalente https. Debe asegurarse de que la URL del sistema se define como "https" para que esta opción funcione.',
	'notselected' => '- Sin seleccionar -',
	'usedefault' => '- Usar estándar -',
	'tagtemplategroup' => 'Grupo de plantillas',
	'desc_tagtemplategroup' => 'Si se selecciona, ' . SWIFT_PRODUCT . ' cargará todas las plantillas solicitadas del grupo de plantillas seleccionado.',
	'skipuserdetails' => 'Saltar detalles de usuario',
	'desc_skipuserdetails' => 'Si se activa, el usuario será redirigido inmediatamente al inicio de chat y no se solicitarán detalles adicionales como nombre, email o asunto.',
	'nojavascript' => '¿Sin JavaScript?',
	'desc_nojavascript' => 'Si se activa, ' . SWIFT_PRODUCT . ' generará una etiqueta HTML que no incluirá JavaScript.<BR /><font color="red"><b>NOTA IMPORTANTE: </b></font>Esta opción desactivará todas las funciones de seguimiento de visitantes y únicamente se recomienda para firmas de correo, páginas de subastas o áreas en las que el HTML está muy limitado.',
	'defaulttextcontents' => 'Chat',
	'defaulttextcontentscall' => 'Pulse para Llamar',
	'textcontents' => 'Enlazar contenido',
	'desc_textcontents' => '',
	'insertvariable' => 'Insertar variable',
	'insertalert' => 'Insertar alerta',
	'tabcustomize' => 'Personalizar',
	'customonlineimage' => 'Imagen Conectado personalizada',
	'desc_customonlineimage' => '',
	'customofflineimage' => 'Imagen Desconectado personalizada',
	'desc_customofflineimage' => '',
	'customawayimage' => 'Imagen Ausente Personalizada',
	'desc_customawayimage' => '',
	'custombackshortlyimage' => 'Imagen Vuelvo Enseguida Personalizada',
	'desc_custombackshortlyimage' => '',
	'badgewhite' => 'Blanco',
	'badgeblack' => 'Negro',
	'sitebadgecolor' => 'Color de texto',
	'desc_sitebadgecolor' => 'Seleccione el color del texto del distintivo',
	'sitebadgelanguage' => 'Idioma distintivo',
	'desc_sitebadgelanguage' => 'Seleccione el idioma del texto que se mostrará en el distintivo.',
	'title_tagcode' => 'Código de etiqueta generado',
	'desc_tagcode' => 'Ponga el cursor en el campo siguiente, después copie su contenido y péguelo en el código fuente de su página web.',
	'tagcode' => 'Código de etiqueta',
	'tagcodeheader' => 'INICIO CÓDIGO ETIQUETA ' . SWIFT_PRODUCT . ' - NO EDITAR!',
	'tagcodefooter' => 'FIN CÓDIGO ETIQUETA ' . SWIFT_PRODUCT . ' - NO EDITAR!',
	'jswarning' => 'JAVASCRIPT DESACTIVADO',
	'tagpoweredlivechat' => 'Software chat proporcionado',
	'tagpoweredby' => 'por',
	'badgelivechat' => 'chat',
	'badgelivehelp' => 'ayuda',
	'badgecallus' => 'llámenos',
	'badgecallme' => 'llámeme',
	'sitebadgetext' => 'Texto distintivo',
	'desc_sitebadgetext' => 'Seleccione el texto que debería aparecer en el distintivo de la web.',
	'sitebadgeonlinecolor' => 'Color de Fondo: Conectado',
	'desc_sitebadgeonlinecolor' => '',
	'sitebadgeofflinecolor' => 'Color de Fondo: Offline',
	'desc_sitebadgeofflinecolor' => '',
	'sitebadgeawaycolor' => 'Color de Fondo: Ausente',
	'desc_sitebadgeawaycolor' => '',
	'sitebadgebackshortlycolor' => 'Color de Fondo: Vuelvo enseguida',
	'titleinvalidfileext' => 'Extensión de Archivo de Imagen Incorrecta',
	'msginvalidfileext' => 'El archivo de imagen del botón tiene una extensión no válida. Las extensiones válidas son: gif, jpeg, jpg, png',

	/*
	 * ###############################################
	 * BADGE LANGUAGE LOCALES
	 * ###############################################
	 */
	'badgeenglish' => 'English',
	'badgespanish' => 'Español',
);
?>