<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'reiki');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '=:Gn6RWS|*k])xHE*E`Yvtv!+1pXBk+_?R5+).R[v}7%hEwI$KJ+sO#?R?%;E9-E');
define('SECURE_AUTH_KEY',  'x_4JVJ+8.H,jx)`tnyzh6DFMey+mfg5<o7j-oFhDnQeM,CU/tx>2GN`I|5%:]uu$');
define('LOGGED_IN_KEY',    'JB*X+.<a=}>wPV@xO5j+[$]e sDYQN,v$@:*-_j;]Nh[^-o0|HeE,:UY-oil:|[V');
define('NONCE_KEY',        'HM/<)uUx:T|_%[qNDXgz;aO?v,G&g^Zc7~0=vUUoNIfz0A++>UgD`qw+sR(<>3UK');
define('AUTH_SALT',        'Yc^|B|n}utI<4|JsN^XX(r#r>zgPZZ<Fi#aL6THSubiME%S36Pw`|s}lA7Z6Z,xf');
define('SECURE_AUTH_SALT', '  -U|pjXtkmZbX)p+0|OT0/=DNE(]y+}fNw.?-&&YI),ULQr/q-y6RaJ!=e9{){k');
define('LOGGED_IN_SALT',   ';stVW%(&dBNN&m>_mOmb^mhV&N0Oc9+uPc,,gCM*`~MOJ|I.A@hFEj# Py%I]pT6');
define('NONCE_SALT',       'C(Etn);G5YBxKKnV)(y$GDq>LZ+?sTQMXEWG+S`B&S mDDM#{:n+Z3xH{(<Wh9Qz');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'fc_';

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
