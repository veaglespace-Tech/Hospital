<?php include 'includes/header.php'; ?>

<!-- Enhanced Premium Hero Section -->
<section class="relative bg-slate-900 min-h-screen flex items-center pt-24 lg:pt-0 overflow-hidden">
    <!-- Animated Image Background -->
    <div class="absolute inset-0 w-full h-full overflow-hidden bg-slate-900">
        <div class="absolute inset-0 w-full h-full bg-cover bg-center opacity-40 animate-ken-burns scale-105" style="background-image: url('https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?auto=format&fit=crop&q=80&w=2000');"></div>
        <!-- Complex Gradient Overlay for Depth -->
        <div class="absolute inset-0 bg-gradient-to-r from-slate-950 via-slate-900/90 to-transparent"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-transparent to-brand-900/30 mix-blend-multiply"></div>
        
        <!-- Decorative glowing orbs (hidden on mobile) -->
        <div class="absolute top-1/4 right-1/4 w-96 h-96 bg-brand-500/20 rounded-full blur-[100px] animate-pulse-slow mobile-hide"></div>
        <div class="absolute bottom-1/4 left-1/4 w-[30rem] h-[30rem] bg-brand-700/20 rounded-full blur-[120px] animate-float-delayed mobile-hide"></div>
    </div>
    
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full pb-32 lg:pb-40 pt-12 lg:pt-20">
        <div class="grid lg:grid-cols-12 gap-8 lg:gap-12 items-center">
            <!-- Hero Text -->
            <div class="lg:col-span-7 pt-4 lg:pt-10" data-aos="fade-right" data-aos-duration="1000">
                <div class="inline-flex items-center gap-2 py-2 px-5 rounded-full bg-slate-800/50 border border-brand-500/30 text-brand-300 text-xs sm:text-sm font-bold tracking-widest uppercase mb-6 sm:mb-8 backdrop-blur-md shadow-neon">
                    <span class="relative flex h-3 w-3">
                      <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-brand-400 opacity-75"></span>
                      <span class="relative inline-flex rounded-full h-3 w-3 bg-brand-500"></span>
                    </span>
                    #1 Healthcare Provider
                </div>
                <h1 class="font-display text-[2.75rem] tracking-tight font-black text-white sm:text-6xl md:text-7xl lg:text-[5.5rem] leading-[1.05] mb-6 sm:mb-8 drop-shadow-2xl">
                    Healing Hands.<br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-300 via-brand-100 to-white animate-pulse-slow block mt-2">Advanced Care.</span>
                </h1>
                <p class="text-base sm:text-lg text-slate-300 md:text-xl mb-8 sm:mb-10 max-w-2xl leading-relaxed border-l-4 border-brand-500 pl-5 sm:pl-6">
                    Experience world-class medical care with renowned specialists, AI-driven diagnostics, and state-of-the-art facilities designed for your complete and rapid recovery.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 sm:gap-6 mt-8">
                    <a href="services.php" class="inline-flex items-center justify-center px-8 py-4 text-base font-bold rounded-full text-white bg-gradient-to-r from-brand-600 to-brand-500 hover:from-brand-500 hover:to-brand-400 border border-brand-400/50 transition-all transform hover:-translate-y-1 shadow-premium w-full sm:w-auto text-center">
                        Explore Our Services
                    </a>
                    <div class="flex items-center justify-center sm:justify-start gap-4 text-white p-4 sm:p-0 bg-slate-800/30 sm:bg-transparent rounded-2xl sm:rounded-none backdrop-blur-sm sm:backdrop-blur-none border sm:border-none border-white/10 mt-4 sm:mt-0">
                        <div class="flex -space-x-4">
                            <img class="w-10 h-10 sm:w-12 sm:h-12 rounded-full border-2 border-slate-900 object-cover shadow-md" src="https://images.unsplash.com/photo-1559839734-2b71ea197ec2?auto=format&fit=crop&q=80&w=100&h=100" alt="Doctor">
                            <img class="w-10 h-10 sm:w-12 sm:h-12 rounded-full border-2 border-slate-900 object-cover shadow-md" src="https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?auto=format&fit=crop&q=80&w=100&h=100" alt="Doctor">
                            <img class="w-10 h-10 sm:w-12 sm:h-12 rounded-full border-2 border-slate-900 object-cover shadow-md" src="https://images.unsplash.com/photo-1594824476967-48c8b964273f?auto=format&fit=crop&q=80&w=100&h=100" alt="Doctor">
                        </div>
                        <div class="text-sm font-medium">
                            <span class="block text-brand-300 font-extrabold text-lg sm:text-xl leading-none">50+</span>
                            <span class="text-slate-300 text-xs sm:text-sm">Specialists</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Floating Appointment Card -->
            <div class="lg:col-span-5 relative mt-12 lg:mt-0 hidden lg:block" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                <div class="absolute -inset-1 bg-gradient-to-r from-brand-400 to-brand-600 rounded-[2.5rem] blur-xl opacity-30 animate-pulse-slow"></div>
                <div class="relative glass-dark p-8 rounded-[2rem] shadow-2xl">
                    <h3 class="text-2xl font-bold text-white mb-2 font-display">Book a Consultation</h3>
                    <p class="text-brand-200 mb-8 text-sm">Skip the queue. Secure your slot online.</p>
                    
                    <form class="space-y-5">
                        <div>
                            <input type="text" placeholder="Full Name" class="w-full bg-slate-800/50 border border-slate-700/50 rounded-xl px-5 py-3.5 text-white placeholder-slate-400 focus:outline-none focus:border-brand-400 focus:ring-1 focus:ring-brand-400 transition-all text-sm shadow-inner">
                        </div>
                        <div>
                            <input type="tel" placeholder="Phone Number" class="w-full bg-slate-800/50 border border-slate-700/50 rounded-xl px-5 py-3.5 text-white placeholder-slate-400 focus:outline-none focus:border-brand-400 focus:ring-1 focus:ring-brand-400 transition-all text-sm shadow-inner">
                        </div>
                        <div class="relative">
                            <select class="w-full bg-slate-800/50 border border-slate-700/50 rounded-xl px-5 py-3.5 text-slate-300 focus:outline-none focus:border-brand-400 focus:ring-1 focus:ring-brand-400 transition-all appearance-none text-sm shadow-inner cursor-pointer">
                                <option value="" disabled selected>Select Department</option>
                                <option value="cardio" class="text-slate-900">Cardiology</option>
                                <option value="neuro" class="text-slate-900">Neurology</option>
                                <option value="ortho" class="text-slate-900">Orthopedics</option>
                                <option value="pediatrics" class="text-slate-900">Pediatrics</option>
                                <option value="general" class="text-slate-900">General Checkup</option>
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-5 text-slate-400">
                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                            </div>
                        </div>
                        <button type="button" class="w-full mt-2 bg-white text-slate-900 hover:bg-slate-100 font-bold py-4 px-8 rounded-xl shadow-[0_0_20px_rgba(255,255,255,0.2)] hover:shadow-[0_0_30px_rgba(255,255,255,0.4)] transition-all transform hover:-translate-y-1">
                            Confirm Appointment
                        </button>
                    </form>
                    <p class="text-[0.7rem] text-center text-slate-400 mt-5 flex items-center justify-center gap-1.5 uppercase tracking-wider font-bold">
                        <svg class="w-3.5 h-3.5 text-emerald-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"></path></svg>
                        Your data is strictly confidential
                    </p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Wave Bottom -->
    <div class="absolute bottom-0 left-0 right-0 w-full overflow-hidden leading-none translate-y-[1px]">
        <svg class="relative block w-full h-[30px] md:h-[60px] lg:h-[100px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" preserveAspectRatio="none">
            <path class="fill-slate-50" fill-opacity="1" d="M0,128L48,144C96,160,192,192,288,197.3C384,203,480,181,576,160C672,139,768,117,864,128C960,139,1056,181,1152,192C1248,203,1344,181,1392,170.7L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>
    </div>
