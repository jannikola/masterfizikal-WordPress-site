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
define('DB_NAME', 'masterfizikal');

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
define('AUTH_KEY',         'd?(`@>]5[Ga*=y*EytT7R;3TZh<v}Qmqn(q`LR6XYGxUX9RkYN-hNAU0dedB_vyQ');
define('SECURE_AUTH_KEY',  'H&KSPA 7k$$f}5vdA$lc5EBM/<UagDp]wX,k0}@qVQ+21P^GZj7]N:v0ncP=Rl0C');
define('LOGGED_IN_KEY',    'QS]H7Wy-~``bl%/~VkR:IVJCV9,IV9gT5UIuN8kgZ2m*8[>TDDro#0A4-e75fG1q');
define('NONCE_KEY',        'a/}X8XEk#?J~~Fk.XlD=K|dE_K3W/nK6qz_N+sVu5U,@$%A7&&C2zj&Jh+VVy5Hh');
define('AUTH_SALT',        'FgvS}2]+ tI[8TQu01x9>8o^UdES-&:K.SMxCCYWh`ZPYZdCYk>lbq8KH0[R<pUP');
define('SECURE_AUTH_SALT', 'aE#[**n!u/[M9/lSiVobA.Mcg:x!%N:[Diz$@}.Ipu&$E4y1odD4Vtj93vh<q$Hq');
define('LOGGED_IN_SALT',   'ZpF*=bCP}dE(Xiu.Nn2_:42o}O830U0T.=7XuMTGLpgx/Y`Bq|37XXF)=#_]dB (');
define('NONCE_SALT',       'p`I41/y&!h|_/KW<Y=c801H}F!x4_60Xq?Fm8(^!}zte[(J-.R/kofmJY@}OJ{p5');

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
