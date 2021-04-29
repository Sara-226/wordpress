<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'g8!8T3J{))uVK8@q>oz$}x|16~w?@,9k8p^>6A(i]`vFcE,@XWsz,(TiLAX=DY$Y' );
define( 'SECURE_AUTH_KEY',  '# #_)8c0=kH}ACS=BHM&DbNAn4-7x]I#&Z`g9WnPdr.}/3>WU?^?%zh=B28E_MY*' );
define( 'LOGGED_IN_KEY',    '9|Dz#U=7DF%_?H4B@38XGX7qp<(pVEo- SPeGO1j^/c8sxSczK9M{eU:RuV{^i4_' );
define( 'NONCE_KEY',        '!r->@*9*HH,9w#1=Xb|z2{27h%`HuOu;oKA*Rg<;20^844<FK% 0bI{l%>S0Wq5|' );
define( 'AUTH_SALT',        'cHiCLhmqhQ827Wm/Yw(Flw,G)i~jlZ<I7M$eK> |iF9ub7iH<+_8#)Zx${]D=x,4' );
define( 'SECURE_AUTH_SALT', '~yY<uE[m5/$tS6 eiC,toep?*=|dP4f&{F%T7k6Ax_D?Qk)D<E;d8ss&@Hd;HUr%' );
define( 'LOGGED_IN_SALT',   'AnR.lmgoE8m>zHx2[nMuTT%/*m0s$.)jGcGdqX~Wn{[,#79$d`^Y<cg2$zm4wlN?' );
define( 'NONCE_SALT',       ')nbz/x//#*BPfRjJToXc4y#~1SZ%H?Nhc2.lAO.yz(x6qk/)uHumxUQwH!Xu~#Z^' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
