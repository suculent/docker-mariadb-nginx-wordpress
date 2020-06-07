<?php

define('SKIN_ENABLED', false);
define('ADS_ENABLED', false);

define('DB_NAME', 'zentournet');

define('DB_USER', 'zentournet');

define('DB_PASSWORD', 'PQsuPoG4Qzz');

define('DB_HOST', 'mariadb');

define('DB_CHARSET', 'utf8');

define('DB_COLLATE', '');

define('AUTH_KEY',         '-T(gIfxU,?952-fx&:dKxli;yws7LRi:5v0+m[+0ZtF?ZY{v*kmF:|)B%0]~$m11');
define('SECURE_AUTH_KEY',  '|a4#6kRTCFG+5]i?[iY^E{+|nQxA!E6||V>EqjIE%-Bk2`j_5~a)X7]( X(9`ssc');
define('LOGGED_IN_KEY',    'xg^igo|-%AYm>_02$L=7QUl-fOr^<X9#o`(U-vMEX8|oVE8!P.~!_C-nPz_@/),1');
define('NONCE_KEY',        'sQyA<-^yx`_DZOii5-2{R^WlR+V`.XFP0|LG`][!~uMRm29oy?AvA)v$r~$]J}JV');
define('AUTH_SALT',        ']L~cDZNP<dEC#Wc6uscEVDSCPH^Aj&.jk-N)24Qy:a,A_z+*EJF!*!:Fv*L|QGKu');
define('SECURE_AUTH_SALT', '].d|(+y}=:*SV3.Qw`tu Dn3(>3ZN#t#B-ET<}0`B>4Ac8G%YM|`Pq*3=**/%z]/');
define('LOGGED_IN_SALT',   'GSN6h(fI{d2f.XM+c_:Dxf}<_M`2-~V}KO-]Y$GwBqzE:J${{$R]]a^#o6hzqOJ}');
define('NONCE_SALT',       'e)Swo+i}++r,7|@43-!LtOD3$H;8~&LVrr?4aJW#[5ZUM/Vy D~@c6Ap?|mTR^O+');

$table_prefix  = 'wp_';

define('WP_DEBUG', false);


define('AUTOSAVE_INTERVAL', 300 ); // seconds
define('WP_POST_REVISIONS', 3 );

define('DISALLOW_FILE_EDIT', true);

if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** Required for SSL */
if($_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https'){
    $_SERVER['HTTPS'] = 'on';
    $_SERVER['SERVER_PORT'] = 443;
}

require_once(ABSPATH . 'wp-settings.php');

define('FS_METHOD', 'direct');
