<?php

namespace App\Models\Frontend;

use CodeIgniter\Model;

class ContactUsModel extends Model
{
    protected $table         = 'pat_pat_contact_us';
    protected $primaryKey    = 'id';
    protected $returnType    = 'array';
    protected $allowedFields = [
        'full_name',
        'email',
        'subject',
        'message',
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}


