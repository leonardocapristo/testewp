<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         'FtcKvIoqt/IiaP4D6ybGyNSHvDtSXlrv2R/PLx5P34MkDgANn3k3dggRO6AfLsA/Sluvp712aEAk2OMjqotoZQ==');
define('SECURE_AUTH_KEY',  'OpPJ40JMC4tO/jYhorWlyYxy25KYiC2RcNE9VuDZ9nsrGmEenBM/oKvBQkAReACTlkwslHfHGjTdEH0DCTrIBQ==');
define('LOGGED_IN_KEY',    'geyhi1VkRIcz69Xglv0C0OhB2VK9b4qVzLBfUiYrHAlHfFzihs8+g4PEHIW3lecG3OasOVWKdn2u/1AcXGMY1Q==');
define('NONCE_KEY',        'Y1KXSE2+Kh4OJY5lgOVV9KJzRf5UiumXavJQECASnx6On6AvQNlf+uRic1mA4HUXdnZPQAVMKjgn44L3p/JScw==');
define('AUTH_SALT',        '85RwyN3oYtt3prkY4AwsRlN571vJsajaTVWjBwr8CuBNQC31wgKG3RGsZGavt500nHbRNrQaDB3dxe2aiEoS9w==');
define('SECURE_AUTH_SALT', 'f43zY3P+q1dACWoMLb0YqzowtlqnSphNhnB3eUUaz0JTFAyj4rp8y1gptBMGRTKHOPEKxz3q08btL40fuhJGLw==');
define('LOGGED_IN_SALT',   'w6rf+BbQMaAXiAdeHRRNgDxKejUTIIjlBN8grJfloAOV8PFNwOsV+mQ5qEfYEl9FjaWy453yfh3WtCMwbbB5qQ==');
define('NONCE_SALT',       'E3aynsFMgXv6qV8uvb0fp/8FMjbC6lxSu4b/BCA/QRomtWDi1Vrqdue9DwIDYj9Nhcz6I3AuYcdN+QEgwIh2+Q==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
