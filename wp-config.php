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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp-practice');

/** MySQL database username */
define('DB_USER', 'wp-practice');

/** MySQL database password */
define('DB_PASSWORD', 'wp-practice');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'P.-u3zRZ2=K4LTgFo-{a qGK&CP#{CQz1^fiLt=?YQt;!k~5:zEXs=d-#IyW4o/U');
define('SECURE_AUTH_KEY',  'K39bQu|.}weG `1#_@?O77{<3UsyD=k,QGP|6M[iqwqBsdXHvJ1w8gk{`]$[|4gv');
define('LOGGED_IN_KEY',    'QEWpTCpTSJwLS|/~8=}fN4MP e1]%3-FP0Ia]#BSP-[G^#/+iOCw]GYaPF9&jq+S');
define('NONCE_KEY',        'C[UrFZ?Daq`vko,x%9<l-r^-|&Lo#jR:y+<pO.JR}ax*{;s@Lzlqjzi.rn~jk !I');
define('AUTH_SALT',        '[/0n{&{^%q/rH6k%;F^e`-+:u*U765}.$:]F5l%RaCtXCGmrCBy-^2(gvAC(m|G)');
define('SECURE_AUTH_SALT', 'q[%N=j>ng_$z``YEi^PXaBcjqHhE$WBXPF=-9A2Rt)1#%s2uqxEq9q1 UqlsFw+s');
define('LOGGED_IN_SALT',   '?t27%az+gG[w)ZAO`z2T8nSE2v#R3Vl9=<EyzPhD__5._dXlyp*>+NPB_S%BP-7$');
define('NONCE_SALT',       'Jn_9QYT`i1& i>y:KYvo2-_d.Dq%a8Ns!z913ik|qJrJUuLCADV[j?2Ac_8:AUye');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
