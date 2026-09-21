<?php include 'includes/header.php'; ?>

<!-- Page Header -->
<div class="relative pt-32 pb-32 lg:pt-40 lg:pb-40 overflow-hidden bg-gray-900">
    <!-- Background Image -->
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?auto=format&fit=crop&q=80" alt="Background" class="w-full h-full object-cover opacity-40">
    </div>
    <!-- Gradient Overlay for Readability -->
    <div class="absolute inset-0 bg-gradient-to-r from-gray-900 via-gray-900/80 to-transparent"></div>
    <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-transparent to-transparent"></div>
    
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl" data-aos="fade-right">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-brand-500/20 border border-brand-400/30 text-brand-300 text-sm font-bold tracking-widest uppercase mb-6 backdrop-blur-md">
                <span class="w-2 h-2 rounded-full bg-brand-400 animate-pulse"></span>
                Our Story
            </div>
            <h1 class="text-5xl lg:text-7xl font-extrabold text-white tracking-tight mb-6 font-display">About Cityview Medical</h1>
            <p class="text-xl text-gray-300 font-light leading-relaxed">A legacy of excellence. A future of innovation. Discover the heart behind our healthcare.</p>
        </div>
    </div>
    
    <!-- SVG Wave -->
    <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none z-20 translate-y-[1px]">
        <svg class="relative block w-full h-[40px] md:h-[80px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" preserveAspectRatio="none">
            <path d="M0,160 C320,300 420,0 740,120 C1060,240 1280,60 1440,160 L1440,320 L0,320 Z" fill="#ffffff"></path>
        </svg>
    </div>
</div>

<!-- Our Story / Mission -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="lg:grid lg:grid-cols-2 lg:gap-16 items-center">
            <div>
                <h2 class="text-brand-600 font-bold tracking-wide uppercase mb-2">Our Story</h2>
                <h3 class="text-3xl font-extrabold text-gray-900 mb-6">Dedicated to your health since 1998.</h3>
                <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                    What started as a small community clinic over two decades ago has blossomed into a state-of-the-art medical center. Cityview Medical Center was founded on a simple principle: every patient deserves compassionate, world-class care, regardless of their background.
                </p>
                <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                    Today, we house over 50 specialists across dozens of departments. But our core mission hasn't changed. We are here to heal, to comfort, and to innovate for a healthier tomorrow.
                </p>
                
                <div class="flex flex-col sm:flex-row gap-6 mb-8">
                    <div class="bg-brand-50 p-6 rounded-2xl border border-brand-100 flex-1">
                        <div class="text-brand-600 mb-2">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                        </div>
                        <h4 class="font-bold text-gray-900 mb-1">Our Mission</h4>
                        <p class="text-sm text-gray-600">To deliver comprehensive, high-quality healthcare that improves lives.</p>
                    </div>
                    <div class="bg-brand-50 p-6 rounded-2xl border border-brand-100 flex-1">
                        <div class="text-brand-600 mb-2">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                        </div>
                        <h4 class="font-bold text-gray-900 mb-1">Our Vision</h4>
                        <p class="text-sm text-gray-600">To be the undisputed leading healthcare provider in the region.</p>
                    </div>
                </div>
            </div>
            <div class="mt-10 lg:mt-0 relative">
                <!-- Decorative background blob -->
                <div class="absolute inset-0 bg-brand-100 rounded-full transform -translate-x-4 translate-y-4 filter blur-2xl opacity-70"></div>
                <img class="relative rounded-[2rem] shadow-2xl w-full object-cover z-10 border-8 border-white" src="assets/images/about.jpg" alt="Our Medical Team">
            </div>
        </div>
    </div>
</section>

<!-- Core Values -->
<section class="py-20 bg-gray-50 border-t border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-brand-600 font-bold tracking-wide uppercase mb-2">What Drives Us</h2>
        <h3 class="text-3xl font-extrabold text-gray-900 mb-12">Our Core Values</h3>
        
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-md transition-shadow">
                <div class="w-16 h-16 bg-brand-100 text-brand-600 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                </div>
                <h4 class="text-xl font-bold text-gray-900 mb-2">Compassion</h4>
                <p class="text-gray-500">Treating every patient with empathy, respect, and kindness.</p>
            </div>
            
            <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-md transition-shadow">
                <div class="w-16 h-16 bg-brand-100 text-brand-600 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                </div>
                <h4 class="text-xl font-bold text-gray-900 mb-2">Integrity</h4>
                <p class="text-gray-500">Upholding the highest ethical standards in all our practices.</p>
            </div>
            
            <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-md transition-shadow">
                <div class="w-16 h-16 bg-brand-100 text-brand-600 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                </div>
                <h4 class="text-xl font-bold text-gray-900 mb-2">Innovation</h4>
                <p class="text-gray-500">Embracing new technologies to provide better treatments.</p>
            </div>

            <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-md transition-shadow">
                <div class="w-16 h-16 bg-brand-100 text-brand-600 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path></svg>
                </div>
                <h4 class="text-xl font-bold text-gray-900 mb-2">Excellence</h4>
                <p class="text-gray-500">Striving for the best possible outcomes for every patient.</p>
            </div>
        </div>
    </div>
</section>

<!-- Leadership Team -->
<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-brand-600 font-bold tracking-wide uppercase mb-2">Medical Board</h2>
            <p class="text-4xl font-extrabold text-gray-900">Meet Our Leadership Team</p>
            <p class="mt-4 text-xl text-gray-500">Pioneers in their fields, our lead doctors ensure you get the absolute best care.</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
            <!-- Doctor 1 -->
            <div class="flex flex-col sm:flex-row gap-8 bg-gray-50 p-6 rounded-3xl border border-gray-100">
                <img src="assets/images/dr_smith.jpg" alt="Dr. James Anderson" class="w-full sm:w-48 h-56 object-cover rounded-2xl shadow-md">
                <div class="flex flex-col justify-center">
                    <h3 class="text-2xl font-bold text-gray-900 mb-1">Dr. James Anderson</h3>
                    <p class="text-brand-600 font-semibold mb-4">Chief of Cardiology</p>
                    <p class="text-gray-600 mb-4 line-clamp-3">With over 20 years of experience in interventional cardiology, Dr. Anderson leads our heart center with unmatched expertise and a patient-first philosophy.</p>
                    <a href="contact.php" class="text-brand-600 font-bold hover:text-brand-800 text-sm flex items-center gap-1">
                        Book Consultation &rarr;
                    </a>
                </div>
            </div>

            <!-- Doctor 2 -->
            <div class="flex flex-col sm:flex-row gap-8 bg-gray-50 p-6 rounded-3xl border border-gray-100">
                <img src="assets/images/dr_johnson.jpg" alt="Dr. Sarah Jerains" class="w-full sm:w-48 h-56 object-cover rounded-2xl shadow-md">
                <div class="flex flex-col justify-center">
                    <h3 class="text-2xl font-bold text-gray-900 mb-1">Dr. Sarah Jerains</h3>
                    <p class="text-brand-600 font-semibold mb-4">Head of Neurology</p>
                    <p class="text-gray-600 mb-4 line-clamp-3">Dr. Jerains specializes in complex neurological disorders and has been instrumental in integrating advanced MRI diagnostics into our standard care procedures.</p>
                    <a href="contact.php" class="text-brand-600 font-bold hover:text-brand-800 text-sm flex items-center gap-1">
                        Book Consultation &rarr;
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
