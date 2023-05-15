<!DOCTYPE html>
<html>
<title>PRAK501</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
.mySlides {display:none;}
</style>

<body>

<div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large" onclick="w3_close()">&times; Close</button>
  <a href="Buku.php" class="w3-bar-item w3-button"><i class="fa fa-book"> Buku</i></a>
  <a href="Member.php" class="w3-bar-item w3-button"><i class="fa fa-male"> Member</i></a>
  <a href="Peminjaman.php" class="w3-bar-item w3-button"><i class="fa fa-id-card"> Peminjaman</i></a>
</div>

<div id="main">

<div class="w3-teal">
  <button id="openNav" class="w3-button w3-teal w3-xlarge" onclick="w3_open()">&#9776;</button>
  <div class="w3-container">
    <h1 align="center">SELAMAT DATANG DI HALAMAN KAMI</h1>
  </div>
</div>

<div class="w3-content w3-section" style="max-width:500px">
  <img class="mySlides" src="buku1.jpg" style="width:100%">
  <img class="mySlides" src="buku2.jpg" style="width:100%">
  <img class="mySlides" src="buku3.jpg" style="width:100%">
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>

<div class="w3-container w3-center">
<p>Kami menyediakan berbagai macam buku yang menarik untuk Anda baca!</p>
<p>Apabila Anda tertarik meminjam buku kami, Anda dapat melakukannya dengan menekan tombol berikut ini:</p>
<table align="center" width="50%">
  <tr>
    <td><a href="Buku.php"><i class="fa fa-book" style="font-size:120px;color:teal;text-shadow:2px 2px 4px #000000;"></i></a></td>
    <td><a href="Member.php"><i class="fa fa-male" style="font-size:120px;color:teal;text-shadow:2px 2px 4px #000000;"></i></a></td>
    <td><a href="Peminjaman.php"><i class="fa fa-id-card" style="font-size:120px;color:teal;text-shadow:2px 2px 4px #000000;"></i></a></td>
  </tr>
  <tr>
    <td><h4>BUKU</h4></td>
    <td><h4>MEMBER</h4></td>
    <td><h4>PEMINJAMAN</h4></td>
  </tr>
</table>

</div>

</div>

<script>
function w3_open() {
  document.getElementById("main").style.marginLeft = "25%";
  document.getElementById("mySidebar").style.width = "25%";
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("openNav").style.display = 'none';
}
function w3_close() {
  document.getElementById("main").style.marginLeft = "0%";
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("openNav").style.display = "inline-block";
}
</script>

</body>
</html>