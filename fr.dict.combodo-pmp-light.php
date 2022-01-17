<?php
/**
 * Localized data
 *
 * @copyright   Copyright (C) 2013 XXXXX
 * @license     http://opensource.org/licenses/AGPL-3.0
 */
// Contact class
Dict::Add('FR FR', 'French', 'Français', array(
	'Class:Contact/Attribute:project_list' => 'Projets sur lesquels je travaille',
	'Contact:Info:ProjectManager'=> 'Mon rôle est chef de projet ou sponsor',
	'Contact:Info:WBSManager'=> 'Je suis responsable des livrables',
	'Class:Contact/Attribute:projects_list' => 'Projets',
	'Class:Contact/Attribute:wbs_list' => 'Livrables pour lesquels je suis impliqué',
	'Class:Contact/Attribute:wbss_list' => 'Livrables',
	'Class:Contact/Attribute:wbss_list+' => 'Livrables sur lesquels je travaille',
	'Class:Contact/Tab:PMP' => 'Projets et livrables',
	'Class:Contact/Tab:PMP+' => 'Projets et livrables sur lesquels je travaille',
	'Class:lnkContactToProject' => 'Lien Contact / Projet',
	'Class:lnkContactToProject/Attribute:contact_id' => 'Contact',
	'Class:lnkContactToProject/Attribute:project_id' => 'Projet',
	'Class:lnkContactToProject/Attribute:role/Value:1' => 'Client',
	'Class:lnkContactToProject/Attribute:role/Value:2' => 'Ressource',
	'Class:lnkContactToProject/Name' => '%1$s - %2$s',
	'Class:lnkContactToTicket/Attribute:allocated_days' => 'Jours alloués',
	'Class:lnkContactToTicket/Attribute:allocated_percent' => '% alloué',
	'Class:lnkContactToTicket/Attribute:category' => 'Responsabilité',
	'Class:lnkContactToTicket/Attribute:category/Value:1' => 'Client',
	'Class:lnkContactToTicket/Attribute:category/Value:2' => 'Ressource',
	'Class:lnkContactToTicket/Attribute:influence' => 'Influence',
	'Class:lnkContactToTicket/Attribute:influence/Value:objector' => 'Résistant',
	'Class:lnkContactToTicket/Attribute:influence/Value:partner' => 'Volontaire',
	'Class:lnkContactToTicket/Attribute:influence+' => 'Comportement vis à vis du projet',
	'Class:lnkContactToTicket/Attribute:power/Value:low' => 'Faible',
	'Class:lnkContactToTicket/Attribute:power/Value:strong' => 'Elevé',
	'Class:lnkContactToTicket/Attribute:power' => 'Pouvoir',
	'Class:lnkContactToTicket/Attribute:power+' => 'Pouvoir de décision',
	'Class:lnkContactToWBS' => 'Lien Contact / Livrable',
	'Class:lnkContactToWBS/Attribute:allocated_days' => 'Jours alloués',
	'Class:lnkContactToWBS/Attribute:allocated_percent' => '% alloué',
	'Class:lnkContactToWBS/Attribute:category' => 'Responsabilité',
	'Class:lnkContactToWBS/Attribute:category/Value:1' => 'Client',
	'Class:lnkContactToWBS/Attribute:category/Value:2' => 'Ressources',
	'Class:lnkContactToWBS/Attribute:contact_id' => 'Intervenants',
	'Class:lnkContactToWBS/Attribute:influence' => 'Influence',
	'Class:lnkContactToWBS/Attribute:influence+' => 'Comportement vis à vis du livrable',
	'Class:lnkContactToWBS/Attribute:influence/Value:objector' => 'Résistant',
	'Class:lnkContactToWBS/Attribute:influence/Value:partner' => 'Volontaire',
	'Class:lnkContactToWBS/Attribute:power/Value:low' => 'Faible',
	'Class:lnkContactToWBS/Attribute:power/Value:strong' => 'Elevé',
	'Class:lnkContactToWBS/Attribute:power' => 'Pouvoir',
	'Class:lnkContactToWBS/Attribute:power+' => 'Pouvoir de décision',
	'Class:lnkContactToWBS/Attribute:wbs_id' => 'Livrables',
	'Class:lnkContactToWBS/Name' => '%1$s - %2$s',
));

