<?php
/**
 * Header customizer settings.
 *
 * @package Blogvi
 * @author  Peregrine Themes
 * @since   1.0.0
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_filter( 'bloglo_customizer_options', 'blogvi_customizer_header_options', 11 );

/**
 * Replace the parent theme header layout choices.
 *
 * @since 1.0.0
 * @param array $options Customizer options.
 * @return array
 */
function blogvi_customizer_header_options( array $options ) {
	// Header Layout.
	$options['setting']['bloglo_header_layout']['control']['choices'] = array(
		'layout-5' => array(
			'image' => get_parent_theme_file_uri( '/inc/customizer/assets/images/header-layout-5.svg' ),
			'title' => esc_html__( 'Header 1', 'blogvi' ),
		),
	);

	return $options;
}
