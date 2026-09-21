<?php include 'includes/header.php'; ?>

<!-- Enhanced Hero Section -->
<section class="relative bg-gray-900 min-h-screen flex items-center pt-24 lg:pt-0">
    <!-- Animated Image Background -->
    <div class="absolute inset-0 w-full h-full overflow-hidden bg-gray-900">
        <div class="absolute inset-0 w-full h-full bg-cover bg-center opacity-30 animate-ken-burns" style="background-image: url('assets/images/hero-bg.jpg');"></div>
        <!-- Complex Gradient Overlay for Depth -->
        <div class="absolute inset-0 bg-gradient-to-r from-gray-900 via-gray-900/80 to-transparent"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-transparent to-brand-900/40 mix-blend-multiply"></div>
    </div>
    
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full pb-48 lg:pb-40 pt-8 lg:pt-20">
        <div class="grid lg:grid-cols-12 gap-12 items-center">
            <!-- Hero Text -->
            <div class="lg:col-span-7 pt-4 lg:pt-10" data-aos="fade-right">
                <div class="inline-flex items-center gap-2 py-2 px-4 rounded-full bg-emerald-500/20 border border-emerald-400/30 text-emerald-300 text-sm font-bold tracking-widest uppercase mb-8 backdrop-blur-md shadow-[0_0_15px_rgba(16,185,129,0.3)]">
                    <span class="relative flex h-3 w-3">
                      <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                      <span class="relative inline-flex rounded-full h-3 w-3 bg-emerald-500"></span>
                    </span>
                    #1 Healthcare Provider
                </div>
                <h1 class="font-display text-5xl tracking-tight font-black text-white sm:text-6xl md:text-7xl lg:text-[5.5rem] leading-[1.1] mb-8 drop-shadow-2xl">
                    Healing Hands.<br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-300 via-brand-100 to-white animate-pulse-glow">Advanced Care.</span>
                </h1>
                <p class="text-lg text-gray-300 md:text-xl mb-10 max-w-2xl leading-relaxed border-l-4 border-brand-500 pl-6">
                    Experience world-class medical care with renowned specialists, AI-driven diagnostics, and state-of-the-art facilities designed for your complete and rapid recovery.
                </p>
                <div class="flex flex-col sm:flex-row gap-5 mt-8">
                    <a href="services.php" class="inline-flex items-center justify-center px-8 py-4 text-base font-bold rounded-full text-white bg-white/10 hover:bg-white/20 border border-white/20 backdrop-blur-md transition-all transform hover:-translate-y-1 shadow-[0_0_20px_rgba(255,255,255,0.1)] hover:shadow-[0_0_30px_rgba(255,255,255,0.2)]">
                        Explore Our Services
                    </a>
                    <div class="flex items-center gap-4 text-white pl-4 sm:pl-0">
                        <div class="flex -space-x-4">
                            <img class="w-12 h-12 rounded-full border-2 border-gray-900 object-cover" src="https://images.unsplash.com/photo-1559839734-2b71ea197ec2?auto=format&fit=crop&q=80&w=100&h=100" alt="Doctor">
                            <img class="w-12 h-12 rounded-full border-2 border-gray-900 object-cover" src="https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?auto=format&fit=crop&q=80&w=100&h=100" alt="Doctor">
                            <img class="w-12 h-12 rounded-full border-2 border-gray-900 object-cover" src="https://images.unsplash.com/photo-1594824476967-48c8b964273f?auto=format&fit=crop&q=80&w=100&h=100" alt="Doctor">
                        </div>
                        <div class="text-sm font-medium">
                            <span class="block text-brand-300 font-bold text-lg leading-none">50+</span>
                            Specialists
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Floating Appointment Card -->
            <div class="lg:col-span-5 relative mt-12 lg:mt-0 hidden md:block" data-aos="fade-left" data-aos-delay="200">
                <div class="absolute -inset-1 bg-gradient-to-r from-brand-400 to-brand-600 rounded-[2.5rem] blur opacity-30 animate-pulse"></div>
                <div class="relative glass-card bg-white/10 backdrop-blur-2xl border border-white/20 p-8 rounded-[2rem] shadow-2xl">
                    <h3 class="text-2xl font-bold text-white mb-2">Book a Consultation</h3>
                    <p class="text-brand-100 mb-8 text-sm">Skip the queue. Secure your slot online.</p>
                    
                    <form class="space-y-4">
                        <div>
                            <input type="text" placeholder="Full Name" class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white placeholder-gray-400 focus:outline-none focus:border-brand-400 focus:ring-1 focus:ring-brand-400 transition-all">
                        </div>
                        <div>
                            <input type="tel" placeholder="Phone Number" class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white placeholder-gray-400 focus:outline-none focus:border-brand-400 focus:ring-1 focus:ring-brand-400 transition-all">
                        </div>
                        <div>
                            <select class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-gray-400 focus:outline-none focus:border-brand-400 focus:ring-1 focus:ring-brand-400 transition-all appearance-none">
                                <option value="" disabled selected>Select Department</option>
                                <option value="cardio" class="text-gray-900">Cardiology</option>
                                <option value="neuro" class="text-gray-900">Neurology</option>
                                <option value="ortho" class="text-gray-900">Orthopedics</option>
                                <option value="pediatrics" class="text-gray-900">Pediatrics</option>
                                <option value="general" class="text-gray-900">General Checkup</option>
                            </select>
                        </div>
                        <button type="button" class="w-full mt-4 bg-gradient-to-r from-brand-500 to-brand-600 hover:from-brand-400 hover:to-brand-500 text-white font-bold py-4 px-8 rounded-xl shadow-[0_0_20px_rgba(14,165,233,0.4)] transition-all transform hover:-translate-y-1">
                            Confirm Appointment
                        </button>
                    </form>
                    <p class="text-xs text-center text-gray-400 mt-4 flex items-center justify-center gap-1">
                        <svg class="w-4 h-4 text-green-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"></path></svg>
                        Your data is strictly confidential
                    </p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Wave Bottom -->
    <div class="absolute bottom-0 left-0 right-0 w-full overflow-hidden leading-none translate-y-[1px]">
        <svg class="relative block w-full h-[60px] md:h-[100px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" preserveAspectRatio="none">
            <path class="fill-white" fill-opacity="1" d="M0,128L48,144C96,160,192,192,288,197.3C384,203,480,181,576,160C672,139,768,117,864,128C960,139,1056,181,1152,192C1248,203,1344,181,1392,170.7L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>
    </div>
