<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePatHeaderTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'header_title' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'header_url' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'is_active' => [
                'type' => 'TINYINT',
                'constraint' => 1,
                'default' => 1,
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

        $this->forge->addKey('id', true);
        $this->forge->createTable('pat_header');
    }

    public function down()
    {
        $this->forge->dropTable('pat_header');
    }
}