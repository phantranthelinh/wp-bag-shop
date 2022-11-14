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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'CDbd~!m@#lT=yupe%^zFmhr2XUbw;$,A9nwY>;Zc,j~ {22y[6RStAFY~2]vBZj?' );
define( 'SECURE_AUTH_KEY',  'S:w*6B;i9|J.r<NgHV;[NTPmBl+.lM.NE[Qg_wabf0 +7Z oW,VWrCjKtbnr}N.,' );
define( 'LOGGED_IN_KEY',    '>P<*K$+XBhDeCJ&3Hfg9J@,`P>9p;$Ouj}4*ju|$htEyI}*N/kJ_9}elwk!XCJ?o' );
define( 'NONCE_KEY',        '`QVb]My.qP. 5hp{`=@.,]*LC%ds6K)O3]pexbw. Oo)[Iu7myxJH^]YHfb>q5RT' );
define( 'AUTH_SALT',        'PM=YOsF[j.BM_N7-u(M;!]{Aw!BPJhs3>Hrd;8#cdVIxeE):+j$[@IWv:WK|8[j|' );
define( 'SECURE_AUTH_SALT', '^(O?<@p0JbTk|av6d}F|[%%-}8sA]dFJJQMMhu?H;Qm)UiCo@vJw^GbdUG#}M.o]' );
define( 'LOGGED_IN_SALT',   'iuKDPlqe,t(*>0q}7JOd{fQ1T|_K*pzjvsOMt|h-9I1/!CiYvK7Ra:^Uy(cLfX0h' );
define( 'NONCE_SALT',       'Mb?JUPZZO2fS5Kxp_$,4,h`3<X#G?stJ_q}<@e%FP2JjN^-1Xh7l|`r2!:}YH[qu' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
