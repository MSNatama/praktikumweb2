<html>
    <head>
        <title>Soal 1</title>
        <style type="text/css">
            table, th, td {
                text-align : center;
                border : 1px solid;
                border-collapse : collapse;
                padding : 8px;
            }
        </style>
    </head>

    <body>
        <form action="" method="post">
            Panjang : <input type="text" name="panjang"> <br>
            Lebar : <input type="text" name="lebar"> <br>
            Nilai : <input type="text" name="nilai"> <br>
            <input type="submit" value="Cetak" name="submit">
        </form>
        <?php
            if (isset($_POST['submit'])) {
                $arrayN = explode(" ", $_POST['nilai']);
                $panjang = $_POST['panjang'];
                $lebar = $_POST['lebar'];
                
                $luas = $panjang * $lebar;
                $jumlahN = sizeof($arrayN);

                if ($luas < $jumlahN || $luas > $jumlahN) {
                    echo "Panjang nilai tidak sesuai dengan ukuran matriks";
                } else {
                    echo "<table>";
                    $index = 0;
                    for ($i = 0; $i < $_POST['panjang']; $i++) {
                        echo "<tr>";
                        $j = 0;
                        while ($j < $lebar){
                            echo "<td>";
                            if(isset($arrayN[$index])){
                                echo "$arrayN[$index]";
                            }
                            echo "</td>";
                            $j ++;
                            $index ++;
                        }
                        echo "</tr>";
                    }
                    echo "</table>";
                }
            }
        ?>
    </body>
</html>