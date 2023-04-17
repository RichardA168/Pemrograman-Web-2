<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prak403</title>
</head>
<style>
    table{
        border-collapse: collapse;
    }
    th{
        background-color: grey;
    }
    th,td{
        border-color: black;
        padding: 7px 13px;
    }
    .Revisi{
        background-color: red;
    }
    .Tidak-Revisi{
        background-color: limegreen;
    }
</style>
<body>
<?php
$mhs1 = array("Pemrograman I","Praktikum Pemrograman I","Pengantar Lingkungan Lahan Basah","Arsitektur Komputer");
$mhs2 = array("Basis Data I","Praktikum Basis Data I","Kalkulus");
$mhs3 = array("Rekayasa Perangkat Lunak", "Analisis dan Perancangan Sistem", "Komputasi Awan", "Kecerdasan Bisnis");

$data = array(
        array(
            "No"=>"1",
            "Nama"=>"Ridho",
            "Mata Kuliah diambil"=>$mhs1,
            "SKS"=>array(2,1,2,3)
        ),
        array(
            "No"=>"2",
            "Nama"=>"Ratna",
            "Mata Kuliah diambil"=>$mhs2,
            "SKS"=>array(3,2,1)
        ),
        array(
            "No"=>"3",
            "Nama"=>"Tono",
            "Mata Kuliah diambil"=>$mhs3,
            "SKS"=>array(3,3,3,3)
        )
        );

        foreach($data as &$hasil){
            $hasil["Total SKS"] = array_sum($hasil["SKS"]);
            if($hasil["Total SKS"]<7):
                $hasil["Keterangan"] = "Revisi KRS";
                $hasil["Warna"] = "Revisi";
            else:
                $hasil["Keterangan"] = "Tidak Revisi KRS";
                $hasil["Warna"] = "Tidak-Revisi";
            endif;
        }
        unset($hasil);

    echo "<table border='1'>";
    echo "<tr>
        <th rowspan='2'>No</th>
        <th rowspan='2'>Nama</th>
        <th rowspan='2'>Mata Kuliah diambil</th>
        <th rowspan='2'>SKS</th></tr>
        <th>Total SKS</th>
        <th>Keterangan</th>
        </tr>";

        foreach($data as $hasil){
            $matkul_count=count($hasil["Mata Kuliah diambil"]);
            echo "<tr>";
            echo "<td rowspan='" . $matkul_count . "'>" . $hasil["No"] . "</td>";
            echo "<td rowspan='" . $matkul_count . "'>" . $hasil["Nama"] . "</td>";
            
            for ($i = 0; $i < $matkul_count; $i++) {
                echo "<td>" . $hasil["Mata Kuliah diambil"][$i] . "</td>";
                echo "<td>" . $hasil["SKS"][$i] . "</td>";
            
                if($i==0){
                    echo "<td rowspan='" . $matkul_count . "'>" . $hasil["Total SKS"] . "</td>";
                    echo "<td class='" . $hasil["Warna"] . "' rowspan='" . $matkul_count . "'>" . $hasil["Keterangan"] . "</td>";
                }
                echo "</tr><tr>";
            }
            echo "</tr>";
        }

        echo "</table>";
?>  
</body>
</html>
