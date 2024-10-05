<?php
acf_add_local_field_group(
	array(
		'key'                   => 'group_670126c8c2d2e',
		'title'                 => esc_attr__( 'Contacts', 'alben' ),
		'fields'                => array(
			array(
				'key'               => 'field_670126c989270',
				'label'             => esc_attr__( 'Name', 'alben' ),
				'name'              => 'acf_contacts_name',
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
					'param'    => 'page_template',
					'operator' => '==',
					'value'    => 'templates/template-contacts.php',
				),
			),
		),
		'menu_order'            => 0,
		'position'              => 'side',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen'        => '',
		'active'                => true,
		'description'           => '',
		'show_in_rest'          => 0,
	)
);
