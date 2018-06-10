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
define('DB_NAME', 'caspr_wp');

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
define('AUTH_KEY',         '75bknlmTrB9T>xDa{zHvg*e_{03ZvnH&FMQ]t%p5dq @[4[7e]v@t&8pUgG0wljb');
define('SECURE_AUTH_KEY',  'XacqS;3,RdiwNw+QTfO0z1^a3E[-La#TT.Fw_MxZHO-^<=t9?2$bU -W&F1YAsNU');
define('LOGGED_IN_KEY',    'K(+2)VojKYk1?ssk>INp|m;Uy_S$S-Bp3RPw-N~h&wGo^YK9GZiD]R:f*<a,;H}S');
define('NONCE_KEY',        'EhfhC&)t,Q:oD!2/MnovNk+SFKy=wq1DBz mh(S.KT|jY?}4Q]-;*KL?=fG~;8ii');
define('AUTH_SALT',        'j%h}~JyW3q;u[H-/<ka|:,WmT@=aqg>wf?O2}.2LBz?e:u]x@-z.q~a;b);K2O4f');
define('SECURE_AUTH_SALT', 'j|]2hH%`q5^|*=0^k+,G%<Xr/zLVD=J!n,,id,Q#Z1dCFT xuBn=;D.r{HOF:kU$');
define('LOGGED_IN_SALT',   'WYYUHa|116OBAyi<9}v`f|yDn|YP+fETdCH^b|IE68;t|VF:?D+=Z%Gr?rVt|;V]');
define('NONCE_SALT',       'bE`od35.Y3rlH_MJ`dE0H+&(c}8I9<0Sp!^7ssR`tg03~0$dF&;vVr|DxA8GB0%M');

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
