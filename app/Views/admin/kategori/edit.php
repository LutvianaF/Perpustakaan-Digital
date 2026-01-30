<?= $this->extend('admin/template/template') ?>
<?= $this->section('content') ?>

<div class="hero-up fw-bold">
    <h1>Edit Kategori Buku</h1>
</div>
<div class="caption-small">
    <p>Kategori Buku</p>
</div>

<form action="<?= base_url('admin/kategori/update/' . $kategori['id_kategori']) ?>" method="post">
    <?= csrf_field() ?>

    <div class="form-group">
        <label>Nama Kategori</label>
        <input type="text"
            name="nama_kategori"
            class="form-control"
            value="<?= esc($kategori['nama_kategori']) ?>"
            required>
    </div>

    <div class="btn-left">
        <button type="submit" class="button-buku">Simpan</button>
        <a href="<?= base_url('admin/kategori') ?>" class="btn-back">Kembali</a>
    </div>
</form>

<?= $this->endSection() ?>