// Project class
Dict::Add('FR FR', 'French', 'Français', array(
	'Class:Project' => 'Projet',
	'Class:Project/Attribute:agent_id' => 'Chef de projet',
	'Class:Project/Attribute:allocatedtimes_list' => 'Temps alloué',
	'Class:Project/Attribute:calculated_end_date' => 'Date de fin du dernier livrable',
	'Class:Project/Attribute:calculated_end_date+' => 'La date de fin du dernier livrable est considérée',
	'Class:Project/Attribute:caller_id' => 'Sponsor',
	'Class:Project/Attribute:constraints' => 'Contraintes',
	'Class:Project/Attribute:creation_date' => 'Date de création',
	'Class:Project/Attribute:description' => 'Description',
	'Class:Project/Attribute:estimated_budget' => 'Estimation du budget',
	'Class:Project/Attribute:exclusions' => 'Exclusions',
	'Class:Project/Attribute:contacts_list' => 'Parties Prenantes',
	'Class:Project/Attribute:contacts_list+' => 'Contacts impliqués sur le projet',
	'Class:Project/Attribute:projectchanges_list' => 'Changement sur Projet',
	'Class:Project/Attribute:projectchanges_list_displaybare' => 'Changement sur projet non clos ni rejeté ou lié à un livrable non clos',
	'Class:Project/Attribute:status' => 'Statut',
	'Class:Project/Attribute:status/Value:cancelled' => 'Annulé',
	'Class:Project/Attribute:status/Value:closed' => 'Clôturé',
	'Class:Project/Attribute:status/Value:executed' => 'En cours d\'exécution',
	'Class:Project/Attribute:status/Value:initiated' => 'Initialisation',
	'Class:Project/Attribute:status/Value:monitored' => 'Suivi/maitrise',
	'Class:Project/Attribute:status/Value:planned' => 'Planifié',
	'Class:Project/Attribute:team_id' => 'Equipe de projet',
	'Class:Project/Attribute:title' => 'Titre',
	'Class:Project/Attribute:wbs_cost' => 'Coûts des livrables',
	'Class:Project/Attribute:wbs_costs' => 'Coûts des livrables',
	'Class:Project/Attribute:wbss_list' => 'Livrables',
	'Class:Project/Attribute:tickets_list' => 'Tickets associés',
	'Class:Project/Attribute:wbss_list_displaybare' => 'Livrables non clos',
	'Class:Project/Attribute:requirement' => 'Exigences',
	'Class:Project/Attribute:org_id' => 'Client',
	'Class:Project/Name' => '%1$s %2$s',
	'Class:Project/Stimulus:ev_cancel' => 'Annuler le projet',
	'Class:Project/Stimulus:ev_close' => 'Clôturer',
	'Class:Project/Stimulus:ev_execute' => 'Exécuter',
	'Class:Project/Stimulus:ev_monitor' => 'Surveiller avant clôture',
	'Class:Project/Stimulus:ev_plan' => 'Planifier',
	'Class:Project/Stimulus:ev_reexecute' => 'Revenir à l\'exécution',
	'Class:Project/Tab:Summary' => 'Vue d\'ensemble',
	'Class:Project/Tab:Summary+' => 'Vue d\'ensemble du projet',
	'Class:Project:Display:delivrables_costs' => 'Coûts de tous les livrables',
	'Class:Project/Attribute:revised_end_date' => 'Date de fin recalculée',
	'Class:Project/Attribute:mgt_reserve_budget' => 'Budget de réserve pour imprévu',
	'Class:Project/Attribute:mgt_reserve_budget+' => 'Montant du budget du projet réservé pour la marge de manoeuvre du management',
	'Class:Project/Attribute:gant_wbs' => 'Gantt',
    'Class:Project/Attribute:project_completion' => '% accomplissement',
    'Class:Project/Attribute:project_completion+' => 'Moyenne de l\'accomplissement des livrables',
	'Class:Project:Summary_costs' => 'Information sur les coûts',
	'Class:Project:Summary_general' => 'Informations générales',
	'Project:Budget' => 'Coûts',
	'Project:Contacts' => 'Contacts',
	'Project:Costs' => 'Coûts',
	'Project:Dates' => 'Dates',
	'Project:Details' => 'Détails',
	'Project:Error:EndDateMustBeGreaterThanStartDate' => 'La date de fin doit être supérieure à la date de début',
	'Project:Error:ProjectEndDateMustBeGreaterThanWBSEndDate' => 'La date de fin du projet doit être supérieure à la date de fin du dernier livrable',
	'Project:GeneralInfo' => 'Information',

	'Menu:MyProject' => 'Mes projets',
	'Menu:MyProject+' => 'Mes projets en tant que chef de projet',
	'Menu:NewProject' => 'Nouveau projet',
	'Menu:Overview' => 'Vue d\'ensemble',
	'Menu:Project:Overview' => 'Vue d\'ensemble',
	'Menu:ProjectChangeMenu' => 'Changement sur projet',
	'Menu:ProjectManagement' => 'Gestion des projets',
	'Menu:ProjectMenu' => 'Gestion des projets',
	'Menu:SearchProject' => 'Rechercher des projets',

	'UI:AddLinkedObjectsOf_Class' => 'Ajouter %1$s',
	'UI:ProjectMgmtMenuOverview:Title' => 'Dashboard',
	'UI-IssueManagementOverview-OpenIssueByProject' => 'Risques avérés ouverts par client',
	'UI-ProjectManagementOverview-Last-12Months' => 'Projets des 12 derniers mois ( par date de début de projet)',
	'UI-ProjectManagementOverview-Last-3Months' => 'Projets des 3 derniers mois (par client)',
	'UI-ProjectManagementOverview-OpenProjectByStatus' => 'Projets ouverts par statut',

	'Class:Project/CreateDeliverable' => 'Créer un délivrable...',
	'Class:Project/CreateDeliverableForm' => 'Créer un délivrable pour %1$s',
	'Class:Project/ReportLabel' => 'Créée depuis %1$s',
	'Class:Project/DuplicateProject' => 'Dupliquer un projet..',
	'Class:Project/DuplicateProjectForm' => 'Dupliquer un projet %1$s',
	'Class:Ticket/Attribute:related_project' => 'Projet associé',
	'Class:Ticket/Attribute:related_project_id' => 'Projet associé',

));


