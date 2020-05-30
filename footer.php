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
        
    </footer>
        <?php 
                if ( has_nav_menu( 'ui-navigation-misc-menu' ) )
                {
                    wp_nav_menu(
                        array(
                            'theme_location' => 'ui-navigation-misc-menu',
                            'menu_id' => 'miscellaneous-navigation',
                            'menu_class' => 'nav',
                            'item_spacing' => 'preserve',
                            'walker' => new ui_menu_walker_header_walker()
                        )
                    );
                }
            ?>

    <?php // Header for mobile devices ?>
    <header id="header-mobile-navigation"
            class="hide-on-desktop" 
            v-bind:class="{ 'showMobileNavigation': showNavigation }">

        <div class="main-section"> 
            <?php 
                if ( has_nav_menu( 'ui-navigation-header-menu' ) )
                {
                    wp_nav_menu(
                        array(
                            'theme_location' => 'ui-navigation-header-menu',
                            'menu_id' => 'header-navigation',
                            'menu_class' => 'nav',
                            'item_spacing' => 'preserve',
                            'walker' => new ui_menu_walker_header_walker()
                        )
                    );
                }
            ?>
        </div>
    </header>
        
    <header id="header-dynamic-desktop" 
            class="hide-on-mobile" 
            v-bind:class="{ 'showDynamicDesktop' : showNavigation }">
        <?php // Static header for desktops ?>

        <div class="main-section">
                <!-- Logo -->
            <div>

            </div>

            <?php
                if ( has_nav_menu( 'ui-navigation-header-menu' ) )
                {
                    wp_nav_menu(
                        array(
                            'theme_location' => 'ui-navigation-header-menu',
                            'menu_id' => 'header-navigation',
                            'menu_class' => 'nav',
                            'item_spacing' => 'preserve',
                            'walker' => new ui_menu_walker_header_walker()
                        )
                    );
                }
            ?>
        </div>
    </header>

    <script src="<?php echo get_template_directory_uri() . '/content/javascript/components.js'; ?>"> 
    </script>

    <script async src="<?php echo get_template_directory_uri() . '/content/libraries/fontawesome/js/all.js' ?>"> 
    </script>

    <script async src="<?php echo get_template_directory_uri() . '/content/libraries/javascript/popper.min.js' ?>"> 
    </script>

    
<?php get_sidebar(); ?>

</body>

</html>

<?php 
    require get_parent_theme_file_path('/include/analytics/google-analytics.php');
    require get_parent_theme_file_path('/include/analytics/matomo-analytics.php');
?>