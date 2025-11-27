<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddImageToPatPostTable extends Migration
{
    public function up()
    {
        $this->forge->addColumn('pat_posttable', [
            'image' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => true,
                'after'      => 'textarea',
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('pat_posttable', 'image');
    }
}

