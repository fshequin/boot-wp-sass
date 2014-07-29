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

/** The name of the database for WordPress */
define('DB_NAME', 'boot-wp-sass');

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
define('AUTH_KEY',         '#h6r d--[LQSP_w]J3wCBcEj@jPD(-1a6#n5^SW(z&-(G om5}+%9RbSp&en1Z-2');
define('SECURE_AUTH_KEY',  'F2/d/i--g8b%SE,T=|f&B.w%W-lXu#|d;_q?-cZTUTtU0-AB4,l2MZz<pn`f7~%:');
define('LOGGED_IN_KEY',    '284j]&PNwoULI2hy7{LP|m>lErU*f5Yem-$#=?;8}PgQ<^n~7k:JL^]?+E2b9iW.');
define('NONCE_KEY',        '?CEsZMl?vBD}=c9wPSVzwLe>Rl+F&Ay_BW,QWnhNS}:S||5U3Boq 62q!-(x;D|K');
define('AUTH_SALT',        'z&%K/4ahl@]}D,>n0.&,o91+2MviNCsNjx>5U4c[Q5r&Loqm+L0Gq9v]Fx.-8|+J');
define('SECURE_AUTH_SALT', ']4H%=Q)eIGQ>Bfs7,PI fkW4nI~R73Q9@f6NV&!yBcGux.nX/8:E76zTY`-. aDE');
define('LOGGED_IN_SALT',   'v+MO[WhUo@qKekMP|E#A PJE9}TviS<3]5q-[SuAT,gi*JRdYiHz+pe|VL?/;x>.');
define('NONCE_SALT',       'S=6]z#aoxiQJZ+(u(k0eBjZ+_Sl*wH);e<hn+PJ507rR%`ip>.UD(4O5+69v~o7N');

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
