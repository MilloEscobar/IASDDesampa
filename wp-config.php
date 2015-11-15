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
define('DB_NAME', 'iasddesamparados');

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
define('AUTH_KEY',         't`.wvl:>2yz-y1:l3P jJx*UGPP,>F2BU+41.sM|Z;T-fH6cCN{6bP|3]0LQNBmM');
define('SECURE_AUTH_KEY',  'Qv!E|/-.3I3T7tGz]&Srl$agPFS_(]%dhWL$!0/,qc0mv/XmLfqGHV%%F`tOe_M4');
define('LOGGED_IN_KEY',    '%SyGE.-Is!K@&|y=Ey&T{7+0t]%4[(92F*kHcD<}1RM(Jl%[yS^vMDA^`RPV]-_q');
define('NONCE_KEY',        '|Hz9{!l@g7df<?*RtF*C8OHsYio101brpb>Ej,iCOKt~53m{DIAih&1Yb;j/|qEk');
define('AUTH_SALT',        'w+SF02o^!i>i<w+.xd/~?m@%Y7*F%4:Mhc`~pSC](cFH0w-Z3;t[vR2@}*LAV7j*');
define('SECURE_AUTH_SALT', 'YOk>G=kQ75c/VUjm$MU*e5T+T*_dPUTPT9{PMQ5-Oc0bt%+}o>`:`N,z-r-Bz8mZ');
define('LOGGED_IN_SALT',   'mQ>[FN)(roKz]2x`-}2rrYM/I{W* U:wHQ.=O.#S6C@k%no|+&FGREk&|4?KZH4Q');
define('NONCE_SALT',       '2a?JVMi3ka~AsJzL,&3QurtF5.}*Q%r<=siYr+9g@Rzgb%nJ1|o0ET8$IfK2jkXw');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'iasd_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
