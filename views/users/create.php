<?php ob_start(); ?>

<div class="max-w-2xl mx-auto">
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-800 mb-2">
            <i class="fas fa-user-plus text-blue-600 mr-3"></i>
            Create New User
        </h1>
        <p class="text-gray-600">Add a new user to the system</p>
    </div>

    <div class="bg-white rounded-lg shadow-md p-8">
        <form method="POST" action="/users" class="space-y-6">
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700 mb-2">
                    <i class="fas fa-user mr-2"></i>Full Name
                </label>
                <input 
                    type="text" 
                    id="name" 
                    name="name" 
                    required 
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200"
                    placeholder="Enter full name"
                >
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                    <i class="fas fa-envelope mr-2"></i>Email Address
                </label>
                <input 
                    type="email" 
                    id="email" 
                    name="email" 
                    required 
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200"
                    placeholder="Enter email address"
                >
            </div>

            <div class="flex items-center justify-between pt-6">
                <a href="/users" class="bg-gray-500 text-white px-6 py-3 rounded-lg hover:bg-gray-600 transition duration-300">
                    <i class="fas fa-arrow-left mr-2"></i>Back to Users
                </a>
                <button 
                    type="submit" 
                    class="bg-blue-600 text-white px-8 py-3 rounded-lg hover:bg-blue-700 transition duration-300"
                >
                    <i class="fas fa-save mr-2"></i>Create User
                </button>
            </div>
        </form>
    </div>

    <div class="mt-6 bg-yellow-50 border border-yellow-200 rounded-lg p-4">
        <h3 class="text-lg font-semibold text-yellow-800 mb-2">
            <i class="fas fa-lightbulb mr-2"></i>Tips
        </h3>
        <ul class="text-yellow-700 space-y-1">
            <li>• Make sure the email address is unique</li>
            <li>• Use a valid email format</li>
            <li>• All fields are required</li>
        </ul>
    </div>
</div>

<?php $content = ob_get_clean(); ?>
<?php include '../layout.php'; ?>