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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'usman_dbuser' );

/** Database password */
define( 'DB_PASSWORD', 'usman21244' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'J@VY2+!z1pij2,ldIt9nM`(Yw)}{d3MZqJM2N;}GHY2p6)3E&V13gq3o+>{T0uw4' );
define( 'SECURE_AUTH_KEY',  '!C%d7swF)uLs)j$%6P%k*9|_A)LH-r>l7H(M?A<xb-cq}#CBj34Z2hNIhDab|#v|' );
define( 'LOGGED_IN_KEY',    'Y*x!Fi#DX77V#TwWnARO+hV]}mw-[ ]2Ko$)OlEpApf|CsNWOA>Ps6DG,8 6~G.H' );
define( 'NONCE_KEY',        'w!<BV7`kF8:<)PqVFmliULzr=@mrwJk5/)>OSIR{UP3WV+JLt6)veURa-u6p6;ve' );
define( 'AUTH_SALT',        '|7|pq-~jQ|t:.JyqyT2k&R+qiu,%{`zc42wJ>Y5D6%yR?}feW(^f]D{BnW0`0z-s' );
define( 'SECURE_AUTH_SALT', '$ZKb%BrGo]r9T#T1Qsl%d7!R=sj>ExUdhGY?A!{xz@8lcZJeU_QB-rue2a2rgLuC' );
define( 'LOGGED_IN_SALT',   'H3_|mC(%7~+]|~m+zd#QvHH!5!oX5i B$-6*<iz)?f}Tge:WJgwm_(L(FO4[7}U/' );
define( 'NONCE_SALT',       'rwBBLH<^@^dU0:^Nw{&`M_Kvr<%Lr+2m O!j!2$W,>YA>hYqYq,%q8W:Y9Y] iaN' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
