<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cityview Medical Center</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- AOS Animation CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                        display: ['Outfit', 'sans-serif'],
                    },
                    colors: {
                        brand: {
                            50: '#f0f9ff',
                            100: '#e0f2fe',
                            200: '#bae6fd',
                            300: '#7dd3fc',
                            400: '#38bdf8',
                            500: '#0ea5e9',
                            600: '#0284c7',
                            700: '#0369a1',
                            900: '#0c4a6e',
                            red: '#ef4444',
                        },
                    },
                    dropShadow: {
                        'glow': '0 0 15px rgba(14, 165, 233, 0.5)',
                        'glow-lg': '0 0 25px rgba(14, 165, 233, 0.7)',
                    },
                    boxShadow: {
                        'neon': '0 0 20px rgba(14, 165, 233, 0.4), inset 0 0 10px rgba(14, 165, 233, 0.1)',
                        'glow-brand': '0 10px 30px -10px rgba(14, 165, 233, 0.5)',
                        'glow-brand-hover': '0 20px 40px -10px rgba(14, 165, 233, 0.7)',
                    },
                    animation: {
                        'float': 'float 6s ease-in-out infinite',
                        'float-delayed': 'float 6s ease-in-out 3s infinite',
                        'pulse-glow': 'pulse-glow 2s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                        'ken-burns': 'ken-burns 20s ease-in-out infinite alternate',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-10px)' },
                        },
                        'pulse-glow': {
                            '0%, 100%': { opacity: '1', filter: 'drop-shadow(0 0 15px rgba(14, 165, 233, 0.5))' },
                            '50%': { opacity: '.7', filter: 'drop-shadow(0 0 25px rgba(14, 165, 233, 0.8))' },
                        },
                        'ken-burns': {
                            '0%': { transform: 'scale(1) translate(0, 0)' },
                            '100%': { transform: 'scale(1.1) translate(-2%, -1%)' },
                        }
                    }
                }
            }
        }
    </script>
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        h1, h2, h3, h4, h5, h6, .font-display { font-family: 'Outfit', sans-serif; }
        .smooth-scroll { scroll-behavior: smooth; }
        
        /* Glassmorphism utility */
        .glass {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .glass-card {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        /* Premium Hover Underline */
        .hover-underline-anim {
            display: inline-block;
            position: relative;
        }
        .hover-underline-anim::after {
            content: '';
            position: absolute;
            width: 100%;
            transform: scaleX(0);
            height: 2px;
            bottom: -2px;
            left: 0;
            background-color: currentColor;
            transform-origin: bottom right;
            transition: transform 0.3s ease-out;
        }
        .hover-underline-anim:hover::after {
            transform: scaleX(1);
            transform-origin: bottom left;
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800 antialiased flex flex-col min-h-screen smooth-scroll overflow-x-hidden">
    
    <!-- Top Bar -->
    <div class="bg-brand-900 text-white text-xs sm:text-sm py-2">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col sm:flex-row justify-between items-center text-center sm:text-left">
            <div class="hidden sm:flex items-center gap-4 mb-2 sm:mb-0">
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
            <div class="flex items-center justify-center w-full sm:w-auto gap-2 py-1 sm:py-0">
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
                    <a href="index.php" class="text-gray-700 hover:text-brand-600 py-2 text-base font-semibold transition-colors hover-underline-anim">Home</a>
                    <a href="about.php" class="text-gray-700 hover:text-brand-600 py-2 text-base font-semibold transition-colors hover-underline-anim">About Us</a>
                    <a href="services.php" class="text-gray-700 hover:text-brand-600 py-2 text-base font-semibold transition-colors hover-underline-anim">Services</a>
                    <a href="gallery.php" class="text-gray-700 hover:text-brand-600 py-2 text-base font-semibold transition-colors hover-underline-anim">Gallery</a>
                    <a href="contact.php" class="text-gray-700 hover:text-brand-600 py-2 text-base font-semibold transition-colors hover-underline-anim">Contact</a>
                </nav>
                <div class="hidden lg:flex items-center">
                    <a href="contact.php" class="bg-brand-600 text-white px-8 py-3 rounded-full font-bold hover:bg-brand-500 transition-all shadow-lg hover:shadow-brand-500/30 transform hover:-translate-y-0.5">Book Appointment</a>
                </div>
                <!-- Mobile menu button -->
                <div class="flex items-center lg:hidden">
                    <button type="button" id="mobile-menu-button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-brand-500 transition-colors" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="block h-8 w-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu (Hidden by default) -->
        <div class="lg:hidden hidden border-t border-gray-100 absolute w-full bg-white shadow-xl" id="mobile-menu">
            <div class="px-4 pt-2 pb-6 space-y-2 sm:px-6">
                <a href="index.php" class="block px-3 py-3 rounded-md text-base font-bold text-gray-900 hover:text-brand-600 hover:bg-brand-50 transition-colors">Home</a>
                <a href="about.php" class="block px-3 py-3 rounded-md text-base font-bold text-gray-900 hover:text-brand-600 hover:bg-brand-50 transition-colors">About Us</a>
                <a href="services.php" class="block px-3 py-3 rounded-md text-base font-bold text-gray-900 hover:text-brand-600 hover:bg-brand-50 transition-colors">Services</a>
                <a href="gallery.php" class="block px-3 py-3 rounded-md text-base font-bold text-gray-900 hover:text-brand-600 hover:bg-brand-50 transition-colors">Gallery</a>
                <a href="contact.php" class="block px-3 py-3 rounded-md text-base font-bold text-gray-900 hover:text-brand-600 hover:bg-brand-50 transition-colors">Contact</a>
                <a href="contact.php" class="block px-3 py-3 mt-4 text-center rounded-full text-base font-bold bg-brand-600 text-white hover:bg-brand-500 shadow-md">Book Appointment</a>
            </div>
        </div>
    </header>

    <!-- Mobile Menu Toggle Script -->
    <script>
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            var menu = document.getElementById('mobile-menu');
            if (menu.classList.contains('hidden')) {
                menu.classList.remove('hidden');
                // Optional: change icon to "X"
                this.innerHTML = '<span class="sr-only">Close main menu</span><svg class="block h-8 w-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>';
            } else {
                menu.classList.add('hidden');
                // Optional: change icon back to hamburger
                this.innerHTML = '<span class="sr-only">Open main menu</span><svg class="block h-8 w-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" /></svg>';
            }
        });
    </script>
    <main class="flex-grow">
