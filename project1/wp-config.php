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
define( 'DB_NAME', 'db_project1' );

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
define( 'AUTH_KEY',         'ZLm4]JA~KR^Hr3maJmP^XBs/W8fAN2br,nk?_rfN}wiqzr@(z5Vb6bDk_{v[t|OB' );
define( 'SECURE_AUTH_KEY',  'Ol|!S#rB%I,*YR)dV(xBnQ)r4<W6vPdwF%=a0/D/kot9T*S_`Q=J0iLuV*tyfKI,' );
define( 'LOGGED_IN_KEY',    '7=6rqU`>J,_4:po6bz}~!f!j#5Zt4y(l8)#?FJZWC&ggz{z[n]H[^dnuprVNLmMN' );
define( 'NONCE_KEY',        'czH:Pfekjp$0oIWbHmJ<./UzlYrlQmnkL3BEL/#;e5<a5#? DJ/89DM~ wcf/ 5~' );
define( 'AUTH_SALT',        '1Km#Y]}*UG7DG`{$kBi;%?k/O~5IYyAsi}qX@hhkY;~1r+hJ*FQ99y?w^ev7+Bk=' );
define( 'SECURE_AUTH_SALT', '}E|F!rXs?&K;nwYa&58jCYUZD^$U|uc[r)deWz0p]81*$buBFA#&PmW]F2R788)[' );
define( 'LOGGED_IN_SALT',   'NVc7|K#A*^#rSgQ6fTT1{@`b~zZnz q]:$A2SQO%_pTG i8{6sc2(^f 3<7%HQMw' );
define( 'NONCE_SALT',       '1dFK^Y_yBMZ!hL~+O= aQkv+%p;{}(.Q lVz9W >4iRcUHg9T1Sig?-.to>oNE2*' );

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