</section>

<!-- Trust Bar -->
<div class="bg-white pb-20 pt-12 relative z-10 border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-center text-sm font-bold text-gray-400 uppercase tracking-[0.2em] mb-10" data-aos="fade-up">Recognized for Excellence</p>
        <div class="flex flex-wrap justify-center items-center gap-4 sm:gap-6" data-aos="fade-up" data-aos-delay="100">
            
            <!-- Badge 1 -->
            <div class="flex items-center gap-4 px-6 py-4 bg-white rounded-2xl shadow-[0_4px_20px_rgb(0,0,0,0.03)] border border-gray-200 hover:border-blue-400 hover:shadow-[0_8px_30px_rgba(59,130,246,0.15)] hover:-translate-y-1 transition-all duration-300 group cursor-default">
                <div class="w-12 h-12 rounded-full bg-blue-50 text-blue-600 flex items-center justify-center group-hover:bg-blue-600 group-hover:text-white transition-colors duration-300">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path></svg>
                </div>
                <div class="flex flex-col">
                    <span class="text-xs text-gray-500 font-semibold uppercase tracking-wider">Accredited</span>
                    <span class="font-extrabold text-gray-900 font-display text-lg">JCI Certified</span>
                </div>
            </div>

            <!-- Badge 2 -->
            <div class="flex items-center gap-4 px-6 py-4 bg-white rounded-2xl shadow-[0_4px_20px_rgb(0,0,0,0.03)] border border-gray-200 hover:border-emerald-400 hover:shadow-[0_8px_30px_rgba(16,185,129,0.15)] hover:-translate-y-1 transition-all duration-300 group cursor-default">
                <div class="w-12 h-12 rounded-full bg-emerald-50 text-emerald-600 flex items-center justify-center group-hover:bg-emerald-600 group-hover:text-white transition-colors duration-300">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                </div>
                <div class="flex flex-col">
                    <span class="text-xs text-gray-500 font-semibold uppercase tracking-wider">Standard</span>
                    <span class="font-extrabold text-gray-900 font-display text-lg">NABH</span>
                </div>
            </div>

            <!-- Badge 3 -->
            <div class="flex items-center gap-4 px-6 py-4 bg-white rounded-2xl shadow-[0_4px_20px_rgb(0,0,0,0.03)] border border-gray-200 hover:border-amber-400 hover:shadow-[0_8px_30px_rgba(245,158,11,0.15)] hover:-translate-y-1 transition-all duration-300 group cursor-default">
                <div class="w-12 h-12 rounded-full bg-amber-50 text-amber-600 flex items-center justify-center group-hover:bg-amber-600 group-hover:text-white transition-colors duration-300">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                </div>
                <div class="flex flex-col">
                    <span class="text-xs text-gray-500 font-semibold uppercase tracking-wider">Quality</span>
                    <span class="font-extrabold text-gray-900 font-display text-lg">ISO 9001</span>
                </div>
            </div>

            <!-- Badge 4 -->
            <div class="flex items-center gap-4 px-6 py-4 bg-white rounded-2xl shadow-[0_4px_20px_rgb(0,0,0,0.03)] border border-gray-200 hover:border-rose-400 hover:shadow-[0_8px_30px_rgba(244,63,94,0.15)] hover:-translate-y-1 transition-all duration-300 group cursor-default">
                <div class="w-12 h-12 rounded-full bg-rose-50 text-rose-600 flex items-center justify-center group-hover:bg-rose-600 group-hover:text-white transition-colors duration-300">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                </div>
                <div class="flex flex-col">
                    <span class="text-xs text-gray-500 font-semibold uppercase tracking-wider">Partners</span>
                    <span class="font-extrabold text-gray-900 font-display text-lg">WHO</span>
                </div>
            </div>
            
        </div>
    </div>
