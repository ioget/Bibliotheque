<?php

namespace App\Models;

use CodeIgniter\Model;
use \PDO;
class LivresModel extends Model
{
    protected $table = 'livre';

    protected $allowedFields = ['id_livre',	'nom',	'resume',	'date_publication',	'nb_exemplaire',	'langue','id_categorie'];


    public function insert_($data)
    {
        
    }

    public function  getAll()
    {
        $pdo = $this->getPdo();
        try{
            $stmt = $pdo->prepare("SELECT * FROM `livre` WHERE 1 ");
            $stmt->execute();
            $livre =[];
            while($obj = $stmt->fetch(PDO::FETCH_ASSOC))
            {
               $obj['categorie'] = $this->getCatName($obj['id_categorie']);
               $obj['available'] = (int)$obj['nb_exemplaire'] - (int)$this->getAvailaible($obj['id_livre']);
               $livre[] = $obj; 
            }
            if(!empty($livre))
            {
                return $livre;
            }else{
                return [];
            }
        }catch(\PDOException $e){
            die($e->getMessage(). (int)$e->getCode());
        }
    }

    public function  getOne($id)
    {
        $pdo = $this->getPdo();
        try{
            $stmt = $pdo->prepare("SELECT * FROM `livre` WHERE id_livre = :id ");
            $stmt->execute(['id' => $id]);
            $livre =[];
            while($obj = $stmt->fetch(PDO::FETCH_ASSOC))
            {
               $obj['categorie'] = $this->getCatName($obj['id_categorie']);
               $obj['available'] = (int)$obj['nb_exemplaire'] - (int)$this->getAvailaible($obj['id_livre']);
               $livre[] = $obj; 
            }
            if(!empty($livre))
            {
                return $livre[0];
            }else{
                return [];
            }
        }catch(\PDOException $e){
            die($e->getMessage(). (int)$e->getCode());
        }
    }


    public function  getCatName(int $cat)
    {
        $pdo = $this->getPdo();
 
        try{
            $stmt = $pdo->prepare("SELECT * FROM `categorie` WHERE `id_categorie` = :cat ");
            $stmt->execute(['cat'=> $cat]);
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

   

    public function  getAvailaible(int $id)
    {
        $pdo = $this->getPdo();
        try{
            $stmt = $pdo->prepare("SELECT * FROM `prendre` WHERE `id_livre` = :id ");
            $stmt->execute(['id'=> $id]);
            $obj = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
            if(!empty($obj))
            {
                return count($obj);
            }else{
                return 0;
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

    public function removeDuplicates($array) {
        $result = array_unique($array, SORT_REGULAR);
        return $result;
    }
        
    public function getLivreLike2($nom,$cat) {
        $db = \Config\Database::connect();
        $builder = $db->table('categorie');
        $builder->select('*');
        $builder->join('livre', 'categorie.id_categorie = livre.id_categorie');
        $builder->where('livre.id_categorie' , $cat);
        $builder->like('livre.nom', $nom);
        $query = $builder->get();
        return $query->getResult();
    }
}