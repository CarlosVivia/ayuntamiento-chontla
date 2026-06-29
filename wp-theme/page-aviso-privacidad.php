<?php get_header(); ?>
<div class="page-hero-inner">
  <div class="container">
    <div class="breadcrumb-wp"><a href="<?php echo esc_url(home_url('/')); ?>"><i class="fas fa-home"></i></a><span class="sep">›</span><span>Aviso de Privacidad</span></div>
    <h1><i class="fas fa-shield-alt" style="margin-right:10px"></i>Aviso de Privacidad</h1>
    <p>Última actualización: <?php echo date_i18n('d \d\e F \d\e Y'); ?></p>
  </div>
</div>
<main class="section">
  <div class="container" style="max-width:820px;margin:0 auto">
    <div style="background:var(--blanco);border-radius:12px;box-shadow:var(--sombra);padding:40px 48px;font-size:14px;line-height:1.8;color:var(--negro-suave)">

      <div style="background:#E3F2FD;border-left:4px solid #1565C0;border-radius:6px;padding:14px 18px;margin-bottom:30px;font-size:13px;color:#1565C0">
        <i class="fas fa-info-circle" style="margin-right:8px"></i>De conformidad con la <strong>Ley Federal de Protección de Datos Personales en Posesión de los Particulares</strong> y la <strong>Ley General de Protección de Datos Personales en Posesión de Sujetos Obligados</strong>, el H. Ayuntamiento de Chontla informa sobre el tratamiento de sus datos personales.
      </div>

      <h2 style="font-size:17px;font-weight:700;color:var(--rojo-pri);margin:28px 0 10px;padding-bottom:6px;border-bottom:2px solid #eee">1. Responsable del Tratamiento</h2>
      <p>El <strong>H. Ayuntamiento de Chontla, Veracruz</strong>, con domicilio en <?php echo esc_html(chontla_get('municipio_direccion','Palacio Municipal, Calle Hidalgo s/n, Col. Centro, Chontla, Veracruz, C.P. 93070')); ?>, es responsable del uso y protección de sus datos personales.</p>

      <h2 style="font-size:17px;font-weight:700;color:var(--rojo-pri);margin:28px 0 10px;padding-bottom:6px;border-bottom:2px solid #eee">2. Datos Personales que Recabamos</h2>
      <p>Para las finalidades señaladas en el presente aviso de privacidad, podemos recabar los siguientes datos personales:</p>
      <ul style="margin:10px 0 10px 22px">
        <li>Nombre completo y apellidos</li>
        <li>Domicilio, municipio, estado y código postal</li>
        <li>Número de teléfono fijo y/o celular</li>
        <li>Correo electrónico</li>
        <li>Clave Única de Registro de Población (CURP)</li>
        <li>Registro Federal de Contribuyentes (RFC)</li>
        <li>Datos de identificación oficial</li>
      </ul>

      <h2 style="font-size:17px;font-weight:700;color:var(--rojo-pri);margin:28px 0 10px;padding-bottom:6px;border-bottom:2px solid #eee">3. Finalidades del Tratamiento</h2>
      <p>Sus datos personales serán utilizados para las siguientes <strong>finalidades primarias</strong> (necesarias para el servicio):</p>
      <ul style="margin:10px 0 10px 22px">
        <li>Prestación de trámites y servicios municipales</li>
        <li>Atención de solicitudes, quejas y sugerencias</li>
        <li>Expedición de actas, licencias y constancias</li>
        <li>Registro y seguimiento de obras y programas sociales</li>
        <li>Cumplimiento de obligaciones legales y fiscales</li>
      </ul>
      <p>Adicionalmente, para las siguientes <strong>finalidades secundarias</strong> (puede negarse sin afectar el servicio):</p>
      <ul style="margin:10px 0 10px 22px">
        <li>Envío de comunicados y boletines informativos</li>
        <li>Estadísticas y mejora de servicios municipales</li>
      </ul>

      <h2 style="font-size:17px;font-weight:700;color:var(--rojo-pri);margin:28px 0 10px;padding-bottom:6px;border-bottom:2px solid #eee">4. Transferencia de Datos</h2>
      <p>Sus datos podrán ser transferidos a autoridades federales, estatales o municipales cuando sea necesario para el cumplimiento de obligaciones legales, sin requerir su consentimiento en términos del artículo 37 de la Ley Federal de Protección de Datos Personales.</p>

      <h2 style="font-size:17px;font-weight:700;color:var(--rojo-pri);margin:28px 0 10px;padding-bottom:6px;border-bottom:2px solid #eee">5. Derechos ARCO</h2>
      <p>Usted tiene derecho a <strong>Acceder, Rectificar, Cancelar u Oponerse</strong> al tratamiento de sus datos personales (derechos ARCO). Para ejercer estos derechos, puede presentar una solicitud por escrito al Departamento de Transparencia y Acceso a la Información, con domicilio en el Palacio Municipal, o a través del correo electrónico <?php echo esc_html(chontla_get('municipio_email','presidencia@chontla.gob.mx')); ?>.</p>

      <h2 style="font-size:17px;font-weight:700;color:var(--rojo-pri);margin:28px 0 10px;padding-bottom:6px;border-bottom:2px solid #eee">6. Cambios al Aviso de Privacidad</h2>
      <p>El presente aviso puede sufrir modificaciones, cambios o actualizaciones. Toda modificación será publicada oportunamente en esta página oficial del Ayuntamiento de Chontla.</p>

      <div style="background:#FAFAFA;border-radius:8px;padding:16px 20px;margin-top:30px;font-size:12.5px;color:var(--gris-texto);text-align:center">
        <i class="fas fa-shield-alt" style="color:var(--rojo-pri);margin-right:6px"></i>
        H. Ayuntamiento de Chontla, Veracruz · Aviso de Privacidad vigente
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>
