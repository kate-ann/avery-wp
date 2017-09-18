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
define( 'DB_NAME', 'avery' );
/** MySQL database username */
define( 'DB_USER', 'kate' );
/** MySQL database password */
define( 'DB_PASSWORD', 'omkaU5St1Vtb1RQIRw' );
/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         '_=#1V[x-nijjc16p9Cpy|W YfUa|Q:b^]~ZM_-%c]mYLw|o|:o&3]]Wa={5HZk k');
define('SECURE_AUTH_KEY',  '3/nC>7Obca]{c<_F-{mle?/Z8>)%|6#4hHheeeMh8R5+(C&RURomwr}AV,gZHO2}');
define('LOGGED_IN_KEY',    'Rw/vPQc+X_>h+l-<-j[Hx&-LeZeLpR7difBZ&6LInNr06>y)XU?WmnJ<$WvVo+Q,');
define('NONCE_KEY',        'htL%/R4du7QlEBS ]iZ;-+gmd!*-RQr#hEX=,K!2j%usJWe;4k>%fmb^wrh:+:M%');
define('AUTH_SALT',        '@|w>7nL@oH6ETllTc0n-t+#ARvo6^[t.i*DG(J8//^_}YVhVeWRuS2J%UM~5*Mu;');
define('SECURE_AUTH_SALT', '}h/ %6J`ePQP6c-#:AE1 1_SG(8;nMDfHp;A${~wBx3-L4,$n~N*6/P/l),5T|kT');
define('LOGGED_IN_SALT',   'j+r&6%!]X5mGpV(dY+bM(Vz>Y%+s|{-iOfrIL65CEkAb}@QAhh48zXVTf`1bGU$?');
define('NONCE_SALT',       'FDJ<:?~-o0h9stJ~2`G_8Z R%]&O<,7}$Zot:,i8h-uRcSpL+:`{+Chb_)31b/#b');

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
define('WP_DEBUG', true);

/* Speed optimization */
define( 'EMPTY_TRASH_DAYS', 7 );
define( 'WP_POST_REVISIONS', 4 );


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
