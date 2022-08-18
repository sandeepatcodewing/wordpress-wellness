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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'codewing' );

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
define( 'AUTH_KEY',         '-vb-S7MsG=h&rHrw,Dw<2Q88c`.yqkJVSQqoMmp{_P%h&MGi%3d@N7WA@3J_{ZFg' );
define( 'SECURE_AUTH_KEY',  'E@VWVOxmh!OF]2Cbdso,kZIjuWHYbgqlv4jK;}c|6hE%O2LHS40`;iERPpy.C5qP' );
define( 'LOGGED_IN_KEY',    'fuhU(4NcWbj2ph!lKd3u:>z2*4+;rXY1e6pBw(O<*>olG>G<|OT1<rhl?I@WB/c$' );
define( 'NONCE_KEY',        '.5JMKJsH)nI@m8]OD-n*c#A)?n3J%@oiNX9<c0#| <}[CS<[EwE)Lr*Jg#Qw5 ev' );
define( 'AUTH_SALT',        'T%,uZ+!hx6EucDIQDO<CO}WV:(Nyb~-h!,wt>nD?Wsj!>xf:RI)d]onR$OL5I(24' );
define( 'SECURE_AUTH_SALT', '0! +zf!K{*tLjl(.#J:1>10igwR]mlpW/&}M=8V@6U/76Oto}{ql2;0>O$GGKVK8' );
define( 'LOGGED_IN_SALT',   'KRon^E7aHzml$N@_fUWd0tIIA+6z.t]P%ahde$iQ6w`KA$5qsDa mM[K^JBF1Bp:' );
define( 'NONCE_SALT',       'xo<|t)iC$A4pZ{Ke!91[X ^Eq |fO# Z#(@?`^JL1i{H:}U=UmQ>v%<qMz4mJ5qB' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
