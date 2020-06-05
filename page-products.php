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
                                                                <div class="page-product-element">
                                                                        <div class="page-product-image-container"> 
                                                                                <div class="image-container"> 
                                                                                        <img src="<?php echo get_the_post_thumbnail_url( $child->ID ); ?>" 
                                                                                             class="image" />
                                                                                </div>
                                                                        </div>
                                                                                
                                                                        <div class="page-product-text-container"> 
                                                                                <h3>
                                                                                        <?php echo get_the_title( $child->ID ); ?> 
                                                                                </h3>

                                                                                <p>
                                                                                        <?php echo get_the_excerpt( $child->ID ); ?>
                                                                                </p>
                                                                        </div>

                                                                        <div class="page-product-actions-container"> 
                                                                                <a class="btn btn-primary" href="<?php echo get_post_permalink( $child->ID ); ?>">
                                                                                        Læs mere
                                                                                </a>
                                                                        </div>
                                                                </div>

                                                </li>
                                        <?php endif; ?>
                                        
                                <?php endforeach;
                                      wp_reset_postdata(); 
                                ?>
                        </ul>
                <?php endif; ?>
        </main>

<?php get_footer(); ?>
    