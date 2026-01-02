@extends('layouts.frontend')

@section('title', 'Services - UserBX | Digital Growth Partner')
@section('meta_description', 'UserBX offers comprehensive digital solutions including web design, branding, app development, marketing, and eCommerce services. Based in Dublin, we help businesses grow online.')

@section('meta')
    <meta name="keywords" content="web design, branding, app development, digital marketing, eCommerce, web development, Dublin, Ireland, UserBX">
    <meta name="author" content="UserBX">
    <meta name="robots" content="index, follow">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ route('services') }}">
    <meta property="og:title" content="Services - UserBX | Digital Growth Partner">
    <meta property="og:description" content="Comprehensive digital solutions including web design, branding, app development, marketing, and eCommerce services. Transform your business online.">
    <meta property="og:image" content="{{ asset('assets/img/service-web-dev.jpg') }}">
    <meta property="og:site_name" content="UserBX">
    <meta property="og:locale" content="en_US">
    
    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="{{ route('services') }}">
    <meta name="twitter:title" content="Services - UserBX | Digital Growth Partner">
    <meta name="twitter:description" content="Comprehensive digital solutions including web design, branding, app development, marketing, and eCommerce services.">
    <meta name="twitter:image" content="{{ asset('assets/img/service-web-dev.jpg') }}">
@endsection

