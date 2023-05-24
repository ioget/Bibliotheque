<?php

namespace App\Models;

use CodeIgniter\Model;
use \PDO;
class AuteurModel extends Model
{
    protected $table = 'auteur';

    protected $allowedFields = ['id_auteur',	'nom',	'prenom',	'pseudo','date_naissance'];

}