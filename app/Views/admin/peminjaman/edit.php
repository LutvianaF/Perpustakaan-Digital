<?= $this->extend('admin/template/template') ?>
<?= $this->section('content') ?>

<div class="hero-up fw-bold">
    <h1>Edit Peminjaman</h1>
</div>
<div class="caption-small">
    <p>Peminjaman</p>
</div>

<form action="<?= base_url('admin/peminjaman/update/' . $peminjaman['id_peminjaman']) ?>" method="post" class="form-main">
    <?= csrf_field() ?>

    <label>Peminjam</label>
    <input type="text" name="nama" class="form-control mb-2"
        value="<?= $peminjaman['nama'] ?>">

    <label>Buku</label>
    <input type="text" name="judul_buku" class="form-control mb-2"
        value="<?= $peminjaman['judul_buku'] ?>">

    <label>Tanggal Pinjam</label>
    <input type="date" name="tanggal_pinjam" class="form-control mb-2"
        value="<?= $peminjaman['tanggal_pinjam'] ?>">

    <label>Tanggal Kembali</label>
    <input type="date" name="tanggal_kembali" class="form-control mb-2"
        value="<?= $peminjaman['tanggal_kembali'] ?>">

    <label>Status Pengembalian</label>
    <select name="status_pengembalian" class="form-control mb-2">
        <option value="dipinjam" <?= $peminjaman['status_pengembalian'] == 'dipinjam' ? 'selected' : '' ?>>Dipinjam</option>
        <option value="dikembalikan" <?= $peminjaman['status_pengembalian'] == 'dikembalikan' ? 'selected' : '' ?>>Dikembalikan</option>
    </select>

    <div class="btn-left">
        <button type="submit" class="button-buku">Simpan</button>
        <a href="<?= base_url('admin/peminjaman') ?>" class="btn-back">Kembali</a>
    </div>
</form>

<?= $this->endSection() ?>