<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateMahasiswaTable extends Migration
{
    // 
    public function up()
    {
        // addField ini untuk membuat tabel
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'npm' => [
                'type'       => 'VARCHAR',
                'constraint' => '10',
            ],
            'nama' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'alamat' => [
                'type' => 'TEXT',
            ],
            'created_at' => [
                'type'      => 'DATETIME',
                'null'      => true,
            ],
            'update_at' => [
                'type'      => 'DATETIME',
                'null'      => true,
            ],
        ]);
        $this->forge->addKey('id', true); // membuat primary key
        $this->forge->createTable('mahasiswa');
    }

    public function down()
    {
        $this->forge->dropTable('mahasiswa');
    }
}
