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
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script'
    ));

    register_nav_menus(array(
        'primary' => __('Menú Principal Superior', 'tema-la97'),
    ));
}
add_action('after_setup_theme', 'la97_theme_setup');

/**
 * Cargar hojas de estilo y scripts del tema
 */
function la97_enqueue_scripts() {
    wp_enqueue_style(
        'la97-theme-style',
        get_stylesheet_uri(),
        array(),
        '2.0.0'
    );

    wp_enqueue_script(
        'la97-player-script',
        get_template_directory_uri() . '/assets/js/player.js',
        array(),
        '2.0.0',
        true
    );

    $shows_base = esc_url_raw(get_template_directory_uri() . '/assets/img/shows/');
    wp_add_inline_script(
        'la97-player-script',
        'window.LA97_SHOWS_BASE = ' . wp_json_encode($shows_base) . ';',
        'before'
    );
}
add_action('wp_enqueue_scripts', 'la97_enqueue_scripts');

/**
 * Manejador seguro de formulario comercial (admin-post + nonce + honeypot + wp_mail)
 */
function la97_handle_contact_form() {
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        wp_safe_redirect(home_url('/contacto/'));
        exit;
    }

    check_admin_referer('la97_contact_nonce', 'la97_nonce');

    // Honeypot anti-bots
    if (!empty($_POST['la97_website'])) {
        wp_safe_redirect(add_query_arg('enviado', '1', home_url('/contacto/#formulario-publicidad')));
        exit;
    }

    $region  = isset($_POST['adRegion']) ? sanitize_text_field(wp_unslash($_POST['adRegion'])) : 'mdp';
    $name    = isset($_POST['adName']) ? sanitize_text_field(wp_unslash($_POST['adName'])) : '';
    $company = isset($_POST['adCompany']) ? sanitize_text_field(wp_unslash($_POST['adCompany'])) : '';
    $phone   = isset($_POST['adPhone']) ? sanitize_text_field(wp_unslash($_POST['adPhone'])) : '';
    $email   = isset($_POST['adEmail']) ? sanitize_email(wp_unslash($_POST['adEmail'])) : '';
    $product = isset($_POST['adProduct']) ? sanitize_text_field(wp_unslash($_POST['adProduct'])) : '';
    $message = isset($_POST['adMessage']) ? sanitize_textarea_field(wp_unslash($_POST['adMessage'])) : '';

    if (empty($name) || empty($email) || !is_email($email)) {
        wp_safe_redirect(add_query_arg('error', 'invalid', home_url('/contacto/#formulario-publicidad')));
        exit;
    }

    // Whitelist estricta de destinatarios en el servidor
    $recipients = ($region === 'bsas')
        ? array('elizabeth@vocacion.net', 'claudia@vocacion.net')
        : array('comercial@la97.com.ar');

    $region_label = ($region === 'bsas') ? 'Buenos Aires (Vocación)' : 'Mar del Plata (La 97)';
    $subject      = sprintf('[La 97 Comercial - %s] Consulta de %s', $region_label, $company ? $company : $name);

    $body = implode("\n", array(
        "Nueva consulta comercial desde el sitio web de La 97! FM 97.3",
        "-----------------------------------------------------------",
        "Región: $region_label",
        "Nombre: $name",
        "Empresa / Marca: $company",
        "Teléfono: $phone",
        "Correo: $email",
        "Formato de interés: $product",
        "",
        "Mensaje:",
        $message,
    ));

    $headers = array(
        'Content-Type: text/plain; charset=UTF-8',
        'Reply-To: ' . $name . ' <' . $email . '>',
    );

    wp_mail($recipients, $subject, $body, $headers);

    wp_safe_redirect(add_query_arg('enviado', '1', home_url('/contacto/#formulario-publicidad')));
    exit;
}
add_action('admin_post_nopriv_la97_contact', 'la97_handle_contact_form');
add_action('admin_post_la97_contact', 'la97_handle_contact_form');

/**
 * Crear páginas base del tema (Programación, Contacto, Privacidad, Términos) una sola vez
 */
function la97_ensure_pages_seeded() {
    if (get_option('la97_pages_seeded_v2') === '1') {
        return;
    }
    $pages = array(
        'programacion' => 'Programación',
        'contacto'     => 'Contacto',
        'privacidad'   => 'Privacidad',
        'terminos'     => 'Términos',
    );
    $created = false;
    foreach ($pages as $slug => $title) {
        if (!get_page_by_path($slug)) {
            wp_insert_post(array(
                'post_title'  => $title,
                'post_name'   => $slug,
                'post_status' => 'publish',
                'post_type'   => 'page',
            ));
            $created = true;
        }
    }
    if ($created) {
        flush_rewrite_rules();
    }
    update_option('la97_pages_seeded_v2', '1');
}
add_action('init', 'la97_ensure_pages_seeded');
