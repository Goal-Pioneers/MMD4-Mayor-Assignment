<?php if( is_page() ): ?>
    <?php require get_parent_theme_file_path('/include/templates/page/component-introduction.php'); ?>
<?php endif;?>

<?php if( is_single() ): ?>
    <?php require get_parent_theme_file_path('/include/templates/post/component-introduction.php'); ?>
<?php endif; ?>