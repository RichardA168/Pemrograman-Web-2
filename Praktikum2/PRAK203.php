<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK203</title>
</head>
<body>
    <form method="POST" action="PRAK203.php">
        <!-- Letak input nilai -->
        Nilai:<input type="text" name="nilai"><br>
        Dari:<br>
        <input type="radio" name="suhuAwal" value="c">Celcius<br>
        <input type="radio" name="suhuAwal" value="f">Fahrenheit<br>
        <input type="radio" name="suhuAwal" value="r">Rheamur<br>
        <input type="radio" name="suhuAwal" value="k">Kelvin<br>
        Ke:<br>
        <input type="radio" name="suhuAkhir" value="°C">Celcius<br>
        <input type="radio" name="suhuAkhir" value="°F">Fahrenheit<br>
        <input type="radio" name="suhuAkhir" value="°R">Rheamur<br>
        <input type="radio" name="suhuAkhir" value="°K">Kelvin<br>
        <!-- Letak tombol submit -->
        <input type="submit" name="submit" value="Konversi">
    </form>
    <?php
    /* Pengambilan value pada form */
    if(isset($_POST['submit'])) {
        $nilai = $_POST['nilai'];
        $suhuAwal = $_POST['suhuAwal'];
        $suhuAkhir = $_POST['suhuAkhir'];
        $hasil=0;
        /* Pengkondisian perubahan celcius */
        if($suhuAwal=='c'){
            if($suhuAkhir=='°C'){
                $hasil=$nilai;
            }
            elseif($suhuAkhir=='°F'){
                $hasil=$nilai*9/5+32;
            }
            elseif($suhuAkhir=='°R'){
                $hasil=$nilai*4/5;
            }
            elseif($suhuAkhir=='°K'){
                $hasil=$nilai+273.15;
            }  
        }
        /* Pengkondisian perubahan fahrenheit */
        elseif($suhuAwal=='f'){
            if($suhuAkhir=='°C'){
                $hasil=($nilai-32)*5/9;
            }
            elseif($suhuAkhir=='°F'){
                $hasil=$nilai;
            }
            elseif($suhuAkhir=='°R'){
                $hasil=($nilai-32)*4/9;
            }
            elseif($suhuAkhir=='°K'){
                $hasil=($nilai+459.67)*5/9;
            }   
        }
        /* Pengkondisian perubahan reamur */
        elseif($suhuAwal=='r'){
            if($suhuAkhir=='°C'){
                $hasil=$nilai*5/4;
            }
            elseif($suhuAkhir=='°F'){
                $hasil=$nilai*9/4+32;
            }
            elseif($suhuAkhir=='°R'){
                $hasil=$nilai;
            }
            elseif($suhuAkhir=='°K'){
                $hasil=$nilai*5/4+273.15;
            }   
        }
        /* Pengkondisian perubahan kelvin */
        elseif($suhuAwal=='k'){
            if($suhuAkhir=='°C'){
                $hasil=$nilai-273.15;
            }
            elseif($suhuAkhir=='°F'){
                $hasil=$nilai*9/5-459.67;
            }
            elseif($suhuAkhir=='°R'){
                $hasil=($nilai-273.15)*4/5;
            }
            elseif($suhuAkhir=='°K'){
                $hasil=$nilai;
            }   
        }
        echo "<h2>Hasil konversi: $hasil $suhuAkhir</h2>";
    }
    ?>
</body>
</html>