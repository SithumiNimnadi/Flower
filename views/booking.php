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
                    <li><a href="index.php" class="text-gray-400 hover:text-white transition-all hover:translate-x-2 inline-block">Home</a></li>
                    <li><a href="shop.php" class="text-gray-400 hover:text-white transition-all hover:translate-x-2 inline-block">Shop</a></li>
                    <li><a href="services.php" class="<?php echo $current_page == 'services' ? 'text-white' : 'text-gray-400 hover:text-white'; ?> transition-all hover:translate-x-2 inline-block">Services</a></li>
                    <li><a href="gifts.php" class="text-gray-400 hover:text-white transition-all hover:translate-x-2 inline-block">Gifts</a></li>
                    <li><a href="about.php" class="text-gray-400 hover:text-white transition-all hover:translate-x-2 inline-block">About</a></li>
                    <li><a href="contact.php" class="text-gray-400 hover:text-white transition-all hover:translate-x-2 inline-block">Contact</a></li>
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
            <p class="text-gray-400 text-lg">&copy; <?php echo date('Y'); ?> Olivia Flowers. All rights reserved. Designed with <i class="fas fa-heart text-red-500 animate-pulse"></i> for flower lovers.</p>
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
</script>
</body>
</html>