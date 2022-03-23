<?php 
    $phone = [
        "type1"=> "Samsung Galaxy S22",
        "type2"=> "Samsung Galaxy S22+",
        "type3"=> "Samsung Galaxy A03",
        "type4"=> "Samsung Galaxy Xcover 5"
    ];
?>

<html>
    <style>
        .judul{
            background-color: red;
            font-size: 20;
        }    
    </style>
    <body>
        <table border='1'>
            <thead>
                <tr height='80px'>
                    <th class="judul">Daftar Smarthphone Samsung</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($phone as $type): ?>
                <tr>
                    <td><?php echo ($type) ?></td>
                </tr>
            <?php endforeach; ?> 
            </tbody>
        </table>
    </body>
</html>