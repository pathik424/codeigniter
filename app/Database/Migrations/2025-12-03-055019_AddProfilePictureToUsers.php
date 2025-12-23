<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddProfilePictureToUsers extends Migration
{
    public function up()
    {
        $field = [
            'profile_picture' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => true,
                'after'      => 'email', // Adjust this to the appropriate column after which you want to add the new column
            ],
        ];
                $this->forge->addColumn('users', $field);

    }

    public function down()
    {
        $this->forge->dropColumn('users', 'profile_picture');
    }
}
