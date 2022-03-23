<!DOCTYPE html>

<body>
    <form action="" method="post">
        Nilai : <input type="number" name="angka"> <br>
        <input type="submit" name="enter" value="Konversi">
    </form>

    <?php
    if (isset($_POST['enter'])) {
        $angka = $_POST['angka'];
        if ($angka >= 0 && $angka < 1000) {
            if ($angka == 0) {
                echo "Nol";
            } elseif ($angka > 0 && $angka < 10) {
                echo "satuan";
            } elseif ($angka > 10 && $angka < 20) {
                echo "belasan";
            } elseif (($angka >= 20 && $angka < 100) || $angka == 10) {
                echo "puluhan";
            } elseif ($angka > 100) {
                echo "ratusan";
            }
        } else {
            echo "Anda menginput melebihi limit bilangan";
        }
    }
    ?>
</body>

</html>