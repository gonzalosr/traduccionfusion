/**
* ###############################################
* STAFF CP MENUS
* ###############################################
*/

// RESERVED KEY WORDS
var code="code";var url="url";var targ="target";var sub="sub";

// ITEMS, TRANSLATE THE CODE TEXT ONLY!
/*
var MENU_PREFERENCES =
[
	{"popup":1, "popupoff":[0,0], "pos":[0,0], "zindex":50, "size":[23,180], "itemoff":[21,0], "leveloff":[10,59], "delay":1000, "style":VSTYLE, dynamic: true, https_fix_blank_doc:themepath+'blank.html'},
	{code:"Configuración", "format":{"itemoff":[0,0], "image":themepath+"menu_settings.gif", "oimage":themepath+"menu_settings.gif", "imgsize":[20,22]}, url:"index.php?_m=core&_a=preferences"},
	{code:"Calendario de trabajo", url:"index.php?_m=core&_a=workschedule", "format":{"image":themepath+"menu_calendarschedule.gif", "oimage":themepath+"menu_calendarschedule.gif", "imgsize":[20,22]}},
	{code:"Cambiar contraseña", url:"index.php?_m=core&_a=changepassword", "format":{"image":themepath+"menu_lock.gif", "oimage":themepath+"menu_lock.gif", "imgsize":[20,22]}}
];

var MENU_TEAMWORK =
[
	{"popup":1, "popupoff":[0,0], "pos":[0,0], "zindex":50, "size":[22,180], "itemoff":[21,0], "leveloff":[10,59], "delay":1000, "style":VSTYLE, "imgsize":[20,17], dynamic: true, https_fix_blank_doc:themepath+'blank.html'},
	{code:"Evento", "format":{"itemoff":[0,0], "image":themepath+"menu_newevent.gif", "oimage":themepath+"menu_newevent.gif", "imgsize":[20,22]}, url:"index.php?_m=teamwork&_a=insertevent"},
	{code:"Tarea", url:"index.php?_m=teamwork&_a=inserttask", "format":{"image":themepath+"menu_newtask.gif", "oimage":themepath+"menu_newtask.gif", "imgsize":[20,22]}},
	{code:"Contacto", url:"index.php?_m=teamwork&_a=insertcontact", "format":{"image":themepath+"menu_newcontact.gif", "oimage":themepath+"menu_newcontact.gif", "imgsize":[20,22]}}
];

var MENU_LSMESSAGES =
[
	{"popup":1, "popupoff":[0,0], "pos":[0,0], "zindex":50, "size":[22,180], "itemoff":[21,0], "leveloff":[10,59], "delay":1000, "style":VSTYLE, "imgsize":[20,17], dynamic: true, https_fix_blank_doc:themepath+'blank.html'},
	{code:"Nuevos mensajes", "format":{"itemoff":[0,0], "image":themepath+"menu_newmessages.gif", "oimage":themepath+"menu_newmessages.gif", "imgsize":[20,22]}, url:"index.php?_m=livesupport&_a=messages"},
	{code:"Mensajes respondidos", url:"index.php?_m=livesupport&_a=repliedmessages", "format":{"image":themepath+"menu_repliedmessages.gif", "oimage":themepath+"menu_repliedmessages.gif", "imgsize":[20,22]}}
];

var MENU_LSCANNED =
[
	{"popup":1, "popupoff":[0,0], "pos":[0,0], "zindex":50, "size":[23,180], "itemoff":[21,0], "leveloff":[10,59], "delay":1000, "style":VSTYLE, dynamic: true, https_fix_blank_doc:themepath+'blank.html'},
	{code:"Administrar categorías", "format":{"itemoff":[0,0], "image":themepath+"icon_menufolder.gif", "oimage":themepath+"icon_menufolder.gif", "imgsize":[20,22]}, url:"index.php?_m=livesupport&_a=canned"},
	{code:"Administrar respuestas", url:"index.php?_m=livesupport&_a=managecannedresponses", "format":{"image":themepath+"icon_menukbarticle.gif", "oimage":themepath+"icon_menukbarticle.gif", "imgsize":[20,22]}},
	{code:"Insertar categoría", url:"index.php?_m=livesupport&_a=insertcannedcategory", "format":{"image":themepath+"icon_menufolderstar.gif", "oimage":themepath+"icon_menufolderstar.gif", "imgsize":[20,22]}},
	{code:"Insertar respuesta", url:"index.php?_m=livesupport&_a=insertcannedresponse", "format":{"image":themepath+"icon_menukbdraft.gif", "oimage":themepath+"icon_menukbdraft.gif", "imgsize":[20,22]}}
];

var MENU_LSADTRACKING =
[
	{"popup":1, "popupoff":[0,0], "pos":[0,0], "zindex":50, "size":[22,180], "itemoff":[21,0], "leveloff":[10,59], "delay":1000, "style":VSTYLE, "imgsize":[20,17], dynamic: true, https_fix_blank_doc:themepath+'blank.html'},
	{code:"Administrar campañas", "format":{"itemoff":[0,0], "image":themepath+"menu_campaigns.gif", "oimage":themepath+"menu_campaigns.gif", "imgsize":[20,22]}, url:"index.php?_m=livesupport&_a=adtracking"},
	{code:"Insertar campaña", url:"index.php?_m=livesupport&_a=insertcampaign", "format":{"image":themepath+"menu_insertcampaign.gif", "oimage":themepath+"menu_insertcampaign.gif", "imgsize":[20,22]}},
	{code:"Informes", url:"index.php?_m=livesupport&_a=adreports", "format":{"image":themepath+"menu_reports.gif", "oimage":themepath+"menu_reports.gif", "imgsize":[20,22]}}
];

var MENU_LSTAGS =
[
	{"popup":1, "popupoff":[0,0], "pos":[0,0], "zindex":50, "size":[22,180], "itemoff":[21,0], "leveloff":[10,59], "delay":1000, "style":VSTYLE, dynamic: true, https_fix_blank_doc:themepath+'blank.html'},
	{code:"Botón HTML", "format":{"itemoff":[0,0], "image":themepath+"menu_htmlcode.gif", "oimage":themepath+"menu_htmlcode.gif", "imgsize":[20,22]}, url:"index.php?_m=livesupport&_a=htmlbutton"},
	{code:"Firma de email", url:"index.php?_m=livesupport&_a=emailbutton", "format":{"image":themepath+"menu_emailsignature.gif", "oimage":themepath+"menu_emailsignature.gif", "imgsize":[20,22]}},
	{code:"Enlace de texto", url:"index.php?_m=livesupport&_a=textlink", "format":{"image":themepath+"menu_textlink.gif", "oimage":themepath+"menu_textlink.gif", "imgsize":[20,22]}},
	{code:"Seguimiento de visitantes", url:"index.php?_m=livesupport&_a=visitortracking", "format":{"image":themepath+"menu_visitortracking.gif", "oimage":themepath+"menu_visitortracking.gif", "imgsize":[20,22]}}
];

var MENU_TICKETSEARCH =
[
	{"popup":1, "popupoff":[0,0], "pos":[0,0], "zindex":50, "size":[50,180], "itemoff":[50,0], "leveloff":[10,59], "delay":1000, "style":VSTYLE, dynamic: true, https_fix_blank_doc:themepath+'blank.html'},
	{code:"Nuevos tickets", "format":{"itemoff":[0,0], "size":[23,180], "image":themepath+"menu_newtickets.gif", "oimage":themepath+"menu_newtickets.gif", "imgsize":[20,22]}, url:"index.php?_m=tickets&_a=search&type=newtickets"},
	{code:"Búsqueda avanzada", "format":{"itemoff":[21,0], "size":[23,180], "image":themepath+"menu_search.gif", "oimage":themepath+"menu_search.gif", "imgsize":[20,22]}, url:"index.php?_m=tickets&_a=search"},
	{code:"<table width='100%'  border='0' cellspacing='0' cellpadding='2'><tr><td width='1'><img src='"+themepath+"doublearrows.gif' border='0' /></td><td width='100%'><span class='smalltext'>Búsqueda rápida</span></td></tr><tr><td colspan='2'><form name='tiqform' action='index.php' method='POST'><input type='text' name='query' class='swifttext' id='tiqsearch' style='width:160px;' /><input type='hidden' name='_m' value='tickets' /><input type='hidden' name='_a' value='search' /><input type='hidden' name='type' value='query' /></form></td></tr></table>", hasControls:true, "format":{"itemoff":[22,0]}},
	{code:"<table width='100%'  border='0' cellspacing='0' cellpadding='2'><tr><td width='1'><img src='"+themepath+"doublearrows.gif' border='0' /></td><td width='100%'><span class='smalltext'>Buscar ID ticket</span></td></tr><tr><td colspan='2'><form name='tidform' action='index.php' method='POST'><input type='text' name='ticketid' class='swifttext' id='tidsearch' style='width:160px;' /><input type='hidden' name='_m' value='tickets' /><input type='hidden' name='_a' value='search' /><input type='hidden' name='type' value='ticketid' /></form></td></tr></table>", hasControls:true, "format":{"size":[50,180]}},
	{code:"<table width='100%'  border='0' cellspacing='0' cellpadding='2'><tr><td width='1'><img src='"+themepath+"doublearrows.gif' border='0' /></td><td width='100%'><span class='smalltext'>Creador/Respondedor</span></td></tr><tr><td colspan='2'><form name='tidform' action='index.php' method='POST'><input type='text' name='fullname' class='swifttext' id='namesearch' style='width:160px;' /><input type='hidden' name='_m' value='tickets' /><input type='hidden' name='_a' value='search' /><input type='hidden' name='type' value='creator' /></form></td></tr></table>", hasControls:true, "format":{"size":[50,180]}}
];

var MENU_TICKETPRED =
[
	{"popup":1, "popupoff":[0,0], "pos":[0,0], "zindex":50, "size":[23,180], "itemoff":[21,0], "leveloff":[10,59], "delay":1000, "style":VSTYLE, dynamic: true, https_fix_blank_doc:themepath+'blank.html'},
	{code:"Administrar categorías", "format":{"itemoff":[0,0], "image":themepath+"icon_menufolder.gif", "oimage":themepath+"icon_menufolder.gif", "imgsize":[20,22]}, url:"index.php?_m=tickets&_a=managepredcat"},
	{code:"Administrar respuestas", url:"index.php?_m=tickets&_a=managepredreplies", "format":{"image":themepath+"icon_menukbarticle.gif", "oimage":themepath+"icon_menukbarticle.gif", "imgsize":[20,22]}},
	{code:"Insertar categoría", url:"index.php?_m=tickets&_a=insertpredcat", "format":{"image":themepath+"icon_menufolderstar.gif", "oimage":themepath+"icon_menufolderstar.gif", "imgsize":[20,22]}},
	{code:"Insertar respuesta", url:"index.php?_m=tickets&_a=insertpredreply", "format":{"image":themepath+"icon_menukbdraft.gif", "oimage":themepath+"icon_menukbdraft.gif", "imgsize":[20,22]}}
];

var MENU_TICKETALERTS =
[
	{"popup":1, "popupoff":[0,0], "pos":[0,0], "zindex":50, "size":[22,180], "itemoff":[21,0], "leveloff":[10,59], "delay":1000, "style":VSTYLE, "imgsize":[20,17], dynamic: true, https_fix_blank_doc:themepath+'blank.html'},
	{code:"Administrar alertas", "format":{"itemoff":[0,0], "image":themepath+"menu_alertrules.gif", "oimage":themepath+"menu_alertrules.gif", "imgsize":[20,22]}, url:"index.php?_m=tickets&_a=managealerts"},
	{code:"Nueva regla de alerta", url:"index.php?_m=tickets&_a=insertalert", "format":{"image":themepath+"menu_insertalertrule.gif", "oimage":themepath+"menu_insertalertrule.gif", "imgsize":[20,22]}}
];

var MENU_TICKETFILTERS =
[
	{"popup":1, "popupoff":[0,0], "pos":[0,0], "zindex":50, "size":[22,180], "itemoff":[21,0], "leveloff":[10,59], "delay":1000, "style":VSTYLE, "imgsize":[20,17], dynamic: true, https_fix_blank_doc:themepath+'blank.html'},
	{code:"Administrar filtros", "format":{"itemoff":[0,0], "image":themepath+"menu_filters.gif", "oimage":themepath+"menu_filters.gif", "imgsize":[20,22]}, url:"index.php?_m=tickets&_a=managefilters"},
	{code:"Nuevo filtro", url:"index.php?_m=tickets&_a=insertfilter", "format":{"image":themepath+"menu_insertfilter.gif", "oimage":themepath+"menu_insertfilter.gif", "imgsize":[20,22]}}
];

var MENU_TR_REPORTS =
[
	{"popup":1, "popupoff":[0,0], "pos":[0,0], "zindex":50, "size":[22,200], "itemoff":[21,0], "leveloff":[10,59], "delay":1000, "style":VSTYLE, "imgsize":[20,17], dynamic: true, https_fix_blank_doc:themepath+'blank.html'},
	{code:"Categorías populares", "format":{"itemoff":[0,0], "image":themepath+"menu_reports.gif", "oimage":themepath+"menu_reports.gif", "imgsize":[20,22]}, url:"index.php?_m=troubleshooter&_a=reports&type=popularcategories"},
	{code:"Pasos populares", url:"index.php?_m=troubleshooter&_a=reports&type=popularsteps", "format":{"image":themepath+"menu_reports.gif", "oimage":themepath+"menu_reports.gif", "imgsize":[20,22]}}
];

var MENU_DL_REPORTS =
[
	{"popup":1, "popupoff":[0,0], "pos":[0,0], "zindex":50, "size":[22,200], "itemoff":[21,0], "leveloff":[10,59], "delay":1000, "style":VSTYLE, "imgsize":[20,17], dynamic: true, https_fix_blank_doc:themepath+'blank.html'},
	{code:"Descargas populares", "format":{"itemoff":[0,0], "image":themepath+"menu_reports.gif", "oimage":themepath+"menu_reports.gif", "imgsize":[20,22]}, url:"index.php?_m=downloads&_a=reports&type=populardownloads"}
];

var MENU_KB_REPORTS =
[
	{"popup":1, "popupoff":[0,0], "pos":[0,0], "zindex":50, "size":[22,200], "itemoff":[21,0], "leveloff":[10,59], "delay":1000, "style":VSTYLE, "imgsize":[20,17], dynamic: true, https_fix_blank_doc:themepath+'blank.html'},
	{code:"Artículos populares (vistas)", "format":{"itemoff":[0,0], "image":themepath+"menu_reports.gif", "oimage":themepath+"menu_reports.gif", "imgsize":[20,22]}, url:"index.php?_m=knowledgebase&_a=reports&type=populararticles"},
	{code:"Informe de comentarios", "format":{"image":themepath+"menu_reports.gif", "oimage":themepath+"menu_reports.gif", "imgsize":[20,22]}, url:"index.php?_m=knowledgebase&_a=reports&type=comments"},
	{code:"Informe de valoraciones", "format":{"image":themepath+"menu_reports.gif", "oimage":themepath+"menu_reports.gif", "imgsize":[20,22]}, url:"index.php?_m=knowledgebase&_a=reports&type=rating"}
];

var MENU_T_REPORTS =
[
	{"popup":1, "popupoff":[0,0], "pos":[0,0], "zindex":50, "size":[22,200], "itemoff":[21,0], "leveloff":[10,59], "delay":1000, "style":VSTYLE, "imgsize":[20,17], dynamic: true, https_fix_blank_doc:themepath+'blank.html'},
	{code:"Resumen de trabajo", "format":{"itemoff":[0,0], "image":themepath+"menu_reports.gif", "oimage":themepath+"menu_reports.gif", "imgsize":[20,22]}, url:"index.php?_m=tickets&_a=reports&type=worksummary"},
//	{code:"Resumen facturación (Operador)", "format":{"image":themepath+"menu_reports.gif", "oimage":themepath+"menu_reports.gif", "imgsize":[20,22]}, url:"index.php?_m=tickets&_a=reports&type=populararticles"},
//	{code:"Informe de facturación (Usuario)", "format":{"image":themepath+"menu_reports.gif", "oimage":themepath+"menu_reports.gif", "imgsize":[20,22]}, url:"index.php?_m=tickets&_a=reports&type=comments"},
	{code:"Resumen departamentos", "format":{"image":themepath+"menu_reports.gif", "oimage":themepath+"menu_reports.gif", "imgsize":[20,22]}, url:"index.php?_m=tickets&_a=reports&type=department"},
	{code:"Informe de nivel de servicio", "format":{"image":themepath+"menu_reports.gif", "oimage":themepath+"menu_reports.gif", "imgsize":[20,22]}, url:"index.php?_m=tickets&_a=reports&type=sla"},
//	{code:"Informe de asignación de tickets", "format":{"image":themepath+"menu_reports.gif", "oimage":themepath+"menu_reports.gif", "imgsize":[20,22]}, url:"index.php?_m=tickets&_a=reports&type=rating"},
//	{code:"Informe de eficiencia", "format":{"image":themepath+"menu_reports.gif", "oimage":themepath+"menu_reports.gif", "imgsize":[20,22]}, url:"index.php?_m=tickets&_a=reports&type=rating"},
	{code:"Informe de tiempo de respuesta", "format":{"image":themepath+"menu_reports.gif", "oimage":themepath+"menu_reports.gif", "imgsize":[20,22]}, url:"index.php?_m=tickets&_a=reports&type=response"},
];*/