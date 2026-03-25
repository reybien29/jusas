/**
 * Scroll-driven reveal: adds `scroll-reveal-visible` when elements enter the viewport.
 * Use `data-scroll-reveal` with optional variant: fade-up | fade | fade-left | fade-right | zoom.
 * Optional `data-scroll-reveal-delay` (ms) maps to `--sr-delay` for staggered transitions.
 */
const selector = '[data-scroll-reveal]';

const observerOptions = {
    root: null,
    rootMargin: '0px 0px -8% 0px',
    threshold: 0.06,
};

function applyDelayFromAttribute(el) {
    const raw = el.getAttribute('data-scroll-reveal-delay');
    if (raw === null || raw === '') {
        return;
    }
    const ms = Number.parseInt(raw, 10);
    if (!Number.isNaN(ms) && ms >= 0) {
        el.style.setProperty('--sr-delay', `${ms}ms`);
    }
}

export function initScrollReveal() {
    const nodes = document.querySelectorAll(selector);
    if (nodes.length === 0) {
        return;
    }

    const prefersReduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    if (prefersReduced) {
        nodes.forEach((el) => {
            el.classList.add('scroll-reveal-visible');
        });

        return;
    }

    nodes.forEach((el) => applyDelayFromAttribute(el));

    const observer = new IntersectionObserver((entries, obs) => {
        entries.forEach((entry) => {
            if (!entry.isIntersecting) {
                return;
            }
            entry.target.classList.add('scroll-reveal-visible');
            obs.unobserve(entry.target);
        });
    }, observerOptions);

    nodes.forEach((el) => observer.observe(el));
}
