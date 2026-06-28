<?php get_header(); ?>
<main class="section" id="main-content">
  <div class="container" style="text-align:center;padding:80px 20px">
    <div style="font-size:80px;margin-bottom:20px">🏛️</div>
    <h1 style="font-size:80px;font-weight:700;color:var(--rojo-pri);line-height:1">404</h1>
    <h2 style="font-size:22px;margin-bottom:14px">Página no encontrada</h2>
    <p style="color:var(--gris-texto);max-width:440px;margin:0 auto 28px">La página que buscas no existe o fue movida. Usa el menú para navegar o regresa al inicio.</p>
    <a href="<?php echo esc_url(home_url('/')); ?>" class="btn-tramites" style="display:inline-flex">
      <i class="fas fa-home"></i> Ir al Inicio
    </a>
  </div>
</main>
<?php get_footer(); ?>
