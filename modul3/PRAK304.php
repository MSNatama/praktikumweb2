<html>
    <head>
        <title>soal 4</title>
        <style type="text/css">
        img {
            width : 100px;
            height : 100px;
        }
        </style>
    </head>

    <body>
        <form action="" method="POST" >
            Jumlah Bintang : 
            <input type="text" name="star"><br>
            <input type="submit" name="submit" value="submit"><br>
        </form>
        <?php
            $x = 0;
            if($_SERVER['REQUEST_METHOD'] == "POST"){
                if(isset($_POST['star'])){
                    $x = $_POST['star'];
                }
                if(isset($_POST['tambah'])){
                    $x = $_POST['star'];
                    $x++;
                }
                if(isset($_POST['kurang'])){
                    $x = $_POST['star'];
                    $x--;
                }
                $i = 0;
                if($x > 0){
                    echo "Jumlah bintang $x <br>";
                    while ($i < $x){
                        echo "<img src='./star-images-9441.png'>";
                        $i++;
                    }
        ?>
        <form method="POST">
        <input type="text" name="star" value="<?php echo $x ?>" hidden>  
            <input type="submit" name="tambah" value="Tambah">
            <input type="submit" name="kurang" value="Kurang"><br>
        </form>
        <?php
                }
            }
        ?>
    </body>
</html>