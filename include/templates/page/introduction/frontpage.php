<?php while( have_posts() ): ?>
    <?php 
        the_post();
    ?>
                        
        <?php if( has_post_thumbnail() ): ?>
                            <div id="introduction-page-cover">
                                
                            <?php if( wp_is_mobile() ): ?>
                                <?php // Mobile version of the thumbnail ?>
                                <img class="header-cover-image" 
                                     src="<?php echo get_the_post_thumbnail_url( $element->ID, 'mobile-thumbnail' ); ?>" 
                                     loading="lazy"/>
                            <?php else: ?>
                                <?php // Desktop version of the thumbnail ?>
                                <img class="header-cover-image" 
                                     src="<?php echo get_the_post_thumbnail_url( $element->ID, 'full-desktop-thumbnail' ); ?>" 
                                     loading="lazy"/>
                            <?php endif; ?>
                                                
                                
                                <div class="elements"> 
                                    <div class="introduction aligns-items-center">
                                        <div class="header">
                                        
                                                <h1 class="title">
                                                    <?php echo get_bloginfo('name'); ?>
                                                </h1>

                                                <p class="description">
                                                    <?php echo get_bloginfo('description'); ?>
                                                </p>
                                                
                                                <?php if( get_field('shortcut-contact')): ?> 
                                                                <a href="<?php the_field('shortcut-contact') ?>" 
                                                                   class="short-button"> 
                                                                    <?php if( get_field( 'shortcut-contact-title' ) ): ?>
                                                                            <?php the_field('shortcut-contact-title'); ?>
                                                                    <?php else: ?>
                                                                            Contact
                                                                    <?php endif; ?>
                                                                </a>
                                                <?php endif; ?>

                                                <?php if( get_field('shortcut-feedback')): ?> 
                                                                <a href="<?php the_field('shortcut-feedback') ?>" 
                                                                   class="short-button">
                                                                    <?php if( get_field( 'shortcut-feedback-title' ) ): ?> 
                                                                        <?php the_field('shortcut-feedback-title') ?>
                                                                    <?php else: ?>
                                                                        Feedback
                                                                    <?php endif; ?>
                                                                </a>
                                                <?php endif; ?>
                                        </div>

                                    </div>
                                </div>
                            </div>
        
                    <?php endif; ?>
<?php endwhile;?>

<?php wp_reset_postdata(); ?>