<?php
 
 
function goalpioneers_theme_support() 
{
    // Allows wordpress to set the <title> area
    add_theme_support( 'title-tag' );
    
    // Adds Support for wordpress to handle feed links
    add_theme_support( 'automatic-feed-links' );

    // Adds Support for wordpress to handle thumbnails
    add_theme_support( 'post-thumbnails' );

    // Registration
    register_menus();

};

function goalpioneers_register_styles() 
{

};

function register_widget_init()
{

};

function register_menus()
{
    register_nav_menus( array( 'header-menu' => __( 'Header Main Area Menu', 'theme-menu' ),
                               'footer-menu' => __( 'Footer Main Area Menu', 'theme-menu' ),
                               'social-menu' => __( 'Social media menu', 'theme-menu' ), 
                               'misc-menu' => __( 'Misc menu', 'theme-menu' ), ) );

    
};

// Setup Widget Areas
add_action('widgets_init', 'register_widget_init');
add_action( 'after_setup_theme', 'goalpioneers_theme_support' );

add_action( 'wp_enqueue_scripts', 'goalpioneers_register_styles' );

?>