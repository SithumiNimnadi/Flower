<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Olivia Flowers Premium Services</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#10b981',
                        'primary-dark': '#059669',
                        secondary: '#f97316',
                        'secondary-dark': '#ea580c',
                        accent: '#8b5cf6',
                        'accent-dark': '#7c3aed',
                        'neutral-50': '#fafafa',
                        'neutral-900': '#171717'
                    },
                    fontFamily: {
                        'sans': ['Inter', 'system-ui', 'sans-serif']
                    },
                    animation: {
                        'fade-in': 'fadeIn 1s ease-out',
                        'fade-in-up': 'fadeInUp 1s ease-out',
                        'fade-in-down': 'fadeInDown 1s ease-out',
                        'fade-in-left': 'fadeInLeft 1s ease-out',
                        'fade-in-right': 'fadeInRight 1s ease-out',
                        'slide-up': 'slideUp 1s ease-out',
                        'slide-down': 'slideDown 1s ease-out',
                        'float': 'float 6s ease-in-out infinite',
                        'bounce-slow': 'bounce 3s infinite',
                        'pulse-slow': 'pulse 4s infinite',
                        'wiggle': 'wiggle 1s ease-in-out infinite',
                        'scale-in': 'scaleIn 0.8s ease-out',
                        'rotate-slow': 'rotateSlow 20s linear infinite',
                        'shimmer': 'shimmer 2s linear infinite',
                        'typewriter': 'typewriter 4s steps(40) infinite'
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': { opacity: '0' },
                            '100%': { opacity: '1' }
                        },
                        fadeInUp: {
                            '0%': { opacity: '0', transform: 'translateY(60px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' }
                        },
                        fadeInDown: {
                            '0%': { opacity: '0', transform: 'translateY(-60px)' },
                            '100%': { transform: 'translateY(0)' }
                        },
                        fadeInLeft: {
                            '0%': { opacity: '0', transform: 'translateX(-60px)' },
                            '100%': { transform: 'translateX(0)' }
                        },
                        fadeInRight: {
                            '0%': { opacity: '0', transform: 'translateX(60px)' },
                            '100%': { transform: 'translateX(0)' }
                        },
                        slideUp: {
                            '0%': { opacity: '0', transform: 'translateY(100px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' }
                        },
                        slideDown: {
                            '0%': { opacity: '0', transform: 'translateY(-100px)' },
                            '100%': { transform: 'translateY(0)' }
                        },
                        float: {
                            '0%, 100%': { transform: 'translateY(0px) rotate(0deg)' },
                            '50%': { transform: 'translateY(-20px) rotate(5deg)' }
                        },
                        wiggle: {
                            '0%, 100%': { transform: 'rotate(-3deg)' },
                            '50%': { transform: 'rotate(3deg)' }
                        },
                        scaleIn: {
                            '0%': { opacity: '0', transform: 'scale(0.9)' },
                            '100%': { opacity: '1', transform: 'scale(1)' }
                        },
                        rotateSlow: {
                            '0%': { transform: 'rotate(0deg)' },
                            '100%': { transform: 'rotate(360deg)' }
                        },
                        shimmer: {
                            '0%': { transform: 'translateX(-100%)' },
                            '100%': { transform: 'translateX(100%)' }
                        },
                        typewriter: {
                            '0%': { width: '0%' },
                            '50%': { width: '100%' },
                            '100%': { width: '0%' }
                        }
                    }
                }
            }
        };
    </script>
    <style>
        body {
            font-family: 'Inter', system-ui, sans-serif;
            overflow-x: hidden;
        }
        
        .hero-gradient {
            background: linear-gradient(135deg, rgba(16, 185, 129, 0.9) 0%, rgba(5, 150, 105, 0.9) 50%, rgba(4, 120, 87, 0.9) 100%);
        }
        
        .glass-effect {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
        
        .card-hover {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .card-hover:hover {
            transform: translateY(-12px) scale(1.02);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        }
        
        .btn-gradient {
            background: linear-gradient(135deg, #10b981, #059669);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .btn-gradient::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
            transition: left 0.5s;
        }
        
        .btn-gradient:hover::before {
            left: 100%;
        }
        
        .btn-gradient:hover {
            background: linear-gradient(135deg, #059669, #047857);
            transform: translateY(-3px);
            box-shadow: 0 15px 35px rgba(16, 185, 129, 0.4);
        }
        
        .parallax-element {
            transition: transform 0.3s ease-out;
        }
        
        .image-overlay {
            background: linear-gradient(45deg, rgba(16, 185, 129, 0.1), rgba(8, 145, 178, 0.1));
        }
        
        .hero-bg {
            background-image: url('https://images.unsplash.com/photo-1487070183336-b863922373d4?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }
        
        .service-icon {
            transition: all 0.3s ease;
        }
        
        .service-icon:hover {
            transform: scale(1.1) rotate(5deg);
        }
        
        .stagger-animation {
            animation-fill-mode: both;
        }
        
        .text-gradient {
            background: linear-gradient(135deg, #10b981, #059669, #8b5cf6);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        @keyframes float-reverse {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(15px) rotate(-5deg); }
        }
        
        .float-reverse {
            animation: float-reverse 8s ease-in-out infinite;
        }

        .section-animate {
            opacity: 0;
            transform: translateY(60px);
        }
        .section-animate.animate-fade-in-up {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>
<body class="bg-white text-gray-900 overflow-x-hidden">
    <!-- Navigation -->
    <nav class="fixed top-0 w-full bg-white/90 backdrop-blur-md border-b border-gray-100 z-50 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex items-center animate-fade-in-left">
                    <a href="Home.php" class="flex items-center text-2xl font-bold text-primary hover:scale-105 transition-transform">
                        <div class="w-8 h-8 bg-gradient-to-br from-primary to-primary-dark rounded-lg flex items-center justify-center mr-3 animate-rotate-slow">
                            <i class="fas fa-leaf text-white text-sm"></i>
                        </div>
                        Olivia Flowers
                    </a>
                </div>
                
                <!-- Desktop Navigation -->
                <div class="hidden md:flex items-center space-x-8 animate-fade-in-down">
                    <a href="Home.php" class="text-gray-700 hover:text-primary font-medium transition-all hover:scale-105">Home</a>
                    <a href="shop.php" class="text-gray-700 hover:text-primary font-medium transition-all hover:scale-105">Shop</a>
                    <a href="booking.php" class="text-gray-700 hover:text-primary font-medium transition-all hover:scale-105">Services</a>
                    <a href="gifts.php" class="text-gray-700 hover:text-primary font-medium transition-all hover:scale-105">Gifts</a>
                    <a href="about.php" class="text-gray-700 hover:text-primary font-medium transition-all hover:scale-105">About</a>
                    <a href="contact.php" class="text-primary font-medium transition-all hover:scale-105">Contact</a>
                </div>
                
                <!-- Auth & Cart -->
                <div class="hidden md:flex items-center space-x-4 animate-fade-in-right">
                    <a href="login.php" class="text-gray-700 hover:text-primary font-medium transition-all hover:scale-105">Login</a>
                    <a href="signup.php" class="bg-primary hover:bg-primary-dark text-white px-4 py-2 rounded-lg font-medium transition-all hover:scale-105 hover:shadow-lg">Sign Up</a>
                    <a href="cart.php" class="relative text-gray-700 hover:text-primary transition-all hover:scale-110">
                        <i class="fas fa-shopping-bag text-xl"></i>
                        <span class="absolute -top-2 -right-2 bg-secondary text-white text-xs rounded-full w-5 h-5 flex items-center justify-center font-semibold animate-bounce-slow" id="cartCount">0</span>
                    </a>
                </div>
                
                <!-- Mobile menu button -->
                <button class="md:hidden text-gray-700 hover:scale-110 transition-transform" onclick="toggleMobileMenu()">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>
            
            <!-- Mobile menu -->
            <div class="md:hidden hidden" id="mobileMenu">
                <div class="py-4 space-y-3 border-t border-gray-100 animate-fade-in-up">
                    <a href="Home.php" class="block text-gray-700 hover:text-primary font-medium transition-all hover:translate-x-2">Home</a>
                    <a href="shop.php" class="block text-gray-700 hover:text-primary font-medium transition-all hover:translate-x-2">Shop</a>
                    <a href="booking.php" class="block text-gray-700 hover:text-primary font-medium transition-all hover:translate-x-2">Services</a>
                    <a href="gifts.php" class="block text-gray-700 hover:text-primary font-medium transition-all hover:translate-x-2">Gifts</a>
                    <a href="about.php" class="block text-gray-700 hover:text-primary font-medium transition-all hover:translate-x-2">About</a>
                    <a href="contact.php" class="block text-primary font-medium transition-all hover:translate-x-2">Contact</a>
                    <div class="pt-3 space-y-3 border-t border-gray-100">
                        <a href="login.php" class="block text-gray-700 hover:text-primary font-medium transition-all hover:translate-x-2">Login</a>
                        <a href="signup.php" class="block bg-primary text-white px-4 py-2 rounded-lg font-medium text-center hover:bg-primary-dark transition-all">Sign Up</a>
                        <a href="cart.php" class="block text-gray-700 hover:text-primary font-medium transition-all hover:translate-x-2">
                            Cart <span class="bg-secondary text-white px-2 py-1 rounded-full text-xs ml-2" id="mobileCartCount">0</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <main class="pt-16">
        <!-- Hero Section -->
        <section class="hero-bg pt-24 pb-20 relative overflow-hidden min-h-screen flex items-center">
            <div class="hero-gradient absolute inset-0"></div>
            <div class="absolute inset-0">
                <!-- Animated decorative elements -->
                <div class="absolute top-20 left-10 text-white/20 text-6xl animate-float">
                    <i class="fas fa-rose"></i>
                </div>
                <div class="absolute top-40 right-20 text-white/15 text-4xl float-reverse">
                    <i class="fas fa-leaf"></i>
                </div>
                <div class="absolute bottom-32 left-20 text-white/25 text-5xl animate-float" style="animation-delay: 2s;">
                    <i class="fas fa-seedling"></i>
                </div>
                <div class="absolute top-60 right-10 text-white/20 text-3xl animate-bounce-slow" style="animation-delay: 1s;">
                    <i class="fas fa-flower"></i>
                </div>
                <div class="absolute bottom-20 right-32 text-white/15 text-4xl animate-pulse-slow">
                    <i class="fas fa-spa"></i>
                </div>
            </div>
            
            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 z-10">
                <div class="text-center text-white">
                    <div class="animate-fade-in-down">
                        <h1 class="text-5xl md:text-7xl font-bold mb-6 leading-tight">
                            Get in Touch
                            <span class="block text-gradient animate-shimmer">We're Here to Help You Bloom</span>
                        </h1>
                    </div>
                    <p class="text-xl md:text-2xl mb-12 text-green-50 max-w-3xl mx-auto leading-relaxed animate-fade-in-up" style="animation-delay: 0.3s;">
                        Have a question, a special request, or just want to say hello? Reach out to our team!
                    </p>
                    <div class="flex flex-col sm:flex-row gap-6 justify-center items-center animate-fade-in-up" style="animation-delay: 0.6s;">
                        <a href="shop.php" class="btn-gradient text-white px-10 py-4 rounded-xl text-lg font-semibold inline-flex items-center group">
                            <i class="fas fa-shopping-bag mr-3 group-hover:animate-wiggle"></i>
                            Shop Collection
                        </a>
                        <a href="booking.php" class="glass-effect text-white px-10 py-4 rounded-xl text-lg font-semibold hover:bg-white/25 transition-all hover:scale-105">
                            Book Consultation
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Form & Info Section -->
        <section class="py-24 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Contact Form -->
                <div class="bg-neutral-50 p-8 rounded-3xl shadow-lg section-animate animate-fade-in-left">
                    <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-8 text-center">Send Us a Message</h2>
                    <form class="space-y-6" method="POST" action="contact_process.php">
                        <div>
                            <label for="name" class="block text-lg font-medium text-gray-700 mb-2">Your Name</label>
                            <input type="text" id="name" name="name" class="w-full px-5 py-3 rounded-xl border border-gray-300 focus:ring-4 focus:ring-primary focus:border-transparent transition-all duration-200 outline-none text-lg" placeholder="John Doe" required>
                        </div>
                        <div>
                            <label for="email" class="block text-lg font-medium text-gray-700 mb-2">Your Email</label>
                            <input type="email" id="email" name="email" class="w-full px-5 py-3 rounded-xl border border-gray-300 focus:ring-4 focus:ring-primary focus:border-transparent transition-all duration-200 outline-none text-lg" placeholder="john.doe@example.com" required>
                        </div>
                        <div>
                            <label for="subject" class="block text-lg font-medium text-gray-700 mb-2">Subject</label>
                            <input type="text" id="subject" name="subject" class="w-full px-5 py-3 rounded-xl border border-gray-300 focus:ring-4 focus:ring-primary focus:border-transparent transition-all duration-200 outline-none text-lg" placeholder="Inquiry about services" required>
                        </div>
                        <div>
                            <label for="message" class="block text-lg font-medium text-gray-700 mb-2">Your Message</label>
                            <textarea id="message" name="message" rows="6" class="w-full px-5 py-3 rounded-xl border border-gray-300 focus:ring-4 focus:ring-primary focus:border-transparent transition-all duration-200 outline-none resize-y text-lg" placeholder="Tell us how we can help you..." required></textarea>
                        </div>
                        <button type="submit" class="w-full btn-gradient text-white px-8 py-4 rounded-xl font-semibold text-lg inline-flex items-center justify-center group">
                            Send Message <i class="fas fa-paper-plane ml-3 group-hover:animate-wiggle"></i>
                        </button>
                    </form>
                </div>

                <!-- Contact Information -->
                <div class="space-y-8 section-animate animate-fade-in-right" style="animation-delay: 0.2s;">
                    <div class="bg-white p-8 rounded-3xl shadow-lg card-hover">
                        <h3 class="text-2xl font-semibold text-gray-900 mb-4 flex items-center"><i class="fas fa-map-marker-alt text-primary mr-4 text-3xl"></i>Our Location</h3>
                        <p class="text-lg text-gray-700">123 Flower Street, Garden City, GC 12345, USA</p>
                        <a href="https://maps.google.com/?q=123+Flower+Street,+Garden+City,+GC+12345" target="_blank" class="text-primary hover:underline mt-2 inline-block">View on Map</a>
                    </div>

                    <div class="bg-white p-8 rounded-3xl shadow-lg card-hover">
                        <h3 class="text-2xl font-semibold text-gray-900 mb-4 flex items-center"><i class="fas fa-phone-alt text-primary mr-4 text-3xl"></i>Call Us</h3>
                        <p class="text-lg text-gray-700">Phone: <a href="tel:+15551234567" class="text-primary hover:underline">+1 (555) 123-4567</a></p>
                        <p class="text-lg text-gray-700">Fax: +1 (555) 123-4568</p>
                    </div>

                    <div class="bg-white p-8 rounded-3xl shadow-lg card-hover">
                        <h3 class="text-2xl font-semibold text-gray-900 mb-4 flex items-center"><i class="fas fa-envelope text-primary mr-4 text-3xl"></i>Email Us</h3>
                        <p class="text-lg text-gray-700">General Inquiries: <a href="mailto:info@oliviaflowers.com" class="text-primary hover:underline">info@oliviaflowers.com</a></p>
                        <p class="text-lg text-gray-700">Support: <a href="mailto:support@oliviaflowers.com" class="text-primary hover:underline">support@oliviaflowers.com</a></p>
                    </div>

                    <div class="bg-white p-8 rounded-3xl shadow-lg card-hover">
                        <h3 class="text-2xl font-semibold text-gray-900 mb-4 flex items-center"><i class="fas fa-clock text-primary mr-4 text-3xl"></i>Business Hours</h3>
                        <p class="text-lg text-gray-700">Monday - Saturday: 9:00 AM - 6:00 PM</p>
                        <p class="text-lg text-gray-700">Sunday: Closed</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Map Section -->
        <section class="py-24 bg-gradient-to-b from-neutral-50 to-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 section-animate animate-fade-in-up">
                <div class="text-center mb-20">
                    <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Find Us on the Map</h2>
                    <p class="text-xl text-gray-600 max-w-2xl mx-auto" style="animation-delay: 0.2s;">Visit our beautiful shop or find us easily with the map below</p>
                    <div class="w-24 h-1 bg-gradient-to-r from-primary to-secondary mx-auto mt-8 rounded-full animate-scale-in" style="animation-delay: 0.4s;"></div>
                </div>
                <div class="bg-white rounded-3xl shadow-lg overflow-hidden">
                    <!-- Google Maps iframe -->
                    <div class="aspect-w-16 aspect-h-9 w-full h-96">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.215573291234!2d-73.98784492416442!3d40.74844097138985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDDCsDQ0JzU0LjQiTiA3M8KwNTknMTUuMiJX!5e0!3m2!1sen!2sus!4v1623252345678!5m2!1sen!2sus" 
                            width="100%" 
                            height="100%" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy"
                            class="w-full h-full"
                        ></iframe>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-neutral-900 text-white py-20 relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-neutral-900 to-gray-800"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid md:grid-cols-4 gap-12 mb-16">
                <div class="animate-fade-in-up">
                    <div class="flex items-center mb-8">
                        <div class="w-10 h-10 bg-gradient-to-br from-primary to-primary-dark rounded-xl flex items-center justify-center mr-4 animate-pulse-slow">
                            <i class="fas fa-leaf text-white"></i>
                        </div>
                        <span class="text-3xl font-bold">Olivia Flowers</span>
                    </div>
                    <p class="text-gray-400 mb-8 leading-relaxed text-lg">Creating beautiful moments with premium flowers and exceptional service since 2010. Your trusted partner for all floral needs.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="w-12 h-12 bg-gray-800 rounded-xl flex items-center justify-center hover:bg-primary transition-all hover:scale-110 hover:shadow-lg">
                            <i class="fab fa-facebook-f text-lg"></i>
                        </a>
                        <a href="#" class="w-12 h-12 bg-gray-800 rounded-xl flex items-center justify-center hover:bg-primary transition-all hover:scale-110 hover:shadow-lg">
                            <i class="fab fa-instagram text-lg"></i>
                        </a>
                        <a href="#" class="w-12 h-12 bg-gray-800 rounded-xl flex items-center justify-center hover:bg-primary transition-all hover:scale-110 hover:shadow-lg">
                            <i class="fab fa-twitter text-lg"></i>
                        </a>
                        <a href="#" class="w-12 h-12 bg-gray-800 rounded-xl flex items-center justify-center hover:bg-primary transition-all hover:scale-110 hover:shadow-lg">
                            <i class="fab fa-pinterest text-lg"></i>
                        </a>
                    </div>
                </div>
                
                <div class="animate-fade-in-up" style="animation-delay: 0.1s;">
                    <h3 class="text-xl font-semibold mb-8">Quick Links</h3>
                    <ul class="space-y-4">
                        <li><a href="Home.php" class="text-gray-400 hover:text-white transition-all hover:translate-x-2 inline-block">Home</a></li>
                        <li><a href="shop.php" class="text-gray-400 hover:text-white transition-all hover:translate-x-2 inline-block">Shop</a></li>
                        <li><a href="booking.php" class="text-gray-400 hover:text-white transition-all hover:translate-x-2 inline-block">Services</a></li>
                        <li><a href="about.php" class="text-gray-400 hover:text-white transition-all hover:translate-x-2 inline-block">About</a></li>
                        <li><a href="contact.php" class="text-white transition-all hover:translate-x-2 inline-block">Contact</a></li>
                    </ul>
                </div>
                
                <div class="animate-fade-in-up" style="animation-delay: 0.2s;">
                    <h3 class="text-xl font-semibold mb-8">Categories</h3>
                    <ul class="space-y-4">
                        <li><a href="#" class="text-gray-400 hover:text-white transition-all hover:translate-x-2 inline-block">Wedding Flowers</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-all hover:translate-x-2 inline-block">Birthday Bouquets</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-all hover:translate-x-2 inline-block">Corporate Events</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-all hover:translate-x-2 inline-block">Seasonal Collections</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-all hover:translate-x-2 inline-block">Gift Packages</a></li>
                    </ul>
                </div>
                
                <div class="animate-fade-in-up" style="animation-delay: 0.3s;">
                    <h3 class="text-xl font-semibold mb-8">Contact</h3>
                    <ul class="space-y-6">
                        <li class="flex items-start group">
                            <i class="fas fa-map-marker-alt text-primary mr-4 mt-1 group-hover:animate-bounce"></i>
                            <span class="text-gray-400 leading-relaxed">123 Flower Street<br>Garden City, GC 12345</span>
                        </li>
                        <li class="flex items-center group">
                            <i class="fas fa-phone text-primary mr-4 group-hover:animate-wiggle"></i>
                            <span class="text-gray-400">+1 (555) 123-4567</span>
                        </li>
                        <li class="flex items-center group">
                            <i class="fas fa-envelope text-primary mr-4 group-hover:animate-bounce"></i>
                            <span class="text-gray-400">hello@oliviaflowers.com</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-gray-800 pt-8 text-center animate-fade-in-up" style="animation-delay: 0.4s;">
                <p class="text-gray-400 text-lg">&copy; 2024 Olivia Flowers. All rights reserved. Designed with <i class="fas fa-heart text-red-500 animate-pulse"></i> for flower lovers.</p>
            </div>
        </div>
    </footer>

    <script>
        // Cart functionality
        let cart = [];
        
        function updateCartCount() {
            const count = cart.reduce((total, item) => total + item.quantity, 0);
            document.getElementById('cartCount').textContent = count;
            document.getElementById('mobileCartCount').textContent = count;
        }
        
        function addToCart(name, price) {
            const notificationMessage = `${name} added to cart!`;
            showNotification(notificationMessage);
            const existingItem = cart.find(item => item.name === name);
            
            if (existingItem) {
                existingItem.quantity += 1;
            } else {
                cart.push({ name, price, quantity: 1 });
            }
            
            updateCartCount();
        }
        
        function showNotification(message) {
            const notification = document.createElement('div');
            notification.className = 'fixed top-20 right-4 bg-primary text-white px-8 py-4 rounded-2xl shadow-2xl z-50 transform translate-x-full transition-all duration-500 flex items-center';
            notification.innerHTML = `<i class="fas fa-check-circle mr-3 text-xl"></i><span class="font-semibold">${message}</span>`;
            
            document.body.appendChild(notification);
            
            setTimeout(() => {
                notification.classList.remove('translate-x-full');
                notification.classList.add('animate-bounce-slow');
            }, 100);
            
            setTimeout(() => {
                notification.classList.add('translate-x-full');
                setTimeout(() => notification.remove(), 500);
            }, 3500);
        }
        
        function toggleMobileMenu() {
            const menu = document.getElementById('mobileMenu');
            menu.classList.toggle('hidden');
        }
        
        // Initialize cart count
        updateCartCount();
        
        // Add scroll effect to navbar
        window.addEventListener('scroll', () => {
            const nav = document.querySelector('nav');
            if (window.scrollY > 100) {
                nav.classList.add('bg-white/95', 'shadow-lg');
                nav.classList.remove('bg-white/90');
            } else {
                nav.classList.add('bg-white/90');
                nav.classList.remove('bg-white/95', 'shadow-lg');
            }
        });
        
        // Parallax effect for floating elements
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const parallaxElements = document.querySelectorAll('.parallax-element');
            
            parallaxElements.forEach(element => {
                const speed = element.dataset.speed || 0.5;
                const yPos = -(scrolled * speed);
                element.style.transform = `translateY(${yPos}px)`;
            });
        });
        
        // Intersection Observer for animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-fade-in-up');
                }
            });
        }, observerOptions);
        
        // Observe elements that should animate on scroll
        document.addEventListener('DOMContentLoaded', () => {
            const animateElements = document.querySelectorAll('.card-hover, .service-icon, .section-animate');
            animateElements.forEach(el => observer.observe(el));
        });
        
        // Add smooth scroll behavior
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
        
        // Enhanced hover effects for product images
        document.querySelectorAll('.card-hover img').forEach(img => {
            img.addEventListener('mouseenter', function() {
                this.style.transform = 'scale(1.1) rotate(2deg)';
            });
            
            img.addEventListener('mouseleave', function() {
                this.style.transform = 'scale(1) rotate(0deg)';
            });
        });
    </script>
</body>
</html>