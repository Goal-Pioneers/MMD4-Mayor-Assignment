<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
    </head>

    <body>
        <header> 
        <?php 
            if ( has_nav_menu( 'header-menu' ) )
            {
                wp_nav_menu(
                    array(
                        'theme_location' => 'header-menu',
                        'menu_class' => 'nav',
                        'item_spacing' => 'preserve'
                    )
                );  
            };
        ?>
        </header>
