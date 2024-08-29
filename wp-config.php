<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'test' );

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
define( 'AUTH_KEY',         ']>?hc1_Xl%G*YYL t8e6b?)~sBVSz!SN_8i}Y:AX72m2p@{drL9uvecRA6!2XV_o' );
define( 'SECURE_AUTH_KEY',  'IK`XdK=jQ13L:NX`~08TjJwMIKON|?k-v!fiX_3.K7Oq=3ZpEP33LN}Op,pPiqCE' );
define( 'LOGGED_IN_KEY',    '*~s^Vh<.ip{xkCIwq>im1/+d_?}E^nm_#glU$Bu][<o=1CNsy&$+,{DL@B~IKs%+' );
define( 'NONCE_KEY',        'CQ]vPDO37^zx-f~J<B4i?Gvu/SPh{ EyAw}_{0&%-60Hf ^NZ!loNU7Y~P+Fr>N*' );
define( 'AUTH_SALT',        '7`jXGO2q|7M,1%ds7bbUyUuP)v.7SHU]:<bN/{fj(Ql !(L5`GYEw7~?/Ju;Cot;' );
define( 'SECURE_AUTH_SALT', 'UoNxqzw)6Yu(>m%u_Bo34B287}@TtoZ<bkVK6[EvrvXv&-RzS01M11-]SgV&:T@;' );
define( 'LOGGED_IN_SALT',   'u()S6TB( -myw~=9V2lm>m(ZoQ-}5WJ[XVobD%Lk>KH[}.2I=r6BcPMH5w)K[[DR' );
define( 'NONCE_SALT',       '^ob]p`s_*8j:HvfhK4V9wYYob9Z`^M)(TL5t!E#S~v1nV3:o^LV}9AhAsNK<8#~+' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
