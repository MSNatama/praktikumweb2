<?php 
    $phone = array("Samsung Galaxy S22", 
        "Samsung Galaxy S22+", 
        "Samsung Galaxy A03", 
        "Samsung Galaxy Xcover 5");
?>

<html>
    <body>
        <table border='1' width='240'>
            <thead>
                <tr>
                    <th>Daftar Smarthphone Samsung</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $tArray = count($phone);
                for ($i=0; $i < $tArray; $i++) { 
                    echo "<tr>";
                    echo "<td>$phone[$i]</td>";
                    echo "</tr>";
                }
            ?>
            </tbody>
        </table>
    </body>
</html>
