<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK105</title>
    <style>
        table,th,td {
            border-style: solid;
            width: 100%;
        }
    </style>
</head>
<body>
    <?php
    $hp['P1'] = "Samsung Galaxy S22";
    $hp['P2'] = "Samsung Galaxy S22+";
    $hp['P3'] = "Samsung Galaxy A03";
    $hp['P4'] = "Samsung Galaxy Xcover 5";
    ?>
    <table>
        <tr>
            <th style= "background-color: #FF0000; padding: 10px"><?php echo "Daftar Smartphone Samsung"; ?></th>
        </tr>
        <tr>
            <td><?= $hp['P1']; ?></td>
        </tr>
        <tr>
            <td><?= $hp['P2']; ?></td>
        </tr>
        <tr>
            <td><?= $hp['P3']; ?></td>
        </tr>
        <tr>
            <td><?= $hp['P4']; ?></td>
        </tr>
    </table>
</body>
</html>
