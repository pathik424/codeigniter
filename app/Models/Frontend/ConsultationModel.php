<?php

namespace App\Models\Frontend;

use CodeIgniter\Model;

class ConsultationModel extends Model
{
    protected $table            = 'pat_pat_free_consultation';
    protected $primaryKey       = 'id';

    protected $allowedFields    = [
        'service',
        'name',
        'vehicle_number',
        'appointment_date',
        'appointment_time',
        'message',
        'created_at',
        'updated_at',
    ];

    protected $useTimestamps    = true;
    protected $createdField     = 'created_at';
    protected $updatedField     = 'updated_at';
}

