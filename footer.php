    <footer class=""> 
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

        <div class="area-footer-copyright"> 
            <div class="container">
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

                <div id="">
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
            </div>
        </div>
    </footer>
</body>

<!-- Matomo -->
<script type="text/javascript">
    var _paq = window._paq || [];
    /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
    _paq.push(['trackPageView']);
    _paq.push(['enableLinkTracking']);
    (function() {
        var u="//matomo.goalpioneers.dk/";
        _paq.push(['setTrackerUrl', u+'matomo.php']);
        _paq.push(['setSiteId', '1']);
        var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
        g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
    })();
</script>
<!-- End Matomo Code -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-160026683-1">
</script>

<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-160026683-1');
    </script>


    <?php 
        include 'development.php';
    ?>
</html>
