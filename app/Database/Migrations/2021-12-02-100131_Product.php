<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Product extends Migration
{
    public function up()
    {
        $this->forge->addField([

            'id' => ['type' => 'BIGINT', 'unsigned' => true, 'auto_increment'=> true],
            'libelle' => ['type' => 'VARCHAR', 'constraint' => '200'],
            'price' => ['type' => 'DOUBLE', 'default' => '0'],
            'image' => ['type' => 'TEXT', 'null' => false],
            'description' => ['type' => 'LONGTEXT', 'null' => false],
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp',
            'deleted_at' => ['type' => 'datetime' , 'null' => true]

        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('products');
    }

    public function down()
    {
        $this->forge->dropTable('products');
    }
}
