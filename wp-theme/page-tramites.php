<?php get_header(); ?>
<div class="page-hero-inner">
  <div class="container">
    <div class="breadcrumb-wp"><a href="<?php echo esc_url(home_url('/')); ?>"><i class="fas fa-home"></i></a><span class="sep">›</span><span>Trámites y Servicios</span></div>
    <h1><i class="fas fa-file-alt" style="margin-right:10px"></i>Trámites y Servicios</h1>
    <p>Todos los trámites y servicios del Ayuntamiento de Chontla en un solo lugar.</p>
  </div>
</div>
<main class="section">
  <div class="container">
    <div class="section-header">
      <span class="section-tag">Servicios</span>
      <h2>¿Qué trámite necesitas realizar?</h2>
      <p>Selecciona el área correspondiente para conocer los requisitos y pasos a seguir.</p>
      <div class="divider-line"></div>
    </div>
    <div class="services-grid">
      <a href="<?php echo esc_url(home_url('/tramites/registro-civil/')); ?>" class="service-card" style="text-decoration:none">
        <div class="icon-wrap"><span>📋</span></div>
        <h3>Registro Civil</h3>
        <p>Actas de nacimiento, matrimonio, defunción y demás documentos del estado civil.</p>
      </a>
      <a href="<?php echo esc_url(home_url('/tramites/catastro/')); ?>" class="service-card" style="text-decoration:none">
        <div class="icon-wrap"><span>🗺️</span></div>
        <h3>Catastro Municipal</h3>
        <p>Consulta y actualización de valores catastrales, planos y constancias.</p>
      </a>
      <a href="<?php echo esc_url(home_url('/tramites/tesoreria/')); ?>" class="service-card" style="text-decoration:none">
        <div class="icon-wrap"><span>💳</span></div>
        <h3>Tesorería y Pagos</h3>
        <p>Pago de predial, agua potable, licencias y otros derechos municipales.</p>
      </a>
      <a href="<?php echo esc_url(home_url('/tramites/obras/')); ?>" class="service-card" style="text-decoration:none">
        <div class="icon-wrap"><span>🏗️</span></div>
        <h3>Licencias de Construcción</h3>
        <p>Permisos de construcción, ampliación, remodelación y uso de suelo.</p>
      </a>
      <a href="<?php echo esc_url(home_url('/tramites/seguridad/')); ?>" class="service-card" style="text-decoration:none">
        <div class="icon-wrap"><span>🚓</span></div>
        <h3>Seguridad Pública</h3>
        <p>Denuncia ciudadana, permisos de espectáculos y servicios de seguridad.</p>
      </a>
      <a href="<?php echo esc_url(home_url('/tramites/padron/')); ?>" class="service-card" style="text-decoration:none">
        <div class="icon-wrap"><span>🏪</span></div>
        <h3>Padrón de Comercios</h3>
        <p>Alta, renovación y cancelación de licencias de funcionamiento comercial.</p>
      </a>
    </div>
    <div style="margin-top:50px">
      <div class="img-placeholder" style="height:300px">
        <span class="ph-badge">Foto requerida</span>
        <i class="fas fa-building"></i>
        <p class="ph-title">Módulo / Ventanilla de atención al ciudadano</p>
        <p class="ph-size">📐 1200 × 600 px</p>
        <p class="ph-hint">Formato JPG · Sube la imagen desde Medios de WordPress</p>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>
