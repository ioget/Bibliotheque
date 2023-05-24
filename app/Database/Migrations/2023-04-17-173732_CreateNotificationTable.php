<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateNotificationTable extends Migration
{
    public function up()
    {
        
        $this->forge->addField([
            'id_notification' => [
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
            'message' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
     
            'create_at' => [
                'type' => 'DATETIME',
            ],

            'update_at' => [
                'type' => 'DATETIME',
            ]
        ]);
        $this->forge->addPrimaryKey('id_notification');
        $this->forge->addForeignKey('id_users', 'users', 'id_users','CASCADE','CASCADE');
        $this->forge->createTable('notification');
    }

    public function down()
    {
        $this->forge->dropTable('notification');
    }
}
