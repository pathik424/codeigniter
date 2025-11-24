<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateDogFoodProductTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'                => ['type' => 'INT', 'auto_increment' => true],
            'user_id'           => ['type' => 'INT'],
            'product_name'      => ['type' => 'VARCHAR', 'constraint' => 255],
            'product_price'     => ['type' => 'DECIMAL', 'constraint' => '10,2'],
            'product_image'     => ['type' => 'VARCHAR', 'constraint' => 255],
            'product_description'=> ['type' => 'TEXT'],
            'product_is_active' => ['type' => 'TINYINT', 'default' => 1],
            'product_stock'     => ['type' => 'INT', 'default' => 0],
            'product_slug'      => ['type' => 'VARCHAR', 'constraint' => 255],
            'created_at'        => ['type' => 'DATETIME'],
            'updated_at'        => ['type' => 'DATETIME'],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('dog_food_product');

    }

    public function down()
    {
        $this->forge->dropTable('dog_food_product');
    }
}
