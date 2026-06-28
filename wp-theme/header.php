<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="profile" href="https://gmpg.org/xfn/11" />
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Barra tricolor México -->
<div class="header-flag-bar"></div>

<?php
$alerta = chontla_get('municipio_alerta');
if ( $alerta ) : ?>
<div class="alerta-bar">
  <i class="fas fa-bullhorn"></i>
  <span><?php echo esc_html( $alerta ); ?></span>
  <button class="alerta-close" aria-label="Cerrar">✕</button>
</div>
<?php endif; ?>

<!-- Barra superior -->
<div class="topbar">
  <div class="container">
    <div class="topbar-left">
      <span><i class="fas fa-map-marker-alt"></i> <?php echo esc_html( chontla_get('municipio_estado', 'Chontla, Veracruz') ); ?></span>
      <div class="divider"></div>
      <span><i class="fas fa-calendar-alt"></i>
        <time datetime="<?php echo esc_attr( current_time('Y-m-d') ); ?>">
          <?php echo esc_html( date_i18n( 'l, j \d\e F \d\e Y' ) ); ?>
        </time>
      </span>
      <?php $tel = chontla_get('municipio_telefono'); if($tel): ?>
      <div class="divider"></div>
      <a href="tel:<?php echo esc_attr( preg_replace('/[^0-9]/', '', $tel) ); ?>">
        <i class="fas fa-phone"></i> <?php echo esc_html($tel); ?>
      </a>
      <?php endif; ?>
    </div>
    <div class="topbar-right">
      <?php if( $fb = chontla_get('municipio_facebook') ): ?>
        <a href="<?php echo esc_url($fb); ?>" target="_blank" rel="noopener" title="Facebook" class="social-icon"><i class="fab fa-facebook-f"></i></a>
      <?php endif; ?>
      <?php if( $tw = chontla_get('municipio_twitter') ): ?>
        <a href="<?php echo esc_url($tw); ?>" target="_blank" rel="noopener" title="Twitter / X" class="social-icon"><i class="fab fa-x-twitter"></i></a>
      <?php endif; ?>
      <?php if( $yt = chontla_get('municipio_youtube') ): ?>
        <a href="<?php echo esc_url($yt); ?>" target="_blank" rel="noopener" title="YouTube" class="social-icon"><i class="fab fa-youtube"></i></a>
      <?php endif; ?>
      <?php if( $ig = chontla_get('municipio_instagram') ): ?>
        <a href="<?php echo esc_url($ig); ?>" target="_blank" rel="noopener" title="Instagram" class="social-icon"><i class="fab fa-instagram"></i></a>
      <?php endif; ?>
      <div class="divider"></div>
      <a href="https://veracruz.gob.mx" target="_blank" rel="noopener" style="font-weight:600;">
        <i class="fas fa-external-link-alt"></i> Gob. Veracruz
      </a>
    </div>
  </div>
</div>

<!-- Header principal -->
<header class="site-header" role="banner">
  <div class="container">
    <div class="header-inner">
      <div class="header-brand">
        <a href="<?php echo esc_url( home_url('/') ); ?>" rel="home" style="display:flex;align-items:center;gap:14px">
          <?php if ( has_custom_logo() ) : ?>
            <div class="escudo"><?php the_custom_logo(); ?></div>
          <?php else : ?>
            <div class="escudo"><i class="fas fa-shield-halved" style="color:#fff"></i></div>
          <?php endif; ?>
          <div class="brand-text">
            <h1 class="site-title"><?php echo esc_html( chontla_get('municipio_nombre', get_bloginfo('name')) ); ?></h1>
            <p><?php echo esc_html( chontla_get('municipio_periodo', '2022 – 2025') ); ?> &nbsp;|&nbsp; Administración Municipal</p>
            <span class="estado"><i class="fas fa-map-marker-alt"></i> <?php echo esc_html( chontla_get('municipio_estado', 'Veracruz, México') ); ?></span>
          </div>
        </a>
      </div>
      <div class="header-actions">
        <button class="btn-buscar" id="btn-search" aria-label="Abrir búsqueda">
          <i class="fas fa-search"></i> Buscar
        </button>
        <?php
        $tramites_page = get_page_by_path('tramites');
        $tramites_url  = $tramites_page ? get_permalink($tramites_page) : home_url('/tramites');
        ?>
        <a href="<?php echo esc_url($tramites_url); ?>" class="btn-tramites">
          <i class="fas fa-file-alt"></i> Trámites en Línea
        </a>
      </div>
    </div>
  </div>
