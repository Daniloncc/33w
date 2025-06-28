<?php function theme_33w_customize_register($wp_customize)
// configuration des nouveau panneaux du customizer
{
    // Le code pour ajouter des sections, des réglages et des contrôles ira ici.
    $wp_customize->add_section('hero_section', array(
        'title' => __('Section Hero - Accueil', 'theme_33w'),
        'priority' => 30,
    ));
    // Auteur:
    // config du champs personalise
    $wp_customize->add_setting('hero_auteur', array(
        'default' => __('Bienvenue sur mon site', 'theme_33w'),
        'sanitize_callback' => 'sanitize_text_field'
    ));
    // config du controlleur du champs
    $wp_customize->add_control('hero_auteur', array(
        'label' => __('Auteur du theme', 'theme_33w'),
        'section' => 'hero_section',
        'type' => 'text',
    ));

    // Adresse:

    // config du champs personalise
    $wp_customize->add_setting('hero_adresse', array(
        'default' => __("700 n'importe ou", 'theme_33w'),
        'sanitize_callback' => 'sanitize_text_field'
    ));
    // config du controlleur du champs
    $wp_customize->add_control('hero_adresse', array(
        'label' => __('Adresse', 'theme_33w'),
        'section' => 'hero_section',
        'type' => 'text',
    ));

    // Courriel:

    // config du champs personalise
    $wp_customize->add_setting('hero_courriel', array(
        'default' => __("email@gmail.com", 'theme_33w'),
        'sanitize_callback' => 'sanitize_text_field'
    ));
    // config du controlleur du champs
    $wp_customize->add_control('hero_courriel', array(
        'label' => __('Courriel', 'theme_33w'),
        'section' => 'hero_section',
        'type' => 'text',
    ));


    ////////////////// Pied de page

    $wp_customize->add_section('footer_section', array(
        'title' => __('Section Pied-page', 'theme_33w'),
        'priority' => 30,
    ));

    //  // config du champs personalise
    //  $wp_customize->add_setting('hero_courriel', array(
    //     'default' => __("email@gmail.com", 'theme_33w'),
    //     'sanitize_callback' => 'sanitize_text_field'
    // ));
    // // config du controlleur du champs
    // $wp_customize->add_control('hero_courriel', array(
    //     'label' => __('Courriel', 'theme_33w'),
    //     'section' => 'hero_section',
    //     'type' => 'text',
    // ));


    ////////////////// img -- obs jai mit mon img directement sur HTML

    $wp_customize->add_setting('hero_background', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_background', array(
        'label' => __('Image annarier plan', 'theme_33w'),
        'section' => 'hero_section',
    )));
}

add_action('customize_register', 'theme_33w_customize_register');
