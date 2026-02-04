<?php
/**
 * Localized data
 *
 * @copyright   Copyright (C) 2013 XXXXX
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

// Contact class
Dict::Add('EN US', 'English', 'English', array(
	'Class:Contact/Attribute:project_list' => 'Open projects I\'m involved in',
	'Class:Contact/Attribute:projects_list' => 'Projects',
	'Contact:Info:ProjectManager'=> 'Projects I am project manager or sponsor',
	'Contact:Info:WBSManager'=> 'Deliverables I am accountable on',
	'Class:Contact/Attribute:wbs_list' => 'Open deliverables I\'m involved on',
	'Class:Contact/Attribute:wbss_list' => 'Deliverables',
	'Class:Contact/Attribute:wbss_list+' => 'Deliverables to work on',
	'Class:Contact/Tab:PMP' => 'Projects & deliverables',
	'Class:Contact/Tab:PMP+' => 'All open projects and deliverables I work on',
	'Class:lnkContactToProject' => 'Link Contact / Project',
	'Class:lnkContactToProject/Attribute:contact_id' => 'Contact',
	'Class:lnkContactToProject/Attribute:project_id' => 'Project',
	'Class:lnkContactToProject/Attribute:role/Value:1' => 'Customer',
	'Class:lnkContactToProject/Attribute:role/Value:2' => 'Resource',
	'Class:lnkContactToProject/Name' => '%1$s - %2$s',
	'Class:lnkContactToTicket/Attribute:allocated_days' => 'Allocated days',
	'Class:lnkContactToTicket/Attribute:allocated_percent' => 'Allocated percent',
	'Class:lnkContactToTicket/Attribute:category' => 'Responsibility',
	'Class:lnkContactToTicket/Attribute:category/Value:1' => 'Customer',
	'Class:lnkContactToTicket/Attribute:category/Value:2' => 'Resource',
	'Class:lnkContactToTicket/Attribute:influence' => 'Influence',
	'Class:lnkContactToTicket/Attribute:influence/Value:objector' => 'Objector',
	'Class:lnkContactToTicket/Attribute:influence/Value:partner' => 'Partner',
	'Class:lnkContactToTicket/Attribute:influence+' => 'Behavior in this project',
	'Class:lnkContactToTicket/Attribute:power/Value:low' => 'Low',
	'Class:lnkContactToTicket/Attribute:power/Value:strong' => 'Strong',
	'Class:lnkContactToTicket/Attribute:power' => 'Power',
	'Class:lnkContactToTicket/Attribute:power+' => 'Power of decision',
	'Class:lnkContactToWBS' => 'Link Contact / WBS',
	'Class:lnkContactToWBS/Attribute:allocated_days' => 'Allocated days',
	'Class:lnkContactToWBS/Attribute:allocated_percent' => 'Allocated percent',
	'Class:lnkContactToWBS/Attribute:category' => 'Responsibility',
	'Class:lnkContactToWBS/Attribute:category/Value:1' => 'Customer',
	'Class:lnkContactToWBS/Attribute:category/Value:2' => 'Resource',
	'Class:lnkContactToWBS/Attribute:contact_id' => 'Stakeholders',
	'Class:lnkContactToWBS/Attribute:influence' => 'Influence',
	'Class:lnkContactToWBS/Attribute:influence+' => 'Behavior in this project',
	'Class:lnkContactToWBS/Attribute:influence/Value:objector' => 'Objector',
	'Class:lnkContactToWBS/Attribute:influence/Value:partner' => 'Partner',
	'Class:lnkContactToWBS/Attribute:power/Value:low' => 'Low',
	'Class:lnkContactToWBS/Attribute:power/Value:strong' => 'Strong',
	'Class:lnkContactToWBS/Attribute:power' => 'Power',
	'Class:lnkContactToWBS/Attribute:power+' => 'Power of decision',
	'Class:lnkContactToWBS/Attribute:wbs_id' => 'Deliverables',
	'Class:lnkContactToWBS/Name' => '%1$s - %2$s',
));

// Project class
Dict::Add('EN US', 'English', 'English', array(
	'Class:Project' => 'Project',
	'Class:Project/Attribute:agent_id' => 'Project manager',
	'Class:Project/Attribute:allocatedtimes_list' => 'AllocatedTimes',
	'Class:Project/Attribute:calculated_end_date' => 'Latest deliverable end date',
	'Class:Project/Attribute:calculated_end_date+' => 'Take the latest deliverable date',
	'Class:Project/Attribute:caller_id' => 'Sponsor',
	'Class:Project/Attribute:constraints' => 'Constraints',
	'Class:Project/Attribute:creation_date' => 'Creation date',
	'Class:Project/Attribute:description' => 'Description',
	'Class:Project/Attribute:estimated_budget' => 'Estimated budget',
	'Class:Project/Attribute:exclusions' => 'Exclusions',
	'Class:Project/Attribute:contacts_list' => 'Stakeholders',
	'Class:Project/Attribute:contacts_list+' => 'All the contacts involved on project',
	'Class:Project/Attribute:projectchanges_list' => 'Project Changes',
	'Class:Project/Attribute:projectchanges_list_displaybare' => 'Project change not closed nor rejected, linked to a non closed deliverable',
	'Class:Project/Attribute:status' => 'Status',
	'Class:Project/Attribute:status/Value:cancelled' => 'Cancelled',
	'Class:Project/Attribute:status/Value:closed' => 'Closing',
	'Class:Project/Attribute:status/Value:executed' => 'Executing',
	'Class:Project/Attribute:status/Value:initiated' => 'Initiating',
	'Class:Project/Attribute:status/Value:monitored' => 'Monitoring',
	'Class:Project/Attribute:status/Value:planned' => 'Planning',
	'Class:Project/Attribute:team_id' => 'Project team',
	'Class:Project/Attribute:title' => 'Title',
	'Class:Project/Attribute:wbs_cost' => 'Deliverables costs',
	'Class:Project/Attribute:wbs_costs' => 'Deliverables costs',
	'Class:Project/Attribute:wbss_list' => 'Deliverables',
	'Class:Project/Attribute:tickets_list' => 'Related Tickets',
	'Class:Project/Attribute:wbss_list_displaybare' => 'Deliverables not closed',
	'Class:Project/Attribute:requirement' => 'Requirements',
	'Class:Project/Attribute:org_id' => 'Customer',
	'Class:Project/Name' => '%1$s %2$s',
	'Class:Project/Stimulus:ev_cancel' => 'Cancel project',
	'Class:Project/Stimulus:ev_close' => 'Close',
	'Class:Project/Stimulus:ev_execute' => 'Execute',
	'Class:Project/Stimulus:ev_monitor' => 'Monitor',
	'Class:Project/Stimulus:ev_monotir' => 'To monitor',
	'Class:Project/Stimulus:ev_plan' => 'Plan',
	'Class:Project/Stimulus:ev_reexecute' => 'Back to execute',
	'Class:Project/Tab:Summary' => 'Summary',
	'Class:Project/Tab:Summary+' => 'Summary of current project',
	'Class:Project:Display:delivrables_costs' => 'Costs of all deliverables',
	'Class:Project/Attribute:revised_end_date' => 'Revised end date',
	'Class:Project/Attribute:mgt_reserve_budget' => 'Management reserve budget',
	'Class:Project/Attribute:mgt_reserve_budget+' => 'Amount of budget reserved for management and unknown/unknown events',
	'Class:Project/Attribute:gant_wbs' => 'Gantt',
    'Class:Project/Attribute:project_completion' => 'Project completion',
    'Class:Project/Attribute:project_completion+' => 'Average of deliverables completion',
	'Class:Project:Summary_costs' => 'Costs information',
	'Class:Project:Summary_general' => 'General information',
	'Project:Budget' => 'Costs',
	'Project:Contacts' => 'Contacts',
	'Project:Costs' => 'Costs',
	'Project:Dates' => 'Dates',
	'Project:Details' => 'Details',
	'Project:Error:EndDateMustBeGreaterThanStartDate' => 'End date must be greater than start date',
	'Project:Error:ProjectEndDateMustBeGreaterThanWBSEndDate' => 'Project End date must be greater than latest date of deliverable',
	'Project:GeneralInfo' => 'Information',

	'Menu:MyProject' => 'My projects',
	'Menu:MyProject+' => 'My projects as project manager',
	'Menu:NewProject' => 'New project',
	'Menu:Overview' => 'Overview',
	'Menu:Project:Overview' => 'Overview',
	'Menu:ProjectChangeMenu' => 'Project change',
	'Menu:ProjectManagement' => 'Project Management',
	'Menu:ProjectMenu' => 'Project',
	'Menu:SearchProject' => 'Search for project',

	'UI:AddLinkedObjectsOf_Class' => 'Add %1$s objects...',
	'UI:ProjectMgmtMenuOverview:Title' => 'Dashboard',
	'UI-IssueManagementOverview-OpenIssueByProject' => 'Open issues by customer project',
	'UI-ProjectManagementOverview-Last-12Months' => 'Projects of the last 12 months (per project start date)',
	'UI-ProjectManagementOverview-Last-3Months' => 'Projects of the last 3 months (per customer)',
	'UI-ProjectManagementOverview-OpenProjectByStatus' => 'Open projects by status',

	'Class:Project/CreateDeliverable' => 'Create deliverable',
	'Class:Project/CreateDeliverableForm' => 'Create a deliverable from %1$s',
	'Class:Project/ReportLabel' => 'Created from %1$s',
	'Class:Project/DuplicateProject' => 'Duplicate Project',
	'Class:Project/DuplicateProjectForm' => 'Duplicate a project from %1$s',
	'Class:Ticket/Attribute:related_project' => 'Related project',
	'Class:Ticket/Attribute:related_project_id' => 'Related project',

));


// WBS class
Dict::Add('EN US', 'English', 'English', array(
	'Class:WBS' => 'Deliverable',
	'Class:WBS/Attribute:acceptance' => 'Acceptance criteria',
	'Class:WBS/Attribute:available_budget' => 'Available budget',
	'Class:WBS/Attribute:completion' => '% complete',
	'Class:WBS/Attribute:contacts_list' => 'Stakeholders',
	'Class:WBS/Attribute:contacts_list_proj_displaybare' => 'Stakeholders linked to project',
	'Class:WBS/Attribute:contacts_list_wbs_displaybare' => 'Stakeholders linked to running deliverables',
	'Class:WBS/Attribute:contacts_list+' => 'All the contacts involved on deliverables',
	'Class:WBS/Attribute:delay' => 'Delay',
	'Class:WBS/Attribute:description' => 'Description',
	'Class:WBS/Attribute:end_date' => 'Requested end date',
	'Class:WBS/Attribute:freetime' => 'From now to end date',
	'Class:WBS/Attribute:labor_cost' => 'Labor cost',
	'Class:WBS/Attribute:material_cost' => 'Material cost',
	'Class:WBS/Attribute:name' => 'Name',
	'Class:WBS/Attribute:project_id' => 'Project',
	'Class:WBS/Attribute:re_estimated_end_date' => 'Planed end date',
	'Class:WBS/Attribute:re_estimated_start_date' => 'Planed start date',
	'Class:WBS/Attribute:ref' => 'Ref',
	'Class:WBS/Attribute:start_date' => 'Requested start date',
	'Class:WBS/Attribute:status' => 'Status',
	'Class:WBS/Attribute:status/Value:cancel' => 'Cancelled',
	'Class:WBS/Attribute:status/Value:closed' => 'Completed',
	'Class:WBS/Attribute:status/Value:pending_parent' => 'Pending parent deliverable',
	'Class:WBS/Attribute:status/Value:running' => 'Running',
	'Class:WBS/Attribute:status+' => 'Status of WBS',
	'Class:WBS/Attribute:technical_info' => 'Technical information',
	'Class:WBS/Attribute:time_planned' => 'Planned time',
	'Class:WBS/Attribute:wbs_budget' => 'Budget',
	'Class:WBS/Attribute:wbs_cost' => 'Total cost',
	'Class:WBS/Attribute:wbs_log' => 'Deliverable log',
	'Class:WBS/Attribute:wbs_owner_id' => 'Owner',
	'Class:WBS/Attribute:wbs_real_costs' => 'WBS real costs',
	'Class:WBS/Attribute:wbss_child_list' => 'Child deliverables',
	'Class:WBS/Attribute:wbss_parent_list' => 'Parent deliverables',
	'Class:WBS/Name' => '%1$s-%2$s',
	'Class:WBS/Stimulus:ev_cancel' => 'Cancel deliverable',
	'Class:WBS/Stimulus:ev_closed' => 'Closed',
	'Class:WBS/Stimulus:ev_reopen' => 'Re-open',
	'Class:WBS/Stimulus:ev_running_admin' => 'Activate child task',
	'Class:WBS+' => 'List of deliverable of Work Breakdown Structure',
	'WBS:Cost' => 'Costs',
	'WBS:Dates' => 'Dates',
	'WBS:Error:ParentCantBeChildren' => 'You cannot be your own parent deliverable',
	'WBS:Execution' => 'Execution',
	'WBS:Info' => 'Information',
	'Class:WBS/Error:Contactnotfound' => '%1$s is not defined as stakeholder of project linked? You should add him.',

	'Class:lnkWBSToWBS' => 'Link Child WBS To Parent WBS',
	'Class:lnkWBSToWBS/Attribute:child_wbs_id' => 'Child deliverable',
	'Class:lnkWBSToWBS/Attribute:parent_wbs_id' => 'Parent deliverable',
	'Class:lnkWBSToWBS/Attribute:wbs_id' => 'Parent deliverable',
	'Class:lnkWBSToWBS/Name' => '%1$s - %2$s',

	'Menu:MyWBS' => 'My deliverables',
	'Menu:MyWBS+' => 'WBS I own',
	'Menu:NewWBS' => 'New deliverable',
	'Menu:WBSMenu' => 'Deliverables',
	'Menu:SearchWBS' => 'Search for deliverable',
	'UI-WBSManagementOverview-OpenWBSByProject' => 'Open deliverables by customer project',
));


//
// Class: Ticket
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:Ticket/Attribute:related_project_ref' => 'Related project ref',
	'Class:Ticket/Attribute:related_project_ref+' => '',
));

//
// Class: WBS
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:WBS/Stimulus:ev_pending_parent' => 'Pending parent',
	'Class:WBS/Stimulus:ev_pending_parent+' => '',
	'Class:WBS/Stimulus:ev_running' => 'Running',
	'Class:WBS/Stimulus:ev_running+' => '',
));

//
// Class: lnkWBSToWBS
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:lnkWBSToWBS/Attribute:child_start_date' => 'Child start date',
	'Class:lnkWBSToWBS/Attribute:child_start_date+' => '',
	'Class:lnkWBSToWBS/Attribute:child_end_date' => 'Child end date',
	'Class:lnkWBSToWBS/Attribute:child_end_date+' => '',
	'Class:lnkWBSToWBS/Attribute:parent_start_date' => 'Parent start date',
	'Class:lnkWBSToWBS/Attribute:parent_start_date+' => '',
	'Class:lnkWBSToWBS/Attribute:parent_end_date' => 'Parent end date',
	'Class:lnkWBSToWBS/Attribute:parent_end_date+' => '',
));

//
// Class: lnkContactToWBS
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:lnkContactToWBS/Attribute:project_id' => 'Project id',
	'Class:lnkContactToWBS/Attribute:project_id+' => '',
));