</div>

<!-- Advanced Features / Bento Box Grid -->
<section class="py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-20" data-aos="fade-up">
            <h2 class="text-brand-500 font-bold tracking-widest uppercase mb-3 text-sm animate-float">Our Expertise</h2>
            <p class="font-display text-4xl sm:text-5xl font-extrabold text-gray-900 drop-shadow-sm leading-tight">Comprehensive Care <br>Under One Roof</p>
        </div>

        <!-- Modern Bento Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6 auto-rows-[250px]">
            
            <!-- Large Card 1 -->
            <div class="md:col-span-2 md:row-span-2 rounded-[2rem] relative overflow-hidden group shadow-xl border border-transparent hover:border-rose-400 hover:shadow-[0_0_40px_rgba(244,63,94,0.3)] hover:-translate-y-2 transition-all duration-500" data-aos="fade-up">
                <img src="https://images.unsplash.com/photo-1579684385127-1ef15d508118?auto=format&fit=crop&q=80&w=800" alt="Cardiology" class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-1000">
                <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/60 to-transparent"></div>
                <div class="absolute bottom-0 left-0 p-8 sm:p-10 w-full">
                    <div class="w-14 h-14 bg-rose-500/90 rounded-2xl flex items-center justify-center text-white mb-6 backdrop-blur-sm shadow-[0_0_20px_rgba(244,63,94,0.5)]">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                    </div>
                    <h3 class="text-3xl font-display font-bold text-white mb-3">Heart Institute</h3>
                    <p class="text-gray-300 text-lg leading-relaxed max-w-md hidden md:block">Advanced cardiac care featuring a 24/7 cath lab, state-of-the-art heart monitoring, and minimally invasive surgeries by top-tier cardiologists.</p>
                </div>
            </div>

            <!-- Small Card 1 -->
            <div class="rounded-[2rem] bg-white p-8 shadow-xl border border-gray-200 group hover:-translate-y-2 hover:border-violet-400 hover:shadow-[0_0_30px_rgba(139,92,246,0.3)] transition-all duration-300 relative overflow-hidden flex flex-col justify-end" data-aos="fade-up" data-aos-delay="100">
                <div class="absolute top-0 right-0 w-32 h-32 bg-violet-50 rounded-bl-full -mr-16 -mt-16 group-hover:bg-violet-100 transition-colors"></div>
                <div class="w-12 h-12 bg-gray-50 text-violet-600 rounded-xl flex items-center justify-center mb-auto group-hover:bg-violet-600 group-hover:text-white transition-colors relative z-10 shadow-sm">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mt-4 relative z-10">Diagnostics</h3>
                <p class="text-gray-500 text-sm mt-2 relative z-10">State-of-the-art imaging center equipped with high-res MRI, CT scans, and advanced ultrasound technology.</p>
            </div>

            <!-- Small Card 2 -->
            <div class="rounded-[2rem] bg-gray-900 p-8 shadow-xl border border-gray-800 group hover:-translate-y-2 hover:border-red-500 hover:shadow-[0_0_30px_rgba(239,68,68,0.4)] transition-all duration-300 relative overflow-hidden flex flex-col justify-end" data-aos="fade-up" data-aos-delay="200">
                <div class="w-12 h-12 bg-white/10 text-white rounded-xl flex items-center justify-center mb-auto group-hover:bg-red-500 transition-colors relative z-10 shadow-glow">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                </div>
                <h3 class="text-xl font-bold text-white mt-4 relative z-10">Emergency 24/7</h3>
                <p class="text-gray-400 text-sm mt-2 relative z-10">Level 1 trauma center ready around the clock with rapid response teams.</p>
            </div>

            <!-- Medium Card 1 -->
            <div class="md:col-span-2 rounded-[2rem] relative overflow-hidden group shadow-xl bg-indigo-50 flex items-center p-8 sm:p-10 border border-indigo-100 hover:border-indigo-400 hover:shadow-[0_0_30px_rgba(99,102,241,0.3)] hover:-translate-y-2 transition-all duration-500" data-aos="fade-up" data-aos-delay="300">
                <div class="absolute right-0 bottom-0 w-64 h-64 bg-indigo-200 rounded-full blur-3xl opacity-50 group-hover:scale-150 transition-transform duration-700"></div>
                <div class="relative z-10 flex-1">
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Neurology & Brain Spine</h3>
                    <p class="text-gray-600 max-w-sm mb-6">Pioneering treatments for complex neurological disorders using AI-assisted surgical techniques and advanced therapies.</p>
                    <a href="services.php" class="inline-flex items-center text-indigo-600 font-bold hover:text-indigo-700 group/link">Read More <span class="ml-2 group-hover/link:translate-x-2 transition-transform">&rarr;</span></a>
                </div>
                <div class="relative z-10 hidden sm:block">
                    <div class="w-24 h-24 bg-white rounded-full flex items-center justify-center shadow-lg border-4 border-indigo-50 text-indigo-500">
                        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Deep Dive / Dark Technology Section -->
