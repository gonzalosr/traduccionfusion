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
	{code:"Settings", "format":{"itemoff":[0,0], "image":themepath+"menu_settings.gif", "oimage":themepath+"menu_settings.gif", "imgsize":[20,22]}, url:"index.php?_m=core&_a=preferences"},
	{code:"Work Schedule", url:"index.php?_m=core&_a=workschedule", "format":{"image":themepath+"menu_calendarschedule.gif", "oimage":themepath+"menu_calendarschedule.gif", "imgsize":[20,22]}},
	{code:"Change Password", url:"index.php?_m=core&_a=changepassword", "format":{"image":themepath+"menu_lock.gif", "oimage":themepath+"menu_lock.gif", "imgsize":[20,22]}}
];

var MENU_TEAMWORK =
[
	{"popup":1, "popupoff":[0,0], "pos":[0,0], "zindex":50, "size":[22,180], "itemoff":[21,0], "leveloff":[10,59], "delay":1000, "style":VSTYLE, "imgsize":[20,17], dynamic: true, https_fix_blank_doc:themepath+'blank.html'},
	{code:"Event", "format":{"itemoff":[0,0], "image":themepath+"menu_newevent.gif", "oimage":themepath+"menu_newevent.gif", "imgsize":[20,22]}, url:"index.php?_m=teamwork&_a=insertevent"},
	{code:"Task", url:"index.php?_m=teamwork&_a=inserttask", "format":{"image":themepath+"menu_newtask.gif", "oimage":themepath+"menu_newtask.gif", "imgsize":[20,22]}},
	{code:"Contact", url:"index.php?_m=teamwork&_a=insertcontact", "format":{"image":themepath+"menu_newcontact.gif", "oimage":themepath+"menu_newcontact.gif", "imgsize":[20,22]}}
];

var MENU_LSMESSAGES =
[
	{"popup":1, "popupoff":[0,0], "pos":[0,0], "zindex":50, "size":[22,180], "itemoff":[21,0], "leveloff":[10,59], "delay":1000, "style":VSTYLE, "imgsize":[20,17], dynamic: true, https_fix_blank_doc:themepath+'blank.html'},
	{code:"New Messages", "format":{"itemoff":[0,0], "image":themepath+"menu_newmessages.gif", "oimage":themepath+"menu_newmessages.gif", "imgsize":[20,22]}, url:"index.php?_m=livesupport&_a=messages"},
	{code:"Replied Messages", url:"index.php?_m=livesupport&_a=repliedmessages", "format":{"image":themepath+"menu_repliedmessages.gif", "oimage":themepath+"menu_repliedmessages.gif", "imgsize":[20,22]}}
];

var MENU_LSCANNED =
[
	{"popup":1, "popupoff":[0,0], "pos":[0,0], "zindex":50, "size":[23,180], "itemoff":[21,0], "leveloff":[10,59], "delay":1000, "style":VSTYLE, dynamic: true, https_fix_blank_doc:themepath+'blank.html'},
	{code:"Manage Categories", "format":{"itemoff":[0,0], "image":themepath+"icon_menufolder.gif", "oimage":themepath+"icon_menufolder.gif", "imgsize":[20,22]}, url:"index.php?_m=livesupport&_a=canned"},
	{code:"Manage Responses", url:"index.php?_m=livesupport&_a=managecannedresponses", "format":{"image":themepath+"icon_menukbarticle.gif", "oimage":themepath+"icon_menukbarticle.gif", "imgsize":[20,22]}},
	{code:"Insert Category", url:"index.php?_m=livesupport&_a=insertcannedcategory", "format":{"image":themepath+"icon_menufolderstar.gif", "oimage":themepath+"icon_menufolderstar.gif", "imgsize":[20,22]}},
	{code:"Insert Response", url:"index.php?_m=livesupport&_a=insertcannedresponse", "format":{"image":themepath+"icon_menukbdraft.gif", "oimage":themepath+"icon_menukbdraft.gif", "imgsize":[20,22]}}
];

