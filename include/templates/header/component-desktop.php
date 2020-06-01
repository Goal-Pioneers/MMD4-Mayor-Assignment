<header id="header-static-navigation">
            <?php // Static header for desktops ?>
            <div class="main-section hide-on-mobile">
                <!-- Logo -->
                <div class="header-container">
                    <?php if( function_exists( 'the_custom_logo' ) ):?>
                        <?php the_custom_logo(); ?>
                    <?php endif;?>
                </div>
                <div class="header-container"> 
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
            </div>

            <?php if( is_page() ): ?>
                <?php require get_parent_theme_file_path('/include/templates/page/component-introduction.php'); ?>
            <?php endif;?>

            <?php if( is_single() ): ?>
                <?php require get_parent_theme_file_path('/include/templates/post/component-introduction.php'); ?>
            <?php endif; ?>

            <?php if( ! is_front_page() ): ?>
                <?php require get_parent_theme_file_path('/include/templates/header/breadcrumb.php'); ?>
            <?php endif; ?>
</header>