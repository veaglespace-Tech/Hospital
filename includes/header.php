<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cityview Medical Center</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800;900&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
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
                            800: '#075985',
                            900: '#0c4a6e',
                            950: '#082f49',
                        },
                    },
                    boxShadow: {
                        'glass': '0 8px 32px 0 rgba(31, 38, 135, 0.07)',
                        'neon': '0 0 20px rgba(14, 165, 233, 0.4)',
                        'premium': '0 20px 40px -10px rgba(2, 132, 199, 0.3)',
                    },
                    animation: {
                        'float': 'float 6s ease-in-out infinite',
                        'float-delayed': 'float 6s ease-in-out 3s infinite',
                        'pulse-slow': 'pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                        'ken-burns': 'ken-burns 20s ease-out infinite alternate',
                        'fade-in-up': 'fadeInUp 0.8s ease-out forwards',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-15px)' },
                        },
                        'ken-burns': {
                            '0%': { transform: 'scale(1) translate(0, 0)' },
                            '100%': { transform: 'scale(1.05) translate(-1%, -1%)' },
                        },
                        fadeInUp: {
                            '0%': { opacity: '0', transform: 'translateY(20px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        }
                    }
                }
            }
        }
    </script>
    <style>
        /* Fluid Typography & Base Styles */
        html {
            font-size: clamp(14px, 1vw + 10px, 18px);
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            -webkit-font-smoothing: antialiased;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        .font-display {
            font-family: 'Outfit', sans-serif;
        }

        .smooth-scroll {
            scroll-behavior: smooth;
        }

        /* Advanced Glassmorphism */
        .glass {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.5);
        }

        .glass-dark {
            background: rgba(15, 23, 42, 0.6);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
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
            height: 3px;
            bottom: -6px;
            left: 0;
            background: linear-gradient(90deg, #0ea5e9, #38bdf8);
            transform-origin: bottom right;
            transition: transform 0.4s cubic-bezier(0.86, 0, 0.07, 1);
            border-radius: 2px;
        }

        .hover-underline-anim:hover::after {
            transform: scaleX(1);
            transform-origin: bottom left;
        }

        /* Hide Scrollbar for cleaner look */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f5f9;
        }

        ::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #94a3b8;
        }

        /* Mobile Section Hiding Utility */
        @media (max-width: 768px) {
            .mobile-hide {
                display: none !important;
            }

            .mobile-shrink {
                transform: scale(0.9);
                transform-origin: top center;
            }
        }
    </style>
</head>

