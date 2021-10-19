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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'proker' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'aQ-miJ]G$zn3r~MIMovcDLUU6b)k,zK/FV,yS;LZpu}nfTAZ ho;fyM1E:%.0!J|' );
define( 'SECURE_AUTH_KEY',  'eG+SfA;v4{313~o(]//9#GQ_VgN6!r9gJCQj)hnLOXh)EQh5Ho+y10g_[&vdmO}M' );
define( 'LOGGED_IN_KEY',    '7gm?)[tHq_xUX 1fHNRwX&f{ 8!]kgDo9mE$+_%7W;drl@(USy7Yl-d{~_0]]N.m' );
define( 'NONCE_KEY',        'g9>5BR&amuKRnRwt9r`M6aha{mlIV.<^n^rzL9FZ$zx(*CVGG0mk84zm#;x8^5]3' );
define( 'AUTH_SALT',        'b|x:m+qjv}k[1+#Hkjk?[4xTa{x8#?GAQhpN:@32$%t`8o!<2QMt5U^}Wy/MRv!}' );
define( 'SECURE_AUTH_SALT', '$hDFd^JXCa~&;70rSawi$O[lB}bR/N?8/EF9iz5?pe:Y#f#2D^&:p8ZhegD BG^C' );
define( 'LOGGED_IN_SALT',   '*aPcK[zr,.Uag`f18`$ox9>P];2%^x<3p.d`{XO5rSG}uEy-J1iuB65kX?@ImzU%' );
define( 'NONCE_SALT',       'c_nc EuN3#J!i1DDIjpME<7dkD6)Li@_t=L1&;&0?~9O=3N0WA<ZENeGs?mWlJE]' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
