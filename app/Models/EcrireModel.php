<?php

namespace App\Models;

use CodeIgniter\Model;
use \PDO;
class EcrireModel extends Model
{
    protected $table = 'ecrire';

    protected $allowedFields = [	'id_ecrire'	,'id_livre'	,'id_auteur'];

}