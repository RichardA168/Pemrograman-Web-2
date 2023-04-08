<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prak301</title>
</head>
<body>
    <form method="POST" action="PRAK301.php">
        Jumlah peserta : <input type="text" name="jumlah"><br>
        <input type="submit" name="submit" value="Cetak"><br>
    </form>
    <?php
    if(isset($_POST['submit'])){
        $batas=$_POST['jumlah'];
        $angkaAwal = 1;
        while($batas>=$angkaAwal){
            if($angkaAwal%2==0): $color = '#008000';
            else: $color = '#FF0000';
            endif;
            echo "<h2 style=\"color: $color\">Peserta ke-$angkaAwal<br></h2>";
            $angkaAwal++;
        }
    }
    ?>
</body>
</html>
