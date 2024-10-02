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
define( 'DB_NAME', 'github' );

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
define( 'AUTH_KEY',         'Gs_`h4HEm[H[e~V]TTpg8H;*/|*|9I;jDlK4f.d7DoaM7)uH_,>5$08qt|9/h50N' );
define( 'SECURE_AUTH_KEY',  'CyhvRtw{*+#c{Al[HX7B:^fbk#o9c3?(f-mg.Eb7;nwjJjyG0?W+sE!O`TEY[Ii*' );
define( 'LOGGED_IN_KEY',    '~]er}[2w+xkeMMYh=zpF3J]!=bX><u{nJW(+l]wH3_NwDXOgpo&jXT[rbDM9~`))' );
define( 'NONCE_KEY',        '1@:GRCSDExgS/0Oxj0|IUJ5Vnud,trbBfJ?NL/y&pu(.FhQ0b.SmRS<C4EK}@eQX' );
define( 'AUTH_SALT',        'FcxK86J@y` zr<U@1[Hom#aiNKtx$[!&$qRl]08j[Sx<*^H)!J?8$!v>l#|0ii5(' );
define( 'SECURE_AUTH_SALT', 'jlLwWS{eO{;=|6d,z&^nNiGZ3jpR?o8],Tko%!H(x5^FyYy_*~83nA!L~L[$CvdU' );
define( 'LOGGED_IN_SALT',   '8uWbQuWe{2FXI_IcnR5~Q2`X]pirbZAX;E:5G>d]hE?&v(NV@;lNy3-]>Xe$Lt?S' );
define( 'NONCE_SALT',       '7oMiHmC/uVukc_4v_PPe3<OR0[b7Pe0k(P}9i]l78&2X+ :%lQ(eW<;.dL5!2Lk~' );

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