</section>

<!-- Trust Bar -->
<div class="bg-slate-50 pb-16 pt-8 lg:pt-12 relative z-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-center text-xs sm:text-sm font-bold text-slate-400 uppercase tracking-[0.2em] mb-8" data-aos="fade-up">Recognized for Excellence</p>
        <div class="flex flex-wrap justify-center items-center gap-4 sm:gap-6" data-aos="fade-up" data-aos-delay="100">
            
            <!-- Badge 1 -->
            <div class="flex items-center gap-3 sm:gap-4 px-4 sm:px-6 py-3 sm:py-4 bg-white rounded-2xl shadow-[0_4px_20px_rgb(0,0,0,0.03)] border border-slate-100 hover:border-blue-400 hover:shadow-[0_8px_30px_rgba(59,130,246,0.15)] hover:-translate-y-1 transition-all duration-300 group cursor-default w-full sm:w-auto">
                <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-full bg-blue-50 text-blue-600 flex items-center justify-center group-hover:bg-blue-600 group-hover:text-white transition-colors duration-300 flex-shrink-0">
                    <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path></svg>
                </div>
                <div class="flex flex-col">
                    <span class="text-[0.65rem] sm:text-xs text-slate-500 font-semibold uppercase tracking-wider">Accredited</span>
                    <span class="font-extrabold text-slate-900 font-display text-base sm:text-lg">JCI Certified</span>
                </div>
            </div>

            <!-- Badge 2 -->
            <div class="flex items-center gap-3 sm:gap-4 px-4 sm:px-6 py-3 sm:py-4 bg-white rounded-2xl shadow-[0_4px_20px_rgb(0,0,0,0.03)] border border-slate-100 hover:border-emerald-400 hover:shadow-[0_8px_30px_rgba(16,185,129,0.15)] hover:-translate-y-1 transition-all duration-300 group cursor-default w-full sm:w-auto">
                <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-full bg-emerald-50 text-emerald-600 flex items-center justify-center group-hover:bg-emerald-600 group-hover:text-white transition-colors duration-300 flex-shrink-0">
                    <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                </div>
                <div class="flex flex-col">
                    <span class="text-[0.65rem] sm:text-xs text-slate-500 font-semibold uppercase tracking-wider">Standard</span>
                    <span class="font-extrabold text-slate-900 font-display text-base sm:text-lg">NABH</span>
                </div>
            </div>

            <!-- Badge 3 (Hidden on very small mobile for cleaner look) -->
            <div class="hidden sm:flex items-center gap-3 sm:gap-4 px-4 sm:px-6 py-3 sm:py-4 bg-white rounded-2xl shadow-[0_4px_20px_rgb(0,0,0,0.03)] border border-slate-100 hover:border-amber-400 hover:shadow-[0_8px_30px_rgba(245,158,11,0.15)] hover:-translate-y-1 transition-all duration-300 group cursor-default w-full sm:w-auto">
                <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-full bg-amber-50 text-amber-600 flex items-center justify-center group-hover:bg-amber-600 group-hover:text-white transition-colors duration-300 flex-shrink-0">
                    <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                </div>
                <div class="flex flex-col">
                    <span class="text-[0.65rem] sm:text-xs text-slate-500 font-semibold uppercase tracking-wider">Quality</span>
                    <span class="font-extrabold text-slate-900 font-display text-base sm:text-lg">ISO 9001</span>
                </div>
            </div>

            <!-- Badge 4 -->
            <div class="flex items-center gap-3 sm:gap-4 px-4 sm:px-6 py-3 sm:py-4 bg-white rounded-2xl shadow-[0_4px_20px_rgb(0,0,0,0.03)] border border-slate-100 hover:border-rose-400 hover:shadow-[0_8px_30px_rgba(244,63,94,0.15)] hover:-translate-y-1 transition-all duration-300 group cursor-default w-full sm:w-auto">
                <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-full bg-rose-50 text-rose-600 flex items-center justify-center group-hover:bg-rose-600 group-hover:text-white transition-colors duration-300 flex-shrink-0">
                    <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                </div>
                <div class="flex flex-col">
                    <span class="text-[0.65rem] sm:text-xs text-slate-500 font-semibold uppercase tracking-wider">Partners</span>
                    <span class="font-extrabold text-slate-900 font-display text-base sm:text-lg">WHO</span>
                </div>
            </div>
            
        </div>
    </div>
