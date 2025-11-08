/**
 * Frame-shifting Gallery Component
 * Creates an auto-advancing image gallery with smooth frame transitions
 */
class FrameGallery {
    constructor(element) {
        this.gallery = element;
        this.frames = element.querySelectorAll('.frame-gallery__frame');
        this.dots = element.querySelectorAll('.frame-gallery__dot');
        this.progressBar = element.querySelector('.frame-gallery__progress-bar');
        
        this.currentFrame = 0;
        this.frameCount = this.frames.length;
        this.autoAdvanceInterval = null;
        this.frameDisplayTime = 4000; // 4 seconds per frame
        this.isTransitioning = false;
        this.isPaused = false;
        
        this.init();
    }
    
    init() {
        if (this.frameCount <= 1) return;
        
        this.setupEventListeners();
        this.startAutoAdvance();
        this.updateProgressBar();
        
        // Add progress bar if it doesn't exist
        if (!this.progressBar) {
            this.createProgressBar();
        }
    }
    
    setupEventListeners() {
        // Dot navigation
        this.dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                if (!this.isTransitioning) {
                    this.goToFrame(index);
                }
            });
        });
        
        // Pause on hover
        this.gallery.addEventListener('mouseenter', () => {
            this.pauseAutoAdvance();
        });
        
        this.gallery.addEventListener('mouseleave', () => {
            this.resumeAutoAdvance();
        });
        
        // Keyboard navigation
        this.gallery.addEventListener('keydown', (e) => {
            if (e.key === 'ArrowLeft' || e.key === 'ArrowRight') {
                e.preventDefault();
                if (!this.isTransitioning) {
                    const direction = e.key === 'ArrowLeft' ? -1 : 1;
                    const newIndex = (this.currentFrame + direction + this.frameCount) % this.frameCount;
                    this.goToFrame(newIndex);
                }
            }
        });
        
        // Make gallery focusable for keyboard navigation
        this.gallery.setAttribute('tabindex', '0');
    }
    
    createProgressBar() {
        const progressContainer = document.createElement('div');
        progressContainer.className = 'frame-gallery__progress';
        
        const progressBar = document.createElement('div');
        progressBar.className = 'frame-gallery__progress-bar';
        
        progressContainer.appendChild(progressBar);
        this.gallery.querySelector('.frame-gallery__container').appendChild(progressContainer);
        
        this.progressBar = progressBar;
    }
    
    goToFrame(index) {
        if (index === this.currentFrame || this.isTransitioning) return;
        
        this.isTransitioning = true;
        const previousFrame = this.currentFrame;
        this.currentFrame = index;
        
        // Update frames
        this.frames[previousFrame].classList.remove('frame-gallery__frame--active');
        this.frames[previousFrame].classList.add('frame-gallery__frame--leaving');
        
        this.frames[this.currentFrame].classList.add('frame-gallery__frame--entering');
        
        // Update dots
        this.dots[previousFrame]?.classList.remove('frame-gallery__dot--active');
        this.dots[this.currentFrame]?.classList.add('frame-gallery__dot--active');
        
        // Handle transition completion
        setTimeout(() => {
            this.frames[previousFrame].classList.remove('frame-gallery__frame--leaving');
            this.frames[this.currentFrame].classList.remove('frame-gallery__frame--entering');
            this.frames[this.currentFrame].classList.add('frame-gallery__frame--active');
            
            this.isTransitioning = false;
            this.updateProgressBar();
        }, 800); // Match CSS transition duration
        
        // Restart auto-advance
        this.restartAutoAdvance();
    }
    
    nextFrame() {
        const nextIndex = (this.currentFrame + 1) % this.frameCount;
        this.goToFrame(nextIndex);
    }
    
    startAutoAdvance() {
        if (this.isPaused) return;
        
        this.autoAdvanceInterval = setInterval(() => {
            if (!this.isPaused && !this.isTransitioning) {
                this.nextFrame();
            }
        }, this.frameDisplayTime);
    }
    
    pauseAutoAdvance() {
        this.isPaused = true;
        if (this.autoAdvanceInterval) {
            clearInterval(this.autoAdvanceInterval);
        }
        if (this.progressBar) {
            this.progressBar.style.animationPlayState = 'paused';
        }
    }
    
    resumeAutoAdvance() {
        this.isPaused = false;
        this.startAutoAdvance();
        if (this.progressBar) {
            this.progressBar.style.animationPlayState = 'running';
        }
    }
    
    restartAutoAdvance() {
        if (this.autoAdvanceInterval) {
            clearInterval(this.autoAdvanceInterval);
        }
        this.startAutoAdvance();
    }
    
    updateProgressBar() {
        if (!this.progressBar) return;
        
        const progressPercent = ((this.currentFrame + 1) / this.frameCount) * 100;
        
        // Reset and animate progress bar
        this.progressBar.style.transition = 'none';
        this.progressBar.style.width = `${(this.currentFrame / this.frameCount) * 100}%`;
        
        // Force reflow
        this.progressBar.offsetHeight;
        
        // Animate to next position
        this.progressBar.style.transition = `width ${this.frameDisplayTime}ms linear`;
        this.progressBar.style.width = `${progressPercent}%`;
    }
    
    destroy() {
        if (this.autoAdvanceInterval) {
            clearInterval(this.autoAdvanceInterval);
        }
        
        // Remove event listeners
        this.dots.forEach(dot => {
            dot.replaceWith(dot.cloneNode(true));
        });
        
        this.gallery.replaceWith(this.gallery.cloneNode(true));
    }
}

// Initialize frame galleries when DOM is loaded
document.addEventListener('DOMContentLoaded', () => {
    const frameGalleries = document.querySelectorAll('[data-frame-gallery]');
    
    frameGalleries.forEach(gallery => {
        new FrameGallery(gallery);
    });
});

// Handle dynamic content loading
if (window.Alpine) {
    document.addEventListener('alpine:init', () => {
        Alpine.directive('frame-gallery', (el) => {
            new FrameGallery(el);
        });
    });
}

// Export for module usage
export default FrameGallery;