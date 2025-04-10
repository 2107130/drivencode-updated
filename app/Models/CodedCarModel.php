<?php

namespace App\Models;

use CodeIgniter\Model;

class CodedCarModel extends Model
{
    protected $table = 'coded_cars';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'coded_car_name',
        'coded_car_description',
        'coded_car_image',
        'coded_car_date'
    ];
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
}
