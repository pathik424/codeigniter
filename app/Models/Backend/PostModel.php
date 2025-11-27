<?php

namespace App\Models\Backend;

use CodeIgniter\Model;

class PostModel extends Model
{
    protected $table            = 'pat_pat_posttable';
    protected $primaryKey       = 'post_id';

    protected $allowedFields    = [
        'user_id',
        'title',
        'textarea',
        'image',
        'created_at',
        'updated_at',
    ];

    protected $useTimestamps    = true;
    protected $createdField     = 'created_at';
    protected $updatedField     = 'updated_at';
}

