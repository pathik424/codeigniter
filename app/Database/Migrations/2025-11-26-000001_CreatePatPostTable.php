<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePatPostTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'post_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'user_id' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
            ],
            'title' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'textarea' => [
                'type' => 'TEXT',
            ],
            'image' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => true,
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

        $this->forge->addKey('post_id', true);
        $this->forge->addKey('user_id');
        $this->forge->createTable('pat_posttable');
    }

    public function down()
    {
        $this->forge->dropTable('pat_posttable');
    }
}

