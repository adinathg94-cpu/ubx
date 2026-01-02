@extends('layouts.frontend')

@section('title', 'About Us - UserBX')
@section('meta_description', 'UserBX - Empowering Businesses Through Creativity and Technology')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/about-new.css') }}">
@endpush

@section('content')
    <!-- HERO SECTION -->
    <section class="about-hero-section relative min-h-[60vh] flex items-center bg-dark pt-20">
        <div class="about-hero-bg"></div>
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="text-5xl md:text-6xl lg:text-7xl font-black text-white mb-8 leading-tight">
                    Empowering Businesses Through <span
                        class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-secondary">Creativity</span>
                    and Technology
                </h1>
                <p class="text-xl md:text-2xl text-white/80 leading-relaxed max-w-2xl mx-auto font-body">
                    We are UserBX, a Dublin-based digital agency serving Ireland, including Wexford. We craft
                    digital experiences that matter.
                </p>
            </div>
        </div>
    </section>

    <!-- WHO WE ARE SECTION -->
    <section class="py-20 lg:py-32 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div class="relative">
                    <div class="aspect-square rounded-2xl overflow-hidden bg-gray-100">
                        <img src="{{ asset('assets/img/service-ui-design.jpg') }}" alt="Our Team"
                            class="w-full h-full object-cover">
                    </div>
                    <!-- Decorative Elements -->
                    <div class="absolute -bottom-8 -right-8 w-48 h-48 bg-primary/10 rounded-full blur-3xl -z-10">
                    </div>
                    <div class="absolute -top-8 -left-8 w-48 h-48 bg-secondary/10 rounded-full blur-3xl -z-10">
                    </div>
                </div>

                <div class="space-y-8">
                    <div class="space-y-4">
                        <h2 class="text-4xl lg:text-5xl font-black text-dark">Who We Are</h2>
                        <p class="text-lg text-gray-600 leading-relaxed font-body">
                            UserBX is more than just a digital agency; we are a creative IT company with a
                            passionate team of designers and developers dedicated to transforming businesses through
                            innovative digital solutions.
                        </p>
                        <p class="text-lg text-gray-600 leading-relaxed font-body">
                            We believe in the power of collaboration and the impact of well-executed technology. Our
                            mission is to deliver quality that drives client success.
                        </p>
                    </div>

                    <!-- Values -->
                    <div class="grid sm:grid-cols-3 gap-6 pt-8">
                        <div class="space-y-3">
                            <div
                                class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center text-primary">
                                <span class="material-icons">lightbulb</span>
                            </div>
                            <h3 class="font-bold text-xl text-dark">Innovation</h3>
                        </div>
                        <div class="space-y-3">
                            <div
                                class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center text-primary">
                                <span class="material-icons">verified</span>
                            </div>
                            <h3 class="font-bold text-xl text-dark">Quality</h3>
                        </div>
                        <div class="space-y-3">
                            <div
                                class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center text-primary">
                                <span class="material-icons">trending_up</span>
                            </div>
                            <h3 class="font-bold text-xl text-dark">Success</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- WHAT WE DO SECTION -->
    <section class="py-20 lg:py-32 bg-gray-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-4xl lg:text-5xl font-black text-dark mb-6">What We Do</h2>
                <p class="text-lg text-gray-600 font-body">
                    We provide cohesive digital solutions that strengthen your online presence. From design to
                    development, we handle it all.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div class="service-card-new bg-white p-8 rounded-2xl border border-gray-100">
                    <div
                        class="service-icon-wrapper w-14 h-14 rounded-xl bg-primary text-white flex items-center justify-center mb-6">
                        <span class="material-icons text-3xl">palette</span>
                    </div>
                    <h3 class="text-2xl font-bold text-dark mb-3">UI/UX Design</h3>
                    <p class="text-gray-600 font-body">Creating intuitive and visually stunning interfaces that
                        users love.</p>
                </div>

                <!-- Service 2 -->
                <div class="service-card-new bg-white p-8 rounded-2xl border border-gray-100">
                    <div
                        class="service-icon-wrapper w-14 h-14 rounded-xl bg-primary text-white flex items-center justify-center mb-6">
                        <span class="material-icons text-3xl">code</span>
                    </div>
                    <h3 class="text-2xl font-bold text-dark mb-3">Web Development</h3>
                    <p class="text-gray-600 font-body">Building robust, scalable, and high-performance websites.</p>
                </div>

                <!-- Service 3 -->
                <div class="service-card-new bg-white p-8 rounded-2xl border border-gray-100">
                    <div
                        class="service-icon-wrapper w-14 h-14 rounded-xl bg-primary text-white flex items-center justify-center mb-6">
                        <span class="material-icons text-3xl">rocket_launch</span>
                    </div>
                    <h3 class="text-2xl font-bold text-dark mb-3">Digital Branding</h3>
                    <p class="text-gray-600 font-body">Crafting unique brand identities that stand out in the
                        market.</p>
                </div>

                <!-- Service 4 -->
                <div class="service-card-new bg-white p-8 rounded-2xl border border-gray-100">
                    <div
                        class="service-icon-wrapper w-14 h-14 rounded-xl bg-primary text-white flex items-center justify-center mb-6">
                        <span class="material-icons text-3xl">campaign</span>
                    </div>
                    <h3 class="text-2xl font-bold text-dark mb-3">Digital Marketing</h3>
                    <p class="text-gray-600 font-body">Driving growth through strategic online marketing campaigns.
                    </p>
                </div>

                <!-- Service 5 -->
                <div class="service-card-new bg-white p-8 rounded-2xl border border-gray-100">
                    <div
                        class="service-icon-wrapper w-14 h-14 rounded-xl bg-primary text-white flex items-center justify-center mb-6">
                        <span class="material-icons text-3xl">smartphone</span>
                    </div>
                    <h3 class="text-2xl font-bold text-dark mb-3">App Development</h3>
                    <p class="text-gray-600 font-body">Developing seamless mobile experiences for iOS and Android.
                    </p>
                </div>

                <!-- Service 6 -->
                <div class="service-card-new bg-white p-8 rounded-2xl border border-gray-100">
                    <div
                        class="service-icon-wrapper w-14 h-14 rounded-xl bg-primary text-white flex items-center justify-center mb-6">
                        <span class="material-icons text-3xl">support_agent</span>
                    </div>
                    <h3 class="text-2xl font-bold text-dark mb-3">Technical Support</h3>
                    <p class="text-gray-600 font-body">Ensuring your digital assets run smoothly with 24/7 support.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- HOW WE WORK SECTION -->
    <section class="py-20 lg:py-32 bg-white overflow-hidden">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-20">
                <h2 class="text-4xl lg:text-5xl font-black text-dark mb-6">How We Work</h2>
                <p class="text-lg text-gray-600 font-body">
                    Our structured "6-D" process ensures we deliver excellence at every step.
                </p>
            </div>

            <div class="process-timeline max-w-4xl mx-auto">
                <!-- Step 1 -->
                <div class="process-step">
                    <div class="process-marker">1</div>
                    <div class="process-content-wrapper">
                        <h3 class="text-2xl font-bold text-primary mb-2">Discover</h3>
                        <p class="text-gray-600 font-body">We start by understanding your business goals and
                            audience needs through in-depth research.</p>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="process-step">
                    <div class="process-marker">2</div>
                    <div class="process-content-wrapper">
                        <h3 class="text-2xl font-bold text-primary mb-2">Define</h3>
                        <p class="text-gray-600 font-body">We define the project scope, strategy, and roadmap to
                            ensure a clear path to success.</p>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="process-step">
                    <div class="process-marker">3</div>
                    <div class="process-content-wrapper">
                        <h3 class="text-2xl font-bold text-primary mb-2">Design</h3>
                        <p class="text-gray-600 font-body">Our designers create visually stunning and user-centric
                            designs that align with your brand.</p>
                    </div>
                </div>

                <!-- Step 4 -->
                <div class="process-step">
                    <div class="process-marker">4</div>
                    <div class="process-content-wrapper">
                        <h3 class="text-2xl font-bold text-primary mb-2">Develop</h3>
                        <p class="text-gray-600 font-body">We bring designs to life using the latest technologies
                            and coding best practices.</p>
                    </div>
                </div>

                <!-- Step 5 -->
                <div class="process-step">
                    <div class="process-marker">5</div>
                    <div class="process-content-wrapper">
                        <h3 class="text-2xl font-bold text-primary mb-2">Deploy</h3>
                        <p class="text-gray-600 font-body">We rigorously test and launch your project, ensuring a
                            smooth and successful deployment.</p>
                    </div>
                </div>

                <!-- Step 6 -->
                <div class="process-step">
                    <div class="process-marker">6</div>
                    <div class="process-content-wrapper">
                        <h3 class="text-2xl font-bold text-primary mb-2">Deliver</h3>
                        <p class="text-gray-600 font-body">We deliver the final product and provide ongoing support
                            to help you grow.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- HIGHLIGHTS SECTION -->
    <section class="py-20 lg:py-32 bg-dark text-white relative overflow-hidden">
        <!-- Background Elements -->
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden z-0 opacity-20">
            <div class="absolute top-[-10%] right-[-10%] w-[500px] h-[500px] bg-primary rounded-full blur-[100px]">
            </div>
            <div
                class="absolute bottom-[-10%] left-[-10%] w-[500px] h-[500px] bg-secondary rounded-full blur-[100px]">
            </div>
        </div>

        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div>
                    <h2 class="text-4xl lg:text-5xl font-black mb-8">Our Impact</h2>
                    <p class="text-xl text-white/80 mb-12 font-body">
                        We take pride in our work and the results we achieve for our clients.
                    </p>

                    <!-- Testimonial -->
                    <div class="bg-white/5 backdrop-blur-sm border border-white/10 p-8 rounded-2xl">
                        <div class="flex text-primary mb-4">
                            <span class="material-icons">star</span>
                            <span class="material-icons">star</span>
                            <span class="material-icons">star</span>
                            <span class="material-icons">star</span>
                            <span class="material-icons">star</span>
                        </div>
                        <p class="text-lg text-white/90 italic mb-6 font-body">
                            "UserBX transformed our online presence. Their team is incredibly talented and easy to
                            work with. Highly recommended!"
                        </p>
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-full bg-gray-300 overflow-hidden">
                                <img src="{{ asset('assets/img/avatar-albert.png') }}" alt="Client"
                                    class="w-full h-full object-cover">
                            </div>
                            <div>
                                <h4 class="font-bold">Sarah Mitchell</h4>
                                <p class="text-sm text-white/60">CEO, TechStart Ireland</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Stats Grid -->
                <div class="grid grid-cols-2 gap-6">
                    <div class="stat-card p-8 rounded-2xl text-center">
                        <div class="text-4xl lg:text-5xl font-black text-primary mb-2">
                            <span class="stat-number" data-target="150">0</span>+
                        </div>
                        <div class="text-white/70 font-medium">Satisfied Clients</div>
                    </div>
                    <div class="stat-card p-8 rounded-2xl text-center">
                        <div class="text-4xl lg:text-5xl font-black text-primary mb-2">
                            <span class="stat-number" data-target="300">0</span>+
                        </div>
                        <div class="text-white/70 font-medium">Completed Projects</div>
                    </div>
                    <div class="stat-card p-8 rounded-2xl text-center">
                        <div class="text-4xl lg:text-5xl font-black text-primary mb-2">
                            <span class="stat-number" data-target="10">0</span>+
                        </div>
                        <div class="text-white/70 font-medium">Years Experience</div>
                    </div>
                    <div class="stat-card p-8 rounded-2xl text-center">
                        <div class="text-4xl lg:text-5xl font-black text-primary mb-2">
                            <span class="stat-number" data-target="98">0</span>%
                        </div>
                        <div class="text-white/70 font-medium">Client Satisfaction</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA SECTION -->
    <section class="py-20 lg:py-32 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div
                class="bg-gradient-to-r from-dark to-[#1a0f2e] rounded-3xl p-12 lg:p-20 text-center relative overflow-hidden">
                <!-- Decorative Circles -->
                <div
                    class="absolute top-0 right-0 w-64 h-64 bg-primary/20 rounded-full blur-3xl translate-x-1/2 -translate-y-1/2">
                </div>
                <div
                    class="absolute bottom-0 left-0 w-64 h-64 bg-secondary/20 rounded-full blur-3xl -translate-x-1/2 translate-y-1/2">
                </div>

                <div class="relative z-10 max-w-3xl mx-auto">
                    <h2 class="text-4xl lg:text-5xl font-black text-white mb-6">Ready to Start Your Project?</h2>
                    <p class="text-xl text-white/80 mb-10 font-body">
                        Let's build something amazing together. Contact us today to discuss your vision.
                    </p>
                    <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                        <a href="{{ route('contact') }}"
                            class="btn btn-primary px-8 py-4 rounded-full bg-primary text-white font-bold hover:bg-primary/90 transition-colors">
                            Start a Project
                        </a>
                        <a href="tel:+17045550127"
                            class="btn btn-secondary px-8 py-4 rounded-full bg-white/10 text-white font-bold hover:bg-white/20 transition-colors backdrop-blur-sm border border-white/20 flex items-center gap-2">
                            <span class="material-icons text-sm">call</span>
                            (704) 555-0127
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script src="{{ asset('assets/js/about-new.js') }}" defer></script>
@endpush
