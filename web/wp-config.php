<?php

$vars = array('DB_NAME', 'DB_USER', 'DB_PASSWORD', 'DB_HOST', 'DB_CHARSET', 'DB_COLLATE', 'AUTH_KEY', 'SECURE_AUTH_KEY', 'LOGGED_IN_KEY', 'NONCE_KEY', 'AUTH_SALT', 'SECURE_AUTH_SALT', 'LOGGED_IN_SALT', 'NONCE_SALT', 'WP_DEBUG', 'TABLE_PREFIX');
foreach ($vars as $var) {
    define($var, getenv($var));
}

if(getenv('TABLE_PREFIX') == false) {
  $table_prefix  = 'wp_';
} else {
  $table_prefix  = getenv('TABLE_PREFIX');
}

if ( getenv('ABSPATH') != false )
  define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
