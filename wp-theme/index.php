<?php get_header(); ?>

<div class="page-hero-inner">
  <div class="container">
    <h1 style="font-size:28px;margin-bottom:6px"><?php
      if ( is_archive() )        the_archive_title();
      elseif ( is_search() )     printf( 'Resultados de búsqueda: "%s"', esc_html( get_search_query() ) );
      else                       echo 'Noticias Municipales';
    ?></h1>
  </div>
</div>

<main class="section" id="main-content">
  <div class="container">
    <div class="news-grid" style="grid-template-columns: repeat(3, 1fr);">
      <?php
      $colors = [ 'news-img-1', 'news-img-2', 'news-img-3' ];
      $i = 0;
      if ( have_posts() ) :
        while ( have_posts() ) : the_post();
          $cat = get_the_category();
          $cat_name = $cat ? $cat[0]->name : 'Noticias';
          $c = $colors[ $i % 3 ];
      ?>
        <article class="news-card">
          <div class="news-img <?php echo esc_attr($c); ?>">
            <?php if( has_post_thumbnail() ) : ?>
              <?php the_post_thumbnail('medium', ['style'=>'position:absolute;inset:0;width:100%;height:100%;object-fit:cover;']); ?>
            <?php else : ?>
              <div class="news-img-icon">📰</div>
            <?php endif; ?>
            <span class="categoria"><?php echo esc_html($cat_name); ?></span>
          </div>
          <div class="news-body">
            <p class="fecha"><i class="fas fa-calendar-alt"></i> <?php echo esc_html( get_the_date('j \d\e F, Y') ); ?></p>
            <h3><?php the_title(); ?></h3>
            <p><?php echo esc_html( wp_trim_words( get_the_excerpt(), 18 ) ); ?></p>
          </div>
          <div class="news-footer">
            <a href="<?php the_permalink(); ?>" class="leer-mas">Leer más <i class="fas fa-arrow-right"></i></a>
          </div>
        </article>
      <?php $i++; endwhile;
      else : ?>
        <div style="grid-column:1/-1;text-align:center;padding:40px;color:var(--gris-texto)">
          <i class="fas fa-newspaper" style="font-size:40px;margin-bottom:16px;display:block;opacity:.4"></i>
          <p>Aún no hay publicaciones. Agrega noticias desde el panel de administración.</p>
        </div>
      <?php endif; ?>
    </div>

    <div style="display:flex;justify-content:center;gap:8px;margin-top:30px">
      <?php the_posts_pagination(['prev_text' => '<i class="fas fa-chevron-left"></i>', 'next_text' => '<i class="fas fa-chevron-right"></i>']); ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>
