<?php
require_once '../Drive-Loc/connection/connect.php';
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drive & Loc - Location de voitures</title>
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
                    <a href="#" class="text-gray-600 hover:text-gray-900">Accueil</a>
                    <a href="#" class="text-gray-600 hover:text-gray-900">Collection</a>
                    <a href="#" class="text-gray-600 hover:text-gray-900">Services</a>
                    <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
                        <a href="../Drive-Loc/pages/menu.php">Réserver maintenant</a>
                    </button>
                    <?php if (isset($_SESSION["role_id"])) { ?>
                        <div>
                            <a href="../Drive-Loc/profils/client.php"><img width="25px" class="bg-white rounded-full" src="../Drive-Loc/img/profile-major.svg" alt=""></a>
                        </div>
                    <?php } else { ?>
                        <div class="hidden md:flex items-center space-x-3">
                            <a href="../Drive-Loc/authentification/login.php" class="text-white hover:bg-blue-700 bg-blue-600 font-medium rounded-lg text-sm px-4 py-2">Log In</a>
                            <a href="../Drive-Loc/authentification/signUp.php" class="text-blue-600 bg-white hover:text-blue-700 font-medium rounded-lg text-sm px-4 py-2">Sign Up</a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="bg-white">
        <div class="max-w-7xl mx-auto px-4 py-16">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                <div class="space-y-6">
                    <h1 class="text-5xl font-bold text-gray-900">
                        Vivez l'Exception Automobile
                    </h1>
                    <p class="text-xl text-gray-600">
                        Des véhicules d'exception sélectionnés pour leur performance, leur élégance et leur caractère unique. Découvrez notre collection exclusive et réservez votre prochaine expérience de conduite.
                    </p>
                    <div class="flex gap-4">
                        <button class="bg-blue-600 text-white px-8 py-3 rounded-lg hover:bg-blue-700 text-lg">
                            Voir la collection
                        </button>
                        <button class="border border-gray-300 text-gray-700 px-8 py-3 rounded-lg hover:bg-gray-50 text-lg">
                            En savoir plus
                        </button>
                    </div>
                    <div class="pt-8 flex gap-12">
                        <div>
                            <div class="text-3xl font-bold text-gray-900">20+</div>
                            <div class="text-gray-600">Véhicules de luxe</div>
                        </div>
                        <div>
                            <div class="text-3xl font-bold text-gray-900">24/7</div>
                            <div class="text-gray-600">Support client</div>
                        </div>
                        <div>
                            <div class="text-3xl font-bold text-gray-900">100%</div>
                            <div class="text-gray-600">Satisfaction client</div>
                        </div>
                    </div>
                </div>

                <div class="hidden lg:block">
                    <img src="img/car3.jpg" alt="Voiture de luxe" class="rounded-lg shadow-lg">
                </div>
            </div>
        </div>
    </div>

    <!-- Vehicle Collection -->
    <div class="bg-gray-50 py-12">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">Notre Collection</h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Vehicle Card 1 -->
                <div class="bg-white rounded-lg shadow overflow-hidden">
                    <img src="img/car5.jpg"
                        alt="Ferrari F8 Tributo"
                        class="w-full h-48 object-cover">
                    <div class="p-4">
                        <div class="flex justify-between items-center mb-2">
                            <h3 class="text-xl font-bold">Ferrari F8 Tributo</h3>
                            <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-sm">Sport</span>
                        </div>
                        <p class="text-gray-600 mb-4">720 CV - 0 à 100 km/h en 2.9s</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-blue-600">1500€/jour</span>
                            <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                                <?php if (isset($_SESSION['role_id'])) { ?>
                                    <a href="../Drive-Loc/pages/reservation.php">Réserver</a>
                                <?php } else { ?>
                                    <a href="../Drive-Loc/authentification/login.php">Réserver</a>
                                <?php } ?>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Vehicle Card 2 -->
                <div class="bg-white rounded-lg shadow overflow-hidden transition duration-150 ease-out hover:ease-in">
                    <img src="img/car6.jpg"
                        alt="Rolls-Royce Phantom"
                        class="w-full h-48 object-cover">
                    <div class="p-4">
                        <div class="flex justify-between items-center mb-2">
                            <h3 class="text-xl font-bold">Rolls-Royce Phantom</h3>
                            <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-sm">Luxe</span>
                        </div>
                        <p class="text-gray-600 mb-4">571 CV - Luxe absolu</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-blue-600">2000€/jour</span>
                            <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                                <?php if (isset($_SESSION['role_id'])) { ?>
                                    <a href="../Drive-Loc/pages/reservation.php">Réserver</a>
                                <?php } else { ?>
                                    <a href="../Drive-Loc/authentification/login.php">Réserver</a>
                                <?php } ?>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Vehicle Card 3 -->
                <div class="bg-white rounded-lg shadow overflow-hidden">
                    <img src="img/car7.jpg"
                        alt="Tesla Model S Plaid"
                        class="w-full h-48 object-cover">
                    <div class="p-4">
                        <div class="flex justify-between items-center mb-2">
                            <h3 class="text-xl font-bold">Tesla Model S Plaid</h3>
                            <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-sm">Électrique</span>
                        </div>
                        <p class="text-gray-600 mb-4">1020 CV - 0 à 100 km/h en 2.1s</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-blue-600">1200€/jour</span>
                            <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                                <?php if (isset($_SESSION['role_id'])) { ?>
                                    <a href="../Drive-Loc/pages/reservation.php">Réserver</a>
                                <?php } else { ?>
                                    <a href="../Drive-Loc/authentification/login.php">Réserver</a>
                                <?php } ?>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-center m-4">
            <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                <?php if (isset($_SESSION['role_id'])) { ?>
                    <a href="../Drive-Loc/pages/menu.php">See More</a>
                <?php } else { ?>
                    <a href="../Drive-Loc/authentification/login.php">See More</a>
                <?php } ?>
            </button>
        </div>

    </div>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <span class="text-2xl font-bold text-blue-400">D&L</span>
                    <p class="mt-2 text-gray-400">L'excellence automobile à votre service.</p>
                </div>

                <div>
                    <h4 class="font-bold mb-4">Navigation</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">Accueil</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Collection</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Services</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-bold mb-4">Contact</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li>+33 1 23 45 67 89</li>
                        <li>contact@drive-loc.fr</li>
                        <li>75008 Paris, France</li>
                    </ul>
                </div>
            </div>

            <div class="mt-8 pt-8 border-t border-gray-700 text-center text-gray-400">
                &copy; 2024 Drive & Loc. Tous droits réservés.
            </div>
        </div>
    </footer>
</body>

</html>