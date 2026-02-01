<?= $this->extend('admin/template/template') ?>
<?= $this->section('content') ?>

<div class="hero-up fw-bold mb-4">
    <h1>Tambah Buku</h1>
</div>
<div class="caption-small">
    <p>Buku</p>
</div>
<form action="<?= base_url('admin/buku/store') ?>" method="post" class="form-main">
    <?= csrf_field() ?>

    <div class="form-group">
        <label>Nama Buku</label>
        <input type="text" name="judul_buku" class="form-control" required>
    </div>

    <div class="form-group">
        <label>Penulis</label>
        <input type="text" name="penulis" class="form-control" required>
    </div>

    <div class="form-group">
        <label>Penerbit</label>
        <input type="text" name="penerbit" class="form-control" required>
    </div>

    <div class="form-group">
        <label>Tahun Terbit</label>
        <input type="number" name="tahun_terbit" class="form-control" required>
    </div>
    
    <div class="form-group">
        <label>Kategori Buku</label>
        <input type="number" name="kategori" class="form-control" required>
    </div>

    <div class="btn-left">
        <button type="submit" class="button-buku">Simpan</button>
        <a href="<?= base_url('admin/buku') ?>" class="btn-back">Kembali</a>
    </div>
</form>

<?= $this->endSection() ?>