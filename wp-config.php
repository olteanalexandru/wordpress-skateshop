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
define( 'DB_NAME', 'theskate_wp1' );

/** MySQL database username */
define( 'DB_USER', 'theskate_theskat' );

/** MySQL database password */
define( 'DB_PASSWORD', 'romania12.' );

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
define( 'AUTH_KEY',         'u?U2^wO&x:sy+3GFw#p`4&Y9do2dKH=vqhUn87+*(hrtOT#gY.+*N`Ps{[[,cqju' );
define( 'SECURE_AUTH_KEY',  '$MSP]dL4K3H_QD~==1ae~H#n~-OFhVm@^RpXtng,O?KEM l:%tG0%)#+Rex_I&~|' );
define( 'LOGGED_IN_KEY',    '$ZEl(g.Ak<8[+aiopc?yB}zk8{Cjp6H -!ZX7p*Ksxj/rmHf(Rfcuro7SVA%Gu[=' );
define( 'NONCE_KEY',        'NDM8Q%cD^uzz^sDSlT.]g}K?*Yqwb29@OmHRzDm}},fm}]?9r`pj2[~n**Lm4vg8' );
define( 'AUTH_SALT',        'T]+mo3Sb_QM-f6-QHJZ6 =OeNeYxpFv(WtQ}n0jS%|{}`v+0s&bEzPi}b{e5s5rq' );
define( 'SECURE_AUTH_SALT', 'Q4epsL>U).0[ww3kWAzv8*r#6>|Xr]VGtn.iW@dpo`+Q1x~0<cv{(Ja>MJ,*zVYA' );
define( 'LOGGED_IN_SALT',   'j}+|~!WKY%?R(zM+S1~+Vx6O-HHd8:Ps_yhCGl ftPgz. lBPTb2MWCKa6,uH>5_' );
define( 'NONCE_SALT',       '{7i=z=A*uY`bgqFQ_V*vvc@G?f08 WRM$&CI`s<Qz|8!i](d!S399-`q3is.dIVg' );

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
define( 'WP_DEBUG', true );
define( 'WP_MEMORY_LIMIT', '512' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

