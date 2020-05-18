<?php get_header(); ?>
        <main> 
                <?php while( have_posts() ): ?>
                        <?php 
                                the_post();
                        ?>

                        <div> 
                                <?php the_content(); ?>
                        </div>

                        <section class="base-section cover-section" id="component-archive-pages"> 
                                <h2> 
                                        Pages 
                                </h2>

                                <ul> 
                                        <?php 
                                                $all = get_pages();

                                                foreach($all as &$current)
                                                {
                                                        echo "<a href='" . $current ->guid . "'>";
                                                                echo "<li>";
                                                                        echo $current->post_title;
                                                                echo "</li>";
                                                        echo "</a>";
                                                        
                                                }
                                        ?>
                                </ul>
                        </section>
                        
                        <section class="base-section" id="component-archive-posts"> 
                                <h2> 
                                        Archive 
                                </h2>

                                <ul> 
                                        <?php 
                                                $all = get_posts();

                                                foreach($all as &$current)
                                                {
                                                        echo "<a href='" . $current ->guid . "'>";
                                                                echo "<li>";
                                                                        echo $current->post_title;
                                                                echo "</li>";
                                                        echo "</a>";
                                                        
                                                }
                                        ?>
                                </ul>


                        </section>
                        
        
                <?php endwhile; ?>
        </main>

<?php get_footer(); ?>
    