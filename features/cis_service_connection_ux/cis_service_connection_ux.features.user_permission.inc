<?php
/**
 * @file
 * cis_service_connection_ux.features.user_permission.inc
 */

/**
 * Implements hook_user_default_permissions().
 */
function cis_service_connection_ux_user_default_permissions() {
  $permissions = array();

  // Exported permission: switch section context.
  $permissions['switch section context'] = array(
    'name' => 'switch section context',
    'roles' => array(
      0 => 'administrator',
      1 => 'instructor',
      2 => 'staff',
      3 => 'teaching assistant',
    ),
    'module' => 'cis_service_connection',
  );

  return $permissions;
}
