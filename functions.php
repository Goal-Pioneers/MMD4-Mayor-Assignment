<?php
 
 
function goalpioneers_theme_support() 
{

}
 
add_action( 'after_setup_theme', 'goalpioneers_theme_support' );


function goalpioneers_register_styles() 
{
}

add_action( 'wp_enqueue_scripts', 'goalpioneers_register_styles' );

?>