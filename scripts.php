<?php
function vortex_scripts_action() {
   global $plugin_url;
   if (!is_admin()){wp_enqueue_script('jquery');}
   wp_enqueue_script( 'jquery-votex', $plugin_url . 'jquery.vortex.1.0.6/js/jquery.vortex.min.js', array(),NULL, false );
}
?>