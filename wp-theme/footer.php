<?php
$nombre    = chontla_get('municipio_nombre',    'H. Ayuntamiento de Chontla');
$estado    = chontla_get('municipio_estado',    'Veracruz, México');
$periodo   = chontla_get('municipio_periodo',   '2022 – 2025');
$telefono  = chontla_get('municipio_telefono',  '(789) 123-4567');
$email     = chontla_get('municipio_email',     'presidencia@chontla.gob.mx');
$direccion = chontla_get('municipio_direccion', 'Palacio Municipal S/N, Col. Centro, Chontla, Veracruz');
?>

<!-- Contacto banner -->
<div class="contacto-banner" aria-label="Información de contacto">
  <div class="container">
    <div class="contacto-inner">
      <div class="contacto-item">
        <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
        <h4>Visítanos</h4>
        <p><?php echo esc_html($direccion); ?></p>
      </div>
      <div class="contacto-item">
        <div class="icon"><i class="fas fa-clock"></i></div>
        <h4>Horario de Atención</h4>
        <p>Lunes a Viernes<br>8:00 – 15:00 hrs</p>
      </div>
      <div class="contacto-item">
        <div class="icon"><i class="fas fa-envelope"></i></div>
        <h4>Escríbenos</h4>
        <a href="tel:<?php echo esc_attr( preg_replace('/[^0-9]/', '', $telefono) ); ?>"><?php echo esc_html($telefono); ?></a><br>
        <a href="mailto:<?php echo esc_attr($email); ?>"><?php echo esc_html($email); ?></a>
      </div>
    </div>
  </div>
</div>

<!-- Footer principal -->
<footer class="footer" role="contentinfo">
  <div class="container">
    <div class="footer-grid">

      <div class="footer-brand">
        <h3><i class="fas fa-shield-halved" style="color:var(--rojo-pri);margin-right:8px"></i><?php echo esc_html($nombre); ?></h3>
        <p>Administración Municipal <?php echo esc_html($periodo); ?>. Trabajando cada día por el bienestar, progreso y la dignidad de todos los ciudadanos.</p>
        <div class="footer-social">
          <?php if( $fb = chontla_get('municipio_facebook') ):  ?><a href="<?php echo esc_url($fb); ?>" target="_blank" rel="noopener" title="Facebook"><i class="fab fa-facebook-f"></i></a><?php endif; ?>
          <?php if( $tw = chontla_get('municipio_twitter') ):   ?><a href="<?php echo esc_url($tw); ?>" target="_blank" rel="noopener" title="Twitter"><i class="fab fa-x-twitter"></i></a><?php endif; ?>
          <?php if( $yt = chontla_get('municipio_youtube') ):   ?><a href="<?php echo esc_url($yt); ?>" target="_blank" rel="noopener" title="YouTube"><i class="fab fa-youtube"></i></a><?php endif; ?>
          <?php if( $ig = chontla_get('municipio_instagram') ): ?><a href="<?php echo esc_url($ig); ?>" target="_blank" rel="noopener" title="Instagram"><i class="fab fa-instagram"></i></a><?php endif; ?>
        </div>
      </div>

      <div class="footer-col">
        <h4>Transparencia</h4>
        <ul>
          <li><a href="<?php echo esc_url( home_url('/transparencia/estructura') ); ?>">Estructura Orgánica</a></li>
          <li><a href="<?php echo esc_url( home_url('/transparencia/cuenta-publica') ); ?>">Cuenta Pública</a></li>
          <li><a href="<?php echo esc_url( home_url('/transparencia/nomina') ); ?>">Nómina de Personal</a></li>
          <li><a href="<?php echo esc_url( home_url('/transparencia/licitaciones') ); ?>">Licitaciones</a></li>
          <li><a href="<?php echo esc_url( home_url('/transparencia/declaraciones') ); ?>">Declaraciones Patrimoniales</a></li>
          <li><a href="<?php echo esc_url( home_url('/transparencia/solicitudes') ); ?>">Solicitudes de Información</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h4>Gobierno</h4>
        <?php
        wp_nav_menu([
          'theme_location' => 'menu-footer',
          'container'      => false,
          'items_wrap'     => '<ul>%3$s</ul>',
          'fallback_cb'    => function() {
            echo '<ul>';
            $links = [
              'Historia del Municipio' => '/historia',
              'H. Cabildo'             => '/cabildo',
              'Plan de Desarrollo'     => '/plan-desarrollo',
              'Quejas y Denuncias'     => '/quejas',
              'Trámites en Línea'      => '/tramites',
              'Contacto'               => '/contacto',
            ];
            foreach($links as $label => $path) {
              echo '<li><a href="' . esc_url(home_url($path)) . '">' . esc_html($label) . '</a></li>';
            }
            echo '</ul>';
          },
        ]);
        ?>
      </div>

      <div class="footer-col">
        <h4>Recursos de Gobierno</h4>
        <ul>
          <li><a href="https://www.gob.mx"          target="_blank" rel="noopener">Gobierno Federal</a></li>
          <li><a href="https://veracruz.gob.mx"     target="_blank" rel="noopener">Gob. de Veracruz</a></li>
          <li><a href="https://home.inai.org.mx"    target="_blank" rel="noopener">INAI</a></li>
          <li><a href="https://www.inegi.org.mx"    target="_blank" rel="noopener">INEGI</a></li>
          <li><a href="https://www.imss.gob.mx"     target="_blank" rel="noopener">IMSS</a></li>
          <li><a href="https://www.sat.gob.mx"      target="_blank" rel="noopener">SAT</a></li>
        </ul>
      </div>

    </div>

    <div class="footer-bottom">
      <p>© <?php echo esc_html( date('Y') ); ?> <?php echo esc_html($nombre); ?>. Todos los derechos reservados.</p>
      <div class="footer-logos">
        <span class="logo-gov">🇲🇽 Gob. MX</span>
        <span class="logo-gov"><?php echo esc_html( explode(',', $estado)[0] ); ?></span>
      </div>
      <p>
        <a href="<?php echo esc_url( home_url('/aviso-privacidad') ); ?>">Aviso de Privacidad</a> &nbsp;|&nbsp;
        <a href="<?php echo esc_url( home_url('/terminos') ); ?>">Términos de Uso</a> &nbsp;|&nbsp;
        <a href="<?php echo esc_url( home_url('/accesibilidad') ); ?>">Accesibilidad</a>
      </p>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
