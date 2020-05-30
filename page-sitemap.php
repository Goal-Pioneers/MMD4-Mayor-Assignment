<?php get_header(); ?> 

        <main id="main-view"> 
                <?php while( have_posts() ): ?>
                        <?php 
                                the_post();
                        ?>

                        <section class="base-section"> 
                                <?php the_content(); ?>
                        </section>

                        <section class="base-section cover-section">
                                <div id="component-archive-pages"> 
                                        <h2> 
                                                Arkiv - Sider
                                        </h2>

                                        <ul> 
                                                <?php 
                                                        $all = get_pages();
                                                        foreach( $all as &$current )
                                                        {
                                                                echo "<a href='" . $current ->guid . "'>";
                                                                        echo "<li>";
                                                                                echo $current->post_title;
                                                                        echo "</li>";
                                                                echo "</a>";
                                                                
                                                        }
                                                        wp_reset_postdata();
                                                ?>
                                        </ul>
                                </div> 
                        </section>
                        
                        <section class="base-section"> 
                                <div id="component-archive-posts"> 
                                        <h2> 
                                                Arkiv - Post 
                                        </h2>

                                        <ul> 
                                                <?php 
                                                        $all = get_posts();
                                                        foreach( $all as &$current )
                                                        {
                                                                echo "<a href='" . $current ->guid . "'>";
                                                                        echo "<li>";
                                                                                echo $current->post_title;
                                                                        echo "</li>";
                                                                echo "</a>";       
                                                        }
                                                        wp_reset_postdata();
                                                        ?>
                                        </ul>
                                </div>

                        </section>
                        
        
                <?php endwhile; 
                      wp_reset_postdata();
                ?>
        </main>

<?php get_footer(); ?>
    