<?php get_header(); ?>
        <main> 
            <nav> 
                <?php 
                    if ( has_nav_menu( 'ui-navigation-social-menu' ) )
                    {
                        wp_nav_menu(
                            array(
                                'theme_location' => 'ui-navigation-social-menu',
                                'menu_class' => 'nav',
                                'item_spacing' => 'preserve',
                                'walker' => new ui_menu_walker_some_walker()
                            )
                        );  
                    };
                ?>
            </nav>

        <?php 
                   if ( is_front_page()):
        ?>
        

                <?php 
                        while( have_posts() ):
                ?>
                        <?php 
                            the_post();
                        ?>

                        <!-- Actully page content -->
                        <div> 
                            <h1> 
                                <?php the_title(); ?>
                            </h1>
                                        
                            <?php
                              the_content();
                            ?>
                        </div>
                <?php 
                    endwhile;
                ?>

        <?php 
           endif;
        ?>

        </main>

<?php get_footer(); ?>
    