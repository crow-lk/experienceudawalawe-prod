/**
 * Experience Carousel Component
 * Handles the animated image carousel on the home page
 */

class ExperienceCarousel {
    constructor(element) {
        console.log('Carousel constructor called with element:', element);
        this.carousel = element;
        this.track = element.querySelector('[data-carousel-track]');
        this.slides = Array.from(element.querySelectorAll('[data-carousel-slide]'));
        this.prevButton = element.querySelector('[data-carousel-prev]');
        this.nextButton = element.querySelector('[data-carousel-next]');
        this.dots = Array.from(element.querySelectorAll('[data-carousel-dot]'));
        
        console.log('Carousel elements found:', {
            track: this.track,
            slides: this.slides.length,
            prevButton: this.prevButton,
            nextButton: this.nextButton,
            dots: this.dots.length
        });
        
        this.currentIndex = 0;
        this.isAnimating = false;
        this.autoplayInterval = null;
        this.autoplayDelay = 5000; // 5 seconds
        
        this.init();
    }
    
    init() {
        if (!this.track || this.slides.length === 0) {
            console.log('Track or slides not found, carousel init failed');
            return;
        }
        
        console.log('Initializing carousel with', this.slides.length, 'slides');
        
        // Ensure proper initial state
        this.setupInitialState();
        this.setupResponsiveSlides();
        this.setupEventListeners();
        this.updateDots();
        this.updateButtons();
        
        // Start autoplay after a short delay to ensure everything is ready
        setTimeout(() => {
            this.startAutoplay();
            console.log('Autoplay started');
        }, 1000);
        
        // Handle window resize
        window.addEventListener('resize', () => this.handleResize());
        
        // Pause autoplay on hover
        this.carousel.addEventListener('mouseenter', () => this.pauseAutoplay());
        this.carousel.addEventListener('mouseleave', () => this.startAutoplay());
        
        // Pause autoplay when user interacts
        this.carousel.addEventListener('focusin', () => this.pauseAutoplay());
        this.carousel.addEventListener('focusout', () => this.startAutoplay());
        
        console.log('Carousel initialization complete');
    }
    
    setupInitialState() {
        // Ensure track has proper display
        this.track.style.display = 'flex';
        this.track.style.transition = 'transform 0.5s ease-in-out';
        this.track.style.transform = 'translateX(0%)';
        
        // Ensure slides are properly positioned
        this.slides.forEach((slide, index) => {
            slide.style.flexShrink = '0';
            slide.style.opacity = '1';
        });
    }
    
    setupResponsiveSlides() {
        this.slidesPerView = this.getSlidesPerView();
        this.maxIndex = Math.max(0, this.slides.length - this.slidesPerView);
        
        // Ensure current index is within bounds
        if (this.currentIndex > this.maxIndex) {
            this.currentIndex = this.maxIndex;
        }
        
        // Set up track styling for responsive behavior
        this.track.style.display = 'flex';
        this.track.style.transition = 'transform 0.5s ease-in-out';
        
        // Set slide widths based on responsive design
        this.slides.forEach(slide => {
            slide.style.flexShrink = '0';
            slide.style.width = `${100 / this.slidesPerView}%`;
        });
    }
    
    getSlidesPerView() {
        const width = window.innerWidth;
        if (width >= 1024) return 3; // lg: show 3 slides
        if (width >= 640) return 2;  // sm: show 2 slides
        return 1;                    // mobile: show 1 slide
    }
    
    setupEventListeners() {
        if (this.prevButton) {
            this.prevButton.addEventListener('click', () => this.goToPrevious());
        }
        
        if (this.nextButton) {
            this.nextButton.addEventListener('click', () => this.goToNext());
        }
        
        this.dots.forEach((dot, index) => {
            dot.addEventListener('click', () => this.goToSlide(index));
        });
        
        // Keyboard navigation
        this.carousel.addEventListener('keydown', (e) => this.handleKeydown(e));
        
        // Touch/swipe support
        this.setupTouchEvents();
    }
    
    setupTouchEvents() {
        let startX = 0;
        let startY = 0;
        let isDragging = false;
        
        this.track.addEventListener('touchstart', (e) => {
            startX = e.touches[0].clientX;
            startY = e.touches[0].clientY;
            isDragging = true;
            this.pauseAutoplay();
        });
        
        this.track.addEventListener('touchmove', (e) => {
            if (!isDragging) return;
            
            const currentX = e.touches[0].clientX;
            const currentY = e.touches[0].clientY;
            const diffX = startX - currentX;
            const diffY = startY - currentY;
            
            // Prevent vertical scrolling if horizontal swipe
            if (Math.abs(diffX) > Math.abs(diffY)) {
                e.preventDefault();
            }
        });
        
        this.track.addEventListener('touchend', (e) => {
            if (!isDragging) return;
            
            const endX = e.changedTouches[0].clientX;
            const diffX = startX - endX;
            const threshold = 50;
            
            if (Math.abs(diffX) > threshold) {
                if (diffX > 0) {
                    this.goToNext();
                } else {
                    this.goToPrevious();
                }
            }
            
            isDragging = false;
            this.startAutoplay();
        });
    }
    
