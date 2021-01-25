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
define('AUTH_KEY',         'hI1K450RTGe6vgLw2TltXF4qpyzaOoh1c9zXJf0RsqmcGY1QQ05CU8oJrWCy45UeJwtvzCpvrT5Z73hSccqSvA==');
define('SECURE_AUTH_KEY',  '1yJQJ5wPnRjl459E3fModDmfl5ZKUBbTYYkZuabG/9gX3h3KQP/jOgmJKdCYD30UXO7A+5A4Hf7Esh3JyyqOSw==');
define('LOGGED_IN_KEY',    'B9jxLjc9+N4o0xyncL0I5RA6P2e6WvRd1eIt0MZCcyb72uvEPyNFQ30nQdPozVskQFzBb4JE5siMUsmtMr5hbA==');
define('NONCE_KEY',        '3NdcoQRKuUGHxiQmt0bwJ0dzd0D6oIUQhHdLz7eWwxmToSNPLKEQ71ODe5YCbrnZHoO4B4dbaS9Y8dwNhb0krg==');
define('AUTH_SALT',        'ibv7U3Gxuh5rYjDuVkgX/vVrxWsRLmfo4aAwVI87y+hGAoLbO/Xh5O2wGSAcXrgxjHKdQt9KGvg3fkn1qu1zDA==');
define('SECURE_AUTH_SALT', 'QCb8DH7Wyk8VepyOx4bawdEGJs1/xIcZi945tGAkx0NwHIjTgkEgsrrVyocERAYptmVltsuEkKJjIZgzEEZtMw==');
define('LOGGED_IN_SALT',   'V2Sx0NWL+ffDlnPrEeOpB+Uw0qMJ99cKsIbCz2ltHCzIURvLz2GHIXB4jrrsTazNrlXqHt+/82W4s6maEnn2pA==');
define('NONCE_SALT',       '+OyRodOaE4N2A6rKDKp5cdDHw7Ld2nzHxlsyIUnDH4b1faPfCMYLPIhLRyqgyAaSfd+48VUBzE3wMTThsYW/hA==');

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
