<?php
/**
 * Implements hook_set_cis_service_data().
 * delta is a portion of the syncronization routine
 * Common values are initial, interval, weekly, monthly, yearly
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