<?php

namespace App\Models\Backend;

use CodeIgniter\Model;

class PackageModel extends Model
{
    protected $table            = 'pat_pat_packages';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = ['package_name', 'package_image', 'package_price', 'package_services'];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'package_name'  => 'required|min_length[3]|max_length[255]',
        'package_price' => 'required|numeric|greater_than[0]',
    ];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = ['castServices'];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    /**
     * Cast package_services from JSON to array after fetching
     */
    protected function castServices(array $data)
    {
        if (isset($data['data']['package_services'])) {
            $services = json_decode($data['data']['package_services'], true);
            $data['data']['package_services'] = is_array($services) ? $services : [];
        }
        return $data;
    }
}
