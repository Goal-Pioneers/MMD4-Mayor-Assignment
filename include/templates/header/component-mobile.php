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