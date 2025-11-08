// Gallery Lightbox Functionality
class GalleryLightbox {
    constructor() {
        this.currentIndex = 0;
        this.images = [];
        this.isOpen = false;
        this.modal = null;
        this.image = null;
        this.caption = null;
        this.counter = null;
        
        this.init();
    }

    init() {
        // Initialize lightbox modal
        this.modal = document.getElementById('lightbox-modal');
        this.image = document.getElementById('lightbox-image');
        this.caption = document.getElementById('lightbox-caption');
        this.counter = document.getElementById('lightbox-counter');

        if (!this.modal) return;

        // Collect all gallery images
        this.collectImages();
        
        // Bind events
        this.bindEvents();
        
        // Keyboard navigation
        this.bindKeyboardEvents();
    }

    collectImages() {
        const galleryItems = document.querySelectorAll('.gallery-item');
        this.images = Array.from(galleryItems).map(item => {
            const img = item.querySelector('img');
            const index = parseInt(item.dataset.lightboxIndex);
            return {
                src: img.src,
                alt: img.alt,
                index: index
            };
        });
    }

    bindEvents() {
        // Click events for gallery items
        document.querySelectorAll('.gallery-item').forEach((item, index) => {
            item.addEventListener('click', (e) => {
                e.preventDefault();
                const lightboxIndex = parseInt(item.dataset.lightboxIndex);
                this.openLightbox(lightboxIndex);
            });
        });

        // Touch events for mobile swipe
        let startX = 0;
        let startY = 0;
        
        this.modal.addEventListener('touchstart', (e) => {
            startX = e.touches[0].clientX;
            startY = e.touches[0].clientY;
        });

        this.modal.addEventListener('touchend', (e) => {
            if (!startX || !startY) return;
            
            const endX = e.changedTouches[0].clientX;
            const endY = e.changedTouches[0].clientY;
            const diffX = startX - endX;
            const diffY = startY - endY;
            
            // Check if horizontal swipe is more significant than vertical
            if (Math.abs(diffX) > Math.abs(diffY)) {
                if (Math.abs(diffX) > 50) { // Minimum swipe distance
                    if (diffX > 0) {
                        this.nextImage(); // Swipe left - next image
                    } else {
                        this.previousImage(); // Swipe right - previous image
                    }
                }
            }
            
            startX = 0;
            startY = 0;
        });
    }

    bindKeyboardEvents() {
        document.addEventListener('keydown', (e) => {
            if (!this.isOpen) return;
            
            switch (e.key) {
                case 'Escape':
                    this.closeLightbox();
                    break;
                case 'ArrowLeft':
                    this.previousImage();
                    break;
                case 'ArrowRight':
                    this.nextImage();
                    break;
            }
        });
    }

    openLightbox(index) {
        this.currentIndex = index;
        this.isOpen = true;
        
        // Prevent body scroll
        document.body.style.overflow = 'hidden';
        
        // Show modal
        this.modal.classList.add('lightbox-active');
        
        // Load image
        this.loadImage();
        
        // Add entrance animation
        setTimeout(() => {
            this.image.style.animation = 'imageSlideIn 0.6s cubic-bezier(0.25, 1, 0.5, 1)';
        }, 100);
    }

    closeLightbox() {
        if (!this.isOpen) return;
        
        this.isOpen = false;
        
        // Restore body scroll
        document.body.style.overflow = '';
        
        // Add exit animation
        this.modal.querySelector('.lightbox-container').style.animation = 'lightboxZoomOut 0.4s cubic-bezier(0.25, 1, 0.5, 1)';
        
        setTimeout(() => {
            this.modal.classList.remove('lightbox-active');
            this.modal.querySelector('.lightbox-container').style.animation = '';
        }, 400);
    }

    loadImage() {
        const imageData = this.images[this.currentIndex];
        if (!imageData) return;
        
        // Add loading animation
        this.image.style.opacity = '0';
        this.image.style.transform = 'scale(0.9)';
        
        // Load new image
        this.image.src = imageData.src;
        this.image.alt = imageData.alt;
        this.caption.textContent = imageData.alt;
        this.counter.textContent = `${this.currentIndex + 1} of ${this.images.length}`;
        
        // Animate in new image
        setTimeout(() => {
            this.image.style.opacity = '1';
            this.image.style.transform = 'scale(1)';
        }, 100);
    }

    nextImage() {
        if (this.currentIndex < this.images.length - 1) {
            this.currentIndex++;
        } else {
            this.currentIndex = 0; // Loop to first image
        }
        this.loadImage();
        
        // Add slide animation
        this.addSlideAnimation('next');
    }

    previousImage() {
        if (this.currentIndex > 0) {
            this.currentIndex--;
        } else {
            this.currentIndex = this.images.length - 1; // Loop to last image
        }
        this.loadImage();
        
        // Add slide animation
        this.addSlideAnimation('prev');
    }

    addSlideAnimation(direction) {
        const container = this.modal.querySelector('.lightbox-content');
        const animationClass = direction === 'next' ? 'slideFromRight' : 'slideFromLeft';
        
        container.style.animation = `${animationClass} 0.4s cubic-bezier(0.25, 1, 0.5, 1)`;
        
        setTimeout(() => {
            container.style.animation = '';
        }, 400);
    }
}

// Global functions for inline event handlers
window.closeLightbox = function() {
    if (window.galleryLightbox) {
        window.galleryLightbox.closeLightbox();
    }
};

window.nextImage = function() {
    if (window.galleryLightbox) {
        window.galleryLightbox.nextImage();
    }
};

window.previousImage = function() {
    if (window.galleryLightbox) {
        window.galleryLightbox.previousImage();
    }
};

// Initialize lightbox when DOM is loaded
document.addEventListener('DOMContentLoaded', function() {
    window.galleryLightbox = new GalleryLightbox();
});

// Add additional CSS animations dynamically
const additionalStyles = `
@keyframes lightboxZoomOut {
    0% {
        transform: scale(1);
        opacity: 1;
    }
    100% {
        transform: scale(0.5);
        opacity: 0;
    }
}

@keyframes slideFromRight {
    0% {
        transform: translateX(100px);
        opacity: 0;
    }
    100% {
        transform: translateX(0);
        opacity: 1;
    }
}

@keyframes slideFromLeft {
    0% {
        transform: translateX(-100px);
        opacity: 0;
    }
    100% {
        transform: translateX(0);
        opacity: 1;
    }
}
`;

// Inject additional styles
const styleElement = document.createElement('style');
styleElement.textContent = additionalStyles;
document.head.appendChild(styleElement);