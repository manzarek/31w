<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(); ?>
</head>
<body class="site">
    <header class="site__entete">  
        <section class="logomenu">
            <?php the_custom_logo(); ?> 
            <h4><?php wp_nav_menu(array(
                'menu' => 'entete',
                'container' => 'nav'
            )); ?> </h4>
            <?= get_search_form(); ?>    
        </section>
        <h2><a href="<?php  bloginfo('url'); ?>"><?php  bloginfo('name'); ?></a></h2> 
        <h3><?php  bloginfo('description'); ?></h3>
    </header>