    handleKeydown(e) {
        switch (e.key) {
            case 'ArrowLeft':
                e.preventDefault();
                this.goToPrevious();
                break;
            case 'ArrowRight':
                e.preventDefault();
                this.goToNext();
                break;
            case 'Home':
                e.preventDefault();
                this.goToSlide(0);
                break;
            case 'End':
                e.preventDefault();
                this.goToSlide(this.maxIndex);
                break;
        }
    }
    
    goToPrevious() {
        if (this.isAnimating) return;
        
        const newIndex = this.currentIndex <= 0 ? this.maxIndex : this.currentIndex - 1;
        this.goToSlide(newIndex);
    }
    
    goToNext() {
        if (this.isAnimating) return;
        
        const newIndex = this.currentIndex >= this.maxIndex ? 0 : this.currentIndex + 1;
        this.goToSlide(newIndex);
    }
    
    goToSlide(index) {
        if (this.isAnimating || index === this.currentIndex || index < 0 || index > this.maxIndex) {
            return;
        }
        
        this.isAnimating = true;
        this.currentIndex = index;
        
        this.updateSlidePosition();
        this.updateDots();
        this.updateButtons();
        
        // Reset animation flag after transition
        setTimeout(() => {
            this.isAnimating = false;
        }, 500);
        
        // Restart autoplay
        this.startAutoplay();
    }
    
    updateSlidePosition() {
        const slideWidth = 100 / this.slidesPerView;
        const translateX = -(this.currentIndex * slideWidth);
        
        this.track.style.transform = `translateX(${translateX}%)`;
    }
    
    updateDots() {
        this.dots.forEach((dot, index) => {
            const isActive = index === this.currentIndex;
            dot.classList.toggle('is-active', isActive);
            dot.setAttribute('aria-current', isActive ? 'true' : 'false');
        });
    }
    
    updateButtons() {
        if (this.prevButton) {
            this.prevButton.disabled = this.currentIndex === 0;
            this.prevButton.setAttribute('aria-disabled', this.currentIndex === 0);
        }
        
        if (this.nextButton) {
            this.nextButton.disabled = this.currentIndex === this.maxIndex;
            this.nextButton.setAttribute('aria-disabled', this.currentIndex === this.maxIndex);
        }
    }
    
    startAutoplay() {
        this.pauseAutoplay();
        
        // Only start autoplay if there are multiple slide groups to show
        if (this.maxIndex > 0) {
            this.autoplayInterval = setInterval(() => {
                this.goToNext();
            }, this.autoplayDelay);
        }
    }
    
    pauseAutoplay() {
        if (this.autoplayInterval) {
            clearInterval(this.autoplayInterval);
            this.autoplayInterval = null;
        }
    }
    
    handleResize() {
        const oldSlidesPerView = this.slidesPerView;
        this.setupResponsiveSlides();
        
        // If slides per view changed, update position
        if (oldSlidesPerView !== this.slidesPerView) {
            this.updateSlidePosition();
            this.updateButtons();
            this.startAutoplay();
        }
    }
    
    destroy() {
        this.pauseAutoplay();
        window.removeEventListener('resize', this.handleResize);
        
        // Remove all event listeners
        if (this.prevButton) {
            this.prevButton.removeEventListener('click', this.goToPrevious);
        }
        if (this.nextButton) {
            this.nextButton.removeEventListener('click', this.goToNext);
        }
        
        this.dots.forEach((dot) => {
            dot.removeEventListener('click', this.goToSlide);
        });
    }
}

// Initialize carousels when DOM is ready
document.addEventListener('DOMContentLoaded', () => {
    console.log('DOM loaded, looking for carousels...');
    const carousels = document.querySelectorAll('[data-carousel]');
    console.log('Found carousels:', carousels.length);
    
    carousels.forEach((carousel, index) => {
        console.log(`Initializing carousel ${index + 1}`);
        try {
            new ExperienceCarousel(carousel);
            console.log(`Carousel ${index + 1} initialized successfully`);
        } catch (error) {
            console.error(`Error initializing carousel ${index + 1}:`, error);
        }
    });
});

// Handle page visibility change (pause autoplay when tab is hidden)
document.addEventListener('visibilitychange', () => {
    const carousels = document.querySelectorAll('[data-carousel]');
    
    carousels.forEach(carouselElement => {
        const carousel = carouselElement._carousel;
        if (carousel) {
            if (document.hidden) {
                carousel.pauseAutoplay();
            } else {
                carousel.startAutoplay();
            }
        }
    });
});

export default ExperienceCarousel;