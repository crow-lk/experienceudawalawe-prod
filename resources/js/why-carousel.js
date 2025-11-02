const motionQuery = window.matchMedia('(prefers-reduced-motion: reduce)');

const createCarousel = (root) => {
    const track = root.querySelector('[data-why-track]');
    const slides = Array.from(root.querySelectorAll('[data-why-slide]'));

    if (!track || slides.length <= 1) {
        return;
    }

    const prevButton = root.querySelector('[data-why-prev]');
    const nextButton = root.querySelector('[data-why-next]');
    const dotsContainer = root.querySelector('[data-why-dots]');
    const dots = dotsContainer ? Array.from(dotsContainer.querySelectorAll('[data-why-dot]')) : [];
    const intervalConfig = parseInt(root.getAttribute('data-why-interval') || '', 10);
    const autoplayDelay = Number.isNaN(intervalConfig) ? 7000 : intervalConfig;

    let activeIndex = 0;
    let autoplayTimer = null;

    root.classList.add('is-ready');

    const update = () => {
        const offset = activeIndex * 100;
        track.style.transform = `translateX(-${offset}%)`;

        slides.forEach((slide, index) => {
            slide.classList.toggle('is-active', index === activeIndex);
        });

        dots.forEach((dot, index) => {
            const isActive = index === activeIndex;
            dot.classList.toggle('is-active', isActive);
            dot.setAttribute('aria-current', isActive ? 'true' : 'false');
        });
    };

    const goTo = (index) => {
        const maxIndex = slides.length - 1;

        if (index < 0) {
            activeIndex = maxIndex;
        } else if (index > maxIndex) {
            activeIndex = 0;
        } else {
            activeIndex = index;
        }

        update();
    };

    const step = (direction) => {
        goTo(activeIndex + direction);
    };

    const clearAutoplay = () => {
        if (autoplayTimer) {
            window.clearInterval(autoplayTimer);
            autoplayTimer = null;
        }
    };

    const startAutoplay = () => {
        if (motionQuery.matches) {
            return;
        }

        clearAutoplay();
        autoplayTimer = window.setInterval(() => step(1), autoplayDelay);
    };

    const pauseAutoplay = () => clearAutoplay();
    const resumeAutoplay = () => startAutoplay();

    prevButton?.addEventListener('click', () => {
        step(-1);
        resumeAutoplay();
    });

    nextButton?.addEventListener('click', () => {
        step(1);
        resumeAutoplay();
    });

    dots.forEach((dot) => {
        dot.addEventListener('click', () => {
            const target = parseInt(dot.getAttribute('data-why-dot') || '', 10);
            if (Number.isNaN(target)) {
                return;
            }

            goTo(target);
            resumeAutoplay();
        });
    });

    root.addEventListener('mouseenter', pauseAutoplay);
    root.addEventListener('mouseleave', resumeAutoplay);
    root.addEventListener('focusin', pauseAutoplay);
    root.addEventListener('focusout', resumeAutoplay);

    const handleVisibilityChange = () => {
        if (document.hidden) {
            pauseAutoplay();
        } else {
            resumeAutoplay();
        }
    };

    const handleMotionPreference = () => {
        if (motionQuery.matches) {
            pauseAutoplay();
        } else {
            resumeAutoplay();
        }
    };

    document.addEventListener('visibilitychange', handleVisibilityChange);

    if (typeof motionQuery.addEventListener === 'function') {
        motionQuery.addEventListener('change', handleMotionPreference);
    } else if (typeof motionQuery.addListener === 'function') {
        motionQuery.addListener(handleMotionPreference);
    }

    update();
    startAutoplay();
};

document.addEventListener('DOMContentLoaded', () => {
    const carousels = document.querySelectorAll('[data-why-carousel]');
    carousels.forEach(createCarousel);
});