<section class="py-32 bg-gray-900 relative overflow-hidden">
    <!-- Abstract mesh background -->
    <div class="absolute inset-0 opacity-20">
        <div class="absolute top-0 -left-1/4 w-1/2 h-full bg-fuchsia-600 blur-[150px] rounded-full mix-blend-screen"></div>
        <div class="absolute bottom-0 -right-1/4 w-1/2 h-full bg-cyan-600 blur-[150px] rounded-full mix-blend-screen"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div data-aos="fade-right">
                <span class="text-brand-400 font-bold tracking-widest uppercase text-sm mb-4 block">Innovation in Healthcare</span>
                <h2 class="text-4xl sm:text-5xl font-extrabold text-white font-display mb-8 leading-tight">
                    Driven by <span class="text-transparent bg-clip-text bg-gradient-to-r from-fuchsia-400 to-cyan-300">Technology</span>, Delivered with Empathy.
                </h2>
                <div class="space-y-8">
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-12 h-12 rounded-xl bg-white/10 border border-white/20 flex items-center justify-center text-fuchsia-400 shadow-[0_0_15px_rgba(232,121,249,0.3)]">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                        </div>
                        <div>
                            <h4 class="text-xl font-bold text-white mb-2">Robotic Surgery</h4>
                            <p class="text-gray-400 leading-relaxed">Da Vinci surgical systems allowing for microscopic precision, smaller incisions, and significantly faster recovery times for complex procedures.</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-12 h-12 rounded-xl bg-white/10 border border-white/20 flex items-center justify-center text-cyan-400 shadow-[0_0_15px_rgba(34,211,238,0.3)]">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path></svg>
                        </div>
                        <div>
                            <h4 class="text-xl font-bold text-white mb-2">AI Diagnostics</h4>
                            <p class="text-gray-400 leading-relaxed">Artificial Intelligence integrated imaging systems that detect anomalies with 99.9% accuracy before human eyes can.</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-12 h-12 rounded-xl bg-white/10 border border-white/20 flex items-center justify-center text-emerald-400 shadow-[0_0_15px_rgba(52,211,153,0.3)]">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                        </div>
                        <div>
                            <h4 class="text-xl font-bold text-white mb-2">3D Bioprinting Lab</h4>
                            <p class="text-gray-400 leading-relaxed">In-house facility for creating custom biological scaffolding and prosthetics tailored to individual patient anatomy.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="relative mt-12 lg:mt-0 hidden md:block" data-aos="fade-left" data-aos-delay="200">
                <div class="absolute inset-0 bg-cyan-500 rounded-[3rem] blur-[100px] opacity-20 animate-pulse"></div>
                <div class="relative rounded-[2.5rem] overflow-hidden border border-white/10 shadow-2xl">
                    <img src="https://images.unsplash.com/photo-1516549655169-df83a0774514?auto=format&fit=crop&q=80&w=1000" alt="Advanced Tech" class="w-full h-[600px] object-cover">
                    <!-- Glass overlay stats -->
                    <div class="absolute bottom-8 left-8 right-8 glass bg-gray-900/40 backdrop-blur-md border-gray-600/50 p-6 rounded-2xl flex justify-around text-center divide-x divide-white/10">
                        <div class="px-2">
                            <div class="text-3xl font-black text-white mb-1">0%</div>
                            <div class="text-[10px] text-brand-300 uppercase font-bold tracking-wider">Infection Rate</div>
                        </div>
                        <div class="px-2">
                            <div class="text-3xl font-black text-white mb-1">24h</div>
                            <div class="text-[10px] text-brand-300 uppercase font-bold tracking-wider">Lab Results</div>
                        </div>
                        <div class="px-2">
                            <div class="text-3xl font-black text-white mb-1">3x</div>
                            <div class="text-[10px] text-brand-300 uppercase font-bold tracking-wider">Faster Recovery</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Specialists -->
