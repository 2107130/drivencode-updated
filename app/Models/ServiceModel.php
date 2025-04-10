<?php

namespace App\Models;

use CodeIgniter\Model;

class ServiceModel extends Model
{
    protected $table = 'services';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'service_name',
        'service_cost',
        'service_start_time',
        'service_end_time',
        'service_image',
        'service_description',
        'duration',
        'service_availability'
    ];
}
