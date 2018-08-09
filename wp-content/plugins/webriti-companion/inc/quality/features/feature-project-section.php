<?php
function webriti_companion_quality_project_customizer( $wp_customize ) {

//Home project Section
	$wp_customize->add_panel( 'quality_project_setting', array(
		'priority'       => 850,
		'capability'     => 'edit_theme_options',
		'title'      => __('Project settings', 'webriti-companion'),
	) );
	
	$wp_customize->add_section(
        'project_section_settings',
        array(
            'title' => __('Project settings','webriti-companion'),
			'panel'  => 'quality_project_setting',)
    );
	
	
	//Show and hide Project section
	$wp_customize->add_setting(
	'quality_pro_options[home_projects_enabled]'
    ,
    array(
        'default' => true,
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )	
	);
	$wp_customize->add_control(
    'quality_pro_options[home_projects_enabled]',
    array(
        'label' => __('Enable Home Project section','webriti-companion'),
        'section' => 'project_section_settings',
        'type' => 'checkbox',
    )
	);
	
	// //Project Title
	$wp_customize->add_setting(
    'quality_pro_options[project_heading_one]',
    array(
        'default' => __('Featured portfolio projects','webriti-companion'),
		'capability'     => 'edit_theme_options',
		'type' => 'option',
		)
	);	
	$wp_customize->add_control('quality_pro_options[project_heading_one]',array(
    'label'   => __('Title','webriti-companion'),
    'section' => 'project_section_settings',
	 'type' => 'text',)  );	
	 
	//Project Description 
	 $wp_customize->add_setting(
    'quality_pro_options[project_tagline]',
    array(
        'default' => __('Look <b>At Our</b> Projects','webriti-companion'),
		'capability'     => 'edit_theme_options',
		'type' => 'option',
		)
	);	
	$wp_customize->add_control( 'quality_pro_options[project_tagline]',array(
    'label'   => __('Description','webriti-companion'),
    'section' => 'project_section_settings',
	 'type' => 'text',)  );
	 
	 //Project Two
	$wp_customize->add_section(
        'project_one_section_settings',
        array(
            'title' => __('Project one','quality'),
			'panel'  => 'quality_project_setting',)
    );
	 
	 //Project one Title
	$wp_customize->add_setting(
	'quality_pro_options[project_one_title]', array(
        'default'        => __('Business cards','webriti-companion'),
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    ));
    $wp_customize->add_control('quality_pro_options[project_one_title]', array(
        'label'   => __('Title', 'quality'),
        'section' => 'project_one_section_settings',
		'priority'   => 150,
		'type' => 'text',
    ));
	
	//Project two description
	$wp_customize->add_setting(
	'quality_pro_options[project_one_desc]', array(
        'default'        => 'Branding, Illustrator',
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    ));
    $wp_customize->add_control('quality_pro_options[project_one_desc]', array(
        'label'   => __('Description', 'quality'),
        'section' => 'project_one_section_settings',
		'priority'   => 200,
		'type' => 'text',
    ));
	
	//Project one image
	$wp_customize->add_setting( 'quality_pro_options[project_one_thumb]',array('default' => WC__PLUGIN_URL .'/inc/quality/images/portfolio/home-port1.jpg',
	'type' => 'option','sanitize_callback' => 'esc_url_raw',));
 
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'quality_pro_options[project_one_thumb]',
			array(
				'label' => __('Image','quality'),
				'section' => 'example_section_one',
				'settings' =>'quality_pro_options[project_one_thumb]',
				'section' => 'project_one_section_settings',
				'type' => 'upload',
			)
		)
	);
	
	//Project Two
	$wp_customize->add_section(
        'project_two_section_settings',
        array(
            'title' => __('Project two','quality'),
			'panel'  => 'quality_project_setting',)
    );
	
	//Project Two Title
	$wp_customize->add_setting(
	'quality_pro_options[project_two_title]', array(
        'default'        => __('Business cards','webriti-companion'),
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    ));
    $wp_customize->add_control('quality_pro_options[project_two_title]', array(
        'label'   => __('Title', 'quality'),
        'section' => 'project_two_section_settings',
		'priority'   => 150,
		'type' => 'text',
    ));
	
	//Project two description
	$wp_customize->add_setting(
	'quality_pro_options[project_two_desc]', array(
        'default'        => 'Branding, Illustrator',
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    ));
    $wp_customize->add_control('quality_pro_options[project_two_desc]', array(
        'label'   => __('Description', 'quality'),
        'section' => 'project_two_section_settings',
		'priority'   => 200,
		'type' => 'text',
    ));
	
	//Project two image
	$wp_customize->add_setting( 'quality_pro_options[project_two_thumb]',array('default' => WC__PLUGIN_URL .'/inc/quality/images/portfolio/home-port2.jpg','type' => 'option','sanitize_callback' => 'esc_url_raw',));	
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'quality_pro_options[project_two_thumb]',
			array(
				'label' => __('Image','quality'),
				'section' => 'example_section_one',
				'settings' =>'quality_pro_options[project_two_thumb]',
				'section' => 'project_two_section_settings',
				'type' => 'upload',
			)
		)
	);
	
	//Project Three section
	$wp_customize->add_section(
        'project_three_section_settings',
        array(
            'title' => __('Project three','quality'),
			'panel'  => 'quality_project_setting',)
    );
	
	//Project Three Title
	$wp_customize->add_setting(
	'quality_pro_options[project_three_title]', array(
        'default'        => __('Business cards','webriti-companion'),
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    ));
    $wp_customize->add_control('quality_pro_options[project_three_title]', array(
        'label'   => __('Title','quality'),
        'section' => 'project_three_section_settings',
		'priority'   => 150,
		'type' => 'text',
    ));
	
	//Project three description
	$wp_customize->add_setting(
	'quality_pro_options[project_three_desc]', array(
        'default'        => 'Branding, Illustrator',
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    ));
    $wp_customize->add_control('quality_pro_options[project_three_desc]', array(
        'label'   => __('Description', 'quality'),
        'section' => 'project_three_section_settings',
		'priority'   => 200,
		'type' => 'text',
    ));
	
	
	//Project three image
	$wp_customize->add_setting( 'quality_pro_options[project_three_thumb]',array('default' => WC__PLUGIN_URL .'/inc/quality/images/portfolio/home-port3.jpg','type' => 'option','sanitize_callback' => 'esc_url_raw',));
 
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'quality_pro_options[project_three_thumb]',
			array(
				'label' => __('Image','quality'),
				'section' => 'example_section_one',
				'settings' =>'quality_pro_options[project_three_thumb]',
				'section' => 'project_three_section_settings',
				'type' => 'upload',
			)
		)
	);
	
	
	//Project Four section
	$wp_customize->add_section(
        'project_four_section_settings',
        array(
            'title' => __('Project four','quality'),
			'panel'  => 'quality_project_setting',)
    );
	
	//Project Four Title
	$wp_customize->add_setting(
	'quality_pro_options[project_four_title]', array(
        'default'        => __('Business cards','webriti-companion'),
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    ));
    $wp_customize->add_control('quality_pro_options[project_four_title]', array(
        'label'   => __('Title', 'quality'),
        'section' => 'project_four_section_settings',
		'priority'   => 150,
		'type' => 'text',
    ));
	
	//Project four description
	$wp_customize->add_setting(
	'quality_pro_options[project_four_desc]', array(
        'default'        => 'Branding, Illustrator',
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    ));
    $wp_customize->add_control('quality_pro_options[project_four_desc]', array(
        'label'   => __('Description', 'quality'),
        'section' => 'project_four_section_settings',
		'priority'   => 200,
		'type' => 'text',
    ));
	
	//Project Four image
	$wp_customize->add_setting( 'quality_pro_options[project_four_thumb]',array('default' => WC__PLUGIN_URL .'/inc/quality/images/portfolio/home-port4.jpg','type' => 'option','sanitize_callback' => 'esc_url_raw',));
 
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'quality_pro_options[project_four_thumb]',
			array(
				'label' => __('Image','quality'),
				'section' => 'example_section_one',
				'settings' =>'quality_pro_options[project_four_thumb]',
				'section' => 'project_four_section_settings',
				'type' => 'upload',
			)
		)
	);
	
	
	//Project Five section
	$wp_customize->add_section(
        'project_five_section_settings',
        array(
            'title' => __('Project five','quality'),
			'panel'  => 'quality_project_setting',)
    );
	
	
	
	//Project Four Title
	$wp_customize->add_setting(
	'quality_pro_options[project_five_title]', array(
        'default'        => __('Business cards','webriti-companion'),
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    ));
    $wp_customize->add_control('quality_pro_options[project_five_title]', array(
        'label'   => __('Title', 'quality'),
        'section' => 'project_five_section_settings',
		'priority'   => 150,
		'type' => 'text',
    ));
	
	//Project five description
	$wp_customize->add_setting(
	'quality_pro_options[project_five_desc]', array(
        'default'        => 'Branding, Illustrator',
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    ));
    $wp_customize->add_control('quality_pro_options[project_five_desc]', array(
        'label'   => __('Description', 'quality'),
        'section' => 'project_five_section_settings',
		'priority'   => 200,
		'type' => 'text',
    ));
	
	//Project Four image
	$wp_customize->add_setting( 'quality_pro_options[project_five_thumb]',array('default' => WC__PLUGIN_URL .'/inc/quality/images/portfolio/home-port5.jpg','type' => 'option','sanitize_callback' => 'esc_url_raw',));
 
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'quality_pro_options[project_five_thumb]',
			array(
				'label' => __('Image','quality'),
				'settings' =>'quality_pro_options[project_five_thumb]',
				'section' => 'project_five_section_settings',
				'type' => 'upload',
			)
		)
	);
	
	

}		
	add_action( 'customize_register', 'webriti_companion_quality_project_customizer' );
	
