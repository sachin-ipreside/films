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
define( 'DB_NAME', 'films' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'ipre2019' );

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
define( 'AUTH_KEY',         'bpS!.H]E3(#F]&qxg~La%g-Q 6=ny|0u6Q)aj;{L&mc~8_ZY!xwZP2E`GqQVz|lB' );
define( 'SECURE_AUTH_KEY',  'a%@l[O=PWFrHf|wi:i|;q8Iv:TP{=XMO0~H,*NJfp5f70-JJM?xrRh2T.]xp_0*7' );
define( 'LOGGED_IN_KEY',    '|QtC1nxj/hot` ie]v[m;S|JGsKs>{ :X]&0!G+Ufg;,W}]l.L1;]}Jtx{SWbV5m' );
define( 'NONCE_KEY',        '+1TsS+V,P^*mF7C.(b$.iH)rY<{>H=vR1Bp4gnm^C4U8V@c*xVZo{|k$%)d/#W-_' );
define( 'AUTH_SALT',        'ao#f!5=01Ik650[ntLXj/MH}(2vuJ^z7t-u20Qt+`;$c ah`Zf7(U$P)nQsu*3!~' );
define( 'SECURE_AUTH_SALT', 't;Gpi62s0lXC>j2pV5>>O|OkF~%cBIp.mV43)ug8g]S}cjUbDE.AU~RjGF,qBSXY' );
define( 'LOGGED_IN_SALT',   'SH!SZrff*:v=;gz4-C udJ,6i[T!bxA<1Hu~r}OhU|fPP?H*&C;RIKS$ms0U6]yp' );
define( 'NONCE_SALT',       '7;j9jyj2Oa(`xp,38bpsWx{zx.7ahOx*9^DC:QW7Tf-,y!,C=)AScpPN ov`.Cao' );
define('FS_METHOD','direct');
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
