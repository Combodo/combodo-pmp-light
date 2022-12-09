<?php
/**
 * Localized data
 *
 * @copyright   Copyright (C) 2013-2022 Combodo, ITOMIG GmbH
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

// Contact class
Dict::Add('DE DE', 'German', 'Deutsch', array(
	'Class:Contact/Attribute:project_list' => 'Offene Projekte, in die ich involviert bin',
	'Class:Contact/Attribute:projects_list' => 'Projekte',
	'Contact:Info:ProjectManager'=> 'Projekte deren Manager oder Sponsor ich bin',
	'Contact:Info:WBSManager'=> 'Liefergegenstände für die ich verantwortlich bin',
	'Class:Contact/Attribute:wbs_list' => 'Offene Liefergegenstände in die ich involviert bin',
	'Class:Contact/Attribute:wbss_list' => 'Liefergegenstände',
	'Class:Contact/Attribute:wbss_list+' => 'Liefergegenstände an denen gearbetet werden sollte',
	'Class:Contact/Tab:PMP' => 'Projekte und Liefergegenstände',
	'Class:Contact/Tab:PMP+' => 'Alle offenen Projekte und Liefergegenstände an denen ich arbeite',
	'Class:lnkContactToProject' => 'Verknüpfung Kontakt / Projekt',
	'Class:lnkContactToProject/Attribute:contact_id' => 'Kontakt',
	'Class:lnkContactToProject/Attribute:project_id' => 'Projekt',
	'Class:lnkContactToProject/Attribute:role/Value:1' => 'Kunde',
	'Class:lnkContactToProject/Attribute:role/Value:2' => 'Ressource',
	'Class:lnkContactToProject/Name' => '%1$s - %2$s',
	'Class:lnkContactToTicket/Attribute:allocated_days' => 'Zugewiesene Tage',
	'Class:lnkContactToTicket/Attribute:allocated_percent' => 'Zugewiesen Prozent',
	'Class:lnkContactToTicket/Attribute:category' => 'Verantwortlichkeit',
	'Class:lnkContactToTicket/Attribute:category/Value:1' => 'Kunde',
	'Class:lnkContactToTicket/Attribute:category/Value:2' => 'Ressource',
	'Class:lnkContactToTicket/Attribute:influence' => 'Einfluss',
	'Class:lnkContactToTicket/Attribute:influence/Value:objector' => 'Opponent',
	'Class:lnkContactToTicket/Attribute:influence/Value:partner' => 'Partner',
	'Class:lnkContactToTicket/Attribute:influence+' => 'Verhalten in diesem Projekt',
	'Class:lnkContactToTicket/Attribute:power/Value:low' => 'Niedrig',
	'Class:lnkContactToTicket/Attribute:power/Value:strong' => 'Stark',
	'Class:lnkContactToTicket/Attribute:power' => 'Macht',
	'Class:lnkContactToTicket/Attribute:power+' => 'Entscheidungsmacht',
	'Class:lnkContactToWBS' => 'Verknüpfung Kontakt / WBS',
	'Class:lnkContactToWBS/Attribute:allocated_days' => 'Zugewiesene Tage',
	'Class:lnkContactToWBS/Attribute:allocated_percent' => 'Zugewiesen Prozent',
	'Class:lnkContactToWBS/Attribute:category' => 'Verantwortlichkeit',
	'Class:lnkContactToWBS/Attribute:category/Value:1' => 'Kunde',
	'Class:lnkContactToWBS/Attribute:category/Value:2' => 'Ressource',
	'Class:lnkContactToWBS/Attribute:contact_id' => 'Stakeholder',
	'Class:lnkContactToWBS/Attribute:influence' => 'Einfluss',
	'Class:lnkContactToWBS/Attribute:influence+' => 'Verhalten in diesem Projekt',
	'Class:lnkContactToWBS/Attribute:influence/Value:objector' => 'Opponent',
	'Class:lnkContactToWBS/Attribute:influence/Value:partner' => 'Partner',
	'Class:lnkContactToWBS/Attribute:power/Value:low' => 'Niedrig',
	'Class:lnkContactToWBS/Attribute:power/Value:strong' => 'Stark',
	'Class:lnkContactToWBS/Attribute:power' => 'Macht',
	'Class:lnkContactToWBS/Attribute:power+' => 'Entscheidungsmacht',
	'Class:lnkContactToWBS/Attribute:wbs_id' => 'Liefergegenstände',
	'Class:lnkContactToWBS/Name' => '%1$s - %2$s',
));

// Project class
Dict::Add('DE DE', 'German', 'Deutsch', array(
	'Class:Project' => 'Projekt',
	'Class:Project/Attribute:agent_id' => 'Projektmanager',
	'Class:Project/Attribute:allocatedtimes_list' => 'Zugewiesene Zeit',
	'Class:Project/Attribute:calculated_end_date' => 'Enddatum des letzten Liefergegenstands',
	'Class:Project/Attribute:calculated_end_date+' => 'Spätestes Liefergegenstands-Datum',
	'Class:Project/Attribute:caller_id' => 'Sponsor',
	'Class:Project/Attribute:constraints' => 'Einschränkungen',
	'Class:Project/Attribute:creation_date' => 'Erstellungsdatum',
	'Class:Project/Attribute:description' => 'Beschreibung',
	'Class:Project/Attribute:estimated_budget' => 'Geschätztes Budget',
	'Class:Project/Attribute:exclusions' => 'Ausschlüsse',
	'Class:Project/Attribute:contacts_list' => 'Stakeholder',
	'Class:Project/Attribute:contacts_list+' => 'Alle Kontakte die in das Projekt involviert sind',
	'Class:Project/Attribute:projectchanges_list' => 'Projekt-Changes',
	'Class:Project/Attribute:projectchanges_list_displaybare' => 'Projekt-Changes die nicht geschlossen oder zurückgeweisen sind, aber verknüpft mit einem nicht geschlossenen Liefergegenstand',
	'Class:Project/Attribute:status' => 'Status',
	'Class:Project/Attribute:status/Value:cancelled' => 'Abgebrochen',
	'Class:Project/Attribute:status/Value:closed' => 'Abgeschlossen',
	'Class:Project/Attribute:status/Value:executed' => 'In Ausführung',
	'Class:Project/Attribute:status/Value:initiated' => 'Initiiert',
	'Class:Project/Attribute:status/Value:monitored' => 'Überwacht',
	'Class:Project/Attribute:status/Value:planned' => 'Geplant',
	'Class:Project/Attribute:team_id' => 'Projektteam',
	'Class:Project/Attribute:title' => 'Titel',
	'Class:Project/Attribute:wbs_cost' => 'Liefergegenstände-Kosten',
	'Class:Project/Attribute:wbs_costs' => 'Liefergegenstände-Kosten',
	'Class:Project/Attribute:wbss_list' => 'Liefergegenstände',
	'Class:Project/Attribute:tickets_list' => 'Verwandte Tickets',
	'Class:Project/Attribute:wbss_list_displaybare' => 'Nicht geschlossene Liefergegenstände',
	'Class:Project/Attribute:requirement' => 'Anforderunge',
	'Class:Project/Attribute:org_id' => 'Kunde',
	'Class:Project/Name' => '%1$s %2$s',
	'Class:Project/Stimulus:ev_cancel' => 'Projekt abbrechen',
	'Class:Project/Stimulus:ev_close' => 'Schließen',
	'Class:Project/Stimulus:ev_execute' => 'Ausführen',
	'Class:Project/Stimulus:ev_monitor' => 'Überwachen',
	'Class:Project/Stimulus:ev_monotir' => 'Überwachen',
	'Class:Project/Stimulus:ev_plan' => 'Planen',
	'Class:Project/Stimulus:ev_reexecute' => 'Zurück zur Ausführung',
	'Class:Project/Tab:Summary' => 'Zusammenfassung',
	'Class:Project/Tab:Summary+' => 'Zusammenfassung des Projekts',
	'Class:Project:Display:delivrables_costs' => 'Kosten aller Liefergegenstände',
	'Class:Project/Attribute:revised_end_date' => 'Revidiertes Enddatum',
	'Class:Project/Attribute:mgt_reserve_budget' => 'Management-Reservebudget',
	'Class:Project/Attribute:mgt_reserve_budget+' => 'Budgethöhe die für Management und Unvorhergesehenes reserviert ist.',
	'Class:Project/Attribute:gant_wbs' => 'Gantt',
    'Class:Project/Attribute:project_completion' => 'Projekt-Fertigstellung',
    'Class:Project/Attribute:project_completion+' => 'Durchschnitt der Liefergegenstands-Fertigstellung',
	'Class:Project:Summary_costs' => 'Kosten-Informationen',
	'Class:Project:Summary_general' => 'Allgemeine Informationen',
	'Project:Budget' => 'Budget',
	'Project:Contacts' => 'Kontakte',
	'Project:Costs' => 'Kosten',
	'Project:Dates' => 'Daten',
	'Project:Details' => 'Details',
	'Project:Error:EndDateMustBeGreaterThanStartDate' => 'Ende-Datum mus nach Startdatum liegen',
	'Project:Error:ProjectEndDateMustBeGreaterThanWBSEndDate' => 'Das Projekt-Enddatum muss nach dem spätesten Liefergegenstand liegen',
	'Project:GeneralInfo' => 'Information',

	'Menu:MyProject' => 'Meine Projekte',
	'Menu:MyProject+' => 'Meine Projekte als Projektmanager',
	'Menu:NewProject' => 'Neues Projekt',
	'Menu:Overview' => 'Übersicht',
	'Menu:Project:Overview' => 'Übersicht',
	'Menu:ProjectChangeMenu' => 'Projekt-Change',
	'Menu:ProjectManagement' => 'Projektmamagement',
	'Menu:ProjectMenu' => 'Projekt',
	'Menu:SearchProject' => 'Nach Projekt suchen',

	'UI:AddLinkedObjectsOf_Class' => 'Füge %1$s Objekte hinzu...',
	'UI:ProjectMgmtMenuOverview:Title' => 'Übersicht',
	'UI-IssueManagementOverview-OpenIssueByProject' => 'Offene Punkte nach Kundenprojekt',
	'UI-ProjectManagementOverview-Last-12Months' => 'Projekte der letzten 12 Monate (nach Projektstartdatum)',
	'UI-ProjectManagementOverview-Last-3Months' => 'Projekte der letzten 3 Monate (nach Kunde)',
	'UI-ProjectManagementOverview-OpenProjectByStatus' => 'Offene Projekte nach Status',

	'Class:Project/CreateDeliverable' => 'Liefergegenstand erstellen',
	'Class:Project/CreateDeliverableForm' => 'Liefergegenstand aus %1$s erstellen',
	'Class:Project/ReportLabel' => 'Erstellt aus %1$s',
	'Class:Project/DuplicateProject' => 'Projekt duplizieren',
	'Class:Project/DuplicateProjectForm' => 'Dupliziere Projekt aus %1$s',
	'Class:Ticket/Attribute:related_project' => 'Verwandtes Projekt',
	'Class:Ticket/Attribute:related_project_id' => 'Verwandtes Projekt',

));


// WBS class
Dict::Add('DE DE', 'German', 'Deutsch', array(
	'Class:WBS' => 'Liefergegenstand',
	'Class:WBS/Attribute:acceptance' => 'Abnahmekriterien',
	'Class:WBS/Attribute:available_budget' => 'Verfügbares Budget',
	'Class:WBS/Attribute:completion' => '% fertig',
	'Class:WBS/Attribute:contacts_list' => 'Stakeholder',
	'Class:WBS/Attribute:contacts_list_proj_displaybare' => 'Stakeholder des Projektes',
	'Class:WBS/Attribute:contacts_list_wbs_displaybare' => 'Stakeholder von laufenden Liefergegenständen',
	'Class:WBS/Attribute:contacts_list+' => 'Alle Kontakte mit Bezug zu Liefergegenständen',
	'Class:WBS/Attribute:delay' => 'Verzögerung',
	'Class:WBS/Attribute:description' => 'Beschreibung',
	'Class:WBS/Attribute:end_date' => 'Angefordertes Enddatum',
	'Class:WBS/Attribute:freetime' => 'Non jetzt bis Enddatum',
	'Class:WBS/Attribute:labor_cost' => 'Arbeitskosten',
	'Class:WBS/Attribute:material_cost' => 'Materialkosten',
	'Class:WBS/Attribute:name' => 'Name',
	'Class:WBS/Attribute:project_id' => 'Projekt',
	'Class:WBS/Attribute:re_estimated_end_date' => 'Geplantes Enddatum',
	'Class:WBS/Attribute:re_estimated_start_date' => 'Geplantes Startdatum',
	'Class:WBS/Attribute:ref' => 'Ref',
	'Class:WBS/Attribute:start_date' => 'Angefordertes Startdatum',
	'Class:WBS/Attribute:status' => 'Status',
	'Class:WBS/Attribute:status/Value:cancel' => 'Abgebrochen',
	'Class:WBS/Attribute:status/Value:closed' => 'Fertiggestellt',
	'Class:WBS/Attribute:status/Value:pending_parent' => 'Wartendauf Eltern-Liefergegenstand',
	'Class:WBS/Attribute:status/Value:running' => 'Laufend',
	'Class:WBS/Attribute:status+' => 'Status des Liefergegenstands',
	'Class:WBS/Attribute:technical_info' => 'Technische Information',
	'Class:WBS/Attribute:time_planned' => 'Geplante Zeit',
	'Class:WBS/Attribute:wbs_budget' => 'Budget',
	'Class:WBS/Attribute:wbs_cost' => 'Gesamtkosten',
	'Class:WBS/Attribute:wbs_log' => 'Liefergegenstands-Log',
	'Class:WBS/Attribute:wbs_owner_id' => 'Owner',
	'Class:WBS/Attribute:wbs_real_costs' => 'Echte Kosten des Liefergegenstands',
	'Class:WBS/Attribute:wbss_child_list' => 'Kind-Liefergegenstände',
	'Class:WBS/Attribute:wbss_parent_list' => 'Eltern-Liefergegenstände',
	'Class:WBS/Name' => '%1$s-%2$s',
	'Class:WBS/Stimulus:ev_cancel' => 'Liefergegenstand abbrechen',
	'Class:WBS/Stimulus:ev_closed' => 'Geschlossen',
	'Class:WBS/Stimulus:ev_reopen' => 'Wiedereröffnen',
	'Class:WBS/Stimulus:ev_running_admin' => 'Aktiviere Kind-Aufgabe',
	'Class:WBS+' => 'Liste der Liefergegenstände',
	'WBS:Cost' => 'Kosten',
	'WBS:Dates' => 'Daten',
	'WBS:Error:ParentCantBeChildren' => 'Sie können nicht Ihr eigener Eltern-Liefergegenstand sein',
	'WBS:Execution' => 'Ausführung',
	'WBS:Info' => 'Information',
	'Class:WBS/Error:Contactnotfound' => '%1$s ist nicht als Stakeholder des Projektes definiert? Sie sollten ihn/sie hinzufügen.',

	'Class:lnkWBSToWBS' => 'Verknüpfung Kind-Liefergegenstand / Eltern-Liefergegenstand',
	'Class:lnkWBSToWBS/Attribute:child_wbs_id' => 'Kind-Liefergegenstand',
	'Class:lnkWBSToWBS/Attribute:parent_wbs_id' => 'Eltern-Liefergegenstand',
	'Class:lnkWBSToWBS/Attribute:wbs_id' => 'Eltern-Liefergegenstand',
	'Class:lnkWBSToWBS/Name' => '%1$s - %2$s',

	'Menu:MyWBS' => 'Meine Liefergegenstände',
	'Menu:MyWBS+' => 'Liefergegenstände, bei denen ich Ownder bin',
	'Menu:NewWBS' => 'Neuer Liefergegenstand',
	'Menu:WBSMenu' => 'Liefergegenstände',
	'Menu:SearchWBS' => 'Liefergegenstände suchen',
	'UI-WBSManagementOverview-OpenWBSByProject' => 'Offene Liefergegenstände nach Kundenprojekt',
));


//
// Class: Ticket
//

Dict::Add('DE DE', 'German', 'Deutsch', array(
	'Class:Ticket/Attribute:related_project_ref' => 'Referenz verwandtes Projekt',
	'Class:Ticket/Attribute:related_project_ref+' => '',
));

//
// Class: WBS
//

Dict::Add('DE DE', 'German', 'Deutsch', array(
	'Class:WBS/Stimulus:ev_pending_parent' => 'Warte auf Eltern',
	'Class:WBS/Stimulus:ev_pending_parent+' => '',
	'Class:WBS/Stimulus:ev_running' => 'Laufend',
	'Class:WBS/Stimulus:ev_running+' => '',
));

//
// Class: lnkWBSToWBS
//

Dict::Add('DE DE', 'German', 'Deutsch', array(
	'Class:lnkWBSToWBS/Attribute:child_start_date' => 'Kind-Startdatum',
	'Class:lnkWBSToWBS/Attribute:child_start_date+' => '',
	'Class:lnkWBSToWBS/Attribute:child_end_date' => 'Kind-Enddatum',
	'Class:lnkWBSToWBS/Attribute:child_end_date+' => '',
	'Class:lnkWBSToWBS/Attribute:parent_start_date' => 'Eltern-Startdatum',
	'Class:lnkWBSToWBS/Attribute:parent_start_date+' => '',
	'Class:lnkWBSToWBS/Attribute:parent_end_date' => 'Eltern-Enddatum',
	'Class:lnkWBSToWBS/Attribute:parent_end_date+' => '',
));

//
// Class: lnkContactToWBS
//

Dict::Add('DE DE', 'German', 'Deutsch', array(
	'Class:lnkContactToWBS/Attribute:project_id' => 'Projekt-ID',
	'Class:lnkContactToWBS/Attribute:project_id+' => '',
));
