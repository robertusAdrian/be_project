<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Users extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id_users';
    protected $allowedFields = [
        'name',
        'age', 'city'
    ];
    protected $useAutoIncrement = true;
}
