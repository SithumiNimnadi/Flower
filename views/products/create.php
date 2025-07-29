<?php ob_start(); ?>

<div class="max-w-2xl mx-auto">
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-800 mb-2">
            <i class="fas fa-plus-circle text-purple-600 mr-3"></i>
            Create New Product
        </h1>
        <p class="text-gray-600">Add a new product to your inventory</p>
    </div>

    <div class="bg-white rounded-lg shadow-md p-8">
        <form method="POST" action="/products" class="space-y-6">
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700 mb-2">
                    <i class="fas fa-box mr-2"></i>Product Name
                </label>
                <input 
                    type="text" 
                    id="name" 
                    name="name" 
                    required 
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent transition duration-200"
                    placeholder="Enter product name"
                >
            </div>

            <div>
                <label for="description" class="block text-sm font-medium text-gray-700 mb-2">
                    <i class="fas fa-align-left mr-2"></i>Description
                </label>
                <textarea 
                    id="description" 
                    name="description" 
                    rows="4"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent transition duration-200"
                    placeholder="Enter product description"
                ></textarea>
            </div>

            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <label for="price" class="block text-sm font-medium text-gray-700 mb-2">
                        <i class="fas fa-dollar-sign mr-2"></i>Price
                    </label>
                    <input 
                        type="number" 
                        id="price" 
                        name="price" 
                        step="0.01" 
                        min="0" 
                        required 
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent transition duration-200"
                        placeholder="0.00"
                    >
                </div>

                <div>
                    <label for="category" class="block text-sm font-medium text-gray-700 mb-2">
                        <i class="fas fa-tags mr-2"></i>Category
                    </label>
                    <select 
                        id="category" 
                        name="category"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent transition duration-200"
                    >
                        <option value="">Select a category</option>
                        <option value="Electronics">Electronics</option>
                        <option value="Clothing">Clothing</option>
                        <option value="Books">Books</option>
                        <option value="Home & Garden">Home & Garden</option>
                        <option value="Sports">Sports</option>
                        <option value="Toys">Toys</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
            </div>

            <div class="flex items-center justify-between pt-6">
                <a href="/products" class="bg-gray-500 text-white px-6 py-3 rounded-lg hover:bg-gray-600 transition duration-300">
                    <i class="fas fa-arrow-left mr-2"></i>Back to Products
                </a>
                <button 
                    type="submit" 
                    class="bg-purple-600 text-white px-8 py-3 rounded-lg hover:bg-purple-700 transition duration-300"
                >
                    <i class="fas fa-save mr-2"></i>Create Product
                </button>
            </div>
        </form>
    </div>

    <div class="mt-6 bg-green-50 border border-green-200 rounded-lg p-4">
        <h3 class="text-lg font-semibold text-green-800 mb-2">
            <i class="fas fa-info-circle mr-2"></i>Product Guidelines
        </h3>
        <ul class="text-green-700 space-y-1">
            <li>• Product name should be descriptive and unique</li>
            <li>• Price must be a positive number</li>
            <li>• Description helps customers understand the product</li>
            <li>• Category helps organize your inventory</li>
        </ul>
    </div>
</div>

<?php $content = ob_get_clean(); ?>
<?php include '../layout.php'; ?>