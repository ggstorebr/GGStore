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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'SEeSjshHa3aYyOkjV6mDb6uc691Z/Yvl+cb2gV1o5z/F3uj8kDjUZOwvNjvQ4IyBugHgDLxaB+s8/7AcKFeeWg==');
define('SECURE_AUTH_KEY',  'kqsuliy1tkS/bSRzV72Sr91TWBSekVtkuMVeQiuhdBtNG/6XhnfB/lMD1rwMlIin/oaPCMqKkNtMmIgtfUoJSg==');
define('LOGGED_IN_KEY',    '+5Wyh4ZzvIH4jbYZCXIsLa/+kj8zXIkJtMWTAYse0jpwGdakhotvfzg/QvbvkLyNmv9OxW0GdgUSRRxWbB24Tg==');
define('NONCE_KEY',        '34SDvLsy+kKoK+jIMw4zhEYhgHpD4arc8dbZTpmHCpYZ9Wqa7wR2ovWrK2Y68GWksJzJ0BMGGL5iBEoHyc7XMg==');
define('AUTH_SALT',        'PgsbKI+8MZ8DMdt76Fhxz/91QoldtFmPPm8QRdcj/4SJ8mthD2yiSskR6R9Jvl1kMKdC6pHGh2VdESWkIEYQmQ==');
define('SECURE_AUTH_SALT', 'hwpUUE/l0D7C/L6WZbFVw4TcMKHAPJzRRWjxg5Ymsba86rypPR/yOZmlseIZLHlC3S6OLI5NT69+xnC/VsubLg==');
define('LOGGED_IN_SALT',   'jOIvqVPM6xzysFKVtyNf2nuRDKyH5dmjleewGmS+KWFf3cK1E5RBm5bz4EmjLo/Xtp3iDMvc2NRv+9NuYebBZw==');
define('NONCE_SALT',       'qX/9cDUaES7D1fDs/OFQGjpQkyt2p9NrlLncr6Q1P0mH67zExJLSzIx2/Z+D2n8C77OICN+v+M2pWiEE0lT1DQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
