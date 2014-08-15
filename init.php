<?php
// Determining which database to use depending on whether it is the production
// or development site.

switch( $_SERVER['HTTP_HOST'] ){
  case "nicholas.dev":
    $db = array(
      'name' => 'linton_development',
      'user' => 'wordpress',
      'pass' => 'password',
      'host' => '127.0.0.1'
      );
  break;
  default:
    $db = array(
      'name' => 'wordpress',
      'user' => 'wordpress',
      'pass' => 'f0rth3w1n',
      'host' => 'nicholas-wordpress.cx0xyqse1lf3.us-east-1.rds.amazonaws.com'
      );
  break;
}

define('DB_NAME', $db['name']);
define('DB_USER', $db['user']);
define('DB_PASSWORD', $db['pass']);
define('DB_HOST', $db['host']);

?>
