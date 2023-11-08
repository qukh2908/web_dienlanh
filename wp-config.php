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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'webdienlanh_db' );

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
define( 'AUTH_KEY',         '-`_x360A!J=,az-B>1p76>!P{& rj0q:xd%ryK/W~W}e=8T^HsDq|;D;!d3fR*,Q' );
define( 'SECURE_AUTH_KEY',  'vIUI4.e.)(VFa#ZE1+q$/sn58Yp?^1f%U[ NM)l42t;Z<}#,ezsZh=9XwCArCEr|' );
define( 'LOGGED_IN_KEY',    'C^JG$Su,yo8jcCy{{~Yn7]zsSBh^Vyp|ZfPQ#&[)w~N_${aX4{%.P&Ed!=?LD5;[' );
define( 'NONCE_KEY',        '+!rX?nM2g7lp,q)^TY jQ/im8LAmhB8vo56cc>%TXi-z:lWI]lN1Cf.aM-@(I!d7' );
define( 'AUTH_SALT',        'y()3H 7;g`I#fM:)TRGfy,HM,?+;r?r[>%P=D_k>k]a-lFm^}$%N*]$u-Z|ftZi2' );
define( 'SECURE_AUTH_SALT', ' y#:peVdlJh:jnCklJ/fvKF}fU7xEYKvT%677wcY6$8o_c$@@vGpW~R``Ik!F|{H' );
define( 'LOGGED_IN_SALT',   'g~,pV/&L-Z&g<E7H:JAdP$7G9;X[z1BeQ:w#F(~*=0[Ry$>e:6`midE@?(0hM2]z' );
define( 'NONCE_SALT',       '4.c9!M7qxGPt~JU~04)nz(3^<O2StWbs5x>1j%HR.LP6.qa}*E%yqoGPqEP]e(:h' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
