<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cityview Medical Center</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            50: '#f0f9ff',
                            100: '#e0f2fe',
                            500: '#0ea5e9',
                            600: '#0284c7',
                            900: '#0c4a6e',
                            red: '#ef4444',
                        },
                    }
                }
            }
        }
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
        .smooth-scroll { scroll-behavior: smooth; }
    </style>
</head>
<body class="bg-gray-50 text-gray-800 antialiased flex flex-col min-h-screen smooth-scroll">
    
    <!-- Top Bar -->
    <div class="bg-brand-900 text-white text-xs sm:text-sm py-2">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col sm:flex-row justify-between items-center">
            <div class="flex items-center gap-4 mb-2 sm:mb-0">
                <span class="flex items-center gap-1">
                    <svg class="w-4 h-4 text-brand-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    Mon - Sat: 8:00 AM - 8:00 PM
                </span>
                <span class="hidden sm:inline text-gray-400">|</span>
                <span class="flex items-center gap-1">
                    <svg class="w-4 h-4 text-brand-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    info@cityviewmedical.com
                </span>
            </div>
            <div class="flex items-center gap-2">
                <span class="font-bold text-red-400 flex items-center gap-1">
                    <svg class="w-4 h-4 animate-pulse" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"></path></svg>
                    24/7 EMERGENCY: (555) 911-0000
                </span>
            </div>
        </div>
    </div>

    <!-- Navbar -->
    <header class="bg-white shadow-md sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-24 items-center">
                <div class="flex-shrink-0 flex items-center">
                    <a href="index.php" class="text-3xl font-extrabold text-brand-600 flex items-center gap-3">
                        <div class="p-2 bg-brand-50 rounded-xl">
                            <svg class="w-10 h-10 text-brand-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                        </div>
                        <div class="flex flex-col">
                            <span class="leading-none">Cityview</span>
                            <span class="text-sm font-medium text-gray-500 tracking-widest uppercase mt-1">Medical Center</span>
                        </div>
                    </a>
                </div>
                <nav class="hidden lg:flex space-x-10">
                    <a href="index.php" class="text-gray-700 hover:text-brand-600 py-2 text-base font-semibold transition-colors border-b-2 border-transparent hover:border-brand-600">Home</a>
                    <a href="about.php" class="text-gray-700 hover:text-brand-600 py-2 text-base font-semibold transition-colors border-b-2 border-transparent hover:border-brand-600">About Us</a>
                    <a href="services.php" class="text-gray-700 hover:text-brand-600 py-2 text-base font-semibold transition-colors border-b-2 border-transparent hover:border-brand-600">Services</a>
                    <a href="gallery.php" class="text-gray-700 hover:text-brand-600 py-2 text-base font-semibold transition-colors border-b-2 border-transparent hover:border-brand-600">Gallery</a>
                    <a href="contact.php" class="text-gray-700 hover:text-brand-600 py-2 text-base font-semibold transition-colors border-b-2 border-transparent hover:border-brand-600">Contact</a>
                </nav>
                <div class="hidden md:flex items-center">
                    <a href="contact.php" class="bg-brand-600 text-white px-8 py-3 rounded-full font-bold hover:bg-brand-500 transition-all shadow-lg hover:shadow-brand-500/30 transform hover:-translate-y-0.5">Book Appointment</a>
                </div>
            </div>
        </div>
    </header>
    <main class="flex-grow">
