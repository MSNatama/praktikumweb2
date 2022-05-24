<?php
require_once("koneksi.php");
session_name("verify");
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $nomor = $_POST['nomor_member'];
    $password = $_POST['pass'];

    $sql = koneksi()->prepare("SELECT * FROM member WHERE nomor_member = :nomor and password = :password");
    $sql->execute(array(
        ':nomor' => $nomor,
        ':password' => $password
        ));
    $result = $sql->fetch();
    if (empty($result['nomor_member'])) {
        echo "Username atau password yang dimasukan tidak valid";
        echo"<br/><a href='formLogin.php'>Login Ulang</a>";
    } else {
            $_SESSION["nomor_member"] = $result['nomor_member'];
            header("Location: index.php");
    }
}
