<?php
acf_add_local_field_group(
	array(
		'key'    => 'group_66fd5fc83685f',
		'title'  => esc_attr__( 'Photos', 'alben' ),
		'fields' => array(
			array(
				'key'                  => 'field_66fd5fc88e1cb',
				'label'                => esc_attr__( 'Photos', 'alben' ),
				'name'                 => 'acf_photos',
				'aria-label'           => '',
				'type'                 => 'relationship',
				'instructions'         => '',
				'required'             => 0,
				'conditional_logic'    => 0,
				'wrapper'              => array(
					'width' => '',
					'class' => '',
					'id'    => '',
				),
				'post_type'            => array(
					0 => 'attachment',
				),
				'post_status'          => '',
				'taxonomy'             => '',
				'filters'              => array(
					0 => 'search',
				),
				'return_format'        => 'id',
				'min'                  => '',
				'max'                  => '',
				'allow_in_bindings'    => 1,
				'elements'             => array(
					0 => 'featured_image',
				),
				'bidirectional'        => 0,
				'bidirectional_target' => array(),
			),
		),
		'location'              => array(
			array(
				array(
					'param'    => 'page_template',
					'operator' => '==',
					'value'    => 'default',
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
