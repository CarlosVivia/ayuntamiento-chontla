<?php
/**
 * Template Name: Transparencia
 * Template Post Type: page
 */
get_header(); ?>

<style>
.page-hero { background: linear-gradient(135deg, var(--rojo-oscuro) 0%, var(--rojo-pri) 60%, #C41230 100%); padding: 50px 0 40px; color: var(--blanco); position: relative; overflow: hidden; }
.page-hero::before { content:''; position:absolute; top:-60px; right:-60px; width:300px; height:300px; border:60px solid rgba(255,255,255,.06); border-radius:50%; }
.page-hero .container { position:relative; z-index:2; }
.breadcrumb-wp { display:flex; gap:6px; align-items:center; font-size:12.5px; margin-bottom:14px; opacity:.8; }
.breadcrumb-wp a { color:var(--blanco); }
.breadcrumb-wp a:hover { text-decoration:underline; }
.breadcrumb-wp .sep { opacity:.5; }
.page-hero h1 { font-size:36px; font-weight:700; margin-bottom:10px; line-height:1.2; }
.trans-search { background:var(--blanco); border-radius:8px; padding:16px 20px; display:flex; gap:10px; align-items:center; box-shadow:0 4px 20px rgba(0,0,0,.15); margin-top:28px; }
.trans-search input { flex:1; border:none; outline:none; font-size:14px; }
.trans-search button { background:var(--rojo-pri); color:var(--blanco); border:none; padding:8px 20px; border-radius:6px; font-weight:600; cursor:pointer; }
.ley-ref { background:#FFF8E1; border-left:4px solid var(--dorado); border-radius:0 6px 6px 0; padding:14px 20px; margin:30px 0; display:flex; gap:12px; align-items:flex-start; }
.ley-ref i { color:var(--dorado); font-size:20px; margin-top:2px; }
.ley-ref p { font-size:13px; line-height:1.6; color:#5D4037; }
.ley-ref strong { color:#4A2C00; }
.articulos-grid { display:grid; grid-template-columns:repeat(3,1fr); gap:20px; margin-bottom:50px; }
.art-card { background:var(--blanco); border-radius:8px; box-shadow:var(--sombra); overflow:hidden; transition:var(--transicion); }
.art-card:hover { box-shadow:var(--sombra-hover); transform:translateY(-4px); }
.art-card-header { background:var(--rojo-pri); color:var(--blanco); padding:14px 18px; display:flex; align-items:center; gap:10px; }
.art-card-header.verde { background:var(--verde-mexico); }
.art-card-header.azul  { background:#1565C0; }
.art-card-header.morado{ background:#6A1B9A; }
.art-card-header.naranja{background:#E65100; }
.art-card-header.teal  { background:#00695C; }
.art-card-header .art-num { font-size:20px; font-weight:700; background:rgba(255,255,255,.2); width:44px; height:44px; border-radius:50%; display:flex; align-items:center; justify-content:center; flex-shrink:0; }
.art-card-header h3 { font-size:13.5px; font-weight:600; line-height:1.3; }
.art-card-body { padding:6px 0; }
.art-card-body a { display:flex; align-items:center; gap:10px; padding:10px 18px; font-size:13px; color:var(--negro-suave); border-bottom:1px solid var(--gris-medio); transition:var(--transicion); }
.art-card-body a:last-child { border-bottom:none; }
.art-card-body a:hover { background:#FFF5F5; color:var(--rojo-pri); padding-left:24px; }
.art-card-body a i { font-size:13px; color:var(--rojo-pri); width:16px; flex-shrink:0; }
.doc-table-wrap { background:var(--blanco); border-radius:8px; box-shadow:var(--sombra); overflow:hidden; }
.doc-table-header { background:var(--rojo-pri); color:var(--blanco); padding:16px 20px; display:flex; align-items:center; gap:10px; font-weight:700; font-size:15px; }
table.doc-table { width:100%; border-collapse:collapse; }
table.doc-table th { background:var(--gris-claro); font-size:12px; font-weight:700; text-transform:uppercase; letter-spacing:.5px; padding:12px 16px; color:var(--gris-texto); text-align:left; border-bottom:2px solid var(--gris-medio); }
table.doc-table td { padding:12px 16px; font-size:13px; border-bottom:1px solid var(--gris-medio); color:var(--negro-suave); }
table.doc-table tr:last-child td { border-bottom:none; }
table.doc-table tr:hover td { background:#FAFAFA; }
.badge { display:inline-flex; align-items:center; gap:5px; padding:3px 10px; border-radius:20px; font-size:11px; font-weight:700; }
.badge-pdf  { background:#FFEBEE; color:#C62828; }
.badge-xlsx { background:#E8F5E9; color:#2E7D32; }
.badge-link { background:#E3F2FD; color:#1565C0; }
.btn-download { display:inline-flex; align-items:center; gap:5px; color:var(--rojo-pri); font-size:12.5px; font-weight:600; padding:5px 12px; border-radius:4px; background:#FFF5F5; transition:var(--transicion); }
.btn-download:hover { background:var(--rojo-pri); color:var(--blanco); }
.trans-stats { display:grid; grid-template-columns:repeat(4,1fr); gap:16px; margin-bottom:36px; }
.trans-stat-card { background:var(--blanco); border-radius:8px; padding:20px 16px; text-align:center; box-shadow:var(--sombra); border-top:4px solid var(--rojo-pri); }
.trans-stat-card.verde { border-top-color:var(--verde-mexico); }
.trans-stat-card.azul  { border-top-color:#1565C0; }
.trans-stat-card.dorado{ border-top-color:var(--dorado); }
.trans-stat-card .num { font-size:30px; font-weight:700; color:var(--rojo-pri); }
.trans-stat-card.verde .num { color:var(--verde-mexico); }
.trans-stat-card.azul  .num { color:#1565C0; }
.trans-stat-card.dorado .num { color:var(--dorado); }
.trans-stat-card .label { font-size:12px; color:var(--gris-texto); margin-top:4px; }
@media(max-width:900px){ .articulos-grid{grid-template-columns:repeat(2,1fr);} .trans-stats{grid-template-columns:repeat(2,1fr);} }
@media(max-width:600px){ .articulos-grid{grid-template-columns:1fr;} }
</style>

<!-- Hero de página -->
<div class="page-hero">
  <div class="container">
    <div class="breadcrumb-wp">
      <a href="<?php echo esc_url( home_url('/') ); ?>"><i class="fas fa-home"></i></a>
      <span class="sep">›</span>
      <span>Transparencia</span>
    </div>
    <h1><i class="fas fa-eye" style="margin-right:10px"></i>Portal de Transparencia</h1>
    <p>Información pública de oficio conforme a la Ley General de Transparencia y Acceso a la Información Pública (LGTAIP) y la Ley de Transparencia del Estado de Veracruz.</p>
    <div class="trans-search">
      <i class="fas fa-search" style="color:var(--rojo-pri);font-size:18px"></i>
      <?php get_search_form(); ?>
    </div>
  </div>
</div>

<main class="section" id="main-content">
  <div class="container">

    <!-- Aviso legal -->
    <div class="ley-ref">
      <i class="fas fa-balance-scale"></i>
      <p>La información puesta a disposición cumple con el <strong>Artículo 70 de la LGTAIP</strong> y los lineamientos del <strong>INAI</strong>. Para solicitar información adicional, utilice <a href="<?php echo esc_url( home_url('/transparencia/solicitudes') ); ?>" style="color:#5D4037;font-weight:600;text-decoration:underline">INFOMEX Veracruz</a>.</p>
    </div>

    <!-- Estadísticas -->
    <div class="trans-stats">
      <div class="trans-stat-card">
        <div class="num" data-count="347">0</div>
        <div class="label">Documentos publicados</div>
      </div>
      <div class="trans-stat-card verde">
        <div class="num" data-count="28">0</div>
        <div class="label">Solicitudes atendidas</div>
      </div>
      <div class="trans-stat-card azul">
        <div class="num">100%</div>
        <div class="label">Información actualizada</div>
      </div>
      <div class="trans-stat-card dorado">
        <div class="num" data-count="4">0</div>
        <div class="label">Trimestres publicados</div>
      </div>
    </div>

    <!-- Contenido editable de la página -->
    <?php while( have_posts() ): the_post(); ?>
      <?php if( get_the_content() ): ?>
        <div class="entry-content" style="margin-bottom:30px"><?php the_content(); ?></div>
      <?php endif; ?>
    <?php endwhile; ?>

    <!-- Obligaciones de Transparencia -->
    <div class="section-header" style="text-align:left;margin-bottom:24px">
      <span class="section-tag">Información de Oficio</span>
      <h2 style="font-size:22px;margin-top:8px">Obligaciones de Transparencia</h2>
      <div class="divider-line" style="margin:12px 0 0"></div>
    </div>

    <div class="articulos-grid">

      <div class="art-card">
        <div class="art-card-header">
          <div class="art-num"><i class="fas fa-landmark"></i></div>
          <h3>Información Institucional</h3>
        </div>
        <div class="art-card-body">
          <a href="<?php echo esc_url(home_url('/transparencia/estructura')); ?>"><i class="fas fa-sitemap"></i> Estructura Orgánica</a>
          <a href="<?php echo esc_url(home_url('/transparencia/facultades')); ?>"><i class="fas fa-gavel"></i> Facultades y Funciones</a>
          <a href="<?php echo esc_url(home_url('/transparencia/marco-normativo')); ?>"><i class="fas fa-book-open"></i> Marco Normativo</a>
          <a href="<?php echo esc_url(home_url('/transparencia/directorio')); ?>"><i class="fas fa-address-book"></i> Directorio de Servidores</a>
          <a href="<?php echo esc_url(home_url('/organigrama')); ?>"><i class="fas fa-users"></i> Organigrama Municipal</a>
        </div>
      </div>

      <div class="art-card">
        <div class="art-card-header verde">
          <div class="art-num"><i class="fas fa-users"></i></div>
          <h3>Recursos Humanos y Remuneraciones</h3>
        </div>
        <div class="art-card-body">
          <a href="<?php echo esc_url(home_url('/transparencia/remuneraciones')); ?>"><i class="fas fa-money-check-alt" style="color:var(--verde-mexico)"></i> Tabulador de Remuneraciones</a>
          <a href="<?php echo esc_url(home_url('/transparencia/nomina')); ?>"><i class="fas fa-file-invoice-dollar" style="color:var(--verde-mexico)"></i> Nómina Quincenal</a>
          <a href="<?php echo esc_url(home_url('/transparencia/declaraciones')); ?>"><i class="fas fa-id-card" style="color:var(--verde-mexico)"></i> Declaración Patrimonial</a>
        </div>
      </div>

      <div class="art-card">
        <div class="art-card-header azul">
          <div class="art-num"><i class="fas fa-chart-bar"></i></div>
          <h3>Finanzas Públicas</h3>
        </div>
        <div class="art-card-body">
          <a href="<?php echo esc_url(home_url('/transparencia/presupuesto')); ?>"><i class="fas fa-dollar-sign" style="color:#1565C0"></i> Presupuesto de Egresos</a>
          <a href="<?php echo esc_url(home_url('/transparencia/cuenta-publica')); ?>"><i class="fas fa-file-invoice" style="color:#1565C0"></i> Cuenta Pública Anual</a>
          <a href="<?php echo esc_url(home_url('/transparencia/ingresos')); ?>"><i class="fas fa-arrow-circle-down" style="color:#1565C0"></i> Ingresos Municipales</a>
          <a href="<?php echo esc_url(home_url('/transparencia/auditoria')); ?>"><i class="fas fa-search-dollar" style="color:#1565C0"></i> Resultados de Auditorías</a>
        </div>
      </div>

      <div class="art-card">
        <div class="art-card-header morado">
          <div class="art-num"><i class="fas fa-handshake"></i></div>
          <h3>Contrataciones y Adquisiciones</h3>
        </div>
        <div class="art-card-body">
          <a href="<?php echo esc_url(home_url('/transparencia/licitaciones')); ?>"><i class="fas fa-gavel" style="color:#6A1B9A"></i> Licitaciones Públicas</a>
          <a href="<?php echo esc_url(home_url('/transparencia/contratos')); ?>"><i class="fas fa-file-signature" style="color:#6A1B9A"></i> Contratos de Compra-Venta</a>
          <a href="<?php echo esc_url(home_url('/transparencia/convenios')); ?>"><i class="fas fa-file-contract" style="color:#6A1B9A"></i> Convenios y Acuerdos</a>
        </div>
      </div>

      <div class="art-card">
        <div class="art-card-header naranja">
          <div class="art-num"><i class="fas fa-hard-hat"></i></div>
          <h3>Obra Pública FISM / FORTAMUN</h3>
        </div>
        <div class="art-card-body">
          <a href="<?php echo esc_url(home_url('/obra-publica/programa-anual')); ?>"><i class="fas fa-hammer" style="color:#E65100"></i> Programa Anual de Obra</a>
          <a href="<?php echo esc_url(home_url('/transparencia/fism')); ?>"><i class="fas fa-folder-open" style="color:#E65100"></i> Fondo FISM <?php echo date('Y'); ?></a>
          <a href="<?php echo esc_url(home_url('/transparencia/fortamun')); ?>"><i class="fas fa-folder-open" style="color:#E65100"></i> Fondo FORTAMUN <?php echo date('Y'); ?></a>
          <a href="<?php echo esc_url(home_url('/transparencia/avances-fisicos')); ?>"><i class="fas fa-tasks" style="color:#E65100"></i> Avances Físicos-Financieros</a>
        </div>
      </div>

      <div class="art-card">
        <div class="art-card-header teal">
          <div class="art-num"><i class="fas fa-unlock-alt"></i></div>
          <h3>Acceso a la Información Pública</h3>
        </div>
        <div class="art-card-body">
          <a href="<?php echo esc_url(home_url('/transparencia/solicitudes')); ?>"><i class="fas fa-envelope-open-text" style="color:#00695C"></i> Solicitudes Recibidas</a>
          <a href="<?php echo esc_url(home_url('/transparencia/pdp')); ?>"><i class="fas fa-shield-alt" style="color:#00695C"></i> Protección de Datos</a>
          <a href="<?php echo esc_url(home_url('/transparencia/infomex')); ?>"><i class="fas fa-laptop" style="color:#00695C"></i> Acceso vía INFOMEX</a>
        </div>
      </div>

    </div>

    <!-- Documentos publicados desde CPT 'documento' -->
    <div class="section-header" style="text-align:left;margin-bottom:20px">
      <span class="section-tag">Documentos</span>
      <h2 style="font-size:22px;margin-top:8px">Publicaciones Recientes</h2>
      <div class="divider-line" style="margin:12px 0 0"></div>
    </div>

    <div class="doc-table-wrap">
      <div class="doc-table-header"><i class="fas fa-folder-open"></i> Documentos Publicados <?php echo date('Y'); ?></div>
      <table class="doc-table">
        <thead>
          <tr>
            <th>Documento</th>
            <th>Categoría</th>
            <th>Período</th>
            <th>Publicación</th>
            <th>Formato</th>
            <th>Acción</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $docs = new WP_Query(['post_type' => 'documento', 'posts_per_page' => 10, 'post_status' => 'publish', 'orderby' => 'date', 'order' => 'DESC']);
          if( $docs->have_posts() ):
            while( $docs->have_posts() ): $docs->the_post();
              $formato  = get_post_meta(get_the_ID(), 'formato', true)  ?: 'PDF';
              $periodo  = get_post_meta(get_the_ID(), 'periodo', true)  ?: date('Y');
              $file_url = get_post_meta(get_the_ID(), 'archivo_url', true) ?: get_the_permalink();
              $badge_class = strtolower($formato) === 'xlsx' ? 'badge-xlsx' : (strtolower($formato) === 'pdf' ? 'badge-pdf' : 'badge-link');
              $cats = get_the_terms(get_the_ID(), 'categoria-doc');
              $cat_name = $cats ? $cats[0]->name : '—';
          ?>
            <tr>
              <td><i class="fas fa-file-alt" style="color:var(--rojo-pri);margin-right:8px"></i><?php the_title(); ?></td>
              <td><?php echo esc_html($cat_name); ?></td>
              <td><?php echo esc_html($periodo); ?></td>
              <td><?php echo esc_html( get_the_date('d/m/Y') ); ?></td>
              <td><span class="badge <?php echo esc_attr($badge_class); ?>"><?php echo esc_html($formato); ?></span></td>
              <td><a href="<?php echo esc_url($file_url); ?>" class="btn-download" target="_blank" rel="noopener"><i class="fas fa-download"></i> Descargar</a></td>
            </tr>
          <?php endwhile; wp_reset_postdata();
          else: ?>
            <tr><td colspan="6" style="text-align:center;padding:20px;color:var(--gris-texto)"><i class="fas fa-info-circle" style="margin-right:8px"></i>Agrega documentos desde el panel → <strong>Documentos de Transparencia</strong>.</td></tr>
          <?php endif; ?>
        </tbody>
      </table>
    </div>

    <!-- CTA Solicitud -->
    <div style="background:var(--gris-claro);border-radius:8px;padding:30px;margin-top:36px;text-align:center;">
      <h3 style="font-size:20px;margin-bottom:10px">¿No encontraste lo que buscas?</h3>
      <p style="color:var(--gris-texto);margin-bottom:20px;font-size:14px">Tienes derecho a solicitar cualquier información pública. Tu solicitud será respondida en <strong>20 días hábiles</strong>.</p>
      <div style="display:flex;gap:12px;justify-content:center;flex-wrap:wrap;">
        <a href="<?php echo esc_url(home_url('/transparencia/solicitudes')); ?>" class="btn-tramites" style="display:inline-flex">
          <i class="fas fa-paper-plane"></i> Presentar Solicitud de Información
        </a>
        <a href="<?php echo esc_url(home_url('/transparencia/infomex')); ?>" class="btn-buscar" style="display:inline-flex">
          <i class="fas fa-laptop"></i> Acceder a INFOMEX
        </a>
      </div>
    </div>

  </div>
</main>

<?php get_footer(); ?>
