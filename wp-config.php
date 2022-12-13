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
define( 'AUTH_KEY',         '>S#qHv;G@dIPLc@~-XQsr=!8&h(zDF/$gVB>jX3{M?1w-Zo*(N}1<)hgl O=@3)%' );
define( 'SECURE_AUTH_KEY',  'Lyk6wV65m5/5:Uf^/p$Kd}HXCKqG]&1R5GdZ/<^&tYob;AivfGE#UMAhMh*~%(;(' );
define( 'LOGGED_IN_KEY',    '7~^{*I.&_M2oxIaC>&$_;J$?6~f/3v,+h(0Sqker@e`}+7&3j6;P%J|Ut-_8pvXA' );
define( 'NONCE_KEY',        '{7+h+sO.Yq;E]hs]O6Y$2AXfmu.{0PX`S*|R)?mzZU(nMg%QR7:_yEr~*T=fjz2S' );
define( 'AUTH_SALT',        'g+P`&FO:@/yy7m74>^%fv I*~]IIJlF<cRu8INWt XLZ*yeV0`!d3<#,`X[qb)pV' );
define( 'SECURE_AUTH_SALT', 'U<x9E w)gjYguBF60&I2hu(2>B`NWyD~r6:nUq)-[ZCodm.n^(_e/n=9*)>41!8r' );
define( 'LOGGED_IN_SALT',   '~cH#xmlnMIcpW&%yuumohIsFhN&C-Ujd@( 1V9yR16zn.cbqSEpsH==yjBWt13~O' );
define( 'NONCE_SALT',       '$k:&CG;EcIn,IQ}$v22VN70E{0{P}m*Ki0Mi^mt~ll1-O{:e=@q:9rS`Gl;P+/H^' );

/**#@-*/

define('JWT_AUTH_SECRET_KEY', 'Qh:fFlW;.t7,6L,*FIBUX+GT_sfL4-5Bu3S]Auz`MNB2-emA:+eQY+6,VZb~vj6-');
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
