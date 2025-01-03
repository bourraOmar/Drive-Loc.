<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Drive & Loc - Réservation</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
  <!-- Navigation -->
  <nav class="bg-white shadow-sm">
    <div class="max-w-7xl mx-auto px-4">
      <div class="flex justify-between items-center h-16">
        <a href="#" class="text-2xl font-bold text-gray-800">D&L</a>
        <div class="hidden md:flex space-x-8">
          <a href="../index.php" class="text-gray-600 hover:text-gray-900">Accueil</a>
          <a href="#" class="text-gray-600 hover:text-gray-900">Collection</a>
          <a href="#" class="text-gray-600 hover:text-gray-900">Services</a>
          <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            Réserver
          </button>
        </div>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="bg-white py-8">
    <div class="max-w-7xl mx-auto px-4">
      <h1 class="text-3xl font-bold text-gray-900">Réservation</h1>
      <p class="text-gray-600 mt-2">Complétez les informations ci-dessous pour réserver votre véhicule</p>
    </div>
  </header>

  <!-- Main Content -->
  <main class="max-w-7xl mx-auto px-4 py-8">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <!-- Reservation Form -->
      <div class="md:col-span-2 space-y-8">
        <!-- Vehicle Selection -->
        <div class="bg-white p-6 rounded shadow-sm">
          <h2 class="text-xl font-bold text-gray-900 mb-4">Sélection du véhicule</h2>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
              <label class="block text-gray-700 mb-2">Catégorie</label>
              <select class="w-full p-2 border rounded">
                <option value="">Sélectionnez une catégorie</option>
                <option value="sports">Voitures de sport</option>
                <option value="luxury">Berlines de luxe</option>
                <option value="suv">SUV Premium</option>
              </select>
            </div>
            <div>
              <label class="block text-gray-700 mb-2">Véhicule</label>
              <select class="w-full p-2 border rounded">
                <option value="">Sélectionnez un véhicule</option>
                <option value="ferrari">Ferrari SF90 Stradale</option>
                <option value="porsche">Porsche 911 GT3</option>
                <option value="tesla">Tesla Model S Plaid</option>
              </select>
            </div>
          </div>
        </div>

        <!-- Dates -->
        <div class="bg-white p-6 rounded shadow-sm">
          <h2 class="text-xl font-bold text-gray-900 mb-4">Dates de location</h2>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
              <label class="block text-gray-700 mb-2">Date de début</label>
              <input type="date" class="w-full p-2 border rounded">
            </div>
            <div>
              <label class="block text-gray-700 mb-2">Date de fin</label>
              <input type="date" class="w-full p-2 border rounded">
            </div>
          </div>
        </div>

        <!-- Personal Information -->
        <div class="bg-white p-6 rounded shadow-sm">
          <h2 class="text-xl font-bold text-gray-900 mb-4">Informations personnelles</h2>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
              <label class="block text-gray-700 mb-2">Nom</label>
              <input type="text" class="w-full p-2 border rounded">
            </div>
            <div>
              <label class="block text-gray-700 mb-2">Prénom</label>
              <input type="text" class="w-full p-2 border rounded">
            </div>
            <div>
              <label class="block text-gray-700 mb-2">Email</label>
              <input type="email" class="w-full p-2 border rounded">
            </div>
            <div>
              <label class="block text-gray-700 mb-2">Téléphone</label>
              <input type="tel" class="w-full p-2 border rounded">
            </div>
          </div>
        </div>

        <!-- Driver's License -->
        <div class="bg-white p-6 rounded shadow-sm">
          <h2 class="text-xl font-bold text-gray-900 mb-4">Permis de conduire</h2>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
              <label class="block text-gray-700 mb-2">Numéro de permis</label>
              <input type="text" class="w-full p-2 border rounded">
            </div>
            <div>
              <label class="block text-gray-700 mb-2">Date d'obtention</label>
              <input type="date" class="w-full p-2 border rounded">
            </div>
          </div>
        </div>
      </div>

      <!-- Summary Card -->
      <div class="md:col-span-1">
        <div class="bg-white p-6 rounded shadow-sm sticky top-8">
          <h2 class="text-xl font-bold text-gray-900 mb-4">Résumé de la réservation</h2>
          <div class="space-y-4">
            <div class="pb-4 border-b">
              <p class="text-gray-600">Véhicule sélectionné</p>
              <p class="text-lg font-medium text-gray-900">Ferrari SF90 Stradale</p>
            </div>
            <div class="pb-4 border-b">
              <p class="text-gray-600">Durée de location</p>
              <p class="text-lg font-medium text-gray-900">3 jours</p>
            </div>
            <div class="pb-4 border-b">
              <p class="text-gray-600">Prix par jour</p>
              <p class="text-lg font-medium text-gray-900">2500€</p>
            </div>
            <div class="pb-4">
              <p class="text-gray-600">Total</p>
              <p class="text-2xl font-bold text-gray-900">7500€</p>
            </div>
            <button class="w-full bg-blue-600 text-white px-6 py-3 rounded font-medium hover:bg-blue-700">
              Confirmer la réservation
            </button>
            <p class="text-sm text-gray-500 text-center mt-4">
              En confirmant, vous acceptez nos conditions générales de location
            </p>
          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- Footer -->
  <footer class="bg-white border-t mt-12">
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


