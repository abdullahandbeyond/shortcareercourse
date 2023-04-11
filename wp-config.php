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
define('AUTH_KEY',         'br1lIgDSR0mkUkIA/qFND18jGOXuLdV4UrpYDFoEcUv+Wlh8eLOQjcN4/rZQBbeArB2FZ0LyAxFon8p0gtTDFw==');
define('SECURE_AUTH_KEY',  'AdaDIay3TwErerWUn+fgWIE03WSHwbGLEY61e5iPJTfK9gp6Pw2Du8kEzHmZVpopLwn6FXCFzgVxrCjcX1nMlg==');
define('LOGGED_IN_KEY',    'a7ZGj7u+PoAiainwDaQ8R79U5bT+TPpIPO6vHohVXf3lQlEqSrgeo/hZ+FO7ojz/2liUrpBfbr2aPoVFn5P1bg==');
define('NONCE_KEY',        'Sg7j8O0bfuI7ebZ/0QQpHU5rQ2oL5yS6Jp2pR/b1M+GW2SPd9R4ws17n5xNvjFGOKULVoSYQyYVYVVGANg+0zQ==');
define('AUTH_SALT',        'm1GdGM+btS86kkc6fnsu8L2I1ECkxkQDLNnzqxDf/qn8gjl4i1p+BSaALYiprw7yCk8yWk66ncvtzTj8hqMBMg==');
define('SECURE_AUTH_SALT', '8SZDkBcB2p2Y9hrH9Y3G8jfVVtmYDDr0hbrX87HkWR5jx+d6P+2jQ39zlG4ksuEHoZLWIpVrM/oHwtkeHs7aww==');
define('LOGGED_IN_SALT',   '/ImcUxf9zZuHA606OEckSGVLl8rbbqneeNimfcWBsynOGiKQOQJjH9dRSGaqpHAEQoRMxoIMYPTgKtDc+IPdTw==');
define('NONCE_SALT',       'aO7CGD5+2aVkJCrGlzjUxPp+zGI+bCCgcFB9yLeWGIV49Ec1TZ/rlGYGlNlzuQOO3zWAjUN22hn1lE7tUlX4CA==');

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
