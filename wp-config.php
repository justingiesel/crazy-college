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
define( 'DB_NAME', 'crazycollege' );

/** MySQL database username */
define( 'DB_USER', 'crazycollege' );

/** MySQL database password */
define( 'DB_PASSWORD', '8-7C(Sf8dp' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'yp17iouemsvkkhogdiptswzlehilqflpijxlj3n6wgjp5t4zcuxfg5b8ftbqmo10' );
define( 'SECURE_AUTH_KEY',  'ttxoyt3qgzmppdcc3nwhoudbbvnkebtlhjahfdgin4wmblm9hfsr0rdjqx6w33rw' );
define( 'LOGGED_IN_KEY',    'rck8dovrxon3ayki8z3vk74klucqupxivtn1gdskfwfyvoedlxxyg1jeywyrqv3n' );
define( 'NONCE_KEY',        'wppaxyycrgzqmtdtwwtgzizpoarttpkwgi66s9djdgpe7tdsy01py7xp0zhuriro' );
define( 'AUTH_SALT',        'm95c0rjaso40tx5xjbbcjlpyinejwjqznmbvk3riavbpnyc9tocbalz0nieqgsig' );
define( 'SECURE_AUTH_SALT', 'tgrg6wwnwpmsy82ocohhem6cajj2edseeaszr0n3yx5zrl6ksn3vi4p92hkyrel4' );
define( 'LOGGED_IN_SALT',   'xk3nv4zlxeqyywfatubjxmudu9vblnnqrunkbsso4vqrvktc4mwzg8iorlquvawy' );
define( 'NONCE_SALT',       'vzsoqignnnw9hsnet6vxhqyvlct06qdqkyj892abzhyvqlkddohsemusdy48ivbx' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
