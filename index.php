<?php get_header(); ?>
        <main> 
                <?php while( have_posts() ): ?>
                        <?php 
                            the_post();
                        ?>
                        
                <section class="base-section index-products-showcase"> 
                        <h2> 
                            Produkter
                        </h2>

                        <ul> 
                                <li class="product"> 
                                        <a href="#">
                                                <div class="product-container">
                                                        <img src="" class="image" /> 
                                                        <h3> A </h3>
                                                        <p> description </p>
                                                </div>
                                        </a>
                                </li>

                                <li class="product"> 
                                        <a href="#">
                                                <div class="product-container"> 
                                                        <img src="" class="image" />
                                                        <h3> B </h3>
                                                        <p> description </p>
                                                </div>
                                        </a>
                                </li>
                                
                                <li class="product"> 
                                        <a href="#">
                                                <div class="product-container"> 
                                                        <img src="" class="image" />
                                                        <h3> C </h3>
                                                        <p> description </p>
                                                </div>
                                        </a>
                                </li>
                                
                                <li class="product"> 
                                        <a href="#">    
                                                <div class="product-container"> 
                                                        <img src="" class="image" />
                                                        <h3> D </h3>
                                                        <p> description </p>
                                                </div>
                                        </a>
                                </li>
                        </ul>
                </section>

                <section class="base-section cover-section" 
                         id="component-frontpage-showcase"> 
                        <h2> 
                            Ydelser   
                        </h2>

                       <div class="component-container"> 
                                <!-- Options -->
                                <div class="tabs"> 
                                        <ul> 
                                                <span v-for="tab in tabs"> 
                                                        <a class="tab clickable" v-on:click="loadTab"> 
                                                                <li v-bind:id="tab.tagId" v-bind:class="{ active: tab.isActive }"> 
                                                                        {{ tab.title }}
                                                                </li>
                                                        </a>
                                                </span>
                                        </ul>

                                </div>

                                <!-- Tabs -->
                                <div class="component-tab-view">

                                </div>
                       </div>
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
    