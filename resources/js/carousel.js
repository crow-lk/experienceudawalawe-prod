document.addEventListener('DOMContentLoaded', function() {
    const carousel = document.querySelector('.modern-carousel');
    if (!carousel) return;

    const container = carousel.querySelector('.modern-carousel__container');
    const cards = carousel.querySelectorAll('.modern-carousel__card');
    const prevBtn = carousel.querySelector('.modern-carousel__nav--prev');
    const nextBtn = carousel.querySelector('.modern-carousel__nav--next');
    const progressBar = carousel.querySelector('.modern-carousel__progress-bar');

    let currentIndex = 0;
    const totalCards = cards.length;
    let isAnimating = false;
    let autoplayInterval;
    
    // Visible cards per view (responsive)
    let cardsPerView = 3;
    
    // Calculate cards per view based on screen size
    function updateCardsPerView() {
        const screenWidth = window.innerWidth;
        if (screenWidth < 640) {
            cardsPerView = 1;
        } else if (screenWidth < 1024) {
            cardsPerView = 2;
        } else {
            cardsPerView = 3;
        }
    }

    // Initialize carousel
    function init() {
        updateCardsPerView();
        updateCarousel();
        updateProgress();
        
        // Auto-play every 2.5 seconds (faster)
        startAutoplay();
        
        // Pause autoplay on hover
        carousel.addEventListener('mouseenter', stopAutoplay);
        carousel.addEventListener('mouseleave', startAutoplay);
        
        // Touch/swipe support
        let startX = 0;
        let currentX = 0;
        let isDragging = false;

        container.addEventListener('touchstart', handleTouchStart, { passive: true });
        container.addEventListener('touchmove', handleTouchMove, { passive: true });
        container.addEventListener('touchend', handleTouchEnd, { passive: true });
        
        // Mouse drag support
        container.addEventListener('mousedown', handleMouseDown);
        container.addEventListener('mousemove', handleMouseMove);
        container.addEventListener('mouseup', handleMouseUp);
        container.addEventListener('mouseleave', handleMouseUp);
        
        // Resize handler
        window.addEventListener('resize', handleResize);
    }

    // Handle window resize
    function handleResize() {
        const oldCardsPerView = cardsPerView;
        updateCardsPerView();
        
        if (oldCardsPerView !== cardsPerView) {
            // Adjust current index to prevent going out of bounds
            const maxIndex = Math.max(0, totalCards - cardsPerView);
            currentIndex = Math.min(currentIndex, maxIndex);
            updateCarousel();
            updateProgress();
        }
    }

    // Update carousel position
    function updateCarousel() {
        if (isAnimating) return;
        
        isAnimating = true;
        
        // Calculate the offset based on card width and gap
        const cardWidth = 320; // Base card width
        const gap = window.innerWidth < 640 ? 12 : window.innerWidth < 1024 ? 24 : 32; // Gap in pixels
        const offset = -(currentIndex * (cardWidth + gap));
        
        container.style.transform = `translateX(${offset}px)`;
        
        setTimeout(() => {
            isAnimating = false;
        }, 600);
    }

    // Update progress bar
    function updateProgress() {
        const maxIndex = Math.max(0, totalCards - cardsPerView);
        const progress = maxIndex > 0 ? (currentIndex / maxIndex) * 100 : 100;
        progressBar.style.width = `${progress}%`;
    }

    // Go to next slide
    function nextSlide() {
        const maxIndex = Math.max(0, totalCards - cardsPerView);
        if (currentIndex < maxIndex) {
            currentIndex++;
        } else {
            currentIndex = 0; // Loop back to start
        }
        updateCarousel();
        updateProgress();
    }

    // Go to previous slide
    function prevSlide() {
        const maxIndex = Math.max(0, totalCards - cardsPerView);
        if (currentIndex > 0) {
            currentIndex--;
        } else {
            currentIndex = maxIndex; // Loop to end
        }
        updateCarousel();
        updateProgress();
    }

    // Autoplay functions
    function startAutoplay() {
        stopAutoplay();
        autoplayInterval = setInterval(nextSlide, 2500); // 2.5 seconds
    }

    function stopAutoplay() {
        if (autoplayInterval) {
            clearInterval(autoplayInterval);
            autoplayInterval = null;
        }
    }

    // Touch handlers
    function handleTouchStart(e) {
        startX = e.touches[0].clientX;
        currentX = startX;
        isDragging = true;
        stopAutoplay();
    }

    function handleTouchMove(e) {
        if (!isDragging) return;
        currentX = e.touches[0].clientX;
    }

    function handleTouchEnd() {
        if (!isDragging) return;
        
        const diff = startX - currentX;
        const threshold = 50; // Minimum swipe distance
        
        if (Math.abs(diff) > threshold) {
            if (diff > 0) {
                nextSlide();
            } else {
                prevSlide();
            }
        }
        
        isDragging = false;
        startAutoplay();
    }

    // Mouse handlers
    function handleMouseDown(e) {
        startX = e.clientX;
        currentX = startX;
        isDragging = true;
        stopAutoplay();
        e.preventDefault();
    }

    function handleMouseMove(e) {
        if (!isDragging) return;
        currentX = e.clientX;
        e.preventDefault();
    }

    function handleMouseUp() {
        if (!isDragging) return;
        
        const diff = startX - currentX;
        const threshold = 50;
        
        if (Math.abs(diff) > threshold) {
            if (diff > 0) {
                nextSlide();
            } else {
                prevSlide();
            }
        }
        
        isDragging = false;
        startAutoplay();
    }

    // Event listeners
    if (prevBtn) {
        prevBtn.addEventListener('click', () => {
            stopAutoplay();
            prevSlide();
            startAutoplay();
        });
    }

    if (nextBtn) {
        nextBtn.addEventListener('click', () => {
            stopAutoplay();
            nextSlide();
            startAutoplay();
        });
    }

    // Keyboard navigation
    document.addEventListener('keydown', (e) => {
        if (!carousel.matches(':hover')) return;
        
        if (e.key === 'ArrowLeft') {
            stopAutoplay();
            prevSlide();
            startAutoplay();
        } else if (e.key === 'ArrowRight') {
            stopAutoplay();
            nextSlide();
            startAutoplay();
        }
    });

    // Intersection Observer for performance
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                startAutoplay();
            } else {
                stopAutoplay();
            }
        });
    }, { threshold: 0.5 });

    observer.observe(carousel);

    // Add click handlers to cards for potential future interactions
    cards.forEach((card, index) => {
        card.addEventListener('click', () => {
            // Could add modal or page navigation here
            console.log(`Clicked card ${index + 1}`);
        });
    });

    // Initialize the carousel
    init();
});