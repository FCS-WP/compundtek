<?php
return array(
	'name' => esc_html__( 'Help', 'fabrik' ),
	'auto' => true,
	'config' => array(

		array(
			'name' => esc_html__( 'Help', 'fabrik' ),
			'type' => 'title',
			'desc' => '',
		),

		array(
			'name' => esc_html__( 'Help', 'fabrik' ),
			'type' => 'start',
			'nosave' => true,
		),
//----
		array(
			'type' => 'docs',
		),

			array(
				'type' => 'end',
			),
	),
);
