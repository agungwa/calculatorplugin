<?php 
/*
Plugin Name: Another Plugin
Plugin URI: https://agungw.net/
Description: Don't forget drink coffee
Version: 0.0.1
Author: Agung Widhiatmojo
Author URI: https://agungw.com/
License: None
Text Domain: Another Plugin
*/
if(!defined('ABSPATH')){
    die('hey, get out from here');
}

//load scripts
require_once(plugin_dir_path(__FILE__).'/core/another-include.php');
//load class
require_once(plugin_dir_path(__FILE__).'/core/another-class.php');
//register widget
function register_another(){
    register_widget('Another_Widget');
}

//hook in function
add_action('widgets_init','register_another');