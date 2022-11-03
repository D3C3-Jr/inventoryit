<?php

namespace App\Models;

use CodeIgniter\Model;

class stocksModel extends Model
{
    protected $table = 'stock';
    protected $primaryKey = 'id';
    protected $allowedFields = ['jenis', 'model', 'jenis', 'c', 'm', 'y', 'k', 'waste'];
}
