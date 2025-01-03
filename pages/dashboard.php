<?php

require_once '../classes/categorie.php';
require_once '../classes/vehicle.php';

$vehicule = new Vehicule();
$categorie = new Categorie();


if (isset($_POST['Category_submit'])) {
    $categorie_name = $_POST['cat_name'];
    $categorie_desc = $_POST['cat_desc'];
    $categorie->ajouterCategorie($categorie_name, $categorie_desc);
}

if (isset($_POST['Vehicle_submit'])) {
    $modele = $_POST['modele'];
    $marque = $_POST['marque'];
    $Category = $_POST['Category'];
    $price = $_POST['price'];
    $Vehicle_Image = $_POST['Vehicle_Image'];

    $vehicule->AjouterVehicule($modele, $marque, $price, $Vehicle_Image, $Category);
}

session_start();
if ($_SESSION['role_id'] == 1) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Drive & Loc - Admin Dashboard</title>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
        <style>
            .bg-primary {
                background-color: rgb(0, 123, 255);
            }

            .modal {
                display: none;
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(0, 0, 0, 0.5);
            }

            .modal.active {
                display: flex;
            }

            .stat-card {
                transition: transform 0.2s;
            }

            .stat-card:hover {
                transform: translateY(-5px);
            }
        </style>
    </head>

    <body class="bg-gray-50">
        <!-- Top Navigation -->
        <nav class="bg-white shadow">
            <div class="max-w-7xl mx-auto px-4">
                <div class="flex justify-between h-16">
                    <div class="flex items-center">
                        <span class="text-2xl font-bold text-blue-600">D&L</span>
                    </div>
                    <div class="flex items-center space-x-4">
                        <span class="text-black"><?php echo $_SESSION['nom'] ?></span>
                        <a href="../profils/log out.php" class="text-white bg-red-600 px-4 py-2 rounded-lg hover:bg-red-700">Logout</a>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Main Content -->
        <div class="max-w-7xl mx-auto px-4 py-6">
            Stats Grid
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-6">
                <div class="bg-white p-6 rounded-lg shadow-md stat-card">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-500 text-sm">Total Categories</p>
                            <h3 class="text-2xl font-bold mt-1">
                                <h3 class="text-2xl font-bold mt-1"><?php echo count($categorie->showCategorie()) ?></h3>
                            </h3>
                        </div>
                        <div class="bg-blue-100 p-3 rounded-full">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
                            </svg>
                        </div>
                    </div>
                    <p class="text-green-500 text-sm mt-4">↑ 12% from last month</p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-md stat-card">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-500 text-sm">Active Vehicles</p>
                            <h3 class="text-2xl font-bold mt-1"><?php echo count($vehicule->showAllVehicule()) ?></h3>
                        </div>
                        <div class="bg-green-100 p-3 rounded-full">
                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                    </div>
                    <p class="text-green-500 text-sm mt-4">↑ 8% from last month</p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-md stat-card">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-500 text-sm">Total Bookings</p>
                            <h3 class="text-2xl font-bold mt-1">1,234</h3>
                        </div>
                        <div class="bg-yellow-100 p-3 rounded-full">
                            <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                    </div>
                    <p class="text-green-500 text-sm mt-4">↑ 23% from last month</p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-md stat-card">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-500 text-sm">Monthly Revenue</p>
                            <h3 class="text-2xl font-bold mt-1">$12,345</h3>
                        </div>
                        <div class="bg-purple-100 p-3 rounded-full">
                            <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                    </div>
                    <p class="text-green-500 text-sm mt-4">↑ 15% from last month</p>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="mb-6 flex space-x-4 text-white">
                <button onclick="openModal('addVehicleModal')" class="bg-primary px-4 py-2 rounded-lg hover:bg-blue-400 flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                    Add Vehicle
                </button>
                <button onclick="openModal('addCategoryModal')" class="bg-primary px-4 py-2 rounded-lg hover:bg-blue-400 flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                    Add Category
                </button>
            </div>

            <!-- Vehicles Table -->
                <h2 class="text-xl font-bold">Vehicles Management</h2>
                <div class="bg-white rounded-lg shadow-md mb-6 mt-6">
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead class="bg-blue-500">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase">ID</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase">Model</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase">Marque</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase">Category</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase">Price/Day</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase">Status</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            <?php
                            $rows = $vehicule->showAllVehicule();
                            foreach ($rows as $row) {
                            ?>
                                <tr>
                                    <td class="px-6 py-4"><?php echo $row['vehicule_id'] ?></td>
                                    <td class="px-6 py-4"><?php echo $row['modele'] ?></td>
                                    <td class="px-6 py-4"><?php echo $row['marque'] ?></td>
                                    <td class="px-6 py-4"><?php echo $row['nom'] ?></td>
                                    <td class="px-6 py-4"><?php echo $row['prix'] ?></td>
                                    <td class="px-6 py-4">
                                        <span class="px-2 py-1 bg-green-100 text-green-800 rounded-full text-sm"><?php echo $row['status'] ?></span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <button class="text-blue-600 hover:text-blue-800 mr-2">Edit</button>
                                        <button class="text-red-600 hover:text-red-800">Delete</button>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Category Table -->
                <h2 class="text-xl font-bold">Categories Management</h2>
                <div class="bg-white rounded-lg shadow-md mt-6">
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead class="bg-blue-500">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase">ID</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase">Name</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase">Description</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase">Actions</th>

                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            <?php $arrays = $categorie->showCategorie();
                            foreach ($arrays as $array) {
                            ?>
                                <tr>
                                    <td class="px-6 py-4"><?php echo $array['Categorie_id'] ?></td>
                                    <td class="px-6 py-4"><?php echo $array['nom'] ?></td>
                                    <td class="px-6 py-4"><?php echo $array['description'] ?></td>
                                    <td class="px-6 py-4 flex gap-6">
                                        <button class="text-green-600 hover:text-green-800 mr-2">Edit</button>
                                        <button class="text-red-600 hover:text-red-800">Delete</button>
                                    </td>
                                <?php } ?>
                                </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Add Vehicle Modal -->
            <div id="addVehicleModal" class="modal">
                <div class="bg-white rounded-lg w-1/2 mx-auto my-auto p-6">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-xl font-bold">Add New Vehicle</h3>
                        <button onclick="closeModal('addVehicleModal')" class="text-gray-500 hover:text-gray-700">×</button>
                    </div>
                    <form class="space-y-4" method="post" enctype="multipart/form-data">
                        <div class="grid grid-cols-1 gap-4">
                            <div>
                                <label class="block text-sm font-medium mb-1">Vehicle modele</label>
                                <input type="text" class="w-full border rounded-lg p-2" name="modele">
                            </div>

                            <div>
                                <label class="block text-sm font-medium mb-1">Vehicle marque</label>
                                <input type="text" class="w-full border rounded-lg p-2" name="marque">
                            </div>

                            <div>
                                <label class="block text-sm font-medium mb-1">Category</label>
                                <select class="w-full border rounded-lg p-2" name="Category">
                                    <?php
                                    $arr = $categorie->showCategorie();
                                    foreach ($arr as $row) {
                                        echo "<option value='" . $row['Categorie_id'] . "'>" . $row['nom'] . "</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium  mb-1">Price per Day</label>
                                <input type="number" class="w-full border rounded-lg p-2" name="price">
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium mb-1">Vehicle Image</label>
                            <input type="test" class="w-full border rounded-lg p-2" name="Vehicle_Image">
                        </div>
                        <div class="flex justify-end space-x-4">
                            <button type="button" onclick="closeModal('addVehicleModal')" class="px-4 py-2 border rounded-lg">Cancel</button>
                            <button type="submit" name="Vehicle_submit" class="px-4 py-2 bg-primary rounded-lg">Add Vehicle</button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Add Category Modal -->
            <div id="addCategoryModal" class="modal">
                <div class="bg-white rounded-lg w-1/3 mx-auto my-auto p-6">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-xl font-bold">Add New Category</h3>
                        <button onclick="closeModal('addCategoryModal')" class="text-gray-500 hover:text-gray-700">×</button>
                    </div>
                    <form class="space-y-4" method="POST">
                        <div>
                            <label class="block text-sm font-medium mb-1">Category Name</label>
                            <input type="text" name="cat_name" class="w-full border rounded-lg p-2">
                        </div>
                        <div>
                            <label class="block text-sm font-medium mb-1">Description</label>
                            <textarea class="w-full border rounded-lg p-2" name="cat_desc" rows="3"></textarea>
                        </div>
                        <div class="flex justify-end space-x-4">
                            <button type="button" onclick="closeModal('addCategoryModal')" class="px-4 py-2 border rounded-lg">Cancel</button>
                            <button type="submit" name="Category_submit" class="px-4 py-2 bg-primary rounded-lg">Add Category</button>
                        </div>
                    </form>
                </div>
            </div>

            <script>
                function openModal(modalId) {
                    document.getElementById(modalId).classList.add('active');
                }

                function closeModal(modalId) {
                    document.getElementById(modalId).classList.remove('active');
                }
            </script>
    </body>

    </html>
<?php
} else if ($_SESSION['role_id'] == 2) {
    header('location:../index.php');
    exit();
} else {
    header('location:../autentification/signUp.php');
    exit();
}
?>