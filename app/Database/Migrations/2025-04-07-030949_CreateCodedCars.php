<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCodedCars extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'coded_car_name' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'coded_car_description' => [
                'type' => 'TEXT'
            ],
            'coded_car_image' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true
            ]
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('coded_cars');
    }

    public function down()
    {
        $this->forge->dropTable('coded_cars');
    }
}
