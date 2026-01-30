<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class RoleSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama_role' => 'admin',
            ],
            [
                'nama_role' => 'petugas',
            ],
            [
                'nama_role' => 'peminjam',
            ]
        ];

        $this->db->table('role')->insertBatch($data);
    }
}
