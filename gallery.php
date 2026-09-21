<?php include 'includes/header.php'; ?>

<!-- Page Header -->
<div class="relative pt-32 pb-32 lg:pt-40 lg:pb-40 overflow-hidden bg-gray-900">
    <!-- Background Image -->
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1581594693702-fbdc51b2763b?auto=format&fit=crop&q=80" alt="Background" class="w-full h-full object-cover opacity-40">
    </div>
    <!-- Gradient Overlay for Readability -->
    <div class="absolute inset-0 bg-gradient-to-r from-gray-900 via-gray-900/80 to-transparent"></div>
    <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-transparent to-transparent"></div>
    
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl" data-aos="fade-right">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-brand-500/20 border border-brand-400/30 text-brand-300 text-sm font-bold tracking-widest uppercase mb-6 backdrop-blur-md">
                <span class="w-2 h-2 rounded-full bg-brand-400 animate-pulse"></span>
                Our Facilities
            </div>
            <h1 class="text-5xl lg:text-7xl font-extrabold text-white tracking-tight mb-6 font-display">Hospital Gallery</h1>
            <p class="text-xl text-gray-300 font-light leading-relaxed">Take a virtual tour of our state-of-the-art medical facilities and advanced technology.</p>
        </div>
    </div>
    
    <!-- SVG Wave -->
    <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none z-20 translate-y-[1px]">
        <svg class="relative block w-full h-[40px] md:h-[80px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" preserveAspectRatio="none">
            <path d="M0,160 C320,300 420,0 740,120 C1060,240 1280,60 1440,160 L1440,320 L0,320 Z" fill="#f9fafb"></path>
        </svg>
    </div>
</div>

<!-- Gallery Categories -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Category 1: Exterior & Reception -->
        <div class="mb-16">
            <div class="flex items-center gap-4 mb-8">
                <h2 class="text-2xl font-bold text-gray-900">Exterior & Reception</h2>
                <div class="h-px bg-gray-300 flex-grow"></div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="relative group overflow-hidden rounded-3xl shadow-md cursor-pointer">
                    <img class="w-full h-80 object-cover transform group-hover:scale-105 transition-transform duration-700" src="assets/images/hero.jpg" alt="Hospital Exterior">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900/90 via-gray-900/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end">
                        <div class="p-8">
                            <h3 class="text-white text-2xl font-bold mb-2">Modern Exterior</h3>
                            <p class="text-gray-300">Our state-of-the-art building located in the heart of the medical district.</p>
                        </div>
                    </div>
                </div>
                
                <div class="relative group overflow-hidden rounded-3xl shadow-md cursor-pointer">
                    <img class="w-full h-80 object-cover transform group-hover:scale-105 transition-transform duration-700" src="assets/images/gallery.jpg" alt="Reception Area">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900/90 via-gray-900/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end">
                        <div class="p-8">
                            <h3 class="text-white text-2xl font-bold mb-2">Welcoming Reception</h3>
                            <p class="text-gray-300">A luxurious, calming environment to make you feel at ease upon arrival.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Category 2: Medical Facilities -->
        <div class="mb-16">
            <div class="flex items-center gap-4 mb-8">
                <h2 class="text-2xl font-bold text-gray-900">Advanced Medical Facilities</h2>
                <div class="h-px bg-gray-300 flex-grow"></div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="relative group overflow-hidden rounded-3xl shadow-md cursor-pointer">
                    <img class="w-full h-80 object-cover transform group-hover:scale-105 transition-transform duration-700" src="assets/images/or.jpg" alt="Operating Room">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900/90 via-gray-900/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end">
                        <div class="p-8">
                            <h3 class="text-white text-2xl font-bold mb-2">Robotic Surgery OR</h3>
                            <p class="text-gray-300">Equipped with the latest robotic systems for precision surgery.</p>
                        </div>
                    </div>
                </div>
                
                <div class="relative group overflow-hidden rounded-3xl shadow-md cursor-pointer">
                    <img class="w-full h-80 object-cover transform group-hover:scale-105 transition-transform duration-700" src="assets/images/mri.jpg" alt="MRI Scanner">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900/90 via-gray-900/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end">
                        <div class="p-8">
                            <h3 class="text-white text-2xl font-bold mb-2">High-Res MRI Suite</h3>
                            <p class="text-gray-300">Calming diagnostic rooms with state-of-the-art imaging technology.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Category 3: Patient Care -->
        <div>
            <div class="flex items-center gap-4 mb-8">
                <h2 class="text-2xl font-bold text-gray-900">Patient Care & Wards</h2>
                <div class="h-px bg-gray-300 flex-grow"></div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="relative group overflow-hidden rounded-3xl shadow-md cursor-pointer">
                    <img class="w-full h-80 object-cover transform group-hover:scale-105 transition-transform duration-700" src="assets/images/pediatrics.jpg" alt="Pediatric Ward">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900/90 via-gray-900/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end">
                        <div class="p-8">
                            <h3 class="text-white text-2xl font-bold mb-2">Pediatric Ward</h3>
                            <p class="text-gray-300">Bright, colorful, and child-friendly rooms for our youngest patients.</p>
                        </div>
                    </div>
                </div>
                
                <div class="relative group overflow-hidden rounded-3xl shadow-md cursor-pointer">
                    <img class="w-full h-80 object-cover transform group-hover:scale-105 transition-transform duration-700" src="assets/images/services.jpg" alt="Private Patient Room">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900/90 via-gray-900/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end">
                        <div class="p-8">
                            <h3 class="text-white text-2xl font-bold mb-2">Private Patient Rooms</h3>
                            <p class="text-gray-300">Designed like premium hotel rooms to ensure comfort during recovery.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<?php include 'includes/footer.php'; ?>