var MENU_LSADTRACKING =
[
	{"popup":1, "popupoff":[0,0], "pos":[0,0], "zindex":50, "size":[22,180], "itemoff":[21,0], "leveloff":[10,59], "delay":1000, "style":VSTYLE, "imgsize":[20,17], dynamic: true, https_fix_blank_doc:themepath+'blank.html'},
	{code:"Manage Campaigns", "format":{"itemoff":[0,0], "image":themepath+"menu_campaigns.gif", "oimage":themepath+"menu_campaigns.gif", "imgsize":[20,22]}, url:"index.php?_m=livesupport&_a=adtracking"},
	{code:"Insert Campaign", url:"index.php?_m=livesupport&_a=insertcampaign", "format":{"image":themepath+"menu_insertcampaign.gif", "oimage":themepath+"menu_insertcampaign.gif", "imgsize":[20,22]}},
	{code:"Reports", url:"index.php?_m=livesupport&_a=adreports", "format":{"image":themepath+"menu_reports.gif", "oimage":themepath+"menu_reports.gif", "imgsize":[20,22]}}
];

var MENU_LSTAGS =
[
	{"popup":1, "popupoff":[0,0], "pos":[0,0], "zindex":50, "size":[22,180], "itemoff":[21,0], "leveloff":[10,59], "delay":1000, "style":VSTYLE, dynamic: true, https_fix_blank_doc:themepath+'blank.html'},
	{code:"HTML Button", "format":{"itemoff":[0,0], "image":themepath+"menu_htmlcode.gif", "oimage":themepath+"menu_htmlcode.gif", "imgsize":[20,22]}, url:"index.php?_m=livesupport&_a=htmlbutton"},
	{code:"Email Signature", url:"index.php?_m=livesupport&_a=emailbutton", "format":{"image":themepath+"menu_emailsignature.gif", "oimage":themepath+"menu_emailsignature.gif", "imgsize":[20,22]}},
	{code:"Text Link", url:"index.php?_m=livesupport&_a=textlink", "format":{"image":themepath+"menu_textlink.gif", "oimage":themepath+"menu_textlink.gif", "imgsize":[20,22]}},
	{code:"Visitor Tracking", url:"index.php?_m=livesupport&_a=visitortracking", "format":{"image":themepath+"menu_visitortracking.gif", "oimage":themepath+"menu_visitortracking.gif", "imgsize":[20,22]}}
];

var MENU_TICKETSEARCH =
[
	{"popup":1, "popupoff":[0,0], "pos":[0,0], "zindex":50, "size":[50,180], "itemoff":[50,0], "leveloff":[10,59], "delay":1000, "style":VSTYLE, dynamic: true, https_fix_blank_doc:themepath+'blank.html'},
	{code:"New Tickets", "format":{"itemoff":[0,0], "size":[23,180], "image":themepath+"menu_newtickets.gif", "oimage":themepath+"menu_newtickets.gif", "imgsize":[20,22]}, url:"index.php?_m=tickets&_a=search&type=newtickets"},
	{code:"Advanced Search", "format":{"itemoff":[21,0], "size":[23,180], "image":themepath+"menu_search.gif", "oimage":themepath+"menu_search.gif", "imgsize":[20,22]}, url:"index.php?_m=tickets&_a=search"},
	{code:"<table width='100%'  border='0' cellspacing='0' cellpadding='2'><tr><td width='1'><img src='"+themepath+"doublearrows.gif' border='0' /></td><td width='100%'><span class='smalltext'>Quick Search</span></td></tr><tr><td colspan='2'><form name='tiqform' action='index.php' method='POST'><input type='text' name='query' class='swifttext' id='tiqsearch' style='width:160px;' /><input type='hidden' name='_m' value='tickets' /><input type='hidden' name='_a' value='search' /><input type='hidden' name='type' value='query' /></form></td></tr></table>", hasControls:true, "format":{"itemoff":[22,0]}},
	{code:"<table width='100%'  border='0' cellspacing='0' cellpadding='2'><tr><td width='1'><img src='"+themepath+"doublearrows.gif' border='0' /></td><td width='100%'><span class='smalltext'>Ticket ID Lookup</span></td></tr><tr><td colspan='2'><form name='tidform' action='index.php' method='POST'><input type='text' name='ticketid' class='swifttext' id='tidsearch' style='width:160px;' /><input type='hidden' name='_m' value='tickets' /><input type='hidden' name='_a' value='search' /><input type='hidden' name='type' value='ticketid' /></form></td></tr></table>", hasControls:true, "format":{"size":[50,180]}},
	{code:"<table width='100%'  border='0' cellspacing='0' cellpadding='2'><tr><td width='1'><img src='"+themepath+"doublearrows.gif' border='0' /></td><td width='100%'><span class='smalltext'>Creator/Replier</span></td></tr><tr><td colspan='2'><form name='tidform' action='index.php' method='POST'><input type='text' name='fullname' class='swifttext' id='namesearch' style='width:160px;' /><input type='hidden' name='_m' value='tickets' /><input type='hidden' name='_a' value='search' /><input type='hidden' name='type' value='creator' /></form></td></tr></table>", hasControls:true, "format":{"size":[50,180]}}
];

