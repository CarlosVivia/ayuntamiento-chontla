<?php get_header(); ?>

<!-- ==================== HERO SLIDER ==================== -->
<section class="hero" aria-label="Presentación principal">
  <div class="hero-slides">
    <?php
    // Slides dinámicos: se pueden configurar desde el Customizer o usar los defaults
    $slides = [
      [
        'tag'   => '<i class="fas fa-bullhorn"></i> Gobierno ' . chontla_get('municipio_periodo', '2022–2025'),
        'title' => 'Trabajando por un ' . explode(',', chontla_get('municipio_estado', 'Chontla'))[0] . ' más fuerte y transparente',
        'desc'  => 'Un gobierno cercano a la gente, comprometido con el desarrollo y bienestar de todos.',
        'btn'   => 'Ver Transparencia',
        'url'   => home_url('/transparencia'),
        'icon'  => 'fas fa-eye',
        'class' => 'slide-1',
      ],
      [
        'tag'   => '<i class="fas fa-hard-hat"></i> Obra Pública',
        'title' => 'Invirtiendo en la infraestructura que nuestra comunidad merece',
        'desc'  => 'Obras de pavimentación, agua potable, alumbrado público y espacios de recreación.',
        'btn'   => 'Ver Obras en Curso',
        'url'   => home_url('/obra-publica/programa-anual'),
        'icon'  => 'fas fa-search',
        'class' => 'slide-2',
      ],
      [
        'tag'   => '<i class="fas fa-laptop"></i> Servicios Digitales',
        'title' => 'Realiza tus trámites desde casa, fácil y seguro',
        'desc'  => 'Pagos en línea, documentos y seguimiento de solicitudes sin salir de tu hogar.',
        'btn'   => 'Trámites en Línea',
        'url'   => home_url('/tramites'),
        'icon'  => 'fas fa-arrow-right',
        'class' => 'slide-3',
      ],
    ];
    foreach ( $slides as $slide ) : ?>
    <div class="hero-slide <?php echo esc_attr($slide['class']); ?>">
      <div class="hero-pattern"></div>
      <div class="hero-content container">
        <span class="tag"><?php echo wp_kses_post($slide['tag']); ?></span>
        <h2><?php echo esc_html($slide['title']); ?></h2>
        <p><?php echo esc_html($slide['desc']); ?></p>
        <a href="<?php echo esc_url($slide['url']); ?>" class="btn-hero">
          <i class="<?php echo esc_attr($slide['icon']); ?>"></i> <?php echo esc_html($slide['btn']); ?>
        </a>
      </div>
    </div>
    <?php endforeach; ?>
  </div>

  <button class="hero-arrow prev" aria-label="Anterior"><i class="fas fa-chevron-left"></i></button>
  <button class="hero-arrow next" aria-label="Siguiente"><i class="fas fa-chevron-right"></i></button>
  <div class="hero-nav">
    <?php for( $i = 0; $i < count($slides); $i++ ) : ?>
      <button class="hero-dot <?php echo $i === 0 ? 'active' : ''; ?>" aria-label="Slide <?php echo $i+1; ?>"></button>
    <?php endfor; ?>
  </div>
</section>

<!-- ==================== ESTADÍSTICAS ==================== -->
<div class="stats-bar">
  <div class="container">
    <div class="stats-grid">
      <div class="stat-item">
        <div class="num" data-count="48" data-suffix=" obras">0</div>
        <div class="label">Obras concluidas</div>
      </div>
      <div class="stat-item">
        <div class="num" data-count="12500">0</div>
        <div class="label">Habitantes beneficiados</div>
      </div>
      <div class="stat-item">
        <div class="num" data-count="3200">0</div>
        <div class="label">Trámites atendidos</div>
      </div>
      <div class="stat-item">
        <div class="num" data-count="96" data-suffix="%">0</div>
        <div class="label">Satisfacción ciudadana</div>
      </div>
    </div>
  </div>
</div>

<!-- ==================== ACCESOS RÁPIDOS ==================== -->
<section class="section section-alt">
  <div class="container">
    <div class="section-header">
      <span class="section-tag">Accesos Rápidos</span>
      <h2>¿Qué necesitas hoy?</h2>
      <p>Los servicios más solicitados, al alcance de un clic.</p>
      <div class="divider-line"></div>
    </div>
    <div class="accesos-grid">
      <?php
      $accesos = [
        [ 'icon' => 'fas fa-baby fa-lg',             'label' => 'Actas de Nacimiento',  'url' => home_url('/tramites/registro-civil') ],
        [ 'icon' => 'fas fa-file-invoice-dollar fa-lg','label' => 'Pago de Predial',    'url' => home_url('/tramites/tesoreria') ],
        [ 'icon' => 'fas fa-chart-pie fa-lg',         'label' => 'Cuenta Pública',      'url' => home_url('/transparencia/cuenta-publica') ],
        [ 'icon' => 'fas fa-map-marked-alt fa-lg',    'label' => 'Catastro',            'url' => home_url('/tramites/catastro') ],
        [ 'icon' => 'fas fa-gavel fa-lg',             'label' => 'Licitaciones',        'url' => home_url('/transparencia/licitaciones') ],
        [ 'icon' => 'fas fa-comment-dots fa-lg',      'label' => 'Quejas y Denuncias',  'url' => home_url('/quejas') ],
      ];
      foreach ( $accesos as $a ) : ?>
        <a href="<?php echo esc_url($a['url']); ?>" class="acceso-item">
          <div class="acceso-icon"><i class="<?php echo esc_attr($a['icon']); ?>"></i></div>
          <span class="name"><?php echo esc_html($a['label']); ?></span>
        </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ==================== SERVICIOS MUNICIPALES ==================== -->