</header>

<!-- Navegación principal -->
<nav class="navbar" role="navigation" aria-label="Menú principal">
  <div class="container">
    <div class="navbar-inner" id="main-nav">

      <?php
      wp_nav_menu([
        'theme_location'  => 'menu-principal',
        'container'       => false,
        'items_wrap'      => '%3$s',
        'fallback_cb'     => 'chontla_default_menu',
        'walker'          => new Chontla_Nav_Walker(),
      ]);
      ?>

      <button class="nav-toggle" aria-label="Abrir menú" aria-expanded="false" aria-controls="main-nav">
        <i class="fas fa-bars"></i>
      </button>
    </div>
  </div>
</nav>

<!-- Modal de búsqueda -->
<div class="search-overlay" role="dialog" aria-modal="true" aria-label="Búsqueda" id="search-overlay">
  <button class="btn-close-search" aria-label="Cerrar búsqueda">✕</button>
  <div class="search-box">
    <h3><i class="fas fa-search"></i> ¿Qué estás buscando?</h3>
    <?php get_search_form(); ?>
    <p style="font-size:12px;color:#888;margin-top:10px">Sugerencias: trámites, transparencia, obra pública, noticias</p>
  </div>
</div>

<!-- Botón volver arriba -->
<button class="back-top" aria-label="Volver al inicio de la página">
  <i class="fas fa-chevron-up"></i>
</button>

<?php
/**
 * Walker personalizado para el menú principal.
 * Genera la estructura de nav-item / nav-link / dropdown.
 */
class Chontla_Nav_Walker extends Walker_Nav_Menu {

    public function start_lvl( &$output, $depth = 0, $args = null ) {
        $class = $depth === 0 ? 'dropdown' : 'sub-dropdown';
        $output .= "\n<div class=\"{$class}\">\n";
    }

    public function end_lvl( &$output, $depth = 0, $args = null ) {
        $output .= "</div>\n";
    }

    public function start_el( &$output, $data_object, $depth = 0, $args = null, $current_object_id = 0 ) {
        $item    = $data_object;
        $classes = empty( $item->classes ) ? [] : (array) $item->classes;
        $has_children = in_array( 'menu-item-has-children', $classes );

        if ( $depth === 0 ) {
            $wrap_class = 'nav-item';
            if ( $has_children ) $wrap_class .= ' has-dropdown';
            if ( in_array('current-menu-item', $classes) || in_array('current-menu-ancestor', $classes) ) $wrap_class .= ' active';
            $output .= "<div class=\"{$wrap_class}\">\n";
        } else {
            $wrap_class = $has_children ? 'sub-item' : '';
            $output .= "<div class=\"{$wrap_class}\">\n";
        }

        $atts           = [];
        $atts['href']   = ! empty( $item->url ) ? $item->url : '#';
        $atts['class']  = $depth === 0 ? 'nav-link' : '';
        $atts['target'] = ! empty( $item->target ) ? $item->target : '';
        $atts['rel']    = ! empty( $item->xfn )    ? $item->xfn    : '';

        $attributes = '';
        foreach ( $atts as $attr => $value ) {
            if ( $value ) $attributes .= " {$attr}=\"" . esc_attr($value) . "\"";
        }

        $title  = apply_filters( 'the_title', $item->title, $item->ID );
        $arrow  = ( $depth === 0 && $has_children ) ? ' <i class="fas fa-chevron-down arrow"></i>' : '';

        $output .= "<a{$attributes}>{$title}{$arrow}</a>\n";
    }

    public function end_el( &$output, $data_object, $depth = 0, $args = null ) {
        $output .= "</div>\n";
    }
}

/**
 * Menú por defecto cuando no hay ninguno configurado.
 */
