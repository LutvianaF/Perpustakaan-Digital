<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kasaga Perpustakaan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('../assets/css/style.css') ?>">
</head>

<body>
    <div class="app">
        <aside class="sidebar">
            <div>
                <div class="profile">
                    <img src="https://i.pravatar.cc/150?img=3" alt="User">
                    <div>
                        <strong>Fauzan</strong><br>
                        <small>Administrator</small>
                    </div>
                </div>

                <nav class="menu">
                    <h5>Dashboard</h5>
                    <a href="<?= base_url('admin/dashboard') ?>">
                        <i class="bi bi-grid-1x2-fill"></i>Dashboard
                    </a>

                    <h5>Master</h5>
                    <a href="<?= base_url('admin/buku') ?>">
                        <i class="bi bi-book"></i>Buku
                    </a>
                    <a href="<?= base_url('admin/kategori') ?>">
                        <i class="bi bi-tag"></i>Kategori Buku
                    </a>
                    <a href="<?= base_url('admin/peminjaman') ?>">
                        <i class="bi bi-clipboard-plus"></i>Peminjaman
                    </a>
                    <a href="<?= base_url('admin/laporan') ?>">
                        <i class="bi bi-clipboard2-data"></i>Laporan
                    </a>
                </nav>
            </div>

            <div class="logout">
                <a href="<?= base_url('/login') ?>" class="menu-link"><i class="bi bi-box-arrow-left"></i>Keluar</a>
            </div>
        </aside>
        <div class="main">
            <header class="header">
                <div class="left">
                    <span class="burger">☰</span>
                    <span>30 Januari 2025</span>
                </div>
                <div>Hi, Admin</div>
            </header>
            <div class="content">
                <?= $this->renderSection('content') ?>
            </div>
        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="<?= base_url('../assets/js/script.js') ?>"></script>
</body>

</html>