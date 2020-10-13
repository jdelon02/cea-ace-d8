<?php
/**
 * Get secrets from secrets file.
 *
 * @param array $requiredKeys  List of keys in secrets file that must exist.
 */


  $databases['migrate']['default'] = array (
  'database' => 'ceacisp_drupal7',
  'username' => 'admin',
  'password' => 'Thin1buoy2',
  'host' => 'ceacivi-instance-1.c5gdwtf3odmd.us-east-1.rds.amazonaws.com',
  'port' => 3306,
  'driver' => 'mysql',
  'prefix' => '',
  );

$databases['upgrade']['default'] = $databases['migrate']['default'];
#  $databases['drupal_7']['default'] = $databases['upgrade']['default'];
