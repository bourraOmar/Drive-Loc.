<?php

require_once '../classes/categorie.php';
require_once '../classes/vehicle.php';

$vehicule = new Vehicule();
$categorie = new Categorie();

session_start();
if ($_SESSION['role_id'] == 2) {
?>
    <!DOCTYPE html>
    <html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Drive & Loc - Notre Collection</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>

    <body class="bg-gray-100">
        <!-- Navigation -->
        <nav class="bg-white shadow">
            <div class="max-w-7xl mx-auto px-4">
                <div class="flex justify-between h-16">
                    <div class="flex items-center">
                        <span class="text-2xl font-bold text-blue-600">D&L</span>
                    </div>
                    <div class="hidden md:flex items-center space-x-8">
                        <a href="../index.php" class="text-gray-600 hover:text-gray-900">Accueil</a>
                        <a href="#" class="text-gray-600 hover:text-gray-900">Collection</a>
                        <a href="#" class="text-gray-600 hover:text-gray-900">Services</a>
                        <div>
                            <a href="../profils/client.php"><img width="25px" class="bg-white rounded-full" src="../img/profile-major.svg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Header -->
        <header class="bg-white py-12">
            <div class="max-w-7xl mx-auto px-4 text-center">
                <h1 class="text-4xl font-bold text-gray-900 mb-4">Notre Collection</h1>
                <p class="text-lg text-gray-600">Découvrez notre sélection de véhicules de prestige</p>
            </div>
        </header>

        <!-- Filters -->
        <div class="bg-white py-4 mb-8 shadow-sm">
            <div class="max-w-7xl mx-auto px-4">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <select class="w-full p-2 border rounded">
                        <option value="">Toutes les catégories</option>
                        <?php
                        $arr = $categorie->showCategorie();
                        foreach ($arr as $row) {
                            echo "<option value='" . $row['Categorie_id'] . "'>" . $row['nom'] . "</option>";
                        }
                        ?>
                    </select>
                    <select class="w-full p-2 border rounded">
                        <option value="">Toutes les marques</option>
                        <?php
                        $arr = $vehicule->showAllVehicule();
                        foreach ($arr as $row) {
                            echo "<option value='" . $row['vehicule_id'] . "'>" . $row['modele'] . "</option>";
                        }
                        ?>
                    </select>
                </div>
            </div>
        </div>

        <!-- Vehicle Grid -->
        <div class="max-w-7xl mx-auto px-4 mb-12">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Vehicle Card 1 -->
                <?php
                $rows = $vehicule->showAllVehicule();
                foreach ($rows as $row) {
                ?>
                    <div class="bg-white rounded shadow-sm overflow-hidden">
                        <img src="<?php echo $row['vehicule_image'] ?>" alt="Ferrari SF90" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <span class="text-sm text-blue-600 font-medium"><?php echo $row['nom'] ?></span>
                            <h3 class="text-xl font-bold text-gray-900 mt-1"><?php echo $row['modele'] . " " . $row['marque'] ?></h3>
                            <p class="text-gray-600">1000 CV - Hybride</p>
                            <div class="mt-4 flex justify-between items-center">
                                <span class="text-2xl font-bold text-gray-900"><?php echo $row['prix'] . "$" ?><span class="text-sm text-gray-600">/jour</span></span>
                                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700"><a href="../pages/reservation.php?vehiculeId=<?php echo $row['vehicule_id'] ?>&clientId=<?php echo $_SESSION['user_id'] ?>">Réserver</a></button>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>

        <!-- Footer -->
        <footer class="bg-white border-t">
            <div class="max-w-7xl mx-auto px-4 py-8">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div>
                        <h3 class="text-lg font-bold text-gray-900 mb-4">D&L</h3>
                        <p class="text-gray-600">L'excellence automobile à votre service.</p>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-gray-900 mb-4">Contact</h3>
                        <p class="text-gray-600">+33 1 23 45 67 89</p>
                        <p class="text-gray-600">contact@drive-loc.fr</p>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-gray-900 mb-4">Adresse</h3>
                        <p class="text-gray-600">75008 Paris, France</p>
                    </div>
                </div>
                <div class="mt-8 pt-8 border-t text-center text-gray-600">
                    <p>&copy; 2024 Drive & Loc. Tous droits réservés.</p>
                </div>
            </div>
        </footer>
    </body>

    </html>
<?php
} else {
    header('location:../index.php');
    exit();
}
?>