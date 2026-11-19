<?php
/**
 * Funciones del Tema La 97 FM
 *
 * @package tema-la97
 */

if (!defined('ABSPATH')) {
    exit; // Evitar acceso directo
}

function la97_theme_setup() {
    // Título dinámico gestionado por WordPress
    add_theme_support('title-tag');

    // Habilitar soporte para imágenes destacadas en noticias
    add_theme_support('post-thumbnails');

    // Soporte HTML5 semántico
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script'
    ));

    // Registrar ubicaciones de menú
    register_nav_menus(array(
        'primary' => __('Menú Principal Superior', 'tema-la97'),
    ));
}
add_action('after_setup_theme', 'la97_theme_setup');

/**
 * Cargar hojas de estilo y scripts de forma limpia y estándar
 */
function la97_enqueue_scripts() {
    // 1. Estilos principales del tema
    wp_enqueue_style(
        'la97-theme-style', 
        get_stylesheet_uri(), 
        array(), 
        '1.0.0'
    );

    // 2. Script interactivo del reproductor de audio
    wp_enqueue_script(
        'la97-player-script', 
        get_template_directory_uri() . '/assets/js/player.js', 
        array(), 
        '1.0.0', 
        true // Cargar en el footer para máximo rendimiento
    );
}
add_action('wp_enqueue_scripts', 'la97_enqueue_scripts');

