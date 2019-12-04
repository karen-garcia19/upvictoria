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
define( 'DB_NAME', 'upvictoria' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'fd026cc75cfeb0c934c4494970694e2b278122204dfcbbb9' );

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
define( 'AUTH_KEY',         'URJuc380n13P>>A7X,QIbj7oC|@3};wd_3x-svzyz:[r_]d0a]sg;xAu6A|)OH.e' );
define( 'SECURE_AUTH_KEY',  'VifM}I:(&GPp,9tlNM?!ks@cT*^X>V,;3B^D1~u/5$W*_xioy(U>RPA^luE?I9?H' );
define( 'LOGGED_IN_KEY',    ']Jj/oL/>Bz{S~zUxQ^+>%)Z8nhhPRa}%(A_+B$]fHrLeRs!Sv}*:;G4u{C0U$T{M' );
define( 'NONCE_KEY',        'V0IVIu/D@dJRbX:,5_k_[-XqBW^K,f&HvNo[Bb:s_H$qr6zx}UVP;W,hi$7cFv*o' );
define( 'AUTH_SALT',        'Qb(E;FFM74hNd-I~>SYIXX3VJ93^_GkX{K:4e9uRlnws5ez^ZH^VRg`=f4,jUSGE' );
define( 'SECURE_AUTH_SALT', 'J`t//2:k K(MspR:_lVPT4=e}7H[es?9wk:V4}.@:9k2R0I $#6,J_1fMW/.F DO' );
define( 'LOGGED_IN_SALT',   '5hm^mh-IgjEp# QVzf?Ik%:x&@i]^_)qF#wDUw(ALQP<:Fm?z1y%2>g6S[q&>j!@' );
define( 'NONCE_SALT',       'MI0Mv?+EB11A[8AI(s&q$jyF(fRd[t^IATH?vi}f-ZBMa}2`imNk3I;{;UIN km#' );

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
