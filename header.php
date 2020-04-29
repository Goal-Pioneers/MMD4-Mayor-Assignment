<!-- https://getbootstrap.com/docs/4.4/content/typography/ -->
<!DOCTYPE html>

<html <?php language_attributes(); ?> >

    <head>
        <meta charset="<?php bloginfo( 'charset' );?>">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link rel="profile" href="http://gmpg.org/xfn/11">
        
        <?php ?>
            <meta name="description"
                  content="<?php ?>"/>
        <?php ?>

        <meta name="keywords"
              content=""/>

        <meta name="copyright"
              content="Goal Pioneers, "/>

        <META NAME="contactName" CONTENT="fx. Hr. Jensen">
        <META NAME="contactOrganization" CONTENT="Jensen aps">
        <META NAME="contactStreetAddress1" CONTENT="Adresse">
        <META NAME="contactZipcode" CONTENT="Postnr.">
        <META NAME="contactCity" CONTENT="By fx København">
        <META NAME="contactCountry" CONTENT="Land fx. Danmark">
        <META NAME="contactPhoneNumber" CONTENT="+45 00 00 00 00">

        <!-- Fortæller google den ikke skal lave et link, til at oversætte siden. -->
        <meta name="google" content="notranslate" />

        <!-- Alle crawlers -->
        <meta name="robots"
              content="index, follow"/>

        <!-- Google's crawler -->
        <meta name="googlebot" content="index, follow"/>

        <!-- -->
        <META HTTP-EQUIV="pragma" CONTENT="no-cache">

        <link href="https://fonts.googleapis.com/css2?family=Comfortaa&family=Open+Sans:wght@300;400&display=swap" rel="stylesheet"> 

        <?php 
            wp_head();
        ?>
    </head>

    <body>
        <header>
            <div>
                <?php  
                    if ( has_nav_menu( 'ui-navigation-header-menu' ) )
                    {
                        wp_nav_menu(
                            array(
                                'theme_location' => 'ui-navigation-header-menu',
                                'menu_class' => 'nav',
                                'item_spacing' => 'preserve',
                                'walker' => new ui_menu_walker_header_walker()
                            )
                        );  
                    }
                ?>
            </div>

            <nav> 
                <ol class="breadcrumb" aria-label="breadcrumb"> 
                    <li> 
                        Home
                    </li>
                    
                    <li> 
                        Page
                    </li>
                </ol>
            </nav>
            
        </header>
