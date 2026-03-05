<?php

namespace App\Models;

use CodeIgniter\Model;

class DoctorProfileModel extends Model
{
    protected $table            = 'doctor_profile';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = false;
    protected $returnType       = 'array';
    protected $allowedFields    = [
        'full_name', 'crm_rqe', 'short_bio', 'full_bio', 'profile_image_path'
    ];

    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $updatedField  = 'updated_at';
}
