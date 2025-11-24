<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PatProducts extends Migration
{
    public function up()
    {
        // Create pat_products table
        $this->forge->addField([
            'product_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'product_name' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'product_description' => [
                'type' => 'TEXT',
            ],
            'product_image' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'product_price' => [
                'type' => 'DECIMAL',
                'constraint' => '10,2',
            ],
            'stock_quantity' => [
                'type' => 'INT',
                'default' => 0,
            ],
            'is_active' => [
                'type' => 'TINYINT',
                'constraint' => '1',
                'default' => 1,
            ],
            'category' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'sku' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'created_at' => [
                'type' => 'TIMESTAMP',
                'null' => true, // Allow null if no value is provided
            ],
        ]);
        $this->forge->addKey('product_id', true);
        $this->forge->createTable('pat_products');
    }

    public function down()
    {
        $this->forge->dropTable('pat_products');

    }
}
