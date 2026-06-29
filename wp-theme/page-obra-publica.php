<?php get_header(); ?>
<div class="page-hero-inner">
  <div class="container">
    <div class="breadcrumb-wp"><a href="<?php echo esc_url(home_url('/')); ?>"><i class="fas fa-home"></i></a><span class="sep">›</span><span>Obra Pública</span></div>
    <h1><i class="fas fa-hard-hat" style="margin-right:10px"></i>Obra Pública Municipal</h1>
    <p>Programa de obras, avances y contratos del H. Ayuntamiento de Chontla 2025.</p>
  </div>
</div>
<main class="section">
  <div class="container">
    <div class="img-placeholder" style="height:320px;margin-bottom:44px">
      <span class="ph-badge">Foto requerida</span>
      <i class="fas fa-hard-hat"></i>
      <p class="ph-title">Foto panorámica de obra representativa del municipio</p>
      <p class="ph-size">📐 1920 × 700 px</p>
      <p class="ph-hint">Formato JPG · Sube la imagen desde Medios de WordPress</p>
    </div>
    <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:24px">
      <a href="<?php echo esc_url(home_url('/obra-publica/programa-anual/')); ?>" style="text-decoration:none;background:var(--blanco);border-radius:12px;box-shadow:var(--sombra);padding:32px 24px;text-align:center;border-top:4px solid var(--rojo-pri);transition:var(--transicion);display:block">
        <div style="font-size:48px;margin-bottom:16px"><i class="fas fa-calendar-alt" style="color:var(--rojo-pri)"></i></div>
        <h3 style="font-size:18px;font-weight:700;color:var(--negro-suave);margin-bottom:10px">Programa Anual de Obra</h3>
        <p style="font-size:13.5px;color:var(--gris-texto);margin-bottom:16px">Catálogo de obras planeadas y en ejecución durante el ejercicio fiscal 2025.</p>
        <span style="color:var(--rojo-pri);font-weight:700;font-size:13px">Ver programa <i class="fas fa-arrow-right"></i></span>
      </a>
      <a href="<?php echo esc_url(home_url('/obra-publica/avances/')); ?>" style="text-decoration:none;background:var(--blanco);border-radius:12px;box-shadow:var(--sombra);padding:32px 24px;text-align:center;border-top:4px solid var(--verde-mexico);transition:var(--transicion);display:block">
        <div style="font-size:48px;margin-bottom:16px"><i class="fas fa-tasks" style="color:var(--verde-mexico)"></i></div>
        <h3 style="font-size:18px;font-weight:700;color:var(--negro-suave);margin-bottom:10px">Avances de Obra</h3>
        <p style="font-size:13.5px;color:var(--gris-texto);margin-bottom:16px">Seguimiento fotográfico y físico-financiero de las obras en ejecución.</p>
        <span style="color:var(--verde-mexico);font-weight:700;font-size:13px">Ver avances <i class="fas fa-arrow-right"></i></span>
      </a>
      <a href="<?php echo esc_url(home_url('/obra-publica/contratos/')); ?>" style="text-decoration:none;background:var(--blanco);border-radius:12px;box-shadow:var(--sombra);padding:32px 24px;text-align:center;border-top:4px solid #1565C0;transition:var(--transicion);display:block">
        <div style="font-size:48px;margin-bottom:16px"><i class="fas fa-file-contract" style="color:#1565C0"></i></div>
        <h3 style="font-size:18px;font-weight:700;color:var(--negro-suave);margin-bottom:10px">Contratos y Licitaciones</h3>
        <p style="font-size:13.5px;color:var(--gris-texto);margin-bottom:16px">Documentación oficial de contratos, licitaciones y proveedores.</p>
        <span style="color:#1565C0;font-weight:700;font-size:13px">Ver contratos <i class="fas fa-arrow-right"></i></span>
      </a>
    </div>
    <div style="background:linear-gradient(135deg,var(--rojo-oscuro),var(--rojo-pri));border-radius:12px;padding:30px;margin-top:40px;display:grid;grid-template-columns:repeat(4,1fr);gap:20px;text-align:center;color:#fff">
      <div><div style="font-size:36px;font-weight:700;margin-bottom:4px">5</div><p style="font-size:12px;opacity:.85;text-transform:uppercase">Obras en 2025</p></div>
      <div><div style="font-size:36px;font-weight:700;margin-bottom:4px">$4.1M</div><p style="font-size:12px;opacity:.85;text-transform:uppercase">Inversión total</p></div>
      <div><div style="font-size:36px;font-weight:700;margin-bottom:4px">2</div><p style="font-size:12px;opacity:.85;text-transform:uppercase">Obras concluidas</p></div>
      <div><div style="font-size:36px;font-weight:700;margin-bottom:4px">3</div><p style="font-size:12px;opacity:.85;text-transform:uppercase">En proceso</p></div>
    </div>
  </div>
</main>
<?php get_footer(); ?>
