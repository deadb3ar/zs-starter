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
define('DB_NAME', 'zs-starter');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'cs7-/ha6VdN)1mY,}:)MwDe47&*m,yuNwa6WA:VE],lmO~qEigsKy>v0FzJ4qebT');
define('SECURE_AUTH_KEY',  ',K55YjmKDU=YxOe)PAKA-@/}N!c %XMP!|6Dj+ScE2FK>r|N/7YlgC] Sgj.G^mj');
define('LOGGED_IN_KEY',    'vT{YPZ/)sp6u7D+W<!]mIe5%$,NNT&WE]wvXLLKG7nR3c1$54AYN4NR_0_utF0:)');
define('NONCE_KEY',        'wP3Xc4l)wZ`hRr8F)Osd4~Zml6P#x/duN;8&cC@ 6^A4LW54xfxmz%cCU:nK?7Op');
define('AUTH_SALT',        '^%A3vZpD%wM(zL|LtG6Ndd3cbUu~*es]@kIXtM(Pj6Oo|P?)WnHyTlj69@#RDmC9');
define('SECURE_AUTH_SALT', 'H1pzBaX_[NVdSk^p Hxz}1+AtBIpSegZ]+<h v}nKSSo[,WY}P!0-uDB#T1^=kiG');
define('LOGGED_IN_SALT',   '@~K+x.^ OZJ#_|oh}fqy_A,~]u8;0gffLO< QH87t>E!-5,~q!,mX#fY8<4+*FEP');
define('NONCE_SALT',       'U^;B>l/W`SL8+|t~RWl;m{cX7%/IVI-mEfPMKiM%/u2k@n+Sfj?vo^fD{smwoQNc');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
