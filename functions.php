<?php
require get_parent_theme_file_path('/include/menu/menu-header.php');
require get_parent_theme_file_path('/include/menu/menu-base.php');
require get_parent_theme_file_path('/include/menu/menu-footer.php');
require get_parent_theme_file_path('/include/menu/menu-some.php');

//
if (! function_exists( 'goalpioneers_theme_support' ) )
{
    function goalpioneers_theme_support()
    {
        // Allows wordpress to set the <title> area
        add_theme_support( 'title-tag' );

        // Adds Support for wordpress to handle feed links
        add_theme_support( 'automatic-feed-links' );

        // Adds Support for wordpress to handle thumbnails
        add_theme_support( 'post-thumbnails' );

        add_theme_support( 'custom-logo',

        array(
            'height'      => 150,
            'width'       => 150,

            'flex-height' => true,
            'flex-width'  => true,

            'header-text' => array( 'site-title', 'site-description' ) 
            )
        );

        // Registration
        register_menus();
    };

    add_action( 'after_setup_theme', 'goalpioneers_theme_support' );
}
else 
{

};

if (! function_exists( 'theme_scripts' ) )
{
    function theme_scripts()
    {

        wp_enqueue_script( 'jquery-3.5.1',
                            get_template_directory_uri() . '/content/libraries/javascript/jquery-3.5.1.min.js',
                            null,
                            null,
                            false );

        wp_enqueue_script( 'bootstrap',
                            get_template_directory_uri() . '/content/libraries/javascript/bootstrap.min.js',
                            null,
                            null,
                            false );

        wp_enqueue_script( 'vue',
                            get_template_directory_uri() . '/content/libraries/javascript/vue.min.js',
                            null,
                            null,
                            false ); 
        
        remove_action('wp_head', '_admin_bar_bump_cb');
    }

    add_action( 'wp_enqueue_scripts', 'theme_scripts' );
}
else 
{

};

    function register_menus()
{
        register_nav_menus( array( 'ui-navigation-header-menu' => __( 'Header Main Area Menu', 'theme-menu' ),
                                   'ui-navigation-footer-menu' => __( 'Footer Main Area Menu', 'theme-menu' ),
                                   'ui-navigation-social-menu' => __( 'Social media menu', 'theme-menu' ),
                                   'ui-navigation-misc-menu' => __( 'Misc menu', 'theme-menu' ) ) );

};

// Register stylesheets in use
if (! function_exists( 'goalpioneers_register_styles' ) )
{
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
    
    add_action( 'wp_enqueue_scripts', 'goalpioneers_register_styles' );
}
else 
{
    // Already Exists ->

}

//
if (! function_exists( 'register_widget_init' ) )
{
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
    
    add_action('widgets_init', 'register_widget_init');
}
else 
{
    // Error -> Function already exist
}

// Removes the [...] that is appended to exerpts, when using the_exerpt() function
function goalpioneers_excerpt_more( $more )
{
    return '';
}

add_filter('excerpt_more', 'goalpioneers_excerpt_more');


// Setup Widget Areas



?>
