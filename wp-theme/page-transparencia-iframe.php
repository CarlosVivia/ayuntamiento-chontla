<?php
/**
 * Template Name: Transparencia (Portal Externo)
 * Template Post Type: page
 *
 * Embebe el portal oficial transparencia.chontla.gob.mx
 * conservando el header y footer del sitio municipal.
 */
get_header(); ?>

<style>
/* ---- Cabecera de sección ---- */
.trans-iframe-hero {
  background: linear-gradient(135deg, var(--rojo-oscuro) 0%, var(--rojo-pri) 60%, #C41230 100%);
  padding: 22px 0;
  color: var(--blanco);
  position: relative;
  overflow: hidden;
}
.trans-iframe-hero::before {
  content: '';
  position: absolute;
  top: -50px; right: -50px;
  width: 200px; height: 200px;
  border: 40px solid rgba(255,255,255,.06);
  border-radius: 50%;
}
.trans-iframe-hero .container {
  position: relative; z-index: 2;
  display: flex;
  align-items: center;
  justify-content: space-between;
  flex-wrap: wrap;
  gap: 14px;
}
.trans-iframe-hero .breadcrumb-wp {
  display: flex; gap: 6px; align-items: center;
  font-size: 12.5px; opacity: .8;
  width: 100%; margin-bottom: 4px;
}
.trans-iframe-hero .breadcrumb-wp a { color: var(--blanco); }
.trans-iframe-hero .breadcrumb-wp a:hover { text-decoration: underline; }
.trans-iframe-hero h1 {
  font-size: 24px; font-weight: 700;
  display: flex; align-items: center; gap: 10px;
}
.trans-iframe-hero .ext-badge {
  display: inline-flex; align-items: center; gap: 6px;
  background: rgba(255,255,255,.15);
  border: 1px solid rgba(255,255,255,.25);
  padding: 6px 14px;
  border-radius: 20px;
  font-size: 12px;
  font-weight: 600;
  backdrop-filter: blur(4px);
}

/* ---- Aviso legal ---- */
.iframe-notice {
  background: #FFF8E1;
  border-left: 4px solid var(--dorado);
  padding: 10px 18px;
  font-size: 12.5px;
  color: #5D4037;
  display: flex;
  align-items: center;
  gap: 10px;
}
.iframe-notice i { color: var(--dorado); font-size: 16px; flex-shrink: 0; }
.iframe-notice a { color: var(--rojo-pri); font-weight: 600; }

/* ---- Contenedor iframe ---- */
.trans-iframe-wrap {
  width: 100%;
  background: #f9f9f9;
  position: relative;
}

.trans-iframe-wrap iframe {
  display: block;
  width: 100%;
  height: calc(100vh - 200px);
  min-height: 700px;
  border: none;
  background: #fff;
}

/* Pantalla de error si iframe bloqueado */
.iframe-fallback {
  display: none;
  padding: 60px 20px;
  text-align: center;
  background: var(--gris-claro);
}
.iframe-fallback .icon { font-size: 52px; margin-bottom: 16px; }
.iframe-fallback h3 { font-size: 20px; margin-bottom: 10px; color: var(--negro-suave); }
.iframe-fallback p { color: var(--gris-texto); max-width: 480px; margin: 0 auto 20px; font-size: 14px; }

/* Barra de herramientas del iframe */
.iframe-toolbar {
  background: var(--blanco);
  border-bottom: 2px solid var(--gris-medio);
  padding: 8px 0;
}
.iframe-toolbar .container {
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 10px;
  flex-wrap: wrap;
}
.iframe-url-bar {
  flex: 1;
  min-width: 200px;
  display: flex;
  align-items: center;
  gap: 8px;
  background: var(--gris-claro);
  border: 1.5px solid var(--gris-medio);
  border-radius: 20px;
  padding: 6px 14px;
  font-size: 12.5px;
  color: var(--gris-texto);
}
.iframe-url-bar i { color: var(--verde-mexico); }
.iframe-actions {
  display: flex;
  gap: 8px;
  align-items: center;
}
.iframe-btn {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  padding: 7px 14px;
  border-radius: 6px;
  font-size: 12.5px;
  font-weight: 600;
  cursor: pointer;
  transition: var(--transicion);
  border: none;
  text-decoration: none;
}
.iframe-btn-reload {
  background: var(--gris-claro);
  color: var(--negro-suave);
  border: 1.5px solid var(--gris-medio);
}
.iframe-btn-reload:hover { background: var(--gris-medio); }
.iframe-btn-open {
  background: var(--rojo-pri);
  color: var(--blanco);
}
.iframe-btn-open:hover { background: var(--rojo-oscuro); }
.iframe-btn-fullscreen {
  background: var(--verde-mexico);
  color: var(--blanco);
}
.iframe-btn-fullscreen:hover { background: var(--verde-oscuro); }

/* Modo pantalla completa */
.trans-iframe-wrap.fullscreen {
  position: fixed;
  inset: 0;
  z-index: 9000;
  height: 100vh;
}
.trans-iframe-wrap.fullscreen iframe {
  height: calc(100vh - 48px);
}
.fullscreen-bar {
  display: none;
  background: var(--rojo-pri);
  color: var(--blanco);
  padding: 10px 20px;
  align-items: center;
  justify-content: space-between;
  font-size: 13px;
  font-weight: 600;
}
.trans-iframe-wrap.fullscreen .fullscreen-bar { display: flex; }

@media (max-width: 768px) {
  .trans-iframe-wrap iframe { height: calc(100vh - 160px); min-height: 500px; }
  .iframe-url-bar { display: none; }
}
</style>

<!-- Cabecera de sección -->
<div class="trans-iframe-hero">
  <div class="container">
    <div class="breadcrumb-wp">
      <a href="<?php echo esc_url( home_url('/') ); ?>"><i class="fas fa-home"></i></a>
      <span>›</span>
      <span>Transparencia</span>
    </div>
    <h1>
      <i class="fas fa-eye"></i> Portal de Transparencia
    </h1>
    <a href="http://transparencia.chontla.gob.mx/" target="_blank" rel="noopener" class="ext-badge">
      <i class="fas fa-external-link-alt"></i> Abrir en nueva pestaña
    </a>
  </div>
</div>

<!-- Aviso -->
<div class="iframe-notice">
  <i class="fas fa-info-circle"></i>
  <span>
    El contenido de este portal es administrado por el
    <strong>Órgano de Fiscalización Superior del Estado de Veracruz (ORFIS)</strong>
    en cumplimiento de la Ley N° 875 de Transparencia.
    <a href="http://transparencia.chontla.gob.mx/" target="_blank" rel="noopener">Ver sitio original &rarr;</a>
  </span>
</div>

<!-- Barra de herramientas -->
<div class="iframe-toolbar">
  <div class="container">
    <div class="iframe-url-bar">
      <i class="fas fa-lock"></i>
      <span>transparencia.chontla.gob.mx</span>
    </div>
    <div class="iframe-actions">
      <button class="iframe-btn iframe-btn-reload" id="btn-iframe-reload" title="Recargar">
        <i class="fas fa-redo"></i> Recargar
      </button>
      <button class="iframe-btn iframe-btn-fullscreen" id="btn-iframe-full" title="Pantalla completa">
        <i class="fas fa-expand"></i> Pantalla completa
      </button>
      <a href="http://transparencia.chontla.gob.mx/" target="_blank" rel="noopener" class="iframe-btn iframe-btn-open">
        <i class="fas fa-external-link-alt"></i> Abrir
      </a>
    </div>
  </div>
</div>

<!-- Contenedor iframe -->
<div class="trans-iframe-wrap" id="iframe-wrap">
  <div class="fullscreen-bar">
    <span><i class="fas fa-eye" style="margin-right:8px"></i>Portal de Transparencia — Chontla</span>
    <button id="btn-exit-full" style="background:rgba(255,255,255,.2);border:none;color:#fff;padding:6px 14px;border-radius:4px;cursor:pointer;font-size:12px">
      <i class="fas fa-compress"></i> Salir
    </button>
  </div>

  <iframe
    id="trans-iframe"
    src="http://transparencia.chontla.gob.mx/"
    title="Portal de Transparencia Municipal de Chontla"
    allowfullscreen
    loading="lazy"
    sandbox="allow-same-origin allow-scripts allow-forms allow-popups allow-top-navigation"
  ></iframe>

  <!-- Pantalla alternativa si el iframe es bloqueado -->
  <div class="iframe-fallback" id="iframe-fallback">
    <div class="icon">🔒</div>
    <h3>El portal no permite ser incrustado</h3>
    <p>El sitio de transparencia tiene restricciones de seguridad que impiden mostrarlo aquí. Puedes acceder directamente haciendo clic en el botón.</p>
    <a href="http://transparencia.chontla.gob.mx/" target="_blank" rel="noopener" class="btn-tramites" style="display:inline-flex;margin-bottom:12px">
      <i class="fas fa-external-link-alt"></i> Abrir Portal de Transparencia
    </a>
    <br>
    <a href="<?php echo esc_url( home_url('/transparencia-local') ); ?>" class="btn-buscar" style="display:inline-flex">
      <i class="fas fa-folder-open"></i> Ver documentos en este sitio
    </a>
  </div>
</div>

<script>
(function() {
  const iframe   = document.getElementById('trans-iframe');
  const wrap     = document.getElementById('iframe-wrap');
  const fallback = document.getElementById('iframe-fallback');
  const btnFull  = document.getElementById('btn-iframe-full');
  const btnExit  = document.getElementById('btn-exit-full');
  const btnReload= document.getElementById('btn-iframe-reload');

  // Detectar si el iframe fue bloqueado (timeout 10s)
  let loaded = false;
  iframe.addEventListener('load', () => { loaded = true; });
  setTimeout(() => {
    if (!loaded) {
      iframe.style.display = 'none';
      fallback.style.display = 'block';
    }
  }, 10000);

  // Recargar
  btnReload?.addEventListener('click', () => {
    iframe.src = iframe.src;
    loaded = false;
  });

  // Pantalla completa
  btnFull?.addEventListener('click', () => {
    wrap.classList.add('fullscreen');
    document.body.style.overflow = 'hidden';
    btnFull.innerHTML = '<i class="fas fa-compress"></i> Salir';
    btnFull.classList.remove('iframe-btn-fullscreen');
    btnFull.classList.add('iframe-btn-reload');
    btnFull.removeEventListener('click', arguments.callee);
  });

  btnExit?.addEventListener('click', () => {
    wrap.classList.remove('fullscreen');
    document.body.style.overflow = '';
  });

  // Ajuste dinámico de altura
  function adjustHeight() {
    const vh = window.innerHeight;
    const toolbar = document.querySelector('.iframe-toolbar')?.offsetHeight || 0;
    const hero    = document.querySelector('.trans-iframe-hero')?.offsetHeight || 0;
    const notice  = document.querySelector('.iframe-notice')?.offsetHeight || 0;
    const header  = document.querySelector('.site-header')?.offsetHeight || 0;
    const navbar  = document.querySelector('.navbar')?.offsetHeight || 0;
    const used    = toolbar + hero + notice + header + navbar + 20;
    const h       = Math.max(600, vh - used);
    iframe.style.height = h + 'px';
  }

  adjustHeight();
  window.addEventListener('resize', adjustHeight);
})();
</script>

<?php get_footer(); ?>
