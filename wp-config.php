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
define('DB_NAME', 'acs_rotek');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'cHsZ{FLuK+ *{=7n9|`OR{h|:/CR9Xh-G]qB6(|PxOyYwPOk2M6<z42ce/y&.C-8');
define('SECURE_AUTH_KEY',  '_6L4vWch9|u&xMk5x} hpk!-r=y%*/[FRf((0#:{wEO??$ZN(Ji&6~ 4uzaM W)o');
define('LOGGED_IN_KEY',    'l-~A{.q_/Wk@(3OiD2rhCij)30F%djpiE}&GS;mZo$4i%:-]AP_)~/T#:Fw#?t>D');
define('NONCE_KEY',        'PO/G{E(c.Y_r~bfX.&zo|u|`q}r+N[UXK<%l#lA!_CfY&SC*u]gD/#*-k+usa&vi');
define('AUTH_SALT',        '$aNicaw)j!EP@&Bibc%kIPl|YEwq2vnkn$^EMWn*KMK|PU3^aN:,*ocTjx)dOXKd');
define('SECURE_AUTH_SALT', ',2D[CFK~NQ+K1Q8XE&- =-Rt?b~m-/H?rFP|SD3e[)LuLixe./:.w.d6+_(-(O^:');
define('LOGGED_IN_SALT',   'uEL8;=.lE;_QFJ$XM|9H)UEVq3Oj*WAs_0#F+e.&$P5Ib4Pi,/N)7FmV9A)2+9*H');
define('NONCE_SALT',       '%|3C>;[e-ZmGm6zH|9Z1kWK4(}WhpekVQUFjMYAdltu@Bj5[0RINK34En>jHK+&c');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_nook_acs_rotek_';

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
define('WP_DEBUG', true);
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISLAY', true );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
