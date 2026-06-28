<?php get_header(); ?>

<div class="page-hero-inner">
  <div class="container">
    <div class="breadcrumb-wp">
      <a href="<?php echo esc_url(home_url('/')); ?>"><i class="fas fa-home"></i></a>
      <span class="sep">›</span>
      <a href="<?php echo esc_url(home_url('/noticias')); ?>">Noticias</a>
      <span class="sep">›</span>
      <span><?php the_title(); ?></span>
    </div>
    <h1 style="font-size:28px;max-width:800px"><?php the_title(); ?></h1>
    <p style="opacity:.8;margin-top:8px;font-size:13px">
      <i class="fas fa-calendar-alt"></i> <?php echo esc_html( get_the_date('j \d\e F, Y') ); ?>
      &nbsp;&nbsp;<i class="fas fa-user"></i> <?php the_author(); ?>
    </p>
  </div>
</div>

<main class="section" id="main-content">
  <div class="container" style="max-width:860px">
    <?php while( have_posts() ): the_post(); ?>
      <?php if( has_post_thumbnail() ): ?>
        <div style="margin-bottom:28px;border-radius:8px;overflow:hidden">
          <?php the_post_thumbnail('large', ['style'=>'width:100%;height:auto']); ?>
        </div>
      <?php endif; ?>
      <div class="entry-content page-content"><?php the_content(); ?></div>
      <div style="margin-top:30px;padding-top:20px;border-top:1px solid var(--gris-medio);display:flex;gap:10px;flex-wrap:wrap">
        <a href="<?php echo esc_url(home_url('/noticias')); ?>" class="btn-buscar" style="display:inline-flex">
          <i class="fas fa-arrow-left"></i> Volver a Noticias
        </a>
      </div>
    <?php endwhile; ?>
  </div>
</main>

<?php get_footer(); ?>
