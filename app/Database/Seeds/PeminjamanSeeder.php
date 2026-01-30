<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PeminjamanSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id_anggota' => 1,
                'id_buku' => 1,
                'tanggal_pinjam' => '2025-01-30',
                'tanggal_kembali' => '2025-02-06',
                'status_pengembalian' => 'dipinjam',
            ],
            [
                'id_anggota' => 2,
                'id_buku' => 2,
                'tanggal_pinjam' => '2025-01-29',
                'tanggal_kembali' => '2025-02-05',
                'status_pengembalian' => 'dikembalikan',
            ],
            [
                'id_anggota' => 3,
                'id_buku' => 3,
                'tanggal_pinjam' => '2025-01-29',
                'tanggal_kembali' => '2025-02-05',
                'status_pengembalian' => 'dipinjam',
            ],
        ];

        $this->db->table('peminjaman')->insertBatch($data);
    }
}
