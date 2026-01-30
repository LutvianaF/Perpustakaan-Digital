<?= $this->extend('admin/template/template') ?>
<?= $this->section('content') ?>

<div class="book-tabs">
    <div class="side-left">
        <h1>Kategori Buku</h1>
        <a href="<?= base_url('admin/kategori/create') ?>" class="button-buku">Tambah</a>
    </div>
    <div class="side-right">
        <input type="text" id="searchInput" class="search-input" placeholder="Pencarian">
        <div class="search-icon">
            <i class="fas fa-search"></i>
        </div>
    </div>
</div>
<?php if (session()->getFlashdata('success')): ?>
    <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
<?php endif; ?>

<h6 class="fw-bold mb-2 small">List Kategori</h6>
<table class="book-table">
    <thead>
        <tr>
            <th width="10"></th>
            <th>Nama Kategori</th>
            <th width="120">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($kategori as $i => $row): ?>
            <tr>
                <td><input type="checkbox"></td>
                <td><?= esc($row['nama_kategori']) ?></td>
                <td>
                    <a href="<?= base_url('admin/kategori/edit/' . $row['id_kategori']) ?>" class="btn-icon btn-edit">
                        <i class="fas fa-pen"></i>
                    </a>
                    <a href="#"
                        class="btn-icon btn-delete"
                        onclick="confirmDelete('<?= base_url('admin/kategori/delete/' . $row['id_kategori']) ?>')">
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