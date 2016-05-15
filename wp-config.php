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
define('DB_NAME', 'wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '9p~|:oeZk<]-Pjkyd=d_`c<#Ojn/X8467>u;eaOQ5AvH2Zv(44r C.9L(-w}zOl+');
define('SECURE_AUTH_KEY',  'yn<pxi0jtD/sfmaUr4asdbW.P%dNyS4S[ISry<FdM<:ZE7%Oo~3KYr6q=|s:H4Pq');
define('LOGGED_IN_KEY',    '!e<KxrLmY>I/xAqTpvzw5?%k8poO#PaX @D6kDE(Jz?b`-kB/4aE{DoIUhmf&NVM');
define('NONCE_KEY',        'cw;(m=Q<?gH3B`E9be,+_~@3Fyi4.H!f(Og2C-7U7>*2rN@u:-Bink%oo(,BF(vO');
define('AUTH_SALT',        'CW{nH/FarXm~(dhkK7/uQVBbH|dt;mt{;lN<E=@6!aMTZfGiw#=8n:>(qdxb@H:?');
define('SECURE_AUTH_SALT', 'vkuGt%W oE}BPeSha.w@r`5^c*<!g=!Xtz&v~EFnr@{LVv%Tt;)qDrE6GXT|aGVg');
define('LOGGED_IN_SALT',   'L=S}S&m&pS]B?![ heE;JEOuLS!a&gvp-~gL$k|D]]Lm=Jg1]!A$o^XFx|zEOHP*');
define('NONCE_SALT',       '%8u(tno:`%!#mvsMcmPkxvwpp0Bv]bF{3v`C0-ViUmp?7}xK4!9j=4/sDD;Rnoax');

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
