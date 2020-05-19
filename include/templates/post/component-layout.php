<?php 
    while( have_posts() ):
?>
    <?php 
        the_post();
    ?>

    <!-- Actully page content -->
    <div class="page-layout">                             
            <?php
                the_content();
            ?>
    </div>
<?php 
    endwhile;
?>