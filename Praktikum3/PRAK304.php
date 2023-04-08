<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prak304</title>
</head>
<body>
    <?php
    $link = 'https://www.freepnglogos.com/uploads/star-png/file-featured-article-star-svg-wikimedia-commons-8.png';
    $bintang = NULL;
    if($_SERVER["REQUEST_METHOD"] == "POST"): $bintang = $_POST['input'];
    endif;
    if(isset($_POST['up'])): $bintang += 1;
    elseif(isset($_POST['down'])): $bintang -= 1;
    endif;
    if(empty($bintang)) { ?>
        <form action="PRAK304.php" method="post">
            Jumlah Bintang : <input type="text" name="input"> </br>
            <input type="submit" name="submit" value="Submit">
        </form>
    <?php } ?>
    <?php if(!empty($bintang)){
        echo "Jumlah Bintang : $bintang "; ?>
        <br><br>
        <?php for( $i = 0; $i < $bintang; $i++ ) {
             echo "<img style='width:20px;' src='$link'>";
        } ?>
        <form action="PRAK304.php" method="post">
            <input type="text" name="input" value="<?= $bintang ?>" hidden>
            <input type="submit" name="up" value="Tambah">
            <input type="submit" name="down" value="Kurang">
        </form>
    <?php } ?>
</body>
</html>