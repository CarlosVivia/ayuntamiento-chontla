/* =============================================
   Portal Municipal de Chontla - Scripts
   ============================================= */

document.addEventListener('DOMContentLoaded', () => {

  // ---- Hero Slider ----
  const slides = document.querySelectorAll('.hero-slide');
  const dots   = document.querySelectorAll('.hero-dot');
  const track  = document.querySelector('.hero-slides');
  let current  = 0;
  let timer;

  function goTo(n) {
    current = (n + slides.length) % slides.length;
    track.style.transform = `translateX(-${current * 100}%)`;
    dots.forEach((d, i) => d.classList.toggle('active', i === current));
  }

  function next() { goTo(current + 1); }
  function prev() { goTo(current - 1); }
  function startAuto() { timer = setInterval(next, 5000); }
  function stopAuto()  { clearInterval(timer); }

  document.querySelector('.hero-arrow.next')?.addEventListener('click', () => { stopAuto(); next(); startAuto(); });
  document.querySelector('.hero-arrow.prev')?.addEventListener('click', () => { stopAuto(); prev(); startAuto(); });
  dots.forEach((d, i) => d.addEventListener('click', () => { stopAuto(); goTo(i); startAuto(); }));

  goTo(0);
  startAuto();

  // ---- Contador animado de stats ----
  const counters = document.querySelectorAll('[data-count]');
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(e => {
      if (!e.isIntersecting) return;
      const el     = e.target;
      const target = +el.dataset.count;
      const suffix = el.dataset.suffix || '';
      let start    = 0;
      const step   = Math.ceil(target / 60);
      const tick   = () => {
        start = Math.min(start + step, target);
        el.textContent = start.toLocaleString() + suffix;
        if (start < target) requestAnimationFrame(tick);
      };
      requestAnimationFrame(tick);
      observer.unobserve(el);
    });
  }, { threshold: 0.5 });
  counters.forEach(c => observer.observe(c));

  // ---- Navbar Mobile ----
  const toggle  = document.querySelector('.nav-toggle');
  const navInner = document.querySelector('.navbar-inner');
  toggle?.addEventListener('click', () => navInner.classList.toggle('open'));

  // Cerrar al hacer click fuera
  document.addEventListener('click', e => {
    if (!e.target.closest('.navbar') && navInner?.classList.contains('open')) {
      navInner.classList.remove('open');
    }
  });

  // ---- Búsqueda ----
  const searchOverlay = document.querySelector('.search-overlay');
  document.querySelector('#btn-search')?.addEventListener('click', () => searchOverlay?.classList.add('open'));
  document.querySelector('.btn-close-search')?.addEventListener('click', () => searchOverlay?.classList.remove('open'));
  searchOverlay?.addEventListener('click', e => { if (e.target === searchOverlay) searchOverlay.classList.remove('open'); });

  // ---- Back to Top ----
  const backTop = document.querySelector('.back-top');
  window.addEventListener('scroll', () => {
    backTop?.classList.toggle('visible', window.scrollY > 400);
  });
  backTop?.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));

  // ---- Header sticky shrink ----
  const header = document.querySelector('.site-header');
  window.addEventListener('scroll', () => {
    header?.classList.toggle('compact', window.scrollY > 80);
  });

  // ---- Alerta dismiss ----
  document.querySelector('.alerta-close')?.addEventListener('click', function() {
    this.closest('.alerta-bar').style.display = 'none';
  });

  // ---- Active nav link ----
  const currentPath = window.location.pathname.split('/').pop();
  document.querySelectorAll('.nav-link').forEach(link => {
    const href = link.getAttribute('href');
    if (href && href !== '#' && currentPath.includes(href.replace('.html', ''))) {
      link.classList.add('active');
    }
  });

});
