<?php
    require("koneksi.php");
    
    //Function Member
    function ShowMember() {
        $stmt = koneksi()->prepare("SELECT * FROM member");
        $stmt->execute();
        $result = $stmt->fetchAll();

        if (!empty($result)) {
            foreach ($result as $row) {
                echo "<tr>";
                echo "<td>" . $row['nama_member'] . "</td>";
                echo "<td>" . $row['nomor_member'] . "</td>";
                echo "<td>" . $row['alamat'] . "</td>";
                echo "<td>" . $row["tgl_mendaftar"] . "</td>";
                echo "<td>" . $row["tgl_terakhir_bayar"] . "</td>";
                echo "<td>";
                echo "<a href='formMember.php?id_member=" . $row['id_member'] . "'>edit</a>";
                echo " | ";
                echo "<a href='member.php?function=1&id_member=" . $row['id_member'] . "' onclick=\"return confirm('Yakin Hapus?')\">Hapus</a>";
                echo "</td>";
                echo "</tr>";
            }
        }
    }

    function AddMember($nama_member, $nomor_member,$password,  $alamat, $tgl_mendaftar, $tgl_terakhir_bayar) {
        $sql = "INSERT INTO `member` ( `nama_member`, `nomor_member`, `password`, `alamat`, `tgl_mendaftar`, `tgl_terakhir_bayar`) VALUES (:nama,:nomor_member,:password,:alamat,:tgl_mendaftar,:tgl_terakhir_bayar)";
        $stmt = koneksi()->prepare($sql);
        $result = $stmt->execute(array(':nama' => $nama_member, ':nomor_member' => $nomor_member, ':password' => $password, ':alamat' => $alamat, ':tgl_mendaftar' => $tgl_mendaftar, ':tgl_terakhir_bayar' => $tgl_terakhir_bayar));
        if (!empty($result)) {
            header('location:member.php');
        }
    }

    function EditMember() {
        $stmt = koneksi()->prepare("SELECT * FROM member where id_member=" . $_GET["id_member"]);
        $stmt->execute();
        $GLOBALS['result'] = $stmt->fetchAll();
    }

    function UpdateMember($id_member, $nama_member, $nomor_member, $password, $alamat, $tgldft, $tgl_terakhir_bayar) {
        $pdo_statement = koneksi()->prepare(
            "update member set nama_member='" . $nama_member . "', nomor_member='" . $nomor_member . "', password='" . $password . "', alamat='" . $alamat . "', tgl_mendaftar='" . $tgldft . "', tgl_terakhir_bayar='" . $tgl_terakhir_bayar . "' where id_member=" . $id_member
        );
        $result = $pdo_statement->execute();
        if ($result) {
            header('location:member.php');
        }
    }

    function DeleteMember($id_member) {
        $stmt = koneksi()->prepare("delete from member where id_member=" . $id_member);
        $result = $stmt->execute();
        if ($result) {
            header('location:member.php');
        }
    }

    // Function Buku
    function ShowBuku() {
        $stmt = koneksi()->prepare("SELECT * FROM buku");
        $stmt->execute();
        $result = $stmt->fetchAll();

        if (!empty($result)) {
            foreach ($result as $row) {
                echo "<tr>";
                echo "<td>" . $row['judul_buku'] . "</td>";
                echo "<td>" . $row['penulis'] . "</td>";
                echo "<td>" . $row['penerbit'] . "</td>";
                echo "<td>" . $row["tahun_terbit"] . "</td>";
                echo "<td>";
                echo "<a href='FormBuku.php?id_buku=" . $row['id_buku'] . "'>edit</a>";
                echo " | ";
                echo "<a href='Buku.php?id_buku=" . $row['id_buku'] . "' onclick=\"return confirm('Yakin Hapus?')\">Hapus</a>";
                echo "</td>";
                echo "</tr>";
            }
        }
    }

    function AddBuku($judul_buku, $penulis, $penerbit, $tahun_terbit) {
            $sql = "INSERT INTO `buku` (`judul_buku`, `penulis`, `penerbit`, `tahun_terbit`) VALUES (:judul_buku, :penulis, :penerbit, :tahun_terbit)";
            $stmt = koneksi()->prepare($sql);
            $result = $stmt->execute(array(':judul_buku' => $judul_buku, ':penulis' => $penulis, ':penerbit' => $penerbit, ':tahun_terbit' => $tahun_terbit,));
            if (!empty($result)) {
                header('location:buku.php');
        }
    }

    function EditBuku() {
        $stmt = koneksi()->prepare("SELECT * FROM buku where id_buku=" . $_GET["id_buku"]);
        $stmt->execute();
        $GLOBALS['result'] = $stmt->fetchAll();
    }

    function UpdateBuku($id_buku, $judul_buku, $penulis, $penerbit, $tahun_terbit) {
        $pdo_statement = koneksi()->prepare(
            "update buku set judul_buku='" . $judul_buku . "', penulis='" . $penulis . "', penerbit='" . $penerbit . "', tahun_terbit='" . $tahun_terbit . "' where id_buku=" . $id_buku
        );
        $result = $pdo_statement->execute();
        if ($result) {
            header('location:buku.php');
        }
    }

    function DeleteBuku($id_buku) {
        $stmt = koneksi()->prepare("delete from buku where id_buku=" . $id_buku);
        $result = $stmt->execute();
        if ($result) {
            header('location:buku.php');
        }
    }

    //Function Peminjaman
    function ShowPeminjaman() {
        $stmt = koneksi()->prepare("SELECT * FROM peminjaman");
        $stmt->execute();
        $result = $stmt->fetchAll();

        if (!empty($result)) {
            foreach ($result as $row) {
                echo "<tr>";
                echo "<td>" . $row["tgl_pinjam"] . "</td>";
                echo "<td>" . $row["tgl_kembali"] . "</td>";
                echo "<td>";
                echo "<a href='formPeminjaman.php?id_peminjaman=" . $row['id_peminjaman'] . "'>edit</a>";
                echo " | ";
                echo "<a href='peminjaman.php?id_peminjaman=" . $row['id_peminjaman'] . "' onclick=\"return confirm('Yakin Hapus?')\">Hapus</a>";
                echo "</td>";
                echo "</tr>";
            }
        }
    }

    function AddPeminjaman($tgl_pinjam, $tgl_kembali) {
        $sql = "INSERT INTO `peminjaman` (`tgl_pinjam`, `tgl_kembali`) VALUES (:tgl_pinjam,:tgl_kembali)";
        $stmt = koneksi()->prepare($sql);
        $result = $stmt->execute(array(':tgl_pinjam' => $tgl_pinjam, ':tgl_kembali'=> $tgl_kembali));

        if (!empty($result)) {
            header('location:peminjaman.php');
        }
    }

    function EditPeminjaman() {
        $stmt = koneksi()->prepare("SELECT * FROM peminjaman WHERE id_peminjaman =". $_GET['id_peminjaman']);
        $stmt->execute();
        $GLOBALS['result'] = $stmt->fetchAll();
    }
    
    function UpdatePeminjaman($id_peminjaman, $tgl_pinjam, $tgl_kembali) {
        $pdo_statement = koneksi()->prepare(
            "UPDATE peminjaman SET tgl_pinjam='" . $tgl_pinjam ."', tgl_kembali='" . $tgl_kembali . "' WHERE id_peminjaman = ". $id_peminjaman
        );
        $res = $pdo_statement->execute();
        if (!empty($res)) {
            header('location:peminjaman.php');
        }
    }

    function DeletePinjam($id_peminjaman) {
        $stmt = koneksi()->prepare("DELETE FROM peminjaman WHERE id_peminjaman=" . $id_peminjaman);
        $result = $stmt->execute();
        if ($result) {
            header('location:peminjaman.php');
        }
    }

?>