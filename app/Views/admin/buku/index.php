<?= $this->extend('admin/template/template') ?>
<?= $this->section('content') ?>

<section class="section-book">
    <div class="book-tabs">
        <div class="side-left">
            <h1>Buku</h1>
            <a href="<?= base_url('admin/buku/create') ?>" class="button-buku">Tambah</a>
        </div>
        <div class="side-right">
            <input type="text" id="searchInput" class="search-input" placeholder="Pencarian">
            <div class="search-icon">
                <i class="fas fa-search"></i>
            </div>
        </div>
    </div>

    <h6 class="fw-bold mb-2 small">List Buku</h6>

    <?php if (session()->getFlashdata('success')): ?>
        <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
    <?php elseif (session()->getFlashdata('error')): ?>
        <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
    <?php endif; ?>
    <div class="table-responsive">
        <table class="book-table">
            <thead>
                <tr>
                    <th></th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Penerbit</th>
                    <th>Tahun Terbit</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($buku)): ?>
                    <?php foreach ($buku as $row): ?>
                        <tr>
                            <td><input type="checkbox"></td>
                            <td><strong><?= esc($row['judul_buku']) ?></strong></td>
                            <td><?= esc($row['penulis']) ?></td>
                            <td><?= esc($row['penerbit']) ?></td>
                            <td><?= esc($row['tahun_terbit']) ?></td>
                            <td>
                                <a href="<?= base_url('admin/buku/edit/' . $row['id_buku']) ?>" class="btn-icon btn-edit">
                                    <i class="fas fa-pen"></i>
                                </a>
                                <a href="#"
                                    class="btn-icon btn-delete"
                                    onclick="confirmDelete('<?= base_url('admin/buku/delete/' . $row['id_buku']) ?>')">
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
                <?php else: ?>
                    <tr>
                        <td colspan="6" class="text-center">Tidak ada data buku.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
    <div class="pagination">
        <span class="page-info">Menampilkan 1-3 dari 10 data</span>
        <div class="page-controls">
            <button class="page-btn" disabled>&lt;</button>
            <button class="page-btn active">1</button>
            <button class="page-btn">2</button>
            <button class="page-btn">3</button>
            <button class="page-btn">&gt;</button>
        </div>
    </div>
</section>

<?= $this->endSection() ?>