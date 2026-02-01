<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\PeminjamanModel;
use Dompdf\Dompdf;

class LaporanController extends BaseController
{
    protected $peminjaman;

    public function __construct()
    {
        $this->peminjaman = new PeminjamanModel();
    }

    public function index()
    {
        $data = [
            'laporan' => $this->peminjaman->getLaporan(),
            'tanggal_pinjam'  => $this->request->getGet('tanggal_pinjam'),
            'tanggal_kembali' => $this->request->getGet('tanggal_kembali'),
        ];
        return view('admin/laporan/index', $data);
    }

    public function filter()
    {
        $tglPinjam   = $this->request->getPost('tanggal_pinjam');
        $tglKembali  = $this->request->getPost('tanggal_kembali');

        return redirect()->to(
        base_url('laporan?tanggal_pinjam='.$tglPinjam.'&tanggal_kembali='.$tglKembali)
    );
    }

    public function cetak()
{
    $tglPinjam  = $this->request->getGet('tanggal_pinjam');
    $tglKembali = $this->request->getGet('tanggal_kembali');

    $data['laporan'] = $this->peminjaman->getLaporan($tglPinjam, $tglKembali);

    $html = view('admin/laporan/pdf', $data);

    $dompdf = new Dompdf();
    $dompdf->loadHtml($html);
    $dompdf->setPaper('A4', 'landscape');
    $dompdf->render();
    $dompdf->stream('laporan-peminjaman.pdf', ['Attachment' => false]);
}
}
