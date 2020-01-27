<?php 

function hunters_integrateWithVC(){
	vc_map(array(
		'name' => __('First Section','text-donain'),
		'description' => 'This is First Addon',
		'base' => 'section_base_1',
		'category' => 'Hunters',
		'icon' => get_template_directory_uri() .'/images/favicon-16x16.png',
		'params' =>array(
			array(
				'param_name'=>'title_sec_1',
				'type'=>'textfield',
				'heading'=>'Title',
				'value'=>'Title',
			),
			array(
				'param_name'=>'description_sec_1',
				'type'=>'textarea',
				'heading'=>'Description',
				'value'=>'description',
			),
			array(
				'param_name'=>'image_sec_1',
				'type'=>'attach_image',
				'heading'=>'Image',
				'value'=>'Image',
			),
			array(
				'param_name'=>'color_sec_1',
				'type'=>'colorpicker',
				'heading'=>'Text Color',
				'value'=>'Color',
			),
		),
	));


// Section three 

	vc_map(array(
		'name'=> __('Third Section','text_domain'),
		'description' => 'This is third Section',
		'base' => 'section_base_3',
		'category' => 'Hunters',
		'icon' => get_template_directory_uri(). '/images/favicon-16x16.png',
		'params' => array(
//group section
			array(
				'param_name'=> 'sec_grp_3',
				'heading' => 'Section Item 3',
				'type' => 'param_group',
				'params' => array(
//dropdown section
					array(
						'param_name'=> 'icon_image_sec',
						'heading' => 'Icon Or Image',
						'type' => 'dropdown',
						'value' => array(
						'Select a value'=> '',
							'icon' => 'fontawaesome',
							'image' => 'image',
						),
					),
					array(
						'param_name' => 'sec_icon_3', 
						'type' => 'iconpicker' , 
						'heading' => 'Icon', 
						'dependency' => array(
							'element'=>'icon_image_sec',
							'value'=>'fontawaesome',
						),
					),
					array(
						'param_name' => 'sec_image_3', 
						'type' => 'attach_image' , 
						'heading' => 'image', 
						'dependency' => array(
							'element'=>'icon_image_sec',
							'value'=>'image',
						), 
					),
					array(
						'param_name' => 'sec_title_3', 
						'type' => 'textfield' , 
						'heading' => 'Text', 
						'value' => 'Text' , 
						'group' => 'Text',
					),
					array(
						'param_name' => 'sec_desc_3', 
						'type' => 'textarea' , 
						'heading' => 'Description', 
						'value' => 'Description' , 
						'group' => 'Text',
					),
					array(
						'param_name' => 'sec_color_3', 
						'type' => 'colorpicker' , 
						'heading' => 'Color', 
						'value' => 'Color' , 
						'group' => 'Text',
					),

				),
				// end dropdown section
			),
		),
		//end group section 
	));


// Blog section

	vc_map(array(
		'name' => __('Blog Section','text_domain'),
		'description' => 'This is Blog',
		'base' => 'section_4_blog',
		'category' => 'Hunters',
		'icon' => get_template_directory_uri(). '/images/favicon-16x16.png',
		'params'=>array(
			array(
				'param_name' => 'section_blog_4',
				'heading' => 'Latest Title',
				'type' => 'textfield',
			),
		),
	));


// Contact Form 
	vc_map(array(
		'name' => __('Contact form 7','text_domain'),
		'description' => 'This is Contact form 7',
		'base' => 'section_contact_form',
		'category' => 'Hunters',
		'icon' => get_template_directory_uri(). '/images/favicon-16x16.png',
		'params'=>array(
			array(
				'param_name' => 'content',
				'heading' => 'Contact form 7',
				'type' => 'textarea_html',
			),
		),
	));


// Portfolio section

	vc_map(array(
		'name' => __('Portfolio Section','text_domain'),
		'description' => 'This is Portfolio',
		'base' => 'section_5_Portfolio',
		'category' => 'Hunters',
		'icon' => get_template_directory_uri(). '/images/favicon-16x16.png',
		'params'=>array(
			array(
				'param_name' => 'section_Portfolio_post_per_page',
				'heading' => 'Post Per Page',
				'type' => 'textfield',
			),
		),
	));

}
add_action('vc_before_init','hunters_integrateWithVC');
?>