<?php

namespace App\Models;

use CodeIgniter\Model;
use \PDO;
class UsersModel extends Model
{
    protected $table = 'users';

    protected $allowedFields =  ['id_users'	,'nom'	,'prenom',	'matricule',	'password',	'date_naissance'	,'email',	'id_niveau',	'sexe',	'type',	'id_filiere',	'point',	'create_at' ];


    public function getStudents()
    {
        $pdo = $this->getPdo();
        try{
            $stmt = $pdo->prepare("SELECT * FROM `users` WHERE `type` = :type ");
            $stmt->execute(['type' => "Etudiant"]);
           $user = [];
            while( $obj= $stmt->fetch(PDO::FETCH_ASSOC))
            {
                
                 $obj['id_niveau'] = $this->getNiveau($obj['id_users']);
                 $obj['id_filiere'] = $this->getFiliere((int)$obj['id_filiere']);
                 $obj['livre'] = $this->getLivrePris($obj['id_users']);
                 $user[] = $obj;
            }
        /*  var_dump($user);
            die();*/
            if(!empty($user))
            {
                return $user;
            }else{
                return [];
            }
        }catch(\PDOException $e){
            die($e->getMessage(). (int)$e->getCode());
        }
    }

    public function getStudent( int $id)
    {
        $pdo = $this->getPdo();
        try{
            $stmt = $pdo->prepare("SELECT * FROM `users` WHERE `type` = :type AND `id_users` = :id ");
            $stmt->execute(['type' => "Etudiant",'id'=> $id]);
           $user = [];
            while( $obj= $stmt->fetch(PDO::FETCH_ASSOC))
            {
                
                 $obj['id_niveau'] = $this->getNiveau($obj['id_users']);
                 $obj['id_filiere'] = $this->getFiliere((int)$obj['id_filiere']);
                 $obj['livre'] = $this->getLivrePris($obj['id_users']);
                 $user[] = $obj;
            }
        /*  var_dump($user);
            die();*/
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



    public function getTeachers()
    {
        $pdo = $this->getPdo();
        try{
            $stmt = $pdo->prepare("SELECT * FROM `users` WHERE `type` = :type ");
            $stmt->execute(['type' => "Enseignant"]);
           $user = [];
            while( $obj= $stmt->fetch(PDO::FETCH_ASSOC))
            {
                 $obj['id_niveau'] = $this->getNiveau($obj['id_users']);
                 $obj['id_filiere'] = $this->getFiliere($obj['id_filiere']);
                 $obj['livre'] = $this->getLivrePris($obj['id_users']);
                 $user[] = $obj;
            }
        /*  var_dump($user);
            die();*/
            if(!empty($user))
            {
                return $user;
            }else{
                return [];
            }
        }catch(\PDOException $e){
            die($e->getMessage(). (int)$e->getCode());
        }
    }

    public function getTeacher()
    {
        $pdo = $this->getPdo();
        try{
            $stmt = $pdo->prepare("SELECT * FROM `users` WHERE `type` = :type ");
            $stmt->execute(['type' => "Enseignant"]);
           $user = [];
            while( $obj= $stmt->fetch(PDO::FETCH_ASSOC))
            {
                 $obj['id_niveau'] = $this->getNiveau($obj['id_users']);
                 $obj['id_filiere'] = $this->getFiliere($obj['id_filiere']);
                 $obj['livre'] = $this->getLivrePris($obj['id_users']);
                 $user[] = $obj;
            }
        /*  var_dump($user);
            die();*/
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



    public function getNiveau($id)
    {
        $pdo = $this->getPdo();
        try{
            $stmt = $pdo->prepare("SELECT * FROM `niveau` WHERE `id_niveau` = :id  ");
            $stmt->execute(['id' => $id]);
            $obj = $stmt->fetchAll(PDO::FETCH_ASSOC);
            if(!empty($obj))
            {
                return $obj[0]['libelle'];
            }else{
                return null;
            }
        }catch(\PDOException $e){
            die($e->getMessage(). (int)$e->getCode());
        }
    }

    public function getLivrePris($id)
    {
        $pdo = $this->getPdo();
        try{
            $stmt = $pdo->prepare("SELECT * FROM livre as l , prendre as p WHERE p.id_livre =  l.id_livre AND id_users = :id ");
            $stmt->execute(['id' => $id]);
            $obj = $stmt->fetchAll(PDO::FETCH_ASSOC);
            if(!empty($obj))
            {
                $str = "  ";
            //   var_dump($obj[0]['id_livre']);
                foreach ($obj as  $livre) {
                   $str  = $str . $this->getLivreNom($livre['id_livre']) . "<br/>";
                }

                return $str;
            }else{
                return null;
            }
        }catch(\PDOException $e){
            die($e->getMessage(). (int)$e->getCode());
        }
    }


    public function getLivreNom($id):string
    {
        $pdo = $this->getPdo();
        try{
            $stmt = $pdo->prepare("SELECT * FROM `livre` WHERE `id_livre` = :id  ");
            $stmt->execute(['id' => $id]);
            $obj = $stmt->fetchAll(PDO::FETCH_ASSOC);
            if(!empty($obj))
            {
                return $obj[0]['nom'];
            }else{
                return null;
            }
        }catch(\PDOException $e){
            die($e->getMessage(). (int)$e->getCode());
        }
    }


    public function getFiliere($id)
    {
        $pdo = $this->getPdo();
        try{
            $stmt = $pdo->prepare("SELECT * FROM `filiere` WHERE `id_filiere` = :id  ");
            $stmt->execute(['id' => $id]);
            $obj = $stmt->fetchAll(PDO::FETCH_ASSOC);
         //   var_dump($obj);
            if(!empty($obj))
            {
                return $obj[0]['libelle'];
            }else{
                return null;
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

    public function getPrendreUsersLike($nom) {
        $db = \Config\Database::connect();
        $builder = $db->table('prendre');
        $builder->select('*');
        $builder->join('users', 'prendre.id_users = users.id_users');
        $builder->like('users.matricule', $nom);
        $query = $builder->get();
        return $query->getResult();
    }
    
    public function removeDuplicates($array) {
        $result = array_unique($array, SORT_REGULAR);
        return $result;
    }
    
    public function getPrendreUsersLike2($nom) {
        $db = \Config\Database::connect();
        $builder = $db->table('prendre');
        $builder->select('*');
        $builder->join('users', 'prendre.id_users = users.id_users');
        $builder->like('users.nom', $nom);
        $query = $builder->get();
        return $query->getResult();
    }
    
 
    
    public function getPrendreUsersNoBack($nom) {
        $db = \Config\Database::connect();
        $builder = $db->table('prendre');
        $builder->select('*');
        $builder->join('users', 'prendre.id_users = users.id_users');
        $builder->like('users.matricule', $nom);
        $builder->where('date_return', '0000-00-00 00:00:00');
        $builder->where('date_expected_return <', date("Y-m-d H:i:s"));
        $query = $builder->get();
        return $query->getResult();
    }

    public function getPrendreUsersNoBack2($nom) {
        $db = \Config\Database::connect();
        $builder = $db->table('prendre');
        $builder->select('*');
        $builder->join('users', 'prendre.id_users = users.id_users');
        $builder->like('users.nom', $nom);
        $builder->where('date_return', '0000-00-00 00:00:00');
        $builder->where('date_expected_return <', date("Y-m-d H:i:s"));
        $query = $builder->get();
        return $query->getResult();
    }
}