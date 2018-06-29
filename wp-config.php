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
define('DB_NAME', 'naujienutinklalapis');

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
define('AUTH_KEY',         '+R9MPzL&g#>Y/Q*Lx/}ZhD87W[{ Oewy:Epr#sBTAf%7OChk>2B0,#O6KQh&vGh]');
define('SECURE_AUTH_KEY',  '~cP)n[@g.>V*p-V#Q?%(Us)1#$GJYKmzqYXql{j_Z~Bt7M&@<qU9$WAE9hQ& xbo');
define('LOGGED_IN_KEY',    'C!zFedA-048g}qzB@*{0me#$j#sp[UpZ9afyY/DLSD{#s^<CG:]$xvamiIIyDI+E');
define('NONCE_KEY',        'C8S2M-q;0cpmK*MKx:!!9+V%5nd//a@yms:Af~4/!k>3qJ[tIZxu,1J]_Rj/>5>J');
define('AUTH_SALT',        'm$@s{ :3W$y2FC}/WEAX`]14J--?$ep7&,~*~1tt=v$#5(L2PrZJvYu*Q-=hHAQW');
define('SECURE_AUTH_SALT', 'O_fKsm56uQcC=tor,!5w!m3!r_m5`SMAgB%bX7C&ELEb[KoUTYk*<%+)QJacN08b');
define('LOGGED_IN_SALT',   '7nM%7u~>U>qYE5nrwTdMw)_0QQhazQCO|mwB6ZFL$J<,Z$kHi<;`GnfA-Lz&Y{qI');
define('NONCE_SALT',       '=fbHD,t:S(,Anjva~f&fIU5P?YS9j!iFp_zh^6_3Ohh66qks|E%#v-:$} u(i5`Q');

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
define('WP_DEBUG', true); //true - wordpress prints mistakes, errors.
define('WP_DEBUG_DISPLAY', false); //false - doesn't print errors publicly .
define('WP_DEBUG_LOG', true); //true - creates log file that only me can access.

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
