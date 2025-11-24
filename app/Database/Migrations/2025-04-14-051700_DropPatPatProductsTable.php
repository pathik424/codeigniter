<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DropPatPatProductsTable extends Migration
{
    public function up()
    {
        $this->forge->dropTable('pat_pat_products');

    }

    public function down()
    {
        //
    }
}
