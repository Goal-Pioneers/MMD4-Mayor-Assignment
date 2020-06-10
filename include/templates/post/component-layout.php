
<!-- Actully page content -->
<div class="page-generic-layout">
    <h1>
        <?php the_title(); ?>
    </h1>

    <?php if ( is_single() ): ?>
        <!-- -->
        <div class="page-attributes">
            <!-- -->
            <div>
                <?php ?>
                <p class="name">
                    <?php the_author();  ?>
                </p>
                <?php ?>
            </div>

            <!-- -->
            <div>
                <?php ?>
                    <p class="registered">
                        Registered: <?php the_date(); ?>
                    </p>
                <?php ?>
            </div>
        </div>
      <?php endif; ?>

    <?php
            the_content();
    ?>
</div>
