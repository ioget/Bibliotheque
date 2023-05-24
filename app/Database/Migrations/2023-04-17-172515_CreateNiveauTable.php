<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateNiveauTable extends Migration
{
    
    public function up()
    {
        $this->forge->addField([
            'id_niveau' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'libelle' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
           
           
        ]);
        $this->forge->addPrimaryKey('id_niveau');
        $this->forge->createTable('niveau');
       
    }

    public function down()
    {
        $this->forge->dropTable('niveau');
    }
}
