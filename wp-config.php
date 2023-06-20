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
define( 'DB_NAME', 'cfzyALiAzaEQK8' );

/** Database username */
define( 'DB_USER', 'cfzyALiAzaEQK8' );

/** Database password */
define( 'DB_PASSWORD', '1EZXLdqc5WZfBr' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define( 'AUTH_KEY',          'sF~79sEoR62m>c@y/O&,I,P$ZxVIC2!x Glm?{|DWyYROd#^#5op3V+:*7S,~8H[' );
define( 'SECURE_AUTH_KEY',   ':}0/0y|x^:/C/dGU~q]gK9(eG|HI YA.7-&(yS__Fy,I9)<8U;3(#^<1!*)iD`:B' );
define( 'LOGGED_IN_KEY',     'vzW>6b7$`K1%0QqxiRi<o7SQI1>MLSvy1u ^gn9-9AE^o$%L-L5?9:sUXW;0Ml$)' );
define( 'NONCE_KEY',         ':3=cA+1ZFq]t6~&KCJjrBW&;4crWq3]X}DZx=tsG~oDvvPy=0=rT`Xuk|QDUQzQh' );
define( 'AUTH_SALT',         ']v@7m^2(kyjrP|}L,4![=[lLscg~^|ek(+HASh9SA)!=rI]g-4<X@%BD{_QPL; r' );
define( 'SECURE_AUTH_SALT',  '*7%Wa_^4P@1NWl0%x!&`WygmjK[qo0u>]UWw1N5[S3,VBq+Skom4oJz<ZMzUHZyl' );
define( 'LOGGED_IN_SALT',    '`dgCDB`&P;xYdTG4<.LDn)q=bXc{|<aSG{B@~D k`2[.SSa*Jv_u-r<^W:eN@?Tu' );
define( 'NONCE_SALT',        'J{@r|5p,x?I>(V|FBvm&eb:]kEb#qKNoW&s/FrX]5wi6Awt_{{-gTG3WntWnSb~v' );
define( 'WP_CACHE_KEY_SALT', '`Jf%+^Ln]!bT}mf;?FjZu@O5de5.6&c-b,98E{DAQ.GL-.3,F1.WJGOk|v$Z^`iX' );


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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
