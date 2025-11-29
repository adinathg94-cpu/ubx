(function () {
    'use strict';

    // Accordion Functionality
    function initAccordion() {
        const accordionHeaders = document.querySelectorAll('.work-accordion-header:not([data-accordion-initialized])');
        
        if (accordionHeaders.length === 0) {
            return;
        }
        
        accordionHeaders.forEach((header) => {
            // Mark as initialized
            header.setAttribute('data-accordion-initialized', 'true');
            
            header.addEventListener('click', function (e) {
                e.preventDefault();
                e.stopPropagation();
                
                const isExpanded = this.getAttribute('aria-expanded') === 'true';
                const contentId = this.getAttribute('aria-controls');
                const content = document.getElementById(contentId);
                const iconSpan = this.querySelector('.work-accordion-icon');
                const iconImg = iconSpan ? iconSpan.querySelector('img') : null;
                
                if (!content) {
                    console.error('Accordion content not found:', contentId);
                    return;
                }
                
                // Toggle current item
                if (isExpanded) {
                    // Collapse
                    this.setAttribute('aria-expanded', 'false');
                    content.classList.add('hidden');
                    // Change icon to plus
                    if (iconImg) {
                        iconImg.src = 'assets/img/icons/plus.svg';
                        iconImg.alt = 'Expand';
                    }
                } else {
                    // Expand
                    this.setAttribute('aria-expanded', 'true');
                    content.classList.remove('hidden');
                    // Change icon to minus
                    if (iconImg) {
                        iconImg.src = 'assets/img/icons/minus.svg';
                        iconImg.alt = 'Collapse';
                    }
                }
            });
        });
    }

    // Carousel Functionality
    function initCarousel() {
        const carouselSlides = document.querySelectorAll('.work-carousel-slide');
        const prevBtn = document.querySelector('.work-carousel-btn-prev');
        const nextBtn = document.querySelector('.work-carousel-btn-next');
        
        if (carouselSlides.length === 0) return;
        
        let currentSlide = 0;
        
        function showSlide(index) {
            carouselSlides.forEach((slide, i) => {
                slide.classList.remove('active');
                if (i === index) {
                    slide.classList.add('active');
                }
            });
        }
        
        function nextSlide() {
            currentSlide = (currentSlide + 1) % carouselSlides.length;
            showSlide(currentSlide);
        }
        
        function prevSlide() {
            currentSlide = (currentSlide - 1 + carouselSlides.length) % carouselSlides.length;
            showSlide(currentSlide);
        }
        
        if (nextBtn) {
            nextBtn.addEventListener('click', nextSlide);
        }
        
        if (prevBtn) {
            prevBtn.addEventListener('click', prevSlide);
        }
        
        // Keyboard navigation
        document.addEventListener('keydown', function (e) {
            const carouselContainer = document.querySelector('.work-carousel-container');
            if (!carouselContainer) return;
            
            const rect = carouselContainer.getBoundingClientRect();
            const isInView = rect.top >= 0 && rect.bottom <= window.innerHeight;
            
            if (isInView) {
                if (e.key === 'ArrowRight') {
                    e.preventDefault();
                    nextSlide();
                } else if (e.key === 'ArrowLeft') {
                    e.preventDefault();
                    prevSlide();
                }
            }
        });
    }

    // Thumbnail Gallery Click Handler
    function initThumbnailGallery() {
        const thumbnailItems = document.querySelectorAll('.work-thumbnail-item');
        const carouselSlides = document.querySelectorAll('.work-carousel-slide');
        
        thumbnailItems.forEach((item, index) => {
            item.addEventListener('click', function () {
                const img = item.querySelector('img');
                if (img && carouselSlides.length > 0) {
                    // Update main carousel with clicked thumbnail
                    const mainSlide = carouselSlides[0];
                    const mainImg = mainSlide.querySelector('img');
                    if (mainImg) {
                        mainImg.src = img.src;
                        mainImg.alt = img.alt;
                    }
                }
            });
        });
    }

    // Initialize immediately if DOM is already ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', function () {
            initAccordion();
            initCarousel();
            initThumbnailGallery();
        });
    } else {
        // DOM is already ready
        initAccordion();
        initCarousel();
        initThumbnailGallery();
    }

    // Also initialize on window load as a fallback
    window.addEventListener('load', function () {
        initAccordion();
        if (document.querySelectorAll('.work-carousel-slide').length > 0) {
            initCarousel();
        }
        initThumbnailGallery();
    });

})();

