<?php include 'includes/header.php'; ?>

<!-- Page Header -->
<div class="relative pt-32 pb-32 lg:pt-48 lg:pb-40 overflow-hidden bg-slate-950">
    <!-- Background Image & Gradients -->
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1581594693702-fbdc51b2763b?auto=format&fit=crop&q=80" alt="Background" class="w-full h-full object-cover opacity-50">
        <div class="absolute inset-0 bg-slate-950/60 mix-blend-multiply"></div>
    </div>
    <div class="absolute inset-0 bg-gradient-to-r from-slate-950/90 via-slate-950/60 to-transparent"></div>
    <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-transparent to-transparent"></div>
    
    <!-- Decorative Orbs (Hidden on mobile) -->
    <div class="absolute top-0 right-1/4 w-[30rem] h-[30rem] bg-indigo-500 rounded-full blur-[120px] opacity-20 mix-blend-screen mobile-hide"></div>
    <div class="absolute bottom-0 left-1/4 w-[30rem] h-[30rem] bg-emerald-500 rounded-full blur-[120px] opacity-20 mix-blend-screen mobile-hide"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl" data-aos="fade-right">
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-brand-500/10 border border-brand-400/20 text-brand-300 text-xs sm:text-sm font-bold tracking-widest uppercase mb-6 sm:mb-8 backdrop-blur-md">
                <span class="w-2 h-2 rounded-full bg-brand-400 animate-pulse"></span>
                Our Facilities
            </div>
            <h1 class="text-5xl sm:text-6xl lg:text-7xl font-black text-white tracking-tight mb-6 sm:mb-8 font-display leading-[1.1]">Hospital <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-300 to-indigo-300">Gallery</span></h1>
            <p class="text-lg sm:text-xl text-slate-300 font-light leading-relaxed max-w-2xl">Take a virtual tour of our state-of-the-art medical facilities and advanced technology.</p>
        </div>
    </div>
    
    <!-- SVG Wave -->
    <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none z-20 translate-y-[1px]">
        <svg class="relative block w-full h-[40px] md:h-[80px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" preserveAspectRatio="none">
            <path d="M0,160 C320,300 420,0 740,120 C1060,240 1280,60 1440,160 L1440,320 L0,320 Z" fill="#f8fafc"></path>
        </svg>
    </div>
</div>

