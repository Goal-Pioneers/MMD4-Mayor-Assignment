    
    <?php
    if ( has_nav_menu( 'ui-navigation-social-menu' ) ): 
    ?>
        <nav class="ui-social-navigation"> 
                    <?php 
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'ui-navigation-social-menu',
                                    'menu_class' => 'nav',
                                    'item_spacing' => 'preserve',
                                    'walker' => new ui_menu_walker_some_walker()
                                )
                            );  
                        
                    ?>
        </nav>
    <?php endif; ?>

    <footer id="footer-area"> 
        <?php 
            wp_footer();
        ?>

        <div class="main-section"> 
            <?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar( "footer-area" ) ) : ?>
            <?php endif;?>
        </div>
        
        <?php get_sidebar(); ?>
      
    </footer>
</body>

</html>

<?php 
    require get_parent_theme_file_path('/include/analytics/google-analytics.php');
    require get_parent_theme_file_path('/include/analytics/matomo-analytics.php');
?>