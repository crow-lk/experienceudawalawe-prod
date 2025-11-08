class GalleryCarousel {
    constructor(element) {
        this.carousel = element;
        this.track = element.querySelector('[data-gallery-track]');
        this.slides = element.querySelectorAll('.gallery-carousel__slide');
        this.dotsContainer = element.querySelector('[data-gallery-dots]');
        this.dots = element.querySelectorAll('[data-gallery-dot]');
        
        this.currentSlide = 0;
        this.totalSlides = this.slides.length;
        this.autoplayInterval = null;
        this.autoplayDelay = 4000; // 4 seconds
        
        this.init();
    }
    
    init() {
        this.bindEvents();
        this.startAutoplay();
        this.updateUI();
    }
    
    bindEvents() {
        // Dot navigation
        this.dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                this.stopAutoplay();
                this.goToSlide(index);
                this.startAutoplay();
            });
        });
        
        // Pause autoplay on hover
        this.carousel.addEventListener('mouseenter', () => {
            this.stopAutoplay();
        });
        
        this.carousel.addEventListener('mouseleave', () => {
            this.startAutoplay();
        });
        
        // Handle touch/swipe events for mobile
        this.bindTouchEvents();
    }
    
    bindTouchEvents() {
        let startX = 0;
        let currentX = 0;
        let isDragging = false;
        
        this.track.addEventListener('touchstart', (e) => {
            startX = e.touches[0].clientX;
            isDragging = true;
            this.stopAutoplay();
        });
        
        this.track.addEventListener('touchmove', (e) => {
            if (!isDragging) return;
            currentX = e.touches[0].clientX;
        });
        
        this.track.addEventListener('touchend', () => {
            if (!isDragging) return;
            
            const diff = startX - currentX;
            const threshold = 50; // Minimum swipe distance
            
            if (Math.abs(diff) > threshold) {
                if (diff > 0) {
                    this.goToNextSlide();
                } else {
                    this.goToPrevSlide();
                }
            }
            
            isDragging = false;
            this.startAutoplay();
        });
    }
    
    goToSlide(index) {
        this.currentSlide = index;
        this.updateCarousel();
        this.updateUI();
    }
    
    goToNextSlide() {
        this.currentSlide = (this.currentSlide + 1) % this.totalSlides;
        this.updateCarousel();
        this.updateUI();
    }
    
    goToPrevSlide() {
        this.currentSlide = (this.currentSlide - 1 + this.totalSlides) % this.totalSlides;
        this.updateCarousel();
        this.updateUI();
    }
    
    updateCarousel() {
        const translateX = -this.currentSlide * 100;
        this.track.style.transform = `translateX(${translateX}%)`;
    }
    
    updateUI() {
        // Update dots
        this.dots.forEach((dot, index) => {
            dot.classList.toggle('bg-[#1b1b18]', index === this.currentSlide);
            dot.classList.toggle('scale-110', index === this.currentSlide);
            dot.classList.toggle('bg-gray-300', index !== this.currentSlide);
            dot.classList.toggle('hover:bg-gray-400', index !== this.currentSlide);
        });
    }
    
    startAutoplay() {
        this.stopAutoplay(); // Clear any existing interval
        this.autoplayInterval = setInterval(() => {
            this.goToNextSlide();
        }, this.autoplayDelay);
    }
    
    stopAutoplay() {
        if (this.autoplayInterval) {
            clearInterval(this.autoplayInterval);
            this.autoplayInterval = null;
        }
    }
    
    destroy() {
        this.stopAutoplay();
        // Remove event listeners if needed
    }
}

// Initialize all gallery carousels when DOM is loaded
document.addEventListener('DOMContentLoaded', () => {
    const carousels = document.querySelectorAll('[data-gallery-carousel]');
    carousels.forEach(carousel => {
        new GalleryCarousel(carousel);
    });
});

// Export for use in other modules
export default GalleryCarousel;