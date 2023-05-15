<?php 
require('Model.php');
if (isset($_GET['id_Peminjaman'])) {
    editPeminjaman();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<div class="w3-card-4">

<div class="w3-container w3-teal">
<a href="Peminjaman.php"><button class="w3-button w3-teal"><img src="iconback.png" width=30></button></a>
  <h2 align="center">FORM PEMINJAMAN</h2>
</div>

<form class="w3-container" method="post"><br>
<?php
        if( isset($_GET['id_Peminjaman']) ) {
        $sql = "SELECT * FROM peminjaman WHERE id_Peminjaman = " . $_GET['id_Peminjaman'];
        $result = mysqli_query($conn, $sql);

        foreach($result as $res) :
?>

<label for="id_pinjam">ID</label>
<input class="w3-input" type="text" style="width:135px"
name="id_Peminjaman" <?php echo (isset($_GET['id_Peminjaman'])) ?  "value = " . $res["id_Peminjaman"] . "" : "value = '' "; ?> required><br><br>

<label for="tanggal_peminjaman">Tanggal Peminjaman</label>
<input class="w3-input" type="date" style="width:135px"
name="tgl_pinjam" <?php echo (isset($_GET['id_Peminjaman'])) ?  "value = " . $res["tgl_pinjam"] . "" : "value = '' "; ?> required><br><br>

<label for="tanggal_kembalian">Tanggal Pengembalian</label>
<input class="w3-input" type="date" style="width:135px"
name="tgl_kembali" <?php echo (isset($_GET['id_Peminjaman'])) ?  "value = " . $res["tgl_kembali"] . "" : "value = '' "; ?> required><br><br>

<?php 
if (isset($_GET['id_Peminjaman'])) {
  echo "<button type=\"submit\" name=\"update\">Edit</button>";
}else {
  echo "<button type=\"submit\" name=\"submit\">Tambah</button>";    
}
?>

<?php 
    endforeach; 
  } else {
?>
<label for="id_pinjam">ID Peminjaman</label>
<input class="w3-input" type="text" style="width:135px"
name="id_Peminjaman" <?php echo (isset($_GET['id_Peminjaman'])) ?  "value = " . $res["id_Peminjaman"] . "" : "value = '' "; ?> required><br><br>

<label for="tanggal_peminjaman">Tanggal Peminjaman</label>
<input class="w3-input" type="date" style="width:135px"
name="tgl_pinjam" <?php echo (isset($_GET['id_Peminjaman'])) ?  "value = " . $res["tgl_pinjam"] . "" : "value = '' "; ?> required><br><br>

<label for="tanggal_kembalian">Tanggal Kembalian</label>
<input class="w3-input" type="date" style="width:135px"
name="tgl_kembali" <?php echo (isset($_GET['id_Peminjaman'])) ?  "value = " . $res["tgl_kembali"] . "" : "value = '' "; ?> required><br><br>

<?php 
if (isset($_GET['id_Peminjaman'])) {
  echo "<button type=\"submit\" name=\"update\">Edit</button>";
 }else {
  echo "<button type=\"submit\" name=\"submit\">Tambah</button>";    
}
?>
<?php } ?>
</form>

<?php
    if (isset($_POST['submit'])) {
        tambahpeminjaman($_POST['id_Peminjaman'],$_POST['tgl_pinjam'],$_POST['tgl_kembali']);
    }
    if (isset($_POST['update'])) {
       updatepeminjaman($_POST['id_Peminjaman'],$_POST['tgl_pinjam'],$_POST['tgl_kembali']);
    }
?>

</div>

</body>
</html>