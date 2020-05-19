
            <?php while( have_posts() ): ?>
                        <?php 
                            the_post();
                        ?>
                        

                <?php if(has_post_thumbnail()): ?>

                    <?php if( is_front_page() ): ?>
                        <div id="introduction-page-cover">
                            <?php the_post_thumbnail( 'full', array('class' => 'header-cover-image') ); ?>
                            
                            <div class="elements"> 
                                <div class="introduction aligns-items-center">
                                    <div class="header">
                                            <h1 class="title"><?php echo get_bloginfo('name'); ?></h1>
                                            <p class="description"><?php echo get_bloginfo('description'); ?></p>
                                            
                                            <?php if( get_field('shortcut-contact')): ?> 
                                                            <a href="<?php the_field('shortcut-contact') ?>" class="short-button"> 
                                                                    Kontakt os
                                                            </a>
                                            <?php endif; ?>
                                    </div>

                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if(! is_front_page() ): ?>
                        <div id="introduction-page-cover">
                            <?php the_post_thumbnail( 'full', array('class' => 'header-cover-image') ); ?>
                            
                            <div class="elements"> 
                                <div class="introduction aligns-items-center">
                                    <div class="header">
                                            <h1 class="title">
                                               <?php the_title(); ?>
                                            </h1>
                                    </div>

                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

                <?php endif; ?>

            <?php endwhile;?>            
