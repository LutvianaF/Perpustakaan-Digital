<?= $this->extend('admin/template/template') ?>
<?= $this->section('content') ?>

<div class="book-tabs">
    <div class="side-left">
        <h1>Peminjaman</h1>
    </div>
    <div class="side-right">
        <input type="text" id="searchInput" class="search-input" placeholder="Pencarian">
        <div class="search-icon">
            <i class="fas fa-search"></i>
        </div>
    </div>
</div>
<?php if (session()->getFlashdata('success')): ?>
    <div class="alert alert-success mt-3"><?= session()->getFlashdata('success') ?></div>
<?php endif; ?>

<table class="book-table mt-3">
    <thead>
        <tr>
            <th width="10"></th>
            <th>Peminjam</th>
            <th>Buku</th>
            <th>Tanggal Pinjam</th>
            <th>Tanggal Kembali</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($peminjaman as $i => $row): ?>
            <tr>
                <td><input type="checkbox"></td>
                <td><?= $row['nama'] ?></td>
                <td><?= $row['judul_buku'] ?></td>
                <td><?= $row['tanggal_pinjam'] ?></td>
                <td><?= $row['tanggal_kembali'] ?? '-' ?></td>
                <td><?= ucfirst($row['status_pengembalian']) ?></td>
                <td>
                    <a href="<?= base_url('admin/peminjaman/edit/' . $row['id_peminjaman']) ?>" class="btn-icon btn-edit">
                        <i class="fas fa-pen"></i>
                    </a>
                    <a href="#"
                        class="btn-icon btn-delete"
                        onclick="confirmDelete('<?= base_url('admin/peminjaman/delete/' . $row['id_peminjaman']) ?>')">
                        <i class="fas fa-trash"></i>
                    </a>
                    <div id="confirmModal" class="confirm-modal">
                        <div class="confirm-box">
                            <p>Yakin ingin menghapus data ini?</p>
                            <div class="confirm-actions">
                                <button class="btn-yes" id="btnYes">Ya</button>
                                <button class="btn-no" onclick="closeConfirm()">Tidak</button>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<?= $this->endSection() ?>