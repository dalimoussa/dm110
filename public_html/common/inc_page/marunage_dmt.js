const toggle = document.querySelector('.nav-toggle');
const menu = document.querySelector('#navMenu');

if (toggle && menu) {
  toggle.addEventListener('click', () => {
    const opened = menu.classList.toggle('open');
    toggle.setAttribute('aria-expanded', String(opened));
  });
}

// KPIの軽いカウントアップ（視認時）
const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      const el = entry.target;
      const target = parseFloat(el.dataset.target);
      let current = 0;
      const step = target / 30;
      const tick = () => {
        current += step;
        if (current >= target) {
          el.textContent = (Number.isInteger(target) ? target : target.toFixed(1)) + (el.textContent.includes('x') ? 'x' : '');
        } else {
          el.textContent = (Number.isInteger(target) ? Math.round(current) : current.toFixed(1)) + (el.textContent.includes('x') ? 'x' : '');
          requestAnimationFrame(tick);
        }
      };
      tick();
      observer.unobserve(el);
    }
  });
}, { threshold: 0.4 });

document.querySelectorAll('.kpi-num').forEach(el => observer.observe(el));
