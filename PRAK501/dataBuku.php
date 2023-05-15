<?php require('Model.php');
if (isset($_GET['id_buku'])) {
    editbuku();
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

    <?php echo (isset($_GET['id_buku'])) ? "<title>Edit Buku</title>": "<title>Tambah Buku</title>" ?>

</head>
<body>
<div class="w3-card-4">

<div class="w3-container w3-teal">
<a href="Buku.php"><button class="w3-button w3-teal"><img src="iconback.png" width=30></button></a>
<h2 align="center">FORM BUKU</h2>
</div>

<form class="w3-container" method="post"><br>

<?php
    if( isset($_GET['id_buku']) ) {
        $sql = "SELECT * FROM buku WHERE id_buku = " . $_GET['id_buku'];
        $result = mysqli_query($conn, $sql);

        foreach($result as $res) :    
    ?>

<label for="judul_buku">ID</label>
<input class="w3-input w3-border w3-animate-input" type="text" style="width:135px" 
name="id_buku" <?php echo (isset($_GET['id_buku'])) ?  "value = " . $res["id_buku"] . "" : "value = '' "; ?> required><br><br>

<label for="judul_buku">Judul Buku</label>
<input class="w3-input w3-border w3-animate-input" type="text" style="width:135px" 
name="judul" <?php echo (isset($_GET['id_buku'])) ?  "value = " . $res["judul_buku"] . "" : "value = '' "; ?> required><br><br>

<label for="judul_buku">Penulis</label>
<input class="w3-input w3-border w3-animate-input" type="text" style="width:135px"
name="penulis" <?php echo (isset($_GET['id_buku'])) ?  "value = " . $res["penulis"] . "" : "value = '' "; ?> required><br><br>

<label for="judul_buku">Penerbit</label>
<input class="w3-input w3-border w3-animate-input" type="text" style="width:135px"
name="penerbit" <?php echo (isset($_GET['id_buku'])) ?  "value = " . $res["penerbit"] . "" : "value = '' "; ?> required><br><br>

<label for="judul_buku">Tahun Terbit</label>
<input class="w3-input w3-border w3-animate-input" type="text" style="width:135px"
name="thnterbit" <?php echo (isset($_GET['id_buku'])) ?  "value = " . $res["tahun_terbit"] . "" : "value = '' "; ?> required><br><br>

<?php 
    if (isset($_GET['id_buku'])) {
        echo "<button type=\"submit\" class='btn btn-success' name=\"update\" >Edit</button>";
    }else {
        echo "<button type=\"submit\" name=\"submit\">Tambah</button>";   
    }
?>

<?php 
    endforeach; 
        } else {
            ?>
                <label for="judul_buku">Id Buku</label>
                <input class="w3-input w3-border w3-animate-input" type="text" style="width:135px"
                name="id_buku" <?php echo (isset($_GET['id_buku'])) ?  "value = " . $res["id_buku"] . "" : "value = '' "; ?> required><br><br>
                
                <label for="judul_buku">Judul Buku</label></td>
                <input class="w3-input w3-border w3-animate-input" type="text" style="width:135px"
                name="judul" <?php echo (isset($_GET['id_buku'])) ?  "value = " . $res["judul_buku"] . "" : "value = '' "; ?> required><br><br>
                
                <label for="judul_buku">Nama Penulis</label></td>
                <input class="w3-input w3-border w3-animate-input" type="text" style="width:135px"
                name="penulis" <?php echo (isset($_GET['id_buku'])) ?  "value = " . $res["penulis"] . "" : "value = '' "; ?> required><br><br>
            
                <label for="judul_buku">Penerbit</label></td>
                <input class="w3-input w3-border w3-animate-input" type="text" style="width:135px"
                name="penerbit" <?php echo (isset($_GET['id_buku'])) ?  "value = " . $res["penerbit"] . "" : "value = '' "; ?> required><br><br>
                
                <label for="judul_buku">Tahun Terbit</label></td>
                <input class="w3-input w3-border w3-animate-input" type="text" style="width:135px"
                name="thnterbit" <?php echo (isset($_GET['id_buku'])) ?  "value = " . $res["tahun_terbit"] . "" : "value = '' "; ?> required><br><br>
                
                <?php 
                    if (isset($_GET['id_buku'])) {
                        echo "<button type=\"submit\" name=\"update\">Edit</button>";
                    } else {
                        echo "<button type=\"submit\" class='btn btn-success' name=\"submit\">Tambah</button>";   
                    }
                ?>
       
        <?php } ?>
</form>

<?php
    if (isset($_POST['submit'])) {
        tambahBuku($_GET['id_buku'], $_POST['judul'], $_POST['penulis'], $_POST['penerbit'], $_POST['thnterbit']);
        
    }
    if (isset($_POST['tambah'])) {
        updateBuku($_POST['judul'], $_POST['penulis'], $_POST['penerbit'], $_POST['thnterbit']);
    }
?>

</div>

</body>
</html>