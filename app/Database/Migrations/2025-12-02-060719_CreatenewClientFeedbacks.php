<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatenewClientFeedbacks extends Migration
{
    public function up()
    {
                       $this->forge->addField([
            'feedback_id' => [
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
            'client_name' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'client_position' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'client_feedback' => [
                'type' => 'TEXT',
            ],
            'client_profile_image' => [
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

        $this->forge->addKey('feedback_id', true);
        $this->forge->addKey('user_id');
        $this->forge->createTable('pat_client_new_feedbacks');
    }

    public function down()
    {
        $this->forge->dropTable('pat_client_new_feedbacks');
    }
}
