<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateEcrireTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_ecrire' => [
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
            'id_auteur' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],

        ]);
        $this->forge->addPrimaryKey('id_ecrire');
        $this->forge->addForeignKey('id_auteur', 'auteur', 'id_auteur','CASCADE','CASCADE');
        $this->forge->addForeignKey('id_livre', 'livre', 'id_livre','CASCADE','CASCADE');
        $this->forge->createTable('ecrire');
    }

    public function down()
    {
        $this->forge->dropTable('ecrire');
    }
}
