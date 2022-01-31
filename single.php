<?php get_header(); ?>

    <?php
    while (have_posts()) {
        the_post(); ?>
            <form action="/template-parts/content/content-single.php" method="get"> </form>

    <?php } ?>

<?php get_footer(); ?>