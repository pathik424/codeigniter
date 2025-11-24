<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUsersTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => ['type' => 'INT', 'auto_increment' => true],
            'name'        => ['type' => 'VARCHAR', 'constraint' => 100],
            'username'    => ['type' => 'VARCHAR', 'constraint' => 100],
            'email'       => ['type' => 'VARCHAR', 'constraint' => 100],
            'password'    => ['type' => 'VARCHAR', 'constraint' => 255],
            'user_role'   => ['type' => 'INT', 'default' => 0],
            'created_at'  => ['type' => 'DATETIME', 'null' => true],
            'updated_at'  => ['type' => 'DATETIME', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addUniqueKey('username'); // optional: prevent duplicate usernames
        $this->forge->addUniqueKey('email');    // optional: prevent duplicate emails
        $this->forge->createTable('users');
    }

    public function down()
    {
        //
    }
}
