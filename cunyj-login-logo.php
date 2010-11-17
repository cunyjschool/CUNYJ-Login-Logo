<?php
/*
 * Plugin Name: CUNYJ Login Logo
 * Version: 0.1
 * Plugin URI: http://journalism.cuny.edu
 * Description: Replace the login logo
 * Author: Daniel Bachhuber
 * Author URI: http://danielbachhuber.com/
 */

define( 'CUNYJ_LOGIN_LOGO_FILE_PATH', __FILE__ );
define( 'CUNYJ_LOGIN_LOGO_URL' , plugins_url(plugin_basename(dirname(__FILE__)).'/') );

function cunyj_login_logo() {
    echo '<style type="text/css">
       #login h1 a { background-image:url(' . CUNYJ_LOGIN_LOGO_URL . '/img/cunyjlogo_h326.png) !important; }
    </style>';
}

add_action( 'login_head', 'cunyj_login_logo' );


?>