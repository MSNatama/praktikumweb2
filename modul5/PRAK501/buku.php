<?php
require('./model.php');
if (isset($_GET['id_buku'])) {
    DeleteBuku($_GET['id_buku']);
}
?>
<body>
    <a href="index.php"><button>Home</button></a>
    <a href="formBuku.php"><button>Tambah</button></a>
    </div>
    <table border="1">
        <thead>
            <tr>
                <th >judul buku </th>
                <th >penulis </th>
                <th >penerbit </th>
                <th >tahun terbit </th>
                <th >Aksi</th>
            </tr>
        </thead>
        <tbody>  
            <?php
                ShowBuku("buku")
            ?>
        </tbody>
    </table>
</body>