<?php

namespace App\Models\Backend;

use CodeIgniter\Model;

class ClientFeedbackModel extends Model
{
    protected $table            = 'pat_pat_client_new_feedbacks';
    protected $primaryKey       = 'feedback_id';

    protected $allowedFields    = [
        'user_id',
        'client_name',
        'client_position',
        'client_feedback',
        'client_profile_image',
        'created_at',
        'updated_at',
    ];

    protected $useTimestamps    = true;
    protected $createdField     = 'created_at';
    protected $updatedField     = 'updated_at';
}