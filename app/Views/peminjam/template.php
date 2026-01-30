<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kasaga Perpustakaan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
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
                    <a href="dashboard" class="active">📊 Dashboard</a>

                    <h5>Master</h5>
                    <a href="#">📘 Buku</a>
                    <a href="#">📂 Kategori Buku</a>
                    <a href="#">🔄 Peminjaman</a>
                    <a href="#">📑 Laporan</a>
                </nav>
            </div>

            <div class="logout">
                <a href="#" class="menu-link">🚪 Keluar</a>
            </div>
        </aside>
        <div class="main">
            <header class="header">
                <div class="left">
                    <span class="burger">☰</span>
                    <span>30 Januari 2025</span>
                </div>
                <div>Hi, Fauzan</div>
            </header>
            <div class="content">
                <?= $this->renderSection('content') ?>
            </div>
        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>