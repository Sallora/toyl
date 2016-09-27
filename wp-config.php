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
define('DB_NAME', 'toyl_db');

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
define('AUTH_KEY',         '*rA8LfLa>(k]@Z)77DH9gh:6nKE59;D~[Z)[E%Cvs}rov^(P2Xi6&SzG|B_Sb+Ay');
define('SECURE_AUTH_KEY',  '-MD1M;a{`Qh7s>BQUHU43Ov~!9zCFedAHXpo0PBQD5]6$5}g*tPpD<F)>VuiCTsm');
define('LOGGED_IN_KEY',    ':@C)L;iuA?2E6_Pf|fg?BG&,C3KZ$pV-V3w6)d(V]Ly_jwWhvI~_b_cS`OE xX~D');
define('NONCE_KEY',        'fc|mfR^P`ldaf3~*Z6ce|-w]ij+q4z(f/%[dxv}lJ_aCTmZv>l2GgPku)D?$8OGM');
define('AUTH_SALT',        'h0:SdqchNn{g{I&Py<:gU[~O)W64[P;),<[3`EQ_i4I6EK}/]<K 6LxCq]GU+=5~');
define('SECURE_AUTH_SALT', '>HMoAh}rSB87025-+&+F3EJoeF0y`?>V_/:]G/m?D*NJ//uQ;WUxaymlsgphkJ*q');
define('LOGGED_IN_SALT',   'W;Sr|FDjoVTmYczgYS)}5ul=BU-Q)Ipq~^a.4>=Do!oaA$jTa+KZwKyw.&eWPVWo');
define('NONCE_SALT',       't5f6{p:7[ru9ynBM$-xcNc!at)?WHILqIwzg_eV[$>K7>z]c@8G}.A@gr[uMl-8y');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'toyl_';

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
