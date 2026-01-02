(function () {
    'use strict';

    // Filter functionality
    const filterButtons = document.querySelectorAll('.work-filter-btn');
    const workCards = document.querySelectorAll('.work-card');
    const galleryGrid = document.getElementById('work-gallery-grid');

    if (filterButtons.length > 0 && workCards.length > 0) {
        filterButtons.forEach(button => {
            button.addEventListener('click', function () {
                const filter = this.getAttribute('data-filter');

                // Update active state
                filterButtons.forEach(btn => {
                    btn.classList.remove('active');
                    btn.classList.add('font-light', 'text-gray-500');
                    btn.classList.remove('font-semibold', 'text-black');
                });
                this.classList.add('active');
                this.classList.remove('font-light', 'text-gray-500');
                this.classList.add('font-semibold', 'text-black');

                // Filter cards
                workCards.forEach(card => {
                    const category = card.getAttribute('data-category');
                    
                    if (filter === 'all' || category === filter) {
                        card.style.display = '';
                        card.style.animation = 'fadeIn 0.5s ease-in';
                    } else {
                        card.style.display = 'none';
                    }
                });

                // Update grid layout after filtering
                setTimeout(() => {
                    if (galleryGrid) {
                        galleryGrid.style.minHeight = 'auto';
                    }
                }, 300);
            });
        });
    }

    // Pagination functionality
    const paginationButtons = document.querySelectorAll('.pagination-btn');
    const paginationPages = document.querySelectorAll('.pagination-page');

    if (paginationButtons.length > 0) {
        paginationButtons.forEach(button => {
            button.addEventListener('click', function (e) {
                e.preventDefault();

                // Handle control buttons (first, prev, next, last)
                if (this.classList.contains('pagination-control')) {
                    const label = this.getAttribute('aria-label');
                    
                    if (label && label.includes('First')) {
                        // Go to first page
                        updateActivePage(1);
                    } else if (label && label.includes('Previous')) {
                        // Go to previous page
                        const currentPage = getCurrentPage();
                        if (currentPage > 1) {
                            updateActivePage(currentPage - 1);
                        }
                    } else if (label && label.includes('Next')) {
                        // Go to next page
                        const currentPage = getCurrentPage();
                        if (currentPage < 10) {
                            updateActivePage(currentPage + 1);
                        }
                    } else if (label && label.includes('Last')) {
                        // Go to last page
                        updateActivePage(10);
                    }
                } 
                // Handle page number buttons
                else if (this.classList.contains('pagination-page')) {
                    const pageText = this.querySelector('span')?.textContent;
                    if (pageText && !isNaN(parseInt(pageText))) {
                        updateActivePage(parseInt(pageText));
                    }
                }
            });
        });
    }

    function getCurrentPage() {
        const activePage = document.querySelector('.pagination-page.active');
        if (activePage) {
            const pageText = activePage.querySelector('span')?.textContent;
            return pageText ? parseInt(pageText) : 1;
        }
        return 1;
    }

    function updateActivePage(pageNumber) {
        paginationPages.forEach(page => {
            page.classList.remove('active', 'bg-primary', 'text-white', 'border-primary');
            page.classList.add('bg-white', 'border-gray-200', 'text-gray-700');
        });

        // Find and activate the target page
        paginationPages.forEach(page => {
            const pageText = page.querySelector('span')?.textContent;
            if (pageText && parseInt(pageText) === pageNumber) {
                page.classList.add('active', 'bg-primary', 'text-white', 'border-primary');
                page.classList.remove('bg-white', 'border-gray-200', 'text-gray-700');
            }
        });

        // Scroll to top of gallery
        if (galleryGrid) {
            galleryGrid.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
    }

    // Initialize: Ensure first filter is active on load
    document.addEventListener('DOMContentLoaded', function () {
        const firstFilter = document.querySelector('.work-filter-btn[data-filter="all"]');
        if (firstFilter) {
            firstFilter.classList.add('active');
            firstFilter.classList.remove('font-light', 'text-gray-500');
            firstFilter.classList.add('font-semibold', 'text-black');
        }
    });

})();









