<?php ob_start(); ?>

<div class="flex justify-between items-center mb-8">
    <h1 class="text-3xl font-bold text-gray-800">
        <i class="fas fa-box text-purple-600 mr-3"></i>
        Products Management
    </h1>
    <a href="/products/create" class="bg-purple-600 text-white px-6 py-3 rounded-lg hover:bg-purple-700 transition duration-300">
        <i class="fas fa-plus mr-2"></i>Add New Product
    </a>
</div>

<?php if(empty($products)): ?>
    <div class="bg-white rounded-lg shadow-md p-8 text-center">
        <i class="fas fa-box-open text-gray-400 text-4xl mb-4"></i>
        <h3 class="text-xl font-semibold text-gray-600 mb-2">No Products Found</h3>
        <p class="text-gray-500 mb-4">Get started by adding your first product.</p>
        <a href="/products/create" class="bg-purple-600 text-white px-6 py-3 rounded-lg hover:bg-purple-700 transition duration-300">
            <i class="fas fa-plus mr-2"></i>Create First Product
        </a>
    </div>
<?php else: ?>
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
        <?php foreach($products as $product): ?>
        <div class="bg-white rounded-lg shadow-md overflow-hidden card-hover">
            <div class="p-6">
                <div class="flex items-center justify-between mb-4">
                    <div class="bg-purple-100 p-2 rounded-full">
                        <i class="fas fa-box text-purple-600"></i>
                    </div>
                    <span class="bg-gray-100 text-gray-600 px-3 py-1 rounded-full text-sm">
                        <?php echo htmlspecialchars($product['category'] ?: 'Uncategorized'); ?>
                    </span>
                </div>
                
                <h3 class="text-xl font-semibold text-gray-800 mb-2">
                    <?php echo htmlspecialchars($product['name']); ?>
                </h3>
                
                <p class="text-gray-600 mb-4 line-clamp-3">
                    <?php echo htmlspecialchars($product['description'] ?: 'No description available'); ?>
                </p>
                
                <div class="flex items-center justify-between mb-4">
                    <span class="text-2xl font-bold text-purple-600">
                        $<?php echo number_format($product['price'], 2); ?>
                    </span>
                    <span class="text-sm text-gray-500">
                        <i class="fas fa-calendar mr-1"></i>
                        <?php echo date('M j, Y', strtotime($product['created_at'])); ?>
                    </span>
                </div>
                
                <div class="flex space-x-2">
                    <button class="flex-1 bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700 transition duration-200">
                        <i class="fas fa-edit mr-1"></i>Edit
                    </button>
                    <button class="flex-1 bg-red-600 text-white py-2 px-4 rounded hover:bg-red-700 transition duration-200">
                        <i class="fas fa-trash mr-1"></i>Delete
                    </button>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

    <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <div class="px-6 py-4 bg-gray-50 border-b">
            <h3 class="text-lg font-semibold text-gray-800">
                <i class="fas fa-list mr-2"></i>Products Table View
            </h3>
        </div>
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Product
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Category
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Price
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Created
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <?php foreach($products as $product): ?>
                    <tr class="hover:bg-gray-50 transition duration-200">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="bg-purple-100 p-2 rounded-full mr-3">
                                    <i class="fas fa-box text-purple-600"></i>
                                </div>
                                <div>
                                    <div class="text-sm font-medium text-gray-900">
                                        <?php echo htmlspecialchars($product['name']); ?>
                                    </div>
                                    <div class="text-sm text-gray-500">
                                        ID: <?php echo htmlspecialchars($product['id']); ?>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="bg-gray-100 text-gray-800 px-3 py-1 rounded-full text-sm">
                                <?php echo htmlspecialchars($product['category'] ?: 'Uncategorized'); ?>
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-purple-600">
                            $<?php echo number_format($product['price'], 2); ?>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            <?php echo date('M j, Y', strtotime($product['created_at'])); ?>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <button class="text-blue-600 hover:text-blue-900 mr-3 transition duration-200">
                                <i class="fas fa-edit mr-1"></i>Edit
                            </button>
                            <button class="text-red-600 hover:text-red-900 transition duration-200">
                                <i class="fas fa-trash mr-1"></i>Delete
                            </button>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <div class="mt-6 bg-purple-50 border border-purple-200 rounded-lg p-4">
        <h3 class="text-lg font-semibold text-purple-800 mb-2">
            <i class="fas fa-chart-bar mr-2"></i>Product Statistics
        </h3>
        <div class="grid md:grid-cols-3 gap-4">
            <div class="text-center">
                <div class="text-2xl font-bold text-purple-600"><?php echo count($products); ?></div>
                <div class="text-purple-700">Total Products</div>
            </div>
            <div class="text-center">
                <div class="text-2xl font-bold text-purple-600">
                    $<?php echo number_format(array_sum(array_column($products, 'price')), 2); ?>
                </div>
                <div class="text-purple-700">Total Value</div>
            </div>
            <div class="text-center">
                <div class="text-2xl font-bold text-purple-600">
                    $<?php echo count($products) > 0 ? number_format(array_sum(array_column($products, 'price')) / count($products), 2) : '0.00'; ?>
                </div>
                <div class="text-purple-700">Average Price</div>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php $content = ob_get_clean(); ?>
<?php include '../layout.php'; ?>