<section class="section">
  <div class="container">
    <div class="section-header">
      <span class="section-tag">Servicios Municipales</span>
      <h2>Te servimos con compromiso</h2>
      <p>Cada área municipal trabaja para brindarte la mejor atención y servicios de calidad.</p>
      <div class="divider-line"></div>
    </div>
    <div class="services-grid">
      <?php
      $servicios = [
        [ 'emoji' => '💧', 'title' => 'Agua Potable y Saneamiento',   'desc' => 'Reportes de fugas, nuevas conexiones y pago del servicio.',             'url' => home_url('/servicios/agua') ],
        [ 'emoji' => '🚓', 'title' => 'Seguridad Pública',             'desc' => 'Emergencias, vigilancia preventiva y denuncia ciudadana.',               'url' => home_url('/servicios/seguridad') ],
        [ 'emoji' => '🎓', 'title' => 'Educación y Cultura',           'desc' => 'Programas educativos, becas municipales y actividades culturales.',       'url' => home_url('/servicios/educacion') ],
        [ 'emoji' => '🏥', 'title' => 'Salud Municipal',               'desc' => 'Jornadas de salud, vacunación y apoyo a personas vulnerables.',           'url' => home_url('/servicios/salud') ],
        [ 'emoji' => '♻️', 'title' => 'Limpia y Medio Ambiente',       'desc' => 'Recolección de residuos, reciclaje y cuidado del entorno natural.',       'url' => home_url('/servicios/limpia') ],
        [ 'emoji' => '💡', 'title' => 'Alumbrado Público',             'desc' => 'Reporte de luminarias dañadas y programa de modernización.',              'url' => home_url('/servicios/alumbrado') ],
        [ 'emoji' => '🏪', 'title' => 'Mercados y Comercio',           'desc' => 'Permisos de funcionamiento y apoyo a microempresas locales.',             'url' => home_url('/servicios/mercados') ],
        [ 'emoji' => '⚽', 'title' => 'Deporte y Recreación',          'desc' => 'Canchas deportivas, torneos y actividades para todas las edades.',        'url' => home_url('/servicios/deportes') ],
      ];
      foreach ( $servicios as $s ) : ?>
        <div class="service-card" onclick="location.href='<?php echo esc_url($s['url']); ?>'">
          <div class="icon-wrap"><span><?php echo $s['emoji']; ?></span></div>
          <h3><?php echo esc_html($s['title']); ?></h3>
          <p><?php echo esc_html($s['desc']); ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ==================== TRANSPARENCIA DESTACADA ==================== -->
<section class="transparencia-section">
  <div class="container">
    <div class="transparencia-inner">
      <div class="transparencia-text">
        <span class="tag"><i class="fas fa-eye"></i> Gobierno Abierto</span>
        <h2>Transparencia y Rendición de Cuentas</h2>
        <p>Conforme a la Ley General de Transparencia y Acceso a la Información Pública, ponemos a tu disposición toda la información sobre el ejercicio de los recursos públicos.</p>
        <a href="<?php echo esc_url( home_url('/transparencia') ); ?>" class="btn-hero">
          <i class="fas fa-folder-open"></i> Acceder al Portal de Transparencia
        </a>
      </div>
      <div class="trans-links">
        <?php
        $trans_links = [
          [ 'icon' => 'fas fa-file-invoice-dollar', 'label' => 'Cuenta Pública',             'url' => home_url('/transparencia/cuenta-publica') ],
          [ 'icon' => 'fas fa-users',               'label' => 'Nómina Pública',             'url' => home_url('/transparencia/nomina') ],
          [ 'icon' => 'fas fa-gavel',               'label' => 'Licitaciones',               'url' => home_url('/transparencia/licitaciones') ],
          [ 'icon' => 'fas fa-search-dollar',       'label' => 'Auditorías',                 'url' => home_url('/transparencia/auditoria') ],
          [ 'icon' => 'fas fa-id-card',             'label' => 'Declaraciones Patrimoniales','url' => home_url('/transparencia/declaraciones') ],
          [ 'icon' => 'fas fa-envelope-open-text',  'label' => 'Solicitar Información',      'url' => home_url('/transparencia/solicitudes') ],
        ];
        foreach( $trans_links as $tl ) : ?>
          <a href="<?php echo esc_url($tl['url']); ?>" class="trans-link-item">
            <span class="icon"><i class="<?php echo esc_attr($tl['icon']); ?>"></i></span>
            <span class="text"><?php echo esc_html($tl['label']); ?></span>
          </a>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- ==================== NOTICIAS RECIENTES ==================== -->
