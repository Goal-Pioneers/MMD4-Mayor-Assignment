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

    add_theme_support('custom-logo', array(
        'height'      => 400,
        'width'       => 400,
        
        'flex-height' => true,
        'flex-width'  => true,

        'header-text' => array( 'site-title', 'site-description' ) ) 
    );

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

    wp_enqueue_style( 'fonts', 
                        get_template_directory_uri() . '/content/font/stylesheet.css', 
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

function theme_scripts()
{
    
    wp_enqueue_script( 'jquery-3.5.1', 
                        get_template_directory_uri() . '/content/libraries/javascript/jquery-3.5.1.min.js', 
                        null, 
                        null, 
                        false );
    
    wp_enqueue_script( 'popper',
                        get_template_directory_uri() . '/content/libraries/javascript/popper.min.js', 
                        null, 
                        null, 
                        false );

    wp_enqueue_script( 'bootstrap',
                        get_template_directory_uri() . '/content/libraries/javascript/bootstrap.min.js', 
                        null, 
                        null, 
                        false );
                        
    wp_enqueue_script( 'ui-scripts', 
                        get_template_directory_uri() . '/content/javascript/ui.js', 
                        null, 
                        null, 
                        false );

     wp_enqueue_script( 'fontawesome', 
                        get_template_directory_uri() . '/content/libraries/fontawesome/js/all.js', 
                        null, 
                        null, 
                        false );

}


// Setup Widget Areas
add_action('widgets_init', 'register_widget_init');

add_action( 'after_setup_theme', 'goalpioneers_theme_support' );

add_action( 'wp_enqueue_scripts', 'goalpioneers_register_styles' );
add_action( 'wp_enqueue_scripts', 'theme_scripts' );

?>