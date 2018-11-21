<?php

require_once 'relativedatetest.civix.php';
use CRM_Relativedatetest_ExtensionUtil as E;

/**
 * Implements hook_civicrm_managed().
 *
 * Generate a list of entities to create/deactivate/delete when this module
 * is installed, disabled, uninstalled.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_managed
 */
function relativedatetest_civicrm_managed(&$entities) {
  // Let's add the new filters to the dropdown list.
  // Holiday relative dates.
  $entities[] = [
  'module' => 'com.megaphonetech.relativedatetest',
  'name' => 'HolidayFilter',
  'entity' => 'OptionValue',
  'params' => [
    'version' => 3,
    'option_group_id' => 'relative_date_filters',
    'label' => 'Holiday Season',
    'value' => 'holidays',
  ]];
  // First quarter of this year.
  $entities[] = [
  'module' => 'com.megaphonetech.relativedatetest',
  'name' => 'Q1CurrentYear',
  'entity' => 'OptionValue',
  'params' => [
    'version' => 3,
    'option_group_id' => 'relative_date_filters',
    'label' => 'Q1 this year',
    'value' => 'q1',
  ]];
}

function relativedatetest_civicrm_relativeDate($filter) {
  $dates = [];
  if ($filter == 'holidays') {
    //Thanksgiving to Christmas
    $dates['from'] = (new DateTime('November third Thursday'))->format('Ymd');
    $dates['to'] = (new DateTime('December 25th'))->format('Ymd');
  }
  if ($filter == 'q1') {
    //Thanksgiving to Christmas
    $dates['from'] = (new DateTime('January 1st'))->format('Ymd');
    $dates['to'] = (new DateTime('March 31st'))->format('Ymd');
  }
  return $dates;
}
/**
 * Implements hook_civicrm_config().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_config
 */
function relativedatetest_civicrm_config(&$config) {
  _relativedatetest_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_xmlMenu().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_xmlMenu
 */
function relativedatetest_civicrm_xmlMenu(&$files) {
  _relativedatetest_civix_civicrm_xmlMenu($files);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_install
 */
function relativedatetest_civicrm_install() {
  _relativedatetest_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_postInstall().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_postInstall
 */
function relativedatetest_civicrm_postInstall() {
  _relativedatetest_civix_civicrm_postInstall();
}

/**
 * Implements hook_civicrm_uninstall().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_uninstall
 */
function relativedatetest_civicrm_uninstall() {
  _relativedatetest_civix_civicrm_uninstall();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_enable
 */
function relativedatetest_civicrm_enable() {
  _relativedatetest_civix_civicrm_enable();
}

/**
 * Implements hook_civicrm_disable().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_disable
 */
function relativedatetest_civicrm_disable() {
  _relativedatetest_civix_civicrm_disable();
}

/**
 * Implements hook_civicrm_upgrade().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_upgrade
 */
function relativedatetest_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _relativedatetest_civix_civicrm_upgrade($op, $queue);
}



/**
 * Implements hook_civicrm_caseTypes().
 *
 * Generate a list of case-types.
 *
 * Note: This hook only runs in CiviCRM 4.4+.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_caseTypes
 */
function relativedatetest_civicrm_caseTypes(&$caseTypes) {
  _relativedatetest_civix_civicrm_caseTypes($caseTypes);
}

/**
 * Implements hook_civicrm_angularModules().
 *
 * Generate a list of Angular modules.
 *
 * Note: This hook only runs in CiviCRM 4.5+. It may
 * use features only available in v4.6+.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_angularModules
 */
function relativedatetest_civicrm_angularModules(&$angularModules) {
  _relativedatetest_civix_civicrm_angularModules($angularModules);
}

/**
 * Implements hook_civicrm_alterSettingsFolders().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_alterSettingsFolders
 */
function relativedatetest_civicrm_alterSettingsFolders(&$metaDataFolders = NULL) {
  _relativedatetest_civix_civicrm_alterSettingsFolders($metaDataFolders);
}

/**
 * Implements hook_civicrm_entityTypes().
 *
 * Declare entity types provided by this module.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_entityTypes
 */
function relativedatetest_civicrm_entityTypes(&$entityTypes) {
  _relativedatetest_civix_civicrm_entityTypes($entityTypes);
}

// --- Functions below this ship commented out. Uncomment as required. ---

/**
 * Implements hook_civicrm_preProcess().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_preProcess
 *
function relativedatetest_civicrm_preProcess($formName, &$form) {

} // */

/**
 * Implements hook_civicrm_navigationMenu().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_navigationMenu
 *
function relativedatetest_civicrm_navigationMenu(&$menu) {
  _relativedatetest_civix_insert_navigation_menu($menu, 'Mailings', array(
    'label' => E::ts('New subliminal message'),
    'name' => 'mailing_subliminal_message',
    'url' => 'civicrm/mailing/subliminal',
    'permission' => 'access CiviMail',
    'operator' => 'OR',
    'separator' => 0,
  ));
  _relativedatetest_civix_navigationMenu($menu);
} // */
