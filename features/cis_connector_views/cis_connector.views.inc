<?php
/**
 * Implements hook_views_post_build().
 */
function cis_connector_views_views_post_build(&$view) {
  // need to modify results based on those found in page
  if ($view->name == 'cis_connector_node') {
    // make sure the call is to the correct xml data source
    if ($settings = _cis_connector_build_registry('cis')) {
      $address = _cis_connector_format_address($settings) . '/node.xml';
      $view->query->options['xml_file'] = $address;
    }
  }
}
