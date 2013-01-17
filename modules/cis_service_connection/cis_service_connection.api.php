<?php
/**
 * Implements hook_set_cis_service_data().
 * delta is a portion of the syncronization routine
 * Common values are initial and interval
 * New deltas can be added through custom code routines
 */
function hook_set_cis_service_data($delta) {
  // only set this when the first run happens
  if ($delta == 'initial') {
    return array(
      'field_in_cis_service_content_type' => 'value to set',
    );
  }
}

/**
 * Implements hook_cis_section_list_alter().
 * Allow for modification of the system reported section list
 */
function hook_cis_section_list_alter(&$sections) {
  // add a section called default
  $sections['default'] = t('Default');
}