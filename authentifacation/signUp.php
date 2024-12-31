<?php
require_once '../connection/connect.php';
require_once '../classes/user.php';





?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Sign Up Form</title>
</head>
<body class="bg-gray-50">
    <div class="min-h-screen flex">
        <!-- Left column - Sign Up Form -->
        <div class="flex-1 flex items-center justify-center">
            <div class="max-w-md w-full p-6">
                <div class="mb-8">
                    <div class="text-4xl mb-6">✨</div>
                    <h1 class="text-2xl font-semibold mb-2">Create an account</h1>
                    <p class="text-sm text-gray-600">
                        Already have an account?
                        <a href="login.php" class="text-indigo-600 hover:text-indigo-500">Log in</a>
                    </p>
                </div>

                <form class="space-y-4">
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label for="firstName" class="block text-sm font-medium text-gray-700 mb-1">First name</label>
                            <input type="text" id="firstName" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                        </div>
                        <div>
                            <label for="lastName" class="block text-sm font-medium text-gray-700 mb-1">Last name</label>
                            <input type="text" id="lastName" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                        </div>
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email address</label>
                        <input type="email" id="email" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                    </div>

                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                        <input type="password" id="password" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                    </div>

                    <div>
                        <label for="company" class="block text-sm font-medium text-gray-700 mb-1">Company (Optional)</label>
                        <input type="text" id="company" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                    </div>

                    <div class="flex items-start">
                        <input type="checkbox" id="terms" class="mt-1 h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                        <label for="terms" class="ml-2 block text-sm text-gray-700">
                            I agree to the
                            <a href="#" class="text-indigo-600 hover:text-indigo-500">Terms of Service</a>
                            and
                            <a href="#" class="text-indigo-600 hover:text-indigo-500">Privacy Policy</a>
                        </label>
                    </div>

                    <button type="submit" class="w-full bg-indigo-600 text-white py-2 px-4 rounded-lg hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                        Create account
                    </button>

                </form>
            </div>
        </div>

        <!-- Right column - Image -->
        <div class="hidden lg:block flex-1 bg-gray-100">
            <img 
                src="../img/car4.jpg" 
                alt="Workspace setup with MacBook"
                class="w-full h-[100vh] object-cover"
            >
        </div>
    </div>
</body>
</html>