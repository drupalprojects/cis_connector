<?php
/**
 * @file
 * cis_service_lti.strongarm.inc
 */

/**
 * Implements hook_strongarm().
 */
function cis_service_lti_strongarm() {
  $export = array();

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'lti_tool_provider_global_role_array';
  $strongarm->value = array(
    'Learner' => '8',
    'Instructor' => '5',
    'ContentDeveloper' => '7',
    'Member' => '2',
    'Manager' => '2',
    'Mentor' => '2',
    'Administrator' => '2',
    'TeachingAssistant' => '9',
  );
  $export['lti_tool_provider_global_role_array'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'lti_tool_provider_user_attribute_mapping';
  $strongarm->value = array(
    'lis_person_name_given' => 'none',
    'lis_person_name_family' => 'none',
    'lis_person_name_full' => 'none',
  );
  $export['lti_tool_provider_user_attribute_mapping'] = $strongarm;

  return $export;
}
