<?php
/**
 * @wordpress-plugin
 * Plugin Name: Popup BaumGarten
 */

defined( 'ABSPATH' ) or die( 'Direct script access disallowed.' );

define( 'BAUMP_WIDGET_PATH', plugin_dir_url( __FILE__ ) . 'popup' );
define( 'BAUMP_INCLUDES', plugin_dir_path( __FILE__ ) . '/includes' );

require_once( BAUMP_INCLUDES . '/enqueue.php' );
require_once( BAUMP_INCLUDES . '/react_footer.php' );
