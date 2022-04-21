<html>
    <head>
        <title>Soal 3</title>
        <style type="text/css">
            table, th, tr, td {
                border : 1px solid;
                border-collapse : collapse;
                text-align: left;
                padding : 5px;
            }
            th {
                background-color : #D0CECE;
            }
            th, td {
                height : 24px;
            }
            #green {
                background-color : #00B050;
            }
            #red {
                background-color : #FF0000;
            }
        </style>
    </head>

    <body>
            <?php
                $array =
                [
                    [
                        "no" => 1, 
                        "nama" => "Ridho", 
                        "MK" =>
                        [
                            ["nama_mk" =>"Pemrograman I", "sks" => 2], 
                            ["nama_mk" => "Praktikum Pemrograman I", "sks" => 1],
                            ["nama_mk" => "Pengantar Lingkungan Lahan Basah", "sks" => 2], 
                            ["nama_mk" => "Arsitektur Komputer", "sks" => 3]
                        ]
                    ],
                    [
                        "no" => 2, 
                        "nama" => "Ratna", 
                        "MK" =>
                        [
                            ["nama_mk" =>"Basis Data I", "sks" => 2], 
                            ["nama_mk" => "Praktikum Basis Data I", "sks" => 1],
                            ["nama_mk" => "Kalkulus", "sks" => 3]
                        ]
                    ],
                    [
                        "no" => 3, 
                        "nama" => "Tono", 
                        "MK" =>
                        [
                            ["nama_mk" => "Rekayasa Perangkat Lunak", "sks" => 3], 
                            ["nama_mk" => "Analisis dan Perancangan Sistem", "sks" => 3],
                            ["nama_mk" => "Komputasi Awan", "sks" => 3], 
                            ["nama_mk" => "Kecerdasan Bisnis", "sks" => 3]
                        ]
                    ]
                ];
            ?>

        <table>
            <tr>
            <th> No </th>
            <th> Nama </th>
            <th> Mata Kuliah diambil </th>
            <th> SKS </th>
            <th> Total SKS </th>
            <th> Keterangan </th>
            </tr>
            <?php
                for ($i=0; $i < count($array); $i++) {
                    $totalSKS = 0;
                    for ($j=0; $j < count($array[$i]["MK"]); $j++) { 
                        $totalSKS += $array[$i]["MK"][$j]["sks"];
                    }
                    
                    $array[$i]["totalSKS"] = $totalSKS;
                    if ($array[$i]["totalSKS"] < 7) {
                        $array[$i]["keterangan"] = "<div id='red';'>Revisi</div>";
                    } else {
                        $array[$i]["keterangan"] = "<div id='green';'>Tidak Revisi</div>";
                    }
                }
                // foreach ($array as $isi) { 
                    // foreach ($isi["MK"] as $mk) { 
                    //         $totalSKS += $mk["sks"];
                    // }
                    
                    // $mk["totalSKS"] = $totalSKS;
                    // if ($mk["totalSKS"] < 7) {
                    //     $mk["keterangan"] = "<div id='red' >Revisi KRS</div>";
                    // } else {
                    //     $mk["keterangan"] = "<div id='green';'>Tidak Revisi</div>";
                    // }
                //}
				for ($j=0; $j < count($array); $j++) {
                    //foreach ($array as $isi) {
                    for ($i=0; $i < count($array[$j]["MK"]); $i++) { 
                        echo "<tr>";
						if ($i == 0) {
							echo "<td>".$array[$j]["no"]."</td>";
							echo "<td>".$array[$j]["nama"]."</td>";
							echo "<td>".$array[$j]["MK"][$i]["nama_mk"]."</td>";
							echo "<td>".$array[$j]["MK"][$i]["sks"]."</td>";
							echo "<td>".$array[$j]["totalSKS"]."</td>";
							echo "<td>".$array[$j]["keterangan"]."</td>";
						} else {
							echo "<td></td>";
							echo "<td></td>";
							echo "<td>".$array[$j]["MK"][$i]["nama_mk"]."</td>";
							echo "<td>".$array[$j]["MK"][$i]["sks"]."</td>";
							echo "<td></td>";
							echo "<td></td>";
						}
						echo "</tr>";
					}
				}
			?>

        </table>
    </body>
</html>