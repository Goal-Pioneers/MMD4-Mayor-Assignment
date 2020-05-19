<?php get_header(); ?>

                <main id="main-view"> 
                                <?php if( is_404() ): ?>
                                        <?php require get_parent_theme_file_path('/include/templates/page/component-404.php'); ?>
                                <?php endif; ?>
                        

                        <?php while( have_posts() ): ?>
                                <?php 
                                the_post();
                                ?>
                        
                                <?php 
                                        // is frontpage
                                ?>
                                <?php 
                                        if( is_front_page() ):
                                ?>
                                        <?php require get_parent_theme_file_path('/include/templates/specifics/frontpage/component-products.php'); ?>
                                        <?php require get_parent_theme_file_path('/include/templates/specifics/frontpage/component-services.php'); ?>
                                                
                                        <?php require get_parent_theme_file_path('/include/templates/specifics/frontpage/component-articles.php'); ?>
                                        <?php require get_parent_theme_file_path('/include/templates/specifics/frontpage/component-about-us.php'); ?>
                                        <?php require get_parent_theme_file_path('/include/templates/specifics/frontpage/component-contact.php'); ?>
                                <?php 
                                        endif; 
                                ?>

                                <?php 
                                        // is a post
                                ?>
                                <?php 
                                        if( is_singular() ):
                                ?>
                                
                                        <?php require get_parent_theme_file_path('/include/templates/post/component-layout.php'); ?>
                                <?php endif; ?>

                        <?php endwhile; ?>
                </main>
                


<?php get_footer(); ?>
    