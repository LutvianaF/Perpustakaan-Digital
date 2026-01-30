<?= $this->extend('admin/template/template') ?>
<?= $this->section('content') ?>

<div class="content">
    <div class="title">Dashboard</div>

    <div class="cards">
        <div class="card">
            <div class="icon"><i class="bi bi-book"></i></div>
            <div class="icon-text">
                <small>Anggota</small>
                <h2><?= esc($totalAnggota ?? 0) ?></h2>
            </div>
        </div>

        <div class="card">
            <div class="icon"><i class="bi bi-book"></i></div>
            <div>
                <small>Buku</small>
                <h2><?= esc($totalBuku ?? 0) ?></h2>
            </div>
        </div>

        <div class="card">
            <div class="icon"><i class="bi bi-clipboard-plus"></i></div>
            <div>
                <small>Dipinjam</small>
                <h2><?= esc($totalDipinjam ?? 0) ?></h2>
            </div>
        </div>

        <div class="card">
            <div class="icon"><i class="bi bi-clipboard-check"></i></div>
            <div>
                <small>Dikembalikan</small>
                <h2><?= esc($totalDikembalikan ?? 0) ?></h2>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>