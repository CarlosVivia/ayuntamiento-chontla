<?php
/**
 * Chontla Gobierno Municipal - Funciones del tema
 */

// ---- Soporte del tema ----
function chontla_setup() {
    load_theme_textdomain( 'chontla-gov', get_template_directory() . '/languages' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', [ 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ] );
    add_theme_support( 'custom-logo', [
        'height'      => 80,
        'width'       => 80,
        'flex-height' => true,
        'flex-width'  => true,
    ]);
    add_theme_support( 'customize-selective-refresh-widgets' );

    // Registrar menús de navegación
    register_nav_menus([
        'menu-principal' => __( 'Menú Principal', 'chontla-gov' ),
        'menu-footer'    => __( 'Menú del Pie de Página', 'chontla-gov' ),
        'menu-tramites'  => __( 'Menú Trámites', 'chontla-gov' ),
    ]);
}
add_action( 'after_setup_theme', 'chontla_setup' );

// ---- Encolar estilos y scripts ----
function chontla_scripts() {
    // Font Awesome
    wp_enqueue_style(
        'font-awesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css',
        [],
        '6.5.0'
    );
    // Estilos del tema
    wp_enqueue_style(
        'chontla-styles',
        get_template_directory_uri() . '/css/chontla.css',
        [ 'font-awesome' ],
        '1.0.0'
    );
    // Scripts del tema
    wp_enqueue_script(
        'chontla-main',
        get_template_directory_uri() . '/js/main.js',
        [],
        '1.0.0',
        true
    );
    // Pasar variables PHP a JS
    wp_localize_script( 'chontla-main', 'chontlaData', [
        'homeUrl'    => esc_url( home_url() ),
        'themeUrl'   => esc_url( get_template_directory_uri() ),
        'ajaxUrl'    => admin_url( 'admin-ajax.php' ),
        'searchUrl'  => esc_url( get_search_link() ),
    ]);
}
add_action( 'wp_enqueue_scripts', 'chontla_scripts' );

// ---- Widgets / Áreas de widgets ----
function chontla_widgets_init() {
    register_sidebar([
        'name'          => __( 'Barra lateral Transparencia', 'chontla-gov' ),
        'id'            => 'sidebar-transparencia',
        'description'   => __( 'Widgets que aparecen en las páginas de Transparencia.', 'chontla-gov' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ]);
    register_sidebar([
        'name'          => __( 'Footer Columna 1', 'chontla-gov' ),
        'id'            => 'footer-col-1',
        'before_widget' => '<div class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="footer-widget-title">',
        'after_title'   => '</h4>',
    ]);
}
add_action( 'widgets_init', 'chontla_widgets_init' );

// ---- Opciones del tema (Customizer) ----
function chontla_customize_register( $wp_customize ) {

    // Panel: Información Municipal
    $wp_customize->add_panel( 'chontla_info', [
        'title'    => __( 'Información Municipal', 'chontla-gov' ),
        'priority' => 30,
    ]);

    // Sección: Datos generales
    $wp_customize->add_section( 'chontla_general', [
        'title' => __( 'Datos Generales', 'chontla-gov' ),
        'panel' => 'chontla_info',
    ]);

    $campos = [
        'municipio_nombre'    => [ 'label' => 'Nombre del Municipio',    'default' => 'H. Ayuntamiento de Chontla' ],
        'municipio_estado'    => [ 'label' => 'Estado',                  'default' => 'Veracruz, México' ],
        'municipio_periodo'   => [ 'label' => 'Periodo de Gobierno',     'default' => '2022 – 2025' ],
        'municipio_telefono'  => [ 'label' => 'Teléfono',                'default' => '(789) 123-4567' ],
        'municipio_email'     => [ 'label' => 'Correo Electrónico',      'default' => 'presidencia@chontla.gob.mx' ],
        'municipio_direccion' => [ 'label' => 'Dirección',               'default' => 'Palacio Municipal S/N, Col. Centro, Chontla, Veracruz' ],
        'municipio_facebook'  => [ 'label' => 'Facebook URL',            'default' => '' ],
        'municipio_twitter'   => [ 'label' => 'Twitter / X URL',         'default' => '' ],
        'municipio_youtube'   => [ 'label' => 'YouTube URL',             'default' => '' ],
        'municipio_instagram' => [ 'label' => 'Instagram URL',           'default' => '' ],
        'municipio_alerta'    => [ 'label' => 'Texto barra de alerta',   'default' => '' ],
    ];

    foreach ( $campos as $key => $field ) {
        $wp_customize->add_setting( $key, [ 'default' => $field['default'], 'sanitize_callback' => 'sanitize_text_field' ] );
        $wp_customize->add_control( $key, [
            'label'   => $field['label'],
            'section' => 'chontla_general',
            'type'    => 'text',
        ]);
    }
}
add_action( 'customize_register', 'chontla_customize_register' );

// ---- Helpers ----
function chontla_get( $key, $default = '' ) {
    return get_theme_mod( $key, $default );
}

// Excerpt length
add_filter( 'excerpt_length', fn() => 30 );
add_filter( 'excerpt_more',   fn() => '...' );

// ---- Custom Post Type: Noticias ----
function chontla_register_cpt() {
    register_post_type( 'noticia', [
        'labels' => [
            'name'          => 'Noticias',
            'singular_name' => 'Noticia',
            'add_new'       => 'Agregar Noticia',
            'add_new_item'  => 'Agregar Nueva Noticia',
            'edit_item'     => 'Editar Noticia',
        ],
        'public'        => true,
        'has_archive'   => true,
        'supports'      => [ 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ],
        'menu_icon'     => 'dashicons-megaphone',
        'rewrite'       => [ 'slug' => 'noticias' ],
        'show_in_rest'  => true,
    ]);

    register_post_type( 'documento', [
        'labels' => [
            'name'          => 'Documentos de Transparencia',
            'singular_name' => 'Documento',
            'add_new'       => 'Agregar Documento',
        ],
        'public'       => true,
        'has_archive'  => true,
        'supports'     => [ 'title', 'editor', 'custom-fields' ],
        'menu_icon'    => 'dashicons-media-document',
        'rewrite'      => [ 'slug' => 'documentos' ],
        'show_in_rest' => true,
    ]);
}
add_action( 'init', 'chontla_register_cpt' );

// ---- Taxonomías para documentos ----
function chontla_register_taxonomies() {
    register_taxonomy( 'categoria-doc', 'documento', [
        'labels' => [
            'name'          => 'Categorías de Documento',
            'singular_name' => 'Categoría',
        ],
        'hierarchical' => true,
        'rewrite'      => [ 'slug' => 'categoria-doc' ],
        'show_in_rest' => true,
    ]);

    register_taxonomy( 'anio-doc', 'documento', [
        'labels' => [
            'name'          => 'Año',
            'singular_name' => 'Año',
        ],
        'hierarchical' => true,
        'rewrite'      => [ 'slug' => 'anio-doc' ],
        'show_in_rest' => true,
    ]);
}
add_action( 'init', 'chontla_register_taxonomies' );
