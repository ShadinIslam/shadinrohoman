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
define( 'DB_NAME', 'shadin' );

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
define( 'AUTH_KEY',         '~c.J<SlG$7Am.GY][)J4fco4rX+RtHd|P~4F,rl?1V;Y[Co~67~98N52d9@U4o3l' );
define( 'SECURE_AUTH_KEY',  ']~)xej$@gTK7]+t+g`y^FNx1WEWC+{[v@jI4b+42dn*7^x)0+V&{3}l3QKtEeykg' );
define( 'LOGGED_IN_KEY',    '(*dqaJ#JlGs7|%zTq)nBI7@!&3H/nWL~v:{X9I%UctZ+=$CYS~^{6,mVu]L|.$7k' );
define( 'NONCE_KEY',        'k}T~xou*hY.xf*j>BZjT3!=7wpK|DNlbi5MhtY]Fao54mCFR5{b?8TK|S-aH;<NC' );
define( 'AUTH_SALT',        '<]GhFm4=sQufqNg0Qz{O55p)G;oYP{0eZ{x!${; nR,W6[1?4ZYJ2i 2@%7SCDyy' );
define( 'SECURE_AUTH_SALT', '`@v(u1b!Y^{/P/@)*<r]6:=VYS*3- =8mT$f$oAL4yc+JIqWcUTb0Gk7%{na(aN2' );
define( 'LOGGED_IN_SALT',   '|+,sM~OpZ+5PEn:MR:MYWu>-~?!PZ.gOqmUvT~uLe,2>rf&Zj+H~]dhlZWZ?t{m!' );
define( 'NONCE_SALT',       'Ht>T&&KJmQNBKFid&YH5B1Fu!f 4!YTIqJ[1>l)DhJf-Ns[FE<r=;%5 +[C^.@G8' );

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
