<!DOCTYPE html>

<html <?php language_attributes(); ?> id="view">
    <head>
        <?php require get_parent_theme_file_path('/include/templates/generic/head.php'); ?>

        <?php if( is_front_page() ): ?>

        <?php endif; ?>

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
    </head>

    <body onload="">
        <?php  require get_parent_theme_file_path('/include/templates/header/component-desktop.php'); ?>
