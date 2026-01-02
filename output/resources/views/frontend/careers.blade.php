@extends('layouts.frontend')

@section('title', 'Careers - UserBX')
@section('meta_description', 'Join the UserBX team. We are looking for passionate people to shape the future of digital.')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/custom-new.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/careers.css') }}">
@endpush

@section('content')
    <!-- HERO SECTION -->
    <section
        class="careers-hero-section relative min-h-[60vh] flex items-center pt-20 bg-gradient-to-br from-gray-50 to-gray-100">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="space-y-8">
                    <h1
                        class="careers-hero-title text-5xl lg:text-7xl xl:text-8xl font-medium leading-none tracking-tight text-dark">
                        Join Our <br>
                        <span class="text-primary">Creative Team</span>
                    </h1>
                    <p class="careers-hero-subtext text-xl lg:text-2xl text-gray-600 max-w-xl leading-relaxed">
                        UserBX is a growing digital agency combining creativity and technology to deliver impactful
                        solutions. Be part of our journey.
                    </p>
                    <div class="pt-4">
                        <a href="#open-positions" class="btn btn-primary">
                            View Open Positions
                        </a>
                    </div>
                </div>
                <div class="relative hidden lg:block">
                    <!-- Abstract Visual -->
                    <div
                        class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[500px] h-[500px] bg-gradient-to-r from-primary/20 to-secondary/20 rounded-full blur-3xl">
                    </div>
                    <img src="{{ asset('assets/img/hero-statue.png') }}" alt="Creative Team"
                        class="relative z-10 w-full max-w-md mx-auto opacity-90 mix-blend-multiply">
                </div>
            </div>
        </div>
    </section>

    <!-- COMPANY CULTURE -->
    <section class="culture-section py-20 lg:py-32">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-bold text-dark mb-6">Our Culture & Values</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    We're always looking for passionate people who want to shape the future of digital. At UserBX,
                    designers and developers work together to build modern digital experiences.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Value 1 -->
                <div class="culture-card p-8 bg-gray-50 rounded-2xl">
                    <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center mb-6">
                        <span class="material-icons text-primary">lightbulb</span>
                    </div>
                    <h3 class="text-xl font-bold text-dark mb-3">Innovation</h3>
                    <p class="text-gray-600">Pushing boundaries and exploring new technologies to stay ahead.</p>
                </div>

                <!-- Value 2 -->
                <div class="culture-card p-8 bg-gray-50 rounded-2xl">
                    <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center mb-6">
                        <span class="material-icons text-primary">diamond</span>
                    </div>
                    <h3 class="text-xl font-bold text-dark mb-3">Quality</h3>
                    <p class="text-gray-600">Delivering excellence in every pixel and line of code we write.</p>
                </div>

                <!-- Value 3 -->
                <div class="culture-card p-8 bg-gray-50 rounded-2xl">
                    <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center mb-6">
                        <span class="material-icons text-primary">groups</span>
                    </div>
                    <h3 class="text-xl font-bold text-dark mb-3">Collaboration</h3>
                    <p class="text-gray-600">Working together across disciplines to create unified solutions.</p>
                </div>

                <!-- Value 4 -->
                <div class="culture-card p-8 bg-gray-50 rounded-2xl">
                    <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center mb-6">
                        <span class="material-icons text-primary">rocket_launch</span>
                    </div>
                    <h3 class="text-xl font-bold text-dark mb-3">Client Success</h3>
                    <p class="text-gray-600">Your growth is our growth. We are dedicated to impactful results.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- OPEN POSITIONS -->
    <section id="open-positions" class="py-20 lg:py-32 bg-gray-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-end mb-12">
                <div>
                    <h2 class="text-4xl lg:text-5xl font-bold text-dark mb-4">Open Positions</h2>
                    <p class="text-lg text-gray-600">Find your place in our team.</p>
                </div>
                <div class="mt-6 md:mt-0">
                    <span class="text-sm font-medium text-gray-500">Showing 5 open roles</span>
                </div>
            </div>

            <div class="grid gap-6">
                <!-- Job 1 -->
                <div
                    class="job-card p-6 md:p-8 flex flex-col md:flex-row items-start md:items-center justify-between gap-6">
                    <div>
                        <h3 class="job-title text-2xl mb-2">Web Designer</h3>
                        <p class="text-gray-600 mb-4 max-w-2xl">Create stunning visual designs for web and mobile
                            interfaces. Proficiency in Figma and Adobe Suite required.</p>
                        <div class="flex items-center gap-4 text-sm text-gray-500">
                            <span class="flex items-center gap-1"><span
                                    class="material-icons text-base">location_on</span> Dublin</span>
                            <span class="flex items-center gap-1"><span
                                    class="material-icons text-base">schedule</span> Full-time</span>
                        </div>
                    </div>
                    <a href="#apply" class="btn btn-primary min-w-[140px]">Apply Now</a>
                </div>

                <!-- Job 2 -->
                <div
                    class="job-card p-6 md:p-8 flex flex-col md:flex-row items-start md:items-center justify-between gap-6">
                    <div>
                        <h3 class="job-title text-2xl mb-2">Frontend Developer</h3>
                        <p class="text-gray-600 mb-4 max-w-2xl">Build responsive and interactive web applications
                            using React, Vue, or modern vanilla JS.</p>
                        <div class="flex items-center gap-4 text-sm text-gray-500">
                            <span class="flex items-center gap-1"><span
                                    class="material-icons text-base">location_on</span> Wexford</span>
                            <span class="flex items-center gap-1"><span
                                    class="material-icons text-base">schedule</span> Full-time</span>
                        </div>
                    </div>
                    <a href="#apply" class="btn btn-primary min-w-[140px]">Apply Now</a>
                </div>

                <!-- Job 3 -->
                <div
                    class="job-card p-6 md:p-8 flex flex-col md:flex-row items-start md:items-center justify-between gap-6">
                    <div>
                        <h3 class="job-title text-2xl mb-2">Mobile App Developer</h3>
                        <p class="text-gray-600 mb-4 max-w-2xl">Develop native or cross-platform mobile apps.
                            Experience with Flutter or React Native is a plus.</p>
                        <div class="flex items-center gap-4 text-sm text-gray-500">
                            <span class="flex items-center gap-1"><span
                                    class="material-icons text-base">location_on</span> Remote / Dublin</span>
                            <span class="flex items-center gap-1"><span
                                    class="material-icons text-base">schedule</span> Full-time</span>
                        </div>
                    </div>
                    <a href="#apply" class="btn btn-primary min-w-[140px]">Apply Now</a>
                </div>

                <!-- Job 4 -->
                <div
                    class="job-card p-6 md:p-8 flex flex-col md:flex-row items-start md:items-center justify-between gap-6">
                    <div>
                        <h3 class="job-title text-2xl mb-2">Digital Marketing Specialist</h3>
                        <p class="text-gray-600 mb-4 max-w-2xl">Drive growth through SEO, SEM, and social media
                            campaigns. Analyze data to optimize performance.</p>
                        <div class="flex items-center gap-4 text-sm text-gray-500">
                            <span class="flex items-center gap-1"><span
                                    class="material-icons text-base">location_on</span> Dublin</span>
                            <span class="flex items-center gap-1"><span
                                    class="material-icons text-base">schedule</span> Full-time</span>
                        </div>
                    </div>
                    <a href="#apply" class="btn btn-primary min-w-[140px]">Apply Now</a>
                </div>

                <!-- Job 5 -->
                <div
                    class="job-card p-6 md:p-8 flex flex-col md:flex-row items-start md:items-center justify-between gap-6">
                    <div>
                        <h3 class="job-title text-2xl mb-2">UI/UX Designer</h3>
                        <p class="text-gray-600 mb-4 max-w-2xl">Design user-centric interfaces and experiences.
                            Conduct user research and usability testing.</p>
                        <div class="flex items-center gap-4 text-sm text-gray-500">
                            <span class="flex items-center gap-1"><span
                                    class="material-icons text-base">location_on</span> Wexford</span>
                            <span class="flex items-center gap-1"><span
                                    class="material-icons text-base">schedule</span> Full-time</span>
                        </div>
                    </div>
                    <a href="#apply" class="btn btn-primary min-w-[140px]">Apply Now</a>
                </div>
            </div>
        </div>
    </section>

    <!-- BENEFITS & PERKS -->
    <section class="py-20 lg:py-32 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-bold text-dark mb-6">Benefits & Perks</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    We take care of our team so they can take care of our clients.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="benefit-item text-center">
                    <div class="benefit-icon text-4xl mb-4">
                        <span class="material-icons">work_history</span>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Flexible Work</h3>
                    <p class="text-gray-600 text-sm">Remote options and flexible hours to maintain work-life
                        balance.</p>
                </div>
                <div class="benefit-item text-center">
                    <div class="benefit-icon text-4xl mb-4">
                        <span class="material-icons">trending_up</span>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Professional Growth</h3>
                    <p class="text-gray-600 text-sm">Budget for courses, conferences, and continuous learning.</p>
                </div>
                <div class="benefit-item text-center">
                    <div class="benefit-icon text-4xl mb-4">
                        <span class="material-icons">palette</span>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Creative Projects</h3>
                    <p class="text-gray-600 text-sm">Work on diverse and challenging projects across industries.</p>
                </div>
                <div class="benefit-item text-center">
                    <div class="benefit-icon text-4xl mb-4">
                        <span class="material-icons">sentiment_satisfied_alt</span>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Supportive Culture</h3>
                    <p class="text-gray-600 text-sm">A friendly, inclusive team that celebrates wins together.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- APPLICATION SECTION -->
    <section id="apply" class="application-section py-20 lg:py-32 bg-dark relative">
        <!-- Background Gradient Overlay -->
        <div
            class="absolute inset-0 bg-gradient-to-r from-primary/10 via-transparent to-secondary/10 pointer-events-none">
        </div>

        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="application-content max-w-4xl mx-auto text-center">
                <h2 class="text-4xl lg:text-6xl font-bold text-white mb-8">Ready to Apply?</h2>
                <p class="text-xl text-white/80 mb-12 leading-relaxed">
                    We'd love to hear from you. Send us your CV and portfolio, and tell us why you'd be a great fit
                    for UserBX.
                </p>

                <div class="flex flex-col sm:flex-row items-center justify-center gap-6">
                    <a href="mailto:careers@userbx.ie" class="btn btn-primary text-lg px-8 py-4">
                        <span class="material-icons">email</span>
                        Submit Your Application
                    </a>
                </div>

                <div class="mt-12 text-white/60">
                    <p>Or email us directly at <a href="mailto:careers@userbx.ie"
                            class="text-white hover:text-primary transition-colors underline">careers@userbx.ie</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
