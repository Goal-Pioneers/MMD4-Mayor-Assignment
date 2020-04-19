    <footer> 
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
    </footer>
</body> 


    <!-- Too be removed, in production -->
    <script src="https://kit.fontawesome.com/fe9e4fceae.js" crossorigin="anonymous">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/redux/4.0.5/redux.js" integrity="sha256-N8dNe7UvR0kSfEBSJiwOPLBEyfWCd/aaQL2pdWqDJwE=" crossorigin="anonymous">
    </script>

    <script src="https://unpkg.com/babel-standalone@6/babel.min.js">
    </script>

    <script src="https://unpkg.com/react@16/umd/react.production.min.js" crossorigin>
    </script>

    <script src="https://unpkg.com/react-dom@16/umd/react-dom.production.min.js" crossorigin>
    </script>

    <script href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Roboto:wght@100&family=Source+Sans+Pro:wght@300&display=swap" rel="stylesheet"> 
    </script>

    <!-- Compiled and minified CSS -->
    <script rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    </script>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js">
    </script>

</html>
