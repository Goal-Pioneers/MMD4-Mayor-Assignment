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
                        if( is_front_page() ):
                ?>
                        <?php require get_parent_theme_file_path('/include/templates/specifics/frontpage/component-products.php'); ?>
                        <?php require get_parent_theme_file_path('/include/templates/specifics/frontpage/component-articles.php'); ?>
                        <?php require get_parent_theme_file_path('/include/templates/specifics/frontpage/component-contact.php'); ?>
                <?php 
                        endif; 
                ?>

                <?php 
                        // is a post
                        if( is_singular() && !is_front_page() ):
                ?>
                <?php require get_parent_theme_file_path('/include/templates/post/component-layout.php'); ?>
                <?php endif; ?>

        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
</main>

<?php get_footer(); ?>
    