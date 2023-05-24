<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateFiliereTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_filiere' => [
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
        $this->forge->addPrimaryKey('id_filiere');
        $this->forge->createTable('filiere');

    
    }

    public function down()
    {
        $this->forge->dropTable('filiere');
    }
}
