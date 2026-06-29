<?php get_header(); ?>
<div class="page-hero-inner">
  <div class="container">
    <div class="breadcrumb-wp"><a href="<?php echo esc_url(home_url('/')); ?>"><i class="fas fa-home"></i></a><span class="sep">›</span><span>Contacto</span></div>
    <h1><i class="fas fa-envelope" style="margin-right:10px"></i>Contacto</h1>
    <p>Estamos para atenderte. Comunícate con el H. Ayuntamiento de Chontla.</p>
  </div>
</div>
<main class="section">
  <div class="container" style="display:grid;grid-template-columns:1fr 360px;gap:36px;align-items:start">
    <div style="background:var(--blanco);border-radius:12px;box-shadow:var(--sombra);padding:32px">
      <h2 style="font-size:20px;font-weight:700;margin-bottom:6px">Envíanos un mensaje</h2>
      <p style="font-size:13.5px;color:var(--gris-texto);margin-bottom:24px">Tu mensaje será atendido en un plazo máximo de 5 días hábiles.</p>
      <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post">
        <input type="hidden" name="action" value="chontla_contacto">
        <?php wp_nonce_field('chontla_contacto_nonce'); ?>
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:16px;margin-bottom:16px">
          <div><label style="font-size:13px;font-weight:600;display:block;margin-bottom:5px">Nombre completo *</label><input type="text" name="nombre" required placeholder="Tu nombre" style="width:100%;padding:10px 12px;border:1.5px solid #ddd;border-radius:6px;font-size:13.5px;box-sizing:border-box;font-family:inherit"></div>
          <div><label style="font-size:13px;font-weight:600;display:block;margin-bottom:5px">Correo electrónico *</label><input type="email" name="email" required placeholder="tucorreo@ejemplo.com" style="width:100%;padding:10px 12px;border:1.5px solid #ddd;border-radius:6px;font-size:13.5px;box-sizing:border-box;font-family:inherit"></div>
        </div>
        <div style="margin-bottom:16px"><label style="font-size:13px;font-weight:600;display:block;margin-bottom:5px">Teléfono</label><input type="tel" name="telefono" placeholder="(789) 000-0000" style="width:100%;padding:10px 12px;border:1.5px solid #ddd;border-radius:6px;font-size:13.5px;box-sizing:border-box;font-family:inherit"></div>
        <div style="margin-bottom:16px"><label style="font-size:13px;font-weight:600;display:block;margin-bottom:5px">Asunto *</label><input type="text" name="asunto" required placeholder="Asunto de tu mensaje" style="width:100%;padding:10px 12px;border:1.5px solid #ddd;border-radius:6px;font-size:13.5px;box-sizing:border-box;font-family:inherit"></div>
        <div style="margin-bottom:22px"><label style="font-size:13px;font-weight:600;display:block;margin-bottom:5px">Mensaje *</label><textarea name="mensaje" required rows="5" placeholder="Escribe tu mensaje aquí..." style="width:100%;padding:10px 12px;border:1.5px solid #ddd;border-radius:6px;font-size:13.5px;box-sizing:border-box;font-family:inherit;resize:vertical"></textarea></div>
        <button type="submit" class="btn-primary" style="width:100%;justify-content:center"><i class="fas fa-paper-plane" style="margin-right:8px"></i>Enviar mensaje</button>
      </form>
    </div>
    <div style="display:flex;flex-direction:column;gap:16px">
      <div style="background:var(--blanco);border-radius:12px;box-shadow:var(--sombra);padding:24px">
        <h3 style="font-size:16px;font-weight:700;margin-bottom:18px;color:var(--rojo-pri)"><i class="fas fa-info-circle" style="margin-right:8px"></i>Datos de Contacto</h3>
        <div style="display:flex;flex-direction:column;gap:14px;font-size:13.5px">
          <div style="display:flex;gap:12px"><i class="fas fa-map-marker-alt" style="color:var(--rojo-pri);margin-top:2px;flex-shrink:0"></i><span><?php echo esc_html(chontla_get('municipio_direccion','Palacio Municipal, Calle Hidalgo s/n, Centro, Chontla, Ver.')); ?></span></div>
          <div style="display:flex;gap:12px"><i class="fas fa-phone" style="color:var(--rojo-pri);flex-shrink:0"></i><a href="tel:<?php echo esc_attr(chontla_get('municipio_telefono','7891234567')); ?>"><?php echo esc_html(chontla_get('municipio_telefono','(789) 123-4567')); ?></a></div>
          <div style="display:flex;gap:12px"><i class="fas fa-envelope" style="color:var(--rojo-pri);flex-shrink:0"></i><a href="mailto:<?php echo esc_attr(chontla_get('municipio_email','presidencia@chontla.gob.mx')); ?>"><?php echo esc_html(chontla_get('municipio_email','presidencia@chontla.gob.mx')); ?></a></div>
          <div style="display:flex;gap:12px"><i class="fas fa-clock" style="color:var(--rojo-pri);flex-shrink:0"></i><span>Lunes a Viernes · 8:00 – 15:00 hrs</span></div>
        </div>
      </div>
      <div class="img-placeholder" style="height:220px">
        <span class="ph-badge">Foto requerida</span>
        <i class="fas fa-building"></i>
        <p class="ph-title">Fachada del Palacio Municipal</p>
        <p class="ph-size">📐 600 × 450 px</p>
        <p class="ph-hint">Sube la imagen desde Medios de WordPress</p>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>
