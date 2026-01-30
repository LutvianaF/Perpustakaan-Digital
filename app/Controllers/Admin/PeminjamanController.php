<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\PeminjamanModel;
use App\Models\AnggotaModel;
use App\Models\BukuModel;

class PeminjamanController extends BaseController
{
    protected $peminjaman;

    public function __construct()
    {
        $this->peminjaman = new PeminjamanModel();
    }

    public function index()
    {
        $data['peminjaman'] = $this->peminjaman
            ->select('
            peminjaman.*,
            anggota.nama AS nama,
            buku.judul_buku
        ')
            ->join('anggota', 'anggota.id_anggota = peminjaman.id_anggota')
            ->join('buku', 'buku.id_buku = peminjaman.id_buku')
            ->orderBy('peminjaman.tanggal_pinjam', 'DESC')
            ->findAll();

        return view('admin/peminjaman/index', $data);
    }

    public function store()
    {
        $this->peminjaman->insert([
            'id_anggota'          => $this->request->getPost('id_anggota'),
            'id_buku'             => $this->request->getPost('id_buku'),
            'tanggal_pinjam'      => $this->request->getPost('tanggal_pinjam'),
            'tanggal_kembali'     => $this->request->getPost('tanggal_kembali'),
            'status_pengembalian' => 'dipinjam',
            'dikembalikan'
        ]);

        return redirect()->to('/admin/peminjaman')
            ->with('success', 'Peminjaman berhasil ditambahkan');
    }

    public function edit($id)
    {
        $data['peminjaman'] = $this->peminjaman
            ->select('
            peminjaman.id_peminjaman,
            peminjaman.tanggal_pinjam,
            peminjaman.tanggal_kembali,
            peminjaman.status_pengembalian,
            anggota.nama AS nama,
            buku.judul_buku
        ')
            ->join('anggota', 'anggota.id_anggota = peminjaman.id_anggota')
            ->join('buku', 'buku.id_buku = peminjaman.id_buku')
            ->where('peminjaman.id_peminjaman', $id)
            ->first();

        if (!$data['peminjaman']) {
            return redirect()->to('/admin/peminjaman')
                ->with('error', 'Data peminjaman tidak ditemukan');
        }

        return view('admin/peminjaman/edit', $data);
    }

    public function update($id)
    {
        $this->peminjaman->update($id, [
            'id_anggota'          => $this->request->getPost('id_anggota'),
            'id_buku'             => $this->request->getPost('id_buku'),
            'tanggal_pinjam'      => $this->request->getPost('tanggal_pinjam'),
            'tanggal_kembali'     => $this->request->getPost('tanggal_kembali'),
            'status_pengembalian' => $this->request->getPost('status_pengembalian')
        ]);

        return redirect()->to('/admin/peminjaman')
            ->with('success', 'Peminjaman berhasil diperbarui');
    }

    public function delete($id)
    {
        $this->peminjaman->delete($id);

        return redirect()->to('/admin/peminjaman')
            ->with('success', 'Peminjaman berhasil dihapus');
    }
}
