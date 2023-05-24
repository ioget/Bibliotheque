<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePrendreTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_prendre' => [
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
            'id_users' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],
            'id_admin' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],
            'date_return' => [
                'type' => 'DATETIME',
            ],
            'date_taken' => [
                'type' => 'DATETIME',
            ],
            'date_expected_return' => [
                'type' => 'DATETIME',
            ],


        ]);
        $this->forge->addPrimaryKey('id_prendre');
        $this->forge->addForeignKey('id_admin', 'admin', 'id_admin','CASCADE','CASCADE');
        $this->forge->addForeignKey('id_users', 'users', 'id_users','CASCADE','CASCADE');
        $this->forge->addForeignKey('id_livre', 'livre', 'id_livre','CASCADE','CASCADE');
        $this->forge->createTable('prendre');
    }

    public function down()
    {
        $this->forge->dropTable('prendre');
    }
}
