/**
 * About Page JavaScript
 * Handles interactive features for the About page
 */

(function() {
    'use strict';

    // Animated Counter for Statistics
    function initStatCounter() {
        const statNumbers = document.querySelectorAll('.stat-number');
        
        if (!statNumbers.length) return;

        const observerOptions = {
            threshold: 0.5,
            rootMargin: '0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const target = entry.target;
                    const targetValue = parseInt(target.getAttribute('data-target'));
                    const duration = 2000; // 2 seconds
                    const increment = targetValue / (duration / 16); // 60fps
                    let current = 0;

                    const updateCounter = () => {
                        current += increment;
                        if (current < targetValue) {
                            target.textContent = Math.floor(current);
                            requestAnimationFrame(updateCounter);
                        } else {
                            target.textContent = targetValue;
                        }
                    };

                    updateCounter();
                    observer.unobserve(target);
                }
            });
        }, observerOptions);

        statNumbers.forEach(stat => {
            stat.textContent = '0';
            observer.observe(stat);
        });
    }

    // Smooth scroll for anchor links
    function initSmoothScroll() {
        const anchorLinks = document.querySelectorAll('a[href^="#"]');
        
        anchorLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                if (href === '#' || href === '#header' || href === '#footer') {
                    return;
                }

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

    // Add animation on scroll for service cards and value items
    function initScrollAnimations() {
        const animatedElements = document.querySelectorAll('.service-card, .value-item, .process-step');
        
        if (!animatedElements.length) return;

        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry, index) => {
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }, index * 100);
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        animatedElements.forEach(element => {
            element.style.opacity = '0';
            element.style.transform = 'translateY(30px)';
            element.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(element);
        });
    }

    // Initialize all features when DOM is ready
    function init() {
        initStatCounter();
        initSmoothScroll();
        initScrollAnimations();
    }

    // Wait for DOM to be fully loaded
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }
})();

