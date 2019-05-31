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
define( 'DB_NAME', 'test1' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '5478372DjF' );

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
define( 'AUTH_KEY',         'Rg$}<YrhmpvQ%d%<`Li`{2RHh35z|<;qM)H9]V-Un=7Ew`Nl>hlU5YyDOp:u:X`H' );
define( 'SECURE_AUTH_KEY',  '-ySCf[v%zj5tvdkU&D&6< Xe1h9l6!^u~q[rh6KK*iJ0AuF%OHhJ>-};L{:&ewS$' );
define( 'LOGGED_IN_KEY',    'Ih^0Dng{oIAdtXtbbNLDStL2+w22|C5-b }j4}0;JkHA-D}Gqm>_YOSG5;Nd*>f~' );
define( 'NONCE_KEY',        '5UZ!;_M#BW{=b:j+yW*M@#5pwrIFM^=jA0z]*QoW^u]Cv+p}?qn,;W!Xmz>*cZ@%' );
define( 'AUTH_SALT',        '.6N_-A[~C*K*^1,u3>D2h&S!Hlg8Nr:#1[AZwa#;_t_=i5a1NM5+eU4)~$q|ccY1' );
define( 'SECURE_AUTH_SALT', 'kk;LQC8Z>(/@G^$/Zk. MakedW{zz_H<@&B5Q9pQj%mTO2;DaM%`Bhc[;{<#{?UV' );
define( 'LOGGED_IN_SALT',   'Q K)<SH]y,F]I`c>fO1XSf#/lzap4>[kdHb$~B|F]n{jFkH}SAehX-}g^8JDM K:' );
define( 'NONCE_SALT',       ' 7x(9St8wpDg7T7<y1:rh{Y[Qe)Z$d#IMJ8)HvWuz&VR} .xG~<MRa,&(rm`W|w~' );

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
