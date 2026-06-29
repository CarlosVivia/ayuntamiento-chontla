<?php get_header(); ?>
<div class="page-hero-inner">
  <div class="container">
    <div class="breadcrumb-wp"><a href="<?php echo esc_url(home_url('/')); ?>"><i class="fas fa-home"></i></a><span class="sep">›</span><span>Quejas y Sugerencias</span></div>
    <h1><i class="fas fa-comment-dots" style="margin-right:10px"></i>Quejas, Denuncias y Sugerencias</h1>
    <p>Tu opinión nos ayuda a mejorar los servicios del Ayuntamiento de Chontla.</p>
  </div>
</div>
<main class="section">
  <div class="container">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
      $content = get_the_content();
      if ( trim( strip_tags( $content ) ) ) : ?>
        <div class="page-content"><?php the_content(); ?></div>
    <?php else : ?>
      <div style="display:grid;grid-template-columns:1fr 1fr;gap:28px">
        <div style="background:var(--blanco);border-radius:12px;box-shadow:var(--sombra);padding:30px">
          <h2 style="font-size:18px;font-weight:700;margin-bottom:6px">Presenta tu queja o sugerencia</h2>
          <p style="font-size:13px;color:var(--gris-texto);margin-bottom:22px">Todas las quejas son atendidas por la Contraloría Municipal.</p>
          <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post">
            <input type="hidden" name="action" value="chontla_queja">
            <?php wp_nonce_field('chontla_queja_nonce'); ?>
            <div style="margin-bottom:14px"><label style="font-size:13px;font-weight:600;display:block;margin-bottom:4px">Tipo de reporte *</label><select name="tipo" required style="width:100%;padding:10px 12px;border:1.5px solid #ddd;border-radius:6px;font-size:13.5px;box-sizing:border-box;background:#fff;font-family:inherit"><option value="">Selecciona...</option><option>Queja contra servidor público</option><option>Denuncia de corrupción</option><option>Deficiente servicio municipal</option><option>Queja de obra pública</option><option>Sugerencia de mejora</option><option>Petición ciudadana</option></select></div>
            <div style="margin-bottom:14px"><label style="font-size:13px;font-weight:600;display:block;margin-bottom:4px">Área o dependencia involucrada</label><input type="text" name="area" placeholder="¿Qué área o funcionario involucra?" style="width:100%;padding:10px 12px;border:1.5px solid #ddd;border-radius:6px;font-size:13.5px;box-sizing:border-box;font-family:inherit"></div>
            <div style="display:grid;grid-template-columns:1fr 1fr;gap:12px;margin-bottom:14px">
              <div><label style="font-size:13px;font-weight:600;display:block;margin-bottom:4px">Nombre (opcional)</label><input type="text" name="nombre" placeholder="Puede ser anónimo" style="width:100%;padding:10px 12px;border:1.5px solid #ddd;border-radius:6px;font-size:13.5px;box-sizing:border-box;font-family:inherit"></div>
              <div><label style="font-size:13px;font-weight:600;display:block;margin-bottom:4px">Teléfono (opcional)</label><input type="tel" name="telefono" placeholder="Para seguimiento" style="width:100%;padding:10px 12px;border:1.5px solid #ddd;border-radius:6px;font-size:13.5px;box-sizing:border-box;font-family:inherit"></div>
            </div>
            <div style="margin-bottom:14px"><label style="font-size:13px;font-weight:600;display:block;margin-bottom:4px">Descripción detallada *</label><textarea name="descripcion" required rows="6" placeholder="Describe la situación, indicando fecha, lugar y personas involucradas..." style="width:100%;padding:10px 12px;border:1.5px solid #ddd;border-radius:6px;font-size:13.5px;box-sizing:border-box;font-family:inherit;resize:vertical"></textarea></div>
            <div style="background:#E8F5E9;border-radius:6px;padding:10px 14px;margin-bottom:16px;font-size:12px;color:#1B5E20"><i class="fas fa-lock" style="margin-right:6px"></i>Tu información está protegida. La denuncia anónima tiene la misma validez legal.</div>
            <button type="submit" class="btn-primary" style="width:100%;justify-content:center"><i class="fas fa-paper-plane" style="margin-right:8px"></i>Enviar reporte</button>
          </form>
        </div>
        <div style="display:flex;flex-direction:column;gap:14px">
          <div style="background:#FFF8E1;border-radius:12px;padding:22px;border-left:4px solid var(--dorado)">
            <h3 style="font-size:15px;font-weight:700;margin-bottom:10px;color:#5D4037"><i class="fas fa-exclamation-triangle" style="color:var(--dorado);margin-right:8px"></i>Contraloría Municipal</h3>
            <p style="font-size:13px;color:#5D4037;margin-bottom:8px">Órgano de control interno encargado de recibir y dar seguimiento a quejas ciudadanas.</p>
            <p style="font-size:13px"><i class="fas fa-phone" style="color:var(--dorado);margin-right:8px"></i><?php echo esc_html(chontla_get('municipio_telefono','(789) 123-4567')); ?> ext. 20</p>
            <p style="font-size:13px"><i class="fas fa-envelope" style="color:var(--dorado);margin-right:8px"></i>contraloria@chontla.gob.mx</p>
          </div>
          <div style="background:linear-gradient(135deg,var(--rojo-oscuro),var(--rojo-pri));color:#fff;border-radius:12px;padding:22px;text-align:center">
            <i class="fas fa-clock" style="font-size:32px;opacity:.8;margin-bottom:10px"></i>
            <h4 style="font-size:15px;font-weight:700;margin-bottom:6px">Tiempo de respuesta</h4>
            <p style="font-size:13px;opacity:.9">Las quejas se atienden en un plazo máximo de <strong>15 días hábiles</strong> conforme al Reglamento Municipal.</p>
          </div>
          <div style="background:var(--blanco);border-radius:12px;box-shadow:var(--sombra);padding:22px">
            <h3 style="font-size:15px;font-weight:700;margin-bottom:14px"><i class="fas fa-phone" style="color:var(--rojo-pri);margin-right:8px"></i>Línea de Denuncia Federal</h3>
            <p style="font-size:14px;font-weight:700;color:var(--rojo-pri)">800 386 6926</p>
            <p style="font-size:12.5px;color:var(--gris-texto)">Gratuita · 24 horas · Secretaría de la Función Pública</p>
          </div>
        </div>
      </div>
    <?php endif; endwhile; endif; ?>
  </div>
</main>
<?php get_footer(); ?>
