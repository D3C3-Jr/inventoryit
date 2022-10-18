<?php

namespace App\Models;

use CodeIgniter\Model;

class computersModel extends Model
{
    protected $table = 'computer';
    protected $primaryKey = 'id';
    protected $allowedFields = ['asset_number', 'id_computer', 'jenis', 'nama_produk', 'serial_number', 'user'];
}
