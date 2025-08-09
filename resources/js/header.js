document.addEventListener('DOMContentLoaded', () => {
  const header = document.querySelector('header.sticky');
  if (!header) return;

  const updateHeaderShadow = () => {
    if (window.scrollY > 0) {
      header.classList.add('shadow-dropdown');
    } else {
      header.classList.remove('shadow-dropdown');
    }
  };

  // Initial state and on scroll
  updateHeaderShadow();
  window.addEventListener('scroll', updateHeaderShadow, { passive: true });

  // Mobile menu
  const menuRoot = document.getElementById('mobile-menu');
  const openBtn = document.getElementById('mobile-menu-button');
  const panel = document.querySelector('.mobile-menu-panel');
  const icon = document.getElementById('mobile-menu-icon');

  if (menuRoot && openBtn && panel) {
    // Position the mobile menu below the header so header stays visible
    const setMenuTop = () => {
      const headerRect = header.getBoundingClientRect();
      const topOffset = headerRect.height; // sticky header height
      menuRoot.style.top = `${topOffset}px`;
    };
    setMenuTop();
    window.addEventListener('resize', setMenuTop);
    window.addEventListener('orientationchange', setMenuTop);
    const openMenu = () => {
      menuRoot.classList.remove('hidden');
      // allow paint then slide
      requestAnimationFrame(() => {
        panel.classList.remove('-translate-y-full');
      });
      openBtn.setAttribute('aria-expanded', 'true');
      document.body.classList.add('overflow-hidden');
      // Header extends into menu → remove header shadow while open
      header.classList.remove('shadow-dropdown');
      if (icon && icon.dataset.iconClose) {
        icon.src = icon.dataset.iconClose;
      }
    };

    const closeMenu = () => {
      panel.classList.add('-translate-y-full');
      openBtn.setAttribute('aria-expanded', 'false');
      // wait for transition end then hide
      const onEnd = () => {
        menuRoot.classList.add('hidden');
        panel.removeEventListener('transitionend', onEnd);
      };
      panel.addEventListener('transitionend', onEnd);
      document.body.classList.remove('overflow-hidden');
      if (icon && icon.dataset.iconHamburger) {
        icon.src = icon.dataset.iconHamburger;
      }
      // Restore header shadow state based on scroll
      if (window.scrollY > 0) {
        header.classList.add('shadow-dropdown');
      }
    };

    // Close via ESC; toggle same button
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape') closeMenu();
    });
    openBtn.addEventListener('click', () => {
      const expanded = openBtn.getAttribute('aria-expanded') === 'true';
      if (expanded) {
        closeMenu();
      } else {
        openMenu();
      }
    });
  }
});

