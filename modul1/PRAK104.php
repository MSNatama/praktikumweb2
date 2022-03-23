<?php 
    $phone = array("Samsung Galaxy S22", 
        "Samsung Galaxy S22+", 
        "Samsung Galaxy A03", 
        "Samsung Galaxy Xcover 5");
        
    $tArray = count($phone);
    echo "<table border='1' width='230'>";
    echo "<tr>";
    echo "<th>Daftar Smarthphone Samsung</th>";
    echo "</tr>";
    for ($i=0; $i < $tArray; $i++) { 
        echo "<tr>";
        echo "<td>$phone[$i]</td>";
        echo "</tr>";
    }
    echo "</table>";
?>