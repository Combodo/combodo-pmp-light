<?php
/*
 * @copyright   Copyright (C) 2010-2021 Combodo SARL
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

//
// iTop module definition file
//

SetupWebPage::AddModule(
	__FILE__, // Path to the current file, all other file names are relative to the directory containing this file
	'combodo-pmp-light/1.1.1',
	array(
		// Identification
		//
		'label'        => 'Project Management light module',
		'category'     => 'business',

		// Setup
		//
		'dependencies' => array(
			'itop-tickets/2.7.0',
			'itop-config-mgmt/2.0.0',
			'itop-object-copier/1.3.4',
			'combodo-gantt-view/1.0.2',

		),
		'mandatory' => false,
		'visible' => true,
		'installer' => 'PMPLightInstaller',

		// Components
		//
		'datamodel' => array(
			'src/Attribute/AttributePercentageCompletion.php',
			'model.combodo-pmp-light.php',
		),
		'webservice' => array(),
		'data.struct' => array(// add your 'structure' definition XML files here,
		),
		'data.sample' => array(// add your sample data XML files here,
		),

		// Documentation
		//
		'doc.manual_setup' => '', // hyperlink to manual setup documentation, if any
		'doc.more_information' => '', // hyperlink to more information, if any 

		// Default settings
		//
		'settings' => array(// Module specific settings go here, if any
		),
	)
);

if (!class_exists('PMPLightInstaller'))
{
	// Module installation handler
	//
	class PMPLightInstaller extends ModuleInstallerAPI
	{
		/**
		 * @inheritdoc
		 */
		public static function BeforeWritingConfig(Config $oConfiguration)
		{
			// Rule to add to the object copier configuration
			//create a delivrable from a project
			$aNewRule = array(
				'source_scope' => 'SELECT Project WHERE status NOT IN (\'closed\',\'monitored\',\'cancel\')',
				'allowed_profiles' => 'Project Manager,Administrator',
				'menu_label' => Dict::s('Class:Project/CreateDeliverable'),
				'form_label' => Dict::s('Class:Project/CreateDeliverableForm'),
				'report_label' => Dict::s('Class:Project/ReportLabel'),
				'dest_class' => 'WBS',
				'preset' =>
					array(
						0 => 'copy(id,project_id)',
						1 => 'set(start_date,$current_date$ $current_time$)',
						2 => 'copy(agent_id,wbs_owner_id)',
					),
				'retrofit' =>
					array(),
			);

			// Retrieving object copier rules from conf parameters
			// Note: We don't do anything if object copier is not installed, otherwise its configuration will be set when installed.
			$aExistingRules = $oConfiguration->GetModuleSetting('itop-object-copier', 'rules', array());
			if (!empty($aExistingRules))
			{
				$bFound = false;
				foreach ($aExistingRules as $aExistingRule)
				{
					if (isset($aExistingRule['menu_label']) && ($aExistingRule['menu_label'] === $aNewRule['menu_label']))
					{
						$bFound = true;
						break;
					}
				}

				// Add rule only if not already existing
				if ($bFound === false)
				{
					$aExistingRules[] = $aNewRule;
					$oConfiguration->SetModuleSetting('itop-object-copier', 'rules', $aExistingRules);
				}
			}

			//duplicate a project with delivrable
			$aNewRule = array(
				'id' => 'CopyProjectLight',
				'source_scope' => 'SELECT Project WHERE status NOT IN (\'closed\',\'monitored\')',
				'allowed_profiles' => 'Project Manager,Administrator',
				'menu_label' => Dict::s('Class:Project/DuplicateProject'),
				'form_label' => Dict::s('Class:Project/DuplicateProjectForm'),
				'report_label' =>  Dict::s('Class:Project/ReportLabel'),
				'dest_class' => 'Project',
				'preset' =>
					array (
						0 => 'clone_scalars(*)',
						1 => 'clone(contacts_list,functionalcis_list)',
						2 => 'call_method(Copydeliverablestodeliverables)',
					),
				'retrofit' =>
					array (),
			);

			// Retrieving object copier rules from conf parameters
			// Note: We don't do anything if object copier is not installed, otherwise its configuration will be set when installed.
			$aExistingRules = $oConfiguration->GetModuleSetting('itop-object-copier', 'rules', array());
			if (!empty($aExistingRules))
			{
				$bFound = false;
				foreach ($aExistingRules as $aExistingRule)
				{
					if (isset($aExistingRule['menu_label']) && ($aExistingRule['menu_label'] === $aNewRule['menu_label']))
					{
						$bFound = true;
						break;
					}
				}

				// Add rule only if not already existing
				if ($bFound === false)
				{
					$aExistingRules[] = $aNewRule;
					$oConfiguration->SetModuleSetting('itop-object-copier', 'rules', $aExistingRules);
				}
			}
			return $oConfiguration;
		}
	}

}