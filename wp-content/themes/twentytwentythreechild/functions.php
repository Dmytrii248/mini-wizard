<?php

include('mini-wizard-shortcode.php');


function twenty__twenty__three__child_theme_enqueue_scripts_styles() {

    wp_register_style('r-test-bootstrap-style', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css', array(), '0.1', 'all');
    wp_register_style('r-test-inter-font', get_stylesheet_directory_uri(). '/assets/fonts/inter/Inter-VariableFont_opsz,wght.woff2', array(), 'all');
    wp_register_script('r-test-bootstrap-script', get_stylesheet_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array(), '1.0', true);
    wp_register_script('r-test-mini-wizard-js', get_stylesheet_directory_uri() . '/mini-wizard/mini-wizard.js', array(), '0.1', true);
    wp_register_style('r-test-custom-style', get_stylesheet_directory_uri() . '/assets/css/style.css', array(), '0.1', 'all');

    wp_enqueue_style('r-test-bootstrap-style');
    wp_enqueue_style('r-test-inter-font');
    wp_enqueue_style('r-test-custom-style');
    wp_enqueue_script('r-test-bootstrap-script');
    wp_enqueue_script('r-test-mini-wizard-js');

    wp_enqueue_style('r-test-parent-style', get_template_directory_uri() . '/style.css');

}



add_action( 'wp_enqueue_scripts', 'twenty__twenty__three__child_theme_enqueue_scripts_styles' );