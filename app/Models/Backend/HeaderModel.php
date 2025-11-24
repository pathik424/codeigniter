<?php

namespace App\Models\Backend;

use CodeIgniter\Model;

class HeaderModel extends Model
{
    protected $table            = 'pat_pat_header';
    protected $primaryKey       = 'id';

    protected $allowedFields    = [
        'header_title',
        'header_url',
        'is_active',
        'created_at',
        'updated_at',
    ];

    protected $useTimestamps    = true;
    protected $createdField     = 'created_at';
    protected $updatedField     = 'updated_at';
}