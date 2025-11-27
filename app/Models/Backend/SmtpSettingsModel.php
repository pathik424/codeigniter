<?php

namespace App\Models\Backend;

use CodeIgniter\Model;

class SmtpSettingsModel extends Model
{
    protected $table            = 'pat_pat_smtp_settings';
    protected $primaryKey       = 'id';

    protected $allowedFields    = [
        'smtp_host',
        'smtp_user',
        'smtp_pass',
        'smtp_port',
        'smtp_crypto',
        'from_email',
        'from_name',
        'admin_emails',
        'is_active',
        'created_at',
        'updated_at',
    ];

    protected $useTimestamps    = true;
    protected $createdField     = 'created_at';
    protected $updatedField     = 'updated_at';

    public function getActiveSettings()
    {
        return $this->where('is_active', 1)->first();
    }
}

