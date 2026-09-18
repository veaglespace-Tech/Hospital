<?php include 'includes/header.php'; ?>

<!-- Hero Section with Overlays -->
<section class="relative bg-gray-900 h-[600px] lg:h-[800px] flex items-center">
    <!-- Background Image -->
    <div class="absolute inset-0 w-full h-full">
        <img class="w-full h-full object-cover opacity-50" src="assets/images/hero.jpg" alt="Hospital exterior">
        <div class="absolute inset-0 bg-gradient-to-r from-gray-900 via-gray-900/80 to-transparent"></div>
    </div>
    
    <!-- Hero Content -->
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
        <div class="max-w-2xl">
            <span class="inline-block py-1 px-3 rounded-full bg-brand-500/20 border border-brand-500/30 text-brand-300 text-sm font-semibold tracking-wider uppercase mb-6 backdrop-blur-sm">
                Excellence in Healthcare
            </span>
            <h1 class="text-4xl tracking-tight font-extrabold text-white sm:text-5xl md:text-6xl lg:text-7xl leading-tight mb-6">
                Your Health is Our <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-400 to-brand-200">Top Priority.</span>
            </h1>
            <p class="text-lg text-gray-300 md:text-xl mb-10 max-w-xl leading-relaxed">
                Experience world-class medical care with our team of renowned specialists and state-of-the-art facilities designed for your complete recovery.
            </p>
            <div class="flex flex-col sm:flex-row gap-4">
                <a href="contact.php" class="inline-flex items-center justify-center px-8 py-4 text-base font-bold rounded-full text-white bg-brand-600 hover:bg-brand-500 transition-all shadow-lg hover:shadow-brand-500/50 transform hover:-translate-y-1">
                    Book an Appointment
                </a>
                <a href="services.php" class="inline-flex items-center justify-center px-8 py-4 text-base font-bold rounded-full text-white bg-white/10 hover:bg-white/20 border border-white/20 backdrop-blur-sm transition-all transform hover:-translate-y-1">
                    Explore Services
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Emergency Floating Banner -->
<div class="bg-red-600 shadow-xl border-y-4 border-red-700">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 sm:py-6">
        <div class="flex flex-col md:flex-row items-center justify-between gap-4">
            <div class="flex items-center gap-4 text-white">
                <div class="p-3 bg-red-800 rounded-full">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
                </div>
                <div>
                    <h3 class="text-xl font-bold">Need Emergency Help?</h3>
                    <p class="text-red-100 text-sm sm:text-base">Our emergency department is open 24/7 with immediate response teams.</p>
                </div>
            </div>
            <a href="tel:5559110000" class="text-3xl font-extrabold text-white hover:text-red-200 transition-colors flex items-center gap-2">
                (555) 911-0000
            </a>
        </div>
    </div>
</div>

