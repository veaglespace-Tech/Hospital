<?php include 'includes/header.php'; ?>

<!-- Page Header -->
<div class="relative bg-brand-900 py-24 overflow-hidden">
    <div class="absolute inset-0">
        <img src="assets/images/gallery.jpg" alt="Gallery background" class="w-full h-full object-cover opacity-20">
    </div>
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-5xl font-extrabold text-white tracking-tight mb-4">Facility Gallery</h1>
        <p class="text-xl text-brand-100 max-w-3xl mx-auto">Take a visual tour of our world-class medical center.</p>
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
