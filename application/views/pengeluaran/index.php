<h2>Daftar Pengeluaran</h2>

<a href="<?= base_url('index.php/pengeluaran/tambah'); ?>">Tambah Pengeluaran</a>

<table border="1">
    <tr>
        <th>Nama Barang</th>
        <th>Jumlah</th>
        <th>Harga</th>
    </tr>
    <?php foreach ($pengeluaran as $p) : ?>
        <tr>
            <td><?= $p['nama_barang']; ?></td>
            <td><?= $p['jumlah']; ?></td>
            <td><?= $p['harga']; ?></td>
        </tr>
    <?php endforeach; ?>
</table>