/**
 * Add selective refresh for Front page project section controls.
*/
function quality_register_project_section_partials( $wp_customize ){

$wp_customize->selective_refresh->add_partial( 'quality_pro_options[project_heading_one]', array(
		'selector'            => '.portfolio .section-header p',
		'settings'            => 'quality_pro_options[project_heading_one]',
	
	) );
$wp_customize->selective_refresh->add_partial( 'quality_pro_options[project_tagline]', array(
		'selector'            => '.portfolio .section-header h1',
		'settings'            => 'quality_pro_options[project_tagline]',
	
	) );
	
	$wp_customize->selective_refresh->add_partial( 'quality_pro_options[project_one_thumb]', array(
		'selector'            => '#quality_project_one img',
		'settings'            => 'quality_pro_options[project_one_thumb]',
	
	) );
	
	$wp_customize->selective_refresh->add_partial( 'quality_pro_options[project_one_title]', array(
		'selector'            => '#quality_project_one .entry-title a',
		'settings'            => 'quality_pro_options[project_one_title]',
	
	) );
	
	$wp_customize->selective_refresh->add_partial( 'quality_pro_options[project_one_desc]', array(
		'selector'            => '#quality_project_one p',
		'settings'            => 'quality_pro_options[project_one_desc]',
	
	) );
	
	
	$wp_customize->selective_refresh->add_partial( 'quality_pro_options[project_two_thumb]', array(
		'selector'            => '#quality_project_two img',
		'settings'            => 'quality_pro_options[project_two_thumb]',
	
	) );
	
	$wp_customize->selective_refresh->add_partial( 'quality_pro_options[project_two_title]', array(
		'selector'            => '#quality_project_two .entry-title a',
		'settings'            => 'quality_pro_options[project_two_title]',
	
	) );
	
	$wp_customize->selective_refresh->add_partial( 'quality_pro_options[project_two_desc]', array(
		'selector'            => '#quality_project_two p',
		'settings'            => 'quality_pro_options[project_two_desc]',
	
	) );
	
	
	$wp_customize->selective_refresh->add_partial( 'quality_pro_options[project_three_thumb]', array(
		'selector'            => '.home_portfolio_row #quality_project_three .qua_portfolio_image',
		'settings'            => 'quality_pro_options[project_three_thumb]',
	
	) );
	
	$wp_customize->selective_refresh->add_partial( 'quality_pro_options[project_three_title]', array(
		'selector'            => '#quality_project_three .entry-title a',
		'settings'            => 'quality_pro_options[project_three_title]',
	
	) );
	
	$wp_customize->selective_refresh->add_partial( 'quality_pro_options[project_three_desc]', array(
		'selector'            => '#quality_project_three p',
		'settings'            => 'quality_pro_options[project_three_desc]',
	
	) );
	
	
	$wp_customize->selective_refresh->add_partial( 'quality_pro_options[project_four_thumb]', array(
		'selector'            => '#quality_project_two img',
		'settings'            => 'quality_pro_options[project_four_thumb]',
	
	) );
	
	$wp_customize->selective_refresh->add_partial( 'quality_pro_options[project_four_title]', array(
		'selector'            => '#quality_project_four .entry-title a',
		'settings'            => 'quality_pro_options[project_four_title]',
	
	) );
	
	$wp_customize->selective_refresh->add_partial( 'quality_pro_options[project_four_desc]', array(
		'selector'            => '#quality_project_four p',
		'settings'            => 'quality_pro_options[project_four_desc]',
	
	) );
	
	$wp_customize->selective_refresh->add_partial( 'quality_pro_options[project_five_thumb]', array(
		'selector'            => '#quality_project_five img',
		'settings'            => 'quality_pro_options[project_five_thumb]',
	
	) );
	
	$wp_customize->selective_refresh->add_partial( 'quality_pro_options[project_five_title]', array(
		'selector'            => '#quality_project_five .entry-title a',
		'settings'            => 'quality_pro_options[project_five_title]',
	
	) );
	
	$wp_customize->selective_refresh->add_partial( 'quality_pro_options[project_five_desc]', array(
		'selector'            => '#quality_project_five p',
		'settings'            => 'quality_pro_options[project_five_desc]',
	
	) );
	

	
}

add_action( 'customize_register', 'quality_register_project_section_partials' );
?>