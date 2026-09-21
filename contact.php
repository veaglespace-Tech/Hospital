<?php include 'includes/header.php'; ?>

<!-- Page Header -->
<div class="relative pt-32 pb-32 lg:pt-48 lg:pb-40 overflow-hidden bg-slate-950">
    <!-- Background Image & Gradients -->
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?auto=format&fit=crop&q=80" alt="Background" class="w-full h-full object-cover opacity-50">
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
                Connect With Us
            </div>
            <h1 class="text-5xl sm:text-6xl lg:text-7xl font-black text-white tracking-tight mb-6 sm:mb-8 font-display leading-[1.1]">Contact & <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-300 to-indigo-300">Appointments</span></h1>
            <p class="text-lg sm:text-xl text-slate-300 font-light leading-relaxed max-w-2xl">Our team is ready to assist you. Book an appointment or reach out for general inquiries.</p>
        </div>
    </div>
    
    <!-- SVG Wave -->
    <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none z-20 translate-y-[1px]">
        <svg class="relative block w-full h-[40px] md:h-[80px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" preserveAspectRatio="none">
            <path d="M0,160 C320,300 420,0 740,120 C1060,240 1280,60 1440,160 L1440,320 L0,320 Z" fill="#f8fafc"></path>
        </svg>
    </div>
</div>

