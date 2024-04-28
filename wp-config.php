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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '6u[S]aWOUCi=gh@n>~a^CX!iX8/lw_l{z3h_of<eT0P#Oayh[&FJ]z0YmFfR*#kl' );
define( 'SECURE_AUTH_KEY',  'Vif9fC*11lJ)T4YbaiS&wh}V`t8b.p]m<qIdAD~bDuZs84h*2/f|~dEr>f ,%H V' );
define( 'LOGGED_IN_KEY',    'B#()rY.B<RYb)cs4%bOiT5ufkRDOwGhalS$:uCS<]p!YRH@ ^:c5y@!@`9Z&Pl%6' );
define( 'NONCE_KEY',        'a/L0n<8=D~dL].>k[$|Z%AB{C!*O.R1![rPW;n?+J!BY}>vr<AcaAM}]@uwb#-sN' );
define( 'AUTH_SALT',        '^)v~>MKSNeI[dvA >yOqzYb!y8B&L{ !--zWk8Zd)?BMIjYDum8yh#{X~+QLMY!D' );
define( 'SECURE_AUTH_SALT', ')>ofh8#>@nBPgeWXEW}u[9h#x>5|vF9<A^89qmog;!?M2H]B;cWKWZlHK,qitgAK' );
define( 'LOGGED_IN_SALT',   'P-[!P$dFm:37TiATP]$D` #F!$8^^uF/c>O_o^C2@BPYjKp{rlXI_@6..vUpTM 1' );
define( 'NONCE_SALT',       'z4&&g~v%9QMGuce:d^daYq}!BPNb|+iGG&FID6TWj8-Tnyv_pk3(8[A0~&~X[t7]' );

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
