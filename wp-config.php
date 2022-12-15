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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'banco_api_ranek' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'L+<3[m{9{7]aP-8e q5y,4-;E#}sJ:XSrW>+Ko:?xuqRvet$mkHNIjmtVk/b+y/A' );
define( 'SECURE_AUTH_KEY',  '@t!fzAYq/GPOfY @/=5;8QHX@?Ra u?xX9-n!07R |3K<k;:ebL$R`U$q,Z8RY?Q' );
define( 'LOGGED_IN_KEY',    'puk*i]E@?.y}3KrExQ>#]&aXD}==&@!LOhvWZaKY~z|G?lT::7CQ[E+#99*vwpH_' );
define( 'NONCE_KEY',        'dL#L4?`WyTh!#mxRkz-19 g0vs2}+,@],fgfals^/ukBEy;l{R7`Yn%OaU)9eb=c' );
define( 'AUTH_SALT',        '|_JC3:_b;_Mhro][<nL[qL2;dW}6In`Bu:=JlYB0}?cu+~15^<XttC?YkS-g~d]=' );
define( 'SECURE_AUTH_SALT', ']%8PHdC5aZqY|eqO$HY:V.wWBiy4ud[zF4xno3bI&=]E*<y2@ypmk)4LuNt[-j?E' );
define( 'LOGGED_IN_SALT',   '%zL7}kU}}P.ibB%K*S<#noo3kmt>8qjRq1<$j}~Tf|#qEHMK44jISeXK@eEW]*Jz' );
define( 'NONCE_SALT',       ';|&~k2ylBwAiA!`t:W>BM,1&Y!(*<(z.W&^us@2}!j|O]:DS8>!ym`|$}<8&NHf,' );

/**#@-*/
define('JWT_AUTH_SECRET_KEY', 'toU/XsIHMkufG8oW0+Mqj~o9.a0@/6^IKN[tBzv<(6[EI~B)0GWgt}bY<t8;MS^v');
define('JWT_AUTH_CORS_ENABLE', true);

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
