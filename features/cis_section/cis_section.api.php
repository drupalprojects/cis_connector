<?php
/**
 * Implements hook_cis_section_activated().
 *
 * Allow for activing when a new section is activated.
 * this example is penn state's implementation to use a section being
 * active to talk to angel, our primary lms.. for now.
 */
function hook_cis_section_activated($node) {
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
 * Implements hook_cis_section_deactivated().
 *
 * Allow for activing when a section is deactivated.
 */
function hook_cis_section_deactivated($node) {
  // write info back to cis offering about deactivation
}