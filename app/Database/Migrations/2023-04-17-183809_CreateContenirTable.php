<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateContenirTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_contenir' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'id_niveau' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true
            ],
            'id_filiere' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true
            ]
        ]);

        $this->forge->addPrimaryKey('id_contenir');
        $this->forge->addForeignKey('id_niveau', 'niveau', 'id_niveau','CASCADE','CASCADE');
        $this->forge->addForeignKey('id_filiere', 'filiere', 'id_filiere','CASCADE','CASCADE');
        $this->forge->createTable('contenir');
    }

    public function down()
    {
        $this->forge->dropTable('contenir');
    }
}
