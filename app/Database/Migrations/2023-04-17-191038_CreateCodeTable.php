<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCodeTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_code' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'id_users' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true
            ],
            'code' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ]
        ]);

        $this->forge->addPrimaryKey('id_code');
        $this->forge->addForeignKey('id_users', 'users', 'id_users','CASCADE','CASCADE');
        $this->forge->createTable('code');
    }

    public function down()
    {
        $this->forge->dropTable('code');
    }
}
