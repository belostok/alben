<?php
acf_add_local_field_group(
	array(
		'key'                   => 'group_6700208383313',
		'title'                 => esc_attr__( 'Images', 'alben' ),
		'fields'                => array(
			array(
				'key'               => 'field_670020834646c',
				'label'             => esc_attr__( 'Name', 'alben' ),
				'name'              => 'acf_image_name',
				'aria-label'        => '',
				'type'              => 'text',
				'instructions'      => '',
				'required'          => 0,
				'conditional_logic' => 0,
				'wrapper'           => array(
					'width' => '',
					'class' => '',
					'id'    => '',
				),
				'default_value'     => '',
				'maxlength'         => 200,
				'allow_in_bindings' => 0,
				'placeholder'       => '',
				'prepend'           => '',
				'append'            => '',
			),
			array(
				'key'               => 'field_6700213a4646f',
				'label'             => esc_attr__( 'Place', 'alben' ),
				'name'              => 'acf_image_place',
				'aria-label'        => '',
				'type'              => 'text',
				'instructions'      => '',
				'required'          => 0,
				'conditional_logic' => 0,
				'wrapper'           => array(
					'width' => '',
					'class' => '',
					'id'    => '',
				),
				'default_value'     => '',
				'maxlength'         => 200,
				'allow_in_bindings' => 0,
				'placeholder'       => '',
				'prepend'           => '',
				'append'            => '',
			),
		),
		'location'              => array(
			array(
				array(
					'param'    => 'attachment',
					'operator' => '==',
					'value'    => 'all',
				),
			),
		),
		'menu_order'            => 0,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen'        => '',
		'active'                => true,
		'description'           => '',
		'show_in_rest'          => 0,
	)
);
