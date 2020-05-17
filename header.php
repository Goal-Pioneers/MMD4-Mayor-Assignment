<!DOCTYPE html>

<html <?php language_attributes(); ?> >

    <head>
        <meta charset="<?php bloginfo( 'charset' );?>">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link rel="profile" href="http://gmpg.org/xfn/11">

        <!-- -->
        <META HTTP-EQUIV="pragma" CONTENT="no-cache">

        <link href="https://fonts.googleapis.com/css2?family=Comfortaa&family=Open+Sans:wght@300;400&display=swap" rel="stylesheet"> 

        <?php 
            wp_head();
        ?>
    </head>

    <body>
        <header>
            <div class="main-section">

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

            <?php if(is_front_page()): ?>
                <div id="introduction-page-cover">
                    
                <?php if(has_post_thumbnail()): ?> 
                        <?php the_post_thumbnail( 'full', array('class' => 'header-cover-image') ); ?>
                    <?php endif;?>
                
                    <div class="elements"> 
                        <div class="introduction aligns-items-center">
                            <div class="header">
                                <h1 class="title"><?php echo get_bloginfo('name'); ?></h1>
                                <p class="description"><?php echo get_bloginfo('description'); ?></p>
                            </div>
                        </div>
                    </div>
                     
                </div>

            <?php endif; ?>

          
        </header>
