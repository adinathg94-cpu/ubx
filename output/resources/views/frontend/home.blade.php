@extends('layouts.frontend')

@section('title', 'UserBX - Web Design, App Dev & Branding | Wexford, Ireland')

@section('meta_description', 'UserBX is a leading Ireland-based agency in Wexford specializing in Web Development, Mobile App Development, Branding, UI/UX Design, and Digital Product Solutions.')

@section('meta')
    <meta name="keywords" content="UserBX, Web Development Ireland, Mobile App Development Wexford, Branding Agency, UI/UX Design, Website Design Ireland, Digital Marketing, User Based Expansion">
    <meta name="author" content="UserBX">
    <meta name="robots" content="index, follow">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ route('home') }}">
    <meta property="og:title" content="UserBX - Web Design, App Dev & Branding | Wexford, Ireland">
    <meta property="og:description" content="UserBX is a leading Ireland-based agency in Wexford specializing in Web Development, Mobile App Development, Branding, UI/UX Design, and Digital Product Solutions.">
    <meta property="og:image" content="{{ asset('assets/img/og-image.jpg') }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ route('home') }}">
    <meta property="twitter:title" content="UserBX - Web Design, App Dev & Branding | Wexford, Ireland">
    <meta property="twitter:description" content="UserBX is a leading Ireland-based agency in Wexford specializing in Web Development, Mobile App Development, Branding, UI/UX Design, and Digital Product Solutions.">
    <meta property="twitter:image" content="{{ asset('assets/img/og-image.jpg') }}">

    <!-- Schema.org -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "ProfessionalService",
      "name": "UserBX",
      "image": "{{ asset('assets/img/logo.svg') }}",
      "@id": "{{ route('home') }}",
      "url": "{{ route('home') }}",
      "telephone": "+35300000000",
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "Wexford",
        "addressCountry": "IE"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 52.3369,
        "longitude": -6.4633
      },
      "openingHoursSpecification": {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": [
          "Monday",
          "Tuesday",
          "Wednesday",
          "Thursday",
          "Friday"
        ],
        "opens": "09:00",
        "closes": "17:00"
      },
      "sameAs": [
        "https://www.facebook.com/UserBX",
        "https://twitter.com/UserBX",
        "https://www.instagram.com/UserBX"
      ]
    }
    </script>
@endsection

