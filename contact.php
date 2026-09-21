<?php include 'includes/header.php'; ?>

<!-- Page Header -->
<div class="relative pt-32 pb-32 lg:pt-40 lg:pb-40 overflow-hidden bg-gray-900">
    <!-- Background Image -->
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?auto=format&fit=crop&q=80" alt="Background" class="w-full h-full object-cover opacity-40">
    </div>
    <!-- Gradient Overlay for Readability -->
    <div class="absolute inset-0 bg-gradient-to-r from-gray-900 via-gray-900/80 to-transparent"></div>
    <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-transparent to-transparent"></div>
    
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl" data-aos="fade-right">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-brand-500/20 border border-brand-400/30 text-brand-300 text-sm font-bold tracking-widest uppercase mb-6 backdrop-blur-md">
                <span class="w-2 h-2 rounded-full bg-brand-400 animate-pulse"></span>
                Connect With Us
            </div>
            <h1 class="text-5xl lg:text-7xl font-extrabold text-white tracking-tight mb-6 font-display">Contact & Appointments</h1>
            <p class="text-xl text-gray-300 font-light leading-relaxed">Our team is ready to assist you. Book an appointment or reach out for general inquiries.</p>
        </div>
    </div>
    
    <!-- SVG Wave -->
    <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none z-20 translate-y-[1px]">
        <svg class="relative block w-full h-[40px] md:h-[80px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" preserveAspectRatio="none">
            <path d="M0,160 C320,300 420,0 740,120 C1060,240 1280,60 1440,160 L1440,320 L0,320 Z" fill="#ffffff"></path>
        </svg>
    </div>
</div>

