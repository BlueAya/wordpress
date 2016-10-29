<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'i1759481_wp3');

/** MySQL database username */
define('DB_USER', 'i1759481_wp3');

/** MySQL database password */
define('DB_PASSWORD', 'L@wQ7TE9KC7hMPLIkq.62([1');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'BdsSG3gwzE3yYdzNU3fb3sGALFYT4NiW9LM8RphxCTfOB5V4D5cg4QNxqzRvJOBj');
define('SECURE_AUTH_KEY',  'T5Z9FR2CsKaWOzKx4cRjcXutWNJ0kuUqp14VL3l0w0b0FwXB2TT4Uzv0kWI7uGgn');
define('LOGGED_IN_KEY',    'v9FBBXF4OOPqKR3mfQI4xsrYco0XT60Rkzq246n9Icrbf8y0aydGLuwoGXqPoCI4');
define('NONCE_KEY',        '67RjdIAnRKZhuHGVbBngNgJKeE053xZo9uHmEP6bDBqAFeusEv7FBjRwrQqWB9yK');
define('AUTH_SALT',        'HyEabQR8PLuOzow7RCoEtZKDoy0I8180SYjD00Ooh7rUIy3tvnzd30qdHs2kwuX1');
define('SECURE_AUTH_SALT', 'VdOL5Dy53uykTT4XNp8gWk3KJYTItnOdwx3yuPaZLpToVuaEBmeI46WOkw94hIWc');
define('LOGGED_IN_SALT',   'VBjhSzkrMWDmwIc55bNkGWpbm7XgW1fqFUrfCtj3NkXqbrcEx5kPC6PfJGHEQOCr');
define('NONCE_SALT',       'PyycTDoXYKMJUCdLZCDuETA9rFzT8yYsSOiVpZG9XBiSkKY2BvwoBsA6E0xHUH5X');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);

/**
 * Multi-site
 *
 */
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
$base = '/thig/';
define('DOMAIN_CURRENT_SITE', 'www.rebeccaschoenrock.com');
define('PATH_CURRENT_SITE', '/thig/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);
define('WP_ALLOW_MULTISITE', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
