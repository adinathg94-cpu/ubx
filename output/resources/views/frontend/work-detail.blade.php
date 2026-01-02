@extends('layouts.frontend')

@section('title', 'Work Detail - UserBX')
@section('meta_description', 'UserBX - Work Detail Page - Don\'t close your eyes')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/work-detail.css') }}">
@endpush

@section('content')
    <!-- WRAPPER FOR GREY BACKGROUND SECTIONS -->
    <div class="bg-[#efefef] pt-20">
        <!-- HERO SECTION -->
        <section class="work-hero-section py-12 lg:py-20">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="work-hero-content grid lg:grid-cols-2 gap-12 items-start mb-12">
                    
                    <!-- Left: Title -->
                    <div class="work-hero-title">
                        <h1 class="text-5xl lg:text-7xl xl:text-8xl font-medium leading-[1.1] text-black uppercase tracking-[-4.16px]">
                            Don't close your eyes
                        </h1>
                    </div>

                    <!-- Right: Description -->
                    <div class="work-hero-description space-y-6">
                        <p class="text-xl leading-[1.67] text-black">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Egestas dui id ornare arcu odio ut sem. Cras ornare arcu dui vivamus arcu felis bibendum ut.
                        </p>
                        
                        <!-- Divider Line -->
                        <div class="work-hero-divider h-px bg-black"></div>
                        
                        <!-- Category Tags -->
                        <div class="work-hero-tags flex flex-wrap gap-4">
                            <span class="work-tag border border-primary rounded-full px-3 py-2 text-xs uppercase text-primary">
                                branding
                            </span>
                            <span class="work-tag border border-primary rounded-full px-3 py-2 text-xs uppercase text-primary">
                                automobile
                            </span>
                            <span class="work-tag border border-primary rounded-full px-3 py-2 text-xs uppercase text-primary">
                                case study
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Image Carousel -->
                <div class="work-hero-carousel relative">
                    <div class="work-carousel-container relative rounded-xl overflow-hidden">
                        <div class="work-carousel-slides" id="work-carousel-slides">
                            <div class="work-carousel-slide active">
                                <img src="{{ asset('assets/img/work-detail-main.jpg') }}" 
                                     alt="Work detail image" 
                                     class="w-full h-auto object-cover"
                                     loading="eager">
                            </div>
                            <!-- Additional slides will be added dynamically or via JavaScript -->
                        </div>
                        
                        <!-- Carousel Navigation -->
                        <div class="work-carousel-nav flex items-center justify-end gap-5 mt-8">
                            <button class="work-carousel-btn work-carousel-btn-prev w-[60px] h-[60px] rounded-full bg-white border border-gray-300 flex items-center justify-center hover:bg-gray-50 transition-colors focus:outline-none focus:ring-2 focus:ring-primary"
                                    aria-label="Previous image">
                                <span class="material-icons text-gray-600">
                                    <img src="{{ asset('assets/img/icons/arrow.svg') }}" alt="Arrow Left" class="w-6 h-6">
                                </span>
                            </button>
                            <button class="work-carousel-btn work-carousel-btn-next w-[60px] h-[60px] rounded-full bg-primary flex items-center justify-center hover:bg-primary/90 transition-colors focus:outline-none focus:ring-2 focus:ring-primary"
                                    aria-label="Next image">
                                <span class="material-icons text-white">
                                    <img src="{{ asset('assets/img/icons/arrow.svg') }}" alt="Arrow Right" class="w-6 h-6">
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- THUMBNAIL GALLERY -->
        <section class="work-thumbnail-gallery py-8">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="work-thumbnail-grid grid grid-cols-2 md:grid-cols-4 gap-4">
                    <div class="work-thumbnail-item rounded-xl overflow-hidden">
                        <img src="{{ asset('assets/img/work-detail-thumb-1.jpg') }}" 
                             alt="Thumbnail 1" 
                             class="w-full h-full object-cover hover:scale-110 transition-transform duration-700"
                             loading="lazy">
                    </div>
                    <div class="work-thumbnail-item rounded-xl overflow-hidden">
                        <img src="{{ asset('assets/img/work-detail-thumb-2.jpg') }}" 
                             alt="Thumbnail 2" 
                             class="w-full h-full object-cover hover:scale-110 transition-transform duration-700"
                             loading="lazy">
                    </div>
                    <div class="work-thumbnail-item rounded-xl overflow-hidden">
                        <img src="{{ asset('assets/img/work-detail-thumb-3.jpg') }}" 
                             alt="Thumbnail 3" 
                             class="w-full h-full object-cover hover:scale-110 transition-transform duration-700"
                             loading="lazy">
                    </div>
                    <div class="work-thumbnail-item rounded-xl overflow-hidden">
                        <img src="{{ asset('assets/img/work-detail-thumb-4.jpg') }}" 
                             alt="Thumbnail 4" 
                             class="w-full h-full object-cover hover:scale-110 transition-transform duration-700"
                             loading="lazy">
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- ACCORDION SECTION -->
    <section class="work-accordion-section py-16 lg:py-24 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="work-accordion-wrapper max-w-5xl mx-auto">
                
                <!-- Accordion Item: Objective -->
                <div class="work-accordion-item border-b border-black">
                    <button type="button" class="work-accordion-header w-full flex items-center justify-between py-6 text-left focus:outline-none focus:ring-2 focus:ring-primary rounded"
                            aria-expanded="false" aria-controls="accordion-objective">
                        <h3 class="text-4xl lg:text-5xl font-medium uppercase text-black">Objective</h3>
                        <span class="work-accordion-icon flex items-center justify-center w-[60px] h-[60px] transition-transform duration-300">
                            <img src="{{ asset('assets/img/icons/plus.svg') }}" 
                                 alt="Expand" 
                                 class="w-[60px] h-[60px]">
                        </span>
                    </button>
                    <div class="work-accordion-content hidden" id="accordion-objective">
                        <div class="pb-8">
                            <p class="text-lg text-black leading-relaxed">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Accordion Item: Challenges -->
                <div class="work-accordion-item border-b border-black">
                    <button type="button" class="work-accordion-header w-full flex items-center justify-between py-6 text-left focus:outline-none focus:ring-2 focus:ring-primary rounded"
                            aria-expanded="false" aria-controls="accordion-challenges">
                        <h3 class="text-4xl lg:text-5xl font-medium uppercase text-black">Challenges</h3>
                        <span class="work-accordion-icon flex items-center justify-center w-[60px] h-[60px] transition-transform duration-300">
                            <img src="{{ asset('assets/img/icons/plus.svg') }}" 
                                 alt="Expand" 
                                 class="w-[60px] h-[60px]">
                        </span>
                    </button>
                    <div class="work-accordion-content hidden" id="accordion-challenges">
                        <div class="pb-8">
                            <p class="text-lg text-black leading-relaxed">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Accordion Item: Key Results -->
                <div class="work-accordion-item border-b border-black">
                    <button type="button" class="work-accordion-header w-full flex items-center justify-between py-6 text-left focus:outline-none focus:ring-2 focus:ring-primary rounded"
                            aria-expanded="false" aria-controls="accordion-results">
                        <h3 class="text-4xl lg:text-5xl font-medium uppercase text-black">Key Results</h3>
                        <span class="work-accordion-icon flex items-center justify-center w-[60px] h-[60px] transition-transform duration-300">
                            <img src="{{ asset('assets/img/icons/plus.svg') }}" 
                                 alt="Expand" 
                                 class="w-[60px] h-[60px]">
                        </span>
                    </button>
                    <div class="work-accordion-content hidden" id="accordion-results">
                        <div class="pb-8">
                            <p class="text-lg text-black leading-relaxed">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Accordion Item: Conclusion -->
                <div class="work-accordion-item border-b border-black">
                    <button type="button" class="work-accordion-header w-full flex items-center justify-between py-6 text-left focus:outline-none focus:ring-2 focus:ring-primary rounded"
                            aria-expanded="false" aria-controls="accordion-conclusion">
                        <h3 class="text-4xl lg:text-5xl font-medium uppercase text-black">Conclusion</h3>
                        <span class="work-accordion-icon flex items-center justify-center w-[60px] h-[60px] transition-transform duration-300">
                            <img src="{{ asset('assets/img/icons/plus.svg') }}" 
                                 alt="Expand" 
                                 class="w-[60px] h-[60px]">
                        </span>
                    </button>
                    <div class="work-accordion-content hidden" id="accordion-conclusion">
                        <div class="pb-8">
                            <p class="text-lg text-black leading-relaxed">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- NEWSLETTER CTA SECTION -->
    <section class="news-letter-section py-20 lg:py-32 relative overflow-hidden min-h-[667px] flex items-center">
        <!-- Animated Background -->
        <div class="news-letter-bg absolute inset-0">
            <img src="{{ asset('assets/img/work-newsletter-bg.jpg') }}" 
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
                        <a href="{{ route('services') }}" class="news-letter-action-btn btn btn-primary">
                            Work With Us
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script src="{{ asset('assets/js/work-detail.js') }}" defer></script>
@endpush