@section('content')
    <!-- HERO SECTION -->
    <section
        class="services-hero relative flex items-center overflow-hidden bg-gradient-to-br from-dark via-[#1a0f2e] to-dark pb-20 lg:pb-32 pt-32">
        <!-- Background Gradient Overlay -->
        <div
            class="absolute inset-0 bg-gradient-to-r from-primary/10 via-transparent to-secondary/10 pointer-events-none">
        </div>

        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="text-white space-y-8">
                    <h1 class="text-5xl sm:text-6xl lg:text-7xl font-black leading-tight tracking-tight">
                        Your Digital <br>
                        <span
                            class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-secondary">Growth
                            Partner</span>
                    </h1>
                    <p class="text-xl text-white/80 max-w-xl leading-relaxed font-body">
                        We offer comprehensive digital solutions including web design, branding, and app development
                        to help businesses grow online. Based in Dublin, we combine creative excellence with
                        technical expertise.
                    </p>
                    <div class="pt-4">
                        <a href="{{ route('contact') }}" class="btn btn-primary">
                            Book Now
                        </a>
                    </div>
                </div>

                <!-- Hero Visual -->
                <div class="relative flex justify-center lg:justify-end">
                    <!-- Using existing assets to create a composition -->
                    <div class="relative w-full max-w-md aspect-square">
                        <div class="absolute inset-0 bg-primary/20 rounded-full blur-3xl animate-pulse"></div>
                        <img src="{{ asset('assets/img/float-crystal.png') }}" alt="Floating crystal design element"
                            class="floating-object float-crystal-vibrate absolute top-0 left-0 w-24" style="animation-delay: 0s;">
                        <img src="{{ asset('assets/img/float-cube.png') }}" alt="Floating cube design element"
                            class="floating-object float-cube-rotate absolute bottom-10 right-10 w-20" style="animation-delay: 1s;">
                        <img src="{{ asset('assets/img/float-ring-large.png') }}" alt="Floating ring design element"
                            class="floating-object float-ring-parallax absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-64"
                            style="animation-delay: 2s;">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CORE SERVICE AREAS -->
    <section class="py-20 lg:py-32 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-black text-gray-900 mb-6">Our Core Services</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto font-body">
                    We provide end-to-end digital solutions to help your business thrive online.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Design -->
                <div
                    class="service-card-item group p-8 rounded-2xl border border-gray-100 bg-white shadow-sm hover:shadow-xl transition-all duration-300">
                    <div class="service-icon-wrapper">
                        <span class="material-icons text-3xl">palette</span>
                    </div>
                    <h3 class="text-2xl font-bold mb-3 text-gray-900 group-hover:text-primary transition-colors">
                        Design</h3>
                    <p class="text-gray-600 leading-relaxed font-body">
                        Logos, branding, brochures, and visual identity that captures your brand essence.
                    </p>
                </div>

                <!-- Development -->
                <div
                    class="service-card-item group p-8 rounded-2xl border border-gray-100 bg-white shadow-sm hover:shadow-xl transition-all duration-300">
                    <div class="service-icon-wrapper">
                        <span class="material-icons text-3xl">code</span>
                    </div>
                    <h3 class="text-2xl font-bold mb-3 text-gray-900 group-hover:text-primary transition-colors">
                        Development</h3>
                    <p class="text-gray-600 leading-relaxed font-body">
                        Secure, scalable websites and apps built with modern technologies.
                    </p>
                </div>

                <!-- Marketing -->
                <div
                    class="service-card-item group p-8 rounded-2xl border border-gray-100 bg-white shadow-sm hover:shadow-xl transition-all duration-300">
                    <div class="service-icon-wrapper">
                        <span class="material-icons text-3xl">campaign</span>
                    </div>
                    <h3 class="text-2xl font-bold mb-3 text-gray-900 group-hover:text-primary transition-colors">
                        Marketing</h3>
                    <p class="text-gray-600 leading-relaxed font-body">
                        SEO, email campaigns, and targeted ads to increase visibility.
                    </p>
                </div>

                <!-- Social Media -->
                <div
                    class="service-card-item group p-8 rounded-2xl border border-gray-100 bg-white shadow-sm hover:shadow-xl transition-all duration-300">
                    <div class="service-icon-wrapper">
                        <span class="material-icons text-3xl">share</span>
                    </div>
                    <h3 class="text-2xl font-bold mb-3 text-gray-900 group-hover:text-primary transition-colors">
                        Social Media</h3>
                    <p class="text-gray-600 leading-relaxed font-body">
                        Content, strategy, and management across all major platforms.
                    </p>
                </div>

                <!-- eCommerce -->
                <div
                    class="service-card-item group p-8 rounded-2xl border border-gray-100 bg-white shadow-sm hover:shadow-xl transition-all duration-300">
                    <div class="service-icon-wrapper">
                        <span class="material-icons text-3xl">shopping_cart</span>
                    </div>
                    <h3 class="text-2xl font-bold mb-3 text-gray-900 group-hover:text-primary transition-colors">
                        eCommerce</h3>
                    <p class="text-gray-600 leading-relaxed font-body">
                        Feature-rich online stores with smooth shopping experiences.
                    </p>
                </div>

                <!-- Help & Support -->
                <div
                    class="service-card-item group p-8 rounded-2xl border border-gray-100 bg-white shadow-sm hover:shadow-xl transition-all duration-300">
                    <div class="service-icon-wrapper">
                        <span class="material-icons text-3xl">support_agent</span>
                    </div>
                    <h3 class="text-2xl font-bold mb-3 text-gray-900 group-hover:text-primary transition-colors">
                        Help & Support</h3>
                    <p class="text-gray-600 leading-relaxed font-body">
                        Ongoing technical assistance and maintenance to keep you running.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- DETAILED SECTIONS -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Design & Development -->
            <div class="grid lg:grid-cols-2 gap-16 items-center mb-24">
                <div class="order-2 lg:order-1">
                    <div class="relative rounded-2xl overflow-hidden shadow-2xl">
                        <img src="{{ asset('assets/img/service-web-dev.jpg') }}" alt="Web Development"
                            class="w-full h-auto object-cover">
                        <div class="absolute inset-0 bg-primary/10"></div>
                    </div>
                </div>
                <div class="order-1 lg:order-2 space-y-6">
                    <h2 class="text-3xl lg:text-4xl font-black text-gray-900">Design & Development Excellence</h2>
                    <p class="text-lg text-gray-600 font-body leading-relaxed">
                        We craft compelling brand identities that tell your story and connect with your audience.
                        Our design process combines creative vision with strategic thinking.
                    </p>
                    <p class="text-lg text-gray-600 font-body leading-relaxed">
                        Our development team builds secure, scalable websites and applications using the latest
                        technologies, focusing on performance and user experience.
                    </p>
                    <ul class="space-y-3 pt-4">
                        <li class="flex items-center space-x-3 text-gray-700 font-medium">
                            <span class="material-icons text-primary">check_circle</span>
                            <span>Brand Identity & Visual Design</span>
                        </li>
                        <li class="flex items-center space-x-3 text-gray-700 font-medium">
                            <span class="material-icons text-primary">check_circle</span>
                            <span>High-Performing Solutions</span>
                        </li>
                        <li class="flex items-center space-x-3 text-gray-700 font-medium">
                            <span class="material-icons text-primary">check_circle</span>
                            <span>Responsive & Mobile-First</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Marketing & Growth -->
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div class="space-y-6">
                    <h2 class="text-3xl lg:text-4xl font-black text-gray-900">Growth & Engagement Strategies</h2>
                    <p class="text-lg text-gray-600 font-body leading-relaxed">
                        Drive meaningful results with our strategic marketing services. From SEO that improves your
                        search rankings to targeted email campaigns that nurture leads.
                    </p>
                    <p class="text-lg text-gray-600 font-body leading-relaxed">
                        We transform your social media presence with content that engages and strategies that
                        convert, while our eCommerce solutions ensure smooth operations and maximum conversions.
                    </p>
                    <ul class="space-y-3 pt-4">
                        <li class="flex items-center space-x-3 text-gray-700 font-medium">
                            <span class="material-icons text-primary">trending_up</span>
                            <span>Increased Visibility & Traffic</span>
                        </li>
                        <li class="flex items-center space-x-3 text-gray-700 font-medium">
                            <span class="material-icons text-primary">groups</span>
                            <span>Community Engagement</span>
                        </li>
                        <li class="flex items-center space-x-3 text-gray-700 font-medium">
                            <span class="material-icons text-primary">shopping_bag</span>
                            <span>Higher Conversion Rates</span>
                        </li>
                    </ul>
                </div>
                <div>
                    <div class="relative rounded-2xl overflow-hidden shadow-2xl">
                        <img src="{{ asset('assets/img/service-ui-design.jpg') }}" alt="Digital Marketing"
                            class="w-full h-auto object-cover">
                        <div class="absolute inset-0 bg-secondary/10"></div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- CTA BANNER -->
    <section class="cta-banner py-20 lg:py-24 text-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-4xl lg:text-5xl font-black mb-6">Ready to Start Your Project?</h2>
            <p class="text-xl text-white/80 max-w-2xl mx-auto mb-10 font-body">
                Share your goals and challenges with us. Let's discuss how we can help transform your business
                online.
            </p>
            <a href="{{ route('contact') }}"
                class="btn btn-primary bg-white text-primary hover:bg-gray-100 hover:text-primary-dark border-white">
                Start Your Project
            </a>
        </div>
    </section>
@endsection
