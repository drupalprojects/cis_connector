<?php
/**
 * Implements hook_set_cis_service_data().
 */
function hook_set_cis_service_data($delta) {
  // only set this when the first run happens
  if ($delta == 'initial') {
    return array(
      'field_in_cis_service_content_type' => 'value to set',
    );
  }
}