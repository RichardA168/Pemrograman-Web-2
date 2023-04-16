<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prak402</title>
</head>
<style>
    table{
        border-collapse: collapse;
    }
    th{
        background-color: grey;
    }
    th, td{
        border-color: black;
        text-align: left;
        padding: 5px 30px 10px 5px;
    }
</style>
<body>
<?php
$data = array(
        array(
        "Nama" => "Andi",
        "NIM" => "2101001",
        "Nilai UTS" => 87,
        "Nilai UAS" => 65
        ),
        array(
        "Nama" => "Budi",
        "NIM" => "2101002",
        "Nilai UTS" => 76,
        "Nilai UAS" => 79
        ),
        array(
        "Nama" => "Tono",
        "NIM" => "2101003",
        "Nilai UTS" => 50,
        "Nilai UAS" => 41
        ),
        array(
        "Nama" => "Jessica",
        "NIM" => "2101004",
        "Nilai UTS" => 60,
        "Nilai UAS" => 75
        )
        );

        foreach($data as &$hasil){
            $hasil['Nilai Akhir'] = 40 * $hasil["Nilai UTS"] / 100 + 60 * $hasil["Nilai UAS"] / 100;
            if($hasil['Nilai Akhir']>=80):$hasil['Huruf'] = "A";
            elseif($hasil['Nilai Akhir']>=70):$hasil['Huruf'] = "B";
            elseif($hasil['Nilai Akhir']>=60):$hasil['Huruf'] = "C";
            elseif($hasil['Nilai Akhir']>=50):$hasil['Huruf'] = "D";
            else:$hasil['Huruf'] = "E";
        endif;
        }
        unset($hasil);

        echo "<table border='1'>";
        echo "<tr>
            <th>Nama</th>
            <th>NIM</th>
            <th>Nilai UTS</th>
            <th>Nilai UAS</th>
            <th>Nilai Akhir</th>
            <th>Huruf</th>
            <tr>";

            foreach($data as &$hasil){
                echo "<tr>";
                echo "<td>".$hasil['Nama']."</td>";
                echo "<td>".$hasil['NIM']."</td>";
                echo "<td>".$hasil['Nilai UTS']."</td>";
                echo "<td>".$hasil['Nilai UAS']."</td>";
                echo "<td>".$hasil['Nilai Akhir']."</td>";
                echo "<td>".$hasil['Huruf']."</td>";
                echo "</tr>";
            }
        
        echo "</table>";
?>
</body>
</html>