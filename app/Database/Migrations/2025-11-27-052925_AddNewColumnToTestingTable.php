<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddNewColumnToTestingTable extends Migration
{
    public function up()
    {
        $fields = [
            'status' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
                'null'       => true,
                'after'      => 'name' // optional: position the new column
            ],
        ];

        $this->forge->addColumn('testing', $fields);
    }

    public function down()
    {
        $this->forge->dropColumn('testing', 'status');
    }
}
