<?php include 'includes/header.php'; ?>

<!-- Page Header -->
<div class="bg-gray-50 py-16 border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl font-extrabold text-gray-900 mb-4">Contact & Appointments</h1>
        <p class="text-xl text-gray-600 max-w-2xl mx-auto">Our team is ready to assist you. Book an appointment or reach out for general inquiries.</p>
    </div>
</div>

<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-16">
            
            <!-- Left Info Column -->
            <div class="lg:col-span-1 space-y-12">
                
                <!-- Contact Details -->
                <div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">Get in Touch</h3>
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="flex-shrink-0 mt-1">
                                <div class="w-10 h-10 rounded-full bg-brand-50 flex items-center justify-center text-brand-600">
                                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-base font-bold text-gray-900">Location</h4>
                                <p class="mt-1 text-gray-600">123 Health Avenue<br>Medical District, NY 10001</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="flex-shrink-0 mt-1">
                                <div class="w-10 h-10 rounded-full bg-brand-50 flex items-center justify-center text-brand-600">
                                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-base font-bold text-gray-900">Phone</h4>
                                <p class="mt-1 text-gray-600">Inquiries: (555) 123-4567<br><span class="text-red-500 font-bold">Emergency: (555) 911-0000</span></p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Working Hours -->
                <div class="bg-gray-50 rounded-2xl p-6 border border-gray-100">
                    <h3 class="text-lg font-bold text-gray-900 mb-4">Working Hours</h3>
                    <ul class="space-y-3 text-sm text-gray-600">
                        <li class="flex justify-between border-b border-gray-200 pb-2">
                            <span>Monday - Friday</span>
                            <span class="font-semibold text-gray-900">8:00 AM - 8:00 PM</span>
                        </li>
                        <li class="flex justify-between border-b border-gray-200 pb-2">
                            <span>Saturday</span>
                            <span class="font-semibold text-gray-900">9:00 AM - 5:00 PM</span>
                        </li>
                        <li class="flex justify-between border-b border-gray-200 pb-2">
                            <span>Sunday</span>
                            <span class="font-semibold text-gray-900">Closed (Emergencies Only)</span>
                        </li>
                        <li class="flex justify-between pt-1">
                            <span class="font-bold text-red-500">Emergency Dept.</span>
                            <span class="font-bold text-red-500">24/7 Open</span>
                        </li>
                    </ul>
                </div>
                
                <!-- Visitor Info -->
                <div>
                    <h3 class="text-lg font-bold text-gray-900 mb-3">Visitor Information</h3>
                    <p class="text-sm text-gray-600 leading-relaxed mb-2">Free parking is available in the West Garage for all patients. Valet service is available at the main entrance.</p>
                    <p class="text-sm text-gray-600 leading-relaxed">General visiting hours are from 10:00 AM to 8:00 PM daily. Only 2 visitors allowed per patient at a time.</p>
                </div>
                
            </div>
            
            <!-- Right Form Column -->
            <div class="lg:col-span-2">
                <div class="bg-white rounded-3xl shadow-2xl shadow-brand-900/5 border border-gray-100 p-8 md:p-12">
                    <div class="mb-8">
                        <h3 class="text-3xl font-extrabold text-gray-900">Book an Appointment</h3>
                        <p class="text-gray-500 mt-2">Fill out the form below and our staff will confirm your slot within 1 hour.</p>
                    </div>
                    
                    <form action="#" method="POST" class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="first-name" class="block text-sm font-semibold text-gray-700 mb-2">First name</label>
                                <input type="text" name="first-name" id="first-name" class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-brand-500 focus:border-brand-500 transition-colors bg-gray-50 focus:bg-white" placeholder="John" required>
                            </div>
                            <div>
                                <label for="last-name" class="block text-sm font-semibold text-gray-700 mb-2">Last name</label>
                                <input type="text" name="last-name" id="last-name" class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-brand-500 focus:border-brand-500 transition-colors bg-gray-50 focus:bg-white" placeholder="Doe" required>
                            </div>
                        </div>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">Email address</label>
                                <input type="email" name="email" id="email" class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-brand-500 focus:border-brand-500 transition-colors bg-gray-50 focus:bg-white" placeholder="john@example.com" required>
                            </div>
                            <div>
                                <label for="phone" class="block text-sm font-semibold text-gray-700 mb-2">Phone number</label>
                                <input type="tel" name="phone" id="phone" class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-brand-500 focus:border-brand-500 transition-colors bg-gray-50 focus:bg-white" placeholder="(555) 123-4567" required>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="department" class="block text-sm font-semibold text-gray-700 mb-2">Department</label>
                                <select id="department" name="department" class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-brand-500 focus:border-brand-500 transition-colors bg-gray-50 focus:bg-white">
                                    <option>General Consultation</option>
                                    <option>Cardiology</option>
                                    <option>Neurology</option>
                                    <option>Orthopedics</option>
                                    <option>Pediatrics</option>
                                    <option>Surgery</option>
                                </select>
                            </div>
                            <div>
                                <label for="date" class="block text-sm font-semibold text-gray-700 mb-2">Preferred Date</label>
                                <input type="date" name="date" id="date" class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-brand-500 focus:border-brand-500 transition-colors bg-gray-50 focus:bg-white" required>
                            </div>
                        </div>

                        <div>
                            <label for="message" class="block text-sm font-semibold text-gray-700 mb-2">Additional notes or symptoms (Optional)</label>
                            <textarea id="message" name="message" rows="4" class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-brand-500 focus:border-brand-500 transition-colors bg-gray-50 focus:bg-white" placeholder="Please describe any symptoms or specific requests..."></textarea>
                        </div>
                        
                        <div>
                            <button type="submit" class="w-full bg-brand-600 text-white font-bold py-4 px-8 rounded-xl shadow-lg hover:bg-brand-500 hover:shadow-brand-500/30 transition-all transform hover:-translate-y-0.5">
                                Request Appointment
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
