        <section class="base-section cover-section"> 
                <?php 
                        $post = get_page_by_title('om os'); 
                ?>

                <?php if( !is_null( $post ) ): ?> 
                        <h2> 
                                <?php echo get_the_title( $post->ID ); ?>
                        </h2>
                
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