</div>

<!-- Advanced Features / Bento Box Grid -->
<section class="py-24 bg-slate-50 relative overflow-hidden">
    <!-- Decorative background elements -->
    <div class="absolute top-0 right-0 w-[40rem] h-[40rem] bg-brand-100 rounded-full blur-[100px] opacity-50 -z-10 translate-x-1/3 -translate-y-1/3 mobile-hide"></div>
    <div class="absolute bottom-0 left-0 w-[30rem] h-[30rem] bg-indigo-100 rounded-full blur-[80px] opacity-50 -z-10 -translate-x-1/3 translate-y-1/3 mobile-hide"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center max-w-3xl mx-auto mb-16 sm:mb-20" data-aos="fade-up">
            <h2 class="text-brand-600 font-extrabold tracking-widest uppercase mb-4 text-xs sm:text-sm animate-float">Our Expertise</h2>
            <p class="font-display text-4xl sm:text-5xl lg:text-6xl font-black text-slate-900 drop-shadow-sm leading-[1.1]">Comprehensive Care <br class="hidden sm:block"><span class="text-brand-600">Under One Roof</span></p>
        </div>

        <!-- Modern Bento Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6 auto-rows-[250px] sm:auto-rows-[280px]">
            
            <!-- Large Card 1 -->
            <div class="md:col-span-2 md:row-span-2 rounded-[2rem] sm:rounded-[2.5rem] relative overflow-hidden group shadow-[0_10px_40px_-15px_rgba(0,0,0,0.1)] border border-white hover:border-rose-300 hover:shadow-[0_20px_50px_-20px_rgba(244,63,94,0.4)] transition-all duration-500" data-aos="fade-up">
                <img src="https://images.unsplash.com/photo-1579684385127-1ef15d508118?auto=format&fit=crop&q=80&w=800" alt="Cardiology" class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-[1.5s] ease-out">
                <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-900/60 to-transparent opacity-90 group-hover:opacity-100 transition-opacity duration-500"></div>
                <div class="absolute bottom-0 left-0 p-8 sm:p-10 w-full">
                    <div class="w-12 h-12 sm:w-16 sm:h-16 bg-rose-500/90 rounded-2xl flex items-center justify-center text-white mb-6 backdrop-blur-md shadow-[0_0_20px_rgba(244,63,94,0.5)] transform group-hover:-translate-y-2 transition-transform duration-500">
                        <svg class="w-6 h-6 sm:w-8 sm:h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                    </div>
                    <h3 class="text-3xl sm:text-4xl font-display font-bold text-white mb-3">Heart Institute</h3>
                    <p class="text-slate-300 text-base sm:text-lg leading-relaxed max-w-md hidden md:block group-hover:text-white transition-colors duration-300">Advanced cardiac care featuring a 24/7 cath lab, state-of-the-art heart monitoring, and minimally invasive surgeries by top-tier cardiologists.</p>
                </div>
            </div>

            <!-- Small Card 1 -->
            <div class="rounded-[2rem] sm:rounded-[2.5rem] bg-white p-8 shadow-[0_10px_40px_-15px_rgba(0,0,0,0.05)] border border-slate-100 group hover:-translate-y-2 hover:border-violet-300 hover:shadow-[0_20px_40px_-15px_rgba(139,92,246,0.3)] transition-all duration-500 relative overflow-hidden flex flex-col justify-end" data-aos="fade-up" data-aos-delay="100">
                <div class="absolute top-0 right-0 w-32 h-32 bg-violet-50 rounded-bl-full -mr-16 -mt-16 group-hover:bg-violet-100 group-hover:scale-110 transition-all duration-500 ease-out"></div>
                <div class="w-12 h-12 bg-slate-50 text-violet-600 rounded-xl flex items-center justify-center mb-auto group-hover:bg-violet-600 group-hover:text-white transition-colors duration-300 relative z-10 shadow-sm">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                </div>
                <h3 class="text-xl sm:text-2xl font-black text-slate-900 mt-4 relative z-10 font-display">Diagnostics</h3>
                <p class="text-slate-500 text-sm sm:text-base mt-2 relative z-10 line-clamp-3">State-of-the-art imaging center equipped with high-res MRI, CT scans, and advanced ultrasound technology.</p>
            </div>

            <!-- Small Card 2 -->
            <div class="rounded-[2rem] sm:rounded-[2.5rem] bg-slate-900 p-8 shadow-[0_10px_40px_-15px_rgba(0,0,0,0.2)] border border-slate-800 group hover:-translate-y-2 hover:border-brand-500 hover:shadow-[0_20px_50px_-20px_rgba(14,165,233,0.4)] transition-all duration-500 relative overflow-hidden flex flex-col justify-end" data-aos="fade-up" data-aos-delay="200">
                <div class="absolute inset-0 bg-brand-500 opacity-0 group-hover:opacity-10 transition-opacity duration-500"></div>
                <div class="w-12 h-12 bg-white/10 text-white rounded-xl flex items-center justify-center mb-auto group-hover:bg-brand-500 group-hover:shadow-[0_0_20px_rgba(14,165,233,0.5)] transition-all duration-300 relative z-10">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                </div>
                <h3 class="text-xl sm:text-2xl font-black text-white mt-4 relative z-10 font-display">Emergency 24/7</h3>
                <p class="text-slate-400 text-sm sm:text-base mt-2 relative z-10 line-clamp-3">Level 1 trauma center ready around the clock with rapid response teams.</p>
            </div>

            <!-- Medium Card 1 -->
            <div class="md:col-span-2 rounded-[2rem] sm:rounded-[2.5rem] relative overflow-hidden group shadow-[0_10px_40px_-15px_rgba(0,0,0,0.05)] bg-gradient-to-br from-indigo-50 to-white flex items-center p-8 sm:p-10 border border-indigo-100 hover:border-indigo-300 hover:shadow-[0_20px_50px_-20px_rgba(99,102,241,0.3)] hover:-translate-y-2 transition-all duration-500" data-aos="fade-up" data-aos-delay="300">
                <div class="absolute right-0 bottom-0 w-64 h-64 bg-indigo-200 rounded-full blur-[80px] opacity-40 group-hover:scale-150 group-hover:opacity-60 transition-all duration-700 ease-out"></div>
                <div class="relative z-10 flex-1">
                    <h3 class="text-2xl sm:text-3xl font-black text-slate-900 mb-3 font-display">Neurology & Brain Spine</h3>
                    <p class="text-slate-600 max-w-sm mb-6 text-sm sm:text-base leading-relaxed">Pioneering treatments for complex neurological disorders using AI-assisted surgical techniques and advanced therapies.</p>
                    <a href="services.php" class="inline-flex items-center text-indigo-600 font-bold hover:text-indigo-700 group/link text-sm sm:text-base">Read More <span class="ml-2 group-hover/link:translate-x-2 transition-transform">&rarr;</span></a>
                </div>
                <div class="relative z-10 hidden sm:block">
                    <div class="w-24 h-24 bg-white rounded-[2rem] flex items-center justify-center shadow-xl border border-indigo-50 text-indigo-500 transform group-hover:rotate-12 transition-transform duration-500">
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Deep Dive / Dark Technology Section -->
<section class="py-24 sm:py-32 bg-slate-950 relative overflow-hidden">
    <!-- Abstract mesh background - Hidden on mobile to save performance -->
    <div class="absolute inset-0 opacity-20 mobile-hide">
        <div class="absolute top-0 -left-1/4 w-1/2 h-full bg-fuchsia-600 blur-[150px] rounded-full mix-blend-screen animate-pulse-slow"></div>
        <div class="absolute bottom-0 -right-1/4 w-1/2 h-full bg-cyan-600 blur-[150px] rounded-full mix-blend-screen animate-pulse-slow" style="animation-delay: 2s;"></div>
    </div>

    <!-- Fallback background for mobile -->
    <div class="absolute inset-0 bg-gradient-to-br from-slate-900 via-slate-950 to-slate-900 sm:hidden"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid lg:grid-cols-2 gap-12 sm:gap-16 items-center">
            <div data-aos="fade-right">
                <span class="text-brand-400 font-bold tracking-widest uppercase text-xs sm:text-sm mb-4 block">Innovation in Healthcare</span>
                <h2 class="text-4xl sm:text-5xl lg:text-6xl font-black text-white font-display mb-8 leading-tight">
                    Driven by <span class="text-transparent bg-clip-text bg-gradient-to-r from-fuchsia-400 to-cyan-300">Technology</span>,<br class="hidden sm:block"> Delivered with Empathy.
                </h2>
                <div class="space-y-6 sm:space-y-8">
                    <div class="flex gap-4 sm:gap-5 group cursor-default bg-slate-900/50 sm:bg-transparent p-4 sm:p-0 rounded-2xl sm:rounded-none border sm:border-none border-slate-800 transition-colors hover:bg-slate-900">
                        <div class="flex-shrink-0 w-12 h-12 sm:w-14 sm:h-14 rounded-2xl bg-slate-800 border border-slate-700 flex items-center justify-center text-fuchsia-400 shadow-[0_0_15px_rgba(232,121,249,0.15)] group-hover:shadow-[0_0_25px_rgba(232,121,249,0.4)] group-hover:border-fuchsia-500/50 transition-all duration-300">
                            <svg class="w-6 h-6 sm:w-7 sm:h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                        </div>
                        <div>
                            <h4 class="text-lg sm:text-xl font-bold text-white mb-1.5 group-hover:text-fuchsia-300 transition-colors">Robotic Surgery</h4>
                            <p class="text-slate-400 text-sm sm:text-base leading-relaxed">Da Vinci surgical systems allowing for microscopic precision, smaller incisions, and significantly faster recovery times.</p>
                        </div>
                    </div>
                    <div class="flex gap-4 sm:gap-5 group cursor-default bg-slate-900/50 sm:bg-transparent p-4 sm:p-0 rounded-2xl sm:rounded-none border sm:border-none border-slate-800 transition-colors hover:bg-slate-900">
                        <div class="flex-shrink-0 w-12 h-12 sm:w-14 sm:h-14 rounded-2xl bg-slate-800 border border-slate-700 flex items-center justify-center text-cyan-400 shadow-[0_0_15px_rgba(34,211,238,0.15)] group-hover:shadow-[0_0_25px_rgba(34,211,238,0.4)] group-hover:border-cyan-500/50 transition-all duration-300">
                            <svg class="w-6 h-6 sm:w-7 sm:h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path></svg>
                        </div>
                        <div>
                            <h4 class="text-lg sm:text-xl font-bold text-white mb-1.5 group-hover:text-cyan-300 transition-colors">AI Diagnostics</h4>
                            <p class="text-slate-400 text-sm sm:text-base leading-relaxed">Artificial Intelligence integrated imaging systems that detect anomalies with 99.9% accuracy before human eyes can.</p>
                        </div>
                    </div>
                    <div class="flex gap-4 sm:gap-5 group cursor-default bg-slate-900/50 sm:bg-transparent p-4 sm:p-0 rounded-2xl sm:rounded-none border sm:border-none border-slate-800 transition-colors hover:bg-slate-900">
                        <div class="flex-shrink-0 w-12 h-12 sm:w-14 sm:h-14 rounded-2xl bg-slate-800 border border-slate-700 flex items-center justify-center text-emerald-400 shadow-[0_0_15px_rgba(52,211,153,0.15)] group-hover:shadow-[0_0_25px_rgba(52,211,153,0.4)] group-hover:border-emerald-500/50 transition-all duration-300">
                            <svg class="w-6 h-6 sm:w-7 sm:h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                        </div>
                        <div>
                            <h4 class="text-lg sm:text-xl font-bold text-white mb-1.5 group-hover:text-emerald-300 transition-colors">3D Bioprinting Lab</h4>
                            <p class="text-slate-400 text-sm sm:text-base leading-relaxed">In-house facility for creating custom biological scaffolding and prosthetics tailored to individual patient anatomy.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="relative mt-12 lg:mt-0 hidden lg:block" data-aos="fade-left" data-aos-delay="200">
                <div class="absolute inset-0 bg-cyan-500 rounded-[3rem] blur-[100px] opacity-20 animate-pulse-slow"></div>
                <div class="relative rounded-[2.5rem] overflow-hidden border border-white/10 shadow-[0_20px_50px_-15px_rgba(0,0,0,0.5)] group">
                    <img src="https://images.unsplash.com/photo-1516549655169-df83a0774514?auto=format&fit=crop&q=80&w=1000" alt="Advanced Tech" class="w-full h-[600px] object-cover group-hover:scale-105 transition-transform duration-[2s]">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-900/20 to-transparent"></div>
                    <!-- Glass overlay stats -->
                    <div class="absolute bottom-8 left-8 right-8 glass-dark p-6 rounded-3xl flex justify-around text-center divide-x divide-white/10 transform translate-y-4 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500">
                        <div class="px-4">
                            <div class="text-3xl font-black text-white mb-1 font-display">0%</div>
                            <div class="text-[0.65rem] text-brand-300 uppercase font-bold tracking-widest">Infection Rate</div>
                        </div>
                        <div class="px-4">
                            <div class="text-3xl font-black text-white mb-1 font-display">24h</div>
                            <div class="text-[0.65rem] text-brand-300 uppercase font-bold tracking-widest">Lab Results</div>
                        </div>
                        <div class="px-4">
                            <div class="text-3xl font-black text-white mb-1 font-display">3x</div>
                            <div class="text-[0.65rem] text-brand-300 uppercase font-bold tracking-widest">Faster Recovery</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Specialists -->
