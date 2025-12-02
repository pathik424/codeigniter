<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateContactUsAddress extends Migration
{
    public function up()
    {
                $this->forge->addField([
                    'id_form'          => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'address'        => ['type' => 'VARCHAR', 'constraint' => 100],
            'phone'    => ['type' => 'VARCHAR', 'constraint' => 100],
            'email'       => ['type' => 'VARCHAR', 'constraint' => 100],
            'website'    => ['type' => 'VARCHAR', 'constraint' => 255],
            'created_at'  => ['type' => 'DATETIME', 'null' => true],
            'updated_at'  => ['type' => 'DATETIME', 'null' => true],
        ]);
                // Ensure the auto-increment field is defined as the primary key
                $this->forge->addKey('id_form', true);

               // Use the base table name here; the DB prefix configured in
               // the database config will be applied automatically.
               $this->forge->createTable('contact_us_address');
    }

    public function down()
    {
                $this->forge->dropTable('contact_us_address');

    }
}
