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
define( 'AUTH_KEY',          'Q{?qYS<.Bd-(#]28SS#r_(#k5AeALd6/UbkUp?R;)<Zb/:kw]zJE@{6xCkB*MQ0?' );
define( 'SECURE_AUTH_KEY',   '&ueRZ0?9@O$UxOjqSZf(^4TsQ0^2G`.!dx]|dqRGuLs<3/E{/T@Jy5BcX:zj @9X' );
define( 'LOGGED_IN_KEY',     '-,pX?hlQ*P#vSs+aSaJo6Kqu{^Ad,},|W+8,~BT/:By.k?hJr[B@Qc1_DZc]Rrhc' );
define( 'NONCE_KEY',         ']!{@c#TG.ze_Ww<C_;sgPk24o|qetr`behSRKXqh3,/xgG8QEkl&OcvP|qv`^*Z$' );
define( 'AUTH_SALT',         'Y2M+o&iiq+,UqH:Ir.B`QNjTf&Tn:c^C!@M+xX`RDTG8?n;eLJ_l5mnvIw`+1hYD' );
define( 'SECURE_AUTH_SALT',  'p;$|%&nG2lMJ~q,H4HVE,F7E3wl7GX#yA}QK|%OjDiK:<y+9NZ0N-(gJ{L>krGfF' );
define( 'LOGGED_IN_SALT',    'ocOa3J|2zWs.TJF$QAGpyLCGNPB31IpxeMGEPTVcHP~,%v/Bf/oSs~_KIMAK!j;P' );
define( 'NONCE_SALT',        '(R6g p(t-`UI|65U92ulMegNGP!H|)NWc145)n]pHX[h>0O|&NW5V}3ras:xv?q0' );
define( 'WP_CACHE_KEY_SALT', '$[a8GPdeD)-HH9q:JuCxf.Wyi.lQ ckF35RnkeXpc;Y==[Zt$^}ooXj@(Y~,!k w' );


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
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
