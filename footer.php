    
    <nav class="ui-social-navigation"> 
                <?php 
                    if ( has_nav_menu( 'ui-navigation-social-menu' ) )
                    {
                        wp_nav_menu(
                            array(
                                'theme_location' => 'ui-navigation-social-menu',
                                'menu_class' => 'nav',
                                'item_spacing' => 'preserve',
                                'walker' => new ui_menu_walker_some_walker()
                            )
                        );  
                    };
                ?>
    </nav>

    <footer> 
        <?php 
            wp_footer();
        ?>

        <div class="main-section"> 
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("footer-area") ) : ?>
            <?php endif;?>
        </div>

        <?php if(has_nav_menu('ui-navigation-footer-menu')): ?>
            <div id="footer-navigation"> 
                <?php     
                if ( has_nav_menu( 'ui-navigation-footer-menu' ) )
                {
                    wp_nav_menu(
                        array(
                            'theme_location' => 'footer-menu',
                            'menu_class' => 'nav',
                            'item_spacing' => 'preserve',
                            'walker' => new ui_menu_walker_footer_walker()
                            )
                        );  
                    };
                ?>
            </div>  
        <?php endif; ?>

        <?php if(has_nav_menu('ui-navigation-misc-menu')): ?>
            <div id="miscellaneous">
                        <?php     
                            if ( has_nav_menu( 'ui-navigation-misc-menu' ) )
                            {
                                wp_nav_menu(
                                    array(
                                        'theme_location' => 'ui-navigation-misc-menu',
                                        'menu_class' => 'miscellaneous-menu',
                                        'item_spacing' => 'preserve',
                                        'walker' => new ui_menu_walker_misc_walker()
                                    )
                                );  
                            };
                        ?>
            </div>
        <?php endif;?>
    </footer>
</body>

<?php 
        include 'development.php';
?>
</html>

<?php 
require get_parent_theme_file_path('/include/analytics/google-analytics.php');
require get_parent_theme_file_path('/include/analytics/matomo-analytics.php');
?>