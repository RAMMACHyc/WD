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
define( 'DB_NAME', 'FeedbackWordpress' );

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
define( 'AUTH_KEY',         '-+>Vr@NdaPOHMir~Nt<CR.NEO$>$/GNNq @{XLk~)Lgppf`[T:/o%i*+Ft_V(,f.' );
define( 'SECURE_AUTH_KEY',  'aTd1PaX=aTe#Xhn]$-ULYNGIEqx4Tti_rI1=l{oRV.6.u7(Pu;2i{x:JV!`bmbb7' );
define( 'LOGGED_IN_KEY',    'kj]KN>pKil_(l?.Z4wk5CQJ|^w{V*oF[qL^,.944pH(;zv@jwEk^Zg&Ia.XSPIg^' );
define( 'NONCE_KEY',        'TgS),$i(_Q$@0`{3|ay5e(.JE$<EBu6$^sDm.IjC{$i3*Yxza$aK@:o J8drd@#a' );
define( 'AUTH_SALT',        'l_j8?HNa4kG&{oq(v>]>f*Em%2:H.gou:4wVS4cf@*HT{ bBM=RRcsC{%UC<m9:5' );
define( 'SECURE_AUTH_SALT', 'V.&rg3}|08c5?D4qI.W8oGE5#O`{l;^R%u3Ol?4 *Da)_z #_;x5F]Mw,0}F7!L4' );
define( 'LOGGED_IN_SALT',   'lVQc1;BAmw4n<POnl5J>z|?E En0R- {7FZ|ar-m5$a?{Go/ZKjUX*2jg,}<{^C1' );
define( 'NONCE_SALT',       'Zp,X5EuU7]U$kVQ,:ExJ)=>#6*w<:+M.z=9<0FaARh{Mnze~|9{b+hIQoqo)W@^G' );

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
