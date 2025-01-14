<?php

/**
 * Controls attached to core sections
 *
 * @package vamtam/fabrik
 */


return array(
	array(
		'label'     => esc_html__( 'Header Logo Type', 'fabrik' ),
		'id'        => 'header-logo-type',
		'type'      => 'switch',
		'transport' => 'postMessage',
		'section'   => 'title_tagline',
		'choices'   => array(
			'image'      => esc_html__( 'Image', 'fabrik' ),
			'site-title' => esc_html__( 'Site Title', 'fabrik' ),
		),
		'priority' => 8,
	),

	array(
		'label'     => esc_html__( 'Single Product Image Zoom', 'fabrik' ),
		'id'        => 'wc-product-gallery-zoom',
		'type'      => 'switch',
		'transport' => 'postMessage',
		'section'   => 'woocommerce_product_images',
		'choices'   => array(
			'enabled'  => esc_html__( 'Enabled', 'fabrik' ),
			'disabled' => esc_html__( 'Disabled', 'fabrik' ),
		),
		// 'active_callback' => 'vamtam_extra_features',
	),
);


