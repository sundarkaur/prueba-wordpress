<?php
function quality_testimonial_customizer( $wp_customize ) {

//Home project Section
	$wp_customize->add_panel( 'quality_test_setting', array(
		'priority'       => 900,
		'capability'     => 'edit_theme_options',
		'title'      => __('Testimonials settings', 'quality'),
	) );
	
	
	
	
	$wp_customize->add_section(
        'test_section_settings',
        array(
            'title' => __('Homepage testimonial settings','quality'),
            'description' => '',
			'panel'  => 'quality_test_setting',)
    );
	
	//Testimonial Background Image
	$wp_customize->add_setting( 'testimonial_background', array(
	  'sanitize_callback' => 'esc_url_raw',
	  'default' => '',
	) );
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'testimonial_background', array(
	  'label'    => __( 'Background Image', 'quality' ),
	  'section'  => 'test_section_settings',
	  'settings' => 'testimonial_background',
	) ) );
	
	// add section to manage Testimonial Title
	$wp_customize->add_setting(
    'quality_pro_options[home_testimonial_title]',
    array(
        'default' => __("Client's Feedback","quality"),
		'capability'     => 'edit_theme_options',
		'type' => 'option',
		)
	);	
	$wp_customize->add_control( 'quality_pro_options[home_testimonial_title]',array(
    'label'   => __('Title','quality'),
    'section' => 'test_section_settings',
	 'type' => 'text',)  );	
	 
	 
	 $wp_customize->add_setting(
    'quality_pro_options[home_testimonial_desciption]',
    array(
        'default' => __('What <b>People</b> Say','quality'),
		'capability'     => 'edit_theme_options',
		'type' => 'option',
		)
	);	
	$wp_customize->add_control( 'quality_pro_options[home_testimonial_desciption]',array(
    'label'   => __('Description','quality'),
    'section' => 'test_section_settings',
	 'type' => 'text',)  );
	 
	 //Testimonail Title
	 $wp_customize->add_setting(
    'testimonial_title',
    array(
        'default' => __("Sed ut Perspiciatis Unde Omnis Iste","quality"),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		)
	);	
	$wp_customize->add_control( 'testimonial_title',array(
    'label'   => __('Testimonial title','quality'),
    'section' => 'test_section_settings',
	 'type' => 'text',)  );
	 
	 //Testimonail Description
	 $wp_customize->add_setting(
    'testimonial_descripton',
    array(
        'default' => 'Sed ut Perspiciatis Unde Omnis Iste Sed ut perspiciatis unde omnis iste natu error sit voluptatem accu tium
		neque fermentum veposu miten a tempor nise. Duis autem vel eum iriure dolor in hendrerit
		in vulputate velit consequat in velit esse.',
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		)
	);
	
	$wp_customize->add_control( 'testimonial_descripton',array(
    'label'   => __('Testimonial description','quality'),
    'section' => 'test_section_settings',
	 'type' => 'text',)  );
	 
	 
	 $wp_customize->add_setting( 'testimonial_image', array(
			  'sanitize_callback' => 'esc_url_raw',
			  'default' => WC__PLUGIN_URL .'/inc/quality/images/user1.jpg',
			) );
			
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'testimonial_image', array(
			  'label'    => __( 'Image', 'quality' ),
			  'section'  => 'test_section_settings',
			  'settings' => 'testimonial_image',
	) ) );
	
	$wp_customize->add_setting(
    'testimonial_name',
    array(
        'default' => 'Bella Robbertson',
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		)
	);	
	$wp_customize->add_control( 'testimonial_name',array(
    'label'   => __('Name','quality'),
    'section' => 'test_section_settings',
	 'type' => 'text',));
	 
	 $wp_customize->add_setting(
    'testimonial_position',
    array(
        'default' => __('Developer','quality'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		)
	);	
	$wp_customize->add_control( 'testimonial_position',array(
    'label'   => __('Designation','quality'),
    'section' => 'test_section_settings',
	 'type' => 'text'));

}
	add_action( 'customize_register', 'quality_testimonial_customizer' );

/**
 * Add selective refresh for Front page testimonial section controls.
*/
function quality_register_testimonial_section_partials( $wp_customize ){

	$wp_customize->selective_refresh->add_partial( 'quality_pro_options[home_testimonial_title]', array(
		'selector'            => '.testimonial .section-header p',
		'settings'            => 'quality_pro_options[home_testimonial_title]',
	
	) );
	$wp_customize->selective_refresh->add_partial( 'quality_pro_options[home_testimonial_desciption]', array(
		'selector'            => '.testimonial .section-header h1',
		'settings'            => 'quality_pro_options[home_testimonial_desciption]',
	
	) );
	
	$wp_customize->selective_refresh->add_partial( 'testimonial_title', array(
		'selector'            => '.testmonial-block h3',
		'settings'            => 'testimonial_title',
	
	) );
	
	$wp_customize->selective_refresh->add_partial( 'testimonial_descripton', array(
		'selector'            => '.testmonial-block p',
		'settings'            => 'testimonial_descripton',
	
	) );
	
	$wp_customize->selective_refresh->add_partial( 'testimonial_image', array(
		'selector'            => '.testmonial-block img',
		'settings'            => 'testimonial_image',
	
	) );
	
	$wp_customize->selective_refresh->add_partial( 'testimonial_name', array(
		'selector'            => '.testmonial-block .name',
		'settings'            => 'testimonial_name',
	
	) );
	
	$wp_customize->selective_refresh->add_partial( 'testimonial_position', array(
		'selector'            => '.testmonial-block .designation',
		'settings'            => 'testimonial_position',
	
	) );
	
	
	
	
	

	
}

add_action( 'customize_register', 'quality_register_testimonial_section_partials' );	
?>