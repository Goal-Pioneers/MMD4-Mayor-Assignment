
<!-- Actully page content -->
<div class="page-generic-layout">
    <h1> 
        <?php the_title(); ?>
    </h1>

        <!-- -->
        <div> 
            <!-- -->
            <div> 
                <?php ?>
                <p> 
                    by
                    <?php the_author();  ?>
                </p>
                <?php ?>
            </div>
            
            <!-- -->
            <div> 
                <?php ?>
                    <p> 
                        <?php the_date(); ?>
                    </p>
                <?php ?>
            </div>
        </div>
        
    <?php
            the_content();
    ?>
</div>
