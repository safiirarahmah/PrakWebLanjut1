<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class Mahasiswa extends Seeder
{
    public function run()
    {
        $data_mahasiswa = [
            [
                'npm' => '2015051015',
                'nama'    => 'Safiira Rahmah Linisa',
                'alamat' => 'Lampung Tengah',
                'created_at' => Time::now(),
                // 'update_at' => Time::now()
            ],
            [
                'npm' => '2017051059',
                'nama'    => 'Andin Dwi Anggraini',
                'alamat' => 'Lampung Tengah',
                'created_at' => Time::now(),
                // 'update_at' => Time::now()
            ],
            [
                'npm' => '2017051038',
                'nama'    => 'Irma Azizah',
                'alamat' => 'Bukittinggi',
                'created_at' => Time::now(),
                // 'update_at' => Time::now()
            ]
        ];

        // Using Query Builder
        foreach ($data_mahasiswa as $data) {
            $this->db->table('mahasiswa')->insert($data);
        }
    }
}