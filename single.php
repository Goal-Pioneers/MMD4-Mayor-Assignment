<?php get_header(); ?>

        <main> 
                <?php 
                        while( have_posts() ):
                ?>
                        <?php 
                            the_title();
                            the_post();
                        ?>

                        <?php
                            the_content();
                        ?>
                <?php 
                    endwhile;
                ?>
        </main>

<?php get_footer(); ?>
    