<section class="py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12 lg:gap-16">
            
            <!-- Left Info Column -->
            <div class="lg:col-span-1 space-y-6">
                
                <div class="mb-8">
                    <h2 class="text-brand-600 font-bold tracking-wide uppercase mb-2">Get in Touch</h2>
                    <h3 class="text-3xl font-extrabold text-gray-900 font-display">We're here to help you.</h3>
                </div>

                <!-- Location Card -->
                <div class="group bg-white rounded-2xl p-6 shadow-sm border-2 border-gray-100 hover:border-blue-400 hover:shadow-[0_8px_30px_rgba(59,130,246,0.15)] hover:-translate-y-1 transition-all duration-300">
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center group-hover:bg-blue-600 group-hover:text-white transition-colors duration-300">
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h4 class="text-lg font-bold text-gray-900">Location</h4>
                            <p class="mt-1 text-gray-600 leading-relaxed">123 Health Avenue<br>Medical District, NY 10001</p>
                        </div>
                    </div>
                </div>
                
                <!-- Phone Card -->
                <div class="group bg-white rounded-2xl p-6 shadow-sm border-2 border-gray-100 hover:border-emerald-400 hover:shadow-[0_8px_30px_rgba(16,185,129,0.15)] hover:-translate-y-1 transition-all duration-300">
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center group-hover:bg-emerald-600 group-hover:text-white transition-colors duration-300">
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h4 class="text-lg font-bold text-gray-900">Phone</h4>
                            <p class="mt-1 text-gray-600">Inquiries: (555) 123-4567</p>
                            <p class="text-rose-500 font-bold mt-1">Emergency: (555) 911-0000</p>
                        </div>
                    </div>
                </div>

                <!-- Working Hours Card -->
                <div class="group bg-white rounded-2xl p-6 shadow-sm border-2 border-gray-100 hover:border-amber-400 hover:shadow-[0_8px_30px_rgba(245,158,11,0.15)] hover:-translate-y-1 transition-all duration-300">
                    <div class="flex items-start mb-4">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 rounded-xl bg-amber-50 text-amber-600 flex items-center justify-center group-hover:bg-amber-600 group-hover:text-white transition-colors duration-300">
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            </div>
                        </div>
                        <div class="ml-4 flex items-center">
                            <h4 class="text-lg font-bold text-gray-900">Working Hours</h4>
                        </div>
                    </div>
                    <ul class="space-y-3 text-sm text-gray-600 ml-1">
                        <li class="flex justify-between border-b border-gray-100 pb-2">
                            <span class="font-medium">Monday - Friday</span>
                            <span class="font-bold text-gray-900">8:00 AM - 8:00 PM</span>
                        </li>
                        <li class="flex justify-between border-b border-gray-100 pb-2">
                            <span class="font-medium">Saturday</span>
                            <span class="font-bold text-gray-900">9:00 AM - 5:00 PM</span>
                        </li>
                        <li class="flex justify-between border-b border-gray-100 pb-2">
                            <span class="font-medium">Sunday</span>
                            <span class="font-bold text-gray-900">Closed</span>
                        </li>
                        <li class="flex justify-between pt-1">
                            <span class="font-bold text-rose-500">Emergency Dept.</span>
                            <span class="font-bold text-rose-500">24/7 Open</span>
                        </li>
                    </ul>
                </div>
                
            </div>
            
            <!-- Right Form Column -->
            <div class="lg:col-span-2">
                <div class="bg-white rounded-3xl shadow-2xl border border-gray-100 p-8 md:p-12 relative overflow-hidden">
                    <!-- Decorative background element for the form -->
                    <div class="absolute top-0 right-0 w-64 h-64 bg-brand-50 rounded-full blur-3xl -mr-20 -mt-20 z-0"></div>
                    
                    <div class="relative z-10 mb-8">
                        <h3 class="text-3xl font-extrabold text-gray-900 font-display">Book an Appointment</h3>
                        <p class="text-gray-500 mt-2 text-lg">Fill out the form below and our staff will confirm your slot within 1 hour.</p>
                    </div>
                    
                    <form action="#" method="POST" class="relative z-10 space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="group">
                                <label for="first-name" class="block text-sm font-bold text-gray-700 mb-2 transition-colors group-focus-within:text-brand-600">First name</label>
                                <input type="text" name="first-name" id="first-name" class="w-full px-5 py-4 rounded-xl border-2 border-gray-200 focus:ring-0 focus:border-brand-500 transition-colors bg-gray-50 focus:bg-white text-gray-900 font-medium" placeholder="John" required>
                            </div>
                            <div class="group">
                                <label for="last-name" class="block text-sm font-bold text-gray-700 mb-2 transition-colors group-focus-within:text-brand-600">Last name</label>
                                <input type="text" name="last-name" id="last-name" class="w-full px-5 py-4 rounded-xl border-2 border-gray-200 focus:ring-0 focus:border-brand-500 transition-colors bg-gray-50 focus:bg-white text-gray-900 font-medium" placeholder="Doe" required>
                            </div>
                        </div>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="group">
                                <label for="email" class="block text-sm font-bold text-gray-700 mb-2 transition-colors group-focus-within:text-brand-600">Email address</label>
                                <input type="email" name="email" id="email" class="w-full px-5 py-4 rounded-xl border-2 border-gray-200 focus:ring-0 focus:border-brand-500 transition-colors bg-gray-50 focus:bg-white text-gray-900 font-medium" placeholder="john@example.com" required>
                            </div>
                            <div class="group">
                                <label for="phone" class="block text-sm font-bold text-gray-700 mb-2 transition-colors group-focus-within:text-brand-600">Phone number</label>
                                <input type="tel" name="phone" id="phone" class="w-full px-5 py-4 rounded-xl border-2 border-gray-200 focus:ring-0 focus:border-brand-500 transition-colors bg-gray-50 focus:bg-white text-gray-900 font-medium" placeholder="(555) 123-4567" required>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="group">
                                <label for="department" class="block text-sm font-bold text-gray-700 mb-2 transition-colors group-focus-within:text-brand-600">Department</label>
                                <div class="relative">
                                    <select id="department" name="department" class="w-full px-5 py-4 rounded-xl border-2 border-gray-200 focus:ring-0 focus:border-brand-500 transition-colors bg-gray-50 focus:bg-white text-gray-900 font-medium appearance-none cursor-pointer">
                                        <option>General Consultation</option>
                                        <option>Cardiology</option>
                                        <option>Neurology</option>
                                        <option>Orthopedics</option>
                                        <option>Pediatrics</option>
                                        <option>Surgery</option>
                                    </select>
                                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-5 text-gray-500">
                                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                                    </div>
                                </div>
                            </div>
                            <div class="group">
                                <label for="date" class="block text-sm font-bold text-gray-700 mb-2 transition-colors group-focus-within:text-brand-600">Preferred Date</label>
                                <input type="date" name="date" id="date" class="w-full px-5 py-4 rounded-xl border-2 border-gray-200 focus:ring-0 focus:border-brand-500 transition-colors bg-gray-50 focus:bg-white text-gray-900 font-medium cursor-pointer" required>
                            </div>
                        </div>

                        <div class="group">
                            <label for="message" class="block text-sm font-bold text-gray-700 mb-2 transition-colors group-focus-within:text-brand-600">Additional notes or symptoms (Optional)</label>
                            <textarea id="message" name="message" rows="4" class="w-full px-5 py-4 rounded-xl border-2 border-gray-200 focus:ring-0 focus:border-brand-500 transition-colors bg-gray-50 focus:bg-white text-gray-900 font-medium resize-none" placeholder="Please describe any symptoms or specific requests..."></textarea>
                        </div>
                        
                        <div class="pt-4">
                            <button type="submit" class="w-full bg-gradient-to-r from-brand-600 to-brand-500 text-white font-bold py-5 px-8 rounded-xl shadow-[0_10px_25px_rgba(2,132,199,0.3)] hover:shadow-[0_15px_35px_rgba(2,132,199,0.4)] transition-all transform hover:-translate-y-1 text-lg flex justify-center items-center gap-3">
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
