<?php
/**
 * Enqueue scripts and styles.
 *
 * @package Inkolor
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if (!is_admin()){
	if ( ! function_exists( 'theme_scripts' ) ){
		function enqueue_scripts(){
			/* Get the theme data. */
			$the_theme     = wp_get_theme();
			$theme_version = $the_theme->get( 'Version' );

			$css_version = $theme_version . '.' . filemtime( get_template_directory() . '/css/theme.min.css' );

			/* Styles */
			wp_enqueue_style( 'all', get_template_directory_uri() . '/css/theme.min.css', array(), $css_version );

			/* Scripts */
			wp_enqueue_script( 'jquery' );
			$js_version = $theme_version . '.' . filemtime( get_template_directory() . '/js/theme.min.js' );
			wp_enqueue_script( 'theme-scripts', get_template_directory_uri() . '/js/theme.min.js', array(), $js_version, true );
			if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
				wp_enqueue_script( 'comment-reply' );
			}
		}
	}
	add_action( 'wp_enqueue_scripts', 'enqueue_scripts');
}

/* Custom style in admin */
function admin_script($hook) {
	wp_enqueue_script('cupom-admin', get_template_directory_uri().'/js/cupom-admin.js', array('jquery'), false, false);
}
add_action('admin_enqueue_scripts', 'admin_script');
