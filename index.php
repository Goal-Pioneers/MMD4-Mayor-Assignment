<?php get_header(); ?>
        <main> 
                <?php while( have_posts() ): ?>
                        <?php 
                            the_post();
                        ?>
                        
                <section class="base-section"> 
                        <h2> 
                            Produkter
                        </h2>

                        <ul> 
                                <li> 
                                        a
                                </li>
                                <li> 
                                        b
                                </li>
                                <li> 
                                        c
                                </li>
                                <li> 
                                        d
                                </li>
                        </ul>
                </section>

                <section class="base-section cover-section"> 
                        <h2> 
                            Ydelser   
                        </h2>

                        <ul> 
                                <li> </li>
                                <li> </li>
                                <li> </li>
                                <li> </li>
                        </ul>

                </section>
                
                <section id="news-component" class="base-section"> 
                        <h2> 
                            Artikler
                        </h2>

                        <ul class="articles-container"> 
                                <span class="listed"> 
                                        <li> 
                                                2
                                        
                                        </li>
                                        
                                        <li> 
                                                3
                                        </li>
                                        
                                        <li> 
                                                4
                                        </li>

                                        <li> 
                                                5
                                        </li>
                                </span>
                        </ul>

                </section>

                
                <?php if( get_field('section-content-about-us')): ?>
                        <section class="base-section cover-section"> 
                                <h2> 
                                        <?php the_field('section-title-about-us'); ?>
                                </h2>

                                <p> 
                                        <?php the_field('section-content-about-us'); ?>
                                </p>
                        </section>
                <?php endif; ?>

                <section class="base-section shortcut-section"> 
                        <h2> 
                                Hvad kan <?php echo get_bloginfo('name'); ?> gøre for dig ? 
                        </h2>

                        <p>
                                Hvis du har spørgsmål eller feedback vedrørende vores produkter eller ydelser eller vil i kontakt med os.
                        </p>

                        <!-- Contact Links -->
                        <div class="shortcuts"> 
                                <ul> 
                                        <?php if( get_field('shortcut-contact')): ?>
                                                <li> 
                                                        <a href="<?php the_field('shortcut-contact') ?>" class="short-button"> 
                                                                Kontakt os
                                                        </a>
                                                </li>
                                        <?php endif; ?>
                                        
                                        <?php if( get_field('shortcut-feedback')): ?>
                                                <li> 
                                                        <a href="<?php the_field('shortcut-feedback') ?>" class="short-button"> 
                                                                Send feedback
                                                        </a>
                                                </li>
                                        <?php endif; ?>
                                </ul>
                        </div>

                        <!-- Cards - Måske -->
                </section>                    
               
                <?php endwhile; ?>
        </main>

<?php get_footer(); ?>
    