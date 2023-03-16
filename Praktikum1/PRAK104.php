<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK104</title>
    <style>
        table,th,td {
            border-style: solid;
        }
        th {
            padding: 15px;
        }
    </style>
</head>
<body>
    <?php
    $hp = array("Samsung Galaxy S22","Samsung Galaxy S22+","Samsung Galaxy A03","Samsung Galaxy Xcover 5");
    ?>
    <table>
        <tr>
            <th><?php echo "Daftar Smartphone Samsung"; ?></th>
        </tr>
        <tr>
            <td><?php echo $hp[0]; ?></td>
        </tr>
        <tr>
            <td><?php echo $hp[1]; ?></td>
        </tr>
        <tr>
            <td><?php echo $hp[2]; ?></td>
        </tr>
        <tr>
            <td><?php echo $hp[3]; ?></td>
        </tr>
    </table>
</body>
</html>
