document.addEventListener('DOMContentLoaded', () => {
    const overlay = document.getElementById('nav-overlay');
    const toggles = document.querySelectorAll('[data-overlay-toggle]');
    const closeButtons = document.querySelectorAll('[data-overlay-close]');

    if (!overlay || toggles.length === 0) {
        return;
    }

    let isOverlayOpen = false;

    const syncToggleIcons = () => {
        toggles.forEach(toggle => {
            const openIcon = toggle.querySelector('[data-mobile-open]');
            const closeIcon = toggle.querySelector('[data-mobile-close]');

            if (!openIcon || !closeIcon) {
                return;
            }

            if (isOverlayOpen) {
                openIcon.classList.add('hidden');
                closeIcon.classList.remove('hidden');
            } else {
                openIcon.classList.remove('hidden');
                closeIcon.classList.add('hidden');
            }
        });
    };

    const setOverlayState = (open) => {
        isOverlayOpen = open;
        overlay.classList.toggle('hidden', !isOverlayOpen);
        document.body.classList.toggle('overflow-hidden', isOverlayOpen);
        syncToggleIcons();
    };

    toggles.forEach(toggle => {
        toggle.addEventListener('click', () => {
            setOverlayState(!isOverlayOpen);
        });
    });

    closeButtons.forEach(button => {
        button.addEventListener('click', () => setOverlayState(false));
    });

    window.addEventListener('keydown', (event) => {
        if (event.key === 'Escape' && isOverlayOpen) {
            setOverlayState(false);
        }
    });

    window.addEventListener('resize', () => {
        if (window.innerWidth >= 1024 && isOverlayOpen) {
            setOverlayState(false);
        }
    });
});
