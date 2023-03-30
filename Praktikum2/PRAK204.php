<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK204</title>
</head>
<body>
    <form method="POST" action="PRAK204.php">
        <!-- Letak input nilai -->
        Nilai: <input type="text" name="nilai"><br>
        <!-- Letak tombol submit -->
        <input type="submit" name="submit" value="Konversi"><br>
    </form>
    <?php
    /* Pengambilan value pada form */
    if(isset($_POST['submit'])){
        $nilai=$_POST['nilai'];
        /* Pengkondisian perubahan angka ke huruf */
        switch($nilai){
            case (0):
                echo "<h2>Hasil: Nol</h2>";
                break;
            case ($nilai>=1 && $nilai<=9):
                echo "<h2>Hasil: Satuan</h2>";
                break;
            case ($nilai>=10 && $nilai<=99):
                echo "<h2>Hasil: Puluhan</h2>";
                break;
            case ($nilai>=100 && $nilai<=999):
                echo "<h2>Hasil: Ratusan</h2>";
                break;
            case ($nilai<0||$nilai>999):
                echo "<h2>Anda Menginput Melebihi Limit Bilangan";
        }
    }
    ?>
</body>
</html>