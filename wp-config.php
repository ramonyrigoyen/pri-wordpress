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
define( 'DB_NAME', 'plantilla' );

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
define( 'AUTH_KEY',         'rBjTTOm;N/_$rb+*vYeJ7&qfn8[T-#QhGC$y$963iEeD7LUnaVrir``~BOe<J8rs' );
define( 'SECURE_AUTH_KEY',  'H^~rLL7yTTSZ|oX@AS:9M(5,$d8(s hmO4]c:!Fr+h<,S8PdB<f;yD(y7#USC`W%' );
define( 'LOGGED_IN_KEY',    '+KH}G.%KU/M3*XVb(OWqgg<>wIY[n#t#jat*vv{Kp7#KpZ)Kyx_Xki.@v*`~O/_-' );
define( 'NONCE_KEY',        'hu!lTXJ)ey2e&2}L71Yy,kkg`~dUm^TT$=:ih6>4T_]oGCLB~PK _,)K#czn8u5j' );
define( 'AUTH_SALT',        '<DX4&49I=ZGs}ndm/iDe2nK,D71jmp)i80`5czu~vsG&W/d6]OBE 8<D7^~&Dk{H' );
define( 'SECURE_AUTH_SALT', '$JQ~QbV?ZGAGuL@h~cI45P|AXy8zl%^9INoh?MB;3c#Ld}?MDt+)IM71!2XIC@*f' );
define( 'LOGGED_IN_SALT',   'px M>B7d!]2w4i?g=/E -}zY0Ea%[W+UuihHT:>/zA=8;^6$0SA^-Z(;:ZfB|bJ>' );
define( 'NONCE_SALT',       'NJn(1wr#sM$%|kat{9]R9^-YiL`fAZP=wt1)xFyj9HgIvPX~`YhM:4bg9y+DgVM&' );

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