<section class="section section-alt">
  <div class="container">
    <div class="section-header">
      <span class="section-tag">Comunicación Social</span>
      <h2>Últimas Noticias</h2>
      <p>Mantente informado sobre las acciones y logros del Ayuntamiento.</p>
      <div class="divider-line"></div>
    </div>
    <div class="news-grid">
      <?php
      $news_args = [
        'post_type'      => [ 'noticia', 'post' ],
        'posts_per_page' => 3,
        'post_status'    => 'publish',
        'orderby'        => 'date',
        'order'          => 'DESC',
      ];
      $news_query = new WP_Query( $news_args );
      $colors = [ 'news-img-1', 'news-img-2', 'news-img-3' ];
      $icons  = [ '🏗️', '🏥', '💰' ];
      $idx = 0;
      if ( $news_query->have_posts() ) :
        while ( $news_query->have_posts() ) : $news_query->the_post();
          $cat = get_the_category();
          $cat_name = $cat ? $cat[0]->name : 'Noticias';
      ?>
        <article class="news-card">
          <div class="news-img <?php echo esc_attr($colors[$idx]); ?>">
            <?php if( has_post_thumbnail() ) : ?>
              <?php the_post_thumbnail('medium', ['style' => 'position:absolute;inset:0;width:100%;height:100%;object-fit:cover;']); ?>
            <?php else : ?>
              <div class="news-img-icon"><?php echo $icons[$idx]; ?></div>
            <?php endif; ?>
            <span class="categoria"><?php echo esc_html($cat_name); ?></span>
          </div>
          <div class="news-body">
            <p class="fecha"><i class="fas fa-calendar-alt"></i> <?php echo esc_html( get_the_date('j \d\e F, Y') ); ?></p>
            <h3><?php the_title(); ?></h3>
            <p><?php echo esc_html( wp_trim_words( get_the_excerpt(), 20 ) ); ?></p>
          </div>
          <div class="news-footer">
            <a href="<?php the_permalink(); ?>" class="leer-mas">Leer más <i class="fas fa-arrow-right"></i></a>
          </div>
        </article>
      <?php
          $idx++;
        endwhile;
        wp_reset_postdata();
      else :
        // Sin noticias publicadas aún — mostrar placeholder
        $placeholders = [
          [ 'cat' => 'Obra Pública', 'color' => 'news-img-1', 'icon' => '🏗️', 'title' => 'Inicia rehabilitación de pavimento en el centro municipal', 'fecha' => date_i18n('j \d\e F, Y') ],
          [ 'cat' => 'Salud',        'color' => 'news-img-2', 'icon' => '🏥', 'title' => 'Jornada de vacunación gratuita beneficia a la comunidad',    'fecha' => date_i18n('j \d\e F, Y') ],
          [ 'cat' => 'Finanzas',     'color' => 'news-img-3', 'icon' => '💰', 'title' => 'Presentan Cuenta Pública del primer trimestre',              'fecha' => date_i18n('j \d\e F, Y') ],
        ];
        foreach( $placeholders as $p ) : ?>
          <article class="news-card">
            <div class="news-img <?php echo esc_attr($p['color']); ?>">
              <div class="news-img-icon"><?php echo $p['icon']; ?></div>
              <span class="categoria"><?php echo esc_html($p['cat']); ?></span>
            </div>
            <div class="news-body">
              <p class="fecha"><i class="fas fa-calendar-alt"></i> <?php echo esc_html($p['fecha']); ?></p>
              <h3><?php echo esc_html($p['title']); ?></h3>
              <p>Agrega noticias desde el panel de administración para que aparezcan aquí.</p>
            </div>
            <div class="news-footer">
              <a href="<?php echo esc_url( admin_url('post-new.php?post_type=noticia') ); ?>" class="leer-mas">Agregar noticia <i class="fas fa-arrow-right"></i></a>
            </div>
          </article>
      <?php endforeach; endif; ?>
    </div>

    <div style="text-align:center;margin-top:30px;">
      <a href="<?php echo esc_url( home_url('/noticias') ); ?>" class="btn-tramites" style="display:inline-flex">
        <i class="fas fa-newspaper"></i> Ver todas las noticias
      </a>
    </div>
  </div>
</section>

<?php get_footer(); ?>
