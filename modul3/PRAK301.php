<html>
    <head>
        <title>soal 1</title>
    </head>

    <body>
        <form action="" method="post">
            Jumlah Peserta:
            <input type="text" name="jumlah">
            <br>
            <input type="submit" name="submit" value="submit">
        </form>
        <?php
            if(isset($_POST['submit'])) {
            $jum = $_POST['jumlah'];
            $i = 1;

            while ($i <= $jum) {
                if ($i % 2 == 0) {
                echo "<h1 style=\"color:green\">Peserta ke-$i</h1>";
                } else {
                echo "<h1 style=\"color:red\">Peserta ke-$i</h1>";
                }
                $i++;
                }
            }
        ?>
    </body>
</html>