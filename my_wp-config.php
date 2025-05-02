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
define( 'DB_NAME', 'al_bab' );

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
define( 'AUTH_KEY',         'cmLfq1ld(z=H^.vM$;q,zP/iw@Cj}iuqJ%ASH8?(#QE7)UZnM}u/>eGL;#s9mK#Z' );
define( 'SECURE_AUTH_KEY',  '5?!u&%o1:&p:.wJvR4%6@iK.LhWn#^e8j#Ne{``yxPT!QMo.k|ncwbwQyvi#i3UE' );
define( 'LOGGED_IN_KEY',    '4v1][U,?+,}hv#iiVL42/3m~JTU)R2d-MT^K#0U+DWb@0xJO_q8|:g=Z*lKqo,3t' );
define( 'NONCE_KEY',        '0hD1^ !q[Et>+b.){:Vb!,LWLsm0b[*M}s{QAI^;Q`!Z/BI]) pixiQqMG]`Pg;+' );
define( 'AUTH_SALT',        '8ME+!?LgF?6Hb9)~+hKBX#]#b=1dvWab~le8m[aq{Ei^0@%6obA=`y `q*Co2[b.' );
define( 'SECURE_AUTH_SALT', 'M#XY=r(`SY&D(Ha.|+uWB;zlkAVE0vve9E4?Z9{b_R?i[2VE{4Lf6DgJ2D?2ZT0V' );
define( 'LOGGED_IN_SALT',   ':M9pW8 DI&SK`vYP;8GqH?m(N4+wUSiNB!_46Ijh}T0+(+:+1bpcWJ?`/4qZd|z*' );
define( 'NONCE_SALT',       '=`ml[gf00 u^7d2@&:F3DzU8jjov<Teq3/9gy/~Z3< <bK}!@=2scn:w0j=)0yyt' );

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
