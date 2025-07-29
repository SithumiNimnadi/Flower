<?php ob_start(); ?>

<div class="text-center py-16">
    <div class="mb-8">
        <i class="fas fa-exclamation-triangle text-yellow-500 text-6xl mb-4"></i>
        <h1 class="text-4xl font-bold text-gray-800 mb-2">404 - Page Not Found</h1>
        <p class="text-xl text-gray-600">The page you're looking for doesn't exist.</p>
    </div>
    
    <div class="bg-white rounded-lg shadow-md p-8 max-w-md mx-auto">
        <h3 class="text-lg font-semibold text-gray-800 mb-4">What can you do?</h3>
        <div class="space-y-3">
            <a href="/" class="block bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition duration-300">
                <i class="fas fa-home mr-2"></i>Go to Homepage
            </a>
            <a href="/users" class="block bg-purple-600 text-white px-6 py-3 rounded-lg hover:bg-purple-700 transition duration-300">
                <i class="fas fa-users mr-2"></i>View Users
            </a>
            <a href="/products" class="block bg-green-600 text-white px-6 py-3 rounded-lg hover:bg-green-700 transition duration-300">
                <i class="fas fa-box mr-2"></i>View Products
            </a>
        </div>
    </div>
</div>

<?php $content = ob_get_clean(); ?>
<?php include 'layout.php'; ?>