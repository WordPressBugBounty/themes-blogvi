<?php
/**
 * Blog customizer settings.
 *
 * @package Blogvi
 * @author  Peregrine Themes
 * @since   1.0.0
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_filter( 'bloglo_customizer_options', 'blogvi_customizer_blog_options', 11 );

/**
 * Replace the parent theme blog layout choices.
 *
 * @since 1.0.0
 * @param array $options Customizer options.
 * @return array
 */
function blogvi_customizer_blog_options( array $options ) {
	// Layout.
	$options['setting']['bloglo_blog_layout'] = array(
		'transport'         => 'refresh',
		'sanitize_callback' => 'bloglo_sanitize_select',
		'control'           => array(
			'type'        => 'bloglo-select',
			'label'       => esc_html__( 'Layout', 'blogvi' ),
			'description' => esc_html__( 'Choose blog layout. This will affect blog layout on archives, search results and posts page.', 'blogvi' ),
			'section'     => 'bloglo_section_blog_page',
			'choices'     => array(
				'blog-horizontal' => esc_html__( 'Horizontal', 'blogvi' ),
			),
		),
	);

	return $options;
}
