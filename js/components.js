/**
 * components.js — Header y Footer compartidos del Portal Municipal de Chontla
 * Requiere que BASE esté definida en la página antes de cargar este script:
 *   Páginas raíz:        const BASE = '';
 *   Páginas en subdir:   const BASE = '../';
 */
(function () {
  const B    = (typeof BASE !== 'undefined') ? BASE : '';
  const path = window.location.pathname;

  function active(keyword) {
    return path.includes(keyword) ? 'active' : '';
  }

  /* ============================================================
     HEADER
  ============================================================ */
  const headerHtml = `
<!-- Barra tricolor México -->
<div style="height:4px;background:linear-gradient(to right,#006847 33.33%,#FFFFFF 33.33%,#FFFFFF 66.66%,#CC0000 66.66%)"></div>

<!-- Alerta -->
<div class="alerta-bar">
  <i class="fas fa-bullhorn"></i>
  <span>Convocatoria abierta: Cabildo Abierto 2025 &mdash; <a href="${B}index.html">Más información</a></span>
  <button class="alerta-close" style="background:none;border:none;cursor:pointer;margin-left:12px;font-size:14px;">✕</button>
</div>

<!-- Barra superior -->
<div class="topbar">
  <div class="container">
    <div class="topbar-left">
      <span><i class="fas fa-map-marker-alt"></i> Chontla, Veracruz</span>
      <div class="divider"></div>
      <span><i class="fas fa-calendar-alt"></i> <span id="topbar-fecha"></span></span>
      <div class="divider"></div>
      <a href="tel:7891234567"><i class="fas fa-phone"></i> (789) 123-4567</a>
    </div>
    <div class="topbar-right">
      <a href="#" class="social-icon" title="Facebook"><i class="fab fa-facebook-f"></i></a>
      <a href="#" class="social-icon" title="Twitter"><i class="fab fa-x-twitter"></i></a>
      <a href="#" class="social-icon" title="YouTube"><i class="fab fa-youtube"></i></a>
      <a href="#" class="social-icon" title="Instagram"><i class="fab fa-instagram"></i></a>
      <div class="divider"></div>
      <a href="https://veracruz.gob.mx" target="_blank" rel="noopener" style="font-weight:600">
        <i class="fas fa-external-link-alt"></i> Gob. Veracruz
      </a>
    </div>
  </div>
</div>

<!-- Header principal -->
<header class="site-header">
  <div class="container">
    <div class="header-inner">
      <div class="header-brand">
        <a href="${B}index.html" style="display:flex;align-items:center;gap:14px">
          <div class="escudo"><i class="fas fa-shield-halved" style="color:#fff"></i></div>
          <div class="brand-text">
            <h1>H. Ayuntamiento de Chontla</h1>
            <p>2022&ndash;2025 &nbsp;|&nbsp; Administración Municipal</p>
            <span class="estado"><i class="fas fa-map-marker-alt"></i> Veracruz, México</span>
          </div>
        </a>
      </div>
      <div class="header-actions">
        <button class="btn-buscar" id="btn-search"><i class="fas fa-search"></i> Buscar</button>
        <a href="${B}tramites.html" class="btn-tramites"><i class="fas fa-file-alt"></i> Trámites en Línea</a>
      </div>
    </div>
  </div>
</header>

<!-- Navbar -->
<nav class="navbar">
  <div class="container">
    <div class="navbar-inner" id="main-nav">

      <div class="nav-item">
        <a href="${B}index.html" class="nav-link ${active('index')}"><i class="fas fa-home" style="font-size:12px"></i> Inicio</a>
      </div>

      <div class="nav-item">
        <a href="#" class="nav-link ${active('historia') || active('cabildo') || active('organigrama') || active('plan-') || active('reglamentos') || active('mision')}">
          Municipio <i class="fas fa-chevron-down arrow"></i>
        </a>
        <div class="dropdown">
          <a href="${B}historia.html"><span class="icon"><i class="fas fa-landmark"></i></span> Historia del Municipio</a>
          <a href="${B}mision-vision.html"><span class="icon"><i class="fas fa-bullseye"></i></span> Misión y Visión</a>
          <a href="${B}organigrama.html"><span class="icon"><i class="fas fa-sitemap"></i></span> Organigrama Municipal</a>
          <a href="${B}cabildo.html"><span class="icon"><i class="fas fa-users"></i></span> H. Cabildo</a>
          <a href="${B}plan-desarrollo.html"><span class="icon"><i class="fas fa-clipboard-list"></i></span> Plan de Desarrollo Municipal</a>
          <a href="${B}reglamentos.html"><span class="icon"><i class="fas fa-book"></i></span> Reglamentos Municipales</a>
        </div>
      </div>

      <div class="nav-item">
        <a href="${B}transparencia.html" class="nav-link ${active('transparencia')}">
          Transparencia <i class="fas fa-chevron-down arrow"></i>
        </a>
        <div class="mega-dropdown">
          <div class="mega-col">
            <h4><i class="fas fa-file-contract"></i> Art. 92 LGTAIP</h4>
            <a href="${B}transparencia.html"><span class="icon"><i class="fas fa-eye"></i></span> Portal Oficial ORFIS</a>
            <a href="${B}transparencia.html"><span class="icon"><i class="fas fa-sitemap"></i></span> Estructura Orgánica</a>
            <a href="${B}transparencia.html"><span class="icon"><i class="fas fa-gavel"></i></span> Facultades y Funciones</a>
            <a href="${B}transparencia.html"><span class="icon"><i class="fas fa-address-book"></i></span> Directorio de Servidores</a>
            <a href="${B}transparencia.html"><span class="icon"><i class="fas fa-money-bill-wave"></i></span> Remuneraciones</a>
          </div>
          <div class="mega-col">
            <h4><i class="fas fa-chart-bar"></i> Finanzas Públicas</h4>
            <a href="${B}transparencia.html"><span class="icon"><i class="fas fa-file-invoice-dollar"></i></span> Cuenta Pública</a>
            <a href="${B}transparencia.html"><span class="icon"><i class="fas fa-users"></i></span> Nómina de Personal</a>
            <a href="${B}transparencia.html"><span class="icon"><i class="fas fa-search-dollar"></i></span> Auditorías</a>
          </div>
          <div class="mega-col">
            <h4><i class="fas fa-hard-hat"></i> Obra y Acceso</h4>
            <a href="${B}transparencia.html"><span class="icon"><i class="fas fa-clipboard-check"></i></span> Licitaciones</a>
            <a href="${B}transparencia.html"><span class="icon"><i class="fas fa-id-card"></i></span> Declaración Patrimonial</a>
            <a href="${B}transparencia.html"><span class="icon"><i class="fas fa-envelope-open-text"></i></span> Solicitar Información</a>
          </div>
        </div>
      </div>

      <div class="nav-item">
        <a href="${B}obra/programa-anual.html" class="nav-link ${active('obra')}">
          Obra Pública <i class="fas fa-chevron-down arrow"></i>
        </a>
        <div class="dropdown">
          <a href="${B}obra/programa-anual.html"><span class="icon"><i class="fas fa-calendar-alt"></i></span> Programa Anual de Obra</a>
          <a href="${B}obra/avances.html"><span class="icon"><i class="fas fa-tasks"></i></span> Avances de Obra</a>
          <a href="${B}obra/contratos.html"><span class="icon"><i class="fas fa-file-contract"></i></span> Contratos de Obra</a>
        </div>
      </div>

      <div class="nav-item">
        <a href="${B}tramites.html" class="nav-link ${active('tramites')}">
          Trámites <i class="fas fa-chevron-down arrow"></i>
        </a>
        <div class="dropdown">
          <a href="${B}tramites/registro-civil.html"><span class="icon"><i class="fas fa-baby"></i></span> Registro Civil</a>
          <a href="${B}tramites/catastro.html"><span class="icon"><i class="fas fa-map"></i></span> Catastro Municipal</a>
          <a href="${B}tramites/tesoreria.html"><span class="icon"><i class="fas fa-piggy-bank"></i></span> Tesorería y Pagos</a>
          <a href="${B}tramites/obras.html"><span class="icon"><i class="fas fa-building"></i></span> Licencias de Construcción</a>
          <a href="${B}tramites/seguridad.html"><span class="icon"><i class="fas fa-shield-alt"></i></span> Seguridad Pública</a>
          <a href="${B}tramites/padron.html"><span class="icon"><i class="fas fa-store"></i></span> Padrón de Comercios</a>
        </div>
      </div>

      <div class="nav-item">
        <a href="${B}noticias/index.html" class="nav-link ${active('noticias')}">
          Noticias <i class="fas fa-chevron-down arrow"></i>
        </a>
        <div class="dropdown">
          <a href="${B}noticias/index.html"><span class="icon"><i class="fas fa-newspaper"></i></span> Noticias Municipales</a>
          <a href="${B}noticias/galeria.html"><span class="icon"><i class="fas fa-images"></i></span> Galería Fotográfica</a>
          <a href="${B}noticias/agenda.html"><span class="icon"><i class="fas fa-calendar-check"></i></span> Agenda Municipal</a>
        </div>
      </div>

      <div class="nav-item">
        <a href="${B}turismo.html" class="nav-link ${active('turismo')}">
          Turismo <i class="fas fa-chevron-down arrow"></i>
        </a>
        <div class="dropdown">
          <a href="${B}turismo/atractivos.html"><span class="icon"><i class="fas fa-mountain"></i></span> Atractivos Turísticos</a>
          <a href="${B}turismo/gastronomia.html"><span class="icon"><i class="fas fa-utensils"></i></span> Gastronomía Local</a>
          <a href="${B}turismo/eventos.html"><span class="icon"><i class="fas fa-star"></i></span> Eventos y Festividades</a>
        </div>
      </div>

      <div class="nav-item">
        <a href="${B}contacto.html" class="nav-link ${active('contacto')}">
          <i class="fas fa-envelope" style="font-size:12px"></i> Contacto
        </a>
      </div>

      <button class="nav-toggle" aria-label="Abrir menú"><i class="fas fa-bars"></i></button>
    </div>
  </div>
</nav>

<!-- Modal búsqueda -->
<div class="search-overlay" id="search-overlay">
  <button class="btn-close-search">✕</button>
  <div class="search-box">
    <h3><i class="fas fa-search"></i> ¿Qué estás buscando?</h3>
    <div class="search-input-wrap">
      <input type="text" placeholder="Ej: trámites, transparencia, obra pública..." />
      <button><i class="fas fa-search"></i></button>
    </div>
  </div>
</div>
<button class="back-top"><i class="fas fa-chevron-up"></i></button>
`;

  /* ============================================================
     FOOTER
  ============================================================ */
  const footerHtml = `
<div class="contacto-banner">
  <div class="container">
    <div class="contacto-inner">
      <div class="contacto-item">
        <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
        <h4>Visítanos</h4>
        <p>Palacio Municipal S/N, Col. Centro<br>Chontla, Veracruz, C.P. 93360</p>
      </div>
      <div class="contacto-item">
        <div class="icon"><i class="fas fa-clock"></i></div>
        <h4>Horario de Atención</h4>
        <p>Lunes a Viernes<br>8:00 &ndash; 15:00 hrs</p>
      </div>
      <div class="contacto-item">
        <div class="icon"><i class="fas fa-envelope"></i></div>
        <h4>Escríbenos</h4>
        <a href="tel:7891234567">(789) 123-4567</a><br>
        <a href="mailto:presidencia@chontla.gob.mx">presidencia@chontla.gob.mx</a>
      </div>
    </div>
  </div>
</div>

<footer class="footer">
  <div class="container">
    <div class="footer-grid">
      <div class="footer-brand">
        <h3><i class="fas fa-shield-halved" style="color:var(--rojo-pri);margin-right:8px"></i>H. Ayuntamiento de Chontla</h3>
        <p>Administración Municipal 2022&ndash;2025. Trabajando cada día por el bienestar, progreso y la dignidad de todos los ciudadanos de Chontla, Veracruz.</p>
        <div class="footer-social">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-x-twitter"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
      </div>
      <div class="footer-col">
        <h4>Transparencia</h4>
        <ul>
          <li><a href="${B}transparencia.html">Portal ORFIS</a></li>
          <li><a href="${B}transparencia.html">Cuenta Pública</a></li>
          <li><a href="${B}transparencia.html">Nómina de Personal</a></li>
          <li><a href="${B}transparencia.html">Licitaciones</a></li>
          <li><a href="${B}transparencia.html">Declaraciones Patrimoniales</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>Gobierno</h4>
        <ul>
          <li><a href="${B}historia.html">Historia del Municipio</a></li>
          <li><a href="${B}cabildo.html">H. Cabildo</a></li>
          <li><a href="${B}plan-desarrollo.html">Plan de Desarrollo</a></li>
          <li><a href="${B}reglamentos.html">Reglamentos</a></li>
          <li><a href="${B}quejas.html">Quejas y Denuncias</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>Recursos de Gobierno</h4>
        <ul>
          <li><a href="https://www.gob.mx" target="_blank" rel="noopener">Gobierno Federal</a></li>
          <li><a href="https://veracruz.gob.mx" target="_blank" rel="noopener">Gob. de Veracruz</a></li>
          <li><a href="https://home.inai.org.mx" target="_blank" rel="noopener">INAI</a></li>
          <li><a href="https://www.orfis.gob.mx" target="_blank" rel="noopener">ORFIS Veracruz</a></li>
          <li><a href="https://www.inegi.org.mx" target="_blank" rel="noopener">INEGI</a></li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom">
      <p>&copy; <span id="footer-year"></span> H. Ayuntamiento de Chontla, Veracruz. Todos los derechos reservados.</p>
      <div class="footer-logos">
        <span class="logo-gov">🇲🇽 Gob. MX</span>
        <span class="logo-gov">Veracruz</span>
      </div>
      <p>
        <a href="${B}aviso-privacidad.html">Aviso de Privacidad</a> &nbsp;|&nbsp;
        <a href="${B}contacto.html">Contacto</a>
      </p>
    </div>
  </div>
</footer>
`;

  /* ============================================================
     INYECCIÓN
  ============================================================ */
  const headerEl = document.getElementById('site-header');
  const footerEl = document.getElementById('site-footer');
  if (headerEl) headerEl.innerHTML = headerHtml;
  if (footerEl) footerEl.innerHTML = footerHtml;

  // Fecha en topbar
  const fechaEl = document.getElementById('topbar-fecha');
  if (fechaEl) {
    fechaEl.textContent = new Date().toLocaleDateString('es-MX', {
      weekday: 'long', year: 'numeric', month: 'long', day: 'numeric'
    });
  }
  // Año en footer
  const yearEl = document.getElementById('footer-year');
  if (yearEl) yearEl.textContent = new Date().getFullYear();
})();
