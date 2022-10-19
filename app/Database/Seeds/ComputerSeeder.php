<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ComputerSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'asset_number'  => 'C00001',
                'id_computer'   => 'GPI0001',
                'jenis'         => 'Laptop',
                'nama_produk'   => 'Dell Latitude 3420',
                'serial_number' => 'B7BVMG3',
                'user'          => 'MUHAMMAD HARIS',
            ],
            [
                'asset_number'  => 'C00002',
                'id_computer'   => 'GPI0002',
                'jenis'         => 'Laptop',
                'nama_produk'   => 'Dell Latitude 3420',
                'serial_number' => 'B8BVMG3',
                'user'          => 'AI FIRIA',
            ],
            [
                'asset_number'  => 'C00003',
                'id_computer'   => 'GPI0003',
                'jenis'         => 'Laptop',
                'nama_produk'   => 'Dell Latitude 3420',
                'serial_number' => '9GBVMG3',
                'user'          => 'JAMALUDDIN',
            ],


        ];

        // Using Query Builder
        $this->db->table('computer')->insertBatch($data);
    }
}
