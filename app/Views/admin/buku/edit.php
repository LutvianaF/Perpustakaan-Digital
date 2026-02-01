<?= $this->extend('admin/template/template') ?>
<?= $this->section('content') ?>

<div class="hero-up fw-bold">
    <h1>Edit Buku</h1>
</div>
<div class="caption-small">
    <p>Buku</p>
</div>

<form action="<?= base_url('admin/buku/update/' . $buku['id_buku']) ?>" method="post" class="form-main">
    <?= csrf_field() ?>

    <div class="form-group">
        <label>Nama Buku</label>
        <input type="text" name="judul_buku" class="form-control"
            value="<?= esc($buku['judul_buku']) ?>" required>
    </div>

    <div class="form-group">
        <label>Penulis</label>
        <input type="text" name="penulis" class="form-control"
            value="<?= esc($buku['penulis']) ?>" required>
    </div>

    <div class="form-group">
        <label>Penerbit</label>
        <input type="text" name="penerbit" class="form-control"
            value="<?= esc($buku['penerbit']) ?>" required>
    </div>

    <div class="form-group">
        <label>Tahun Terbit</label>
        <input type="number" name="tahun_terbit" class="form-control"
            value="<?= esc($buku['tahun_terbit']) ?>" required>
    </div>

    <div class="form-group">
        <label>Kategori Buku</label>
        <div class="kategori-list">
            <?php if (!empty($kategori)): ?>
                <?php foreach ($kategori as $k): ?>
                    <label class="kategori-item">
                        <input type="checkbox"
                            name="kategori[]"
                            value="<?= $k['id_kategori'] ?>"
                            <?= in_array($k['id_kategori'], $bukuKategori, true) ? 'checked' : '' ?>>
                        <?= esc($k['nama_kategori']) ?>
                    </label>
                <?php endforeach ?>
            <?php else: ?>
                <p class="text-muted">Belum ada kategori.</p>
            <?php endif; ?>
        </div>
    </div>

    <div class="btn-left">
        <button type="submit" class="button-buku">Simpan</button>
        <a href="<?= base_url('admin/buku') ?>" class="btn-back">Kembali</a>
    </div>
</form>

<?= $this->endSection() ?>