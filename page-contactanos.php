<?php get_header(); ?>

<?php while (have_posts()) {
    the_post(); ?>

    <div class="blog-post">
        <h2 class="blog-post-title"> <?php the_title(); ?> </h2>

        <?= the_content(); ?>

        <p>este es el contactanos </p>
    </div>
<?php } ?>


<div class="nav-previous alignleft"><?php previous_posts_link('Entradas más antiguas'); ?></div>
<div class="nav-next alignright"><?php next_posts_link('Entradas más recientes'); ?></div>

</div>
</div>
</main>
<?php get_footer(); ?>