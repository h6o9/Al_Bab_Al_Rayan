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
define( 'DB_NAME', 'al_bab_alryan' );

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
define( 'AUTH_KEY',         'r>cEp hs|cAg=^hsZ>WpC%Jv22wL>mE(vHu.HKIIG[b ^)iFi:nD8ZY3wgOxcdg.' );
define( 'SECURE_AUTH_KEY',  'O`Mhx~OOz/`2FGav].[tHfPk%e&kR07L+Mo}g7/LdWq}Qtkj~aBQJzAud0&jb=Rt' );
define( 'LOGGED_IN_KEY',    '&fBVYd>zH9m-dwJ!@@06%Rd7,PxL:geBT1{kTj1d|ZBrc{KwT9#/O60XXdkIpJ,h' );
define( 'NONCE_KEY',        'mb.0F+rq(:!0U|yz~.e1_a&1Z{gJb9y;[a%WUF 6.85e@uSi8*8pLi;JRFY1wJEC' );
define( 'AUTH_SALT',        'PtLS)) U(/ii5;69a3(D^_mxj/q_]:>jMVcH(R=7Z^v~+<-v4S%_b.vmK|X~,M6u' );
define( 'SECURE_AUTH_SALT', 'Zn#s1cOnI<n7wFXqC35/wCe~.^*b}D-7ejgL7f){U(qB1u*E~u56<Vv,8rz/l~hE' );
define( 'LOGGED_IN_SALT',   '&2Vo=m,n~9}Y6[Tk;r)q(<_lMN{GY`2bkhi%Ps1&:|s]*5UF076.>03I}z+JeJ&[' );
define( 'NONCE_SALT',       '#ay)~d:P3i|2e?Vlr;cs5V=BuffgD$LKM=i8aI>JbUq/*T36Yp7.Ncgp4OaTid9!' );

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
