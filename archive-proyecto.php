<?php get_header(); ?>

<main style="padding: 20px; max-width: 900px; margin: 0 auto;">
    <h1 style="font-size: 2rem; margin-bottom: 30px;">Proyectos</h1>

    <?php if (have_posts()) : ?>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px;">
            <?php while (have_posts()) : the_post(); ?>
                <article style="border: 1px solid #ddd; border-radius: 8px; padding: 20px; background: #f9f9f9;">
                    <?php if (has_post_thumbnail()) : ?>
                        <div style="margin-bottom: 15px;">
                            <?php the_post_thumbnail('medium', array('style' => 'width: 100%; height: auto; border-radius: 4px;')); ?>
                        </div>
                    <?php endif; ?>
                    <h2 style="font-size: 1.3rem; margin-bottom: 10px;">
                        <a href="<?php the_permalink(); ?>" style="text-decoration: none; color: #2c3e50;">
                            <?php the_title(); ?>
                        </a>
                    </h2>
                    <p><?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?></p>
                    <a href="<?php the_permalink(); ?>" style="display: inline-block; margin-top: 10px; background: #2c3e50; color: white; padding: 8px 16px; border-radius: 4px; text-decoration: none;">
                        Ver proyecto
                    </a>
                </article>
            <?php endwhile; ?>
        </div>
    <?php else : ?>
        <p>No hay proyectos publicados todavía. <a href="<?php echo admin_url('post-new.php?post_type=proyecto'); ?>">Agrega tu primer proyecto</a>.</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>