<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Stock extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'jenis' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'model' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'c' => [
                'type'       => 'VARCHAR',
                'constraint' => '3',
            ],
            'm' => [
                'type'       => 'VARCHAR',
                'constraint' => '3',
            ],
            'y' => [
                'type'       => 'VARCHAR',
                'constraint' => '3',
            ],
            'k' => [
                'type'       => 'VARCHAR',
                'constraint' => '3',
            ],
            'waste' => [
                'type'       => 'VARCHAR',
                'constraint' => '3',
            ],
            'c' => [
                'type'       => 'VARCHAR',
                'constraint' => '3',
            ],
            'tanggal' => [
                'type'       => 'DATE',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('stock');
    }

    public function down()
    {
        //
    }
}
