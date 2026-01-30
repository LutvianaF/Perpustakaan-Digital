<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\AnggotaModel;
use App\Models\BukuModel;
use App\Models\PeminjamanModel;

class DashboardController extends BaseController
{
    public function index()
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/login');
        }

        if (session()->get('role') !== '2') {
            return redirect()->to('/forbidden');
        }

        $anggotaModel = new AnggotaModel();
        $bukuModel = new BukuModel();
        $peminjamanModel = new PeminjamanModel();

        $data = [
            'totalAnggota' => $anggotaModel->countAllResults(),
            'totalBuku' => $bukuModel->countAllResults(),
            'totalDipinjam' => $peminjamanModel->where('status_pengembalian', 'dipinjam')->countAllResults(),
            'totalDikembalikan' => $peminjamanModel->where('status_pengembalian', 'dikembalikan')->countAllResults(),
        ];

        return view('admin/dashboard/index', $data);
    }
}
