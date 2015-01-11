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
define('DB_NAME', 'fauserdb');

/** MySQL database username */
define('DB_USER', 'fauserdb');

/** MySQL database password */
define('DB_PASSWORD', 'XUsi!Hg3VJe');

/** MySQL hostname */
define('DB_HOST', 'fauserdb.db.7569038.hostedresource.com');

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
define('AUTH_KEY',         'VXN1ZvWB;=+c4:Xb>P^gP%WyhJ/QNltHYP&GL>&=L{vheaI&:Xm&kUXhbH=7Y6Uv');
define('SECURE_AUTH_KEY',  'a;749z I_M(FA 6/AJFB-LTs3Y*MaPZpI+1IyGd@WC*Z);uq|/tV?Eq-+VrK*sa1');
define('LOGGED_IN_KEY',    '+=k9tgoQ.Ik1|~ol9V!!?Fd%z,..R:CE+6_wcT[d!QjU8?]iosaC&]]}09*e)wGY');
define('NONCE_KEY',        's]{YG2n8szu8%J8tf-I/p<?bd}V~ `^:jHorxgf&|.9Ursa.*rZ1$Hx;~Gsmn1i[');
define('AUTH_SALT',        '+p#,TX)lz+vfFsv#11u}Up &80}ZmO--K*e8|Kt#7U#zs@%`5)MjJWO-;e@QH|F ');
define('SECURE_AUTH_SALT', 'MMt(b.;xpNhmeL+tg83O~NtK^MxsTpbqkU-t]3Se-`S@b>g!G;J?w^l%,Mm$rc*q');
define('LOGGED_IN_SALT',   'H+Xu[jHQ2*,8-a|Le|V2N@u+cNgZ(S%:5DuO:%jg:*;*O^JRbE12daFY&S}>o_RA');
define('NONCE_SALT',       'Go!f8?k;-!D5z2zZO2vMh3L&vBL}#&J0c@e0&V-Am-1w/+3rYymBgufHo0G&s<TW');

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
