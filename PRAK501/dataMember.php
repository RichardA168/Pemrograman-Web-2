<?php require('Model.php');
if (isset($_GET['id_member'])) {
    editMember();
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

    <?php echo (isset($_GET['id_member'])) ? "<title>Edit Member</title>": "<title>Tambah Member</title>" ?> 

</head>
<body>
<div class="w3-card-4">

<div class="w3-container w3-teal">
  <a href="Member.php"><button class="w3-button w3-teal"><img src="iconback.png" width=30></button></a>
  <h2 align="center">FORM MEMBER</h2>
</div>

<form class="w3-container" method="post"><br>

<?php  
  if( isset($_GET['id_member']) ) {
    $sql = "SELECT * FROM member WHERE id_member = " . $_GET['id_member'];
    $result = mysqli_query($conn, $sql);

    foreach($result as $res) :            
?>

<label for="id_member">ID</label>
<input class="w3-input w3-border w3-animate-input" type="text" style="width:135px" 
name="id_member" <?php echo (isset($_GET['id_member'])) ?  "value = " . $res["id_member"] . "" : "value = '' "; ?> required><br><br>

<label for="nama_member">Nama Member</label>
<input class="w3-input w3-border w3-animate-input" type="text" style="width:135px" 
name="nama_member" <?php echo (isset($_GET['id_member'])) ?  "value = " . $res["nama_member"] . "" : "value = '' "; ?> required><br><br>

<label for="nomor_member">Nomor Telepon</label>
<input class="w3-input w3-border w3-animate-input" type="text" style="width:135px"
name="nomor_member" <?php echo (isset($_GET['id_member'])) ?  "value = " . $res["nomor_member"] . "" : "value = '' "; ?> required><br><br>

<label for="alamat_member">Alamat</label>
<input class="w3-input w3-border w3-animate-input" type="text" style="width:135px"
name="alamat" <?php echo (isset($_GET['id_member'])) ?  "value = " . $res["alamat"] . "" : "value = '' "; ?> required><br><br>

<label for="tanggal_member">Tanggal Pendaftaran</label>
<input class="w3-input" type="datetime-local" style="width:135px"
name="tgl_mendaftar" <?php echo (isset($_GET['id_member'])) ?  "value = " . $res["tgl_mendaftar"] . "" : "value = '' "; ?> required><br><br>

<label for="tgl_akhirMember">Tanggal Pembayaran Terakhir</label>
<input class="w3-input w3-border w3-animate-input" type="date" style="width:135px"
name="tgl_terakhir_bayar" <?php echo (isset($_GET['id_member'])) ?  "value = " . $res["tgl_terakhir_bayar"] . "" : "value = '' "; ?> required><br><br>


<?php 
  if (isset($_GET['id_member'])) {
    echo "<button type=\"submit\" name=\"update\">Edit</button>";
  }else {
    echo "<button type=\"submit\" name=\"submit\">Tambah</button>";    
  }
?>

<?php 
  endforeach; 
} else {
?>

<label for="id_member">ID</label>
<input class="w3-input w3-border w3-animate-input" type="text" style="width:135px"
name="id_member" <?php echo (isset($_GET['id_member'])) ?  "value = " . $res["id_member"] . "" : "value = '' "; ?> required><br><br>

<label for="id_member">Nama Member</label>
<input class="w3-input w3-border w3-animate-input" type="text" style="width:135px"
name="nama_member" <?php echo (isset($_GET['id_member'])) ?  "value = " . $res["nama_member"] . "" : "value = '' "; ?> required><br><br>

<label for="id_member">No. Telepon</label>
<input class="w3-input w3-border w3-animate-input" type="text" style="width:135px"
name="nomor_member" <?php echo (isset($_GET['id_member'])) ?  "value = " . $res["nomor_member"] . "" : "value = '' "; ?> required><br><br>

<label for="id_member">Alamat</label>
<input class="w3-input w3-border w3-animate-input" type="text" style="width:135px"
name="alamat" <?php echo (isset($_GET['id_member'])) ?  "value = " . $res["alamat"] . "" : "value = '' "; ?> required><br><br>

<label for="id_member">Tanggal Pendaftaran</label>
<input class="w3-input w3-border w3-animate-input" type="datetime-local" style="width:135px"
name="tgl_mendaftar" <?php echo (isset($_GET['id_member'])) ?  "value = " . $res["tgl_mendaftar"] . "" : "value = '' "; ?> required><br><br>

<label for="id_member">Tanggal Pembayaran Terakhir</label>
<input class="w3-input w3-border w3-animate-input" type="date" style="width:135px"
name="tgl_terakhir_bayar" <?php echo (isset($_GET['id_member'])) ?  "value = " . $res["tgl_terakhir_bayar"] . "" : "value = '' "; ?> required><br><br>

<?php 
  if (isset($_GET['id_member'])) {
    echo "<button type=\"submit\" name=\"update\">Edit</button>";
  } else {
    echo "<button type=\"submit\" name=\"submit\">Tambah</button>";    
  }
?>

<?php } ?>

</form>

<?php
    if (isset($_POST['submit'])) {
        tambahMember($_POST['id_member'],$_POST['nama_member'], $_POST['nomor_member'], $_POST['alamat'], $_POST['tgl_mendaftar'],$_POST['tgl_terakhir_bayar']);
    }
    if (isset($_POST['update'])) {
       updateMember($_POST['id_member'],$_POST['nama_member'], $_POST['nomor_member'], $_POST['alamat'], $_POST['tgl_mendaftar'],$_POST['tgl_terakhir_bayar']);
    }
?>
</div>

</body>
</html> 