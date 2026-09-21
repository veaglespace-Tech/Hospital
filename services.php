<?php include 'includes/header.php'; ?>

<!-- Page Header -->
<div class="relative pt-32 pb-32 lg:pt-48 lg:pb-40 overflow-hidden bg-slate-950">
    <!-- Background Image & Gradients -->
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1579684385127-1ef15d508118?auto=format&fit=crop&q=80" alt="Background" class="w-full h-full object-cover opacity-50">
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
                Our Departments
            </div>
            <h1 class="text-5xl sm:text-6xl lg:text-7xl font-black text-white tracking-tight mb-6 sm:mb-8 font-display leading-[1.1]">Medical Services & <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-300 to-indigo-300">Specialties</span></h1>
            <p class="text-lg sm:text-xl text-slate-300 font-light leading-relaxed max-w-2xl">Comprehensive, cutting-edge medical care tailored to your unique needs.</p>
        </div>
    </div>
    
    <!-- SVG Wave -->
    <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none z-20 translate-y-[1px]">
        <svg class="relative block w-full h-[40px] md:h-[80px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" preserveAspectRatio="none">
            <path d="M0,160 C320,300 420,0 740,120 C1060,240 1280,60 1440,160 L1440,320 L0,320 Z" fill="#f8fafc"></path>
        </svg>
    </div>
</div>

