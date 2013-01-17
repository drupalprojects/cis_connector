<?php
/**
 * @file
 * cis_service_lti.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function cis_service_lti_ctools_plugin_api() {
  list($module, $api) = func_get_args();
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}