<!-- Gallery Categories -->
<section class="py-24 sm:py-32 bg-slate-50 relative overflow-hidden">
    <!-- Subtle Background Pattern -->
    <div class="absolute inset-0 opacity-[0.03] bg-[radial-gradient(#6366f1_1px,transparent_1px)] [background-size:20px_20px]"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <!-- Category 1: Exterior & Reception -->
        <div class="mb-20 sm:mb-24" data-aos="fade-up">
            <div class="flex items-center gap-6 mb-10">
                <h2 class="text-2xl sm:text-3xl font-black text-slate-900 font-display">Exterior & Reception</h2>
                <div class="h-px bg-gradient-to-r from-brand-200 to-transparent flex-grow"></div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-10">
                <div class="relative group overflow-hidden rounded-[2rem] shadow-[0_10px_40px_-15px_rgba(0,0,0,0.1)] cursor-pointer">
                    <img class="w-full h-[350px] sm:h-[450px] object-cover transform group-hover:scale-105 transition-transform duration-700 ease-out" src="assets/images/hero.jpg" alt="Hospital Exterior">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-950/40 to-transparent opacity-60 group-hover:opacity-90 transition-opacity duration-500 flex items-end">
                        <div class="p-8 sm:p-10 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                            <h3 class="text-white text-2xl sm:text-3xl font-black mb-3 font-display">Modern Exterior</h3>
                            <p class="text-slate-300 text-sm sm:text-base leading-relaxed opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-100">Our state-of-the-art building located in the heart of the medical district.</p>
                        </div>
                    </div>
                </div>
                
                <div class="relative group overflow-hidden rounded-[2rem] shadow-[0_10px_40px_-15px_rgba(0,0,0,0.1)] cursor-pointer">
                    <img class="w-full h-[350px] sm:h-[450px] object-cover transform group-hover:scale-105 transition-transform duration-700 ease-out" src="assets/images/gallery.jpg" alt="Reception Area">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-950/40 to-transparent opacity-60 group-hover:opacity-90 transition-opacity duration-500 flex items-end">
                        <div class="p-8 sm:p-10 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                            <h3 class="text-white text-2xl sm:text-3xl font-black mb-3 font-display">Welcoming Reception</h3>
                            <p class="text-slate-300 text-sm sm:text-base leading-relaxed opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-100">A luxurious, calming environment to make you feel at ease upon arrival.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Category 2: Medical Facilities -->
        <div class="mb-20 sm:mb-24" data-aos="fade-up">
            <div class="flex items-center gap-6 mb-10">
                <h2 class="text-2xl sm:text-3xl font-black text-slate-900 font-display">Advanced Medical Facilities</h2>
                <div class="h-px bg-gradient-to-r from-brand-200 to-transparent flex-grow"></div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-10">
                <div class="relative group overflow-hidden rounded-[2rem] shadow-[0_10px_40px_-15px_rgba(0,0,0,0.1)] cursor-pointer">
                    <img class="w-full h-[350px] sm:h-[450px] object-cover transform group-hover:scale-105 transition-transform duration-700 ease-out" src="assets/images/or.jpg" alt="Operating Room">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-950/40 to-transparent opacity-60 group-hover:opacity-90 transition-opacity duration-500 flex items-end">
                        <div class="p-8 sm:p-10 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                            <h3 class="text-white text-2xl sm:text-3xl font-black mb-3 font-display">Robotic Surgery OR</h3>
                            <p class="text-slate-300 text-sm sm:text-base leading-relaxed opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-100">Equipped with the latest robotic systems for precision surgery.</p>
                        </div>
                    </div>
                </div>
                
                <div class="relative group overflow-hidden rounded-[2rem] shadow-[0_10px_40px_-15px_rgba(0,0,0,0.1)] cursor-pointer">
                    <img class="w-full h-[350px] sm:h-[450px] object-cover transform group-hover:scale-105 transition-transform duration-700 ease-out" src="assets/images/mri.jpg" alt="MRI Scanner">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-950/40 to-transparent opacity-60 group-hover:opacity-90 transition-opacity duration-500 flex items-end">
                        <div class="p-8 sm:p-10 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                            <h3 class="text-white text-2xl sm:text-3xl font-black mb-3 font-display">High-Res MRI Suite</h3>
                            <p class="text-slate-300 text-sm sm:text-base leading-relaxed opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-100">Calming diagnostic rooms with state-of-the-art imaging technology.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Category 3: Patient Care -->
        <div data-aos="fade-up">
            <div class="flex items-center gap-6 mb-10">
                <h2 class="text-2xl sm:text-3xl font-black text-slate-900 font-display">Patient Care & Wards</h2>
                <div class="h-px bg-gradient-to-r from-brand-200 to-transparent flex-grow"></div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-10">
                <div class="relative group overflow-hidden rounded-[2rem] shadow-[0_10px_40px_-15px_rgba(0,0,0,0.1)] cursor-pointer">
                    <img class="w-full h-[350px] sm:h-[450px] object-cover transform group-hover:scale-105 transition-transform duration-700 ease-out" src="assets/images/pediatrics.jpg" alt="Pediatric Ward">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-950/40 to-transparent opacity-60 group-hover:opacity-90 transition-opacity duration-500 flex items-end">
                        <div class="p-8 sm:p-10 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                            <h3 class="text-white text-2xl sm:text-3xl font-black mb-3 font-display">Pediatric Ward</h3>
                            <p class="text-slate-300 text-sm sm:text-base leading-relaxed opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-100">Bright, colorful, and child-friendly rooms for our youngest patients.</p>
                        </div>
                    </div>
                </div>
                
                <div class="relative group overflow-hidden rounded-[2rem] shadow-[0_10px_40px_-15px_rgba(0,0,0,0.1)] cursor-pointer">
                    <img class="w-full h-[350px] sm:h-[450px] object-cover transform group-hover:scale-105 transition-transform duration-700 ease-out" src="assets/images/services.jpg" alt="Private Patient Room">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-950/40 to-transparent opacity-60 group-hover:opacity-90 transition-opacity duration-500 flex items-end">
                        <div class="p-8 sm:p-10 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                            <h3 class="text-white text-2xl sm:text-3xl font-black mb-3 font-display">Private Patient Rooms</h3>
                            <p class="text-slate-300 text-sm sm:text-base leading-relaxed opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-100">Designed like premium hotel rooms to ensure comfort during recovery.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<?php include 'includes/footer.php'; ?>
