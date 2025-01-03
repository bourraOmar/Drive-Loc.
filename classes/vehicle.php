
<?php

require_once '../connection/connect.php';

class Vehicule
{
  protected $modele;
  protected $marque;
  protected $prix;
  protected $status;
  protected $Vehicule_image;
  protected $Categorie_id;
  private $pdo;

  function __construct()
  {
    $connection = new DBconnect();
    $this->pdo = $connection->connectpdo();
  }

  function AjouterVehicule($modele, $marque, $prix, $Vehicule_image, $Categorie_id)
  {
    $this->modele = $modele;
    $this->marque = $marque;
    $this->prix = $prix;
    $this->Categorie_id = $Categorie_id;

    $sql = "INSERT INTO vehicule (modele, marque, prix, status, vehicule_image, Categorie_id)
              VALUES (:model, :marque, :prix, 'active', :vehicule_image, :Categorie_id)";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindParam(':model', $modele);
    $stmt->bindParam(':marque', $marque);
    $stmt->bindParam(':prix', $prix);
    $stmt->bindParam(':vehicule_image', $Vehicule_image);
    $stmt->bindParam(':Categorie_id', $Categorie_id);

    if ($stmt->execute()) {
      header('Location: ../pages/dashboard.php');
      exit();
    }
  }


  function showAllVehicule()
  {
    $sql = "SELECT v.*, c.nom
            FROM vehicule v
            LEFT JOIN Categorie c
            ON v.Categorie_id = c.Categorie_id";
    $stmt = $this->pdo->prepare($sql);
    if ($stmt->execute()) {
      return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
  }


  function showSpiceficAllVehicule($selectedvehiculeID)
  {
    $sql = "SELECT v.*, c.nom
          FROM vehicule v
          LEFT JOIN Categorie c
          ON v.Categorie_id = c.Categorie_id
          WHERE vehicule_id = $selectedvehiculeID";
    $stmt = $this->pdo->prepare($sql);
    if ($stmt->execute()) {
      return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
  }


  function showTop3Vehicule()
  {
    $sql = "SELECT v.*, c.nom
          FROM vehicule v
          LEFT JOIN Categorie c
          ON v.Categorie_id = c.Categorie_id
          LIMIT 3";
    $stmt = $this->pdo->prepare($sql);
    if ($stmt->execute()) {
      return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
  }
}
