<?php get_header(); ?>
        <main> 
            <p> Contact </p>
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


        </main>

<?php get_footer(); ?>
    