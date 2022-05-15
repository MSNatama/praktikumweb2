<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modul 5</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav class="navbar">
        <span class="toggle-nav" id="toggle-nav">
            <i class="material-icons">menu</i>
        </span>

        <a href="#" class="logo"><img src="logo.png" alt="">
            <p>Muhammad Shafa Natama</p>
        </a>

        <ul class="main-nav" id="main-nav">
            <li><a href="member.php" class="nav-links">Member</a></li>
            <li><a href="buku.php" class="nav-links">Buku</a></li>
            <li><a href="peminjaman.php" class="nav-links">Data Peminjaman</a></li>
        </ul>
    </nav>
    <script>
        let mainNav = document.getElementById('main-nav');
        let toggleNav = document.getElementById('toggle-nav');
        toggleNav.addEventListener('click', function () {
            mainNav.classList.toggle('active')
        });
    </script>
</body>
</html>