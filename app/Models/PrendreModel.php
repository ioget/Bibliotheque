<?php

namespace App\Models;

use CodeIgniter\Model;
use \PDO;
class PrendreModel extends Model
{
    protected $table = 'prendre';

    protected $allowedFields = [	'id_prendre','id_livre','id_users',	'id_admin'	,'date_return'	,'date_taken',	'date_expected_return'];

   public function getPdo() {
        // Set the database credentials
        $host = 'localhost';
        $db   = 'bibio';
        $user = 'root';
        $pass = '';
        $charset = 'utf8mb4';
    
        // Set the DSN
        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    
        // Set the options
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];
    
        // Create a new PDO instance
        try {
            return new PDO($dsn, $user, $pass, $options);
        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage(), (int)$e->getCode());
        }
    }
  public  function insertValues(int $id_livre,int $id_users,int $id_admin, $date_return, $date_taken, $date_expected_return) {
        // Remplacez ces valeurs par vos propres informations de connexion à la base de données
       
        try {
            // Créer une nouvelle connexion PDO
         $pdo = $this->getPdo();
            // Préparer la requête d'insertion
            $stmt = $pdo->prepare("INSERT INTO prendre ( id_livre, id_users, id_admin, date_return, date_taken, date_expected_return) VALUES (:id_prendre, :id_livre, :id_users, :id_admin, :date_return, :date_taken, :date_expected_return)");
    
            // Lier les paramètres aux valeurs
           
            $stmt->bindParam(':id_livre', $id_livre);
            $stmt->bindParam(':id_users', $id_users);
            $stmt->bindParam(':id_admin', $id_admin);
            $stmt->bindParam(':date_return', $date_return);
            $stmt->bindParam(':date_taken', $date_taken);
            $stmt->bindParam(':date_expected_return', $date_expected_return);
    
            // Exécuter la requête
            $stmt->execute();
        } catch (\PDOException $e) {
            // Gérer les erreurs de connexion à la base de données
            die("Erreur de connexion à la base de données: " . $e->getMessage());
        }
    }
    
}