var MENU_TICKETPRED =
[
	{"popup":1, "popupoff":[0,0], "pos":[0,0], "zindex":50, "size":[23,180], "itemoff":[21,0], "leveloff":[10,59], "delay":1000, "style":VSTYLE, dynamic: true, https_fix_blank_doc:themepath+'blank.html'},
	{code:"Manage Categories", "format":{"itemoff":[0,0], "image":themepath+"icon_menufolder.gif", "oimage":themepath+"icon_menufolder.gif", "imgsize":[20,22]}, url:"index.php?_m=tickets&_a=managepredcat"},
	{code:"Manage Replies", url:"index.php?_m=tickets&_a=managepredreplies", "format":{"image":themepath+"icon_menukbarticle.gif", "oimage":themepath+"icon_menukbarticle.gif", "imgsize":[20,22]}},
	{code:"Insert Category", url:"index.php?_m=tickets&_a=insertpredcat", "format":{"image":themepath+"icon_menufolderstar.gif", "oimage":themepath+"icon_menufolderstar.gif", "imgsize":[20,22]}},
	{code:"Insert Reply", url:"index.php?_m=tickets&_a=insertpredreply", "format":{"image":themepath+"icon_menukbdraft.gif", "oimage":themepath+"icon_menukbdraft.gif", "imgsize":[20,22]}}
];

var MENU_TICKETALERTS =
[
	{"popup":1, "popupoff":[0,0], "pos":[0,0], "zindex":50, "size":[22,180], "itemoff":[21,0], "leveloff":[10,59], "delay":1000, "style":VSTYLE, "imgsize":[20,17], dynamic: true, https_fix_blank_doc:themepath+'blank.html'},
	{code:"Manage Alerts", "format":{"itemoff":[0,0], "image":themepath+"menu_alertrules.gif", "oimage":themepath+"menu_alertrules.gif", "imgsize":[20,22]}, url:"index.php?_m=tickets&_a=managealerts"},
	{code:"New Alert Rule", url:"index.php?_m=tickets&_a=insertalert", "format":{"image":themepath+"menu_insertalertrule.gif", "oimage":themepath+"menu_insertalertrule.gif", "imgsize":[20,22]}}
];

var MENU_TICKETFILTERS =
[
	{"popup":1, "popupoff":[0,0], "pos":[0,0], "zindex":50, "size":[22,180], "itemoff":[21,0], "leveloff":[10,59], "delay":1000, "style":VSTYLE, "imgsize":[20,17], dynamic: true, https_fix_blank_doc:themepath+'blank.html'},
	{code:"Manage Filters", "format":{"itemoff":[0,0], "image":themepath+"menu_filters.gif", "oimage":themepath+"menu_filters.gif", "imgsize":[20,22]}, url:"index.php?_m=tickets&_a=managefilters"},
	{code:"New Filter", url:"index.php?_m=tickets&_a=insertfilter", "format":{"image":themepath+"menu_insertfilter.gif", "oimage":themepath+"menu_insertfilter.gif", "imgsize":[20,22]}}
];

var MENU_TR_REPORTS =
[
	{"popup":1, "popupoff":[0,0], "pos":[0,0], "zindex":50, "size":[22,200], "itemoff":[21,0], "leveloff":[10,59], "delay":1000, "style":VSTYLE, "imgsize":[20,17], dynamic: true, https_fix_blank_doc:themepath+'blank.html'},
	{code:"Popular Categories", "format":{"itemoff":[0,0], "image":themepath+"menu_reports.gif", "oimage":themepath+"menu_reports.gif", "imgsize":[20,22]}, url:"index.php?_m=troubleshooter&_a=reports&type=popularcategories"},
	{code:"Popular Steps", url:"index.php?_m=troubleshooter&_a=reports&type=popularsteps", "format":{"image":themepath+"menu_reports.gif", "oimage":themepath+"menu_reports.gif", "imgsize":[20,22]}}
];

