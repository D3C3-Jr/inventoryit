<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Assets extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => '255',
                'auto_increment' => true,
            ],
            'asset_number' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'id_asset' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'jenis' => [
                'type' => 'VARCHAR',
                'constraint' => '100'
            ],
            'serial_number' => [
                'type' => 'VARCHAR',
                'constraint' => '100'
            ],
            'nama_produk' => [
                'type' => 'VARCHAR',
                'constraint' => '100'
            ],
            'lokasi' => [
                'type' => 'VARCHAR',
                'constraint' => '100'
            ],
            'user' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true
            ],
            'ip_address' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true
            ],
            'mac_address' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true
            ],
            'host_name' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('assets');
    }

    public function down()
    {
        //
    }
}
