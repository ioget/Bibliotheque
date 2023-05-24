<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateAuteurTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_auteur' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'nom' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'prenom' => [
                'type' => 'INT',
                'constraint' => 50,
            ],
            'pseudo' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'NOTNULL' => true,
                'default' => NULL
            ],
            'date_naissance' => [
                'type' => 'DATE',
            ],
            
        ]);

        $this->forge->addPrimaryKey('id_auteur');
        $this->forge->createTable('auteur');
    }

    public function down()
    {
        $this->forge->dropTable('auteur');
    }
}
