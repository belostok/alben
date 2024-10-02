<?php
acf_add_local_field_group(
	array(
		'key'                   => 'group_66fd649487de8',
		'title'                 => esc_attr__( 'Options', 'alben' ),
		'fields'                => array(
			array(
				'key'               => 'field_66fd6494b0bd8',
				'label'             => esc_attr__( 'General', 'alben' ),
				'name'              => '',
				'aria-label'        => '',
				'type'              => 'tab',
				'instructions'      => '',
				'required'          => 0,
				'conditional_logic' => 0,
				'wrapper'           => array(
					'width' => '',
					'class' => '',
					'id'    => '',
				),
				'placement'         => 'left',
				'endpoint'          => 0,
				'selected'          => 0,
			),
			array(
				'key'               => 'field_66fd64c9b0bd9',
				'label'             => esc_attr__( 'Logo Title', 'alben' ),
				'name'              => 'acf_logo_title',
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
				'default_value'     => 'AlBen',
				'maxlength'         => '',
				'allow_in_bindings' => 0,
				'placeholder'       => '',
				'prepend'           => '',
				'append'            => '',
			),
		),
		'location'              => array(
			array(
				array(
					'param'    => 'options_page',
					'operator' => '==',
					'value'    => 'alben-options',
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
