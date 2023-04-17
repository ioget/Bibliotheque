<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUsersTable extends Migration
{

    
    public function up()
    {
        
        $this->forge->addField([
            'id_users' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'nom' => [
                'type' => 'VARCHAR',
                'constraint' => 100
            ],
            'prenom' => [
                'type' => 'VARCHAR',
                'constraint' => 100
            ],
            'matricule' => [
                'type' => 'VARCHAR',
                'constraint' => 8,
                'unique' => true
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'date_naissance' => [
                'type' => 'DATE',
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'unique' => true
            ],
            'id_niveau' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],
            'sexe' => [
                'type' => 'ENUM',
                'constraint' => ['F', 'M']
            ],
            'type' => [
                'type' => 'ENUM',
                'constraint' => ['Enseignant', 'Etudiant']
            ]
        ]);
        $this->forge->addPrimaryKey('id_users');
        $this->forge->addForeignKey('id_niveau', 'niveau', 'id_niveau','CASCADE','CASCADE');
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
