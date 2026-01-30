<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\BukuModel;
use App\Models\KategoriModel;
use App\Models\BukuKategoriModel;

class BukuController extends BaseController
{
    protected $buku;

    public function __construct()
    {
        $this->buku = new BukuModel();
    }

    public function index()
    {
        $data['buku'] = $this->buku->findAll();
        return view('admin/buku/index', $data);
    }

    public function create()
    {
        return view('admin/buku/create');
    }

    public function store()
    {
        $this->buku->insert([
            'judul_buku'   => $this->request->getPost('judul_buku'),
            'penulis'      => $this->request->getPost('penulis'),
            'penerbit'     => $this->request->getPost('penerbit'),
            'tahun_terbit' => $this->request->getPost('tahun_terbit'),
        ]);

        return redirect()->to('/admin/buku')->with('success', 'Buku berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $kategoriModel = new KategoriModel();
        $bukuKategoriModel = new BukuKategoriModel();

        $data['buku'] = $this->buku->find($id);
        $data['kategori'] = $kategoriModel->findAll();
        $data['bukuKategori'] = array_column($bukuKategoriModel->where('id_buku', $id)->findAll(), 'id_kategori');
        return view('admin/buku/edit', $data);
    }

    public function update($id)
    {
        $bukuKategoriModel = new BukuKategoriModel();

        $this->buku->update($id, [
            'judul_buku'   => $this->request->getPost('judul_buku'),
            'penulis'      => $this->request->getPost('penulis'),
            'penerbit'     => $this->request->getPost('penerbit'),
            'tahun_terbit' => $this->request->getPost('tahun_terbit'),
        ]);

        $bukuKategoriModel->where('id_buku', $id)->delete();
        $kategori = $this->request->getPost('kategori');
        if ($kategori) {
            foreach ($kategori as $id_kategori) {
                $bukuKategoriModel->insert([
                    'id_buku'     => $id,
                    'id_kategori' => $id_kategori,
                ]);
            }
        }

        return redirect()->to('/admin/buku')->with('success', 'Buku berhasil diperbarui.');
    }

    public function delete($id)
    {
        $this->buku->delete($id);
        return redirect()->to('/admin/buku')->with('success', 'Buku berhasil dihapus.');
    }
}