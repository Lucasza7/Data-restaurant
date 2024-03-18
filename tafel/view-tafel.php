<?php
include 'tafel.php';
$tafels = new tafel($myDb);

$alles = $tafels->selectAlltafel()->fetchAll();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Overzicht Producten</h1>

    <table>
        <tr>
            <th>tafelnr</th>
            <th>bijzonderheden</th>
            <th>personen</th>
            <th colspan="2">Action</th>
        </tr>
        <tr>
            <?php foreach ($alles as $tafel){
                echo "<td>".$tafel['tafelnr']."</td>";
                echo "<td>".$tafel['bijzonderheden']."</td>";
                echo "<td>".$tafel['personen']."</td>";
                echo "<td><a href='edit.php?ID=".$tafel['tafelnr']."'>EDIT</a></td>";
            
            ?>
        </tr>
        <?php }?>
    </table>
</body>
</html>