<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'speicher');

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

/** The Language. */
define ('WPLANG', 'es_ES');


/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'iDV`$:z9c[gO>lEL4C&+{OQ~t,5*RV1V@i9EQvhM!0K.P.Ol&#ce^ScCOZ&Ag6E(');
define('SECURE_AUTH_KEY',  'Js>Un#Nzv&L9@n$YHgp_{SKXYS!a(,Wo;*SNao= rIZtyb$hzk&qq/N(1-t+aier');
define('LOGGED_IN_KEY',    'QoWzx|mZbu500)1{-[-<FGG/f<$m/7wM(t)AW*r,/F@ >t;sfKkDYVB~y]|m)Np+');
define('NONCE_KEY',        'iEbG8:x-@Iy*e&T=LESOCsO.9A_]RX%$Sth%(aINhOrr`T]Z]IA`RP2mv]-E)Tlu');
define('AUTH_SALT',        '>`a!x@(ra~b[O-sNZ69m|a%(|0d|xp?=>|<xN;U?&_,B!y^DyWWilf;wZLj,EWK!');
define('SECURE_AUTH_SALT', 'N$ j=;V-z0W.sqs!WuB+c/pe`%iPEefA!D_(g=_tk)dfWU s90.yvfUa[$h59z*0');
define('LOGGED_IN_SALT',   '2L5E+8&MDWRrtBk+JMZpqsF* pA^W?rx//o#LkK+|T~X{D12R!E|S?JHs^-6g-/T');
define('NONCE_SALT',       'FzbUpKLx0s0L|lhohWqzf^[3qzm+$l)=%mTN{uY`|*Zj(,`-efY~-YqT8nC3mXTV');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
