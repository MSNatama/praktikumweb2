<?php
include 'koneksi.php';
if (isset($_SESSION['nomor_member'])) {
    session_start();
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <table>
        <form action="login.php" method="POST">
            <tr>
                <td>Nomor Member</td>
                <td><input type="text" name="nomor_member" autofocus></td>
            </tr>
            <tr>
                <td>password</td>
                <td><input type="password" name="pass"></td>
            </tr>
            <tr>
                <td></td>

                <td><button type="submit" name="login">Submit</button></td>
            </tr>
        </form>
    </table>
</body>


</html>