<section class="py-24 bg-white overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-6">
            <div class="max-w-2xl">
                <h2 class="text-brand-600 font-bold tracking-wide uppercase mb-2">Medical Team</h2>
                <p class="text-4xl sm:text-5xl font-extrabold text-gray-900 font-display">Meet Our Leading Specialists</p>
            </div>
            <a href="about.php" class="px-8 py-4 border-2 border-brand-600 text-brand-600 font-bold rounded-full hover:bg-brand-600 hover:text-white transition-all hover:shadow-glow-brand transform hover:-translate-y-1">View All Doctors</a>
        </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Doctor 1 -->
            <div class="group relative rounded-3xl overflow-hidden shadow-lg border-2 border-gray-100 bg-gray-50 hover:border-rose-400 hover:-translate-y-4 hover:shadow-[0_15px_30px_rgba(244,63,94,0.2)] transition-all duration-300" data-aos="fade-up" data-aos-delay="100">
                <div class="aspect-[4/5] overflow-hidden relative">
                    <img src="https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?auto=format&fit=crop&q=80&w=600" alt="Dr. Sarah Jenkins" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900/90 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                        <div class="flex gap-3">
                            <a href="#" class="w-10 h-10 rounded-full bg-gray-900/50 backdrop-blur text-white flex items-center justify-center hover:bg-rose-500 transition-colors shadow-md">in</a>
                        </div>
                    </div>
                </div>
                <div class="p-6 bg-white relative z-10 border-t border-gray-100 transition-colors">
                    <h3 class="text-xl font-bold text-gray-900 mb-1">Dr. Sarah Jenkins</h3>
                    <p class="text-rose-600 font-semibold text-sm mb-3">Chief of Cardiology</p>
                    <p class="text-gray-500 text-sm line-clamp-2">Over 20 years of experience in minimally invasive cardiac surgery and heart transplants.</p>
                </div>
            </div>

            <!-- Doctor 2 -->
            <div class="group relative rounded-3xl overflow-hidden shadow-lg border-2 border-gray-100 bg-gray-50 hover:border-indigo-400 hover:-translate-y-4 hover:shadow-[0_15px_30px_rgba(99,102,241,0.2)] transition-all duration-300" data-aos="fade-up" data-aos-delay="200">
                <div class="aspect-[4/5] overflow-hidden relative">
                    <img src="https://images.unsplash.com/photo-1559839734-2b71ea197ec2?auto=format&fit=crop&q=80&w=600" alt="Dr. Michael Chen" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900/90 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                        <div class="flex gap-3">
                            <a href="#" class="w-10 h-10 rounded-full bg-gray-900/50 backdrop-blur text-white flex items-center justify-center hover:bg-indigo-500 transition-colors shadow-md">in</a>
                        </div>
                    </div>
                </div>
                <div class="p-6 bg-white relative z-10 border-t border-gray-100 transition-colors">
                    <h3 class="text-xl font-bold text-gray-900 mb-1">Dr. Michael Chen</h3>
                    <p class="text-indigo-600 font-semibold text-sm mb-3">Head of Neurology</p>
                    <p class="text-gray-500 text-sm line-clamp-2">Pioneer in AI-assisted brain surgery and treatment of complex neurodegenerative diseases.</p>
                </div>
            </div>

            <!-- Doctor 3 -->
            <div class="group relative rounded-3xl overflow-hidden shadow-lg border-2 border-gray-100 bg-gray-50 hover:border-orange-400 hover:-translate-y-4 hover:shadow-[0_15px_30px_rgba(249,115,22,0.2)] transition-all duration-300" data-aos="fade-up" data-aos-delay="300">
                <div class="aspect-[4/5] overflow-hidden relative">
                    <img src="https://images.unsplash.com/photo-1594824476967-48c8b964273f?auto=format&fit=crop&q=80&w=600" alt="Dr. Emily Rodriguez" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900/90 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                        <div class="flex gap-3">
                            <a href="#" class="w-10 h-10 rounded-full bg-gray-900/50 backdrop-blur text-white flex items-center justify-center hover:bg-orange-500 transition-colors shadow-md">in</a>
                        </div>
                    </div>
                </div>
                <div class="p-6 bg-white relative z-10 border-t border-gray-100 transition-colors">
                    <h3 class="text-xl font-bold text-gray-900 mb-1">Dr. Emily Rodriguez</h3>
                    <p class="text-orange-500 font-semibold text-sm mb-3">Pediatric Specialist</p>
                    <p class="text-gray-500 text-sm line-clamp-2">Dedicated to neonatal care and pediatric oncology with compassionate, family-centered approaches.</p>
                </div>
            </div>

            <!-- Doctor 4 -->
            <div class="group relative rounded-3xl overflow-hidden shadow-lg border-2 border-gray-100 bg-gray-50 hover:border-teal-400 hover:-translate-y-4 hover:shadow-[0_15px_30px_rgba(20,184,166,0.2)] transition-all duration-300" data-aos="fade-up" data-aos-delay="400">
                <div class="aspect-[4/5] overflow-hidden relative">
                    <img src="https://images.unsplash.com/photo-1622253692010-333f2da6031d?auto=format&fit=crop&q=80&w=600" alt="Dr. James Wilson" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900/90 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                        <div class="flex gap-3">
                            <a href="#" class="w-10 h-10 rounded-full bg-gray-900/50 backdrop-blur text-white flex items-center justify-center hover:bg-teal-500 transition-colors shadow-md">in</a>
                        </div>
                    </div>
                </div>
                <div class="p-6 bg-white relative z-10 border-t border-gray-100 transition-colors">
                    <h3 class="text-xl font-bold text-gray-900 mb-1">Dr. James Wilson</h3>
                    <p class="text-teal-600 font-semibold text-sm mb-3">Orthopedic Surgeon</p>
                    <p class="text-gray-500 text-sm line-clamp-2">Specializing in sports injuries and joint replacement using robotic-assisted techniques.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="py-32 bg-brand-50 relative overflow-hidden">
    <!-- Background Glows -->
    <div class="absolute top-1/2 left-0 -translate-y-1/2 -translate-x-1/2 w-96 h-96 bg-amber-200 rounded-full blur-3xl opacity-30"></div>
    <div class="absolute top-1/2 right-0 -translate-y-1/2 translate-x-1/2 w-96 h-96 bg-emerald-200 rounded-full blur-3xl opacity-30"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-20" data-aos="fade-up">
            <h2 class="text-brand-600 font-bold tracking-widest uppercase mb-3 text-sm animate-float">Patient Stories</h2>
            <p class="font-display text-4xl sm:text-5xl font-extrabold text-gray-900">Real People, Real Recovery.</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Review 1 -->
            <div class="bg-white/80 backdrop-blur-xl p-10 rounded-3xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-transparent hover:border-brand-400 hover:shadow-glow-brand-hover transition-all duration-300 relative group flex flex-col h-full transform hover:-translate-y-2" data-aos="fade-up" data-aos-delay="100">
                <div class="text-brand-200 opacity-30 absolute -top-4 right-6 text-8xl font-serif group-hover:text-brand-400 transition-colors leading-none">"</div>
                <div class="flex text-yellow-400 mb-6 relative z-10 text-xl drop-shadow-sm">
                    &#9733;&#9733;&#9733;&#9733;&#9733;
                </div>
                <p class="text-gray-700 font-medium text-lg italic mb-8 relative z-10 flex-grow">"The staff at Cityview Medical Center went above and beyond. The facilities are incredibly modern, and Dr. Jenkins saved my life with her quick diagnosis."</p>
                <div class="flex items-center gap-4 relative z-10 pt-6 border-t border-gray-100">
                    <img src="https://i.pravatar.cc/150?img=11" alt="Avatar" class="w-14 h-14 rounded-full border-2 border-white shadow-md">
                    <div>
                        <h4 class="font-display font-bold text-gray-900 text-lg">Michael R.</h4>
                        <p class="text-sm text-brand-600 font-semibold">Cardiology Patient</p>
                    </div>
                </div>
            </div>

            <!-- Review 2 -->
            <div class="bg-white/80 backdrop-blur-xl p-10 rounded-3xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-transparent hover:border-brand-400 hover:shadow-glow-brand-hover transition-all duration-300 relative group flex flex-col h-full transform md:-translate-y-8 hover:-translate-y-10" data-aos="fade-up" data-aos-delay="200">
                <div class="text-brand-200 opacity-30 absolute -top-4 right-6 text-8xl font-serif group-hover:text-brand-400 transition-colors leading-none">"</div>
                <div class="flex text-yellow-400 mb-6 relative z-10 text-xl drop-shadow-sm">
                    &#9733;&#9733;&#9733;&#9733;&#9733;
                </div>
                <p class="text-gray-700 font-medium text-lg italic mb-8 relative z-10 flex-grow">"I brought my daughter to the pediatrics ward, and the environment was so welcoming. It didn't feel like a hospital at all. Truly exceptional care."</p>
                <div class="flex items-center gap-4 relative z-10 pt-6 border-t border-gray-100">
                    <img src="https://i.pravatar.cc/150?img=9" alt="Avatar" class="w-14 h-14 rounded-full border-2 border-white shadow-md">
                    <div>
                        <h4 class="font-display font-bold text-gray-900 text-lg">Sarah T.</h4>
                        <p class="text-sm text-brand-600 font-semibold">Mother of Patient</p>
                    </div>
                </div>
            </div>

            <!-- Review 3 -->
            <div class="bg-white/80 backdrop-blur-xl p-10 rounded-3xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-transparent hover:border-brand-400 hover:shadow-glow-brand-hover transition-all duration-300 relative group flex flex-col h-full transform hover:-translate-y-2" data-aos="fade-up" data-aos-delay="300">
                <div class="text-brand-200 opacity-30 absolute -top-4 right-6 text-8xl font-serif group-hover:text-brand-400 transition-colors leading-none">"</div>
                <div class="flex text-yellow-400 mb-6 relative z-10 text-xl drop-shadow-sm">
                    &#9733;&#9733;&#9733;&#9733;&#9733;
                </div>
                <p class="text-gray-700 font-medium text-lg italic mb-8 relative z-10 flex-grow">"The 3D MRI facilities are state-of-the-art. The entire process was smooth, and the results were provided to my neurologist the very same day."</p>
                <div class="flex items-center gap-4 relative z-10 pt-6 border-t border-gray-100">
                    <img src="https://i.pravatar.cc/150?img=33" alt="Avatar" class="w-14 h-14 rounded-full border-2 border-white shadow-md">
                    <div>
                        <h4 class="font-display font-bold text-gray-900 text-lg">David J.</h4>
                        <p class="text-sm text-brand-600 font-semibold">Neurology Patient</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Premium CTA Section -->
