<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prak401</title>
</head>
<style>
    table, td {
        border-collapse: collapse;
        padding: 5px 5px;
    }
    p {
        color: red;
    }
</style>
<body>
    <form action="PRAK401.php" method="POST">
        Panjang = <input type="text" name="baris" required><br>
        Lebar = <input type="text" name="kolom" required><br>
        Nilai = <input type="text" name ="nilai" required><br><br>
        <input type="submit" name="submit" value="Cetak"><br><br>
    </form>
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $baris = $_POST['baris'];
        $kolom = $_POST['kolom'];
        $nilai = explode(" ", $_POST["nilai"]);
        $temp_nilai = count($nilai);
        $i = 0;
        $j = $baris * $kolom;

        if($temp_nilai == $j){
            echo"<p>Jumlah nilai tidak sesuai!</p>";
        } else {
            echo "<table border=1px>";
            for($a=0;$a<$baris;$a++){
                echo"<tr>";
                for($b=0;$b<$kolom;$b++){
                    if(isset($nilai[$i])){
                        echo"<td>".$nilai[$i]."</td>";
                        $i++;
                    }
                }
                echo"</tr>";
            }
            echo"</table>";
        }
    }    
    ?>
</body>
</html>