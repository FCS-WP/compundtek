<?php
namespace VamtamElementor\Widgets\FlipBox;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// Theme preferences.
if ( ! \Vamtam_Elementor_Utils::is_widget_mod_active( 'flip-box' ) ) {
	return;
}

if ( vamtam_theme_supports( 'flip-box--slide-bg-anim' ) ) {
	function add_slide_bg_anim_option( $controls_manager, $widget ) {
		// Flip Effect.
		\Vamtam_Elementor_Utils::add_control_options( $controls_manager, $widget, 'flip_effect', [
			'options' => [
				'vamtam-slide-bg' => esc_html__( 'Slide Bg (Vamtam)', 'vamtam-elementor-integration' ),
			],
		] );
	}
	// Content - Settings section
	function section_box_settings_content_before_section_end( $widget, $args ) {
		$controls_manager = \Elementor\Plugin::instance()->controls_manager;
		add_slide_bg_anim_option( $controls_manager, $widget );
	}
	add_action( 'elementor/element/flip-box/section_box_settings/before_section_end', __NAMESPACE__ . '\section_box_settings_content_before_section_end', 10, 2 );
}
