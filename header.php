<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class($class); ?>>
    <div class="blue-line"></div>
    <header class="header clearfix">
    <a class="logo" href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="logo"></a>
    <?php
        wp_nav_menu( array(
            'theme_location'  => 'main_menu',
            'depth'           => 2,
            'fallback_cb'     => false,
            'menu_id'         => 'top-menu',
            'menu_class'      => 'top-menu',
        ) );
    ?>
    </header>