<?php get_header(); ?>

        <main> 
                <section class="base-section" 
                         id="component-info-404"> 
                        
                        <div> 
                                <h1> 
                                        Side 404.         
                                </h1>

                                <p> 
                                        Vi kunne ikke finde indholdet du søgte desværre.
                                </p>

                                <nav  class="options-menu"> 
                                        <a onclick="goBack();"> 
                                                Gå tilbage.
                                        </a>

                                        <a href="<?php echo home_url(); ?>"> 
                                                Gå til Hjem.
                                        </a>
                                </nav>
                        </div>

                </section>

                
        </main>

<?php get_footer(); ?>
    