<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class BukuSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'judul_buku'   => 'Laskar Pelangi',
                'penulis'      => 'Andrea Hirata',
                'penerbit'     => 'Bentang Pustaka',
                'tahun_terbit' => 2005
            ],
            [
                'judul_buku'   => 'Atomic Habits',
                'penulis'      => 'James Clear',
                'penerbit'     => 'Avery',
                'tahun_terbit' => 2021
            ],
            [
                'judul_buku'   => 'Becoming',
                'penulis'      => 'Michelle Obama',
                'penerbit'     => 'Crown',
                'tahun_terbit' => 2018
            ]
        ];
        $this->db->table('buku')->insertBatch($data);
    }
}
