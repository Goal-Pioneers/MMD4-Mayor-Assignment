<meta charset="<?php bloginfo( 'charset' );?>">

<meta name="viewport" 
      content="width=device-width, initial-scale=1.0">

<meta http-equiv="X-UA-Compatible" 
      content="ie=edge">

<!-- -->
<META HTTP-EQUIV="pragma" 
      CONTENT="no-cache">

<!-- -->
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" />

<!-- Page Specifics -->
<?php if( is_page() ): ?>
    <meta name="description" content="<?php echo the_excerpt(); ?>" />
    <meta name="DC.title" content="<?php echo the_title(); ?>" />
    <meta name="DC.language" content="da" />
    <meta name="keywords" content="" />
<?php endif; ?>

<?php if( is_404() ): ?>
    <meta name="DC.title" content="Fejl 404, vi kunne ikke finde indholdet du søgte." />
    <meta name="description" content="Fejl 404." />
    <meta name="DC.language" content="da" />
<?php endif; ?>

<?php 
    require get_parent_theme_file_path('/include/analytics/google-analytics.php');
    require get_parent_theme_file_path('/include/analytics/matomo-analytics.php');
?>

<!-- Required -->
<?php 
    wp_head();
?>