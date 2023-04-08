<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prak303</title>
</head>
<body>
    <form method="POST" action="PRAK303.php">
        Batas bawah : <input type="text" name="bawah"><br>
        Batas atas : <input type="text" name="atas"><br>
        <input type="submit" name="submit" value="Cetak"><br><br>
    </form>
    <?php
    if(isset($_POST['submit'])){
        $bawah = $_POST['bawah'];
        $atas = $_POST['atas'];
        $link = 'https://www.freepnglogos.com/uploads/star-png/file-featured-article-star-svg-wikimedia-commons-8.png';
        do{
            if(($bawah+7)%5==0): echo"<img style='width:20px;' src='$link'>";
            else: echo "$bawah";
            endif;
            echo " ";
            $bawah++;
        }
        while($bawah<=$atas);  
    }
    ?>
</body>
</html>