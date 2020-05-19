<!DOCTYPE html>

<html <?php language_attributes(); ?> >

    <head>
        <link href="https://fonts.googleapis.com/css2?family=Comfortaa&family=Open+Sans:wght@300;400&display=swap" rel="stylesheet"> 

        <?php require get_parent_theme_file_path('/include/templates/generic/head.php'); ?>
    </head>

    <body>
        <header>
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
            
        <?php require get_parent_theme_file_path('/include/templates/pages/component-introduction.php'); ?>
        <?php require get_parent_theme_file_path('/include/templates/header/breadcrumb.php'); ?>
        </header>
        
