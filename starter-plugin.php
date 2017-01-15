<?php
/*
Plugin Name: Starter Plugin
Plugin URI: 
Description: 
Author: 
Version: 
Author URI: 
*/

// Enqueue js
wp_enqueue_script( 'starter-plugin-misc-js',  plugin_dir_url(__FILE__) . 'starter-plugin-misc.js', array('jquery') );

// Enqueue CSS
wp_enqueue_style( 'starter-plugin-misc-css',  plugin_dir_url(__FILE__) . 'starter-plugin-misc.css' );



function starter_plugin_function() {

}


// Replace HOOK with desired hook.  See full list of WP hooks here: http://adambrown.info/p/wp_hooks/hook
//add_action( 'HOOK', 'starter_plugin_function' );

