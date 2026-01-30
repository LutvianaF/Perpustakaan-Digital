<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class KategoriSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama_kategori' => 'Pengembangan Diri'
            ],
            [
                'nama_kategori' => 'Produktivitas'
            ],
            [
                'nama_kategori' => 'Psikologi'
            ],
            [
                'nama_kategori' => 'Perilaku'
            ]
        ];
        $this->db->table('kategori_buku')->insertBatch($data);
    }
}
