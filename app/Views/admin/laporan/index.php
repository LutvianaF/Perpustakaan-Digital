<?= $this->extend('admin/template/template') ?>
<?= $this->section('content') ?>

<?php
$tglPinjam  = $tanggal_pinjam ?? '';
$tglKembali = $tanggal_kembali ?? '';
?>

<div class="book-tabs">
    <div class="side-left">
        <h1>Laporan Peminjaman</h1>
    </div>
    <div class="side-right">
        <input type="text" id="searchInput" class="search-input" placeholder="Pencarian">
        <div class="search-icon">
            <i class="fas fa-search"></i>
        </div>
    </div>
</div>

<form method="post" action="<?= base_url('admin/laporan/filter') ?>" class="mb-2 form-lp">
    <div class="left-text">
        <h6 class="fw-bold">List Laporan</h6>
</div>
<div class="right-text">
        <div class="">
            <label>Tanggal Pinjam</label>
            <input type="date" name="tanggal_pinjam" value="<?= esc($tglPinjam) ?>" class="form-control">
        </div>
        <div class="">
            <label>Tanggal Kembali</label>
            <input type="date" name="tanggal_kembali" value="<?= esc($tglKembali) ?>" class="form-control">
        </div>
        <div class="">
            <a target="_blank" class="button-buku"
            href="<?= base_url('admin/laporan/cetak?tanggal_pinjam='.$tglPinjam.'&tanggal_kembali='.$tglKembali) ?>">
            Cetak
            </a>
        </div>
</div>
    </form>

    <table class="table table-bordered table-light">
        <thead class="">
            <tr>
                <th></th>
                <th>Peminjam</th>
                <th>Buku</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Kembali</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($laporan as $no => $row): ?>
            <tr>
                <td><input type="checkbox"></td>
                <td><?= $row['nama'] ?></td>
                <td><?= $row['judul_buku'] ?></td>
                <td><?= date('d F Y', strtotime($row['tanggal_pinjam'])) ?></td>
                <td><?= date('d F Y', strtotime($row['tanggal_kembali'])) ?></td>
                <td>
                    <span class="badge bg-<?= $row['status_pengembalian']=='Dipinjam'?'warning':'success' ?>">
                        <?= $row['status_pengembalian'] ?>
                    </span>
                </td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>


<?= $this->endSection() ?>