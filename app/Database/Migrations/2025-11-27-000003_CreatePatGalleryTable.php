<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePatGalleryTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'gallery_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'image' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'animal_type' => [
                'type'       => 'VARCHAR',
                'constraint' => 50,
            ],
            'breed_name' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
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

        $this->forge->addKey('gallery_id', true);
        $this->forge->createTable('pat_gallery');
    }

    public function down()
    {
        $this->forge->dropTable('pat_gallery');
    }
}

