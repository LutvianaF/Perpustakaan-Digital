<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AnggotaSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama' => 'Ahmad Fauzan Arif',
                'alamat' => 'Jl. Merdeka No. 12',
                'no_hp' => '081234567801',
                'tanggal_bergabung' => '2024-12-01',
                'id_role' => 4,
            ],
            [
                'nama' => 'Bayu Ramadhan',
                'alamat' => 'Jl. Sudirman No. 45',
                'no_hp' => '081234567802',
                'tanggal_bergabung' => '2024-12-05',
                'id_role' => 4,
            ],
            [
                'nama' => 'Erik Setiadi',
                'alamat' => 'Jl. Diponegoro No. 8',
                'no_hp' => '081234567803',
                'tanggal_bergabung' => '2024-12-10',
                'id_role' => 4,
            ],
        ];

        $this->db->table('anggota')->insertBatch($data);
    }
}
