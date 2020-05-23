<?php get_header(); ?>
        <main id="main-view"> 
                <?php 
                        $post = get_page_by_title('ydelser');

                        $children = get_children( $post->ID );
                ?>

                <?php if( !( $children == null ) ): ?>
                        <?php $n = 0; ?>

                        <?php foreach( $children as &$child ): ?>
                                <?php 
                                
                                ?>
                                
                                <li class=""> 
                                        <a href="<?php echo get_post_permalink( $child->ID ); ?>">
                                                <div class="">
                                                        <?php if( $child->post_type == 'page' ): ?>
                                                                <h3>
                                                                        <?php echo get_the_title( $child->ID ); ?> 
                                                                </h3>
                                                                
                                                        <?php endif; ?>
                                                </div>
                                        </a>
                                </li>
                        <?php endforeach; ?>
                <?php endif; ?>
        </main>

<?php get_footer(); ?>
    