var MENU_DL_REPORTS =
[
	{"popup":1, "popupoff":[0,0], "pos":[0,0], "zindex":50, "size":[22,200], "itemoff":[21,0], "leveloff":[10,59], "delay":1000, "style":VSTYLE, "imgsize":[20,17], dynamic: true, https_fix_blank_doc:themepath+'blank.html'},
	{code:"Popular Downloads", "format":{"itemoff":[0,0], "image":themepath+"menu_reports.gif", "oimage":themepath+"menu_reports.gif", "imgsize":[20,22]}, url:"index.php?_m=downloads&_a=reports&type=populardownloads"}
];

var MENU_KB_REPORTS =
[
	{"popup":1, "popupoff":[0,0], "pos":[0,0], "zindex":50, "size":[22,200], "itemoff":[21,0], "leveloff":[10,59], "delay":1000, "style":VSTYLE, "imgsize":[20,17], dynamic: true, https_fix_blank_doc:themepath+'blank.html'},
	{code:"Popular Articles (Views)", "format":{"itemoff":[0,0], "image":themepath+"menu_reports.gif", "oimage":themepath+"menu_reports.gif", "imgsize":[20,22]}, url:"index.php?_m=knowledgebase&_a=reports&type=populararticles"},
	{code:"Comment Report", "format":{"image":themepath+"menu_reports.gif", "oimage":themepath+"menu_reports.gif", "imgsize":[20,22]}, url:"index.php?_m=knowledgebase&_a=reports&type=comments"},
	{code:"Rating Report", "format":{"image":themepath+"menu_reports.gif", "oimage":themepath+"menu_reports.gif", "imgsize":[20,22]}, url:"index.php?_m=knowledgebase&_a=reports&type=rating"}
];

var MENU_T_REPORTS =
[
	{"popup":1, "popupoff":[0,0], "pos":[0,0], "zindex":50, "size":[22,200], "itemoff":[21,0], "leveloff":[10,59], "delay":1000, "style":VSTYLE, "imgsize":[20,17], dynamic: true, https_fix_blank_doc:themepath+'blank.html'},
	{code:"Work Summary", "format":{"itemoff":[0,0], "image":themepath+"menu_reports.gif", "oimage":themepath+"menu_reports.gif", "imgsize":[20,22]}, url:"index.php?_m=tickets&_a=reports&type=worksummary"},
//	{code:"Bill Report (Staff)", "format":{"image":themepath+"menu_reports.gif", "oimage":themepath+"menu_reports.gif", "imgsize":[20,22]}, url:"index.php?_m=tickets&_a=reports&type=populararticles"},
//	{code:"Bill Report (User)", "format":{"image":themepath+"menu_reports.gif", "oimage":themepath+"menu_reports.gif", "imgsize":[20,22]}, url:"index.php?_m=tickets&_a=reports&type=comments"},
	{code:"Department Summary", "format":{"image":themepath+"menu_reports.gif", "oimage":themepath+"menu_reports.gif", "imgsize":[20,22]}, url:"index.php?_m=tickets&_a=reports&type=department"},
	{code:"Service Level Report", "format":{"image":themepath+"menu_reports.gif", "oimage":themepath+"menu_reports.gif", "imgsize":[20,22]}, url:"index.php?_m=tickets&_a=reports&type=sla"},
//	{code:"Ticket Assignment Report", "format":{"image":themepath+"menu_reports.gif", "oimage":themepath+"menu_reports.gif", "imgsize":[20,22]}, url:"index.php?_m=tickets&_a=reports&type=rating"},
//	{code:"Performance Report", "format":{"image":themepath+"menu_reports.gif", "oimage":themepath+"menu_reports.gif", "imgsize":[20,22]}, url:"index.php?_m=tickets&_a=reports&type=rating"},
	{code:"Response Time Report", "format":{"image":themepath+"menu_reports.gif", "oimage":themepath+"menu_reports.gif", "imgsize":[20,22]}, url:"index.php?_m=tickets&_a=reports&type=response"},
];*/