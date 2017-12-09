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
define('DB_NAME', 'pretty_house');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'jw#%T-/ 4cVvhb~2DqbbL<K890Xi|/@cM9)kk;I>Z^f:mYSVEk}RXz1lcg,r$0n+');
define('SECURE_AUTH_KEY',  '{RM#Ixka 3ghLE;RQ>fwA:NBQ1S^{YX]I_h2S|DW=jBD9/xEC3<418RpKf5kXV-#');
define('LOGGED_IN_KEY',    'vfE+|eKToo96o+0Z<2VLM#9m:EOnPlAv!UK&]mpWqxntQ@ys#$4Q)h*Z.bh$OF^n');
define('NONCE_KEY',        'XG;6F}d:G$/wM_5%5{bqKejN<8:RdUxObBPkkh}4KG#!h3R+hEO<Mz@$:uH>5Xe>');
define('AUTH_SALT',        'S|C+/7JIs,Ai0`OTA_ht0o1+%j-8s_$dQi]/Ci)mu5W;1.<+D1F+Gj4W2~ak28ji');
define('SECURE_AUTH_SALT', '|$5CMxg 7s8uEB#kQE5vZ02o3atdA.7SgH5Q,XV&*dpFb]J l9eD:AAi!hl=m1!-');
define('LOGGED_IN_SALT',   '$=B:AX9knSgm/TX@7!K~n`hiuXvt!`ualK5}E_>bBC(~zSf4dH!d^1_ mM[u^H`)');
define('NONCE_SALT',       'sKO_KQzuxAW8M00$.3Lf}1IN*ZW~)ypWp,DH1m.SOXrs0Zvytc4Cb+ DXSo&BxJU');

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
