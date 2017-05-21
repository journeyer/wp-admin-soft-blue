<?php
/*
Plugin Name: WP admin soft blue 
Plugin URI: http://github.com/electro_mind/wp-admin-soft-blue
Description: Simple dashboard theme to enjoy using wordpress!
Author: Amirhossein Mirkazemi
Version: 1.0
*/

function load_style() {
  wp_enqueue_style('soft-blue', plugin_dir_url(__FILE__) . '/css/soft-blue.css');
}

function load_login_style() {
  wp_enqueue_style('soft-blue-login', plugin_dir_url(__FILE__) . '/css/soft-blue-login.css');
}

add_action('admin_enqueue_scripts', 'load_style', 1000);
add_action('login_enqueue_scripts', 'load_login_style', 1000);
?>
