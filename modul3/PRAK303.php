<html>
    <head>
        <title>soal 3</title>
    </head>

    <body>
        <form action="" method="post">
            Batas Bawah <br> <input type="text" name="bb"><br>
            Batas Atas <br> <input type="text" name="ba"><br>
            <input type="submit" value="submit" name="submit">
        </form>
        <?php
            if(isset($_POST['submit'])) {
                $bawah = $_POST['bb'];
                $atas = $_POST['ba'];
                do {
                    if(($bawah + 7) % 5 == 0) {
                        echo "<img src=\"star-images-9441.png\" height=\"30\" width=\"30\">";
                    }else {
                        echo "$bawah ";
                    }
                    $bawah++;
                }while ($bawah <= $atas);
            }
        ?>
    </body>
</html>