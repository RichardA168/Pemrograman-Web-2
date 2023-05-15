<?php 
require('Model.php');
if (isset($_GET['id_buku'])){
    hapusBuku($_GET['id_buku']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>

<div class="w3-container w3-teal">
    <a href="Index.php"><button class="w3-button w3-teal"><img src="iconback.png" width=30></button></a>
    <h1 align = "center">DATA BUKU</h1>
</div><br>

<table class="w3-table w3-bordered w3-striped">
<thead class="w3-teal">
    <tr>
      <th width="5%">ID</th>
      <th>Judul Buku</th>
      <th>Penulis</th>
      <th>Penerbit</th>
      <th>Tahun Terbit</th>
      <th>Option</th>
    </tr>
</thead>
<tbody>
  <?php dataBuku(); ?>
</tbody>
<tfoot>
  <tr  class="w3-border-0">
    <td>
      <button type="button" class="w3-button w3-square w3-red"><a href="dataBuku.php">TAMBAH BUKU</a></button>
    </td>
  </tr>
</tfoot>
  </table>
</body>
</html>