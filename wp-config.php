<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'igryvtmsk');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'ptjwqwuom19d9lhq3wyjhhpc7xgogakpsb8nxtytwchqtjlzjr1qwkuc9lehmkel');
define('SECURE_AUTH_KEY',  'rkraswzxufe6khr5avq5vq4wudkgqovoyyb7cqn2spziofhzfh89hfpsgromdqoe');
define('LOGGED_IN_KEY',    'cian75zkj5qp91mrmeuvs9br3t3t5djsjpgj7gm59uwqrgbpj47h8i468iu9b2mu');
define('NONCE_KEY',        'ckdc2b8kw47gowtoifne8chh1vs29ilddnk47zdsk6ylf71ofj5nch3irluweful');
define('AUTH_SALT',        'yxty8cr17ix5rj6goeoklddjmsqygicyr8r2wxrkjownrowckcld7qg1oxeg2j8p');
define('SECURE_AUTH_SALT', 'klhfbhkqztmezymxjchjibb3brclsneqsp3hfht0rb365hfteznj97mzsdojtmxf');
define('LOGGED_IN_SALT',   'fjiwjn7wiez3vyqj1xdq8cl5h5enpn9jpfv2pmm7pzakzzgmkcn7huf4xm2fojac');
define('NONCE_SALT',       'u785w3uzo7e0smc4vixfwbcq2hjy1gczztijaauwjewbyakehq1zwp3n542r6qn9');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
        define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
