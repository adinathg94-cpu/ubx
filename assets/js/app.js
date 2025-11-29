(function () {
    'use strict';

    function lockScroll() {
        const scrollbarWidth = window.innerWidth - document.documentElement.clientWidth;
        document.body.style.paddingRight = `${scrollbarWidth}px`;
        document.body.classList.add('scroll-locked');
    }

    function unlockScroll() {
        document.body.style.paddingRight = '';
        document.body.classList.remove('scroll-locked');
    }

    function trapFocus(element) {
        const focusableElements = element.querySelectorAll(
            'a[href], button:not([disabled]), textarea:not([disabled]), input:not([disabled]), select:not([disabled]), [tabindex]:not([tabindex="-1"])'
        );

        const firstFocusable = focusableElements[0];
        const lastFocusable = focusableElements[focusableElements.length - 1];

        element.addEventListener('keydown', function (e) {
            if (e.key !== 'Tab') return;

            if (e.shiftKey) {
                if (document.activeElement === firstFocusable) {
                    lastFocusable.focus();
                    e.preventDefault();
                }
            } else {
                if (document.activeElement === lastFocusable) {
                    firstFocusable.focus();
                    e.preventDefault();
                }
            }
        });

        if (firstFocusable) {
            firstFocusable.focus();
        }
    }

    function prefersReducedMotion() {
        return window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    }

    function isTouchDevice() {
        return (('ontouchstart' in window) ||
            (navigator.maxTouchPoints > 0) ||
            (navigator.msMaxTouchPoints > 0));
    }

    function initMarquee(selector, speed = 50) {
        if (prefersReducedMotion()) return;
        const containers = document.querySelectorAll(selector);

        containers.forEach(container => {
            if (container.dataset.marqueeInitialized) return;

            const originalContent = container.querySelector('.marquee-content');
            if (!originalContent) return;

            const track = document.createElement('div');
            track.className = 'marquee-track';
            track.setAttribute('aria-hidden', 'true');

            container.innerHTML = '';
            track.appendChild(originalContent);

            const template = originalContent.cloneNode(true);

            container.appendChild(track);

            const customSpeedAttr = container.getAttribute('data-marquee-speed');
            const customSpeed = customSpeedAttr ? parseInt(customSpeedAttr, 10) : speed;

            function fillTrack() {
                const containerWidth = container.offsetWidth || container.clientWidth;
                track.innerHTML = '';
                const baseClone = template.cloneNode(true);
                track.appendChild(baseClone);

                const singleWidth = baseClone.offsetWidth || baseClone.getBoundingClientRect().width || 0;
                if (singleWidth === 0) {
                    for (let i = 0; i < 5; i++) {
                        track.appendChild(template.cloneNode(true));
                    }
                    return;
                }

                let neededClones = Math.ceil((containerWidth * 2) / singleWidth);
                if (neededClones % 2 !== 0) neededClones++;

                for (let i = 0; i < neededClones - 1; i++) {
                    track.appendChild(template.cloneNode(true));
                }
            }

            fillTrack();

            const trackWidth = track.scrollWidth;
            const finalDuration = trackWidth / customSpeed;

            track.style.animationName = 'marquee-track';
            track.style.animationDuration = `${finalDuration}s`;
            track.style.animationTimingFunction = 'linear';
            track.style.animationIterationCount = 'infinite';

            if (!container.hasAttribute('data-marquee-no-pause')) {
                container.addEventListener('mouseenter', () => {
                    track.style.animationPlayState = 'paused';
                });

                container.addEventListener('mouseleave', () => {
                    track.style.animationPlayState = 'running';
                });
            }

            container.dataset.marqueeInitialized = 'true';

            let resizeTimeout;
            function onResize() {
                clearTimeout(resizeTimeout);
                resizeTimeout = setTimeout(() => {
                    fillTrack();
                    const newTrackWidth = track.scrollWidth;
                    const newDuration = newTrackWidth / customSpeed;
                    track.style.animationDuration = `${newDuration}s`;
                }, 150);
            }
            window.addEventListener('resize', onResize);
        });
    }

    const menuToggle = document.getElementById('menu-toggle');
    const menuClose = document.getElementById('menu-close');
    const fullscreenMenu = document.getElementById('fullscreen-menu');
    const mainContent = document.getElementById('main-content');
    let lastFocusedElement = null;

    function openMenu() {
        lastFocusedElement = document.activeElement;
        fullscreenMenu.classList.add('menu-open');
        fullscreenMenu.removeAttribute('inert');
        mainContent.setAttribute('inert', '');
        menuToggle.setAttribute('aria-expanded', 'true');
        lockScroll();
        trapFocus(fullscreenMenu);
    }

    function closeMenu() {
        fullscreenMenu.classList.remove('menu-open');
        fullscreenMenu.setAttribute('inert', '');
        mainContent.removeAttribute('inert');
        menuToggle.setAttribute('aria-expanded', 'false');
        unlockScroll();

        if (lastFocusedElement) {
            lastFocusedElement.focus();
        }
    }

    if (menuToggle) {
        menuToggle.addEventListener('click', openMenu);
    }

    if (menuClose) {
        menuClose.addEventListener('click', closeMenu);
    }

    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape' && fullscreenMenu.classList.contains('menu-open')) {
            closeMenu();
        }
    });

    const menuNavLinks = document.querySelectorAll('.menu-nav-link');
    menuNavLinks.forEach(link => {
        link.addEventListener('click', function (e) {
            closeMenu();
        });
    });

    const heroStage = document.getElementById('hero-stage');
    const floatingObjects = document.querySelectorAll('.floating-object');

    if (heroStage && floatingObjects.length > 0 && !isTouchDevice() && !prefersReducedMotion()) {
        let mouseX = 0;
        let mouseY = 0;
        let currentX = 0;
        let currentY = 0;

        heroStage.addEventListener('mousemove', function (e) {
            const rect = heroStage.getBoundingClientRect();
            mouseX = (e.clientX - rect.left - rect.width / 2) / rect.width;
            mouseY = (e.clientY - rect.top - rect.height / 2) / rect.height;
        });

        function animateFloatingObjects() {
            currentX += (mouseX - currentX) * 0.1;
            currentY += (mouseY - currentY) * 0.1;

            floatingObjects.forEach(obj => {
                const depth = parseFloat(obj.getAttribute('data-depth')) || 0.2;
                const maxMove = 24;

                const moveX = currentX * maxMove * depth;
                const moveY = currentY * maxMove * depth;

                obj.style.transform = `translate(${moveX}px, ${moveY}px)`;
            });

            requestAnimationFrame(animateFloatingObjects);
        }

        animateFloatingObjects();

        heroStage.addEventListener('mouseleave', function () {
            mouseX = 0;
            mouseY = 0;
        });
    }

    const servicesSection = document.getElementById('services');
    const servicesWrapper = document.getElementById('services-scroll-wrapper');
    const servicesContainer = document.getElementById('services-horizontal-container');
    const serviceCards = document.querySelectorAll('.service-card');

    if (servicesSection && servicesContainer && serviceCards.length > 0 && !prefersReducedMotion()) {
        let sectionTop = 0;
        let sectionHeight = 0;
        let scrollDistance = 0;
        const headerOffsetFromCSS = getComputedStyle(document.documentElement).getPropertyValue('--header-height');
        const headerOffset = headerOffsetFromCSS ? parseInt(headerOffsetFromCSS, 10) : 80;

        let servicesSpacer = servicesSection.querySelector('.services-spacer');
        if (!servicesSpacer) {
            servicesSpacer = document.createElement('div');
            servicesSpacer.className = 'services-spacer';
            servicesSpacer.setAttribute('aria-hidden', 'true');
            servicesWrapper.insertAdjacentElement('afterend', servicesSpacer);
        }

        servicesSection.style.removeProperty('height');
        servicesWrapper.style.removeProperty('position');
        servicesWrapper.style.removeProperty('top');
        servicesWrapper.style.removeProperty('height');
        servicesWrapper.style.removeProperty('display');
        servicesWrapper.style.removeProperty('overflow');

        function updateSectionDimensions() {
            const rect = servicesSection.getBoundingClientRect();

            sectionTop = window.pageYOffset + rect.top - headerOffset;

            const containerWidth = servicesContainer.scrollWidth;
            const wrapperWidth = servicesWrapper.offsetWidth;
            scrollDistance = Math.max(0, containerWidth - wrapperWidth);


            sectionHeight = window.innerHeight + scrollDistance;

            if (window.innerWidth >= 1024 && scrollDistance > 0) {
                if (window.UserBXApp && window.UserBXApp.debug) {
                    console.log('UserBX services debug:', { containerWidth, wrapperWidth, scrollDistance, sectionTop, headerOffset });
                }
                servicesWrapper.classList.add('is-sticky');

                servicesWrapper.style.position = 'sticky';
                servicesWrapper.style.top = `${headerOffset}px`;
                servicesWrapper.style.height = `calc(100vh - ${headerOffset}px)`;
                servicesWrapper.style.display = 'block';
                servicesWrapper.style.overflow = 'visible';
                servicesWrapper.style.zIndex = '5';

                servicesSection.style.overflow = 'visible';


                servicesSpacer.style.height = `${scrollDistance}px`;
            } else {
                servicesWrapper.classList.remove('is-sticky');

                servicesWrapper.style.position = '';
                servicesWrapper.style.top = '';
                servicesWrapper.style.height = '';
                servicesWrapper.style.display = '';
                servicesWrapper.style.overflow = '';
                servicesWrapper.style.zIndex = '';
                servicesSection.style.height = '';
                servicesContainer.style.top = '';
                if (servicesSpacer) servicesSpacer.style.height = '';
                servicesSection.style.overflow = '';
            }
        }

        updateSectionDimensions();
        window.addEventListener('resize', updateSectionDimensions);

        function handleServicesScroll() {
            const scrollTop = window.pageYOffset;
            const windowHeight = window.innerHeight;

            const start = sectionTop;

            const end = sectionTop + scrollDistance;

            if (scrollTop >= start && scrollTop <= end && scrollDistance > 0) {
                const progress = (scrollTop - start) / (end - start);

                const translateX = -Math.round(scrollDistance * progress);
                servicesContainer.style.transform = `translateX(${translateX}px)`;

                const totalCards = serviceCards.length;
                const wrapperWidth = servicesWrapper.offsetWidth;
                const singleWidth = serviceCards[0] ? serviceCards[0].offsetWidth : 300;
                const visibleCount = Math.min(totalCards, Math.floor(wrapperWidth / singleWidth) + 2);
                serviceCards.forEach((card, index) => {
                    if (index < visibleCount) card.classList.add('visible');
                    else card.classList.remove('visible');
                });
            } else if (scrollTop < start) {
                servicesContainer.style.transform = 'translateX(0)';
            } else if (scrollTop > end) {
                servicesContainer.style.transform = `translateX(${-scrollDistance}px)`;
            }
        }

        let ticking = false;
        window.addEventListener('scroll', function () {
            if (!ticking) {
                window.requestAnimationFrame(function () {
                    handleServicesScroll();
                    ticking = false;
                });
                ticking = true;
            }
        });

        handleServicesScroll();
    }

    const portfolioFilters = document.querySelectorAll('.portfolio-filter');
    const portfolioItems = document.querySelectorAll('.portfolio-item');

    portfolioFilters.forEach(filter => {
        filter.addEventListener('click', function () {
            const filterValue = this.getAttribute('data-filter');

            portfolioFilters.forEach(f => f.classList.remove('active'));
            this.classList.add('active');

            portfolioItems.forEach(item => {
                const category = item.getAttribute('data-category');

                if (filterValue === 'all' || category === filterValue) {
                    item.style.display = 'block';
                    setTimeout(() => {
                        item.style.opacity = '1';
                    }, 10);
                } else {
                    item.style.opacity = '0';
                    setTimeout(() => {
                        item.style.display = 'none';
                    }, 300);
                }
            });
        });
    });

    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const href = this.getAttribute('href');

            if (href === '#' || href === '#!') return;

            const target = document.querySelector(href);

            if (target) {
                e.preventDefault();

                const headerOffsetFromCSS = getComputedStyle(document.documentElement).getPropertyValue('--header-height');
                const headerOffset = headerOffsetFromCSS ? parseInt(headerOffsetFromCSS, 10) : 80;
                const elementPosition = target.getBoundingClientRect().top;
                const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                window.scrollTo({
                    top: offsetPosition,
                    behavior: prefersReducedMotion() ? 'auto' : 'smooth'
                });
            }
        });
    });

    const header = document.getElementById('site-header');
    if (header) {
        const attrClasses = header.getAttribute('data-scroll-class') || 'scrolled';
        const thresholdAttr = header.getAttribute('data-scroll-threshold');
        const threshold = thresholdAttr ? parseInt(thresholdAttr, 10) : 80;

        const classesToToggle = attrClasses.trim().split(/\s+/).filter(Boolean);

        let headerTicking = false;
        let lastScrollY = window.pageYOffset || document.documentElement.scrollTop;
        const scrollDelta = 8;

        function applyHeaderScrolledState(scrolled) {
            if (scrolled) {
                classesToToggle.forEach(c => header.classList.add(c));
                header.setAttribute('data-scrolled', 'true');
            } else {
                classesToToggle.forEach(c => header.classList.remove(c));
                header.removeAttribute('data-scrolled');
            }
        }

        function handleHeaderScroll() {
            const currentScroll = window.pageYOffset || document.documentElement.scrollTop;

            const scrolled = currentScroll >= threshold;
            applyHeaderScrolledState(scrolled);

            if (fullscreenMenu && fullscreenMenu.classList.contains('menu-open')) {
                header.classList.remove('header-hidden');
                lastScrollY = currentScroll;
                headerTicking = false;
                return;
            }

            if (!prefersReducedMotion()) {
                if (Math.abs(currentScroll - lastScrollY) > scrollDelta) {
                    if (currentScroll > lastScrollY && currentScroll > 0) {
                        header.classList.add('header-hidden');
                        header.setAttribute('aria-hidden', 'true');
                    } else if (currentScroll < lastScrollY) {
                        header.classList.remove('header-hidden');
                        header.removeAttribute('aria-hidden');
                    }
                }

                lastScrollY = currentScroll <= 0 ? 0 : currentScroll;
                headerTicking = false;
            }
        }

        applyHeaderScrolledState((window.pageYOffset || document.documentElement.scrollTop) >= threshold);

        window.addEventListener('scroll', function () {
            if (!headerTicking) {
                window.requestAnimationFrame(function () {
                    handleHeaderScroll();
                });
                headerTicking = true;
            }
        });
    }

    const newsletterForm = document.querySelector('form[action="#"]');

    if (newsletterForm) {
        newsletterForm.addEventListener('submit', function (e) {
            e.preventDefault();

            const emailInput = this.querySelector('input[type="email"]');
            const email = emailInput.value;

            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            if (!emailRegex.test(email)) {
                alert('Please enter a valid email address.');
                emailInput.focus();
                return;
            }

            alert('Thank you for subscribing!');
            emailInput.value = '';
        });
    }

    document.addEventListener('DOMContentLoaded', function () {
        initMarquee('.marquee-container');
    });

    window.addEventListener('load', function () {
        initMarquee('.marquee-container');
    });

    window.UserBXApp = {
        lockScroll,
        unlockScroll,
        trapFocus,
        openMenu,
        closeMenu,
        initMarquee
    };

})();
