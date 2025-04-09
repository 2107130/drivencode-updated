<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateBookingsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'fname' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'lname' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => '150',
            ],
            'tel' => [
                'type'       => 'VARCHAR',
                'constraint' => '15',
            ],
            'date' => [
                'type'       => 'DATE',
            ],
            'service_id' => [
                'type'       => 'INT',
                'unsigned'   => true,
            ],
            'selected_time' => [
                'type'       => 'TIME',
            ],
            'payment_method' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('bookings');
    }

    public function down()
    {
        $this->forge->dropTable('bookings');
    }
}
