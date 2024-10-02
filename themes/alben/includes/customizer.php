<?php

namespace albenTheme\Customizer;

use WP_Customize_Manager;
use WP_Customize_Media_Control;

function start() {
	$callback = function ( $function ) {
		return __NAMESPACE__ . "\\$function";
	};

	add_action( 'customize_register', $callback( 'customize_identify' ) );
}

/**
 * Customize identify
 *
 * @param WP_Customize_Manager $wp_customize
 *
 * @return void
 */
function customize_identify( WP_Customize_Manager $wp_customize ) {
	$wp_customize->add_setting(
		'alben_logo',
		[
			'default'   => '',
			'transport' => 'refresh',
		]
	);

	$wp_customize->add_control(
		new WP_Customize_Media_Control(
			$wp_customize,
			'alben_logo',
			[
				'label'     => esc_html__( 'Upload your logo image', 'alben' ),
				'settings'  => 'alben_logo',
				'section'   => 'title_tagline',
				'mime_type' => 'image',
				'priority'  => 1,
			]
		)
	);

	$wp_customize->add_setting(
		'alben_mobile_logo',
		[
			'default'   => '',
			'transport' => 'refresh',
		]
	);

	$wp_customize->add_control(
		new WP_Customize_Media_Control(
			$wp_customize,
			'alben_mobile_logo',
			[
				'label'     => esc_html__( 'Upload your logo image for mobile', 'alben' ),
				'settings'  => 'alben_mobile_logo',
				'section'   => 'title_tagline',
				'mime_type' => 'image',
				'priority'  => 1,
			]
		)
	);
}
