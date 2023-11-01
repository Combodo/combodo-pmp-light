<?php
/**
 * Localized data
 *
 * @copyright   Copyright (C) 2013 XXXXX
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

// Contact class
Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:Contact/Attribute:project_list' => '我参与的进行中项目',
	'Class:Contact/Attribute:projects_list' => '项目',
	'Contact:Info:ProjectManager'=> '我管理或发起的项目',
	'Contact:Info:WBSManager'=> '我负责的交付成果',
	'Class:Contact/Attribute:wbs_list' => '我参与的所有进行中的交付成果',
	'Class:Contact/Attribute:wbss_list' => '交付成果',
	'Class:Contact/Attribute:wbss_list+' => '要继续工作的交付成果',
	'Class:Contact/Tab:PMP' => '项目和交付成果',
	'Class:Contact/Tab:PMP+' => '我从事的所有进行中项目和交付成果',
	'Class:lnkContactToProject' => '关联联系人/项目',
	'Class:lnkContactToProject/Attribute:contact_id' => '联系人',
	'Class:lnkContactToProject/Attribute:project_id' => '项目',
	'Class:lnkContactToProject/Attribute:role/Value:1' => '客户',
	'Class:lnkContactToProject/Attribute:role/Value:2' => '资源',
	'Class:lnkContactToProject/Name' => '%1$s - %2$s',
	'Class:lnkContactToTicket/Attribute:allocated_days' => '已分派天数',
	'Class:lnkContactToTicket/Attribute:allocated_percent' => '已分派比例',
	'Class:lnkContactToTicket/Attribute:category' => '负责',
	'Class:lnkContactToTicket/Attribute:category/Value:1' => '客户',
	'Class:lnkContactToTicket/Attribute:category/Value:2' => '资源',
	'Class:lnkContactToTicket/Attribute:influence' => 'Influence',
	'Class:lnkContactToTicket/Attribute:influence/Value:objector' => ' 反对者',
	'Class:lnkContactToTicket/Attribute:influence/Value:partner' => '合作伙伴',
	'Class:lnkContactToTicket/Attribute:influence+' => '此项目的表现',
	'Class:lnkContactToTicket/Attribute:power/Value:low' => '弱',
	'Class:lnkContactToTicket/Attribute:power/Value:strong' => '强',
	'Class:lnkContactToTicket/Attribute:power' => '权力',
	'Class:lnkContactToTicket/Attribute:power+' => '决策权力',
	'Class:lnkContactToWBS' => 'Link 联系人 / WBS',
	'Class:lnkContactToWBS/Attribute:allocated_days' => '已分派天数',
	'Class:lnkContactToWBS/Attribute:allocated_percent' => '已分派比例',
	'Class:lnkContactToWBS/Attribute:category' => '责任',
	'Class:lnkContactToWBS/Attribute:category/Value:1' => '客户',
	'Class:lnkContactToWBS/Attribute:category/Value:2' => '资源',
	'Class:lnkContactToWBS/Attribute:contact_id' => '利益相关者',
	'Class:lnkContactToWBS/Attribute:influence' => '影响力',
	'Class:lnkContactToWBS/Attribute:influence+' => 'Behavior in this project',
	'Class:lnkContactToWBS/Attribute:influence/Value:objector' => '反对者',
	'Class:lnkContactToWBS/Attribute:influence/Value:partner' => '合作伙伴',
	'Class:lnkContactToWBS/Attribute:power/Value:low' => '弱',
	'Class:lnkContactToWBS/Attribute:power/Value:strong' => '强',
	'Class:lnkContactToWBS/Attribute:power' => '权力',
	'Class:lnkContactToWBS/Attribute:power+' => '决策权力',
	'Class:lnkContactToWBS/Attribute:wbs_id' => '交付成果',
	'Class:lnkContactToWBS/Name' => '%1$s - %2$s',
));

// Project class
Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:Project' => '项目',
	'Class:Project/Attribute:agent_id' => '项目经理',
	'Class:Project/Attribute:allocatedtimes_list' => '已分派时间',
	'Class:Project/Attribute:calculated_end_date' => '最新交付成果结束日期',
	'Class:Project/Attribute:calculated_end_date+' => '使用最新交付成果日期',
	'Class:Project/Attribute:caller_id' => '发起人',
	'Class:Project/Attribute:constraints' => '约束',
	'Class:Project/Attribute:creation_date' => '创建日期',
	'Class:Project/Attribute:description' => '说明',
	'Class:Project/Attribute:estimated_budget' => '预算估计',
	'Class:Project/Attribute:exclusions' => '排除',
	'Class:Project/Attribute:contacts_list' => '利益相关者',
	'Class:Project/Attribute:contacts_list+' => '所有参与项目的联系人',
	'Class:Project/Attribute:projectchanges_list' => '项目变更',
	'Class:Project/Attribute:projectchanges_list_displaybare' => '所有未关闭和未驳回的项目变更, 已关联到未关闭的交付成果',
	'Class:Project/Attribute:status' => '状态',
	'Class:Project/Attribute:status/Value:cancelled' => '已取消',
	'Class:Project/Attribute:status/Value:closed' => '关闭中',
	'Class:Project/Attribute:status/Value:executed' => '执行中',
	'Class:Project/Attribute:status/Value:initiated' => '发起中',
	'Class:Project/Attribute:status/Value:monitored' => '监控中',
	'Class:Project/Attribute:status/Value:planned' => '计划中',
	'Class:Project/Attribute:team_id' => '项目团队',
	'Class:Project/Attribute:title' => '标题',
	'Class:Project/Attribute:wbs_cost' => '交付成果费用',
	'Class:Project/Attribute:wbs_costs' => '交付成果费用',
	'Class:Project/Attribute:wbss_list' => '交付成果',
	'Class:Project/Attribute:tickets_list' => '相关工单',
	'Class:Project/Attribute:wbss_list_displaybare' => '未关闭的交付成果',
	'Class:Project/Attribute:requirement' => '需求',
	'Class:Project/Attribute:org_id' => '客户',
	'Class:Project/Name' => '%1$s %2$s',
	'Class:Project/Stimulus:ev_cancel' => '取消项目',
	'Class:Project/Stimulus:ev_close' => '关闭',
	'Class:Project/Stimulus:ev_execute' => '执行',
	'Class:Project/Stimulus:ev_monitor' => '监控',
	'Class:Project/Stimulus:ev_monotir' => 'To monitor',
	'Class:Project/Stimulus:ev_plan' => 'Plan',
	'Class:Project/Stimulus:ev_reexecute' => 'Back to execute',
	'Class:Project/Tab:Summary' => '总结',
	'Class:Project/Tab:Summary+' => '当前项目的总结',
	'Class:Project:Display:delivrables_costs' => '所有交付成果的费用',
	'Class:Project/Attribute:revised_end_date' => '修正的结束日期',
	'Class:Project/Attribute:mgt_reserve_budget' => '管理储备预算',
	'Class:Project/Attribute:mgt_reserve_budget+' => '管理和未知/未知事件的储备预算金额',
	'Class:Project/Attribute:gant_wbs' => '甘特图',
    'Class:Project/Attribute:project_completion' => '项目完成',
    'Class:Project/Attribute:project_completion+' => '交付成果完成平均数',
	'Class:Project:Summary_costs' => '费用信息',
	'Class:Project:Summary_general' => '常规信息',
	'Project:Budget' => '费用',
	'Project:Contacts' => '联系人',
	'Project:Costs' => '费用',
	'Project:Dates' => '日期',
	'Project:Details' => '详情',
	'Project:Error:EndDateMustBeGreaterThanStartDate' => '结束日期必须大于开始日期',
	'Project:Error:ProjectEndDateMustBeGreaterThanWBSEndDate' => '项目的结束日期必须大于最新的交付成果日期',
	'Project:GeneralInfo' => '信息',

	'Menu:MyProject' => '我的项目',
	'Menu:MyProject+' => '我管理的项目',
	'Menu:NewProject' => '新建项目',
	'Menu:Overview' => '概况',
	'Menu:Project:Overview' => '概况',
	'Menu:ProjectChangeMenu' => '项目变更',
	'Menu:ProjectManagement' => '项目管理',
	'Menu:ProjectMenu' => '项目',
	'Menu:SearchProject' => '查询项目',

	'UI:AddLinkedObjectsOf_Class' => '添加%1$s对象...',
	'UI:ProjectMgmtMenuOverview:Title' => '仪表盘',
	'UI-IssueManagementOverview-OpenIssueByProject' => '已开放问题按客户项目',
	'UI-ProjectManagementOverview-Last-12Months' => '近12个月项目 (按项目开始日期)',
	'UI-ProjectManagementOverview-Last-3Months' => '近3个月项目 (按客户)',
	'UI-ProjectManagementOverview-OpenProjectByStatus' => '已开放项目按状态',

	'Class:Project/CreateDeliverable' => '创建交付成果',
	'Class:Project/CreateDeliverableForm' => '给%1$s创建交付成果',
	'Class:Project/ReportLabel' => '创建于%1$s',
	'Class:Project/DuplicateProject' => '复制项目',
	'Class:Project/DuplicateProjectForm' => '从%1$s复制项目',
	'Class:Ticket/Attribute:related_project' => '相关项目',
	'Class:Ticket/Attribute:related_project_id' => '相关项目',

));


// WBS class
Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:WBS' => '交付成果',
	'Class:WBS/Attribute:acceptance' => '验收标准',
	'Class:WBS/Attribute:available_budget' => '可用预算',
	'Class:WBS/Attribute:completion' => '% 完成',
	'Class:WBS/Attribute:contacts_list' => '利益相关者',
	'Class:WBS/Attribute:contacts_list_proj_displaybare' => '项目关联的利益相关者',
	'Class:WBS/Attribute:contacts_list_wbs_displaybare' => '运行交付成果关联的利益相关者',
	'Class:WBS/Attribute:contacts_list+' => '所有参与交付成果的联系人',
	'Class:WBS/Attribute:delay' => '延误',
	'Class:WBS/Attribute:description' => '说明',
	'Class:WBS/Attribute:end_date' => '要求结束日期',
	'Class:WBS/Attribute:freetime' => '从现在到结束日期',
	'Class:WBS/Attribute:labor_cost' => '人工费用',
	'Class:WBS/Attribute:material_cost' => '物料费用',
	'Class:WBS/Attribute:name' => '名称',
	'Class:WBS/Attribute:project_id' => '项目',
	'Class:WBS/Attribute:re_estimated_end_date' => '计划结束日期',
	'Class:WBS/Attribute:re_estimated_start_date' => '计划开始日期',
	'Class:WBS/Attribute:ref' => 'Ref',
	'Class:WBS/Attribute:start_date' => '要求开始日期',
	'Class:WBS/Attribute:status' => '状态',
	'Class:WBS/Attribute:status/Value:cancel' => '已取消',
	'Class:WBS/Attribute:status/Value:closed' => '已完成',
	'Class:WBS/Attribute:status/Value:pending_parent' => '等待父级交付成果',
	'Class:WBS/Attribute:status/Value:running' => '进行中',
	'Class:WBS/Attribute:status+' => 'WBS状态',
	'Class:WBS/Attribute:technical_info' => '计数信息',
	'Class:WBS/Attribute:time_planned' => '计划用时',
	'Class:WBS/Attribute:wbs_budget' => '预算',
	'Class:WBS/Attribute:wbs_cost' => '总费用',
	'Class:WBS/Attribute:wbs_log' => '交付成果记录',
	'Class:WBS/Attribute:wbs_owner_id' => '所有者',
	'Class:WBS/Attribute:wbs_real_costs' => 'WBS真实费用',
	'Class:WBS/Attribute:wbss_child_list' => '子级交付成果',
	'Class:WBS/Attribute:wbss_parent_list' => '父级交付成果',
	'Class:WBS/Name' => '%1$s-%2$s',
	'Class:WBS/Stimulus:ev_cancel' => '取消交付成果',
	'Class:WBS/Stimulus:ev_closed' => '已关闭',
	'Class:WBS/Stimulus:ev_reopen' => '重新打开',
	'Class:WBS/Stimulus:ev_running_admin' => '激活子任务',
	'Class:WBS+' => 'List of deliverable of Work Breakdown Structure',
	'WBS:Cost' => '费用',
	'WBS:Dates' => '日期',
	'WBS:Error:ParentCantBeChildren' => 'You cannot be your own parent deliverable',
	'WBS:Execution' => '执行',
	'WBS:Info' => '信息',
	'Class:WBS/Error:Contactnotfound' => '%1$s is not defined as stakeholder of project linked? You should add him.',

	'Class:lnkWBSToWBS' => '关联子级WBS至父级WBS',
	'Class:lnkWBSToWBS/Attribute:child_wbs_id' => '子级交付成果',
	'Class:lnkWBSToWBS/Attribute:parent_wbs_id' => '父级交付成果',
	'Class:lnkWBSToWBS/Attribute:wbs_id' => '父级交付成果',
	'Class:lnkWBSToWBS/Name' => '%1$s - %2$s',

	'Menu:MyWBS' => '我的交付成果',
	'Menu:MyWBS+' => '我持有的WBS',
	'Menu:NewWBS' => '新建交付成果',
	'Menu:WBSMenu' => '交付成果',
	'Menu:SearchWBS' => '查询交付成果',
	'UI-WBSManagementOverview-OpenWBSByProject' => '开放的交付成果按客户项目',
));


//
// Class: Ticket
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:Ticket/Attribute:related_project_ref' => '相关联的项目',
	'Class:Ticket/Attribute:related_project_ref+' => '',
));

//
// Class: WBS
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:WBS/Stimulus:ev_pending_parent' => '等待父级',
	'Class:WBS/Stimulus:ev_pending_parent+' => '',
	'Class:WBS/Stimulus:ev_running' => '进行中',
	'Class:WBS/Stimulus:ev_running+' => '',
));

//
// Class: lnkWBSToWBS
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:lnkWBSToWBS/Attribute:child_start_date' => '子级开始日期',
	'Class:lnkWBSToWBS/Attribute:child_start_date+' => '',
	'Class:lnkWBSToWBS/Attribute:child_end_date' => '子级结束日期',
	'Class:lnkWBSToWBS/Attribute:child_end_date+' => '',
	'Class:lnkWBSToWBS/Attribute:parent_start_date' => '父级开始日期',
	'Class:lnkWBSToWBS/Attribute:parent_start_date+' => '',
	'Class:lnkWBSToWBS/Attribute:parent_end_date' => '父级结束日期',
	'Class:lnkWBSToWBS/Attribute:parent_end_date+' => '',
));

//
// Class: lnkContactToWBS
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:lnkContactToWBS/Attribute:project_id' => '项目编号',
	'Class:lnkContactToWBS/Attribute:project_id+' => '',
));
