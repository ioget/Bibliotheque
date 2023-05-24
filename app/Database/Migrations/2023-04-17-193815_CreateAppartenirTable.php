<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateAppartenirTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_appartenir' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'id_livre' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],
            'id_categorie' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],

        ]);
        $this->forge->addPrimaryKey('id_appartenir');
        $this->forge->addForeignKey('id_livre', 'livre', 'id_livre','CASCADE','CASCADE');
        $this->forge->addForeignKey('id_categorie', 'categorie', 'id_categorie','CASCADE','CASCADE');
        $this->forge->createTable('appartenir');
    }

    public function down()
    {
        $this->forge->dropTable('appartenir');
    }
}
