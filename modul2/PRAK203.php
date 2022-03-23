<!DOCTYPE html>

<body>
    <?php
    if (isset($_POST['enter'])) {

        $suhu = $_POST['nilai'];
        $fromTeamp = $_POST['fromTemp'];
        $toTemp = $_POST['toTemp'];
        $hasil;
    }
    ?>
    <form action="" method="post">
        Nilai : <input type="text" name="nilai" value="<?php if (isset($suhu)) echo $suhu ?>">
        <br> Dari: <br>
        <input type="radio" name="fromTeamp" <?php if (isset($fromTeamp) && $fromTeamp == "Celcius") echo "checked"; ?> value="Celcius"> Celcius <br>
        <input type="radio" name="fromTeamp" <?php if (isset($fromTeamp) && $fromTeamp == "Fahrenheit") echo "checked"; ?> value="Fahrenheit"> Fahrenheit <br>
        <input type="radio" name="fromTeamp" <?php if (isset($fromTeamp) && $fromTeamp == "Rheamur") echo "checked"; ?> value="Rheamur"> Rheamur <br>
        <input type="radio" name="fromTeamp" <?php if (isset($fromTeamp) && $fromTeamp == "Kelvin") echo "checked"; ?> value="Kelvin"> Kelvin <br>

        Ke : <br>
        <input type="radio" name="toTemp" <?php if (isset($toTemp) && $toTemp == "Celcius") echo "checked"; ?> value="Celcius"> Celcius <br>
        <input type="radio" name="toTemp" <?php if (isset($toTemp) && $toTemp == "Fahrenheit") echo "checked"; ?> value="Fahrenheit"> Fahrenheit <br>
        <input type="radio" name="toTemp" <?php if (isset($toTemp) && $toTemp == "Rheamur") echo "checked"; ?> value="Rheamur"> Rheamur <br>
        <input type="radio" name="toTemp" <?php if (isset($toTemp) && $toTemp == "Kelvin") echo "checked"; ?> value="Kelvin"> Kelvin <br>
        <input type="submit" name="enter" value="Konversi">
    </form>
    <?php
    if (isset($_POST['enter'])) {
        switch ($fromTeamp) {
            case "Celcius":
                switch ($toTemp) {
                    case 'Celcius':
                        $hasil = $suhu;
                        echo "<h2> Hasil Konversi:" . $hasil . "°C</h2>";
                        break;
                    case 'Fahrenheit':
                        $hasil = $suhu * 1.8 + 32;
                        echo "<h2> Hasil Konversi:" . $hasil . "°F</h2>";
                        break;
                    case "Rheamur":
                        $hasil = $suhu * 0.8;
                        echo "<h2> Hasil Konversi:" . $hasil . "°R</h2>";
                        break;
                    case 'Kelvin':
                        $hasil = $suhu + 273;
                        echo "<h2> Hasil Konversi:" . $hasil . "°K</h2>";
                        break;
                }
                break;
            case "Fahrenheit":
                switch ($toTemp) {
                    case 'Celcius':
                        $hasil = ($suhu - 32) * 5 / 9;
                        echo "<h2> Hasil Konversi:" . $hasil . "°C</h2>";
                        break;
                    case 'Fahrenheit':
                        $hasil = $suhu;
                        echo "<h2> Hasil Konversi:" . $hasil . "℉</h2>";
                        break;
                    case "Rheamur":
                        $hasil = ($suhu - 32) * 0.44444;
                        echo "<h2> Hasil Konversi:" . $hasil . "°R</h2>";
                        break;
                    case 'Kelvin':
                        $hasil = ($suhu - 32) * 5 / 9 + 273;
                        echo "<h2> Hasil Konversi:" . $hasil . "°K</h2>";
                        break;
                }
                break;
            case "Rheamur":
                switch ($toTemp) {
                    case 'Celcius':
                        $hasil = $suhu  / 0.8;
                        echo "<h2> Hasil Konversi:" . $hasil . "°C</h2>";
                        break;
                    case 'Fahrenheit':
                        $hasil = $suhu * 2.25 + 32;
                        echo "<h2> Hasil Konversi:" . $hasil . "℉</h2>";
                        break;
                    case "Rheamur":
                        $hasil = $suhu;
                        echo "<h2> Hasil Konversi:" . $hasil . "°R</h2>";
                        break;
                    case 'Kelvin':
                        $hasil = ($suhu / 0.8) + 273;
                        echo "<h2> Hasil Konversi:" . $hasil . "°K</h2>";
                        break;
                }
                break;
            case "Kelvin":
                switch ($toTemp) {
                    case 'Celcius':
                        $hasil = $suhu - 273;
                        echo "<h2> Hasil Konversi:" . $hasil . "°C</h2>";
                        break;
                    case 'Fahrenheit':
                        $hasil = ($suhu - 273) * 9 / 5 + 32;
                        echo "<h2> Hasil Konversi:" . $hasil . "℉</h2>";
                        break;
                    case "Rheamur":
                        $hasil = ($suhu - 273) * 4 / 5;
                        echo "<h2> Hasil Konversi:" . $hasil . "°R</h2>";
                        break;
                    case 'Kelvin':
                        $hasil = $suhu;
                        echo "<h2> Hasil Konversi:" . $hasil . "°K</h2>";
                        break;
                }
                break;
            default:
                echo "Input tidak valid";
                break;
        }
    }
    ?>
</body>

</html>