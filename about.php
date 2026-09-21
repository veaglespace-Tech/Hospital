<?php include 'includes/header.php'; ?>

<!-- Page Header -->
<div class="relative pt-32 pb-32 lg:pt-48 lg:pb-40 overflow-hidden bg-slate-950">
    <!-- Background Image & Gradients -->
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?auto=format&fit=crop&q=80" alt="Background" class="w-full h-full object-cover opacity-30">
    </div>
    <div class="absolute inset-0 bg-gradient-to-r from-slate-950 via-slate-950/80 to-transparent"></div>
    <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-transparent to-transparent"></div>
    
    <!-- Decorative Orbs (Hidden on mobile) -->
    <div class="absolute top-0 right-1/4 w-[30rem] h-[30rem] bg-brand-500 rounded-full blur-[120px] opacity-20 mix-blend-screen mobile-hide"></div>
    <div class="absolute bottom-0 left-1/4 w-[30rem] h-[30rem] bg-indigo-500 rounded-full blur-[120px] opacity-20 mix-blend-screen mobile-hide"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl" data-aos="fade-right">
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-brand-500/10 border border-brand-400/20 text-brand-300 text-xs sm:text-sm font-bold tracking-widest uppercase mb-6 sm:mb-8 backdrop-blur-md">
                <span class="w-2 h-2 rounded-full bg-brand-400 animate-pulse"></span>
                Our Story
            </div>
            <h1 class="text-5xl sm:text-6xl lg:text-7xl font-black text-white tracking-tight mb-6 sm:mb-8 font-display leading-[1.1]">About <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-300 to-indigo-300">Cityview</span> Medical</h1>
            <p class="text-lg sm:text-xl text-slate-300 font-light leading-relaxed max-w-2xl">A legacy of excellence. A future of innovation. Discover the heart behind our healthcare.</p>
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
<section class="py-24 sm:py-32 bg-white relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="lg:grid lg:grid-cols-2 lg:gap-16 xl:gap-24 items-center">
            <div data-aos="fade-right">
                <h2 class="text-brand-600 font-extrabold tracking-widest uppercase mb-4 text-xs sm:text-sm">Our Heritage</h2>
                <h3 class="text-4xl sm:text-5xl font-black text-slate-900 mb-8 font-display leading-[1.1]">Dedicated to your health since 1998.</h3>
                
                <div class="prose prose-lg prose-slate mb-10">
                    <p class="text-slate-600 leading-relaxed mb-6">
                        What started as a small community clinic over two decades ago has blossomed into a state-of-the-art medical center. Cityview Medical Center was founded on a simple principle: every patient deserves compassionate, world-class care, regardless of their background.
                    </p>
                    <p class="text-slate-600 leading-relaxed">
                        Today, we house over 50 specialists across dozens of departments. But our core mission hasn't changed. We are here to heal, to comfort, and to innovate for a healthier tomorrow.
                    </p>
                </div>
                
                <div class="flex flex-col sm:flex-row gap-6">
                    <div class="bg-slate-50 p-6 sm:p-8 rounded-[2rem] border border-slate-100 flex-1 hover:border-brand-200 hover:shadow-[0_10px_30px_-15px_rgba(2,132,199,0.2)] transition-all duration-300 group">
                        <div class="w-12 h-12 bg-white rounded-xl shadow-sm border border-slate-100 flex items-center justify-center text-brand-600 mb-4 group-hover:bg-brand-600 group-hover:text-white transition-colors duration-300">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                        </div>
                        <h4 class="font-black text-slate-900 mb-2 font-display text-lg">Our Mission</h4>
                        <p class="text-sm text-slate-500 leading-relaxed">To deliver comprehensive, high-quality healthcare that improves lives.</p>
                    </div>
                    <div class="bg-slate-50 p-6 sm:p-8 rounded-[2rem] border border-slate-100 flex-1 hover:border-indigo-200 hover:shadow-[0_10px_30px_-15px_rgba(99,102,241,0.2)] transition-all duration-300 group">
                        <div class="w-12 h-12 bg-white rounded-xl shadow-sm border border-slate-100 flex items-center justify-center text-indigo-600 mb-4 group-hover:bg-indigo-600 group-hover:text-white transition-colors duration-300">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                        </div>
                        <h4 class="font-black text-slate-900 mb-2 font-display text-lg">Our Vision</h4>
                        <p class="text-sm text-slate-500 leading-relaxed">To be the undisputed leading healthcare provider in the region.</p>
                    </div>
                </div>
            </div>
            
            <div class="mt-16 lg:mt-0 relative" data-aos="fade-left">
                <!-- Decorative background blob -->
                <div class="absolute inset-0 bg-gradient-to-tr from-brand-300 to-indigo-300 rounded-full transform -translate-x-8 translate-y-8 filter blur-[80px] opacity-40 mobile-hide"></div>
                <div class="relative rounded-[2.5rem] overflow-hidden shadow-[0_20px_50px_-15px_rgba(0,0,0,0.2)] border-8 border-white group">
                    <img class="w-full h-[500px] sm:h-[600px] object-cover transform group-hover:scale-105 transition-transform duration-[2s] ease-out" src="https://images.unsplash.com/photo-1551076805-e1869033e561?auto=format&fit=crop&q=80" alt="Our Medical Team">
                    <div class="absolute inset-0 bg-slate-950/10 group-hover:bg-transparent transition-colors duration-500"></div>
                </div>
                <!-- Floating Badge -->
                <div class="absolute -bottom-6 -left-6 sm:bottom-12 sm:-left-12 glass p-6 rounded-3xl border border-white/40 shadow-xl flex items-center gap-4 animate-float">
                    <div class="w-16 h-16 rounded-full bg-brand-100 flex items-center justify-center text-brand-600 font-black text-2xl">25+</div>
                    <div>
                        <p class="font-black text-slate-900 font-display text-lg">Years of</p>
                        <p class="text-sm text-slate-500 font-bold uppercase tracking-wider">Excellence</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Core Values -->
