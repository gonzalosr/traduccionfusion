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
	'dashboard' => 'Panel de control',
	'preferences' => 'Preferencias',
	'privatemessages' => 'Mensajes privados',

	// ======= BEGIN v3 IMPORT =======
	'timezonephp' => 'Zona horaria',
	'desc_timezonephp' => 'Seleccione la zona horaria en la que se encuentra. Si selecciona una zona horaria aquí, su selección anulará la zona horaria por defecto.',
	'defaulttimezone' => '-- Usar zona horaria por defecto --',
	// ======= END v3 IMPORT =======

	// Preferences
	'staffdetails' => 'Detalles de operador',
	'requiredfields' => 'Campos obligatorios',
	'staffgroup' => 'Equipo',
	'updatedetails' => 'Detalles de actualización',
	'stafffullname' => 'Nombre completo',
	'desc_stafffullname' => 'Introduzca su nombre completo. Este nombre será visible para los usuarios y se usará como nombre del remitente en los correos electrónicos salientes.',
	'changepassword' => 'Cambiar contraseña',
	'staffpassword' => 'Resetear contraseña',
	'desc_staffpassword' => 'Si desea cambiar su contraseña actual introduzca la nueva contraseña aquí.',
	'staffpasswordconfirm' => 'Contraseña (Confirmación)',
	'desc_staffpasswordconfirm' => 'Vuelva a introducis su nueva contraseña.',
	'staffemail' => 'Email',
	'optionalfields' => 'Campos opcionales',
	'staffmobilenumber' => 'Teléfono móvil',
	'desc_staffmobilenumber' => 'Si desea recibir alertas por SMS, introduzca su teléfono móvil.<br/><i>Nota: Introduzca únicamente su número de teléfono sin espacios ni guiones.<br/>Por ejemplo: \'600123456\'</i> ',
	'staffsignature' => 'Firma',
	'desc_staffsignature' => 'Introduzca la firma que se añadirá al final de todos los emails salientes. Por ejemplo.<br/><i>Por ejemplo:<br/>\'Víctor Sauler Portal<br/>Menganito enterprises<br/>http://menganitoenterprises.com/\'</i>',
	'timezoneoffset' => 'Zona horaria',
	'desc_timezoneoffset' => 'Seleccione su zona horaria. Si se establece, esto anulará el valor por defecto.',
	'enabledst' => 'Activar horario de verano',
	'desc_enabledst' => 'Seleccione si quiere activar el Horario de Verano.',
	'passworddontmatch' => 'ERROR: Las contraseñas no coinciden',
	'informationupdated' => 'Información actualizada correctamente',
	'enablepmalerts' => 'Activar aviso de nuevos mensajes privados por email',
	'enablepmjsalerts' => 'Activar aviso de nuevos mensajes privados en el navegador',
	'desc_enablepmalerts' => 'Seleccione si quiere recibir un aviso por email cuando reciba un mensaje privado.',
	'desc_enablepmjsalerts' => 'Seleccione si quiere recibir un aviso en el navegador cuando reciba un mensaje privado.',
	'generalsettings' => 'Configuración general',
	'desc_staffemail' => 'Introduzca aquí su dirección de email personal. Todas las alertas asignadas a su cuenta se enviarán a esta dirección. '.IIF(SWIFT_Module::IsRegistered(MODULE_PARSER), ' Asegúrese de que esta dirección no está asociada con una cola de email. Si hay una cola de email con la misma dirección, se producirán bucles de reenvío, causando problemas de rendimiento.'),

	// Time Zones
	'time_99' => '-- Zona horaria predeterminada --',
	'time_-12' => 'GMT -12:00 horas : Enitwetok, Kwajalien',
	'time_-11' => 'GMT -11:00 horas : Midway Island, Samoa',
	'time_-10' => 'GMT -10:00 horas : Hawaii',
	'time_-9' => 'GMT -9:00 horas : Alaska',
	'time_-8' => 'GMT -8:00 horas : Pacific Time (US & Canada)',
	'time_-7' => 'GMT -7:00 horas : Mountain Time (US & Canada)',
	'time_-6' => 'GMT -6:00 horas : Central Time (US & Canada), Mexico City',
	'time_-5' => 'GMT -5:00 horas : Eastern Time (US & Canada), Bogota, Lima, Quito',
	'time_-4' => 'GMT -4:00 horas : Atlantic Time (Canada), Caracas, La Paz',
	'time_-3.5' => 'GMT -3:30 horas : Newfoundland',
	'time_-3' => 'GMT -3:00 horas : Brazil, Buenos Aires, Georgetown, Falkland Is.',
	'time_-2' => 'GMT -2:00 horas : Mid-Atlantic, Ascention Is., St Helena',
	'time_-1' => 'GMT -1:00 horas : Azores, Cape Verde Islands',
	'time_0' => 'GMT : Casablanca, Dublin, Edinburgh, London, Lisbon, Monrovia',
	'time_1' => 'GMT +1:00 horas : Berlín, Bruselas, Copenhague, Madrid, París, Roma',
	'time_2' => 'GMT +2:00 horas : Kaliningrad, South Africa, Warsaw',
	'time_3' => 'GMT +3:00 horas : Baghdad, Riyadh, Moscow, Nairobi',
	'time_3.5' => 'GMT +3:30 horas : Tehran',
	'time_4' => 'GMT +4:00 horas : Abu Dhabi, Baku, Muscat, Tbilisi',
	'time_4.5' => 'GMT +4:30 horas : Kabul',
	'time_5' => 'GMT +5:00 horas : Ekaterinburg, Islamabad, Karachi, Tashkent',
	'time_5.5' => 'GMT +5:30 horas : Bombay, Calcutta, Madras, New Delhi',
	'time_6' => 'GMT +6:00 horas : Almaty, Colomba, Dhaka',
	'time_7' => 'GMT +7:00 horas : Bangkok, Hanoi, Jakarta',
	'time_8' => 'GMT +8:00 horas : Beijing, Hong Kong, Perth, Singapore, Taipei',
	'time_9' => 'GMT +9:00 horas : Osaka, Sapporo, Seoul, Tokyo, Yakutsk',
	'time_9.5' => 'GMT +9:30 horas : Adelaide, Darwin',
	'time_10' => 'GMT +10:00 horas : Melbourne, Papua New Guinea, Sydney, Vladivostok',
	'time_11' => 'GMT +11:00 horas : Magadan, New Caledonia, Solomon Islands',
	'time_12' => 'GMT +12:00 horas : Auckland, Wellington, Fiji, Marshall Island',


	// Work Schedule
	'workschedule' => 'Programación de trabajo',
	'closed' => 'De vacaciones',
	'invalidschedule' => 'Se ha especificado una programación de operador no válida',
	'hourrangeerror' => 'ERROR: el intervalo de uno de los días es incorrecto',
	'workscheduleconfirm' => 'Programación de trabajo actualizada correctamente',
);
?>