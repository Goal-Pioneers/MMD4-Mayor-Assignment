<?php if( get_field('section-content-about-us')): ?>
        <section class="base-section cover-section"> 
                <h2> 
                        <?php the_field('section-title-about-us'); ?>
                </h2>

                <?php 
                        $post = get_page_by_title('om os'); 
                ?>
                <?php if( !is_null( $post ) ): ?> 
                        <div class="frontpage-about-us"> 
                                <p>
                                        <?php echo get_the_excerpt( $post->ID ); ?>
                                </p>
                        </div>

                        <div class="ui-middle-item"> 
                                <a class="ui-button" href="<?php echo get_post_permalink( $post->ID ); ?>">
                                        Læs mere
                                </a>
                        </div>
                <?php 
                        endif;
                        wp_reset_postdata(); 
                ?>
        </section>
<?php endif; ?>
