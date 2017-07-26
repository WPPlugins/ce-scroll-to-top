<?php
/**
 * @package CE_Scroll_To_Top
 * @version 1.0
 */
/*
Plugin Name: CE Scroll To Top
Plugin URI: http://coderexpo.com/
Description: This is a simple Scroll To Top plugin. just active this plugin and get a beautiful scroll to top button in your website.
Author: Shazahanul Islam Shohag
Version: 1.0
Author URI: http://coderexpo.com/
*/


/*Some Set-up*/
define('CE_SCROLL_TO_TOP_URL', WP_PLUGIN_URL . '/' . plugin_basename( dirname(__FILE__) ) . '/' );


/* Adding Latest jQuery from Wordpress */
function ce_scroll_to_tpp_latest_jquery() {
	wp_enqueue_script('jquery');
}
add_action('init', 'ce_scroll_to_tpp_latest_jquery');

/* Adding plugin javascript active file */
wp_enqueue_script('ce-scroll-up-active', CE_SCROLL_TO_TOP_URL.'js/jquery.scrollUp.min.js', array('jquery'));
/* Adding plugin javascript active file */
wp_enqueue_script('ce-scroll-to-top-active', CE_SCROLL_TO_TOP_URL.'js/active.js', array('jquery'));
wp_enqueue_style('ce-scroll-to-top-f-awsam', 'http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css');
wp_enqueue_style('ce-scroll-to-top-css-main', CE_SCROLL_TO_TOP_URL.'css/style.css');


?>