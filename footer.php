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

        <?php require get_parent_theme_file_path('/include/templates/footer/component-footer.php'); ?>
        <?php require get_parent_theme_file_path('/include/templates/footer/component-cookie.php'); ?>

        <?php require get_parent_theme_file_path('/include/templates/header/component-dynamic-desktop.php'); ?>
        <?php require get_parent_theme_file_path('/include/templates/header/component-mobile.php'); ?>

        <?php require get_parent_theme_file_path('/include/json/social.php'); ?>

        <script src="<?php echo get_template_directory_uri() . '/content/javascript/components.js'; ?>"> 
        </script>

        <script async src="<?php echo get_template_directory_uri() . '/content/libraries/fontawesome/js/all.js' ?>"> 
        </script>

        <script async src="<?php echo get_template_directory_uri() . '/content/libraries/javascript/popper.min.js' ?>"> 
        </script>

    
        <?php get_sidebar(); ?>

    </body>
</html>