@section('content')
    <!-- HERO SECTION -->
    <section id="home"
        class="hero-home relative min-h-screen flex items-center overflow-hidden bg-gradient-to-br from-dark via-[#1a0f2e] to-dark pt-20">

        <!-- Background Gradient Overlay -->
        <div
            class="hero-wrapper absolute inset-0 bg-gradient-to-r from-primary/10 via-transparent to-secondary/10 pointer-events-none">
        </div>

        <div class="hero-container container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="hero-body grid lg:grid-cols-2 gap-12 items-center">

                <!-- Left: Content -->
                <div class="hero-content-left text-white space-y-8 py-12 lg:py-0">

                    <!-- Main Heading -->
                    <div class="hero-content-main space-y-4">
                        <h1
                            class="inline-block text-5xl sm:text-6xl lg:text-7xl xl:text-8xl font-black leading-none tracking-tight">
                            <span class="block text-white">USER</span>
                            <span class="block text-white">BASED</span>
                            <span
                                class="block text-transparent bg-clip-text bg-gradient-to-r from-primary to-secondary">
                                <span class="inline-flex items-center">
                                    <span class="x-icons text-6xl mr-2">
                                        <img src="{{ asset('assets/img/x.png') }}" alt="Expansion Icon">
                                    </span>
                                    PANSION
                                </span>
                            </span>
                        </h1>
                    </div>

                    <!-- Subheading -->
                    <p class="hero-content-sub text-xl sm:text-2xl text-white/80 max-w-xl leading-relaxed">
                        Crafting adaptive brands and interfaces that grow with your audience
                    </p>

                    <!-- CTAs -->
                    <div class="hero-content-actions flex flex-col sm:flex-row gap-4 pt-4">
                        <a href="{{ route('portfolio') }}" class="btn btn-secondary group">
                            <span>View Projects</span>
                        </a>
                        <a href="{{ route('contact') }}" class="btn btn-primary">
                            Get a Quote
                        </a>
                    </div>
                </div>

                <!-- Right: Hero Visual with Floating Objects -->
                <div class="hero-content-right relative lg:h-[600px] flex items-center justify-center"
                    id="hero-stage">

                    <!-- Base Hero Image (Statue) -->
                    <div class="hero-content-images relative w-full mx-auto">
                        <img src="{{ asset('assets/img/hero-statue.png') }}"
                            alt="Classical statue representing creativity and innovation"
                            class="hero-content-image-main w-full h-auto relative z-10" width="600" height="700">

                        <!-- Floating Object 1: Purple Crystal (Top Left) -->
                        <img src="{{ asset('assets/img/float-crystal.png') }}" alt=""
                            class="hero-content-floating-object1 floating-object absolute w-16 sm:w-20 lg:w-24 top-[5%] left-[15%] z-20"
                            data-depth="0.3" width="96" height="96" loading="eager">

                        <!-- Floating Object 2: Purple Cube (Top Center) -->
                        <img src="{{ asset('assets/img/float-cube.png') }}" alt=""
                            class="hero-content-floating-object2 floating-object absolute w-12 sm:w-14 lg:w-16 top-[8%] left-[45%] z-20"
                            data-depth="0.2" width="64" height="64" loading="eager">

                        <!-- Floating Object 3: Large Purple Ring (Right) -->
                        <img src="{{ asset('assets/img/float-ring-large.png') }}" alt=""
                            class="hero-content-floating-object3 floating-object absolute w-32 sm:w-40 lg:w-48 top-[30%] right-[-10%] z-20"
                            data-depth="0.4" width="192" height="192" loading="eager">

                        <!-- Floating Object 4: Purple Curved Shape (Bottom Left) -->
                        <img src="{{ asset('assets/img/float-curve.png') }}" alt=""
                            class="hero-content-floating-object4 floating-object absolute w-24 sm:w-28 lg:w-32 bottom-[20%] left-[5%] z-20"
                            data-depth="0.25" width="128" height="128" loading="eager">

                        <!-- Floating Object 5: Small Purple Ring (Bottom Right) -->
                        <img src="{{ asset('assets/img/float-ring-small.png') }}" alt=""
                            class="hero-content-floating-object5 floating-object absolute w-16 sm:w-20 lg:w-24 bottom-[15%] right-[10%] z-20"
                            data-depth="0.35" width="96" height="96" loading="eager">
                    </div>

                    <!-- Glow Effects -->
                    <div
                        class="hero-content-floating-object6 absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-primary/20 rounded-full blur-3xl pointer-events-none">
                    </div>
                </div>

            </div>
        </div>

        <!-- Scroll Indicator -->
        <div
            class="hero-content-scroll absolute bottom-8 left-1/2 -translate-x-1/2 flex flex-col items-center space-y-2 text-white/50">
            <span class="hero-content-scroll-icon animate-bounce">
                <img src="{{ asset('assets/img/icons/mouse.svg') }}" alt="Down Arrow Icon">
            </span>
            <span class="hero-content-scroll-text text-xs tracking-wider">Scroll Down</span>
        </div>
    </section>

    <!-- MISSION STATEMENT SECTION -->
    <section class="mission-statement-section py-20 lg:py-32 bg-white">
        <div class="mission-statement-container container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mission-statement-wrapper">
                <div class="mission-statement-main grid md:grid-cols-[70%_30%] gap-12 items-center">

                    <div class="mission-statement-content">
                        <h2 class="text-4xl lg:text-5xl xl:text-6xl font-black text-gray-900 leading-tight">
                            We deliver brilliant ideas to fuel your business growth—
                            <br>
                            strategically building your brand while driving xpansion.
                        </h2>
                    </div>

                    <div class="mission-statement-actions space-y-6">
                        <div class="mission-statement-action-wrapper flex items-center space-x-4">
                            <a href="{{ route('services') }}"
                                class="mission-statement-action-icon inline-flex items-center justify-center w-12 h-12 rounded-full bg-primary text-white hover:bg-primary/90 transition-colors focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2"
                                aria-label="View Services">
                                <span class="material-icons">arrow_forward</span>
                            </a>
                            <a href="{{ route('contact') }}" class="mission-statement-action-btn btn btn-primary">
                                Work With Us
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- SERVICES SECTION -->
    <section id="services" class="site-services bg-white relative overflow-hidden">
        <div class="mx-auto">

            <!-- Section Header with Marquee -->
            <div class="site-services-header-main mb-16 overflow-hidden">
                <div class="marquee-container" data-marquee-speed="50">
                    <div class="marquee-content">
                        <h2
                            class="text-6xl lg:text-7xl xl:text-8xl font-black text-gray-100 leading-none whitespace-nowrap inline-block">
                            OUR SERVICES
                        </h2>
                        <span
                            class="text-6xl lg:text-7xl xl:text-8xl font-black text-gray-100 leading-none mx-8 inline-block">*</span>
                    </div>
                </div>
            </div>

            <!-- Horizontal Scroll Container -->
            <div class="services-scroll-wrapper relative" id="services-scroll-wrapper">
                <div class="services-horizontal-container" id="services-horizontal-container">

                    <!-- Service 1: Product Design -->
                    <article
                        class="service-card group relative overflow-hidden border border-gray-200 hover:shadow-2xl transition-shadow duration-300 rounded-lg">
                        <a href="{{ route('portfolio') }}"
                            class="block focus:outline-none focus:ring-2 focus:ring-inset focus:ring-primary">
                            <div class="aspect-[4/5] overflow-hidden">
                                <img src="{{ asset('assets/img/service-product-design.jpg') }}"
                                    alt="Abstract orange wave design representing product design innovation"
                                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                                    width="400" height="500" loading="lazy">
                            </div>
                            <div
                                class="site-services-overlay absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent">
                            </div>
                            <div class="site-services-card-content absolute bottom-0 left-0 right-0 p-8 text-white">
                                <span class="text-8xl font-black text-white/10 block mb-2">01</span>
                                <h3 class="text-3xl font-bold mb-2">PRODUCT DESIGN</h3>
                            </div>
                        </a>
                    </article>

                    <!-- Service 2: Website Development -->
                    <article
                        class="service-card group relative overflow-hidden border border-gray-200 hover:shadow-2xl transition-shadow duration-300 rounded-lg">
                        <a href="{{ route('portfolio') }}"
                            class="block focus:outline-none focus:ring-2 focus:ring-inset focus:ring-primary">
                            <div class="aspect-[4/5] overflow-hidden">
                                <img src="{{ asset('assets/img/service-web-dev.jpg') }}"
                                    alt="Character with futuristic goggles representing web development"
                                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                                    width="400" height="500" loading="lazy">
                            </div>
                            <div
                                class="site-services-overlay absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent">
                            </div>
                            <div class="site-services-card-content absolute bottom-0 left-0 right-0 p-8 text-white">
                                <span class="text-8xl font-black text-white/10 block mb-2">02</span>
                                <h3 class="text-3xl font-bold mb-2">WEBSITE DEVELOPMENT</h3>
                            </div>
                        </a>
                    </article>

                    <!-- Service 3: Creative UI Design -->
                    <article
                        class="service-card group relative overflow-hidden border border-gray-200 hover:shadow-2xl transition-shadow duration-300 rounded-lg">
                        <a href="{{ route('portfolio') }}"
                            class="block focus:outline-none focus:ring-2 focus:ring-inset focus:ring-primary">
                            <div class="aspect-[4/5] overflow-hidden">
                                <img src="{{ asset('assets/img/service-ui-design.jpg') }}"
                                    alt="Silhouette with green leaf representing creative UI design"
                                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                                    width="400" height="500" loading="lazy">
                            </div>
                            <div
                                class="site-services-overlay absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent">
                            </div>
                            <div class="site-services-card-content absolute bottom-0 left-0 right-0 p-8 text-white">
                                <span class="text-8xl font-black text-white/10 block mb-2">03</span>
                                <h3 class="text-3xl font-bold mb-2">CREATIVE UI DESIGN</h3>
                            </div>
                        </a>
                    </article>

                    <!-- Service 4: Brand Strategy -->
                    <article
                        class="service-card group relative overflow-hidden border border-gray-200 hover:shadow-2xl transition-shadow duration-300 rounded-lg">
                        <a href="{{ route('services') }}"
                            class="block focus:outline-none focus:ring-2 focus:ring-inset focus:ring-primary">
                            <div class="aspect-[4/5] overflow-hidden">
                                <img src="{{ asset('assets/img/service-product-design.jpg') }}"
                                    alt="Abstract orange wave design representing product design innovation"
                                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                                    width="400" height="500" loading="lazy">
                            </div>
                            <div
                                class="site-services-overlay absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent">
                            </div>
                            <div class="site-services-card-content absolute bottom-0 left-0 right-0 p-8 text-white">
                                <span class="text-8xl font-black text-white/10 block mb-2">04</span>
                                <h3 class="text-3xl font-bold mb-2">BRAND STRATEGY</h3>
                            </div>
                        </a>
                    </article>

                    <!-- Service 5: Digital Marketing -->
                    <article
                        class="service-card group relative overflow-hidden border border-gray-200 hover:shadow-2xl transition-shadow duration-300 rounded-lg">
                        <a href="{{ route('services') }}"
                            class="block focus:outline-none focus:ring-2 focus:ring-inset focus:ring-primary">
                            <div class="aspect-[4/5] overflow-hidden">
                                <img src="{{ asset('assets/img/service-web-dev.jpg') }}"
                                    alt="Character with futuristic goggles representing web development"
                                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                                    width="400" height="500" loading="lazy">
                            </div>
                            <div
                                class="site-services-overlay absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent">
                            </div>
                            <div class="site-services-card-content absolute bottom-0 left-0 right-0 p-8 text-white">
                                <span class="text-8xl font-black text-white/10 block mb-2">05</span>
                                <h3 class="text-3xl font-bold mb-2">DIGITAL MARKETING</h3>
                            </div>
                        </a>
                    </article>

                </div>
            </div>
        </div>
    </section>

    <!-- INSIGHTS & UPDATES SECTION -->
    <section id="insights" class="site-updates py-20 lg:py-32 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Section Header -->
            <div class="site-updates-header flex items-center justify-between mb-12">
                <h2 class="text-4xl lg:text-5xl font-black text-gray-900">
                    INSIGHTS & UPDATES
                </h2>
                <div class="site-updates-controls flex space-x-2">
                    <button
                        class="w-12 h-12 rounded-full bg-gray-100 hover:bg-gray-200 flex items-center justify-center transition-colors focus:outline-none focus:ring-2 focus:ring-primary"
                        aria-label="Previous articles">
                        <span class="material-icons text-gray-600">arrow_back</span>
                    </button>
                    <button
                        class="w-12 h-12 rounded-full bg-primary hover:bg-primary/90 flex items-center justify-center transition-colors focus:outline-none focus:ring-2 focus:ring-primary"
                        aria-label="Next articles">
                        <span class="material-icons text-white">arrow_forward</span>
                    </button>
                </div>
            </div>

            <!-- Blog Cards Grid -->
            <div class="site-updates-grid grid md:grid-cols-3 gap-8">
                @foreach($insights as $insight)
                <article class="group">
                    <a href="#" class="block focus:outline-none focus:ring-2 focus:ring-primary rounded-lg">
                        <div class="site-updates-grid-image aspect-[4/3] rounded-lg overflow-hidden mb-6">
                            <img src="{{ $insight->image ? $insight->image->url : asset('assets/img/blog-01.jpg') }}" alt="{{ $insight->title }}"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                                width="400" height="300" loading="lazy">
                        </div>
                        <div class="site-updates-grid-content">
                            <div class="site-updates-date flex items-center space-x-2 text-sm text-gray-500 mb-3">
                                <span class="material-icons text-base">calendar_month</span>
                                <time datetime="{{ $insight->created_at->format('Y-m-d') }}">{{ $insight->created_at->format('F d, Y') }}</time>
                            </div>
                            <h3
                                class="text-xl font-bold text-gray-900 mb-3 group-hover:text-primary transition-colors">
                                {{ $insight->title }}
                            </h3>
                            <p class="text-gray-600 mb-4 leading-relaxed line-clamp-3">
                                {{ Str::limit($insight->description, 100) }}
                            </p>
                            <div class="site-updates-action flex items-center space-x-3">
                                <span
                                    class="site-arrow inline-flex items-center justify-center w-10 h-10 rounded-full bg-primary text-white group-hover:bg-primary/90 transition-colors h-[50px] w-[50px]">
                                    <span class="material-icons text-xl">arrow_forward</span>
                                </span>
                                <span
                                    class="update-read-more-btn text-primary font-medium group-hover:underline">Read
                                    More</span>
                            </div>
                        </div>
                    </a>
                </article>
                @endforeach
            </div>
        </div>
    </section>

    <!-- PORTFOLIO SECTION -->
    <section id="portfolio"
        class="site-portfolio pt-2 lg:pt-10 pb-20 lg:pb-32 bg-gradient-to-b from-dark via-[#1a0f2e] to-dark">

        <div class="site-portfolio-header-main mb-16 overflow-hidden">
            <div class="marquee-container" data-marquee-speed="50">
                <div class="marquee-content">
                    <h2
                        class="text-6xl lg:text-7xl xl:text-8xl font-black text-gray-100 leading-none whitespace-nowrap inline-block">
                        PORTFOLIO
                    </h2>
                    <span
                        class="text-6xl lg:text-7xl xl:text-8xl font-black text-gray-100 leading-none mx-8 inline-block">*</span>
                </div>
            </div>
        </div>

        <div class="container mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Section Header -->
            <div class="site-portfolio-header text-center mb-16">
                <h2 class="text-5xl lg:text-6xl font-black text-white mb-6">
                    EXPLORE THE CREATIVE GALLERY
                </h2>

                <!-- Filter Tabs -->
                <!-- Filter Tabs -->
                <div class="site-portfolio-filters inline-flex flex-wrap justify-center gap-3 mt-8">
                    <button class="portfolio-filter active px-6 py-2" data-filter="all">
                        All
                    </button>
                    @foreach($workTags as $key => $label)
                    <button class="portfolio-filter px-6 py-2" data-filter="{{ $key }}">
                        {{ $label }}
                    </button>
                    @endforeach
                </div>
            </div>

            <!-- Portfolio Grid (Masonry Style) -->
            <div class="site-portfolio-grid grid grid-cols-2 lg:grid-cols-3 gap-4 mb-12">
                @foreach($works as $work)
                    @php
                        $isTall = $loop->iteration == 2;
                        $classes = $isTall ? 'row-span-2 aspect-[1/2]' : 'aspect-square';
                        $imgHeight = $isTall ? 800 : 400;
                    @endphp
                    <article class="portfolio-item group relative overflow-hidden rounded-lg {{ $classes }}"
                        data-category="{{ $work->tag }}">
                        <img src="{{ $work->image ? $work->image->url : asset('assets/img/portfolio-01.png') }}"
                            alt="{{ $work->title }}"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                            width="400" height="{{ $imgHeight }}" loading="lazy">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <div class="absolute bottom-0 p-6 text-white">
                                <h3 class="text-xl font-bold mb-1">{{ $work->title }}</h3>
                                <p class="text-sm text-white/80">{{ $work->sub_title }}</p>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>

            <!-- View All Link -->
            <div class="site-portfolio-view-all text-center">
                <a href="{{ route('portfolio') }}" class="inline-flex items-center transition-colors text-lg font-medium">
                    <span>View all</span>
                </a>
            </div>
        </div>
    </section>

    <!-- TESTIMONIALS SECTION -->
    <section id="testimonials" class="client-success pt-2 lg:pt-10 pb-2 lg:pb-[300px] bg-gray-50">

        <!-- Section Header -->
        <div class="client-success-header w-full mx-auto">
            <div class="mb-16 overflow-hidden">
                <div class="marquee-container" data-marquee-speed="50">
                    <div class="marquee-content">
                        <h2
                            class="text-6xl lg:text-7xl xl:text-8xl font-black text-gray-100 leading-none whitespace-nowrap inline-block">
                            CLIENTS SUCCESS STORY
                        </h2>
                        <span
                            class="text-6xl lg:text-7xl xl:text-8xl font-black text-gray-100 leading-none mx-8 inline-block">*</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mx-auto px-4 sm:px-6 lg:px-8">

            <div class="client-success-main grid md:grid-cols-[50%_50%] gap-12 items-center mb-20">

                <div class="client-success-content">
                    <h2 class="text-4xl lg:text-5xl xl:text-6xl font-white text-gray-900 leading-tight">consectetur
                        adipiscing elit</h2>
                </div>

                <div class="client-success-actions space-y-6 font-white">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet,
                        consectetur adipiscing elit</p>
                </div>

            </div>

            <!-- Testimonial Card -->
            @if($reviews->count() > 0)
                @php
                    $firstReview = $reviews->first();
                    $testimonialData = $reviews->map(function($review) {
                        return [
                            'id' => $review->id,
                            'image' => $review->visual ? $review->visual->url : asset('assets/img/testimonial-visual.jpg'),
                            'quote' => $review->quoute,
                            'avatar' => $review->photo ? $review->photo->url : asset('assets/img/avatar-albert.png'),
                            'name' => $review->name,
                            'role' => $review->designation,
                        ];
                    });
                @endphp

                <div class="grid md:grid-cols-[530px_auto] gap-12 items-center client-success-testimonial-card">

                    <!-- Left: Visual -->
                    <div class="client-success-card-left relative">
                        <div class="min-h-[645px] rounded-2xl overflow-hidden">
                            <img src="{{ $firstReview->visual ? $firstReview->visual->url : asset('assets/img/testimonial-visual.jpg') }}" alt="Visual"
                                class="w-full h-full object-cover" width="600" height="600" loading="lazy">
                        </div>
                    </div>

                    <!-- Right: Testimonial Content -->
                    <div
                        class="client-success-card-right bg-primary rounded-2xl p-8 lg:p-12 text-white relative h-full flex flex-col items-start justify-between">
                        <div class="client-success-card-wrapper">
                            <span class="material-icons text-6xl text-white/20 mb-6">
                                <img src="{{ asset('assets/img/icons/quote.svg') }}" alt="Quote">
                            </span>
                            <blockquote class="text-lg lg:text-xl leading-relaxed mb-8">
                                {{ $firstReview->quoute }}
                            </blockquote>
                            <div class="client-success-card-avatar flex items-center space-x-4">
                                <img src="{{ $firstReview->photo ? $firstReview->photo->url : asset('assets/img/avatar-albert.png') }}" alt="{{ $firstReview->name }}"
                                    class="w-12 h-12 rounded-full border-2 border-white" width="48" height="48"
                                    loading="lazy">
                                <div class="client-success-card-avatar-info">
                                    <p class="client-success-card-avatar-name font-bold">{{ $firstReview->name }}</p>
                                    <p class="client-success-card-avatar-role text-sm text-white/80">{{ $firstReview->designation }}</p>
                                </div>
                            </div>

                        </div>

                        <!-- Navigation Arrows -->
                        <div class="client-success-card-navigation flex space-x-3 mt-8 flex w-full justify-end">
                            <button
                                class="w-12 h-12 rounded-full bg-white text-primary hover:bg-white/90 flex items-center justify-center transition-colors focus:outline-none focus:ring-2 focus:ring-white"
                                aria-label="Previous testimonial">
                                <span class="material-icons">arrow_back</span>
                            </button>
                            <button
                                class="w-12 h-12 rounded-full bg-white text-primary hover:bg-white/90 flex items-center justify-center transition-colors focus:outline-none focus:ring-2 focus:ring-white"
                                aria-label="Next testimonial">
                                <span class="material-icons">arrow_forward</span>
                            </button>
                        </div>
                    </div>

                </div>

                <script>
                    window.serverTestimonials = @json($testimonialData);
                </script>
            @endif
        </div>
    </section>

    <!-- NEWSLETTER SECTION -->
    <section class="news-letter-section py-20 lg:py-32 relative overflow-hidden min-h-[667px] flex items-center">

        <!-- Animated Background -->
        <div class="news-letter-bg absolute inset-0">
            <img src="{{ asset('assets/img/bg-waves.jpg') }}" alt="" class="w-full h-full object-cover" width="1920"
                height="600" loading="lazy">
        </div>

        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="news-letter-main grid md:grid-cols-[50%_50%] gap-12 items-center">

                <div class="news-letter-content">
                    <h2 class="text-4xl lg:text-5xl xl:text-6xl font-white text-gray-900 leading-tight">Sign Up to
                        Discover Startup Features</h2>
                </div>

                <div class="news-letter-actions space-y-6 font-white">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet,
                        consectetur adipiscing elit</p>
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
@endsection
