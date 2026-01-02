<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('meta_description', 'UserBX - Crafting adaptive brands and interfaces that grow with your audience')">
    @yield('meta')
    <title>@yield('title', 'UserBX - User Based Expansion')</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/img/favicon/favicon.ico') }}" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/favicon/favicon-16x16.png') }}">
    <!-- Note: site.webmanifest is referenced but might not be in the assets copy if not in img folder. Assuming it is. -->
    <link rel="manifest" href="{{ asset('assets/img/favicon/site.webmanifest') }}">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Material Icons CDN -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,200..800&family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/custom-new.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    @stack('styles')

    <!-- Tailwind Config -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#6526EF',
                        secondary: '#A78BFA',
                        dark: '#0F0A1F',
                        darkGray: '#1A1429',
                    },
                    fontFamily: {
                        sans: ['Bricolage Grotesque', 'sans-serif'],
                    },
                }
            }
        }
    </script>
    @stack('styles')
</head>

<body class="font-sans antialiased bg-white text-gray-900">

    <!-- HEADER -->
    <header id="site-header"
        class="fixed top-0 left-0 right-0 z-50 bg-transparent border-0 transition-colors duration-300 ease-in-out"
        data-scroll-class="bg-white/95 dark:bg-dark/90 backdrop-blur-md shadow-sm border-0" data-scroll-threshold="80"
        aria-label="UserBX site header">
        <div class="site-container container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="header-wrapper flex items-center justify-between h-20">

                <!-- Logo -->
                <a href="{{ route('home') }}" class="site-logo flex-shrink-0 focus:outline-none" aria-label="UserBX Home">
                    <img src="{{ asset('assets/img/logo.svg') }}" alt="UserBX Logo" class="h-7 w-auto" width="147" height="29">
                </a>

                <!-- Desktop Navigation -->
                <nav class="header-nav hidden md:flex items-center space-x-1 bg-darkGray/80 rounded-full px-2 py-0 h-[42px]"
                    aria-label="Main Navigation">
                    <a href="{{ route('home') }}"
                        class="nav-link px-5 py-0 text-sm font-medium text-white/90 hover:text-white transition-all duration-200 {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
                    <a href="{{ route('about') }}"
                        class="nav-link px-5 py-0 text-sm font-medium text-white/70 hover:text-white transition-all duration-200 {{ request()->routeIs('about') ? 'active' : '' }}">About</a>
                    <a href="{{ route('services') }}"
                        class="nav-link px-5 py-0 text-sm font-medium text-white/70 hover:text-white transition-all duration-200 {{ request()->routeIs('services') ? 'active' : '' }}">Services</a>
                    <a href="{{ route('portfolio') }}"
                        class="nav-link px-5 py-0 text-sm font-medium text-white/70 hover:text-white transition-all duration-200 {{ request()->routeIs('portfolio') ? 'active' : '' }}">Portfolio</a>
                    <a href="{{ route('contact') }}"
                        class="nav-link px-5 py-0 text-sm font-medium text-white/70 hover:text-white transition-all duration-200 {{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
                </nav>

                <!-- Contact Info & Menu Button -->
                <div class="contact-info flex items-center space-x-20">
                    <div class="hidden lg:flex items-center space-x-6 text-sm text-white/70">
                        <a href="mailto:connect@userbx.ie"
                            class="flex items-center space-x-2 hover:text-white transition-colors focus:outline-none focus:ring-2 focus:ring-primary rounded">
                            <span class="material-icons text-base">
                                <img src="{{ asset('assets/img/icons/mail.svg') }}" alt="Email Icon">
                            </span>
                            <span>connect@userbx.ie</span>
                        </a>
                        <a href="tel:+17045550127"
                            class="flex items-center space-x-2 hover:text-white transition-colors focus:outline-none focus:ring-2 focus:ring-primary rounded">
                            <span class="material-icons text-base">
                                <img src="{{ asset('assets/img/icons/phone.svg') }}" alt="Phone Icon">
                            </span>
                            <span>(704) 555-0127</span>
                        </a>
                    </div>

                    <!-- Menu Button -->
                    <button id="menu-toggle"
                        class="menu-btn w-10 h-10 rounded-full bg-white/10 hover:bg-primary flex flex-col items-center justify-center gap-1.5 transition-colors focus:outline-none focus:ring-2 focus:ring-primary"
                        aria-label="Toggle Menu" aria-expanded="false" aria-controls="fullscreen-menu">
                        <span class="w-5 h-0.5 bg-white transition-transform duration-300 origin-center"></span>
                        <span class="w-5 h-0.5 bg-white transition-opacity duration-300"></span>
                        <span class="w-5 h-0.5 bg-white transition-transform duration-300 origin-center"></span>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <!-- Fullscreen Menu Overlay -->
    <div id="fullscreen-menu"
        class="fullscreen-menu fixed inset-0 bg-dark z-[60] transform translate-x-full transition-transform duration-500 ease-in-out"
        aria-hidden="true">
        <div class="site-container container mx-auto px-4 sm:px-6 lg:px-8 h-full flex items-center">
            <div class="w-full relative">
                <!-- Close Button -->
                <button id="menu-close"
                    class="absolute -top-20 right-0 lg:right-0 w-12 h-12 rounded-full bg-white/10 hover:bg-primary flex items-center justify-center transition-colors focus:outline-none focus:ring-2 focus:ring-primary"
                    aria-label="Close Menu">
                    <span class="material-icons text-white text-2xl">close</span>
                </button>

                <div class="grid lg:grid-cols-2 gap-12 lg:gap-24 items-center">

                    <!-- Left Column: Navigation -->
                    <div class="fullscreen-menu-left">
                        <nav aria-label="Fullscreen Navigation">
                            <ul class="space-y-4 lg:space-y-6">
                                <li><a href="{{ route('home') }}"
                                        class="menu-nav-link block text-5xl lg:text-6xl font-bold text-white hover:text-primary transition-colors duration-300 focus:outline-none focus:text-primary {{ request()->routeIs('home') ? 'text-primary' : '' }}">Home</a>
                                </li>
                                <li><a href="{{ route('about') }}"
                                        class="menu-nav-link block text-5xl lg:text-6xl font-bold text-white hover:text-primary transition-colors duration-300 focus:outline-none focus:text-primary {{ request()->routeIs('about') ? 'text-primary' : '' }}">About</a>
                                </li>
                                <li><a href="{{ route('services') }}"
                                        class="menu-nav-link block text-5xl lg:text-6xl font-bold text-white hover:text-primary transition-colors duration-300 focus:outline-none focus:text-primary {{ request()->routeIs('services') ? 'text-primary' : '' }}">Services</a>
                                </li>
                                <li><a href="{{ route('portfolio') }}"
                                        class="menu-nav-link block text-5xl lg:text-6xl font-bold text-white hover:text-primary transition-colors duration-300 focus:outline-none focus:text-primary {{ request()->routeIs('portfolio') ? 'text-primary' : '' }}">Portfolio</a>
                                </li>
                                <li><a href="#"
                                        class="menu-nav-link block text-5xl lg:text-6xl font-bold text-white hover:text-primary transition-colors duration-300 focus:outline-none focus:text-primary">Blog</a>
                                </li>
                                <li><a href="{{ route('contact') }}"
                                        class="menu-nav-link block text-5xl lg:text-6xl font-bold text-white hover:text-primary transition-colors duration-300 focus:outline-none focus:text-primary {{ request()->routeIs('contact') ? 'text-primary' : '' }}">Contact</a>
                                </li>
                            </ul>
                        </nav>

                    </div>

                    <!-- Right Column: Secondary Links & CTAs -->
                    <div class="fullscreen-menu-right space-y-12 relative">
                        <div class="fullscreen-menu-image">
                            <img src="{{ asset('assets/img/x.png') }}" alt="">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- MAIN CONTENT -->
    <main id="main-content">
        @yield('content')
    </main>

    <!-- FOOTER -->
    <footer class="site-footer bg-black text-white pt-20">
        <div class="site-container container mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Footer Top -->
            <div
                class="footer-top grid gap-6 md:gap-8 lg:gap-12 mb-16 md:grid-cols-[1fr_1fr] lg:grid-cols-[minmax(200px,268px)_minmax(300px,500px)_1fr_1fr_1fr]">

                <!-- Brand Column -->
                <div class="footer-col footer-col-logo lg:col-span-1">
                    <img src="{{ asset('assets/img/logo.svg') }}" alt="UserBX Logo" class="footer-col-logo h-7 w-auto mb-6" width="147"
                        height="29">
                    <p class="footer-col-content text-white/60 leading-relaxed mb-6">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem
                    </p>
                    <div class="footer-col-social flex space-x-3">
                        <a href="#"
                            class="w-10 h-10 rounded-full bg-white/5 hover:bg-primary flex items-center justify-center transition-colors focus:outline-none focus:ring-2 focus:ring-primary"
                            aria-label="Facebook">
                            <span class="text-lg"><img src="{{ asset('assets/img/icons/facebook.svg') }}" alt="Facebook"></span>
                        </a>
                        <a href="#"
                            class="w-10 h-10 rounded-full bg-white/5 hover:bg-primary flex items-center justify-center transition-colors focus:outline-none focus:ring-2 focus:ring-primary"
                            aria-label="Instagram">
                            <span class="text-lg"><img src="{{ asset('assets/img/icons/instagram.svg') }}" alt="Instagram"></span>
                        </a>
                        <a href="#"
                            class="w-10 h-10 rounded-full bg-white/5 hover:bg-primary flex items-center justify-center transition-colors focus:outline-none focus:ring-2 focus:ring-primary"
                            aria-label="Twitter">
                            <span class="text-lg"><img src="{{ asset('assets/img/icons/twitter.svg') }}" alt="Twitter"></span>
                        </a>
                    </div>
                </div>

                <div class="footer-col footer-map">
                    <img src="{{ asset('assets/img/footer-map.png') }}" alt="UserBX Global Map" class="w-full h-auto" width="250"
                        height="150" loading="lazy">
                </div>

                <!-- Company Column -->
                <div class="footer-col footer-col-nav">
                    <h3 class="text-white font-bold mb-6 text-lg">Company</h3>
                    <ul class="space-y-3">
                        <li><a href="{{ route('about') }}"
                                class="text-white/60 hover:text-white transition-colors focus:outline-none focus:text-white">About</a>
                        </li>
                        <li><a href="{{ route('services') }}"
                                class="text-white/60 hover:text-white transition-colors focus:outline-none focus:text-white">Services</a>
                        </li>
                        <li><a href="#"
                                class="text-white/60 hover:text-white transition-colors focus:outline-none focus:text-white">Careers</a>
                        </li>
                        <li><a href="{{ route('portfolio') }}"
                                class="text-white/60 hover:text-white transition-colors focus:outline-none focus:text-white">Works</a>
                        </li>
                        <li><a href="#"
                                class="text-white/60 hover:text-white transition-colors focus:outline-none focus:text-white">News
                                & Blogs</a></li>
                    </ul>
                </div>

                <!-- Services Column -->
                <div class="footer-col footer-col-nav">
                    <h3 class="text-white font-bold mb-6 text-lg">Services</h3>
                    <ul class="space-y-3">
                        <li><a href="#"
                                class="text-white/60 hover:text-white transition-colors focus:outline-none focus:text-white">Branding</a>
                        </li>
                        <li><a href="#"
                                class="text-white/60 hover:text-white transition-colors focus:outline-none focus:text-white">Experience
                                Design</a></li>
                        <li><a href="#"
                                class="text-white/60 hover:text-white transition-colors focus:outline-none focus:text-white">Technology</a>
                        </li>
                        <li><a href="#"
                                class="text-white/60 hover:text-white transition-colors focus:outline-none focus:text-white">Digital
                                Marketing</a></li>
                    </ul>
                </div>

                <!-- Get in Touch Column -->
                <div class="footer-col footer-col-contact">
                    <h3 class="text-white font-bold mb-6 text-lg">Get in Touch</h3>
                    <ul class="space-y-4">
                        <li>
                            <a href="mailto:connect@userbx.ie"
                                class="flex items-start space-x-3 text-white/60 hover:text-white transition-colors group focus:outline-none focus:text-white">
                                <span>connect@userbx.ie</span>
                            </a>
                        </li>
                        <li>
                            <a href="tel:+17045550127"
                                class="flex items-start space-x-3 text-white/60 hover:text-white transition-colors group focus:outline-none focus:text-white">
                                <span>(704) 555-0127</span>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>

        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom border-t border-white/10 bg-[#6526EF] h-[73px] flex items-center justify-center">
            <p class="text-center text-white text-sm">
                UserBX © 2025. All rights reserved.
            </p>
        </div>

    </footer>

    <!-- JavaScript -->
    <script src="{{ asset('assets/js/app.js') }}" defer></script>
    @stack('scripts')
</body>

</html>
