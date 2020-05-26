<!DOCTYPE html>

<html <?php language_attributes(); ?> id="view">
    <head>
        <?php require get_parent_theme_file_path('/include/templates/generic/head.php'); ?>

        <?php if( is_front_page() ): ?>
            
        <?php endif; ?>

        <?php if( is_page() ): ?>
            <meta name="description" content="<?php echo the_excerpt(); ?>" />
            <meta name="DC.title" content="<?php echo the_title(); ?>" />
            <meta name="DC.language" content="da" />
            <meta name="keywords" content="" />
        <?php endif; ?>

        <?php if( is_404() ): ?>
            <meta name="DC.title" content="Fejl 404, vi kunne ikke finde indholdet du søgte." />
            <meta name="description" content="Fejl 404." />
            <meta name="DC.language" content="da" />
        <?php endif; ?>
    </head>

    <body onload="">
        <header id="header-static-navigation">
            <?php // Static header for desktops ?>
            <div class="main-section hide-on-mobile">
                <!-- Logo -->
                <div> 

                </div>

                <?php  
                    if ( has_nav_menu( 'ui-navigation-header-menu' ) )
                    {
                        wp_nav_menu(
                            array(
                                'theme_location' => 'ui-navigation-header-menu',
                                'menu_id' => 'header-navigation',
                                'menu_class' => 'nav',
                                'item_spacing' => 'preserve',
                                'walker' => new ui_menu_walker_header_walker()
                            )
                        );  
                    }
                ?>
            </div>
            
            <?php if( is_page() ): ?>
                <?php require get_parent_theme_file_path('/include/templates/page/component-introduction.php'); ?>
            <?php endif;?>
            
            <?php if( is_single() ): ?>
                <?php require get_parent_theme_file_path('/include/templates/post/component-introduction.php'); ?>
            <?php endif; ?>

            <?php if( ! is_front_page() ): ?>
                <?php require get_parent_theme_file_path('/include/templates/header/breadcrumb.php'); ?>
            <?php endif; ?>
        </header>

        <?php // Header for mobile devices ?>
        <header id="header-mobile-navigation" 
                class="hide-on-desktop"> 

        </header>
        
