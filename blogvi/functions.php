<?php
/**
 * Theme functions and definitions.
 *
 * @package Blogvi
 * @author  Peregrine Themes
 * @since   1.0.0
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Include theme files.
 *
 * @since 1.0.6
 * @return void
 */
function blogvi_includes() {
	require_once get_stylesheet_directory() . '/inc/customizer/default.php';
	require_once get_stylesheet_directory() . '/inc/customizer/settings/settings-header.php';
	require_once get_stylesheet_directory() . '/inc/customizer/settings/settings-blog.php';
}
blogvi_includes();

/**
 * Enqueue the child theme stylesheet.
 *
 * The parent theme loads its own stylesheet (`bloglo-styles`), so the child
 * stylesheet only needs to load after it in order to override it.
 *
 * @since 1.0.6
 * @return void
 */
function blogvi_enqueue_styles() {
	wp_enqueue_style(
		'blogvi-style',
		get_stylesheet_uri(),
		array( 'bloglo-styles' ),
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'blogvi_enqueue_styles', 20 );
