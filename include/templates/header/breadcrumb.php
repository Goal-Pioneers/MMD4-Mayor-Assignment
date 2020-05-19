<?php while( have_posts() ):
the_post();
                
$currentId = $post->ID; 
$ancestor = get_post_ancestors( $currentId );
?>

<?php if(! count( $ancestor ) == 0 ): ?>
    <nav class="component-navigation-breadcrumb"> 
        <ol> 
            <?php
            foreach( $ancestor as &$value )
            {
                $title = get_the_title( $value );
                $url = get_post_permalink( $value );

                echo "<li>";
                echo "<a href='" . $url . "'>";
                echo $title;
                echo "</a>";
                echo "</li>";
            }
            ?>
        </ol>
    </nav>
<?php endif;?>
        
<?php endwhile; ?>