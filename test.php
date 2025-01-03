<?php
session_start();

if ($_SESSION['role_id'] == 2) {
  require_once('../classes/reservation.php');

  $reservation = new reservation();
?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Reservations - Drive & Loc</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <style>
      :root {
        --primary: #FFD700;
        --secondary: #FFFFFF;
      }

      .bg-primary {
        background-color: var(--primary);
      }

      .btn-primary {
        background-color: var(--primary);
        transition: transform 0.3s ease;
      }

      .btn-primary:hover {
        transform: translateY(-2px);
      }

      .btn-cancel {
        background-color: #FF4444;
        color: white;
        transition: transform 0.3s ease;
      }

      .btn-cancel:hover {
        transform: translateY(-2px);
        background-color: #FF0000;
      }
    </style>
  </head>

  <body>
    <nav class="bg-primary shadow-lg">
      <div class="max-w-7xl mx-auto px-4">
        <div class="flex justify-between items-center py-4">
          <div class="flex items-center space-x-4">
            <a href="../index.php" class="text-2xl font-bold w-8 mr-24"><img src="../imgs/360_F_323469705_belmsoxt9kj49rxSmOBXpO0gHtfVJvjl-removebg-preview.png" alt="LOGO"></a>
          </div>
          <div class="hidden w-full md:block md:w-auto">
            <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium rounded-lg md:flex-row md:space-x-8 md:mt-0">
              <li>
                <a href="../index.php" class="block py-2 pl-3 pr-4 text-white hover:text-black-200 md:p-0">Home</a>
              </li>
              <li>
                <a href="../pages/vehicles.php" class="block py-2 pl-3 pr-4 text-white hover:text-black-200 md:p-0">Cars</a>
              </li>
            </ul>
          </div>
          <?php if (isset($_SESSION['user_id'])) { ?>
            <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
              <button type="button" class="flex text-sm rounded-full md:me-0" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
                <span class="sr-only">Open user menu</span>
                <img width="40px" src="../imgs/profilephoto.png" alt="user photo">
              </button>
              <!-- Dropdown menu -->
              <div class="z-50 hidden absolute top-10 right-40 z-50 my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600" id="user-dropdown">
                <div class="px-4 py-3">
                  <span class="block text-sm text-gray-900 dark:text-white"><?php echo $_SESSION['nom'] . " " . $_SESSION['prenom'] ?></span>
                  <span class="block text-sm  text-gray-500 truncate dark:text-gray-400"><?php echo $_SESSION['email'] ?></span>
                </div>
                <li>
                  <a href="../pages/reservation_hestorie.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white ">My Reservations</a>
                </li>
                <li>
                  <a href="../classes/user.php?signout" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white ">Sign out</a>
                </li>
                </ul>
              </div>
              <button data-collapse-toggle="navbar-user" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-user" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                </svg>
              </button>
            </div>
          <?php } else { ?>
            <div class="flex items-center space-x-6">
              <a href="../autentification/login.php">Login</a>
              <a href="../autentification/signup.php" class="bg-white px-6 py-2 rounded-lg hover:bg-gray-100">Register</a>
            </div>
          <?php } ?>
        </div>
      </div>
    </nav>

    <main class="py-16">
      <div class="max-w-7xl mx-auto px-4">
        <h1 class="text-3xl font-bold mb-8">My Reservations</h1>

        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
          <div class="overflow-x-auto">
            <table class="w-full">
              <thead class="bg-gray-50">
                <tr>
                  <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Vehicle</th>
                  <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Start Date</th>
                  <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">End Date</th>
                  <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Total Price</th>
                  <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                  <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
                </tr>
              </thead>
              <tbody class="bg-white divide-y divide-gray-200">
                <?php
                $rows = $reservation->showClientReservations();
                foreach ($rows as $row) {
                  $status_accepte = $row['status'] === 'accepte' ? 'text-green-600' : 'text-gray-500';
                  $status_refuse = $row['status'] === 'refuse' ? 'text-red-600' : 'text-gray-500';
                ?>
                  <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                      <div class="text-sm font-medium text-gray-900">
                        <?php echo $row['marque'] . ' ' . $row['modele']; ?>
                      </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                      <div class="text-sm text-gray-900">
                        <?php echo date('M d, Y', strtotime($row['date_debut'])); ?>
                      </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                      <div class="text-sm text-gray-900">
                        <?php echo date('M d, Y', strtotime($row['date_fin'])); ?>
                      </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                      <div class="text-sm text-gray-900">
                        <?php echo number_format($row['prix'], 2); ?> $
                      </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                      <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full <?php echo $row['status'] === 'accepte' ? $status_accepte : $status_refuse; ?>">
                        <?php echo $row['status']; ?>
                      </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                      <?php if ($row['status'] == 'waiting') { ?>
                        <form action="../classes/client.php" method="POST">
                          <input type="hidden" name="reservation_id" value="<?php echo $row['reservation_id']; ?>">
                          <input type="hidden" name="action" value="cancel">
                          <button type="submit" class="btn-cancel px-4 py-2 rounded-lg text-sm">
                            Cancel
                          </button>
                        </form>
                      <?php } ?>
                    </td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </main>

    <footer class="bg-gray-800 text-white py-8 mt-80">
      <div class="max-w-7xl mx-auto px-4 text-center">
        <p>&copy; 2024 Drive & Loc. All rights reserved.</p>
      </div>
    </footer>

    <script>
      let isModalOpen = false;

      document.getElementById('user-menu-button').addEventListener('click', function() {
        let dropdown = document.getElementById('user-dropdown');

        if (isModalOpen) {
          dropdown.classList.add('hidden');
          isModalOpen = false;
        } else {
          dropdown.classList.remove('hidden');
          isModalOpen = true;
        }
      });
    </script>
  </body>

  </html>
<?php
} else {
  header('location: ../Drive-Loc/autentification/signup.php');
  exit();
}
?>























































<!-- !on getAllReservations() {
        $sql = "SELECT r.*, 
                       CONCAT(u.nom, ' ', u.prenom) as client_name,
                       CONCAT(v.marque, ' ', v.modele) as vehicle_name
                FROM reservation r
                JOIN user u ON r.user_id = u.user_id
                JOIN vehicule v ON r.vehicule_id = v.vehicule_id";
        
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function updateReservationStatus($reservation_id, $status) {
        $sql = "UPDATE reservation SET status = ? WHERE reservation_id = ?";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([$status, $reservation_id]);
    }

    public function showClientReservations(){
       $user_id = $_SESSION['user_id'];

       $sql = "SELECT r.*, v.modele, v.marque, v.prix
              FROM reservation r 
              JOIN vehicule v ON r.vehicule_id = v.vehicule_id 
              WHERE r.user_id = ? ";
       $stmt = $this->pdo->prepare($sql);

       $stmt->bindParam(1, $user_id);

       $stmt->execute();

       return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}

?>



<!-- <?php
      // session_start();

      // require_once '../classes/user.php';
      // require_once '../classes/conn.php';

      // class client extends User{
      //     private $pdo;

      //     function __construct(){
      //         $connection = new DBconnect();
      //         $this->pdo = $connection->connectpdo();
      //     }

      //     function ReserverVehicule($date_debut, $date_fin, $client_id, $vehicule_id){
      //         $sql = "INSERT INTO reservation (date_debut, date_fin, status, user_id, vehicule_id)
      //                 VALUES (:date_debut, :date_fin, 'waiting', :user_id, :vehicule_id)";
      //         $stmt = $this->pdo->prepare($sql);
      //         $stmt->bindParam(":date_debut", $date_debut);
      //         $stmt->bindParam(":date_fin", $date_fin);
      //         $stmt->bindParam(":user_id", $client_id);
      //         $stmt->bindParam(":vehicule_id", $vehicule_id);

      //         if($stmt->execute()){
      //             $_SESSION['success'] = "Reservation completed, wait for admin approval!";
      //             header('Location: ../pages/reservation_page.php?vehiculeId=' . $vehicule_id);
      //             exit();
      //         }
      //     }

      //     function cancelReservation($reservation_id){
      //         $sql = "UPDATE reservation
      //                 SET status = 'refuse'
      //                 WHERE reservation_id = :reservation_id";
      //         $stmt = $this->pdo->prepare($sql);
      //         $stmt->bindParam(':reservation_id', $reservation_id);
      //         if($stmt->execute()){
      //             header('Location: ../pages/reservation_hestorie.php');
      //             exit();
      //         }
      //     }

      //     function ShowAllClients(){
      //         $sql = "SELECT * FROM user";
      //         $stmt = $this->pdo->prepare($sql);
      //         if($stmt->execute()){
      //             return $stmt->fetchAll(PDO::FETCH_ASSOC);
      //         }
      //     }


      // }

      // if (isset($_POST['reservation_submit']) && isset($_GET['vehicule_Id']) && isset($_GET['clientId'])) {

      //     $date_debut = $_POST['date_debut'];
      //     $date_fin = $_POST['date_fin'];
      //     $vehiculeId = $_GET['vehicule_Id'];
      //     $clientId = $_GET['clientId'];

      //     $client = new client();

      //     if ($date_debut >= date("Y-m-d") && $date_fin > $date_debut) {
      //         $client->ReserverVehicule($date_debut, $date_fin, $clientId, $vehiculeId);
      //     } else {
      //         $_SESSION['date_invalide'] = "Please enter a valid date!";
      //         header('Location: ../pages/reservation_page.php?vehiculeId=' . $vehiculeId);
      //         exit();
      //     }
      // }

      // if(isset($_POST['action']) && isset($_POST['reservation_id'])){
      //     $reservation_id = $_POST['reservation_id'];

      //     $client = new client();

      //     $client->cancelReservation($reservation_id);
      // }

      ?> --> -->