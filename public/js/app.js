// Basic JS for multi-step form and simple UI interactions
document.addEventListener('DOMContentLoaded', function () {
  // Wizard: step navigation
  const sections = Array.from(document.querySelectorAll('.section'));
  let current = sections.findIndex(s => s.classList.contains('active'));
  if (current === -1 && sections.length) current = 0;

  function showStep(index) {
    sections.forEach((s, i) => s.classList.toggle('active', i === index));
    const progressFill = document.getElementById('progressFill');
    const progressPct = document.getElementById('progressPct');
    if (progressFill && progressPct) {
      const pct = Math.round(((index + 1) / sections.length) * 100);
      progressFill.style.width = pct + '%';
      progressPct.textContent = pct + '%';
    }
    const stepLabel = document.getElementById('stepLabel');
    if (stepLabel) {
      const stepNum = index + 1;
      const total = sections.length;
      stepLabel.textContent = `Step ${stepNum} of ${total}`;
    }
  }

  document.body.addEventListener('click', function (e) {
    if (e.target.matches('[data-next]')) {
      if (current < sections.length - 1) { current++; showStep(current); }
    }
    if (e.target.matches('[data-back]')) {
      if (current > 0) { current--; showStep(current); }
    }
    // pill toggle
    if (e.target.classList.contains('pill')) {
      const parent = e.target.closest('[data-group]');
      if (parent && parent.classList.contains('yesno')) {
        // yes/no single select
        parent.querySelectorAll('.pill').forEach(p => p.classList.remove('active'));
        e.target.classList.add('active');
      } else {
        e.target.classList.toggle('active');
      }
    }
    // chip toggle
    if (e.target.classList.contains('chip')) {
      e.target.classList.toggle('active');
    }
  });

  // initialize
  if (sections.length) showStep(current);

  // lightbox (for evolved gallery)
  document.querySelectorAll('.sneak-peek-img').forEach(img => {
    img.addEventListener('click', function () {
      const src = this.src;
      let lb = document.querySelector('.lightbox');
      if (!lb) {
        lb = document.createElement('div'); lb.className = 'lightbox';
        const im = document.createElement('img'); lb.appendChild(im);
        const close = document.createElement('div'); close.className = 'lightbox-close'; close.textContent = '×'; lb.appendChild(close);
        document.body.appendChild(lb);
        close.addEventListener('click', () => lb.classList.remove('active'));
        lb.addEventListener('click', (ev) => { if (ev.target === lb) lb.classList.remove('active'); });
      }
      lb.querySelector('img').src = src;
      lb.classList.add('active');
    });
  });
});
