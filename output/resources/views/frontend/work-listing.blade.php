@extends('layouts.frontend')

@section('title', 'Portfolio - UserBX')
@section('meta_description', 'UserBX - Work Listing Page - Explore the Creative Gallery')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/work-listing.css') }}">
@endpush

@section('content')
    <div class="pt-20">
        <!-- WORK LISTING HERO SECTION -->
        <section class="work-listing-hero-section py-12 lg:py-20">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Section Title -->
                <div class="work-listing-header text-center mb-12">
                    <h1 class="text-5xl lg:text-6xl xl:text-7xl font-medium leading-tight text-black uppercase mb-8">
                        Explore the Creative Gallery
                    </h1>
                </div>

                <!-- Filter Tabs -->
                <div class="work-listing-filters-wrapper flex justify-center mb-12">
                    <div class="work-listing-filters flex flex-wrap justify-center gap-0">
                        <button class="work-filter-btn active px-6 py-3 rounded-xl text-lg font-semibold text-black hover:bg-gray-50 transition-colors focus:outline-none focus:ring-2 focus:ring-primary"
                                data-filter="all" aria-label="Show all work">
                            All
                        </button>
                        <button class="work-filter-btn px-6 py-3 rounded-xl text-lg font-light text-gray-500 hover:bg-gray-50 transition-colors focus:outline-none focus:ring-2 focus:ring-primary"
                                data-filter="branding" aria-label="Filter by branding">
                            Branding
                        </button>
                        <button class="work-filter-btn px-6 py-3 rounded-xl text-lg font-light text-gray-500 hover:bg-gray-50 transition-colors focus:outline-none focus:ring-2 focus:ring-primary"
                                data-filter="ui-ux" aria-label="Filter by UI/UX Design">
                            UI/UX Design
                        </button>
                        <button class="work-filter-btn px-6 py-3 rounded-xl text-lg font-light text-gray-500 hover:bg-gray-50 transition-colors focus:outline-none focus:ring-2 focus:ring-primary"
                                data-filter="digital" aria-label="Filter by Digital Designs">
                            Digital Designs
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- WORK GALLERY GRID -->
        <section class="work-listing-gallery py-8">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="work-gallery-grid grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12" id="work-gallery-grid">
                    
                    @for($i = 1; $i <= 9; $i++)
                        @php
                            $categories = ['branding', 'ui-ux', 'digital'];
                            $category = $categories[($i - 1) % 3];
                            $images = ['portfolio-01.png', 'portfolio-05.png', 'portfolio-04.png', 'portfolio-02.png', 'portfolio-06.png', 'portfolio-07.png', 'portfolio-03.png', 'portfolio-08.png', 'portfolio-09.png'];
                        @endphp
                        <!-- Work Card {{ $i }} -->
                        <article class="work-card group bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300"
                                 data-category="{{ $category }}">
                            <a href="{{ route('portfolio') }}" class="block focus:outline-none focus:ring-2 focus:ring-primary rounded-xl">
                                <div class="work-card-image aspect-[4/3] overflow-hidden rounded-t-xl">
                                    <img src="{{ asset('assets/img/' . $images[$i - 1]) }}" 
                                         alt="Portfolio project" 
                                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                                         loading="lazy">
                                </div>
                                <div class="work-card-content p-6">
                                    <div class="work-card-meta flex items-center justify-between mb-3">
                                        <time class="text-sm text-black" datetime="2022-03-16">16. March 2022</time>
                                        <span class="work-card-tag border border-primary rounded-full px-3 py-1 text-xs uppercase text-primary">
                                            {{ str_replace('-', '/', $category) }}
                                        </span>
                                    </div>
                                    <h3 class="text-2xl font-medium text-black mb-3 group-hover:text-primary transition-colors">
                                        Hope dies last
                                    </h3>
                                    <p class="text-base text-black leading-relaxed">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Egestas dui id ornare arcu odio ut sem. Cras ornare arcu dui vivamus arcu felis bibendum ut. Porttitor leo a diam.
                                    </p>
                                </div>
                            </a>
                        </article>
                    @endfor

                </div>

                <!-- Pagination -->
                <div class="work-listing-pagination flex items-center justify-center gap-2 mt-12">
                    <button class="pagination-btn pagination-control w-8 h-8 rounded-full bg-white border border-gray-200 flex items-center justify-center hover:bg-gray-50 transition-colors focus:outline-none focus:ring-2 focus:ring-primary"
                            aria-label="First page">
                        <span class="material-icons text-gray-600 text-sm">first_page</span>
                    </button>
                    <button class="pagination-btn pagination-control w-8 h-8 rounded-full bg-white border border-gray-200 flex items-center justify-center hover:bg-gray-50 transition-colors focus:outline-none focus:ring-2 focus:ring-primary"
                            aria-label="Previous page">
                        <span class="material-icons text-gray-600 text-sm">chevron_left</span>
                    </button>
                    <button class="pagination-btn pagination-page active w-8 h-8 rounded-full bg-primary text-white flex items-center justify-center hover:bg-primary/90 transition-colors focus:outline-none focus:ring-2 focus:ring-primary"
                            aria-label="Page 1" aria-current="page">
                        <span class="text-sm font-semibold">1</span>
                    </button>
                    <button class="pagination-btn pagination-page w-8 h-8 rounded-full bg-white border border-gray-200 text-gray-700 flex items-center justify-center hover:bg-gray-50 transition-colors focus:outline-none focus:ring-2 focus:ring-primary"
                            aria-label="Page 2">
                        <span class="text-sm font-semibold">2</span>
                    </button>
                    <button class="pagination-btn pagination-page w-8 h-8 rounded-full bg-white border border-gray-200 text-gray-700 flex items-center justify-center hover:bg-gray-50 transition-colors focus:outline-none focus:ring-2 focus:ring-primary"
                            aria-label="Page 3">
                        <span class="text-sm font-semibold">3</span>
                    </button>
                    <button class="pagination-btn pagination-page w-8 h-8 rounded-full bg-white text-gray-700 flex items-center justify-center hover:bg-gray-50 transition-colors focus:outline-none focus:ring-2 focus:ring-primary"
                            aria-label="More pages">
                        <span class="text-sm font-semibold">...</span>
                    </button>
                    <button class="pagination-btn pagination-page w-8 h-8 rounded-full bg-white border border-gray-200 text-gray-700 flex items-center justify-center hover:bg-gray-50 transition-colors focus:outline-none focus:ring-2 focus:ring-primary"
                            aria-label="Page 10">
                        <span class="text-sm font-semibold">10</span>
                    </button>
                    <button class="pagination-btn pagination-control w-8 h-8 rounded-full bg-white border border-gray-200 flex items-center justify-center hover:bg-gray-50 transition-colors focus:outline-none focus:ring-2 focus:ring-primary"
                            aria-label="Next page">
                        <span class="material-icons text-gray-600 text-sm">chevron_right</span>
                    </button>
                    <button class="pagination-btn pagination-control w-8 h-8 rounded-full bg-white border border-gray-200 flex items-center justify-center hover:bg-gray-50 transition-colors focus:outline-none focus:ring-2 focus:ring-primary"
                            aria-label="Last page">
                        <span class="material-icons text-gray-600 text-sm">last_page</span>
                    </button>
                </div>
            </div>
        </section>

        <!-- NEWSLETTER CTA SECTION -->
        <section class="news-letter-section py-20 lg:py-32 relative overflow-hidden min-h-[667px] flex items-center">
            <!-- Animated Background -->
            <div class="news-letter-bg absolute inset-0">
                <img src="{{ asset('assets/img/bg-waves.jpg') }}" 
                     alt="" 
                     class="w-full h-full object-cover" 
                     loading="lazy">
            </div>
            <div class="news-letter-overlay absolute inset-0 bg-black/55"></div>

            <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="news-letter-main grid md:grid-cols-[50%_50%] gap-12 items-center">
                    <div class="news-letter-content">
                        <h2 class="text-4xl lg:text-5xl xl:text-6xl font-medium text-white leading-tight uppercase tracking-[-0.4px]">
                            Sign Up to Discover Startup Features
                        </h2>
                    </div>
                    <div class="news-letter-actions space-y-6">
                        <p class="text-xl lg:text-3xl text-white/90 leading-relaxed">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit
                        </p>
                        <div class="news-letter-action-wrapper flex items-center space-x-4">
                            <a href="{{ route('services') }}"
                                class="news-letter-action-icon inline-flex items-center justify-center w-12 h-12 rounded-full bg-primary text-white hover:bg-primary/90 transition-colors focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2"
                                aria-label="View Services">
                                <span class="material-icons">arrow_forward</span>
                            </a>
                            <a href="{{ route('contact') }}" class="news-letter-action-btn btn btn-primary">
                                Work With Us
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('assets/js/work-listing.js') }}" defer></script>
@endpush
