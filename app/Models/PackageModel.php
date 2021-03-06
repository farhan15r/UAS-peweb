<?php

namespace App\Models;

use CodeIgniter\Model;

class PackageModel extends Model
{
    protected $table = 'packages';
    protected $allowedFields = [
        'title', 'description', 'price'
    ];
}
