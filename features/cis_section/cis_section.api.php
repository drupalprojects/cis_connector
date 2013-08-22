<?php
// passing force_roster_sync via cron to any site running this code
// will skip it's normal sync routine and run immediately to sync the roster

/**
 * Implements hook_cis_section_activate().
 *
 * Allow for activing when a new section is activated.
 * this example is penn state's implementation to use a section being
 * active to talk to angel, our primary lms.. for now.
 *
 * Return is an array of callback functions to allow for easier
 * alteration based on the context of the situation.
 */
function hook_section_activate() {
  return array('_cis_section_activate_callback');
}
 
/**
 * Example callback for activating a section
 */
function _cis_section_activate_callback($node) {
  // grab section id
  $section = array($node->field_section_id['und'][0]['value']);
  // pull the roster together for this section
  $roster = _psu_angel_sync_build_roster($section);
  // build the user accounts
  watchdog('angel', 'Angel synced for section @section', array('@section' => $node->field_section_id['und'][0]['value']));
  _psu_angel_sync_create_accounts($roster);
  drupal_set_message(t('Angel synced for section @section', array('@section' => $node->field_section_id['und'][0]['value'])));
}

/**
 * Implements hook_cis_section_deactivate().
 *
 * Allow for activing when a section is deactivated.
 */
function hook_cis_section_deactivate() {
  return array('deactivate_callback');
}

/**
 * Implements hook_cis_section_build_roster().
 *
 * $section is a unique identifier for asking a roster
 * service for the students / instructors are associated.
 *
 * Returned structured expected to be array
 * $roster[$member['user_id']] = $member['course_rights'];
 */
function hook_cis_section_build_roster($section) {
  // user name => role id, you'll want
  return array(
    'name' => 'student',
    'name2' => 'student',
    'name3' => 'instructor',
    'name4' => 'student',
  );
}

/**
 * Implements hook_cis_section_user_insert_alter().
 *
 * Allow modification of the user object just prior to insert
 * when the method used to create the user is section activation.
 *
 * This example shows how psu populates an email address automatically.
 */
function hook_cis_section_user_insert_alter(&$fields) {
  $fields['mail'] = _psu_utility_name_to_email($fields['name']);
  $fields['init'] = $fields['mail'];
}

/**
 * Implements hook_cis_section_list_alter().
 * Allow for modification of the system reported section list
 */
function hook_cis_section_list_alter(&$sections) {
  // add a section called default
  $sections['default'] = t('Default');
}