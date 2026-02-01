<?php

namespace App\Models;

use CodeIgniter\Model;

class PeminjamanModel extends Model
{
    protected $table            = 'peminjaman';
    protected $primaryKey       = 'id_peminjaman';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_anggota', 'id_buku', 'tanggal_pinjam', 'tanggal_kembali', 'status_pengembalian'];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function getLaporan($tglPinjam = null, $tglKembali = null)
    {
        $builder = $this->db->table('peminjaman');
        $builder->select('
            peminjaman.*,
            anggota.nama AS nama,
            buku.judul_buku AS judul_buku
        ');
        $builder->join('anggota', 'anggota.id_anggota = peminjaman.id_anggota');
        $builder->join('buku', 'buku.id_buku = peminjaman.id_buku');

        if ($tglPinjam && $tglKembali) {
            $builder->where('tanggal_pinjam >=', $tglPinjam);
            $builder->where('tanggal_kembali <=', $tglKembali);
        }

        return $builder->get()->getResultArray();
    }
}
