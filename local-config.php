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
define('AUTH_KEY',         ':ET,2OYtQ3m|LoNI{a$(;m@%*tbI=FFQt+CxmwHxF{v/Is&;;M=I$7W,:?:=Rj*I');
define('SECURE_AUTH_KEY',  '8nNkGk#jLsUd&R$_M?|I#yT];U[Sh~V?y8+?Y>[- _-SkzqHBmS1[ZE:mC{.1L^G');
define('LOGGED_IN_KEY',    'KLm. 6j|P?<.Ozu{|c^Om$.^M~liClxbN#@|}A:% _,xH3#,6HK[kjRN1T6[e9(;');
define('NONCE_KEY',        'IgZ!nQm_fpF_j:N -|)2@Pk6MYA<Yj_e`ZscV_pPtZqGyG:5cQR@5pD{iJh4m.F_');
define('AUTH_SALT',        '5Dq+jZ-<F7I,1h1n0[ejjNOkXF,gW+&N0`.O`Q;V0!xZ:V[{`gNU;K`=)fBo.,^|');
define('SECURE_AUTH_SALT', 'e|)s|vBW^R54Tl#j|<e,;|zx(P[$&]CILm@s8&*HyMI]/[+:@~|_!AZ]n(,0zOG+');
define('LOGGED_IN_SALT',   '$5(-H2RE/sC^;ja#LE1/I~<|$E~F<^-2AseM[UT| >|;f#1+l&oBopL5]p<wbRLs');
define('NONCE_SALT',       'R<mm(myx|g}5&YEy_*b}p{%$&d#*|O$``+Nzez~G]o$7Ku6i?XOD+1%{Ru$C%i5H');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
