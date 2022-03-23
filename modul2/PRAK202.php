<!DOCTYPE html>

<body>
    <?php
    $nameErr = $nimErr = $genderErr = "";
    $nama = $nim = $gender = "";
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["nama"])) {
            $nameErr = "Nama tidak boleh kosong";
        } else {
            $nama = $_POST["nama"];
        }
        if (empty($_POST["nim"])) {
            $nimErr = "NIM tidak boleh kosong";
        } else {
            $nim = $_POST["nim"];
        }
        if (empty($_POST["gender"])) {
            $genderErr = "Jenis kelamin tidak boleh kosong";
        } else {
            $gender = $_POST["gender"];
        }
    }
    ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Nama: <input type="text" name="nama" value="<?php echo $nama ?>"><span class="error">* <?php echo $nameErr ?> </span><br>
        NIM: <input type="text" name="nim" value="<?php echo $nim ?>"><span class="error">* <?php echo $nimErr ?> </span><br>
        jenis kelamin: <span class="error">* <?php echo $genderErr ?> </span><br>
        <input type="radio" name="gender" <?php if (isset($gender) && $gender == "Laki-Laki") echo "checked"; ?> value="Laki-Laki">Laki-laki <br>
        <input type="radio" id="p" name="gender" <?php if (isset($gender) && $gender == "Perempuan") echo "checked"; ?> value="Perempuan">Perempuan<br>
        <input type="submit" name="enter" value="submit">
    </form>
    <?php
    if (!empty($nama) && !empty($nim) && !empty($gender)) {

        echo $nama . "<br>";
        echo $nim . "<br>";
        echo $gender . "<br>";
    }
    ?>
</body>

</html>