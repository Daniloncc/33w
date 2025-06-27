<?php function theme_33w_customize_register($wp_customize)
// configuration des nouveau panneaux du customizer
{
    // Le code pour ajouter des sections, des réglages et des contrôles ira ici.
    $wp_customize->add_section('hero_section', array(
        'title' => __('Section Hero - Accueil', 'theme_33w'),
        'priority' => 30,
    ));

    $wp_customize->add_setting('hero_title', array(
        'default' => __('Bienvenue sur mon site', 'theme_33w'),
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control('hero_title', array(
        'label' => __('Hero Title', 'theme_33w'),
        'section' => 'hero_section',
        'type' => 'text',
    ));
}

add_action('customize_register', 'theme_33w_customize_register');
