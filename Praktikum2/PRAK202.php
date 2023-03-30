<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK202</title>
</head>
<body>
    <form method = "POST" action = "PRAK202.php">
        <!-- Letak input nilai -->
        Nama: <input type="text" name="nama" required><br>
        NIM: <input type="text" name="nim" required><br>
        Jenis Kelamin: <br>
        <input type="radio" name="gender" value="Laki-Laki" required>Laki-Laki<br>
        <input type="radio" name="gender" value="Perempuan" required>Perempuan<br>
        <!-- Letak tombol submit -->
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
    /* Pengambilan value pada form */
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    if(isset($_POST['gender'])){
        $gender = $_POST['gender'];
    }
    /* Output */
    if(!empty($nama) && !empty($nim) && !empty($gender)){
        echo "<br>$nama<br>$nim<br>$gender<br>";
    } else {
        echo "Isi yang kosong terlebih dahulu!";
    }
    ?>
</body>
</html>