<section class="py-24 sm:py-32 bg-slate-50 relative overflow-hidden">
    <!-- Subtle Background Pattern -->
    <div class="absolute inset-0 opacity-[0.03] bg-[radial-gradient(#6366f1_1px,transparent_1px)] [background-size:20px_20px]"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12 lg:gap-16">
            
            <!-- Left Info Column -->
            <div class="lg:col-span-1 space-y-6 lg:space-y-8" data-aos="fade-up" data-aos-delay="100">
                
                <div class="mb-8">
                    <h2 class="text-brand-600 font-bold tracking-wide uppercase mb-2 text-sm sm:text-base">Get in Touch</h2>
                    <h3 class="text-3xl sm:text-4xl font-black text-slate-900 font-display">We're here to help you.</h3>
                </div>

                <!-- Location Card -->
                <div class="group bg-white rounded-[1.5rem] p-6 shadow-[0_10px_40px_-15px_rgba(0,0,0,0.05)] border border-slate-100 hover:border-blue-200 hover:shadow-[0_20px_50px_-15px_rgba(59,130,246,0.2)] hover:-translate-y-1 transition-all duration-300">
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 rounded-2xl bg-blue-50 text-blue-600 flex items-center justify-center group-hover:bg-blue-600 group-hover:text-white transition-colors duration-300">
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h4 class="text-lg font-bold text-slate-900 font-display">Location</h4>
                            <p class="mt-2 text-slate-600 leading-relaxed text-sm sm:text-base">123 Health Avenue<br>Medical District, NY 10001</p>
                        </div>
                    </div>
                </div>
                
                <!-- Phone Card -->
                <div class="group bg-white rounded-[1.5rem] p-6 shadow-[0_10px_40px_-15px_rgba(0,0,0,0.05)] border border-slate-100 hover:border-emerald-200 hover:shadow-[0_20px_50px_-15px_rgba(16,185,129,0.2)] hover:-translate-y-1 transition-all duration-300">
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 rounded-2xl bg-emerald-50 text-emerald-600 flex items-center justify-center group-hover:bg-emerald-600 group-hover:text-white transition-colors duration-300">
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h4 class="text-lg font-bold text-slate-900 font-display">Phone</h4>
                            <p class="mt-2 text-slate-600 text-sm sm:text-base">Inquiries: (555) 123-4567</p>
                            <p class="text-rose-500 font-bold mt-1 text-sm sm:text-base">Emergency: (555) 911-0000</p>
                        </div>
                    </div>
                </div>

                <!-- Working Hours Card -->
                <div class="group bg-white rounded-[1.5rem] p-6 shadow-[0_10px_40px_-15px_rgba(0,0,0,0.05)] border border-slate-100 hover:border-amber-200 hover:shadow-[0_20px_50px_-15px_rgba(245,158,11,0.2)] hover:-translate-y-1 transition-all duration-300">
                    <div class="flex items-start mb-5">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 rounded-2xl bg-amber-50 text-amber-600 flex items-center justify-center group-hover:bg-amber-600 group-hover:text-white transition-colors duration-300">
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            </div>
                        </div>
                        <div class="ml-4 flex items-center h-12">
                            <h4 class="text-lg font-bold text-slate-900 font-display">Working Hours</h4>
                        </div>
                    </div>
                    <ul class="space-y-4 text-sm sm:text-base text-slate-600 ml-1">
                        <li class="flex justify-between border-b border-slate-100 pb-3">
                            <span class="font-medium">Monday - Friday</span>
                            <span class="font-bold text-slate-900">8:00 AM - 8:00 PM</span>
                        </li>
                        <li class="flex justify-between border-b border-slate-100 pb-3">
                            <span class="font-medium">Saturday</span>
                            <span class="font-bold text-slate-900">9:00 AM - 5:00 PM</span>
                        </li>
                        <li class="flex justify-between border-b border-slate-100 pb-3">
                            <span class="font-medium">Sunday</span>
                            <span class="font-bold text-slate-900">Closed</span>
                        </li>
                        <li class="flex justify-between pt-2">
                            <span class="font-bold text-rose-500">Emergency Dept.</span>
                            <span class="font-bold text-rose-500">24/7 Open</span>
                        </li>
                    </ul>
                </div>
                
            </div>
            
            <!-- Right Form Column -->
            <div class="lg:col-span-2" data-aos="fade-up" data-aos-delay="200">
                <div class="bg-white rounded-[2rem] shadow-[0_20px_50px_-15px_rgba(0,0,0,0.1)] border border-slate-100 p-6 sm:p-8 lg:p-10 relative overflow-hidden h-full">
                    <!-- Decorative background element for the form -->
                    <div class="absolute top-0 right-0 w-[40rem] h-[40rem] bg-gradient-to-br from-brand-50 to-indigo-50/50 rounded-full blur-[100px] -mr-40 -mt-40 z-0"></div>
                    
                    <div class="relative z-10 mb-8">
                        <h3 class="text-2xl sm:text-3xl font-black text-slate-900 font-display">Book an Appointment</h3>
                        <p class="text-slate-500 mt-2 text-base leading-relaxed">Fill out the form below and our staff will confirm your slot within 1 hour.</p>
                    </div>
                    
                    <form action="#" method="POST" class="relative z-10 space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="group">
                                <label for="first-name" class="block text-sm font-bold text-slate-700 mb-1.5 transition-colors group-focus-within:text-brand-600">First name</label>
                                <input type="text" name="first-name" id="first-name" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-4 focus:ring-brand-500/10 focus:border-brand-500 transition-all bg-slate-50 focus:bg-white text-slate-900 font-medium placeholder-slate-400 text-sm" placeholder="John" required>
                            </div>
                            <div class="group">
                                <label for="last-name" class="block text-sm font-bold text-slate-700 mb-1.5 transition-colors group-focus-within:text-brand-600">Last name</label>
                                <input type="text" name="last-name" id="last-name" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-4 focus:ring-brand-500/10 focus:border-brand-500 transition-all bg-slate-50 focus:bg-white text-slate-900 font-medium placeholder-slate-400 text-sm" placeholder="Doe" required>
                            </div>
                        </div>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="group">
                                <label for="email" class="block text-sm font-bold text-slate-700 mb-1.5 transition-colors group-focus-within:text-brand-600">Email address</label>
                                <input type="email" name="email" id="email" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-4 focus:ring-brand-500/10 focus:border-brand-500 transition-all bg-slate-50 focus:bg-white text-slate-900 font-medium placeholder-slate-400 text-sm" placeholder="john@example.com" required>
                            </div>
                            <div class="group">
                                <label for="phone" class="block text-sm font-bold text-slate-700 mb-1.5 transition-colors group-focus-within:text-brand-600">Phone number</label>
                                <input type="tel" name="phone" id="phone" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-4 focus:ring-brand-500/10 focus:border-brand-500 transition-all bg-slate-50 focus:bg-white text-slate-900 font-medium placeholder-slate-400 text-sm" placeholder="(555) 123-4567" required>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="group">
                                <label for="department" class="block text-sm font-bold text-slate-700 mb-1.5 transition-colors group-focus-within:text-brand-600">Department</label>
                                <div class="relative">
                                    <select id="department" name="department" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-4 focus:ring-brand-500/10 focus:border-brand-500 transition-all bg-slate-50 focus:bg-white text-slate-900 font-medium appearance-none cursor-pointer text-sm">
                                        <option>General Consultation</option>
                                        <option>Cardiology</option>
                                        <option>Neurology</option>
                                        <option>Orthopedics</option>
                                        <option>Pediatrics</option>
                                        <option>Surgery</option>
                                    </select>
                                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-slate-500">
                                        <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                                    </div>
                                </div>
                            </div>
                            <div class="group">
                                <label for="date" class="block text-sm font-bold text-slate-700 mb-1.5 transition-colors group-focus-within:text-brand-600">Preferred Date</label>
                                <input type="date" name="date" id="date" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-4 focus:ring-brand-500/10 focus:border-brand-500 transition-all bg-slate-50 focus:bg-white text-slate-900 font-medium cursor-pointer text-sm" required>
                            </div>
                        </div>

                        <div class="group">
                            <label for="message" class="block text-sm font-bold text-slate-700 mb-1.5 transition-colors group-focus-within:text-brand-600">Additional notes or symptoms (Optional)</label>
                            <textarea id="message" name="message" rows="3" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-4 focus:ring-brand-500/10 focus:border-brand-500 transition-all bg-slate-50 focus:bg-white text-slate-900 font-medium resize-none placeholder-slate-400 text-sm" placeholder="Please describe any symptoms or specific requests..."></textarea>
                        </div>
                        
                        <div class="pt-4">
                            <button type="submit" class="w-full bg-gradient-to-r from-brand-600 to-indigo-600 text-white font-bold py-4 px-6 rounded-xl shadow-[0_10px_25px_-5px_rgba(2,132,199,0.4)] hover:shadow-[0_20px_35px_-5px_rgba(2,132,199,0.5)] transition-all duration-300 transform hover:-translate-y-1 text-base flex justify-center items-center gap-3">
                                <span>Request Appointment</span>
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
