<?php get_header(); ?> 

        <main id="main-view"> 
                <?php 
                        while( have_posts() ):
                ?>
                        <?php 
                            the_post();
                        ?>

                        <!-- Actully page content -->
                        <div id="page-contact"> 
                            <div class="ui-container"> 
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
    