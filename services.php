<?php include 'includes/header.php'; ?>

<!-- Page Header -->
<div class="relative bg-brand-900 py-24 overflow-hidden">
    <div class="absolute inset-0">
        <img src="assets/images/services.jpg" alt="Services background" class="w-full h-full object-cover opacity-20">
    </div>
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-5xl font-extrabold text-white tracking-tight mb-4">Medical Services & Specialties</h1>
        <p class="text-xl text-brand-100 max-w-3xl mx-auto">Comprehensive, cutting-edge medical care tailored to your unique needs.</p>
    </div>
</div>

<!-- Departments List -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Dept 1 -->
        <div class="bg-white rounded-[2rem] shadow-lg border border-gray-100 overflow-hidden mb-12 flex flex-col md:flex-row group">
            <div class="md:w-2/5 relative overflow-hidden">
                <img src="assets/images/or.jpg" alt="General Surgery" class="w-full h-full object-cover min-h-[300px] transform group-hover:scale-105 transition-transform duration-700">
                <div class="absolute inset-0 bg-brand-900/20 group-hover:bg-transparent transition-colors duration-500"></div>
            </div>
            <div class="md:w-3/5 p-8 md:p-12 flex flex-col justify-center">
                <div class="w-12 h-12 bg-brand-50 text-brand-600 rounded-xl flex items-center justify-center mb-6">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path></svg>
                </div>
                <h3 class="text-3xl font-extrabold text-gray-900 mb-4">General Surgery</h3>
                <p class="text-lg text-gray-600 mb-6">Our surgical department features highly advanced operating rooms equipped with robotic surgical systems. We specialize in minimally invasive procedures, ensuring faster recovery times, less pain, and minimal scarring.</p>
                <ul class="grid grid-cols-1 sm:grid-cols-2 gap-3 mb-8">
                    <li class="flex items-center text-gray-600"><span class="text-brand-500 mr-2">✓</span> Robotic Surgery</li>
                    <li class="flex items-center text-gray-600"><span class="text-brand-500 mr-2">✓</span> Appendectomy</li>
                    <li class="flex items-center text-gray-600"><span class="text-brand-500 mr-2">✓</span> Hernia Repair</li>
                    <li class="flex items-center text-gray-600"><span class="text-brand-500 mr-2">✓</span> Laparoscopic Procedures</li>
                </ul>
                <div>
                    <a href="contact.php" class="inline-flex items-center text-brand-600 font-bold hover:text-brand-800 transition-colors">Consult a Surgeon <span class="ml-2">&rarr;</span></a>
                </div>
            </div>
        </div>

        <!-- Dept 2 -->
        <div class="bg-white rounded-[2rem] shadow-lg border border-gray-100 overflow-hidden mb-12 flex flex-col md:flex-row-reverse group">
            <div class="md:w-2/5 relative overflow-hidden">
                <img src="assets/images/pediatrics.jpg" alt="Pediatrics" class="w-full h-full object-cover min-h-[300px] transform group-hover:scale-105 transition-transform duration-700">
                <div class="absolute inset-0 bg-brand-900/20 group-hover:bg-transparent transition-colors duration-500"></div>
            </div>
            <div class="md:w-3/5 p-8 md:p-12 flex flex-col justify-center">
                <div class="w-12 h-12 bg-brand-50 text-brand-600 rounded-xl flex items-center justify-center mb-6">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                </div>
                <h3 class="text-3xl font-extrabold text-gray-900 mb-4">Pediatrics</h3>
                <p class="text-lg text-gray-600 mb-6">We provide a warm, child-friendly environment to make hospital visits less intimidating for our youngest patients. Our pediatricians are experts in childhood development and treating complex illnesses.</p>
                <ul class="grid grid-cols-1 sm:grid-cols-2 gap-3 mb-8">
                    <li class="flex items-center text-gray-600"><span class="text-brand-500 mr-2">✓</span> Newborn Care</li>
                    <li class="flex items-center text-gray-600"><span class="text-brand-500 mr-2">✓</span> Vaccinations</li>
                    <li class="flex items-center text-gray-600"><span class="text-brand-500 mr-2">✓</span> Child Psychology</li>
                    <li class="flex items-center text-gray-600"><span class="text-brand-500 mr-2">✓</span> Pediatric Surgery</li>
                </ul>
                <div>
                    <a href="contact.php" class="inline-flex items-center text-brand-600 font-bold hover:text-brand-800 transition-colors">Book Pediatrician <span class="ml-2">&rarr;</span></a>
                </div>
            </div>
        </div>

        <!-- Dept 3 -->
        <div class="bg-white rounded-[2rem] shadow-lg border border-gray-100 overflow-hidden mb-12 flex flex-col md:flex-row group">
            <div class="md:w-2/5 relative overflow-hidden">
                <img src="assets/images/mri.jpg" alt="Neurology" class="w-full h-full object-cover min-h-[300px] transform group-hover:scale-105 transition-transform duration-700">
                <div class="absolute inset-0 bg-brand-900/20 group-hover:bg-transparent transition-colors duration-500"></div>
            </div>
            <div class="md:w-3/5 p-8 md:p-12 flex flex-col justify-center">
                <div class="w-12 h-12 bg-brand-50 text-brand-600 rounded-xl flex items-center justify-center mb-6">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                </div>
                <h3 class="text-3xl font-extrabold text-gray-900 mb-4">Neurology & Diagnostics</h3>
                <p class="text-lg text-gray-600 mb-6">Our neurology department is supported by an advanced in-house diagnostic center, featuring the latest MRI and CT scanners to accurately diagnose conditions of the brain and spine.</p>
                <ul class="grid grid-cols-1 sm:grid-cols-2 gap-3 mb-8">
                    <li class="flex items-center text-gray-600"><span class="text-brand-500 mr-2">✓</span> Stroke Management</li>
                    <li class="flex items-center text-gray-600"><span class="text-brand-500 mr-2">✓</span> Epilepsy Care</li>
                    <li class="flex items-center text-gray-600"><span class="text-brand-500 mr-2">✓</span> High-Res MRI</li>
                    <li class="flex items-center text-gray-600"><span class="text-brand-500 mr-2">✓</span> Neuro-rehabilitation</li>
                </ul>
                <div>
                    <a href="contact.php" class="inline-flex items-center text-brand-600 font-bold hover:text-brand-800 transition-colors">See a Neurologist <span class="ml-2">&rarr;</span></a>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Patient Journey / What to Expect -->
