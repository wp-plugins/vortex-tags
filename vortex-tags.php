<?php
/*
Plugin Name: Tags Vortex 
Description: This plugin is using vortex jquery library for showing tags.
Version: The Plugin's Version Number, e.g.: 1.0
Author: Adeel Ahmed
*/
$plugin_dir_path = dirname(__FILE__);
$plugin_url = plugins_url();
include_once($plugin_dir_path.'/vortex-elements.php');
include_once($plugin_dir_path.'/scripts.php');
include_once($plugin_dir_path.'/settings.php');
$file = dirname(__FILE__) . '/vortex-tags.php';
$plugin_url = plugin_dir_url($file);
global $plugin_url;
function vortex_admin_action()
{
	add_options_page('Vortext Tag Settings', 'Vortex Tags', 'manage_options', 'vortex-tag-settings', 'vortex_tag_settings');
}
function vortex_activate() {

    // Activation code here...
	$vortex_bg = get_option('vortex_bg');
	$vortex_font_color = get_option('vortex_font_color');
	$vortex_speed = get_option('vortex_speed');
	if(empty($vortex_bg)){update_option('vortex_bg','#FF0000');}
	if(empty($vortex_font_color)){update_option('vortex_font_color','#000000');}
	if(empty($vortex_speed)){update_option('vortex_speed','150');}
}
register_activation_hook( __FILE__, 'vortex_activate' );
add_action('admin_menu', 'vortex_admin_action');
add_action( 'wp_enqueue_scripts', 'vortex_scripts_action' ); // wp_enqueue_scripts action hook to link only on the front-end
add_shortcode('vortex-tags','vortex_elements')
?>