<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateContactsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'fname' => ['type' => 'VARCHAR', 'constraint' => 50],
            'lname' => ['type' => 'VARCHAR', 'constraint' => 50],
            'email' => ['type' => 'VARCHAR', 'constraint' => 100],
            'message' => ['type' => 'TEXT'],
            'created_at' => ['type' => 'DATETIME', 'null' => true],
            'updated_at' => ['type' => 'DATETIME', 'null' => true] // Add this line
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('contacts');
    }

    public function down()
    {
        //
    }
}
