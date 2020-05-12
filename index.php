<?php get_header(); ?>
        <main> 
            
                <!-- Presentation -->
                <?php 
                        if ( is_front_page()):
                ?>
                
                        <div id="presentation-cover">
                        </div>
                <?php 
                        endif;
                ?>

                
                <!-- Products -->
                <?php 
                        if ( is_front_page()):
                ?>
                        <div id="products">
                                <h1> 
                                        Produkter
                                </h1>
                        </div>
                <?php 
                        endif;
                ?>

                <!-- Services -->
                <?php 
                        if ( is_front_page()):
                ?>
                
                        <div id="services">
                                <h1> 
                                        Ydelser
                                </h1>
                        </div>
                <?php 
                        endif;
                ?>


                <!-- Base page -->
                <?php 
                        require get_parent_theme_file_path('/include/templates/template-posts.php');
                ?>

                <!-- About us -->
                 <?php 
                        if ( is_front_page()):
                ?>
                        <div id="about-us">
                                <h1> 
                                        Om os
                                </h1>
                        </div>
                <?php 
                        endif;
                ?>

                <!-- Press -->
                <?php 
                        if ( is_front_page()):
                ?>
                <div> 
                        <h1> 
                                Press
                        </h1>       

                        <div id="frontpage-press">
                                <!-- 1 -->
                                <div class="frontpage-container test1"> 

                                </div>
                                
                                <!-- 2 -->
                                <div class="frontpage-container test2"> 

                                </div>

                                <!-- 3 -->
                                <div class="frontpage-container test3"> 

                                </div>

                                <!-- 4 -->
                                <div class="frontpage-container test4"> 

                                </div>
                        </div>
                        
                </div>         
                <?php 
                        endif;
                ?>

        </main>

<?php get_footer(); ?>
    