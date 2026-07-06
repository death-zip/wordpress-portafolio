<?php
/*
Template Name: Lista de Proyectos
*/
get_header();
?>

<main style="padding: 20px; max-width: 1000px; margin: 0 auto;">
    <h1 style="font-size: 2.2rem; margin-bottom: 30px;">Proyectos</h1>

    <?php
    $args = array(
        'post_type' => 'proyecto', // asegúrate que sea 'proyecto' (singular)
        'posts_per_page' => -1,
        'post_status' => 'publish'
    );
    $proyectos = new WP_Query($args);
    ?>

    <?php if ($proyectos->have_posts()) : ?>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 25px;">
            <?php while ($proyectos->have_posts()) : $proyectos->the_post(); ?>
                <div style="border: 1px solid #ddd; border-radius: 8px; padding: 20px; background: #fafafa; box-shadow: 0 2px 4px rgba(0,0,0,0.05);">
                    <?php if (has_post_thumbnail()) : ?>
                        <div style="margin-bottom: 15px;">
                            <?php the_post_thumbnail('medium', array('style' => 'width: 100%; height: 180px; object-fit: cover; border-radius: 4px;')); ?>
                        </div>
                    <?php endif; ?>
                    <h2 style="font-size: 1.4rem; margin: 0 0 10px 0;">
                        <a href="<?php the_permalink(); ?>" style="text-decoration: none; color: #2c3e50;">
                            <?php the_title(); ?>
                        </a>
                    </h2>
                    <?php the_excerpt(); ?>
                    <a href="<?php the_permalink(); ?>" style="display: inline-block; margin-top: 12px; background: #2c3e50; color: white; padding: 8px 18px; border-radius: 4px; text-decoration: none; font-size: 0.9rem;">
                        Ver proyecto
                    </a>
                </div>
            <?php endwhile; ?>
        </div>
    <?php else : ?>
        <p>No hay proyectos publicados todavía. Crea algunos desde el escritorio.</p>
    <?php endif; ?>

    <?php wp_reset_postdata(); ?>
</main>

<?php get_footer(); ?>