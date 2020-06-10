<?php while( have_posts() ): ?>
    <?php 
        the_post();
    ?>

    <div id="introduction-page-cover">
        <?php if( wp_is_mobile() ): ?>
            <?php // Mobile version of the thumbnail ?>
            <?php the_post_thumbnail( 'mobile-thumbnail', 
                                   array('class' => 'header-cover-image') ); ?>
        <?php else: ?>
            <?php // Desktop version of the thumbnail ?>
            <?php the_post_thumbnail( 'full-desktop-thumbnail', 
                                   array('class' => 'header-cover-image') ); ?>
        <?php endif; ?>
                                
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