<!-- Quick Stats Section -->
<section class="py-12 bg-white border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center divide-x divide-gray-100">
            <div class="p-4">
                <p class="text-4xl font-extrabold text-brand-600 mb-2">25+</p>
                <p class="text-sm font-semibold text-gray-500 uppercase tracking-wide">Years Experience</p>
            </div>
            <div class="p-4">
                <p class="text-4xl font-extrabold text-brand-600 mb-2">50+</p>
                <p class="text-sm font-semibold text-gray-500 uppercase tracking-wide">Specialist Doctors</p>
            </div>
            <div class="p-4">
                <p class="text-4xl font-extrabold text-brand-600 mb-2">10k+</p>
                <p class="text-sm font-semibold text-gray-500 uppercase tracking-wide">Happy Patients</p>
            </div>
            <div class="p-4">
                <p class="text-4xl font-extrabold text-brand-600 mb-2">24/7</p>
                <p class="text-sm font-semibold text-gray-500 uppercase tracking-wide">Emergency Care</p>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-brand-600 font-bold tracking-wide uppercase mb-2">Why Choose Us</h2>
            <p class="text-4xl font-extrabold text-gray-900">Setting the Standard in Modern Healthcare</p>
            <p class="mt-4 text-xl text-gray-500">We combine cutting-edge technology with compassionate care to deliver the best outcomes.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
            <div class="bg-white p-10 rounded-[2rem] shadow-sm border border-gray-100 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 group">
                <div class="w-16 h-16 bg-brand-50 text-brand-600 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-brand-600 group-hover:text-white transition-colors duration-300">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Modern Facilities</h3>
                <p class="text-gray-500 leading-relaxed mb-6">Equipped with the latest medical technology and luxurious recovery rooms to provide accurate diagnostics and comfortable treatments.</p>
                <a href="gallery.php" class="text-brand-600 font-bold hover:text-brand-700 flex items-center gap-2">Take a Tour &rarr;</a>
            </div>

            <div class="bg-white p-10 rounded-[2rem] shadow-sm border border-gray-100 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 group">
                <div class="w-16 h-16 bg-brand-50 text-brand-600 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-brand-600 group-hover:text-white transition-colors duration-300">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Expert Doctors</h3>
                <p class="text-gray-500 leading-relaxed mb-6">Our team consists of highly qualified, internationally trained specialists with years of experience in various medical fields.</p>
                <a href="about.php" class="text-brand-600 font-bold hover:text-brand-700 flex items-center gap-2">Meet the Team &rarr;</a>
            </div>

            <div class="bg-white p-10 rounded-[2rem] shadow-sm border border-gray-100 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 group">
                <div class="w-16 h-16 bg-brand-50 text-brand-600 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-brand-600 group-hover:text-white transition-colors duration-300">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Compassionate Care</h3>
                <p class="text-gray-500 leading-relaxed mb-6">We prioritize patient comfort and provide empathetic, personalized care tailored to your individual needs and history.</p>
                <a href="services.php" class="text-brand-600 font-bold hover:text-brand-700 flex items-center gap-2">Our Approach &rarr;</a>
            </div>
        </div>
    </div>
</section>

