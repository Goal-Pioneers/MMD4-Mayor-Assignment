<?php get_header(); ?>
        <main> 
                <?php while( have_posts() ): ?>
                        <?php 
                            the_post();
                        ?>
                
                        <?php 
                                if( is_front_page() ):
                        ?>
                        
                         <?php require get_parent_theme_file_path('/include/templates/frontpage/component-products.php'); ?>
                         <?php require get_parent_theme_file_path('/include/templates/frontpage/component-services.php'); ?>
                        
                         <?php require get_parent_theme_file_path('/include/templates/frontpage/component-articles.php'); ?>
                         <?php require get_parent_theme_file_path('/include/templates/frontpage/component-about-us.php'); ?>
                         <?php require get_parent_theme_file_path('/include/templates/frontpage/component-contact.php'); ?>
                        <?php endif; ?>
                
                

                
               

                
                
                <?php endwhile; ?>
        </main>

<?php get_footer(); ?>
    