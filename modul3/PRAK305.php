<html>
    <head>
        <title>soal 5</title>
    </head>

    <body>
        <form action="" method="post">
            <input type="text" name="text">
            <input type="submit" value="submit" name="submit">
        </form>
        <?php
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                if (isset($_POST['submit'])) {
                    $text = htmlspecialchars($_POST['text']);
                }
                $textLen = strlen($text);
                $i = 0;
                while($i < $textLen){
                    $k = $textLen;
                    while($k > 0){
                        if ($k == $textLen){
                            echo strtoupper($text[$i]);
                        }else {
                            echo strtolower($text[$i]);
                        }
                        $k--;
                    }
                    $i++;
                }
            }
        ?>
    </body>
</html>