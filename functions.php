<?php
function mi_portafolio_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus(array(
        'primary' => 'Menú principal'
    ));
}
add_action('after_setup_theme', 'mi_portafolio_setup');

function mi_portafolio_scripts() {
    wp_enqueue_style('estilo-principal', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'mi_portafolio_scripts');

// Registrar un Custom Post Type para proyectos
function registrar_proyectos() {
    register_post_type('proyecto', array(
        'labels' => array(
            'name' => 'Proyectos',
            'singular_name' => 'Proyecto'
        ),
        'public' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'rewrite' => array('slug' => 'proyectos') // <--- AHORA SÍ ESTÁ AGREGADO
    ));
}
add_action('init', 'registrar_proyectos');

// Registrar un bloque Gutenberg simple
function registrar_bloque_bienvenida() {
    wp_register_script(
        'bloque-bienvenida',
        get_template_directory_uri() . '/block.js',
        array('wp-blocks', 'wp-editor', 'wp-components', 'wp-element')
    );
    register_block_type('mi-portafolio/bienvenida', array(
        'editor_script' => 'bloque-bienvenida'
    ));
}
add_action('init', 'registrar_bloque_bienvenida');