<section class="py-24 sm:py-32 bg-slate-50 relative overflow-hidden">
    <!-- Subtle Grid Background -->
    <div class="absolute inset-0 opacity-[0.03] bg-[linear-gradient(to_right,#0ea5e9_1px,transparent_1px),linear-gradient(to_bottom,#0ea5e9_1px,transparent_1px)] bg-[size:40px_40px]"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
        <h2 class="text-brand-600 font-extrabold tracking-widest uppercase mb-4 text-xs sm:text-sm" data-aos="fade-up">What Drives Us</h2>
        <h3 class="text-4xl sm:text-5xl font-black text-slate-900 mb-16 font-display" data-aos="fade-up" data-aos-delay="100">Our Core <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-600 to-indigo-600">Values</span></h3>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 sm:gap-8">
            <div class="bg-white p-8 sm:p-10 rounded-[2rem] shadow-[0_10px_30px_-15px_rgba(0,0,0,0.05)] border border-slate-100 group hover:-translate-y-2 hover:border-brand-200 hover:shadow-[0_20px_40px_-15px_rgba(2,132,199,0.2)] transition-all duration-500" data-aos="fade-up" data-aos-delay="200">
                <div class="w-16 h-16 bg-slate-50 border border-slate-100 text-brand-500 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:bg-brand-500 group-hover:text-white group-hover:scale-110 transition-all duration-500 shadow-sm">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                </div>
                <h4 class="text-xl font-black text-slate-900 mb-3 font-display">Compassion</h4>
                <p class="text-slate-500 text-sm leading-relaxed">Treating every patient with empathy, respect, and kindness.</p>
            </div>
            
            <div class="bg-white p-8 sm:p-10 rounded-[2rem] shadow-[0_10px_30px_-15px_rgba(0,0,0,0.05)] border border-slate-100 group hover:-translate-y-2 hover:border-indigo-200 hover:shadow-[0_20px_40px_-15px_rgba(99,102,241,0.2)] transition-all duration-500" data-aos="fade-up" data-aos-delay="300">
                <div class="w-16 h-16 bg-slate-50 border border-slate-100 text-indigo-500 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:bg-indigo-500 group-hover:text-white group-hover:scale-110 transition-all duration-500 shadow-sm">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                </div>
                <h4 class="text-xl font-black text-slate-900 mb-3 font-display">Integrity</h4>
                <p class="text-slate-500 text-sm leading-relaxed">Upholding the highest ethical standards in all our practices.</p>
            </div>
            
            <div class="bg-white p-8 sm:p-10 rounded-[2rem] shadow-[0_10px_30px_-15px_rgba(0,0,0,0.05)] border border-slate-100 group hover:-translate-y-2 hover:border-rose-200 hover:shadow-[0_20px_40px_-15px_rgba(244,63,94,0.2)] transition-all duration-500" data-aos="fade-up" data-aos-delay="400">
                <div class="w-16 h-16 bg-slate-50 border border-slate-100 text-rose-500 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:bg-rose-500 group-hover:text-white group-hover:scale-110 transition-all duration-500 shadow-sm">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                </div>
                <h4 class="text-xl font-black text-slate-900 mb-3 font-display">Innovation</h4>
                <p class="text-slate-500 text-sm leading-relaxed">Embracing new technologies to provide better treatments.</p>
            </div>

            <div class="bg-white p-8 sm:p-10 rounded-[2rem] shadow-[0_10px_30px_-15px_rgba(0,0,0,0.05)] border border-slate-100 group hover:-translate-y-2 hover:border-teal-200 hover:shadow-[0_20px_40px_-15px_rgba(20,184,166,0.2)] transition-all duration-500" data-aos="fade-up" data-aos-delay="500">
                <div class="w-16 h-16 bg-slate-50 border border-slate-100 text-teal-500 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:bg-teal-500 group-hover:text-white group-hover:scale-110 transition-all duration-500 shadow-sm">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path></svg>
                </div>
                <h4 class="text-xl font-black text-slate-900 mb-3 font-display">Excellence</h4>
                <p class="text-slate-500 text-sm leading-relaxed">Striving for the best possible outcomes for every patient.</p>
            </div>
        </div>
    </div>
