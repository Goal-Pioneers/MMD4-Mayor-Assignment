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