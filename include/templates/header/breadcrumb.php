<?php 
class BreadcrumbChild
{
    function __construct($varTitle, $varUrl, $varAlt) 
    {
        $this->setTitle($varTitle);
        $this->setUrl($varUrl);
        $this->setAlt($varAlt);
    }

    private $title = null;
    private $url = null;
    private $alt = null;
    private $additional = null;

    function getUrl()
    {
        return $this->Url;
    }

    function getAdditional()
    {
        return $this->additional;
    }
    
    function getTitle()
    {
        return $this->title;
    }

    function getAlt()
    {
        return $this->alt;
    }

    function setUrl($var)
    {
        $this->Url = $var;
    }
    
    function setTitle($var)
    {
        $this->title = $var;
    }

    function setAdditional($var)
    {
        $this->additional = $var;
    }

    function setAlt($var)
    {
        $this->alt = $var;
    }

    function print()
    {
        if($this->getAdditional() == null)
        {
            echo "<li class='' aria-current='page'>";
        }
        else 
        {
            echo "<li class='". $this->getAdditional() ."' aria-current='page'>";
        }
        echo "<a href='". $this->getUrl() ."'>";
        echo $this->getTitle();
        echo "</a>";
        echo "</li>";
    }
    
}

?>


<?php while( have_posts() ):
    the_post();
    
    $currentId = $post->ID; 
    $ancestor = get_post_ancestors( $currentId );
?>

<?php if(! count( $ancestor ) == 0 ): ?>
    <nav class="component-navigation-breadcrumb"> 
        <ol> 
            <?php                  
                $arr = array();
                $thisPage = new BreadcrumbChild( get_the_title($post->ID), get_permalink(), null );
                $thisPage->setAdditional('active-breadcrumb');

                array_push($arr, $thisPage);
                
                foreach( $ancestor as &$value )
                {
                    $title = get_the_title( $value );
                    $url = get_post_permalink( $value );

                    $newChild = new BreadcrumbChild($title, $url, null);

                    array_push($arr, $newChild);
                }

                for( $idx = count( $arr ) - 1; 
                     $idx > -1; 
                     $idx -- )
                {
                    $arr[$idx]->print();
                }
            ?>
        </ol>
    </nav>
<?php endif;?>
        
<?php endwhile; ?>