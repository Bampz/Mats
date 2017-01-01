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
define('DB_NAME', 'mats');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '&dx=n#)Ohsp,z@SRcFrs7uJ)W07k0Pend!R~Ox5yi2X#eyI8?q-f9^3[[GGF9t4;');
define('SECURE_AUTH_KEY',  '4W?.^9o_x=x-u3dm-zX|%q1:u{2$D}4,>]9B}9|eA<cWsjrLe3(mtlhSWh)^;V/2');
define('LOGGED_IN_KEY',    'OQ80)wL/|puniG}~RskcexfM7sgk;|*$~yHTM_~Q%dWVbGG=4$),eLQDhc|nPWL)');
define('NONCE_KEY',        '*+7N<MAY#o_Sb]?fXs z_(AHLr)}2;S61/19u<6D?Mg0DVEvDb5bKeEX-m.~(l8x');
define('AUTH_SALT',        '|dcS.$P5<?c^dZnL^S#3c=S_}FcrZ(yY}/uRTE/hZ4_UvbZ7J:5rT=|rV[ZYE~>A');
define('SECURE_AUTH_SALT', 'K>zHKr-8%wZ}CQMOAqx{9hd/:ZeS~$:Iw(EwPZhr6kte)w-IgLSL8 ,Z=Uj-0?`%');
define('LOGGED_IN_SALT',   'h51%hrLI<E%QxAP<$o6rt15HOWy4b58qiz,xPfWx~(XV$*`<l|.7S@c+HEdW$N@h');
define('NONCE_SALT',       's|2n7w:a/sLr,*n(amVYd=>E|!:^uLS#O8}w[6XBqq8dV{B(rnFr7;>M,unb[*@_');

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
