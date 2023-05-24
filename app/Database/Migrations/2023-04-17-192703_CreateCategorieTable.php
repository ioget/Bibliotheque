<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCategorieTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_categorie' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'libelle' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
          
           
        ]);
        $this->forge->addPrimaryKey('id_categorie');
        $this->forge->createTable('categorie');
       
    }

    public function down()
    {
        $this->forge->dropTable('categorie');
    }
}
