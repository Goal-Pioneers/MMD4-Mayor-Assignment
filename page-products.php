<?php get_header(); ?> 

        <main id="main-view">  
                <?php 
                        $post = get_page_by_title('produkter');

                        $children = get_children( $post->ID );
                ?>

                <?php if( !( $children == null ) ): ?>
                        <ul class="page-products-page"> 

                                <?php foreach( $children as &$child ): ?>
                                
                                        <?php if( get_post_type( $child->ID ) == 'page' ): ?>
                                                <li class=""> 
                                                        <a href="<?php echo get_post_permalink( $child->ID ); ?>">
                                                                
                                                                <div class="page-product-element">
                                                                        <img src="<?php echo get_the_post_thumbnail_url( $child->ID ); ?>" 
                                                                             class="image" />
                                                                        
                                                                        <div class="product-text-container"> 
                                                                                <h3>
                                                                                        <?php echo get_the_title( $child->ID ); ?> 
                                                                                </h3>

                                                                                <p>
                                                                                        <?php echo get_the_excerpt( $child->ID ); ?>
                                                                                </p>
                                                                        </div>
                                                                </div>

                                                        </a>
                                                </li>
                                        <?php endif; ?>
                                        
                                <?php endforeach;
                                      wp_reset_postdata(); 
                                 ?>
                        </ul>
                <?php endif; ?>
        </main>

<?php get_footer(); ?>
    