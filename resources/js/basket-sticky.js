/**
 * Mobile sticky basket - fixed to bottom when scrolled past, until footer
 */
document.addEventListener('DOMContentLoaded', () => {
    const basket = document.querySelector('[data-component="basket"]');
    const basketWrapper = document.querySelector('[data-component="basket-wrapper"]');
    const footer = document.querySelector('footer');
    
    if (!basket || !basketWrapper || !footer) return;

    const MOBILE_BREAKPOINT = 768;
    let isFixed = false;
    let placeholder = null;

    function isMobile() {
        return window.innerWidth < MOBILE_BREAKPOINT;
    }

    function createPlaceholder() {
        if (placeholder) return;
        placeholder = document.createElement('div');
        placeholder.style.height = `${basket.offsetHeight}px`;
        placeholder.style.display = 'none';
        basket.parentNode.insertBefore(placeholder, basket.nextSibling);
    }

    function applyFixedStyles() {
        if (isFixed) return;
        createPlaceholder();
        placeholder.style.display = 'block';
        
        basket.style.position = 'fixed';
        basket.style.bottom = '0';
        basket.style.left = '0';
        basket.style.right = '0';
        basket.style.zIndex = '40';
        
        basket.classList.add('px-[15px]');
        basketWrapper.classList.add('px-[14px]');
        
        isFixed = true;
    }

    function removeFixedStyles() {
        if (!isFixed) return;
        
        basket.style.position = '';
        basket.style.bottom = '';
        basket.style.left = '';
        basket.style.right = '';
        basket.style.zIndex = '';
        
        basket.classList.remove('px-[15px]');
        basketWrapper.classList.remove('px-[14px]');
        
        if (placeholder) {
            placeholder.style.display = 'none';
        }
        
        isFixed = false;
    }

    function handleScroll() {
        if (!isMobile()) {
            removeFixedStyles();
            return;
        }

        const basketRect = isFixed ? placeholder.getBoundingClientRect() : basket.getBoundingClientRect();
        const footerRect = footer.getBoundingClientRect();
        const viewportHeight = window.innerHeight;

        // Check if basket's bottom is above viewport bottom (scrolled past it)
        if (basketRect.bottom > viewportHeight) {
            removeFixedStyles();
            return;
        }

        // Footer visible - position basket above footer
        if (footerRect.top < viewportHeight) {
            const bottomOffset = viewportHeight - footerRect.top;
            applyFixedStyles();
            basket.style.bottom = `${bottomOffset}px`;
        } else {
            applyFixedStyles();
            basket.style.bottom = '0';
        }
    }

    function handleResize() {
        if (!isMobile()) {
            removeFixedStyles();
        } else {
            handleScroll();
        }
    }

    createPlaceholder();
    window.addEventListener('scroll', handleScroll, { passive: true });
    window.addEventListener('resize', handleResize, { passive: true });
});

