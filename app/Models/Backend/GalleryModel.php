<?php

namespace App\Models\Backend;

use CodeIgniter\Model;

class GalleryModel extends Model
{
    protected $table            = 'pat_pat_gallery';
    protected $primaryKey       = 'gallery_id';

    protected $allowedFields    = [
        'image',
        'animal_type',
        'breed_name',
        'created_at',
        'updated_at',
    ];

    protected $useTimestamps    = true;
    protected $createdField     = 'created_at';
    protected $updatedField     = 'updated_at';
}