</section>

<!-- Leadership Team -->
<section class="py-24 sm:py-32 bg-white relative overflow-hidden">
    <!-- Abstract gradient shape -->
    <div class="absolute top-0 right-0 w-[40rem] h-[40rem] bg-gradient-to-bl from-brand-50 to-transparent rounded-bl-full -z-10 mobile-hide"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16 sm:mb-20" data-aos="fade-up">
            <h2 class="text-brand-600 font-extrabold tracking-widest uppercase mb-4 text-xs sm:text-sm">Medical Board</h2>
            <p class="text-4xl sm:text-5xl lg:text-6xl font-black text-slate-900 font-display mb-6">Meet Our Leadership Team</p>
            <p class="text-lg sm:text-xl text-slate-500">Pioneers in their fields, our lead doctors ensure you get the absolute best care.</p>
        </div>
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 sm:gap-12">
            <!-- Doctor 1 -->
            <div class="flex flex-col sm:flex-row gap-8 bg-slate-50 p-6 sm:p-8 rounded-[2rem] sm:rounded-[2.5rem] border border-slate-100 group hover:bg-white hover:shadow-[0_20px_50px_-15px_rgba(0,0,0,0.1)] hover:border-brand-100 transition-all duration-500" data-aos="fade-up" data-aos-delay="100">
                <div class="w-full sm:w-56 h-64 sm:h-auto rounded-[1.5rem] overflow-hidden flex-shrink-0 relative">
                    <img src="https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?auto=format&fit=crop&q=80&w=600" alt="Dr. James Anderson" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700">
                </div>
                <div class="flex flex-col justify-center flex-1">
                    <h3 class="text-2xl sm:text-3xl font-black text-slate-900 mb-2 font-display">Dr. James Anderson</h3>
                    <p class="text-brand-600 font-bold uppercase tracking-wider text-xs sm:text-sm mb-4">Chief of Cardiology</p>
                    <p class="text-slate-500 mb-6 line-clamp-3 leading-relaxed text-sm sm:text-base">With over 20 years of experience in interventional cardiology, Dr. Anderson leads our heart center with unmatched expertise and a patient-first philosophy.</p>
                    <a href="contact.php" class="inline-flex items-center text-slate-900 font-bold hover:text-brand-600 text-sm sm:text-base transition-colors group/link w-fit">
                        Book Consultation <span class="ml-2 bg-slate-200 group-hover/link:bg-brand-100 text-slate-600 group-hover/link:text-brand-600 w-8 h-8 rounded-full flex items-center justify-center transition-colors">&rarr;</span>
                    </a>
                </div>
            </div>

            <!-- Doctor 2 -->
            <div class="flex flex-col sm:flex-row gap-8 bg-slate-50 p-6 sm:p-8 rounded-[2rem] sm:rounded-[2.5rem] border border-slate-100 group hover:bg-white hover:shadow-[0_20px_50px_-15px_rgba(0,0,0,0.1)] hover:border-indigo-100 transition-all duration-500" data-aos="fade-up" data-aos-delay="200">
                <div class="w-full sm:w-56 h-64 sm:h-auto rounded-[1.5rem] overflow-hidden flex-shrink-0 relative">
                    <img src="https://images.unsplash.com/photo-1559839734-2b71ea197ec2?auto=format&fit=crop&q=80&w=600" alt="Dr. Sarah Jerains" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700">
                </div>
                <div class="flex flex-col justify-center flex-1">
                    <h3 class="text-2xl sm:text-3xl font-black text-slate-900 mb-2 font-display">Dr. Sarah Jerains</h3>
                    <p class="text-indigo-600 font-bold uppercase tracking-wider text-xs sm:text-sm mb-4">Head of Neurology</p>
                    <p class="text-slate-500 mb-6 line-clamp-3 leading-relaxed text-sm sm:text-base">Dr. Jerains specializes in complex neurological disorders and has been instrumental in integrating advanced MRI diagnostics into our standard care procedures.</p>
                    <a href="contact.php" class="inline-flex items-center text-slate-900 font-bold hover:text-indigo-600 text-sm sm:text-base transition-colors group/link w-fit">
                        Book Consultation <span class="ml-2 bg-slate-200 group-hover/link:bg-indigo-100 text-slate-600 group-hover/link:text-indigo-600 w-8 h-8 rounded-full flex items-center justify-center transition-colors">&rarr;</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
