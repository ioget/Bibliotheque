<?php

namespace App\Models;

use CodeIgniter\Model;
use \PDO;
class UsersModel extends Model
{
    protected $table = 'users';

    protected $allowedFields =  ['id_users'	,'nom'	,'prenom',	'matricule',	'password',	'date_naissance'	,'email',	'id_niveau',	'sexe',	'type',	'id_filiere',	'point',	'create_at' ];


    public function insert_($data)
    {
        
    }

    function get_pdo() {
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
    
    function insert_user($data) {
        // Get the PDO instance
        $pdo = $this->get_pdo();
    
        var_dump($data);
        // Prepare the INSERT statement
        $stmt = $pdo->query("INSERT INTO users (nom, prenom, matricule, password, date_naissance, email, id_niveau, sexe, type, id_filiere, `point`, create_at) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    
        // Execute the statement with the data
        if ($stmt->execute($data)) {
            return true;
        } else {
            return "Error: " . implode(", ", $stmt->errorInfo());
        }
    }
    


    public function getUsers()
    {
        return $this->findAll();
    }
}