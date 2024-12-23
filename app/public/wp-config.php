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
define( 'AUTH_KEY',          'R].0B;uTe4Gk9%{L*{,U._ 6]KVdwMU_V5p),o{<Qb~8j!6pN}>`Hga1T<v47R*@' );
define( 'SECURE_AUTH_KEY',   '#FCH@ZJ8xW^%+Q~,8GC428z7Hr}x>>Gt-EUQUi]^U5C&T9[NF^kD=PCCI^Ddo.pv' );
define( 'LOGGED_IN_KEY',     ',K9pv7yHKSuXKHy%9^Wa<sVFi27&lIO-V?#~gayqs{ACfojbPExy,[w[sm??HfD9' );
define( 'NONCE_KEY',         'Sb&2]z]]vyp_klTv#7),w#O3C%$Ph~q0k{(~hk;?p?v ftJ-]~NGb4.U},:us`Y2' );
define( 'AUTH_SALT',         '6zy0R]=`g,9%E:BS52_0y(KPLQ_SXyI;C<:Fa3gNREg#u%O2`7@Vcpk~W/O;GZC*' );
define( 'SECURE_AUTH_SALT',  'S:qn}Q8I&@BAnbSSv8C]gNG%e#P^?mUJW_YXnV$ILNhrPUr%Y#N;qxs,woh;d{F[' );
define( 'LOGGED_IN_SALT',    'p7-ls1-rhu}<D([0vF%LG82.=?S7;o{]_Z,vj`+Kd8/jtgzy_P&mD@8v`jcB9E<#' );
define( 'NONCE_SALT',        'nWiQTvwdR]gB[&[b)Zj`xc_:Zd R,v8;/rzLDHv^h>-@Ow6;gJyoDN6(mT3X(($z' );
define( 'WP_CACHE_KEY_SALT', 'B~CL*0FNyr{}rlYG7;V=pk1vSsU+$;vQv1:{c(cpFy#]]VO@9)Gy~bWjLfggVK2x' );


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
