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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'hostnet_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'hM+-kL t~@ODpH5}#o=-@xN.G[VNW1Oj&)a:DP3{#A92~{,BdV?,w.@p}NHku:pt' );
define( 'SECURE_AUTH_KEY',  'zN4}.Ph`)(.=MEj&]W&qj0nr,7KEF}>2#xIl(l#|MX5w,v6<^_9@^#dj|4no2XRq' );
define( 'LOGGED_IN_KEY',    'If]7|L]SM23S6J=X1z_jaa~k.#T e{6U]|S`?]92wi.u*fr3-8H%~,phL;{h{Zk1' );
define( 'NONCE_KEY',        'R]|KQ_:R^:w<H|LSrYm0VCV[y7{/rte/[I&2Hf*e<V2I|!4Dvk6eK&o4fp_;l&3t' );
define( 'AUTH_SALT',        ')JU2(]!`(&.EB1q`oX1/:dVsm/`2v_1GOQULV{vik$q^npn}lAwhWjEw72]PI1hy' );
define( 'SECURE_AUTH_SALT', '0)3i^Kn?)*+:o1CAKX~T5s;wZp562y%qB*^FXRUD~9dKW1gPx@]bpsY!R+4w~v1f' );
define( 'LOGGED_IN_SALT',   ';/Y #^Duc 3vH9Uyl`p)6@UsWGs3-Frt}}H[Y/O]vJ+[kB_b:>AJ%*M?dg(6,0J=' );
define( 'NONCE_SALT',       'D`GnRje>-c9c6yy>6|`=@NB+ (0;eS0#fV;R_9?[c+S!kA1yCNVe=t:fcW,uPcD:' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
