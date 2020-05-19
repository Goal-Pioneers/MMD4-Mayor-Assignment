
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