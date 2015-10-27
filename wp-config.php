<?php


// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', 'joia');

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

define('AUTH_KEY',         'tBHf|N|bt:KP-&<7I,d,ww4g7hQJM@1w[.bQ@GZ+KzwANpJXp~7tY9.!F&e*x_AA');
define('SECURE_AUTH_KEY',  'SBxLjy?<&=&Np#=_3&gKSQz}:T(mH/D(|-ZC-0+>i^xohU h.+on6]:7h/*%t30?');
define('LOGGED_IN_KEY',    '0=N1?[fl`|]7i0Cdy4o],&=z=(u,tmO.aZTo4]N}2R$+mrgH$L)yk4-y(|_f#/<d');
define('NONCE_KEY',        '=iC>RqJ.lk-8AMYw PoBtE74zCs!|6q{=rzd D_EZwz] C*))PNqC^&(q]?%-G68');
define('AUTH_SALT',        '<OEUU!s9;wG]$T!~n<n);M5YoUv(zq=)+V@4Fk&z;>Ul0%tjQ^~b$5B{T4{)wh/f');
define('SECURE_AUTH_SALT', '/?QW60KMrWH(8]k|?QJ(Hz1n+:kf<btUy1Lm8kZ|8zbKRz,77pa<QsrT|-2aQDQo');
define('LOGGED_IN_SALT',   'm8WY;*<nYn/Xb/u`A^o5O%.G:0d^Y|b@P6`f?sa.Ch+ADG-<p}:RAH6!bk;#F|NV');
define('NONCE_SALT',       '!a>/LLRP<>Rgl&?Bno)FB~!.H0q,6-}RO^HU>MELfALDCp?V>t}zi#OIUMIP)mwX');


$table_prefix = 'wp_';





/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define( 'WP_DEBUG', true );
