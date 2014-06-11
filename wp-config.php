<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //

if ( file_exists( dirname( __FILE__ ) . '/local-config.php' ) ) {
    include( dirname( __FILE__ ) . '/local-config.php' );
} else {

/** The name of the database for WordPress */
define('DB_NAME', 'boot-wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '}/ra98G1Ko;8O|R4t_xq:.7k}u.-DD4Y6A+2}vVwNU:-U7n PnasvlK?=~lkGBJ0');
define('SECURE_AUTH_KEY',  'LC2mO~_iF%UL~~Iq{(?mM)Jp;vaQG=gzc+!XRLvdwo=+A1%Sn8{vlz1|d;2:[}|e');
define('LOGGED_IN_KEY',    'sBjy5jC$Qsr@}OX@m-!+#$p+w2_f>O;q<8gsQ:h0}&P8UK+7e{+3_2{$ /DDetx-');
define('NONCE_KEY',        '4bXQn:#UfEae2#>2 L6,v{MzmZF4Ge{H0rS-XYLw rhs0bGanW]D0Jiw2w)<W{P)');
define('AUTH_SALT',        '@D*kqz*OboIj-SOCwkh<B-~%N/3T_)e`IsbxN9{X|*TwN(M./RHx_[fL|~aNRe|8');
define('SECURE_AUTH_SALT', ')rtUG;ii.D9F+*Bq|#|De|vv_+GBqad^K,JS&eZ#?[zJ=pe!hjSU!9BbB+Jd_9pi');
define('LOGGED_IN_SALT',   '?T9y;KqdOR+%:6.rl$A1Q4zPON;zpT9e&qO/oWsVn= TJr|.8rIKzw,|9 0Xb5GZ');
define('NONCE_SALT',       '4rCJ,AhOS.wCGoLFGMF|.5~3jSp4%q,G@SI@&nYrML;=J5}r~ylk:(S,,!;0GP@:');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'btc_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
}