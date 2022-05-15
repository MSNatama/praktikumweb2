<?php
require('./model.php');
if (isset($_GET['id_peminjaman'])) {
    DeletePinjam($_GET['id_peminjaman']);
}
?>

<!DOCTYPE html>
<html lang="en">
<body>
    <a href="index.php"><button>Home</button></a>
    <a href="formPeminjaman.php"><button>Tambah Data</button></a>
    <table border="1">
        <tr>
            <th>Tanggal Pinjam</th>
            <th>Tanggal Kembali</th>
            <th>Aksi</th>
        </tr>
        <?php
            ShowPeminjaman("peminjaman") 
        ?>
    </table>
</body>
</html>