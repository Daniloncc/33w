<?php

function mon_theme_supports() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('menus');
    add_theme_support('custom-logo', array(
        'height'      => 150,
        'width'       => 150,
        'flex-height' => true,
        'flex-width'  => true,
    ));
}
add_action( 'after_setup_theme', 'mon_theme_supports' );

// sert a ajouter les links dans la page, css...
function theme_tp_enqueue_styles()
{
    //
    wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css');
    wp_enqueue_style('main-style', get_stylesheet_uri());
}
//ecouteur == addEventListener,  permet decouter un evenement
// wp_enqueue cets un okak qui si manisfeste 
add_action('wp_enqueue_scripts', 'theme_tp_enqueue_styles');