<body
    class="bg-gray-50 text-slate-800 flex flex-col min-h-screen smooth-scroll overflow-x-hidden selection:bg-brand-200 selection:text-brand-900">

    <!-- Top Bar -->
    <div class="bg-brand-900 text-white text-xs sm:text-sm py-2">
        <div
            class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col sm:flex-row justify-between items-center text-center sm:text-left">
            <div class="hidden sm:flex items-center gap-4 mb-2 sm:mb-0">
                <span class="flex items-center gap-1">
                    <svg class="w-4 h-4 text-brand-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    Mon - Sat: 8:00 AM - 8:00 PM
                </span>
                <span class="hidden sm:inline text-gray-400">|</span>
                <span class="flex items-center gap-1">
                    <svg class="w-4 h-4 text-brand-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                        </path>
                    </svg>
                    info@cityviewmedical.com
                </span>
            </div>
            <div class="flex items-center justify-center w-full sm:w-auto gap-2 py-1 sm:py-0">
                <span class="font-bold text-red-400 flex items-center gap-1">
                    <svg class="w-4 h-4 animate-pulse" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                            clip-rule="evenodd"></path>
                    </svg>
                    24/7 EMERGENCY: (555) 911-0000
                </span>
            </div>
        </div>
    </div>

    <!-- Navbar -->
    <header class="glass sticky top-0 z-50 shadow-sm transition-all duration-300" id="main-header">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20 sm:h-24 items-center">
                <div class="flex-shrink-0 flex items-center">
                    <a href="index.php"
                        class="text-2xl sm:text-3xl font-extrabold text-brand-700 flex items-center gap-3 group">
                        <div
                            class="p-2 sm:p-2.5 bg-gradient-to-br from-brand-50 to-brand-100 rounded-xl sm:rounded-2xl shadow-sm group-hover:shadow-md transition-all duration-300 transform group-hover:-rotate-3">
                            <svg class="w-8 h-8 sm:w-10 sm:h-10 text-brand-600" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                                </path>
                            </svg>
                        </div>
                        <div class="flex flex-col">
                            <span class="leading-none tracking-tight">Cityview</span>
                            <span
                                class="text-[0.65rem] sm:text-xs font-bold text-slate-500 tracking-[0.2em] uppercase mt-1">Medical
                                Center</span>
                        </div>
                    </a>
                </div>
                <nav class="hidden lg:flex space-x-10">
                    <a href="index.php"
                        class="text-slate-700 hover:text-brand-600 py-2 text-base font-bold transition-colors hover-underline-anim">Home</a>
                    <a href="about.php"
                        class="text-slate-700 hover:text-brand-600 py-2 text-base font-bold transition-colors hover-underline-anim">About
                        Us</a>
                    <a href="services.php"
                        class="text-slate-700 hover:text-brand-600 py-2 text-base font-bold transition-colors hover-underline-anim">Services</a>
                    <a href="gallery.php"
                        class="text-slate-700 hover:text-brand-600 py-2 text-base font-bold transition-colors hover-underline-anim">Gallery</a>
                    <a href="contact.php"
                        class="text-slate-700 hover:text-brand-600 py-2 text-base font-bold transition-colors hover-underline-anim">Contact</a>
                </nav>
                <div class="hidden lg:flex items-center">
                    <a href="contact.php"
                        class="bg-gradient-to-r from-brand-600 to-brand-500 text-white px-8 py-3.5 rounded-full font-bold hover:from-brand-500 hover:to-brand-400 transition-all shadow-premium hover:-translate-y-1">Book
                        Appointment</a>
                </div>
                <!-- Mobile menu button -->
                <div class="flex items-center lg:hidden">
                    <button type="button" id="mobile-menu-button"
                        class="inline-flex items-center justify-center p-2.5 rounded-xl text-slate-600 bg-slate-100 hover:bg-brand-50 hover:text-brand-600 focus:outline-none transition-all active:scale-95"
                        aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu (Hidden by default) -->
        <div class="lg:hidden hidden border-t border-slate-100 absolute w-full glass shadow-2xl transition-all duration-300 origin-top"
            id="mobile-menu">
            <div class="px-4 pt-4 pb-8 space-y-3 sm:px-6">
                <a href="index.php"
                    class="block px-4 py-3 rounded-xl text-base font-bold text-slate-800 hover:text-brand-600 hover:bg-white/80 transition-all shadow-sm">Home</a>
                <a href="about.php"
                    class="block px-4 py-3 rounded-xl text-base font-bold text-slate-800 hover:text-brand-600 hover:bg-white/80 transition-all shadow-sm">About
                    Us</a>
                <a href="services.php"
                    class="block px-4 py-3 rounded-xl text-base font-bold text-slate-800 hover:text-brand-600 hover:bg-white/80 transition-all shadow-sm">Services</a>
                <a href="gallery.php"
                    class="block px-4 py-3 rounded-xl text-base font-bold text-slate-800 hover:text-brand-600 hover:bg-white/80 transition-all shadow-sm">Gallery</a>
                <a href="contact.php"
                    class="block px-4 py-3 rounded-xl text-base font-bold text-slate-800 hover:text-brand-600 hover:bg-white/80 transition-all shadow-sm">Contact</a>
                <a href="contact.php"
                    class="block px-4 py-4 mt-6 text-center rounded-xl text-base font-bold bg-gradient-to-r from-brand-600 to-brand-500 text-white shadow-premium">Book
                    Appointment</a>
            </div>
        </div>
    </header>

    <!-- Mobile Menu Toggle Script & Header Scroll -->
    <script>
        document.getElementById('mobile-menu-button').addEventListener('click', function () {
            var menu = document.getElementById('mobile-menu');
            if (menu.classList.contains('hidden')) {
                menu.classList.remove('hidden');
                menu.classList.add('animate-fade-in-up');
                this.innerHTML = '<span class="sr-only">Close main menu</span><svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>';
            } else {
                menu.classList.add('hidden');
                menu.classList.remove('animate-fade-in-up');
                this.innerHTML = '<span class="sr-only">Open main menu</span><svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" /></svg>';
            }
        });

        // Add scrolled state to header
        window.addEventListener('scroll', () => {
            const header = document.getElementById('main-header');
            if (window.scrollY > 10) {
                header.classList.add('shadow-md', 'bg-white/95');
                header.classList.remove('bg-white/70');
            } else {
                header.classList.remove('shadow-md', 'bg-white/95');
                header.classList.add('bg-white/70');
            }
        });
    </script>
    <main class="flex-grow">
