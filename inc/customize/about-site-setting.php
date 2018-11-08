<?php
function fenchi_about_site_customize_register($wp_customize){
   

    //  =============================
    //  = Header about site section              =
    //  =============================
    $wp_customize->add_section('fenchi_header_about_site', array(
        'title'    => __('About-site setting', 'fenchi'),
        'priority' => 40,
    ));
    

    //Title of about site
    $wp_customize->add_setting('fenchi_theme_options_about_site_title', array(
        'default'        => __('About Site title', 'fenchi'),
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'wp_kses_post', 
        
    ));
    $wp_customize->add_control('fenchi_about_site_title', array(
        'label'      => __('About site title', 'fenchi'),
        'section'    => 'fenchi_header_about_site',
        'settings'   => 'fenchi_theme_options_about_site_title',
    ));

    //Description of site
    $wp_customize->add_setting('fenchi_theme_options_about_site', array(
        'default'        => __('Write about site here...','fenchi'),
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'wp_kses_post', 
    ));
    $wp_customize->add_control('fenchi_about_site', array(
        'label'      => __('about site', 'fenchi'),
        'section'    => 'fenchi_header_about_site',
        'settings'   => 'fenchi_theme_options_about_site',
        'type'       => 'textarea',
    ));

    // title of contact
    $wp_customize->add_setting('fenchi_theme_options_contact_text', array(
        'default'        => __('Contact', 'fenchi'),
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'wp_kses_post', 
        
    ));
    $wp_customize->add_control('fenchi_contact_text', array(
        'label'      => __('contact title', 'fenchi'),
        'section'    => 'fenchi_header_about_site',
        'settings'   => 'fenchi_theme_options_contact_text',
    ));

    //email
    $wp_customize->add_setting('fenchi_theme_options_email', array(
        'default'        => __('info@yoursite.com', 'fenchi'),
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'wp_kses_post', 
        
    ));
    $wp_customize->add_control('fenchi_email', array(
        'label'      => __('Email', 'fenchi'),
        'section'    => 'fenchi_header_about_site',
        'settings'   => 'fenchi_theme_options_email',
    ));

    //phone number
    $wp_customize->add_setting('fenchi_theme_options_tell', array(
        'default'        => __('+19123456789', 'fenchi'),
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'wp_kses_post', 
        
    ));
    $wp_customize->add_control('fenchi_tell', array(
        'label'      => __('Your phone number', 'fenchi'),
        'section'    => 'fenchi_header_about_site',
        'settings'   => 'fenchi_theme_options_tell',
    ));
   
     
}
add_action('customize_register', 'fenchi_about_site_customize_register');
?>