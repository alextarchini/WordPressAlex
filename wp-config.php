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
define( 'DB_NAME', 'wordpressalex_db' );

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
define( 'AUTH_KEY',         '$gpc.7>dG A<%Dc$@QB$(zP-iy|e/ Wb2AitiYGGU|B]d hUaez]?#=N7RsVQp@0' );
define( 'SECURE_AUTH_KEY',  '!kr@zeIU!Zuy1d6/k5ywzmve7CdQfSlz~ceyD!z.CI-Zf1>P[!s:Lz8~:aZb3F&`' );
define( 'LOGGED_IN_KEY',    'R$7:G!LB ,yU/Q8=lx<@1VktZ{e3>QA||N6xnNOx87KME=-]g.lR-}?.iL!oMUD:' );
define( 'NONCE_KEY',        'Q9^Ypi:4 fm%b=&`FF?C3o~rB-M(In_TwR`h2En[cP#+hL)F=QOm<Z0=2&bQgyD:' );
define( 'AUTH_SALT',        'WGPK28T7h3}sU^>TM,|ob#]f6ckhIn8LW!<X^D3<iJu7qSCe_hfe@V$Oi`3 <gjy' );
define( 'SECURE_AUTH_SALT', 'd(vNOv6(4rP7_B}M$5v8-;$Dw/d6tAjL)c[<MT,$ppF$F<JD/C[gtQ&{;zI*{ql?' );
define( 'LOGGED_IN_SALT',   '_|}v?Up;4MC.k1:?v@:o(.d@9FGHWGI$~]$}UWCp}?_I}XmaKd[zQf-o@D(agW&r' );
define( 'NONCE_SALT',       'B|IluA}?toe2.f*Tj=%o$_et4?atv&w&mFxG7pV[&Pf<nBDIAmF]?o()=R !QlqG' );

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
