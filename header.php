<!DOCTYPE html>

<html <?php language_attributes(); ?> >

    <head>
        <meta charset="<?php bloginfo( 'charset' );?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link rel="profile" href="http://gmpg.org/xfn/11">

        <?php 
            wp_head();
        ?>

    </head>

    <body>
        <header>
            <?php 
                if ( has_nav_menu( 'header-menu' ) )
                {
                    wp_nav_menu(
                        array(
                            'theme_location' => 'header-menu',
                            'menu_class' => 'nav',
                            'item_spacing' => 'preserve'
                        )
                    );  
                };
            ?>
        </header>
