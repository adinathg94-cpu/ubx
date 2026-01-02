@extends('layouts.frontend')

@section('title', 'Blog Detail - UserBX')
@section('meta_description', 'UserBX - News & Blogs Detail - Hope dies last')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/news-blog-detail.css') }}">
@endpush

@section('content')
    <div class="pt-20">
        <!-- HERO SECTION -->
        <section class="news-blog-hero-section py-12 lg:py-20">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="news-blog-hero-content grid lg:grid-cols-2 gap-12 items-start mb-12">
                    
                    <!-- Left: Title -->
                    <div class="news-blog-hero-title">
                        <h1 class="text-5xl lg:text-7xl xl:text-8xl font-medium leading-[1.1] text-black uppercase tracking-[-4.16px]">
                            Hope dies last
                        </h1>
                    </div>

                    <!-- Right: Meta Info & Description -->
                    <div class="news-blog-hero-meta space-y-6">
                        <!-- Meta Information -->
                        <div class="news-blog-meta-info flex flex-wrap items-center gap-6 text-base">
                            <div class="flex items-center gap-2">
                                <span class="font-semibold text-black">Text</span>
                                <span class="font-normal text-black">Jakob Gronberg</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="font-semibold text-black">Date</span>
                                <time class="font-normal text-black" datetime="2025-03-16">16. March 2025</time>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="font-semibold text-black">Read</span>
                                <span class="font-normal text-black">1 Min</span>
                            </div>
                        </div>

                        <!-- Description -->
                        <p class="text-xl leading-[1.67] text-black">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Egestas dui id ornare arcu odio ut sem. Cras ornare arcu dui vivamus arcu felis bibendum ut.
                        </p>
                        
                        <!-- Divider Line -->
                        <div class="news-blog-hero-divider h-px bg-black"></div>
                        
                        <!-- Category Tags -->
                        <div class="news-blog-hero-tags flex flex-wrap gap-4">
                            <span class="news-blog-tag border border-primary rounded-full px-3 py-2 text-xs uppercase text-primary">
                                Art
                            </span>
                            <span class="news-blog-tag border border-primary rounded-full px-3 py-2 text-xs uppercase text-primary">
                                blog
                            </span>
                        </div>

                        <!-- Share Buttons -->
                        <div class="news-blog-share flex items-center gap-4">
                            <span class="text-sm font-semibold text-black">Share</span>
                            <div class="flex items-center gap-3">
                                <a href="#" class="news-blog-share-icon w-5 h-5 text-primary hover:opacity-70 transition-opacity focus:outline-none focus:ring-2 focus:ring-primary rounded"
                                   aria-label="Share on Instagram">
                                    <svg class="w-full h-full" fill="currentColor" viewBox="0 0 30 30" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8.62 0.088C10.184 0.016 10.6827 0 14.6667 0C18.6507 0 19.1493 0.0173333 20.712 0.088C22.2747 0.158667 23.3413 0.408 24.2747 0.769333C25.252 1.13867 26.1387 1.716 26.872 2.46267C27.6187 3.19467 28.1947 4.08 28.5627 5.05867C28.9253 5.992 29.1733 7.05867 29.2453 8.61867C29.3173 10.1853 29.3333 10.684 29.3333 14.6667C29.3333 18.6507 29.316 19.1493 29.2453 20.7133C29.1747 22.2733 28.9253 23.34 28.5627 24.2733C28.1947 25.2521 27.6177 26.1389 26.872 26.872C26.1387 27.6187 25.252 28.1947 24.2747 28.5627C23.3413 28.9253 22.2747 29.1733 20.7147 29.2453C19.1493 29.3173 18.6507 29.3333 14.6667 29.3333C10.6827 29.3333 10.184 29.316 8.62 29.2453C7.06 29.1747 5.99333 28.9253 5.06 28.5627C4.08123 28.1946 3.19443 27.6177 2.46133 26.872C1.71517 26.1396 1.13775 25.2532 0.769333 24.2747C0.408 23.3413 0.16 22.2747 0.088 20.7147C0.016 19.148 0 18.6493 0 14.6667C0 10.6827 0.0173333 10.184 0.088 8.62133C0.158667 7.05867 0.408 5.992 0.769333 5.05867C1.1383 4.08011 1.71616 3.19375 2.46267 2.46133C3.19472 1.71533 4.08063 1.13792 5.05867 0.769333C5.992 0.408 7.05867 0.16 8.61867 0.088H8.62ZM20.5933 2.728C19.0467 2.65733 18.5827 2.64267 14.6667 2.64267C10.7507 2.64267 10.2867 2.65733 8.74 2.728C7.30933 2.79333 6.53333 3.032 6.016 3.23333C5.332 3.5 4.84267 3.816 4.32933 4.32933C3.84273 4.80274 3.46824 5.37904 3.23333 6.016C3.032 6.53333 2.79333 7.30933 2.728 8.74C2.65733 10.2867 2.64267 10.7507 2.64267 14.6667C2.64267 18.5827 2.65733 19.0467 2.728 20.5933C2.79333 22.024 3.032 22.8 3.23333 23.3173C3.468 23.9533 3.84267 24.5307 4.32933 25.004C4.80267 25.4907 5.38 25.8653 6.016 26.1C6.53333 26.3013 7.30933 26.54 8.74 26.6053C10.2867 26.676 10.7493 26.6907 14.6667 26.6907C18.584 26.6907 19.0467 26.676 20.5933 26.6053C22.024 26.54 22.8 26.3013 23.3173 26.1C24.0013 25.8333 24.4907 25.5173 25.004 25.004C25.4907 24.5307 25.8653 23.9533 26.1 23.3173C26.3013 22.8 26.54 22.024 26.6053 20.5933C26.676 19.0467 26.6907 18.5827 26.6907 14.6667C26.6907 10.7507 26.676 10.2867 26.6053 8.74C26.54 7.30933 26.3013 6.53333 26.1 6.016C25.8333 5.332 25.5173 4.84267 25.004 4.32933C24.5306 3.84276 23.9543 3.46828 23.3173 3.23333C22.8 3.032 22.024 2.79333 20.5933 2.728ZM12.7933 19.188C13.8395 19.6235 15.0045 19.6823 16.0892 19.3543C17.174 19.0263 18.1112 18.3319 18.7408 17.3897C19.3704 16.4474 19.6534 15.3158 19.5414 14.1881C19.4294 13.0605 18.9293 12.0066 18.1267 11.2067C17.615 10.6953 16.9963 10.3038 16.3151 10.0602C15.6339 9.81664 14.9072 9.72715 14.1873 9.79815C13.4674 9.86916 12.7722 10.0989 12.1517 10.4708C11.5313 10.8428 11.001 11.3477 10.5991 11.9491C10.1971 12.5506 9.93359 13.2337 9.82735 13.9493C9.72112 14.6648 9.77487 15.3951 9.98472 16.0874C10.1946 16.7797 10.5553 17.4168 11.041 17.953C11.5266 18.4891 12.1251 18.9109 12.7933 19.188ZM9.336 9.336C10.036 8.63597 10.8671 8.08067 11.7817 7.70182C12.6964 7.32296 13.6767 7.12797 14.6667 7.12797C15.6567 7.12797 16.637 7.32296 17.5516 7.70181C18.4662 8.08067 19.2973 8.63597 19.9973 9.336C20.6974 10.036 21.2527 10.8671 21.6315 11.7817C22.0104 12.6964 22.2054 13.6767 22.2054 14.6667C22.2054 15.6567 22.0104 16.637 21.6315 17.5516C21.2527 18.4662 20.6974 19.2973 19.9973 19.9973C18.5836 21.4111 16.6661 22.2054 14.6667 22.2054C12.6673 22.2054 10.7498 21.4111 9.336 19.9973C7.92222 18.5836 7.12797 16.6661 7.12797 14.6667C7.12797 12.6673 7.92222 10.7498 9.336 9.336ZM23.8773 8.25067C24.0508 8.08703 24.1897 7.89024 24.2857 7.67197C24.3818 7.45369 24.4331 7.21836 24.4366 6.97991C24.44 6.74146 24.3956 6.50473 24.306 6.28375C24.2163 6.06276 24.0832 5.86201 23.9146 5.69339C23.746 5.52476 23.5452 5.39168 23.3243 5.30202C23.1033 5.21237 22.8665 5.16797 22.6281 5.17144C22.3896 5.17492 22.1543 5.22621 21.936 5.32226C21.7178 5.41832 21.521 5.55719 21.3573 5.73067C21.0391 6.06804 20.8648 6.51616 20.8716 6.97991C20.8784 7.44365 21.0656 7.88651 21.3935 8.21446C21.7215 8.54241 22.1643 8.72964 22.6281 8.7364C23.0918 8.74316 23.54 8.56892 23.8773 8.25067Z"/>
                                    </svg>
                                </a>
                                <a href="#" class="news-blog-share-icon w-5 h-5 text-primary hover:opacity-70 transition-opacity focus:outline-none focus:ring-2 focus:ring-primary rounded"
                                   aria-label="Share on Twitter">
                                    <svg class="w-full h-full" fill="currentColor" viewBox="0 0 28 23" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M28 2.9829L25 3.4829L27 0.982896L23.5 1.9829C19 -3.0171 12 2.4829 14 6.9829C6 6.9829 2 0.982896 2 0.982896C2 0.982896 -1 5.4829 4 8.9829L1 7.9829C1 10.9829 3 12.9829 6.5 13.9829H3C5 17.9829 8.5 17.9829 8.5 17.9829C8.5 17.9829 5.5 20.4829 0 20.4829C16.5 28.4829 26.5 13.4829 25 5.4829L28 2.9829Z"/>
                                    </svg>
                                </a>
                                <a href="#" class="news-blog-share-icon w-5 h-5 text-primary hover:opacity-70 transition-opacity focus:outline-none focus:ring-2 focus:ring-primary rounded"
                                   aria-label="Share on YouTube">
                                    <svg class="w-full h-full" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Featured Image -->
                <div class="news-blog-featured-image relative rounded-xl overflow-hidden">
                    <img src="{{ asset('assets/img/blog-01.jpg') }}" 
                         alt="Hope dies last - Featured image" 
                         class="w-full h-auto object-cover"
                         loading="eager">
                </div>
            </div>
        </section>

        <!-- ARTICLE CONTENT SECTION -->
        <section class="news-blog-content-section py-8 lg:py-16 bg-white">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="news-blog-article-content mx-auto">
                    <div class="news-blog-content-wrapper grid md:grid-cols-12 gap-6 lg:gap-8">
                        
                        <!-- Left Column: Editor Details (col-md-3 equivalent) -->
                        <div class="news-blog-editor-column md:col-span-3">
                            <div class="news-blog-editor-details">
                                <div class="news-blog-editor-name-section">
                                    <span class="news-blog-editor-label text-sm font-semibold text-black uppercase tracking-wide">Editor</span>
                                    <h3 class="news-blog-editor-name text-lg font-medium text-black mt-2">Jakob Gronberg</h3>
                                </div>
                                <div class="news-blog-editor-content mt-6">
                                    <div class="news-blog-editor-avatar mb-4">
                                        <img src="{{ asset('assets/img/avatar-albert.png') }}" 
                                            alt="Jakob Gronberg - Editor" 
                                            class="w-20 h-20 rounded-full object-cover"
                                            loading="lazy">
                                    </div>
                                    <div class="news-blog-editor-meta-info space-y-4 mb-3">
                                        <div class="flex items-center gap-2">
                                            <span class="font-semibold text-black">Date</span>
                                            <time class="font-normal text-black" datetime="2025-03-16">16. March 2025</time>
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <span class="font-semibold text-black">Read</span>
                                            <span class="font-normal text-black">1 Min</span>
                                        </div>
                                    </div>
                                    <div class="news-blog-editor-share flex items-center gap-4">
                                        <span class="text-sm font-semibold text-black uppercase tracking-wider">Share</span>
                                        <div class="flex items-center gap-3">
                                            <a href="#" class="news-blog-share-icon w-5 h-5 text-primary hover:opacity-70 transition-opacity focus:outline-none focus:ring-2 focus:ring-primary rounded"
                                            aria-label="Share on Facebook">
                                                <svg class="w-full h-full" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                                </svg>
                                            </a>
                                            <a href="#" class="news-blog-share-icon w-5 h-5 text-primary hover:opacity-70 transition-opacity focus:outline-none focus:ring-2 focus:ring-primary rounded"
                                            aria-label="Share on Twitter">
                                                <svg class="w-full h-full" fill="currentColor" viewBox="0 0 28 23" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M28 2.9829L25 3.4829L27 0.982896L23.5 1.9829C19 -3.0171 12 2.4829 14 6.9829C6 6.9829 2 0.982896 2 0.982896C2 0.982896 -1 5.4829 4 8.9829L1 7.9829C1 10.9829 3 12.9829 6.5 13.9829H3C5 17.9829 8.5 17.9829 8.5 17.9829C8.5 17.9829 5.5 20.4829 0 20.4829C16.5 28.4829 26.5 13.4829 25 5.4829L28 2.9829Z"/>
                                                </svg>
                                            </a>
                                            <a href="#" class="news-blog-share-icon w-5 h-5 text-primary hover:opacity-70 transition-opacity focus:outline-none focus:ring-2 focus:ring-primary rounded"
                                            aria-label="Share on Instagram">
                                                <svg class="w-full h-full" fill="currentColor" viewBox="0 0 30 30" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8.62 0.088C10.184 0.016 10.6827 0 14.6667 0C18.6507 0 19.1493 0.0173333 20.712 0.088C22.2747 0.158667 23.3413 0.408 24.2747 0.769333C25.252 1.13867 26.1387 1.716 26.872 2.46267C27.6187 3.19467 28.1947 4.08 28.5627 5.05867C28.9253 5.992 29.1733 7.05867 29.2453 8.61867C29.3173 10.1853 29.3333 10.684 29.3333 14.6667C29.3333 18.6507 29.316 19.1493 29.2453 20.7133C29.1747 22.2733 28.9253 23.34 28.5627 24.2733C28.1947 25.2521 27.6177 26.1389 26.872 26.872C26.1387 27.6187 25.252 28.1947 24.2747 28.5627C23.3413 28.9253 22.2747 29.1733 20.7147 29.2453C19.1493 29.3173 18.6507 29.3333 14.6667 29.3333C10.6827 29.3333 10.184 29.316 8.62 29.2453C7.06 29.1747 5.99333 28.9253 5.06 28.5627C4.08123 28.1946 3.19443 27.6177 2.46133 26.872C1.71517 26.1396 1.13775 25.2532 0.769333 24.2747C0.408 23.3413 0.16 22.2747 0.088 20.7147C0.016 19.148 0 18.6493 0 14.6667C0 10.6827 0.0173333 10.184 0.088 8.62133C0.158667 7.05867 0.408 5.992 0.769333 5.05867C1.1383 4.08011 1.71616 3.19375 2.46267 2.46133C3.19472 1.71533 4.08063 1.13792 5.05867 0.769333C5.992 0.408 7.05867 0.16 8.61867 0.088H8.62ZM20.5933 2.728C19.0467 2.65733 18.5827 2.64267 14.6667 2.64267C10.7507 2.64267 10.2867 2.65733 8.74 2.728C7.30933 2.79333 6.53333 3.032 6.016 3.23333C5.332 3.5 4.84267 3.816 4.32933 4.32933C3.84273 4.80274 3.46824 5.37904 3.23333 6.016C3.032 6.53333 2.79333 7.30933 2.728 8.74C2.65733 10.2867 2.64267 10.7507 2.64267 14.6667C2.64267 18.5827 2.65733 19.0467 2.728 20.5933C2.79333 22.024 3.032 22.8 3.23333 23.3173C3.468 23.9533 3.84267 24.5307 4.32933 25.004C4.80267 25.4907 5.38 25.8653 6.016 26.1C6.53333 26.3013 7.30933 26.54 8.74 26.6053C10.2867 26.676 10.7493 26.6907 14.6667 26.6907C18.584 26.6907 19.0467 26.676 20.5933 26.6053C22.024 26.54 22.8 26.3013 23.3173 26.1C24.0013 25.8333 24.4907 25.5173 25.004 25.004C25.4907 24.5307 25.8653 23.9533 26.1 23.3173C26.3013 22.8 26.54 22.024 26.6053 20.5933C26.676 19.0467 26.6907 18.5827 26.6907 14.6667C26.6907 10.7507 26.676 10.2867 26.6053 8.74C26.54 7.30933 26.3013 6.53333 26.1 6.016C25.8333 5.332 25.5173 4.84267 25.004 4.32933C24.5306 3.84276 23.9543 3.46828 23.3173 3.23333C22.8 3.032 22.024 2.79333 20.5933 2.728ZM12.7933 19.188C13.8395 19.6235 15.0045 19.6823 16.0892 19.3543C17.174 19.0263 18.1112 18.3319 18.7408 17.3897C19.3704 16.4474 19.6534 15.3158 19.5414 14.1881C19.4294 13.0605 18.9293 12.0066 18.1267 11.2067C17.615 10.6953 16.9963 10.3038 16.3151 10.0602C15.6339 9.81664 14.9072 9.72715 14.1873 9.79815C13.4674 9.86916 12.7722 10.0989 12.1517 10.4708C11.5313 10.8428 11.001 11.3477 10.5991 11.9491C10.1971 12.5506 9.93359 13.2337 9.82735 13.9493C9.72112 14.6648 9.77487 15.3951 9.98472 16.0874C10.1946 16.7797 10.5553 17.4168 11.041 17.953C11.5266 18.4891 12.1251 18.9109 12.7933 19.188ZM9.336 9.336C10.036 8.63597 10.8671 8.08067 11.7817 7.70182C12.6964 7.32296 13.6767 7.12797 14.6667 7.12797C15.6567 7.12797 16.637 7.32296 17.5516 7.70181C18.4662 8.08067 19.2973 8.63597 19.9973 9.336C20.6974 10.036 21.2527 10.8671 21.6315 11.7817C22.0104 12.6964 22.2054 13.6767 22.2054 14.6667C22.2054 15.6567 22.0104 16.637 21.6315 17.5516C21.2527 18.4662 20.6974 19.2973 19.9973 19.9973C18.5836 21.4111 16.6661 22.2054 14.6667 22.2054C12.6673 22.2054 10.7498 21.4111 9.336 19.9973C7.92222 18.5836 7.12797 16.6661 7.12797 14.6667C7.12797 12.6673 7.92222 10.7498 9.336 9.336ZM23.8773 8.25067C24.0508 8.08703 24.1897 7.89024 24.2857 7.67197C24.3818 7.45369 24.4331 7.21836 24.4366 6.97991C24.44 6.74146 24.3956 6.50473 24.306 6.28375C24.2163 6.06276 24.0832 5.86201 23.9146 5.69339C23.746 5.52476 23.5452 5.39168 23.3243 5.30202C23.1033 5.21237 22.8665 5.16797 22.6281 5.17144C22.3896 5.17492 22.1543 5.22621 21.936 5.32226C21.7178 5.41832 21.521 5.55719 21.3573 5.73067C21.0391 6.06804 20.8648 6.51616 20.8716 6.97991C20.8784 7.44365 21.0656 7.88651 21.3935 8.21446C21.7215 8.54241 22.1643 8.72964 22.6281 8.7364C23.0918 8.74316 23.54 8.56892 23.8773 8.25067Z"/>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Right Column: Article Body (col-md-9 equivalent) -->
                        <div class="news-blog-article-column md:col-span-9">
                            <article>
                                <div class="news-blog-article-body">
                                    <p class="news-blog-article-paragraph">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                    </p>
                                    
                                    <p class="news-blog-article-paragraph">
                                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                                    </p>

                                    <!-- Quote Block -->
                                    <div class="news-blog-quote-block">
                                        <div class="news-blog-quote-divider"></div>
                                        <div class="news-blog-quote-content">
                                            <span class="news-blog-quote-mark">"</span>
                                            <div class="news-blog-quote-text">
                                                <p class="news-blog-quote-text-main">
                                                    The greatest glory in living lies not in never falling, but in rising every time we fall.
                                                </p>
                                                <p class="news-blog-quote-author">
                                                    Nelson Mandela
                                                </p>
                                            </div>
                                        </div>
                                        <div class="news-blog-quote-divider"></div>
                                    </div>

                                    <h2 class="news-blog-article-heading-2">
                                        Heading 2 Example
                                    </h2>

                                    <p class="news-blog-article-paragraph">
                                        Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
                                    </p>

                                    <p class="news-blog-article-paragraph">
                                        Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
                                    </p>

                                    <h3 class="news-blog-article-heading-3">
                                        Heading 3 Example
                                    </h3>

                                    <p class="news-blog-article-paragraph">
                                        At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.
                                    </p>

                                    <p class="news-blog-article-paragraph">
                                        Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.
                                    </p>

                                    <h2 class="news-blog-article-heading-2">
                                        Additional Insights
                                    </h2>

                                    <p class="news-blog-article-paragraph">
                                        Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.
                                    </p>

                                    <p class="news-blog-article-paragraph">
                                        Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                    </p>

                                    <h3 class="news-blog-article-heading-3">
                                        Final Thoughts
                                    </h3>

                                    <p class="news-blog-article-paragraph">
                                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                                    </p>
                                </div>
                            </article>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!-- RELATED ARTICLES SECTION -->
        <section class="news-blog-related-section py-8 lg:py-16 bg-[#efefef]">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="news-blog-related-header mb-12">
                    <h2 class="text-4xl lg:text-5xl font-medium text-black uppercase">
                        Related Articles
                    </h2>
                </div>

                <div class="news-blog-related-grid grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @for($i = 1; $i <= 3; $i++)
                        @php
                            $images = ['blog-02.jpg', 'blog-03.jpg', 'blog-01.jpg'];
                            $tags = ['Art', 'blog', 'news'];
                            $titles = ['Search of Serenity Tranquil Retreats', 'Road to Adventure Embarking on New Horizons', 'World of Wonder Discovering Diverse Landscapes'];
                        @endphp
                        <!-- Related Article {{ $i }} -->
                        <article class="news-blog-related-card bg-white rounded-xl overflow-hidden hover:shadow-lg transition-shadow duration-300">
                            <a href="{{ route('blog.detail') }}" class="block focus:outline-none focus:ring-2 focus:ring-primary rounded-xl">
                                <div class="news-blog-related-image aspect-[4/3] overflow-hidden">
                                    <img src="{{ asset('assets/img/' . $images[$i - 1]) }}" 
                                         alt="Related article image" 
                                         class="w-full h-full object-cover hover:scale-110 transition-transform duration-700"
                                         loading="lazy">
                                </div>
                                <div class="news-blog-related-content p-6">
                                    <div class="news-blog-related-meta flex items-center justify-between mb-3">
                                        <time class="text-sm text-black" datetime="2025-03-16">16. March 2025</time>
                                        <span class="border border-primary rounded-full px-3 py-1 text-xs uppercase text-primary">
                                            {{ $tags[$i - 1] }}
                                        </span>
                                    </div>
                                    <h3 class="text-xl font-medium text-black mb-3 hover:text-primary transition-colors">
                                        {{ $titles[$i - 1] }}
                                    </h3>
                                    <p class="text-base text-black leading-relaxed">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.
                                    </p>
                                </div>
                            </a>
                        </article>
                    @endfor
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
    <script src="{{ asset('assets/js/news-blog-detail.js') }}" defer></script>
@endpush