<!-- Departments List -->
<section class="py-24 sm:py-32 bg-slate-50 relative overflow-hidden">
    <!-- Subtle Background Pattern -->
    <div class="absolute inset-0 opacity-[0.03] bg-[radial-gradient(#6366f1_1px,transparent_1px)] [background-size:20px_20px]"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <!-- Dept 1 -->
        <div class="bg-white rounded-[2rem] sm:rounded-[2.5rem] shadow-[0_10px_40px_-15px_rgba(0,0,0,0.05)] border border-slate-100 overflow-hidden mb-12 lg:mb-16 flex flex-col lg:flex-row group hover:shadow-[0_20px_50px_-15px_rgba(2,132,199,0.2)] hover:border-brand-200 transition-all duration-500" data-aos="fade-up">
            <div class="lg:w-2/5 relative overflow-hidden">
                <img src="assets/images/or.jpg" alt="General Surgery" class="w-full h-[300px] lg:h-full object-cover transform group-hover:scale-105 transition-transform duration-700 ease-out">
                <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 to-transparent lg:hidden"></div>
            </div>
            <div class="lg:w-3/5 p-8 sm:p-12 lg:p-16 flex flex-col justify-center relative">
                <div class="w-16 h-16 bg-slate-50 border border-slate-100 text-brand-600 rounded-2xl flex items-center justify-center mb-8 shadow-sm group-hover:bg-brand-600 group-hover:text-white transition-colors duration-300">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path></svg>
                </div>
                <h3 class="text-3xl sm:text-4xl font-black text-slate-900 mb-6 font-display">General Surgery</h3>
                <p class="text-base sm:text-lg text-slate-600 mb-8 leading-relaxed max-w-2xl">Our surgical department features highly advanced operating rooms equipped with robotic surgical systems. We specialize in minimally invasive procedures, ensuring faster recovery times, less pain, and minimal scarring.</p>
                <ul class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-10">
                    <li class="flex items-center text-slate-700 font-medium"><span class="w-6 h-6 rounded-full bg-brand-100 text-brand-600 flex items-center justify-center mr-3 text-sm">✓</span> Robotic Surgery</li>
                    <li class="flex items-center text-slate-700 font-medium"><span class="w-6 h-6 rounded-full bg-brand-100 text-brand-600 flex items-center justify-center mr-3 text-sm">✓</span> Appendectomy</li>
                    <li class="flex items-center text-slate-700 font-medium"><span class="w-6 h-6 rounded-full bg-brand-100 text-brand-600 flex items-center justify-center mr-3 text-sm">✓</span> Hernia Repair</li>
                    <li class="flex items-center text-slate-700 font-medium"><span class="w-6 h-6 rounded-full bg-brand-100 text-brand-600 flex items-center justify-center mr-3 text-sm">✓</span> Laparoscopic</li>
                </ul>
                <div>
                    <a href="contact.php" class="inline-flex items-center px-6 py-3 bg-brand-50 text-brand-700 font-bold rounded-xl hover:bg-brand-600 hover:text-white transition-colors duration-300 group/btn">Consult a Surgeon <span class="ml-2 transform group-hover/btn:translate-x-1 transition-transform">&rarr;</span></a>
                </div>
            </div>
        </div>

        <!-- Dept 2 -->
        <div class="bg-white rounded-[2rem] sm:rounded-[2.5rem] shadow-[0_10px_40px_-15px_rgba(0,0,0,0.05)] border border-slate-100 overflow-hidden mb-12 lg:mb-16 flex flex-col lg:flex-row-reverse group hover:shadow-[0_20px_50px_-15px_rgba(139,92,246,0.2)] hover:border-violet-200 transition-all duration-500" data-aos="fade-up">
            <div class="lg:w-2/5 relative overflow-hidden">
                <img src="assets/images/pediatrics.jpg" alt="Pediatrics" class="w-full h-[300px] lg:h-full object-cover transform group-hover:scale-105 transition-transform duration-700 ease-out">
                <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 to-transparent lg:hidden"></div>
            </div>
            <div class="lg:w-3/5 p-8 sm:p-12 lg:p-16 flex flex-col justify-center relative">
                <div class="w-16 h-16 bg-slate-50 border border-slate-100 text-violet-600 rounded-2xl flex items-center justify-center mb-8 shadow-sm group-hover:bg-violet-600 group-hover:text-white transition-colors duration-300">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                </div>
                <h3 class="text-3xl sm:text-4xl font-black text-slate-900 mb-6 font-display">Pediatrics</h3>
                <p class="text-base sm:text-lg text-slate-600 mb-8 leading-relaxed max-w-2xl">We provide a warm, child-friendly environment to make hospital visits less intimidating for our youngest patients. Our pediatricians are experts in childhood development and treating complex illnesses.</p>
                <ul class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-10">
                    <li class="flex items-center text-slate-700 font-medium"><span class="w-6 h-6 rounded-full bg-violet-100 text-violet-600 flex items-center justify-center mr-3 text-sm">✓</span> Newborn Care</li>
                    <li class="flex items-center text-slate-700 font-medium"><span class="w-6 h-6 rounded-full bg-violet-100 text-violet-600 flex items-center justify-center mr-3 text-sm">✓</span> Vaccinations</li>
                    <li class="flex items-center text-slate-700 font-medium"><span class="w-6 h-6 rounded-full bg-violet-100 text-violet-600 flex items-center justify-center mr-3 text-sm">✓</span> Child Psychology</li>
                    <li class="flex items-center text-slate-700 font-medium"><span class="w-6 h-6 rounded-full bg-violet-100 text-violet-600 flex items-center justify-center mr-3 text-sm">✓</span> Pediatric Surgery</li>
                </ul>
                <div>
                    <a href="contact.php" class="inline-flex items-center px-6 py-3 bg-violet-50 text-violet-700 font-bold rounded-xl hover:bg-violet-600 hover:text-white transition-colors duration-300 group/btn">Book Pediatrician <span class="ml-2 transform group-hover/btn:translate-x-1 transition-transform">&rarr;</span></a>
                </div>
            </div>
        </div>

        <!-- Dept 3 -->
        <div class="bg-white rounded-[2rem] sm:rounded-[2.5rem] shadow-[0_10px_40px_-15px_rgba(0,0,0,0.05)] border border-slate-100 overflow-hidden mb-12 flex flex-col lg:flex-row group hover:shadow-[0_20px_50px_-15px_rgba(99,102,241,0.2)] hover:border-indigo-200 transition-all duration-500" data-aos="fade-up">
            <div class="lg:w-2/5 relative overflow-hidden">
                <img src="assets/images/mri.jpg" alt="Neurology" class="w-full h-[300px] lg:h-full object-cover transform group-hover:scale-105 transition-transform duration-700 ease-out">
                <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 to-transparent lg:hidden"></div>
            </div>
            <div class="lg:w-3/5 p-8 sm:p-12 lg:p-16 flex flex-col justify-center relative">
                <div class="w-16 h-16 bg-slate-50 border border-slate-100 text-indigo-600 rounded-2xl flex items-center justify-center mb-8 shadow-sm group-hover:bg-indigo-600 group-hover:text-white transition-colors duration-300">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                </div>
                <h3 class="text-3xl sm:text-4xl font-black text-slate-900 mb-6 font-display">Neurology & Diagnostics</h3>
                <p class="text-base sm:text-lg text-slate-600 mb-8 leading-relaxed max-w-2xl">Our neurology department is supported by an advanced in-house diagnostic center, featuring the latest MRI and CT scanners to accurately diagnose conditions of the brain and spine.</p>
                <ul class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-10">
                    <li class="flex items-center text-slate-700 font-medium"><span class="w-6 h-6 rounded-full bg-indigo-100 text-indigo-600 flex items-center justify-center mr-3 text-sm">✓</span> Stroke Management</li>
                    <li class="flex items-center text-slate-700 font-medium"><span class="w-6 h-6 rounded-full bg-indigo-100 text-indigo-600 flex items-center justify-center mr-3 text-sm">✓</span> Epilepsy Care</li>
                    <li class="flex items-center text-slate-700 font-medium"><span class="w-6 h-6 rounded-full bg-indigo-100 text-indigo-600 flex items-center justify-center mr-3 text-sm">✓</span> High-Res MRI</li>
                    <li class="flex items-center text-slate-700 font-medium"><span class="w-6 h-6 rounded-full bg-indigo-100 text-indigo-600 flex items-center justify-center mr-3 text-sm">✓</span> Neuro-rehab</li>
                </ul>
                <div>
                    <a href="contact.php" class="inline-flex items-center px-6 py-3 bg-indigo-50 text-indigo-700 font-bold rounded-xl hover:bg-indigo-600 hover:text-white transition-colors duration-300 group/btn">See a Neurologist <span class="ml-2 transform group-hover/btn:translate-x-1 transition-transform">&rarr;</span></a>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Patient Journey / What to Expect -->
