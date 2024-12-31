<?php
require_once '../connection/connect.php';

class user
{
    private $conn;

    public function __construct()
    {
        $db = new DBconnect();
        $this->conn = $db->connectpdo();
    }

    public function registerAdmin($nom, $prenom, $email, $password)
    {
        $stmt = $this->conn->prepare("SELECT * FROM user WHERE email = ?");
        $stmt->bindParam(1, $email);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            return false;
        } else {
            $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
            $stmt = $this->conn->prepare("INSERT INTO user (nom, prenom, email, password, status, role_id) VALUES (?, ?, ?, ?, 1)");
            $stmt->bindParam(1, $nom);
            $stmt->bindParam(2, $prenom);
            $stmt->bindParam(3, $email);
            $stmt->bindParam(4, $hashedPassword);
            if ($stmt->execute()) {
                return true;
            } else {
                return false;
            }
        }
    }

    public function register($nom, $prenom, $email, $password) {
        $stmt = $this->conn->prepare("SELECT * FROM user WHERE email = ?");
        $stmt->bindParam(1, $email);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            return false;
        } else {
            $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
            $stmt = $this->conn->prepare("INSERT INTO user (nom, prenom, email, password, role_id) VALUES (?, ?, ?, ?, 2)");
            $stmt->bindParam(1, $nom);
            $stmt->bindParam(2, $prenom);
            $stmt->bindParam(3, $email);
            $stmt->bindParam(4, $hashedPassword);
            if ($stmt->execute()) {
                return true;
            } else {
                return false;
            }
        }
    }

    public function authenticate($email, $password)
    {
        $stmt = $this->conn->prepare("SELECT * FROM User WHERE email = ? ");
        $stmt->bindParam(1, $email);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            if (password_verify($password, $user['password'])) {

                $_SESSION["user_id"] = $user['user_id'];
                $_SESSION["email"] = $user['email'];
                $_SESSION["role"] = $user['role_id'];
                $_SESSION["nom"] = $user['nom'];
                $_SESSION["prenom"] = $user['prenom'];

                if ($user['role_id'] == 1) {
                    header("Location: ../pages/dashboard.php");
                    exit();
                } else {
                    header("Location: ../index.php");
                    exit();
                }
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    function userDisconnect(){
       
    }
}
