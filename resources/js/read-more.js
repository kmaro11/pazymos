document.addEventListener('DOMContentLoaded', () => {
  const instances = document.querySelectorAll('[data-readmore-toggle]');
  if (!instances.length) return;

  instances.forEach((toggle) => {
    const targetId = toggle.getAttribute('data-readmore-toggle');
    const content = document.getElementById(targetId);
    if (!content) return;

    const collapsedPx = parseInt(content.dataset.collapsedHeight || '280', 10);

    content.style.overflow = 'hidden';
    content.style.transition = 'max-height 300ms ease-in-out, opacity 300ms ease-in-out';

    const collapse = () => {
      content.style.maxHeight = collapsedPx + 'px';
      content.style.opacity = '0.98';
      toggle.setAttribute('aria-expanded', 'false');
      const text = toggle.querySelector('[data-toggle-text]');
      if (text) text.textContent = 'Skaityti daugiau';
      const icon = toggle.querySelector('[data-toggle-icon]');
      if (icon) icon.style.transform = 'rotate(0deg)';
    };

    const expand = () => {
      content.style.maxHeight = content.scrollHeight + 'px';
      content.style.opacity = '1';
      toggle.setAttribute('aria-expanded', 'true');
      const text = toggle.querySelector('[data-toggle-text]');
      if (text) text.textContent = 'Skaityti mažiau';
      const icon = toggle.querySelector('[data-toggle-icon]');
      if (icon) icon.style.transform = 'rotate(180deg)';
    };

    // Start collapsed by default to the configured height
    content.style.maxHeight = collapsedPx + 'px';
    content.style.opacity = '0.98';

    toggle.addEventListener('click', (e) => {
      e.preventDefault();
      const expanded = toggle.getAttribute('aria-expanded') === 'true';
      if (expanded) {
        collapse();
      } else {
        expand();
      }
    });

    window.addEventListener('resize', () => {
      const expanded = toggle.getAttribute('aria-expanded') === 'true';
      if (expanded) {
        content.style.maxHeight = content.scrollHeight + 'px';
      }
    });
  });
});


