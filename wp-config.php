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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Amino-clothes' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'x %~]-[f_MI^6G{~w:p=d(3:GUXr.gs)PqZ=p!R|J{x^TnqmzsC:_2+I; SPxNYz' );
define( 'SECURE_AUTH_KEY',  'b4Mys>t.aHve:.{!zOWrxomeeklW4 em`|oLXF~p]7(+#^E0N%(cQRm-6^FgcG{l' );
define( 'LOGGED_IN_KEY',    '+_Bx6k5o%[bHgt)ds4yrB1#rQrh(h)v1i#MVh=lgM/bUX+_aTZ8TvG;|MT#k3fE+' );
define( 'NONCE_KEY',        '^*qWC-jEQ*1 Tn|oH&dkfkaKjtA8NcI5w/pO4xeGCw7]j`]Ac3gI8K_+^2l0*f_~' );
define( 'AUTH_SALT',        'sCE/cC=9Ulr6Y;2GI-2eXj99{ZbB_Ujv#vaUpBv/%36~*6(>k0,E&cVJ9La=t Ed' );
define( 'SECURE_AUTH_SALT', 'v|u`}Uij~n]O`sk^Dx{6(~m+z[yA3GFg[t9:Yy+zy.1CtgXke;LC[fS8yTn:4^>c' );
define( 'LOGGED_IN_SALT',   'zRt^]%8,|Zk*x]{JIdVh?%_T0uWeL#(VFTK-:{mN4]pnSCBdV`4?W6R?>GLl]M86' );
define( 'NONCE_SALT',       'i]DL2j0W6Vlf9`3jr:6dy1_u8Yr{0x00IVC 8ex55.f&fGCyPpv:blFt10fKao,P' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
define('FS_METHOD','direct');
