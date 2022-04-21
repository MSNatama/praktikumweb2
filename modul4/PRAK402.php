<html>
    <head>
        <title>Soal 2</title>
        <style type="text/css">
            table, th, td {
                border : 1px solid;
                border-collapse : collapse;
                padding : 0px 40px 12px 6px;
            }
            th {
                background-color : #D0CECE;
            }
        </style>
    </head>

    <body>
        <?php
            $array = [
                [
                    "Nama" => "Andi",
                    "NIM" => "2101001",
                    "UTS" => "87",
                    "UAS" => "65" ],
                [
                    "Nama" => "Budi",
                    "NIM" => "2101002",
                    "UTS" => "76",
                    "UAS" => "79" ],
                [
                    "Nama" => "Tono",
                    "NIM" => "2101003",
                    "UTS" => "50",
                    "UAS" => "41" ],
                [
                    "Nama" => "Jessica",
                    "NIM" => "2101004",
                    "UTS" => "60",
                    "UAS" => "75" ]
            ];

            for ($i = 0; $i < count($array); $i++) {
                $nilaiAkhir = (40 * $array[$i]["UTS"] / 100) + (60 * $array[$i]["UAS"] / 100 );
                $array[$i]["Nilai Akhir"] = $nilaiAkhir;
                if ($nilaiAkhir >= 80) {
                    $array[$i]["Nilai Huruf"] = "A";
                } 
                if ($nilaiAkhir >= 70) {
                    $array[$i]["Nilai Huruf"] = "B";
                } 
                if ($nilaiAkhir >= 60) {
                    $array[$i]["Nilai Huruf"] = "C";
                } 
                if ($nilaiAkhir >= 50) {
                    $array[$i]["Nilai Huruf"] = "D";
                } 
                else {
                    $array[$i]["Nilai Huruf"] = "E";
                }
            }
        ?>
        <table>
            <tr>
            <th> Nama </th>
            <th> NIM </th>
            <th> Nilai UTS </th>
            <th> Nilai UAS </th>
            <th> Nilai Akhir </th>
            <th> Huruf </th>
            </tr>
            <?php
            foreach ($array as $a) {
                echo "<tr>";
                foreach ($a as  $input) {
                    echo "<td>" . $input . "</td>";
                }
                echo "</tr>";
            }
            ?>
        </table>
    </body>
</html>