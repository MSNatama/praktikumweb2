<?php
require('./model.php');
if (isset($_GET['id_member'])) {
    DeleteMember($_GET['id_member']);
}
?>

<!DOCTYPE html>
<html lang="en">
    <body>
        <a href="index.php"><button>Home</button></a>
        <a href="formMember.php"><button>Tambah</button></a>
        <table border="1">
                <tr>
                    <th >nama member </th>
                    <th >nomor member </th>
                    <th >alamat </th>
                    <th >tanggal mendaftar </th>
                    <th >tanggal terakhir bayar</th>
                    <th >Aksi</th>
                </tr>
                <?php 
                    ShowMember("member") 
                ?>     
        </table>
    </body>
</html>