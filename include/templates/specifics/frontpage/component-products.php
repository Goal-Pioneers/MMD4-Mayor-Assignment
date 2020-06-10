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

                                <?php if( get_post_type( $child->ID ) == 'page' ): ?>
                                  <li class="product">
                                          <a href="<?php echo get_post_permalink( $child->ID ); ?>">
                                                  <div class="product-container">
                                                          <img src="<?php echo get_the_post_thumbnail_url( $child->ID ); ?>"
                                                               class="image" 
                                                               loading="lazy" />
                                                          <h3>
                                                                  <?php echo get_the_title( $child->ID ); ?>
                                                          </h3>
                                                  </div>
                                          </a>
                                  </li>

                                  <?php $n = $n + 1; ?>
                                <?php endif; ?>
                        <?php endforeach; ?>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
        </ul>
</section>
