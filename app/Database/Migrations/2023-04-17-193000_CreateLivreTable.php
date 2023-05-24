<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateLivreTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_livre' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'nom' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],      
            'resume' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'date_publication' => [
                'type' => 'DATE',
            ],
            'nb_exemplaire' => [
                'type' => 'INT',
                'constraint' => 5,
            ],
            'langue' => [
                'type' => 'VARCHAR',
                'constraint' => 30,
            ],        
       
            'id_categorie' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],
           
        ]);
        $this->forge->addPrimaryKey('id_livre');
        $this->forge->createTable('livre');
       
    }

    public function down()
    {
        $this->forge->dropTable('livre');
    }
}
