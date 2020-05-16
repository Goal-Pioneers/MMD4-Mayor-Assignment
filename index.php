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

                <!-- Services -->
                <?php 
                        if ( is_front_page()):
                ?>
                <section> 
                        <div id="services">
                                <h1> 
                                        Ydelser
                                </h1>
                        </div>
                </section>
                <?php 
                        endif;
                ?>

                <!-- About us -->
                 <?php 
                        if ( is_front_page()):
                ?>
                
                <section> 
                        <div id="about-us">
                                <h1> 
                                        Om os
                                </h1>
                        </div>
                </section>
                <?php 
                        endif;
                ?>

                <!-- Press -->
                <?php 
                        if ( is_front_page() ):
                ?>
                
                <section> 
                        <div> 
                                <h1> 
                                        Artikler
                                </h1>       
                                
                        </div>
                </section>

                <?php 
                        endif;
                ?>

        </main>

<?php get_footer(); ?>
    