<html>
    <head>
        <title>soal 2</title>
        <style type="text/css">
            img {
                width : 30px;
                height : 30px;
            }
            table {
                text-align: right;
            }
        </style>
    </head>

    <body>
        <form action="" method="post">
            Tinggi :
            <input type="text" name="tinggi"> <br>
            Alamat Gambar : 
            <input type="url" name="url"> <br>
            <input type="submit" value="submit" name="submit">
        </form>
        <?php
            if($_SERVER['REQUEST_METHOD'] == "POST") {
                if (isset($_POST['submit'])) {
                    $tinggi = ($_POST['tinggi']);
                    $url = $_POST['url'];
                    
                    $i = 0;
                    echo "<table>";
                    while ($tinggi > $i){
                        echo "<tr><td>";
                        $j = 0;
                        while ($j < $tinggi){
                            echo "<img src='$url'>";
                            $j ++;
                        }
                        echo "</td></tr>";
                        $tinggi --;
                    }
                    echo "</table>";
                }
            }
        ?>
    </body>
</html>
