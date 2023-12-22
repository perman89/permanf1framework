<h2>Form Tambah Pengeluaran</h2>

<form action="<?= base_url('index.php/pengeluaran/simpan'); ?>" method="post">
    <label>Nama Barang:</label>
    <input type="text" name="nama_barang" required><br>

    <label>Jumlah:</label>
    <input type="number" name="jumlah" required><br>

    <label>Harga:</label>
    <input type="number" name="harga" required><br>

    <button type="submit">Simpan</button>
</form>