<section class="py-24 sm:py-32 bg-slate-50 overflow-hidden relative">
    <!-- Subtle Background Pattern -->
    <div class="absolute inset-0 opacity-[0.03] bg-[radial-gradient(#0ea5e9_1px,transparent_1px)] [background-size:20px_20px]"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-8">
            <div class="max-w-2xl" data-aos="fade-right">
                <h2 class="text-brand-600 font-extrabold tracking-widest uppercase mb-3 text-xs sm:text-sm">Medical Team</h2>
                <p class="text-4xl sm:text-5xl lg:text-6xl font-black text-slate-900 font-display leading-[1.1]">Meet Our Leading <span class="text-brand-600">Specialists</span></p>
            </div>
            <a href="about.php" class="px-8 py-4 bg-white border-2 border-brand-100 text-brand-700 font-bold rounded-full hover:bg-brand-50 hover:border-brand-200 hover:text-brand-800 transition-all shadow-sm hover:shadow-md transform hover:-translate-y-1 text-center w-full md:w-auto" data-aos="fade-left">View All Doctors</a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-6 xl:gap-8">
            <!-- Doctor 1 -->
            <div class="group relative rounded-[2rem] overflow-hidden shadow-[0_10px_30px_-15px_rgba(0,0,0,0.1)] border border-white bg-white hover:border-rose-200 hover:-translate-y-4 hover:shadow-[0_20px_40px_-15px_rgba(244,63,94,0.3)] transition-all duration-500" data-aos="fade-up" data-aos-delay="100">
                <div class="aspect-[4/5] overflow-hidden relative bg-slate-100">
                    <img src="https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?auto=format&fit=crop&q=80&w=600" alt="Dr. Sarah Jenkins" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700 ease-out">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-900/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                        <div class="flex gap-3 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                            <a href="#" class="w-10 h-10 rounded-full bg-white/20 backdrop-blur-md text-white flex items-center justify-center hover:bg-rose-500 transition-colors shadow-md">in</a>
                        </div>
                    </div>
                </div>
                <div class="p-6 relative z-10 transition-colors">
                    <h3 class="text-xl font-black text-slate-900 mb-1 font-display">Dr. Sarah Jenkins</h3>
                    <p class="text-rose-500 font-bold text-xs sm:text-sm mb-3 uppercase tracking-wider">Chief of Cardiology</p>
                    <p class="text-slate-500 text-sm line-clamp-2 leading-relaxed">Over 20 years of experience in minimally invasive cardiac surgery and heart transplants.</p>
                </div>
            </div>

            <!-- Doctor 2 -->
            <div class="group relative rounded-[2rem] overflow-hidden shadow-[0_10px_30px_-15px_rgba(0,0,0,0.1)] border border-white bg-white hover:border-indigo-200 hover:-translate-y-4 hover:shadow-[0_20px_40px_-15px_rgba(99,102,241,0.3)] transition-all duration-500" data-aos="fade-up" data-aos-delay="200">
                <div class="aspect-[4/5] overflow-hidden relative bg-slate-100">
                    <img src="https://images.unsplash.com/photo-1559839734-2b71ea197ec2?auto=format&fit=crop&q=80&w=600" alt="Dr. Michael Chen" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700 ease-out">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-900/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                        <div class="flex gap-3 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                            <a href="#" class="w-10 h-10 rounded-full bg-white/20 backdrop-blur-md text-white flex items-center justify-center hover:bg-indigo-500 transition-colors shadow-md">in</a>
                        </div>
                    </div>
                </div>
                <div class="p-6 relative z-10 transition-colors">
                    <h3 class="text-xl font-black text-slate-900 mb-1 font-display">Dr. Michael Chen</h3>
                    <p class="text-indigo-500 font-bold text-xs sm:text-sm mb-3 uppercase tracking-wider">Head of Neurology</p>
                    <p class="text-slate-500 text-sm line-clamp-2 leading-relaxed">Pioneer in AI-assisted brain surgery and treatment of complex neurodegenerative diseases.</p>
                </div>
            </div>

            <!-- Doctor 3 -->
            <div class="group relative rounded-[2rem] overflow-hidden shadow-[0_10px_30px_-15px_rgba(0,0,0,0.1)] border border-white bg-white hover:border-orange-200 hover:-translate-y-4 hover:shadow-[0_20px_40px_-15px_rgba(249,115,22,0.3)] transition-all duration-500" data-aos="fade-up" data-aos-delay="300">
                <div class="aspect-[4/5] overflow-hidden relative bg-slate-100">
                    <img src="https://images.unsplash.com/photo-1594824476967-48c8b964273f?auto=format&fit=crop&q=80&w=600" alt="Dr. Emily Rodriguez" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700 ease-out">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-900/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                        <div class="flex gap-3 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                            <a href="#" class="w-10 h-10 rounded-full bg-white/20 backdrop-blur-md text-white flex items-center justify-center hover:bg-orange-500 transition-colors shadow-md">in</a>
                        </div>
                    </div>
                </div>
                <div class="p-6 relative z-10 transition-colors">
                    <h3 class="text-xl font-black text-slate-900 mb-1 font-display">Dr. Emily Rodriguez</h3>
                    <p class="text-orange-500 font-bold text-xs sm:text-sm mb-3 uppercase tracking-wider">Pediatric Specialist</p>
                    <p class="text-slate-500 text-sm line-clamp-2 leading-relaxed">Dedicated to neonatal care and pediatric oncology with compassionate, family-centered approaches.</p>
                </div>
            </div>

            <!-- Doctor 4 -->
            <div class="group relative rounded-[2rem] overflow-hidden shadow-[0_10px_30px_-15px_rgba(0,0,0,0.1)] border border-white bg-white hover:border-teal-200 hover:-translate-y-4 hover:shadow-[0_20px_40px_-15px_rgba(20,184,166,0.3)] transition-all duration-500" data-aos="fade-up" data-aos-delay="400">
                <div class="aspect-[4/5] overflow-hidden relative bg-slate-100">
                    <img src="https://images.unsplash.com/photo-1622253692010-333f2da6031d?auto=format&fit=crop&q=80&w=600" alt="Dr. James Wilson" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700 ease-out">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-900/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                        <div class="flex gap-3 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                            <a href="#" class="w-10 h-10 rounded-full bg-white/20 backdrop-blur-md text-white flex items-center justify-center hover:bg-teal-500 transition-colors shadow-md">in</a>
                        </div>
                    </div>
                </div>
                <div class="p-6 relative z-10 transition-colors">
                    <h3 class="text-xl font-black text-slate-900 mb-1 font-display">Dr. James Wilson</h3>
                    <p class="text-teal-500 font-bold text-xs sm:text-sm mb-3 uppercase tracking-wider">Orthopedic Surgeon</p>
                    <p class="text-slate-500 text-sm line-clamp-2 leading-relaxed">Specializing in sports injuries and joint replacement using robotic-assisted techniques.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="py-24 sm:py-32 bg-white relative overflow-hidden">
    <!-- Background Glows (Hidden on mobile) -->
    <div class="absolute top-1/2 left-0 -translate-y-1/2 -translate-x-1/2 w-[30rem] h-[30rem] bg-amber-100 rounded-full blur-[100px] opacity-40 mobile-hide"></div>
    <div class="absolute top-1/2 right-0 -translate-y-1/2 translate-x-1/2 w-[30rem] h-[30rem] bg-emerald-100 rounded-full blur-[100px] opacity-40 mobile-hide"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16 sm:mb-20" data-aos="fade-up">
            <h2 class="text-brand-600 font-extrabold tracking-widest uppercase mb-4 text-xs sm:text-sm animate-float">Patient Stories</h2>
            <p class="font-display text-4xl sm:text-5xl lg:text-6xl font-black text-slate-900 drop-shadow-sm leading-[1.1]">Real People, <br class="hidden sm:block"><span class="text-brand-600">Real Recovery.</span></p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Review 1 -->
            <div class="glass p-8 sm:p-10 rounded-[2rem] shadow-[0_10px_40px_-15px_rgba(0,0,0,0.05)] border border-slate-100 hover:border-brand-300 hover:shadow-[0_20px_50px_-20px_rgba(2,132,199,0.3)] transition-all duration-500 relative group flex flex-col h-full transform hover:-translate-y-2" data-aos="fade-up" data-aos-delay="100">
                <div class="text-brand-100 absolute -top-2 right-6 text-7xl sm:text-8xl font-serif group-hover:text-brand-200 transition-colors leading-none pointer-events-none">"</div>
                <div class="flex text-amber-400 mb-6 relative z-10 text-lg sm:text-xl drop-shadow-sm">
                    &#9733;&#9733;&#9733;&#9733;&#9733;
                </div>
                <p class="text-slate-700 font-medium text-base sm:text-lg italic mb-8 relative z-10 flex-grow leading-relaxed">"The staff at Cityview Medical Center went above and beyond. The facilities are incredibly modern, and Dr. Jenkins saved my life with her quick diagnosis."</p>
                <div class="flex items-center gap-4 relative z-10 pt-6 border-t border-slate-100">
                    <img src="https://i.pravatar.cc/150?img=11" alt="Avatar" class="w-12 h-12 sm:w-14 sm:h-14 rounded-full border-2 border-white shadow-md object-cover">
                    <div>
                        <h4 class="font-display font-black text-slate-900 text-base sm:text-lg">Michael R.</h4>
                        <p class="text-xs sm:text-sm text-brand-600 font-bold uppercase tracking-wider">Cardiology Patient</p>
                    </div>
                </div>
            </div>

            <!-- Review 2 -->
            <div class="glass p-8 sm:p-10 rounded-[2rem] shadow-[0_10px_40px_-15px_rgba(0,0,0,0.05)] border border-slate-100 hover:border-brand-300 hover:shadow-[0_20px_50px_-20px_rgba(2,132,199,0.3)] transition-all duration-500 relative group flex flex-col h-full transform md:-translate-y-8 hover:-translate-y-10" data-aos="fade-up" data-aos-delay="200">
                <div class="text-brand-100 absolute -top-2 right-6 text-7xl sm:text-8xl font-serif group-hover:text-brand-200 transition-colors leading-none pointer-events-none">"</div>
                <div class="flex text-amber-400 mb-6 relative z-10 text-lg sm:text-xl drop-shadow-sm">
                    &#9733;&#9733;&#9733;&#9733;&#9733;
                </div>
                <p class="text-slate-700 font-medium text-base sm:text-lg italic mb-8 relative z-10 flex-grow leading-relaxed">"I brought my daughter to the pediatrics ward, and the environment was so welcoming. It didn't feel like a hospital at all. Truly exceptional care."</p>
                <div class="flex items-center gap-4 relative z-10 pt-6 border-t border-slate-100">
                    <img src="https://i.pravatar.cc/150?img=9" alt="Avatar" class="w-12 h-12 sm:w-14 sm:h-14 rounded-full border-2 border-white shadow-md object-cover">
                    <div>
                        <h4 class="font-display font-black text-slate-900 text-base sm:text-lg">Sarah T.</h4>
                        <p class="text-xs sm:text-sm text-brand-600 font-bold uppercase tracking-wider">Mother of Patient</p>
                    </div>
                </div>
            </div>

            <!-- Review 3 -->
            <div class="glass p-8 sm:p-10 rounded-[2rem] shadow-[0_10px_40px_-15px_rgba(0,0,0,0.05)] border border-slate-100 hover:border-brand-300 hover:shadow-[0_20px_50px_-20px_rgba(2,132,199,0.3)] transition-all duration-500 relative group flex flex-col h-full transform hover:-translate-y-2" data-aos="fade-up" data-aos-delay="300">
                <div class="text-brand-100 absolute -top-2 right-6 text-7xl sm:text-8xl font-serif group-hover:text-brand-200 transition-colors leading-none pointer-events-none">"</div>
                <div class="flex text-amber-400 mb-6 relative z-10 text-lg sm:text-xl drop-shadow-sm">
                    &#9733;&#9733;&#9733;&#9733;&#9733;
                </div>
                <p class="text-slate-700 font-medium text-base sm:text-lg italic mb-8 relative z-10 flex-grow leading-relaxed">"The 3D MRI facilities are state-of-the-art. The entire process was smooth, and the results were provided to my neurologist the very same day."</p>
                <div class="flex items-center gap-4 relative z-10 pt-6 border-t border-slate-100">
                    <img src="https://i.pravatar.cc/150?img=33" alt="Avatar" class="w-12 h-12 sm:w-14 sm:h-14 rounded-full border-2 border-white shadow-md object-cover">
                    <div>
                        <h4 class="font-display font-black text-slate-900 text-base sm:text-lg">David J.</h4>
                        <p class="text-xs sm:text-sm text-brand-600 font-bold uppercase tracking-wider">Neurology Patient</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Premium CTA Section -->
