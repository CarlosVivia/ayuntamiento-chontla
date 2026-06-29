<?php get_header(); ?>
<div class="page-hero-inner">
  <div class="container">
    <div class="breadcrumb-wp"><a href="<?php echo esc_url(home_url('/')); ?>"><i class="fas fa-home"></i></a><span class="sep">›</span><span>Turismo</span></div>
    <h1><i class="fas fa-map-marked-alt" style="margin-right:10px"></i>Turismo en Chontla</h1>
    <p>Descubre la riqueza natural, cultural y gastronómica del municipio de Chontla, Veracruz.</p>
  </div>
</div>
<main>
  <div class="img-placeholder" style="height:380px;border-radius:0;border-left:none;border-right:none;border-top:none">
    <span class="ph-badge">Foto requerida</span>
    <i class="fas fa-mountain"></i>
    <p class="ph-title">Paisaje o atractivo principal del municipio</p>
    <p class="ph-size">📐 1920 × 800 px</p>
    <p class="ph-hint">Formato JPG · Sube la imagen desde Medios de WordPress</p>
  </div>
  <div class="section">
    <div class="container">
      <div class="section-header">
        <span class="section-tag">Descubre Chontla</span>
        <h2>Atractivos Turísticos</h2>
        <p>Un municipio con gran riqueza natural y cultural en el norte de Veracruz.</p>
        <div class="divider-line"></div>
      </div>
      <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:20px;margin-bottom:50px">
        <a href="<?php echo esc_url(home_url('/turismo/atractivos/')); ?>" style="text-decoration:none;background:var(--blanco);border-radius:12px;overflow:hidden;box-shadow:var(--sombra);display:block">
          <div class="img-placeholder" style="height:200px;border-radius:0;border:none;min-height:unset"><i class="fas fa-tree" style="font-size:36px;color:var(--verde-mexico)"></i><p class="ph-size" style="font-size:12px">📐 700 × 450 px</p></div>
          <div style="padding:18px"><h3 style="font-size:15px;font-weight:700;color:var(--negro-suave);margin-bottom:6px">Atractivos Naturales</h3><p style="font-size:13px;color:var(--gris-texto)">Ríos, cascadas y paisajes naturales únicos de la Huasteca Veracruzana.</p><p style="font-size:13px;color:var(--rojo-pri);font-weight:700;margin-top:10px">Explorar <i class="fas fa-arrow-right"></i></p></div>
        </a>
        <a href="<?php echo esc_url(home_url('/turismo/gastronomia/')); ?>" style="text-decoration:none;background:var(--blanco);border-radius:12px;overflow:hidden;box-shadow:var(--sombra);display:block">
          <div class="img-placeholder" style="height:200px;border-radius:0;border:none;min-height:unset"><i class="fas fa-utensils" style="font-size:36px;color:var(--dorado)"></i><p class="ph-size" style="font-size:12px">📐 700 × 450 px</p></div>
          <div style="padding:18px"><h3 style="font-size:15px;font-weight:700;color:var(--negro-suave);margin-bottom:6px">Gastronomía Local</h3><p style="font-size:13px;color:var(--gris-texto)">Sabores auténticos de la cocina totonaca y tradición gastronómica regional.</p><p style="font-size:13px;color:var(--rojo-pri);font-weight:700;margin-top:10px">Explorar <i class="fas fa-arrow-right"></i></p></div>
        </a>
        <a href="<?php echo esc_url(home_url('/turismo/eventos/')); ?>" style="text-decoration:none;background:var(--blanco);border-radius:12px;overflow:hidden;box-shadow:var(--sombra);display:block">
          <div class="img-placeholder" style="height:200px;border-radius:0;border:none;min-height:unset"><i class="fas fa-music" style="font-size:36px;color:var(--rojo-pri)"></i><p class="ph-size" style="font-size:12px">📐 700 × 450 px</p></div>
          <div style="padding:18px"><h3 style="font-size:15px;font-weight:700;color:var(--negro-suave);margin-bottom:6px">Eventos y Festivales</h3><p style="font-size:13px;color:var(--gris-texto)">Fiestas patronales, festivales culturales y eventos tradicionales.</p><p style="font-size:13px;color:var(--rojo-pri);font-weight:700;margin-top:10px">Explorar <i class="fas fa-arrow-right"></i></p></div>
        </a>
      </div>
      <div style="background:linear-gradient(135deg,var(--verde-oscuro),var(--verde-mexico));border-radius:12px;padding:36px;color:#fff;display:grid;grid-template-columns:repeat(4,1fr);gap:20px;text-align:center">
        <div><div style="font-size:32px;margin-bottom:8px"><i class="fas fa-thermometer-half"></i></div><h4 style="font-size:13px;font-weight:700;text-transform:uppercase;opacity:.85;margin-bottom:4px">Clima</h4><p style="font-size:14px">Cálido húmedo<br>24–32°C</p></div>
        <div><div style="font-size:32px;margin-bottom:8px"><i class="fas fa-clock"></i></div><h4 style="font-size:13px;font-weight:700;text-transform:uppercase;opacity:.85;margin-bottom:4px">Mejor Época</h4><p style="font-size:14px">Nov – Abr<br>temporada seca</p></div>
        <div><div style="font-size:32px;margin-bottom:8px"><i class="fas fa-car"></i></div><h4 style="font-size:13px;font-weight:700;text-transform:uppercase;opacity:.85;margin-bottom:4px">Cómo llegar</h4><p style="font-size:14px">Carretera federal<br>Poza Rica – Tuxpan</p></div>
        <div><div style="font-size:32px;margin-bottom:8px"><i class="fas fa-map-pin"></i></div><h4 style="font-size:13px;font-weight:700;text-transform:uppercase;opacity:.85;margin-bottom:4px">Distancia</h4><p style="font-size:14px">45 km de Poza Rica<br>80 km de Tuxpan</p></div>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>
