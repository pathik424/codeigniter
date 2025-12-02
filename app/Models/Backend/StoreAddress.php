<?php

namespace App\Models\Backend;

use CodeIgniter\Model;

class StoreAddress extends Model
{
    protected $table            = 'my_address';
    protected $primaryKey       = 'id_form';

    protected $allowedFields    = [
        'address',
        'phone',
        'email',
        'website',
        'created_at',
        'updated_at',
    ];

    protected $useTimestamps    = true;
    protected $createdField     = 'created_at';
    protected $updatedField     = 'updated_at';
}

