(function () {
    'use strict';

    // Share functionality
    function initShareButtons() {
        const shareButtons = document.querySelectorAll('.news-blog-share-icon');
        
        shareButtons.forEach(button => {
            button.addEventListener('click', function (e) {
                e.preventDefault();
                
                const url = window.location.href;
                const title = document.querySelector('.news-blog-hero-title h1')?.textContent || 'UserBX Article';
                
                // Check if Web Share API is available
                if (navigator.share) {
                    navigator.share({
                        title: title,
                        url: url
                    }).catch(err => {
                        console.log('Error sharing:', err);
                    });
                } else {
                    // Fallback: Copy to clipboard
                    navigator.clipboard.writeText(url).then(() => {
                        // Show a simple feedback (could be enhanced with a toast notification)
                        const originalText = button.getAttribute('aria-label');
                        button.setAttribute('aria-label', 'Link copied!');
                        setTimeout(() => {
                            button.setAttribute('aria-label', originalText);
                        }, 2000);
                    }).catch(err => {
                        console.log('Error copying to clipboard:', err);
                    });
                }
            });
        });
    }

    // Smooth scroll for anchor links
    function initSmoothScroll() {
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                const href = this.getAttribute('href');
                
                if (href === '#' || href === '#!') return;
                
                const target = document.querySelector(href);
                
                if (target) {
                    e.preventDefault();
                    
                    const headerOffset = 80;
                    const elementPosition = target.getBoundingClientRect().top;
                    const offsetPosition = elementPosition + window.pageYOffset - headerOffset;
                    
                    window.scrollTo({
                        top: offsetPosition,
                        behavior: 'smooth'
                    });
                }
            });
        });
    }

    // Initialize on DOM ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', function () {
            initShareButtons();
            initSmoothScroll();
        });
    } else {
        // DOM is already ready
        initShareButtons();
        initSmoothScroll();
    }

    // Also initialize on window load as a fallback
    window.addEventListener('load', function () {
        initShareButtons();
        initSmoothScroll();
    });

})();




