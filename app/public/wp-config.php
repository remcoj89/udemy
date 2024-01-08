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
define( 'AUTH_KEY',          '/56NF*o:j8wd=K65Q;eCfJ:@5Eb,t5=*{^W.%~;&Ku$XBrQ0A1. iM&@9W{d?G0.' );
define( 'SECURE_AUTH_KEY',   'rS3kkjds+bB&`DAO5Q=2Bfmx gw/pOi!_W,4L[;Xng5AZ1E(S^c5J5j#OoB9{sfC' );
define( 'LOGGED_IN_KEY',     'w&K*>iKf4PQYu1H^4#sb5<W%HMG1Vnw?OIe1Oy3Vri&5IlJgamJU{V0LA[aG}I[e' );
define( 'NONCE_KEY',         'DQO/pc`W=0_?rPa%{d1Pdp<AE7k?mlI&]k5Rc-LWw7H]3bUU:Q>Af>2 C`^(d@b.' );
define( 'AUTH_SALT',         '={|TRA&<XH!BVyioi A1E*F4]RP%?#Jl5z*8Y]3`iS*kzr`6[m# cgkO!O!a595 ' );
define( 'SECURE_AUTH_SALT',  '2)F%|L/8?xnv60-Vqm0Ud$E++B6X`&icDbM@O%x%RB#N>HQ6[H!YFY<)0l#RRm[c' );
define( 'LOGGED_IN_SALT',    'rE_QBS6m5!6:} =pI/b9#=k9h1zr.i{+hmBKB2mRIp!DWX>-f?Ba[B1j)X!F+3_2' );
define( 'NONCE_SALT',        '=Gjl+rXH4 sDmSfmL.&nZqeC+6zT-P75UEh+.xI2c.`<QG]LG=u8UbV:bfdcps`>' );
define( 'WP_CACHE_KEY_SALT', 'vinaco`2ra0yP[,`8(GVB,eS[B/a,@-I7:%5~V@,<.ume7H.i805JOdd[%tDk7o4' );


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
	define( 'WP_DEBUG', true );
}

define('WP_DISABLE_FATAL_ERROR_HANDLER', true);

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
