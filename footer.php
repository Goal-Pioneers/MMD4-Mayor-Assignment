    
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

    <footer> 
        <?php 
            wp_footer();
        ?>

        <div class="main-section"> 
            <?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar( "footer-area" ) ) : ?>
            <?php endif;?>
        </div>


        <div id="ui-footer-misc"> 
            <ul>
                    <li v-for="link in links">
                        <a v-bind:href="link.uri"> 
                            {{link.name}}
                        </a>
                    </li>
            </ul>

            <div id="ui-footer-copyright"> 
                <p> 
                    {{copyright.content}}
                    {{copyright.year}}
                    {{copyright.company}}
                </p> 
            </div>   

        </div>
    </footer>
</body>

</html>

<?php if( getDebugState() ): ?>
    <?php 
        include 'development.php';
    ?>
<?php endif;?>

<?php 
    require get_parent_theme_file_path('/include/analytics/google-analytics.php');
    require get_parent_theme_file_path('/include/analytics/matomo-analytics.php');
?>