    <footer> 
        <?php 
            wp_footer();
        ?>

        <div> 
            <?php     
                if ( has_nav_menu( 'footer-menu' ) )
                {
                    wp_nav_menu(
                        array(
                            'theme_location' => 'footer-menu',
                            'menu_class' => 'nav',
                            'item_spacing' => 'preserve'
                        )
                    );  
                };
            ?>


            <?php 
                if ( has_nav_menu( 'social-menu' ) )
                {
                    wp_nav_menu(
                        array(
                            'theme_location' => 'social-menu',
                            'menu_class' => 'nav',
                            'item_spacing' => 'preserve'
                        )
                    );  
                };
            ?>
        </div>

        <div>
            <?php     
                if ( has_nav_menu( 'misc-menu' ) )
                {
                    wp_nav_menu(
                        array(
                            'theme_location' => 'misc-menu',
                            'menu_class' => 'nav',
                            'item_spacing' => 'preserve'
                        )
                    );  
                };
            ?>
        </div>

        <div> 
            <p> 
                <?php 
                    $year = date("Y");
                    echo '© ';
                    echo $year;
                    echo ' Goal Pioneers'
                ?>
            </p>
        </div>
    </footer>
</body>

    <?php 
        include 'development.php';
    ?>
</html>
