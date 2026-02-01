<h3 style="text-align:center">Laporan Peminjaman Buku</h3>

<table border="1" width="100%" cellpadding="6" cellspacing="0">
    <thead>
        <tr>
            <th>No</th>
            <th>Peminjam</th>
            <th>Buku</th>
            <th>Tgl Pinjam</th>
            <th>Tgl Kembali</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($laporan as $i => $row): ?>
        <tr>
            <td><?= $i+1 ?></td>
            <td><?= $row['nama'] ?></td>
            <td><?= $row['judul_buku'] ?></td>
            <td><?= $row['tanggal_pinjam'] ?></td>
            <td><?= $row['tanggal_kembali'] ?></td>
            <td><?= $row['status_pengembalian'] ?></td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>
