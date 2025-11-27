<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateSmtpSettingsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'smtp_host' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'smtp_user' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'smtp_pass' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'smtp_port' => [
                'type'       => 'INT',
                'constraint' => 11,
                'default'    => 587,
            ],
            'smtp_crypto' => [
                'type'       => 'VARCHAR',
                'constraint' => 10,
                'default'    => 'tls',
            ],
            'from_email' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'from_name' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'admin_emails' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'is_active' => [
                'type'       => 'TINYINT',
                'constraint' => 1,
                'default'    => 1,
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
        $this->forge->createTable('pat_smtp_settings');
    }

    public function down()
    {
        $this->forge->dropTable('pat_smtp_settings');
    }
}

