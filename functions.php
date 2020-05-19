<?php

require get_parent_theme_file_path('/include/menu/menu-header.php');
require get_parent_theme_file_path('/include/menu/menu-base.php');
require get_parent_theme_file_path('/include/menu/menu-footer.php');
require get_parent_theme_file_path('/include/menu/menu-some.php');

//
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

function register_menus()
{
    register_nav_menus( array( 'ui-navigation-header-menu' => __( 'Header Main Area Menu', 'theme-menu' ),
                               'ui-navigation-footer-menu' => __( 'Footer Main Area Menu', 'theme-menu' ),
                               'ui-navigation-social-menu' => __( 'Social media menu', 'theme-menu' ) ) );
    
};

// Register stylesheets in use
function goalpioneers_register_styles() 
{

    wp_enqueue_style( 'style', 
                        get_stylesheet_uri(), 
                        null, 
                        null, 
                        null );

};

//
function register_widget_init()
{
    register_sidebar(
        array(
            'name' => 'footer-area',
            'before_widget' => '<div class = "widgetizedArea">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
        ) 
    );

};

$is_debugging = true;

function getDebugState()
{
    return $GLOBALS["is_debugging"];
}


// Setup Widget Areas
add_action('widgets_init', 'register_widget_init');

add_action( 'after_setup_theme', 'goalpioneers_theme_support' );

add_action( 'wp_enqueue_scripts', 'goalpioneers_register_styles' );

?>