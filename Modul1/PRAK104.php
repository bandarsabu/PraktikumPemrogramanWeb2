<?php
$daftarSmartphone = array("Samsung Galaxy S22", "Samsung Galaxy S22+", "Samsung Galaxy A03", "Samsung Galaxy Xcover 5");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Modul 1</title>
    <style>
        table {
            color: black;
        }
        table, td {
            border: 1px solid;
        }
    </style>
</head>
<body>
    <table>
            <td><b>Daftar Smartphone Samsung</b></td>
        </tr>
        <?php foreach($daftarSmartphone as $ds) :  ?>
        <tr>
            <td><?= $ds; ?></td>
        </tr>
        <?php endforeach ?>
    </table>
</body>
</html>