<section class="py-24 sm:py-32 relative overflow-hidden bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="relative rounded-[2.5rem] sm:rounded-[3rem] overflow-hidden bg-gradient-to-br from-brand-600 via-brand-500 to-brand-800 shadow-[0_20px_50px_-15px_rgba(2,132,199,0.5)] border border-brand-400/30">
            <!-- Decorative Elements -->
            <div class="absolute top-0 right-0 -mr-20 -mt-20 w-72 h-72 rounded-full bg-white opacity-20 blur-3xl mix-blend-overlay"></div>
            <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-96 h-96 rounded-full bg-brand-900 opacity-40 blur-3xl mix-blend-overlay"></div>
            
            <div class="relative z-10 px-6 py-16 sm:px-16 sm:py-24 lg:flex lg:items-center lg:justify-between text-center lg:text-left">
                <div class="lg:w-0 lg:flex-1" data-aos="fade-right">
                    <h2 class="text-3xl font-black tracking-tight text-white sm:text-5xl lg:text-6xl font-display mb-4 sm:mb-6 leading-tight">
                        <span class="block drop-shadow-md">Ready to take control?</span>
                        <span class="block text-transparent bg-clip-text bg-gradient-to-r from-brand-100 to-white mt-2 drop-shadow-sm">Schedule your consultation.</span>
                    </h2>
                    <p class="max-w-2xl mx-auto lg:mx-0 text-base sm:text-xl text-brand-50 font-medium leading-relaxed">Join thousands of patients who trust Cityview Medical Center. Our top-tier specialists are ready to help you live a healthier life.</p>
                </div>
                <div class="mt-10 sm:mt-12 flex justify-center lg:mt-0 lg:flex-shrink-0 lg:ml-12" data-aos="zoom-in" data-aos-delay="200">
                    <a href="contact.php" class="inline-flex items-center justify-center px-8 sm:px-10 py-4 sm:py-5 border border-transparent text-lg sm:text-xl font-bold rounded-full text-brand-700 bg-white hover:bg-brand-50 transition-all duration-300 shadow-[0_0_30px_rgba(255,255,255,0.4)] hover:shadow-[0_0_50px_rgba(255,255,255,0.6)] transform hover:-translate-y-2 hover:scale-105 w-full sm:w-auto">
                        Book Appointment Now
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
