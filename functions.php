<?php 

function halim_init(){

    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'title-tag' );

    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'halim' ),
    ) );


}

add_action('after_setup_theme', 'halim_init');


function halim_scripts(){

    // Styles

    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style('fonts', '//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), '1.0.0', 'all');
    wp_enqueue_style('carousel', get_template_directory_uri() . '/assets/css/owl.carousel.css', array(), '1.0.0', 'all');
    wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0', 'all');
    wp_enqueue_style('responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), '1.0.0', 'all');

    // Scripts

    wp_enqueue_script( 'popper', get_template_directory_uri() . '/assets/js/popper.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'magnific', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'isotope', get_template_directory_uri() . '/assets/js/isotope.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'imageloaded', get_template_directory_uri() . '/assets/js/imageloaded.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'counterup', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'waypoint', get_template_directory_uri() . '/assets/js/waypoint.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true );
}

add_action('wp_enqueue_scripts', 'halim_scripts');
















?>