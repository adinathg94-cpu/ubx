@extends('layouts.frontend')

@section('title', 'Contact Us - UserBX')
@section('meta_description', 'UserBX - Contact Us - Let\'s Build Something Great Together')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/contact.css') }}">
@endpush

@section('content')
    <div class="pt-20">
        <!-- HERO SECTION -->
        <section class="contact-hero-section py-16 lg:py-24 bg-gradient-to-br from-dark via-[#1a0f2e] to-dark">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="contact-hero-content text-center max-w-4xl mx-auto text-white space-y-6">
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl xl:text-7xl font-black leading-tight">
                        Let's Build Something Great Together
                    </h1>
                    <p class="text-lg sm:text-xl text-white/80 max-w-2xl mx-auto leading-relaxed">
                        Get in touch with UserBX, Dublin's premier digital agency. We're here to help transform your ideas into exceptional digital experiences.
                    </p>
                </div>
            </div>
        </section>

        <!-- CONTACT FORM & DETAILS SECTION -->
        <section class="contact-main-section py-16 lg:py-24 bg-white">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="contact-main-grid grid lg:grid-cols-2 gap-12 lg:gap-16">

                    <!-- Left: Contact Form -->
                    <div class="contact-form-wrapper">
                        <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-8">Send us a Message</h2>
                        <form id="contact-form" class="contact-form space-y-6" novalidate>
                            <!-- Name Field -->
                            <div class="form-group">
                                <label for="name" class="form-label">Name <span class="text-primary">*</span></label>
                                <input type="text" id="name" name="name" required
                                    class="form-input"
                                    aria-required="true"
                                    aria-describedby="name-error">
                                <span id="name-error" class="form-error" role="alert"></span>
                            </div>

                            <!-- Email Field -->
                            <div class="form-group">
                                <label for="email" class="form-label">Email <span class="text-primary">*</span></label>
                                <input type="email" id="email" name="email" required
                                    class="form-input"
                                    aria-required="true"
                                    aria-describedby="email-error">
                                <span id="email-error" class="form-error" role="alert"></span>
                            </div>

                            <!-- Phone Field (Optional) -->
                            <div class="form-group">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="tel" id="phone" name="phone"
                                    class="form-input"
                                    aria-describedby="phone-error">
                                <span id="phone-error" class="form-error" role="alert"></span>
                            </div>

                            <!-- Company Field -->
                            <div class="form-group">
                                <label for="company" class="form-label">Company</label>
                                <input type="text" id="company" name="company"
                                    class="form-input"
                                    aria-describedby="company-error">
                                <span id="company-error" class="form-error" role="alert"></span>
                            </div>

                            <!-- Project Type Dropdown -->
                            <div class="form-group">
                                <label for="project-type" class="form-label">Project Type <span class="text-primary">*</span></label>
                                <select id="project-type" name="project-type" required
                                    class="form-select"
                                    aria-required="true"
                                    aria-describedby="project-type-error">
                                    <option value="">Select a project type</option>
                                    <option value="web-design">Web Design</option>
                                    <option value="branding">Branding</option>
                                    <option value="mobile-app">Mobile App</option>
                                    <option value="marketing">Marketing</option>
                                    <option value="other">Other</option>
                                </select>
                                <span id="project-type-error" class="form-error" role="alert"></span>
                            </div>

                            <!-- Message Field -->
                            <div class="form-group">
                                <label for="message" class="form-label">Message <span class="text-primary">*</span></label>
                                <textarea id="message" name="message" rows="6" required
                                    class="form-textarea"
                                    aria-required="true"
                                    aria-describedby="message-error"></textarea>
                                <span id="message-error" class="form-error" role="alert"></span>
                            </div>

                            <!-- Submit Button -->
                            <button type="submit" class="btn btn-primary w-full sm:w-auto">
                                Send Message
                            </button>
                        </form>
                    </div>

                    <!-- Right: Contact Details -->
                    <div class="contact-details-wrapper">
                        <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-8">Get in Touch</h2>
                        <div class="contact-details-content space-y-8">
                            
                            <!-- Office Address -->
                            <div class="contact-detail-item">
                                <div class="contact-detail-icon">
                                    <span class="material-icons text-primary text-2xl">
                                        location_on
                                    </span>
                                </div>
                                <div class="contact-detail-content">
                                    <h3 class="contact-detail-title">Office Address</h3>
                                    <p class="contact-detail-text">
                                        123 Digital Street<br>
                                        Dublin 2, D02 XY12<br>
                                        Ireland
                                    </p>
                                </div>
                            </div>

                            <!-- Phone -->
                            <div class="contact-detail-item">
                                <div class="contact-detail-icon">
                                    <span class="material-icons text-primary text-2xl">
                                        <img src="{{ asset('assets/img/icons/phone.svg') }}" alt="Phone Icon" class="w-6 h-6">
                                    </span>
                                </div>
                                <div class="contact-detail-content">
                                    <h3 class="contact-detail-title">Phone</h3>
                                    <a href="tel:+17045550127" class="contact-detail-text hover:text-primary transition-colors">
                                        (704) 555-0127
                                    </a>
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="contact-detail-item">
                                <div class="contact-detail-icon">
                                    <span class="material-icons text-primary text-2xl">
                                        <img src="{{ asset('assets/img/icons/mail.svg') }}" alt="Email Icon" class="w-6 h-6">
                                    </span>
                                </div>
                                <div class="contact-detail-content">
                                    <h3 class="contact-detail-title">Email</h3>
                                    <a href="mailto:connect@userbx.ie" class="contact-detail-text hover:text-primary transition-colors">
                                        connect@userbx.ie
                                    </a>
                                </div>
                            </div>

                            <!-- Business Hours -->
                            <div class="contact-detail-item">
                                <div class="contact-detail-icon">
                                    <span class="material-icons text-primary text-2xl">
                                        schedule
                                    </span>
                                </div>
                                <div class="contact-detail-content">
                                    <h3 class="contact-detail-title">Business Hours</h3>
                                    <p class="contact-detail-text">
                                        Monday - Friday: 9:00 AM - 6:00 PM<br>
                                        Saturday: 10:00 AM - 4:00 PM<br>
                                        Sunday: Closed
                                    </p>
                                </div>
                            </div>

                            <!-- Social Media Links -->
                            <div class="contact-social-wrapper mt-8">
                                <h3 class="contact-detail-title mb-4">Follow Us</h3>
                                <div class="contact-social-icons flex space-x-4">
                                    <a href="https://www.linkedin.com/company/userbx" target="_blank" rel="noopener noreferrer"
                                        class="contact-social-icon w-12 h-12 rounded-full bg-gray-100 hover:bg-primary flex items-center justify-center transition-colors focus:outline-none focus:ring-2 focus:ring-primary"
                                        aria-label="LinkedIn">
                                        <span class="text-lg text-primary font-bold">in</span>
                                    </a>
                                    <a href="https://www.instagram.com/userbx" target="_blank" rel="noopener noreferrer"
                                        class="contact-social-icon w-12 h-12 rounded-full bg-gray-100 hover:bg-primary flex items-center justify-center transition-colors focus:outline-none focus:ring-2 focus:ring-primary"
                                        aria-label="Instagram">
                                        <span class="text-lg">
                                            <img src="{{ asset('assets/img/icons/instagram.svg') }}" alt="Instagram" class="w-5 h-5">
                                        </span>
                                    </a>
                                    <a href="https://twitter.com/userbx" target="_blank" rel="noopener noreferrer"
                                        class="contact-social-icon w-12 h-12 rounded-full bg-gray-100 hover:bg-primary flex items-center justify-center transition-colors focus:outline-none focus:ring-2 focus:ring-primary"
                                        aria-label="Twitter/X">
                                        <span class="text-lg">
                                            <img src="{{ asset('assets/img/icons/twitter.svg') }}" alt="Twitter" class="w-5 h-5">
                                        </span>
                                    </a>
                                    <a href="https://www.facebook.com/userbx" target="_blank" rel="noopener noreferrer"
                                        class="contact-social-icon w-12 h-12 rounded-full bg-gray-100 hover:bg-primary flex items-center justify-center transition-colors focus:outline-none focus:ring-2 focus:ring-primary"
                                        aria-label="Facebook">
                                        <span class="text-lg">
                                            <img src="{{ asset('assets/img/icons/facebook.svg') }}" alt="Facebook" class="w-5 h-5">
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- GOOGLE MAP SECTION -->
        <section class="contact-map-section py-8 lg:py-12 bg-gray-50">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="contact-map-wrapper rounded-xl overflow-hidden shadow-lg">
                        <div class="contact-map-container w-full h-[400px] lg:h-[500px]">
                        <iframe
                            id="google-map-iframe"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2381.8!2d-6.2546!3d53.3438!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48670e80ea27ac2f%3A0xa00c7a9973171a0!2sDublin!5e0!3m2!1sen!2sie!4v1234567890123!5m2!1sen!2sie"
                            width="100%"
                            height="100%"
                            style="border:0;"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                            title="UserBX Office Location - Dublin, Ireland"
                            aria-label="Interactive map showing UserBX office location in Dublin">
                        </iframe>
                    </div>
                </div>
            </div>
        </section>

        <!-- SUPPORT BANNER SECTION -->
        <section class="contact-support-section py-12 lg:py-16 bg-primary">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="contact-support-banner text-center text-white">
                    <p class="text-lg sm:text-xl lg:text-2xl font-medium">
                        Need technical support? Our team is here to help.
                    </p>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('assets/js/contact.js') }}" defer></script>
@endpush
