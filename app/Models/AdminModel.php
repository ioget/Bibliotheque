<?php

namespace App\Models;

use CodeIgniter\Model;
use \PDO;
class AdminModel extends Model
{
    protected $table = 'admin';

    protected $allowedFields = ['id_admin','nom','prenom','password','username','date_naissance','email'];


    public function insert_($data)
    {
        
    }

    public function  getAdmin($username)
    {
        $pdo = $this->getPdo();
        try{
            $stmt = $pdo->prepare("SELECT * FROM `admin` WHERE username = :username ");
            $stmt->execute(['username' => $username]);
            $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
            if(!empty($user))
            {
                return $user[0];
            }else{
                return [];
            }
        }catch(\PDOException $e){
            die($e->getMessage(). (int)$e->getCode());
        }
    }

    function getPdo() {
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
        $pdo = $this->getPdo();
    
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