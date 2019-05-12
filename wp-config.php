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
define('DB_NAME', 'friendstech');

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
define('AUTH_KEY',         'VI*W]b.;s(Dkhd)jwX`m=Y!s==xFMhE[*q?kEFqXsW$jiCTa)rxO+VsM.3Qj}VTm');
define('SECURE_AUTH_KEY',  'j+>c%vf)_^1D$h3.>_#jOYAX1qJ;mAogD!KVla^yl]U,`slg^0AVF7$_LUOj06;Q');
define('LOGGED_IN_KEY',    'C|YL?Mx8::&/4k9^>SR`t$][J0K]&I.-M_F*5H![g_)9<#=r,@|LJF;/uc))K?<Q');
define('NONCE_KEY',        '#T0Kmv+z~,+o4k%h5bc!!GI)<lvl]Qn`5GkO1-OT=[BITC_#Uu@XR,ey;P2Ud~Nm');
define('AUTH_SALT',        'LdM#*mqf5y!!8Tno]{lf[AlQ+<-6E<^oyX~h#hvQ=Pbq^A2/v[=E%c-L8+1$9i@s');
define('SECURE_AUTH_SALT', '~[R3C|%%jt]8|O<0S({1Y_*5:#zL0gCmkCP~nG~`ZjrknQ_U4qNeCb1_/%BRVL6H');
define('LOGGED_IN_SALT',   'tv~kik?|&db_qx79|%jSLYTo,(pliJ3tn3>c:<}hqd{+L1VflHC|c.F4SZJ?/+4+');
define('NONCE_SALT',       ';^[W9dYuo5g0--uA0asJ]W[waj,P^9-:]H^[ZI,B&1Dev*vuU-A}f%k3q[>U!gHF');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
