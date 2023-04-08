<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prak302</title>
</head>
<body>
    <form method="POST" action="PRAK302.php">
        Tinggi : <input type="text" name="tinggi"><br>
        Alamat Gambar : <input type="url" name="link"><br>
        <input type="submit" name="submit" value="Cetak">
    </form>
    <?php
    if(isset($_POST['submit'])){
        $tinggi=$_POST['tinggi'];
        $link=$_POST['link'];
        $i=1;
        while($i<=$tinggi){
            for($j=1;$j<=$tinggi;$j++){
                if($j<$i): echo"<img style='width:25px; opacity:0;' src='$link'>";
                else: echo"<img style='width:25px;' src='$link'>";
                endif;
            }
            echo"<br>";
            $i++;
        }
    }
    ?>
</body>
</html>