<section class="py-32 relative overflow-hidden bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="relative rounded-[3rem] overflow-hidden bg-gradient-to-br from-brand-600 via-brand-500 to-brand-800 shadow-[0_20px_50px_-15px_rgba(2,132,199,0.5)] border border-brand-400/30">
            <!-- Decorative Elements -->
            <div class="absolute top-0 right-0 -mr-20 -mt-20 w-72 h-72 rounded-full bg-white opacity-10 blur-3xl mix-blend-overlay"></div>
            <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-96 h-96 rounded-full bg-brand-900 opacity-30 blur-3xl mix-blend-overlay"></div>
            
            <div class="relative z-10 px-8 py-20 sm:px-16 sm:py-24 lg:flex lg:items-center lg:justify-between">
                <div class="lg:w-0 lg:flex-1" data-aos="fade-right">
                    <h2 class="text-4xl font-black tracking-tight text-white sm:text-5xl lg:text-6xl font-display mb-6">
                        <span class="block drop-shadow-md">Ready to take control?</span>
                        <span class="block text-transparent bg-clip-text bg-gradient-to-r from-brand-100 to-white mt-2 text-3xl sm:text-4xl lg:text-5xl drop-shadow-sm">Schedule your consultation today.</span>
                    </h2>
                    <p class="max-w-2xl text-xl text-brand-50 font-medium">Join thousands of patients who trust Cityview Medical Center for their healthcare needs. Our top-tier specialists are ready to help you live a healthier life.</p>
                </div>
                <div class="mt-10 flex lg:mt-0 lg:flex-shrink-0 lg:ml-12" data-aos="zoom-in" data-aos-delay="200">
                    <a href="contact.php" class="inline-flex items-center justify-center px-10 py-5 border border-transparent text-xl font-bold rounded-full text-brand-700 bg-white hover:bg-brand-50 transition-all duration-300 shadow-[0_0_30px_rgba(255,255,255,0.4)] hover:shadow-[0_0_50px_rgba(255,255,255,0.6)] transform hover:-translate-y-2 hover:scale-105">
                        Book Appointment Now
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
