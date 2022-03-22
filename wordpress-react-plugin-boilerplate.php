<?php
/*
Plugin Name: Wordpress React Plugin Boilerplate
Plugin URI: #
Description: Wordpress plugin boilerplate made for working with react and/or gutenberg with a nice php MVC design pattern
Version: 1.0
Author: devMiguelCarrero
Author URI: #
License: OSLv3
Requires at least: 4.0
Text Domain: wordpress-react-plugin-boilerplate
Domain Path: /wordpress-react-plugin-boilerplate/
*/

/* Copyright 2021
This program is free licensed software; 

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*/

//error_reporting(E_ALL);
//ini_set("display_errors", 1); 

if ( !function_exists( 'add_action' ) ) {
	echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
	exit;
}

define( 'WRB_DOMAIN' , 'wordpress-react-plugin-boilerplate' );
define( 'WRB_VERSION' , '1.0.0' );
define( 'WRB_SITE_URL', get_site_url() . '/' );
define( 'WRB_ACHIEVEMENTS_PATH' , plugin_dir_path( __FILE__ ) );
define( 'WRB_PLUGIN_URL' , plugin_dir_url( __FILE__ ) );
define( 'WRB_ACHIEVEMENTS_PATH_INCLUDES' , WRB_ACHIEVEMENTS_PATH . DIRECTORY_SEPARATOR . 'includes' . DIRECTORY_SEPARATOR );
define( 'WRB_ACHIEVEMENTS_PATH_CONFIG' , WRB_ACHIEVEMENTS_PATH_INCLUDES . 'config' . DIRECTORY_SEPARATOR );
define( 'WRB_ACHIEVEMENTS_PATH_APPLICATION' , WRB_ACHIEVEMENTS_PATH_INCLUDES . 'application' . DIRECTORY_SEPARATOR );
define( 'WRB_ACHIEVEMENTS_PATH_ENQUEUE' , WRB_ACHIEVEMENTS_PATH_APPLICATION . 'enqueue' . DIRECTORY_SEPARATOR );
define( 'WRB_ACHIEVEMENTS_PATH_SHORTCODE' , WRB_ACHIEVEMENTS_PATH_APPLICATION . 'shortcode' . DIRECTORY_SEPARATOR );
define( 'WRB_ACHIEVEMENTS_PATH_VIEW' , WRB_ACHIEVEMENTS_PATH_APPLICATION . 'view' . DIRECTORY_SEPARATOR );
define( 'WRB_ACHIEVEMENTS_PATH_CPT' , WRB_ACHIEVEMENTS_PATH_APPLICATION . 'cpt' . DIRECTORY_SEPARATOR );
define( 'WRB_ACHIEVEMENTS_PATH_METABOXES' , WRB_ACHIEVEMENTS_PATH_APPLICATION . 'metaboxes' . DIRECTORY_SEPARATOR );
define( 'WRB_ACHIEVEMENTS_PATH_TAXONOMY' , WRB_ACHIEVEMENTS_PATH_APPLICATION . 'taxonomy' . DIRECTORY_SEPARATOR );
define( 'WRB_ACHIEVEMENTS_PATH_ASYNC' , WRB_ACHIEVEMENTS_PATH_APPLICATION . 'async' . DIRECTORY_SEPARATOR );
define( 'WRB_ACHIEVEMENTS_PATH_MODEL' , WRB_ACHIEVEMENTS_PATH_INCLUDES . 'model' . DIRECTORY_SEPARATOR );
define( 'WRB_ACHIEVEMENTS_PATH_MENUPAGE' , WRB_ACHIEVEMENTS_PATH_APPLICATION . 'menu_page' . DIRECTORY_SEPARATOR );
define( 'WRB_BUILD_PATH', WRB_ACHIEVEMENTS_PATH . DIRECTORY_SEPARATOR . 'build' . DIRECTORY_SEPARATOR );

require_once WRB_ACHIEVEMENTS_PATH_INCLUDES . 'wordpress-react-plugin-boilerplate-install.php';