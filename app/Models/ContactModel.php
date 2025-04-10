<?php

namespace App\Models;

use CodeIgniter\Model;

class ContactModel extends Model
{
    protected $table = 'contacts';
    protected $primaryKey = 'id';
    protected $allowedFields = ['fname', 'lname', 'email', 'message'];
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
}
