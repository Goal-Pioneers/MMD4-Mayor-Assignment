<?php 

class ui_menu_walker_some_walker 
    extends Walker_Nav_Menu
{
    function start_el( &$output, $item, $depth=0, $args=array(), $id = 0 )
    {
        
        // Preparing variables
        // https://www.ibenic.com/how-to-create-wordpress-custom-menu-walker-nav-menu-class/
        
        $object = $item->object;
        $type = $item->type;
        $title = $item->title;
        $description = $item->description;
        $permalink = $item->url;
        
        $output .= "<li class='" . 'ui-menu-button-area'. "'>";
        
        //Add SPAN if no Permalink
        if( $permalink && $permalink != '#' ) 
        {
                $output .= "<a class='ui-menu-link' href='" . $permalink . "' alt='" . $title . "'>";
        } 
        
        #$output .= $title;
        $parsed = parse_url( $permalink );

        $applied = false;

        if($parsed['host'] == 'www.facebook.com')
        {
            $applied = true;
            $output .= '<i class="fab fa-facebook-square"></i>';
        }

        if($parsed['host'] == 'twitter.com')
        {
            $applied = true;
            $output .= '<i class="fab fa-twitter-square"></i>';
        }

        if($parsed['host'] == 'www.tumblr.com')
        {
            $applied = true;
            $output .= '<i class="fab fa-tumblr-square"></i>';
        }

        if($parsed['host'] == 'www.linkedin.com')
        {
            $applied = true;
            $output .= '<i class="fab fa-linkedin"></i>';
        }

        if($parsed['host'] == 'medium.com')
        {
            $applied = true;
            $output .= '<i class="fab fa-medium"></i>';
        }

        if($parsed['host'] == 'github.com')
        {
            $applied = true;
            $output .= '<i class="fab fa-github"></i>';
        }

        if($parsed['host'] == 'mastodon.social')
        {
            $applied = true;
            $output .= '<i class="fab fa-mastodon"></i>';
        }

        if( $applied == false )
        {
            $output .= '<i class="fas fa-link"></i>';
        }
        
        if( $permalink && $permalink != '#' ) 
        {
            $output .= '</a>';
        } 
    }

    
    function start_lvl( &$output, $depth = 0, $arg = Array() )
    {
        
        $output .= "\n<ul class='sub-menu'>\n";
        $output .= '<div class="dropdown-menu" aria-labelledby="navbarDropdown">';
        
    }

    function end_lvl(&$output, $depth=0, $args=array()) 
    {
        
        $output .= "</div>\n";
        $output .= "</ul>\n";
        
    }

};

?>