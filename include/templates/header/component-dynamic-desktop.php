<header id="header-dynamic-desktop" 
            class="hide-on-mobile" 
            v-bind:class="{ 'showDynamicDesktop' : showNavigation }">
        <?php // Static header for desktops ?>

        <div class="main-section">
            <div class="containment">
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
</header>