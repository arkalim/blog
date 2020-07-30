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
define( 'DB_NAME', 'blogpage_db' );

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
define( 'AUTH_KEY',         '+KQe~liPWo[z7:;2R>#]FUCrt{YLY~{~kvloFPFn&zaC$-8l2ZoS}u4Ei*bUY0xo' );
define( 'SECURE_AUTH_KEY',  '5i?W1X ODHvcj*$C/a}t~|!INkPfpQiKPC3^!Yo#aaQ=./Z53:dqR2#(R*H&+SD4' );
define( 'LOGGED_IN_KEY',    '%AAJ&lSA+L=mv`jc(d(a5}ty$%l}XXtd|F6r]Z#2*bhy9*/S|F19ND1oI0`[i ci' );
define( 'NONCE_KEY',        '@s%nq-t-cuzu9&mEO}?U81=U;>6Ad>IrsK]%.8hIi .`s26+a $=H8Nvzi@=UNmL' );
define( 'AUTH_SALT',        '13#x6o}Ayp,@``1FE9%v+o[Bv6Ff4es>dDjXWo;p95,:FlTG(^qMiW?>)Xczq61L' );
define( 'SECURE_AUTH_SALT', 'p;~#<)2h$Hj1h%@cWpmRj8Pe;6tv!w;bYsI1_<?m4od=lq/9lS.xtcdC <]X.=IH' );
define( 'LOGGED_IN_SALT',   '@ES*/S^:?6N7fiw<zeQZa.5Y9FH?HW1YF3Q|j0QSz@,]b6Z$F>3~~o9 Xk] .sz0' );
define( 'NONCE_SALT',       'wyH7SosOUe;`faE[2qQRpqarf-WFfZ@46QJNe6RJ5n{Epyb|WJ;D5 d8gg]G3E8l' );

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
