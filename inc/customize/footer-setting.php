<?php
function fenchi_footer_customize_register($wp_customize){
   
//  =============================
    //  = Footer section              =
    //  =============================
    $wp_customize->add_section('fenchi_footer', array(
        'title'    => __('Footer setting', 'fenchi'),
        'priority' => 50,
    ));
     //copyright setting
     $wp_customize->add_setting('fenchi_theme_options_copyright', array( 
        'default'   => __('All right reserved ','fenchi'), 
        'type' => 'theme_mod', 
        'sanitize_callback' => 'wp_kses_post', 
        'transport'   => 'refresh'
    ));
    $wp_customize->add_control('fenchi_copyright_text', array(
        'label'      => __('write your copyright code', 'fenchi'),
        'section'    => 'fenchi_footer',
        'type'       => 'textarea',
        'settings'   => 'fenchi_theme_options_copyright',
    ));

    // site twitter link
    $wp_customize->add_setting('fenchi_theme_options_footer_twitter', array( 
        'default'   => __('twitter_url ', 'fenchi'), 
        'type' => 'theme_mod', 
        'sanitize_callback' => 'wp_kses_post', 
        'transport'   => 'refresh'
    ));
    $wp_customize->add_control('fenchi_site_twitter_link', array(
        'label'      => __('Twitter link', 'fenchi'),
        'section'    => 'fenchi_footer',
        'settings'   => 'fenchi_theme_options_footer_twitter',
    ));

    //site facebook link
    $wp_customize->add_setting('fenchi_theme_options_footer_facebook', array( 
        'default'   => __('facebook_url ','fenchi'), 
        'type' => 'theme_mod', 
        'sanitize_callback' => 'wp_kses_post', 
        'transport'   => 'refresh'
    ));
    $wp_customize->add_control('fenchi_site_facebook_link', array(
        'label'      => __('Facebook link', 'fenchi'),
        'section'    => 'fenchi_footer',
        'settings'   => 'fenchi_theme_options_footer_facebook',
    ));

    //site linkedin link
    $wp_customize->add_setting('fenchi_theme_options_footer_linkedin', array( 
        'default'   => __('Linkedin_url','fenchi'), 
        'type' => 'theme_mod', 
        'sanitize_callback' => 'wp_kses_post', 
        'transport'   => 'refresh'
    ));
    $wp_customize->add_control('fenchi_site_linkedin_link', array(
        'label'      => __('Linkedin link', 'fenchi'),
        'section'    => 'fenchi_footer',
        'settings'   => 'fenchi_theme_options_footer_linkedin',
    ));
    
    
   

     
}
add_action('customize_register', 'fenchi_footer_customize_register');
?>