function chontla_default_menu() {
    $items = [
        [ 'url' => home_url('/'),                              'label' => '<i class="fas fa-home" style="font-size:12px"></i> Inicio', 'children' => [] ],
        [ 'url' => home_url('/municipio'),                     'label' => 'Municipio', 'children' => [
            [ 'url' => home_url('/historia'),        'label' => '<i class="fas fa-landmark icon"></i> Historia del Municipio' ],
            [ 'url' => home_url('/cabildo'),         'label' => '<i class="fas fa-users icon"></i> H. Cabildo' ],
            [ 'url' => home_url('/organigrama'),     'label' => '<i class="fas fa-sitemap icon"></i> Organigrama' ],
            [ 'url' => home_url('/plan-desarrollo'), 'label' => '<i class="fas fa-clipboard-list icon"></i> Plan de Desarrollo' ],
        ]],
        [ 'url' => home_url('/transparencia'),  'label' => 'Transparencia', 'children' => [
            [ 'url' => home_url('/transparencia/estructura'),    'label' => '<i class="fas fa-sitemap icon"></i> Estructura Orgánica' ],
            [ 'url' => home_url('/transparencia/cuenta-publica'),'label' => '<i class="fas fa-file-invoice icon"></i> Cuenta Pública' ],
            [ 'url' => home_url('/transparencia/nomina'),        'label' => '<i class="fas fa-users icon"></i> Nómina de Personal' ],
            [ 'url' => home_url('/transparencia/licitaciones'),  'label' => '<i class="fas fa-gavel icon"></i> Licitaciones' ],
            [ 'url' => home_url('/transparencia/declaraciones'), 'label' => '<i class="fas fa-id-card icon"></i> Declaraciones Patrimoniales' ],
            [ 'url' => home_url('/transparencia/solicitudes'),   'label' => '<i class="fas fa-envelope-open icon"></i> Solicitar Información' ],
        ]],
        [ 'url' => home_url('/obra-publica'),   'label' => 'Obra Pública', 'children' => [
            [ 'url' => home_url('/obra-publica/programa-anual'), 'label' => '<i class="fas fa-calendar icon"></i> Programa Anual' ],
            [ 'url' => home_url('/obra-publica/avances'),        'label' => '<i class="fas fa-tasks icon"></i> Avances de Obra' ],
            [ 'url' => home_url('/obra-publica/contratos'),      'label' => '<i class="fas fa-file-contract icon"></i> Contratos' ],
        ]],
        [ 'url' => home_url('/tramites'),       'label' => 'Trámites', 'children' => [
            [ 'url' => home_url('/tramites/registro-civil'), 'label' => '<i class="fas fa-baby icon"></i> Registro Civil' ],
            [ 'url' => home_url('/tramites/catastro'),       'label' => '<i class="fas fa-map icon"></i> Catastro' ],
            [ 'url' => home_url('/tramites/tesoreria'),      'label' => '<i class="fas fa-piggy-bank icon"></i> Tesorería y Pagos' ],
            [ 'url' => home_url('/tramites/construccion'),   'label' => '<i class="fas fa-building icon"></i> Licencias de Construcción' ],
        ]],
        [ 'url' => home_url('/noticias'),   'label' => 'Noticias',  'children' => [
            [ 'url' => home_url('/noticias'),         'label' => '<i class="fas fa-newspaper icon"></i> Todas las Noticias' ],
            [ 'url' => home_url('/noticias/galeria'), 'label' => '<i class="fas fa-images icon"></i> Galería Fotográfica' ],
            [ 'url' => home_url('/noticias/agenda'),  'label' => '<i class="fas fa-calendar-check icon"></i> Agenda Municipal' ],
        ]],
        [ 'url' => home_url('/turismo'),    'label' => 'Turismo',   'children' => [] ],
        [ 'url' => home_url('/contacto'),   'label' => '<i class="fas fa-envelope" style="font-size:12px"></i> Contacto', 'children' => [] ],
    ];

    foreach ( $items as $item ) {
        $has_children = ! empty( $item['children'] );
        $arrow = $has_children ? ' <i class="fas fa-chevron-down arrow"></i>' : '';
        echo '<div class="nav-item' . ($has_children ? ' has-dropdown' : '') . '">';
        echo '<a href="' . esc_url($item['url']) . '" class="nav-link">' . $item['label'] . $arrow . '</a>';
        if ( $has_children ) {
            echo '<div class="dropdown">';
            foreach ( $item['children'] as $child ) {
                echo '<a href="' . esc_url($child['url']) . '">' . $child['label'] . '</a>';
            }
            echo '</div>';
        }
        echo '</div>';
    }
}
