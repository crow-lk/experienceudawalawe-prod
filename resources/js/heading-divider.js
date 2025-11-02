const DIVIDER_IMAGE_SRC = '/images/elements/rorate-flower.png';

const createDividerElement = (tone = 'light', align = 'left') => {
    const alignClass = ['left', 'center', 'right'].includes(align) ? align : 'left';
    const container = document.createElement('div');
    container.className = `heading-divider heading-divider--${alignClass} flex items-center gap-3`;
    container.setAttribute('aria-hidden', 'true');

    const lineClass = tone === 'dark' ? 'bg-white/60' : 'bg-[#c7c3b7]';
    const imageOpacity = tone === 'dark' ? 'opacity-90' : 'opacity-80';

    const leftLine = document.createElement('div');
    leftLine.className = `h-px flex-1 ${lineClass}`;

    const rightLine = leftLine.cloneNode();

    const image = document.createElement('img');
    image.src = DIVIDER_IMAGE_SRC;
    image.alt = '';
    image.loading = 'lazy';
    image.className = `h-10 w-10 animate-spin-slower object-contain ${imageOpacity}`;

    container.append(leftLine, image, rightLine);
    return container;
};

const shouldSkipHeading = (heading) => {
    if (!(heading instanceof HTMLElement)) {
        return true;
    }

    if (heading.dataset.noDivider !== undefined) {
        return true;
    }

    const skipRoots = ['header', 'nav', 'footer', '#nav-overlay', '.site-header'];

    return skipRoots.some((selector) => heading.closest(selector));
};

const initHeadingDividers = () => {
    const headings = document.querySelectorAll('h1, h2, h3');

    headings.forEach((heading) => {
        if (shouldSkipHeading(heading)) {
            return;
        }

        const nextElement = heading.nextElementSibling;
        if (nextElement && nextElement.classList.contains('heading-divider')) {
            return;
        }

        const tone = heading.dataset.dividerTone || 'light';
        const requestedAlign = heading.dataset.dividerAlign;
        const computedAlign = window.getComputedStyle(heading).textAlign;

        let align = 'left';

        if (requestedAlign && ['left', 'center', 'right'].includes(requestedAlign)) {
            align = requestedAlign;
        } else if (computedAlign === 'center') {
            align = 'center';
        } else if (computedAlign === 'right' || computedAlign === 'end') {
            align = 'right';
        }

        const divider = createDividerElement(tone, align);

        if (heading.parentElement) {
            heading.parentElement.insertBefore(divider, nextElement || null);
        }
    });
};

document.addEventListener('DOMContentLoaded', initHeadingDividers);
