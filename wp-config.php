<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'LX7/$uzbwK{N:(O1mKuF)5@T %MLfccxI|9J<RM8s|w.iK1$O4}?[Y~):m#8gQPb' );
define( 'SECURE_AUTH_KEY',   '@zDGvv t?Bm|+GZqlpKaed!#W?y594nBY#_ox`@uJHR>(,;]?6=d51oC AS5_MLK' );
define( 'LOGGED_IN_KEY',     '7fgS) c,q !|J[wNZ~FW82P{MZ5Vy0x|h{WHxrM[4ZfC?~FCGO*:(7BaJ+n-CtH:' );
define( 'NONCE_KEY',         'T8lv({gj]Y yB5Kn3M}}-JxsCe/wc[| i+g{:qhFEyPqEm_1A}<;LfX9T%ei}Bk1' );
define( 'AUTH_SALT',         '#J(m69=i.$28CKdKb+S(bFgHTAHlf)GS|4C6t/@j(2kWw9i)$l):mLaU29uS|.AV' );
define( 'SECURE_AUTH_SALT',  '*t`qukFqWDGe5ZTo^pH?y)X1Xxrw5ZVsH6^H]&xob3tgsKo%V)0#<&&Q{ho91xF`' );
define( 'LOGGED_IN_SALT',    'p`zl!ew^&G`R4G~_LA:M?s2 aZ<tv?.=U)W(W>RkunB/jMRy&/xpAU-L_SM(LL?T' );
define( 'NONCE_SALT',        'N-{jNf(~3A]^=KeoqpQTS(I4bruX%ys+h})|T~j/8s+TUBJq/2p3f&$sI{CZ-BEK' );
define( 'WP_CACHE_KEY_SALT', 'B*41(&N/ZOJVoVmm={9zaM87NJ!5_qM`*S(am|Layp>JBN34|)Ce%rFES~3ORNNC' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
