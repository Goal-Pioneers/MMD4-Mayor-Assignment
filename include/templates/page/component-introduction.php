<?php if( have_posts() ): ?>
    <?php if(! is_front_page() ): ?>
        <?php require get_parent_theme_file_path('/include/templates/page/introduction/default.php'); ?>
    <?php endif; ?>

    <?php if( is_front_page() ): ?>
        <?php require get_parent_theme_file_path('/include/templates/page/introduction/frontpage.php'); ?>
    <?php endif; ?>
<?php endif; ?>