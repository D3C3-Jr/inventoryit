<?php

namespace App\Models;

use CodeIgniter\Model;

class assetsModel extends Model
{
    protected $table = 'assets';
    protected $primaryKey = 'id';
    protected $allowedFields    = [
        'asset_number',
        'id_asset',
        'jenis',
        'serial_number',
        'nama_produk',
        'lokasi',
        'user',
        'ip_address'
    ];
}
