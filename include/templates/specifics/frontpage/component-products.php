<section class="base-section index-products-showcase"> 
        <h2> 
                Produkter
        </h2>

        <ul> 
                <?php 
                        $post = get_page_by_title('produkter');

                        $children = get_children( $post->ID );
                ?>
                <?php if( !( $children == null ) ): ?>
                        <?php $n = 0; ?>

                        <?php foreach( $children as &$child ): ?>
                                <?php 
                                        if ( $n == 3 )
                                        {
                                                break;
                                        }
                                ?>
                                
                                <li class="product"> 
                                        <a href="<?php echo get_post_permalink( $child->ID ); ?>">
                                                <div class="product-container">
                                                        <img src="<?php echo get_the_post_thumbnail_url( $child->ID ); ?>" class="image" />
                                                         
                                                        <h3>
                                                                <?php echo get_the_title( $child->ID ); ?> 
                                                        </h3>

                                                        <p>
                                                                <?php echo get_the_excerpt( $child->ID ); ?>
                                                        </p>
                                                </div>
                                        </a>
                                </li>

                                <?php $n = $n + 1; ?>
                        <?php endforeach; ?>
                <?php endif; ?>
        </ul>
</section>
                