// WBS class
Dict::Add('FR FR', 'French', 'Français', array(
	'Class:WBS'                                          => 'Livrable',
	'Class:WBS/Attribute:acceptance'                     => 'Critères d\'acceptation',
	'Class:WBS/Attribute:available_budget'               => 'Budget',
	'Class:WBS/Attribute:completion'                     => '% accomplissement',
	'Class:WBS/Attribute:contacts_list'                  => 'Parties prenantes',
	'Class:WBS/Attribute:contacts_list_proj_displaybare' => 'Parties prenantes attachées au projet',
	'Class:WBS/Attribute:contacts_list_wbs_displaybare'  => 'Parties prenantes liés à des livrables non clos',
	'Class:WBS/Attribute:contacts_list+'                 => 'Contacts impliqués dans les livrables',
	'Class:WBS/Attribute:delay'                          => 'Délai',
	'Class:WBS/Attribute:description'                    => 'Description',
	'Class:WBS/Attribute:end_date'                       => 'Date de fin souhaitée',
	'Class:WBS/Attribute:freetime'                       => 'Temps restant jusqu\'à la date de fin',
	'Class:WBS/Attribute:labor_cost'                     => 'Coûts Homme',
	'Class:WBS/Attribute:material_cost'                  => 'Coûts Matériel',
	'Class:WBS/Attribute:name'                           => 'Nom',
	'Class:WBS/Attribute:project_id'                     => 'Projet',
	'Class:WBS/Attribute:re_estimated_end_date' => 'Date de fin évaluée',
	'Class:WBS/Attribute:re_estimated_start_date' => 'Date de début évaluée',
	'Class:WBS/Attribute:ref' => 'Référence',
	'Class:WBS/Attribute:start_date' => 'Date de début souhaitée',
	'Class:WBS/Attribute:status' => 'Statut',
	'Class:WBS/Attribute:status/Value:cancel' => 'Annulé',
	'Class:WBS/Attribute:status/Value:closed' => 'Livré/clos',
	'Class:WBS/Attribute:status/Value:pending_parent' => 'En attente du livrable parent',
	'Class:WBS/Attribute:status/Value:running' => 'En cours',
	'Class:WBS/Attribute:status+' => 'Status of WBS',
	'Class:WBS/Attribute:technical_info' => 'Informations techniques',
	'Class:WBS/Attribute:time_planned' => 'Temps estimé',
	'Class:WBS/Attribute:wbs_budget' => 'Budget',
	'Class:WBS/Attribute:wbs_cost' => 'Coût total',
	'Class:WBS/Attribute:wbs_log' => 'Log',
	'Class:WBS/Attribute:wbs_owner_id' => 'Responsable',
	'Class:WBS/Attribute:wbs_real_costs' => 'Coûts réels des livrables',
	'Class:WBS/Attribute:wbss_child_list' => 'Livrables enfants',
	'Class:WBS/Attribute:wbss_parent_list' => 'Livrables parents',
	'Class:WBS/Name' => '%1$s-%2$s',
	'Class:WBS/Stimulus:ev_cancel' => 'Annuler le livrable',
	'Class:WBS/Stimulus:ev_closed' => 'Clôturer',
	'Class:WBS/Stimulus:ev_reopen' => 'Réouvrir',
	'Class:WBS/Stimulus:ev_running_admin' => 'Activer les taches enfants',
	'Class:WBS+' => 'Liste des livrables en travaux de projet',
	'WBS:Cost' => 'Coûts',
	'WBS:Dates' => 'Dates',
	'WBS:Error:ParentCantBeChildren' => 'Vous ne pouvez pas être livrable parent de vous-mêmes',
	'WBS:Execution' => 'Exécution',
	'WBS:Info' => 'Information',
	'Class:WBS/Error:Contactnotfound' => 'Le responsable du livrable n\'est pas référencé comme partie prenante du projet attaché. Vous devriez le rajouter',

	'Class:lnkWBSToWBS' => 'Lien Livrable enfant / Livrable parent',
	'Class:lnkWBSToWBS/Attribute:child_wbs_id' => 'Livrable enfant ',
	'Class:lnkWBSToWBS/Attribute:parent_wbs_id' => 'Livrable parent',
	'Class:lnkWBSToWBS/Attribute:wbs_id' => 'Livrable parent',
	'Class:lnkWBSToWBS/Name' => '%1$s - %2$s',

	'Menu:MyWBS' => 'Mes livrables',
	'Menu:MyWBS+' => 'Les livrables qui me sont assignés',
	'Menu:NewWBS' => 'Nouveau livrable',
	'Menu:WBSMenu' => 'Livrables',
	'Menu:SearchWBS' => 'Rechercher des livrables',
	'UI-WBSManagementOverview-OpenWBSByProject' => 'Livrables en cours par projet',
));


