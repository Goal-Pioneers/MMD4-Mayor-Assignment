<?php get_header(); ?> 

        <main id="main-view"> 
                <?php 
                        $post = get_page_by_title('ydelser');

                        $children = get_children( $post->ID );
                ?>

                <?php ?>

                <section class="base-section"> 
                        <?php echo the_content(); ?>
                </section>

                <?php ?>

                <?php if( !( $children == null ) ): ?>
                        <ul class="services"> 
                                <?php foreach( $children as &$child ): ?>
                                        <?php if( $child->post_type == 'page' ): ?>
                                                <li class="service-card"> 
                                                                <h3>
                                                                        <?php echo get_the_title( $child->ID ); ?> 
                                                                </h3>

                                                                <p> <?php echo get_the_excerpt( $child->ID ); ?> </p>

                                                                <div> 
                                                                        <a href="<?php echo get_post_permalink( $child->ID ); ?>"> 
                                                                                Læs mere om det
                                                                        </a>
                                                                </div>
                                                </li>
                                        <?php endif; ?>
                                <?php endforeach; ?>
                        </ul>
                <?php endif; ?>
        </main>

<?php get_footer(); ?>
    