<?php ob_start(); ?>

<div class="text-center mb-12">
    <h1 class="text-4xl font-bold text-gray-800 mb-4">
        <i class="fas fa-rocket text-purple-600 mr-3"></i>
        <?php echo $title; ?>
    </h1>
    <p class="text-xl text-gray-600 max-w-2xl mx-auto">
        <?php echo $message; ?>
    </p>
</div>

<div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
    <!-- Users Card -->
    <div class="bg-white rounded-lg shadow-md p-6 card-hover">
        <div class="flex items-center mb-4">
            <div class="bg-blue-100 p-3 rounded-full">
                <i class="fas fa-users text-blue-600 text-xl"></i>
            </div>
            <h3 class="text-xl font-semibold text-gray-800 ml-4">User Management</h3>
        </div>
        <p class="text-gray-600 mb-4">Manage users, create new accounts, and view user information.</p>
        <div class="flex space-x-3">
            <a href="/users" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition duration-300">
                <i class="fas fa-eye mr-1"></i>View Users
            </a>
            <a href="/users/create" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 transition duration-300">
                <i class="fas fa-plus mr-1"></i>Add User
            </a>
        </div>
    </div>

    <!-- Products Card -->
    <div class="bg-white rounded-lg shadow-md p-6 card-hover">
        <div class="flex items-center mb-4">
            <div class="bg-purple-100 p-3 rounded-full">
                <i class="fas fa-box text-purple-600 text-xl"></i>
            </div>
            <h3 class="text-xl font-semibold text-gray-800 ml-4">Product Management</h3>
        </div>
        <p class="text-gray-600 mb-4">Manage products, add new items, and organize your inventory.</p>
        <div class="flex space-x-3">
            <a href="/products" class="bg-purple-600 text-white px-4 py-2 rounded hover:bg-purple-700 transition duration-300">
                <i class="fas fa-eye mr-1"></i>View Products
            </a>
            <a href="/products/create" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 transition duration-300">
                <i class="fas fa-plus mr-1"></i>Add Product
            </a>
        </div>
    </div>

    <!-- API Card -->
    <div class="bg-white rounded-lg shadow-md p-6 card-hover">
        <div class="flex items-center mb-4">
            <div class="bg-orange-100 p-3 rounded-full">
                <i class="fas fa-code text-orange-600 text-xl"></i>
            </div>
            <h3 class="text-xl font-semibold text-gray-800 ml-4">API Endpoints</h3>
        </div>
        <p class="text-gray-600 mb-4">RESTful API endpoints for integration with other applications.</p>
        <div class="text-sm text-gray-500">
            <p><strong>GET</strong> /api/users</p>
            <p><strong>POST</strong> /api/users</p>
            <p><strong>GET</strong> /api/products</p>
            <p><strong>POST</strong> /api/products</p>
        </div>
    </div>
</div>

<!-- Features Section -->
<div class="bg-white rounded-lg shadow-md p-8">
    <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">
        <i class="fas fa-star text-yellow-500 mr-2"></i>
        Features
    </h2>
    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="text-center">
            <div class="bg-blue-100 p-4 rounded-full w-16 h-16 mx-auto mb-3 flex items-center justify-center">
                <i class="fas fa-database text-blue-600 text-xl"></i>
            </div>
            <h4 class="font-semibold text-gray-800 mb-2">PostgreSQL</h4>
            <p class="text-gray-600 text-sm">Robust database management</p>
        </div>
        <div class="text-center">
            <div class="bg-purple-100 p-4 rounded-full w-16 h-16 mx-auto mb-3 flex items-center justify-center">
                <i class="fab fa-php text-purple-600 text-xl"></i>
            </div>
            <h4 class="font-semibold text-gray-800 mb-2">PHP MVC</h4>
            <p class="text-gray-600 text-sm">Clean architecture pattern</p>
        </div>
        <div class="text-center">
            <div class="bg-green-100 p-4 rounded-full w-16 h-16 mx-auto mb-3 flex items-center justify-center">
                <i class="fas fa-mobile-alt text-green-600 text-xl"></i>
            </div>
            <h4 class="font-semibold text-gray-800 mb-2">Responsive</h4>
            <p class="text-gray-600 text-sm">Mobile-friendly design</p>
        </div>
        <div class="text-center">
            <div class="bg-orange-100 p-4 rounded-full w-16 h-16 mx-auto mb-3 flex items-center justify-center">
                <i class="fas fa-api text-orange-600 text-xl"></i>
            </div>
            <h4 class="font-semibold text-gray-800 mb-2">REST API</h4>
            <p class="text-gray-600 text-sm">JSON API endpoints</p>
        </div>
    </div>
</div>

<?php $content = ob_get_clean(); ?>
<?php include 'layout.php'; ?>