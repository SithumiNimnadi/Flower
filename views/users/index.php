<?php ob_start(); ?>

<div class="flex justify-between items-center mb-8">
    <h1 class="text-3xl font-bold text-gray-800">
        <i class="fas fa-users text-blue-600 mr-3"></i>
        Users Management
    </h1>
    <a href="/users/create" class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition duration-300">
        <i class="fas fa-plus mr-2"></i>Add New User
    </a>
</div>

<?php if(empty($users)): ?>
    <div class="bg-white rounded-lg shadow-md p-8 text-center">
        <i class="fas fa-user-slash text-gray-400 text-4xl mb-4"></i>
        <h3 class="text-xl font-semibold text-gray-600 mb-2">No Users Found</h3>
        <p class="text-gray-500 mb-4">Get started by creating your first user.</p>
        <a href="/users/create" class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition duration-300">
            <i class="fas fa-plus mr-2"></i>Create First User
        </a>
    </div>
<?php else: ?>
    <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            <i class="fas fa-hashtag mr-1"></i>ID
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            <i class="fas fa-user mr-1"></i>Name
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            <i class="fas fa-envelope mr-1"></i>Email
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            <i class="fas fa-calendar mr-1"></i>Created At
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            <i class="fas fa-cogs mr-1"></i>Actions
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <?php foreach($users as $user): ?>
                    <tr class="hover:bg-gray-50 transition duration-200">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                            <?php echo htmlspecialchars($user['id']); ?>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="bg-blue-100 p-2 rounded-full mr-3">
                                    <i class="fas fa-user text-blue-600"></i>
                                </div>
                                <div class="text-sm font-medium text-gray-900">
                                    <?php echo htmlspecialchars($user['name']); ?>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            <i class="fas fa-envelope mr-2"></i>
                            <?php echo htmlspecialchars($user['email']); ?>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            <i class="fas fa-calendar mr-2"></i>
                            <?php echo date('M j, Y', strtotime($user['created_at'])); ?>
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

    <div class="mt-6 bg-blue-50 border border-blue-200 rounded-lg p-4">
        <h3 class="text-lg font-semibold text-blue-800 mb-2">
            <i class="fas fa-info-circle mr-2"></i>Total Users
        </h3>
        <p class="text-blue-700">
            You have <strong><?php echo count($users); ?></strong> user(s) in your system.
        </p>
    </div>
<?php endif; ?>

<?php $content = ob_get_clean(); ?>
<?php include '../layout.php'; ?>