<!-- Top Departments Section -->
<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row justify-between items-end mb-12">
            <div class="max-w-2xl">
                <h2 class="text-brand-600 font-bold tracking-wide uppercase mb-2">Departments</h2>
                <p class="text-4xl font-extrabold text-gray-900">Centers of Excellence</p>
            </div>
            <a href="services.php" class="mt-4 md:mt-0 px-6 py-3 border-2 border-brand-600 text-brand-600 font-bold rounded-full hover:bg-brand-600 hover:text-white transition-colors">View All Services</a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Dept Card 1 -->
            <div class="group relative rounded-3xl overflow-hidden shadow-lg">
                <img src="assets/images/or.jpg" alt="Surgery" class="w-full h-80 object-cover transform group-hover:scale-105 transition-transform duration-700">
                <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/40 to-transparent"></div>
                <div class="absolute bottom-0 left-0 p-8 w-full">
                    <h3 class="text-3xl font-bold text-white mb-2">General Surgery</h3>
                    <p class="text-gray-300 mb-4 line-clamp-2">Minimally invasive and robotic surgeries performed by world-class surgeons.</p>
                    <a href="services.php" class="text-brand-400 font-bold group-hover:text-brand-300 flex items-center gap-2">Learn More <span class="group-hover:translate-x-2 transition-transform">&rarr;</span></a>
                </div>
            </div>
            
            <!-- Dept Card 2 -->
            <div class="group relative rounded-3xl overflow-hidden shadow-lg">
                <img src="assets/images/mri.jpg" alt="Neurology" class="w-full h-80 object-cover transform group-hover:scale-105 transition-transform duration-700">
                <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/40 to-transparent"></div>
                <div class="absolute bottom-0 left-0 p-8 w-full">
                    <h3 class="text-3xl font-bold text-white mb-2">Neurology & MRI</h3>
                    <p class="text-gray-300 mb-4 line-clamp-2">Advanced diagnostics and treatment for complex neurological conditions.</p>
                    <a href="services.php" class="text-brand-400 font-bold group-hover:text-brand-300 flex items-center gap-2">Learn More <span class="group-hover:translate-x-2 transition-transform">&rarr;</span></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="py-24 bg-brand-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-brand-600 font-bold tracking-wide uppercase mb-2">Patient Stories</h2>
            <p class="text-4xl font-extrabold text-gray-900">Hear From Our Patients</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 relative">
                <div class="text-brand-400 opacity-20 absolute top-4 right-6 text-6xl font-serif">"</div>
                <div class="flex text-yellow-400 mb-4">
                    &#9733;&#9733;&#9733;&#9733;&#9733;
                </div>
                <p class="text-gray-600 italic mb-6">"The staff at Cityview Medical Center went above and beyond. The facilities are incredibly modern, and Dr. Smith took the time to explain every step of my procedure."</p>
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 bg-gray-200 rounded-full flex items-center justify-center font-bold text-gray-500">MR</div>
                    <div>
                        <h4 class="font-bold text-gray-900">Michael R.</h4>
                        <p class="text-sm text-gray-500">Cardiology Patient</p>
                    </div>
                </div>
            </div>

            <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 relative">
                <div class="text-brand-400 opacity-20 absolute top-4 right-6 text-6xl font-serif">"</div>
                <div class="flex text-yellow-400 mb-4">
                    &#9733;&#9733;&#9733;&#9733;&#9733;
                </div>
                <p class="text-gray-600 italic mb-6">"I brought my daughter to the pediatrics ward, and the environment was so welcoming. It didn't feel like a hospital at all. Truly exceptional care."</p>
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 bg-gray-200 rounded-full flex items-center justify-center font-bold text-gray-500">ST</div>
                    <div>
                        <h4 class="font-bold text-gray-900">Sarah T.</h4>
                        <p class="text-sm text-gray-500">Mother of Patient</p>
                    </div>
                </div>
            </div>

            <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 relative">
                <div class="text-brand-400 opacity-20 absolute top-4 right-6 text-6xl font-serif">"</div>
                <div class="flex text-yellow-400 mb-4">
                    &#9733;&#9733;&#9733;&#9733;&#9733;
                </div>
                <p class="text-gray-600 italic mb-6">"The MRI facilities are state-of-the-art. The entire process was smooth, and the results were provided to my neurologist the very same day."</p>
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 bg-gray-200 rounded-full flex items-center justify-center font-bold text-gray-500">DJ</div>
                    <div>
                        <h4 class="font-bold text-gray-900">David J.</h4>
                        <p class="text-sm text-gray-500">Neurology Patient</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="bg-brand-600 relative overflow-hidden">
    <!-- Decorative circles -->
    <div class="absolute top-0 right-0 -mr-20 -mt-20 w-64 h-64 rounded-full bg-brand-500 opacity-50 blur-3xl"></div>
    <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-80 h-80 rounded-full bg-brand-700 opacity-50 blur-3xl"></div>
    
    <div class="relative z-10 max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:py-20 lg:px-8 lg:flex lg:items-center lg:justify-between">
        <h2 class="text-3xl font-extrabold tracking-tight text-white sm:text-4xl">
            <span class="block">Ready to take control of your health?</span>
            <span class="block text-brand-200 mt-2">Schedule your consultation today.</span>
        </h2>
        <div class="mt-8 flex lg:mt-0 lg:flex-shrink-0">
            <div class="inline-flex rounded-md shadow">
                <a href="contact.php" class="inline-flex items-center justify-center px-8 py-4 border border-transparent text-lg font-bold rounded-full text-brand-600 bg-white hover:bg-brand-50 transition-colors shadow-xl">
                    Book Now
                </a>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
