
<section id="news-component" class=""> 
        <h2> 
                Artikler
        </h2>

        <ul class="articles-container"> 
                <span class="listed">
                        <?php 

                        ?> 

                        <?php 
                                $args_post = 
                                        array(
                                                "posts_per_page" => 4,
                                                "paged" => 1,
                                                "tax_query" => array(
                                                        array(
                                                                "taxonomy" => "category",
                                                                "field"    => "slug",
                                                                "terms"    => "article",
                                                        )
                                                ),
                                                "orderBy" => "post_date",
                                                "order" => "desc",
                                                "post_type" => "post",
                                                "post_status" => "publish"
                                        );

                                $posts_array = get_posts( $args_post );
                        ?>

                        <?php foreach( $posts_array as &$element ): ?>
                                <li class="entity">
                                        <a href="<?php echo the_permalink( $element->ID ); ?>"> 
                                                <div> 
                                                        <img src="<?php echo get_the_post_thumbnail_url( $element->ID, 'preview-thumbnail' ); ?>" 
                                                             loading="lazy"/>                                                
                                                        
                                                        <div class="text">
                                                                <p>
                                                                <?php $elements = get_the_category( $element->ID );?>
                                                                        <?php for( $idx = 0; 
                                                                                   $idx < count( $elements ); 
                                                                                   $idx++ ): ?>
                                                                                <?php $category = $elements[$idx];?>
                                                                                
                                                                                <?php 
                                                                                        if( $idx == count( $elements ) - 1)
                                                                                        {
                                                                                                echo $category->name;
                                                                                        }
                                                                                ?>
                                                                        <?php endfor; ?>
                                                                </p>

                                                                <h3> 
                                                                        <?php echo get_the_title( $element->ID ); ?>
                                                                </h3>
                                                                
                                                        </div>
                                                </div>
                                        </a>
                                </li>
                        <?php endforeach;?>

                        <?php wp_reset_postdata(); ?>
                </span>
        </ul>
</section>