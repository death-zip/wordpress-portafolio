<?php get_header(); ?>
<main style="padding: 20px; max-width: 900px; margin: 0 auto;">
    <h1>Bienvenido a mi portafolio</h1>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article style="border-bottom: 1px solid #eee; margin-bottom: 20px;">
            <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
        </article>
    <?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>