<section class="py-24 sm:py-32 bg-white relative overflow-hidden">
    <!-- Abstract gradient -->
    <div class="absolute inset-0 bg-gradient-to-b from-transparent to-slate-50/50"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center max-w-3xl mx-auto mb-16 sm:mb-24" data-aos="fade-up">
            <h2 class="text-brand-600 font-extrabold tracking-widest uppercase mb-4 text-xs sm:text-sm">Patient Journey</h2>
            <p class="text-4xl sm:text-5xl font-black text-slate-900 font-display">What to Expect</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-8 lg:gap-12 relative">
            <!-- Connecting line for desktop -->
            <div class="hidden md:block absolute top-12 left-[10%] right-[10%] h-0.5 bg-gradient-to-r from-brand-200 via-indigo-200 to-emerald-200 z-0"></div>
            
            <div class="text-center relative z-10 group" data-aos="fade-up" data-aos-delay="100">
                <div class="w-20 h-20 sm:w-24 sm:h-24 bg-white border border-slate-100 text-slate-400 rounded-2xl flex items-center justify-center text-3xl sm:text-4xl font-black mx-auto mb-6 shadow-sm group-hover:bg-brand-600 group-hover:text-white group-hover:border-brand-500 group-hover:shadow-[0_10px_30px_-10px_rgba(2,132,199,0.5)] transition-all duration-500 transform group-hover:-translate-y-2 font-display">
                    1
                </div>
                <h4 class="text-lg sm:text-xl font-black text-slate-900 mb-3 font-display">Appointment</h4>
                <p class="text-slate-500 text-sm leading-relaxed max-w-xs mx-auto">Book online or via phone. You'll receive instant confirmation and instructions.</p>
            </div>
            
            <div class="text-center relative z-10 group" data-aos="fade-up" data-aos-delay="200">
                <div class="w-20 h-20 sm:w-24 sm:h-24 bg-white border border-slate-100 text-slate-400 rounded-2xl flex items-center justify-center text-3xl sm:text-4xl font-black mx-auto mb-6 shadow-sm group-hover:bg-indigo-600 group-hover:text-white group-hover:border-indigo-500 group-hover:shadow-[0_10px_30px_-10px_rgba(99,102,241,0.5)] transition-all duration-500 transform group-hover:-translate-y-2 font-display">
                    2
                </div>
                <h4 class="text-lg sm:text-xl font-black text-slate-900 mb-3 font-display">Consultation</h4>
                <p class="text-slate-500 text-sm leading-relaxed max-w-xs mx-auto">Meet with our specialist who will review your history and perform an exam.</p>
            </div>
            
            <div class="text-center relative z-10 group" data-aos="fade-up" data-aos-delay="300">
                <div class="w-20 h-20 sm:w-24 sm:h-24 bg-white border border-slate-100 text-slate-400 rounded-2xl flex items-center justify-center text-3xl sm:text-4xl font-black mx-auto mb-6 shadow-sm group-hover:bg-rose-500 group-hover:text-white group-hover:border-rose-400 group-hover:shadow-[0_10px_30px_-10px_rgba(244,63,94,0.5)] transition-all duration-500 transform group-hover:-translate-y-2 font-display">
                    3
                </div>
                <h4 class="text-lg sm:text-xl font-black text-slate-900 mb-3 font-display">Treatment</h4>
                <p class="text-slate-500 text-sm leading-relaxed max-w-xs mx-auto">Receive a personalized treatment plan using advanced medical procedures.</p>
            </div>
            
            <div class="text-center relative z-10 group" data-aos="fade-up" data-aos-delay="400">
                <div class="w-20 h-20 sm:w-24 sm:h-24 bg-white border border-slate-100 text-slate-400 rounded-2xl flex items-center justify-center text-3xl sm:text-4xl font-black mx-auto mb-6 shadow-sm group-hover:bg-emerald-500 group-hover:text-white group-hover:border-emerald-400 group-hover:shadow-[0_10px_30px_-10px_rgba(16,185,129,0.5)] transition-all duration-500 transform group-hover:-translate-y-2 font-display">
                    4
                </div>
                <h4 class="text-lg sm:text-xl font-black text-slate-900 mb-3 font-display">Recovery</h4>
                <p class="text-slate-500 text-sm leading-relaxed max-w-xs mx-auto">Post-treatment care and follow-ups to ensure a complete and speedy recovery.</p>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
