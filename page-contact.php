<?php get_header(); ?>
        <main> 
                <?php 
                        while( have_posts() ):
                ?>
                        <?php 
                            the_post();
                        ?>

                        <!-- Actully page content -->
                        <div id="page-contact"> 
                            <div> 
                                <?php
                                    the_content();
                                ?>
                            </div>
                        </div>
                <?php 
                    endwhile;
                ?>


        </main>

<?php get_footer(); ?>
    