<section class="py-24 bg-white border-t border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-brand-600 font-bold tracking-wide uppercase mb-2">Patient Journey</h2>
            <p class="text-4xl font-extrabold text-gray-900">What to Expect During Your Visit</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-8 relative">
            <!-- connecting line -->
            <div class="hidden md:block absolute top-1/2 left-0 w-full h-1 bg-gray-100 -z-10 -translate-y-1/2"></div>
            
            <div class="text-center bg-white p-4">
                <div class="w-16 h-16 bg-brand-600 text-white rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-6 shadow-lg shadow-brand-500/30">1</div>
                <h4 class="text-xl font-bold text-gray-900 mb-2">Appointment</h4>
                <p class="text-gray-500 text-sm">Book online or via phone. You'll receive instant confirmation and instructions.</p>
            </div>
            <div class="text-center bg-white p-4">
                <div class="w-16 h-16 bg-brand-600 text-white rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-6 shadow-lg shadow-brand-500/30">2</div>
                <h4 class="text-xl font-bold text-gray-900 mb-2">Consultation</h4>
                <p class="text-gray-500 text-sm">Meet with our specialist who will review your history and perform an exam.</p>
            </div>
            <div class="text-center bg-white p-4">
                <div class="w-16 h-16 bg-brand-600 text-white rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-6 shadow-lg shadow-brand-500/30">3</div>
                <h4 class="text-xl font-bold text-gray-900 mb-2">Treatment</h4>
                <p class="text-gray-500 text-sm">Receive a personalized treatment plan using advanced medical procedures.</p>
            </div>
            <div class="text-center bg-white p-4">
                <div class="w-16 h-16 bg-brand-600 text-white rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-6 shadow-lg shadow-brand-500/30">4</div>
                <h4 class="text-xl font-bold text-gray-900 mb-2">Recovery</h4>
                <p class="text-gray-500 text-sm">Post-treatment care and follow-ups to ensure a complete and speedy recovery.</p>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