<div class="md:w-1/2 p-6">
  <div class="flex justify-between items-start mb-4">
    <div>
      <h1 class="text-3xl font-bold"><?php echo $row['marque'] ?></h1>
      <p class="text-gray-600 text-xl mt-2"><?php echo $row['modele'] ?></p>
    </div>
    <span class="bg-primary px-4 py-2 rounded-full text-lg font-semibold">$<?php echo $row['prix'] ?>/day</span>
  </div>


  <!-- Availability Status -->
  <div class="mb-6">
    <span class="inline-flex items-center px-4 py-2 rounded-full text-sm font-semibold bg-green-100 text-green-800">
      <span class="w-2 h-2 bg-green-500 rounded-full mr-2"></span>
      <?php echo $row['status'] ?>
    </span>
    <span class="inline-flex items-center px-4 py-2 rounded-full text-sm font-semibold bg-red-100 text-red-800">
      <span class="w-2 h-2 bg-red-500 rounded-full mr-2"></span>
      <?php echo $row['nom'] ?>
    </span>
  </div>

  <!-- Car Features -->
  <div class="grid grid-cols-2 gap-6 mb-6">
    <div>
      <h3 class="font-semibold mb-2">Features:</h3>
      <ul class="space-y-2">
        <li>✓ 5 Seats</li>
        <li>✓ Automatic Transmission</li>
        <li>✓ GPS Navigation</li>
        <li>✓ Bluetooth</li>
      </ul>
    </div>
    <div>
      <h3 class="font-semibold mb-2">Specifications:</h3>
      <ul class="space-y-2">
        <li>• Engine: 2.5L 4-cylinder</li>
        <li>• Fuel: Gasoline</li>
        <li>• Year: 2024</li>
        <li>• Mileage: 15,000 km</li>
      </ul>
    </div>
  </div>
  <?php
  if (isset($_SESSION['date_invalide'])) {
    echo $_SESSION['date_invalide'];
  }
  ?>

  <!-- Reservation Form -->
  <form class="space-y-4" method="post" action="../classes/client.php?vehicule_Id=<?php echo $_SESSION['vehicule_id'] ?>&clientId=<?php echo $_SESSION['user_id'] ?>">
    <div class="grid grid-cols-2 gap-4">
      <div>
        <label class="block text-sm font-medium mb-1">Pick-up Date</label>
        <input type="date" class="w-full border rounded-lg p-2" name="date_debut">
      </div>
      <div>
        <label class="block text-sm font-medium mb-1">Return Date</label>
        <input type="date" class="w-full border rounded-lg p-2" name="date_fin">
      </div>
    </div>
    <input name="reservation_submit" type="submit" class="cursor-pointer btn-primary w-full py-3 rounded-lg text-lg font-semibold mt-6" value="Reserve Now">
  </form>



  <?php
// Define the two dates
$date1 = new DateTime("2025-01-01");
$date2 = new DateTime("2024-12-31");

// Calculate the difference
$diff = $date1->diff($date2);

// Display the difference
echo "Difference: " . $diff->days . " days\n";
echo "Years: " . $diff->y . ", Months: " . $diff->m . ", Days: " . $diff->d . "\n";

// Additional details
if ($diff->invert) {
    echo "The second date is earlier than the first date.\n";
} else {
    echo "The first date is earlier than the second date.\n";
}
?>
