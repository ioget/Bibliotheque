<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateDepartementTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_departement' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'libelle' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ]
         
        
           
        ]);
        $this->forge->addPrimaryKey('id_departement');
        $this->forge->createTable('departement');
 
       
    }

    public function down()
    {
        $this->forge->dropTable('departement');
    }
}
