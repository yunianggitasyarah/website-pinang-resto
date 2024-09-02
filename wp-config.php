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
define( 'DB_NAME', 'pinang-resto' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root01' );

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
define( 'AUTH_KEY',         '+(r&}QfUwghs+(GBkM9IY+|s+YH:cT=ZimZ4rx4/Q.Qp(.p:v4Yw!Ao|u[w#yVOX' );
define( 'SECURE_AUTH_KEY',  'QdXbztLbsXG5pHoMhV2B|tl~O40#wj0Qe<y^_S_3Lts]J5&s}@>q@^It!<[*Q>Zb' );
define( 'LOGGED_IN_KEY',    '8_K[?Q%gu7N<WM*c, DZp]MY5xIE(zN^s&R4aRV,$UG`)EeGB$ |?iN<sI!_PsBk' );
define( 'NONCE_KEY',        'sLcA%}X2O`#W+7o~nlBa~R+X:5>&5@v>H{}h%W^FOwgF|a-|J+UWQ[*7B5SGeLIA' );
define( 'AUTH_SALT',        '>L(|STaQX&q~mI>@$a:as}#A}]ktf Q_*+#m2{IE]?a`/f$2EP 4VG!Ji>flFz~b' );
define( 'SECURE_AUTH_SALT', '&Q+TDUuI!ohX5xr<0mDDm&7e89sq~X);0(019a&+^ ~#AeI);dv4%7b+klu*$r{I' );
define( 'LOGGED_IN_SALT',   'S@I_TZ)z`[~.2X:g9dh6x&81Q~[|RC4(},:6jIpqd ki?kf7O?M@9CA+{2A)|8uj' );
define( 'NONCE_SALT',       'd$[(Dn1Y:b`zE3h ||PmJju};mKTKnmw|e+h=Nq&+VY&jX*Sd5$;Qv2r5z:K&k)+' );

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
