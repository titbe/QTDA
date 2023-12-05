<?php
function ctravel_adven_lite_customize_register($wp_customize){

    $wp_customize->add_section('ctravel_adven_lite_header', array(
        'title'    => esc_html__('CTravel Adven Header Phone and email', 'ctravel-adven-lite'),
        'description' => '',
        'priority' => 30,
    ));
    
     $wp_customize->add_section('ctravel_adven_lite_social', array(
        'title'    => esc_html__('CTravel Adven Social Link', 'ctravel-adven-lite'),
        'description' => '',
        'priority' => 35,
    ));
    	
	$wp_customize->add_section('ctravel_adven_lite_footer', array(
        'title'    => esc_html__('CTravel Adven Footer', 'ctravel-adven-lite'),
        'description' => '',
        'priority' => 37,
    ));
 
   //  =============================
    //  = Text Input phone number                =
    //  =============================
    $wp_customize->add_setting('ctravel_adven_lite_phone', array(
        'default'        => '',
        'sanitize_callback' => 'absint'
    ));
 
    $wp_customize->add_control('ctravel_adven_lite_phone', array(
        'label'      => esc_html__('Phone Number', 'ctravel-adven-lite'),
        'section'    => 'ctravel_adven_lite_header',
        'setting'   => 'ctravel_adven_lite_phone',
        'type'    => 'text'
    ));
    
    //  =============================
    //  = Text Input Email                =
    //  =============================
    $wp_customize->add_setting('ctravel_adven_lite_email', array(
        'default'        => '',
        'sanitize_callback' => 'sanitize_email'       
    ));
 
    $wp_customize->add_control('ctravel_adven_lite_email', array(
        'label'      => esc_html__('Email', 'ctravel-adven-lite'),
        'section'    => 'ctravel_adven_lite_header',
        'setting'   => 'ctravel_adven_lite_email',
        'type'    => 'email'
    ));
    
    //  =============================
    //  = Text Input facebook                =
    //  =============================
    $wp_customize->add_setting('ctravel_adven_lite_fb', array(
        'default'        => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
 
    $wp_customize->add_control('ctravel_adven_lite_fb', array(
        'label'      => esc_html__('Facebook', 'ctravel-adven-lite'),
        'section'    => 'ctravel_adven_lite_social',
        'setting'   => 'ctravel_adven_lite_fb',
        'type'    => 'url'
    ));
    //  =============================
    //  = Text Input Twitter                =
    //  =============================
    $wp_customize->add_setting('ctravel_adven_lite_twitter', array(
        'default'        => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
 
    $wp_customize->add_control('ctravel_adven_lite_twitter', array(
        'label'      => esc_html__('Twitter', 'ctravel-adven-lite'),
        'section'    => 'ctravel_adven_lite_social',
        'setting'   => 'ctravel_adven_lite_twitter',
        'type'    => 'url'
    ));
    //  =============================
    //  = Text Input googleplus                =
    //  =============================
    $wp_customize->add_setting('ctravel_adven_lite_glplus', array(
        'default'        => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
 
    $wp_customize->add_control('ctravel_adven_lite_glplus', array(
        'label'      => esc_html__('Google Plus', 'ctravel-adven-lite'),
        'section'    => 'ctravel_adven_lite_social',
        'setting'   => 'ctravel_adven_lite_glplus',
        'type'    => 'url'
    ));
    //  =============================
    //  = Text Input linkedin                =
    //  =============================
    $wp_customize->add_setting('ctravel_adven_lite_in', array(
        'default'        => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
 
    $wp_customize->add_control('ctravel_adven_lite_in', array(
        'label'      => esc_html__('Linkedin', 'ctravel-adven-lite'),
        'section'    => 'ctravel_adven_lite_social',
        'setting'   => 'ctravel_adven_lite_in',
        'type'    => 'url'
    ));
	//  =============================
    //  = slider section              =
    //  =============================
    $wp_customize->add_section('ctravel_adven_lite_banner', array(
        'title'    => esc_html__('CTravel Adven Home banner Text', 'ctravel-adven-lite'),
        'description' => esc_html__('add home banner text here.','ctravel-adven-lite'),
        'priority' => 36,
    ));
   
// Banner heading Text
    $wp_customize->add_setting('banner_heading',array(
            'default'   => null,
            'sanitize_callback' => 'sanitize_text_field'    
    ));
    
    $wp_customize->add_control('banner_heading',array( 
            'type'  => 'text',
            'label' => esc_html__('Add Banner heading here','ctravel-adven-lite'),
            'section'   => 'ctravel_adven_lite_banner',
            'setting'   => 'banner_heading'
    )); // Banner heading Text

    // Banner heading Text
    $wp_customize->add_setting('banner_sub_heading',array(
            'default'   => null,
            'sanitize_callback' => 'sanitize_text_field'    
    ));
    
    $wp_customize->add_control('banner_sub_heading',array( 
            'type'  => 'text',
            'label' => esc_html__('Add Banner sub heading here','ctravel-adven-lite'),
            'section'   => 'ctravel_adven_lite_banner',
            'setting'   => 'banner_sub_heading'
    )); // Banner heading Text

  //  =============================
    //  = Footer              =
    //  =============================
	
	// Footer design and developed
	 $wp_customize->add_setting('ctravel_adven_lite_design', array(
        'default'        => '',
		'sanitize_callback' => 'sanitize_textarea_field'
    ));
 
    $wp_customize->add_control('ctravel_adven_lite_design', array(
        'label'      => esc_html__('Design and developed', 'ctravel-adven-lite'),
        'section'    => 'ctravel_adven_lite_footer',
        'setting'   => 'ctravel_adven_lite_design',
		'type'	   =>'textarea'
    ));
	// Footer copyright
	 $wp_customize->add_setting('ctravel_adven_lite_copyright', array(
        'default'        => '',
		'sanitize_callback' => 'sanitize_textarea_field'       
    ));
 
    $wp_customize->add_control('ctravel_adven_lite_copyright', array(
        'label'      => esc_html__('Copyright', 'ctravel-adven-lite'),
        'section'    => 'ctravel_adven_lite_footer',
        'setting'   => 'ctravel_adven_lite_copyright',
		'type'	   =>'textarea'
    ));	
}
add_action('customize_register', 'ctravel_adven_lite_customize_register');