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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'kuehnew' );

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
define( 'AUTH_KEY',         'pkz+%<c*]f:A*C*RD&.}J4EZ|cfM(/^]%EO<>v[/92``zb5ERS;Nc?X1!v:BsW7N' );
define( 'SECURE_AUTH_KEY',  ',`KdtSqKa[&Fu3TP09|dmAd3m>Sq^,u~vWOP0TC1~K;yH*Ht9v3G7ev]4Ghv!2LX' );
define( 'LOGGED_IN_KEY',    'o5qxTC&^YuYDQ<xOUhXAO0kE{|db!o]w]n|I~_`;S$-WjXRP_;Kx[=w}j;AZ>XCh' );
define( 'NONCE_KEY',        'FX8[4gq)F&qINpQLJbD2sOALo.REHbw/I]np42_ECqh+^PKl2@9S:<X{/I,|2o%k' );
define( 'AUTH_SALT',        '(US{9+2%Sj<g>!:[lMY?yBpqFLD,|Ka:9n`u+j0$I]1Z +Q}Jp8utb^M`6Ma|lA(' );
define( 'SECURE_AUTH_SALT', 'm=S!:n-N3,!t80$kJ=}CQ|m6v(GS/B3lP:H59/M]}/5Nb^x>2]stLNs_l?w!PEf=' );
define( 'LOGGED_IN_SALT',   'j`/8cLC`5<%T)X_%#=UbU>5`dHVu:xfT[SD`=Su<!q2B.oL-;F~U3Masn_akf=cb' );
define( 'NONCE_SALT',       'q/2<xeKdct,:#s@/XOx <c1gL>@,c@Z@}HF!rQYxntehto=C5AnYFhCq}>(GmSCA' );

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
