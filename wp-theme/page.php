<?php get_header(); ?>

<!-- Cabecera de página genérica -->
<div class="page-hero-inner">
  <div class="container">
    <div class="breadcrumb-wp">
      <a href="<?php echo esc_url( home_url('/') ); ?>"><i class="fas fa-home"></i></a>
      <?php
      $ancestors = array_reverse( get_post_ancestors( get_the_ID() ) );
      foreach( $ancestors as $ancestor ) {
        echo ' <span class="sep">›</span> <a href="' . esc_url( get_permalink($ancestor) ) . '">' . esc_html( get_the_title($ancestor) ) . '</a>';
      }
      echo ' <span class="sep">›</span> <span>' . esc_html( get_the_title() ) . '</span>';
      ?>
    </div>
    <h1><?php the_title(); ?></h1>
  </div>
</div>

<main class="page-main section" id="main-content" role="main">
  <div class="container">
    <?php
    while ( have_posts() ) : the_post();
      ?>
      <div class="page-content entry-content">
        <?php the_content(); ?>
      </div>
      <?php
    endwhile;
    ?>
  </div>
</main>

<?php get_footer(); ?>
