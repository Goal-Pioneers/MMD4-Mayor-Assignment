<?php get_header(); ?> 
<?php get_sidebar(); ?>

        <main id="main-view"> 
                <section id="faq">
                        <h1> <?php the_title(); ?> </h1>

                        <div> 
                                <?php the_content(); ?>
                        </div>

                </section>
                       
        <script type="text/javascript" src="<?php echo get_template_directory_uri() . '/content/javascript/component/component-faq.js'; ?>">
        </script>

        </main>

<?php get_footer(); ?>
    