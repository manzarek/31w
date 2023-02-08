<?php
/*
    Modèle index.php représente le modèle par défaut du thème
*/

get_header(); ?>
<main>
    <h3>index.php</h3>
</main>
<?php
if (have_posts()):
    while (have_posts()): the_post();
        the_title('<h1>','</h1>');
    endwhile;
endif;

get_footer();
?>
