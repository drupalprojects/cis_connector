<?php
/**
 * @file
 * cis_connector_profile2.features.inc
 */

/**
 * Implements hook_default_profile2_type().
 */
function cis_connector_profile2_default_profile2_type() {
  $items = array();
  $items['main'] = entity_import('profile2_type', '{
    "userCategory" : true,
    "userView" : true,
    "type" : "main",
    "label" : "Main profile",
    "weight" : "0",
    "data" : { "registration" : true, "use_page" : true }
  }');
  return $items;
}
