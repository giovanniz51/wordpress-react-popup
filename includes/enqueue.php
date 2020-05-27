<?php
// This file enqueues scripts and styles

defined( 'ABSPATH' ) or die( 'Direct script access disallowed.' );

add_action( 'init', function() {

 add_action( 'wp_enqueue_scripts', function() {
     wp_enqueue_script(
         'baum-popup',
         BAUMP_WIDGET_PATH . '/build/index.js',
         ['wp-element'],
         time(), // Change this to null for production
         true
     );
     wp_enqueue_style("baum-popup-css", plugin_dir_url( __FILE__ ) . "css/popup.css", null, time());
 });

});