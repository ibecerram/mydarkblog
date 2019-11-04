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
define( 'DB_NAME', 'mydarkblog' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '09698be04545e2e5f2413162500be5be79c99e3fd8649752' );

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
define( 'AUTH_KEY',         ';Df,w;l0Q;jW=nzn{W.Yx>-3rII$ 7R?0(!TvP?5A5uAx@YCJr&bDQB:SE;p0+$I' );
define( 'SECURE_AUTH_KEY',  'p@]=7W*qrm5LQaj*]7P()Cv}iBFuzC2D]`5a<t,g! 1k[yzug7a~YdMLsbI!1Tfm' );
define( 'LOGGED_IN_KEY',    'ZtEAl(Z7[raMi8(  cf%HW5DRi={H6M+$8|H5:l.ue]_pZzQL!zn5gG+3m.Bx?1j' );
define( 'NONCE_KEY',        'zjBqCiGX7m*J6hq2~0@fZ~L5Q^</r^CY3kffFx6MPMK[Q39m*E!kxEabj[Df3zH=' );
define( 'AUTH_SALT',        'Q-6b2gKmTAX+ *4zdIv!qpa/{c(5,uQM=T@Hw.r_BLO2^EOv&3-{#lxP0%}4j6Wa' );
define( 'SECURE_AUTH_SALT', '`z2&bb+oNf~g^[*%ljV]X_r3UwZ9*^QmsWdNqHyK(nNk&7nC+QsN3H@j>>};6>k;' );
define( 'LOGGED_IN_SALT',   '2F-y&utUr65W~MsQRgC*^,HVQbi:/Khdp^}w*r}Uvt8*#BM%3=#YW3!Qq(kXg{j[' );
define( 'NONCE_SALT',       'h#,rSG<-Mns$UiKJPMeGDsx;t>GKHDB)cXnBKD_PE<^HD}LDrS7yI&{nLY)lFKEo' );

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