//
// Class: Ticket
//

Dict::Add('FR FR', 'French', 'Français', array(
	'Class:Ticket/Attribute:related_project_ref' => 'Related project ref~~',
	'Class:Ticket/Attribute:related_project_ref+' => '~~',
));

//
// Class: WBS
//

Dict::Add('FR FR', 'French', 'Français', array(
	'Class:WBS/Stimulus:ev_pending_parent' => 'Pending parent~~',
	'Class:WBS/Stimulus:ev_pending_parent+' => '~~',
	'Class:WBS/Stimulus:ev_running' => 'Running~~',
	'Class:WBS/Stimulus:ev_running+' => '~~',
));

//
// Class: lnkWBSToWBS
//

Dict::Add('FR FR', 'French', 'Français', array(
	'Class:lnkWBSToWBS/Attribute:child_start_date' => 'Child start date~~',
	'Class:lnkWBSToWBS/Attribute:child_start_date+' => '~~',
	'Class:lnkWBSToWBS/Attribute:child_end_date' => 'Child end date~~',
	'Class:lnkWBSToWBS/Attribute:child_end_date+' => '~~',
	'Class:lnkWBSToWBS/Attribute:parent_start_date' => 'Parent start date~~',
	'Class:lnkWBSToWBS/Attribute:parent_start_date+' => '~~',
	'Class:lnkWBSToWBS/Attribute:parent_end_date' => 'Parent end date~~',
	'Class:lnkWBSToWBS/Attribute:parent_end_date+' => '~~',
));

//
// Class: lnkContactToWBS
//

Dict::Add('FR FR', 'French', 'Français', array(
	'Class:lnkContactToWBS/Attribute:project_id' => 'Project id~~',
	'Class:lnkContactToWBS/Attribute:project_id+' => '~~',
));
