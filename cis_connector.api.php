<?php
/**
 * Implements hook_cis_service_registry().
 * distro_name - machine name bucket for settings, distro provides namespace
 * variable - a value to store in the registry with its value
 *
 * Typically this function is only invoked when implementing in large scale
 * implementations of distributions that all talk to each other.
 * It is the backbone of the Suite of tools approach to LMS design.
 */
function hook_cis_service_registry() {
  // service module that makes our implementation specific
  return array(
    'distro_name' => array(
      'variable' => 'value',
      ),
    // this example is from how CIS uses this
    'cis' => array( // Course Information System distribution
      'address' => 'www.example.com', // address to connect to for CIS data
      'user' => 'account', // special user account with HTTP authentication access
      'pass' => 'password', // password for that connection account
      'mail' => 'account@example.com', // optional email address for associated account connection
      'college_machine' => 'aanda', // machine name for the college in question
      'instance' => FALSE, // if this is a per instance distro or single system
    ),
  );
}

/**
 * Implements hook_cis_service_registry_alter().
 * alter information provided by other registry statements
 */
function hook_cis_service_registry_alter(&$registry) {
  // divert to a different connection address on a specific site
  $registry['cis']['address'] = 'www.example2.com';
}