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
define( 'DB_NAME', 'wpdatabase' );

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
define( 'AUTH_KEY',         'Eezt?[LZX!h@:WfTfmpyV&`}Z>^DDot(KJ.i&b+#D280OLQ8.M)G*![vGD.TOMK7' );
define( 'SECURE_AUTH_KEY',  '[T_/9Vs6Xq{;2rK|s.i+sYty(ANAP_5*+r&A9w=RPe7#tpT:V^xS?|^@EbQ47Cz9' );
define( 'LOGGED_IN_KEY',    'i`r`ifr88DnfFd.B3T!qmt#n#v(m&@Z_0pLgI1zR_JY#DY:6TI}*@<dsY8NLk@/L' );
define( 'NONCE_KEY',        '}E6_~UHD){s^JY0aw$N?u]E`v:&dw5FK*j`TgX_GpHl=51?o]|j!f6/r{z-$QHaf' );
define( 'AUTH_SALT',        'w+YD}QTAnbPm#}N5*WQS%nikZJk(m{vM0Kfod;-P;]3_Bwm^x8/YC#ASEErx0-BX' );
define( 'SECURE_AUTH_SALT', 'h>6We%Hc[lGsj9=yKdkjDu>1 E(%g>)1~5#Fi3[JnL9IQM%(4q*z0sG~l=&Ky|O^' );
define( 'LOGGED_IN_SALT',   'vmF+8]>BB}*kF@p7pXWOnX<,G[P5=2DpX3pVm%5l2frs&/IrHJJqQW9DLVYX[u-g' );
define( 'NONCE_SALT',       '8xC$6C:,i)RL-?JANrYL1nCHIaWE=1y<tTf#UF[=}.>Asf+(`:H<y[0Ihn/?rlxo' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
