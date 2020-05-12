<?php 
                        while( have_posts() ):
                ?>
                        <?php 
                            the_post();
                        ?>

                        <!-- Actully page content -->
                        <div class="page-main-textual-area"> 
                            <h1> 
                                <?php the_title(); ?>
                            </h1>
                                        
                            <?php
                              the_content();
                            ?>
                        </div>
                <?php 
                    endwhile;
                ?>