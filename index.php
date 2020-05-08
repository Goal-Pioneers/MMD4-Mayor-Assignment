<?php get_header(); ?>
        <main> 
            

        <?php 
        if ( is_front_page()):
        ?>
            <div id="presentation-cover">
            </div>
        <?php 
           endif;
        ?>

        <?php 
                require get_parent_theme_file_path('/include/template-posts.php');
        ?>

        </main>

<?php get_footer(); ?>
    