<?php
/**
 * @file
 * cis_section.features.user_permission.inc
 */

/**
 * Implements hook_user_default_permissions().
 */
function cis_section_user_default_permissions() {
  $permissions = array();

  // Exported permission: clone node.
  $permissions['clone node'] = array(
    'name' => 'clone node',
    'roles' => array(
      'administrator' => 'administrator',
      'instructor' => 'instructor',
      'staff' => 'staff',
      'teaching assistant' => 'teaching assistant',
    ),
    'module' => 'clone',
  );

  // Exported permission: clone own nodes.
  $permissions['clone own nodes'] = array(
    'name' => 'clone own nodes',
    'roles' => array(
      'administrator' => 'administrator',
      'instructor' => 'instructor',
      'staff' => 'staff',
      'teaching assistant' => 'teaching assistant',
    ),
    'module' => 'clone',
  );

  return $permissions;
}
