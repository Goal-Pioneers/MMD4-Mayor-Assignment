<?php while( have_posts() ): ?>
    <?php 
        the_post();
    ?>

    <div id="introduction-page-cover">
        <?php the_post_thumbnail( 'full', 
                                   array('class' => 'header-cover-image') ); ?>
                                
        <div class="elements"> 
            <div class="introduction aligns-items-center">
                <div class="header">
                    <h1 class="title">
                        <?php the_title(); ?>
                    </h1>
                </div>
            </div>
        </div>
    </div>
<?php endwhile; ?>

<?php wp_reset_postdata(); ?>